-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2024 at 09:15 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-lanjut`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_login`
--

CREATE TABLE `db_login` (
  `id_login` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_login`
--

INSERT INTO `db_login` (`id_login`, `nama`, `username`, `password`) VALUES
(2, 'Satria', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `kategori`, `judul`, `isi`, `tanggal`, `gambar`) VALUES
(65, 'Nature Style', 'ORDER VECTOR NATURE STYLE', '<div class=\"separator\">Hai!</div>\r\n<p style=\"text-align: justify;\">Kenalin ini adalah Vector Nature Style. Kenapa dinamakan Nature? Kata \"Nature\" berasal dari nama panggilan saya yaitu Mbah Nature (Nature = Alam). Gapenting banget ya penjelasannya?!</p>', '2023-01-15', '433_t-2.jpg'),
(68, 'Line Art', 'ORDER VECTOR LINE ART STYLE', '<p style=\"text-align: justify;\">Mau yang lebih murah? Vector line art lah solusinya. Vector ini hanya terbentuk dari garis-garis hitam dan putih, simpel dan minimalis.&nbsp;<a name=\"more\"></a>Cocok untuk pajangan atau sebagai kado buat orang yang kalian cintai. Kadang juga digunakan untuk kebutuhan cetak sablon yang hanya memerlukan 1 warna saja.</p>', '2023-01-01', '249_t-3.jpg'),
(69, 'BigHead Style', 'ORDER VECTOR BIG HEAD STYLE', '<p>Sesuai dengan namanya, vector ini mempunyai keunikan tersendiri yaitu kepala nya yang lebih besar dibanding badannya. Bisa dibilang juga sebagai vector karikatur.</p>', '2023-01-06', '671_t-1.jpg'),
(70, 'Pop Art', 'ORDER VECTOR POP ART', '<p style=\"text-align: justify;\">Vector Pop Art Style ini bisa dibilang style pop art komik-komik retro jaman dulu, memiliki warna yang dominan cerah dan lapisan shape shading-nya lebih sedikit. Cocok buat kalian yang mempunyai karakter ceria, unyu-unyu.</p>', '2023-01-20', '176_t-4.jpg'),
(71, 'Obama Hope Style', 'ORDER VECTOR OBAMA HOPE STYLE', '<p style=\"text-align: justify;\">Mungkin kalian pernah mendengar atau melihat jenis art ini kisaran tahun 2008/2009-an. Yap, ini adalah jenis lukisan yang sangat fenomenal yang didesain oleh seniman Shepard Feirey pada zaman presiden Obama nyapres menjadi presiden Amerika Serikat. Jenis vector art ini dinamakan Obama Hope Style.</p>', '2023-01-21', '928_t-5.jpg'),
(72, 'Automotive', 'ORDER VECTOR AUTOMOTIVE ART', '<p style=\"text-align: justify;\">Nah, bagi kalian yang punya mobil atau motor, atau hal yang berhubungan dengan otomotif dan ingin membuatnya menjadi versi vector, kalian berada di tempat yang tepat. Di sini saya membuka jasa tracing vector khusus otomotif karena banyak sekali klien saya sebelumnya menginginkan kendaraan mereka untuk ditracing ke dalam bentuk vector, entah itu untuk kebutuhan pribadi atau komersil.</p>', '2023-01-05', '726_t-6.jpg'),
(75, 'Tutorial Vektor Art', 'Tutorial Cara Membuat Vector Mata di Affinity Designer', '<p>Asik banget gak tuh kalimat pembukanya? Hehe.<br><br>Di tutorial kali ini kita akan belajar cara membuat vector mata (lagi), tapi kali ini kita menggunakan software yang berbeda, nih. Yaitu Affinity Designer.</p>', '2023-01-31', '770_1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_login`
--
ALTER TABLE `db_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_login`
--
ALTER TABLE `db_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
