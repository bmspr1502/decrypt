-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 12:42 PM
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
  `totscore` int(11) NOT NULL DEFAULT 0,
  `selected` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `round1`
--

INSERT INTO `round1` (`kid`, `answer1`, `answer2`, `answer3`, `answer4`, `answer5`, `answer6`, `answer7`, `answer8`, `answer9`, `totscore`, `selected`) VALUES
('abcd', 'adsfa', 'wrtwrtwer\nasdfa', NULL, 'jgfyrsrw', 'asdfasfdfsafgfdhdfghdfjd', 'khb', 'gfsd', NULL, 'asdfasdfxvxzbv', 0, 0),
('abcde', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asdfasdfas\nasdfasdf\nasdf\nasd', 0, 0),
('abcdef', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
('helllooo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
('preetikrish', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15, 1),
('arthi', NULL, NULL, 'sfgsdfgsdfgsfdgsdfgsdfgsdfgsdfgsdfg', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
('12341', 'asdfadsfasdfadsf', 'asdfasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 42, 1),
('', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `kid` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `start` timestamp NOT NULL DEFAULT current_timestamp(),
  `endtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `round1` tinyint(1) NOT NULL DEFAULT 0,
  `round2` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`kid`, `name`, `email`, `phone`, `start`, `endtime`, `round1`, `round2`) VALUES
('12341', 'qwer', 'bmspr1502@gmail.com', 'wer', '2021-03-18 19:32:03', '2021-03-18 19:35:00', 1, 0),
('abcd', 'TEST', 'test@gmail.com', '1234567890', '2021-03-16 20:39:50', '2021-03-16 22:25:32', 1, 0),
('abcde', 'Preeti krishnaveni', 'bmspr1502@gmail.com', '9440167956', '2021-03-16 21:01:50', '2021-03-16 22:25:32', 1, 0),
('abcdef', 'Preeti krishnaveni', 'bmspr1502@gmail.com', '9440167956', '2021-03-16 21:41:28', '2021-03-18 18:16:00', 1, 0),
('arthi', 'aklsdg;jg', 'bmspr1502@gmail.com', 'as;ldkg', '2021-03-18 15:00:51', '2021-03-18 20:05:49', 1, 0),
('arthiss', 'aklsdg;jg', 'bmspr1502@gmail.com', 'as;ldkg', '2021-03-18 15:07:48', '2021-03-18 15:07:48', 0, 0),
('helllooo', 'asdfafga', 'bmspr1502@gmail.com', 'jjasdgfag', '2021-03-18 14:57:18', '2021-03-18 14:57:18', 0, 0),
('helo', 'Preeti krishnaveni', 'bmspr1502@gmail.com', '2414', '2021-03-16 22:15:58', '2021-03-16 22:25:32', 1, 0),
('hey', 'Preeti krishnaveni', 'bmspr1502@gmail.com', '2414', '2021-03-16 22:19:34', '2021-03-16 22:25:32', 1, 0),
('preetikrish', 'asdfafga', 'bmspr1502@gmail.com', 'jjasdgfag', '2021-03-18 14:58:05', '2021-03-18 14:58:05', 0, 0),
('raj', 'aklsdg;jg', 'bmspr1502@gmail.com', 'as;ldkg', '2021-03-18 15:28:08', '2021-03-18 15:33:07', 1, 0),
('rax', 'asdfafga', 'lfgjjk@asdf.com', 'asdf', '2021-03-18 18:16:16', '2021-03-18 18:16:18', 0, 0),
('yoyo', 'asdfafga', 'bmspr1502@gmail.com', '2414', '2021-03-16 22:32:02', '2021-03-16 22:32:02', 0, 0),
('yoyoi', 'asdfafga', 'bmspr1502@gmail.com', '2414', '2021-03-16 22:33:03', '2021-03-16 22:33:03', 0, 0);

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
