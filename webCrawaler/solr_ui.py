from urllib.request import *
import simplejson 
import json
import csv
import time

def show_docs(collection,query,typ):
    #querying for pancard details
    print('http://localhost:8984/solr/'+collection+'/select?&indent=on&q=text:/'+query+'/&wt=json')
    try:
        connection = urlopen('http://localhost:8984/solr/'+collection+'/select?&indent=on&q=text:/'+query+'/&wt=json')
        response = simplejson.load(connection)
        #print(response)
        if response['response']['numFound'] == 0:
            return
        stir = ""
        for document in response['response']['docs']:
            print(document['id'])
            lines = open(typ+"_url.txt","r+").read().split("\n")
            temp = 1
            for line in lines:
                if line == document['id']:
                    temp = 0
            if temp:
                with open(typ+"_url.txt","a+") as f:
                    print(document['id'])
                    f.write(document["id"])
    except:
        return
    

if __name__ == '__main__':
    with open('regex.csv', 'r') as f:
        reader = csv.reader(f)
        for row in reader:
            open(row[0].lower()+'_url.txt', 'w').close()

    while 1:
        with open('regex.csv', 'r') as f:
            reader = csv.reader(f)
            for row in reader:
                show_docs("techproducts",row[1],row[0].lower()) #pancard
                show_docs("booster",row[1],row[0].lower()) #pancard
                time.sleep(10)