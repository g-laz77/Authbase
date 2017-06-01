from urllib.request import *
import simplejson 
import json


def show_docs(collection):
    connection = urlopen('http://localhost:8983/solr/'+collection+'/select?&indent=on&q=*:*&wt=json')
    response = simplejson.load(connection)
    filename = open("details.txt","w")
    #print(response)
    #print(response['response']['numFound'], "documents found")
    stir = ""
    for document in response['response']['docs']:
        #temp = json.loads(document)
        #stir += document['url'][0]+"\t\t"+document['Type'][0]+"\n"
        print(document)

    filename.write(stir)
    filename.close()

if __name__ == '__main__':
    show_docs("parser")