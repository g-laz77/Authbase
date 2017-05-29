import os
from miner import *
import csv
from xlrd import open_workbook
solr_path = "/usr/local/Cellar/solr/6.5.0/server/solr/"

def extract_data(file_name, file_url):
    #extract data using regex and dump into xml file
    if file_name[-4:] == ".pdf":
        data = pdfparser(file_name)
        for info in data:
            pan = re.match(".*([A-Z]{5}[0-9]{4}[A-Z])", info) #regex to match pan card details
            aadhaar = re.match(".*([0-9]{4} [0-9]{4} [0-9]{4})", info)  #regex to match aadhaar card details
            if pan and aadhaar:
                return {"type":"PAN/AADHAAR", "Number":pan, "url": file_url}
            if pan:
                return {"type":"PAN", "Number":pan, "url": file_url}
            if aadhaar:
                return {"type":"AADHAAR", "Number":pan, "url": file_url}
        return "Safe"   #No vulnerable information found

    elif file_name[-4:] == ".xls":
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
                post(filename, "samcoll")

def post(xmlfile, collection):
    jar_file = solr_path + collection + "/post.jar"
    os.system("java -Dauto -Durl=http://localhost:8983/solr/" +collection+ "/update -jar  " +jar_file+ " " +xmlfile)

xm = input("Enter data file:")
collection = input("Enter Collection name:")
post(solr_path+collection+"/"+xm,collection)  