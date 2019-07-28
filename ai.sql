-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jul 22, 2019 at 04:57 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `ai`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `gab_solusi`
-- 

CREATE TABLE `gab_solusi` (
  `idgab` int(11) NOT NULL auto_increment,
  `idpenyakit` varchar(5) NOT NULL,
  `idpenanganan` varchar(5) NOT NULL,
  PRIMARY KEY  (`idgab`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `gab_solusi`
-- 

INSERT INTO `gab_solusi` VALUES (1, 'P001', 'PN01');
INSERT INTO `gab_solusi` VALUES (2, 'P001', 'PN02');
INSERT INTO `gab_solusi` VALUES (3, 'P001', 'PN03');
INSERT INTO `gab_solusi` VALUES (4, 'P001', 'PN04');
INSERT INTO `gab_solusi` VALUES (5, 'P001', 'PN05');
INSERT INTO `gab_solusi` VALUES (6, 'P002', 'PN06');
INSERT INTO `gab_solusi` VALUES (7, 'P002', 'PN07');
INSERT INTO `gab_solusi` VALUES (8, 'P002', 'PN08');
INSERT INTO `gab_solusi` VALUES (9, 'P002', 'PN09');
INSERT INTO `gab_solusi` VALUES (10, 'P002', 'PN10');
INSERT INTO `gab_solusi` VALUES (11, 'P002', 'PN11');

-- --------------------------------------------------------

-- 
-- Table structure for table `hipotesa`
-- 

CREATE TABLE `hipotesa` (
  `idhipotesa` int(11) NOT NULL auto_increment,
  `idpenyakit` varchar(5) NOT NULL,
  `user` varchar(30) NOT NULL,
  `hasil` varchar(10) NOT NULL,
  PRIMARY KEY  (`idhipotesa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

-- 
-- Dumping data for table `hipotesa`
-- 

INSERT INTO `hipotesa` VALUES (55, 'P001', 'arfan', '64,00');
INSERT INTO `hipotesa` VALUES (54, 'P002', 'khafi', '24,00');
INSERT INTO `hipotesa` VALUES (53, '', 'khafi', '');
INSERT INTO `hipotesa` VALUES (52, '', 'khafi', '');
INSERT INTO `hipotesa` VALUES (51, '', 'khafi', '');
INSERT INTO `hipotesa` VALUES (50, 'P001', 'ikhsan', '46,08');
INSERT INTO `hipotesa` VALUES (49, 'P002', 'khafi', '72,96');
INSERT INTO `hipotesa` VALUES (48, 'P002', 'khafi', '36,00');
INSERT INTO `hipotesa` VALUES (47, '', 'khafi', '');
INSERT INTO `hipotesa` VALUES (46, 'P001', '', '141,44');
INSERT INTO `hipotesa` VALUES (45, 'P001', '', '141,44');
INSERT INTO `hipotesa` VALUES (44, 'P001', '', '141,44');
INSERT INTO `hipotesa` VALUES (43, 'P001', '', '141,44');
INSERT INTO `hipotesa` VALUES (42, 'P001', '', '141,44');
INSERT INTO `hipotesa` VALUES (41, 'P001', '', '141,44');
INSERT INTO `hipotesa` VALUES (56, 'P001', 'hutri', '48,00');
INSERT INTO `hipotesa` VALUES (57, 'P001', 'abil', '91,52');
INSERT INTO `hipotesa` VALUES (58, 'P001', 'ahmad', '58,24');
INSERT INTO `hipotesa` VALUES (59, '', 'yanda', '');
INSERT INTO `hipotesa` VALUES (60, 'P002', 'yanda', '106,72');
INSERT INTO `hipotesa` VALUES (61, 'P001', 'nazwa', '54,40');
INSERT INTO `hipotesa` VALUES (62, 'P001', 'root', '94,08');
INSERT INTO `hipotesa` VALUES (63, '', 'root', '');
INSERT INTO `hipotesa` VALUES (64, 'P001', 'root', '87,04');
INSERT INTO `hipotesa` VALUES (65, 'P001', 'root', '107,52');
INSERT INTO `hipotesa` VALUES (66, '', '', '');
INSERT INTO `hipotesa` VALUES (67, '', '', '');
INSERT INTO `hipotesa` VALUES (68, '', '', '');
INSERT INTO `hipotesa` VALUES (69, 'P001', '', '119,68');
INSERT INTO `hipotesa` VALUES (70, '', '', '');
INSERT INTO `hipotesa` VALUES (71, '', '', '');
INSERT INTO `hipotesa` VALUES (72, '', '', '');
INSERT INTO `hipotesa` VALUES (73, '', '', '');
INSERT INTO `hipotesa` VALUES (74, '', '', '');
INSERT INTO `hipotesa` VALUES (75, 'P001', '', '116,48');
INSERT INTO `hipotesa` VALUES (76, 'P001', '', '116,48');
INSERT INTO `hipotesa` VALUES (77, 'P001', '', '124,80');
INSERT INTO `hipotesa` VALUES (78, 'P001', '', '116,48');
INSERT INTO `hipotesa` VALUES (79, '', '', '');
INSERT INTO `hipotesa` VALUES (80, '', '', '');
INSERT INTO `hipotesa` VALUES (81, 'P001', '', '91,52');
INSERT INTO `hipotesa` VALUES (82, 'P001', '', '91,52');
INSERT INTO `hipotesa` VALUES (83, '', '', '');
INSERT INTO `hipotesa` VALUES (84, 'P001', '', '49,92');
INSERT INTO `hipotesa` VALUES (85, 'P001', '', '152,32');
INSERT INTO `hipotesa` VALUES (86, 'P001', '', '49,92');

-- --------------------------------------------------------

-- 
-- Table structure for table `penanganan`
-- 

CREATE TABLE `penanganan` (
  `idpenanganan` varchar(5) NOT NULL,
  `penanganan` text NOT NULL,
  PRIMARY KEY  (`idpenanganan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `penanganan`
-- 

INSERT INTO `penanganan` VALUES ('PN01', 'Tekadkan niat anda     untuk ingin menghentikan kebiasaan bermain game online yang berlebihan dan merusak ,jauhkanlah diri anda dari hal-hal yang berbau game online.');
INSERT INTO `penanganan` VALUES ('PN02', 'Sadarilah bahwa bermain game onlie secara berlebihan bukan hanya menghabiskan waktu anda tetapi juga merusak kesehatan.');
INSERT INTO `penanganan` VALUES ('PN03', 'Terbukalah kepada orang terdekat anda bahwa anda membutuhkan dukungan untuk bisa berhenti dari kebiasaan bermain game.');
INSERT INTO `penanganan` VALUES ('PN04', 'Isilah waktu luang anda dengan hal-hal bermanfaat dan positif seperti olahraga, diskusi belajar, atau yang lainnya sehingga anda tidak memikirkan game online kembali.');
INSERT INTO `penanganan` VALUES ('PN05', 'Berinteraksilah dengan lingkungan sekitar anda, sehingga anda bisa menyibukan diri dengan kegiatan sosial yang bermanfaat.\r\nberguna untuk memulihkan kepercayaan diri mereka. Terapi individual juga bermanfaat untuk kembali mengembangkan kemampuan mereka untuk bekerja dalam mengisi rutinitas kehidupannya.\r\n');
INSERT INTO `penanganan` VALUES ('PN06', 'Niatkan diri anda untuk mengurangi frekuensi anda bermain game online.');
INSERT INTO `penanganan` VALUES ('PN07', 'Sadarkanlah diri anda bahwa kebiasaan anda bermain game online bisa saja menjerumuskan anda kepada adiksi/ kecanduan yang lebih berat.');
INSERT INTO `penanganan` VALUES ('PN08', 'Bermain game online adalah hal yang diperbolehkan, tetapi akan menyebabkan masalah jika dimainkan secara berlebihan sehingga mengganggu anda secara pekerjaan/pendidikan ataupun kesehatan.');
INSERT INTO `penanganan` VALUES ('PN09', 'Hindari untuk memasang game online pada tempat-tempat pribadi anda contohnya kamar tidur, sehingga anda lebih bisa mengontrol diri dalam bermain game online kembali.');
INSERT INTO `penanganan` VALUES ('PN10', 'Isilah waktu luang anda dengan hal-hal yang bermanfaat dan positif seperti olahraga, diskusi belajar, atau yang lainnya sehingga anda tidak memikirkan game online kembali.');
INSERT INTO `penanganan` VALUES ('PN11', 'Berinteraksilah dengan lingkungan sekitar anda, sehingga anda bisa menyibukkan diri dengan kegiatan sosial yang bermanfaat.');

-- --------------------------------------------------------

-- 
-- Table structure for table `penyakit`
-- 

CREATE TABLE `penyakit` (
  `idpenyakit` varchar(5) NOT NULL,
  `penyakit` varchar(30) NOT NULL,
  PRIMARY KEY  (`idpenyakit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `penyakit`
-- 

INSERT INTO `penyakit` VALUES ('P001', 'Asma');
INSERT INTO `penyakit` VALUES ('P002', 'Emfisma Paru');
INSERT INTO `penyakit` VALUES ('P003', 'Brongkiektasis');
INSERT INTO `penyakit` VALUES ('P004', 'Brongkitis');

-- --------------------------------------------------------

-- 
-- Table structure for table `pertanyaan`
-- 

CREATE TABLE `pertanyaan` (
  `idpertanyaan` int(11) NOT NULL auto_increment,
  `idgejala` varchar(5) NOT NULL,
  `pertanyaan` text NOT NULL,
  PRIMARY KEY  (`idpertanyaan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=219 ;

-- 
-- Dumping data for table `pertanyaan`
-- 

INSERT INTO `pertanyaan` VALUES (1, 'G001', 'Apakah Anda mengalami batuk secara terus menerus?');
INSERT INTO `pertanyaan` VALUES (2, 'G002', 'Apakah Anda mengalami sesak nafas?');
INSERT INTO `pertanyaan` VALUES (3, 'G003', 'Apakah Anda merasakan bernafas pendek berlansung lama?');
INSERT INTO `pertanyaan` VALUES (4, 'G004', 'Apakah anda merasakan mengigil ?');
INSERT INTO `pertanyaan` VALUES (5, 'G005', 'Apakah anda merasa dada anda terasa berat ? ');
INSERT INTO `pertanyaan` VALUES (6, 'G006', 'Apakah anda merasa mudah lelah.?');
INSERT INTO `pertanyaan` VALUES (7, 'G007', 'Apakah anda merasa mudah panik? ');
INSERT INTO `pertanyaan` VALUES (8, 'G008', 'Apakah anda merasa demam ? ');
INSERT INTO `pertanyaan` VALUES (9, 'G009', 'Apakah anda merasa bibir dan kuku anda membiru ? ');
INSERT INTO `pertanyaan` VALUES (10, 'G010', 'Apakah batuk yang anda alami telah menahun ?');
INSERT INTO `pertanyaan` VALUES (11, 'G011', 'Adakah mengi saat anda bernafas ?  ');
INSERT INTO `pertanyaan` VALUES (12, 'G012', 'Apakah anda mengalami hilangnya nafsu makan ?');
INSERT INTO `pertanyaan` VALUES (13, 'G013', 'Apakah berat badan anda menurun drastis ?');
INSERT INTO `pertanyaan` VALUES (14, 'G014', 'Apakah anda mengalami batuk berdahak ?  ');
INSERT INTO `pertanyaan` VALUES (15, 'G015', 'Apakah anda merasakan batuk makin parah apabila berbaring miring ?  ');
INSERT INTO `pertanyaan` VALUES (16, 'G016', 'Apakah anda malas untuk melakukan aktifitas fisik ?');
INSERT INTO `pertanyaan` VALUES (17, 'G017', 'Apakah anda merasakan nafas anda makn sesak jika melakukan aktifitas fisik ?');
INSERT INTO `pertanyaan` VALUES (20, 'G020', 'Apakah terjadi pembengkakan pada bagian tubuh seperti, pergelangan kaki dan tungkai kaki?');
INSERT INTO `pertanyaan` VALUES (19, 'G019', 'Apakah terjadi gangguan pada penglihatan anda');
INSERT INTO `pertanyaan` VALUES (18, 'G018', 'Apakah anda merasakan nyeri pada otot tertentu ?');

-- --------------------------------------------------------

-- 
-- Table structure for table `statis`
-- 

CREATE TABLE `statis` (
  `idstatis` int(11) NOT NULL auto_increment,
  `isi` text NOT NULL,
  PRIMARY KEY  (`idstatis`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `statis`
-- 

INSERT INTO `statis` VALUES (1, '<h1><p style="margin-top: 0.5em; margin-bottom: 0.5em; line-height: 22.3999996185303px;"><font size="3">Sistem Pakar / Expert Sistem</font></p></h1><h1><p style="margin-top: 0.5em; margin-bottom: 0.5em; line-height: 22.3999996185303px; color: rgb(37, 37, 37); font-weight: normal;"><font size="2">&nbsp; &nbsp; &nbsp; &nbsp; Adalah sistem informasi yang berisi dengan pengetahuan dari pakar sehingga dapat digunakan untuk konsultasi. Pengetahuan dari pakar di dalam sistem ini digunakan sebagi dasar oleh Sistem Pakar untuk menjawab pertanyaan (konsultasi).</font></p></h1><h1><p style="margin-top: 0.5em; margin-bottom: 0.5em; line-height: 22.3999996185303px; color: rgb(37, 37, 37); font-weight: normal;"><font size="2">Kepakaran (expertise) adalah pengetahuan yang ekstensif dan spesifik yang diperoleh melalui rangkaian pelatihan, membaca, dan pengalaman. Pengetahuan membuat pakar dapat mengambil keputusan secara lebih baik dan lebih cepat daripada non-pakar dalam memecahkan problem yang kompleks. Kepakaran mempunyai sifat berjenjang, pakar top memiliki pengetahuan lebih banyak daripada pakar yunior. Tujuan Sistem Pakar adalah untuk mentransfer kepakaran dari seorang pakar ke komputer, kemudian ke orang lain (yang bukan pakar).<br></font></p><p style="margin-top: 0.5em; margin-bottom: 0.5em; line-height: 22.3999996185303px; color: rgb(37, 37, 37); font-weight: normal;"><font size="2"><b>Sistem pakar</b>&nbsp;adalah suatu&nbsp;<a href="http://id.wikipedia.org/wiki/Program_komputer" title="Program komputer" style="text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-attachment: initial; background-color: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">program komputer</a>&nbsp;yang mengandung&nbsp;<a href="http://id.wikipedia.org/wiki/Pengetahuan" title="Pengetahuan" class="mw-redirect" style="text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-attachment: initial; background-color: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">pengetahuan</a>&nbsp;dari satu atau lebih&nbsp;<a href="http://id.wikipedia.org/wiki/Pakar" title="Pakar" style="text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-attachment: initial; background-color: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">pakar</a>&nbsp;<a href="http://id.wikipedia.org/wiki/Manusia" title="Manusia" style="text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-attachment: initial; background-color: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">manusia</a>&nbsp;mengenai suatu bidang spesifik. Jenis program ini pertama kali dikembangkan oleh periset&nbsp;<a href="http://id.wikipedia.org/wiki/Kecerdasan_buatan" title="Kecerdasan buatan" style="text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-attachment: initial; background-color: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">kecerdasan buatan</a>&nbsp;pada dasawarsa 1960-an dan 1970-an dan diterapkan secara komersial selama 1980-an. Bentuk umum sistem pakar adalah suatu program yang dibuat berdasarkan suatu set aturan yang menganalisis informasi (biasanya diberikan oleh pengguna suatu sistem) mengenai suatu kelas masalah spesifik serta analisis matematis dari masalah tersebut. Tergantung dari desainnya, sistem pakar juga mampu merekomendasikan suatu rangkaian tindakan pengguna untuk dapat menerapkan koreksi. Sistem ini memanfaatkan kapabilitas penalaran untuk mencapai suatu simpulan.</font></p></h1>');
INSERT INTO `statis` VALUES (2, '<b><font size="3">Cara menggunakan aplikasi ini :</font></b><div><font size="2"><br></font><div><font size="2">1. Jika Anda belum mempunyai akun, silahkan mendaftar pada link yang telah disediakan.</font></div><div><font size="2">2. Setelah itu, silahkan login.</font></div><div><font size="2">3. Setelah Anda berhasil login, langsung saja menuju menu proses, dan ikuti langkah pada menu tersebut.&nbsp;</font></div></div>');
INSERT INTO `statis` VALUES (3, '<div><b><font size="4">Apa itu penyakit Paru Obstruktif Kronik ( PPOK )</font></b></div><div><font face="verdana" size="2"><span style="color: rgb(37, 37, 37); line-height: 22.4px;">&nbsp; &nbsp;&nbsp;</span></font><span style="font-family: ''Times New Roman'', serif; font-size: 12pt; line-height: 115%;">adalah penyakit paru yang dapat dicegah, diobati\r\ndengan beberapa efek ekstrapulmonal yang signifikan berkontribusi terhadap\r\ntingkat keparahan penderita. Karekteristik pulmonal penyakit ini di tandai oleh\r\nhambatan aliran udara di saluran napas yang tidak sepenuhnya reversible.\r\nHambatan aliran udara tersebut biasanya bersifat progresif dan berhubungan\r\ndengan respon inflamasi pulnomal terhadap partikel atau gas berbahaya,&nbsp;</span><span style="font-family: ''Times New Roman'', serif; font-size: 12pt; line-height: 115%;">Kebiasaan merokok merupakan penyebab kausal yang\r\nterpenting. Penghentian merokok mempunyai pengaruh besar untuk mempengaruhi\r\nriwayat dari PPOK ( Dr. Dahrizal Dahlan Sp.P )</span></div><div><span style="font-family: ''Times New Roman'', serif; font-size: 12pt; line-height: 115%;"><br></span></div><div><font face="Times New Roman, serif" size="4"><span style="line-height: 18px;"><b>Jenis Penyakit Paru Obstruktif Kronis (PPOK) Antara Lain&nbsp;</b></span></font></div><div><p></p></div><div>1. <font color="#cc0000">Brongkitis Kronis</font></div><div>2. <font color="#cc0000">Emfisma</font></div><div>3. <font color="#cc0000">Asma</font></div><div>4. <font color="#cc0000">Brongkietasis</font></div>');

-- --------------------------------------------------------

-- 
-- Table structure for table `tmp_gejala`
-- 

CREATE TABLE `tmp_gejala` (
  `idtmp` int(11) NOT NULL auto_increment,
  `idgejala` varchar(5) NOT NULL,
  `cfu` float NOT NULL,
  `user` varchar(30) NOT NULL,
  PRIMARY KEY  (`idtmp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `tmp_gejala`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `jenkel` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` VALUES (16, 'ridha', '12345678', 'andi ridhoa sam', 'Islam', 'Perempuan', 'ridha@gmail.com');
INSERT INTO `users` VALUES (13, 'muhammad nizar febyansah', 'B1smillah', 'muhammad nizar febyansah', 'Islam', 'Laki-Laki', 'nizarfebyansah10@gmail.com');
