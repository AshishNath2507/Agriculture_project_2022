-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 08:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `slno` int(11) NOT NULL,
  `uname` varchar(233) NOT NULL,
  `pswd` varchar(233) NOT NULL,
  `fname` varchar(233) NOT NULL,
  `lname` varchar(233) NOT NULL,
  `status` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`slno`, `uname`, `pswd`, `fname`, `lname`, `status`) VALUES
(1, 'admin', 'asdf', 'ASHISH', 'NATH', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `alumini`
--

CREATE TABLE `alumini` (
  `slno` int(10) NOT NULL,
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
  `doc_discipline` varchar(250) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumini`
--

INSERT INTO `alumini` (`slno`, `name`, `college`, `gender`, `dob`, `occupation`, `organization`, `o_address`, `state`, `pin`, `country`, `p_address`, `p_state`, `p_pin`, `p_country`, `nationality`, `blood_group`, `email`, `phone`, `graduation`, `year_of_adm`, `year_of_pass`, `masters`, `year_of_m_adm`, `year_of_m_pass`, `m_discipline`, `doctoral`, `year_of_d_adm`, `year_of_d_pass`, `doc_discipline`, `photo`) VALUES
(5, 'Ashish Nath', 'jorhat e c', 'male', '2022-04-13', 'studend', 'jec', 'jorhat', 'assam', 785001, 'india', 'jorhat', 'assam', 785001, 'india', 'indian', 'A+', 'aaa@s.com', '9876543210', 'jlkfasdjfl', '2009', '2341', 'mca', '2004', '2011', 'asdf', 'afsdf', '2021', '2015', 'asdfqwer', 'uploads/62509313741192.32263796.jpg'),
(10, 'Pragyat Baruah', 'jec', 'male', '0001-11-11', 'student', 'jeccccccccc', 'adjfaasaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'jorhat', 888888, 'jalsdjfj', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'assam', 0, 'jlajldfl', 'indian', 'A+', 'aaaaaaaaaaa@s.com', '909999999', 'bca', '2000', '2222', 'mca', '2018', '2001', 'jasdjflj', 'data mining', '2001', '2001', '1st', 'uploads/626dab416ba945.53572956.jpg'),
(11, 'aaaasdf', 'adafasdf', 'male', '2023-06-07', 'sdajhf', 'ioionni', 'iinkjgoiug', 'iugiugiu', 289799, 'iilklliu', 'iliblk', 'iubili', 899898, 'hjbjb', 'jjblk', 'A+', 'aaa@s.com', '8988888888', 'jkjkkl', '2000', '2000', 'aaa', '2001', '2002', 'kjnksfg', 'akjgo', '2003', '2003', 'aok;ngo;k', 'uploads/627508736a0399.35027881.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `alumnireg`
--

CREATE TABLE `alumnireg` (
  `slno` int(11) NOT NULL,
  `fname` varchar(233) NOT NULL,
  `email` varchar(233) NOT NULL,
  `pswd` varchar(233) NOT NULL,
  `status` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumnireg`
--

INSERT INTO `alumnireg` (`slno`, `fname`, `email`, `pswd`, `status`) VALUES
(4, 'ashish', 'ashishnath1998@gmail.com', '$2y$10$PpXwU6t6vQZabWwyQxGf/uGn4h6bXDR3qNOZpUU3DMOfS8aEhoPky', 'notverified'),
(7, 'ashish', 'ashishnath098@gmail.com', 'asdf', 'verified'),
(8, 'ashish', 'nathashish.1998@gmail.com', 'asdf', 'verified'),
(9, 'dsadfa', 'aaa@s.com', 'asdf', 'notverified');

-- --------------------------------------------------------

--
-- Table structure for table `azax`
--

CREATE TABLE `azax` (
  `id` int(11) NOT NULL,
  `year` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `potato` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `azax`
--

INSERT INTO `azax` (`id`, `year`, `month`, `potato`) VALUES
(1, '2019', 'JAN', '1290'),
(2, '2019', 'FEB', '1000'),
(3, '2019', 'MAR', '1300'),
(4, '2019', 'APR', '850'),
(5, '2019', 'MAY', '1200'),
(6, '2019', 'JUN', '1500'),
(7, '2019', 'JUL', '1100'),
(8, '2019', 'AUG', '1249'),
(9, '2019', 'SEPT', '1300'),
(10, '2019', 'OCT', '1235'),
(11, '2019', 'NOV', '800'),
(12, '2019', 'DEC', '1490'),
(13, '2020', 'JAN', '2000'),
(14, '2020', 'FEB', '1900'),
(15, '2020', 'MAR', '1950'),
(16, '2020', 'APR', '2019'),
(17, '2020', 'MAY', '2300'),
(18, '2020', 'JUN', '2200'),
(19, '2020', 'JUL', '2450'),
(20, '2020', 'AUG', '2500'),
(21, '2020', 'SEPT', '2140'),
(22, '2020', 'OCT', '2100'),
(23, '2020', 'NOV', '2234'),
(24, '2020', 'DEC', '2300'),
(25, '2021', 'JAN', '1500'),
(26, '2021', 'FEB', '1460'),
(27, '2021', 'MAR', '1420'),
(28, '2021', 'APR', '1540'),
(29, '2021', 'MAY', '1590'),
(30, '2021', 'JUN', '1300'),
(31, '2021', 'JUL', '1700'),
(32, '2021', 'AUG', '1600'),
(33, '2021', 'SEPT', '1350'),
(34, '2021', 'OCT', '1400'),
(35, '2021', 'NOV', '1450'),
(36, '2021', 'DEC', '1600');

-- --------------------------------------------------------

--
-- Table structure for table `coadmin`
--

CREATE TABLE `coadmin` (
  `slno` int(11) NOT NULL,
  `fname` varchar(233) NOT NULL,
  `lname` varchar(233) NOT NULL,
  `uname` varchar(233) NOT NULL,
  `email` varchar(233) NOT NULL,
  `pswd` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coadmin`
--

INSERT INTO `coadmin` (`slno`, `fname`, `lname`, `uname`, `email`, `pswd`) VALUES
(1, 'ashish', 'nath', 'cad', 'ashish@gmail.com', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(12) NOT NULL,
  `name` varchar(233) NOT NULL,
  `photo` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `name`, `photo`) VALUES
(1, 'asdf', 'asdf.jpg'),
(2, 'asdf', 'uploads/62509e40a66451.39067161.png');

-- --------------------------------------------------------

--
-- Table structure for table `excel_json`
--

CREATE TABLE `excel_json` (
  `ex_id` int(11) NOT NULL,
  `excel_file` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`excel_file`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `excel_json`
--

INSERT INTO `excel_json` (`ex_id`, `excel_file`) VALUES
(1, '[]'),
(2, '[]');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--
-- Error reading structure for table agri.faculty: #1932 - Table &#039;agri.faculty&#039; doesn&#039;t exist in engine
-- Error reading data for table agri.faculty: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `agri`.`faculty`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `jsonfiles`
--

CREATE TABLE `jsonfiles` (
  `xl_id` int(11) NOT NULL,
  `jfile` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`jfile`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jsonfiles`
--

INSERT INTO `jsonfiles` (`xl_id`, `jfile`) VALUES
(1, '[]');

-- --------------------------------------------------------

--
-- Table structure for table `send_email`
--

CREATE TABLE `send_email` (
  `em_id` int(15) NOT NULL,
  `email` varchar(233) NOT NULL,
  `password` varchar(233) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Table structure for table `sheet1`
--

CREATE TABLE `sheet1` (
  `id` int(11) NOT NULL,
  `DATE` varchar(255) DEFAULT NULL,
  `DISTRICT` varchar(255) DEFAULT NULL,
  `COMUDITY` varchar(255) DEFAULT NULL,
  `ARIVAL` varchar(255) DEFAULT NULL,
  `MIN PRICE` varchar(255) DEFAULT NULL,
  `MAX_PRICE` varchar(255) DEFAULT NULL,
  `MODEL_PRICE` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sheet1`
--

INSERT INTO `sheet1` (`id`, `DATE`, `DISTRICT`, `COMUDITY`, `ARIVAL`, `MIN PRICE`, `MAX_PRICE`, `MODEL_PRICE`) VALUES
(1, '2022-01-01', 'JORHAT', 'POTATO', '10', '1200', '1400', '1250'),
(2, '2022-01-01', 'JORHAT', 'ONION', '10', '1800', '2200', '2000'),
(3, '2022-01-02', 'SIVSAGAR', 'POTATO', '20', '1300', '1400', '1300'),
(4, '2022-01-02', 'GOLAGHAT', 'POTATO', '10', '1250', '1450', '1350'),
(5, '2022-01-02', 'SILCHAR', 'ONION', '20', '1900', '2300', '2100'),
(6, '2022-01-03', 'JORHAT', 'ONION', '15', '1750', '2100', '1900'),
(7, '2022-01-03', 'SIVSAGAR', 'POTATO', '30', '1250', '1450', '1300'),
(8, '2022-01-03', 'NAGAON', 'POTATO', '20', '1300', '1350', '1350'),
(9, '2022-01-03', 'GOLAGHAT', 'ONION', '18', '2000', '2100', '2000'),
(10, '2022-01-04', 'DIBRUGARH', 'POTATO', '40', '1100', '1250', '1150'),
(11, '2022-01-04', 'TINISUKIA', 'POTATO', '25', '1150', '1400', '1175'),
(12, '2022-01-06', 'JORHAT', 'ONION', '30', '2050', '2200', '2100'),
(13, '2022-01-06', 'NAGAON', 'ONION', '10', '1990', '2175', '2045'),
(14, '2022-01-07', 'SIVSAGAR', 'POTATO', '40', '1000', '1300', '1100'),
(15, '2022-01-07', 'GOLAGHAT', 'POTATO', '30', '1075', '1250', '1125'),
(16, '2022-01-09', 'SILCHAR', 'ONION', '32', '1995', '2400', '2175'),
(17, '2022-01-09', 'NAGAON', 'ONION', '25', '2000', '2300', '2150'),
(18, '2022-01-11', 'KARBI ALONG', 'ONION', '30', '1980', '2350', '2200'),
(19, '2022-01-12', 'JORHAT', 'POTATO', '50', '1100', '1200', '1150'),
(20, '2022-01-12', 'JORHAT', 'ONION', '30', '2000', '2350', '2175'),
(21, '2022-01-13', 'GOLAGHAT', 'POTATO', '37', '1067', '1200', '1134'),
(22, '2022-01-13', 'NAGAON', 'POTATO', '20', '1175', '1300', '1200'),
(23, '2022-01-14', 'TINISUKIA', 'ONION', '22', '1975', '2200', '2100'),
(24, '2022-01-14', 'SIVSAGAR', 'ONION', '5', '1900', '2000', '2000'),
(25, '2022-01-14', 'KARBI ALONG', 'POTATO', '50', '1000', '1200', '1100'),
(26, '2022-01-18', 'DIBRUGARH', 'ONION', '25', '2100', '2200', '2100'),
(27, '2022-01-18', 'DIBRUGARH', 'POTATO', '15', '1100', '1267', '1125'),
(28, '2022-01-20', 'JORHAT', 'POTATO', '30', '1300', '1400', '1300'),
(29, '2022-01-20', 'JORHAT', 'ONION', '29', '2010', '2200', '2050'),
(30, '2022-02-22', 'GOLAGHAT', 'POTATO', '20', '1250', '1400', '1275'),
(31, '2022-01-22', 'SIVSAGAR', 'POTATO', '15', '1200', '1350', '1247'),
(32, '2022-01-22', 'SIVSAGAR', 'ONION', '25', '2300', '2350', '2310'),
(33, '2022-01-24', 'NAGAON', 'POTATO', '30', '1200', '1375', '1250'),
(34, '2022-01-24', 'SILCHAR', 'ONION', '40', '2100', '2300', '2200'),
(35, '2022-01-24', 'KARBI ALONG', 'POTATO', '50', '1145', '1250', '1150'),
(36, '2022-01-24', 'JORHAT', 'POTATO', '30', '1200', '1300', '1200'),
(37, '2022-01-26', 'NAGAON', 'ONION', '29', '2200', '2300', '2200'),
(38, '2022-01-27', 'SILCHAR', 'POTATO', '30', '1220', '1300', '1240'),
(39, '2022-01-27', 'DIBRUGARH', 'POTATO', '20', '1200', '1350', '1300'),
(40, '2022-01-28', 'TINISUKIA', 'ONION', '40', '2175', '2400', '2240'),
(41, '2022-01-28', 'GOLAGHAT', 'ONION', '10', '1990', '2350', '2175'),
(42, '2022-01-28', 'JORHAT', 'POTATO', '50', '1100', '1250', '1200'),
(43, '2022-02-01', 'GOLAGHAT', 'POTATO', '10', '1200', '1400', '1200'),
(44, '2022-02-01', 'JORHAT', 'ONION', '10', '1800', '2200', '2100'),
(45, '2022-02-01', 'SIVSAGAR', 'POTATO', '20', '1300', '1400', '1350'),
(46, '2022-02-02', 'JORHAT', 'POTATO', '10', '1250', '1450', '1375'),
(47, '2022-02-02', 'SILCHAR', 'ONION', '20', '1900', '2300', '2190'),
(48, '2022-02-02', 'JORHAT', 'ONION', '15', '1750', '2100', '2000'),
(49, '2022-02-03', 'DIBRUGARH', 'POTATO', '30', '1250', '1450', '1300'),
(50, '2022-02-03', 'NAGAON', 'POTATO', '20', '1300', '1350', '1325'),
(51, '2022-02-03', 'GOLAGHAT', 'ONION', '18', '2000', '2100', '2050'),
(52, '2022-02-04', 'SIVSAGAR', 'POTATO', '40', '1100', '1250', '1150'),
(53, '2022-02-04', 'TINISUKIA', 'POTATO', '25', '1150', '1400', '1300'),
(54, '2022-02-05', 'JORHAT', 'ONION', '30', '2050', '2200', '2100'),
(55, '2022-02-06', 'SILCHAR', 'ONION', '10', '1990', '2175', '2150'),
(56, '2022-02-07', 'SIVSAGAR', 'POTATO', '40', '1000', '1300', '1275'),
(57, '2022-02-07', 'GOLAGHAT', 'POTATO', '30', '1075', '1250', '1125'),
(58, '2022-02-09', 'NAGAON', 'ONION', '32', '1995', '2400', '2255'),
(59, '2022-02-10', 'NAGAON', 'ONION', '25', '2000', '2300', '2150'),
(60, '2022-02-11', 'KARBI ALONG', 'ONION', '30', '1980', '2350', '2200'),
(61, '2022-02-13', 'JORHAT', 'POTATO', '50', '1100', '1200', '1150'),
(62, '2022-02-13', 'JORHAT', 'ONION', '30', '2000', '2350', '2175'),
(63, '2022-02-13', 'GOLAGHAT', 'POTATO', '37', '1067', '1200', '1150'),
(64, '2022-02-14', 'TINISUKIA', 'POTATO', '20', '1175', '1300', '1230'),
(65, '2022-02-14', 'NAGAON', 'ONION', '22', '1975', '2200', '2130'),
(66, '2022-02-16', 'SIVSAGAR', 'ONION', '5', '1900', '2000', '2000'),
(67, '2022-02-16', 'KARBI ALONG', 'POTATO', '50', '1000', '1200', '1150'),
(68, '2022-02-18', 'DIBRUGARH', 'ONION', '25', '2100', '2200', '2100'),
(69, '2022-02-18', 'DIBRUGARH', 'POTATO', '15', '1100', '1267', '1110'),
(70, '2022-02-20', 'JORHAT', 'POTATO', '30', '1300', '1400', '1375'),
(71, '2022-02-20', 'JORHAT', 'ONION', '29', '2010', '2200', '2100'),
(72, '2022-02-21', 'GOLAGHAT', 'POTATO', '20', '1250', '1400', '1350'),
(73, '2022-02-22', 'SIVSAGAR', 'POTATO', '15', '1200', '1350', '1247'),
(74, '2022-02-22', 'SIVSAGAR', 'ONION', '25', '2300', '2350', '2310'),
(75, '2022-02-23', 'NAGAON', 'POTATO', '30', '1200', '1375', '1250'),
(76, '2022-02-24', 'KARBI ALONG', 'ONION', '40', '2100', '2300', '2200'),
(77, '2022-02-24', 'SILCHAR', 'POTATO', '50', '1145', '1250', '1200'),
(78, '2022-02-25', 'JORHAT', 'POTATO', '30', '1200', '1300', '1230'),
(79, '2022-02-26', 'NAGAON', 'ONION', '29', '2200', '2300', '2200'),
(80, '2022-02-27', 'SILCHAR', 'POTATO', '30', '1220', '1300', '1240'),
(81, '2022-02-27', 'DIBRUGARH', 'POTATO', '20', '1200', '1350', '1300'),
(82, '2022-02-28', 'TINISUKIA', 'ONION', '40', '2175', '2400', '2300'),
(83, '2022-02-28', 'GOLAGHAT', 'ONION', '10', '1990', '2350', '2200'),
(84, '2022-02-28', 'JORHAT', 'POTATO', '50', '1100', '1250', '1200'),
(85, '2022-03-01', 'TINISUKIA', 'POTATO', '10', '1200', '1400', '1250'),
(86, '2022-03-01', 'GOLAGHAT', 'ONION', '20', '1800', '2200', '2075'),
(87, '2022-03-01', 'SIVSAGAR', 'POTATO', '20', '1300', '1400', '1400'),
(88, '2022-03-02', 'JORHAT', 'POTATO', '10', '1250', '1450', '1420'),
(89, '2022-03-02', 'JORHAT', 'ONION', '30', '1900', '2300', '2250'),
(90, '2022-03-02', 'NAGAON', 'ONION', '15', '1750', '2100', '2050'),
(91, '2022-03-03', 'DIBRUGARH', 'POTATO', '30', '1250', '1450', '1400'),
(92, '2022-03-03', 'NAGAON', 'POTATO', '20', '1300', '1350', '1325'),
(93, '2022-03-04', 'SILCHAR', 'ONION', '25', '2000', '2100', '2050'),
(94, '2022-03-04', 'SIVSAGAR', 'POTATO', '29', '1100', '1250', '1200'),
(95, '2022-03-05', 'TINISUKIA', 'POTATO', '25', '1150', '1400', '1300'),
(96, '2022-03-05', 'JORHAT', 'ONION', '30', '2050', '2200', '2150'),
(97, '2022-03-06', 'SILCHAR', 'ONION', '10', '1990', '2175', '2150'),
(98, '2022-03-07', 'SIVSAGAR', 'POTATO', '40', '1000', '1300', '1275'),
(99, '2022-03-08', 'GOLAGHAT', 'POTATO', '30', '1075', '1250', '1200'),
(100, '2022-03-09', 'KARBI ALONG', 'ONION', '32', '1995', '2400', '2300'),
(101, '2022-03-10', 'NAGAON', 'ONION', '25', '2000', '2300', '2200'),
(102, '2022-03-11', 'KARBI ALONG', 'ONION', '30', '1980', '2350', '2200'),
(103, '2022-03-12', 'JORHAT', 'POTATO', '50', '1100', '1200', '1150'),
(104, '2022-03-13', 'SILCHAR', 'ONION', '30', '2000', '2350', '2175'),
(105, '2022-03-13', 'GOLAGHAT', 'POTATO', '37', '1067', '1200', '1150'),
(106, '2022-03-14', 'TINISUKIA', 'POTATO', '20', '1175', '1300', '1230'),
(107, '2022-03-14', 'NAGAON', 'ONION', '22', '1975', '2200', '2130'),
(108, '2022-03-16', 'TINISUKIA', 'ONION', '5', '1900', '2000', '2000'),
(109, '2022-03-17', 'KARBI ALONG', 'POTATO', '50', '1000', '1200', '1150'),
(110, '2022-03-18', 'DIBRUGARH', 'ONION', '25', '2100', '2200', '2100'),
(111, '2022-03-18', 'DIBRUGARH', 'POTATO', '15', '1100', '1267', '1110'),
(112, '2022-03-20', 'JORHAT', 'POTATO', '30', '1300', '1400', '1375'),
(113, '2022-03-20', 'JORHAT', 'ONION', '29', '2010', '2200', '2100'),
(114, '2022-03-21', 'GOLAGHAT', 'POTATO', '20', '1250', '1400', '1350'),
(115, '2022-03-22', 'JORHAT', 'POTATO', '15', '1200', '1350', '1247'),
(116, '2022-03-22', 'SIVSAGAR', 'ONION', '25', '2300', '2350', '2310'),
(117, '2022-03-23', 'NAGAON', 'POTATO', '30', '1200', '1375', '1250'),
(118, '2022-03-24', 'KARBI ALONG', 'ONION', '40', '2100', '2300', '2200'),
(119, '2022-03-24', 'SILCHAR', 'POTATO', '50', '1145', '1250', '1200'),
(120, '2022-03-25', 'JORHAT', 'POTATO', '30', '1200', '1300', '1230'),
(121, '2022-03-25', 'KARBI ALONG', 'ONION', '29', '2200', '2300', '2200'),
(122, '2022-03-26', 'SILCHAR', 'POTATO', '30', '1220', '1300', '1240'),
(123, '2022-03-27', 'DIBRUGARH', 'POTATO', '20', '1200', '1350', '1300'),
(124, '2022-03-27', 'TINISUKIA', 'ONION', '40', '2175', '2400', '2300'),
(125, '2022-03-28', 'GOLAGHAT', 'ONION', '10', '1990', '2350', '2200'),
(126, '2022-03-28', 'JORHAT', 'POTATO', '50', '1100', '1250', '1200'),
(127, '2022-03-30', 'GOLAGHAT', 'POTATO', '20', '1200', '1300', '1250'),
(128, '2022-03-30', 'NAGAON', 'ONION', '30', '2200', '2350', '2340'),
(129, '2021-05-04', 'Jorhat', 'potato', '11', '1100', '1300', '1250'),
(130, '2022-06-02', 'Dhemaji', 'Brinjal', '100', '4000', '4500', '4000'),
(131, '2022-05-01', 'Charaideo', 'beet', '10', '899', '1300', '1000'),
(132, '2022-05-05', 'Dhemaji', 'beet', '900', '1200', '1400', '1278'),
(133, '2022-05-11', 'Lakhimpur', 'beet', '89999', '1400', '1700', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `sheet2`
--

CREATE TABLE `sheet2` (
  `DATE` varchar(255) DEFAULT NULL,
  `DISTRICT` varchar(255) DEFAULT NULL,
  `COMUDITY` varchar(255) DEFAULT NULL,
  `ARIVAL` varchar(255) DEFAULT NULL,
  `MIN PRICE` varchar(255) DEFAULT NULL,
  `MAX PRICE` varchar(255) DEFAULT NULL,
  `MODEL_PRICE` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sheet2`
--

INSERT INTO `sheet2` (`DATE`, `DISTRICT`, `COMUDITY`, `ARIVAL`, `MIN PRICE`, `MAX PRICE`, `MODEL_PRICE`) VALUES
('2021-01-01', 'JORHAT', 'POTATO', '10', '1000', '1200', '1050'),
('2021-02-01', 'JORHAT', 'POTATO', '26', '1020', '1250', '1100'),
('2021-03-01', 'JORHAT', 'POTATO', '34', '1050', '1230', '1080'),
('2021-04-01', 'JORHAT', 'POTATO', '20', '1050', '1180', '1110'),
('2021-05-01', 'JORHAT', 'POTATO', '32', '950', '1100', '1000'),
('2021-06-01', 'JORHAT', 'POTATO', '23', '980', '1126', '1020'),
('2021-07-01', 'JORHAT', 'POTATO', '25', '1029', '1200', '1050'),
('2021-08-01', 'JORHAT', 'POTATO', '30', '1060', '1250', '1150'),
('2021-09-01', 'JORHAT', 'POTATO', '48', '1100', '1300', '1200'),
('2021-10-01', 'JORHAT', 'POTATO', '60', '1080', '1260', '1180'),
('2021-11-01', 'JORHAT', 'POTATO', '50', '1040', '1200', '1065'),
('2021-12-01', 'JORHAT', 'POTATO', '40', '1030', '1250', '1230');

-- --------------------------------------------------------

--
-- Table structure for table `sheet3`
--

CREATE TABLE `sheet3` (
  `ID` int(11) NOT NULL,
  `MONTH` varchar(255) DEFAULT NULL,
  `DISTRICT` varchar(255) DEFAULT NULL,
  `POTATO` varchar(255) DEFAULT NULL,
  `ONION` varchar(255) DEFAULT NULL,
  `BEET` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sheet3`
--

INSERT INTO `sheet3` (`ID`, `MONTH`, `DISTRICT`, `POTATO`, `ONION`, `BEET`) VALUES
(1, 'JAN', 'JORHAT', '1200', '1050', '3000'),
(2, 'FEB', 'JORHAT', '1250', '1100', '2800'),
(3, 'MAR', 'JORHAT', '1230', '1080', '3300'),
(4, 'APR', 'JORHAT', '1180', '1110', '2900'),
(5, 'MAY', 'JORHAT', '1100', '1000', '3090'),
(6, 'JUN', 'JORHAT', '1126', '1020', '2899'),
(7, 'JUL', 'JORHAT', '1200', '1050', '3100'),
(8, 'AUG', 'JORHAT', '1250', '1150', '2950'),
(9, 'SEPT', 'JORHAT', '1300', '1200', '3200'),
(10, 'OCT', 'JORHAT', '1260', '1180', '3500'),
(11, 'NOV', 'JORHAT', '1200', '1065', '3134'),
(12, 'DEC', 'JORHAT', '1250', '1230', '3449');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `std_id` int(233) NOT NULL,
  `name` varchar(233) NOT NULL,
  `branch` varchar(233) NOT NULL,
  `year` varchar(233) NOT NULL,
  `email` varchar(233) NOT NULL,
  `phone` varchar(233) NOT NULL,
  `addr` varchar(233) NOT NULL,
  `photo` varchar(222) NOT NULL,
  `reg_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(111) DEFAULT 'pending'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`std_id`, `name`, `branch`, `year`, `email`, `phone`, `addr`, `photo`, `reg_time`, `status`) VALUES
(2, 'Nibir Bora', 'Economics', '2019', 'nibir@gmail.com', '9876543222', 'Guwahati', 'uploads/629a563aee50a2.97240144.jpg', '2022-06-03 18:28:13', 'approved'),
(3, 'aaa', 'aaa', '2020', 'aaaaaaaaaaa@s.com', '90898989', 'jorhat', 'uploads/629a563aee50a2.97240144.jpg', '2022-06-03 18:28:13', 'approved'),
(5, 'aaa', 'aaa', '2222', 'aaa@s.com', '234234234', 'aaa', 'uploads/629a563aee50a2.97240144.jpg', '2022-06-03 18:28:13', 'approved'),
(6, 'rrr', 'rrr', '3333', 'rrrr@fff.ccc', '89899989', 'hhhh', 'uploads/629a563aee50a2.97240144.jpg', '2022-06-03 18:28:13', 'approved'),
(7, 'aaaasdf', 'asdfasdf', '11212', 'adfasdf@fadf.caca', '234234234', 'asdfasdfasdf', 'uploads/629a563aee50a2.97240144.jpg', '2022-06-03 18:43:06', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `alumini`
--
ALTER TABLE `alumini`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `alumnireg`
--
ALTER TABLE `alumnireg`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `azax`
--
ALTER TABLE `azax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coadmin`
--
ALTER TABLE `coadmin`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excel_json`
--
ALTER TABLE `excel_json`
  ADD PRIMARY KEY (`ex_id`);

--
-- Indexes for table `jsonfiles`
--
ALTER TABLE `jsonfiles`
  ADD PRIMARY KEY (`xl_id`);

--
-- Indexes for table `send_email`
--
ALTER TABLE `send_email`
  ADD PRIMARY KEY (`em_id`);

--
-- Indexes for table `sheet1`
--
ALTER TABLE `sheet1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sheet3`
--
ALTER TABLE `sheet3`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `alumini`
--
ALTER TABLE `alumini`
  MODIFY `slno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `alumnireg`
--
ALTER TABLE `alumnireg`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `azax`
--
ALTER TABLE `azax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `coadmin`
--
ALTER TABLE `coadmin`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `excel_json`
--
ALTER TABLE `excel_json`
  MODIFY `ex_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jsonfiles`
--
ALTER TABLE `jsonfiles`
  MODIFY `xl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `send_email`
--
ALTER TABLE `send_email`
  MODIFY `em_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sheet1`
--
ALTER TABLE `sheet1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `sheet3`
--
ALTER TABLE `sheet3`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `std_id` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
