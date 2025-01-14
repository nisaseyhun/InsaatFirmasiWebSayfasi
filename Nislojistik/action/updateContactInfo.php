<?php
require 'baglan.php';

if (isset($_POST['update'])) {

    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $adress = $_POST['adress'];
    $id = $_POST['id'];

    $updateSql = "UPDATE contactinfo SET phone = ?, email = ?, adress = ? WHERE contactInfo_Id = ?";
    $stmt = $conn->prepare($updateSql);
    $stmt->bind_param('sssi', $phone, $email, $adress, $id);

    if ($stmt->execute()) {
        echo "Başarıyla güncellendi!";
        header("Location: ../page/admin/listContactInfo.php");
        exit();
    } else {
        echo "Hata: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
