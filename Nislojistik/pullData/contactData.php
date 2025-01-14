<?php
ob_start();
require '../../action/baglan.php';

$stmt = $conn->prepare("SELECT * FROM contact ORDER BY id DESC");
$stmt->execute();
$result = $stmt->get_result();

$messages = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }
}

$conn->close();
