-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2016 at 09:01 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_labor`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(35) DEFAULT NULL,
  `admin_password` varchar(35) DEFAULT NULL,
  `admin_fullname` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_username`, `admin_password`, `admin_fullname`) VALUES
(1, 'admin', 'admin', 'daisyre');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants`
--

CREATE TABLE IF NOT EXISTS `tbl_applicants` (
  `applicant_id` int(10) NOT NULL AUTO_INCREMENT,
  `app_firstname` varchar(55) DEFAULT NULL,
  `app_middlename` varchar(55) NOT NULL,
  `app_lastname` varchar(55) NOT NULL,
  `app_address` varchar(55) NOT NULL,
  `app_contact` int(20) DEFAULT NULL,
  `app_email` varchar(35) DEFAULT NULL,
  `app_dob` date DEFAULT NULL,
  `app_pob` varchar(55) DEFAULT NULL,
  `app_sex` varchar(11) DEFAULT NULL,
  `app_civilstatus` varchar(11) DEFAULT NULL,
  `app_date_registered` date DEFAULT NULL,
  `app_status` varchar(25) DEFAULT NULL,
  `app_username` varchar(35) DEFAULT NULL,
  `app_password` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`applicant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `tbl_applicants`
--

INSERT INTO `tbl_applicants` (`applicant_id`, `app_firstname`, `app_middlename`, `app_lastname`, `app_address`, `app_contact`, `app_email`, `app_dob`, `app_pob`, `app_sex`, `app_civilstatus`, `app_date_registered`, `app_status`, `app_username`, `app_password`) VALUES
(52, 'daisyre', 'pumaras', 'pat', 'Manggahan subic zambales', 2147483647, 'dess@gmail.com', '1990-02-03', 'zambales', 'Femaale', 'Merried', '2016-11-24', '', 'daisyre', '1234'),
(55, 'hhh', 'hhjk', 'hhjhjk', 'hjhjk', 998989, 'hhh@yahoo.com', '2016-11-26', 'gugu', 'Male', 'Married', '2016-11-26', '1', 'bbbz', 'hhh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apply`
--

CREATE TABLE IF NOT EXISTS `tbl_apply` (
  `apply_id` int(10) NOT NULL AUTO_INCREMENT,
  `apply_qualifications` varchar(55) DEFAULT NULL,
  `apply_date` date DEFAULT NULL,
  `apply_status` varchar(35) DEFAULT NULL,
  `applicant_id` int(10) DEFAULT NULL,
  `job_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`apply_id`),
  KEY `applicant_id` (`applicant_id`),
  KEY `job_id` (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `tbl_apply`
--

INSERT INTO `tbl_apply` (`apply_id`, `apply_qualifications`, `apply_date`, `apply_status`, `applicant_id`, `job_id`) VALUES
(14, '2, years, experience', '2016-11-26', '1', 52, 188),
(15, '2', '2016-11-26', '1', 52, 188),
(16, '2, years, experience', '2016-11-26', '1', 52, 188),
(17, '2, years, experience', '2016-11-26', '1', 52, 188),
(18, '2, years, experience', '2016-11-26', '1', 52, 188),
(19, '2, years, experience', '2016-11-26', '1', 52, 188),
(20, '2, years, experience', '2016-11-26', '1', 52, 188),
(21, '2, years, experience', '2016-11-26', '1', 52, 188),
(22, '2, years, experience', '2016-11-26', '1', 52, 188),
(23, '2, years, experience', '2016-11-26', '1', 52, 188),
(24, '2, years, experience', '2016-11-26', '1', 52, 188),
(25, '2, years, experience', '2016-11-26', '1', 52, 188),
(26, '2, years, experience', '2016-11-26', '1', 52, 188),
(27, '2, years, experience', '2016-11-26', '1', 52, 188),
(28, '2, years, experience', '2016-11-26', '1', 52, 188),
(29, '2, years, experience', '2016-11-26', '1', 52, 188),
(30, '2, years, experience', '2016-11-26', '1', 52, 188),
(31, '2, years, experience', '2016-11-26', '1', 52, 188),
(32, '2, years, experience', '2016-11-26', '1', 52, 188),
(33, '2, years, experience', '2016-11-26', '1', 52, 188),
(34, '2, years', '2016-11-26', '1', 52, 188),
(35, '2, years', '2016-11-26', '1', 52, 188),
(36, '2, years', '2016-11-26', '1', 52, 188),
(37, '2, years', '2016-11-26', '1', 52, 188),
(38, '2, years', '2016-11-26', '1', 52, 188),
(39, '2, years', '2016-11-26', '1', 52, 188),
(40, '2, years', '2016-11-26', '1', 52, 188),
(41, '2, years', '2016-11-26', '1', 52, 188),
(42, '2, years', '2016-11-26', '1', 52, 188),
(43, '2, years', '2016-11-26', '1', 52, 188),
(44, '2, years', '2016-11-26', '1', 52, 188),
(45, '2, years', '2016-11-26', '1', 52, 188),
(46, '2, years', '2016-11-26', '1', 52, 188),
(47, '2, years', '2016-11-26', '1', 52, 188),
(48, '2, years', '2016-11-26', '1', 52, 188),
(49, '2, years', '2016-11-26', '1', 52, 188),
(50, '2, years', '2016-11-26', '1', 52, 188),
(51, '2, years', '2016-11-26', '1', 52, 188),
(52, '2, years', '2016-11-26', '1', 52, 188),
(53, '2, years', '2016-11-26', '1', 52, 188),
(54, '2, years', '2016-11-26', '1', 52, 188),
(55, '2, years', '2016-11-26', '1', 52, 188),
(56, '2, years', '2016-11-26', '1', 52, 188),
(57, '2, years', '2016-11-26', '1', 52, 188),
(58, '2, years', '2016-11-26', '1', 52, 188),
(59, '2, years', '2016-11-26', '1', 52, 188),
(60, '2, years', '2016-11-26', '1', 52, 188),
(61, '2, years', '2016-11-26', '1', 52, 188),
(62, '2, years', '2016-11-26', '1', 52, 188),
(63, '2', '2016-11-26', '1', 52, 188),
(64, '2', '2016-11-26', '1', 52, 188),
(65, '2', '2016-11-26', '1', 52, 188),
(66, '2', '2016-11-26', '1', 52, 188),
(67, '2', '2016-11-26', '1', 52, 188),
(68, '2', '2016-11-26', '1', 52, 188),
(69, '2, years, experience', '2016-11-26', '1', 52, 188),
(70, '2, years, experience', '2016-11-26', '1', 52, 188),
(71, '2, years', '2016-11-26', '1', 55, 188),
(72, '2', '2016-11-26', '1', 55, 188),
(73, '2_years_experience\r\ncollege_graduate', '2016-11-26', '1', 55, 189);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_app_educ`
--

CREATE TABLE IF NOT EXISTS `tbl_app_educ` (
  `educ_id` int(10) NOT NULL AUTO_INCREMENT,
  `educ_type` varchar(30) DEFAULT NULL,
  `educ_school_name` varchar(55) DEFAULT NULL,
  `educ_school_address` varchar(55) DEFAULT NULL,
  `educ_year_graduated` year(4) DEFAULT NULL,
  `applicant_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`educ_id`),
  KEY `applicant_id` (`applicant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_app_educ`
--

INSERT INTO `tbl_app_educ` (`educ_id`, `educ_type`, `educ_school_name`, `educ_school_address`, `educ_year_graduated`, `applicant_id`) VALUES
(1, 'Secondary', 'mnbm,', 'jjhgbjh', 2012, 52);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE IF NOT EXISTS `tbl_company` (
  `comp_id` int(10) NOT NULL AUTO_INCREMENT,
  `comp_establistment_name` varchar(55) DEFAULT NULL,
  `comp_address` varchar(55) DEFAULT NULL,
  `comp_contact` int(25) DEFAULT NULL,
  `comp_email` varchar(55) NOT NULL,
  `comp_status` varchar(25) DEFAULT NULL,
  `comp_type` varchar(55) NOT NULL,
  `comp_username` varchar(35) DEFAULT NULL,
  `comp_password` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`comp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`comp_id`, `comp_establistment_name`, `comp_address`, `comp_contact`, `comp_email`, `comp_status`, `comp_type`, `comp_username`, `comp_password`) VALUES
(1, 'ghgh', 'gygy', 9098877, '', 'Registered', '', 'sam', 'sam'),
(2, 'bizgo', 'sbma', 912897655, '', '1', '', 'bizgo', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobs`
--

CREATE TABLE IF NOT EXISTS `tbl_jobs` (
  `job_id` int(10) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(55) DEFAULT NULL,
  `job_qualifications` varchar(55) DEFAULT NULL,
  `job_deployment_place` varchar(55) DEFAULT NULL,
  `job_date_added` date DEFAULT NULL,
  `job_closing_date` date DEFAULT NULL,
  `comp_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`job_id`),
  KEY `comp_id` (`comp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=195 ;

--
-- Dumping data for table `tbl_jobs`
--

INSERT INTO `tbl_jobs` (`job_id`, `job_title`, `job_qualifications`, `job_deployment_place`, `job_date_added`, `job_closing_date`, `comp_id`) VALUES
(188, 'welder', '2 years experience', 'sbma', '2012-01-16', '2012-02-16', 1),
(189, 'Manager', '2_years_experience\r\ncollege_graduate', 'sbma', '2016-11-25', '2016-11-30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_exp`
--

CREATE TABLE IF NOT EXISTS `tbl_job_exp` (
  `job_exp_id` int(10) NOT NULL AUTO_INCREMENT,
  `job_exp_establishment_name` varchar(35) DEFAULT NULL,
  `job_exp_started` date DEFAULT NULL,
  `job_exp_end` date DEFAULT NULL,
  `job_exp_titlte` varchar(55) DEFAULT NULL,
  `applicant_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`job_exp_id`),
  KEY `applicant_id` (`applicant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=115 ;

--
-- Dumping data for table `tbl_job_exp`
--

INSERT INTO `tbl_job_exp` (`job_exp_id`, `job_exp_establishment_name`, `job_exp_started`, `job_exp_end`, `job_exp_titlte`, `applicant_id`) VALUES
(114, 'rfdsfdsf', '2016-11-18', '2016-12-03', 'fsffs', 52);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rra`
--

CREATE TABLE IF NOT EXISTS `tbl_rra` (
  `tbl_rra_id` int(10) NOT NULL AUTO_INCREMENT,
  `tbl_rra_job` varchar(35) DEFAULT NULL,
  `tbl_num_hired` int(10) DEFAULT NULL,
  `tbl_num_endorsed` int(10) DEFAULT NULL,
  `tbl_duties` varchar(55) DEFAULT NULL,
  `tbl_qualifications` varchar(255) DEFAULT NULL,
  `tbl_closing_date` date DEFAULT NULL,
  `tbl_date_exam` date DEFAULT NULL,
  `tbl_venue_interview` varchar(55) DEFAULT NULL,
  `tbl_date_hire` date DEFAULT NULL,
  `tbl_docu` varchar(255) DEFAULT NULL,
  `comp_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`tbl_rra_id`),
  KEY `comp_id` (`comp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `tbl_rra`
--

INSERT INTO `tbl_rra` (`tbl_rra_id`, `tbl_rra_job`, `tbl_num_hired`, `tbl_num_endorsed`, `tbl_duties`, `tbl_qualifications`, `tbl_closing_date`, `tbl_date_exam`, `tbl_venue_interview`, `tbl_date_hire`, `tbl_docu`, `comp_id`) VALUES
(40, 'bghgh', 5, 5, 'fghfghf', 'ghfhg', '2016-11-24', '2016-11-25', 'jkh', '2016-11-25', 'gfcgfdcgdf', 1),
(41, 'huku', 6, 6, 'ugugy', 'guyg', '2016-11-25', '2016-11-25', 'ghg', '2016-11-25', 'jhbjhjh', 1),
(42, 'ghjg', 5, 5, 'yff', 'fff', '2016-11-25', '2016-11-28', 'gfs', '2016-11-30', 'gfdgsdg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_short_list`
--

CREATE TABLE IF NOT EXISTS `tbl_short_list` (
  `short_list_id` int(10) NOT NULL AUTO_INCREMENT,
  `short_list_date` date DEFAULT NULL,
  `short_list_score` varchar(35) DEFAULT NULL,
  `short_list_status` int(11) NOT NULL,
  `applicant_id` int(10) DEFAULT NULL,
  `job_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`short_list_id`),
  KEY `applicant_id` (`applicant_id`),
  KEY `job_id` (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `tbl_short_list`
--

INSERT INTO `tbl_short_list` (`short_list_id`, `short_list_date`, `short_list_score`, `short_list_status`, `applicant_id`, `job_id`) VALUES
(1, '2016-11-26', '3 of 3', 1, 52, 188),
(2, '2016-11-26', '3 of 3', 1, 52, 188),
(3, '2016-11-26', '3 of 3', 1, 52, 188),
(4, '2016-11-26', '3 of 3', 1, 52, 188),
(5, '2016-11-26', '3 of 3', 1, 52, 188),
(6, '2016-11-26', '3 of 3', 1, 52, 188),
(7, '2016-11-26', '3 of 3', 1, 52, 188),
(8, '2016-11-26', '3 of 3', 1, 52, 188),
(9, '2016-11-26', '3 of 3', 1, 52, 188),
(10, '2016-11-26', '3 of 3', 1, 52, 188),
(11, '2016-11-26', '3 of 3', 1, 52, 188),
(12, '2016-11-26', '3 of 3', 1, 52, 188),
(13, '2016-11-26', '3 of 3', 1, 52, 188),
(14, '2016-11-26', '3 of 3', 1, 52, 188),
(15, '2016-11-26', '3 of 3', 1, 52, 188),
(16, '2016-11-26', '3 of 3', 1, 52, 188),
(17, '2016-11-26', '3 of 3', 1, 52, 188),
(18, '2016-11-26', '3 of 3', 1, 52, 188),
(19, '2016-11-26', '2 of 3', 1, 52, 188),
(20, '2016-11-26', '2 of 3', 1, 52, 188),
(21, '2016-11-26', '2 of 3', 1, 52, 188),
(22, '2016-11-26', '2 of 3', 1, 52, 188),
(23, '2016-11-26', '2 of 3', 1, 52, 188),
(24, '2016-11-26', '2 of 3', 1, 52, 188),
(25, '2016-11-26', '2 of 3', 1, 52, 188),
(26, '2016-11-26', '2 of 3', 1, 52, 188),
(27, '2016-11-26', '2 of 3', 1, 52, 188),
(28, '2016-11-26', '2 of 3', 1, 52, 188),
(29, '2016-11-26', '2 of 3', 1, 52, 188),
(30, '2016-11-26', '2 of 3', 1, 52, 188),
(31, '2016-11-26', '2 of 3', 1, 52, 188),
(32, '2016-11-26', '2 of 3', 1, 52, 188),
(33, '2016-11-26', '2 of 3', 1, 52, 188),
(34, '2016-11-26', '2 of 3', 1, 52, 188),
(35, '2016-11-26', '2 of 3', 1, 52, 188),
(36, '2016-11-26', '2 of 3', 1, 52, 188),
(37, '2016-11-26', '2 of 3', 1, 52, 188),
(38, '2016-11-26', '2 of 3', 1, 52, 188),
(39, '2016-11-26', '2 of 3', 1, 52, 188),
(40, '2016-11-26', '2 of 3', 1, 52, 188),
(41, '2016-11-26', '2 of 3', 1, 52, 188),
(42, '2016-11-26', '2 of 3', 1, 52, 188),
(43, '2016-11-26', '2 of 3', 1, 52, 188),
(44, '2016-11-26', '2 of 3', 1, 52, 188),
(45, '2016-11-26', '2 of 3', 1, 52, 188),
(46, '2016-11-26', '2 of 3', 1, 52, 188),
(47, '2016-11-26', '2 of 3', 1, 52, 188),
(48, '2016-11-26', '3 of 3', 1, 52, 188),
(49, '2016-11-26', '3 of 3', 1, 52, 188),
(50, '2016-11-26', '2 of 3', 1, 55, 188),
(51, '2016-11-26', '1 of 1', 1, 55, 189);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skills_inventory`
--

CREATE TABLE IF NOT EXISTS `tbl_skills_inventory` (
  `skills_inv_id` int(10) NOT NULL AUTO_INCREMENT,
  `skills_inv_date` date DEFAULT NULL,
  `skills_inv_score` varchar(35) DEFAULT NULL,
  `skills_inv_status` int(10) NOT NULL,
  `applicant_id` int(10) DEFAULT NULL,
  `job_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`skills_inv_id`),
  KEY `applicant_id` (`applicant_id`),
  KEY `job_id` (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_skills_inventory`
--

INSERT INTO `tbl_skills_inventory` (`skills_inv_id`, `skills_inv_date`, `skills_inv_score`, `skills_inv_status`, `applicant_id`, `job_id`) VALUES
(1, '2016-11-26', '1 of 3', 1, 52, 188),
(2, '2016-11-26', '1 of 3', 1, 52, 188),
(3, '2016-11-26', '1 of 3', 1, 52, 188),
(4, '2016-11-26', '1 of 3', 1, 52, 188),
(5, '2016-11-26', '1 of 3', 1, 52, 188),
(6, '2016-11-26', '1 of 3', 1, 52, 188),
(7, '2016-11-26', '1 of 3', 1, 55, 188);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_apply`
--
ALTER TABLE `tbl_apply`
  ADD CONSTRAINT `tbl_apply_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `tbl_applicants` (`applicant_id`),
  ADD CONSTRAINT `tbl_apply_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `tbl_jobs` (`job_id`);

--
-- Constraints for table `tbl_app_educ`
--
ALTER TABLE `tbl_app_educ`
  ADD CONSTRAINT `tbl_app_educ_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `tbl_applicants` (`applicant_id`);

--
-- Constraints for table `tbl_jobs`
--
ALTER TABLE `tbl_jobs`
  ADD CONSTRAINT `tbl_jobs_ibfk_1` FOREIGN KEY (`comp_id`) REFERENCES `tbl_company` (`comp_id`);

--
-- Constraints for table `tbl_job_exp`
--
ALTER TABLE `tbl_job_exp`
  ADD CONSTRAINT `tbl_job_exp_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `tbl_applicants` (`applicant_id`);

--
-- Constraints for table `tbl_rra`
--
ALTER TABLE `tbl_rra`
  ADD CONSTRAINT `tbl_rra_ibfk_1` FOREIGN KEY (`comp_id`) REFERENCES `tbl_company` (`comp_id`);

--
-- Constraints for table `tbl_short_list`
--
ALTER TABLE `tbl_short_list`
  ADD CONSTRAINT `tbl_short_list_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `tbl_applicants` (`applicant_id`),
  ADD CONSTRAINT `tbl_short_list_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `tbl_jobs` (`job_id`);

--
-- Constraints for table `tbl_skills_inventory`
--
ALTER TABLE `tbl_skills_inventory`
  ADD CONSTRAINT `tbl_skills_inventory_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `tbl_applicants` (`applicant_id`),
  ADD CONSTRAINT `tbl_skills_inventory_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `tbl_jobs` (`job_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
