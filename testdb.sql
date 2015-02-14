-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2015 at 10:52 AM
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
-- Table structure for table `academic`
--

CREATE TABLE IF NOT EXISTS `academic` (
`acad_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `cursem` int(11) DEFAULT NULL,
  `sem1` decimal(5,3) DEFAULT NULL,
  `sem2` decimal(5,3) DEFAULT NULL,
  `sem3` decimal(5,3) DEFAULT NULL,
  `sem4` decimal(5,3) DEFAULT NULL,
  `sem5` decimal(5,3) DEFAULT NULL,
  `sem6` decimal(5,3) DEFAULT NULL,
  `sem7` decimal(5,3) DEFAULT NULL,
  `sem8` decimal(5,3) DEFAULT NULL,
  `cgpa` decimal(5,3) DEFAULT NULL,
  `supply` varchar(50) DEFAULT NULL,
  `back` varchar(50) DEFAULT NULL,
  `reason` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`acad_id`, `id`, `cursem`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`, `cgpa`, `supply`, `back`, `reason`) VALUES
(2, 1, 1, '3.222', '1.000', '2.000', '2.000', '2.000', '0.000', '3.001', '0.000', '1.000', 'NO', 'NO', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_id` int(10) NOT NULL,
  `pass` varchar(50) CHARACTER SET utf8 NOT NULL,
  `id` int(6) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `pass`, `id`) VALUES
(1, '16482588cbd29885761c5f067139a1ee', 552471);

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `username` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `Status` varchar(50) DEFAULT '0',
  `date` varchar(50) DEFAULT NULL,
  `cover_letter` text,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`username`, `job_id`, `r_id`, `Status`, `date`, `cover_letter`, `type`) VALUES
(2012786, 1, 2, '0', '03-11-14', '', 1),
(2012786, 11, 1, '0', '29-12-14', 'ACZZC  z zx x x x x x x x x x x x x zcx zc zc c c  c c c c c c c z x z z z SDV dsg GGDSGDS ADGFADS', 0);

-- --------------------------------------------------------

--
-- Table structure for table `branchesrecruiters`
--

CREATE TABLE IF NOT EXISTS `branchesrecruiters` (
`br_id` int(11) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `r_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `branchesrecruiters`
--

INSERT INTO `branchesrecruiters` (`br_id`, `branch`, `r_id`) VALUES
(43, 'ECE', 1),
(44, 'EE', 1),
(45, 'MEC', 1),
(46, 'MME', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE IF NOT EXISTS `feed` (
`feed_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `data` text,
  `heading` text NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`feed_id`, `date`, `data`, `heading`, `type`) VALUES
(5, '2015-10-21', '\r\n1. You would all be logging  in this website and filling out your details and just like in your resume.\r\n2. Companies will have access to your particulars and will make things simpler and faster.\r\n3. Companies themselves will have their accounts on this website and every visiting company will give all its details like sector, CTC, expected date of arrival etc.\r\n4. Start registering, soon the final version will be uploaded on a new link, and your saved details shall be intact. Also some new fields might appear by then, you can fill them later.\r\n5. For bug reports and feature requests Contact Archit Atray.\r\n', 'NOTICE', 1),
(6, '2014-10-28', 'hello this is a test feed', 'hello test', 3);

-- --------------------------------------------------------

--
-- Table structure for table `intern_profiles`
--

CREATE TABLE IF NOT EXISTS `intern_profiles` (
`intern_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `intern_name` varchar(50) DEFAULT NULL,
  `training_descr` text,
  `application_dead_line` datetime DEFAULT NULL,
  `skills` text,
  `approved` int(11) NOT NULL DEFAULT '0',
  `loc` varchar(50) DEFAULT NULL,
  `stipend` varchar(50) DEFAULT NULL,
  `accom` varchar(50) DEFAULT NULL,
  `travel` varchar(50) DEFAULT NULL,
  `facilities` text,
  `shortlist_from_Resumes` varchar(50) DEFAULT NULL,
  `personal_Interview` varchar(50) DEFAULT NULL,
  `seats` varchar(50) DEFAULT NULL,
  `eligible_departments` varchar(50) DEFAULT NULL,
  `l_requirements` text,
  `contact_name` varchar(50) DEFAULT NULL,
  `contact_designation` varchar(50) DEFAULT NULL,
  `contact_email` varchar(50) DEFAULT NULL,
  `contact_number` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `intern_profiles`
--

INSERT INTO `intern_profiles` (`intern_id`, `r_id`, `intern_name`, `training_descr`, `application_dead_line`, `skills`, `approved`, `loc`, `stipend`, `accom`, `travel`, `facilities`, `shortlist_from_Resumes`, `personal_Interview`, `seats`, `eligible_departments`, `l_requirements`, `contact_name`, `contact_designation`, `contact_email`, `contact_number`) VALUES
(1, 2, 'jhbjhb', 'jhbjhbjh', '2014-10-30 23:07:37', 'bjhbjhb', 1, 'jhbjhbjh', '65465', 'Yes', 'Yes', '0', 'YES', 'YES', '99', 'CHE,CE,CSE,IT,ECE,EE,MEC,MEE,SE,EPS,CIT,MSD', '', 'sdfsd', 'jknk', 'alafazam@gmail.com', 'kjnk'),
(2, 1, 'scscas', 'mm, m', '2014-11-19 00:00:00', 'm,m, ,m', 1, ',m ,', '455565', 'Yes', 'Yes', '65446', 'YES', 'YES', '4', 'IT, ECE, EE, MEC, MEE, SE, EPS, CIT, MSD', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_profiles`
--

CREATE TABLE IF NOT EXISTS `job_profiles` (
`job_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `job_desig` varchar(50) DEFAULT NULL,
  `job_descr` text,
  `application_dead_line` datetime DEFAULT NULL,
  `approved` int(11) DEFAULT '0',
  `place` varchar(50) DEFAULT NULL,
  `ctc` varchar(50) DEFAULT NULL,
  `gross` varchar(50) DEFAULT NULL,
  `bonus` varchar(50) DEFAULT NULL,
  `bond_desc` text,
  `bond` varchar(40) DEFAULT NULL,
  `shortlist_from_Resumes` varchar(50) DEFAULT NULL,
  `written_Test` varchar(50) DEFAULT NULL,
  `group_Discussion` varchar(50) DEFAULT NULL,
  `personal_Interview` varchar(50) DEFAULT NULL,
  `medical_Test` varchar(50) DEFAULT NULL,
  `number_of_rounds` varchar(50) DEFAULT NULL,
  `min_offers` varchar(50) DEFAULT NULL,
  `eligible_departments` varchar(50) DEFAULT NULL,
  `other_requirements` varchar(50) DEFAULT NULL,
  `contact_name` varchar(50) DEFAULT NULL,
  `contact_designation` varchar(50) DEFAULT NULL,
  `contact_email` varchar(50) DEFAULT NULL,
  `contact_number` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `job_profiles`
--

INSERT INTO `job_profiles` (`job_id`, `r_id`, `job_desig`, `job_descr`, `application_dead_line`, `approved`, `place`, `ctc`, `gross`, `bonus`, `bond_desc`, `bond`, `shortlist_from_Resumes`, `written_Test`, `group_Discussion`, `personal_Interview`, `medical_Test`, `number_of_rounds`, `min_offers`, `eligible_departments`, `other_requirements`, `contact_name`, `contact_designation`, `contact_email`, `contact_number`) VALUES
(9, 3, 'bjhbj', 'jhbjhbjh', '2014-10-28 20:00:25', 1, 'hbjh', '646', '645646', '654654', 'hgvhg', 'Yes', 'YES', 'YES', 'YES', 'YES', 'YES', '7', '54', 'CHE, CE, CSE, IT, ECE, EE, MEC, MME, SE, EPS, CIT,', 'jbjh', 'jhbjh', 'jhbjhb', 'alafazam@gmail.com', '07566488984'),
(10, 1, 'CEO', 'asdmasld', '2014-11-11 00:00:00', 1, 'mlmclkm', '4445654', '564541', '46465', 'fqoidjdoaidjaosi asjcnasjcnk masoxm slkxm', 'Yes', 'NO', 'NO', 'YES', 'YES', 'NO', '5', '444', 'CHE, CE, CSE, IT, ECE, EE, MEC, MME, SE, EPS, CIT,', NULL, NULL, NULL, NULL, NULL),
(11, 1, 'defsd', 'kjnkj', '2014-11-26 00:00:00', 1, 'jhbnjhb', '9849', '494984', '98498', 'zdvdsv', 'Yes', 'YES', 'YES', 'YES', 'YES', 'YES', '651', '44', 'CE, CSE, IT, ECE, EE, MEC, EPS, CIT', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pwd_reset`
--

CREATE TABLE IF NOT EXISTS `pwd_reset` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `v_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recruiters`
--

CREATE TABLE IF NOT EXISTS `recruiters` (
`r_id` int(11) NOT NULL,
  `visit` date DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Company_name` varchar(50) NOT NULL,
  `offer` varchar(10) DEFAULT NULL,
  `url` varchar(30) DEFAULT NULL,
  `website_link` varchar(100) DEFAULT NULL,
  `Company_Type` varchar(50) DEFAULT NULL,
  `Industry_Sector` varchar(50) DEFAULT NULL,
  `Brief` text,
  `branch` varchar(50) NOT NULL DEFAULT 'CHE,CE,CSE,IT,ECE,EE,MEC,MEE,SE,EPS,CIT,MSD'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `recruiters`
--

INSERT INTO `recruiters` (`r_id`, `visit`, `username`, `password`, `Company_name`, `offer`, `url`, `website_link`, `Company_Type`, `Industry_Sector`, `Brief`, `branch`) VALUES
(1, '0000-00-00', 'gravity_games', '0d819fad8db5037a4ec35ccef8c13a68', 'Gravity-games', '1,2,3,4,5', '0', 'gravitygames.com', 'MNC (Indian Origin)', 'IT', 'WE RULE', 'CHE,IT,EE,MEC,CIT'),
(2, '0000-00-00', 'google', '5f4dcc3b5aa765d61d8327deb882cf99', 'Google', '0', '0', 'googel.com', 'Startup', 'Analytics', 'hogie bogie bogie', 'CHE,CE,CSE,IT,ECE,EE,MEC,MME,SE,EPS,CIT,MSD'),
(3, '0000-00-00', 'facebook', '5f4dcc3b5aa765d61d8327deb882cf99', 'Facebook', NULL, NULL, NULL, NULL, NULL, NULL, 'CHE,CE,CSE,IT,ECE,EE,MEC,MEE,SE,EPS,CIT,MSD'),
(4, '0000-00-00', 'microsoft', '5f4dcc3b5aa765d61d8327deb882cf99', 'Microsoft', NULL, NULL, NULL, NULL, NULL, NULL, 'CHE,CE,CSE,IT,ECE,EE,MEC,MEE,SE,EPS,CIT,MSD'),
(5, '0000-00-00', 'yahoo', '5f4dcc3b5aa765d61d8327deb882cf99', 'Yahoo', NULL, NULL, NULL, NULL, NULL, NULL, 'CHE,CE,CSE,IT,ECE,EE,MEC,MEE,SE,EPS,CIT,MSD'),
(11, '0000-00-00', 'lenovo', '5f4dcc3b5aa765d61d8327deb882cf99', 'lenovo', NULL, NULL, NULL, NULL, NULL, NULL, 'CHE,CE,CSE,IT,ECE,EE,MEC,MEE,SE,EPS,CIT,MSD');

-- --------------------------------------------------------

--
-- Table structure for table `school_details`
--

CREATE TABLE IF NOT EXISTS `school_details` (
`school_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `school_name` varchar(80) DEFAULT NULL,
  `board` varchar(50) DEFAULT NULL,
  `year` char(4) CHARACTER SET utf8 DEFAULT NULL,
  `percentage` char(9) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `school_details`
--

INSERT INTO `school_details` (`school_id`, `id`, `type`, `school_name`, `board`, `year`, `percentage`) VALUES
(1, 1, 1, 'akdsas', 'asdkjcn', '2008', '99'),
(2, 1, 2, 'assjdnask', 'slkdms', '2006', '88'),
(3, 1, 3, 'Other State', 'General', '2008', '23442');

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
  `12_std_id` int(11) DEFAULT '0',
  `10_std_id` int(11) DEFAULT '0',
  `AIEEE_id` int(11) DEFAULT '0',
  `score_sheet_id` int(11) DEFAULT '0',
  `Parents_name` varchar(50) DEFAULT NULL,
  `AddressL1` text,
  `AddressL2` text,
  `City` varchar(50) DEFAULT NULL,
  `Email_add` varchar(50) DEFAULT NULL,
  `Phone` varchar(50) DEFAULT NULL,
  `ECA` text CHARACTER SET utf8,
  `Career_obj` text CHARACTER SET utf8,
  `Technical_Skills` text CHARACTER SET utf8,
  `Other_skills` text CHARACTER SET utf8,
  `Project_id` varchar(20) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `pointer_privacy` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1273 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `enroll`, `branch`, `year_of_admin`, `FNAME`, `MNAME`, `LNAME`, `gender`, `dob`, `12_std_id`, `10_std_id`, `AIEEE_id`, `score_sheet_id`, `Parents_name`, `AddressL1`, `AddressL2`, `City`, `Email_add`, `Phone`, `ECA`, `Career_obj`, `Technical_Skills`, `Other_skills`, `Project_id`, `url`, `pointer_privacy`) VALUES
(1, '2012786', '0d819fad8db5037a4ec35ccef8c13a68', 786, 'IT', 2012, 'Alaf', 'Azam', 'Khan', 'M', '1993-08-22', NULL, NULL, NULL, NULL, NULL, '34 Ashoka Colony\r\nManikh Bagh Road', '34 Ashoka Colony\r\nManikh Bagh Road', 'INdore', 'alafazam@gmail.com', '7566488984', '1. Why is it important for the scheduler to distinguish I/O bound programs from CPU bound programs?\r\n1. Why is it important for the scheduler to distinguish I/O bound programs from CPU bound programs?\r\n1. Why is it important for the scheduler to distinguish I/O bound programs from CPU bound programs?\r\n1. Why is it important for the scheduler to distinguish I/O bound programs from CPU bound programs?\r\n1. Why is it important for the scheduler to distinguish I/O bound programs from CPU bound programs?\r\n', '1. Why is it important for the scheduler to distinguish I/O bound programs from CPU bound programs?\r\n1. Why is it important for the scheduler to distinguish I/O bound programs from CPU bound programs?\r\n1. Why is it important for the scheduler to distinguish I/O bound programs from CPU bound programs?\r\n1. Why is it important for the scheduler to distinguish I/O bound programs from CPU bound programs?', '1. Why is it important for the scheduler to distinguish I/O bound programs from CPU bound programs?\r\n1. Why is it important for the scheduler to distinguish I/O bound programs from CPU bound programs?\r\n1. Why is it important for the scheduler to distinguish I/O bound programs from CPU bound programs?\r\n1. Why is it important for the scheduler to distinguish I/O bound programs from CPU bound programs?\r\n1. Why is it important for the scheduler to distinguish I/O bound programs from CPU bound programs?\r\n1. Why is it important for the scheduler to distinguish I/O bound programs from CPU bound programs?\r\n1. Why is it important for the scheduler to distinguish I/O bound programs from CPU bound programs?', '1. Why is it important for the scheduler to distinguish I/O bound programs from CPU bound programs?\r\n1. Why is it important for the scheduler to distinguish I/O bound programs from CPU bound programs?\r\n\r\n1. Why is it important for the scheduler to distinguish I/O bound programs from CPU bound programs?\r\n1. Why is it important for the scheduler to distinguish I/O bound programs from CPU bound programs?1. Why is it important for the scheduler to distinguish I/O bound programs from CPU bound programs?v\r\n1. Why is it important for the scheduler to distinguish I/O bound programs from CPU bound programs?\r\n1. Why is it important for the scheduler to distinguish I/O bound programs from CPU bound programs?', NULL, NULL, 1),
(2, '2012999', '0d819fad8db5037a4ec35ccef8c13a68', 999, 'IT', 2012, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 1),
(3, '2011001', '48d28849c9e4f6b62978ecfc0ce7f9c9', 1, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, '2011002', '05224461819d778a4034a89183253671', 2, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, '2011003', '30070803f5c57bd01af2de259fbf84a7', 3, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, '2011004', 'da37ab338554b9f653be27776fb3b390', 4, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(7, '2011005', '5fe62f8a5c2de0a0de0d3ed5b8578a40', 5, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(8, '2011006', '8daecd1731aa038d44407095d74570a9', 6, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(9, '2011007', 'bfab253461ba5598d388d67824f5158d', 7, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(10, '2011008', 'e590694dbecbc888a876a620fd574816', 8, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(11, '2011009', 'b3e1373922ce3b850891b7037addde1e', 9, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(12, '2011010', '246818ea5d81a682528268c4e7d33111', 10, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(13, '2011011', '19e2c17d9d6d06ddf0b4a130881bfadb', 11, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(14, '2011012', '868787a0997f81d88e8814540ce6ac9d', 12, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(15, '2011013', '25407fd4a58fb7992fc272201e02ef0b', 13, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(16, '2011014', '82c16ebd24ec738d6c5b4eae16d302f4', 14, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(17, '2011015', '7b939854d27775e1143e963f6cfac472', 15, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(18, '2011016', '108c9de01c41ee9101a1c11e9b715688', 16, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(19, '2011017', '5c80a3becdf7772257bd7a515e997481', 17, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(20, '2011018', '9686568790fe402446b7901bed15b606', 18, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(21, '2011019', '3a32191fa897ca0f2cb4cad5d8d790f1', 19, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(22, '2011020', '6bfecf5a5f029108206b39f0f9b45caa', 20, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(23, '2011021', 'bc2c093807ca7f38a12fd55ecff3efd1', 21, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(24, '2011022', '372e8e1ddfd5439398a4dc34d03cb685', 22, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(25, '2011023', '9ac673b36bdb611e5cef1449268abca8', 23, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(26, '2011024', '0fe827280f994a5148086c8b19700859', 24, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(27, '2011025', '8a3fe76525fec5016ffa298d548a89b1', 25, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(28, '2011026', '77e02b24e7b5cf1db19f8b4cee991e17', 26, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(29, '2011027', '0bcc81a221e331769c2609bb719587b5', 27, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(30, '2011028', 'ba7a8e3bf0509258f3cbf2a89b2e4bad', 28, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(31, '2011029', '9f849f9a56e110faf47cec74d8fa4c5f', 29, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(32, '2011030', '95b0d4088557d88c0baa8b0e04b69afe', 30, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(33, '2011031', '4415d689eeb9f0e6d9d5a6773c0ecb02', 31, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(34, '2011032', 'f525d90ea23d78f233403fffcc9ca81e', 32, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(35, '2011033', '2a6395d2ec4926fe281248151d27db30', 33, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(36, '2011034', '54f62e624dfd3a4144d3882e59eb2c79', 34, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(37, '2011035', '234a96bce79f629aef7d2f2a883c0686', 35, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(38, '2011036', 'bfc432ab4124d66605435a89d73c3738', 36, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(39, '2011037', '037fe57ff950aec1342a9a7f709352cc', 37, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(40, '2011038', 'bef1fbcc405402ce98ba4c0caa085af7', 38, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(41, '2011039', '4923e11bf07b8a3e92d579d91847bbfd', 39, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(42, '2011040', 'db536fde7524f132efdbbf2d0d548c47', 40, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(43, '2011041', '83b98b65d3fc212a8e88907633050ee6', 41, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(44, '2011042', 'cf85ac75f39af0e2aeaf76cc18fc210e', 42, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(45, '2011043', 'a533e9cb0f74748d0de54c56c1ddfcf4', 43, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(46, '2011044', '3b68cbcb2b512c1030a39f4d81ac966b', 44, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(47, '2011045', 'f24a7fc456eec81f61aa15a6ebd6f3f7', 45, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(48, '2011046', '8acd99f3e4d5f78f9145df6ee0df2b3c', 46, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(49, '2011047', '42ac63399977c6fe311774d1c1560a9b', 47, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(50, '2011048', '9ba5adacef03901525a0953daae1dc8f', 48, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(51, '2011049', 'fc7823b575dcb71fdf53736dfb298f0b', 49, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(52, '2011050', '74628881eebfb0b922fee73f43bf03d4', 50, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(53, '2011051', '1d3120cfc836eb527d1a7099379360f8', 51, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(54, '2011052', '902fb7124dde2ba26a25998ec646089d', 52, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(55, '2011053', '269e4794751843d46ffe986fc0de2658', 53, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(56, '2011054', '647ede72311471060f4b390dd275f639', 54, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(57, '2011055', '5b2d215e07f9c9571b49573c6d19ec45', 55, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(58, '2011056', '58d439fe949a11859962d445370a5263', 56, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(59, '2011057', '08603e8fba4cb4f3c0ae34c2ea81ae35', 57, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(60, '2011058', 'f0b178d3c3e5ccfc851506c0766777a1', 58, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(61, '2011059', 'c3e513fc8800b2cba906b581e57081f6', 59, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(62, '2011060', 'a3491a3e4fe1fee6ea81a26278c0d75b', 60, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(63, '2011061', 'a9c398448a0d605803513bf89cc25f8d', 61, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(64, '2011062', '33da97b2c57c5fb14711941481560475', 62, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(65, '2011063', '138c7460891a16ef6f6c8f8a25911fa7', 63, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(66, '2011064', 'f4212419291dfd27aa3215204a249f1d', 64, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(67, '2011065', 'bc8aa053916e1af59ac79bb63148ab2b', 65, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(68, '2011066', 'cd6a03a298a145f1bc5ebcd74f7dda42', 66, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(69, '2011067', 'b04bbc22a018a8805da2c1552bbd74ab', 67, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(70, '2011068', '936e5190f4f30692c32707868b538e59', 68, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(71, '2011069', '805e9532fc98a7682c06a320e7e334fe', 69, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(72, '2011070', '253f5a5aeaed80129bb491c8bd1cf0d6', 70, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(73, '2011071', '319d740d72625ca0eb5a1a1397698788', 71, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(74, '2011072', '1b3674b0aeefa81189a1a7b902d636d3', 72, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(75, '2011073', 'b3b2790af73cdfaa5d9fc1b94e0541d0', 73, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(76, '2011074', '6fbb0bb85cafbfb5546deea74d4d6fac', 74, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(77, '2011075', '99fe148da1f72e3626d51e0d63b7f693', 75, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(78, '2011076', '742dbd7e93947b2a584b3f6ba419d38b', 76, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(79, '2011077', 'a998ada3bdc0ee8acd2a7922cfe40c7a', 77, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(80, '2011078', '08c5ccf6a0625a1fabef89296608358c', 78, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(81, '2011079', '8a4b7f2f4dce4223fd01f805162b2a12', 79, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(589, '2011081', 'e593a10eb2ce5d63ad31c088c48be7e2', 81, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(590, '2011082', '93d3274fe1486c673fc24955c87ff31c', 82, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(591, '2011083', 'd162a84a9a7da236ee626533bf6383be', 83, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(592, '2011084', '9141e04c0372bd18f8ec2a385c0b4918', 84, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(593, '2011085', 'f73cfafd60d1d2a0ac4030666de0d0ac', 85, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(594, '2011086', '38181d61b04d022aa2896cf385a3c7eb', 86, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(595, '2011087', '98850ca2e2449e564f68dc5becf41ea8', 87, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(596, '2011088', '6773f07bebe190b2b8cc6a0f51b213e6', 88, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(597, '2011089', '0878d0ac0a71f0238a117d71a6031ef4', 89, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(598, '2011090', 'ebb355ff7cfae2b3bbe4930c824a54ee', 90, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(599, '2011091', '3ad5dc38f0a95d633d1a083e76308535', 91, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(600, '2011092', '33bf25dca26f0bd9d75a60b02dd82817', 92, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(601, '2011093', 'd6c3e860c213a2c1e25892c07206bde1', 93, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(602, '2011094', 'c856a1da391487c12bc0a92eb7f3c194', 94, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(603, '2011095', '8099d3e36ef5e753d0ead78e0da98179', 95, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(604, '2011096', '9d2cb4ced4a0107399a16ca3a05809a0', 96, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(605, '2011097', 'b15494a39cdff5027434d1b0895635c1', 97, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(606, '2011098', 'ed1cb6cc21d84630cfe4e7fb450dec61', 98, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(607, '2011099', '84071be928a645a26fcc60e8fc45cd0d', 99, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(608, '2011100', 'a5116cc655d5d77ab044e040868f3c5d', 100, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(609, '2011101', '4e8bd1587131fa4b507a3c57b219f322', 101, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(610, '2011102', 'f3777bef9e5dce0d28bf8e304196b4b0', 102, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(611, '2011103', '734504434ef08d6f76fa026263229650', 103, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(612, '2011104', 'd7eee5128923345ccd1c203994f2e46e', 104, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(613, '2011105', 'f7082357503ce42eb2ff08bea3845883', 105, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(614, '2011106', '9b08b793351434dc7d4379b743fb9ea9', 106, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(615, '2011107', 'e325e90b692c74b542bd8786caf115fe', 107, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(616, '2011108', '4a7870c3ce48723be002ef8f2deb9fe1', 108, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(617, '2011109', '54904cc1278524bd92ccaf091b85f856', 109, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(618, '2011110', '8230e1e9553dd1d7f2cffdf4a13ce429', 110, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(619, '2011111', 'fb7824aebba8d22686d8beff91760e52', 111, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(620, '2011112', '8bbfa91c60b3ccb1f044c20e5c8fc3f8', 112, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(621, '2011113', '112d49c21714affc1222a3031a02a5f0', 113, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(622, '2011114', 'de3591cf51932dfb62fbc9ef74d55ece', 114, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(623, '2011115', '80f64c16c9e9992df37fead0c34f99be', 115, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(624, '2011116', 'f370e066209d492e8ff2c6465da517c2', 116, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(625, '2011117', 'f0a5bc5618c6db7bc1d400874a6af009', 117, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(626, '2011118', 'e4087904260dfb817e0409b72f72948f', 118, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(627, '2011119', '7bc13fa4b0965601cc8bc6b8a0a0b05c', 119, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(628, '2011120', '8a3c2483f937db8a38f65f453bcfe663', 120, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(629, '2011121', 'c975bc46c488d67febbf157aaa63c0b7', 121, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(630, '2011122', '98bd2448b23f092d26125e5bacafe274', 122, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(631, '2011123', 'cb07207b5d25bee77ea76b73523da1fb', 123, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(632, '2011124', '8f49906a601db2a700c00dcd8398c9d3', 124, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(633, '2011125', '82ec12ee2263b158d62a4c0e8299db27', 125, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(634, '2011126', '717f153a86cc8e09925a76383d60a18b', 126, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(635, '2011127', '50dc3262be5af5b7f58107624db5b0f1', 127, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(636, '2011128', 'c78ff98cca306adb75c7178c2a35f2fd', 128, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(637, '2011129', 'd3335a7b0f22dd30fc35d7c24c0c93c1', 129, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(638, '2011130', '4d8fd5916238e756e2e4d9c6588f68c9', 130, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(639, '2011131', '0642fa49319f50a73a560f693bc23ac9', 131, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(640, '2011132', 'f003b7355144b769a42c6e312fef035f', 132, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(641, '2011133', 'bf63dcf87cdd4616135571746c78f568', 133, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(642, '2011134', '1a5c0a04666db421e5ab4dfb1d791cd8', 134, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(643, '2011135', '1e7e5fae6603d4e2c3767f3f92c71c0e', 135, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(644, '2011136', '99c8c875779e2c0cd63f78f698a0a341', 136, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(645, '2011137', '64ce4d346de28514e79c650ba5ed59b0', 137, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(646, '2011138', 'ad4a71a59eb98bf4e6a2a7cd82f40792', 138, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(647, '2011139', '31f922d22cca4ced6bc0d1dd07714db3', 139, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(648, '2011140', '6594ecfb8ac35fce681b6f3e422ef91f', 140, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(649, '2011141', '59336d3446c0797513ebd3d2c697fad9', 141, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(650, '2011142', '7e5e06b1e58157325361bb1a9f452343', 142, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(651, '2011143', '0d1777bd76ada6280bcb7b9a44d691c5', 143, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(652, '2011144', '8b7c45a2011be9c0544c258bb5c4fc73', 144, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(653, '2011145', '3740b626428573e8fd225da35e3870eb', 145, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(654, '2011146', '6efe96179ac4b7f0150e88c8c008e690', 146, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(655, '2011147', '4c1c15bd443043c4bc4f78c38fd5f93d', 147, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(656, '2011148', '56c947802b65c0991d41186ac97ce848', 148, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(657, '2011149', '8a513623efda44f457e08c786ac08ecd', 149, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(658, '2011150', 'dd6604ff74099270719264672c4e084b', 150, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(659, '2011151', 'f0dfc93b9862238f0a9c28ad8fd0f775', 151, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(660, '2011152', '4a98e7ad2fcc280f7e4b8c03328d8f70', 152, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(661, '2011153', '0035cdc480d15d56b0b6092161decee3', 153, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(662, '2011154', 'e506497c8c813e327c8131ffc3f6d946', 154, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(663, '2011155', 'fb747f5e436c7ee48fd4475cc1b2abcf', 155, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(664, '2011156', '97c071dcff4e3a9804150bf160b9592c', 156, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(665, '2011157', 'b72a834e65bed0df760add6a2cbf3583', 157, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(666, '2011158', 'e6a8e16ec18c2d5afd423d9abe7c8eaa', 158, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(667, '2011159', 'ed06cadb7bcad304f550e5aaff7ccd13', 159, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(668, '2011160', '33824c61e11f92db37ee73fbcdcdfea2', 160, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(669, '2011161', 'cede3ded53e5db3f4712e6eabd1f19b8', 161, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(670, '2011162', 'bb8a729fd0d565bcc89826c7bc9609c0', 162, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(671, '2011163', '7a4d75fa1284269d99890698a4362936', 163, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(672, '2011164', '4cc020053f3a8766dd1a3e5a780b4ad0', 164, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(673, '2011165', '07563c87ad8418a184c5c5379a04d306', 165, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(674, '2011166', '62830b9ef5d783e5fababf2811cedfd6', 166, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(675, '2011167', '601f6d3d32c693036e21224089d4a971', 167, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(676, '2011168', 'e34fd3575cab0fcf6da977a5c4d3643c', 168, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(677, '2011169', '0023f49771620b4b19d30319a124f63a', 169, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(678, '2011170', '93026961de06fa4ad78300e5dc412dd6', 170, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(679, '2011171', 'befe4763b518f4dd998c7e2defadfd67', 171, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(680, '2011172', 'a2fb3468edc746b3655e1d6a5de1768e', 172, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(681, '2011173', 'bb204bcad5366067030ad6b26d8aa459', 173, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(682, '2011174', '4e8a6b7ce74614eea21494ef09b831e5', 174, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(683, '2011175', '86dac33c49198287bed84ff1896e1c3a', 175, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(684, '2011176', 'd9fefb7f03a8d06cfc74d1a1aa754f66', 176, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(685, '2011177', 'd75f30815bb6a277255210bcf134c3d5', 177, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(686, '2011178', '401aaa832d6455e7c1ce51a65b647d7b', 178, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(687, '2011179', 'a7dd9354f60f740a2bdc8b483fb9d525', 179, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(688, '2011180', '3c9e84fd3906c7f38012fe8367b44b49', 180, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(689, '2011181', 'b03c02ea832d48e260019755b6007e88', 181, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(690, '2011182', '7c5d2e28fabe3c62faeb01c8a9b9756d', 182, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(691, '2011183', '16d2018392ffb7f13daae2e4a48f3320', 183, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(692, '2011184', '4ca001a986a4b90354b4a708a14c8485', 184, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(693, '2011185', 'd1d40ff7e0fe7c9a11085f8f76f432cc', 185, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(694, '2011186', '119ec9c9e0451410a35fc870c33ab40e', 186, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(695, '2011187', '04ba392235928ed39ae3de7a318a8b89', 187, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(696, '2011188', 'd5876a8b1423d79774a95955dc2c12b5', 188, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(697, '2011189', 'c7f5fdd102eb9631ede027f4b80c0157', 189, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(698, '2011190', 'b52ccae07d06f52a3a03af3567d0e3a5', 190, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(699, '2011191', '37b850ac57228cc0be24a1c09ea5430f', 191, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(700, '2011192', '67b91320385e9715c361794078c89d0a', 192, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(701, '2011193', '2214c760ba5f98f830bbc94390273857', 193, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(702, '2011194', 'cda4357c277f503c196d219ad74992e4', 194, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(703, '2011195', 'dcbd1c53bbcc31bda31cec431eba66f2', 195, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(704, '2011196', 'c384c74137aa2b099e1be5b5ef569f96', 196, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(705, '2011197', '65319d29e2f428c39846d83935460396', 197, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(706, '2011198', '325db78744b10ce169e7e6f490886987', 198, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(707, '2011199', 'be20e4a6b16d2984251d24c8f2cff045', 199, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(708, '2011200', '4533eda3848341fb75e30070611f69c9', 200, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(709, '2011201', '82b3d7298cb54fc68fa430fefff8a318', 201, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(710, '2011202', '765c8f086b01dc2d08f44d1565e447b4', 202, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(711, '2011203', 'cd5f1d799db178c823594c03400a3f3a', 203, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(712, '2011204', '7fd9bb75abd68ba7dbec7abee781423c', 204, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(713, '2011205', 'c4ed43b755214e4833efe378d945d907', 205, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(714, '2011206', '348076095f7d5b147a358acd1b6f37e6', 206, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(715, '2011207', '9e01c44148c939d982539acbfba94911', 207, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(716, '2011208', '3f9031238236db7978cce8297ff4ea63', 208, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(717, '2011209', '61f1320c4f0a90f36361a01e79ff7985', 209, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(718, '2011210', '61f215759c34d9281627890353b366b5', 210, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(719, '2011211', '6ad6039a071b5daa3fbc43238ef1acbc', 211, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(720, '2011212', '35a397a0056348293d2eece0060bd1eb', 212, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(721, '2011213', '96dd7023a8bb1299bcf7ea1db134e986', 213, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(722, '2011214', 'cf478696525b6efb04ee5294e79a19ef', 214, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(723, '2011215', 'c46824c086bf5ab67c439d4aed053859', 215, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(724, '2011216', '0dfec388c88f15edd1293a464dc0e4d0', 216, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(725, '2011217', '5e8dbecd01a7878d301b867727f029ed', 217, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(726, '2011218', '1699ba88ff938b4336d2e9dcbd4f4447', 218, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(727, '2011219', '298af325869bba00fa580794b794e698', 219, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(728, '2011220', 'acc9b367bc6e6b469e2ba506c5f1d1cc', 220, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(729, '2011221', '992a72a15f262b7697a30259c431a032', 221, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(730, '2011222', '5dbce9cf4aa0b2c1c3616294d75f64fd', 222, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(731, '2011223', 'e600c7599152e2afb59984cbee34080c', 223, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(732, '2011224', 'fa5bb8e782ca14e2abe678726aebb007', 224, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(733, '2011225', '03c665ebb9bff8ca192b7e4f889ebc83', 225, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(734, '2011226', 'a8eb3838d6529dc20ca063b62beef9c6', 226, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(735, '2011227', '5058334e00522e1bcee12336f365ce5a', 227, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(736, '2011228', 'd28e1388f97859bd3b3d772a281a20c6', 228, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(737, '2011229', '22c5444aa2009f23d4ebccfb487608d4', 229, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(738, '2011230', '540018c788110e5e23ee7779f3aad73e', 230, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(739, '2011231', '4d31df0116a3370fd3f8b7c50896d6cb', 231, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(740, '2011232', '205e48d68b0b5385f63eb069774c8f37', 232, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(741, '2011233', '4341556dcf146098d22616275669c7a1', 233, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(742, '2011234', '6129beb85cbef443a6d7379b075ebd39', 234, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(743, '2011235', 'e0c5ffab0f0c1ff02989d74890a2ae26', 235, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(744, '2011236', 'bc0e48b8f93cf978a0ae62951eee2b54', 236, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(745, '2011237', 'aa89d48c7e4b423ca59aa417ea4fe9de', 237, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(746, '2011238', '677d43632bdb1dc64777cea4c43621c0', 238, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(747, '2011239', 'c2064115509c875b86bcab19f29c4ab2', 239, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(748, '2011240', 'db692927df711fdf947ff4c20a12d031', 240, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(749, '2011241', '75c5b86b88c33df94007d7b8609247da', 241, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(880, '2011242', '43f52d4c54110f7322a7e22e2037ec6a', 242, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(881, '2011243', 'bc2ef5438ef388146e40d03de610c64b', 243, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(882, '2011244', '1dd5b6e3b2edf1031bdebc5c24347b20', 244, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(883, '2011245', '3c08ab616e0f1f397fe347c53bf746ac', 245, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(884, '2011246', 'aa310fc02e2b6e49607a8a82e0591f42', 246, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(885, '2011247', 'f070b2181526cd13b8a42db81b69d055', 247, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(886, '2011248', '541c2c3a0c61b245212c24b57dea538d', 248, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(887, '2011249', 'c156c4b003430480ac08f4395bc1449e', 249, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(888, '2011250', 'e0e2dc84f492dd0d5c576a2754d2a736', 250, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(889, '2011251', '6f65ed2bfdb92bd75c943cf584882459', 251, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(890, '2011252', '2b23f1a6a4d77ce5b691ac0677fd43f1', 252, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(891, '2011253', '0f500f9a23a05c59f9b5a961fbc5ecd2', 253, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);
INSERT INTO `users` (`id`, `username`, `password`, `enroll`, `branch`, `year_of_admin`, `FNAME`, `MNAME`, `LNAME`, `gender`, `dob`, `12_std_id`, `10_std_id`, `AIEEE_id`, `score_sheet_id`, `Parents_name`, `AddressL1`, `AddressL2`, `City`, `Email_add`, `Phone`, `ECA`, `Career_obj`, `Technical_Skills`, `Other_skills`, `Project_id`, `url`, `pointer_privacy`) VALUES
(892, '2011254', '91dabc7ec0fe792747bdc32372ac0fbc', 254, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(893, '2011255', 'f5601def4a70cbabde175b9b5e3f483b', 255, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(894, '2011256', '11939eb1fb9828040665521f58e4d350', 256, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(895, '2011257', '9eb52f74c5fd780d4fd7892c6fb07170', 257, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(896, '2011258', '86a26fab1aeb6c1d93ce11e08eeb4cd1', 258, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(897, '2011259', 'fbd9725edff9f6d38764f3e68cbb45f1', 259, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(898, '2011260', 'eb25d7b373b38864833359703de1074d', 260, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(899, '2011261', '25154047a93eb7f972b54b2786ed3830', 261, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(900, '2011262', '227917c2ff268f974933e2f1d0feadec', 262, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(901, '2011263', 'a3039e797ffd78e70d4e04b87c005942', 263, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(902, '2011264', '38f807c3472f0cd974e3ebc2f39f044d', 264, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(903, '2011265', 'a1680925f0d0924ea0b3b49a88f3f483', 265, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(904, '2011266', '41eea12c49ae31c467e269aff681441b', 266, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(905, '2011267', 'de5ac216ba2d958a501e47e1269f368b', 267, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(906, '2011268', '06a4ec0ea51896004ec82731245670ca', 268, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(907, '2011269', '42e3d8c3b3803fecb8a22c2ff5d038b1', 269, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(908, '2011270', '2542fbd9a97fe5d4804bdcbc856beec9', 270, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(909, '2011271', 'da73bc436d496c39b2e1c8cde063a700', 271, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(910, '2011272', '4c398359e5debe8b85eae364bd31321d', 272, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(911, '2011273', '7439b8a0cb7fa83b40ffc39a29627d9b', 273, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(912, '2011274', '914e30c43bc926033eaee49fe566122f', 274, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(913, '2011275', '34b6c57176ac2b347c7579637a7d62d2', 275, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(914, '2011276', '3476deb1834a2a418a179b10177bf72a', 276, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(915, '2011277', '29b5775f757844e40c39cc4d67f3c5b5', 277, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(916, '2011278', '4368f011dc0f9f515f63f4d040d98f5d', 278, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(917, '2011279', '93a74c55db4f52bd788f685ff2df506b', 279, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(918, '2011280', 'fec29e4f97440da3a1449127273e0912', 280, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(919, '2011281', 'c16e666856f03377dd66962caec879f9', 281, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(920, '2011282', '95ed59d02f794b42393a08dbeb77698a', 282, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(921, '2011283', 'dd28e9eb4dd8fe9f4e1011c1f3ba343f', 283, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(922, '2011284', 'e7a3496eddb7b7e7fad1cde44c3fe0bc', 284, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(923, '2011285', '1fffcf4a0a2205026c52c7e59f22abb0', 285, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(924, '2011286', '132e532469d0684f0a00c1dfa395e1b6', 286, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(925, '2011287', '3cee33bea3c6f2e59721058fbea978e1', 287, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(926, '2011288', '5f64b91a33803328154cafc34984e1bb', 288, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(927, '2011289', 'd6e8d303668cb1a5fe1cb7d8c281b0f8', 289, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(928, '2011290', '197e48bad92b45851f7118f7c28bdb2a', 290, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(929, '2011291', '46c138014ce910bbbba9eaed9b8097c1', 291, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(930, '2011292', 'de91f4ee4cbd4725636f542034b99262', 292, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(931, '2011293', 'fee29e956725207c7bb1998d9c9a338e', 293, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(932, '2011294', 'e060faf84e444a6b1061233ae5ceb517', 294, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(933, '2011295', '190a337211512268c5e15440260ad3b0', 295, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(934, '2011296', '60bebc2919c7612287bd578ffe7e4e91', 296, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(935, '2011297', '8212740f164fadc3011f7ee0c6fcadb6', 297, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(936, '2011298', '86b8afd00c0e6cb9d167f324ec912247', 298, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(937, '2011299', 'fe305d4fa51cb48905fe3fc7f2025d47', 299, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(938, '2011300', 'b1be28e775e3435ae65911cc1b8800de', 300, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(939, '2011301', '4236f9b56e9e7782357e6752a8c93cd0', 301, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(940, '2011302', '0ce3ae3154264433e2844b4acc02d2d0', 302, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(941, '2011303', '83800aab1669a1f81f4e89abdc452583', 303, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(942, '2011304', '7b9c8f88233f6d718fcc47c76eacb9c0', 304, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(943, '2011305', 'abc42f9f2681ad4eb0a86dbdd9a7cbdf', 305, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(944, '2011306', 'd429b1894081c3a4d44dd58ebd797867', 306, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(945, '2011307', '48165d39bf2199ca998d35bc9a8d83b3', 307, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(946, '2011308', '0308eb443409cf9b7204278346113968', 308, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(947, '2011309', '90a9cf6aff8f74cc2cb5409b332a24b4', 309, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(948, '2011310', 'b1444d96553e288031d5ce250580d779', 310, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(949, '2011311', 'a66d8faefe9f9bebfad36c8923c7d8c5', 311, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(950, '2011312', 'e95248ed37d5ff2672f4ccee1a63856b', 312, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(951, '2011313', '1a3ee41932b2ac4ea523d3f9445dc238', 313, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(952, '2011314', '2c9d22f51888e4ab7cfbd61ff90ecf34', 314, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(953, '2011315', '9d8cc78da59d4d3ff8badc87f1e1cc8d', 315, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(954, '2011316', '4baef391dd6fac0a11d3ea53be06c5e5', 316, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(955, '2011317', '371edabd5010165e34b57acbddc0b9d0', 317, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(956, '2011318', '2bb17f794cc45310edfa823cfbb1228d', 318, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(957, '2011319', '57db436be8fc50cb2bfc6ce003a64e9d', 319, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(958, '2011320', 'e05524f753a591d1dcf783a48126e624', 320, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(959, '2011321', '6f4b2208f4c3a6eadb61f6332cd2abf0', 321, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(960, '2011322', '98c25bd1ad2c70f15b1aa255dc5215da', 322, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(961, '2011323', '4d3e3347574fa4621002581029cafa4e', 323, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(962, '2011324', '078e5bc0a4aca4dff4cdeb32baf4ddc1', 324, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(963, '2011325', 'ee039ea3a6dcbdfd9253faab6fa669d8', 325, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(964, '2011326', '635eb5a251523756b423efa91dd8d689', 326, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(965, '2011327', '8063570d0847ccd9191875bb1e27454f', 327, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(966, '2011328', 'cdcd71b8d3f06d4be22426835bb29f1d', 328, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(967, '2011329', '674402c48c4628e58d04decb3e88c0ea', 329, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(968, '2011330', 'eaf7e2a250b3e14fae89a28590940fdb', 330, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(969, '2011331', '7600131080dbced3bcd6cab9ec1a3c17', 331, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(970, '2011332', '1a1638eea094d77e1979735efb4798cd', 332, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(971, '2011333', '36f7fa8a082acc8b8975d2aed7d809e5', 333, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(972, '2011334', '34282044e8db4e4dfd4ebef77752d8dc', 334, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(973, '2011335', '764158b4b1d46975ca5e9a62b5749997', 335, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(974, '2011336', 'eed1e0928a20dff7050ef8d73903484c', 336, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(975, '2011337', 'af6682830ca31db07f70ca7e1cdcc612', 337, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(976, '2011338', 'd7c58ab8c337cac0133b8686a638c808', 338, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(977, '2011339', '1037cfcf02de0a7f8fb87d5f290d9bb1', 339, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(978, '2011340', 'b9842e9666fcb1310b44671185977c2b', 340, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(979, '2011341', '0285f79c60cae9a888925c9f09910a39', 341, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(980, '2011342', '986879ad87af3cdd3b7f1104b5a6f4f4', 342, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(981, '2011343', '5a74b3ac1a303f11d00df9df81b02de9', 343, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(982, '2011344', '793b36af6caebf3b88bff0d4ec72ea16', 344, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(983, '2011345', 'f5ca543c7eddf0b8cb4a6033b922bc81', 345, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(984, '2011346', '504d0efe2385aa442bf2367d62dca30d', 346, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(985, '2011347', '9d8876e386ce671ccfb1fc3f2385b67f', 347, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(986, '2011348', '3612e1a63a1ac02162870d3c1ce9ce84', 348, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(987, '2011349', '9bf3b4b636e989c2452fb9e14571293c', 349, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(988, '2011350', '33c92afa2e723fab7222aaf9c63130cc', 350, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(989, '2011351', '93c47a2aa841c8942bd057d24343deaf', 351, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(990, '2011352', '53d19e3754ba0b25407d31eaf15133c6', 352, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(991, '2011353', '49deef20d755caaaf7342bb227991238', 353, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(992, '2011354', '0bd3ddde5a4097441f30a00db8a1ab51', 354, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(993, '2011355', '136f3935fc92ddd58c79273ce31b52c8', 355, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(994, '2011356', '532050aa8d366346c6c7b4b1a46282a0', 356, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(995, '2011357', '4d24cc7f10c5071273f778a483827a55', 357, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(996, '2011358', '283b37b5f7cd7963df3f13cee421aad1', 358, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(997, '2011359', '9891b0e7066791e1f2fbe238ff69d30c', 359, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(998, '2011360', '1ad5f4a09cc824dc84ed9c6f3e418882', 360, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(999, '2011361', 'c01246cbbcbdfa7192d3d27503ccd5a8', 361, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1000, '2011362', '26079835f43422667ecb1edcad02f46c', 362, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1001, '2011363', 'dad0265b5229b34643c7b7ce90681fd9', 363, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1002, '2011364', 'f6559abcd98c91d1daed1a75cbbaff62', 364, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1003, '2011365', '3592f7355e7d15a3ebf2bc00035f7521', 365, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1004, '2011366', '996dd5315a7a6cfff1880ce95341a183', 366, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1005, '2011367', '5ebd6a877f8e18684e279044949dde9c', 367, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1006, '2011368', '1b079fbac7bde612dd96347a07bb755a', 368, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1007, '2011369', '8ddb6127503aae7b19e4837e0af0d8cb', 369, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1008, '2011370', '0f032db38ef314b6356b9857c8826555', 370, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1009, '2011371', 'aa1b25ad864c5b610a42b402ca6201a1', 371, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1010, '2011372', 'f4fe03520f4309b6d2bca3c80cfb6a76', 372, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1011, '2011373', '160b6f94d796370b5bb70c403f87397f', 373, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1012, '2011374', '35927892040c34fbc434553201853bc4', 374, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1013, '2011375', '570f5631179294b82ef3d7ac85e45d45', 375, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1014, '2011376', 'e8377fe9c89671d7989b0185e41d3434', 376, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1015, '2011377', '429b19b6b06e3bc23926b761625ce407', 377, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1016, '2011378', '8cff0e5db975b5ba5095e64ced06d89b', 378, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1017, '2011379', '2452c3516b8581b4e6cf3334183ad890', 379, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1018, '2011380', '5f038cbca3e35f4e022945c1b7c9efcc', 380, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1019, '2011381', '0a768b8069f3c8dab7e750f131b222c6', 381, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1020, '2011382', '09d710ddfd018a7f4e2ee6847db38965', 382, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1021, '2011383', '2bc83e73149c14a71e4db110c092445d', 383, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1022, '2011384', '58af5d1231e886382b20a74f2c5ae05c', 384, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1023, '2011385', '663b2c8f43af4375a666b925ea7c9e47', 385, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1024, '2011386', 'ee3b19712dc17886101a9771a099b057', 386, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1025, '2011387', 'a62940bd90fc055207271c65311e2028', 387, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1026, '2011388', '46c45e8173fe8963d83f9f2d064dab78', 388, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1027, '2011389', 'a1a38a5256ee577a49409c5e9e6781a7', 389, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1028, '2011390', 'afefb4192738053a2cfa009342192af5', 390, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1029, '2011391', '24b426585fc829c876c660582f744ce6', 391, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1030, '2011392', '71d51536f9520ab42da2db42a1e205f1', 392, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1031, '2011393', '7686fe7a2b3e1b5720eba28b4440f1ab', 393, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1032, '2011394', '4a216a1e9550ff00c18e25bfcb93c299', 394, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1033, '2011395', '3dafde133b6467943a9bc2a60ca1c65c', 395, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1034, '2011396', '50696c48eb7b5188727bdd0b368cbd8b', 396, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1035, '2011397', 'ab2f2277b00b000c3d4bf2491fda4770', 397, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1036, '2011398', '21a90a8d6f76a64c208ecb92797ce8f1', 398, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1037, '2011399', 'febef5624478864b5c6270fc690fa58f', 399, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1038, '2011400', 'cc5a62b84ba5b8f8d6d84558d3471774', 400, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1039, '2011401', 'd422d9633a113e39f8dd2ce2c7b5987e', 401, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1040, '2011402', '981b8c283616cc70dce1507b8d389fb0', 402, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1041, '2011403', 'a4a473dd01cca24d10415a17cdf7f3fd', 403, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1042, '2011404', '5a22eda6bb9221d45751ded0b62fd9e7', 404, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1043, '2011405', 'a16f867eede127af4b0570b7e14e6384', 405, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1044, '2011406', '0ddfa43426379f176110a7b09939d3f8', 406, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1045, '2011407', '9ba5c0dfc3be89e329e4a1ead4c6f297', 407, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1046, '2011408', '7143be40dc829c58b91b454f4ac8293f', 408, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1047, '2011409', 'e53be51030ec520dcfbe99c0d408e02a', 409, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1048, '2011410', '085ccef179458c1f3d569e1935f449af', 410, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1049, '2011411', '5f13e927a69cad7fd55067dd4977456d', 411, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1050, '2011412', '39910b4fc30f9de9cbc6a6e86ed43653', 412, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1051, '2011413', '1860d5fd51886101b8e83858a94598d1', 413, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1052, '2011414', '6c2dcf0ef3412e2e5a266232b77693f8', 414, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1053, '2011415', '870f62f8143817e536c511fa9523f634', 415, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1054, '2011416', '6b81626124d5a6927bd2f213ed39c384', 416, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1055, '2011417', '8471b6b7887a6860c15ad65078a695ae', 417, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1056, '2011418', 'a3db4e994db9c9b469c5e54766411c37', 418, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1057, '2011419', 'a31c8d7151a022a3d7de56bc2af36dfc', 419, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1058, '2011420', '552b122c9abe8cc7f81cbad696d0beb6', 420, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1059, '2011421', '09088e7d49dd58ffb4849bb1bd8bc260', 421, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1060, '2011422', '73a2001cf9637e37b6e48946b14878f6', 422, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1061, '2011423', '818dacade8a8bf68d47c261298c04c39', 423, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1062, '2011424', 'f8a3bdeb66b9f2a424085f65af74012c', 424, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1063, '2011425', '3faa955e1b6063a708f03478fd4b1d9f', 425, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1064, '2011426', 'ada27d6e08d193d77f2786c44a8b68c7', 426, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1065, '2011427', '4e1d22358a833a40b46360dfa4bb067d', 427, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1066, '2011428', 'fdc00b6c004f6d8b4a544b3bbc2e573b', 428, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1067, '2011429', 'a13c26af06021250eb254c315704085a', 429, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1068, '2011430', 'c240332f70d28621f33bbdcb0283428a', 430, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1069, '2011431', '274d56b592ecf12f12fd3f397447dcf5', 431, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1070, '2011432', '31096645105d89974b9b4784b0f9a5c0', 432, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1071, '2011433', 'a0a70ff08061f6ca1f040a606d280c9c', 433, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1072, '2011434', '7e73903038ab294fdc0bf52fb8f0f125', 434, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1073, '2011435', 'f9ec7157a06e3863d137ef078feec8f9', 435, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1074, '2011436', '8de90dca289a357515f46cc3dc5b8d14', 436, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1075, '2011437', 'da0dc141cf365df114aa89e84c7275b9', 437, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1076, '2011438', 'c1fd616f469189065fa02d6f13bec19f', 438, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1077, '2011439', '5c2d4af7b125d9050b0e1fabbabb58f6', 439, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1078, '2011440', '83c0bac29d0973bde867c5a6522ba887', 440, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1079, '2011441', '901dfcd2e7d2b76b38dc120c5414c4ff', 441, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1080, '2011442', '6977842b298d4b642c3fe57f107e4f0f', 442, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1081, '2011443', '1e761f3d3627e022ab1d99d00030ab84', 443, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1082, '2011444', '6d59ec5058d464a10f1a37fbcbdc0372', 444, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1083, '2011445', '0817cab835832b28df19ea29355a7ee9', 445, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1084, '2011446', 'daa82e81504b75aafd11f3cbe692297f', 446, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1085, '2011447', '383759d320aeb222c20fa6bcfacb0623', 447, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1086, '2011448', '5428c2adf7374355d25e9e1bc0661081', 448, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1087, '2011449', 'fa38a3aeae7bfdcb137e463a28e8198e', 449, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1088, '2011450', '93b53484fede6d2a748ef01a6f21dc5b', 450, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1089, '2011451', '076e6dbbdb1a21121bf9d6e25fba77af', 451, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1090, '2011452', '1507ae32467315c166acda3ea6fbbe17', 452, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1091, '2011453', 'f3f981586cd4467217bf3708d69492e5', 453, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1092, '2011454', 'a7bcda3b1edd631851752a8ee0f1258f', 454, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1093, '2011455', '44e1a8966d3f2de5a8e67f1732545f3e', 455, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1094, '2011456', '58d102332296a5c84f77c7da10a807f3', 456, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1095, '2011457', '67c35c05c606612bb00b8a41b7b30adb', 457, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1096, '2011458', '813508ecf115e2d96344fe6c2b3f69a8', 458, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1097, '2011459', '1a878740c565a932918bd1585e0b29f7', 459, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1098, '2011460', 'a5b392a79f23afd93a3d8e10284c8d31', 460, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1099, '2011461', 'dad2f6ae9b088b80d6bd2f6f572af7b7', 461, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1100, '2011462', 'ba11b71daaab4922ece92dbf0698e87f', 462, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1101, '2011463', 'a12ea6192f2a7b0f99c98b876565623d', 463, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1102, '2011464', '1241d49d9102e884d262e51cdc4b0f17', 464, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1103, '2011465', '786ffbd78e9c8c6d1f3921fda2c1f167', 465, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1104, '2011466', 'ac4683781106c258a3ac0c263ad57f8e', 466, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1105, '2011467', '96b936f504dbaa6b9326cda74663974d', 467, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1106, '2011468', '1a83faa149e3d7d53dec2ad596bda775', 468, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1107, '2011469', '06fbb80a48aa64442d1fe71cd5e0e79d', 469, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1108, '2011470', 'e566958dd775178d22c9f04d76211e0e', 470, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1109, '2011471', '590260fd6393effc68dc8a74c93d22d0', 471, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1110, '2011472', 'ea94c9d4dd0aeddb15e8d612bd4c9d42', 472, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1111, '2011473', '08bbab77d6c219a55a054ee465369568', 473, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1112, '2011474', '03b045473bc9d2931dd4f1af94f1d633', 474, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1113, '2011475', '646f8598d7ccd7a71dad8b28a3351d19', 475, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1114, '2011476', '23592268f71d85c1c97b0b5e2bd6b70f', 476, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1115, '2011477', 'a79f71834c3d8aad878e646a59be11c3', 477, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1116, '2011478', '5a41c7d77ad4a8d4553d4c1bf0cd0f87', 478, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1117, '2011479', '27a025567b9993c2f4039fd65ddb922b', 479, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1118, '2011480', '6b3dba49908b650115494f665674252f', 480, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1119, '2011481', 'bc8926d10dc42892bc4a9c5197672225', 481, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1120, '2011482', 'f1c5c4df5b6fb3ee4fdd2281c7335517', 482, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1121, '2011483', '2454233e0060e6c85b3be82f906fd1df', 483, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1122, '2011484', '2864b8c96fea435ea68b6b65ab2c7660', 484, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1123, '2011485', '77b7d1dfa65dcbbbc94754de42a76464', 485, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1124, '2011486', 'f97c679c3fa0f44f1e0dc795374aae16', 486, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1125, '2011487', '33c5c409325f892eec6bdc59456d134a', 487, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1126, '2011488', 'd538fe8d7cf6d502fc655b162d2aa643', 488, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1127, '2011489', 'aec044a2613ebc6bd5f307c2b29a9d47', 489, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1128, '2011490', '597e6be8870d6bd71093fe0fb09655f8', 490, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1129, '2011491', 'd2f42a7f1387f795bac5954ee1abea67', 491, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1130, '2011492', '2b4ef2115f23c7eb8de5b0536b7e3acf', 492, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1131, '2011493', '640c37c1be2f7fb01a1144feed3c6d69', 493, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1132, '2011494', 'cf5b2568d3d94077d16f433577eb475d', 494, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1133, '2011495', '3b0e9ea4a9dc85856b3d97f68b762ed6', 495, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1134, '2011496', '7f89d1acace8289debdc19d50f383cf1', 496, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1135, '2011497', '9ba9693b7cb09aba48c2c54546f25053', 497, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1136, '2011498', '35f30f5ff41fa384e9d314d24852a6b3', 498, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1137, '2011499', '8c4d76f1d8746c0c411ddce905abf331', 499, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1138, '2011500', 'd68ce530155bfc3f4c4ead1335097f67', 500, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1139, '2011501', '84b4432d6894d40c49c6e26e47deaae0', 501, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1140, '2011502', 'b6295192bb73ce850f2072806d9029ce', 502, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1141, '2011503', 'e21fb8634106fe5b24858ce88b20e9a3', 503, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1142, '2011504', '24b2ac576671cd3143c418f12d70d5e9', 504, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1143, '2011505', '4685e01ccdfa40e94341aa8cfea13bf6', 505, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1144, '2011506', '350bdc8666d51c69d1f88ec3d1644e87', 506, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1145, '2011507', '15922bbf5aa5d763b9450de654882518', 507, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1146, '2011508', '970a8d27800f2e7228d7aa8c03a4348d', 508, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1147, '2011509', '9a9debaa5a5077ed05756e73e395ef1f', 509, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1148, '2011510', '7e812d52f89556844ee2995337a2aeaa', 510, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1149, '2011511', '0b85459792ed671ee131aa3b5fa3ece5', 511, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1150, '2011512', 'c97292c6200d14e99ee3f53746890abd', 512, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1151, '2011513', 'a279f41e21a042bcd66610bc563dc29a', 513, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1152, '2011514', '889935e5c2245ed29408fef61f3784f3', 514, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1153, '2011515', '7e1ea81547fd0985f9282bcd8487fbf8', 515, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1154, '2011516', 'f4f38b97f6c7e05377a676990126233f', 516, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1155, '2011517', 'c8797524ec94cebaf73773a8a5f79074', 517, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1156, '2011518', '46cb182d23838757de5df32aeb4bcb5a', 518, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1157, '2011519', 'c63c8f56c40ad989693950d5b7546ba3', 519, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);
INSERT INTO `users` (`id`, `username`, `password`, `enroll`, `branch`, `year_of_admin`, `FNAME`, `MNAME`, `LNAME`, `gender`, `dob`, `12_std_id`, `10_std_id`, `AIEEE_id`, `score_sheet_id`, `Parents_name`, `AddressL1`, `AddressL2`, `City`, `Email_add`, `Phone`, `ECA`, `Career_obj`, `Technical_Skills`, `Other_skills`, `Project_id`, `url`, `pointer_privacy`) VALUES
(1158, '2011520', '70f54ab5b1c238b07fba15859ca60014', 520, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1159, '2011521', 'fb1c70d8a7bba3a7cb9fdd905e6c3870', 521, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1160, '2011522', '30ad822c8ba427a93d1e083092573b7c', 522, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1161, '2011523', '23083c6427cf6d575d63c6c8aab846b8', 523, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1162, '2011524', '0a4b659f82a1063e65fa98bead116cf9', 524, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1163, '2011525', 'f36ac07b358e950511ebd0367d7de005', 525, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1164, '2011526', '1fcadb6916b397ba4f07e6b4c7a4be48', 526, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1165, '2011527', '438a5c7ae39d1b33f777b256ef18c93f', 527, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1166, '2011528', '7c12b6b26ab74d495ea5dee2c8283e81', 528, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1167, '2011529', 'a9c2b2adae28ad97d1c04d9a24b41cee', 529, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1168, '2011530', '81f89bb7b62d4aa181f05b96388bfa9b', 530, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1169, '2011531', '704d589fa8227c267e37eb472ecb67c6', 531, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1170, '2011532', 'e3241559eb290e9e6555c0e6e98a4932', 532, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1171, '2011533', '226bc2bc61bdc7d5f69bd0ed03ef8bea', 533, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1172, '2011534', 'c0cdaae5bf9759f4e100dcf02027c53d', 534, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1173, '2011535', 'eda13500db8c18f8a60f10c7d63c4fc2', 535, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1174, '2011536', '0294e7640f8f821ad5cc117d7f09ac26', 536, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1175, '2011537', '2e5ae5eb27dcd8058bbcb701cdd43466', 537, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1176, '2011538', 'f747a006613019c2e4f332a46d515e7c', 538, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1177, '2011539', '17efa20d80b6cb77ac072dbc12499cb9', 539, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1178, '2011540', 'c6e69b91a57ce9ee371cca85729dabce', 540, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1179, '2011541', 'f87ae82d4495b0454b01afa67a2bb23e', 541, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1180, '2011542', '292cb4d495c654d8be83bb6fd84c5c43', 542, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1181, '2011543', 'a3959988ad8ec4b4db3d9a8c7aced61d', 543, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1182, '2011544', '279293b5aa3d6a9ff88353e225190f8a', 544, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1183, '2011545', 'f9058240c97a1426a25bfa5c788eca26', 545, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1184, '2011546', 'ec8b451fac5c04641dda544347390ea8', 546, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1185, '2011547', '684078d7dc6b9ca75bbb96c4dbb0cd6e', 547, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1186, '2011548', 'b1568fa7afd3d718ab9dfe4012f4a37f', 548, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1187, '2011549', '2660e867c6e84fdfc48b4fa304fe8ecb', 549, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1188, '2011550', '8f686fb6ea2fa9bbc5d4cd0a4d02f2d8', 550, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1189, '2011551', 'e8055bd6c5008281b0a0b7d7d53dc6e7', 551, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1190, '2011552', 'e795d9b4acb44cfabe06f1e1d73e6678', 552, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1191, '2011553', 'f01d67dd2d44d513ba8597de38178664', 553, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1192, '2011554', '70882e7fe9120d3a18240d29de3e9545', 554, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1193, '2011555', '18441204362f796604008ec45a03866e', 555, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1194, '2011556', 'db8d8a97156569867911cdd986229b0f', 556, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1195, '2011557', 'dafee40759ac8dae0c55c5b2001c080b', 557, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1196, '2011558', 'e4f9addb9c3af40e30114fabbe5442c9', 558, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1197, '2011559', '61e30c2a7b9c491ba9bdfa8dbc881228', 559, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1198, '2011560', '4148185ea237253e7ea515bb93781570', 560, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1199, '2011561', '04a1d60759ba7180a92ccf0abe65d1ba', 561, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1200, '2011562', 'aab8101ec5c68b3e5214b7e68b370d21', 562, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1201, '2011563', '9778be7ee76d2e02254df7457dc6e55d', 563, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1202, '2011564', '9ea2b74ac4bcf2a3778b44630001e8df', 564, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1203, '2011565', '810412011e6403a250d07a821e11ec4e', 565, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1204, '2011566', '79883571f37244091d5962c4c7a53c9e', 566, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1205, '2011567', '66af5c927e4852ff5a1b9aee83faa3d4', 567, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1206, '2011568', '1197242f502bc8d3867d06f2d960d4a0', 568, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1207, '2011569', '1aaaef61955e0a6eb338bcf8bbd6329e', 569, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1208, '2011570', '106b4a37fc6577e4c45143c7b2c9f362', 570, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1209, '2011571', '691a52a0a764d6b87ed93a413a2f5e32', 571, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1210, '2011572', 'd4a7870c816ba27f10896ed0f10506ba', 572, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1211, '2011573', 'a8705fcff08208baf8796d6b2072f794', 573, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1212, '2011574', 'f74867fb98a7beaf04bf8a96de9b902e', 574, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1213, '2011575', '6d47f9b4f81d64b3367b47bc19536e59', 575, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1214, '2011576', '9a011e5872c760a2592f4560113b9b94', 576, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1215, '2011577', 'da2bbff7ead3f708733b967c6f50dd5a', 577, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1216, '2011578', 'dcc1283d0786bb58a2e0832633a56de2', 578, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1217, '2011579', 'b0e71dde85a56957822def8551af4884', 579, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1218, '2011580', 'cd5d15bcd6c5db0c421b8d9d89c93b23', 580, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1219, '2011581', '6c1fa32375647d0cba5362b8ab9e5516', 581, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1220, '2011582', '51b9d176d06321c3df42138a052e8d20', 582, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1221, '2011583', '03a109c608451320cfcf744fb95d8956', 583, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1222, '2011584', 'c92c353d4b226eabeceb92070638beea', 584, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1223, '2011585', '2e85f93f88c639cacdaf1540fed75c18', 585, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1224, '2011586', 'b0238388d2f3f0dabee9d24df30378e3', 586, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1225, '2011587', 'b9d846db899ce7f881f9ab144871b803', 587, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1226, '2011588', '13c6ecc88fd78ff4c8a28acc06db0e95', 588, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1227, '2011589', '24cf51918e8c1b45d056e590a6a2090a', 589, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1228, '2011590', 'd7bff180b282148c2137c9ed567da39f', 590, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1229, '2011591', 'fe9228aa6685fdc7f4c0335052c07d20', 591, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1230, '2011592', 'b5c6e2c2020f91d0e24c6202f939d034', 592, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1231, '2011593', 'aeb1196599f76ac4f250605742199c9d', 593, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1232, '2011594', '0a73aa5770a05f0332f5e81b41ff07ed', 594, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1233, '2011595', 'c439fac6ad4297853653ff09004485bf', 595, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1234, '2011596', '52c0e0faeb4865ff6a34061b62dd61ce', 596, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1235, '2011597', '069b4e6ea2967144791e411af728ced3', 597, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1236, '2011598', '8d2f53431359bbed4e93b380592fad59', 598, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1237, '2011599', 'a2e0faf9e22bb32eb4923f25de231c7a', 599, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1238, '2011600', 'cb6c2786055dfd9b1115a6bc7982e217', 600, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1239, '2011601', '3d47e9d87230f7fd3c8f76e8b44c5594', 601, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1240, '2011602', '714bbceb8cd32c7e6a9cfb5da33b11d0', 602, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1241, '2011603', 'f6986e69620e34040fe80d4fa3760967', 603, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1242, '2011604', 'a069512b224a4790a6ce68f17e923db0', 604, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1243, '2011605', '994337a7bb6a2003e0f03bea991f5c24', 605, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1244, '2011606', '31921b2cdff25ae0e84ecc5bcaeeb0d3', 606, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1245, '2011607', '3a3cc094d7228bb42ffcd26d57434f4c', 607, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1246, '2011608', '38f6a431fdc1d7aafe65b5b6658bd58c', 608, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1247, '2011609', '32b0924d4406b2c3bfa0e46c44a20b06', 609, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1248, '2011610', '275313d7733d8bd3932a6b5723dc57f7', 610, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1249, '2011611', 'fc6f02de14950f08c6027f0d5a143298', 611, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1250, '2011612', 'c98ff51124a7a013801afb1e2dcb9a6f', 612, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1251, '2011613', 'ef27fb583cd0565b1f0f8b074884c5b4', 613, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1252, '2011614', '8c2958c75bf0141b0bbc31c7c422ab6c', 614, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1253, '2011615', 'df35dc900ba8fc32431b3bfbcb2e7ae4', 615, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1254, '2011616', 'ffb7cce70b8a2bd43767a6803b2faf38', 616, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1255, '2011617', 'ca55b000397d71246ae469860216ed2d', 617, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1256, '2011618', 'ec68af6ebe1d67395c2b86274bfee493', 618, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1257, '2011619', '9aa520608d94c8b185ae867c194f408d', 619, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1258, '2011620', '8b7ea98a90e4336b9a9ae328bfe28124', 620, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1259, '2011621', '78f796008779fe62cf831c3ddc113887', 621, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1260, '2011622', '0e1b4798281fcf8a1df73284d328e484', 622, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1261, '2011623', '629cd0fee598bca16f45bb481276c89f', 623, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1262, '2011624', '838e2fec114c10fce339f5f9d9525868', 624, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1263, '2011625', 'bb2b3341935fdd2621c90f0894e494fa', 625, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1264, '2011626', '5727b7b4328d9cd5f3f1824d23812b16', 626, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1265, '2011627', '2af0a4280e9766eb1f51f7e16e171739', 627, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1266, '2011628', 'dcd484743af3a43a46ead47f3f55ae78', 628, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1267, '2011629', '7badf6c938dbc272a7a63a356c9b111b', 629, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1268, '2011630', '1ffcc8f63bbc587797fd8803112579c1', 630, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1269, '2011631', 'f3df077507270f7daaf4c84201bed913', 631, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1270, '2011632', 'd47e9aeb0453ddae071713328f1db53a', 632, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1271, '2011633', '56a76e1c6d0bd2fdf02af588af2a98a5', 633, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(1272, '2011634', '84e0da22a0476de2d169ce8677d1e38a', 634, NULL, 2011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE IF NOT EXISTS `visits` (
`v_id` int(10) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `contact_email` varchar(50) CHARACTER SET utf16 COLLATE utf16_hungarian_ci NOT NULL,
  `contact_designation` varchar(50) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `r_id` int(10) NOT NULL,
  `number_of_members` int(10) DEFAULT NULL,
  `number_of_rooms` int(10) DEFAULT NULL,
  `other_requirements` text,
  `Company_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`v_id`, `contact_number`, `contact_email`, `contact_designation`, `contact_name`, `date`, `r_id`, `number_of_members`, `number_of_rooms`, `other_requirements`, `Company_name`) VALUES
(3, '123321321', 'asdfsf@asfsadfs.com', 'asasx', 'asad', '2014-11-01', 1, 2, 2, 'csc asc asc ', 'Gravity-games'),
(5, '5', 'asdfsf@asfsadfs.com', '5', '5', '2014-11-11', 1, 5, 5, '5', 'Gravity-games');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
 ADD PRIMARY KEY (`acad_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
 ADD PRIMARY KEY (`username`,`job_id`,`r_id`,`type`);

--
-- Indexes for table `branchesrecruiters`
--
ALTER TABLE `branchesrecruiters`
 ADD PRIMARY KEY (`br_id`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
 ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `intern_profiles`
--
ALTER TABLE `intern_profiles`
 ADD PRIMARY KEY (`intern_id`);

--
-- Indexes for table `job_profiles`
--
ALTER TABLE `job_profiles`
 ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `recruiters`
--
ALTER TABLE `recruiters`
 ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `school_details`
--
ALTER TABLE `school_details`
 ADD PRIMARY KEY (`school_id`), ADD KEY `FK_Table_ToTable` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
 ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic`
--
ALTER TABLE `academic`
MODIFY `acad_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `branchesrecruiters`
--
ALTER TABLE `branchesrecruiters`
MODIFY `br_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `intern_profiles`
--
ALTER TABLE `intern_profiles`
MODIFY `intern_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `job_profiles`
--
ALTER TABLE `job_profiles`
MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `recruiters`
--
ALTER TABLE `recruiters`
MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `school_details`
--
ALTER TABLE `school_details`
MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1273;
--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
MODIFY `v_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `school_details`
--
ALTER TABLE `school_details`
ADD CONSTRAINT `FK_Table_ToTable` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
