<?php
require 'baglan.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);
    $selectSql = "SELECT news_Img FROM news WHERE news_Id = ?";
    $stmt = $conn->prepare($selectSql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $imagePath = "" . $row['news_Img'];

        if (file_exists($imagePath) && !empty($row['news_Img'])) {
            unlink($imagePath);
        }

        $deleteSql = "DELETE FROM news WHERE news_Id = ?";
        $deleteStmt = $conn->prepare($deleteSql);
        $deleteStmt->bind_param('i', $id);

        if ($deleteStmt->execute()) {
            echo "<script>alert('Kayıt başarıyla silindi.'); window.location.href = '../page/admin/listNews.php';</script>";
        } else {
            echo "<script>alert('Silme işlemi sırasında bir hata oluştu.'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Kayıt bulunamadı.'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Geçersiz ID.'); window.history.back();</script>";
}

$conn->close();
