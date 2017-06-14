import os
import urllib.request
import shutil
import gzip
import zipfile
lines = open("hit_urls.txt",'r+').read().split('\n')
temp = 0
for line in lines:
    
    if "https://community.data.gov" == line:
        temp = 1
        break
if not temp:
    with open("hit_urls.txt","a+") as f:
        f.write("added"+"\n")