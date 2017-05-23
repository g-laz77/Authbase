#from scrapy.contrib.linkextractors.sgml import SgmlLinkExtractor
from scrapy.contrib.spider import CrawlSpider, Rule
from scrapy.selector import Selector
from webCrawaler.items import *
from scrapy.linkextractor import LinkExtractor

class MyGovSpider(CrawlSpider):
    name = "mygov_spideeer"
    allowed_domains = ["gov.in"]
    start_urls = ['http://goidirectory.gov.in/index.php']

    def parse(self, response):
        titles = response.xpath("//form/div/div/div/ul/li")
        collection = []
        home_url = "http://goidirectory.gov.in/"
        for title in titles:
            item = sampleItem()
            item["title"] = title.xpath("a/@title").extract()
            temp = title.xpath("a/@href").extract()
            page = ''.join(temp)
            item["link"] = home_url + page
            collection.append(item)
        return collection