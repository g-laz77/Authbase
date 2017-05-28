#found this code online, in a blog.
# -*- coding: utf-8 -*-

from BeautifulSoup import BeautifulSoup
data = open("output.html",'r').read()
soup = BeautifulSoup(data)

html_body = soup.html.body
clean_body = []
page_dict = {}
page_list = []
page_count = 0

# Remove new lines and the boxes
for line in html_body:
	
	if (line != u'\n') and ("gray 1px solid" not in repr(line)):
		clean_body.append(line)

# Split the pages into their own dictionary lists
for line in clean_body:

	# Iterate the page if there's a new one, or else append the line
	if "Page" in repr(line):
		page_count += 1
	else:
		page_list.append(repr(line))


	# After the first page is accounted for, add the lines to the dictionary
	if ("Page" in repr(line)) and page_count > 1:
		page_dict['Page %s' % page_count] = page_list

for page in page_dict:
	print "THIS IS A NEW PAGE!"
	for item in page_dict[page]:
		print item