<?php
include 'auth.php';
require_once('../../pullData/usersData.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Listesi</title>
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <?php
        include "../../admin_component/sidebar.php";
        ?>

        <div id="content" class="p-5">
            <h2 class="mt-5 mb-3 font-weight-bold" style="color:#393c7f">Kullanıcı Listesi</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <p>Toplam <?php echo count($users); ?> kişi mevcut</p>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kullanıcı Adı</th>
                            <th>Eylem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        if (!empty($users)) {
                            foreach ($users as $index => $row) {
                                echo "<tr>";
                                echo "<td>" . ($index + 1) . "</td>";
                                echo "<td>" . htmlspecialchars($row['kul_adi']) . "</td>";
                                echo "<td style='width:200px;'>  
                                        <a href='../../action/deleteUser.php?id=" . $row['kul_id'] . "' class='btn btn-danger' onclick='return confirm(\"Bu kullanıcıyı silmek istediğinizden emin misiniz?\")'>Sil</a>
                                      </td>";
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