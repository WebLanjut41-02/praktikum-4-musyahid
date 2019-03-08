-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2019 at 05:09 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum4`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `Id_Produk` int(11) NOT NULL,
  `Nama_Produk` varchar(50) NOT NULL,
  `Berat` varchar(10) NOT NULL,
  `Kategori` varchar(50) NOT NULL,
  `Harga` int(50) NOT NULL,
  `Id_Penjual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`Id_Produk`, `Nama_Produk`, `Berat`, `Kategori`, `Harga`, `Id_Penjual`) VALUES
(7, 'Kerajinan Kayu', '50 Kg', 'Kerajinan Kayu', 100000, 0),
(8, 'Kerajinan Kain', '40 Kg', 'Kerajinan Kain', 200000, 0),
(9, 'Kerajinan Sepatu', '10 Kg', 'Kerajinan Kayu', 100000, 0),
(10, 'Kerajinan Jam', '20 Kg', 'Kerajinan Kayu', 20000, 0),
(11, 'Kerajinan Jam Tangan', '150 Kg', 'Kerajinan Kayu', 100000, 0),
(25, 'Kerajinan Dompet', '5', 'Kerajinan Kayu', 10000, 0),
(26, 'Kerajinan Jam Tangan ku', '150 Kg', 'Kerajinan Kayu', 100000, 0),
(27, 'Kerajinan Kayuuu', '50 Kg', 'Kerajinan Kayu', 100000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`Id_Produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `Id_Produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
