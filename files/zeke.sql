-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2014 at 11:14 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zeke`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lokasi`
--

CREATE TABLE IF NOT EXISTS `tbl_lokasi` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `LOKASI` varchar(30) DEFAULT NULL,
  `LANG` varchar(70) DEFAULT NULL,
  `LON` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_lokasi`
--

INSERT INTO `tbl_lokasi` (`ID`, `LOKASI`, `LANG`, `LON`) VALUES
(1, 'Istana Bogor', '-6.598477', '106.795171'),
(2, 'Kampus IPB', '-6.587897', '106.801031'),
(3, 'Lanud Atang Sanjaya', '-6.540971', '106.755329'),
(4, 'Baranang Siang', '-6.604413', '106.806243'),
(5, 'Kantor Walikota', '-6.594755', '106.793934');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhs`
--

CREATE TABLE IF NOT EXISTS `tbl_mhs` (
  `NPM` varchar(10) NOT NULL,
  `Nama` varchar(500) NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `Kota` varchar(50) NOT NULL,
  `Fakultas` varchar(75) NOT NULL,
  `Jurusan` varchar(75) NOT NULL,
  PRIMARY KEY (`NPM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`NPM`, `Nama`, `Kelas`, `Kota`, `Fakultas`, `Jurusan`) VALUES
('16111197', 'Rifzky Alam', '3KA20', 'Bogor', 'Ilmu Komputer', 'Sistem Informasi'),
('181157', 'Bayu', '3KA20', 'depok', 'Ilmu Komputer', 'Sistem Informasi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
