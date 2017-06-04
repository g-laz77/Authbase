from urllib.request import *
import simplejson 
import json


def show_docs(collection):
    connection = urlopen('http://localhost:8984/solr/'+collection+'/select?&indent=on&q=text:/[A-Z]{5}[0-9]{4}[A-Z]/&wt=json')
    response = simplejson.load(connection)
    filename = open("details.txt","w")
    #print(response)
    #print(response['response']['numFound'], "documents found")
    stir = ""
    for document in response['response']['docs']:
        #temp = json.loads(document)
        #stir += document['url'][0]+"\t\t"+document['Type'][0]+"\n"
        print(document['id'],document['content'])

    filename.write(stir)
    filename.close()

if __name__ == '__main__':
    show_docs("techproducts")