-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 03:10 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+05:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rosca`
--
CREATE DATABASE IF NOT EXISTS `shops` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci


USE `shops`;

-- --------------------------------------------------------

--
-- Table structure for table `backup`
--

CREATE TABLE IF NOT EXISTS `backup` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `BackupFileName` varchar(15) NOT NULL,
  `BackupDate` varchar(12) NOT NULL,
  `BackupStatus` int(11) NOT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `shopcontacts` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Activity` varchar(50) NOT NULL,
  `PhoneNumber` varchar(250) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Password` varchar(2) NOT NULL,
  `Status` varchar(15) NOT NULL,
  `OfficialTitle` varchar(150) NOT NULL,
  `BriefNotes` text NOT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `shopitems` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `Item` varchar(60) DEFAULT NULL,
  `Status` varchar(15) NOT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `shopost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `content` longtext NOT NULL,
  `PublishedDate` date NOT NULL,
  `PublishedBy` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `shopsales` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Item` varchar(150) NOT NULL,
  `Cost` varchar(50) NOT NULL,
  `Remark` varchar(250) NOT NULL,
  `Balance` varchar(50) NOT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `shoptasks` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `DueDate` varchar(15) NOT NULL,
  `Activity` varchar(150) NOT NULL,
  `Remarks` varchar(150) NOT NULL,
  `Status` varchar(150) NOT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `shopusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `PassSalt` text NOT NULL,
  `contact` varchar(50) NOT NULL,
  `CLOR` int(11) NOT NULL,
  `rekey` varchar(250) NOT NULL,
  `expDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

CREATE TABLE IF NOT EXISTS `userlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` varchar(250) NOT NULL,
  `user_ip_address` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_agent` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `LoginStatus` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `LogoutStatus` varchar(25) NOT NULL,
  `LoginTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LogoutTime` datetime NOT NULL,
  `UserSessionID` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;