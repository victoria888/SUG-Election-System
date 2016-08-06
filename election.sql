-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2016 at 02:04 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `election`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `username` varchar(11) DEFAULT NULL,
  `password` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`adminId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `name`, `username`, `password`) VALUES
(1, 'Chidinma', 'admin', 'admin'),
(2, 'chibuike', 'chibyke', 'chibuike'),
(3, 'victor', 'victor', 'victor');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE IF NOT EXISTS `candidate` (
  `candidateID` int(10) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `level` varchar(3) NOT NULL,
  `department` varchar(30) NOT NULL,
  `cgpa` double NOT NULL,
  `manifesto` varchar(300) NOT NULL,
  PRIMARY KEY (`candidateID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidateID`, `Fname`, `Lname`, `sex`, `level`, `department`, `cgpa`, `manifesto`) VALUES
(1, 'Chibuzo', 'Ebuka', 'male', '300', 'Pharmacy', 4.21, 'optimum responsibility'),
(2, 'Nonso', 'Nneka', 'female', '300', 'Pharmacy', 3.57, 'i will put street lights\n'),
(16, 'Ekemam', 'Ngozi', 'male', '300', 'HSND', 4.02, 'i''ll fulfil my duty as the treasurer'),
(17, 'Egwu', 'Chidera', 'female', '400', 'vertinary medicine', 4.11, 'keeping records, ensuring validity'),
(18, 'Edeh', 'Onyinye', 'female', '300', 'PALG', 3.59, 'Keeping financial record is my aim'),
(19, 'Eze', 'George', 'male', '300', 'political science', 3.87, 'i will supply water'),
(20, 'Ene', 'Princess', 'female', '200', 'political science', 3.87, 'i will supply water'),
(21, 'Ogwuru', 'Queen', 'female', '200', 'political science', 3.87, 'i will supply water'),
(22, 'Ogochukwu', 'Ingred', 'female', '300', 'Pharmacy', 3.65, 'keeping our money i will do'),
(23, 'Adedeji', 'Pedro', 'male', '400', 'FST', 3.65, 'i alway carry out my duties'),
(24, 'Obiasogu', 'Precious', 'female', '400', 'FST', 3.65, 'i alway carry out my duties'),
(25, 'Adaeze', 'Chinaza', 'female', '200', 'Physics', 3.9, 'success is my achievement');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_post`
--

CREATE TABLE IF NOT EXISTS `candidate_post` (
  `candidateID` int(10) NOT NULL,
  `postID` int(10) NOT NULL,
  `session` varchar(10) NOT NULL DEFAULT '2015/2016'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_post`
--

INSERT INTO `candidate_post` (`candidateID`, `postID`, `session`) VALUES
(1, 1, '2015/2016'),
(2, 2, '2015/2016'),
(16, 3, '2015/2016'),
(17, 3, '2015/2016'),
(18, 4, '2015/2016'),
(19, 1, '2015/2016'),
(20, 2, '2015/2016'),
(21, 4, '2015/2016'),
(22, 3, '2015/2016'),
(24, 4, '2015/2016'),
(23, 1, '2015/2016'),
(25, 3, '2015/2016');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `postID` int(10) NOT NULL AUTO_INCREMENT,
  `position` varchar(50) NOT NULL,
  `PostDescription` varchar(550) NOT NULL,
  `DateCreated` date NOT NULL,
  PRIMARY KEY (`postID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postID`, `position`, `PostDescription`, `DateCreated`) VALUES
(1, 'President', 'He is the head of the SUG, and sits to the affairs of the student', '2016-06-01'),
(2, 'Vice-president', 'He/she assists the president to perform his duty', '2016-06-01'),
(3, 'Treasurer', 'He/she is responsible for keeping the money for use ', '2016-06-03'),
(4, 'Financial secretary', 'Takes of every monetary aspect. ', '2016-06-08'),
(5, 'Director of Socials', 'he directs every social activity in school', '2016-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE IF NOT EXISTS `voter` (
  `voterid` int(12) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Matricno` varchar(11) NOT NULL,
  `Level` varchar(5) NOT NULL,
  `Faculty` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Phoneno` varchar(11) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `votepresident` tinyint(1) NOT NULL DEFAULT '0',
  `votevp` tinyint(1) NOT NULL DEFAULT '0',
  `votetreasurer` tinyint(1) NOT NULL DEFAULT '0',
  `votefinsec` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`voterid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`voterid`, `Fname`, `Lname`, `Email`, `Sex`, `Matricno`, `Level`, `Faculty`, `Department`, `Phoneno`, `Password`, `votepresident`, `votevp`, `votetreasurer`, `votefinsec`) VALUES
(8, 'Okolie', 'chidinma', 'chidinmachidi@gmail.com', 'Male', '2012/181111', '100', 'Agriculture', 'fishery', '08063424922', 'chidinma', 1, 1, 1, 1),
(9, 'Illo', 'Chidinma', 'illochidinma@yahoo.com', 'Female', '2012/181555', '300', 'agric', 'TFS', '08094949454', 'illo', 1, 1, 1, 1),
(11, 'Edeh', 'Onyinye', 'edehonyi@hotmail.com', 'Female', '2012/181112', '300', 'arts', 'linguistics', '08063424921', 'edeh', 1, 1, 1, 1),
(12, 'Eze', 'Chinenye', 'egwuatuchidinma@gmail.com', 'Female', '2012/182222', '300', 'Social sciences', 'PALG', '08034675643', 'eze', 0, 0, 0, 0),
(13, 'Eze', 'Chinenye', 'egwuatuchidinma@gmail.com', 'Female', '2012/182222', '300', 'Social sciences', 'PALG', '08034675643', 'eze', 1, 1, 1, 1),
(14, 'Okwara', 'Godswill', 'gondylife@yahoo.com', 'Male', '2009/163812', '400', 'phy', 'Computer Science', '08035134649', 'password13', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE IF NOT EXISTS `votes` (
  `voterid` int(10) NOT NULL,
  `candidateID` int(10) NOT NULL,
  `postID` int(10) NOT NULL,
  `session` varchar(10) NOT NULL DEFAULT '2015/2016'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`voterid`, `candidateID`, `postID`, `session`) VALUES
(8, 1, 1, '2015/2016'),
(8, 2, 2, '2015/2016'),
(8, 16, 3, '2015/2016'),
(8, 18, 4, '2015/2016'),
(11, 1, 1, '2015/2016'),
(11, 2, 2, '2015/2016'),
(11, 17, 3, '2015/2016'),
(11, 18, 4, '2015/2016'),
(9, 1, 1, '2015/2016'),
(9, 2, 2, '2015/2016'),
(9, 16, 3, '2015/2016'),
(9, 18, 4, '2015/2016'),
(0, 1, 1, '2015/2016'),
(13, 19, 1, '2015/2016'),
(13, 20, 2, '2015/2016'),
(13, 17, 3, '2015/2016'),
(13, 21, 4, '2015/2016'),
(14, 19, 1, '2015/2016'),
(14, 2, 2, '2015/2016'),
(14, 17, 3, '2015/2016'),
(14, 24, 4, '2015/2016');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
