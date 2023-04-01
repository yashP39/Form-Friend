import mysql.connector
import sqlite3
from sendemail import sendemail
from getmail import getemail

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
select email from currentuser
""")

sender = cursor.fetchone()[0]
# print(sender)

cursor.execute("""
select faculty.apppassword from faculty cross join currentuser on faculty.email=currentuser.email
""")

apppassword = cursor.fetchone()[0]

cursor.execute("""
select msg from sendmail
""")

msg = cursor.fetchone()[0]
# msg = "fhharerhfhmfgh"
#print(apppass)
subject = "new form"
for i in list:
    sendemail(sender,i,apppassword,subject,link,msg)
    # print(i)

# cursor.execute("""
# delete from sendmail where 1=1
# """)

# cursor.execute("""
# delete from currentuser where 1=1
# """)


connection.commit()

connection.close()

#sendemail(sender=sender,reciever=reciever,apppass=apppass)
