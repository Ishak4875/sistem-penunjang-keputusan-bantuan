-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 05:46 AM
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

INSERT INTO `tbl_masyarakat` (`id_masyarakat`, `nama`, `status`, `atap`, `dinding`, `lantai`, `listrik`, `kwh`, `kwh_kecil`, `kwh_besar`, `pekerjaan_suami`, `gaji_suami`, `gaji_istri`, `total_pendapatan`, `total_pendapatan_rendah`, `total_pendapatan_sedang`, `total_pendapatan_tinggi`, `jumlah_tanggungan`, `jumlah_tanggungan_sedikit`, `jumlah_tanggungan_banyak`) VALUES
(12, 'Jaelani', 'Parobaya', 'Seng Bagus', 'Asbes', 'Tanah', 'Pulsa', 800, '0.59', '0.00', 'Nelayan', 300000, 8000000, 8300000, '0.00', '0.73', '0.23', 4, '0.00', '0.50');

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
  MODIFY `id_masyarakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
