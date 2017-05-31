from urllib.request import *
import simplejson 
import json

  
def show_docs(collection):
    connection = urlopen('http://139.59.70.133:8983/solr/'+collection+'/select?fq=Type:Pancard%20or%20Type:Aadhaar&indent=on&q=*:*&wt=json')
    response = simplejson.load(connection)
    filename = open("details.txt","a")

    #print(response['response']['numFound'], "documents found")
    stir = ""
    for document in response['response']['docs']:
        #temp = json.loads(document)
        stir += document['url'][0]+"\t\t"+document['Type'][0]+"\n"

    filename.write(stir)
    filename.close()

if __name__ == '__main__':
    show_docs("parser")