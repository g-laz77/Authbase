#from scrapy.contrib.linkextractors.sgml import SgmlLinkExtractor
from scrapy.spider import CrawlSpider, Rule
from scrapy.selector import Selector, HtmlXPathSelector
from webCrawaler.items import *
import re
from scrapy.linkextractors import LinkExtractor 
from scrapy.linkextractors.sgml import SgmlLinkExtractor
home = "http://goidirectory.gov.in/"
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
    start_urls = ['http://goidirectory.gov.in/index.php']
    #extract all links, and parse them using parse()
    rules = [
             Rule(SgmlLinkExtractor(allow=("^.*://[a-z]*.[a-z]*.gov.in"), unique = True, process_value=process_value, deny_domains=('mp3')))
            ]

    def parse(self, response):
        hxs = HtmlXPathSelector(response)
        titles = hxs.xpath('//div[@id="midcontainer"]')
        items = []
        for title in titles:
            
            #item["title"] = title.xpath(".//a/text()").extract()
            temp = title.xpath(".//a/@href").extract()
            
            for i in temp:
                print(i)
                item = sampleItem()
                reg1 = re.search(r"(.*.php)", i)
                reg2 = re.search(r"javascript:openChild\('(.*?)','(.*?)'\);", i)
                if reg2:
                    temp = reg2.group(1)
                    if re.match(r"(http://.*)", temp):
                        item["link"] = temp
                    else:
                        item["link"] = home + temp
                elif reg1:
                    
                    item["link"] = home + reg1.group(1)
                items.append(item)
        print(items)
        return(items)

    
    

            