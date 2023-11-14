-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 14, 2023 at 05:59 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dit`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `course_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_modules`
--

DROP TABLE IF EXISTS `class_modules`;
CREATE TABLE IF NOT EXISTS `class_modules` (
  `id` int NOT NULL,
  `class_id` int NOT NULL,
  `module_id` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int NOT NULL,
  `department_id` int NOT NULL,
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `id` int NOT NULL,
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
  `id` int NOT NULL,
  `code` text NOT NULL,
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

DROP TABLE IF EXISTS `staffs`;
CREATE TABLE IF NOT EXISTS `staffs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `setion_id` int NOT NULL,
  `role_id` int NOT NULL,
  `about_me` varchar(255) NOT NULL DEFAULT 'Not set',
  `staff_code` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `fullname`, `email`, `phone_no`, `location`, `department`, `address`, `setion_id`, `role_id`, `about_me`, `staff_code`) VALUES
(1, 'Ernest Doe', 'ernest@gmail.com', '09876543219', 'Dar es salaam', 'computer', '', 0, 0, 'Not set', '0'),
(2, 'Elisha Good', 'elisha@gmail.com', '1234567890001', 'Morogoro', 'computer', '', 0, 0, 'Not set', '0'),
(4, 'John Doe', 'johndoe@gmail.com', '009742356777', 'Mwanza', 'computer', '', 0, 0, 'Not set', '0');

-- --------------------------------------------------------

--
-- Table structure for table `staff_classes`
--

DROP TABLE IF EXISTS `staff_classes`;
CREATE TABLE IF NOT EXISTS `staff_classes` (
  `id` int NOT NULL,
  `staff_id` int NOT NULL,
  `class_id` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff_modules`
--

DROP TABLE IF EXISTS `staff_modules`;
CREATE TABLE IF NOT EXISTS `staff_modules` (
  `id` int NOT NULL,
  `staff_id` int NOT NULL,
  `module_id` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int NOT NULL AUTO_INCREMENT,
  `registration_no` bigint NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `class_id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` text NOT NULL,
  `department` text NOT NULL,
  `graduated_at` varchar(50) NOT NULL,
  `year_of_graduation` int NOT NULL,
  `location` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'On going',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `registration_no`, `fullname`, `class_id`, `email`, `phone_no`, `department`, `graduated_at`, `year_of_graduation`, `location`, `address`, `status`) VALUES
(1, 220229304050, 'John Doe', 0, 'johndoe@example.com', '0987654321', 'computer', 'Padre Pio Secondary School', 2021, 'Kivule-Dar es salaam', '001 Kananura Street, 12117-Kivule-Dar es salaam', 'On going'),
(2, 220229809070, 'James Rodri', 0, 'james@rodri.com', '1234567890', 'computer', 'Scholastica Secondary school', 2021, 'Posta-Dar es salaam', '012 Posta Street, 117-Posta-Dar es salaam', 'On going'),
(3, 22022506070, 'Solomon Solomon', 0, 'solomon@solomon.com', '0987653210', 'computer', 'Theresia Secondary School', 2021, 'Mahenge-Morogoro', '101 Madini Street, 3306-Mahenge-Morogoro', 'On going');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
