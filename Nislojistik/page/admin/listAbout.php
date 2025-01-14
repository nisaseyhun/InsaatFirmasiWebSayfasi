<?php
include 'auth.php';
require_once('../../pullData/aboutData.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımda Bilgileri</title>
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <?php
        include "../../admin_component/sidebar.php";
        ?>

        <div id="content" class="p-5">
            <h2 class="mt-5 mb-3 font-weight-bold" style="color:#393c7f">Hakkımda Bilgileri</h2>
            <a href="createAbout.php" class="btn btn-success mb-3">Hakkımda Bilgisi Ekle</a>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
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
                        if (!empty($abouts)) {
                            foreach ($abouts as $index => $row) {
                                echo "<tr>";
                                echo "<td>" . ($index + 1) . "</td>";
                                echo "<td>" . htmlspecialchars($row['about_title']) . "</td>";

                                $content = $row['about_content'];
                                $wordLimit = 50;
                                $words = explode(' ', $content);
                                if (count($words) > $wordLimit) {
                                    $content = implode(' ', array_slice($words, 0, $wordLimit)) . '...';
                                }
                                echo "<td>" . nl2br(htmlspecialchars($content)) . "</td>";

                                echo "<td style='width:150px;'><img src='../" . htmlspecialchars($row['about_img']) . "' alt='Hakkımda Fotoğrafı' width='100'></td>";
                                echo "<td style='width:200px;'>";
                                echo "<a href='editAbout.php?id=" . $row['about_id'] . "' class='btn btn-warning'>Güncelle</a> ";
                                echo "<a href='../../action/deleteAbout.php?id=" . $row['about_id'] . "' class='btn btn-danger' onclick=\"return confirm('Bu kaydı silmek istediğinize emin misiniz?');\">Sil</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>Hiç veri bulunamadı.</td></tr>";
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>