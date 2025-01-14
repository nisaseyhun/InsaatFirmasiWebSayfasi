<?php
require_once('../../pullOneData/aboutData.php');
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımızda</title>
    <link href="../../lib/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/index.css">
    <link rel="stylesheet" type="text/css" href="../../css/nav.css">
    <link rel="stylesheet" type="text/css" href="../../css/footer.css">
</head>

<body>
    <?php
    include "../../component/header.php"
    ?>
    <div class="resimKapsayici">
        <img src="../../img/about.jpg" class="card-img-top" alt="">
        <div class="resimYazisi">
            <p>Hakkımızda</p>
        </div>
    </div>
    <section class="icerik">
        <div class="card mb-3 card" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-3 p-4">
                    <img src="../<?= $latestAbout['about_img'] ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $latestAbout['about_title'] ?></h5>
                        <p class="card-text"><?= $latestAbout['about_content'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </section>
    <?php
    include "../../component/goToContact.php";
    include "../../component/footer.php"
    ?>
    <script src="../../lib/js/bootstrap.bundle.min.js"></script>

</body>

</html>