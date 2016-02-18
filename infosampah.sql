-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 18, 2016 at 03:15 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `infosampah`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_sampah_user`
--

CREATE TABLE IF NOT EXISTS `data_sampah_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `input_sampah` double NOT NULL,
  `input_sampah_perbulan` double NOT NULL,
  `action` int(3) NOT NULL,
  `jenis_sampah` int(3) NOT NULL,
  `tanggal` datetime NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `edit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `data_tips`
--

CREATE TABLE IF NOT EXISTS `data_tips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `tips` text NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `edit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_sampah`
--

CREATE TABLE IF NOT EXISTS `jenis_sampah` (
  `id` int(2) NOT NULL,
  `jenis sampah` varchar(50) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `edit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_sampah`
--

INSERT INTO `jenis_sampah` (`id`, `jenis sampah`, `create_at`, `edit_at`) VALUES
(1, 'Plastik', '2016-02-02 10:09:43', '0000-00-00 00:00:00'),
(2, 'Kertas', '2016-02-02 10:09:43', '0000-00-00 00:00:00'),
(3, 'Kaca', '2016-02-02 10:09:43', '0000-00-00 00:00:00'),
(4, 'Logam', '2016-02-02 10:09:43', '0000-00-00 00:00:00'),
(5, 'Sisa Makanan', '2016-02-02 10:09:43', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pembuangan_sampah`
--

CREATE TABLE IF NOT EXISTS `pembuangan_sampah` (
  `id` int(11) NOT NULL,
  `pembuangan` varchar(50) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `edit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembuangan_sampah`
--

INSERT INTO `pembuangan_sampah` (`id`, `pembuangan`, `create_at`, `edit_at`) VALUES
(1, 'dibakar', '2016-02-02 10:06:09', '0000-00-00 00:00:00'),
(2, 'dikelola tps', '2016-02-02 10:06:09', '0000-00-00 00:00:00'),
(3, 'dibuang', '2016-02-02 10:06:09', '0000-00-00 00:00:00'),
(4, 'lain - lain', '2016-02-02 10:06:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bio` text NOT NULL,
  `born_date` varchar(70) NOT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `role_id` int(2) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `edit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `email`, `bio`, `born_date`, `gender`, `role_id`, `create_at`, `edit_at`) VALUES
(2, 'immatulfathina', 'fathina', 'qwerty', 'imma@fathina.com', '', '', 'female', 1, '2016-02-13 08:01:15', '2016-02-16 17:17:41'),
(3, 'arya kusuma', 'aryakus', '123456', 'arya@kuskus.com', '', '', 'male', 2, '2016-02-13 08:00:21', '2016-02-16 09:29:49'),
(17, 'athoil maula', 'athoilma', '123456789', 'athoil@maula.com', '', '', 'male', 1, '2016-02-10 18:47:16', '2016-02-16 15:17:20'),
(18, 'hafiz zakky', 'hafiz', '123456', 'hafiz@zakky.com', 'hafiss', '1995-09-09', 'male', NULL, '2016-02-11 04:30:39', '2016-02-18 07:27:01'),
(21, 'patricia b', 'patricia', 'qwerty', 'patricia@mail.com', '', '', 'female', 1, '0000-00-00 00:00:00', '2016-02-16 09:30:18'),
(43, 'Admin', 'admin', 'popo', 'admin@admin.com', 'gua admin nya', '', NULL, NULL, '2016-02-16 16:59:29', '2016-02-18 07:52:29'),
(44, 'portgas D ace', 'hikenace', '123456', 'portgas@ace.com', 'Shirohige boys', '', 'male', NULL, '0000-00-00 00:00:00', '2016-02-18 06:22:31'),
(45, 'sherlock holmes', 'holmes', 'qwerty', 'sherlock@holmes.com', '', '1999-01-10', 'male', NULL, '0000-00-00 00:00:00', '2016-02-18 07:37:03');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
