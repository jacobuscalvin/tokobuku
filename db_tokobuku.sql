-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2017 at 03:31 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tokobuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_session` varchar(99) NOT NULL,
  `block` enum('N','Y') NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `id_session`, `block`, `level`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'bfcelqbpvu42ssrfdhu6v8dfo2', 'N', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE `distributor` (
  `id_distributor` int(10) NOT NULL,
  `nama_distributor` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(10) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `level` varchar(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_session` varchar(99) NOT NULL,
  `block` enum('N','Y') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `nama_lengkap`, `alamat`, `telepon`, `level`, `username`, `password`, `id_session`, `block`) VALUES
(13, 'jacobus', 'tamanholisindah', '018239812938', 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '70tjhtr2kqap5lnbdk7jcv1bm1', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `pasok`
--

CREATE TABLE `pasok` (
  `id_pasok` int(10) NOT NULL,
  `id_distributor` int(10) NOT NULL,
  `id_buku` int(10) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(10) NOT NULL,
  `id_buku` int(10) NOT NULL,
  `id_kasir` int(15) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`id_distributor`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `pasok`
--
ALTER TABLE `pasok`
  ADD PRIMARY KEY (`id_pasok`),
  ADD KEY `id_distributor` (`id_distributor`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_kasir` (`id_kasir`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_kasir_2` (`id_kasir`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pasok`
--
ALTER TABLE `pasok`
  ADD CONSTRAINT `pasok_ibfk_1` FOREIGN KEY (`id_distributor`) REFERENCES `distributor` (`id_distributor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_kasir`) REFERENCES `login` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
