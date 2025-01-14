<?php
session_start();
$kategoriID = $_GET['kategori'] ?? 6;
require_once('../../pullOneData/contactInfoData.php');
require_once('../../action/veriCek.php');
?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $resultKategori['kategoriAdi'] ?></title>
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
    <img src="<?= $resultKategori['kategoriResmi'] ?>" class="card-img-top" alt="">
    <div class="resimYazisi">
      <p><?= $resultKategori['kategoriAdi'] ?></p>
    </div>
  </div>

  <section class="icerik">
    <?php
    foreach ($result as $item) { ?>
      <div class="card mb-3 card" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-3">
            <img src="<?= $item['resim'] ?>" class="img-fluid rounded-start" alt="...">
            <?php if ($kategoriID < 6) { ?>
              <a href="https://wa.me/+90<?= urlencode($latestContactInfo['phone']) ?>?text=Merhaba,%20<?= urlencode($resultKategori['kategoriAdi']) ?>%20kategorisi%20için%20teklif%20istiyorum." target="_blank">
                <button type="button" class="btn btn-warning" style="margin:20px;">
                  Teklif İstiyorum
                </button>
              </a>
            <?php } ?>

          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?= $item['baslik1'] ?></h5>
              <p class="card-text"><?= $item['icerik1'] ?></p>
              <h5 class="card-title"><?= $item['baslik2'] ?></h5>
              <p class="card-text"><?= $item['icerik2'] ?></p>
            </div>
          </div>
        </div>
      </div>
      <hr>
    <?php } ?>
  </section>


  <?php
  include "../../component/goToContact.php";
  include "../../component/footer.php"
  ?>
  <script src="../../lib/js/bootstrap.bundle.min.js"></script>

</body>

</html>