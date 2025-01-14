<?php
require_once('../../pullOneData/newsDetailsData.php');
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haber Detayları</title>
    <link href="../../lib/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/index.css">
    <link rel="stylesheet" type="text/css" href="../../css/nav.css">
    <link rel="stylesheet" type="text/css" href="../../css/footer.css">
</head>

<body>
    <?php include "../../component/header.php"; ?>
    <div class="resimKapsayici">
        <img src="../<?php echo htmlspecialchars($news['news_Img']); ?>" class="card-img-top" alt="Haber Resmi">
        <div class="resimYazisi">
            <p><?php echo htmlspecialchars(strtoupper($news['news_Title'])); ?></p>
        </div>
    </div>
    <div class="icerik">
        <?php if (isset($news)): ?>
            <div class="container my-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php echo htmlspecialchars(strtoupper($news['news_Title'])); ?></h5>
                                <p class="card-text"><?php echo nl2br(htmlspecialchars($news['news_Content'])); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <p class="text-center"><?php echo isset($errorMessage) ? $errorMessage : 'Haber bulunamadı.'; ?></p>
        <?php endif; ?>
    </div>

    <?php include "../../component/footer.php"; ?>
    <script src="../../lib/js/bootstrap.bundle.min.js"></script>

</body>

</html>