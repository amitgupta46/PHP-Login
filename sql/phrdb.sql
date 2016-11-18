-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2016 at 05:57 
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phrdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginAttempts`
--

CREATE TABLE `loginAttempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loginAttempts`
--

INSERT INTO `loginAttempts` (`IP`, `Attempts`, `LastLogin`, `Username`, `ID`) VALUES
('::1', 2, '2016-11-16 17:16:18', 'amitgupta', 1),
('127.0.0.1', 1, '2016-11-17 12:59:39', 'amitgupta', 2),
('127.0.0.1', 2, '2016-11-18 03:49:00', 'amit@amit.com', 3),
('127.0.0.1', 1, '2016-11-18 04:40:58', 'manish', 4),
('127.0.0.1', 1, '2016-11-18 05:11:23', 'john', 5);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` char(23) NOT NULL,
  `name` varchar(64) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `entity` varchar(64) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `username`, `password`, `email`, `entity`, `verified`, `mod_timestamp`) VALUES
('1356424295582e7f5e780a5', 'John Doe', 'john', '$2y$10$blhi358HpvJoG8M271nb8u3xpvyS0lLmzwzmgD7sa/z.bmEtbfT/a', 'john@doe.com', 'Insurance', 1, '2016-11-18 04:11:53'),
('1409972293582e6bbdb7435', 'amit gupta', 'a', '$2y$10$ShZuPjKOcW0eZykbvIXiPOwB8/s5kn1EObBdTEWyBe5069Z2V4kIy', '1amit@amit.com', 'Patient', 1, '2016-11-18 02:47:25'),
('1630604813582e6c150dd59', 'b', 'b', '$2y$10$eBzt4Orv.Qu97l82Ecnt2eWewJBsBZ.gdLI6G54ER/MTs0OcRrBq.', '2amit@amit.com', 'Patient', 1, '2016-11-18 02:48:53'),
('2119375411582e78425bf6c', 'manish', 'manish', '$2y$10$PzJ0OtzxHPpAPc.bWvkMGef0IcBUU4z76460NSHRacKF98CoxUOO.', 'manish@one.com', 'Doctor', 1, '2016-11-18 03:41:36'),
('659179724582e6afe83a7f', 'amit gupta', 'amitgupta', '$2y$10$O5re/RBe8IwRlNld6fqQpe8WbZSJMJBoVe5iPfVr2KaWm8WMNc.zy', 'amit@amit.com', 'Patient', 1, '2016-11-18 02:44:14');

-- --------------------------------------------------------

--
-- Table structure for table `patientmap`
--

CREATE TABLE `patientmap` (
  `patientid` char(23) CHARACTER SET utf8 NOT NULL,
  `entityid` char(23) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `phrid` int(64) NOT NULL,
  `authorid` int(64) NOT NULL,
  `patientid` int(64) NOT NULL,
  `filepath` text NOT NULL,
  `notes` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`phrid`, `authorid`, `patientid`, `filepath`, `notes`) VALUES
(0, 0, 0, '/tmp/', ''),
(0, 0, 0, '/tmp/', ''),
(1, 1, 1, '/tmp/1.pdf', ''),
(2, 2, 2, '/tmp/2.pdf', ''),
(3, 3, 3, '/temp/3.pdf', 'Patient has minor fracture in ankle.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginAttempts`
--
ALTER TABLE `loginAttempts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginAttempts`
--
ALTER TABLE `loginAttempts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
