-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2024 at 12:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bantuan_pkh`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_masyarakat`
--

CREATE TABLE `tbl_masyarakat` (
  `id_masyarakat` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `atap` varchar(255) NOT NULL,
  `dinding` varchar(255) NOT NULL,
  `lantai` varchar(255) NOT NULL,
  `listrik` varchar(255) NOT NULL,
  `kwh` int(11) NOT NULL,
  `kwh_kecil` decimal(5,2) NOT NULL,
  `kwh_besar` decimal(5,2) NOT NULL,
  `pekerjaan_suami` varchar(255) NOT NULL,
  `pekerjaan_istri` varchar(255) NOT NULL,
  `gaji_suami` int(255) NOT NULL,
  `gaji_istri` int(255) NOT NULL,
  `total_pendapatan` int(255) NOT NULL,
  `total_pendapatan_rendah` decimal(5,2) NOT NULL,
  `total_pendapatan_sedang` decimal(5,2) NOT NULL,
  `total_pendapatan_tinggi` decimal(5,2) NOT NULL,
  `jumlah_tanggungan` int(11) NOT NULL,
  `jumlah_tanggungan_sedikit` decimal(5,2) NOT NULL,
  `jumlah_tanggungan_banyak` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_masyarakat`
--

INSERT INTO `tbl_masyarakat` (`id_masyarakat`, `nama`, `status`, `atap`, `dinding`, `lantai`, `listrik`, `kwh`, `kwh_kecil`, `kwh_besar`, `pekerjaan_suami`, `pekerjaan_istri`, `gaji_suami`, `gaji_istri`, `total_pendapatan`, `total_pendapatan_rendah`, `total_pendapatan_sedang`, `total_pendapatan_tinggi`, `jumlah_tanggungan`, `jumlah_tanggungan_sedikit`, `jumlah_tanggungan_banyak`) VALUES
(1, 'Cadya', 'Lansia', 'Seng Bagus', 'Tembok Kualitas Rendah', 'Semen', 'PLN', 900, '0.47', '0.00', 'Tidak Bekerja', 'Tidak Bekerja', 0, 0, 0, '1.00', '0.00', '0.00', 1, '1.00', '0.00'),
(2, 'Martina', 'Parobaya', 'Seng Bagus', 'Kalsiboard', 'Semen', 'Pulsa', 900, '0.47', '0.00', 'Nelayan', 'Tidak Bekerja', 1000000, 0, 1000000, '1.00', '0.00', '0.00', 1, '1.00', '0.00'),
(3, 'Marni Maun', 'Parobaya', 'Seng Bagus', 'Tembok Kualitas Rendah', 'Tanah', 'Pulsa', 1200, '0.12', '0.23', 'Pekerja Lepas', 'Tidak Bekerja', 1500000, 0, 1500000, '1.00', '0.00', '0.00', 1, '1.00', '0.00'),
(4, 'Nurdin', 'Lansia', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Tidak Bekerja', 'Tidak Bekerja', 0, 0, 0, '1.00', '0.00', '0.00', 1, '1.00', '0.00'),
(5, 'Indra Kasih', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Semen', 'Pulsa', 900, '0.47', '0.00', 'Pekerja Lepas', 'Tidak Bekerja', 1500000, 0, 1500000, '1.00', '0.00', '0.00', 3, '0.50', '0.00'),
(6, 'Rosmini', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 900, '0.47', '0.00', 'Nelayan', 'Tidak Bekerja', 1000000, 0, 1000000, '1.00', '0.00', '0.00', 2, '1.00', '0.00'),
(7, 'Kamria', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 900, '0.47', '0.00', 'Tidak Bekerja', 'Tidak Bekerja', 0, 0, 0, '1.00', '0.00', '0.00', 0, '1.00', '0.00'),
(8, 'Sennang', 'Duda/Janda', 'Seng Karatan', 'Tembok Kualitas Rendah', 'Semen', 'PLN (Subsidi)', 450, '1.00', '0.00', 'Tidak Bekerja', 'Tidak Bekerja', 0, 0, 0, '1.00', '0.00', '0.00', 0, '1.00', '0.00'),
(9, 'Hikma Wati', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN (Subsidi)', 450, '1.00', '0.00', 'Pekerja Lepas', 'Tidak Bekerja', 900000, 0, 900000, '1.00', '0.00', '0.00', 7, '0.00', '1.00'),
(10, 'Mardiana', 'Parobaya', 'Seng Karatan', 'Papan', 'Semen', 'PLN', 900, '0.47', '0.00', 'Nelayan', 'Tidak Bekerja', 1000000, 0, 1000000, '1.00', '0.00', '0.00', 0, '1.00', '0.00'),
(11, 'Andi Sahlina', 'Parobaya', 'Seng Karatan', 'Papan', 'Semen', 'Pulsa', 450, '1.00', '0.00', 'Pekerja Lepas', 'Tidak Bekerja', 900000, 0, 900000, '1.00', '0.00', '0.00', 3, '0.50', '0.00'),
(12, 'Asniati', 'Parobaya', 'Seng Karatan', 'Tembok Berlumut', 'Semen', 'PLN (Subsidi)', 450, '1.00', '0.00', 'Nelayan', 'Tidak Bekerja', 1000000, 0, 1000000, '1.00', '0.00', '0.00', 2, '1.00', '0.00'),
(13, 'Jenaria', 'Duda/Janda', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN (Subsidi)', 450, '1.00', '0.00', 'Tidak Bekerja', 'Tidak Bekerja', 0, 0, 0, '1.00', '0.00', '0.00', 0, '1.00', '0.00'),
(14, 'Muhlis', 'Parobaya', 'Seng Bagus', 'Tembok Belum Diplester', 'Semen', 'Pulsa', 900, '0.47', '0.00', 'Pekerja Lepas', 'Tidak Bekerja', 900000, 0, 900000, '1.00', '0.00', '0.00', 2, '1.00', '0.00'),
(15, 'Haslina', 'Parobaya', 'Seng Bagus', 'Papan', 'Papan', 'Pulsa', 1300, '0.00', '0.31', 'Pekerja Lepas', 'Tidak Bekerja', 1500000, 0, 1500000, '1.00', '0.00', '0.00', 2, '1.00', '0.00'),
(16, 'Multi Saing', 'Parobaya', 'Seng Bagus', 'Papan', 'Semen', 'PLN (Subsidi)', 450, '1.00', '0.00', 'Tukang Ojek', 'Tidak Bekerja', 600000, 0, 600000, '1.00', '0.00', '0.00', 0, '1.00', '0.00'),
(17, 'Becce L', 'Duda/Janda', 'Seng Bagus', 'Tembok Berlumut', 'Tehel', 'PLN (Subsidi)', 450, '1.00', '0.00', 'Tidak Bekerja', 'Tidak Bekerja', 0, 0, 0, '1.00', '0.00', '0.00', 1, '1.00', '0.00'),
(18, 'Arwan Sulaiman', 'Duda/Janda', 'Seng Bagus', 'Tembok Berlumut', 'Semen', 'Pulsa', 450, '1.00', '0.00', 'Tidak Bekerja', 'Tidak Bekerja', 0, 0, 0, '1.00', '0.00', '0.00', 1, '1.00', '0.00'),
(19, 'Yanna', 'Parobaya', 'Seng Bagus', 'Papan', 'Semen', 'Pulsa', 450, '1.00', '0.00', 'Nelayan', 'Tidak Bekerja', 1000000, 0, 1000000, '1.00', '0.00', '0.00', 1, '1.00', '0.00'),
(20, 'Hasna Irwan', 'Duda/Janda', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 900, '0.47', '0.00', 'Tidak Bekerja', 'Tidak Bekerja', 0, 0, 0, '1.00', '0.00', '0.00', 2, '1.00', '0.00'),
(21, 'Bungasia', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 900, '0.47', '0.00', 'Pekerja Swasta', 'Tidak Bekerja', 2000000, 0, 2000000, '1.00', '0.00', '0.00', 1, '1.00', '0.00'),
(22, 'Mira', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 900, '0.47', '0.00', 'Nahkoda Kapal', 'Tidak Bekerja', 15000000, 0, 15000000, '0.00', '0.00', '1.00', 2, '1.00', '0.00'),
(23, 'Sarlia Abdullah', 'Lansia', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Tidak Bekerja', 'Pensiunan Guru', 0, 5000000, 5000000, '0.00', '0.85', '0.35', 0, '1.00', '0.00'),
(24, 'Selly Resa', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 900, '0.47', '0.00', 'Wiraswasta', 'Tidak Bekerja', 3000000, 0, 3000000, '0.94', '0.00', '0.00', 2, '1.00', '0.00'),
(25, 'Sitti Kusmira', 'Duda/Janda', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 900, '0.47', '0.00', 'Tidak Bekerja', 'PNS', 0, 4000000, 4000000, '0.29', '0.21', '0.00', 2, '1.00', '0.00'),
(26, 'Siti Arpa', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN (Subsidi)', 450, '1.00', '0.00', 'Nelayan', 'Tidak Bekerja', 1000000, 0, 1000000, '1.00', '0.00', '0.00', 2, '1.00', '0.00'),
(27, 'Yusnia Amir', 'Parobaya', 'Seng Bagus', 'Papan', 'Semen', 'PLN (Subsidi)', 450, '1.00', '0.00', 'Pekerja Lepas', 'Tidak Bekerja', 1500000, 0, 1500000, '1.00', '0.00', '0.00', 2, '1.00', '0.00'),
(28, 'Ratnadi', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN (Subsidi)', 450, '1.00', '0.00', 'Pekerja Lepas', 'Tidak Bekerja', 1500000, 0, 1500000, '1.00', '0.00', '0.00', 1, '1.00', '0.00'),
(29, 'Masnia', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Wirausaha', 'Wirausaha', 5000000, 5000000, 10000000, '0.00', '0.00', '1.00', 0, '1.00', '0.00'),
(30, 'Hartia', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Semen', 'PLN (Subsidi)', 450, '1.00', '0.00', 'Pekerja Lepas', 'Tidak Bekerja', 1500000, 0, 1500000, '1.00', '0.00', '0.00', 1, '1.00', '0.00'),
(31, 'Suriani', 'Parobaya', 'Seng Bagus', 'Kalsiboard', 'Semen', 'Pulsa', 450, '1.00', '0.00', 'Pekerja Lepas', 'Tidak Bekerja', 1500000, 0, 1500000, '1.00', '0.00', '0.00', 1, '1.00', '0.00'),
(32, 'Sri Nurleni', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Wiraswasta', 'Tidak Bekerja', 3000000, 0, 3000000, '0.94', '0.00', '0.00', 2, '1.00', '0.00'),
(33, 'Rostini', 'Parobaya', 'Seng Karatan', 'Papan', 'Semen', 'PLN', 450, '1.00', '0.00', 'Pekerja Lepas', 'Guru Honorer', 1500000, 300000, 1800000, '1.00', '0.00', '0.00', 2, '1.00', '0.00'),
(34, 'Hana Wati', 'Lansia', 'Seng Karatan', 'Tembok Berlumut', 'Semen', 'PLN', 450, '1.00', '0.00', 'Wiraswasta', 'Wirausaha', 2000000, 500000, 2500000, '1.00', '0.00', '0.00', 2, '1.00', '0.00'),
(35, 'Erni', 'Parobaya', 'Seng Karatan', 'Papan', 'Semen', 'Pulsa', 900, '0.47', '0.00', 'Pekerja Lepas', 'Wirausaha', 2000000, 500000, 2500000, '1.00', '0.00', '0.00', 0, '1.00', '0.00'),
(36, 'Lisda Wati', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Pekerja Lepas', 'Wiraswasta', 2000000, 3000000, 5000000, '0.00', '0.85', '0.35', 2, '1.00', '0.00'),
(37, 'Yun Darmayanti', 'Muda', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'Pulsa', 450, '1.00', '0.00', 'Tukang Ojek', 'Tidak Bekerja', 6000000, 0, 6000000, '0.00', '0.00', '1.00', 0, '1.00', '0.00'),
(38, 'Nurdialang', 'Lansia', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Wiraswasta', 'Wiraswasta', 3000000, 3000000, 6000000, '0.00', '0.00', '1.00', 2, '1.00', '0.00'),
(39, 'Ima Yanti', 'Muda', 'Seng Bagus', 'Papan', 'Semen', 'Pulsa', 450, '1.00', '0.00', 'Pekerja Lepas', 'Wirausaha', 2000000, 500000, 2500000, '1.00', '0.00', '0.00', 1, '1.00', '0.00'),
(40, 'Nurhan', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'ABK Kapal', 'Tidak Bekerja', 5000000, 0, 5000000, '0.00', '0.85', '0.35', 4, '0.00', '0.50'),
(41, 'Netty', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'ABK Kapal', 'Tidak Bekerja', 5000000, 0, 5000000, '0.00', '0.85', '0.35', 2, '1.00', '0.00'),
(42, 'Andi Sahlina', 'Parobaya', 'Seng Karatan', 'Papan', 'Semen', 'PLN', 450, '1.00', '0.00', 'Nelayan', 'Tidak Bekerja', 1000000, 0, 1000000, '1.00', '0.00', '0.00', 2, '1.00', '0.00'),
(43, 'Rachmaniar', 'Muda', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Wirausaha', 'Tidak Bekerja', 7000000, 0, 7000000, '0.00', '0.00', '1.00', 1, '1.00', '0.00'),
(44, 'Lili', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Wiraswasta', 'Tidak Bekerja', 5000000, 0, 5000000, '0.00', '0.85', '0.35', 2, '1.00', '0.00'),
(45, 'Ervina', 'Muda', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Pekerja Lepas', 'Tidak Bekerja', 2000000, 0, 2000000, '1.00', '0.00', '0.00', 2, '1.00', '0.00'),
(46, 'Harmina', 'Parobaya', 'Seng Bagus', 'Papan', 'Semen', 'Pulsa', 450, '1.00', '0.00', 'Pekerja Lepas', 'Wiraswasta', 2000000, 1500000, 3500000, '0.61', '0.00', '0.00', 1, '1.00', '0.00'),
(47, 'Idawati', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Pekerja Lepas', 'Tidak Bekerja', 2000000, 0, 2000000, '1.00', '0.00', '0.00', 2, '1.00', '0.00'),
(48, 'Jinaria', 'Duda/Janda', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Tidak Bekerja', 'Tidak Bekerja', 0, 0, 0, '1.00', '0.00', '0.00', 0, '1.00', '0.00'),
(49, 'Hartina', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Pekerja Lepas', 'Wirausaha', 2000000, 1500000, 3500000, '0.61', '0.00', '0.00', 3, '0.50', '0.00'),
(50, 'Sitti Arfah', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Nelayan', 'Wirausaha', 1000000, 500000, 1500000, '1.00', '0.00', '0.00', 2, '1.00', '0.00'),
(51, 'Isna Idayanti', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Wirausaha', 'Wirausaha', 3000000, 3000000, 6000000, '0.00', '0.00', '1.00', 1, '1.00', '0.00'),
(52, 'Rita Sakti', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Pensiun', 'Honorer', 4000000, 3000000, 7000000, '0.00', '0.00', '1.00', 1, '1.00', '0.00'),
(53, 'Indar Daya', 'Lansia', 'Seng Karatan', 'Papan', 'Semen', 'PLN', 900, '0.47', '0.00', 'Nelayan', 'Tidak Bekerja', 1000000, 0, 1000000, '1.00', '0.00', '0.00', 0, '1.00', '0.00'),
(54, 'Salwia', 'Parobaya', 'Seng Karatan', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Wiraswasta', 'Wiraswasta', 1500000, 1500000, 3000000, '0.94', '0.00', '0.00', 0, '1.00', '0.00'),
(55, 'Dahlia', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'Pulsa', 450, '1.00', '0.00', 'Nelayan', 'Tidak Bekerja', 1000000, 0, 1000000, '1.00', '0.00', '0.00', 2, '1.00', '0.00'),
(56, 'Hasira', 'Duda/Janda', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Pensiunan Guru (Wafat)', 'Tidak Bekerja', 3000000, 0, 3000000, '0.94', '0.00', '0.00', 0, '1.00', '0.00'),
(57, 'Safrina', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Wirausaha', 'Tidak Bekerja', 5000000, 0, 5000000, '0.00', '0.85', '0.35', 1, '1.00', '0.00'),
(58, 'Haspita', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Wiraswasta', 'Wirausaha', 3000000, 3000000, 6000000, '0.00', '0.00', '1.00', 0, '1.00', '0.00'),
(59, 'Wa Ode Arli', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'PNS', 'PNS', 5000000, 3000000, 8000000, '0.00', '0.00', '1.00', 2, '1.00', '0.00'),
(60, 'Tuti', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Pekerja Lepas', 'Wirausaha', 2000000, 500000, 2500000, '1.00', '0.00', '0.00', 3, '0.50', '0.00'),
(61, 'Suniati', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'PNS', 'Tidak Bekerja', 5000000, 0, 5000000, '0.00', '0.85', '0.35', 1, '1.00', '0.00'),
(62, 'Arma Yanti', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Semen', 'Pulsa', 450, '1.00', '0.00', 'Wirausaha', 'Tidak Bekerja', 2000000, 0, 2000000, '1.00', '0.00', '0.00', 0, '1.00', '0.00'),
(63, 'Fitriani Nasir', 'Lansia', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Pensiunan ABRI', 'Pensiunan RS', 3000000, 3000000, 6000000, '0.00', '0.00', '1.00', 0, '1.00', '0.00'),
(64, 'Musdalifa', 'Muda', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Wirausaha', 'Wirausaha', 5000000, 5000000, 10000000, '0.00', '0.00', '1.00', 3, '0.50', '0.00'),
(65, 'Asrianti', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Pekerja Lepas', 'Tidak Bekerja', 2000000, 0, 2000000, '1.00', '0.00', '0.00', 0, '1.00', '0.00'),
(66, 'Sadia Mustaria', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Pekerja Swasta', 'Tidak Bekerja', 5000000, 0, 5000000, '0.00', '0.85', '0.35', 1, '1.00', '0.00'),
(67, 'Rosna Wati', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Semen', 'Pulsa', 450, '1.00', '0.00', 'Pekerja Lepas', 'Tidak Bekerja', 1500000, 0, 1500000, '1.00', '0.00', '0.00', 0, '1.00', '0.00'),
(68, 'Hikma Wati', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'Pulsa', 900, '0.47', '0.00', 'Pekerja Swasta', 'Wirausaha', 5000000, 3000000, 8000000, '0.00', '0.00', '1.00', 0, '1.00', '0.00'),
(69, 'Kasma Wati', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Pekerja Lepas', 'Tidak Bekerja', 2000000, 0, 2000000, '1.00', '0.00', '0.00', 3, '0.50', '0.00'),
(70, 'Bahria', 'Duda/Janda', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Tidak Bekerja', 'Wirausaha', 0, 500000, 500000, '1.00', '0.00', '0.00', 0, '1.00', '0.00'),
(71, 'Sa-Adillah', 'Lansia', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Guru PNS', 'Tidak Bekerja', 4000000, 0, 4000000, '0.29', '0.21', '0.00', 1, '1.00', '0.00'),
(72, 'Sunarni', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Semen', 'Pulsa', 450, '1.00', '0.00', 'Tukang Ojek', 'Tukang Ojek', 600000, 600000, 1200000, '1.00', '0.00', '0.00', 1, '1.00', '0.00'),
(73, 'Ruswanti', 'Parobaya', 'Seng Karatan', 'Tembok Kualitas Rendah', 'Semen', 'PLN', 450, '1.00', '0.00', 'Pekerja Lepas', 'Wirausaha', 2000000, 1500000, 3500000, '0.61', '0.00', '0.00', 0, '1.00', '0.00'),
(74, 'Irlian', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 900, '0.47', '0.00', 'Wirausaha', 'Tidak Bekerja', 5000000, 0, 5000000, '0.00', '0.85', '0.35', 2, '1.00', '0.00'),
(75, 'Sadaria', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Tukang Ojek', 'Tidak Bekerja', 600000, 0, 600000, '1.00', '0.00', '0.00', 2, '1.00', '0.00'),
(76, 'Intan Wulandari', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Sopir Mobil Tangki', 'Tidak Bekerja', 4000000, 0, 4000000, '0.29', '0.21', '0.00', 1, '1.00', '0.00'),
(77, 'Surianti', 'Duda/Janda', 'Seng Bagus', 'Tembok Bagus', 'Semen', 'PLN', 450, '1.00', '0.00', 'Pensiun TNI (Wafat)', 'Tidak Bekerja', 3000000, 0, 3000000, '0.94', '0.00', '0.00', 0, '1.00', '0.00'),
(78, 'Roslina', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Sopir Taxi', 'Tidak Bekerja', 1000000, 0, 1000000, '1.00', '0.00', '0.00', 0, '1.00', '0.00'),
(79, 'Lisma Wati', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'Pulsa', 450, '1.00', '0.00', 'Pekerja Tambang', 'Wirausaha', 4000000, 2000000, 6000000, '0.00', '0.00', '1.00', 2, '1.00', '0.00'),
(80, 'Mira Wati', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Wirausaha', 'Wirausaha', 3000000, 3000000, 6000000, '0.00', '0.00', '1.00', 1, '1.00', '0.00'),
(81, 'Suhartati', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Wirausaha', 'Wirausaha', 3000000, 3000000, 6000000, '0.00', '0.00', '1.00', 0, '1.00', '0.00'),
(82, 'Hasna Hamade', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 900, '0.47', '0.00', 'Wirausaha', 'Wirausaha', 5000000, 5000000, 10000000, '0.00', '0.00', '1.00', 3, '0.50', '0.00'),
(83, 'Mariam', 'Duda/Janda', 'Seng Karatan', 'Papan', 'Semen', 'Pulsa', 450, '1.00', '0.00', 'Tidak Bekerja', 'Tidak Bekerja', 0, 0, 0, '1.00', '0.00', '0.00', 0, '1.00', '0.00'),
(84, 'Marwati', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Pekerja Lepas', 'Tidak Bekerja', 1500000, 0, 1500000, '1.00', '0.00', '0.00', 1, '1.00', '0.00'),
(85, 'Nahlia', 'Parobaya', 'Seng Karatan', 'Tembok Bagus', 'Semen', 'Pulsa', 450, '1.00', '0.00', 'Pekerja Lepas', 'Tidak Bekerja', 1000000, 0, 1000000, '1.00', '0.00', '0.00', 1, '1.00', '0.00'),
(86, 'Rosnani', 'Muda', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Pekerja Swasta', 'Tidak Bekerja', 3000000, 0, 3000000, '0.94', '0.00', '0.00', 2, '1.00', '0.00'),
(87, 'Fatma', 'Duda/Janda', 'Seng Karatan', 'Papan', 'Semen', 'PLN (Subsidi)', 450, '1.00', '0.00', 'Tidak Bekerja', 'Tidak Bekerja', 0, 0, 0, '1.00', '0.00', '0.00', 1, '1.00', '0.00'),
(88, 'Nur Aidar', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Pekerja Swasta', 'Tidak Bekerja', 2000000, 0, 2000000, '1.00', '0.00', '0.00', 0, '1.00', '0.00'),
(89, 'Sartini', 'Parobaya', 'Seng Karatan', 'Papan', 'Semen', 'PLN', 450, '1.00', '0.00', 'Pekerja Swasta', 'Honorer', 2000000, 3000000, 5000000, '0.00', '0.85', '0.35', 2, '1.00', '0.00'),
(90, 'Minasa', 'Lansia', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Pekerja Lepas', 'Wirausaha', 3000000, 2000000, 5000000, '0.00', '0.85', '0.35', 0, '1.00', '0.00'),
(91, 'Fitri', 'Parobaya', 'Seng Karatan', 'Tembok Bagus', 'Semen', 'Pulsa', 450, '1.00', '0.00', 'Nelayan', 'Tidak Bekerja', 1000000, 0, 1000000, '1.00', '0.00', '0.00', 2, '1.00', '0.00'),
(92, 'Tanri Upa', 'Lansia', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Tidak Bekerja', 'Tidak Bekerja', 0, 0, 0, '1.00', '0.00', '0.00', 1, '1.00', '0.00'),
(93, 'Nurjannah', 'Duda/Janda', 'Seng Karatan', 'Papan', 'Semen', 'PLN (Subsidi)', 450, '1.00', '0.00', 'Tidak Bekerja', 'Tidak Bekerja', 0, 0, 0, '1.00', '0.00', '0.00', 0, '1.00', '0.00'),
(94, 'Satinem', 'Lansia', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 900, '0.47', '0.00', 'Guru PNS', 'Tidak Bekerja', 5000000, 0, 5000000, '0.00', '0.85', '0.35', 3, '0.50', '0.00'),
(95, 'Tumira', 'Lansia', 'Seng Bagus', 'Tembok Bagus', 'Semen', 'PLN', 900, '0.47', '0.00', 'PNS', 'Tidak Bekerja', 4000000, 0, 4000000, '0.29', '0.21', '0.00', 1, '1.00', '0.00'),
(96, 'Narisa', 'Muda', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 900, '0.47', '0.00', 'Wirausaha', 'Tidak Bekerja', 20000000, 0, 20000000, '0.00', '0.00', '1.00', 0, '1.00', '0.00'),
(97, 'Hasna Bundu', 'Lansia', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 900, '0.47', '0.00', 'Pensiunan', 'Wirausaha', 2000000, 5000000, 7000000, '0.00', '0.00', '1.00', 1, '1.00', '0.00'),
(98, 'Hani', 'Lansia', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Pensiunan Guru', 'Tidak Bekerja', 4000000, 0, 4000000, '0.29', '0.21', '0.00', 1, '1.00', '0.00'),
(99, 'Santi', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'ABK Kapal', 'Tidak Bekerja', 5000000, 0, 5000000, '0.00', '0.85', '0.35', 2, '1.00', '0.00'),
(100, 'Hasna Kamil', 'Lansia', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Wirausaha', 'Wirausaha', 3000000, 3000000, 6000000, '0.00', '0.00', '1.00', 1, '1.00', '0.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_masyarakat`
--
ALTER TABLE `tbl_masyarakat`
  ADD PRIMARY KEY (`id_masyarakat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_masyarakat`
--
ALTER TABLE `tbl_masyarakat`
  MODIFY `id_masyarakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
