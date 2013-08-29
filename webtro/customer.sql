-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2013 at 01:11 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tro`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cus_id` int(10) NOT NULL AUTO_INCREMENT,
  `cus_name` varchar(50) NOT NULL,
  `cus_lname` varchar(50) NOT NULL,
  `cus_address` varchar(100) NOT NULL,
  `cus_tel` varchar(12) NOT NULL,
  PRIMARY KEY (`cus_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_name`, `cus_lname`, `cus_address`, `cus_tel`) VALUES
(2, 'test_name2', 'test_lname2', 'test_address2', 'test_tel2'),
(11, 'test_name7', 'test_lname7', 'test_address7', 'test_tel7'),
(3, 'test_name4', 'test_lname4', 'test_address4', 'test_tel4'),
(4, 'test_name5', 'test_lname5', 'test_address5', 'test_tel5'),
(5, 'test_name6', 'test_lname6', 'test_address6', 'test_tel6');
