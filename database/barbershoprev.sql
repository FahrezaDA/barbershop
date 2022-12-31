-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 30 Des 2022 pada 13.58
-- Versi server: 5.7.36
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barbershop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id_booking` int(15) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `jenis_pelayanan` varchar(20) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `tanggal_booking` varchar(25) NOT NULL,
  `jam_booking` varchar(20) NOT NULL,
  `bukti_transfer` varchar(100) NOT NULL,
  PRIMARY KEY (`id_booking`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf16;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id_booking`, `nama`, `jenis_pelayanan`, `harga`, `tanggal_booking`, `jam_booking`, `bukti_transfer`) VALUES
(20, 'reza', 'Basic_Hair_COloring', '15000', '2022-12-30', '08:00', 'hd 1.jpg'),
(23, 'Zidan ', 'Black_Hair_Coloring', '25000', '2023-01-07', '08:00', 'wallpaperflare.com_wallpaper (1).jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `nama_customer` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telpon` int(11) NOT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `alamat`, `email`, `no_telpon`) VALUES
(1, 'Ahmad Zakky', 'Jl. Gajah Mada, Jember', 'zakky@gmail.com', 876974642),
(2, 'Naufal', 'Mangli', 'noufal21@gmail.com', 854328675);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_booking`
--

DROP TABLE IF EXISTS `data_booking`;
CREATE TABLE IF NOT EXISTS `data_booking` (
  `id_data_booking` int(15) NOT NULL AUTO_INCREMENT,
  `jam` varchar(15) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_data_booking`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf16;

--
-- Dumping data untuk tabel `data_booking`
--

INSERT INTO `data_booking` (`id_data_booking`, `jam`) VALUES
(1, '08:00'),
(2, '09:00'),
(3, '10:00'),
(4, '11:00 '),
(5, '13:00'),
(6, '14:00'),
(7, '15:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

DROP TABLE IF EXISTS `fasilitas`;
CREATE TABLE IF NOT EXISTS `fasilitas` (
  `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_fasilitas` varchar(50) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `tanggal_perbaikan` date NOT NULL,
  PRIMARY KEY (`id_fasilitas`)
) ENGINE=InnoDB AUTO_INCREMENT=22169 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `harga_beli`, `quantity`, `tanggal_pembelian`, `tanggal_perbaikan`) VALUES
(22121, 'AC', 3299000, 3, '2022-12-01', '2023-03-01'),
(22122, 'Kursi Barbershop', 2899000, 6, '2022-12-01', '2023-03-01'),
(22123, 'Meja & Kaca Barber', 1500000, 6, '2022-12-01', '2023-03-01'),
(22124, 'Clipper', 51000, 7, '2022-12-01', '2023-03-01'),
(22125, 'Gunting Potong', 58000, 8, '2022-12-01', '2023-03-01'),
(22126, 'Pisau Cukur', 34989, 8, '2022-12-01', '2023-03-01'),
(22127, 'Sisir Barber', 17000, 7, '2022-12-01', '2023-01-01'),
(22128, 'Handuk Leher', 15000, 8, '2022-12-01', '2023-01-01'),
(22129, 'Kain Penutup Badan', 35000, 7, '2022-12-01', '2023-01-01'),
(22130, 'Kuas Janggut', 29500, 6, '2022-12-01', '2023-01-01'),
(22131, 'Botol Semprotan', 23500, 8, '2022-12-01', '2023-03-01'),
(22132, 'Sikat Rambut', 32000, 7, '2022-12-01', '2023-03-01'),
(22133, 'Mangkok Kuas Janggut', 16000, 6, '2022-12-01', '2023-03-01'),
(22134, 'Kaca Belakang', 2899000, 6, '2022-12-01', '2023-03-01'),
(22135, 'Tempat Bedak Barber', 20000, 6, '2022-12-01', '2023-03-01'),
(22136, 'Tempat Sisir & Gunting', 28000, 6, '2022-12-01', '2023-03-01'),
(22137, 'Silet Cukur', 81900, 6, '2022-12-01', '2023-03-01'),
(22138, 'Minyak Clipper', 34999, 3, '2022-12-01', '2023-02-01'),
(22139, 'Bedak Barber', 39900, 5, '2022-12-01', '2023-01-01'),
(22140, 'Clipper Ukir', 56500, 6, '2022-12-01', '2023-03-01'),
(22141, 'Trimmer', 60000, 6, '2022-12-01', '2023-03-01'),
(22142, 'Clipper Anak', 179000, 2, '2022-12-01', '2023-03-01'),
(22143, 'Single Clipper', 56500, 2, '2022-12-01', '2023-03-01'),
(22144, 'Double Clipper', 61000, 2, '2022-12-01', '2023-03-01'),
(22145, 'Poster Barber', 28000, 1, '2022-12-01', '2023-03-01'),
(22146, 'Handuk Wajah', 15000, 8, '2022-12-01', '2023-01-01'),
(22147, 'Buku Model Rambut', 50000, 3, '2022-12-01', '2023-03-01'),
(22148, 'Sisir Plastik Bulat', 2999, 7, '2022-12-01', '2023-03-01'),
(22149, 'Kuas Isi Bedak', 45000, 5, '2022-12-01', '2023-03-01'),
(22150, 'Tas Gunting', 28000, 2, '2022-12-01', '2023-03-01'),
(22151, 'Apron Stylist', 399000, 3, '2022-12-01', '2023-03-01'),
(22152, 'Peralatan Cat Rambut', 315000, 1, '2022-12-01', '2023-02-01'),
(22153, 'Anti Slip Mat', 14000, 5, '2022-12-01', '2023-03-01'),
(22154, 'Clipper Manual', 97500, 4, '2022-12-01', '2023-03-01'),
(22155, 'Kursi Keramas', 1200000, 2, '2022-12-01', '2023-03-01'),
(22156, 'Mesin Penghangat Handuk', 2072000, 1, '2022-12-01', '2023-05-01'),
(22157, 'Hair Dryer', 375000, 3, '2022-12-01', '2023-03-01'),
(22158, 'Shaver', 99000, 3, '2022-12-01', '2023-03-01'),
(22159, 'Kap Lampu Gantung', 1349000, 2, '2022-12-01', '2023-06-01'),
(22160, 'Pisau Cukur Lipat', 20000, 5, '2022-12-01', '2023-03-01'),
(22161, 'Hair Tonic', 188000, 5, '2022-12-01', '2023-01-01'),
(22162, 'Pomade', 70000, 5, '2022-12-01', '2023-01-01'),
(22163, 'Set Cat Rambut', 1350000, 1, '2022-12-01', '2023-02-01'),
(22164, 'Shampoo', 35000, 5, '2022-12-01', '2023-01-01'),
(22165, 'Conditioner', 52700, 6, '2022-12-01', '2023-02-01'),
(22166, 'Hair Vacum', 35000, 6, '2022-12-01', '2023-01-01'),
(22167, 'Wifi', 345000, 1, '2022-12-01', '2023-06-01'),
(22168, 'Set Kursi Tunggu', 345000, 1, '2022-12-01', '2023-06-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE IF NOT EXISTS `karyawan` (
  `karyawanID` int(11) NOT NULL AUTO_INCREMENT,
  `nama_karyawan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `posisi` varchar(12) NOT NULL,
  `gaji` decimal(15,0) NOT NULL,
  PRIMARY KEY (`karyawanID`)
) ENGINE=InnoDB AUTO_INCREMENT=202216 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`karyawanID`, `nama_karyawan`, `alamat`, `no_telpon`, `email`, `posisi`, `gaji`) VALUES
(202207, 'Thoriq', 'Banyuwangi', 91111, 'thoriq@gmail.com', 'admin', '5000000'),
(202208, 'budi ', 'Jemberr', 811667788, 'budi@gmail.com', 'admin', '3000000'),
(202209, 'tarno ', 'Jember', 853432211, 'tarno@gmail.com', 'admin', '1500000'),
(202210, 'Fais', 'Ajung', 2147483647, 'fais@gmail.com', 'admin', '2000000'),
(202211, 'fahreza', 'etan', 8888, 'etan@gmail.com', 'owner', '7000000'),
(202213, 'Alif Cepmek ', 'Jakarta ', 878109, 'cepmek@gmail.com', 'admin ', '3000000'),
(202215, 'thoriqq', 'Jakarta ', 8888, 'admin@gmail.com', 'admin ', '3000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasir`
--

DROP TABLE IF EXISTS `kasir`;
CREATE TABLE IF NOT EXISTS `kasir` (
  `kasirID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `karyawanID` int(11) NOT NULL,
  PRIMARY KEY (`kasirID`),
  KEY `karyawanID` (`karyawanID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kasir`
--

INSERT INTO `kasir` (`kasirID`, `username`, `password`, `email`, `karyawanID`) VALUES
(221, 'thoriq', '1234', 'admin@gmail.com', 202207),
(222, 'Fais', '1234', 'admin2@gmail.com', 202210);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan`
--

DROP TABLE IF EXISTS `pelayanan`;
CREATE TABLE IF NOT EXISTS `pelayanan` (
  `jenis_pelayanan` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  PRIMARY KEY (`jenis_pelayanan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data untuk tabel `pelayanan`
--

INSERT INTO `pelayanan` (`jenis_pelayanan`, `harga`) VALUES
('Basic_Hair_COloring', '25000'),
('Black_Hair_Coloring', '25000'),
('Fashion_Hair_Coloring', '25000'),
('Gentlement_Cut', '25000'),
('Gentlement_Grooming', '20000'),
('Grooming_and_Hair_Tatoo', '20000'),
('Hair_Repair_Treatment', '35000'),
('Kids_Haircut', '25000'),
('Perm_Hair_Threatment', '35000'),
('smoothing', '30000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan_drop`
--

DROP TABLE IF EXISTS `pelayanan_drop`;
CREATE TABLE IF NOT EXISTS `pelayanan_drop` (
  `id_pelayanan` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_pelayanan` varchar(55) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id_pelayanan`)
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelayanan_drop`
--

INSERT INTO `pelayanan_drop` (`id_pelayanan`, `jenis_pelayanan`, `harga`) VALUES
(131, 'gentlement_cut ', 25000),
(132, 'gentlement_grooming', 20000),
(133, 'kids_haircut', 25000),
(134, 'grooming_and_hair_tato', 20000),
(135, 'black_hair_coloring', 25000),
(136, 'basic hair color', 25000),
(137, 'fashion_hair_color', 25000),
(138, 'smoothing', 30000),
(139, 'perm_hair_treatment', 35000),
(140, 'hair_repair_treatment', 35000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukan`
--

DROP TABLE IF EXISTS `pemasukan`;
CREATE TABLE IF NOT EXISTS `pemasukan` (
  `id_pemasukan` int(11) NOT NULL AUTO_INCREMENT,
  `id_pemesanan` int(11) NOT NULL,
  `jenis_pelayanan` varchar(25) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `total_pemasukan` int(55) NOT NULL,
  PRIMARY KEY (`id_pemasukan`),
  KEY `pemesananID` (`id_pemesanan`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

DROP TABLE IF EXISTS `pemesanan`;
CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_customer` varchar(55) NOT NULL,
  `jenis_pelayanan` varchar(100) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `no_antrian` int(11) NOT NULL,
  `tanggal_pemesanan` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pelayanan` int(11) NOT NULL,
  PRIMARY KEY (`id_pemesanan`),
  KEY `kasirID` (`id_user`),
  KEY `pelayananID` (`id_pelayanan`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `nama_customer`, `jenis_pelayanan`, `harga`, `no_antrian`, `tanggal_pemesanan`, `id_user`, `id_pelayanan`) VALUES
(1, 'Remi', 'Potong', '10000', 1, '2022-12-29', 124, 131),
(10, 'Supardi ', 'Potong Rambut', '10000', 2, '2022-12-24', 124, 131),
(14, 'luki', 'gentlement', '100000', 3, '', 124, 131),
(15, 'Supardi Jem', 'gentlement', '10000', 4, '10-12-2022', 124, 131),
(16, 'Jamal', 'kids', '10000', 5, '', 124, 131),
(17, 'mamat', 'gentlement_cut', '10000', 6, '', 124, 131);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

DROP TABLE IF EXISTS `pengeluaran`;
CREATE TABLE IF NOT EXISTS `pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_pengeluaran` varchar(20) NOT NULL,
  `id_fasilitas` int(11) DEFAULT NULL,
  `jumlah` int(11) NOT NULL,
  `biaya` int(11) NOT NULL,
  `tanggal_pengeluaran` date NOT NULL,
  `id_kasir` int(11) NOT NULL,
  PRIMARY KEY (`id_pengeluaran`),
  KEY `fasilitasID` (`id_fasilitas`),
  KEY `userID` (`id_kasir`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `jenis_pengeluaran`, `id_fasilitas`, `jumlah`, `biaya`, `tanggal_pengeluaran`, `id_kasir`) VALUES
(4, 'Bayar Wifi', 22167, 1, 300000, '2022-12-28', 221);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` int(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jabatan` varchar(12) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_level` (`level`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat`, `no_telpon`, `email`, `password`, `jabatan`, `level`) VALUES
(121, 'owner', 'politeknik negeri jember', 81255586, 'owner@gmail.com', '12345', 'owner', 1),
(122, 'kasir', 'jl.mastrip IV', 62314627, 'kasir@gmail.com', 'kasir123', 'kasir', 2),
(123, 'keynan', 'jl.karimata IV', 62315681, 'keynan@gmail.com', 'key111', 'karyawan', 3),
(124, 'novanda', 'jl.kenangan', 62682805, 'nova@gmail.com', 'nova15', 'karyawan', 3),
(125, 'angel', 'jl.satru', 6231516, 'angel1@gmail.com', 'angelaaa', 'karyawan', 3),
(126, 'Salman', 'Jember', 6234222, 'salman@gmail.com', '1234', 'admin', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_detail`
--

DROP TABLE IF EXISTS `user_detail`;
CREATE TABLE IF NOT EXISTS `user_detail` (
  `level` int(11) NOT NULL AUTO_INCREMENT,
  `level_detail` varchar(11) NOT NULL,
  PRIMARY KEY (`level`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_detail`
--

INSERT INTO `user_detail` (`level`, `level_detail`) VALUES
(1, 'owner'),
(2, 'karyawan'),
(3, 'customer');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kasir`
--
ALTER TABLE `kasir`
  ADD CONSTRAINT `kasir_ibfk_1` FOREIGN KEY (`karyawanID`) REFERENCES `karyawan` (`karyawanID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_pelayanan`) REFERENCES `pelayanan_drop` (`id_pelayanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`level`) REFERENCES `user_detail` (`level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
