-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 25, 2018 at 03:47 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `expences`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat_tbl`
--

CREATE TABLE IF NOT EXISTS `cat_tbl` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(20) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `cat_tbl`
--

INSERT INTO `cat_tbl` (`cat_id`, `cat_name`) VALUES
(1, 'Petrol'),
(2, 'Food'),
(3, 'Bills'),
(4, 'Grocery'),
(5, 'Entertaiment'),
(6, 'Shopping'),
(7, 'Travel'),
(8, 'Miscellaneous');

-- --------------------------------------------------------

--
-- Table structure for table `expences_tbl`
--

CREATE TABLE IF NOT EXISTS `expences_tbl` (
  `expences_id` int(11) NOT NULL AUTO_INCREMENT,
  `expences_name` varchar(20) NOT NULL,
  `fk_cat_id` int(5) NOT NULL,
  `fk_user_id` int(5) NOT NULL,
  `expences_amnt` int(5) NOT NULL,
  `day` int(5) NOT NULL,
  `month` varchar(20) NOT NULL,
  PRIMARY KEY (`expences_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `expences_tbl`
--

INSERT INTO `expences_tbl` (`expences_id`, `expences_name`, `fk_cat_id`, `fk_user_id`, `expences_amnt`, `day`, `month`) VALUES
(30, 'Bills', 3, 7, 1000, 17, 'February'),
(31, 'Food', 2, 7, 250, 25, 'February'),
(32, 'Entertainment', 5, 7, 350, 1, 'January'),
(33, 'Petrol', 1, 7, 200, 1, 'July'),
(34, 'Grocery', 4, 7, 200, 1, 'August'),
(35, 'Miscellaneous', 8, 7, 120, 16, 'May'),
(36, 'Miscellaneous', 8, 7, 100, 1, 'September');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE IF NOT EXISTS `user_tbl` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_photo` varchar(50) NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `user_name`, `user_email`, `user_password`, `user_photo`, `user_gender`) VALUES
(7, 'Priyansh', 'priyanshsheth1997@gmail.com', 'Priyansh@25', 'userphoto/Screenshot (49).png', 'Male');
