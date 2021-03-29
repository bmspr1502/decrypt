-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 18, 2021 at 08:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `selected` tinyint(1) NOT NULL DEFAULT 0,
  `round2` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`kid`, `name`, `email`, `phone`, `start`, `endtime`, `round1`, `selected`, `round2`) VALUES
('abcd', 'TEST', 'test@gmail.com', '1234567890', '2021-03-16 20:39:50', '2021-03-16 22:25:32', 0, 0, 0),
('abcde', 'Preeti krishnaveni', 'bmspr1502@gmail.com', '9440167956', '2021-03-16 21:01:50', '2021-03-16 22:25:32', 0, 0, 0),
('abcdef', 'Preeti krishnaveni', 'bmspr1502@gmail.com', '9440167956', '2021-03-16 21:41:28', '2021-03-18 18:16:00', 0, 0, 0),
('arthi', 'aklsdg;jg', 'bmspr1502@gmail.com', 'as;ldkg', '2021-03-18 15:00:51', '2021-03-18 15:00:51', 0, 0, 0),
('arthiss', 'aklsdg;jg', 'bmspr1502@gmail.com', 'as;ldkg', '2021-03-18 15:07:48', '2021-03-18 15:07:48', 0, 0, 0),
('helllooo', 'asdfafga', 'bmspr1502@gmail.com', 'jjasdgfag', '2021-03-18 14:57:18', '2021-03-18 14:57:18', 0, 0, 0),
('helo', 'Preeti krishnaveni', 'bmspr1502@gmail.com', '2414', '2021-03-16 22:15:58', '2021-03-16 22:25:32', 0, 0, 0),
('hey', 'Preeti krishnaveni', 'bmspr1502@gmail.com', '2414', '2021-03-16 22:19:34', '2021-03-16 22:25:32', 0, 0, 0),
('preetikrish', 'asdfafga', 'bmspr1502@gmail.com', 'jjasdgfag', '2021-03-18 14:58:05', '2021-03-18 14:58:05', 0, 0, 0),
('raj', 'aklsdg;jg', 'bmspr1502@gmail.com', 'as;ldkg', '2021-03-18 15:28:08', '2021-03-18 15:33:07', 0, 0, 0),
('rax', 'asdfafga', 'lfgjjk@asdf.com', 'asdf', '2021-03-18 18:16:16', '2021-03-18 18:16:18', 0, 0, 0),
('yoyo', 'asdfafga', 'bmspr1502@gmail.com', '2414', '2021-03-16 22:32:02', '2021-03-16 22:32:02', 0, 0, 0),
('yoyoi', 'asdfafga', 'bmspr1502@gmail.com', '2414', '2021-03-16 22:33:03', '2021-03-16 22:33:03', 0, 0, 0);

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
