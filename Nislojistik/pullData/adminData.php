<?php
ob_start();
require '../../action/baglan.php';

$stmt = $conn->prepare("SELECT * FROM kullanicilar WHERE rol = 'admin' ORDER BY kul_id DESC");
$stmt->execute();
$result = $stmt->get_result();

$admin = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $admin[] = $row;
    }
}

$conn->close();
