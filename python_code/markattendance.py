import mysql.connector
from datetime import datetime
import time
from datetime import date





def marking_attendance_into_database(studentlist1, studentlist2, studentlist3, classname):
    set1 = set(classname)
    set2 = set(studentlist1)
    res = list(set1 - set2)
    print("In the attendance_marking file")
    conn = mysql.connector.connect(host="localhost", port="3306", user="root", password="", database="attendance")
    cursor = conn.cursor()
    today = date.today()
    strr = str(today)
    print(strr)
    sql = "DELETE FROM `studentdaywiseattendance` WHERE `date` = '"+strr+"'"
    cursor.execute(sql)
    for i in studentlist1:
        sql = "INSERT INTO `studentdaywiseattendance` (`studentid`, `date`, `hour1`) VALUES ('"+i+"', '"+strr+"' , 'present');"
        print(sql)
        cursor.execute(sql)
        sql = "INSERT INTO `"+i+"` values('"+strr+"', 'present');"
        cursor.execute(sql)
    
    for i in res:
        sql = "INSERT INTO `studentdaywiseattendance` (`studentid`, `date`, `hour1`) VALUES ('"+i+"', '"+strr+"' , 'absent');"
        cursor.execute(sql)
        sql = "INSERT INTO `"+i+"` values('"+strr+"', 'absent');"
        cursor.execute(sql)
    
    set2 = set(studentlist2)
    res = list(set1-set2)
 
    for i in studentlist2:
        sql = "UPDATE `studentdaywiseattendance` SET  `hour2` = 'present' where `studentid` = '"+i+"' and `date` = '"+strr+"'"
        cursor.execute(sql)
        sql = "INSERT INTO `"+i+"` values('"+strr+"', 'present');"
        cursor.execute(sql)
    
    for i in res:
        sql = "UPDATE `studentdaywiseattendance` SET  `hour2` = 'absent' where `studentid` = '"+i+"' and `date` = '"+strr+"'"
        cursor.execute(sql)
        sql = "INSERT INTO `"+i+"` values('"+strr+"', 'absent');"
        cursor.execute(sql)
    
    set2 = set(studentlist3)
    res = list(set1-set2)

    for i in studentlist3:
        sql = "UPDATE `studentdaywiseattendance` SET  `hour3` = 'present' where `studentid` = '"+i+"' and `date` = '"+strr+"'"
        cursor.execute(sql)
        sql = "INSERT INTO `"+i+"` values('"+strr+"', 'present');"
        cursor.execute(sql)
    
    for i in res:
        sql = "UPDATE `studentdaywiseattendance` SET  `hour3` = 'absent' where `studentid` = '"+i+"' and `date` = '"+strr+"'"
        cursor.execute(sql)
        sql = "INSERT INTO `"+i+"` values('"+strr+"', 'absent');"
        cursor.execute(sql)

    conn.commit()
    conn.close()



