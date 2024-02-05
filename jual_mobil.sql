-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2024 at 10:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jual_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenismobil`
--

CREATE TABLE `jenismobil` (
  `id_mobil` varchar(6) NOT NULL,
  `tipe_mobil` varchar(100) NOT NULL,
  `warna` varchar(30) NOT NULL,
  `tahun_mobil` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenismobil`
--

INSERT INTO `jenismobil` (`id_mobil`, `tipe_mobil`, `warna`, `tahun_mobil`) VALUES
('AV15H1', 'Avanza Veloz', 'Hitam', '2015'),
('BR19A1', 'Brio', 'Abu-abu', '2019'),
('HR20P1', 'HRV', 'Putih', '2020'),
('IR18H1', 'Innova Reborn', 'HITAM', '2018'),
('MB13P1', 'Mobilio', 'Putih', '2013');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `no_pem` varchar(11) NOT NULL,
  `nama_pem` varchar(100) NOT NULL,
  `alamat_pem` varchar(100) NOT NULL,
  `hp_pem` varchar(15) NOT NULL,
  `id_mobil` varchar(6) NOT NULL,
  `tgl_cek` date NOT NULL,
  `status_transaksi` enum('lunas','belum lunas') NOT NULL,
  `status_penyerahan` enum('sudah','belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`no_pem`, `nama_pem`, `alamat_pem`, `hp_pem`, `id_mobil`, `tgl_cek`, `status_transaksi`, `status_penyerahan`) VALUES
('PEM01', 'Ajo', 'Tapak Tuan', '08227687615', 'AV15H1', '2024-02-02', 'lunas', 'sudah'),
('PEM02', 'Mulkian', 'Kunyet', '082234156652', 'MB13P1', '2024-01-17', 'lunas', ''),
('PEM03', 'Akmal', 'Padang Tiji', '081254345434', 'HR20P1', '2024-01-26', 'lunas', ''),
('PEM04', 'Slamet', 'Pidie Jaya', '082268767540', 'IR18H1', '2024-02-07', '', ''),
('PEM05', 'Saiful', 'Taming', '08234224242', 'BR19A1', '2024-02-03', 'lunas', 'sudah');

-- --------------------------------------------------------

--
-- Table structure for table `pengecekan`
--

CREATE TABLE `pengecekan` (
  `id_cek` varchar(7) NOT NULL,
  `tgl_cek` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penyerahan`
--

CREATE TABLE `penyerahan` (
  `id_pedok` int(11) NOT NULL,
  `status_penyerahan` enum('sudah','belum','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `status_transaksi` enum('Lunas','Belum Bayar','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_log` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `last_log`) VALUES
(1, 'administrator', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenismobil`
--
ALTER TABLE `jenismobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`no_pem`),
  ADD KEY `nama_pem` (`nama_pem`),
  ADD KEY `nama_pem_2` (`nama_pem`),
  ADD KEY `no_pem` (`no_pem`),
  ADD KEY `id_mobil` (`id_mobil`);

--
-- Indexes for table `pengecekan`
--
ALTER TABLE `pengecekan`
  ADD PRIMARY KEY (`id_cek`),
  ADD KEY `id_cek` (`id_cek`);

--
-- Indexes for table `penyerahan`
--
ALTER TABLE `penyerahan`
  ADD PRIMARY KEY (`id_pedok`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penyerahan`
--
ALTER TABLE `penyerahan`
  MODIFY `id_pedok` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD CONSTRAINT `pembeli_ibfk_1` FOREIGN KEY (`id_mobil`) REFERENCES `jenismobil` (`id_mobil`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
