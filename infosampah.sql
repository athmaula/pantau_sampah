-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 08, 2016 at 01:55 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Dumping data for table `data_sampah_user`
--

INSERT INTO `data_sampah_user` (`id_data`, `user_id`, `input_sampah`, `input_total`, `action`, `jenis_sampah`, `tanggal`, `create_at`, `edit_at`) VALUES
(74, 74, 1, 0, 2, 3, '2016-04-14', '2016-04-16 00:19:53', '2016-04-16 00:22:12'),
(75, 76, 0.7, 0, 2, 2, '2016-05-01', '2016-05-06 15:56:27', '2016-05-07 00:04:07'),
(76, 76, 1, 0, 3, 2, '2016-05-02', '2016-05-07 00:01:33', '2016-05-07 00:02:19'),
(77, 76, 2, 0, 1, 1, '2016-05-03', '2016-05-07 00:01:52', '0000-00-00 00:00:00'),
(78, 84, 1, 0, 3, 1, '2016-05-02', '2016-05-08 06:46:07', '0000-00-00 00:00:00'),
(80, 84, 0.8, 0, 1, 4, '2016-05-03', '2016-05-08 06:46:52', '0000-00-00 00:00:00'),
(81, 84, 0.1, 0, 1, 1, '2016-05-09', '2016-05-08 06:47:12', '0000-00-00 00:00:00'),
(82, 84, 0.3, 0, 1, 1, '2016-05-09', '2016-05-08 06:48:04', '0000-00-00 00:00:00'),
(83, 84, 2, 0, 2, 4, '2016-05-06', '2016-05-08 06:48:29', '0000-00-00 00:00:00'),
(84, 84, 1, 0, 3, 5, '2016-05-02', '2016-05-08 06:49:09', '0000-00-00 00:00:00'),
(85, 84, 1, 0, 2, 3, '2016-05-03', '2016-05-08 06:52:12', '0000-00-00 00:00:00'),
(86, 84, 3, 0, 3, 2, '2016-05-04', '2016-05-08 06:52:24', '0000-00-00 00:00:00'),
(87, 84, 2, 0, 3, 6, '2016-05-05', '2016-05-08 06:52:40', '0000-00-00 00:00:00'),
(88, 84, 1, 0, 2, 4, '2016-05-07', '2016-05-08 06:53:01', '0000-00-00 00:00:00'),
(89, 84, 2, 0, 2, 4, '2016-05-05', '2016-05-08 06:53:53', '0000-00-00 00:00:00'),
(90, 84, 2, 0, 2, 2, '2016-05-08', '2016-05-08 06:54:14', '0000-00-00 00:00:00'),
(93, 95, 2, 0, 3, 4, '2016-05-07', '2016-05-08 14:45:50', '0000-00-00 00:00:00'),
(94, 95, 3, 0, 2, 2, '2016-05-09', '2016-05-08 14:46:17', '0000-00-00 00:00:00'),
(95, 95, 0.9, 0, 2, 4, '2016-05-15', '2016-05-15 09:59:25', '0000-00-00 00:00:00'),
(96, 95, 1.2, 0, 1, 6, '2016-05-15', '2016-05-15 10:00:18', '0000-00-00 00:00:00'),
(97, 95, 0.1, 0, 2, 5, '2016-05-15', '2016-05-15 10:00:51', '0000-00-00 00:00:00'),
(98, 95, 1.2, 0, 2, 2, '2016-05-15', '2016-05-15 14:41:19', '0000-00-00 00:00:00'),
(100, 95, 3, 0, 2, 1, '2016-06-03', '2016-06-03 15:26:25', '0000-00-00 00:00:00'),
(101, 95, 1.2, 0, 2, 5, '2016-06-05', '2016-06-05 05:34:09', '0000-00-00 00:00:00'),
(102, 95, 0.3, 0, 3, 5, '2016-06-05', '2016-06-05 05:34:31', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `data_tips`
--

INSERT INTO `data_tips` (`id`, `id_user`, `title`, `content`, `create_at`, `edit_at`) VALUES
(3, 48, 'Did you know ?', 'the aluminum can be decomposed in 200 years', '2016-04-12 19:23:54', '2016-04-12 19:23:54'),
(4, 48, 'Do you know ?', ' Cows in Kupang, NTT eat garbage from Alak Landfill. It''s usuall now to find some cow dead suddenly, ', '2016-05-15 16:24:49', '2016-05-15 16:24:49');

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
(1, 48, 'Did you know ?', 'the tissue paper be decomposed in one month ', '2016-04-12 19:17:56', '0000-00-00 00:00:00'),
(2, 48, 'Did You Know ?', 'Indonesia contribute heaps of plastic garbage in the world, currently second in the world with 3,216,856', '2016-02-25 08:01:54', '0000-00-00 00:00:00');

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
(1, 'Plastik', '2016-06-05 08:49:21', '0000-00-00 00:00:00'),
(2, 'Kertas', '2016-06-05 08:49:45', '0000-00-00 00:00:00'),
(3, 'Kaca', '2016-06-05 08:49:54', '0000-00-00 00:00:00'),
(4, 'Logam', '2016-02-02 10:09:43', '0000-00-00 00:00:00'),
(5, 'Sisa Makanan', '2016-06-05 08:50:12', '0000-00-00 00:00:00'),
(6, 'Lainnya', '2016-06-05 08:50:21', '0000-00-00 00:00:00');

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
(1, 'dibakar', '2016-06-05 08:50:37', '0000-00-00 00:00:00'),
(2, 'Kirim ke TPS', '2016-06-05 08:50:49', '0000-00-00 00:00:00'),
(3, 'Buang Sembarang', '2016-06-05 08:51:04', '0000-00-00 00:00:00'),
(4, 'Lainnya', '2016-06-05 08:51:13', '0000-00-00 00:00:00');

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
  `role_id` int(2) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `edit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `email`, `bio`, `born_date`, `gender`, `role_id`, `create_at`, `edit_at`) VALUES
(48, 'admin', 'mimin', 'b3d80ff388ec7b0bee1b251856ec56e8', 'admin@pantausampah.com', '', '0000-00-00', 'male', 1, '2016-02-19 06:24:28', '2016-05-08 04:32:40'),
(94, 'Sampah', 'sampah', 'd31f71cf013b18fe6beab90a560ba7e2', 'sampah@sampah.com', 'Sampah sampah', '0000-00-00', 'female', 2, '2016-05-08 10:43:01', '2016-05-08 15:45:34'),
(95, 'Dinus Open Source Community', 'doscom', 'a9dfb46e320b6f0587a070dd9cf1209e', 'doscom@official.com', 'Dinus Open Source Community', '2008-10-28', 'male', 2, '2016-05-08 14:37:25', '2016-05-08 15:56:11'),
(96, 'Bring me the horizon', 'bmthband', '897c8fde25c5cc5270cda61425eed3c8', 'bmth@band.com', '', '2016-03-16', 'male', 2, '2016-05-08 16:36:53', '0000-00-00 00:00:00'),
(97, 'Admin Pantau Sampah', 'admin', 'a6160f504775ad2505783ab57ba5cff7', 'pantau_sampah@official.com', 'Admin Pantau Sampah', '2016-09-03', 'male', 1, '2016-06-05 11:38:28', '2016-06-05 13:45:15');

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
