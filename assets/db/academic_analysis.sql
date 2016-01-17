-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2016 at 01:48 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `academic_analysis`
--

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE IF NOT EXISTS `batches` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `start_year` int(5) NOT NULL,
  `end_year` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `start_year`, `end_year`) VALUES
(1, 2012, 2016),
(2, 2013, 2017);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`) VALUES
(1, 'Department of Computer Science and Engineering'),
(2, 'Department of Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `department_id` int(4) NOT NULL,
  `subject_code` varchar(10) NOT NULL,
  `subject_name` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `department_id`, `subject_code`, `subject_name`) VALUES
(1, 1, 'ECS-701', 'Distributed Systems'),
(2, 1, 'ECS-501', 'Test Subject');

-- --------------------------------------------------------

--
-- Table structure for table `subjects_to_batches`
--

CREATE TABLE IF NOT EXISTS `subjects_to_batches` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `subject_id` int(3) NOT NULL,
  `batch_id` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `subject_id` (`subject_id`),
  KEY `batch_id` (`batch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `subjects_to_batches`
--

INSERT INTO `subjects_to_batches` (`id`, `subject_id`, `batch_id`) VALUES
(1, 1, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subjects_to_batches`
--
ALTER TABLE `subjects_to_batches`
  ADD CONSTRAINT `subjects_to_batches_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `subjects_to_batches_ibfk_2` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
