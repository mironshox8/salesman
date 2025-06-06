import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="products_db"
)

mycursor = mydb.cursor()

sql = "INSERT INTO mahsulotlar (mahsulot_nomi,unical_id) VALUES (%s,%s)"
val = ("uzum", "1016")
mycursor.execute(sql, val)

mydb.commit()

print(mycursor.rowcount, "Bazaga yozildi.")
