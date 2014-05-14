-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2014 at 11:54 AM
-- Server version: 5.5.30
-- PHP Version: 5.4.19

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
-- Table structure for table `course_names`
--

CREATE TABLE IF NOT EXISTS `course_names` (
  `code` varchar(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `course_names`
--

INSERT INTO `course_names` (`code`, `name`, `id`) VALUES
('2AA4', 'Software Design I', 1),
('2C03', 'Data Structures and Algorithms', 2),
('2DA4', 'Digital Circuits and Logic', 3),
('2DM3', 'Discrete Math I', 4),
('2FA3', 'Discrete Math II', 5),
('2MX3', 'Systems and Signals', 6),
('2S03', 'Principles of Programming', 7),
('3A04', 'Software Design II', 8),
('3BB4', 'Software Design III', 9),
('3DX4', 'Dynamic Models and Control', 10),
('3F03', 'Machine-level Programming', 11),
('3GA3', 'Computer Architecture', 12),
('3GB3', 'Virtual Reality Modelling (G.D)', 13),
('3GC3', 'Computer Graphics (G.D)', 14),
('3I03', 'Communication Skills', 15),
('3K04', 'Software Development', 16),
('3RA3', 'Requirements and Security', 17),
('3S03', 'Testing and Management', 18),
('3SH3', 'Operating System', 19),
('3X03', 'Computation and Simulation', 20),
('4AA4', 'Real-time Systems', 21),
('4C03', 'Computer Networks and Security', 22),
('4DB3', 'Databases', 23),
('4E03', 'Performance Analysis', 24),
('4F03', 'Distributed Computer Systems', 25),
('4G06', 'Capstone', 26),
('4GC3', 'HUMANS (G.D)', 27),
('4GP6', 'Capstone (G.D)', 28),
('4HC3', 'HUMANS AND COMPUTERS (G.D)', 29),
('4J03', 'Communications Systems', 30),
('4O03', 'Operations Research', 31),
('4TE3', 'Continuous Optimization Algorithms', 32);

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
-- Table structure for table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fileName` varchar(40) NOT NULL,
  `courseCode` varchar(4) NOT NULL,
  `authorName` varchar(40) NOT NULL,
  `date` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `file_description` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `fileName`, `courseCode`, `authorName`, `date`, `address`, `file_description`) VALUES
(1, 'wiw intensifies.gif', '2AA4', 'James Priebe', 1389237476, 'C:\\xampp\\htdocs\\sandbox\\app\\storage', 'such html');

-- --------------------------------------------------------

--
-- Table structure for table `textbooks`
--

CREATE TABLE IF NOT EXISTS `textbooks` (
  `Title` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Course` varchar(255) NOT NULL,
  `Cond` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `ISBN` varchar(255) NOT NULL,
  `Edition` varchar(255) NOT NULL,
  `Picture` text NOT NULL,
  `Date` date NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `textbooks`
--

INSERT INTO `textbooks` (`Title`, `Description`, `Course`, `Cond`, `Price`, `ISBN`, `Edition`, `Picture`, `Date`, `id`) VALUES
('algorithms', 'afgafaedzdfd', '2c03', 'awesome', 600, '123456787654321', '2', '', '2014-01-08', 16),
('dfsfgdsshbgdhdthd', 'segsgtrthhedh', 'e34t34g', 'gdbsgbdnbdgd', 233, '34567654321', '5', '', '2014-01-08', 17),
('wertyui', 'asdfg', '24tg', 'bad', 44, '123456778456', '2', '', '2014-01-08', 18),
('sdafghgfdsa', '32334rwfsdfsf', '123ewde', 'goood', 12, '8765432123456781232', '2', '', '2014-01-10', 19),
('testtesttest', 'testtesttest', 'testtesttest', 'testtesttest', 45, '123123123123123123', '-4', '', '2014-02-28', 20);

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
(2, 'Intro to Android', 1389238530, 'Thusanthan Kannan', 'Setting up the Android SDK', '<p>\r\n    After setting up the SDK:\r\n</p>\r\n<p>\r\n    Create new Android Project File. Make sure your minimum SDK is at most your version of Android on your phone, so that you can ensure your phone Android\r\n    version can handle your app.\r\n</p>\r\n<p>\r\n    Keep programs in /src/package. This is the source package.\r\n</p>\r\n<p>\r\n    For each program, make a new layout file under /res/layout/program.xml. XML files control the layout of each “page” of your application.\r\n</p>\r\n<p>\r\n    When you want to see the graphical layout, there’s a tab at the bottom where you can view that. This toggles between viewing the visual layout and the code\r\n    representation of that visual layout. From the visual layout you can see buttons, text fields, etc. Double clicking on one of these elements brings you to\r\n    the relevant code in the code representation.\r\n</p>\r\n<p>\r\n    There are many folders called res/drawable-blah where res is short for resources.\r\n</p>\r\n<p>\r\n    Each is for a different resolution, since there are many potential resolutions in Android. For example drawable-hdpi is for hdpi(HiDef) image files. MP for\r\n    med, LP for low. Drop any pictures into every single drawable folder. Your higher resolution images could go into the respective resolution folders.\r\n</p>\r\n<p>\r\n    String values and text should be saved in the .xml file (similar to website layouts). For strings, there is a seperate file containing your strings\r\n    descriptions called “strings.xml”. For each string it has a reference name and a value. The name is how you refer to it, such as “user_Name”, and the value\r\n    is what the string is, such as “Enter Your Username:”\r\n</p>\r\n<p>\r\n    Buttons, radio buttons, etc. can often be done from pre-set forms built into the ADK. Just drag the element over and change the fields/values to what you\r\n    want.\r\n</p>\r\n<p>\r\n    Two types of layouts:\r\n</p>\r\n<p>\r\n    1. Linear layout:\r\n</p>\r\n<p>\r\n     - Only one thing can sit on the same horizontal line\r\n</p>\r\n<p>\r\n    - benefit: less computing power\r\n</p>\r\n<p>\r\n    2. Relative layout:\r\n</p>\r\n<p>\r\n    - percentage of screen\r\n</p>\r\n<p>\r\n    Intent objects pass information onwards to different classes:\r\n</p>\r\n<p>\r\n    private void DirectionsMenuItem(){\r\n</p>\r\n<p>\r\n    Intent dirActivity;\r\n</p>\r\n<p>\r\n    dirActivity = new Intent(getApplicationContext(), Directions.class);\r\n</p>\r\n<p>\r\n    startActivity(dirActivity);\r\n</p>\r\n<p>\r\n    }\r\n</p>\r\n<p>\r\n    <a href="http://stackoverflow.com/">Stackoverflow.com</a>\r\n    is a very valuable resource for answers to questions\r\n</p>\r\n<p>\r\n    <strong>TK’s Databases stuff</strong>\r\n</p>\r\n<p>\r\n    <em>Brute-force method that works alright</em>\r\n    . You may want to improve on this, especially if you have a big database, but it’s a good start.\r\n</p>\r\n<p>\r\n    Note: the virtual Android ROM is very slow, so optimally get an Android phone, but if you don’t have one. Also, the camera won’t work:\r\n</p>\r\n<p>\r\n    1. Window&gt;Android Virtual Device Manager\r\n</p>\r\n<p>\r\n    2. New\r\n</p>\r\n<p>\r\n    3. Change the amount of RAM (preferably an older[, faster] firmware)&gt;Ok\r\n</p>\r\n<p>\r\n    4. Highlight the Device\r\n</p>\r\n<p>\r\n    5. Start\r\n</p>\r\n<p>\r\n    <a href="https://developer.android.com/training/basics/supporting-devices/languages.html">Supporting different languages</a>\r\n    .\r\n</p>\r\n', 'Android SDK'),
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
  `confirmation` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `password`, `email`, `confirmation`) VALUES
(1, 'Mathew', 'Artemenko', '$2y$08$Gl3JUbHv5Kfo.fAkD7mnZ.kYn13pARufsT11JJzHbT2UoVIXbDEa2', 'mat@mcmaster.ca', b'0'),
(3, 'James', 'Priebe', '$2y$08$bp0NUhtO3dvXVzAxb2iIgeuUIITakgy.YQFbAz0flQYByJlccT6sS', 'priebejp@mcmaster.ca', b'1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
