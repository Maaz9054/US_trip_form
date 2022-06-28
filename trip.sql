-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 10:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ustrip`
--

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `sr.no` int(6) NOT NULL,
  `name` text NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `other` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`sr.no`, `name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES
(1, 'testing 1', 22, 'm', 'this @this.com', '1234567890', 'hihihiiih', '2022-06-28 00:51:07'),
(2, 'Leonard Guy', 0, 'Reiciend', 'gemagu@mailinator.com', '0', ' Beatae quibusdam ape', '2022-06-28 01:38:10'),
(3, 'Leonard Guy', 0, 'Reiciend', 'gemagu@mailinator.com', '0', ' Beatae quibusdam ape', '2022-06-28 01:44:02'),
(4, 'Harriet Snow', 0, 'Aut cupi', 'hegyxesidu@mailinator.com', '0', ' Dolores eaque in vel', '2022-06-28 01:45:06'),
(5, 'Ivor Mcintyre', 0, 'Maxime t', 'kydo@mailinator.com', '0', ' Itaque ipsam sed eu ', '2022-06-28 01:45:22'),
(6, 'Ivor Mcintyre', 0, 'Maxime t', 'kydo@mailinator.com', '0', ' Itaque ipsam sed eu ', '2022-06-28 01:47:36'),
(7, 'Ivor Mcintyre', 0, 'Maxime t', 'kydo@mailinator.com', '0', ' Itaque ipsam sed eu ', '2022-06-28 01:48:40'),
(8, 'Leah Harvey', 0, 'Assumend', 'repo@mailinator.com', '1', ' Sit iure exercitati', '2022-06-28 01:48:48'),
(9, 'Barbara Dodson', 0, 'Rerum co', 'fasarezyku@mailinator.com', '1234567890', ' Sed et rem totam mag', '2022-06-28 01:49:28'),
(10, 'Quail Santiago', 0, 'Et ea qu', 'qyvehyqo@mailinator.com', '9876543210', ' Consequatur est vol', '2022-06-28 01:49:48'),
(11, 'Quail Santiago', 0, 'Et ea qu', 'qyvehyqo@mailinator.com', '9876543210', ' Consequatur est vol', '2022-06-28 01:51:15'),
(12, 'Quail Santiago', 0, 'Et ea qu', 'qyvehyqo@mailinator.com', '9876543210', ' Consequatur est vol', '2022-06-28 01:55:26'),
(13, 'Tatum Davenport', 0, 'Dolore c', 'fovevyt@mailinator.com', '+1 (526) 3', ' Illo voluptatem Dol', '2022-06-28 01:55:57'),
(14, 'Tatum Davenport', 0, 'Dolore c', 'fovevyt@mailinator.com', '+1 (526) 3', ' Illo voluptatem Dol', '2022-06-28 01:56:26'),
(15, 'Tatum Davenport', 0, 'Dolore c', 'fovevyt@mailinator.com', '+1 (526) 3', ' Illo voluptatem Dol', '2022-06-28 01:57:07'),
(16, 'Tatum Davenport', 0, 'Dolore c', 'fovevyt@mailinator.com', '+1 (526) 3', ' Illo voluptatem Dol', '2022-06-28 01:57:12'),
(17, 'Tatum Davenport', 0, 'Dolore c', 'fovevyt@mailinator.com', '+1 (526) 3', ' Illo voluptatem Dol', '2022-06-28 01:57:49'),
(18, 'Tatum Davenport', 0, 'Dolore c', 'fovevyt@mailinator.com', '+1 (526) 3', ' Illo voluptatem Dol', '2022-06-28 01:58:40'),
(19, 'Naida Barnett', 0, 'Doloribu', 'matykaga@mailinator.com', '+1 (313) 9', ' Dolor dicta non dolo', '2022-06-28 02:02:46'),
(20, 'Naida Barnett', 0, 'Doloribu', 'matykaga@mailinator.com', '+1 (313) 9', ' Dolor dicta non dolo', '2022-06-28 02:04:11'),
(21, 'Sharon Jordan', 0, 'Quam con', 'tawyv@mailinator.com', '1478523690', ' Alias et tenetur des', '2022-06-28 02:04:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`sr.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `sr.no` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
