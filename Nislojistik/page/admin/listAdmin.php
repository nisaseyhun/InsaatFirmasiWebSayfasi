<?php
include 'auth.php';
require_once('../../pullData/adminData.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Listesi</title>
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <?php
        include "../../admin_component/sidebar.php";
        ?>

        <div id="content" class="p-5">
            <h2 class="mt-5 mb-3 font-weight-bold" style="color:#393c7f">Admin Listesi</h2>
            <a href="asajdafjhs.php" class="btn btn-success mb-3">Admin Ekle</a>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <p>Toplam <?php echo count($admin); ?> Admin mevcut</p>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kullanıcı Adı</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        if (!empty($admin)) {
                            foreach ($admin as $index => $row) {
                                echo "<tr>";
                                echo "<td>" . ($index + 1) . "</td>";
                                echo "<td>" . htmlspecialchars($row['kul_adi']) . "</td>";
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