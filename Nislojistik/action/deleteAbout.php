<?php
require 'baglan.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);
    $selectSql = "SELECT about_img FROM about WHERE about_id = ?";
    $stmt = $conn->prepare($selectSql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $imagePath = "" . $row['about_img'];

        if (file_exists($imagePath) && !empty($row['about_img'])) {
            unlink($imagePath);
        }

        $deleteSql = "DELETE FROM about WHERE about_id = ?";
        $deleteStmt = $conn->prepare($deleteSql);
        $deleteStmt->bind_param('i', $id);

        if ($deleteStmt->execute()) {
            echo "<script>alert('Kayıt başarıyla silindi.'); window.location.href = '../page/admin/listAbout.php';</script>";
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
