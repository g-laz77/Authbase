import os
from webCrawaler.webCrawaler.spiders.miner import *
solr_path = "/usr/local/Cellar/solr/6.5.0/server/solr/"

def extract_data(pdf_name):
    #extract data using regex and dump into xml file
    data = pdfparser(pdf_name)
    #use above data for dumping
     
def post(xmlfile, collection):
    jar_file = solr_path + collection + "/post.jar"
    os.system("java -Dauto -Durl=http://localhost:8983/solr/"+collection+"/update -jar  " + jar_file + " " +xmlfile)

xm = input("Enter data file:")
collection = input("Enter Collection name:")
post(solr_path+collection+"/"+xm,collection)  