-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 06, 2021 at 05:26 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jastukang`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jasa`
--

CREATE TABLE `jasa` (
  `id_jasa` int(11) NOT NULL,
  `nama_jasa` varchar(255) DEFAULT NULL,
  `harga_jasa` varchar(255) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `kemampuan` int(11) DEFAULT NULL,
  `detail` text NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `waktu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jasa`
--

INSERT INTO `jasa` (`id_jasa`, `nama_jasa`, `harga_jasa`, `id_kategori`, `kemampuan`, `detail`, `satuan`, `waktu`) VALUES
(2, 'Pemasangan Plafon', NULL, 10, 10, 'Pemasangan plafon', 'Meter', '1'),
(3, 'Pemasangan Genteng', NULL, 10, 15, 'Pemasangan genteng di berbagai rumah rumah', 'Item', '1'),
(4, 'Pemasangan Lampu', NULL, 10, 20, 'Pemasangan lampu oleh para profesional', 'Item', '1'),
(5, 'Pemasangan Atap', NULL, 10, 15, 'Pemasangan atap', 'Meter', '1'),
(6, 'Pemasangan Lantai', NULL, 1, 10, 'asdasd', 'Meter', '1'),
(7, 'Pemasangan Pintu', NULL, 11, 2, 'asdasd', 'Item', '1'),
(8, 'Pemasangan Jendela', NULL, 11, 2, 'ASDASD', 'Item', '1'),
(9, 'Pengecatan', NULL, 9, 10, 'asd', 'Meter', '1'),
(10, 'Perbaikan Plafon', NULL, 8, 12, 'asdasd', 'Meter', '1'),
(11, 'Perbaikan Genteng', NULL, 10, 20, 'asd', 'Meter', '1'),
(12, 'Perbaikan Lantai', NULL, 1, 5, 'asd', 'Meter', '1'),
(13, 'Instalasi Listrik', NULL, 13, 5, 'asd', 'Titik', '1'),
(14, 'Instalasi Kitchen Set', NULL, 13, 1, 'asd', 'Item', '7');

-- --------------------------------------------------------

--
-- Table structure for table `jasa_kategori`
--

CREATE TABLE `jasa_kategori` (
  `id_kategori_jasa` int(11) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jasa_kategori`
--

INSERT INTO `jasa_kategori` (`id_kategori_jasa`, `nama_kategori`) VALUES
(1, 'JASA PASANG KERAMIK'),
(6, 'JASA PASANG GRANIT'),
(7, 'JASA PENGECETAN'),
(8, 'JASA PASANG PLAFON'),
(9, 'JASA DINDING'),
(10, 'JASA ATAP'),
(11, 'JASA KOSTRUKSI'),
(12, 'JASA PARTISI'),
(13, 'Jasa Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `jasa_ulasan`
--

CREATE TABLE `jasa_ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jasa_ulasan_gambar`
--

CREATE TABLE `jasa_ulasan_gambar` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_kecamatan`
--

CREATE TABLE `lokasi_kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `kecamatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi_kecamatan`
--

INSERT INTO `lokasi_kecamatan` (`id_kecamatan`, `kecamatan`) VALUES
(1, 'Banyumanik'),
(2, 'Candisari'),
(3, 'Gajahmungkur'),
(4, 'Gayamsari'),
(5, 'Genuk'),
(6, 'Gunungpati'),
(7, 'Mijen'),
(8, 'Ngaliyan'),
(9, 'Pedurungan'),
(10, 'Semarang Barat'),
(11, 'Semarang Selatan'),
(12, 'Semarang Tengah'),
(13, 'Semarang Timur'),
(14, 'Semarang Utara'),
(15, 'Tembalang'),
(16, 'Tugu');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_kelurahan`
--

CREATE TABLE `lokasi_kelurahan` (
  `id_kelurahan` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `kelurahan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi_kelurahan`
--

INSERT INTO `lokasi_kelurahan` (`id_kelurahan`, `id_kecamatan`, `kelurahan`) VALUES
(1, 1, 'Banyumanik'),
(2, 1, 'Gedawang'),
(3, 1, 'Jabungan'),
(4, 1, 'Ngesrep'),
(5, 1, 'Padangsari'),
(6, 1, 'Pedalangan'),
(7, 1, 'Pudakpayung'),
(8, 1, 'Srondol Kulon'),
(9, 1, 'Srondol Wetan'),
(10, 1, 'Sumurboto'),
(11, 1, 'Tinjomoyo'),
(12, 2, 'Candi'),
(13, 2, 'Jatingaleh'),
(14, 2, 'Jomblang'),
(15, 2, 'Kaliwiru'),
(16, 2, 'Karanganyar Gunung'),
(17, 2, 'Tegalsari'),
(18, 2, 'Wonotingal'),
(19, 3, 'Bendanduwur'),
(20, 3, 'Bendan Ngisor'),
(21, 3, 'Bendungan'),
(22, 3, 'Gajahmungkur'),
(23, 3, 'Karangrejo'),
(24, 3, 'Lempongsari'),
(25, 3, 'Petompon'),
(26, 4, 'Sampangan'),
(27, 4, 'Gayamsari'),
(28, 4, 'Kaligawe'),
(29, 4, 'Pandean Lamper'),
(30, 4, 'Sambirejo'),
(31, 4, 'Sawahbesar'),
(32, 4, 'Siwalan'),
(33, 5, 'Tambakrejo'),
(34, 5, 'Bangetayu Kulon'),
(35, 5, 'Bangetayu Wetan'),
(36, 5, 'Banjardowo'),
(37, 5, 'Gebangsari'),
(38, 5, 'Genuksari'),
(39, 5, 'Karangroto'),
(40, 5, 'Kudu'),
(41, 5, 'Muktiharjo Lor'),
(42, 5, 'Penggaron Lor'),
(43, 5, 'Sembungharjo'),
(44, 5, 'Terboyo Kulon'),
(45, 5, 'Terboyo Wetan'),
(46, 6, 'Trimulyo'),
(47, 6, 'Cepoko'),
(48, 6, 'Gunungpati'),
(49, 6, 'Jatirejo'),
(50, 6, 'Kalisegoro'),
(51, 6, 'Kandri'),
(52, 6, 'Mangunsari'),
(53, 6, 'Ngijo'),
(54, 6, 'Nongkosawit'),
(55, 6, 'Pakintelan'),
(56, 6, 'Patemon'),
(57, 6, 'Plalangan'),
(58, 6, 'Pongangan'),
(59, 6, 'Sadeng'),
(60, 6, 'Sekaran'),
(61, 6, 'Sukorejo'),
(62, 7, 'Sumurejo'),
(63, 7, 'Bubakan'),
(64, 7, 'Cangkiran'),
(65, 7, 'Jatibarang'),
(66, 7, 'Jatisari'),
(67, 7, 'Karangmalang'),
(68, 7, 'Kedungpane'),
(69, 7, 'Mijen'),
(70, 7, 'Ngadirgo'),
(71, 7, 'Pesantren'),
(72, 7, 'Polaman'),
(73, 7, 'Purwosari'),
(74, 7, 'Tambangan'),
(75, 7, 'Wonolopo'),
(76, 8, 'Wonoplumbon'),
(77, 8, 'Bambankerep'),
(78, 8, 'Bringin'),
(79, 8, 'Gondoriyo'),
(80, 8, 'Kalipancur'),
(81, 8, 'Ngaliyan'),
(82, 8, 'Podorejo'),
(83, 8, 'Purwoyoso'),
(84, 8, 'Tambakaji'),
(85, 8, 'Wonosari'),
(86, 9, 'Wates'),
(87, 9, 'Gemah'),
(88, 9, 'Kalicari'),
(89, 9, 'Muktiharjo Kidul'),
(90, 9, 'Palebon'),
(91, 9, 'Pedurungan Kidul'),
(92, 9, 'Pedurungan Lor'),
(93, 9, 'Pedurungan Tengah'),
(94, 9, 'Penggaron Kidul'),
(95, 9, 'Plamongan Sari'),
(96, 9, 'Tlogomulyo'),
(97, 9, 'Tlogosari Kulon'),
(98, 10, 'Tlogosari Wetan'),
(99, 10, 'Bojongsalaman'),
(100, 10, 'Bongsari'),
(101, 10, 'Cabean'),
(102, 10, 'Gisikdrono'),
(103, 10, 'Kalibanteng Kidul'),
(104, 10, 'Kalibanteng Kulon'),
(105, 10, 'Karangayu'),
(106, 10, 'Kembangarum'),
(107, 10, 'Krapyak'),
(108, 10, 'Krobokan'),
(109, 10, 'Manyaran'),
(110, 10, 'Ngemplak Simongan'),
(111, 10, 'Salaman Mloyo'),
(112, 10, 'Tambakharjo'),
(113, 10, 'Tawang Mas'),
(114, 11, 'Tawangsari'),
(115, 11, 'Barusari'),
(116, 11, 'Bulustalan'),
(117, 11, 'Lamper Kidul'),
(118, 11, 'Lamper Lor'),
(119, 11, 'Lamper Tengah'),
(120, 11, 'Mugassari'),
(121, 11, 'Peterongan'),
(122, 11, 'Pleburan'),
(123, 11, 'Randusari'),
(124, 12, 'Wonodri'),
(125, 12, 'Bangunharjo'),
(126, 12, 'Brumbungan'),
(127, 12, 'Gabahan'),
(128, 12, 'Jagalan'),
(129, 12, 'Karangkidul'),
(130, 12, 'Kauman'),
(131, 12, 'Kembangsari'),
(132, 12, 'Kranggan'),
(133, 12, 'Miroto'),
(134, 12, 'Pandansari'),
(135, 12, 'Pekunden'),
(136, 12, 'Pendrikan Kidul'),
(137, 12, 'Pendrikan Lor'),
(138, 12, 'Purwodinatan'),
(139, 13, 'Sekayu'),
(140, 13, 'Bugangan'),
(141, 13, 'Karangtempel'),
(142, 13, 'Karangturi'),
(143, 13, 'Kebonagung'),
(144, 13, 'Kemijen'),
(145, 13, 'Mlatibaru'),
(146, 13, 'Mlatiharjo'),
(147, 13, 'Rejomulyo'),
(148, 13, 'Rejosari'),
(149, 14, 'Sarirejo'),
(150, 14, 'Bandarharjo'),
(151, 14, 'Bulu Lor'),
(152, 14, 'Dadapsari'),
(153, 14, 'Kuningan'),
(154, 14, 'Panggung Kidul'),
(155, 14, 'Panggung Lor'),
(156, 14, 'Plombokan'),
(157, 14, 'Purwosari'),
(158, 15, 'Tanjung Mas'),
(159, 15, 'Bulusan'),
(160, 15, 'Jangli'),
(161, 15, 'Kedungmundu'),
(162, 15, 'Kramas'),
(163, 15, 'Mangunharjo'),
(164, 15, 'Meteseh'),
(165, 15, 'Rowosari'),
(166, 15, 'Sambiroto'),
(167, 15, 'Sendangguwo'),
(168, 15, 'Sendangmulyo'),
(169, 15, 'Tandang'),
(170, 16, 'Tembalang'),
(171, 16, 'Jerakah'),
(172, 16, 'Karanganyar'),
(173, 16, 'Mangkang Kulon'),
(174, 16, 'Mangkang Wetan'),
(175, 16, 'Mangunharjo'),
(176, 16, 'Randu Garut'),
(177, 16, 'Tugurejo');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id_material` int(11) NOT NULL,
  `id_vendor` int(11) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_material` varchar(255) DEFAULT NULL,
  `harga_material` int(11) DEFAULT NULL,
  `satuan` varchar(255) DEFAULT NULL,
  `keterangan_satuan` varchar(255) DEFAULT NULL,
  `kemampuan` int(11) DEFAULT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id_material`, `id_vendor`, `id_kategori`, `nama_material`, `harga_material`, `satuan`, `keterangan_satuan`, `kemampuan`, `detail`) VALUES
(57, 14, 12, 'Cat Dulux', 10000, 'Kilogram', '10', 1, 'asd'),
(58, 14, 13, 'Cat micro', 10000, 'Kilogram', '10', 1, '123');

-- --------------------------------------------------------

--
-- Table structure for table `material_gambar`
--

CREATE TABLE `material_gambar` (
  `id` int(11) NOT NULL,
  `id_material` int(11) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material_gambar`
--

INSERT INTO `material_gambar` (`id`, `id_material`, `path`) VALUES
(43, 57, '57_0_Cat_Dulux.png'),
(44, 57, '57_1_Cat_Dulux.png'),
(45, 58, '58_0_Cat_micro.png'),
(46, 58, '58_1_Cat_micro.png');

-- --------------------------------------------------------

--
-- Table structure for table `material_kategori`
--

CREATE TABLE `material_kategori` (
  `id_kategori_material` int(11) NOT NULL,
  `id_kategori_jasa` int(11) DEFAULT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material_kategori`
--

INSERT INTO `material_kategori` (`id_kategori_material`, `id_kategori_jasa`, `nama_kategori`) VALUES
(12, 7, 'Cat Dinding'),
(13, 1, 'Keramik');

-- --------------------------------------------------------

--
-- Table structure for table `material_transaksi_detail`
--

CREATE TABLE `material_transaksi_detail` (
  `id` int(11) NOT NULL,
  `id_tr_material` varchar(11) DEFAULT NULL,
  `id_material` int(11) NOT NULL,
  `nama_material` varchar(255) DEFAULT NULL,
  `harga_material` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material_transaksi_detail`
--

INSERT INTO `material_transaksi_detail` (`id`, `id_tr_material`, `id_material`, `nama_material`, `harga_material`, `quantity`) VALUES
(7, 'TRM_01', 58, 'Cat micro', '10000', 10),
(8, 'TRM_01', 57, 'Cat Dulux', '10000', 7);

-- --------------------------------------------------------

--
-- Table structure for table `material_ulasan`
--

CREATE TABLE `material_ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `id_transaksi_material` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id_rekening` varchar(5) NOT NULL,
  `nama_rekening` varchar(255) DEFAULT NULL,
  `no_rekening` varchar(255) DEFAULT NULL,
  `kacab` varchar(255) DEFAULT NULL,
  `status_aktif` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `metode_pembayaran`
--

INSERT INTO `metode_pembayaran` (`id_rekening`, `nama_rekening`, `no_rekening`, `kacab`, `status_aktif`) VALUES
('NR_01', 'BRI', '60193827456719', 'Kota Purwodadi II', 0),
('NR_02', 'BCA', '61028172816827', 'Kota Purwodadi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_rekening` varchar(5) DEFAULT NULL,
  `id_transaksi` varchar(11) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `waktu` datetime(6) DEFAULT NULL,
  `total_harga` int(11) NOT NULL,
  `nama_pengirim` varchar(255) NOT NULL,
  `asal_bank` varchar(20) NOT NULL,
  `asal_rekening` varchar(25) NOT NULL,
  `total_bayar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_user`, `id_rekening`, `id_transaksi`, `path`, `waktu`, `total_harga`, `nama_pengirim`, `asal_bank`, `asal_rekening`, `total_bayar`) VALUES
(5, 1, 'NR_01', 'TRM_01', 'TRM_01.png', '2021-01-04 01:55:32.000000', 170000, 'Surya Saputra', 'BCA', '756464657584', '170000');

-- --------------------------------------------------------

--
-- Table structure for table `saldo`
--

CREATE TABLE `saldo` (
  `id_saldo` int(11) NOT NULL,
  `masuk` int(20) NOT NULL,
  `keluar` int(20) NOT NULL,
  `datetime` datetime NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `wd_path` varchar(255) NOT NULL,
  `id_transaksi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saldo`
--

INSERT INTO `saldo` (`id_saldo`, `masuk`, `keluar`, `datetime`, `id_pembayaran`, `wd_path`, `id_transaksi`) VALUES
(1, 170000, 0, '2021-01-05 05:35:53', 5, '', ''),
(2, 0, 100000, '2021-01-06 05:00:01', 0, 'TRM_01_2.png', 'TRM_01');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id_transaksi` int(11) NOT NULL,
  `id_lokasi` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama_jasa` varchar(255) DEFAULT NULL,
  `kategori_jasa` varchar(255) DEFAULT NULL,
  `harga_jasa` varchar(255) DEFAULT NULL,
  `status_pembayaran` varchar(255) DEFAULT NULL,
  `jumlah_tukang` int(11) DEFAULT NULL,
  `lokasi_pengerjaan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_done`
--

CREATE TABLE `transaksi_done` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `id_jasa` int(11) DEFAULT NULL,
  `id_tukang` int(11) DEFAULT NULL,
  `pengerjaan` date DEFAULT NULL,
  `durasi_pengerjaan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_gambar`
--

CREATE TABLE `transaksi_gambar` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_material`
--

CREATE TABLE `transaksi_material` (
  `id_tr_material` varchar(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `tgl_pemesanan` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `nama_penerima` varchar(255) NOT NULL,
  `hp_penerima` varchar(20) NOT NULL,
  `alamat_penerima` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_material`
--

INSERT INTO `transaksi_material` (`id_tr_material`, `id_user`, `id_transaksi`, `tgl_pemesanan`, `status`, `total_harga`, `nama_penerima`, `hp_penerima`, `alamat_penerima`, `kecamatan`) VALUES
('TRM_01', 1, NULL, '2021-01-03 00:00:00', '5', NULL, '123', '123', '123', 'Semarang Tengah');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_ongoing`
--

CREATE TABLE `transaksi_ongoing` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `id_jasa` int(11) DEFAULT NULL,
  `id_tukang` int(11) DEFAULT NULL,
  `pengerjaan` date DEFAULT NULL,
  `durasi_pengerjaan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pending`
--

CREATE TABLE `transaksi_pending` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `id_jasa` int(11) DEFAULT NULL,
  `id_tukang` int(11) DEFAULT NULL,
  `pengerjaan` date DEFAULT NULL,
  `durasi_pengerjaan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tukang_account`
--

CREATE TABLE `tukang_account` (
  `id_tukang` varchar(6) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hp_tukang` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `aktif` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tukang_detail`
--

CREATE TABLE `tukang_detail` (
  `id_tukang` varchar(6) NOT NULL,
  `id_lokasi` int(11) DEFAULT NULL,
  `nama_tukang` varchar(255) DEFAULT NULL,
  `alamat_tukang` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `hp_tukang` varchar(15) DEFAULT NULL,
  `spesialisasi` int(11) DEFAULT NULL,
  `no_identitas` varchar(255) DEFAULT NULL,
  `bukti_identitas` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT 'default.png',
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tukang_log`
--

CREATE TABLE `tukang_log` (
  `id_log` int(11) NOT NULL,
  `id_tukang` int(11) DEFAULT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `aktivitas` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `tanggal` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL,
  `role_id` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id_user`, `email`, `password`, `status`, `role_id`) VALUES
(1, 'surya.saputra030090@gmail.com', '$2y$10$eErKCzPqqm3tMZkDfhD0XOzZn7IZQYuDgSQI1Fm29AhK350T15iJG', '1', '0'),
(2, 'mikopanggayo@gmail.com', '$2y$10$4gAqEG8w7A4JNDTOClSpReUQlqqAh3kcOfCtwltRFVRdG8TaSgC4y', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id_user` int(11) NOT NULL,
  `nama_depan` varchar(255) DEFAULT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `alamat_user` varchar(255) DEFAULT NULL,
  `no_hp` varchar(17) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `id_lokasi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id_user`, `nama_depan`, `nama_belakang`, `alamat_user`, `no_hp`, `email`, `id_lokasi`) VALUES
(1, 'Surya', 'Saputra', NULL, '082323939888', 'surya.saputra030090@gmail.com', NULL),
(2, 'Miko', 'Panggayo', NULL, '08984644095', 'mikopanggayo@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id_vendor` int(11) NOT NULL,
  `id_lokasi` int(11) DEFAULT NULL,
  `nama_vendor` varchar(255) DEFAULT NULL,
  `alamat_vendor` varchar(255) DEFAULT NULL,
  `no_hp` varchar(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id_vendor`, `id_lokasi`, `nama_vendor`, `alamat_vendor`, `no_hp`) VALUES
(14, 96, 'Mekar Indah', 'Lingkungan Pedurungan', '086574837462'),
(15, 56, 'Dinami Bumi', 'Daerah Unness', '089253647584');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`id_jasa`);

--
-- Indexes for table `jasa_kategori`
--
ALTER TABLE `jasa_kategori`
  ADD PRIMARY KEY (`id_kategori_jasa`) USING BTREE;

--
-- Indexes for table `jasa_ulasan`
--
ALTER TABLE `jasa_ulasan`
  ADD PRIMARY KEY (`id_ulasan`);

--
-- Indexes for table `jasa_ulasan_gambar`
--
ALTER TABLE `jasa_ulasan_gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi_kecamatan`
--
ALTER TABLE `lokasi_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `lokasi_kelurahan`
--
ALTER TABLE `lokasi_kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `material_gambar`
--
ALTER TABLE `material_gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material_kategori`
--
ALTER TABLE `material_kategori`
  ADD PRIMARY KEY (`id_kategori_material`);

--
-- Indexes for table `material_transaksi_detail`
--
ALTER TABLE `material_transaksi_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material_ulasan`
--
ALTER TABLE `material_ulasan`
  ADD PRIMARY KEY (`id_ulasan`);

--
-- Indexes for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id_saldo`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `transaksi_detail_ibfk_1` (`id_lokasi`);

--
-- Indexes for table `transaksi_done`
--
ALTER TABLE `transaksi_done`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `transaksi_gambar`
--
ALTER TABLE `transaksi_gambar`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `transaksi_material`
--
ALTER TABLE `transaksi_material`
  ADD PRIMARY KEY (`id_tr_material`);

--
-- Indexes for table `transaksi_ongoing`
--
ALTER TABLE `transaksi_ongoing`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `transaksi_pending`
--
ALTER TABLE `transaksi_pending`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `tukang_account`
--
ALTER TABLE `tukang_account`
  ADD PRIMARY KEY (`id_tukang`);

--
-- Indexes for table `tukang_detail`
--
ALTER TABLE `tukang_detail`
  ADD PRIMARY KEY (`id_tukang`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- Indexes for table `tukang_log`
--
ALTER TABLE `tukang_log`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_tukang` (`id_tukang`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id_vendor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jasa`
--
ALTER TABLE `jasa`
  MODIFY `id_jasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `jasa_kategori`
--
ALTER TABLE `jasa_kategori`
  MODIFY `id_kategori_jasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jasa_ulasan`
--
ALTER TABLE `jasa_ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jasa_ulasan_gambar`
--
ALTER TABLE `jasa_ulasan_gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lokasi_kecamatan`
--
ALTER TABLE `lokasi_kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `lokasi_kelurahan`
--
ALTER TABLE `lokasi_kelurahan`
  MODIFY `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `material_gambar`
--
ALTER TABLE `material_gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `material_kategori`
--
ALTER TABLE `material_kategori`
  MODIFY `id_kategori_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `material_transaksi_detail`
--
ALTER TABLE `material_transaksi_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `material_ulasan`
--
ALTER TABLE `material_ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id_saldo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi_done`
--
ALTER TABLE `transaksi_done`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_gambar`
--
ALTER TABLE `transaksi_gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_ongoing`
--
ALTER TABLE `transaksi_ongoing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_pending`
--
ALTER TABLE `transaksi_pending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tukang_log`
--
ALTER TABLE `tukang_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id_vendor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
