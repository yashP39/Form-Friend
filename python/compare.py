import mysql.connector
import sqlite3
from sample import get_email_list
import gspread
from oauth2client.service_account import ServiceAccountCredentials
from sendemail import sendemail

def compare_emails(l1, l2):
    set1 = set(l1)
    set2 = set(l2)
    not_common_emails = list(set1.symmetric_difference(set2))
    return not_common_emails

connection = mysql.connector.connect(host='localhost',username='root',password='',database='404_found')

cursor= connection.cursor()

cursor.execute("""
select email from currentuser
""")

sender = cursor.fetchone()[0]

cursor.execute("""
select faculty.apppassword from faculty cross join currentuser on faculty.email=currentuser.email
""")

apppassword = cursor.fetchone()[0]

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
mysheet = myclient.open("exp").worksheet('Sheet1')
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
    sendemail(sender,i,apppassword,subject,link,msg)
    # print(i)