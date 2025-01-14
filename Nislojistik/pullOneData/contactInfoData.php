<?php
ob_start();
require '../../action/baglan.php';

// Son eklenen veriyi çekme sorgusu
$stmt = $conn->prepare("SELECT * FROM contactinfo ORDER BY contactInfo_Id DESC LIMIT 1");
$stmt->execute();
$result = $stmt->get_result();

$latestContactInfo = null;
if ($result->num_rows > 0) {
    $latestContactInfo = $result->fetch_assoc();
}

$conn->close();
