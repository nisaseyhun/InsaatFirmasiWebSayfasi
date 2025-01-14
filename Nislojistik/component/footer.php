<?php
require_once('../../pullOneData/contactInfoData.php');
?>

<footer>
    <div class="footer-icerik ">
        <div class="footer-bolum">
            <h3>Nis İnsaat AŞ.</h3>
            <p>
                Çesitli hizmetlerimizden faydalanmanız için 7 / 24 burdayız. Haberlerimize ve hizmetlerime göz gezdirebilir ihtiyacınıza göre sizlere hizmet verebiliriz.
            </p>
        </div>

        <div class="footer-bolum">
            <h3>İletişim Bilgileri</h3>

            <?php if (!empty($latestContactInfo)): ?>
                <div class="contact-info">
                    <p><strong>Adres:</strong> <?= htmlspecialchars($latestContactInfo['adress']) ?></p>
                    <p><strong>Telefon:</strong> <?= htmlspecialchars($latestContactInfo['phone']) ?></p>
                    <p><strong>E-posta:</strong> <?= htmlspecialchars($latestContactInfo['email']) ?></p>
                </div>
            <?php else: ?>
                <p>İletişim bilgileri bulunamadı.</p>
            <?php endif; ?>
        </div>

        <div class="footer-bolum">
            <h3>Hızlı Bağlantılar</h3>
            <ul>
                <li><a href="index.php?kategori=6">Anasayfa</a></li>
                <li><a href="news.php">Bizden Haberler</a></li>
                <li><a href="about.php">Hakkımızda</a></li>
                <li><a href="contact.php">İletişim</a></li>
            </ul>
        </div>
    </div>

    <div class="alt-footer">
        <p>&copy; Nis İnsaat AŞ. Tüm hakları saklıdır.</p>
    </div>
</footer>