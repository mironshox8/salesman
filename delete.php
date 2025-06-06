<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ulanish muvaffaqiyatsiz: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $id = intval($_POST["id"]);
    $sql = "DELETE FROM omborxona WHERE id = $id";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: yangi.php"); // O‘chirilgandan keyin asosiy sahifaga qaytarish
        exit();
    } else {
        echo "Xatolik: " . $conn->error;
    }
}

$conn->close();
?>
