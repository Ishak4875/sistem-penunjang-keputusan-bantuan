-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 04:12 PM
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
(23, 'Sarlia Abdullah', 'Lansia', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Tidak Bekerja', 'Pensiunan Guru', 0, 5000000, 5000000, '0.71', '0.00', '0.00', 0, '1.00', '0.00'),
(24, 'Selly Resa', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 900, '0.47', '0.00', 'Wiraswasta', 'Tidak Bekerja', 3000000, 0, 3000000, '1.00', '0.00', '0.00', 2, '1.00', '0.00'),
(25, 'Sitti Kusmira', 'Duda/Janda', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 900, '0.47', '0.00', 'Tidak Bekerja', 'PNS', 0, 4, 4, '1.00', '0.00', '0.00', 2, '1.00', '0.00'),
(26, 'Siti Arpa', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN (Subsidi)', 450, '1.00', '0.00', 'Nelayan', 'Tidak Bekerja', 10000000, 0, 10000000, '0.00', '0.57', '0.71', 2, '1.00', '0.00'),
(27, 'Hartia', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Semen', 'PLN (Subsidi)', 450, '1.00', '0.00', 'Pekerja Lepas', 'Tidak Bekerja', 1500000, 0, 1500000, '1.00', '0.00', '0.00', 1, '1.00', '0.00'),
(28, 'Yusnia Amir', 'Parobaya', 'Seng Bagus', 'Papan', 'Semen', 'PLN (Subsidi)', 450, '1.00', '0.00', 'Pekerja Lepas', 'Tidak Bekerja', 1500000, 0, 1500000, '1.00', '0.00', '0.00', 2, '1.00', '0.00'),
(29, 'Ratnadi', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN (Subsidi)', 450, '1.00', '0.00', 'Pekerja Lepas', 'Tidak Bekerja', 1500000, 0, 1500000, '1.00', '0.00', '0.00', 1, '1.00', '0.00'),
(30, 'Masnia', 'Parobaya', 'Seng Bagus', 'Tembok Bagus', 'Tehel', 'PLN', 450, '1.00', '0.00', 'Wirausaha', 'Wirausaha', 5000000, 5000000, 10000000, '0.00', '0.57', '0.71', 0, '1.00', '0.00');

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
  MODIFY `id_masyarakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
