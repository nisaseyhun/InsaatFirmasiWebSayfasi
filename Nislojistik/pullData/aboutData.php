<?php
ob_start();
require '../../action/baglan.php';

$stmt = $conn->prepare("SELECT * FROM about ORDER BY about_Id DESC");
$stmt->execute();
$result = $stmt->get_result();

$abouts = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $abouts[] = $row;
    }
}

$conn->close();
