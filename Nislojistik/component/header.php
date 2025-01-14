<nav class="navbar navbar-expand-lg bg-body-tertiary bg-transparent">
    <div class="container-fluid">
        <a class="navbar-brand nav-left mx-4" href="index.php"><img class="rounded-circle" id="logo" src="../../img/logo.png" alt="Nis."></a>
        <button class="navbar-toggler mx-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Hizmet ve Çözümlerimiz
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?kategori=6">Tüm Hizmetlerimiz</a></li>
                        <li><a class="dropdown-item" href="index.php?kategori=1">Ev Temeli</a></li>
                        <li><a class="dropdown-item" href="index.php?kategori=2">Yol Yapımı</a></li>
                        <li><a class="dropdown-item" href="index.php?kategori=3">Hafriyat İşlemleri</a></li>
                        <li><a class="dropdown-item" href="index.php?kategori=4">İş Makinesi Kiralama</a></li>
                        <li><a class="dropdown-item" href="index.php?kategori=5">Nakliye İşlemleri</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link" href="news.php">Bizden Haberler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">Hakkımızda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">İletişim</a>
                </li>
            </ul>
        </div>
        <?php if (!isset($_SESSION['kullanici'])) { ?>
            <a href="../../page/client/SignIn.php" id="giris-yap"> <button class="btn btn-success">Giriş Yap</button> </a>
        <?php }
        if (isset($_SESSION['kullanici'])) { ?>
            <a href="../../action/cikis.php" id="cikis-yap"> <button class="btn btn-danger">Çıkıs Yap</button> </a>
        <?php
        } ?>
    </div>
</nav>