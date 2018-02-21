-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2018 at 01:28 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cat_tbl`
--

INSERT INTO `cat_tbl` (`cat_id`, `cat_name`) VALUES
(1, 'Petrol'),
(2, 'Cloth');

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
  `month` int(5) NOT NULL,
  PRIMARY KEY (`expences_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `expences_tbl`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `user_name`, `user_email`, `user_password`, `user_photo`, `user_gender`) VALUES
(2, 'sp', 'sp', 'sp', 's', 'sp'),
(3, 'name', 'email', 'pwd', 'photo', 'gender'),
(4, 'Priyansh', 'priyanshsheth1997@gmail.com', 'Priyansh', 'userphoto/Screenshot (48).png', 'Male');
