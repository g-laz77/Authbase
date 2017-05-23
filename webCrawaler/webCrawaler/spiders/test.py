import scrapy
from scrapy.spider import BaseSpider
from scrapy.selector import Selector
from webCrawaler.items import *

class MyGovSpider(BaseSpider):
    name = "mygov_spider"
    allowed_domains = ["gov.in"]
    start_urls = ['http://goidirectory.gov.in/index.php']

    def parse(self, response):
        titles = response.xpath("//form/div/div/div/ul/li")
        collection = []
        url = "http://goidirectory.gov.in/"
        for title in titles:
            item = sampleItem()
            item["title"] = title.xpath("a/@title").extract()
            k = title.xpath("a/@href").extract()
            l = ''.join(k)
            item["link"] = url + l
            collection.append(item)
        return collection