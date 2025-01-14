<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    require_once('baglan.php');
    $deleteSql = "DELETE FROM kullanicilar WHERE kul_id = ?";
    $stmt = $conn->prepare($deleteSql);
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        echo "Kullanıcı başarıyla silindi!";
        header("Location: ../page/admin/listUsers.php");
        exit();
    } else {
        echo "Hata: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Silinecek kullanıcı bulunamadı!";
}
$conn->close();
