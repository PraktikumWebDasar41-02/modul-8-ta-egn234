-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2018 at 03:21 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul8`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `usernm` varchar(20) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`usernm`, `pass`, `email`) VALUES
('egn234', '96e79218965eb72c92a549dd5a330112', 'egn234@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `datauser`
--

CREATE TABLE `datauser` (
  `usernm` varchar(20) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `nim` varchar(10) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `hobi` varchar(30) DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `wisata` varchar(100) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`usernm`);

--
-- Indexes for table `datauser`
--
ALTER TABLE `datauser`
  ADD KEY `usernm` (`usernm`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `datauser`
--
ALTER TABLE `datauser`
  ADD CONSTRAINT `datauser_ibfk_1` FOREIGN KEY (`usernm`) REFERENCES `akun` (`usernm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
