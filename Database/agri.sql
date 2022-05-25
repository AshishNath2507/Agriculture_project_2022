-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 11:50 AM
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
(5, 'ashish', 'nathashish.1998@gmail.com', '$2y$10$dMJTV0WU1R58r4VY8fYFle95TdUspoGEjaUSZB8aC74LPNRjm..pC', 'verified'),
(7, 'ashish', 'ashishnath098@gmail.com', 'asdf', 'verified');

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
-- Table structure for table `faculty`
--
-- Error reading structure for table agri.faculty: #1932 - Table &#039;agri.faculty&#039; doesn&#039;t exist in engine
-- Error reading data for table agri.faculty: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `agri`.`faculty`&#039; at line 1

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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `std_id` int(233) NOT NULL,
  `name` varchar(233) NOT NULL,
  `branch` varchar(233) NOT NULL,
  `year` varchar(233) NOT NULL,
  `email` varchar(233) NOT NULL,
  `phone` varchar(233) NOT NULL,
  `addr` varchar(233) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`std_id`, `name`, `branch`, `year`, `email`, `phone`, `addr`) VALUES
(1, 'Pragyat Baruah', 'Economics', '2022', 'pbaruah23@gmail.com', '9876543211', 'Jorhat'),
(2, 'Nibir Bora', 'Economics', '2019', 'nibir@gmail.com', '9876543222', 'Guwahati');

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
-- Indexes for table `send_email`
--
ALTER TABLE `send_email`
  ADD PRIMARY KEY (`em_id`);

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
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `send_email`
--
ALTER TABLE `send_email`
  MODIFY `em_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `std_id` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
