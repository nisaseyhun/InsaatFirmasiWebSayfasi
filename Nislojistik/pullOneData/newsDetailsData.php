<?php
require_once('../../action/baglan.php');

if (isset($_GET['id'])) {
    $news_id = intval($_GET['id']);

    $stmt = $conn->prepare("SELECT * FROM news WHERE news_ID = ?");
    $stmt->bind_param("i", $news_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $news = $result->fetch_assoc();
    } else {
        $errorMessage = "Haber bulunamadı.";
    }

    $stmt->close();
} else {
    $errorMessage = "Geçersiz haber ID'si.";
}

$conn->close();
