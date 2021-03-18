-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2021 at 02:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `decrypit`
--

-- --------------------------------------------------------

--
-- Table structure for table `round1`
--

CREATE TABLE `round1` (
  `kid` varchar(30) NOT NULL,
  `answer1` text DEFAULT NULL,
  `answer2` text DEFAULT NULL,
  `answer3` text DEFAULT NULL,
  `answer4` text DEFAULT NULL,
  `answer5` text DEFAULT NULL,
  `answer6` text DEFAULT NULL,
  `answer7` text DEFAULT NULL,
  `answer8` text DEFAULT NULL,
  `answer9` text DEFAULT NULL,
  `totscore` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `round1`
--

INSERT INTO `round1` (`kid`, `answer1`, `answer2`, `answer3`, `answer4`, `answer5`, `answer6`, `answer7`, `answer8`, `answer9`, `totscore`) VALUES
('abcd', 'adsfa', 'wrtwrtwer\nasdfa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('abcde', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asdfasdfas\nasdfasdf\nasdf\nasd', NULL),
('k1234', NULL, '', NULL, NULL, '', 'asdfasdf', 'asdfasd', NULL, 'abcd', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `kid` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `start` timestamp NOT NULL DEFAULT current_timestamp(),
  `end` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`kid`, `name`, `email`, `phone`, `password`, `start`, `end`) VALUES
('abcd', 'TEST', 'test@gmail.com', '1234567890', '123456', '2021-03-16 20:39:50', '2021-03-16 22:25:32'),
('abcde', 'Preeti krishnaveni', 'bmspr1502@gmail.com', '9440167956', 'dfghj', '2021-03-16 21:01:50', '2021-03-16 22:25:32'),
('abcdef', 'Preeti krishnaveni', 'bmspr1502@gmail.com', '9440167956', '1234', '2021-03-16 21:41:28', '2021-03-16 22:25:32'),
('helo', 'Preeti krishnaveni', 'bmspr1502@gmail.com', '2414', '1231314', '2021-03-16 22:15:58', '2021-03-16 22:25:32'),
('hey', 'Preeti krishnaveni', 'bmspr1502@gmail.com', '2414', 'adf', '2021-03-16 22:19:34', '2021-03-16 22:25:32'),
('k1234', 'PRANAVA RAMAN B M S', 'bmspr1502@gmail.com', '09443501317', '1234', '2021-03-18 13:17:35', '2021-03-18 13:17:35'),
('yoyo', 'asdfafga', 'bmspr1502@gmail.com', '2414', 'asdlfkj', '2021-03-16 22:32:02', '2021-03-16 22:32:02'),
('yoyoi', 'asdfafga', 'bmspr1502@gmail.com', '2414', 'asdfag', '2021-03-16 22:33:03', '2021-03-16 22:33:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`kid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
