-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2025 at 04:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsstat`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_id` varchar(10) DEFAULT NULL,
  `full_name` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `full_name`, `age`, `email`, `gender`, `course`) VALUES
(1, 'S2025-0856', 'Stephen Sheppard', 17, 'stephen.sheppard@university.edu', 'Male', 'BS Statistics'),
(2, 'S2025-0857', 'Paul York', 22, 'paul.york@university.edu', 'Male', 'BS Statistics'),
(3, 'S2025-0858', 'Brandon Burnett', 21, 'brandon.burnett@university.edu', 'Male', 'BS Statistics'),
(4, 'S2025-0859', 'James Keller', 25, 'james.keller@university.edu', 'Male', 'BS Statistics'),
(5, 'S2025-0860', 'Allen Walton', 23, 'allen.walton@university.edu', 'Male', 'BS Statistics'),
(6, 'S2025-0861', 'Zoe Buck', 17, 'zoe.buck@university.edu', 'Female', 'BS Statistics'),
(7, 'S2025-0862', 'Richard Anderson', 23, 'richard.anderson@university.edu', 'Male', 'BS Statistics'),
(8, 'S2025-0863', 'Jason Coleman', 23, 'jason.coleman@university.edu', 'Male', 'BS Statistics'),
(9, 'S2025-0864', 'Oscar Mullen', 19, 'oscar.mullen@university.edu', 'Male', 'BS Statistics'),
(10, 'S2025-0865', 'Richard Garrett', 21, 'richard.garrett@university.edu', 'Male', 'BS Statistics'),
(11, 'S2025-0866', 'Mark Hudson', 24, 'mark.hudson@university.edu', 'Male', 'BS Statistics'),
(12, 'S2025-0867', 'Lindsey Williams', 22, 'lindsey.williams@university.edu', 'Female', 'BS Statistics'),
(13, 'S2025-0868', 'James Randall', 25, 'james.randall@university.edu', 'Male', 'BS Statistics'),
(14, 'S2025-0869', 'Barbara Lynn', 20, 'barbara.lynn@university.edu', 'Female', 'BS Statistics'),
(15, 'S2025-0870', 'Paul Sanders', 24, 'paul.sanders@university.edu', 'Male', 'BS Statistics'),
(16, 'S2025-0871', 'David Cummings', 21, 'david.cummings@university.edu', 'Male', 'BS Statistics'),
(17, 'S2025-0872', 'Cody Burke', 24, 'cody.burke@university.edu', 'Male', 'BS Statistics'),
(18, 'S2025-0873', 'Carmen Saunders', 18, 'carmen.saunders@university.edu', 'Female', 'BS Statistics'),
(19, 'S2025-0874', 'Sandra Allen', 21, 'sandra.allen@university.edu', 'Female', 'BS Statistics'),
(20, 'S2025-0875', 'Jack Gill', 23, 'jack.gill@university.edu', 'Male', 'BS Statistics'),
(21, 'S2025-0876', 'William Love', 20, 'william.love@university.edu', 'Male', 'BS Statistics'),
(22, 'S2025-0877', 'Kristen Johnston', 19, 'kristen.johnston@university.edu', 'Female', 'BS Statistics'),
(23, 'S2025-0878', 'Robert Cowan', 20, 'robert.cowan@university.edu', 'Male', 'BS Statistics'),
(24, 'S2025-0879', 'Laura Murillo', 23, 'laura.murillo@university.edu', 'Female', 'BS Statistics'),
(25, 'S2025-0880', 'Debra Day', 23, 'debra.day@university.edu', 'Female', 'BS Statistics'),
(26, 'S2025-0881', 'Brian Clark', 23, 'brian.clark@university.edu', 'Male', 'BS Statistics'),
(27, 'S2025-0882', 'James Johnson', 25, 'james.johnson@university.edu', 'Male', 'BS Statistics'),
(28, 'S2025-0883', 'Daryl Dominguez', 24, 'daryl.dominguez@university.edu', 'Male', 'BS Statistics'),
(29, 'S2025-0884', 'Lisa Williams', 21, 'lisa.williams@university.edu', 'Female', 'BS Statistics'),
(30, 'S2025-0885', 'Bradley Serrano', 20, 'bradley.serrano@university.edu', 'Male', 'BS Statistics'),
(31, 'S2025-0886', 'Thomas Kelley', 20, 'thomas.kelley@university.edu', 'Male', 'BS Statistics'),
(32, 'S2025-0887', 'Timothy Malone', 19, 'timothy.malone@university.edu', 'Male', 'BS Statistics'),
(33, 'S2025-0888', 'Elizabeth Trevino', 23, 'elizabeth.trevino@university.edu', 'Female', 'BS Statistics'),
(34, 'S2025-0889', 'Isaiah Ford', 17, 'isaiah.ford@university.edu', 'Male', 'BS Statistics'),
(35, 'S2025-0890', 'Robert Francis', 23, 'robert.francis@university.edu', 'Male', 'BS Statistics'),
(36, 'S2025-0891', 'Crystal Glass', 23, 'crystal.glass@university.edu', 'Female', 'BS Statistics'),
(37, 'S2025-0892', 'Lindsey Miller', 17, 'lindsey.miller@university.edu', 'Female', 'BS Statistics'),
(38, 'S2025-0893', 'Debra Calhoun', 20, 'debra.calhoun@university.edu', 'Female', 'BS Statistics'),
(39, 'S2025-0894', 'Jason Smith', 20, 'jason.smith@university.edu', 'Male', 'BS Statistics'),
(40, 'S2025-0895', 'Wendy Wong', 19, 'wendy.wong@university.edu', 'Female', 'BS Statistics'),
(41, 'S2025-0896', 'Joshua Wright', 19, 'joshua.wright@university.edu', 'Male', 'BS Statistics'),
(42, 'S2025-0897', 'Scott Leon', 19, 'scott.leon@university.edu', 'Male', 'BS Statistics'),
(43, 'S2025-0898', 'Kimberly Williams', 21, 'kimberly.williams@university.edu', 'Female', 'BS Statistics'),
(44, 'S2025-0899', 'Mr. Thomas Williams MD', 21, 'mr..thomas.williams.md@university.edu', 'Male', 'BS Statistics'),
(45, 'S2025-0900', 'Samantha Garcia', 22, 'samantha.garcia@university.edu', 'Female', 'BS Statistics');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
