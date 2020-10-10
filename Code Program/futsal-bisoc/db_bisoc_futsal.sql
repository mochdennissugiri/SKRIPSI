-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2020 at 10:33 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bisoc_futsal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(16) NOT NULL,
  `level` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `level`) VALUES
(6, 'Dennis', '123456', 'Member'),
(7, 'Jamil', '123', 'Member'),
(8, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `nama_team` varchar(255) NOT NULL,
  `tanggal_booking` text NOT NULL,
  `tempat_lapang` int(50) NOT NULL,
  `mulai_jam` int(255) NOT NULL,
  `akhir_jam` int(255) NOT NULL,
  `total_bayar` int(255) NOT NULL,
  `status_bayar` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `nama_team`, `tanggal_booking`, `tempat_lapang`, `mulai_jam`, `akhir_jam`, `total_bayar`, `status_bayar`) VALUES
(37, 'unibba', '27 april 2020', 1, 23, 24, 0, 0),
(41, 'unibba', '27 april 2020', 2, 23, 24, 0, 0),
(43, 'beko123', '27 april 2020', 2, 23, 24, 0, 0),
(44, 'dennis', '27 april 2020', 2, 15, 16, 0, 0),
(47, 'kopo', '11 juli 2020', 2, 23, 24, 0, 0),
(48, 'jongor', '13 juli 2020', 2, 23, 24, 0, 0),
(49, 'pindad', '11 juli 2020', 2, 9, 21, 0, 0),
(50, 'fc bkc', '05 juli 2020', 1, 6, 7, 0, 0),
(52, 'beko123', '25 juli 2020', 1, 9, 11, 0, 0),
(53, 'majalaya', '20 juli 2020', 2, 10, 12, 0, 0),
(54, 'Bargos FC ', '20 juli 2020', 0, 10, 12, 0, 0),
(55, 'Bargos FC ', '20 juli 2020', 0, 10, 12, 0, 0),
(62, 'beko', '20 juli 2020', 0, 10, 12, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `nama_team` varchar(255) NOT NULL,
  `tanggal_booking` text NOT NULL,
  `tempat_lapang` int(255) NOT NULL,
  `mulai_jam` int(255) NOT NULL,
  `akhir_jam` int(255) NOT NULL,
  `total_bayar` int(255) NOT NULL,
  `status_bayar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `nama_team`, `tanggal_booking`, `tempat_lapang`, `mulai_jam`, `akhir_jam`, `total_bayar`, `status_bayar`) VALUES
(35, 'unibba', '27 april 2020', 1, 23, 24, 20000, 'dp'),
(36, 'ciparay', '27 april 2020', 2, 23, 24, 10000, 'lunas'),
(37, 'kopo', '11 juli 2020', 2, 23, 24, 20000, 'lunas'),
(38, 'unibba', '27 april 2020', 1, 23, 24, 50000, 'lunas'),
(39, 'unibba', '27 april 2020', 1, 23, 24, 20000, 'dp'),
(40, 'jongor', '13 juli 2020', 2, 23, 24, 20000, 'lunas'),
(42, 'unibba', '27 april 2020', 1, 11, 13, 30000, 'dp'),
(43, 'beko', '20 juli 2020', 0, 10, 12, 20000, 'dp'),
(44, 'Santai FC', '20 juli 2020', 1, 10, 12, 10000, 'dp');

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE `lapangan` (
  `id` int(11) NOT NULL,
  `no` int(100) NOT NULL,
  `nama_lapangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`id`, `no`, `nama_lapangan`) VALUES
(1, 0, ''),
(2, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama_team` varchar(200) NOT NULL,
  `tempat_lapang` int(255) NOT NULL,
  `mulai_jam` int(255) NOT NULL,
  `akhir_jam` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama_team`, `tempat_lapang`, `mulai_jam`, `akhir_jam`) VALUES
(7, 'unibba', 2, 12, 13),
(9, 'beko123', 1, 9, 21),
(10, 'unibba', 2, 23, 24),
(11, 'Bargos FC', 0, 10, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `lapangan`
--
ALTER TABLE `lapangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
