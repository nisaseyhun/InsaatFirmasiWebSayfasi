<?php
require_once('../../pullData/newsData.php');
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bizden Haberler</title>
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
        <img src="../../img/news.webp" class="card-img-top" alt="">
        <div class="resimYazisi">
            <p>Bizden Haberler</p>
        </div>
    </div>

    <section class="icerik">
        <div class="px-5 my-5">
            <div class="row g-4">
                <?php if (!empty($news)): ?>
                    <?php foreach ($news as $new): ?>
                        <div class="col-md-4 col-lg-3 col-sm-6 col-xl-2">
                            <div class="card">
                                <img src="../<?php echo htmlspecialchars($new['news_Img']); ?>" class="card-img-top" alt="Haber Resmi">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><?php echo htmlspecialchars($new['news_Title']); ?></h5>
                                    <p class="card-text" style="min-height:48px;">
                                        <?php
                                        $content = htmlspecialchars($new['news_Content']);
                                        $maxLength = 60;
                                        if (strlen($content) > $maxLength) {
                                            echo nl2br(substr($content, 0, $maxLength)) . '...';
                                        } else {
                                            echo nl2br($content);
                                        }
                                        ?>
                                    </p>

                                    <a href="newsDetails.php?id=<?php echo $new['news_Id']; ?>" class="btn mx-auto d-block" style="background-color: rgb(225 225 225);">Devamını Oku</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-center">Henüz haber eklenmemiş.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php
    include "../../component/goToContact.php";
    include "../../component/footer.php"
    ?>
    <script src="../../lib/js/bootstrap.bundle.min.js"></script>

</body>

</html>