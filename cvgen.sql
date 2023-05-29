-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 11:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvgen`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `edu_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `elevel` varchar(200) NOT NULL,
  `einstitute` varchar(200) NOT NULL,
  `emajor` varchar(200) NOT NULL,
  `eresult` varchar(200) NOT NULL,
  `epassyear` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`edu_id`, `user_id`, `elevel`, `einstitute`, `emajor`, `eresult`, `epassyear`) VALUES
(19, 11, 'SSC', 'DGGHS', 'Science', 'GPA 5.00', '2017'),
(20, 11, 'HSC', 'BMARPC', 'Science', 'GPA 4.00', '2019'),
(21, 12, 'SSC', 'DGGHS', 'Science', 'GPA 5.00', '2017'),
(26, 13, 'HSC', 'BMARPC', 'Science', 'GPA 5.00', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `exp_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `excompany` varchar(300) NOT NULL,
  `exdesignation` varchar(200) NOT NULL,
  `exstart` date NOT NULL,
  `exend` varchar(100) DEFAULT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`exp_id`, `user_id`, `excompany`, `exdesignation`, `exstart`, `exend`, `description`) VALUES
(14, 11, 'UIU', 'GA', '2023-04-28', 'present', 'help the poor'),
(15, 12, 'UIU', 'TA', '2023-04-22', '2022-03-02', 'help the poor'),
(18, 13, 'UIU', 'TA', '2023-04-04', 'present', 'Monitoring students and help them in the lab works.');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `form_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `emailad` varchar(100) NOT NULL,
  `phnnum` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `blood` varchar(20) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `Obj` varchar(1000) DEFAULT NULL,
  `file` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`form_id`, `user_id`, `fname`, `lname`, `emailad`, `phnnum`, `address`, `nationality`, `blood`, `gender`, `Obj`, `file`) VALUES
(75, 10, 'we;hruqh', '', 'sdhajh', 'jajda', 'hauoduj', 'hhduahd', 'uqdauih', 'female', 'wsadas', 'image/download.jpg'),
(76, 11, 'Dalal', 'Shawpnil', 'kazidalal@gmail.com', '01633559810', 'Dalalpur', 'Bangladeshi', 'B+', 'female', 'Hello ', 'image/1.jpg'),
(77, 12, 'MD', 'Dalal', 'dalal@gmail.com', '01633559818', 'Mirpur', 'Bangladeshi', 'B+', 'female', 'hello I am Shawpnil. My aim in life is to become a professional full stack developer.', 'image/2.jpeg'),
(79, 13, 'Kazi', 'Shawpnil', 'kshawpnil@gmai.com', '01633559810', 'Mirpur,dhaka', 'Bangladeshi', 'A+', 'female', 'Hello hello123', 'image/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `honors`
--

CREATE TABLE `honors` (
  `honor_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hname` varchar(300) NOT NULL,
  `hplace` varchar(300) NOT NULL,
  `hposition` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `honors`
--

INSERT INTO `honors` (`honor_id`, `user_id`, `hname`, `hplace`, `hposition`) VALUES
(29, 11, 'CSE Project show ', 'UIU', 'First Runner Up'),
(30, 12, 'CSE Project show ', 'UIU', 'First Runner Up'),
(33, 13, 'CSE Project show ', 'UIU', 'First Runner Up'),
(34, 13, 'CSE Project showwww', 'UIU', 'First Runner Upa');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `skill_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sname` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`skill_id`, `user_id`, `sname`) VALUES
(49, 11, 'javafx'),
(50, 12, 'Dalali'),
(54, 13, 'C'),
(55, 13, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `username`, `email`, `password`) VALUES
(12, 'MD', 'Dalal', '', 'dalal@gmail.com', '1234'),
(13, 'Kazi ', 'Shawpnil', '', 'kazi123@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`edu_id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`exp_id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `honors`
--
ALTER TABLE `honors`
  ADD PRIMARY KEY (`honor_id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `edu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `exp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `honors`
--
ALTER TABLE `honors`
  MODIFY `honor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
