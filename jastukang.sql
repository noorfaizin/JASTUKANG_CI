-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 05 Jan 2021 pada 11.39
-- Versi server: 8.0.22-0ubuntu0.20.04.3
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `jasa`
--

CREATE TABLE `jasa` (
  `id_jasa` varchar(6) NOT NULL,
  `nama_jasa` varchar(50) NOT NULL,
  `harga_harian` int NOT NULL,
  `harga_borongan` int NOT NULL,
  `id_kategori` varchar(1) NOT NULL,
  `id_subkategori` varchar(3) NOT NULL,
  `kemampuan` int NOT NULL,
  `id_keahlian` varchar(6) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `jasa`
--

INSERT INTO `jasa` (`id_jasa`, `nama_jasa`, `harga_harian`, `harga_borongan`, `id_kategori`, `id_subkategori`, `kemampuan`, `id_keahlian`, `gambar`, `deskripsi`) VALUES
('D06_01', 'Plafon Gypsum', 100000, 150000, 'D', 'D06', 40, '-', '-', 'Pada hunian rumah minimalis banyak ditemukan plafon gypsum. Kelebihan plafon jenis ini adalah mudah dalam pengerjaannya serta sambungan pada plafon dapat mudah ditutupi sehingga hasilnya lebih terlihat semourna. Selain itu, plafon gysum biasanya memiliki ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasa_gambar`
--

CREATE TABLE `jasa_gambar` (
  `id` int NOT NULL,
  `id_jasa` varchar(6) NOT NULL,
  `nama_gambar` varchar(225) DEFAULT NULL,
  `path` varchar(255) DEFAULT 'no_image.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasa_kategori`
--

CREATE TABLE `jasa_kategori` (
  `id_kategori_jasa` varchar(1) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `jasa_kategori`
--

INSERT INTO `jasa_kategori` (`id_kategori_jasa`, `nama_kategori`) VALUES
('D', 'Dekorasi'),
('P', 'Perbaikan'),
('R', 'Perbaikan Ruang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasa_sub_kategori`
--

CREATE TABLE `jasa_sub_kategori` (
  `id_sub_kategori_jasa` varchar(3) NOT NULL,
  `id_kategori_jasa` varchar(1) NOT NULL,
  `nama_sub_kategori_jasa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `jasa_sub_kategori`
--

INSERT INTO `jasa_sub_kategori` (`id_sub_kategori_jasa`, `id_kategori_jasa`, `nama_sub_kategori_jasa`) VALUES
('D01', 'D', 'Cat'),
('D02', 'D', 'Pagar'),
('D03', 'D', 'Carport & Kanopi'),
('D04', 'D', 'Taman'),
('D05', 'D', 'Facade'),
('D06', 'D', 'Plafon'),
('P01', 'P', 'Lantai'),
('P02', 'P', 'Dinding'),
('P03', 'P', 'Plafon'),
('P04', 'P', 'Atap'),
('P05', 'P', 'Kusen Pintu & Jendela'),
('P06', 'P', 'Plumbing'),
('P07', 'P', 'Instalasi Listrik'),
('P08', 'P', 'Pagar'),
('R01', 'R', 'Ruang Kantor'),
('R02', 'R', 'Ruang Kamar'),
('R03', 'R', 'Ruang Tamu'),
('R04', 'R', 'Dapur'),
('R05', 'R', 'Kamar Mandi'),
('R06', 'R', 'Ruang Keluarga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasa_ulasan`
--

CREATE TABLE `jasa_ulasan` (
  `id_ulasan` int NOT NULL,
  `id_transaksi` int DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  `nilai` int DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_keahlian`
--

CREATE TABLE `kategori_keahlian` (
  `id_keahlian` varchar(6) NOT NULL,
  `nama_keahlian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi_kecamatan`
--

CREATE TABLE `lokasi_kecamatan` (
  `id_lokasi` varchar(2) NOT NULL,
  `kecamatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `lokasi_kecamatan`
--

INSERT INTO `lokasi_kecamatan` (`id_lokasi`, `kecamatan`) VALUES
('BY', 'Banyumanik'),
('CS', 'Candisari'),
('GM', 'Gajah Mungkur'),
('GN', 'Genuk'),
('GP', 'Gunungpati'),
('GY', 'Gayamsari'),
('MJ', 'Mijen'),
('NY', 'Ngaliyan'),
('PD', 'Pedurungan'),
('SB', 'Semarang Barat'),
('SS', 'Semarang Selatan'),
('ST', 'Semarang Tengah'),
('SU', 'Semarang Utara'),
('TB', 'Tembalang'),
('TG', 'Tugu'),
('TM', 'Semarang Timur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi_kelurahan`
--

CREATE TABLE `lokasi_kelurahan` (
  `id_kelurahan` varchar(5) NOT NULL,
  `id_kecamatan` varchar(2) NOT NULL,
  `kelurahan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `lokasi_kelurahan`
--

INSERT INTO `lokasi_kelurahan` (`id_kelurahan`, `id_kecamatan`, `kelurahan`) VALUES
('BY_01', 'BY', 'Ngesrep'),
('BY_02', 'BY', 'Tinjomoyo'),
('BY_03', 'BY', 'Srondol Kulon'),
('BY_04', 'BY', 'Srondol Wetan'),
('BY_05', 'BY', 'Banyumanik'),
('BY_06', 'BY', 'Pudakpayung'),
('BY_07', 'BY', 'Gedawang'),
('BY_08', 'BY', 'Jabungan'),
('BY_09', 'BY', 'Padangsari'),
('BY_10', 'BY', 'Pedalangan'),
('BY_11', 'BY', 'Sumurboto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `material`
--

CREATE TABLE `material` (
  `id_material` int NOT NULL,
  `id_vendor` int DEFAULT NULL,
  `id_kategori` int DEFAULT NULL,
  `nama_material` varchar(255) DEFAULT NULL,
  `harga_material` int DEFAULT NULL,
  `satuan` varchar(255) DEFAULT NULL,
  `keterangan_satuan` varchar(255) DEFAULT NULL,
  `kemampuan` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `material_gambar`
--

CREATE TABLE `material_gambar` (
  `id` int NOT NULL,
  `id_material` int DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `material_kategori`
--

CREATE TABLE `material_kategori` (
  `id_kategori_material` int NOT NULL,
  `id_kategori_jasa` int DEFAULT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `material_transaksi_detail`
--

CREATE TABLE `material_transaksi_detail` (
  `id` int NOT NULL,
  `id_tr_material` int DEFAULT NULL,
  `nama_material` varchar(255) DEFAULT NULL,
  `harga_material` varchar(255) DEFAULT NULL,
  `quantity` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `material_ulasan`
--

CREATE TABLE `material_ulasan` (
  `id_ulasan` int NOT NULL,
  `id_transaksi_material` int DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  `nilai` int DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_tansaksi` varchar(10) NOT NULL,
  `id_user` varchar(8) NOT NULL,
  `total` int NOT NULL,
  `tgl_pesanan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_bukti`
--

CREATE TABLE `transaksi_bukti` (
  `id` int NOT NULL,
  `id_transaksi` varchar(10) NOT NULL,
  `id_tukang` varchar(8) NOT NULL,
  `path` varchar(255) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id_transaksi` varchar(10) NOT NULL,
  `id_lokasi_kecamatan` varchar(2) NOT NULL,
  `id_user` varchar(8) NOT NULL,
  `id_tukang` varchar(8) DEFAULT NULL,
  `nama_jasa` varchar(50) NOT NULL,
  `harga_jasa` int NOT NULL,
  `status_pembayaran` enum('0','1','2') DEFAULT '0',
  `lokasi_pengerjaan` varchar(255) NOT NULL,
  `qty` int NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_done`
--

CREATE TABLE `transaksi_done` (
  `id_transaksi` varchar(10) NOT NULL,
  `id_user` varchar(8) DEFAULT NULL,
  `id_jasa` varchar(6) DEFAULT NULL,
  `id_tukang` varchar(8) DEFAULT NULL,
  `tgl_done` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_gambar`
--

CREATE TABLE `transaksi_gambar` (
  `id` int NOT NULL,
  `id_transaksi` varchar(10) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_invalid`
--

CREATE TABLE `transaksi_invalid` (
  `id_transaksi` varchar(10) NOT NULL,
  `id_user` varchar(8) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_material`
--

CREATE TABLE `transaksi_material` (
  `id_tr_material` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `id_material` int DEFAULT NULL,
  `id_transaksi` int DEFAULT NULL,
  `tgl_pemesanan` date DEFAULT NULL,
  `status_pengiriman` varchar(255) DEFAULT NULL,
  `status_pembayaran` varchar(255) DEFAULT NULL,
  `total_harga` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_ongoing`
--

CREATE TABLE `transaksi_ongoing` (
  `id_tranaksi` varchar(10) NOT NULL,
  `id_user` varchar(8) NOT NULL,
  `id_jasa` varchar(6) NOT NULL,
  `id_tukang` varchar(8) NOT NULL,
  `max_tgl` date NOT NULL,
  `min_tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_pending`
--

CREATE TABLE `transaksi_pending` (
  `id_transaksi` varchar(10) NOT NULL,
  `id_user` varchar(8) NOT NULL,
  `id_jasa` varchar(6) NOT NULL,
  `id_keahlian` varchar(6) NOT NULL,
  `id_lokasi_kecamatan` varchar(2) NOT NULL,
  `tgl_pekerjaan` date NOT NULL,
  `durasi_pengerjaan` int DEFAULT NULL,
  `durasi_min` int NOT NULL,
  `durasi_max` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tukang_account`
--

CREATE TABLE `tukang_account` (
  `id_tukang` varchar(8) NOT NULL,
  `no_tlp` int NOT NULL,
  `password` varchar(50) NOT NULL,
  `aktif` enum('1','0') DEFAULT '0',
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tukang_detail`
--

CREATE TABLE `tukang_detail` (
  `id_tukang` varchar(8) NOT NULL,
  `id_lokasi_kecamatan` varchar(2) NOT NULL,
  `nama_tukang` varchar(100) NOT NULL,
  `alamat_tukang` varchar(255) NOT NULL,
  `foto_ktp` varchar(255) NOT NULL,
  `foto_wajah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tukang_keahlian`
--

CREATE TABLE `tukang_keahlian` (
  `id_tukang` varchar(8) NOT NULL,
  `id_keahlian` varchar(6) NOT NULL,
  `no_sertif` varchar(100) NOT NULL,
  `foto_sertif` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tukang_log`
--

CREATE TABLE `tukang_log` (
  `id_log` int NOT NULL,
  `id_tukang` int DEFAULT NULL,
  `id_transaksi` int DEFAULT NULL,
  `aktivitas` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `tanggal` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tukang_riwayat`
--

CREATE TABLE `tukang_riwayat` (
  `id_tukang` varchar(8) NOT NULL,
  `jml_uang` int NOT NULL,
  `keterangan` enum('1','2') NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tukang_saldo`
--

CREATE TABLE `tukang_saldo` (
  `id_tukang` varchar(8) NOT NULL,
  `saldo` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_account`
--

CREATE TABLE `user_account` (
  `id_user` varchar(8) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_detail`
--

CREATE TABLE `user_detail` (
  `id_user` varchar(8) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `alamat_user` varchar(255) DEFAULT NULL,
  `no_hp` varchar(17) DEFAULT NULL,
  `id_lokasi_kecamatan` varchar(2) DEFAULT NULL,
  `foto` varchar(255) DEFAULT 'no_image.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `vendor`
--

CREATE TABLE `vendor` (
  `id_vendor` int NOT NULL,
  `id_lokasi` int DEFAULT NULL,
  `nama_vendor` varchar(255) DEFAULT NULL,
  `alamat_vendor` varchar(255) DEFAULT NULL,
  `no_hp` varchar(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`id_jasa`);

--
-- Indeks untuk tabel `jasa_gambar`
--
ALTER TABLE `jasa_gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jasa_kategori`
--
ALTER TABLE `jasa_kategori`
  ADD PRIMARY KEY (`id_kategori_jasa`) USING BTREE;

--
-- Indeks untuk tabel `jasa_sub_kategori`
--
ALTER TABLE `jasa_sub_kategori`
  ADD PRIMARY KEY (`id_sub_kategori_jasa`);

--
-- Indeks untuk tabel `jasa_ulasan`
--
ALTER TABLE `jasa_ulasan`
  ADD PRIMARY KEY (`id_ulasan`);

--
-- Indeks untuk tabel `kategori_keahlian`
--
ALTER TABLE `kategori_keahlian`
  ADD PRIMARY KEY (`id_keahlian`);

--
-- Indeks untuk tabel `lokasi_kecamatan`
--
ALTER TABLE `lokasi_kecamatan`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `lokasi_kelurahan`
--
ALTER TABLE `lokasi_kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indeks untuk tabel `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id_material`),
  ADD KEY `id_vendor` (`id_vendor`);

--
-- Indeks untuk tabel `material_gambar`
--
ALTER TABLE `material_gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `material_kategori`
--
ALTER TABLE `material_kategori`
  ADD PRIMARY KEY (`id_kategori_material`);

--
-- Indeks untuk tabel `material_transaksi_detail`
--
ALTER TABLE `material_transaksi_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `material_ulasan`
--
ALTER TABLE `material_ulasan`
  ADD PRIMARY KEY (`id_ulasan`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_tansaksi`);

--
-- Indeks untuk tabel `transaksi_bukti`
--
ALTER TABLE `transaksi_bukti`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `transaksi_detail_ibfk_1` (`id_lokasi_kecamatan`);

--
-- Indeks untuk tabel `transaksi_done`
--
ALTER TABLE `transaksi_done`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `transaksi_gambar`
--
ALTER TABLE `transaksi_gambar`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `transaksi_invalid`
--
ALTER TABLE `transaksi_invalid`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `transaksi_material`
--
ALTER TABLE `transaksi_material`
  ADD PRIMARY KEY (`id_tr_material`);

--
-- Indeks untuk tabel `transaksi_ongoing`
--
ALTER TABLE `transaksi_ongoing`
  ADD PRIMARY KEY (`id_tranaksi`) USING BTREE;

--
-- Indeks untuk tabel `transaksi_pending`
--
ALTER TABLE `transaksi_pending`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `tukang_account`
--
ALTER TABLE `tukang_account`
  ADD PRIMARY KEY (`id_tukang`),
  ADD UNIQUE KEY `no_tlp` (`no_tlp`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `tukang_detail`
--
ALTER TABLE `tukang_detail`
  ADD PRIMARY KEY (`id_tukang`),
  ADD KEY `id_lokasi` (`id_lokasi_kecamatan`);

--
-- Indeks untuk tabel `tukang_keahlian`
--
ALTER TABLE `tukang_keahlian`
  ADD PRIMARY KEY (`id_tukang`);

--
-- Indeks untuk tabel `tukang_log`
--
ALTER TABLE `tukang_log`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_tukang` (`id_tukang`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indeks untuk tabel `tukang_riwayat`
--
ALTER TABLE `tukang_riwayat`
  ADD PRIMARY KEY (`id_tukang`);

--
-- Indeks untuk tabel `tukang_saldo`
--
ALTER TABLE `tukang_saldo`
  ADD PRIMARY KEY (`id_tukang`);

--
-- Indeks untuk tabel `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id_vendor`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jasa_ulasan`
--
ALTER TABLE `jasa_ulasan`
  MODIFY `id_ulasan` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `material`
--
ALTER TABLE `material`
  MODIFY `id_material` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `material_gambar`
--
ALTER TABLE `material_gambar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `material_kategori`
--
ALTER TABLE `material_kategori`
  MODIFY `id_kategori_material` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `material_transaksi_detail`
--
ALTER TABLE `material_transaksi_detail`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `material_ulasan`
--
ALTER TABLE `material_ulasan`
  MODIFY `id_ulasan` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi_bukti`
--
ALTER TABLE `transaksi_bukti`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi_gambar`
--
ALTER TABLE `transaksi_gambar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi_material`
--
ALTER TABLE `transaksi_material`
  MODIFY `id_tr_material` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tukang_log`
--
ALTER TABLE `tukang_log`
  MODIFY `id_log` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id_vendor` int NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `vendor`
--
ALTER TABLE `vendor`
  ADD CONSTRAINT `vendor_ibfk_1` FOREIGN KEY (`id_vendor`) REFERENCES `material` (`id_vendor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
