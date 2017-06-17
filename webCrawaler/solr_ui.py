from urllib.request import *
import simplejson 
import json
import sleep


def show_docs(collection,query,typ):
    #querying for pancard details
    connection = urlopen('http://localhost:8984/solr/'+collection+'/select?&indent=on&q=text:/'+query+'/&wt=json')
    response = simplejson.load(connection)
    filename = open("details.txt","w")
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
                f.write(document["id"])
    filename.write(stir)
    filename.close()

if __name__ == '__main__':
    while 1:
        show_docs("techproducts","[A-Z]{5}[0-9]{4}[A-Z]","pancard") #pancard
        show_docs("techproducts","[0-9]{4}\ [0-9]{4}\ [0-9]{4}","aadhaar") #aadhaar 
        show_docs("techproducts","[A-Z]{3}[0-9]{7}","voterid") #voterid
        show_docs("booster","[A-Z]{5}[0-9]{4}[A-Z]","pancard") #pancard
        show_docs("booster","[0-9]{4}\ [0-9]{4}\ [0-9]{4}","aadhaar") #aadhaar 
        show_docs("booster","[A-Z]{3}[0-9]{7}","voterid") #voterid