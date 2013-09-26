-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 26, 2013 at 12:06 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `position` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `email`, `position`) VALUES
(2, 'billenks', 'yupyupyup', 'billenks@mcmaster.ca', 'Webmaster');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT 'name of post',
  `author` varchar(20) NOT NULL COMMENT 'author or post',
  `date` datetime NOT NULL COMMENT 'date / time of post',
  `blurb` text NOT NULL COMMENT 'slug',
  `content` text NOT NULL COMMENT 'content',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `author`, `date`, `blurb`, `content`) VALUES
(29, '1ST POST', 'billenks', '2013-09-22 23:22:45', '', 'lksjdfljsadlk		\r\n	'),
(31, '2ND POST', 'billenks', '2013-09-22 23:22:52', '', 'askjdflkasjdf		\r\n	'),
(33, '3RD POST', 'billenks', '2013-09-22 23:23:05', '', 'ASLK:JDFLAKSJDFLAKSJDF		\r\n	'),
(35, '4TH POST', 'billenks', '2013-09-22 23:23:43', '', 'This fourth post was made to explain to you that after three posts, more pages are created. That will allow the page to not get cluttered with all of the news items.		\r\n	');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
