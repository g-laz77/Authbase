import os
from pdfparser import *
from solr_ui import *
import csv
from xlrd import open_workbook
import shutil
import re

jar_file = "/usr/local/Cellar/solr/6.5.0/bin/post -c "
counter = 0
pdf_port = "8984"

def post(filename,url):
    #jar_file = solr_path + collection + "/post.jar"
    if filename[-4:] == ".pdf" or filename[-4:] == ".xls" or filename[-5:] == ".xlsx" or filename[-5:] == "docx" or filename[-4:] == "doc":
        collection = "techproducts"
        os.system(jar_file + collection + " " + filename + " -params literal.id=\"" + url+ "\" -p "+pdf_port)
    elif filename[-4:] == ".csv" or filename[-4:] == ".xml" or filename[-4:] == ".json":
        collection = "booster"
        os.system(jar_file + collection + " " + filename)
    #show_docs("parser")
 
if __name__ == '__main__':

    # inp = input("Enter the name of the file to be dumped:")
    # coll = input("Enter the name of the collection:")
    # post(inp,coll)
    for filename in os.listdir("files"):
        with open('files_metadata.csv', 'r') as f:
            reader = csv.reader(f)
            for row in reader:
                post("files/"+row[1],row[0])


