-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 08:09 PM
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
('abcdef', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, 1),
('helllooo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
('preetikrish', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15, 1),
('arthi', NULL, NULL, 'sfgsdfgsdfgsfdgsdfgsdfgsdfgsdfgsdfg', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
('12341', 'asdfadsfasdfadsf', 'asdfasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 42, 1),
('', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
('91234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
('arthiss', 'Hello \n\'<strin>\n\';\ninsert into round1 (kid, answer1) values(\'asdf\', \'as\');', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
('k12345', 'fdads', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20, 1),
('kidcheck', 'qwerty', NULL, NULL, NULL, 'sdfas\n#include<\'stdio.h\'>', NULL, NULL, NULL, 'ok done\nblah', 0, 0),
('k!example', 'this is a test answer\n\"hello\"', NULL, NULL, NULL, NULL, 'another answer', 'check', NULL, NULL, 55, 1),
('5312', 'has', NULL, NULL, NULL, NULL, NULL, 'check', NULL, NULL, 0, 0),
('k32151', 'Hello\n\"check\"', NULL, NULL, NULL, NULL, 'check', 'asdf', NULL, NULL, 20, 1),
('test', '\'; select * from round1;', NULL, NULL, NULL, '\" ; select * from round1;', NULL, NULL, NULL, NULL, 0, 0),
('yoyoi', 'sdafasdfads', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
('912346', '\"sdf; select * lect ;', NULL, NULL, NULL, NULL, 'asdfadf\n#include<sdio.h>\n', 'asdfasdf', NULL, NULL, 123, 1),
('912347', 'r\nasdfasd', NULL, NULL, NULL, NULL, '#include<stdio.h>', NULL, NULL, NULL, 0, 0),
('example', 'casd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
('onemore', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
('twomore', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
('twomores', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
('text', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
('check', 'asdfadsf', NULL, NULL, NULL, 'asdfasdfasdfasdf', NULL, NULL, NULL, NULL, 0, 0);

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
('5312', 'check', 'check@email.com', '9123412312', '2021-03-21 13:42:16', '2021-03-21 13:43:31', 1, 0),
('91234', 'PRANAVA RAMAN B M S', 'bmspr1502@gmail.com', '09443501317', '2021-03-19 14:02:52', '2021-03-19 14:43:47', 1, 0),
('912346', 'PRANAVA RAMAN B M S', 'bmspr1502@gmail.com', '09443501317', '2021-03-25 16:04:24', '2021-03-25 16:17:12', 1, 0),
('912347', 'PRANAVA RAMAN B M S', 'bmspr1502@gmail.com', '09443501317', '2021-03-25 16:17:37', '2021-03-25 16:17:37', 0, 0),
('abcd', 'TEST', 'test@gmail.com', '1234567890', '2021-03-16 20:39:50', '2021-03-16 22:25:32', 1, 0),
('abcde', 'Preeti krishnaveni', 'bmspr1502@gmail.com', '9440167956', '2021-03-16 21:01:50', '2021-03-16 22:25:32', 1, 0),
('abcdef', 'Preeti krishnaveni', 'bmspr1502@gmail.com', '9440167956', '2021-03-16 21:41:28', '2021-03-18 18:16:00', 1, 0),
('arthi', 'aklsdg;jg', 'bmspr1502@gmail.com', 'as;ldkg', '2021-03-18 15:00:51', '2021-03-25 12:39:45', 1, 0),
('arthiss', 'aklsdg;jg', 'bmspr1502@gmail.com', 'as;ldkg', '2021-03-18 15:07:48', '2021-03-25 12:34:40', 1, 0),
('check', 'Check', 'check@gmail.com', '9123456789', '2021-03-29 17:12:12', '2021-03-29 17:12:12', 0, 0),
('example', 'PRANAVA RAMAN B M S', 'bmspr1502@gmail.com', '9443501317', '2021-03-28 08:45:25', '2021-03-28 08:45:25', 0, 0),
('helllooo', 'asdfafga', 'bmspr1502@gmail.com', 'jjasdgfag', '2021-03-18 14:57:18', '2021-03-18 14:57:18', 0, 0),
('helo', 'Preeti krishnaveni', 'bmspr1502@gmail.com', '2414', '2021-03-16 22:15:58', '2021-03-16 22:25:32', 1, 0),
('hey', 'Preeti krishnaveni', 'bmspr1502@gmail.com', '2414', '2021-03-16 22:19:34', '2021-03-16 22:25:32', 1, 0),
('k!example', 'Test', 'test@k.com', '12345', '2021-03-21 13:37:50', '2021-03-21 13:39:39', 1, 0),
('k12345', 'PRANAVA RAMAN B M S', 'bmspr1502@gmail.com', '09443501317', '2021-03-20 04:40:16', '2021-03-29 17:11:23', 1, 0),
('k32151', 'Checking', 'check@email.com', '9123412341', '2021-03-23 12:32:00', '2021-03-23 12:33:16', 1, 0),
('kidcheck', 'Check', 'check@gmail.com', '9123456789', '2021-03-21 13:01:48', '2021-03-21 13:02:46', 1, 0),
('onemore', 'PRANAVA RAMAN B M S', 'bmspr1502@gmail.com', '9443501317', '2021-03-28 10:34:56', '2021-03-28 10:34:56', 0, 0),
('preetikrish', 'asdfafga', 'bmspr1502@gmail.com', 'jjasdgfag', '2021-03-18 14:58:05', '2021-03-18 14:58:05', 0, 0),
('raj', 'aklsdg;jg', 'bmspr1502@gmail.com', 'as;ldkg', '2021-03-18 15:28:08', '2021-03-18 15:33:07', 1, 0),
('rax', 'asdfafga', 'lfgjjk@asdf.com', 'asdf', '2021-03-18 18:16:16', '2021-03-18 18:16:18', 0, 0),
('test', 'Check', 'check@gmail.com', '9123456789', '2021-03-24 11:48:34', '2021-03-24 13:22:40', 1, 0),
('text', 'Check', 'check@gmail.com', '9123456789', '2021-03-28 10:48:49', '2021-03-28 10:48:50', 1, 0),
('twomore', 'Check', 'check@gmail.com', '9123456789', '2021-03-28 10:42:04', '2021-03-28 10:46:55', 1, 0),
('twomores', 'Check', 'check@gmail.com', '9123456789', '2021-03-28 10:47:11', '2021-03-28 10:47:43', 1, 0),
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
