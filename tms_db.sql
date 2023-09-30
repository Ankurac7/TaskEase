-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2023 at 02:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(1, 'Ankur', 'ankurchanda198@gmail.com', 'ankur123', 9832219955),
(2, 'Test', 'Test@gmail.com', 'Test123', 9999999999),
(4, 'Debajyoti ', 'debajyotimitra1@gmail.com', 'debajyoti123', 7439728929);

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `lid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(250) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'No Action'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`lid`, `uid`, `subject`, `message`, `status`) VALUES
(1, 2, 'Regarding one day CL', 'Sir,\r\nHaving urgent work at home, I cannot attend the meeting on 22nd Sep 2023', 'Approved'),
(2, 3, 'SIH Hackathon', 'Sir, I will have to take leave for the internal SIH hackathon on 20th Sep', 'Rejected'),
(3, 3, 'Presentation day Postponed', 'Postponed date. Need leave on 22nd.', 'Approved'),
(10, 4, 'Medical Emergency', 'Sir, I have to go to the clinic to do some blood tests immediately as told by the doctor.', 'Approved'),
(11, 4, 'Medical Emergency', 'Sir, i have to go to get my reports on Sunday\r\nThank you sir.', 'No Action'),
(12, 2, 'Call for Internship Interview', 'Sir, A Internship interview has been scheduled for me. The interview is supposed to be of 2 hours. Please check my leave application and let me know at the earliest.\r\nThank you Sir\r\nRounak', 'No Action'),
(13, 1, 'Editorial work', 'Editorial Work at R&D Lab', 'No Action');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `tid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Not Started'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`tid`, `uid`, `description`, `start_date`, `end_date`, `status`) VALUES
(1, 1, 'Assignment 1', '2023-09-14', '2023-09-18', 'Not Started'),
(2, 2, 'Submit the reports by 20th', '2023-09-18', '2023-09-20', 'Not Started'),
(3, 3, 'Mention the task here.', '2023-09-19', '2023-09-20', 'In-Progress'),
(4, 3, 'Complete Project Report', '2023-09-21', '2023-09-24', 'Complete'),
(5, 4, 'CAD Design Project', '2023-09-14', '2023-09-28', 'In-Progress'),
(6, 4, 'Troubleshooting and Repair', '2023-09-21', '2023-09-27', 'In-Progress'),
(7, 6, 'Ethical Dilemma Analysis', '2023-09-20', '2023-09-25', 'Not Started'),
(8, 1, 'Prepare the list of all absent students', '2023-09-26', '2023-09-26', 'Complete'),
(9, 3, 'Study for Midsem2', '2023-09-29', '2023-09-30', 'In-Progress');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `password`, `mobile`) VALUES
(1, 'Rohit Sharma', 'rohitsharma238@gmail.com', 'rohit2235', 9843762952),
(2, 'Rounak Roy', 'rounakroy8838@gmail.com', 'rounak12367', 9675335283),
(3, 'Kushan Choudhury', 'kushanchoudhury2003@gmail.com', 'kushan123', 9834728283),
(4, 'Rohan Verma', 'rohan.verma09@gmail.com', 'rohan123', 9999998499),
(5, 'Aryan Patel', 'aryan.patel123@yahoo.com', 'aryan123', 9999971999),
(6, 'Kavita Mehta', 'kavita.mehta56@hotmail.com', 'kavita123', 9999673999);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
