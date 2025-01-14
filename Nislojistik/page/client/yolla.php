<?php
session_start();
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/nav.css">
    <link rel="stylesheet" type="text/css" href="../../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../../css/index.css">
</head>


<body>
    <?php
    include "../../component/header.php"
    ?>

    <section class=" yolla-form">
        <div class="container mt-5">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="telefon" class="form-label">Telefon Numaranız:</label>
                    <input type="tel" class="form-control" id="telefon" name="telefon" required>
                    <small id="telefonHata" class="form-text text-danger"></small>
                </div>
                <button type="button" class="btn btn-primary" onclick="kontrolEt()">Gönder</button>
            </form>
        </div>
    </section>

    <script src="../../lib/js/bootstrap.bundle.min.js"></script>

    <?php
    include "../../component/footer.php"
    ?>

    <script>
        function kontrolEt() {
            var telefonInput = document.getElementById('telefon');
            var telefonHata = document.getElementById('telefonHata');

            var telefonRegex = /^[0-9]{10}$/;
            if (telefonRegex.test(telefonInput.value)) {
                telefonHata.textContent = ' ';
                alert('Talebiniz alınmıstır. Size en kısa zamanda dönüs sağlanacaktır.');
            } else {
                telefonHata.textContent = 'Geçerli bir telefon numarası girin (örn: 535 535 35 35)';
            }
        }
    </script>
</body>

</html>