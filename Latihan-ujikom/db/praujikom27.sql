-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 07:57 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `praujikom27`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosen`
--

CREATE TABLE IF NOT EXISTS `tbl_dosen` (
  `kd_dosen` varchar(10) NOT NULL,
  `nm_dosen` varchar(50) NOT NULL,
  `alamat` text,
  PRIMARY KEY (`kd_dosen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`kd_dosen`, `nm_dosen`, `alamat`) VALUES
('00002', 'Parde', 'Ono nang kono'),
('001', 'Raya', 'Jln Kuningan IX 4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE IF NOT EXISTS `tbl_jadwal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_dosen` varchar(10) NOT NULL,
  `kd_mk` varchar(10) NOT NULL,
  `ruang` varchar(10) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kd_dosen` (`kd_dosen`),
  KEY `kd_mk` (`kd_mk`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id`, `kd_dosen`, `kd_mk`, `ruang`, `waktu`) VALUES
(3, '00002', '00001', '06tplm002', '2022-06-04T01:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mk`
--

CREATE TABLE IF NOT EXISTS `tbl_mk` (
  `kd_mk` varchar(10) NOT NULL,
  `nm_mk` varchar(50) NOT NULL,
  `sks` int(11) NOT NULL,
  PRIMARY KEY (`kd_mk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mk`
--

INSERT INTO `tbl_mk` (`kd_mk`, `nm_mk`, `sks`) VALUES
('00001', 'Bahasa Inggris', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD CONSTRAINT `tbl_jadwal_ibfk_1` FOREIGN KEY (`kd_dosen`) REFERENCES `tbl_dosen` (`kd_dosen`),
  ADD CONSTRAINT `tbl_jadwal_ibfk_2` FOREIGN KEY (`kd_mk`) REFERENCES `tbl_mk` (`kd_mk`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
