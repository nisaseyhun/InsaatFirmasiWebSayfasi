<?php
session_start();
require_once('../../action/baglan.php');

$successMessage = "";
$errorMessage = "";

if (isset($_SESSION['message_sent']) && $_SESSION['message_sent'] == true) {
  $successMessage = "Mesajınız başarıyla gönderildi!";
  unset($_SESSION['message_sent']);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars(trim($_POST['name']));
  $email = htmlspecialchars(trim($_POST['email']));
  $subject = htmlspecialchars(trim($_POST['subject']));
  $message = htmlspecialchars(trim($_POST['message']));

  if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {

    $created_at = date("Y-m-d H:i:s");

    $sql = "INSERT INTO contact (name, email, subject, message, created_at) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $subject, $message, $created_at);

    if ($stmt->execute()) {
      $_SESSION['message_sent'] = true;
      header("Location: " . $_SERVER['PHP_SELF']);
      exit();
    } else {
      $errorMessage = "Bir hata oluştu, lütfen tekrar deneyin.";
    }

    $stmt->close();
  } else {
    $errorMessage = "Lütfen tüm alanları doldurun.";
  }
}
?>


<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>İletişim Sayfası</title>
  <link href="../../lib/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../css/index.css">
  <link rel="stylesheet" type="text/css" href="../../css/nav.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link rel="stylesheet" type="text/css" href="../../css/footer.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      setTimeout(function() {
        $('#alertMessage').fadeOut('slow');
      }, 3000);
    });
  </script>
</head>

<body>

  <?php include "../../component/header.php" ?>
  <div class="resimKapsayici">
    <img src="../../img/contact.jpg" class="card-img-top" alt="kategori">
    <div class="resimYazisi">
      <p>İletişim Sayfası</p>
    </div>
  </div>

  <div class="container">
    <div class="text-white text-center py-2 mt-5" style="background-color: #587e7b;">
      <h2>İletişim Sayfası</h2>
    </div>

    <?php if ($successMessage || $errorMessage): ?>
      <div id="alertMessage" class="alert mt-3 <?= $successMessage ? 'alert-success' : 'alert-danger' ?>">
        <?= $successMessage ?: $errorMessage ?>
      </div>
    <?php endif; ?>
    <div class="row">
      <div class="col-md-6 col-sm-12 p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47648.06031051521!2d27.15148895631805!3d41.72043750740904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a75484ea76c72d%3A0x644acf49a883ab6d!2sK%C4%B1rklareli%20%C3%9Cniversitesi%20Teknik%20Bilimler%20Meslek%20Y%C3%BCksekokulu!5e0!3m2!1str!2str!4v1734486473013!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="col-md-6 col-sm-12 p-0">
        <form action="" method="POST">
          <div class="card mt-4">
            <div class="card-body p-3" style="height:450px;">
              <div class="form-group">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user" style="color: #587e7b;"></i></div>
                  </div>
                  <input type="text" class="form-control" name="name" placeholder="Ad Soyad" required>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-envelope" style="color: #587e7b;"></i></div>
                  </div>
                  <input type="email" class="form-control" name="email" placeholder="E-Posta" required>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-tag" style="color: #587e7b;"></i></div>
                  </div>
                  <input type=" text" class="form-control" name="subject" placeholder="Konu" required>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-comment" style="color: #587e7b;"></i></div>
                  </div>
                  <textarea class="form-control" name="message" placeholder="Lütfen Mesajınızı Buraya Yazın.." rows="8" required></textarea>
                </div>
              </div>
              <div class="text-center">
                <input type="submit" value="GÖNDER" class="btn btn-block text-white" style="position: absolute; bottom: 10px; left: 10%; width: 80%;background-color: #587e7b; ">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php include "../../component/footer.php" ?>
  <script src="../../lib/js/bootstrap.bundle.min.js"></script>
</body>

</html>