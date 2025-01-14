<?php
include 'auth.php';
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Bilgisi Ekleme</title>
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <?php
        include "../../admin_component/sidebar.php";
        ?>

        <div id="content" class="p-5">
            <h2 class="mt-5 mb-3 font-weight-bold" style="color:#393c7f">İletişim Bilgisi Ekleme</h2>

            <form action="../../action/addContactInfo.php" method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="phone" class="form-label">Telefon Numarası:</label>
                    <input type="text" id="phone" class="form-control" name="phone" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">E Posta Adresi:</label>
                    <input type="text" id="email" class="form-control" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="adress" class="form-label">Açık Adres:</label>
                    <textarea name="adress" id="adress" class="form-control" id="content" rows="8" required placeholder="Açıklamanızı buraya yazın"></textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-success">Ekle</button>
            </form>
        </div>
    </div>
</body>

</html>