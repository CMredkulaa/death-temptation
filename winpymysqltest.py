import pymysql

db = pymysql.connect(host = 'localhost',
		user = 'root',
		password = 'root',
		database = 'TEST')

cursor = db.cursor()
content = "abcdefge11"

sql = "insert into TEST(packet_contet) values ('%s')"%(content)

try:
	cursor.execute(sql)
	
except:
	db.rollback()


db.close()