import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="products_db"
)

mycursor = mydb.cursor()

sql = "INSERT INTO sale (mahsulot,massa,narxi) VALUES (%s,%s,%s)"
val = ("1005", "15","2000")
mycursor.execute(sql, val)

mydb.commit()

print(mycursor.rowcount, "record inserted.")
