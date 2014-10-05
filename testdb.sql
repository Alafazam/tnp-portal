-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2014 at 03:43 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `school_details`
--

CREATE TABLE IF NOT EXISTS `school_details` (
`school_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `school_name` varchar(80) DEFAULT NULL,
  `board` varchar(50) DEFAULT NULL,
  `year` char(4) CHARACTER SET utf8 DEFAULT NULL,
  `percentage` char(9) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `school_details`
--

INSERT INTO `school_details` (`school_id`, `student_id`, `type`, `school_name`, `board`, `year`, `percentage`) VALUES
(1, 1, 1, 'khkjhjkhkjh', 'hfchgvhggv', '2008', 'jhbjhbjhb'),
(2, 1, 2, 'nmn mn', '', '2006', ''),
(3, 1, 3, 'Home State', 'General', '2008', '656566');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `enroll` int(11) DEFAULT NULL,
  `branch` varchar(3) DEFAULT NULL,
  `year_of_admin` int(11) DEFAULT NULL,
  `FNAME` varchar(50) DEFAULT NULL,
  `MNAME` varchar(50) DEFAULT NULL,
  `LNAME` varchar(50) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `12_std_id` int(11) DEFAULT NULL,
  `10_std_id` int(11) DEFAULT NULL,
  `AIEEE_id` int(11) DEFAULT NULL,
  `score_sheet_id` int(11) DEFAULT NULL,
  `Parents_name` varchar(50) DEFAULT NULL,
  `AddressL1` text,
  `AddressL2` text,
  `City` varchar(50) DEFAULT NULL,
  `Email_add` varchar(50) DEFAULT NULL,
  `Phone` varchar(50) DEFAULT NULL,
  `ECA` text,
  `Career_obj` text,
  `Technical_Skills` text,
  `Other_skills` text,
  `Project_id` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `enroll`, `branch`, `year_of_admin`, `FNAME`, `MNAME`, `LNAME`, `gender`, `dob`, `12_std_id`, `10_std_id`, `AIEEE_id`, `score_sheet_id`, `Parents_name`, `AddressL1`, `AddressL2`, `City`, `Email_add`, `Phone`, `ECA`, `Career_obj`, `Technical_Skills`, `Other_skills`, `Project_id`) VALUES
(1, 'alafazam', '0d819fad8db5037a4ec35ccef8c13a68', NULL, NULL, NULL, 'Alaf', 'Azam', 'Khan', 'M', '1993-08-22', NULL, NULL, NULL, NULL, NULL, '34 Ashoka Colony\r\nManikh Bagh Road', 'Manikh Bagh Road', 'Indore', 'alafazam@gmail.com', '9827076060', '', '', '', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school_details`
--
ALTER TABLE `school_details`
 ADD PRIMARY KEY (`school_id`), ADD KEY `FK_Table_ToTable` (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `school_details`
--
ALTER TABLE `school_details`
MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `school_details`
--
ALTER TABLE `school_details`
ADD CONSTRAINT `FK_Table_ToTable` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
