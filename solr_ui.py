from urllib.request import *
import simplejson 
  
connection = urlopen('http://localhost:8983/solr/samcoll/select?indent=on&q=*:*&wt=json')
response = simplejson.load(connection)

print(response['response']['numFound'], "documents found")

for document in response['response']['docs']:
    print( document)