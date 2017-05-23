#from scrapy.contrib.linkextractors.sgml import SgmlLinkExtractor
from scrapy.spider import CrawlSpider, Rule
from scrapy.selector import Selector
from webCrawaler.items import *
from scrapy.linkextractor import LinkExtractor

class MyGovSpider(CrawlSpider):
    name = "mygov_spider"
    allowed_domains = ['gov.in']
    start_urls = ['http://goidirectory.gov.in/index.php']
    #extract all links, and parse them using parse()
    rules = [
        Rule(
            LinkExtractor(
                canonicalize = True,
                unique = True,
            ),
            follow = True,
            callback = "parse_item",
        )
    ]

    def parse_item(self,response):
        collection = []
        coll = []
        links = LinkExtractor(canonicalize = True, unique = True).extract_links(response)
        for link in links:
            is_allowed = 0
            #dom = link.url.split(".com")[0] + ".com"
            for domain in self.allowed_domains:
                #print(dom)
                if domain in link.url:
                    is_allowed = 1
                    
            if is_allowed:
                item = sampleItem()
                item["to"] = link.url
                coll.append(link.url)
                collection.append(item)
        return collection
            