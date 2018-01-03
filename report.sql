-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2018 at 06:29 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `report`
--
CREATE DATABASE IF NOT EXISTS `report` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `report`;

-- --------------------------------------------------------

--
-- Table structure for table `begining`
--

CREATE TABLE `begining` (
  `year` varchar(5) NOT NULL,
  `term` varchar(10) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `score` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `begining`
--

INSERT INTO `begining` (`year`, `term`, `student_id`, `subject`, `score`) VALUES
('2016', '1st term', '20', 'English', '25'),
('2016', '1st term', '22', 'English', '14'),
('2016', '1st term', '20', 'English', '44'),
('2016', '1st term', '27', 'English', '235'),
('2016', '1st term', '88', 'English', '45'),
('2016', '1st term', '33', 'Science', '64'),
('2016', '1st term', '33', 'English', '85'),
('2016', '1st term', '', 'English', ''),
('2016', '1st term', '', 'English', ''),
('2016', '1st term', '', 'English', ''),
('2016', '1st term', '', 'English', ''),
('2016', '1st term', '', 'English', ''),
('2016', '1st term', '', 'English', ''),
('2016', '1st term', '20', 'English', '55');

-- --------------------------------------------------------

--
-- Table structure for table `finalmarks`
--

CREATE TABLE `finalmarks` (
  `id` int(11) NOT NULL,
  `year` varchar(4) NOT NULL,
  `term` varchar(10) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `score` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finalmarks`
--

INSERT INTO `finalmarks` (`id`, `year`, `term`, `student_id`, `subject`, `score`) VALUES
(1, '2016', '1st term', '21', 'English', '25'),
(2, '2016', '1st term', '21', 'SST', '85'),
(3, '2016', '1st term', '21', 'Science', '75'),
(4, '2016', '1st term', '33', 'English', '79'),
(5, '2016', '1st term', '45', 'English', '98'),
(17, '2018', '1st term', '2', 'literature', '12'),
(18, '2018', '1st term', '2', 'Physics', '89'),
(19, '2018', '1st term', '2', 'Economics', '77'),
(20, '2018', '1st term', '2', 'Physics', '55');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `grade_id` varchar(10) NOT NULL,
  `min_value` varchar(3) NOT NULL,
  `max_value` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`grade_id`, `min_value`, `max_value`) VALUES
('', '', ''),
('C3', '65', '69'),
('C4', '60', '64'),
('C5', '55', '59'),
('C6', '50', '54'),
('D1', '75', '100'),
('D2', '70', '74'),
('D82', '23', '45'),
('dfdf', '23', '56'),
('Dt2', '23', '45'),
('F9', '0', '39'),
('jk', '99', '678'),
('P7', '45', '49'),
('P8', '40', '44'),
('r4', '45', '67'),
('tyty', '34', '45'),
('yt', '45', '56');

-- --------------------------------------------------------

--
-- Table structure for table `mid_term`
--

CREATE TABLE `mid_term` (
  `year` varchar(5) NOT NULL,
  `term` varchar(10) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `score` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mid_term`
--

INSERT INTO `mid_term` (`year`, `term`, `student_id`, `subject`, `score`) VALUES
('2016', '1st term', '20', 'English', '33'),
('2016', '1st term', '45', 'SST', '36');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `st_id` varchar(20) NOT NULL,
  `name` varchar(35) NOT NULL,
  `class` varchar(5) NOT NULL,
  `stream` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `index_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_id`, `name`, `class`, `stream`, `gender`, `index_no`) VALUES
('11', 'natu apex', 'S4', 'east', 'Male', 'unb12/78/2016'),
('21', 'suvy', 'S5', 'west', 'Female', '12/435'),
('25', 'suvy', 'S1', 'west', 'Female', '12/444'),
('27', 'Akanyijuka Damson', 'S2', 'west', 'Male', '12/189'),
('33', 'Barnabas', 'S2', 'west', 'Male', '12/78');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_id` varchar(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `class` varchar(5) NOT NULL,
  `mum_name` varchar(30) NOT NULL,
  `dad_name` varchar(30) NOT NULL,
  `previous_school` varchar(40) NOT NULL,
  `school_awareness_mode` varchar(20) NOT NULL,
  `years_expected` int(5) NOT NULL,
  `admition_date` varchar(20) NOT NULL,
  `today` varchar(20) NOT NULL,
  `sponsor` varchar(30) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `tribe` varchar(20) NOT NULL,
  `home_adress` varchar(30) NOT NULL,
  `current_adress` varchar(30) NOT NULL,
  `previous_agregate` int(5) NOT NULL,
  `previous_class` varchar(20) NOT NULL,
  `house` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `first_name`, `last_name`, `date_of_birth`, `class`, `mum_name`, `dad_name`, `previous_school`, `school_awareness_mode`, `years_expected`, `admition_date`, `today`, `sponsor`, `religion`, `tribe`, `home_adress`, `current_adress`, `previous_agregate`, `previous_class`, `house`) VALUES
(1, 'ST123APX', 'hg', 'hgbn', '12-12-2000', 's2', 'hgjh', 'hgh', 'ghjh', 'gjh', 3, '12-12-2017', '12-12-2017', 'xtn', 'sda', 'hgh', 'kla', 'kla', 12, 's1', 'green'),
(2, 'ST123APX', 'chris', 'inno', '01-01-2001', 's1', 'jov', 'nel', 'kle', 'media', 4, '12-12-2017', '12-12-2017', 'dad', 'SDA', 'baf', 'kisoro', 'kla', 12, 'p7', 'blue senior'),
(3, 'ST123APX', 'krish', 'mpimbaza', '10-19-2000', 's3', 'egrs', 'gakr', 'mlss', 'media', 1, '12-12-2017', '12-12-2017', 'father', 'SDA', 'bafumbira', 'kisoro', 'kla', 20, 's3', 'green junior'),
(4, 'ST123APX', 'th', 'ygh', '12-13-2017', 'gc', 'hgh', 'hgh', 'hgh', 'gh', 3, '12-20-2017', '12/30/2017', 'ghgjh', 'hghj', 'hgjhj', 'fhgjh', 'fhgjh', 12, 's2', 'ghgj'),
(5, 'ST123APX', 'hg', 'fg', '12-17-2012', 'gjh', 'jhj', 'jhj', 'jhjk', 'jhj', 2, '12/20/2017', '12/16/2017', 'jhj', 'vb', 'hjm', 'nbm', 'nbm', 11, '2', 'bvnb'),
(6, 'ST123APX', 'hg', 'hgjh', '11-28-2017', 's3', 'ghgh', 'ghgh', 'gfhgjh', 'ghgjh', 3, '11/27/2017', '12/16/2017', 'ghg', 'gfhg', 'gfhg', 'gf', 'gf', 22, 'gfhg', 'fghg');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject_id` varchar(10) NOT NULL,
  `subject_name` varchar(20) NOT NULL,
  `subject_type` varchar(15) NOT NULL,
  `subject_priority` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_id`, `subject_name`, `subject_type`, `subject_priority`) VALUES
(2, 'LIT213', 'literature', 'Languages', 3),
(3, 'MTH121', 'Maths', 'Sciences', 1),
(4, 'ECO120', 'Economics', 'arts', 3),
(5, 'PH23', 'Physics', 'Sciences', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL,
  `name` varchar(35) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `role` varchar(20) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `gender`, `role`, `username`, `password`) VALUES
(12354, 'krish', 'male', 'Admin', 'admin', 'k'),
(12358, 'nats', 'Femal', 'Secretary', 'nats', 'nats');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `finalmarks`
--
ALTER TABLE `finalmarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `finalmarks`
--
ALTER TABLE `finalmarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12359;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
