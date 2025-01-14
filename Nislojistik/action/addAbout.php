<?php

require 'baglan.php';

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $targetDir = "../uploadImage/";

    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $imagePath = null;
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $filename = preg_replace('/[^A-Za-z0-9.\-]/', '_', $_FILES['image']['name']);
        $targetFile = $targetDir . $filename;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        if (in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                $imagePath = $targetFile;
            } else {
                echo "Dosya yüklenirken bir hata oluştu.";
            }
        } else {
            echo "Geçersiz dosya türü. Sadece JPG, JPEG, PNG ve GIF dosyalarına izin verilir.";
        }
    }
    $sql = "INSERT INTO about (about_title, about_content, about_img) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param('sss', $title, $description, $imagePath);

    if ($stmt->execute()) {
        echo "<script>alert('Kayıt başarıyla eklendi.'); window.location.href = '../page/admin/listAbout.php';</script>";
    } else {
        echo "Hata: " . $stmt->error;
    }
}

$conn->close();
