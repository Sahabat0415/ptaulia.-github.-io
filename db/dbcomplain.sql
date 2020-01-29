-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 03:19 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcomplain`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip_complain`
--

CREATE TABLE `arsip_complain` (
  `no` int(10) NOT NULL,
  `no_resi` varchar(25) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `nama_pengirim` varchar(30) NOT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `alamat_penerima` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arsip_complain`
--

INSERT INTO `arsip_complain` (`no`, `no_resi`, `tgl_masuk`, `nama_pengirim`, `nama_penerima`, `alamat_penerima`, `keterangan`) VALUES
(1, '009985', '2020-01-13', 'andi', 'andi', 'kisaran', 'buruk'),
(5, '4543', '2020-01-14', 'efdsf', 'dsfs', 'fsdf', 'dffds'),
(6, '43534534', '2020-01-15', 'gfdg', 'fdgdf', 'gfdfg', 'sdfs');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(25) NOT NULL,
  `level` int(4) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `level`, `password`, `nama_lengkap`, `keterangan`, `email`) VALUES
('Syafii', 1, '25d55ad283aa400af464c76d713c07ad', 'Muhammad Syafi\'i', 'Administrator', 'alisabar1995@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama_lengkap`, `keterangan`, `email`) VALUES
('ali', 'ali sabar ', 'administrator', 'alisabar1995@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip_complain`
--
ALTER TABLE `arsip_complain`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip_complain`
--
ALTER TABLE `arsip_complain`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
