import mysql.connector
import sqlite3
from sendemail import sendemail
def getemail():
    connection = mysql.connector.connect(host='localhost',username='root',password='',database='404_found')

    cursor= connection.cursor()

    str1 = "select email from student where department = '"

    cursor.execute("""
    select department from sendmail
    """)

    str2 = cursor.fetchone()
    str3 = "' and semester = "

    cursor.execute("""
    select semester from sendmail
    """)

    str4 = cursor.fetchone()

    str5 = " and batch = '"

    cursor.execute("""
    select batch from sendmail
    """)

    str6 = cursor.fetchone()
    str10 = str1+str2[0]+str3+str(str4[0])+str5+str6[0]+"'"
    #print(str10)

    cursor.execute("""
    select link from sendmail
    """)

    link = cursor.fetchone()[0]
    # print(link);
    return str10,link;

# getemail()

