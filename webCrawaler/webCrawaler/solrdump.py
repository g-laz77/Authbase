import os
#from webCrawaler.pdfparser import *
from pdfparser import *
from solr_ui import *
import csv
from xlrd import open_workbook
import shutil
import re

solr_path = "/usr/local/Cellar/solr/6.5.0/server/solr/"

def extract_data(file_name, file_url):
    #extract data using regex and dump into xml file
    if file_name[-4:] == ".pdf" or file_name[-4:] == ".txt":
        opt_file = open("output.csv", "w")
        opt_file.write("Type,Number,url\n")
        if file_name[-4:] == ".pdf":
            data = pdfparser(file_name)
        else:
            data = open(file_name,"w+").read()
        for info in data:
            pan = re.match(".*([A-Z]{5}[0-9]{4}[A-Z])", info) #regex to match pan card details
            aadhaar = re.match(".*([0-9]{4} [0-9]{4} [0-9]{4})", info)  #regex to match aadhaar card details
            if pan:
                opt_file.write("Pancard,"+str(pan.group(1))+","+str(file_url)+"\n")
            if aadhaar:
                opt_file.write("AAdhaar,"+str(pan.group(1))+","+str(file_url)+"\n")   
        opt_file.close()
        post("output.csv", "parser")
        os.remove("output.csv")

    elif file_name[-4:] == ".xls" or filename[-4:] == "xlsx":
        wb = open_workbook(file_name)
        for i in range(0,wb.nsheets):
            sheet = wb.sheet_by_index(i)
            os.mkdir("xlsdata")
            with open("xlsdata/%s.csv" %(sheet.name.replace(" ","")), "w") as file:
                writer = csv.writer(file, delimiter = ",")
                #print(sheet, sheet.name, sheet.ncols, sheet.nrows)
                header = [cell.value for cell in sheet.row(0)]
                writer.writerow(header)
                for row_idx in range(1, sheet.nrows):
                    row = [int(cell.value) if isinstance(cell.value, float) else cell.value for cell in sheet.row(row_idx)]
                    writer.writerow(row)
            for filename in os.listdir("xlsdata"): #index each of the csv files on solr
                post(filename, "parser")
            shutil.rmtree('xlsdata')

def post(xmlfile, collection):
    jar_file = solr_path + collection + "/post.jar"
    os.system("java -Dauto -Durl=http://localhost:8983/solr/" +collection+ "/update -jar  " +jar_file+ " " +xmlfile)

# xm = input("Enter data file:")
# collection = input("Enter Collection name:")
# post(solr_path+collection+"/"+xm,collection)  
if __name__ == '__main__':
    extract_data("Data.pdf", "http://suhan.com")
show_docs("parser")