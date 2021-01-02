-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 06:10 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pusatoleholehlpg`
--

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `UID` int(100) NOT NULL,
  `nmtoko` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `jadwal` text DEFAULT NULL,
  `web` text DEFAULT NULL,
  `cp` text DEFAULT NULL,
  `bayar` text DEFAULT NULL,
  `jenis` text DEFAULT NULL,
  `lat` varchar(100) NOT NULL,
  `long` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`UID`, `nmtoko`, `alamat`, `jadwal`, `web`, `cp`, `bayar`, `jenis`, `lat`, `long`, `pic`, `deskripsi`) VALUES
(6, 'PURI JAYA\r\n', 'Jl. Pagar Alam No.32, Kedaton, Kec. Kedaton, Kota Bandar Lampung, Lampung 35152\r\n', 'setiap hari, pukul 07:00-22:00\r\n', '', '08893793866\r\n', 'cash\r\n', 'makanan minuman\r\n', '-5,385544\r\n', '105,254814\r\n', '', ''),
(7, 'ALYN TAPIS\r\n', 'Jl. Pagar Alam No.23, Kedaton, Kec. Kedaton, Kota Bandar Lampung, Lampung 35152\r\n', 'setiap hari, pukul 09:00-17:00\r\n', 'IG : alyntapis\r\n', '089666551920\r\n', 'cash, debit\r\n', 'pakaian\r\n', '-5,385455\r\n', '105,254779\r\n', '', ''),
(8, 'KARYA MANDIRI\r\n', 'Jl. Pagar Alam No.51, Kedaton, Kec. Kedaton, Kota Bandar Lampung, Lampung 35152\r\n', 'setiap hari, pukul 07:30-21:00\r\n', '', '081361228252\r\n', 'cash\r\n', 'makanan\r\n', '-5,385532\r\n', '105,255796\r\n', '', ''),
(9, 'ROYAN\r\n', 'Jl. Pagar Alam No.41, Kedaton, Kec. Kedaton, Kota Bandar Lampung, Lampung 35152\r\n', 'setiap hari, pukul 08:00-21:00\r\n', '', '081379498891\r\n', 'cash\r\n', 'makanan\r\n', '-5,385104\r\n', '105,256902\r\n', '', ''),
(10, 'KRIPIK LAMPUNG\r\n', 'Jl. Pagar Alam No.27, Kedaton, Kec. Kedaton, Kota Bandar Lampung, Lampung 35152\r\n', 'setiap hari, pukul 06:00-21:30\r\n', ' IG : kripiklampungs\r\n', '081278809993\r\n', 'cash, gopay, QRIS\r\n', 'makanan , minuman, pakaian\r\n', '-5,384722\r\n', '105,257794\r\n', '', ''),
(11, 'KURNIA\r\n', 'Jl. Pagar Alam  Kedaton, Kec. Kedaton, Kota Bandar Lampung, Lampung 35152\r\n', 'setiap hari, pukul 09:00-20:30\r\n', '', '08127285758\r\n', 'cash, transfer', 'makanan\r\n', '-5,384721\r\n', '105,257929\r\n', '', ''),
(12, 'ROJO KRIPIK\r\n', 'Jl. Pagar Alam No.25, Kedaton, Kec. Kedaton, Kota Bandar Lampung, Lampung 35148\r\n', 'setiap hari, pukul 09:00-22:00\r\n', '', '081379524168\r\n', 'cash\r\n', 'makanan\r\n', '-5,3846717\r\n', '105,2579951\r\n', '', ''),
(13, 'ARABAR SHOP\r\n', 'Jl. Pagar Alam No.1, Kedaton, Kec. Kedaton, Kota Bandar Lampung, Lampung 35132\r\n', 'setiap hari, pukul 08:00-22:00\r\n', '', '081272107510\r\n', 'cash, debit, ovo, gopay, QRIS, shoope pay(disc 30%)\r\n', 'makanan\r\n', '-5,383528\r\n', '105,259325\r\n', '', ''),
(14, 'SAUDAGAR KRIPIK\r\n', 'Jl. Pagar Alam, Segala Mider, Kec. Tj. Karang Bar., Kota Bandar Lampung, Lampung 35125\r\n', 'setiap hari, pukul 08:00-22:00\r\n', 'FB : Saudagar Oleh-oleh Lampung\r\n', '08127235346\r\n', 'cash\r\n', 'makanan\r\n', '-5,386453\r\n', '105,245216\r\n', '', ''),
(15, 'ASKHA JAYA\r\n', 'Jl. Pagar Alam, Segala Mider, Kec. Kedaton, Kota Bandar Lampung, Lampung 35151\r\n', 'setiap hari, pukul 08:00-21:30\r\n', '', '085279466443\r\n', 'cash, debit, ovo, gopay, QRIS, shoope pay (disc 30%) \r\n', 'makanan , minuman, pakaian\r\n', '-5,386776\r\n', '105,242789\r\n', '', ''),
(16, 'MAHKOTA SUVENIR\r\n', 'Jl. Pagar Alam, Segala Mider, Kec. Kedaton, Kota Bandar Lampung, Lampung 35151\r\n', 'setiap hari, pukul 09:00-17:00\r\n', 'mahkotasuvenir.com\r\n', '085208519191\r\n', 'cash\r\n', 'suvenir\r\n', '-5,388806\r\n', '105,239814\r\n', '', ''),
(17, 'IYEN \r\n', 'Jl. ZA. Pagar Alam No.10, Labuhan Ratu, Kec. Kedaton, Kota Bandar Lampung, Lampung 35132\r\n', 'setiap hari, pukul 07:30-19:00\r\n', 'IG : iyen_foods\r\n', '081312312369\r\n', 'cash, debit\r\n', 'makanan , minuman, suvenir\r\n', '-5,3814426\r\n', '105,2562105\r\n', '', ''),
(18, 'BANANA FOSTER LAMPUNG\r\n', 'Jl. ZA. Pagar Alam, Labuhan Ratu, Kec. Kedaton, Kota Bandar Lampung, Lampung 35132\r\n', 'setiap hari, pukul 07:00-21:00\r\n', 'IG : bananafosterlampung\r\n', '07215600660\r\n', 'cash, QRIS, shoope pay (disc 30%)\r\n', 'makanan, minuman, suvenir, pakaian\r\n', '-5,381367\r\n', '105,2561632\r\n', '', ''),
(19, 'ANEKA SARI RASA\r\n', 'Jl. Ikan Kakap No.26 & 28, Tlk. Betung, Kec. Telukbetung Selatan, Kota Bandar Lampung, Lampung 35521\r\n', 'setiap hari, pukul 07:00-22:00\r\n', 'www.anekasarirasa.com\r\n', '07215630988/ 082388688868\r\n', 'cash debit QRIS shopee pay\r\n', 'makanan minuman suvenir pakaian\r\n', '-5,4490243\r\n', '105,2631584\r\n', '', ''),
(20, 'SUSENO\r\n', 'Jl. Ikan Kakap No.78, Pesawahan, Kec. Telukbetung Selatan, Kota Bandar Lampung, Lampung 35221\r\n', 'setiap hari, pukul 08:00-22:00\r\n', '\r\n', '0721487525', 'cash debit\r\n', 'makanan minuman\r\n', '-5,4488683\r\n', '105,2629026\r\n', '', ''),
(21, 'RUMAH KUNING\r\n', 'Jl. Ikan Kakap, Pesawahan, Kec. Telukbetung Selatan, Kota Bandar Lampung, Lampung 35221\r\n', 'setiap hari, pukul 08:00-21:00\r\n', '', '0721482004\r\n', 'cash debit\r\n', 'makanan minuman\r\n', '-5,448837\r\n', '105,2626484\r\n', '', ''),
(22, 'TOKO MANISAN LAMPUNG 15 (KWIE KIE)\r\n', 'Jl. Ikan Kakap No.15, Pesawahan, Kec. Telukbetung Selatan, Kota Bandar Lampung, Lampung 35221\r\n', 'setiap hari, pukul 08:00-21:00\r\n', '', '0721483224\r\n', 'cash\r\n', 'makanan\r\n', '-5,4488363\r\n', '105,262623\r\n', '', ''),
(23, 'TOKO SINGGAH PAY\r\n', 'Jl. Ikan Kakap, Pesawahan, Kec. Telukbetung Selatan, Kota Bandar Lampung, Lampung 35221\r\n', 'setiap hari, pukul 09.00-21:00\r\n', '', '081379789711\r\n', 'cash debit\r\n', 'pakaian suvenir\r\n', '-5,4488902\r\n', '105,2623966\r\n', '', ''),
(24, 'MARINA\r\n', 'Jl. Ikan Kakap No.96, Pesawahan, Kec. Telukbetung Selatan, Kota Bandar Lampung, Lampung 35221\r\n', 'setiap hari, pukul 08:00-22:00\r\n', '', '0721483341\r\n', 'cash\r\n', 'makanan\r\n', '-5,4488095\r\n', '105,2624916\r\n', '', ''),
(25, 'KOPI BUBUK SINAR BARU BOLA DUNIA\r\n', 'Jl. Ikan Kakap No.22/75, Pesawahan, Kec. Telukbetung Selatan, Kota Bandar Lampung, Lampung 35221\r\n', 'setiap hari, pukul 08:00-16:00\r\n', 'IG : kopisinarbaruboladunia\r\n', '0721487475\r\n', 'cash debit\r\n', 'minuman suvenir\r\n', '-5,4489313\r\n', '105,2628306\r\n', '', ''),
(26, 'WALEU KAOS LAMPUNG\r\n', 'Jl. Wolter Monginsidi No.91, Pengajaran, Kec. Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35213\r\n', 'setiap hari, pukul 09:00-21:00\r\n', 'www.waleulampung.com\r\n', '087899159590\r\n', 'cash debit\r\n', 'pakaian suvenir\r\n', '-5,4304834\r\n', '105,2533421\r\n', '', ''),
(27, 'RUWAI JURAI TAPIS LAMPUNG\r\n', 'Jl. Jend. Sudirman No.43C, Enggal, Engal, Kota Bandar Lampung, Lampung 35118\r\n', 'setiap hari, pukul 08:00-20:45\r\n', '', '081540050815\r\n', 'cash debit\r\n', 'pakaian suvenir\r\n', '-5,422365\r\n', '105,261401\r\n', '', ''),
(28, 'SANGGAR TAPIS BAMBU KUNING\r\n', 'Jl. Kartini No.152, Tj. Karang, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35117\r\n', 'setiap hari, pukul 10:00-17:00\r\n', '', '081379789711\r\n', 'cash debit\r\n', 'pakaian suvenir\r\n', '-5,4138011\r\n', '105,2553793\r\n', '', ''),
(30, 'KAIN TAPIS LAMPUNG SAM BORDIR\r\n', 'Jl. Imam Bonjol No.24, Pasir Gintung, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35111\r\n', 'setiap hari, pukul 08:00-18:00\r\n', '', '085279882963\r\n', 'cash, debit\r\n', 'pakaian suvenir\r\n', '-5,4097201\r\n', '105,2560795\r\n', '', ''),
(31, 'RUWA JURAI\r\n', 'Jl. Imam Bonjol No.34, Pasir Gintung, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35127\r\n', 'setiap hari, pukul 08:30-17:30\r\n', '', '0721252781\r\n', 'cash debit\r\n', 'pakaian suvenir\r\n', '-5,4097201\r\n', '105,2560795\r\n', '', ''),
(32, 'SAMI SUTRA\r\n', 'Jl. Imam Bonjol No.38, Pasir Gintung, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35127\r\n', 'setiap hari, pukul 08:00-17:00\r\n', '', '0721264423\r\n', 'cash debit ', 'pakaian suvenir\r\n', '-5,4096836\r\n', '105,2560432\r\n', '', ''),
(33, 'HANNAN COLLECTION\r\n', 'Jl. Imam Bonjol No.25, Pasir Gintung, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35127\r\n', 'setiap hari, pukul 09 :00-17:00\r\n', '', '082183171155\r\n', 'cash\r\n', 'pakaian suvenir\r\n', '-5,4095044', '105,2558886\r\n', '', ''),
(34, 'HAI TOMS\r\n', 'Jl. Raden Intan No.61, Enggal, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35213\r\n', 'setiap hari, pukul 09 :00-21:00\r\n', 'www.haitoms.com\r\n', '081350007558\r\n', 'cash, debit\r\n', 'makanan minuman pakaian suvenir\r\n', '-5,41673834\r\n', '105,2583312\r\n', '', ''),
(35, 'SINGGAH PAY\r\n', 'Jl. Kartini, Kaliawi, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35127\r\n', 'setiap hari, pukul 09.00-21:00\r\n', '', '081382826065\r\n', 'cash\r\n', 'pakaian suvenir\r\n', '-5,4129235\r\n', '105,2557231\r\n', '', ''),
(36, 'NINDA SOUVENIR LAMPUNG', 'Jl. Jend. Sudirman No.47C, Rw. Laut, Engal, Kota Bandar Lampung, Lampung 35213', 'setiap hari, pukul 07:00-20:00', '', '0721269408', 'pakaian suvenir', 'pakaian suvenir', '-5,422506', '105,263372', 'logo_kakr1.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `UID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;