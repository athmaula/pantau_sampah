-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2016 at 01:03 AM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `PantauSampah`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_sampah_user`
--

CREATE TABLE IF NOT EXISTS `data_sampah_user` (
  `id_data` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `input_sampah` double NOT NULL,
  `input_total` double NOT NULL,
  `action` int(3) NOT NULL,
  `jenis_sampah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `edit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_data`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `data_sampah_user`
--

INSERT INTO `data_sampah_user` (`id_data`, `user_id`, `input_sampah`, `input_total`, `action`, `jenis_sampah`, `tanggal`, `create_at`, `edit_at`) VALUES
(7, 47, 1.5, 0, 3, 1, '2016-02-29', '2016-02-21 13:21:50', '2016-02-22 14:01:59'),
(10, 51, 10, 0, 2, 1, '2016-02-29', '2016-02-22 14:04:05', '2016-02-22 14:04:14'),
(18, 50, 20, 0, 2, 1, '2016-02-16', '2016-02-23 13:12:56', '0000-00-00 00:00:00'),
(19, 50, 10, 0, 1, 1, '2016-02-28', '2016-02-23 13:13:15', '0000-00-00 00:00:00'),
(20, 50, 20, 0, 1, 5, '2016-02-28', '2016-02-23 13:13:55', '0000-00-00 00:00:00'),
(21, 50, 40, 0, 2, 2, '2016-02-29', '2016-02-23 13:14:18', '0000-00-00 00:00:00'),
(23, 50, 10, 0, 2, 2, '2016-02-28', '2016-02-23 14:05:44', '0000-00-00 00:00:00'),
(24, 50, 11, 0, 2, 2, '2016-02-28', '2016-02-23 18:19:29', '0000-00-00 00:00:00'),
(25, 50, 11, 0, 2, 2, '2016-02-28', '2016-02-23 18:20:19', '0000-00-00 00:00:00'),
(26, 50, 11, 0, 2, 2, '2016-02-28', '2016-02-23 18:20:47', '0000-00-00 00:00:00'),
(27, 50, 11, 0, 2, 2, '2016-02-28', '2016-02-23 18:21:47', '0000-00-00 00:00:00'),
(28, 0, 0, 20, 0, 0, '0000-00-00', '2016-02-24 05:51:57', '0000-00-00 00:00:00'),
(29, 0, 0, 40, 0, 0, '0000-00-00', '2016-02-24 05:53:03', '0000-00-00 00:00:00'),
(30, 0, 0, 4, 0, 0, '0000-00-00', '2016-02-24 05:55:16', '0000-00-00 00:00:00'),
(31, 50, 20, 0, 2, 2, '2016-02-28', '2016-02-24 06:04:31', '0000-00-00 00:00:00'),
(32, 50, 10, 0, 2, 2, '0000-00-00', '2016-02-24 08:13:53', '0000-00-00 00:00:00'),
(33, 52, 12, 0, 2, 1, '2016-02-25', '2016-02-24 08:18:00', '2016-02-27 17:15:00'),
(34, 52, 5, 0, 1, 5, '2016-02-25', '2016-02-27 17:16:28', '0000-00-00 00:00:00'),
(35, 52, 18, 0, 2, 1, '2016-02-25', '2016-02-27 17:24:27', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `data_tips`
--

CREATE TABLE IF NOT EXISTS `data_tips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `edit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `data_tips`
--

INSERT INTO `data_tips` (`id`, `id_user`, `title`, `content`, `create_at`, `edit_at`) VALUES
(3, 48, 'this is example', 'this is example of tips in Landingpage Pantau Sampah', '2016-02-24 16:53:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `data_tips_homepage`
--

CREATE TABLE IF NOT EXISTS `data_tips_homepage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `edit_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `data_tips_homepage`
--

INSERT INTO `data_tips_homepage` (`id`, `id_user`, `title`, `content`, `create_at`, `edit_at`) VALUES
(1, 48, 'this is example TIPS', ' this is example tips of homepage Pantau Sampah', '2016-02-24 17:18:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_sampah`
--

CREATE TABLE IF NOT EXISTS `jenis_sampah` (
  `id` int(2) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `edit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_sampah`
--

INSERT INTO `jenis_sampah` (`id`, `jenis`, `create_at`, `edit_at`) VALUES
(1, 'Plastik', '2016-02-02 10:09:43', '0000-00-00 00:00:00'),
(2, 'Kertas', '2016-02-02 10:09:43', '0000-00-00 00:00:00'),
(3, 'Kaca', '2016-02-02 10:09:43', '0000-00-00 00:00:00'),
(4, 'Logam', '2016-02-02 10:09:43', '0000-00-00 00:00:00'),
(5, 'Sisa Makanan', '2016-02-02 10:09:43', '0000-00-00 00:00:00'),
(6, 'lain - lain', '2016-02-19 09:29:57', '0000-00-00 00:00:00');

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
(1, 'Burnt', '2016-02-27 17:58:30', '0000-00-00 00:00:00'),
(2, 'Send to Landfill', '2016-02-27 17:58:49', '0000-00-00 00:00:00'),
(3, 'Discarded', '2016-02-27 17:59:04', '0000-00-00 00:00:00'),
(4, 'Other', '2016-02-27 17:59:34', '0000-00-00 00:00:00');

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
  `born_date` date NOT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL,
  `ext` varchar(8) DEFAULT NULL,
  `input_total` double NOT NULL,
  `role_id` int(2) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `edit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `email`, `bio`, `born_date`, `gender`, `file`, `ext`, `input_total`, `role_id`, `create_at`, `edit_at`) VALUES
(46, 'qwerty', 'qwerty', 'qwerty', 'qwerty@q.com', '', '0000-00-00', 'male', NULL, NULL, 0, 1, '0000-00-00 00:00:00', '2016-02-24 09:31:43'),
(47, 'immatulfathina', 'fathina', 'qwerty', 'fathina@email.com', '', '0000-00-00', 'female', NULL, NULL, 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'admin', 'admin', 'popo', 'admin@pantausampah.com', '', '0000-00-00', 'male', NULL, NULL, 0, 1, '2016-02-19 06:24:28', '0000-00-00 00:00:00'),
(49, 'athoil maula', 'athoil', 'qwerty', 'atho@maula.com', '', '0000-00-00', 'male', NULL, NULL, 0, 2, '0000-00-00 00:00:00', '2016-02-22 14:08:46'),
(50, 'bootstrap bills', 'bootbills', 'qwerty', 'boot@bill.com', '', '1995-02-21', 'male', NULL, NULL, 0, 2, '0000-00-00 00:00:00', '2016-02-22 14:08:39'),
(51, 'zxcvbn', 'zxcvbn', 'asdfg', 'zxcv@zx.com', '', '0000-00-00', 'male', NULL, NULL, 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'doscom', 'doscom', 'doscom', 'doscom@doscom.com', '', '0000-00-00', 'male', NULL, NULL, 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_tips`
--
ALTER TABLE `data_tips`
  ADD CONSTRAINT `data_tips_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
