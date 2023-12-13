-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 12:42 AM
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
-- Table structure for table `tbl_gaji_istri`
--

CREATE TABLE `tbl_gaji_istri` (
  `id_gaji_istri` int(11) NOT NULL,
  `gaji_istri_rendah` decimal(5,2) NOT NULL,
  `gaji_istri_sedang` decimal(5,2) NOT NULL,
  `gaji_istri_tinggi` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_gaji_istri`
--

INSERT INTO `tbl_gaji_istri` (`id_gaji_istri`, `gaji_istri_rendah`, `gaji_istri_sedang`, `gaji_istri_tinggi`) VALUES
(1, '1.00', '1.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gaji_suami`
--

CREATE TABLE `tbl_gaji_suami` (
  `id_gaji_suami` int(11) NOT NULL,
  `gaji_suami_rendah` decimal(5,2) NOT NULL,
  `gaji_suami_sedang` decimal(5,2) NOT NULL,
  `gaji_suami_tinggi` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_gaji_suami`
--

INSERT INTO `tbl_gaji_suami` (`id_gaji_suami`, `gaji_suami_rendah`, `gaji_suami_sedang`, `gaji_suami_tinggi`) VALUES
(1, '0.00', '1.00', '1.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jumlah_tanggungan`
--

CREATE TABLE `tbl_jumlah_tanggungan` (
  `id_tanggungan` int(11) NOT NULL,
  `jumlah_tanggungan_rendah` decimal(5,2) NOT NULL,
  `jumlah_tanggungan_sedang` decimal(5,2) NOT NULL,
  `jumlah_tanggungan_tinggi` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_jumlah_tanggungan`
--

INSERT INTO `tbl_jumlah_tanggungan` (`id_tanggungan`, `jumlah_tanggungan_rendah`, `jumlah_tanggungan_sedang`, `jumlah_tanggungan_tinggi`) VALUES
(1, '0.00', '1.00', '0.50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kwh`
--

CREATE TABLE `tbl_kwh` (
  `id_kwh` int(11) NOT NULL,
  `kwh_rendah` decimal(5,2) NOT NULL,
  `kwh_tinggi` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kwh`
--

INSERT INTO `tbl_kwh` (`id_kwh`, `kwh_rendah`, `kwh_tinggi`) VALUES
(1, '0.00', '1.00');

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
  `pekerjaan_suami` varchar(255) NOT NULL,
  `gaji_suami` int(255) NOT NULL,
  `gaji_istri` int(255) NOT NULL,
  `jumlah_tanggungan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_masyarakat`
--

INSERT INTO `tbl_masyarakat` (`id_masyarakat`, `nama`, `status`, `atap`, `dinding`, `lantai`, `listrik`, `kwh`, `pekerjaan_suami`, `gaji_suami`, `gaji_istri`, `jumlah_tanggungan`) VALUES
(1, 'Ishak', 'Muda', 'Seng Bagus', 'Tembok Bagus', 'Semen', 'Pulsa', 1000000, 'Nelayan', 10000000, 1000000, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_gaji_istri`
--
ALTER TABLE `tbl_gaji_istri`
  ADD PRIMARY KEY (`id_gaji_istri`);

--
-- Indexes for table `tbl_gaji_suami`
--
ALTER TABLE `tbl_gaji_suami`
  ADD PRIMARY KEY (`id_gaji_suami`);

--
-- Indexes for table `tbl_jumlah_tanggungan`
--
ALTER TABLE `tbl_jumlah_tanggungan`
  ADD PRIMARY KEY (`id_tanggungan`);

--
-- Indexes for table `tbl_kwh`
--
ALTER TABLE `tbl_kwh`
  ADD PRIMARY KEY (`id_kwh`);

--
-- Indexes for table `tbl_masyarakat`
--
ALTER TABLE `tbl_masyarakat`
  ADD PRIMARY KEY (`id_masyarakat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_gaji_istri`
--
ALTER TABLE `tbl_gaji_istri`
  MODIFY `id_gaji_istri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_gaji_suami`
--
ALTER TABLE `tbl_gaji_suami`
  MODIFY `id_gaji_suami` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_jumlah_tanggungan`
--
ALTER TABLE `tbl_jumlah_tanggungan`
  MODIFY `id_tanggungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kwh`
--
ALTER TABLE `tbl_kwh`
  MODIFY `id_kwh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_masyarakat`
--
ALTER TABLE `tbl_masyarakat`
  MODIFY `id_masyarakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
