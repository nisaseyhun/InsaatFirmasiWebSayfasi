<?php

require 'baglan.php';

if (isset($_POST['submit'])) {
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $adress = isset($_POST['adress']) ? trim($_POST['adress']) : '';

    if (empty($phone) || empty($email) || empty($adress)) {
        echo "Tüm alanlar doldurulmalıdır!";
        exit;
    }

    $sql = "INSERT INTO contactinfo (phone, email, adress) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        echo "Veritabanı hatası: " . $conn->error;
        exit;
    }

    $stmt->bind_param('sss', $phone, $email, $adress);

    if ($stmt->execute()) {
        echo "<script>alert('Kayıt başarıyla eklendi.'); window.location.href = '../page/admin/listContactInfo.php';</script>";
    } else {
        echo "Hata: " . $stmt->error;
    }
    $stmt->close();
}

$conn->close();
