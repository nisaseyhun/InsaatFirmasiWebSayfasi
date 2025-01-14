<?php
include 'auth.php';
require_once('../../pullData/contactInfoData.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Bilgileri</title>
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <?php
        include "../../admin_component/sidebar.php";
        ?>

        <div id="content" class="p-5">
            <h2 class="mt-5 mb-3 font-weight-bold" style="color:#393c7f">İletişim Bilgileri</h2>
            <a href="createContactInfo.php" class="btn btn-success mb-3">İletişim Bilgisi Ekle</a>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Açık Adres</th>
                            <th>E Posta Adresi</th>
                            <th>Telefon Numarası</th>
                            <th>Eylemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($contactInfo)) {
                            foreach ($contactInfo as $index => $row) {
                                echo "<tr>";
                                echo "<td>" . ($index + 1) . "</td>";
                                echo "<td>" . htmlspecialchars($row['adress']) . "</td>";
                                echo "<td>" . nl2br(htmlspecialchars($row['email'])) . "</td>";
                                echo "<td style='width:200px;'>" . nl2br(htmlspecialchars($row['phone'])) . "</td>";
                                echo "<td style='width:200px;'>";
                                echo "<a href='editContactInfo.php?id=" . $row['contactInfo_Id'] . "' class='btn btn-warning'>Güncelle</a> ";
                                echo "<a href='../../action/deleteContactInfo.php?id=" . $row['contactInfo_Id'] . "' class='btn btn-danger' onclick=\"return confirm('Bu kaydı silmek istediğinize emin misiniz?');\">Sil</a>";
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