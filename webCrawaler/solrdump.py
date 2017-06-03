import os
# from webCrawaler.pdfparser import *
from pdfparser import *
# from webCrawaler.solr_ui import *
from solr_ui import *

import csv
from xlrd import open_workbook
import shutil
import re

jar_file = "/usr/local/Cellar/solr/6.5.0/bin/post -c "
counter = 0
port = 8984

def post(filename):
    #jar_file = solr_path + collection + "/post.jar"
    if filename[-4:] == ".pdf" or filename[-4:] == ".xls" or filename[-5:] == ".xlsx" or filename[-5:] == "docx"
        or filename[-4:] == "doc":
        collection = "techproducts"
        os.system(jar_file + collection + " " + filename + " -params literal.id=" + counter+ " -p "+port)
    elif filename[-4:] == ".csv" or filename[-4:] == ".xml" or filename[-4:] == ".json":
        collection = "booster"
        os.system(jar_file + collection + " " + filename)
    #show_docs("parser")
 
if __name__ == '__main__':

    #extract_data("Data.pdf", "http://suhan.com")
    inp = input("Enter the name of the file to be dumped:")
    coll = input("Enter the name of the collection:")
    post(inp,coll)
    #extract_data(inp,"http://testing.com/")
    #show_docs("boost")


# def extract_data(file_name, file_url):
#     #extract data using regex and dump into xml file
#     if file_name[-4:] == ".pdf" or file_name[-4:] == ".txt":
        
#         # opt_file.write("Type,Number,url\n")
#         # if file_name[-4:] == ".pdf":
#         #     data = pdfparser(file_name)
#         #     file_name = file_name[:-3]+"txt"
#         #     opt_file = open(file_name, "w")
#         #     for info in data:
#         #         opt_file.write(info)
#         #     opt_file.close()
        
#         post(file_name, "boost")
        

#     elif file_name[-4:] == ".xls" or file_name[-4:] == "xlsx":
#         wb = open_workbook(file_name)
#         for i in range(0,wb.nsheets):
#             sheet = wb.sheet_by_index(i)
#             #os.mkdir("xlsdata"
#             with open("output.csv", "w") as file:
#                 writer = csv.writer(file, delimiter = ",")
#                 #print(sheet, sheet.name, sheet.ncols, sheet.nrows)
#                 header = [cell.value for cell in sheet.row(0)]
#                 writer.writerow(header)
#                 for row_idx in range(1, sheet.nrows):
#                     row = [int(cell.value) if isinstance(cell.value, float) else cell.value for cell in sheet.row(row_idx)]
#                     writer.writerow(row)
#             #for filename in os.listdir("xlsdata"): #index each of the csv files on solr
#             post("output.csv", "boost")
#             #shutil.rmtree('xlsdata')

