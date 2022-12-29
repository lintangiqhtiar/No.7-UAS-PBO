-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 04:46 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `hewanpeliharaan`
--

CREATE TABLE `hewanpeliharaan` (
  `id` int(50) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `usia` int(10) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `Jenis` varchar(30) NOT NULL,
  `Keluhan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hewanpeliharaan`
--

INSERT INTO `hewanpeliharaan` (`id`, `Nama`, `tgl_lahir`, `usia`, `jk`, `Jenis`, `Keluhan`) VALUES
(1, 'Lulu', '2022-12-01', 1, 'betina', 'kucing', 'banyak kutu'),
(2, 'Koma', '2022-10-13', 2, 'Jantan', 'Kucing', 'Hiperaktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hewanpeliharaan`
--
ALTER TABLE `hewanpeliharaan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hewanpeliharaan`
--
ALTER TABLE `hewanpeliharaan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
