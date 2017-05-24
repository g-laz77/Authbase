#from scrapy.contrib.linkextractors.sgml import SgmlLinkExtractor
from scrapy.spider import CrawlSpider, Rule
from scrapy.selector import Selector, HtmlXPathSelector
from webCrawaler.items import *
import re
from scrapy import Request
from scrapy.linkextractors import LinkExtractor 
home = "http://goidirectory.gov.in/"
import os
collection = []

def process_value(value):
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
    start_urls = ['http://goidirectory.gov.in/index.php/']
    #extract all links, and parse them using parse()
    rules = [
             Rule(LinkExtractor(allow=("^.*://[a-z]*.[a-z]*.gov.in.*",".*.php.*"), unique = True, process_value=process_value, deny_domains=('mp3')))
            ]

    def parse(self, response):
        hxs = HtmlXPathSelector(response)
        titles = hxs.xpath('//body')
        filename = open("results",'a')
        items = []
        for title in titles: 
            #item["title"] = title.xpath(".//a/text()").extract()
            temp = title.xpath("//a/@href").extract()
            for i in temp:
                #print(i)
                filename.write(i)
                item = sampleItem()
                reg1 = re.search(r"(.*.php)", i)
                reg2 = re.search(r"javascript:openChild\('(.*?)','(.*?)'\);", i)
                reg3 = re.search(r"(.*gov.in.*)",i)
                if reg2:
                    temp = reg2.group(1)
                    if re.match(r"(http://.*)", temp):
                        item["link"] = temp
                        items.append(item)
                        yield Request(item["link"], callback=self.parse)
                    else:
                        item["link"] = response.url + temp
                        items.append(item)
                        yield Request(item["link"], callback=self.parse)
                elif reg1:
                    if re.match(r"javascript.*",i) or re.match(r"http.*",i):
                        continue   
                    item["link"] = response.url + reg1.group(1)
                    items.append(item)
                    yield Request(item["link"], callback=self.parse)
                elif reg3:
                    if re.match(r"https?:\/\/\w+.\w+.\w+\/.*gov.in.*",i) or re.match(r"https?:\/\/\w+.\w+\/.*gov.in.*",i):
                        continue
                    item["link"] = reg3.group(1)
                    items.append(item)
                    yield Request(item["link"], callback=self.parse)

        #print(items)
        return(items)
