from urllib.request import *
import simplejson 
import json


def show_docs(collection,query):
    #querying for pancard details
    connection = urlopen('http://localhost:8984/solr/'+collection+'/select?&indent=on&q=text:/'+query+'/&wt=json')
    response = simplejson.load(connection)
    filename = open("details.txt","w")
    #print(response['response']['numFound'], "documents found")
    stir = ""
    for document in response['response']['docs']:
        print(document['id'])
        lines = open("vulner_url.txt","r+").read().split("\n")
        temp = 1
        for line in lines:
            if line == document['id']:
                temp = 0
        if temp:
            with open("vulner_url.txt","a+") as f:
                f.write(document["id"])
    filename.write(stir)
    filename.close()

if __name__ == '__main__':
    #inp = input("Enter regex: ")
    while 1:
        show_docs("techproducts","[A-Z]{5}[0-9]{4}[A-Z]")