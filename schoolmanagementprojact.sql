-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 08:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmanagementprojact`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(200) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `datetime`) VALUES
(11, 'najibul@', 'najibulmiddya11@gmail.com', '$2y$10$DvLBPphJUHVuuX9TNVdAX.QiwAr5xBX/INiHVgRJRogOY152qAqAS', '2023-07-26 20:43:45');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` bigint(22) NOT NULL,
  `class` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class`, `created_at`, `update_at`) VALUES
(19, 'Class I', '2023-08-06 23:35:50', '2023-08-07 00:24:17'),
(20, 'Class II', '2023-08-06 23:36:11', NULL),
(21, 'Class III', '2023-08-06 23:36:29', NULL),
(22, 'Class IV', '2023-08-06 23:36:44', NULL),
(23, 'Class V', '2023-08-06 23:37:02', NULL),
(24, 'Class VI', '2023-08-06 23:37:09', NULL),
(25, 'Class VII', '2023-08-06 23:37:25', NULL),
(26, 'Class VIIII', '2023-08-06 23:37:46', NULL),
(27, 'Class IX', '2023-08-06 23:38:01', NULL),
(28, 'Class X', '2023-08-06 23:38:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(22) NOT NULL,
  `class_id` bigint(22) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `dob` date NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `address` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `class_id`, `name`, `email`, `mobile`, `gender`, `dob`, `photo`, `address`, `created_at`, `updated_at`) VALUES
(4, 28, 'Najibul Middya', 'najibulmiddya11@gmail.com', '06295257441', 'Male', '2023-08-30', NULL, 'Dhuliadihi,Kalpathar', '2023-08-06 23:45:13', NULL),
(5, 23, 'Sarfraj Alam Middya', 'sarfarajalam1420@gmail.com', '08509028992', 'Male', '2023-08-23', NULL, 'Vill-Dhuliadihi,Kalpathar', '2023-08-07 00:00:10', NULL),
(6, 27, 'Mustafizur Middya', 'musta11@gmail.com', '3625487954', 'Male', '2023-08-11', NULL, 'Dhuliadihi,Kalpathar', '2023-08-07 00:01:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_admission`
--

CREATE TABLE `student_admission` (
  `id` bigint(22) NOT NULL,
  `name` varchar(30) NOT NULL,
  `student_id` bigint(22) NOT NULL,
  `prev_class_id` bigint(22) NOT NULL,
  `current_class_id` bigint(22) NOT NULL,
  `remarks` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `email`, `gender`, `mobile`, `dob`, `photo`, `address`, `created_at`, `updated_at`) VALUES
(6, 'Najibul Middya', 'najibulmiddya11@gmail.com', 'Male', '06295257441', '2023-07-06', NULL, 'Dhuliadihi,Kalpathar', '2023-07-28 14:53:37', '0000-00-00 00:00:00'),
(7, 'Najibul Middya', 'najibulmiddya11@gmail.com', 'Male', '06295257441', '2023-07-23', NULL, 'Dhuliadihi,Kalpathar', '2023-07-28 14:53:49', '0000-00-00 00:00:00'),
(8, 'Sarfraj Alam Middya', 'sarfarajalam1420@gmail.com', 'Male', '08509028992', '2023-09-10', NULL, 'Vill-Dhuliadihi,Kalpathar', '2023-08-07 22:45:28', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `yeers`
--

CREATE TABLE `yeers` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `yeers`
--

INSERT INTO `yeers` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '2023', '2023-08-06 10:15:21', NULL),
(2, '2024', '2023-08-06 10:59:05', NULL),
(3, '2025', '2023-08-07 00:17:45', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_rel_to student` (`class_id`);

--
-- Indexes for table `student_admission`
--
ALTER TABLE `student_admission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rel_class_prv_to_admission` (`prev_class_id`),
  ADD KEY `rel_class_crnt_to_admission` (`current_class_id`),
  ADD KEY `rel_student_to_admission` (`student_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yeers`
--
ALTER TABLE `yeers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` bigint(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_admission`
--
ALTER TABLE `student_admission`
  MODIFY `id` bigint(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `yeers`
--
ALTER TABLE `yeers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `class_rel_to student` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`);

--
-- Constraints for table `student_admission`
--
ALTER TABLE `student_admission`
  ADD CONSTRAINT `rel_class_crnt_to_admission` FOREIGN KEY (`current_class_id`) REFERENCES `class` (`id`),
  ADD CONSTRAINT `rel_class_prv_to_admission` FOREIGN KEY (`prev_class_id`) REFERENCES `class` (`id`),
  ADD CONSTRAINT `rel_student_to_admission` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
