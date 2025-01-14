<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kullanicidb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Veritabanına bağlantı hatası: " . $conn->connect_error);
}
