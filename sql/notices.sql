-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 07:17 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ncc`
--

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `notice` mediumtext NOT NULL,
  `events` mediumtext NOT NULL,
  `camps` mediumtext NOT NULL,
  `alumnis` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`notice`, `events`, `camps`, `alumnis`) VALUES
('<p align=\"justify\">\r\nSubmission of Enrollment forms for 200 Vacancies.<br>\r\nEk Bharat Shrestha Bharat,Guntur Camp in the month of january(6 SD/6 SW).', '<p align=\"justify\">\r\n1. Drill Session will be continued from 16 oct 2018.<br>\r\n2. Share your experience on the NCC instagram page #myExperience.<br> \r\n3. \"LIVE SESSION LUDHIANA\" for defence Aspirants every sunday.<br> \r\n4. Competitions like quiz and lectures on defence and NCC.<br>\r\n5. Football match at Sports Complex.<br>\r\n</p>', '<p align=\"justify\">\r\n1. Anual Training Camp.<br> \r\n2. Ek Bharat Shrestha Bharat.<br>  \r\n3. Thal Sainik Camp.<br>  \r\n4. Attachments Camp.<br>  \r\n5. Advance Leadership Camp.<br>  \r\n6. Para Basic Camp.<br>  \r\n7. Republic Day Camp.<br>  \r\n8. Youth Exchange Programme.<br>  \r\n* For more got to downloads.<br> \r\n</p>', 'Gursimran Singh, Recommended from AFSB.<br>\r\nParinav Pathak, Trainiee at IMA,Dehradun.<br>\r\nShubham Joshi, Jockey at AIR.<br>\r\nAnirudh, Employee at Infosys.<br>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notices`
--
ALTER TABLE `notices` ADD FULLTEXT KEY `notice` (`notice`);
ALTER TABLE `notices` ADD FULLTEXT KEY `notice_2` (`notice`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
