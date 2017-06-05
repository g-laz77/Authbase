from urllib.request import *
import simplejson 
import json


def show_docs(collection):
    #querying for pancard details
    connection = urlopen('http://localhost:8984/solr/'+collection+'/select?&indent=on&q=text:/[A-Z]{5}[0-9]{4}[A-Z]/&wt=json')
    response = simplejson.load(connection)
    filename = open("details.txt","w")
    #print(response)
    #print(response['response']['numFound'], "documents found")
    stir = ""
    for document in response['response']['docs']:
        print(document['id'],document['content'])

    filename.write(stir)
    filename.close()

if __name__ == '__main__':
    show_docs("techproducts")