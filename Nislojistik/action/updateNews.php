<?php
require 'baglan.php';

if (isset($_POST['update'])) {
    $id = intval($_POST['id']);
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

    $selectSql = "SELECT news_Img FROM news WHERE news_Id = ?";
    $stmt = $conn->prepare($selectSql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $imagePath = $row['news_Img'];
    } else {
        echo "<script>alert('Kayıt bulunamadı!'); window.history.back();</script>";
        exit;
    }

    if (!empty($_FILES['image']['name'])) {
        $targetDir = "../uploadImage/";
        $fileName = basename($_FILES['image']['name']);
        $newImagePath = $targetDir . $fileName;
        $imageFileType = strtolower(pathinfo($newImagePath, PATHINFO_EXTENSION));

        if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
            echo "<script>alert('Geçersiz dosya türü! (Sadece JPG, JPEG, PNG, GIF)'); window.history.back();</script>";
            exit;
        }

        if (move_uploaded_file($_FILES['image']['tmp_name'], $newImagePath)) {
            if (!empty($row['news_Img']) && file_exists("../../" . $row['news_Img'])) {
                unlink("../../" . $row['news_Img']);
            }
            $imagePath = "../uploadImage/" . $fileName;
        } else {
            echo "<script>alert('Resim yüklenirken hata oluştu!'); window.history.back();</script>";
            exit;
        }
    }

    $updateSql = "UPDATE news SET news_Title = ?, news_Content = ?, news_Img = ? WHERE news_Id = ?";
    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->bind_param('sssi', $title, $content, $imagePath, $id);

    if ($updateStmt->execute()) {
        echo "<script>alert('Kayıt başarıyla güncellendi.'); window.location.href = '../page/admin/listNews.php';</script>";
    } else {
        echo "<script>alert('Güncelleme sırasında hata oluştu!'); window.history.back();</script>";
    }
}
