<?php
ob_start();
require '../../action/baglan.php';

$stmt = $conn->prepare("SELECT * FROM news ORDER BY news_Id DESC");
$stmt->execute();
$result = $stmt->get_result();

$news = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $news[] = $row;
    }
}

$conn->close();
