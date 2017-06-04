#from scrapy.contrib.linkextractors.sgml import SgmlLinkExtractor
from scrapy.spider import CrawlSpider, Rule
from scrapy.selector import Selector
from webCrawaler.items import *
import re
import requests
from solrdump import *
from scrapy import Request
from scrapy.linkextractors import LinkExtractor 
home = "http://goidirectory.gov.in/"
import os
import urllib.request
import shutil
import gzip
collection = []
proxies = {"http":"http://proxy.iiit.ac.in:8080",
           "https":"https://proxy.iiit.ac.in:8080"}


def process_value(value):   #process the javascript function of href
        exp1 = "javascript:openChild('sitecounter.php?id=11914','win2')"
        exp2 = ""
        m = re.search(r"javascript:openChild\('(.*?)','(.*?)'\);", value)
        if m:
            return home + m.group(1)
        m = re.search(r"(.*.php)", value)
        if m:
            return home + m.group(1)

class MyGovSpider(CrawlSpider):
    name = "mygov_spider"
    allowed_domains = ['gov.in']
    # start_urls = ['http://goidirectory.gov.in/']
    start_urls = []
    #extract all links, and parse them using parse() also only [gov.in] domain
    rules = [
             Rule(LinkExtractor(allow=("^.*://[a-z]*.[a-z]*.gov.in.*",".*.php.*"), unique = True, process_value=process_value, deny_domains=('mp3')))
            ]
    def __init__(self):
        k = open("url.txt","r")
        self.start_urls.append(str(k.read()))
        print(self.start_urls)

    def parse(self, response):
        url = response.url.split("/")
        htmlbody = response.body
        down_file = "website/"
        for i in url[-4:-1]:
            k = i.split(".")
            if i:
                for j in k:
                    down_file += j + "-"
        down_file += url[-1]
                
        with open(down_file[:-1],"wb") as f:
            f.write(htmlbody)
            f.close()

        hxs = Selector(response)
        titles = hxs.xpath('//body')
        items = []
        for title in titles: 
            #extract all links in the page
            temp = title.xpath("//a/@href").extract()
            for i in temp:
                # regex for the type of link present
                item = sampleItem()
                reg1 = re.search(r"(.*.php)", i)
                reg2 = re.search(r"javascript:openChild\('(.*?)','(.*?)'\);", i)
                reg3 = re.search(r"(.*gov.in.*)",i)
                
                if reg2:
                    temp = reg2.group(1)
                    if re.match(r"(http://.*)", temp):
                        item["link"] = temp
                        items.append(item) 
                    else:
                        if re.match(r"sitecounter.*",i):
                            l = re.match(r"(.*gov.in/).*",response.url).group(1)
                            item["link"] = l + reg2.group(1)
                            items.append(item)  
                    

                elif reg1:
                    if re.match(r"javascript.*",i) or re.match(r"http.*",i):
                        continue   
                    if re.match(r"\w*-*\w*.php",i):
                        l = re.match(r"(.*gov.in/).*",response.url).group(1)
                        if l:
                            item["link"] = l + reg1.group(1)
                    else:
                        item["link"] = response.url + reg1.group(1)
                    items.append(item)
                    

                elif reg3:
                    if re.match(r"https?:\/\/\w+.\w+.\w+\/.*gov.in.*",i) or re.match(r"https?:\/\/\w+.\w+\/.*gov.in.*",i):
                        continue
                    item["link"] = reg3.group(1)
                    items.append(item)
                    
        for item in items:
            if 'link' in item:                          
                reg4 = re.search(r".*[\.]?[ptdcox][sdlxo][vfcts][x]?$",str(item['link']))
                reg5 = re.search(r".*[\.]?[ajgp][pni][kefg][g]?$",str(item['link']))
                reg6 = re.search(r".*[\.]?[zrg][iza][pr]?$",str(item['link']))
                save_file = "files/"
                if reg4 or reg5:        #if link is a pdf
                    #resp = requests.get(item["link"], proxies = "")
                    for i in item["link"].split("/")[-4 :-1]:
                        k = i.split(".")
                        if i:
                            for j in k:
                                save_file += j + "-"
                    save_file += item["link"].split("/")[-1]
                    if save_file[-4] == '-':
                        save_file[-4] = '.'
                    with open("files_metadata.csv","a") as f:
                        f.write(str(item["link"])+","+save_file)
                        f.close()
                    #print(save_file)
                    with urllib.request.urlopen(item["link"]) as response, open(save_file, 'wb') as out_file:
                        shutil.copyfileobj(response, out_file)
                    #   make call to the pdf extractor and dump the data on solr
                    #extract_data(save_file, item["link"])  #Call to scan pdf                            
                
                    #print("OCR not implemented yet.")
                elif reg6:  #if zipfiles
                    print("Extract zip files here")
                else:
                    yield Request(item["link"], callback=self.parse)

        #print(items)
        return(items)
