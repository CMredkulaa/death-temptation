import time
from urllib import parse
import re
import pymysql
db = pymysql.connect(host = 'localhost',
		user = 'harry',
		password = '123456',
		database = 'TEST')

def insertIP(id,srcip,dt,username,password):
    cursor = db.cursor()
    sql = "replace into getip(id,srcip,dt,ip,payload) values ('%s','%s','%s','%s','%s')"%(id,srcip,dt,ip,payload)
    try:
        cursor.execute(sql)
        db.commit()
    except pymysql.Error as e:
        print("Insert error")
        print(e.args[0],e.args[1])
        db.rollback()



#getInfo
cursor = db.cursor()
sql = "select id,srcip,dt,packet_content,body from test where uri='/admin/IPHandle.php'"
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
        payload = ''.join(re.findall(r"IP=(.+?)&",body))
        payload = (parse.unquote(payload))
        ip = ''.join(re.findall(r"(?:[0-9]{1,3}\.){3}[0-9]{1,3}",payload))
        if(ip==''):
            ip = 'none'
        # print(ip)
        # print(payload)
        insertIP(id,srcip,dt,ip,payload)
    
   
        
db.close()
