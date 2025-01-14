<?php
ob_start();
require '../../action/baglan.php';

// Son eklenen veriyi çekme sorgusu
$stmt = $conn->prepare("SELECT * FROM about ORDER BY about_id DESC LIMIT 1");
$stmt->execute();
$result = $stmt->get_result();

$latestAbout = null;
if ($result->num_rows > 0) {
    $latestAbout = $result->fetch_assoc();
}

$conn->close();
