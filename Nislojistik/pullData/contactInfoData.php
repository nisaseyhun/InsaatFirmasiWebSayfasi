<?php
ob_start();
require '../../action/baglan.php';

$stmt = $conn->prepare("SELECT * FROM contactinfo ORDER BY contactInfo_Id DESC");
$stmt->execute();
$result = $stmt->get_result();

$contactInfo = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $contactInfo[] = $row;
    }
}

$conn->close();
