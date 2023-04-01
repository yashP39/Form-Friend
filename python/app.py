from flask_restful import Api
import json
import urllib.request
from flask import Flask, request, redirect, jsonify, make_response, send_file,render_template
from flask_cors import CORS
import mysql.connector
from flask_cors import CORS
import sqlite3
from sendemail import sendemail
from getmail import getemail
from sample import get_email_list
import gspread
from oauth2client.service_account import ServiceAccountCredentials
from sendemail import sendemail

app = Flask(__name__)
CORS(app, supports_credentials=True)
# app.config['CORS_HEADERS'] = 'Content-Type'

def compare_emails(l1, l2):
    set1 = set(l1)
    set2 = set(l2)
    not_common_emails = list(set1.symmetric_difference(set2))
    return not_common_emails

@app.route('/hello', methods=['GET'])
def hello():
    resp = jsonify({'message': 'Hello'})
    resp.status_code = 200
    return resp

@app.route('/email', methods=['GET'])
def email():
    connection = mysql.connector.connect(host='localhost',username='root',password='',database='404_found')

    cursor= connection.cursor()

    query,link = getemail()

    cursor.execute(query)

    # reciever = cursor.fetchone()[0]
    # print(reciever)

    items = cursor.fetchall()
    list=[]
    for item in items:
        #int(item[0])
        list.append(item[0])

    #print(list)

    cursor.execute("""
    select firstname from faculty cross join currentuser on faculty.email=currentuser.email
    """)
    
    firstname = cursor.fetchone()[0]
    
    cursor.execute("""
    select lastname from faculty cross join currentuser on faculty.email=currentuser.email
    """)

    lastname = cursor.fetchone()[0]

    name = firstname+" "+lastname
    # print(name)

    # print(sender)

    # cursor.execute("""
    # select faculty.apppassword from faculty cross join currentuser on faculty.email=currentuser.email
    # """)

    # apppassword = cursor.fetchone()[0]

    cursor.execute("""
    select msg from sendmail
    """)

    msg = cursor.fetchone()[0]
    # msg = "fhharerhfhmfgh"
    #print(apppass)
    subject = "new form"
    for i in list:
        sendemail(i,subject,link,msg,name)
        # print(i)

    # cursor.execute("""
    # delete from sendmail where 1=1
    # """)

    # cursor.execute("""
    # delete from currentuser where 1=1
    # """)


    connection.commit()

    connection.close()
    resp = jsonify("Success")
    resp.status_code = 200
    return resp
    #sendemail(sender=sender,reciever=reciever,apppass=apppass)

@app.route('/reminder', methods=['GET'])
def reminder():
    connection = mysql.connector.connect(host='localhost',username='root',password='',database='404_found')

    cursor= connection.cursor()

    cursor.execute("""
    select firstname from faculty cross join currentuser on faculty.email=currentuser.email
    """)
    
    firstname = cursor.fetchone()[0]
    
    cursor.execute("""
    select lastname from faculty cross join currentuser on faculty.email=currentuser.email
    """)

    lastname = cursor.fetchone()[0]

    name = firstname+" "+lastname
    # print(name)

    # s1 = 'select firstname,lastname from faculty crossjoin currentuser on faculty.email=currentuser.email'

    # cursor.execute("""
    # select faculty.apppassword from faculty cross join currentuser on faculty.email=currentuser.email
    # """)

    # apppassword = cursor.fetchone()[0]

    str1 = "select email from student where department = '"

    cursor.execute("""
    select department from sendreminder
    """)

    str2 = cursor.fetchone()
    str3 = "' and semester = "

    cursor.execute("""
    select semester from sendreminder
    """)

    str4 = cursor.fetchone()

    str5 = " and batch = '"

    cursor.execute("""
    select batch from sendreminder
    """)

    str6 = cursor.fetchone()
    str10 = str1+str2[0]+str3+str(str4[0])+str5+str6[0]+"'"

    cursor.execute("""
    select link from sendreminder
    """)

    link = cursor.fetchone()[0]
        # print(link);
    cursor.execute(str10)

    # reciever = cursor.fetchone()[0]
    # print(reciever)

    items = cursor.fetchall()
    l1=[]
    for item in items:
        #int(item[0])
        l1.append(item[0])
    # print(l1)
    myscope = ['https://spreadsheets.google.com/feeds', 'https://www.googleapis.com/auth/drive']

    mycreds = ServiceAccountCredentials.from_json_keyfile_name('data-starlight-382203-dca72b072e7d.json', myscope)

    myclient = gspread.authorize(mycreds)

    cursor.execute("""
    select googlesheet from sendreminder
    """)

    sh1 = cursor.fetchone()[0]
    
    cursor.execute("""
    select subsheet from sendreminder
    """)

    sh2 = cursor.fetchone()[0]

    mysheet = myclient.open(sh1).worksheet(sh2)
    # l1 = ["e1@example.com", "e2@example.com", "e3@example.com"]
    l2 = get_email_list(mysheet)
    # print(l2)
    l3 = compare_emails(l1, l2)
    #print(l3)

    cursor.execute("""
    select msg from sendreminder
    """)

    msg = cursor.fetchone()[0]

    subject = "Reminder"
    for i in l3:
        sendemail(i,subject,link,msg,name)
        # print(i)
    connection.commit()

    connection.close()
    # print(l2)
    # print(l3)
    # print("success")
    respe = jsonify("success")
    respe.status_code = 200
    return render_template('student_home.html')


@app.route('/fup', methods=['GET'])
def fup():
    connection = mysql.connector.connect(host='localhost',username='root',password='',database='404_found')

    cursor= connection.cursor()

    # cursor.execute("""
    # select email from currentuser
    # """)

    # sender = cursor.fetchone()[0]

    # cursor.execute("""
    # select faculty.apppassword from faculty cross join currentuser on faculty.email=currentuser.email
    # """)

    # apppassword = cursor.fetchone()[0]

    str1 = "select email from student where department = '"

    cursor.execute("""
    select department from sendreminder
    """)

    str2 = cursor.fetchone()
    str3 = "' and semester = "

    cursor.execute("""
    select semester from sendreminder
    """)

    str4 = cursor.fetchone()

    str5 = " and batch = '"

    cursor.execute("""
    select batch from sendreminder
    """)

    str6 = cursor.fetchone()
    str10 = str1+str2[0]+str3+str(str4[0])+str5+str6[0]+"'"

    # cursor.execute("""
    # select link from sendreminder
    # """)

    # link = cursor.fetchone()[0]
        # print(link);
    cursor.execute(str10)

    # reciever = cursor.fetchone()[0]
    # print(reciever)

    items = cursor.fetchall()
    l1=[]
    for item in items:
        #int(item[0])
        l1.append(item[0])
    # print(l1)
    myscope = ['https://spreadsheets.google.com/feeds', 'https://www.googleapis.com/auth/drive']

    mycreds = ServiceAccountCredentials.from_json_keyfile_name('data-starlight-382203-dca72b072e7d.json', myscope)

    myclient = gspread.authorize(mycreds)

    cursor.execute("""
    select googlesheet from sendreminder
    """)

    sh1 = cursor.fetchone()[0]
    
    cursor.execute("""
    select subsheet from sendreminder
    """)

    sh2 = cursor.fetchone()[0]

    mysheet = myclient.open(sh1).worksheet(sh2)
    # l1 = ["e1@example.com", "e2@example.com", "e3@example.com"]
    l2 = get_email_list(mysheet)
    # print(l2)
    l3 = compare_emails(l1, l2)
    # print(l3)

    # cursor.execute("""
    # select msg from sendreminder
    # """)

    # msg = cursor.fetchone()[0]

    # subject = "Reminder"
    
    connection.commit()
    connection.close()
    # print(l2)
    print(l3)
    print("success")
    respe = jsonify(l3)
    respe.status_code = 200
    return respe



if __name__ == "__main__":
    app = Flask(__name__)
    cors = CORS(app, resources={"*": {"origins": "*"}})
    # app.run(host="0.0.0.0")
    app.run(host='127.0.0.1', port=8080, debug=True)