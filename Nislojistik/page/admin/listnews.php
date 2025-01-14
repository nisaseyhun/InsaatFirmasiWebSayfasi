<?php
include 'auth.php';
require_once('../../pullData/newsData.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haber Bilgisi</title>
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <?php
        include "../../admin_component/sidebar.php";
        ?>

        <div id="content" class="p-5">
            <h2 class="mt-5 mb-3 font-weight-bold" style="color:#393c7f">Haber Bilgisi</h2>
            <a href="createNews.php" class="btn btn-success mb-3">Haber Ekle</a>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <p>Toplam <?php echo count($news); ?> haber mevcut</p>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Başlık</th>
                            <th>İçerik</th>
                            <th>Fotoğraf</th>
                            <th>Eylemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($news)) {
                            foreach ($news as $index => $row) {
                                echo "<tr>";
                                echo "<td>" . ($index + 1) . "</td>";
                                echo "<td>" . htmlspecialchars($row['news_Title']) . "</td>";
                                echo "<td>" . nl2br(htmlspecialchars($row['news_Content'])) . "</td>";
                                echo "<td style='width:150px;'><img src='../" . htmlspecialchars($row['news_Img']) . "' alt='Hakkımda Fotoğrafı' width='100'></td>";

                                echo "<td style='width:200px;'>";
                                echo "<a href='editNews.php?id=" . $row['news_Id'] . "' class='btn btn-warning'>Güncelle</a> ";
                                echo "<a href='../../action/deleteNews.php?id=" . $row['news_Id'] . "' class='btn btn-danger' onclick=\"return confirm('Bu kaydı silmek istediğinize emin misiniz?');\">Sil</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>Hiç veri bulunamadı.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>