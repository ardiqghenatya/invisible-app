-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2014 at 08:15 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laporan`
--
CREATE DATABASE IF NOT EXISTS `laporan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `laporan`;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `jk` varchar(5) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `ttl`, `jk`, `telp`, `alamat`) VALUES
(1, 'Andi Jamaludin', 'Tasikmalaya, 12 February 1989', 'L', '085xxxxxxxxx', 'Tasikmalaya'),
(2, 'Deni Safarudin', 'Ciamis, 24 September 1990', 'L', '089xxxxxxxxx', 'Ciamis'),
(3, 'Linda Sihombing', 'Medan, 25 Agustus 1991', 'P', '085xxxxxxxxx', 'Bandung');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
