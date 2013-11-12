-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2013 at 03:31 PM
-- Server version: 5.5.31
-- PHP Version: 5.4.4-14+deb7u5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seclubnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `time` int(11) NOT NULL,
  `location` varchar(60) NOT NULL,
  `brief_intro` varchar(140) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `time`, `location`, `brief_intro`, `description`) VALUES
(1, 'First Event', 1383060157, 'ITB 235', 'This is the first event', 'An amazing first event. Please bring things to this event.'),
(2, 'Second Event', 1383061448, 'ITB 235', 'This is the first event', 'An amazing first event. Please bring things to this event.');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `brief_intro` text NOT NULL,
  `full_text` text NOT NULL,
  `display_date` datetime NOT NULL,
  `end_publish_date` datetime NOT NULL,
  `published` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `brief_intro`, `full_text`, `display_date`, `end_publish_date`, `published`) VALUES
(1, 'News Story 1', 'News Story 1\r\nNews Story 1\r\nNews Story 1', 'News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1', '2013-10-01 00:00:00', '2022-10-03 00:00:00', 1),
(2, 'News Story 2', 'News Story 2\r\nNews Story 2\r\nNews Story 2', 'News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1', '2013-10-01 00:00:00', '2022-10-03 00:00:00', 1),
(3, 'News Story 3', 'News Story 3\r\nNews Story 3\r\nNews Story 3', 'News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1', '2013-10-01 00:00:00', '2022-10-03 00:00:00', 1),
(4, 'News Story 4', 'News Story 4\r\nNews Story 4\r\nNews Story 4', 'News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1News Story 1', '2013-10-01 00:00:00', '2022-10-03 00:00:00', 1),
(6, 'testt', '<p>here is a breif introduction</p>\r\n', '<p>asdasdad</p>\r\n', '2013-10-16 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE IF NOT EXISTS `tutorials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `date` int(11) NOT NULL,
  `host` varchar(100) NOT NULL,
  `brief_intro` varchar(140) NOT NULL,
  `description` text NOT NULL,
  `equipment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tutorials`
--

INSERT INTO `tutorials` (`id`, `name`, `date`, `host`, `brief_intro`, `description`, `equipment`) VALUES
(1, 'LaTeX Tutorial', 1382643000, 'Aimal K', '<p>Brief Introduction</p>\r\n', '<p>Here is another&nbsp;</p>\r\n', 'asdasdd,asdasasd,Calculator'),
(2, 'LaTex Tutorial', 1382643000, 'Aimal K', '<p>Brief Introduction</p>\r\n', '<p>Here is another&nbsp;</p>\r\n', 'asdasdd'),
(3, 'LaTex Tutorial', 1382643000, 'Aimal K', '<p>Brief Introduction</p>\r\n', '<p>Here is another&nbsp;</p>\r\n', 'asdasdd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `password`, `email`) VALUES
(1, 'Mathew', 'Artemenko', '$2y$08$Gl3JUbHv5Kfo.fAkD7mnZ.kYn13pARufsT11JJzHbT2UoVIXbDEa2', 'mat@mcmaster.ca');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
