-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 26, 2022 at 04:52 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agri`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumini`
--

DROP TABLE IF EXISTS `alumini`;
CREATE TABLE IF NOT EXISTS `alumini` (
  `slno` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `college` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `occupation` varchar(250) NOT NULL,
  `organization` varchar(250) NOT NULL,
  `o_address` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `pin` int(10) NOT NULL,
  `country` varchar(250) NOT NULL,
  `p_address` varchar(250) NOT NULL,
  `p_state` varchar(250) NOT NULL,
  `p_pin` int(10) NOT NULL,
  `p_country` varchar(250) NOT NULL,
  `nationality` varchar(250) NOT NULL,
  `blood_group` varchar(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `graduation` varchar(250) NOT NULL,
  `year_of_adm` varchar(250) NOT NULL,
  `year_of_pass` varchar(250) NOT NULL,
  `masters` varchar(250) NOT NULL,
  `year_of_m_adm` varchar(250) NOT NULL,
  `year_of_m_pass` varchar(250) NOT NULL,
  `m_discipline` varchar(250) NOT NULL,
  `doctoral` varchar(250) NOT NULL,
  `year_of_d_adm` varchar(250) NOT NULL,
  `year_of_d_pass` varchar(250) NOT NULL,
  `doc_decipline` varchar(250) NOT NULL,
  `photo` varchar(250) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumini`
--

INSERT INTO `alumini` (`slno`, `name`, `college`, `gender`, `dob`, `occupation`, `organization`, `o_address`, `state`, `pin`, `country`, `p_address`, `p_state`, `p_pin`, `p_country`, `nationality`, `blood_group`, `email`, `phone`, `graduation`, `year_of_adm`, `year_of_pass`, `masters`, `year_of_m_adm`, `year_of_m_pass`, `m_discipline`, `doctoral`, `year_of_d_adm`, `year_of_d_pass`, `doc_decipline`, `photo`) VALUES
(1, 'Pragyat Baruah', 'JEC', 'Male', '23/09/1995', 'SE', 'Uber', 'Delhi', 'Delhi', 786551, 'India', 'Delhi', 'Delhi', 786551, 'Delhi', 'Indian', 'B+', 'pb123@gmail.com', '987654322', 'BSC IT', '2012', '2015', 'MCA', '2016', '2019', 'MCA', 'None', 'none', 'none', 'none', 'image.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `fac_id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(233) NOT NULL,
  `dept` varchar(233) NOT NULL,
  `year` int(233) NOT NULL,
  `email` varchar(233) NOT NULL,
  `phone` varchar(233) NOT NULL,
  `addr` varchar(233) NOT NULL,
  PRIMARY KEY (`fac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fac_id`, `name`, `dept`, `year`, `email`, `phone`, `addr`) VALUES
(1, 'Ashish Nath', 'Economic', 2014, 'ashish@gamil.com', '9876543221', 'Jorhat'),
(2, 'Mr. Dhruba Jyoti Bora', 'Botany', 2018, 'dhbjb@gmail.com', '9988776654', 'Jorhat');

-- --------------------------------------------------------

--
-- Table structure for table `send_email`
--

DROP TABLE IF EXISTS `send_email`;
CREATE TABLE IF NOT EXISTS `send_email` (
  `em_id` int(15) NOT NULL AUTO_INCREMENT,
  `email` varchar(233) NOT NULL,
  `password` varchar(233) NOT NULL,
  PRIMARY KEY (`em_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `send_email`
--

INSERT INTO `send_email` (`em_id`, `email`, `password`) VALUES
(1, 'a@a.a', 'asdfe'),
(2, 'ashishnath098@gmail.com', 'E2cUIXXBXJ'),
(3, 'ashishnath098@gmail.com', 'E2cUIXXBXJ'),
(4, 'ashish@gmail.com', 'naMK3yifZk'),
(5, 'ashishnath098@gmail.com', 'NnEZZeDWW1');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `std_id` int(233) NOT NULL AUTO_INCREMENT,
  `name` varchar(233) NOT NULL,
  `branch` varchar(233) NOT NULL,
  `year` varchar(233) NOT NULL,
  `email` varchar(233) NOT NULL,
  `phone` varchar(233) NOT NULL,
  `addr` varchar(233) NOT NULL,
  PRIMARY KEY (`std_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`std_id`, `name`, `branch`, `year`, `email`, `phone`, `addr`) VALUES
(1, 'Pragyat Baruah', 'Economics', '2022', 'pbaruah23@gmail.com', '9876543211', 'Jorhat'),
(2, 'Nibir Bora', 'Economics', '2019', 'nibir@gmail.com', '9876543222', 'Guwahati');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
