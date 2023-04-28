-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 11:35 PM
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
(1, 0, 'SSC', 'DGGHS', 'Science', 'GPA 5.00', '0000-00-00'),
(2, 0, 'SSC', 'DGGHS', 'Science', 'GPA 5.00', '2017'),
(3, 0, '', '', '', '', ''),
(4, 0, 'HSC', 'BMARPC', 'Science', 'GPA 4.00', '2019'),
(5, 1, 'SSC', 'DGGHS', 'Science', 'GPA 5.00', '2017'),
(6, 1, 'HSC', 'BMARPC', 'Science', 'GPA 4.00', '2019'),
(7, 0, 'SSC', 'DGGHS', 'Science', 'GPA 5.00', '2017'),
(8, 0, 'SSCa', 'DGGHSa', 'Sciencea', 'GPA 5.00', '2017'),
(9, 0, '', '', '', '', '');

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
  `exend` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`exp_id`, `user_id`, `excompany`, `exdesignation`, `exstart`, `exend`) VALUES
(1, 0, 'UIU', '', '2021-09-01', '2022-03-02'),
(2, 0, 'UIU', '', '2021-09-01', '2022-03-02'),
(3, 0, 'UIU', '', '2021-09-01', '2022-03-02'),
(4, 0, 'UIU', 'TA', '2021-09-01', '2022-03-02'),
(5, 1, 'UIU', 'TA', '2022-11-01', 'Present'),
(6, 1, 'UIU', 'Grader', '2023-03-01', 'Present now'),
(7, 0, 'UIU', 'TA', '0000-00-00', '2022-03-02'),
(8, 0, 'UIUa', 'TAa', '2023-03-29', '2022-03-30');

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
(1, 0, '', '', '', '', '', '', '', '', '', NULL),
(2, 0, '', '', '', '', '', '', '', '', '', NULL),
(3, 0, 'fname', 'lname', 'emailad', 'phnnum', 'address', 'nationality', 'blood', 'gender', 'Obj', NULL),
(4, 0, 'fname', 'lname', 'emailad', 'phnnum', 'address', 'nationality', 'blood', 'gender', 'Obj', NULL),
(5, 0, 'Array', 'Array', 'Array', 'Array', 'Array', 'Array', 'Array', 'Array', 'Array', NULL),
(6, 0, 'Kazi', 'Shawpnil', 'kshawpnil@gmai.com', '01633559810', 'Dhanmondi', 'Bangladeshi', 'A+', 'female', '', NULL),
(7, 0, 'Kazi', 'Shawpnil', 'kshawpnil@gmai.com', '01633559810', 'Dhanmondi', 'Bangladeshi', 'A+', 'female', '', NULL),
(8, 0, 'Kazi', 'Shawpnil', 'kshawpnil@gmai.com', '01633559810', 'Dhanmondi', 'Bangladeshi', 'A+', 'female', '', NULL),
(9, 0, '', '', '', '', '', '', '', '', '', NULL),
(10, 0, '', '', '', '', '', '', '', '', '', NULL),
(11, 0, '', '', '', '', '', '', '', '', '', NULL),
(12, 0, '', '', '', '', '', '', '', '', '', NULL),
(13, 0, '', '', '', '', '', '', '', '', '', NULL),
(14, 0, '', '', '', '', '', '', '', '', '', NULL),
(15, 0, '', '', '', '', '', '', '', '', '', NULL),
(16, 0, 'Kazi', 'Shawpnil', 'kshawpnil@gmai.com', '', 'Mirpur', 'Bangladeshi', 'A-', 'male', '', NULL),
(17, 0, 'Kazi', 'Shawpnil', 'kshawpnil@gmai.com', '01633559810', 'Dhanmondi', 'Bangladeshi', 'A+', 'female', '', NULL),
(18, 0, 'Kazi', 'Shawpnil', 'kshawpnil@gmai.com', '01633559810', 'Mirpur', 'Bangladeshi', 'B+', 'female', '', NULL),
(19, 0, 'Kazi', 'Shawpnil', 'kshawpnil@gmai.com', '01633559810', 'Dhanmondi', 'Bangladeshi', 'B+', 'female', '', NULL),
(20, 0, 'Kazi', 'Shawpnil', 'kshawpnil@gmai.com', '01633559810', 'Mirpur', 'Bangladeshi', 'B-', 'male', '', NULL),
(21, 0, 'Kazi', 'Shawpnil', 'kshawpnil@gmai.com', '01633559810', 'Dhanmondi', 'Bangladeshi', 'A+', 'female', '', NULL),
(22, 0, 'Kazi', 'Shawpnil', 'kshawpnil@gmai.com', '01633559810', 'Dhanmondi', 'Bangladeshi', 'A+', 'female', '', NULL),
(23, 1, 'Kazi', 'Shawpnil', 'kshawpnil@gmail.com', '01655447892', 'Dhanmondi', 'Bangladeshi', 'A+', 'Female', 'I am Kazi Shawpnil, student from UIU. ', NULL),
(24, 1, 'Kazi', 'Shawpnil', 'kshawpnil@gmail.com', '01655447789', 'Kolabagan, India', 'Indian', 'A+', 'Female', 'I am Kazi Shawpnil, student from UIU.', NULL),
(25, 1, 'Kazi', 'Shawpnil', 'kshawpnil@gmail.com', '01655447892', 'Dhanmondi', 'Bangladeshi', 'A+', 'Female', 'I am Kazi Shawpnil, student from UIU. ', NULL),
(26, 1, 'Kazi', 'Shawpnil', 'kshawpnil@gmail.com', '01655447789', 'Kolabagan, India', 'Indian', 'A+', 'Female', 'I am Kazi Shawpnil, student from UIU.', NULL),
(27, 0, '', '', '', '', '', '', '', 'female', '', NULL),
(28, 0, '', '', '', '', '', '', '', 'female', '', NULL),
(29, 0, 'Kazi', 'Rieana', 'kshawpnil@gmail.com', '01633559818', 'Dhanmondi', 'Bangladeshi', 'A+', 'female', '', ''),
(30, 0, 'Kazi', 'Rieana', 'kshawpnil@gmail.com', '01633559818', 'Dhanmondi', 'Bangladeshi', 'A+', 'female', '', ''),
(31, 0, 'Kazi', 'Rieana', 'kshawpnil@gmai.com', '01633559810', 'Dhanmondi', 'Bangladeshi', 'A+', 'female', '', ''),
(32, 0, 'Kazi', 'Rieana', 'kshawpnil@gmai.com', '01633559810', 'Dhanmondi', 'Bangladeshi', 'B-', 'female', '', '1.jpg'),
(33, 0, 'Kazi', 'Shawpnil', 'kshawpnil@gmai.com', '01633559818', 'Dhanmondi', 'Bangladeshi', 'B', 'male', '', '1.jpg'),
(34, 0, 'Kazi', 'Rieana', 'kshawpnil@gmai.com', '01633559810', 'Dhanmondi', 'Bangladeshi', 'B', 'female', '', '1.jpg'),
(35, 0, 'Kazi', 'Rieana', 'kshawpnil@gmai.com', '01633559810', 'Dhanmondi', 'Bangladeshi', 'B', 'female', '', '1.jpg'),
(36, 0, 'Kazi', 'Rieana', 'kshawpnil@gmail.com', '01633559818', 'Dhanmondi', 'Bangladeshi', 'A+', 'other', '', '1.jpg'),
(37, 0, 'Kazi', 'Rieana', 'kshawpnil@gmail.com', '01633559818', 'Dhanmondi', 'Bangladeshi', 'A+', 'other', '', '1.jpg'),
(38, 0, 'Kazi', 'Rieana', 'kshawpnil@gmail.com', '01633559818', 'Dhanmondi', 'Bangladeshi', 'A+', 'other', '', '1.jpg'),
(39, 0, 'Kazi', 'Rieana', 'kshawpnil@gmail.com', '01633559818', 'Mirpur', 'Bangladeshi', 'B', 'female', '', 'Female Portraits by Karina Yashagina _ Inspiration Grid.jpg'),
(40, 0, 'Kazi', 'Rieana', 'kshawpnil@gmai.com', '01633559810', 'Dhanmondi', 'Bangladeshi', 'B-', 'female', '', 'Female Portraits by Karina Yashagina _ Inspiration Grid.jpg'),
(41, 0, 'Kazi', 'Rieana', 'kshawpnil@gmai.com', '01633559818', 'Dhanmondi', 'Bangladeshi', 'B', 'female', '', '2.jpeg'),
(42, 0, 'Kazi', 'Rieana', 'kshawpnil@gmail.com', '01633559818', 'Dhanmondi', 'Bangladeshi', 'B-', 'female', '', 'image/30 Gorgeous Wallpapers for Your Desktop.jpg'),
(43, 0, 'Kazi', 'Rieana', 'kshawpnil@gmail.com', '01633559818', 'Dhanmondi', 'Bangladeshi', 'B-', 'female', '', 'image/30 Gorgeous Wallpapers for Your Desktop.jpg'),
(44, 0, 'Kazi', 'Shawpnil', 'kshawpnil@gmai.com', '01633559810', 'Dhanmondi', 'Bangladeshi', 'A+', 'male', 'lololo', 'image/30 Gorgeous Wallpapers for Your Desktop.jpg'),
(45, 0, 'Kazi', 'Shawpnil', 'kshawpnil@gmai.com', '01633559818', 'Dhanmondi', 'Bangladeshi', 'A+', 'female', 'lololo', 'image/30 Gorgeous Wallpapers for Your Desktop.jpg'),
(46, 0, 'Kazi', 'Shawpnil', 'kshawpnil@gmai.com', '01633559818', 'Dhanmondi', 'Bangladeshi', 'A+', 'female', 'lololo', 'image/30 Gorgeous Wallpapers for Your Desktop.jpg'),
(47, 0, 'Kazi', 'Rieana', 'kshawpnil@gmail.com', '01633559810', 'Dhanmondi', 'Bangladeshi', 'A+', 'female', 'lololo', 'image/5517f0d1a124687bbd2eed14436f0aa6.jpg'),
(48, 0, 'Kazi', 'Rieana', 'kshawpnil@gmail.com', '01633559810', 'Dhanmondi', 'Bangladeshi', 'B+', 'female', 'lololo', 'image/e031f548d8600054a0aaea285282e9d4.jpg'),
(49, 0, 'kaz', 'name', 'eail', '0125', 'kk', 'tionality', 'blod', 'geder', 'vobj', 'target'),
(50, 0, 'kaz', 'name', 'eail', '0125', 'kk', 'tionality', 'blod', 'geder', 'vobj', 'target'),
(51, 0, 'Kazi', 'Rieana', 'kshawpnil@gmail.com', '01633559810', 'Dhanmondi', 'Bangladeshi', 'B+', 'female', 'lololo', 'image/e031f548d8600054a0aaea285282e9d4.jpg'),
(52, 0, 'Kazi', 'Shawpnil', 'kshawpnil@gmai.com', '01633559810', 'Kolabagan', 'Bangladeshi', 'B', 'female', 'hellogllllllllllllllllllllloiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiieeeeeeeeeeeeeeeeeeeeeeeeeeeee. ejjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'image/download.jpg'),
(53, 0, 'Kazi', 'Shawpnil', 'kshawpnil@gmail.com', '01633559818', 'Kolabagan', 'Bangladeshi', 'A+', 'female', 'Hello ', 'image/1.jpg'),
(54, 0, 'Kazi', 'Shawpnil', 'kshawpnil@gmai.com', '01633559810', 'Kolabagan', 'Bangladeshi', 'B-', 'female', 'Hello ', 'image/download.jpg'),
(55, 0, 'Kazi', 'Kazi', 'kshawpnil@gmai.com', '01633559810', 'Dhanmondi', 'Bangladeshi', 'B+', 'female', 'Hello hello', 'image/e031f548d8600054a0aaea285282e9d4.jpg'),
(56, 0, 'Kazi', 'Rieana', 'kshawpnil@gmai.com', '01633559810', 'Dhanmondi', 'Bangladeshi', 'A+', 'female', 'Hello hello22', 'image/2.jpeg'),
(57, 0, '', '', '', '', '', '', '', 'female', '', 'image/');

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
(1, 0, '', 'UIU', 'First Runner Up'),
(2, 0, 'CSE Project show ', 'UIU', 'First Runner Up'),
(3, 0, '', '', ''),
(4, 1, 'CSE Project Show', 'UIU', 'First Runner up'),
(5, 1, 'Techkriti', 'India', 'Participants'),
(6, 0, 'CSE Project show ', 'UIU000', 'First Runner Up'),
(7, 0, 'CSE Project show a', 'UIUa', 'First Runner Upa');

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
(1, 0, 'php'),
(2, 0, 'html'),
(3, 0, ''),
(4, 0, ''),
(5, 0, ''),
(6, 0, ''),
(7, 0, 'css'),
(8, 0, 'C++'),
(9, 0, 'C++'),
(10, 0, 'C'),
(11, 0, 'Java'),
(12, 0, 'java'),
(13, 0, 'javafx'),
(14, 0, 'javvaa'),
(15, 0, 'phppp'),
(16, 0, 'csss'),
(17, 0, ''),
(18, 1, 'php'),
(19, 1, 'html'),
(20, 0, 'C'),
(21, 0, 'C'),
(22, 0, 'C, C++'),
(23, 0, 'javafx'),
(24, 0, 'C'),
(25, 0, 'C'),
(26, 0, 'C'),
(27, 0, 'C'),
(28, 0, 'javafx'),
(29, 0, 'php'),
(30, 0, 'javafx'),
(31, 0, 'C'),
(32, 0, 'C'),
(33, 0, 'C'),
(34, 0, 'php');

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
(1, 'Kazi', 'Shawpnil', 'shawpnil88', 'kazi@gmail.com', 'ks123'),
(2, 'Shawpnil', 'Kazi', 'kazi44', 'ks@gmail.com', 'ks123'),
(3, 'kk', 'ss', 'ks', 'kkss@gmail.com', '123'),
(4, 'kj', 'lo', 'lol', 'lo@gmail.com', '1234');

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
  MODIFY `edu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `exp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `honors`
--
ALTER TABLE `honors`
  MODIFY `honor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
