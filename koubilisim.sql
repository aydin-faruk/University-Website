-- phpMyAdmin SQL Dump
-- version 2.11.10.1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 26 Mart 2018 saat 14:42:10
-- Sunucu sürümü: 5.0.95
-- PHP Sürümü: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Veritabanı: `bilisim`
--

-- --------------------------------------------------------

--
-- Tablo yapısı: `akademikpersonel`
--

CREATE TABLE IF NOT EXISTS `akademikpersonel` (
  `APersonelID` int(11) NOT NULL auto_increment,
  `Unvan` varchar(50) NOT NULL,
  `Adi` varchar(50) NOT NULL,
  `Soyadi` varchar(50) NOT NULL,
  `DahiliTel` varchar(50) NOT NULL,
  `Eposta` varchar(50) NOT NULL,
  `WebAdresi` varchar(250) default NULL,
  `ResimYolu` varchar(250) NOT NULL,
  `Sifresi` varchar(50) default NULL,
  `Yetki` tinyint(1) NOT NULL,
  `TamYetki` tinyint(1) NOT NULL,
  `Sira` int(11) NOT NULL,
  PRIMARY KEY  (`APersonelID`),
  UNIQUE KEY `Eposta` (`Eposta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Tablo döküm verisi `akademikpersonel`
--

INSERT INTO `akademikpersonel` (`APersonelID`, `Unvan`, `Adi`, `Soyadi`, `DahiliTel`, `Eposta`, `WebAdresi`, `ResimYolu`, `Sifresi`, `Yetki`, `TamYetki`, `Sira`) VALUES
(5, 'KOÜ', 'Bilişim Sistemleri', 'Müh.', '22 02', 'bilisim@kocaeli.edu.tr', 'http://bilisim.kocaeli.edu.tr/', '', 'a22f9d52a70881b1d7eef95f916ac6e7', 1, 1, -1),
(10, 'Prof. Dr.', 'Mehmet', 'YILDIRIM', ' 0262 303 2237', 'myildirim@kocaeli.edu.tr', 'http://akademikpersonel.kocaeli.edu.tr/myildirim/', 'Dosyalar/APersonel/myildirim.png', '6ca829972189f3136d7d373a1e9d8ff6', 1, 0, 1),
(11, 'Doç. Dr.', 'Halil', 'YİĞİT', ' 0262 303 2259', 'halilyigit@kocaeli.edu.tr', 'http://akademikpersonel.kocaeli.edu.tr/halilyigit/', 'Dosyalar/APersonel/halilyigit.jpg', '33e7272f93748134d86e28793bc1c725', 1, 1, 2),
(12, 'Doç. Dr.', 'Hikmet Hakan', 'GÜREL', ' 0262 303 2215', 'hhakan.gurel@kocaeli.edu.tr', 'http://akademikpersonel.kocaeli.edu.tr/hhakan.gurel/', 'Dosyalar/APersonel/hikmethakangürel.jpg', '7fa4987beba4cec52afd14145d7e175f', 1, 0, 3),
(13, 'Yrd. Doç. Dr.', 'Adnan', 'SONDAŞ', ' 0262 303 2258', 'asondas@kocaeli.edu.tr', 'http://akademikpersonel.kocaeli.edu.tr/asondas/', 'Dosyalar/APersonel/adnansondas.jpg', 'f1d324e37931b887b73f9b5e6a8c01d4', 1, 0, 4),
(14, 'Yrd. Doç. Dr.', 'Mustafa Hikmet Bilgehan', 'UÇAR', ' 0262 303 2261', 'mhbucar@kocaeli.edu.tr', 'http://akademikpersonel.kocaeli.edu.tr/mhbucar/', '', 'dad8029834047f59d5dee58347749e5f', 1, 0, 5),
(15, 'Öğr. Gör.', 'Alper', 'Metin', ' 0262 303 2231', 'alperm@kocaeli.edu.tr', 'http://akademikpersonel.kocaeli.edu.tr/alperm/', 'Dosyalar/APersonel/alpermetin.jpg', '3c638e42ca7757ab28c47030abb87741', 1, 0, 6),
(17, 'Öğr. Gör.', 'Yavuz Selim', 'Fatihoğlu', ' 0262 303 2295', 'yselim@kocaeli.edu.tr', 'http://akademikpersonel.kocaeli.edu.tr/yselim/', 'Dosyalar/APersonel/yavuzselimfatihoglu4.jpg', '7b630bed8cf55cac05423add58b99500', 1, 1, 7),
(18, 'Arş. Gör.', 'Mehmet Zeki', 'KONYAR', ' 0262 303 2298', 'mzeki.konyar@kocaeli.edu.tr', 'http://akademikpersonel.kocaeli.edu.tr/mzeki.konyar/', 'Dosyalar/APersonel/mehmetzekikonyar4.jpg', 'e3b859331df0d75fd657126c6249a9f7', 1, 1, 8),
(19, 'Arş. Gör.', 'Sümeyya', 'İLKİN', ' 0262 303 2249', 'sumeyya.ilkin@kocaeli.edu.tr', 'http://akademikpersonel.kocaeli.edu.tr/sumeyya.ilkin/', 'Dosyalar/APersonel/sumeyyeilkin2.jpg', 'cb89384cb51c102b16af94776d28953f', 1, 0, 9),
(21, 'Arş. Gör.', 'Bahadır', 'SALMANKURT', ' 0262 303 2251', 'bahadir.salmankurt@kocaeli.edu.tr', 'http://akademikpersonel.kocaeli.edu.tr/bahadir.salmankurt/', 'Dosyalar/APersonel/bahadirsalmankurt.jpg', '30424201ae2023df33b33db1df960021', 1, 0, 10);

-- --------------------------------------------------------

--
-- Tablo yapısı: `amac`
--

CREATE TABLE IF NOT EXISTS `amac` (
  `AmacID` int(11) NOT NULL auto_increment,
  `Aciklama` longtext NOT NULL,
  PRIMARY KEY  (`AmacID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `amac`
--

INSERT INTO `amac` (`AmacID`, `Aciklama`) VALUES
(1, '<p>Bilişim Sistemleri M&uuml;hendisliği Lisans/Lisans&uuml;st&uuml; Programı ile hızlı değişim g&ouml;steren bilişim sekt&ouml;r&uuml;ne, teknik altyapıya ve &ccedil;&ouml;z&uuml;m &uuml;retme yeteneğine sahip geleceğin liderlerinin hazırlanması ama&ccedil;lanmaktadır. Eğitim-&ouml;ğretim ve araştırma alanlarındaki hedeflerimiz şu şekilde sıralanabilir:</p>\r\n\r\n<ul>\r\n	<li>Teknik alanda yenilik&ccedil;i ve m&uuml;kemmel hizmet anlayışı,</li>\r\n	<li>G&uuml;venilir ve g&uuml;venlikli hizmetler,</li>\r\n	<li>Personel uzmanlığı ve profesyonelliği,</li>\r\n	<li>Kaynakların verimli kullanımı,</li>\r\n	<li>Dış ve i&ccedil; ortak &ccedil;alışma olanakları.</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Tablo yapısı: `bolumduyuru`
--

CREATE TABLE IF NOT EXISTS `bolumduyuru` (
  `BolumDuyuruID` int(11) NOT NULL auto_increment,
  `APersonelID` int(11) NOT NULL,
  `Baslik` varchar(250) NOT NULL,
  `Aciklama` longtext,
  `Tarih` date NOT NULL,
  `DurumAnasayfa` tinyint(1) NOT NULL,
  `DurumTumDuyuru` tinyint(1) NOT NULL,
  PRIMARY KEY  (`BolumDuyuruID`),
  KEY `APersonelID` (`APersonelID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Tablo döküm verisi `bolumduyuru`
--

INSERT INTO `bolumduyuru` (`BolumDuyuruID`, `APersonelID`, `Baslik`, `Aciklama`, `Tarih`, `DurumAnasayfa`, `DurumTumDuyuru`) VALUES
(13, 5, 'SINAV KURALLARI', '<p>Ayrıntılar ektedir.&nbsp;</p>\r\n', '2016-09-19', 1, 1),
(19, 19, 'Polıtechnıka Częstochowska ile Erasmus Antlaşması', '<p>B&ouml;l&uuml;m&uuml;m&uuml;z&nbsp;Erasmus+ programı &ccedil;er&ccedil;evesinde &quot;<a href="http://www.pcz.pl/english/" target="_blank"><strong>Politechnika Częstochowska</strong></a>&quot; &Uuml;niversitesi ile antlaşma imzalamıştır.</p>\r\n\r\n<p><strong>2018-2019 Eğitim - &Ouml;ğretim yılından</strong> itibaren &ouml;ğrencilerimiz Erasmus+ &ouml;ğrenim değişim programından yararlanabileceklerdir.</p>\r\n', '2017-10-05', 1, 1),
(20, 17, 'Ders muafiyet dilekçe örneği', '<p>Ders muafiyet dilek&ccedil;e &ouml;rneği</p>\r\n', '2017-10-12', 1, 1),
(22, 19, 'Marijampoles Kolegija İLE ERASMUS ANTLAŞMASI', '<p>B&ouml;l&uuml;m&uuml;m&uuml;z&nbsp;Erasmus+ programı &ccedil;er&ccedil;evesinde &quot;<strong><a href="http://www.marko.lt/en/" target="_blank">Marijampoles Kolegija</a></strong>&quot; &Uuml;niversitesi ile antlaşma imzalamıştır.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2017-11-01', 1, 1),
(23, 19, 'Liepaja University  İLE ERASMUS ANTLAŞMASI', '<p>B&ouml;l&uuml;m&uuml;m&uuml;z&nbsp;Erasmus+ programı &ccedil;er&ccedil;evesinde &quot;<strong></strong><a href="https://www.liepu.lv/en/56/information-technology-bachelor" target="_blank"><strong>Liepaja University</strong></a>&nbsp;&quot; &Uuml;niversitesi ile antlaşma imzalamıştır.</p>\r\n', '2017-11-01', 1, 1);

-- --------------------------------------------------------

--
-- Tablo yapısı: `bolumduyurudosya`
--

CREATE TABLE IF NOT EXISTS `bolumduyurudosya` (
  `DosyaID` int(11) NOT NULL auto_increment,
  `BolumDuyuruID` int(11) NOT NULL,
  `DosyaYol` varchar(250) default NULL,
  PRIMARY KEY  (`DosyaID`),
  KEY `BolumDuyuruID` (`BolumDuyuruID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Tablo döküm verisi `bolumduyurudosya`
--

INSERT INTO `bolumduyurudosya` (`DosyaID`, `BolumDuyuruID`, `DosyaYol`) VALUES
(7, 13, 'Dosyalar/BolumDuyuru/sinavlarda-uyulmasi-gereken-kurallar.jpg'),
(13, 20, 'Dosyalar/BolumDuyuru/ders_muafiyet_basvuru_dilekcesi.docx');

-- --------------------------------------------------------

--
-- Tablo yapısı: `dersnot`
--

CREATE TABLE IF NOT EXISTS `dersnot` (
  `DersNotID` int(11) NOT NULL auto_increment,
  `APersonelID` int(11) NOT NULL,
  `Baslik` varchar(100) NOT NULL,
  `Aciklama` longtext,
  `DurumAnasayfa` tinyint(1) NOT NULL,
  PRIMARY KEY  (`DersNotID`),
  KEY `APersonelID` (`APersonelID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Tablo döküm verisi `dersnot`
--

INSERT INTO `dersnot` (`DersNotID`, `APersonelID`, `Baslik`, `Aciklama`, `DurumAnasayfa`) VALUES
(6, 11, 'KABLOSUZ AĞ TEK. VE UYGULAMALARI', '<p>Kablosuz Ağ Teknolojileri ve Uygulamaları Ders Notlarına aşağıdaki linkten erişebilirsiniz.</p>\r\n\r\n<p><a href="https://www.dropbox.com/sh/ecpyabv78x5xdn8/AAD4t8nJsidlK5GPVGUAeGASa?dl=0" target="_blank">https://www.dropbox.com/sh/ecpyabv78x5xdn8/AAD4t8nJsidlK5GPVGUAeGASa?dl=0</a></p>\r\n', 0),
(8, 21, 'ELEKTRİK-ELEKTRONİK DEVRELER LAB', '<p>Rapor formatı yenilenmiştir. 13.10.2017 tarihinden itibaren teslim edeceğiniz raporları bu yeni formata g&ouml;re yapınız. Deneylerin sırası da yeni rapora g&ouml;re olacaktır. Ayrıca raporları grup arkadaşınızla d&ouml;n&uuml;ş&uuml;ml&uuml; olarak hazırlayacaksınız, herbir grup i&ccedil;in 1 adet rapor olması yeterlidir.</p>\r\n', 1),
(9, 11, 'VERİ HABERLEŞMESİ', '<p>Veri Haberleşmesi Ders Notlarına aşağıdaki linkten erişebilirsiniz.</p>\r\n\r\n<p><a href="https://www.dropbox.com/sh/8cap6wpwne7y9fw/AAAUrax0I3_z2HjqyYbj40mMa?dl=0" target="_blank">https://www.dropbox.com/sh/8cap6wpwne7y9fw/AAAUrax0I3_z2HjqyYbj40mMa?dl=0</a></p>\r\n', 0),
(10, 11, 'İSTATİSTİK VE OLASILIK', '<p>İstatistik ve Olasılık Ders Notlarına aşağıdaki linkten erişebilirsiniz.</p>\r\n\r\n<p><a href="https://www.dropbox.com/sh/t6f2qbpfjol2fgr/AACv5yPsG0zxHaQOyH90SzU_a?dl=0" target="_blank">https://www.dropbox.com/sh/t6f2qbpfjol2fgr/AACv5yPsG0zxHaQOyH90SzU_a?dl=0</a></p>\r\n', 0),
(12, 11, 'BİLGİSAYAR MİMARİSİ VE ORGANİZASYONU', '<p>Bilgisayar Mimarisi ve Organizasyonu Ders Notlarına aşağıdaki linkten erişebilirsiniz.</p>\r\n\r\n<p><a href="https://www.dropbox.com/sh/xowjfxrjqo27m5r/AADXvo3vCJJDO4yT2Og5vqMma?dl=0" target="_blank">https://www.dropbox.com/sh/xowjfxrjqo27m5r/AADXvo3vCJJDO4yT2Og5vqMma?dl=0</a></p>\r\n', 0),
(13, 11, 'WEB TASARIMI VE UYGULAMALARI', '<p>Derste Web Tasarım Temelleri (Musa &Ccedil;İ&Ccedil;EK) kitabı takip edilmektedir (Dreamweaver B&ouml;l&uuml;m&uuml; Hari&ccedil;). Diğer yardımcı ders notlarına erişebilmek i&ccedil;in <strong><a href="https://kocaeliedutr0-my.sharepoint.com/:f:/g/personal/halilyigit_kocaeli_edu_tr/EuMDrvJJ5ndDt9yPSh7HWVkBJ3Ke6AlTuw22uWt054DOcQ?e=c25DSU">tıklayınız</a></strong>.</p>\r\n', 1),
(14, 19, 'PROGRAMLAMA LAB. I ÖRNEK ÇALIŞMA SORULARI', '', 1),
(15, 17, 'Oyun Programlama Ders Notları-1', '<p>Oyun programlama slaytları-1</p>\r\n', 1),
(16, 17, 'Oyun Programlama Ders Notları-2', '<h2>Oyun programlama ders slaytları- Terrain oluşturma..Entry Menu..UI elements.</h2>\r\n', 1),
(17, 17, 'Oyun Programlama Ders Notları-3', '<h2>Oyun Programlama Ders Notları-3</h2>\r\n\r\n<h2>-Augmented Reality Uygulama</h2>\r\n', 1),
(20, 18, 'ELEKTRİK ELEKTRONİK DEVRELER', '<p>Ektedir.&nbsp; Sunumların Kaynak kısmında eksiklikler var. Sonradan g&uuml;ncellenecektir.</p>\r\n', 1),
(21, 11, 'BİLGİSAYAR PROGRAMLAMA', '<p>Bilgisayar Programlama dersi notlarına aşağıdaki linkten erişebilirsiniz.</p>\r\n\r\n<p><a href="https://www.dropbox.com/sh/w4kyen3aeaysrjo/AAB_KUpCVDvT_4Ng2AnODa9Fa?dl=0" target="_blank">https://www.dropbox.com/sh/w4kyen3aeaysrjo/AAB_KUpCVDvT_4Ng2AnODa9Fa?dl=0</a></p>\r\n\r\n<p>&nbsp;</p>\r\n', 0),
(23, 21, 'MANTIK DEVRELER LAB.', '<p>Lab. f&ouml;y&uuml;, kurallar&nbsp; ve proje ile ilgili bilgiler ektedir. Projenizde kullanacağınız sayılar da ekte bulunmanktadır.&nbsp;</p>\r\n', 1),
(24, 13, 'Mantık Devreler 1. Hafta', '', 1),
(25, 11, 'MATLAB PROGRAMLAMA', '<p>Matlab Programlama dersi notlarına erişebilmek i&ccedil;in <strong><a href="https://kocaeliedutr0-my.sharepoint.com/:f:/g/personal/halilyigit_kocaeli_edu_tr/EiCT8UBmiidBis-yOACrKXoBALH4Db9Qiz6xqDRANgyaCQ?e=xTGhr7">tıklayınız</a></strong>.</p>\r\n', 1),
(26, 11, 'LİNEER CEBİR', '<p>Lineer Cebir ders notlarına erişebilmek i&ccedil;in <strong><a href="https://kocaeliedutr0-my.sharepoint.com/:f:/g/personal/halilyigit_kocaeli_edu_tr/ErpY7LbfyvdDuwiCA78jKZ0BU_RO5CK-QaYVCcHPyGt85A?e=6OY9po">tıklayınız</a></strong>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1),
(27, 11, 'TEMEL ELEKTRONİK', '<p>Temel Elektronik dersi notlarına erişebilmek i&ccedil;in <strong><a href="https://kocaeliedutr0-my.sharepoint.com/:f:/g/personal/halilyigit_kocaeli_edu_tr/Enq_sXixUJpPu5VAHC0Bjh0BqzZ8KUpelGgNwNf_xliXaw?e=kPnxNB">tıklayınız</a></strong>.</p>\r\n', 1),
(28, 11, 'ADLİ BİLİŞİM', '<p>Adli Bilişim ders notlarına erişebilmek i&ccedil;in <a href="https://kocaeliedutr0-my.sharepoint.com/:f:/g/personal/halilyigit_kocaeli_edu_tr/EgUCD4JJtSdKpyC5StsDH8oB1yBCuQlCJ9ou56x8zbHH4w?e=ZPMsQt"><strong>tıklayınız</strong></a>.</p>\r\n', 1),
(29, 18, 'BİLGİSAYAR AĞLARI LAB.', '', 1),
(30, 13, 'Mantık Devreler Hafta3', '', 1),
(31, 13, 'Mantık Devreler Hafta2', '', 1),
(32, 13, 'Mantık Devreler Hafta4', '', 1),
(33, 13, 'Sayısal Analiz Hafta1', '', 1),
(34, 13, 'Sayısal Analiz Hafta3', '', 1),
(35, 13, 'Sayısal Analiz Hafta4', '', 1),
(36, 13, 'Sayısal Analiz Hafta5', '', 1),
(37, 13, 'Sayısal Analiz Hafta6', '', 1);

-- --------------------------------------------------------

--
-- Tablo yapısı: `dersnotdosya`
--

CREATE TABLE IF NOT EXISTS `dersnotdosya` (
  `DosyaID` int(11) NOT NULL auto_increment,
  `DersNotID` int(11) NOT NULL,
  `DosyaYol` varchar(250) default NULL,
  PRIMARY KEY  (`DosyaID`),
  KEY `DersNotID` (`DersNotID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=73 ;

--
-- Tablo döküm verisi `dersnotdosya`
--

INSERT INTO `dersnotdosya` (`DosyaID`, `DersNotID`, `DosyaYol`) VALUES
(14, 14, 'Dosyalar/DersNotlari/programlamaya-giris-ornek-calisma-sorulari.pdf'),
(15, 15, 'Dosyalar/DersNotlari/unitylectureslides1-rollaballaudio.rar'),
(16, 16, 'Dosyalar/DersNotlari/unitylectureslides2-terrain-entrymenuevents.rar'),
(17, 17, 'Dosyalar/DersNotlari/unitylectureslides3-aruygulama.rar'),
(33, 8, 'Dosyalar/DersNotlari/deney_rapor_formati.pdf'),
(34, 8, 'Dosyalar/DersNotlari/elektrik-elektronik-devreler-lab-foyu.pdf'),
(35, 8, 'Dosyalar/DersNotlari/laboratuvar-kurallari.pdf'),
(36, 20, 'Dosyalar/DersNotlari/01-giris.pdf'),
(37, 20, 'Dosyalar/DersNotlari/02-ohm-akim-gerilim.pdf'),
(38, 20, 'Dosyalar/DersNotlari/03-ornekler.pdf'),
(39, 20, 'Dosyalar/DersNotlari/04-direnc-renk-kodlari.pdf'),
(40, 20, 'Dosyalar/DersNotlari/05-thevenin-norton-teoremleri.pdf'),
(41, 20, 'Dosyalar/DersNotlari/06-maksimum-guc-teoremi.pdf'),
(42, 20, 'Dosyalar/DersNotlari/07-superpozisyon-teoremi.pdf'),
(43, 20, 'Dosyalar/DersNotlari/08-dugum-gerilimleri.pdf'),
(44, 20, 'Dosyalar/DersNotlari/09-cevre-akimlari.pdf'),
(45, 20, 'Dosyalar/DersNotlari/11-bobin-enduktor.pdf'),
(46, 20, 'Dosyalar/DersNotlari/10-kapasitor.pdf'),
(47, 20, 'Dosyalar/DersNotlari/12-diyot.pdf'),
(48, 20, 'Dosyalar/DersNotlari/13-ac-dc.pdf'),
(49, 20, 'Dosyalar/DersNotlari/14-dogrultucular.pdf'),
(50, 20, 'Dosyalar/DersNotlari/15-kirpici-kenetleyici.pdf'),
(51, 20, 'Dosyalar/DersNotlari/16-transistor.pdf'),
(58, 23, 'Dosyalar/DersNotlari/kurallar.pdf'),
(59, 23, 'Dosyalar/DersNotlari/mantikfoy2018.pdf'),
(60, 23, 'Dosyalar/DersNotlari/proteuskullanim.pdf'),
(61, 24, 'Dosyalar/DersNotlari/hafta1.pdf'),
(62, 29, 'Dosyalar/DersNotlari/complete-lab-manual-computer-networks1.pdf'),
(63, 30, 'Dosyalar/DersNotlari/mantik-devreleri-hafta3.pdf'),
(64, 31, 'Dosyalar/DersNotlari/mantik-devreleri-hafta2.pdf'),
(65, 32, 'Dosyalar/DersNotlari/mantik-devreleri-hafta4.pdf'),
(66, 33, 'Dosyalar/DersNotlari/1-sayisal-analize-giris-ogr.pdf'),
(67, 34, 'Dosyalar/DersNotlari/3-sayisal-analizde-hata-kavrami-ogr.pdf'),
(68, 35, 'Dosyalar/DersNotlari/4-denklem-cozumleri-ogr.pdf'),
(69, 36, 'Dosyalar/DersNotlari/5-denklem-cozumleri-devam_ogr.pdf'),
(70, 23, 'Dosyalar/DersNotlari/projebilgiler.rar'),
(71, 23, 'Dosyalar/DersNotlari/projesayilari.pdf'),
(72, 37, 'Dosyalar/DersNotlari/6-lineer-denklem-sistemleri_ogr.pdf');

-- --------------------------------------------------------

--
-- Tablo yapısı: `duyuru`
--

CREATE TABLE IF NOT EXISTS `duyuru` (
  `DuyuruID` int(11) NOT NULL auto_increment,
  `APersonelID` int(11) NOT NULL,
  `Baslik` varchar(250) NOT NULL,
  `Aciklama` longtext,
  `Tarih` date NOT NULL,
  `SonTarih` date NOT NULL,
  `DurumAnasayfa` tinyint(1) NOT NULL,
  `DurumTumDuyuru` tinyint(1) NOT NULL,
  PRIMARY KEY  (`DuyuruID`),
  KEY `APersonelID` (`APersonelID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=174 ;

--
-- Tablo döküm verisi `duyuru`
--

INSERT INTO `duyuru` (`DuyuruID`, `APersonelID`, `Baslik`, `Aciklama`, `Tarih`, `SonTarih`, `DurumAnasayfa`, `DurumTumDuyuru`) VALUES
(119, 5, '2017-2018 EĞİTİM ÖĞRETİM YILI GÜZ YARIYILI DERS PROGRAMI', '', '2017-09-11', '2018-12-29', 1, 1),
(138, 19, 'Erasmus+ İngilizce Dil Kursu', '<p>Kocaeli &Uuml;niversitesi Uluslararası İlişkiler Birimi ve S&uuml;rekli Eğitim Merkezinin (KO&Uuml;SEM) ortak işbirliği ile, 2018/19 &Ouml;ğretim yılı Erasmus + &Ouml;ğrenim ve Staj Hareketliliği programlarından yararlanmak isteyen &ouml;ğrencilerimize y&ouml;nelik Erasmus+ İngilizce Dil Sınavı hazırlık kursu d&uuml;zenlenecektir. İngilizce dil kursu s&uuml;resince &ouml;ğrencilerimizin &ouml;deyeceği toplam kurs &uuml;creti 200 TL&#39;dir. KURS BAŞLAMA VE BİTİŞ TARİHLERİ 13 KASIM 2017 - 22 ARALIK 2017 - 6 HAFTA - 36 SAAT 15 OCAK 2018 - 02 MART 2018 - 7 HAFTA - 42 SAAT İngilizce dil kursunun hafta i&ccedil;i sabah ve &ouml;ğleden sonra olmak &uuml;zere Uluslararası İlişkiler Birimi dersliklerinde d&uuml;zenlenmesi ve 4 grup şeklinde yapılması planlanmaktadır. İngilizce dil kursu başlangı&ccedil; seviyesini kapsayacağından B Seviyesi ve &uuml;zerindekileri &ouml;ğrenciler i&ccedil;in uygun olmayacaktır. İngilizce dil kursuna başvurmak isteyen &ouml;ğrencilerimiz 07 Kasım 2017 Salı g&uuml;n&uuml;ne kadar aşağıdaki link &uuml;zerinden on-line olarak başvuru yapabilirler. İngilizce dil kursuna fazla başvuru olması halinde, Meslek Y&uuml;ksek Okulu/Y&uuml;ksek Okul ve anlaşma olmasına rağmen dil sınavı sebebiyle daha az değişim yapan Fak&uuml;lte &ouml;ğrencilerine &ouml;ncelik verilecektir. Kursa başvuru yapan &ouml;ğrencilerimizin aynı zamanda 20 Kasım 2017 tarihine kadar kurs &uuml;cretlerini KO&Uuml;SEM&#39;in Ziraat Bankası (IBAN) TR22 0001 0005 5413 2216 1952 38 IBAN nolu hesabına yatırmaları ve dekontlarını birimimize teslim etmeleri gerekmektedir. T&uuml;m &ouml;ğrencilerimizin bilgisine sunulur. İletişim i&ccedil;in: 0 262 303 38 44 mmertkou@gmail.com BAŞVURU LİNKİ <strong>goo.gl/tDgiA4</strong></p>\r\n\r\n<p>E-posta</p>\r\n\r\n<p>intoffice@kocaeli.edu.tr</p>\r\n\r\n<p>Web</p>\r\n\r\n<p><a href="http://int.kocaeli.edu.tr/" target="_blank">http://int.kocaeli.edu.tr</a></p>\r\n\r\n<p>Telefon</p>\r\n\r\n<p>+90 262 303 38 44</p>\r\n', '2017-10-26', '2017-11-07', 0, 1),
(147, 17, 'TEKNO JAM ETKİNLİĞİ', '<p>TEKNO JAM ETKİNLİĞİ</p>\r\n', '2017-12-01', '2017-12-07', 0, 1),
(153, 21, 'İş Yeri Eğitimi Son Başvuru Tarihi', '<p><strong>Bilişim Sistemleri M&uuml;hendisliği B&ouml;l&uuml;m&uuml; &ouml;ğrencileri i&ccedil;in:</strong></p>\r\n\r\n<p>İş Yeri Eğitimi başvuru ve kabul formu&nbsp;onaylı evrağının b&ouml;l&uuml;m&uuml;m&uuml;ze son teslim tarihi&nbsp;<strong>22 Ocak 2018</strong>&nbsp; saat 12:00 olarak&nbsp;belirlenmiştir.</p>\r\n\r\n<p>Formdaki başlama ve bitiş tarihleri ikinci d&ouml;nemin başlama ve bitiş tarihi olarak yazılmak <strong>zorundadır.</strong></p>\r\n\r\n<p>Bilişim Sistemleri M&uuml;hendisliği B&ouml;l&uuml;m Başkanlığı</p>\r\n', '2018-01-12', '2018-02-06', 0, 1),
(154, 21, 'Kentkart Aş. İşyeri eğitimi ilanı', '<p>İlgili duyuru metni ektedir.&nbsp;</p>\r\n', '2018-01-17', '2018-06-12', 0, 1),
(156, 21, '2017-2018 BAHAR YARIYILI İTİBARİ İLE ÖĞRENCİLERİN SEÇEBİLECEKLERİ ÜNİVERSİTELİ SEÇMELİ DERS LİSTESİ', '<p>Bilişim Sistemleri M&uuml;hendisliği &ouml;ğrencilerinin se&ccedil;mesi gereken &uuml;niversite se&ccedil;meli&nbsp;dersleri ekte bulunmaktadır. Ekteki derslerin dışında se&ccedil;im <strong>yapılmayacaktır.</strong> Bu derslerin dışında se&ccedil;im yapılması durumunda danışmanınız tarafından ilgili ders kaldırılıp <strong>listeden rasgele bir ders se&ccedil;ilecektir.&nbsp;</strong></p>\r\n', '2018-01-19', '2018-02-28', 0, 1),
(157, 19, '2018-2019 Erasmus+ Öğrenim ve Staj Hareketliliği Başvuruları Başlamıştır', '<p>2018-2019 Erasmus+ &Ouml;ğrenim ve Staj Hareketliliği başvuruları <strong>16 Ocak 2018 - 16 Şubat 2018</strong> tarihleri arasında alınacaktır. Ayrıntılı bilgi i&ccedil;in l&uuml;tfen linki ziyaret ediniz.</p>\r\n\r\n<p>http://int.kocaeli.edu.tr/index.php?sayfa=duyuru&amp;id=2018-2019-erasmus-ogrenim-ve-staj-hareketliligi-basvurulari-baslamistir</p>\r\n', '2018-01-22', '2018-02-09', 0, 1),
(161, 21, '2017-2018 BAHAR YARIYILI DERS PROGRAMI (GÜNCEL)', '<p><strong>14.03.2018</strong> tarihli&nbsp;hali ektedir. Perşembe g&uuml;nk&uuml; veri tabanı lab.&nbsp;, <strong>ekteki programdan farklı olarak</strong>, saat 14:00&#39;da başlayacaktır. Ayrıca Yazılım m&uuml;h. de&nbsp;14:00&#39;da başlayacaktır.&nbsp;</p>\r\n', '2018-02-06', '2018-08-15', 0, 1),
(162, 19, '4. SINIFLARIN Dikkatine! Teknik Secmeli Ders Degisikligi BILGILENDIRME ', '<p>&quot;Kablosuz Ağ Teknolojileri ve Uygulamaları&quot;, &quot;Yapay Zeka&quot; ve &quot;Mikroişlemciler&quot; dersleri gerekli &ouml;ğrenci sayısı tamamlanamadığı&nbsp;i&ccedil;in kapatılmıştır. Bu dersleri se&ccedil;en &ouml;ğrenciler diğer se&ccedil;meli derslere aktarılmıştır.</p>\r\n', '2018-02-06', '2018-02-11', 0, 1),
(164, 19, 'işyeri eğitimi yapan öğrencilerin dikkatine!', '<p>İşyeri eğitimi yaptığı&nbsp;yerden &uuml;cret alan &ouml;ğrencilerin her ayın &ouml;deme dekontunu ilgili firmadan alip muhasebeye vermeleri gerekmektedir.&nbsp;</p>\r\n', '2018-02-15', '2018-03-08', 0, 1),
(165, 18, 'BİLGİSAYAR AĞLARI LAB.', '<p>Bu hafta lab.da ekteki d&ouml;k&uuml;manın &quot;1.2&nbsp;PC Network TCP/IP Configuration&quot; kısmı&nbsp;yapılacak.</p>\r\n', '2018-02-26', '2018-03-03', 0, 1),
(166, 17, 'Kocaeli Kadın Sağlığı Eğitimi Projesi', '<p>İl Sağlık M&uuml;d&uuml;r&uuml;l&uuml;ğ&uuml; tarafından y&uuml;r&uuml;t&uuml;len &quot;Kocaeli Kadın Sağlığı Eğitimi Projesi&quot; kapsamında Fak&uuml;ltemizde eğitim g&ouml;ren kız &ouml;ğrencilerimize 14 Mart 2018 saat 13:00&#39;da Teknoloji Fak&uuml;ltesi konferans salonunda eğitim verilmesi planlanmıştır.</p>\r\n', '2018-03-06', '2018-03-14', 0, 1),
(168, 18, 'BİLGİSAYAR AĞLARI LAB.', '<p><strong>&quot;Ders notları&quot;</strong> kısmına &ouml;n&uuml;m&uuml;zdeki iki hafta i&ccedil;in deney f&ouml;y&uuml; eklenmiştir.&nbsp;</p>\r\n\r\n<p>14 Mart--&gt;&gt;&nbsp;Lab no 2 Cable Construction (Malzemeler lab.da mevcut)</p>\r\n\r\n<p>21 Mart--&gt;&gt;Lab no 3 Building a Local Area Network</p>\r\n\r\n<p>olarak planlanmaktadır.</p>\r\n\r\n<p>KİŞİSEL BİLGİSAYARLARINIZ İLE GELİRSENİZ DAHA HIZLI SONU&Ccedil; ALIRSINIZ</p>\r\n', '2018-03-12', '2018-03-31', 0, 1),
(169, 18, 'Programlama Lab-II Uyarılar', '<p>Laboratuvar uygulamaları g&ouml;nderilirken bazı hatalar yapılmaktadır. &Ccedil;alışmanızın doğru puanlanması i&ccedil;in dikkat etmeniz faydanıza olacaktır.</p>\r\n\r\n<p>1- Rar veya Zip dosyaları bozuk olanlar var, doğru bi&ccedil;imde sıkıştırma yaptığınızı kontrol ediniz.</p>\r\n\r\n<p>2- Sadece main dosyası (&nbsp;.cpp) veya sadece proje oluşturma dosyasını&nbsp;(.cbp) g&ouml;nderenler var. Doğru olanı: .cpp, .cbp, .o, .layout, .exe vb. b&uuml;t&uuml;n klas&ouml;r&uuml; sıkıştırıp g&ouml;nderiniz.</p>\r\n\r\n<p>3- 2 veya 3 kişi ısrarla &quot;C&quot; kodu g&ouml;ndermektedir. Bu dersin &quot;C++&quot; dili ile işlendiğini tekrar dikkatlerine sunuyorum. Bu arkadaşlar&nbsp;C ve C++ dillerinin benzerlikleri ve farkları konulu birer sunum hazırlayıp gelsinler. Bu hafta sınıfta 5 dk sunmalarını istiyorum :)</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2018-03-12', '2018-03-21', 0, 1),
(170, 18, 'Programlama Lab-II Dönem projeleri', '<p>&Ouml;n araştırma yapmaya başlamanız i&ccedil;in muhtemel proje konularınız:</p>\r\n\r\n<p>1- Lineer Cebir işlemleri yapan hesap makinası</p>\r\n\r\n<p>2- &Ouml;ğrenci bilgi sistemi</p>\r\n\r\n<p>3- Kendi kendine oynanan yılan oyunu (kesin değil)</p>\r\n\r\n<p>4-....</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Proje konularınızı kesinleştirdikten sonra i&ccedil;eriklerini ve koşullarını detaylandıracağım. Projede g&ouml;rsel aray&uuml;z oluşturma zorunluluğu da olacaktır. C++ i&ccedil;in ne t&uuml;r aray&uuml;z eklentileri kullanılmaktadır araştırınız.</p>\r\n', '2018-03-12', '2018-05-31', 0, 1),
(171, 19, 'Veri Tabanı Yönetim Sistemleri Dersini alan öğrenciler', '<p>Proje konularınızla ilgili kabul listesi Yazılım Geliştirme Laboratuvarının kapısına asılmıştır.</p>\r\n\r\n<p>Değişiklik/ekleme istenilen projelerle ilgili gerekli d&uuml;zenlemeleri en ge&ccedil; 15.03.2018 tarihine kadar yapıp bana bildiriniz.&nbsp;</p>\r\n', '2018-03-12', '2018-04-12', 0, 1),
(173, 5, 'Arasınav Programı', '', '2018-03-19', '2018-04-30', 0, 1);

-- --------------------------------------------------------

--
-- Tablo yapısı: `duyurudosya`
--

CREATE TABLE IF NOT EXISTS `duyurudosya` (
  `DosyaID` int(11) NOT NULL auto_increment,
  `DuyuruID` int(11) NOT NULL,
  `DosyaYol` varchar(250) default NULL,
  PRIMARY KEY  (`DosyaID`),
  KEY `DuyuruID` (`DuyuruID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=109 ;

--
-- Tablo döküm verisi `duyurudosya`
--

INSERT INTO `duyurudosya` (`DosyaID`, `DuyuruID`, `DosyaYol`) VALUES
(81, 119, 'Dosyalar/Duyuru/2016-2017-guz-ders-programi-bsm.pdf'),
(89, 147, 'Dosyalar/Duyuru/teknojamafislowres.png'),
(93, 154, 'Dosyalar/Duyuru/kentkart_basvuru.pdf'),
(95, 156, 'Dosyalar/Duyuru/katalog.pdf'),
(96, 157, 'Dosyalar/Duyuru/afis.pdf'),
(103, 161, 'Dosyalar/Duyuru/2018bsmbahar.pdf'),
(104, 165, 'Dosyalar/Duyuru/eee3080-lab010.pdf'),
(105, 166, 'Dosyalar/Duyuru/kocaelikadinsagligiegitimiprojesi.pdf'),
(108, 173, 'Dosyalar/Duyuru/2017-2018-bahar-arasinav-bsm.pdf');

-- --------------------------------------------------------

--
-- Tablo yapısı: `etkinlik`
--

CREATE TABLE IF NOT EXISTS `etkinlik` (
  `EtkinlikID` int(11) NOT NULL auto_increment,
  `Baslik` varchar(250) NOT NULL,
  `Tarih` date NOT NULL,
  `Aciklama` longtext,
  `DurumAnasayfa` tinyint(1) NOT NULL,
  `DurumTumEtkinlik` tinyint(1) NOT NULL,
  PRIMARY KEY  (`EtkinlikID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Tablo döküm verisi `etkinlik`
--

INSERT INTO `etkinlik` (`EtkinlikID`, `Baslik`, `Tarih`, `Aciklama`, `DurumAnasayfa`, `DurumTumEtkinlik`) VALUES
(6, 'NESNELERİN INTERNETI KONFERANSI', '2015-10-15', '<p>Katılım &uuml;cretsizdir. L&uuml;tfen zamanında geliniz. Ayrıntılar ektedir.</p>\r\n', 1, 1),
(7, 'SİBER GÜVENLİK KONFERANSI', '2015-03-19', '<p>Katılım &uuml;cretsizdir. L&uuml;tfen zamanında geliniz. Ayrıntılar ektedir.</p>\r\n', 1, 1),
(8, 'BULUT BİLİŞİM KONFERANSI', '2014-12-02', '<p>Katılım &uuml;cretsizdir. L&uuml;tfen zamanında geliniz. Ayrıntılar ektedir.</p>\r\n', 1, 1),
(9, '"IT FEST 2017" ETKİNLİĞİ', '2017-09-27', '<p>Kocaeli &Uuml;niversitesi Bilişim Teknolojileri Kul&uuml;b&uuml; olarak&nbsp;<strong>3-4 Ekim 2017&nbsp;</strong>tarihlerinde &quot;IT Fest 2017&quot; adlı g&uuml;zel bir etkinliğe imza atıyoruz.&nbsp;Bilişim alanında yetkin 7 konuşmacı, 6 dopdolu oturum ile, kul&uuml;b&uuml;m&uuml;z&uuml;n ilk etkinliğini ger&ccedil;ekleştiriyoruz.&nbsp;Sizleri de etkinliğimizde aramızda g&ouml;rmekten b&uuml;y&uuml;k memnuniyet duyarız.</p>\r\n\r\n<p>Etkinlikle ilgili ayrıntılar&nbsp;<strong>ektedir</strong>.</p>\r\n', 1, 1),
(10, 'TEKNO JAM 2017 ETKİNLİĞİ', '2017-12-06', '<p>TEKNO JAM 2017 ETKİNLİĞİ</p>\r\n', 1, 1);

-- --------------------------------------------------------

--
-- Tablo yapısı: `etkinlikdosya`
--

CREATE TABLE IF NOT EXISTS `etkinlikdosya` (
  `DosyaID` int(11) NOT NULL auto_increment,
  `EtkinlikID` int(11) NOT NULL,
  `DosyaYol` varchar(250) default NULL,
  PRIMARY KEY  (`DosyaID`),
  KEY `EtkinlikID` (`EtkinlikID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Tablo döküm verisi `etkinlikdosya`
--

INSERT INTO `etkinlikdosya` (`DosyaID`, `EtkinlikID`, `DosyaYol`) VALUES
(7, 6, 'Dosyalar/Etkinlik/nesnelerin-interneti.png'),
(9, 7, 'Dosyalar/Etkinlik/siber-guvenlik.jpg'),
(10, 8, 'Dosyalar/Etkinlik/bulut_bilisim.jpg'),
(11, 9, 'Dosyalar/Etkinlik/bitek_itfestt_baskiyeni-35-50.jpg'),
(12, 10, 'Dosyalar/Etkinlik/teknojam.png');

-- --------------------------------------------------------

--
-- Tablo yapısı: `idaripersonel`
--

CREATE TABLE IF NOT EXISTS `idaripersonel` (
  `IPersonelID` int(11) NOT NULL auto_increment,
  `Gorev` varchar(50) NOT NULL,
  `Unvan` varchar(50) NOT NULL,
  `Adi` varchar(50) NOT NULL,
  `Soyadi` varchar(50) NOT NULL,
  `DahiliTel` varchar(50) NOT NULL,
  `Eposta` varchar(50) NOT NULL,
  `WebAdresi` varchar(250) default NULL,
  `ResimYolu` varchar(250) default NULL,
  `Sira` int(11) NOT NULL,
  `Sifresi` varchar(50) default NULL,
  `Yetki` tinyint(1) default NULL,
  `TamYetki` tinyint(1) default NULL,
  PRIMARY KEY  (`IPersonelID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Tablo döküm verisi `idaripersonel`
--

INSERT INTO `idaripersonel` (`IPersonelID`, `Gorev`, `Unvan`, `Adi`, `Soyadi`, `DahiliTel`, `Eposta`, `WebAdresi`, `ResimYolu`, `Sira`, `Sifresi`, `Yetki`, `TamYetki`) VALUES
(5, 'Bölüm Başkanı', 'Doç. Dr.', 'Halil', 'YİĞİT', ' 0262 303 2259', 'halilyigit@kocaeli.edu.tr', 'http://akademikpersonel.kocaeli.edu.tr/halilyigit/', 'Dosyalar/IPersonel/halilyigit.jpg', 1, NULL, NULL, NULL),
(6, 'Bölüm Başkan Yardımcısı', 'Doç. Dr.', 'Hikmet Hakan', 'GÜREL', ' 0262 303 2215', 'hhakan.gurel@kocaeli.edu.tr', 'http://akademikpersonel.kocaeli.edu.tr/hhakan.gurel', 'Dosyalar/IPersonel/hikmethakangürel.jpg', 2, NULL, NULL, NULL),
(7, 'Bölüm Başkan Yardımcısı', 'Yrd. Doç. Dr.', 'Adnan', 'SONDAŞ', ' 0262 303 2258', 'asondas@kocaeli.edu.tr', 'http://akademikpersonel.kocaeli.edu.tr/asondas/', 'Dosyalar/IPersonel/adnansondas.jpg', 3, NULL, NULL, NULL),
(8, 'Bölüm Sekreteri', 'Sekreter', 'Ömer', 'ÖRS', ' 0262 303 2256', 'bilisim@kocaeli.edu.tr', '#', 'Dosyalar/IPersonel/omerors.jpg', 4, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo yapısı: `iletisim`
--

CREATE TABLE IF NOT EXISTS `iletisim` (
  `iletisimID` int(11) NOT NULL auto_increment,
  `Mail` varchar(50) NOT NULL,
  `Adres` varchar(250) NOT NULL,
  `Tel` varchar(50) NOT NULL,
  `TelDiger` varchar(50) default NULL,
  `Fax` varchar(50) NOT NULL,
  `Facebook` varchar(250) default NULL,
  `Twitter` varchar(250) default NULL,
  `LinkedIN` varchar(250) default NULL,
  PRIMARY KEY  (`iletisimID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`iletisimID`, `Mail`, `Adres`, `Tel`, `TelDiger`, `Fax`, `Facebook`, `Twitter`, `LinkedIN`) VALUES
(1, 'bilisim@kocaeli.edu.tr', 'Kocaeli Üniversitesi - Teknoloji Fakültesi , 41380, Umuttepe/KOCAELİ, TÜRKİYE', '0 262 303 22 02', '0 262 303 22 04', '0 262 303 22 03', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com');

-- --------------------------------------------------------

--
-- Tablo yapısı: `lisans`
--

CREATE TABLE IF NOT EXISTS `lisans` (
  `LisansID` int(11) NOT NULL auto_increment,
  `Baslik` varchar(250) NOT NULL,
  `Link` varchar(250) default NULL,
  `Durum` tinyint(1) NOT NULL,
  `Sira` int(11) NOT NULL,
  PRIMARY KEY  (`LisansID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Tablo döküm verisi `lisans`
--

INSERT INTO `lisans` (`LisansID`, `Baslik`, `Link`, `Durum`, `Sira`) VALUES
(9, 'Ders Planı', 'Dosyalar/Lisans/ders_plani_2016_2017_yeni.pdf', 1, 1),
(10, 'Ders Planı (2016 Öncesi)', 'Dosyalar/Lisans/bilisim_sist_muh_ders_plani.pdf', 1, 2),
(11, 'Ders İçerikleri', 'Dosyalar/Lisans/bilisim_sist_muh_ders_plani_icerik.pdf', 1, 3),
(12, 'Ders Programı', 'Dosyalar/Lisans/2018bsmbahar.pdf', 1, 4),
(13, 'Bilimsel Hazırlık Ders Programı', 'Dosyalar/Lisans/2016-2017-guz-ders-programi-bsm.pdf', 1, 5);

-- --------------------------------------------------------

--
-- Tablo yapısı: `lisanslink`
--

CREATE TABLE IF NOT EXISTS `lisanslink` (
  `LisansID` int(11) NOT NULL auto_increment,
  `Baslik` varchar(250) NOT NULL,
  `Link` varchar(250) default NULL,
  `Durum` tinyint(1) NOT NULL,
  `Sira` int(11) NOT NULL,
  PRIMARY KEY  (`LisansID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Tablo döküm verisi `lisanslink`
--


-- --------------------------------------------------------

--
-- Tablo yapısı: `lisansustu`
--

CREATE TABLE IF NOT EXISTS `lisansustu` (
  `LisansUstuID` int(11) NOT NULL auto_increment,
  `Baslik` varchar(250) NOT NULL,
  `Link` varchar(250) default NULL,
  `Durum` tinyint(1) NOT NULL,
  `Sira` int(11) NOT NULL,
  PRIMARY KEY  (`LisansUstuID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Tablo döküm verisi `lisansustu`
--

INSERT INTO `lisansustu` (`LisansUstuID`, `Baslik`, `Link`, `Durum`, `Sira`) VALUES
(4, 'Dersler', '', 1, 1),
(5, 'Ders Programı', '', 1, 2),
(6, 'Tez Özetleri', '', 1, 3),
(7, 'Tezsiz Yüksek Lisans', '', 1, 4);

-- --------------------------------------------------------

--
-- Tablo yapısı: `lisansustulink`
--

CREATE TABLE IF NOT EXISTS `lisansustulink` (
  `LisansUstuID` int(11) NOT NULL auto_increment,
  `Baslik` varchar(250) NOT NULL,
  `Link` varchar(250) default NULL,
  `Durum` tinyint(1) NOT NULL,
  `Sira` int(11) NOT NULL,
  PRIMARY KEY  (`LisansUstuID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Tablo döküm verisi `lisansustulink`
--


-- --------------------------------------------------------

--
-- Tablo yapısı: `misyonvizyon`
--

CREATE TABLE IF NOT EXISTS `misyonvizyon` (
  `MisyonVizyonID` int(11) NOT NULL auto_increment,
  `Misyon` longtext NOT NULL,
  `Vizyon` longtext NOT NULL,
  PRIMARY KEY  (`MisyonVizyonID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `misyonvizyon`
--

INSERT INTO `misyonvizyon` (`MisyonVizyonID`, `Misyon`, `Vizyon`) VALUES
(1, '<p>Misyonumuz, bilişim teknolojilerinin etkin kullanımıyla araştırma odaklı, yenilik&ccedil;i ve uygulamaya y&ouml;nelik bir eğitim-&ouml;ğretim ve araştırma anlayışını benimsemektedir. Ama&ccedil;larımız doğrultusunda diğer &uuml;niversite i&ccedil;i ve dışından birimlerle karşılıklı faydalar g&ouml;zetilerek ortak &ccedil;alışmalar yapmak misyonumuzun &ouml;nemli bir par&ccedil;asını oluşturmaktadır. Misyonumuzun ger&ccedil;ekleştirilmesinde, takım &ccedil;alışması, karşılıklı saygı, d&uuml;r&uuml;stl&uuml;k ve işe bağlılık &ouml;nemli unsurlardır.</p>\r\n', '<p>Vizyonumuz, ulusal olduğu kadar d&uuml;nya &ouml;l&ccedil;eğinde, bilişim teknolojileri alanında eğitim-&ouml;ğretim ve araştırma konularında saygı duyulan ve tanınan bir birim olmaktır. Akademik personelimiz, &ccedil;alışmalarında &ouml;ğrenci odaklı olup, k&uuml;lt&uuml;rel olarak kapsayıcı ve destekleyici bir &ouml;ğrenim ortamında, &ouml;rnek teşkil eden eğitim-&ouml;ğretim ve pratik uygulamalara &ouml;nem vermektedir.</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo yapısı: `ogrenci`
--

CREATE TABLE IF NOT EXISTS `ogrenci` (
  `OgrenciID` int(11) NOT NULL auto_increment,
  `Baslik` varchar(250) NOT NULL,
  `Link` varchar(250) default NULL,
  `Durum` tinyint(1) NOT NULL,
  `Sira` int(11) NOT NULL,
  PRIMARY KEY  (`OgrenciID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `ogrenci`
--

INSERT INTO `ogrenci` (`OgrenciID`, `Baslik`, `Link`, `Durum`, `Sira`) VALUES
(4, 'Bilimsel Hazırlık Yönergesi', 'Dosyalar/Ogrenci/bilimsel_hazirlik_yonergesi.pdf', 1, 1),
(5, 'Sınav Kuralları', 'Dosyalar/Ogrenci/sinavlarda-uyulmasi-gereken-kurallar.jpg', 1, 2),
(6, 'Oryantasyon Sunumu', 'Dosyalar/Ogrenci/oryantasyon-bilisim2016.pdf', 1, 3);

-- --------------------------------------------------------

--
-- Tablo yapısı: `ogrencilink`
--

CREATE TABLE IF NOT EXISTS `ogrencilink` (
  `OgrenciID` int(11) NOT NULL auto_increment,
  `Baslik` varchar(250) NOT NULL,
  `Link` varchar(250) default NULL,
  `Durum` tinyint(1) NOT NULL,
  `Sira` int(11) NOT NULL,
  PRIMARY KEY  (`OgrenciID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Tablo döküm verisi `ogrencilink`
--

INSERT INTO `ogrencilink` (`OgrenciID`, `Baslik`, `Link`, `Durum`, `Sira`) VALUES
(11, 'Öğrenci İşleri D. Bşk.', 'http://odb.kocaeli.edu.tr/', 1, 2),
(12, 'Öğrenci Bilgi Sistemi', 'http://www.kocaeli.edu.tr/yonlendirme/yonlendirme.html', 1, 1),
(13, 'Akademik Takvim', 'http://odb.kocaeli.edu.tr/akademik_takvim.php', 1, 3),
(14, 'Öğrenci E-Postası', 'https://webmail.kocaeli.edu.tr/', 1, 4),
(15, 'Eğitim-Öğretim Yönetmeliği', 'http://odb.kocaeli.edu.tr/yonetmelik_066.php', 1, 5),
(16, 'Disiplin Yönetmeliği', 'http://odb.kocaeli.edu.tr/yonetmelik_011.php', 1, 6),
(17, 'Diğer Yönetmelikler', 'http://odb.kocaeli.edu.tr/yonetmelik.php', 1, 7);

-- --------------------------------------------------------

--
-- Tablo yapısı: `olanaklar`
--

CREATE TABLE IF NOT EXISTS `olanaklar` (
  `OlanakID` int(11) NOT NULL auto_increment,
  `Baslik` varchar(250) NOT NULL,
  `Aciklama` longtext NOT NULL,
  `Sira` int(11) NOT NULL,
  PRIMARY KEY  (`OlanakID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Tablo döküm verisi `olanaklar`
--

INSERT INTO `olanaklar` (`OlanakID`, `Baslik`, `Aciklama`, `Sira`) VALUES
(6, 'Bilgisayar Ağları ve Haberleşme Laboratuvarı', '<ul>\r\n	<li>&nbsp;Bilgisayar Ağları ve Haberleşme Laboratuvarı</li>\r\n	\r\n</ul>', 1),
(7, 'Yazılım Geliştirme Laboratuvarı', '<ul>\r\n	<li>&nbsp;Bilgisayar (30 adet)</li>\r\n	<li>&nbsp;Projeksiyon cihazı(2 adet)</li>\r\n	<li>&nbsp;Switch (2 adet) ve bilgisayarlar arasında ağ bağlantısı (internet imk&acirc;nı)</li>\r\n</ul>\r\n', 2),
(8, 'Bilişim Teknolojileri Laboratuvarı', '<ul>\r\n	<li>Bilişim Teknolojileri Laboratuvarı</li>\r\n	\r\n</ul>\r\n', 3),
(9, 'Hesaplamalı Nanoteknoloji Labaratuvarı', '<ul>\r\n	<li>&nbsp;Hesaplamalı Nanoteknoloji Labaratuvarı</li>\r\n	 \r\n</ul>\r\n', 4),
(10, 'Multimedya Uygulama Geliştirme Labaratuvarı (MadLab)', '<ul>\r\n	<li>&nbsp;Multimedya Uygulama Geliştirme Labaratuvarı (MadLab)\r\n</li>\r\n	 \r\n</ul>\r\n ', 5);

-- --------------------------------------------------------

--
-- Tablo yapısı: `olanaklardosya`
--

CREATE TABLE IF NOT EXISTS `olanaklardosya` (
  `ODosyaID` int(11) NOT NULL auto_increment,
  `OlanakID` int(11) NOT NULL,
  `DosyaYol` varchar(250) default NULL,
  PRIMARY KEY  (`ODosyaID`),
  KEY `OlanakID` (`OlanakID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `olanaklardosya`
--

INSERT INTO `olanaklardosya` (`ODosyaID`, `OlanakID`, `DosyaYol`) VALUES
(6, 7, 'Dosyalar/Olanak/image008.jpg');

-- --------------------------------------------------------

--
-- Tablo yapısı: `slayt`
--

CREATE TABLE IF NOT EXISTS `slayt` (
  `SlaytID` int(11) NOT NULL auto_increment,
  `ResimAdi` varchar(50) default NULL,
  `ResimYolu` varchar(250) default NULL,
  `Link` varchar(250) NOT NULL,
  `Durum` tinyint(1) NOT NULL,
  `Sira` int(11) NOT NULL,
  PRIMARY KEY  (`SlaytID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Tablo döküm verisi `slayt`
--

INSERT INTO `slayt` (`SlaytID`, `ResimAdi`, `ResimYolu`, `Link`, `Durum`, `Sira`) VALUES
(8, 'bilisim-4', 'Dosyalar/Slider/bilisim-4.jpg', '', 1, 10),
(9, 'bilisim-3', 'Dosyalar/Slider/bilisim-3.jpg', '', 1, 9),
(10, 'bilisim-2', 'Dosyalar/Slider/bilisim-2.jpg', '', 1, 8),
(11, 'bilisim-1', 'Dosyalar/Slider/bilisim-1.jpg', '', 1, 7),
(12, 'Kocaeli Bilişim Fuarı', 'Dosyalar/Slider/resim1.jpg', '', 1, 5),
(14, 'Bilişim standına ziyaretçi akını', 'Dosyalar/Slider/resim3.jpg', '', 1, 4),
(15, 'Bilişim standına ziyaretçi akını', 'Dosyalar/Slider/resim5.jpg', '', 1, 3),
(16, 'Bilişim Fuarında yerimizi aldık', 'Dosyalar/Slider/fuarbolumlogo.jpg', '', 1, 2),
(17, 'Genç Bilişimciler için yeni ufuklar', 'Dosyalar/Slider/gencbilisimcilerar.jpg', '', 1, 6),
(18, 'Tekno  Jam 2017', 'Dosyalar/Slider/teknojamduyuru.jpg', '', 1, 1);

-- --------------------------------------------------------

--
-- Tablo yapısı: `yukseklisans`
--

CREATE TABLE IF NOT EXISTS `yukseklisans` (
  `YuksekLisansID` int(11) NOT NULL auto_increment,
  `Aciklama` longtext NOT NULL,
  PRIMARY KEY  (`YuksekLisansID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `yukseklisans`
--

INSERT INTO `yukseklisans` (`YuksekLisansID`, `Aciklama`) VALUES
(1, '<h3><strong>&emsp;&emsp;Bilişim Sistemleri M&uuml;hendisliği Y&uuml;ksek Lisans Programı</strong></h3>\r\n\r\n<p>Bilişim teknolojileri son yıllarda bilimsel ve ekonomik alanlarda yaşanan hızlı gelişmelerin itici g&uuml;c&uuml; olmuştur. G&uuml;n&uuml;m&uuml;zde bilişim sistemleri, bankacılıktan otomotiv sanayine, sağlık bilgi sistemlerinden şirket y&ouml;netimine, telekom&uuml;nikasyon sistemlerinden hava taşımacılığına &ccedil;ok geniş alanlarda kullanılmaktadır. Bilişim teknolojilerindeki ve sekt&ouml;r&uuml;ndeki gelişmelere paralel olarak, &ouml;zellikle alanında uzmanlaşmış insan kaynağı gereksinimi hızla artmaktadır. &Uuml;lkemizde bilişim alanında yetişmiş insan g&uuml;c&uuml; a&ccedil;ığı olduk&ccedil;a fazladır. Bilişim Sistemleri M&uuml;hendisliği Lisans&uuml;st&uuml; Programı ile hızlı değişim g&ouml;steren bilişim sekt&ouml;r&uuml;ne, teknik altyapıya ve &ccedil;&ouml;z&uuml;m &uuml;retme yeteneğine sahip geleceğin liderlerinin hazırlanması ama&ccedil;lanmaktadır. Eğitim-&ouml;ğretim ve araştırma alanlarındaki hedeflerimiz şu şekilde sıralanabilir:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>&nbsp;Teknik alanda yenilik&ccedil;i ve m&uuml;kemmel hizmet anlayışı,</li>\r\n	<li>&nbsp;G&uuml;venilir ve g&uuml;venlikli hizmetler,</li>\r\n	<li>&nbsp;Personel uzmanlığı ve profesyonelliği,</li>\r\n	<li>&nbsp;Kaynakların verimli kullanımı,</li>\r\n	<li>&nbsp;Dış ve i&ccedil; ortak &ccedil;alışma olanakları.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&emsp;&emsp;Misyonumuz, bilişim teknolojilerinin etkin kullanımıyla araştırma odaklı, yenilik&ccedil;i ve uygulamaya y&ouml;nelik bir eğitim-&ouml;ğretim ve araştırma anlayışını benimsemektedir. Ama&ccedil;larımız doğrultusunda diğer &uuml;niversite i&ccedil;i ve dışından birimlerle karşılıklı faydalar g&ouml;zetilerek ortak &ccedil;alışmalar yapmak misyonumuzun &ouml;nemli bir par&ccedil;asını oluşturmaktadır. Misyonumuzun ger&ccedil;ekleştirilmesinde, takım &ccedil;alışması, karşılıklı saygı, d&uuml;r&uuml;stl&uuml;k ve işe bağlılık &ouml;nemli unsurlardır. Vizyonumuz, ulusal olduğu kadar d&uuml;nya &ouml;l&ccedil;eğinde, bilişim teknolojileri alanında eğitim-&ouml;ğretim ve araştırma konularında saygı duyulan ve tanınan bir birim olmaktır. Akademik personelimiz, &ccedil;alışmalarında &ouml;ğrenci odaklı olup, k&uuml;lt&uuml;rel olarak kapsayıcı ve destekleyici bir &ouml;ğrenim ortamında, &ouml;rnek teşkil eden eğitim-&ouml;ğretim ve pratik uygulamalara &ouml;nem vermektedir. Y&uuml;ksek lisans programımıza g&uuml;z ve bahar d&ouml;nemlerinde &ouml;ğrenci alımı yapılmaktadır, Doktora programımız ise hen&uuml;z a&ccedil;ılmamıştır.&nbsp;<br />\r\n<br />\r\nDo&ccedil;. Dr.&nbsp;<a href="http://akademikpersonel.kocaeli.edu.tr/halilyigit/" target="_blank">Halil YİĞİT</a><br />\r\nB&ouml;l&uuml;m Başkanı&nbsp;<br />\r\nKocaeli &Uuml;niversitesi, Teknoloji Fak&uuml;ltesi, Umuttepe, Kocaeli<br />\r\nE-posta:&nbsp;<a href="mailto:halilyigit@kocaeli.edu.tr">halilyigit@kocaeli.edu.tr</a><br />\r\nTel: +90 (0262) 3032259</p>\r\n');

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `bolumduyuru`
--
ALTER TABLE `bolumduyuru`
  ADD CONSTRAINT `bolumduyuru_ibfk_1` FOREIGN KEY (`APersonelID`) REFERENCES `akademikpersonel` (`APersonelID`);

--
-- Tablo kısıtlamaları `bolumduyurudosya`
--
ALTER TABLE `bolumduyurudosya`
  ADD CONSTRAINT `bolumduyurudosya_ibfk_1` FOREIGN KEY (`BolumDuyuruID`) REFERENCES `bolumduyuru` (`BolumDuyuruID`);

--
-- Tablo kısıtlamaları `dersnot`
--
ALTER TABLE `dersnot`
  ADD CONSTRAINT `dersnot_ibfk_1` FOREIGN KEY (`APersonelID`) REFERENCES `akademikpersonel` (`APersonelID`);

--
-- Tablo kısıtlamaları `dersnotdosya`
--
ALTER TABLE `dersnotdosya`
  ADD CONSTRAINT `dersnotdosya_ibfk_1` FOREIGN KEY (`DersNotID`) REFERENCES `dersnot` (`DersNotID`);

--
-- Tablo kısıtlamaları `duyuru`
--
ALTER TABLE `duyuru`
  ADD CONSTRAINT `duyuru_ibfk_1` FOREIGN KEY (`APersonelID`) REFERENCES `akademikpersonel` (`APersonelID`);

--
-- Tablo kısıtlamaları `duyurudosya`
--
ALTER TABLE `duyurudosya`
  ADD CONSTRAINT `duyurudosya_ibfk_1` FOREIGN KEY (`DuyuruID`) REFERENCES `duyuru` (`DuyuruID`);

--
-- Tablo kısıtlamaları `etkinlikdosya`
--
ALTER TABLE `etkinlikdosya`
  ADD CONSTRAINT `etkinlikdosya_ibfk_1` FOREIGN KEY (`EtkinlikID`) REFERENCES `etkinlik` (`EtkinlikID`);

--
-- Tablo kısıtlamaları `olanaklardosya`
--
ALTER TABLE `olanaklardosya`
  ADD CONSTRAINT `olanaklardosya_ibfk_1` FOREIGN KEY (`OlanakID`) REFERENCES `olanaklar` (`OlanakID`);
