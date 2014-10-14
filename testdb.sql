-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2014 at 05:01 PM
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
  `sem1` decimal(10,0) DEFAULT NULL,
  `sem2` decimal(10,0) DEFAULT NULL,
  `sem3` decimal(10,0) DEFAULT NULL,
  `sem4` decimal(10,0) DEFAULT NULL,
  `sem5` decimal(10,0) DEFAULT NULL,
  `sem6` decimal(10,0) DEFAULT NULL,
  `sem7` decimal(10,0) DEFAULT NULL,
  `sem8` decimal(10,0) DEFAULT NULL,
  `cgpa` decimal(10,0) DEFAULT NULL,
  `supply` varchar(5) DEFAULT NULL,
  `back` varchar(5) DEFAULT NULL,
  `reason` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`acad_id`, `id`, `cursem`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`, `cgpa`, `supply`, `back`, `reason`) VALUES
(1, 1, 1, '8', '8', '8', '8', '9', '8', '10', '0', '8', '1', '1', ''),
(2, 2, 1, '8', '8', '8', '8', '9', '8', '10', '0', '8', '1', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
`application_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `Company` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `cover_letter` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`feed_id`, `date`, `data`, `heading`, `type`) VALUES
(1, '2014-10-16', 'I am a disco dancer', 'Yeah baby', 1),
(2, '2014-12-15', 'When the days are cold\r\nAnd the cards all fold\r\nAnd the saints we see\r\nAre all made of gold', 'Demons', 2),
(3, '2014-12-16', 'When your dreams all fail\r\nAnd the ones we hail\r\nAre the worst of all\r\nAnd the blood’s run stale', 'Demons', 3),
(4, '2014-12-12', 'I wanna hide the truth\r\nI wanna shelter you\r\nBut with the beast inside\r\nThere’s nowhere we can hide', 'Demons', 1);

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
  `number_of_members` varchar(50) DEFAULT NULL,
  `number_of_rooms` varchar(50) DEFAULT NULL,
  `other_requirements` varchar(50) DEFAULT NULL,
  `contact_name` varchar(50) DEFAULT NULL,
  `contact_designation` varchar(50) DEFAULT NULL,
  `contact_email` varchar(50) DEFAULT NULL,
  `contact_number` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `job_profiles`
--

INSERT INTO `job_profiles` (`job_id`, `r_id`, `job_desig`, `job_descr`, `application_dead_line`, `place`, `ctc`, `gross`, `bonus`, `bond_desc`, `bond`, `shortlist_from_Resumes`, `written_Test`, `group_Discussion`, `personal_Interview`, `medical_Test`, `number_of_rounds`, `min_offers`, `eligible_departments`, `number_of_members`, `number_of_rooms`, `other_requirements`, `contact_name`, `contact_designation`, `contact_email`, `contact_number`) VALUES
(2, 1, 'CEO', 'assacx', NULL, 'sdvsdvs', '165161', '516516', '651651', '', 'Yes', 'YES', 'YES', 'YES', 'YES', 'YES', '', '55', 'CE,CSE,IT,ECE,EE,MEC', '', '', '', '', '', '', ''),
(3, 1, 'ASD', 'sdfsdvwsdv', '2014-10-15 18:01:25', 'adcsdvc', '651651', '651616', '5165161', '5161651', 'Yes', 'YES', 'YES', 'YES', 'YES', 'YES', '15', '666', 'CE,CSE,IT,ECE,EE,MEC,MEE', '51651', '', '5', '', '', '', ''),
(4, 1, 'CEO', 'Lorem Ipsum Dolor Sot Amet Lorem Ipsum Dolor Sot Amet Lorem Ipsum Dolor Sot Amet Lorem Ipsum Dolor Sot Amet Lorem Ipsum Dolor Sot Amet Lorem Ipsum Dolor Sot Amet Lorem Ipsum Dolor Sot Amet Lorem Ipsum Dolor Sot Amet Lorem Ipsum Dolor Sot Amet Lorem Ipsum Dolor Sot Amet Lorem Ipsum Dolor Sot Amet Lorem Ipsum Dolor Sot Amet Lorem Ipsum Dolor Sot Amet', '2014-10-31 18:12:18', 'xcx', '46656', '65654', '5464', '', 'Yes', 'YES', 'YES', 'YES', 'YES', 'YES', '654', '44', 'CSE,IT,ECE,MEE', '4', '54', '5', '66', '', 'alafazam@gmail.com', '917566488984');

-- --------------------------------------------------------

--
-- Table structure for table `recruiters`
--

CREATE TABLE IF NOT EXISTS `recruiters` (
`r_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Company_name` varchar(50) NOT NULL,
  `offer` varchar(10) DEFAULT NULL,
  `url` varchar(30) DEFAULT NULL,
  `website_link` varchar(100) DEFAULT NULL,
  `Company_Type` varchar(50) DEFAULT NULL,
  `Industry_Sector` varchar(50) DEFAULT NULL,
  `Brief` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `recruiters`
--

INSERT INTO `recruiters` (`r_id`, `username`, `password`, `Company_name`, `offer`, `url`, `website_link`, `Company_Type`, `Industry_Sector`, `Brief`) VALUES
(1, 'gravity_games', '0d819fad8db5037a4ec35ccef8c13a68', 'Gravity-games', '2', '0', 'gravitygames.com', '2.Start-up', '5.IT', 'WE RULE');

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
(2, 1, 2, 'nmn mn', 'asdddss', '2006', ''),
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
  `Project_id` int(11) DEFAULT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `enroll`, `branch`, `year_of_admin`, `FNAME`, `MNAME`, `LNAME`, `gender`, `dob`, `12_std_id`, `10_std_id`, `AIEEE_id`, `score_sheet_id`, `Parents_name`, `AddressL1`, `AddressL2`, `City`, `Email_add`, `Phone`, `ECA`, `Career_obj`, `Technical_Skills`, `Other_skills`, `Project_id`, `url`) VALUES
(1, 'alafazam', '0d819fad8db5037a4ec35ccef8c13a68', 552, 'CHE', NULL, 'Alaf', 'Azam', 'Khan', 'M', '1993-08-22', NULL, NULL, NULL, NULL, NULL, '34 Ashoka Colony\r\nManikh Bagh Road', 'Manikh Bagh Road', 'Indore', 'alafazam@gmail.com', '9827076060', 'asdfsdvsdvd', 'assfsafas', 'asvsdvsdv', 'qasfsdvsdv', NULL, 'alafazam'),
(2, 'alafazam2', '0d819fad8db5037a4ec35ccef8c13a68', 5523, 'CS', 2012, 'Alaf2', 'this is JUST A TEST', 'khan', 'M', '1993-08-22', NULL, NULL, NULL, NULL, NULL, '34 Ashoka Colony\r\nManikh Bagh Road', 'Manikh Bagh Road', 'Indore', 'alafazam@gmail.com', '9827076060', 'shfbashgvasidgvbaisdgvaishgvbasdohbvaodshvba aufhbasdudfbasuvb asduv asuhhvasuvaosuy oausy oasdyg voasydv oasyv oasdv asoddvhb aos hvaosihv oasuhb aoshvb aoshv oashh aowu aosuv aouv aihd aisiv asodivpoiaHVASIOVwvauhau9ghvaoerugh qoygapvbaosdjvbaosdubahsba ewiprgpaiuvhapsi vpisdvh piaegf wpif pIF Pid', 'kKAJfajf db shfbashgvasidgvbaisdgvaishgvbasdohbvaodshvba aufhbasdudfbasuvb asduv asuhhvasuvaosuy oausy oasdyg voasydv oasyv oasdv asoddvhb aos hvaosihv oasuhb aoshvb aoshv oashh aowu aosuv aouv aihd aisiv asodivpoiaHVASIOVwvauhau9ghvaoerugh qoygapvbaosdjvbaosdubahsba ewiprgpaiuvhapsi vpisdvh piaegf wpif pIF Pid', 'sdgsdgpISUDvpSD PiahcpIUFPiu fpIUFH APISUVALSDV OSKHVLASDKVAOSVB ipvb SIPVUspvsadhibvlasjk vdsjlv lshvbl KBVLASKHVBSDJVB psiv PIUV pjcnsdcj nKDHVBKCV BHDVB ihVPDHVUDSPI HVROUGV PAHVBPHDVBDhvb adslvpIDHVBPId IVHKPJVN dkvhbdojvbh DFVB djbdhvOBCjhbvljVBAOIAOIVHCXKBVPADUIV PAIDSV ADSIHVA SPDJAVIVB ALJCKVAOIVCHJAOVHDCUBAVOVH ODIUHAPDIUVACZXKCVOAFHVAOUVADSO ADVPadifhpisuf ikdjxvbzx', 'sdsdvdfAFUHASDI FUAIOVAO VLSDFHBZDKJVZ KJVSDHVBS GAIGH AOIVAPIVAPV DIVJVBAJ VHBAJSDVhVPBs jhbsahjbHBjhbsjhbjhb avb jkv zkjvzbkxcjvzB KJfjhf JHF ODHBP uiOUBOuJHBJF SDKJbjshbjsJ', NULL, 'alafazam2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
 ADD PRIMARY KEY (`acad_id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
 ADD PRIMARY KEY (`application_id`), ADD KEY `FK_Applications_ToTable` (`id`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
 ADD PRIMARY KEY (`feed_id`);

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
-- AUTO_INCREMENT for table `academic`
--
ALTER TABLE `academic`
MODIFY `acad_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `job_profiles`
--
ALTER TABLE `job_profiles`
MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `recruiters`
--
ALTER TABLE `recruiters`
MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `school_details`
--
ALTER TABLE `school_details`
MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
ADD CONSTRAINT `FK_Applications_ToTable` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `school_details`
--
ALTER TABLE `school_details`
ADD CONSTRAINT `FK_Table_ToTable` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
