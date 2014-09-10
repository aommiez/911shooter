-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `911`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `dj`
--

CREATE TABLE IF NOT EXISTS `dj` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `ig` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL,
  `levels` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- dump ตาราง `dj`
--

INSERT INTO `dj` (`id`, `user`, `pass`, `display_name`, `profile`, `fb`, `ig`, `tw`, `levels`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'DJ Korn', 'bla bla bla', 'https://www.facebook.com/911shooter', 'https://www.facebook.com/911shooter', 'https://www.facebook.com/911shooter', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
