-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 03:42 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_webpro_f`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `akun_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`akun_id`, `username`, `password`, `no_hp`, `alamat`, `role`) VALUES
(1, 'admin', 'apaya', '', '-', 0),
(11, 'farz', '123', '085341008182', 'dihatinya', 1),
(27, 'test', 'asd', '081234561234', 'dimana', 1);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `obat_id` int(11) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `harga` int(10) NOT NULL,
  `status_obat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`obat_id`, `nama_obat`, `jenis`, `harga`, `status_obat`) VALUES
(8, 'Focalin', 'Stimulan', 250000, 'Tersedia'),
(9, 'Dexedrine', 'Stimulan', 400000, 'Tersedia'),
(10, 'Thorazine', 'Antipsikotik', 450000, 'Tersedia'),
(11, 'Prolixin', 'Antipsikotik', 550000, 'Tersedia'),
(12, 'Vynase', 'Stimulan', 350000, 'Tersedia'),
(13, 'Celexa', 'Antidepresan', 525000, 'Tersedia'),
(14, 'Haldol', 'Antipsikotik', 400000, 'Tersedia'),
(15, 'Amfetamin', 'Stimulan', 200000, 'Tersedia'),
(16, 'Lexapro', 'Antidepresan', 200000, 'Tersedia'),
(17, 'Trilafon', 'Antipsikotik', 425000, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `akun_id` int(11) NOT NULL,
  `obat_id` int(11) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status_transaksi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `akun_id`, `obat_id`, `jumlah`, `total_harga`, `status_transaksi`) VALUES
(1, 11, 10, 2, 900000, 'Belum Bayar'),
(2, 11, 12, 2, 700000, 'Belum Bayar'),
(3, 27, 14, 3, 1200000, 'Belum Bayar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`akun_id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`obat_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD KEY `fk_akun_id` (`akun_id`),
  ADD KEY `fk_obat_id` (`obat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `akun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `obat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_akun_id` FOREIGN KEY (`akun_id`) REFERENCES `akun` (`akun_id`),
  ADD CONSTRAINT `fk_obat_id` FOREIGN KEY (`obat_id`) REFERENCES `obat` (`obat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
