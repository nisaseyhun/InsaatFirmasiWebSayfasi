<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Kayıt</title>
    <link href="../../lib/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/nav.css">
    <link rel="stylesheet" type="text/css" href="../../css/footer.css">
</head>

<body>
    <?php
    include "../../component/header.php"
    ?>
    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <h1>Kayıt Ol</h1>
                <?php
                session_start();

                // Hata mesajlarını göstermek için
                if (isset($_SESSION['register_error'])) {
                    echo "<script>alert('" . $_SESSION['register_error'] . "');</script>";
                    unset($_SESSION['register_error']); // Mesajı bir kez gösterdikten sonra session'dan kaldır
                }
                ?>
            </div>
            <form action="../../action/islem.php" method="post">
                <div class="login-form">
                    <div class="control-group">
                        <input type="text" name="username" class="login-field" placeholder="Kullanıcı Adı" id="login-name">
                        <label for="login-name" class="login-field-icon fui-user"></label>
                    </div>
                    <div class="control-group">
                        <input type="password" name="password" class="login-field" placeholder="Sifre" id="login-pass">
                        <label for="login-pass" class="login-field-icon fui-user"></label>
                    </div>
                    <div class="control-group">
                        <input type="password" name="confirm_password" class="login-field" placeholder="Tekrar Sifre" id="login-pass">
                        <label for="login-pass" class="login-field-icon fui-user"></label>
                    </div>
                    <button name="SignUp" class="btn btn-primary btn-large btn-block">Kayıt Ol</button>
                </div>
            </form>
            <a href="SignIn.php">
                <button class="btn btn-primary btn-large btn-block">Giris Yap</button>
            </a>
        </div>
    </div>
    <script src="../../lib/js/bootstrap.bundle.min.js"></script>
    <?php
    include "../../component/footer.php"
    ?>
</body>

</html>