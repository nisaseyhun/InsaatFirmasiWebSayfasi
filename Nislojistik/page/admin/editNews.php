<?php
include 'auth.php';
require_once "../../action/baglan.php";

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    $selectSql = "SELECT * FROM news WHERE news_Id = ?";
    $stmt = $conn->prepare($selectSql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "<script>alert('Kayıt bulunamadı!'); window.history.back();</script>";
        exit;
    }
} else {
    echo "<script>alert('Geçersiz ID!'); window.history.back();</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haber Güncelleme</title>
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <?php include "../../admin_component/sidebar.php"; ?>

        <div id="content" class="p-5">
            <h2 class="mt-5 mb-3 font-weight-bold" style="color:#393c7f">Haber Güncelleme</h2>

            <form action="../../action/updateNews.php" method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="title" class="form-label">Başlık:</label><br>
                    <input type="text" name="title" id="title" class="form-control"
                        value="<?php echo htmlspecialchars($row['news_Title']); ?>" required><br><br>
                </div>

                <div class="mb-3">
                    <label for="content">İçerik:</label><br>
                    <textarea name="content" class="form-control p-3" id="content" rows="8" required><?php echo htmlspecialchars($row['news_Content']); ?></textarea><br><br>
                </div>

                <div class="mb-3">
                    <label for="image">Resim:</label><br>
                    <input type="file" name="image" id="image"><br><br>

                    <?php if (!empty($row['news_Img'])): ?>
                        <img src="../<?php echo htmlspecialchars($row['news_Img']); ?>" alt="Mevcut Resim" width="150"><br><br>
                    <?php endif; ?>
                </div>

                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <button type="submit" name="update" class="btn btn-success">Güncelle</button>
            </form>
            <a href="listAbout.php" class="btn btn-secondary mt-3">Geri Dön</a>
        </div>
    </div>
</body>

</html>