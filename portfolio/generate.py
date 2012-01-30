#!/usr/bin/env python

from urllib2 import urlopen, quote
from markdown import markdown
import lxml.html
import json
import codecs
import re

works = json.loads(codecs.open('works.json', 'UTF-8').read())

def gettree(repo, path=None):
    siteroot = 'http://git.constantvzw.org'
    query = siteroot + '/?p=' + quote(repo) + ';a=tree;'
    if path:
        query = query + 'f=' + path
    
    z = lxml.html.parse(query).getroot()
    tree = []
    for y in z.cssselect('table.tree tr'):
        blob = {}
        blob['name'] = y.cssselect('td.list a')[0].text
        try:
            blob['link'] = siteroot + y.cssselect('td.link a')[2].attrib['href']
        except IndexError:
            blob['link'] = ''
        tree.append(blob)
    
    return tree

def update_work(repo):
    works[repo] = {}
    print "README", repo
    try:
        readme_link = [i['link'] for i in gettree(repo) if 'README' in i['name']][0]
        readme = urlopen(readme_link)
        # we could determine the encoding through the http headers,
        # but constant’s server sends the wrong encoding:
        readme = unicode(readme.read(), 'UTF-8')
        readme = readme.split("- - -")[0]
        works[repo]['body'] = markdown(readme)
    except IndexError:
        pass
    
    print "IMAGES", repo
    try:
        extension = re.compile("jpg|jpeg|png|gif", re.IGNORECASE)
        works[repo]['images'] = [i for i in gettree(repo,'iceberg') if i['link'] and extension.search(i['name'])]
    except IOError:
        pass
    

