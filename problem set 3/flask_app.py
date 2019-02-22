from flask import Flask, render_template, request, json, redirect, session
from flask import Markup
import requests

app = Flask(__name__)
app.config["DEBUG"] = False

@app.route("/")
def index():
    return render_template('index.html')

@app.route("/table")
def table():
    headers = {
        'Authorization': 'Bearer keytLf7m73sOFf472',
    }

    params = (
        ('maxRecords', '25'),

    )

    r = requests.get('https://api.airtable.com/v0/appnwjFd0dErUZ6mb/table?api_key=keytLf7m73sOFf472&sortField=_createdTime&sortDirection=desc', headers=headers, params=params)
    dict3 = r.json()
    dict4 = {}
    dataset = []
    for i in dict3['records']:
         dict4 = i['fields']
         del dict4["user_login"]
         del dict4["membership_level"]
         del dict4["id"]
         del dict4["user_id"]
         del dict4["rollup_2"]
         dataset.append(dict4)
    return render_template('flask_table.html', entries=dataset)

@app.route("/chart")
def chart():
    headers = {
        'Authorization': 'Bearer keytLf7m73sOFf472',
    }

    params = (
        ('view', 'Grid view'),
    )

    r = requests.get('https://api.airtable.com/v0/appnwjFd0dErUZ6mb/rollup?api_key=keytLf7m73sOFf472&sortField=_createdTime&sortDirection=desc', headers=headers, params=params)
    dict1 = r.json()
    dict2 = {}
    dataset = []
    name_list = []
    total_credits_list = []
    for i in dict1['records']:
         dict2 = i['fields']
         dataset.append(dict2)
    for item in dataset:
        name_list.append(item.get('Name'))
        total_credits_list.append(item.get('total_credits'))
    return render_template('flask_chart.html', entries = zip(name_list, total_credits_list))

@app.route("/chart2")
def chart2():
    headers = {
        'Authorization': 'Bearer keytLf7m73sOFf472',
    }

    params = (
        ('view', 'Grid view'),
    )

    r = requests.get('https://api.airtable.com/v0/appnwjFd0dErUZ6mb/activity?api_key=keytLf7m73sOFf472&sortField=_createdTime&sortDirection=desc', headers=headers, params=params)
    dict1 = r.json()
    dict2 = {}
    dataset = []
    name_list = []
    total_credits_list = []
    for i in dict1['records']:
         dict2 = i['fields']
         dataset.append(dict2)
    for item in dataset:
        name_list.append(item.get('Name'))
        total_credits_list.append(item.get('aggregated_points'))
    return render_template('flask_chart2.html', entries = zip(name_list, total_credits_list))
