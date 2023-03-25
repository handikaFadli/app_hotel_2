-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 04:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel2`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(15) NOT NULL,
  `no_kamar` int(100) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `maks` int(11) NOT NULL,
  `desk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `no_kamar`, `tipe`, `maks`, `desk`) VALUES
(1, 5, ' Superior Room   ', 3, 'Pelayanan Cukup Baik'),
(4, 3, ' Standard Room ', 2, 'Pelayanan Cukup Baik'),
(5, 4, ' Standard Room ', 3, 'Pelayanan Sangat Baik'),
(6, 2, 'Suite Room  ', 3, 'Pelayanan Cukup Baik');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id_pengunjung` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id_pengunjung`, `nama`, `status`) VALUES
(1, 'handika', 'Checkin'),
(2, 'sekar', 'Checkin'),
(7, 'Hasim', 'Checkin');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `jumlah_hari` int(11) NOT NULL,
  `kamar` varchar(50) NOT NULL,
  `jumlah_kamar` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `no_ktp`, `nama`, `ttl`, `alamat`, `no_hp`, `email`, `check_in`, `check_out`, `jumlah_hari`, `kamar`, `jumlah_kamar`, `foto`) VALUES
(7, '311341242444 ', 'M Handika ', '2022-05-17', ' Gempol', '085722784526', 'handikafadli123@gmail.com', '2022-05-19', '2022-05-21', 2, '3', 1, '4102 791396165_140110793_61ed4a1b726ce.png'),
(8, '20210120050', 'Agis', '2022-05-03', 'Jl. Kesambi', '085722784525', 'agis123@gmail.com', '2022-05-19', '2022-05-21', 2, 'Suite Room  ', 1, '5321 791396165_140110793_61ed4a1b726ce.png'),
(9, '20210120050', 'ABAS', '2022-05-11', 'aaaa', '085722784525', 'abas@gmail.com', '2022-05-19', '2022-05-20', 1, 'Suite Room  ', 1, '6206 140110793_61ed4a1b726ce.png');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_kamar`
--

CREATE TABLE `tipe_kamar` (
  `id_tipe` int(11) NOT NULL,
  `nama_tipe` varchar(100) NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `harga` double NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tipe_kamar`
--

INSERT INTO `tipe_kamar` (`id_tipe`, `nama_tipe`, `fasilitas`, `harga`, `ket`) VALUES
(2, 'Superior Room   ', 'AC, WiFi, TV, Sofa', 200000, 'Pelayanan Sepenuhnya'),
(3, 'Standard Room ', 'AC, WiFi, TV', 150000, 'Pelayanan Sepenuhnya'),
(4, 'Deluxe Room ', 'AC, WiFi, TV, Sofa, Bathup', 300000, 'Pelayanan Sepenuhnya'),
(5, 'Suite Room   ', 'AC, WiFi, TV, Sofa, Bathup, Double Bad, Wardrobe', 520000, 'Pelayanan Sepenuhnya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indexes for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  ADD PRIMARY KEY (`id_tipe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
