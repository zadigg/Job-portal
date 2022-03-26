-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 07:19 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.16

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportalwanaw`
--
CREATE DATABASE IF NOT EXISTS `jobportalwanaw` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `jobportalwanaw`;

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--
-- Creation: Oct 27, 2020 at 09:45 AM
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE `adminlogin` (
  `ID` int(11) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `adminlogin`:
--

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`ID`, `admin_username`, `admin_email`, `admin_password`) VALUES
(1, 'Zadig', 'abelkibebe5@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `applied_job`
--
-- Creation: Dec 22, 2020 at 02:45 PM
--

DROP TABLE IF EXISTS `applied_job`;
CREATE TABLE `applied_job` (
  `app_id` int(100) NOT NULL,
  `js_id` int(100) DEFAULT NULL,
  `cv_id` int(100) DEFAULT NULL,
  `em_id` int(100) DEFAULT NULL,
  `job_id` int(100) DEFAULT NULL,
  `appliedDate` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `applied_job`:
--   `em_id`
--       `employer` -> `id`
--   `job_id`
--       `jobs` -> `job_id`
--   `js_id`
--       `jobseeker` -> `js_id`
--   `cv_id`
--       `cv` -> `cv_id`
--

--
-- Dumping data for table `applied_job`
--

INSERT INTO `applied_job` (`app_id`, `js_id`, `cv_id`, `em_id`, `job_id`, `appliedDate`) VALUES
(169, 57, 18, 60, 198, ' 2020-12-24'),
(170, 58, NULL, 61, 200, ' 2020-12-24'),
(171, 58, 19, 61, 200, ' 2020-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--
-- Creation: Dec 22, 2020 at 02:46 PM
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `comment_id` int(100) NOT NULL,
  `js_id` int(100) DEFAULT NULL,
  `em_id` int(100) DEFAULT NULL,
  `comment` longtext DEFAULT NULL,
  `commented_Date` varchar(111) DEFAULT NULL,
  `commented_Hour` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `comment`:
--   `em_id`
--       `employer` -> `id`
--   `js_id`
--       `jobseeker` -> `js_id`
--

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `js_id`, `em_id`, `comment`, `commented_Date`, `commented_Hour`) VALUES
(98, 57, 60, 'betam arif nw gin ....', '2020-12-24', '08:40:AM'),
(99, 58, 61, 'sad', '2020-12-24', '14:35:PM');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--
-- Creation: Dec 22, 2020 at 02:41 PM
--

DROP TABLE IF EXISTS `cv`;
CREATE TABLE `cv` (
  `cv_id` int(11) NOT NULL,
  `js_id` int(11) DEFAULT NULL,
  `filename` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `cv`:
--   `js_id`
--       `jobseeker` -> `js_id`
--

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`cv_id`, `js_id`, `filename`) VALUES
(18, 57, 'New Text Document .html'),
(19, 58, '');

-- --------------------------------------------------------

--
-- Table structure for table `educational_level`
--
-- Creation: Oct 29, 2020 at 01:07 PM
--

DROP TABLE IF EXISTS `educational_level`;
CREATE TABLE `educational_level` (
  `edlvl_id` int(11) NOT NULL,
  `edlvl` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `educational_level`:
--

--
-- Dumping data for table `educational_level`
--

INSERT INTO `educational_level` (`edlvl_id`, `edlvl`) VALUES
(1, 'Bachelor degree'),
(2, 'Masters degree'),
(3, 'PHD');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--
-- Creation: Dec 17, 2020 at 12:35 PM
--

DROP TABLE IF EXISTS `employer`;
CREATE TABLE `employer` (
  `id` int(100) NOT NULL,
  `company_image` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `phone_number` int(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `numberofemployees` int(100) NOT NULL,
  `Established` varchar(25) DEFAULT NULL,
  `about_company` longtext NOT NULL,
  `password` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `employer`:
--

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `company_image`, `company_name`, `owner_name`, `phone_number`, `email`, `address`, `numberofemployees`, `Established`, `about_company`, `password`) VALUES
(60, '1608795216.webp', '  harvard university', '  Dr .somebody', 0, 'dr@gmail.com', '  Wossen', 0, '2020-10-14', '', '$2y$10$bZhRm5ad3U1unEptR82lx.ICi9epY9fbQN0GBILGrfoEzYWiBsPV2'),
(61, '1608814319.jpg', 'Mouse', 'microsoft', 924029960, 'mouse@gmail.com', 'Wossen', 50000, '2020-10-09', 'adsdasd asdasd ', '$2y$10$3hA7jYTkkakIHPqG7Wmnx.TrjnjN1ZWkAWofkX6yhqaXqjuzlv4G6'),
(65, 'id back.jpg', 'abiy', 'sadasd', 2355, 'haimlab@yahoo.com', '1000 NORTH FOURTH ST', 6000, NULL, 'asdasd as', ''),
(66, '1608815873.png', 'HU', 'job_seeker', 924029960, 'hh@gg.xom', 'Wosshawqaasen', 500000, '2020-12-29', '<script>alert(\"hello\");</script>', '$2y$10$8HRlt89jHJkbWQFF.jynr.Ps035X5NCxdzfvh2azpar79Kuaz8juG'),
(68, 'photo_2022-03-08_14-38-48.jpg', 'Rift', '  asdddddddddddd', 0, 'LarryPUsry@jourrapide.com', 'Salt Lake City', 50000, NULL, '', ''),
(69, 'image.png', 'aasdasd', 'asdasd', 2147483647, 'abelkibebe5@gmail.com', 'Addis Ababa/ Wossen', 6000, NULL, 'asdasd as', ''),
(72, 'id back.jpg', 'india', 'asdasd', 45454545, 'mnaraghi@miu.eduy', '1000 NORTH FOURTH ST', 500000, NULL, 'asdasd as', ''),
(75, 'id back.jpg', 'hello', 'hell hell ', 12345647, 'hello@gmail.com', '1000 NORTH FOURTH ST', 100000, NULL, 'asdasd as asdas da sd', '$2y$10$8zfZsNQHmYDN6NV5CC053.XO499PHtUSKqvJoeXnUcvyWjplG6Wmi'),
(76, '1646820444.png', 'ownage', 'abel kibebe', 924029960, 'ownage@gmail.com', 'Wossen', 50000, '2022-03-23', 'sdasd asdas asdasd', '$2y$10$PvSPi5EVVitAZvzGnRc/eOAP9GRkBq1OkxIlVv4CtYDF53Fh5VG2G');

-- --------------------------------------------------------

--
-- Table structure for table `employer_temp`
--
-- Creation: Dec 17, 2020 at 12:37 PM
--

DROP TABLE IF EXISTS `employer_temp`;
CREATE TABLE `employer_temp` (
  `empTempId` int(11) NOT NULL,
  `company_image` varchar(100) DEFAULT NULL,
  `company_name` varchar(111) NOT NULL,
  `owner_name` varchar(111) NOT NULL,
  `phone_number` int(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `address` varchar(111) NOT NULL,
  `numberofemployees` varchar(111) NOT NULL,
  `Established` varchar(22) DEFAULT NULL,
  `about_company` longtext NOT NULL,
  `password` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `employer_temp`:
--

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--
-- Creation: Dec 24, 2020 at 07:35 AM
--

DROP TABLE IF EXISTS `exam`;
CREATE TABLE `exam` (
  `exam_id` int(11) NOT NULL,
  `question` longtext DEFAULT NULL,
  `choose1` longtext DEFAULT NULL,
  `choose2` longtext DEFAULT NULL,
  `choose3` longtext DEFAULT NULL,
  `choose4` longtext DEFAULT NULL,
  `answer` mediumtext DEFAULT NULL,
  `em_id` int(11) DEFAULT NULL,
  `job_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `exam`:
--   `job_id`
--       `jobs` -> `job_id`
--   `em_id`
--       `employer` -> `id`
--

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `question`, `choose1`, `choose2`, `choose3`, `choose4`, `answer`, `em_id`, `job_id`) VALUES
(37, 'what is presentation', 'project is 2', 'Abel', 'sda', 'Choose 1', 'asd', 60, 198),
(38, 'what is server', 'project is 2', 'muhahaha', 'sda', 'Choose 1', 'server is bridge', 61, 200);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--
-- Creation: Dec 23, 2020 at 03:32 PM
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
  `job_id` int(111) NOT NULL,
  `job_name` varchar(111) NOT NULL,
  `company_email` varchar(111) NOT NULL,
  `role_catagory` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `degreelvl` varchar(111) NOT NULL,
  `experiance` varchar(100) NOT NULL,
  `job_description` longtext NOT NULL,
  `jobposted` varchar(100) NOT NULL,
  `deadline` varchar(111) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `role_catagory_id` int(11) DEFAULT NULL,
  `jobtype_id` int(12) DEFAULT NULL,
  `region_FK` int(11) DEFAULT NULL,
  `employer_id` int(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `jobs`:
--   `jobtype_id`
--       `job_type` -> `jobtype_id`
--   `employer_id`
--       `employer` -> `id`
--   `role_catagory_id`
--       `role_catagory` -> `role_id`
--   `region_FK`
--       `region` -> `region_id`
--

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_name`, `company_email`, `role_catagory`, `salary`, `gender`, `address`, `city`, `region`, `phone`, `degreelvl`, `experiance`, `job_description`, `jobposted`, `deadline`, `keyword`, `role_catagory_id`, `jobtype_id`, `region_FK`, `employer_id`) VALUES
(198, 'Managment', 'dr@gmail.com', 'Arts, Design, Media', '5454 - 5656', 'Male', 'Wossen', 'Addis Ababa', 'Addis Ababa', '0924029960', 'Bachelor degree', '5 years', 'qweqweqwe', '2020-12-24', '2020-10-06T01:38', 'Managment', 13, 1, 2, 60),
(199, '', 'mouse@gmail.com', 'Finance And Business', '5454 - 5656', 'Male', 'Wossen', 'Addis Ababa', 'Addis Ababa', '924029959', 'Bachelor degree', '5years', 'asdas dasasdasd', '2020-12-24', '2020-12-03T17:55', '', 16, 1, 2, 61),
(200, 'mobile ', 'mouse@gmail.com', '', '5454 - 5656', 'Male', 'Wossen', 'Addis Ababa', '', '0924029960', 'Choose Education Level', '5years', '', '2020-12-24', '2020-12-09T15:59', 'mobile tigena', 12, 2, 9, 61),
(202, 'Managment', 'hello@gmail.com', 'Business Managment', '5454 - 5656', 'Female', 'Wossen, Addis Ababa', 'Addis Ababa', 'Addis Ababa', '', 'Masters degree', '5years', 'asdasd', '2022-03-08', '2022-03-23T20:45', 'Managment', 2, 1, 2, 75);

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--
-- Creation: Dec 21, 2020 at 11:24 AM
--

DROP TABLE IF EXISTS `jobseeker`;
CREATE TABLE `jobseeker` (
  `js_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `profilePicture` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `dateofbirth` date NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_number` int(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `jobseeker`:
--

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`js_id`, `fname`, `lname`, `profilePicture`, `email`, `dateofbirth`, `password`, `phone_number`, `username`, `Country`, `City`, `description`) VALUES
(56, 'Hailemariam', 'Yihun', '1608787732.png', 'hailemariam@gmail.com', '2007-06-06', '$2y$10$a8dxV.cZz7TUV570S3C7zOmuNJ6ClnXS6eLVUSsE0z.CxswZL8uyy', 924029960, 'haileyi', 'Ethiopia', 'Addis Ababa', NULL),
(57, 'Abel', 'Kibebe', '1608794996.png', 'abelkibebe5@gmail.com', '2020-09-16', '$2y$10$a8dxV.cZz7TUV570S3C7zOmuNJ6ClnXS6eLVUSsE0z.CxswZL8uyy', 924029960, 'zadig', 'Ethiopia', 'Addis Ababa', NULL),
(58, 'Abel', 'Kibebe', '1608814772.png', 'new@gmail.com', '2020-12-02', '$2y$10$LHAWh35i8cO2DwnQmwScUeebEqjCA9Z8S6GUeFJApi2lTUsXyVGxy', 924029960, 'zadig', 'Ethiopia', 'Addis Ababa', NULL),
(59, 'Abela', 'Kibebe', '1608816092.png', 'abelkibeb55@gmail.com', '2020-12-10', '$2y$10$3qwqZvX1vcWgWwR9Plfa.OQKGgeocOGpqq09bt9iObMP/WexvhvNW', 924029960, 'asdf', 'Ethiopia', 'Addis Ababa', NULL),
(60, 'Abel', 'Kibebe', '1646750776.png', 'abelkibebe555@gmail.com', '2022-03-23', '$2y$10$pcoJFd98k/dDcI6wVzfBwOx/THR.zOTxN2aJ4/CYFVP1BWrDTQaD.', 924029960, 'zadzadzad', 'Ethiopia', 'Addis Ababa', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_type`
--
-- Creation: Nov 05, 2020 at 07:16 AM
--

DROP TABLE IF EXISTS `job_type`;
CREATE TABLE `job_type` (
  `jobtype_id` int(10) NOT NULL,
  `job_type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `job_type`:
--

--
-- Dumping data for table `job_type`
--

INSERT INTO `job_type` (`jobtype_id`, `job_type_name`) VALUES
(1, 'Full Time'),
(2, '   Part Time'),
(5, 'Contract'),
(6, 'Temporary'),
(7, 'Freelancer');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--
-- Creation: Dec 22, 2020 at 02:42 PM
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `message_id` int(100) NOT NULL,
  `subject` mediumtext DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `emp_id` int(100) DEFAULT NULL,
  `js_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `message`:
--   `emp_id`
--       `employer` -> `id`
--   `js_id`
--       `jobseeker` -> `js_id`
--

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `subject`, `message`, `emp_id`, `js_id`) VALUES
(75, 'Hi abel selam new ', 'endet neh', 60, 57);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--
-- Creation: Dec 20, 2020 at 01:27 PM
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE `question` (
  `question_Id` int(11) NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `em_id` int(100) NOT NULL,
  `job_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `question`:
--

-- --------------------------------------------------------

--
-- Table structure for table `questionanswer`
--
-- Creation: Dec 20, 2020 at 01:33 PM
--

DROP TABLE IF EXISTS `questionanswer`;
CREATE TABLE `questionanswer` (
  `qa` int(100) NOT NULL,
  `qusetion_id` int(11) DEFAULT NULL,
  `rightAnswer` int(100) DEFAULT NULL,
  `choice` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `questionanswer`:
--

-- --------------------------------------------------------

--
-- Table structure for table `region`
--
-- Creation: Oct 29, 2020 at 01:25 PM
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE `region` (
  `region_id` int(11) NOT NULL,
  `region_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `region`:
--

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`region_id`, `region_name`) VALUES
(2, 'Addis Ababa'),
(3, 'Afar Region'),
(4, 'Amhara Region'),
(5, 'Benishangul-Gumuz Region'),
(6, 'Dire Dawa (city)'),
(7, 'Gambela Region'),
(8, 'Harari Region'),
(9, 'Oromia Region'),
(10, 'Sidama Region'),
(11, 'Somali Region'),
(12, 'Southern Nations, Nationalitie'),
(13, 'Tigray Region');

-- --------------------------------------------------------

--
-- Table structure for table `role_catagory`
--
-- Creation: Nov 09, 2020 at 05:10 PM
--

DROP TABLE IF EXISTS `role_catagory`;
CREATE TABLE `role_catagory` (
  `role_id` int(11) NOT NULL,
  `role_cata` varchar(30) NOT NULL,
  `role_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `role_catagory`:
--

--
-- Dumping data for table `role_catagory`
--

INSERT INTO `role_catagory` (`role_id`, `role_cata`, `role_description`) VALUES
(2, 'Business Managment', 'lo;asdkl;jklfjlk sdafkl jasdj kl j ;asdklfl k'),
(12, 'Accounting Assistant', 'sdasdasdasd'),
(13, 'Arts, Design, Media', 'sdasdasdasd'),
(14, 'Charity & Voluntary', 'sdasdasdasd'),
(15, 'Education & Coachs', 'sdasdasdasd'),
(16, 'Finance And Business', 'sdasdasdasd'),
(17, 'IT & Computer', 'sdasdasdasd'),
(19, 'aaa', 'asdasasd');

-- --------------------------------------------------------

--
-- Table structure for table `saved_jobs`
--
-- Creation: Dec 23, 2020 at 07:04 PM
--

DROP TABLE IF EXISTS `saved_jobs`;
CREATE TABLE `saved_jobs` (
  `savedJobs_id` int(100) NOT NULL,
  `js_id` int(100) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  `saved_date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `saved_jobs`:
--   `job_id`
--       `jobs` -> `job_id`
--   `js_id`
--       `jobseeker` -> `js_id`
--

--
-- Dumping data for table `saved_jobs`
--

INSERT INTO `saved_jobs` (`savedJobs_id`, `js_id`, `job_id`, `saved_date`) VALUES
(20, 57, 198, '2020-12-24'),
(21, 58, 200, '2020-12-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `applied_job`
--
ALTER TABLE `applied_job`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `applied_job_ibfk_1` (`em_id`),
  ADD KEY `applied_job_ibfk_2` (`job_id`),
  ADD KEY `applied_job_ibfk_3` (`js_id`),
  ADD KEY `applied_job_ibfk_4` (`cv_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comment_ibfk_1` (`em_id`),
  ADD KEY `comment_ibfk_2` (`js_id`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`cv_id`),
  ADD KEY `cv_ibfk_1` (`js_id`);

--
-- Indexes for table `educational_level`
--
ALTER TABLE `educational_level`
  ADD PRIMARY KEY (`edlvl_id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employer_temp`
--
ALTER TABLE `employer_temp`
  ADD PRIMARY KEY (`empTempId`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`),
  ADD KEY `exam_ibfk_1` (`job_id`),
  ADD KEY `exam_ibfk_2` (`em_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `company_email` (`company_email`) USING BTREE,
  ADD KEY `jobs_ibfk_1` (`jobtype_id`),
  ADD KEY `jobs_ibfk_2` (`employer_id`),
  ADD KEY `jobs_ibfk_3` (`role_catagory_id`),
  ADD KEY `jobs_ibfk_4` (`region_FK`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`js_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `job_type`
--
ALTER TABLE `job_type`
  ADD PRIMARY KEY (`jobtype_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `message_ibfk_2` (`js_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_Id`);

--
-- Indexes for table `questionanswer`
--
ALTER TABLE `questionanswer`
  ADD PRIMARY KEY (`qa`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`region_id`);

--
-- Indexes for table `role_catagory`
--
ALTER TABLE `role_catagory`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `saved_jobs`
--
ALTER TABLE `saved_jobs`
  ADD PRIMARY KEY (`savedJobs_id`),
  ADD KEY `saved_jobs_ibfk_2` (`js_id`),
  ADD KEY `saved_jobs_ibfk_1` (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applied_job`
--
ALTER TABLE `applied_job`
  MODIFY `app_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `cv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `educational_level`
--
ALTER TABLE `educational_level`
  MODIFY `edlvl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `employer_temp`
--
ALTER TABLE `employer_temp`
  MODIFY `empTempId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `js_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `job_type`
--
ALTER TABLE `job_type`
  MODIFY `jobtype_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questionanswer`
--
ALTER TABLE `questionanswer`
  MODIFY `qa` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `role_catagory`
--
ALTER TABLE `role_catagory`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `saved_jobs`
--
ALTER TABLE `saved_jobs`
  MODIFY `savedJobs_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applied_job`
--
ALTER TABLE `applied_job`
  ADD CONSTRAINT `applied_job_ibfk_1` FOREIGN KEY (`em_id`) REFERENCES `employer` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `applied_job_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`job_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `applied_job_ibfk_3` FOREIGN KEY (`js_id`) REFERENCES `jobseeker` (`js_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `applied_job_ibfk_4` FOREIGN KEY (`cv_id`) REFERENCES `cv` (`cv_id`) ON DELETE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`em_id`) REFERENCES `employer` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`js_id`) REFERENCES `jobseeker` (`js_id`) ON DELETE CASCADE;

--
-- Constraints for table `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `cv_ibfk_1` FOREIGN KEY (`js_id`) REFERENCES `jobseeker` (`js_id`) ON DELETE CASCADE;

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`job_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_ibfk_2` FOREIGN KEY (`em_id`) REFERENCES `employer` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`jobtype_id`) REFERENCES `job_type` (`jobtype_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jobs_ibfk_2` FOREIGN KEY (`employer_id`) REFERENCES `employer` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jobs_ibfk_3` FOREIGN KEY (`role_catagory_id`) REFERENCES `role_catagory` (`role_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jobs_ibfk_4` FOREIGN KEY (`region_FK`) REFERENCES `region` (`region_id`) ON DELETE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employer` (`id`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`js_id`) REFERENCES `jobseeker` (`js_id`) ON DELETE CASCADE;

--
-- Constraints for table `saved_jobs`
--
ALTER TABLE `saved_jobs`
  ADD CONSTRAINT `saved_jobs_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`job_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `saved_jobs_ibfk_2` FOREIGN KEY (`js_id`) REFERENCES `jobseeker` (`js_id`) ON DELETE CASCADE;


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table adminlogin
--

--
-- Metadata for table applied_job
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'jobportalwanaw', 'applied_job', '{\"CREATE_TIME\":\"2020-11-12 15:36:19\"}', '2020-11-25 15:35:36');

--
-- Metadata for table comment
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'jobportalwanaw', 'comment', '{\"sorted_col\":\"`comment_id`  DESC\"}', '2020-12-24 07:28:56');

--
-- Metadata for table cv
--

--
-- Metadata for table educational_level
--

--
-- Metadata for table employer
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'jobportalwanaw', 'employer', '{\"CREATE_TIME\":\"2020-10-28 18:17:24\",\"sorted_col\":\"`employer`.`password`  DESC\"}', '2022-03-09 10:43:37');

--
-- Metadata for table employer_temp
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'jobportalwanaw', 'employer_temp', '{\"sorted_col\":\"`employer_temp`.`password`  DESC\"}', '2020-11-20 08:46:37');

--
-- Metadata for table exam
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'jobportalwanaw', 'exam', '{\"sorted_col\":\"`em_id` ASC\"}', '2020-12-20 09:08:40');

--
-- Metadata for table jobs
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'jobportalwanaw', 'jobs', '{\"CREATE_TIME\":\"2020-10-29 16:42:27\",\"sorted_col\":\"`jobs`.`job_name` ASC\"}', '2020-12-19 20:00:11');

--
-- Metadata for table jobseeker
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'jobportalwanaw', 'jobseeker', '{\"sorted_col\":\"`js_id`  ASC\",\"CREATE_TIME\":\"2020-11-25 19:04:23\"}', '2022-03-08 14:45:49');

--
-- Metadata for table job_type
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'jobportalwanaw', 'job_type', '{\"sorted_col\":\"`job_type`.`job_type_name`  ASC\"}', '2020-11-23 13:24:42');

--
-- Metadata for table message
--

--
-- Metadata for table question
--

--
-- Metadata for table questionanswer
--

--
-- Metadata for table region
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'jobportalwanaw', 'region', '{\"sorted_col\":\"`region`.`region_name`  ASC\"}', '2020-10-29 17:43:04');

--
-- Metadata for table role_catagory
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'jobportalwanaw', 'role_catagory', '{\"sorted_col\":\"`role_catagory`.`role_id` ASC\"}', '2020-11-10 14:46:34');

--
-- Metadata for table saved_jobs
--

--
-- Metadata for database jobportalwanaw
--
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
