-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2025 at 04:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asia`
--

-- --------------------------------------------------------

--
-- Table structure for table `id_barang`
--

CREATE TABLE `id_barang` (
  `tanggal` date DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `kode_barang` varchar(50) DEFAULT NULL,
  `jumlah_barang` int(11) DEFAULT NULL,
  `id_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `id_barang`
--

INSERT INTO `id_barang` (`tanggal`, `nama_barang`, `kode_barang`, `jumlah_barang`, `id_barang`) VALUES
('2025-06-19', 'pisang', 'ps001', 12, 2),
('2025-06-19', 'semangka', 'sm001', 24, 3),
('2025-06-24', 'jeruk', 'jk001', 20, 5),
('2025-06-26', 'lemon', 'lm001', 30, 6),
('2025-06-26', 'Anggur', 'ang001', 12, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `telepon` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nama`, `alamat`, `telepon`) VALUES
('caca', 'JL. ABC 2', '25262701'),
('yohan', 'JL. CINTA', '131527856'),
('Noel', 'Jalan pajajaran', '1237173979'),
('ayu', 'JLN CINTA', '8299237');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `id_barang`
--
ALTER TABLE `id_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `id_barang`
--
ALTER TABLE `id_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
