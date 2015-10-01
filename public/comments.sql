-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2015 at 01:39 AM
-- Server version: 5.1.40
-- PHP Version: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `comments`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `hashed_password` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `hashed_password`) VALUES
(1, 'admin', 123);

-- --------------------------------------------------------

--
-- Table structure for table `comments_add`
--

CREATE TABLE IF NOT EXISTS `comments_add` (
  `comments_id` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `main_text` text NOT NULL,
  `data` datetime NOT NULL,
  `foto` varchar(200) NOT NULL,
  `admin_order` tinyint(3) NOT NULL DEFAULT '0',
  `admin_rewright` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`comments_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `comments_add`
--

INSERT INTO `comments_add` (`comments_id`, `username`, `email`, `main_text`, `data`, `foto`, `admin_order`, `admin_rewright`) VALUES
(78, 'Viktor', 'borysyukviktor@gmail.com', 'повинно бутии усе чітко з попереднім переглядом', '2015-09-30 12:04:41', '', 0, 0),
(83, 'Олежко', 'oleg@gmail.com', 'коментарій', '2015-09-30 14:59:40', '', 0, 0),
(85, 'Олежко', 'oleg@gmail.com', 'коментарій', '2015-09-30 15:01:50', '', 0, 0),
(84, 'Олежко', 'oleg@gmail.com', 'коментарій', '2015-09-30 15:00:27', '', 0, 0),
(82, 'Олежко', 'oleg@gmail.com', 'коментарій', '2015-09-30 14:58:51', '', 0, 0),
(81, 'Саша', 'dorian@mail', 'спробувать сортувати', '2015-09-30 14:42:41', '', 0, 0),
(79, 'Антон', 'bordo@mail', 'на а  імя на б імейл', '2015-09-30 14:39:24', '', 0, 0),
(80, 'Богдан', 'aron@mail', 'на б  імя на а імейл', '2015-09-30 14:40:43', '', 0, 0);
