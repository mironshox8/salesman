<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products_db";

// MySQLga ulanish
$conn = new mysqli($servername, $username, $password, $dbname);

// Ulanish tekshiruvi
if ($conn->connect_error) {
    die("Ulanishda xatolik: " . $conn->connect_error);
}

// Har bir mahsulot uchun umumiy massani hisoblash
$sql = "SELECT mahsulot, SUM(massa) AS jami_ogirlik FROM sotuv GROUP BY mahsulot";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Mahsulot nomi</th><th>Skladdagi massa</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["mahsulot"] . "</td><td>" . $row["jami_ogirlik"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Ma'lumot topilmadi.";
}

$conn->close();
?>
