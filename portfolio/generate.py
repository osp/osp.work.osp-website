#!/usr/bin/env python

from urllib2 import urlopen, quote
from markdown import markdown
import unicodedata
import lxml.html
import json
import codecs
import re

works = json.loads(codecs.open('works.json', 'UTF-8').read())

def slugify(value):
    value = unicodedata.normalize('NFKD', value).encode('ascii', 'ignore')
    value = re.sub('[^\w\s-]', '', value).strip().lower()
    return re.sub('[-\s]+', '-', value)

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

def update_work(repo, date=""):
    if repo not in works:
        works[repo] = {}
    print "README", repo
    try:
        readme_link = [i['link'] for i in gettree(repo) if 'README' in i['name']][0]
        readme = urlopen(readme_link)
        # we could determine the encoding through the http headers,
        # but constant’s server sends the wrong encoding:
        readme = unicode(readme.read(), 'UTF-8')
        readme = readme.split("- - -")[0]
        works[repo]['name'] = readme.splitlines()[0]
        works[repo]['body'] = markdown(readme)
        works[repo]['date'] = date
    except IndexError:
        pass
    
    print "IMAGES", repo
    try:
        extension = re.compile("jpg|jpeg|png|gif", re.IGNORECASE)
        works[repo]['images'] = [i for i in gettree(repo,'iceberg') if i['link'] and extension.search(i['name'])]
    except IOError:
        pass
    

def write():
    f = codecs.open('works.json','w','UTF-8')
    f.write(json.dumps(works, indent=2, ensure_ascii=False))