import time
import re
import pymysql
db = pymysql.connect(host = 'localhost',
		user = 'root',
		password = 'root',
		database = 'TEST')

def insertUP(id,srcip,dt,username,password):
    cursor = db.cursor()
    sql = "replace into getup(id,srcip,dt,username,password) values ('%s','%s','%s','%s','%s')"%(id,srcip,dt,username,password)
    try:
        cursor.execute(sql)
        db.commit()
    except pymysql.Error as e:
        print("Insert error")
        print(e.args[0],e.args[1])
        db.rollback()



#getInfo
cursor = db.cursor()
sql = "select id,srcip,dt,packet_content,body from test where uri='/welcome.php'"
try:
    cursor.execute(sql)
    result = cursor.fetchall()
    db.commit()
except:
    print("sql error")
    db.rollback()


for row in result:
    id = row[0]
    srcip = row[1]
    dt = row[2]
    packet_content = row[3]
    body = row[4]
    
    if(body!="none"):
        username = ''.join(re.findall(r"uname=(.+?)&",body))
        password = ''.join(re.findall(r"passwd=(.+)",body))
        insertUP(id,srcip,dt,username,password)
    
    # if(body.find('username')!= -1):
    #     insertUP(id,srcip,dt,pack)
   

db.close()