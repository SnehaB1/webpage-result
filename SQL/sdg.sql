-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2017 at 04:26 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sdg`
--

-- --------------------------------------------------------

--
-- Table structure for table `sdes`
--

CREATE TABLE IF NOT EXISTS `sdes` (
  `id` int(11) NOT NULL,
  `course` varchar(20) NOT NULL,
  `regulation` varchar(20) NOT NULL,
  `exam` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `hall_ticket_number` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `college_code` int(5) NOT NULL,
  `sub_code_1` varchar(5) NOT NULL,
  `sub_name_1` text NOT NULL,
  `int_marks_1` int(3) NOT NULL,
  `ext_marks_1` int(3) NOT NULL,
  `sub_code_2` varchar(5) NOT NULL,
  `sub_name_2` text NOT NULL,
  `int_marks_2` int(3) NOT NULL,
  `ext_marks_2` int(3) NOT NULL,
  `sub_code_3` varchar(5) NOT NULL,
  `sub_name_3` text NOT NULL,
  `int_marks_3` int(11) NOT NULL,
  `ext_marks_3` int(11) NOT NULL,
  `sub_code_4` varchar(11) NOT NULL,
  `sub_name_4` text NOT NULL,
  `int_marks_4` int(11) NOT NULL,
  `ext_marks_4` int(11) NOT NULL,
  `sub_code_5` varchar(11) NOT NULL,
  `sub_name_5` text NOT NULL,
  `int_marks_5` int(11) NOT NULL,
  `ext_marks_5` int(11) NOT NULL,
  `sub_code_6` varchar(11) NOT NULL,
  `sub_name_6` text NOT NULL,
  `int_marks_6` int(11) NOT NULL,
  `ext_marks_6` int(11) NOT NULL,
  `sub_code_7` varchar(11) NOT NULL,
  `sub_name_7` text NOT NULL,
  `int_marks_7` int(11) NOT NULL,
  `ext_marks_7` int(11) NOT NULL,
  `sub_code_8` varchar(11) NOT NULL,
  `sub_name_8` text NOT NULL,
  `int_marks_8` int(11) NOT NULL,
  `ext_marks_8` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdes`
--

INSERT INTO `sdes` (`id`, `course`, `regulation`, `exam`, `semester`, `hall_ticket_number`, `name`, `father_name`, `college_code`, `sub_code_1`, `sub_name_1`, `int_marks_1`, `ext_marks_1`, `sub_code_2`, `sub_name_2`, `int_marks_2`, `ext_marks_2`, `sub_code_3`, `sub_name_3`, `int_marks_3`, `ext_marks_3`, `sub_code_4`, `sub_name_4`, `int_marks_4`, `ext_marks_4`, `sub_code_5`, `sub_name_5`, `int_marks_5`, `ext_marks_5`, `sub_code_6`, `sub_name_6`, `int_marks_6`, `ext_marks_6`, `sub_code_7`, `sub_name_7`, `int_marks_7`, `ext_marks_7`, `sub_code_8`, `sub_name_8`, `int_marks_8`, `ext_marks_8`) VALUES
(1, 'B.Tech', 'R09', 'supply', '1-2', '112233', 'Sneha', 'BkBharti', 104, '11', 'dd', 22, 33, '22', 'ff', 45, 65, '33', 'ss', 55, 32, '65', 'aa', 44, 55, '11', 'ww', 55, 66, '33', 'ee', 44, 44, '55', 'rr', 44, 11, '33', 'qq', 44, 99);

-- --------------------------------------------------------

--
-- Table structure for table `sdgi`
--

CREATE TABLE IF NOT EXISTS `sdgi` (
  `id` int(11) NOT NULL DEFAULT '0',
  `course` varchar(20) NOT NULL,
  `regulation` varchar(20) NOT NULL,
  `exam` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `hall_ticket_number` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `college_code` int(5) NOT NULL,
  `sub_code_1` varchar(5) NOT NULL,
  `sub_name_1` text NOT NULL,
  `int_marks_1` int(3) NOT NULL,
  `ext_marks_1` int(3) NOT NULL,
  `sub_code_2` varchar(5) NOT NULL,
  `sub_name_2` text NOT NULL,
  `int_marks_2` int(3) NOT NULL,
  `ext_marks_2` int(3) NOT NULL,
  `sub_code_3` varchar(5) NOT NULL,
  `sub_name_3` text NOT NULL,
  `int_marks_3` int(11) NOT NULL,
  `ext_marks_3` int(11) NOT NULL,
  `sub_code_4` varchar(11) NOT NULL,
  `sub_name_4` text NOT NULL,
  `int_marks_4` int(11) NOT NULL,
  `ext_marks_4` int(11) NOT NULL,
  `sub_code_5` varchar(11) NOT NULL,
  `sub_name_5` text NOT NULL,
  `int_marks_5` int(11) NOT NULL,
  `ext_marks_5` int(11) NOT NULL,
  `sub_code_6` varchar(11) NOT NULL,
  `sub_name_6` text NOT NULL,
  `int_marks_6` int(11) NOT NULL,
  `ext_marks_6` int(11) NOT NULL,
  `sub_code_7` varchar(11) NOT NULL,
  `sub_name_7` text NOT NULL,
  `int_marks_7` int(11) NOT NULL,
  `ext_marks_7` int(11) NOT NULL,
  `sub_code_8` varchar(11) NOT NULL,
  `sub_name_8` text NOT NULL,
  `int_marks_8` int(11) NOT NULL,
  `ext_marks_8` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sdes`
--
ALTER TABLE `sdes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sdes`
--
ALTER TABLE `sdes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
