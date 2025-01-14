<?php
include 'auth.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımda Bilgisi Ekleme</title>
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <?php
        include "../../admin_component/sidebar.php";
        ?>

        <div id="content" class="p-5">
            <h2 class="mt-5 mb-3 font-weight-bold" style="color:#393c7f">Hakkımda Bilgisi Ekleme</h2>

            <form action="../../action/addAbout.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Başlık:</label>
                    <input type="text" id="title" class="form-control" name="title" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Açıklama:</label>
                    <textarea name="description" id="description" class="form-control" id="content" rows="8" required placeholder="Açıklamanızı buraya yazın"></textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Resim:</label>
                    <input type="file" id="image" name="image" class="form-control">
                </div>

                <button type="submit" name="submit" class="btn btn-success">Ekle</button>
            </form>
        </div>
    </div>
</body>

</html>