<?php
require 'baglan.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $deleteSql = "DELETE FROM contactinfo WHERE contactInfo_Id = ?";
    $stmt = $conn->prepare($deleteSql);
    $stmt->bind_param('i', $id);
    if ($stmt->execute()) {
        echo "Başarıyla silindi!";
        header("Location: ../page/admin/listContactInfo.php");
        exit();
    } else {
        echo "Hata: " . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
