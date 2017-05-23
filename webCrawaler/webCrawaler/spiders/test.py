#from scrapy.contrib.linkextractors.sgml import SgmlLinkExtractor
from scrapy.spider import CrawlSpider, Rule
from scrapy.selector import Selector
from webCrawaler.items import *
from scrapy.linkextractor import LinkExtractor

class MyGovSpider(CrawlSpider):
    name = "mygov_spider"
    allowed_domains = ["gov.in"]
    start_urls = ['http://goidirectory.gov.in/index.php']
    
    #extract all links, and parse them using parse()
    rules = [
        Rule(
            LinkExtractor(
                canonicalize=True,
                unique=True
            ),
            follow=True,
            callback="parse"
        )
    ]

    def parse(self,response):
        collection = []
        links = LinkExtractor(canonicalize=True, unique=True).extract_links(response)
        for link in links:
            print(link)