-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 18 Ara 2024, 02:49:48
-- Sunucu sürümü: 9.1.0
-- PHP Sürümü: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kullanicidb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `about_id` int NOT NULL AUTO_INCREMENT,
  `about_title` varchar(50) NOT NULL,
  `about_img` varchar(255) NOT NULL,
  `about_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `about`
--

INSERT INTO `about` (`about_id`, `about_title`, `about_img`, `about_content`) VALUES
(1, 'NİŞ İNSAAT AŞ. HAKKIMIZDA', '../img/about.webp', 'NİŞ İnşaat olarak, yılların verdiği tecrübe ve uzmanlıkla inşaat sektöründe faaliyet göstermekteyiz. Misyonumuz, her projeyi en yüksek kalite standartlarına göre teslim etmek, müşteri memnuniyetini ön planda tutarak güvenilir, sağlam ve estetik yapılar inşa etmektir. Profesyonel ekibimizle, her türlü inşaat hizmetini kapsamlı bir şekilde sunuyoruz. İnşaat sektöründeki başarılarımızla, müşterilerimize en kaliteli ve güvenli hizmeti sağlamak için çalışıyoruz.\r\n\r\nHizmetlerimiz\r\nEv Yapımı:\r\nSıfırdan ev yapımı, tadilat ve yenileme hizmetlerinde deneyimliyiz. İster bir aile evi, ister lüks bir konut inşa ediyor olalım, her detayda estetik ve fonksiyonelliği birleştirerek yaşam alanınızı oluşturuyoruz. Planlamadan, malzeme seçimine, iç mekan düzenlemesinden dış cepheye kadar her aşamada titiz çalışıyoruz.\r\n\r\nYol Yapımı:\r\nNİŞ İnşaat, altyapı projeleri ve yol yapımı konusunda da geniş bir yelpazeye sahiptir. Yeni yol inşaatı, asfaltlama, zemin iyileştirme gibi hizmetlerde uzmanız. Trafik güvenliği, dayanıklılık ve çevresel etkileri göz önünde bulundurarak projeleri zamanında ve bütçeye uygun bir şekilde tamamlıyoruz.\r\n\r\nAçma ve Kazı Çalışmaları:\r\nHer türlü kazı ve açma işlemlerini güvenle yapıyoruz. Temel kazıları, kanalizasyon çalışmaları, altyapı hazırlığı ve peyzaj düzenlemeleri gibi zorlu görevlerde uzman ekibimizle hizmet veriyoruz. Çevre dostu yaklaşımımızla, projelerinize değer katıyoruz.\r\n\r\nNakliye Hizmetleri:\r\nİnşaat projelerinin en önemli parçalarından biri de malzeme taşımadır. Erb İnşaat olarak, inşaat malzemelerinin güvenli bir şekilde taşınmasını sağlıyoruz. Kamyon, vinç ve diğer taşıma araçlarımızla, büyük ve ağır malzemelerin taşınmasında hız ve güveni ön planda tutuyoruz.\r\n\r\nDiğer İnşaat Hizmetleri:\r\nYapı projelerinin her aşamasında ihtiyaç duyulabilecek diğer hizmetleri de sunuyoruz. Elektrik tesisatı, sıhhi tesisat, ısıtma ve soğutma sistemleri, güvenlik sistemleri kurulumları gibi çeşitli alanlarda uzman ekiplerimizle hizmet veriyoruz.\r\n\r\nVizyonumuz\r\nHer projede yüksek kaliteli işçilik, uygun maliyet ve zamanında teslimat hedefliyoruz. Müşteri memnuniyeti bizim için her zaman ön planda olmuştur ve projelerimizi bu anlayışla gerçekleştiriyoruz. Erb İnşaat, sektördeki güçlü deneyimi ve profesyonel ekibiyle, her türlü inşaat ihtiyacını karşılamak için yanınızdadır.\r\n\r\nMisyonumuz\r\nİnşaat sektöründe güvenli, sağlam ve kaliteli yapılar inşa etmek, her zaman müşteri odaklı çalışarak en yüksek standartlarda hizmet sunmak misyonumuzdur. NİŞ İnşaat olarak, çevreye duyarlı, yenilikçi ve sürdürülebilir projeler geliştirerek sektördeki lider konumumuzu daha da güçlendirmeyi hedefliyoruz.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cartID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `baslik1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `baslik2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `icerik1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `icerik2` text NOT NULL,
  `yayinTarihi` date NOT NULL,
  `resim` varchar(250) NOT NULL,
  `KategoriID` int UNSIGNED NOT NULL,
  PRIMARY KEY (`cartID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `cart`
--

INSERT INTO `cart` (`cartID`, `baslik1`, `baslik2`, `icerik1`, `icerik2`, `yayinTarihi`, `resim`, `KategoriID`) VALUES
(1, 'Şerit Temel', 'Radye Temel', 'Şerit temel, genellikle bina yüklerini düzgün bir şekilde zemine dağıtmak için tercih edilir. Özellikle küçük ve orta ölçekli yapılar için idealdir. Bu temel türü ekonomik maliyetli olduğu gibi, daha az derin kazılar gerektirir.', 'Radye temel, tüm yapıyı desteklemek için geniş bir betonarme yüzey sağlar. Özellikle zayıf zeminlerde veya yüksek bina yükleri altında kullanılır. Radye temel, yapıya eşit bir stabilite sunar ve zemindeki oturmaları minimize eder.', '2024-01-01', '../../img/temelCesidleri.jpg', 1),
(2, ' Zemin Hazırlığı', 'Beton ve Su Yalıtımı', 'Temel kazısı yapılmadan önce zemin etüdü gerçekleştirilir. Uygun bir zeminde temel alanı temizlenir ve stabilize edilir. Bu aşama, doğru temel tasarımı için hayati önem taşır.', 'Kazı işlemi tamamlandıktan sonra beton dökümü gerçekleştirilir. Ardından temel, suya ve neme karşı korunmak için yalıtım malzemeleriyle kaplanır. Bu işlem, yapının ömrünü uzatır ve nemden kaynaklı sorunları önler.', '2024-01-02', '../../img/temelSureci', 1),
(3, 'Zemin Hazırlığı', 'Alt Temel ve Temel Katmanı', 'Yol yapımının ilk aşaması zemin hazırlığıdır. Bu süreçte:\n\nZemin Etüdü: Yüzeyin durumu ve taşıma kapasitesi analiz edilir.\nKazı ve Dolgu İşlemleri: Yüzey düzleştirilir, gerektiğinde dolgu malzemeleri kullanılarak düzgün bir platform oluşturulur.\nSıkıştırma: Zeminin dayanıklılığını artırmak için sıkıştırma makineleri ile yüzey sağlamlaştırılır.', 'Alt Temel: Stabilize malzemeler (kum, çakıl vb.) kullanılarak yolun yük taşıma kapasitesi artırılır.\nTemel Katmanı: Alt temel üzerine daha sağlam malzemeler (kırma taş vb.) serilerek düzgün ve dayanıklı bir temel katmanı oluşturulur. Bu katman yolun ömrünü uzatır ve deformasyonu önler.', '2024-01-02', '../../img/yolYapımAsaması', 2),
(4, 'Asfalt Kaplama', 'Beton Kaplama', 'Asfalt kaplama, en yaygın yol kaplama türüdür. Esneklik ve su yalıtımı sağlar. Avantajları şunlardır:\n\nHızlı uygulanabilir ve kısa sürede kullanıma açılabilir.\nEkonomiktir ve bakım-onarımı kolaydır.', 'Beton kaplama, ağır yük taşıyan yollar ve uzun ömürlü projelerde tercih edilir. Özellikleri şunlardır:  Daha yüksek dayanıklılık sunar. Uzun süreli kullanımda maliyeti düşüktür. Özellikle sıcak iklim bölgelerinde deformasyona karşı dayanıklıdır.', '2024-01-01', '../../img/yolYapımTuru.webp', 2),
(5, ' Zemin Analizi ve Etüt', ' Kazı ve Taşıma İşlemleri', 'Hafriyat işlemlerinin ilk aşaması, yapılacak bölgenin zemin etüdü ve analizidir. Bu süreçte:\n\nZemin Durumunun Değerlendirilmesi: Zemin, taşıma kapasitesi ve yer altı su seviyesi açısından analiz edilir.\nKazı Derinliği Belirleme: Zemin etüdü sonucunda kazı derinlikleri belirlenir ve kazı alanında kullanılacak ekipmanlar seçilir.\nÇevresel Etkiler: Çevresel faktörler (toprak yapısı, hava durumu, yer altı suyu vb.) göz önünde bulundurulur.', 'Kazı İşlemi: Zemin belirli derinliğe kadar kazılır. Bu aşamada, çeşitli makineler kullanılarak toprak, kaya ve diğer malzemeler çıkarılır. Taşıma ve Dökme: Kazılan malzemeler, uygun alanlara taşınır ve dökülür. Bu işlemde, malzemenin özelliğine göre farklı yöntemler uygulanır (yol yapımı, alan hazırlığı vb.). Düzenleme ve Düzeltme: Kazı sonrası zemin düzenlenir, düzgünleştirilir ve yerinde sıkıştırma yapılır.', '2023-12-09', '../../img/hafriyatIslemleriAsaması', 3),
(6, 'Ekskavatörler (Köprücü Makineleri)', 'Kamyonlar ve Tipperler (Dumperler)', 'Ekskavatörler, kazı işlemlerinde en yaygın kullanılan ekipmanlardır.\n\nGenel Kullanım: Zemin kazma, kanal açma, sıva çıkarma gibi işlemlerde kullanılır.\nEkipman Özellikleri: Farklı boyut ve kapasitelere sahip olan ekskavatörler, hem küçük alanlarda hem de büyük alanlarda etkili sonuçlar sağlar.', 'Hafriyat sonrası taşınması gereken malzemelerin taşınmasında kullanılır.  Kamyonlar: Hafriyat malzemelerinin kısa mesafelerde taşınmasında kullanılır. Tipperler (Dumperler): Taşıma kapasitesi yüksek olan bu araçlar, kazı malzemelerinin daha uzak mesafelere taşınmasında ve dökülmesinde kullanılır.', '2024-01-01', '../../img/HafriyatdaKullanilanEkipman', 3),
(7, 'Kiralama Süreleri ve Esneklik', 'Kiralama İçin Gerekli Belgeler ve Şartlar', 'İş makineleri kiralama, inşaat projelerinde maliyetleri düşürmenin ve verimliliği artırmanın etkili yollarından biridir. Kiralama süreleri genellikle projelerin ihtiyaçlarına göre belirlenir.\n\nKısa Süreli Kiralama: Günlük veya haftalık bazda kiralama seçeneği sunulur, bu, küçük çaplı projeler veya acil ihtiyaçlar için uygundur.\nUzun Süreli Kiralama: Büyük projelerde veya uzun vadeli inşaat süreçlerinde, aylık veya yıllık kiralama sözleşmeleri yapılabilir. Bu tür kiralamalar, makinelerin daha verimli kullanımını sağlar ve genellikle daha uygun fiyatlarla sunulur.\nEsneklik: Kiralama süresi esnek olup, projedeki gelişmelere göre uzatma veya kısaltma işlemleri yapılabilir.', 'İş makinesi kiralamak için bazı temel şartlar ve belgeler gerekebilir.\n\nKimlik ve İletişim Bilgileri: Kiralama işlemi için, kullanıcıdan kimlik ve iletişim bilgileri talep edilir.\nKiralama Sözleşmesi: Makinelerin kiralanabilmesi için sözleşme yapılır. Bu sözleşme, kiralama süresi, makinenin türü, kullanım şartları ve bakım hizmetlerine dair detayları içerir.\nSigorta: Kiralanan makinelerin sigortalı olması gerekebilir. Kiralama şirketi genellikle sigorta seçenekleri sunar.\nÖdeme ve Depozito: Kiralama bedelinin ödeme şartları ve depozito miktarı sözleşmede belirtilir', '2023-12-12', '../../img/isMakinesiKiralama', 4),
(8, 'Yüksek Maliyetlerden Kaçınma', 'Zamanında ve Verimli Proje Yönetimi', 'İş makinelerinin satın alınması, büyük yatırımlar gerektirir. Ancak kiralama, bu tür yatırımlardan kaçınmanızı sağlar.\n\nBaşlangıç Yatırımı Gerektirmez: Yüksek maliyetli makineleri satın almak yerine, günlük veya uzun vadeli kiralama ile gerekli ekipmana ulaşılabilir.\nBakım ve Onarım Masrafları: Kiralama şirketleri, makinelerin bakım ve onarım masraflarını üstlenir. Bu da proje sahipleri için ek maliyetleri ortadan kaldırır.', 'İş makineleri, inşaat projelerinin hızla ve verimli bir şekilde tamamlanmasını sağlar. Kiralama, makinelerin zamanında temin edilmesi ve doğru projelerde kullanılması için mükemmel bir seçenektir.  Yüksek Performans: Kiralama şirketleri genellikle en son teknolojiye sahip, bakımlı ve güvenilir makineler sunar. Bu, projelerin zamanında ve kaliteli bir şekilde tamamlanmasını sağlar. Farklı İhtiyaçlara Uygun Makine Seçimi: Proje türüne göre farklı makineler gerekebilir. Kiralama, her projeye özel makinelerin temin edilmesini sağlar. Örneğin, büyük kazı işlerinde ekskavatör, küçük alanlarda ise mini yükleyici kiralanabilir.', '2023-12-28', '../../img/isMakinesiKiralamaAvantajı.jpg', 4),
(9, 'İnşaat Malzemeleri Taşıma', 'Tecrübeli Ekip ve Güvenli Taşıma', 'İnşaat projeleri, malzeme taşımacılığı için yüksek kapasiteye sahip araçlara ihtiyaç duyar. Nakliye hizmetleri, doğru ekipman ve lojistik planlama ile malzemelerin güvenli ve zamanında teslim edilmesini sağlar.\n\nYüksek Kapasiteli Araçlar: Çimento, kum, agrega gibi büyük hacimli malzemeler için uygun taşıma araçları kullanılır.\nDuyarlı Zamanlama: İnşaat malzemelerinin doğru zamanda projeye teslim edilmesi kritik önem taşır. Nakliye şirketleri, malzemelerin zamanında teslim edilmesi için uygun planlamalar yapar.\nÖzel Taşıma Araçları: Yüksek ve geniş malzemelerin taşınması için, özel araçlar ve ekipmanlar kullanılır (örneğin, vinçli araçlar, uzun yük taşıma araçları).', 'Nakliye hizmetlerinde kullanılan araçlar kadar, taşıma sırasında güvenlik de önemli bir faktördür.\n\nDeneyimli Sürücüler: Nakliye işlemi sırasında, deneyimli sürücüler tarafından yapılan taşıma işlemleri, hem malzeme hem de trafik güvenliğini artırır.\nSigortalı Taşıma: Nakliye sırasında malzemelerin zarar görmesi ihtimaline karşı sigorta hizmetleri sunulabilir. Bu, olası hasar durumlarında güvenliği artırır.\nGüvenli Yükleme ve Boşaltma: Malzemelerin güvenli bir şekilde yüklenip boşaltılması için ekipmanlar ve ekip, her adımı dikkatle takip eder.', '2024-01-02', '../../img/nakliye', 5),
(11, 'Tüm Hizmetlerimiz ve Çözümlerimiz', '', 'Firmamız, inşaat sektöründe geniş bir yelpazede hizmet sunarak, her türlü inşaat projesini zamanında ve en yüksek kalitede tamamlamanızı sağlar. Profesyonel ekiplerimiz ve gelişmiş teknolojilerimizle, her türlü inşaat işleminizi güvenli, verimli ve ekonomik bir şekilde gerçekleştiriyoruz. Aşağıda sunduğumuz hizmetlerimiz hakkında detaylı bilgi bulabilirsiniz:\n\nFirmamız, inşaat sektöründe geniş bir yelpazede hizmet sunarak, her türlü inşaat projesini zamanında ve en yüksek kalitede tamamlamanızı sağlar. Profesyonel ekiplerimiz ve gelişmiş teknolojilerimizle, her türlü inşaat işleminizi güvenli, verimli ve ekonomik bir şekilde gerçekleştiriyoruz. Aşağıda sunduğumuz hizmetlerimiz hakkında detaylı bilgi bulabilirsiniz:\n\n', '', '2024-01-01', '../../img/tümHizmetler.webp', 6);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'dad', 'zczc@gmail.com', 'zczc', 'adada', '2024-12-17 16:48:44'),
(2, 'dad', 'zczc@gmail.com', 'zczc', 'cacac', '2024-12-17 16:48:55'),
(3, 'm m', 'ttete@gmail.com', 'tete', 'tryrr', '2024-12-17 22:56:12');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contactinfo`
--

DROP TABLE IF EXISTS `contactinfo`;
CREATE TABLE IF NOT EXISTS `contactinfo` (
  `contactInfo_Id` int NOT NULL AUTO_INCREMENT,
  `phone` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  PRIMARY KEY (`contactInfo_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `contactinfo`
--

INSERT INTO `contactinfo` (`contactInfo_Id`, `phone`, `email`, `adress`) VALUES
(1, '01211211212', 'nisaseyhun@gmail.com', 'bu adres deneme');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

DROP TABLE IF EXISTS `kategoriler`;
CREATE TABLE IF NOT EXISTS `kategoriler` (
  `kategoriID` int NOT NULL AUTO_INCREMENT,
  `kategoriAdi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `kategoriResmi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`kategoriID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategoriID`, `kategoriAdi`, `kategoriResmi`) VALUES
(1, 'Ev Temeli', '../../img/evYeri.png'),
(2, 'Yol Yapımı', '../../img/yolYapımı.jpg'),
(3, 'Hafriyat İşlemleri', '../../img/hafriyat.jpg'),
(4, 'İş Makinesi Kiralama', '../../img/isMakineleri.jpg'),
(5, 'Nakliye İşlemleri', '../../img/nakliye.webp'),
(6, 'Tüm Hizmetler', '../../img/hizmetlerimiz.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `kul_id` int NOT NULL AUTO_INCREMENT,
  `kul_adi` varchar(50) NOT NULL,
  `kul_sifre` varchar(255) NOT NULL,
  `rol` enum('admin','kullanici') DEFAULT 'kullanici',
  PRIMARY KEY (`kul_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kul_id`, `kul_adi`, `kul_sifre`, `rol`) VALUES
(5, 'as', '$2y$10$gtf0dAT1jST3IQlhefYCFOwuanpGAogXG8IDunz0VPB8dXkzLT5di', 'kullanici'),
(2, 'a', '$2y$10$tEfHpTQMasI1xapswdN/9.k7zH4g7dzOAguOydv5HAxya.mXcMMvS', 'admin'),
(3, 'sd', '$2y$10$UkeZKR.UTQHqHXriTzczguLgs4CpdMJINsOAD8s16wBToOxVBvXlC', 'admin'),
(4, 'qw', '$2y$10$DjFNvg3inQDRoiT0whgDe.RSLMqsZvkPMXK51IbUySk2f/eoii8dW', 'admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `news_Id` int NOT NULL AUTO_INCREMENT,
  `news_Title` varchar(50) NOT NULL,
  `news_Img` varchar(255) NOT NULL,
  `news_Content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`news_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `news`
--

INSERT INTO `news` (`news_Id`, `news_Title`, `news_Img`, `news_Content`) VALUES
(10, 'Yenilikçi İnşaat Teknolojileri ile Çevre Dostu Yap', '../uploadImage/indir.jpeg', 'İstanbul, 18 Aralık 2024 – İnşaat sektöründeki yenilikçi çözümlerimizle, hem sürdürülebilirlik hem de çevre dostu projelere imza atıyoruz. Son yıllarda hızla gelişen inşaat teknolojileriyle, daha verimli, dayanıklı ve çevreye duyarlı yapılar inşa etmek için çalışıyoruz.\r\n\r\nFirmamız, çevreyi koruma bilinciyle, enerji verimliliği yüksek binalar inşa etmeye devam ediyor. Gelişmiş ısı yalıtım teknolojileri, geri dönüştürülmüş malzeme kullanımı ve düşük enerji tüketen yapılar ile doğal kaynakların korunmasına katkı sağlıyoruz.\r\n\r\nSertifikalı Yeşil Binalar\r\nSunduğumuz projelerde, yeşil bina sertifikasına sahip yapılar ön planda tutuluyor. LEED ve BREEAM sertifikalarına sahip binalar, enerji verimliliği ve sürdürülebilirlik anlamında sektördeki en yüksek standartları karşılamaktadır. Bu projeler, sadece kullanıcıların yaşam kalitesini artırmakla kalmıyor, aynı zamanda çevre dostu teknolojilerle uzun vadede daha düşük karbon ayak izi bırakıyor.\r\n\r\nYeni Projemiz: Yeşil Kentsel Dönüşüm\r\nYılın sonlarına doğru başlatacağımız \"Yeşil Kentsel Dönüşüm Projesi\" ile, İstanbul’un en yoğun bölgelerinden birinde büyük bir dönüşüm gerçekleştiriyoruz. Bu projede, eski yapıların modern, çevre dostu ve enerji verimli hale getirilmesi hedefleniyor. Ayrıca, sosyal alanlar ve yeşil alanların arttırılması ile şehre nefes aldıracak bir yaşam alanı yaratmayı amaçlıyoruz.\r\n\r\nGeleceğin İnşaat Teknolojisi\r\nGelecek odaklı projelerimizde, 3D baskı teknolojisi, robotik inşaat ve yapay zeka destekli proje yönetim sistemlerini kullanarak, projelerimizi daha hızlı ve daha güvenli bir şekilde tamamlıyoruz. Bu teknolojiler, inşaat sektörünün daha sürdürülebilir, hızlı ve verimli olmasına yardımcı oluyor.\r\n\r\nİleriye Bakış\r\nFirmamız, çevre dostu projelerle sektördeki liderliğini pekiştirmeye devam ediyor. Hem inşaatın her aşamasında hem de sonrasında çevre dostu çözümler sunarak, hem sektöre hem de topluma katkı sağlamayı hedefliyoruz. İleriye dönük projelerimizde, sürdürülebilir yapılar inşa etmeyi sürdürmeyi amaçlıyoruz.\r\n\r\nİnşaat sektöründeki en son gelişmelerden haberdar olmak için bizi takip edin.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `service_Id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `img` varchar(250) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`service_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
