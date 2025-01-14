<?php
include 'auth.php';
require_once('../../pullData/contactData.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gelen Mesajlar</title>
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <?php
        include "../../admin_component/sidebar.php";
        ?>

        <div id="content" class="p-5">
            <h2 class="mt-5 mb-3 font-weight-bold" style="color:#393c7f">Gelen Mesajlar</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <p>Toplam <?php echo count($messages); ?> mesaj mevcut</p>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Ad Soyad</th>
                            <th>Baslık</th>
                            <th>Mail</th>
                            <th>Mesaj</th>
                            <th>Tarih</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($messages)) {
                            foreach ($messages as $index => $row) {
                                echo "<tr>";
                                echo "<td>" . ($index + 1) . "</td>";
                                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                                echo "<td>" . htmlentities($row['email'], ENT_NOQUOTES, 'UTF-8') . "</td>";
                                echo "<td>" . nl2br(htmlspecialchars($row['subject'])) . "</td>";
                                echo "<td>" . nl2br(htmlspecialchars($row['message'])) . "</td>";

                                $created_at = $row['created_at'];
                                $date = new DateTime($created_at);
                                $fmt = new IntlDateFormatter('tr_TR', IntlDateFormatter::LONG, IntlDateFormatter::SHORT);
                                $formattedDate = $fmt->format($date);
                                echo "<td style='width:200px;'>" . $formattedDate . "</td>";

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