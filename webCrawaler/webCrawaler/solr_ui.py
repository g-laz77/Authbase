from urllib.request import *
import simplejson 
  
def show_docs(collection):
    connection = urlopen('http://139.59.70.133:8983/solr/'+collection+'/select?fq=Type:Pancard%20or%20Type:Aadhaar&indent=on&q=*:*&wt=json')
    response = simplejson.load(connection)

    print(response['response']['numFound'], "documents found")

    for document in response['response']['docs']:
        print( document)

if __name__ == '__main__':
    show_docs("parser")