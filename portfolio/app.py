from flask import Flask, request, render_template, send_file, make_response
import os
import json
import codecs

app = Flask(__name__)

works = json.loads(codecs.open('works.json', 'UTF-8').read())
sorted_works = {}
for i in works.keys():
    a = works[i]
    a['slug'] = i
    a['link'] = i.replace('git','html')
    try:
        sorted_works[a['date']].append(a)
    except KeyError:
        sorted_works[a['date']] = []
        sorted_works[a['date']].append(a)

really_sorted_works = []
for i in sorted(list(set(sorted_works.keys())), reverse=True):
    really_sorted_works.append({ 'year': i, 'works' : sorted_works[i]})

@app.route("/<slug>.html")
def display(slug):
    work = None
    if slug:
        if '.git' in slug:
            work = works[slug]
        else:
            work = works[slug + '.git']
    return render_template('index.html', work=work, works=really_sorted_works)

@app.route("/")
def hello():
    return display(None)

@app.route("/generate")
def make():
    for i in works.keys():
        with codecs.open(os.path.join(os.getcwd(), 'public',   i.replace('.git','.html')), 'w', 'UTF-8') as f:
            f.write(display(i))
    with codecs.open(os.path.join(os.getcwd(), 'public', 'index.html'), 'w', 'UTF-8') as f:
        f.write(hello())
    return "succesful"

if __name__ == "__main__":
    app.run(debug=True)
