-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 03, 2021 at 12:50 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lrg`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pics`
--

DROP TABLE IF EXISTS `tbl_pics`;
CREATE TABLE IF NOT EXISTS `tbl_pics` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pics`
--

INSERT INTO `tbl_pics` (`id`, `name`, `description`, `image`) VALUES
(1, 'gallery pic 1', '', 'thumbnail_IMG_0497.jpg'),
(2, 'Gallery pic 2 ', '', 'thumbnail_IMG_0571.jpg'),
(3, '', '', 'thumbnail_IMG_0667.jpg'),
(4, 'Gallery pic 4', '', 'thumbnail_IMG_0753.jpg'),
(5, 'Gallery pic 5', '', 'thumbnail_IMG_0765.jpg'),
(6, 'Gallery pic 6', '', 'thumbnail_IMG_0813.jpg'),
(7, 'Gallery pic 7', '', 'thumbnail_IMG_0836.jpg'),
(8, 'Gallery pic 8', '', 'thumbnail_IMG_0899.jpg'),
(9, 'Gallery pic 9', '', 'thumbnail_IMG_0901.jpg'),
(10, 'Gallery pic 10', '', 'thumbnail_IMG_0944.jpg'),
(11, 'Gallery pic 11', '', 'thumbnail_IMG_0946.jpg'),
(12, 'Gallery pic 12', '', 'thumbnail_IMG_0947.jpg'),
(13, 'Gallery pic 13', '', 'thumbnail_IMG_0996.jpg'),
(14, 'Gallery pic 14', '', 'thumbnail_IMG_1010.jpg'),
(15, 'Gallery pic 15', '', 'thumbnail_IMG_1042.jpg'),
(16, 'Gallery pic 16', '', 'thumbnail_IMG_1045.jpg'),
(17, 'Gallery pic 17', '', 'thumbnail_IMG_9297.jpg'),
(18, 'Gallery pic 18', '', 'thumbnail_IMG_9329.jpg'),
(19, 'Gallery pic 19', '', 'thumbnail_IMG_9388.jpg'),
(20, 'Gallery pic 20', '', 'thumbnail_IMG_9506.jpg'),
(21, 'Gallery pic 21', '', 'thumbnail_IMG_9600.jpg'),
(22, 'Gallery pic 22', '', 'thumbnail_IMG_9609.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(250) NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_level` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_level`) VALUES
(1, 'test', 'admin', 'edit', 'admin@gmail.com', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
