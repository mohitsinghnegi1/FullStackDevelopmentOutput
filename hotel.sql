-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2018 at 04:56 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `sno` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`sno`, `name`, `email`, `phoneno`, `subject`, `message`) VALUES
(1, 'mohit', 'mohitsin3232@gmail.c', 2147483647, 'party', 'hello you are invited'),
(3, 'mohit', 'manwendranegi864@gma', 999999999, '3434', '343'),
(21, 'mohit', 'mohitsin3233432@gmai', 1000000003, '56565', '656'),
(22, 'singh negi', 'mosin@gmail.com', 1000000003, '343', '544554'),
(23, 'mohit singh', 'mohitsin32334932@gmail.com', 1000000007, 'ffddgfdg', 'dgdgf'),
(25, 'singh', 'mohitsinghnd3232@gmail.com', 1000000009, 'bk,djhkjl', 'dkjkjk'),
(26, 'mohitsingh', 'mohitsinghms151017@gmail.com', 1000000004, 'nice hotel', 'skdslsd'),
(27, '', '', 0, '', ''),
(28, 'mohit', 'mohitsin3232@gmail.com', 999999999, '3323', '23'),
(29, 'mohit singh', 'mihit@gmail.com', 999999999, 'nfkkdf', 'df'),
(30, 'sarvesh', 'sarveshg821@gmail.com', 2147483647, 'hello', 'mohit singh negi');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `sno` int(10) NOT NULL,
  `hotel` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `rooms` int(10) NOT NULL DEFAULT '1',
  `rate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`sno`, `hotel`, `rooms`, `rate`) VALUES
(1, 'A', 5, 1000),
(2, 'B', 10, 7500),
(3, 'C', 12, 8000),
(4, 'D', 2, 2500);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `sno` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `rooms` int(10) NOT NULL,
  `adults` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`sno`, `name`, `email`, `checkin`, `checkout`, `rooms`, `adults`) VALUES
(1, 'mohit', 'mohitsin32', '2018-05-19', '2018-07-13', 10, 2),
(6, 'mohit', 'manwendran', '2018-04-12', '2018-04-04', 1, 1),
(35, 'cvc', 'manwendranegi864@gma', '2018-04-12', '2018-04-04', 1, 1),
(36, 'singh', 'mohitsin3232@gmail.c', '2018-04-12', '2018-04-04', 1, 1),
(39, '32', 'mohitsinghms151017@g', '2018-04-12', '2018-04-04', 1, 1),
(41, 'mohit', 'mosin@gmail.com', '2018-04-12', '2018-04-09', 1, 1),
(42, 'mohit sing', 'mohitsin@gmail.com', '2018-04-09', '2018-04-13', 2, 1),
(43, 'mohit sing', 'mannegi864@gmail.com', '2018-04-11', '2018-04-11', 1, 1),
(44, '', '', '0000-00-00', '0000-00-00', 1, 1),
(50, 'mohit', 'mohitff@gmail.com', '0000-00-00', '0000-00-00', 1, 1),
(51, 'mohiti', 'mohiti_professor@gma', '2018-05-10', '2018-05-10', 1, 1),
(53, 'mohit', 'mohi4tsin3232@gmail.', '0000-00-00', '0000-00-00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `password`) VALUES
('mohit3', 'dk22333233s@3gewmail.com', '23'),
('mohit3', 'dk223333s@3gewmail.com', '32'),
('mohit3', 'dk22@3gewmail.com', '32'),
('mohit3', 'dk2333s@3gewmail.com', '33'),
('mohit', 'dk2333s@gewmail.com', '323'),
('mohit', 'dk233s@gewmail.com', '32'),
('mohit', 'dks@gewmail.com', 'ew'),
('mohit', 'dks@gmail.com', '2443'),
('m@g.com', 'm@gg.com', '32'),
('xc', 'm@gmail.com', '23'),
('mfd@gmail.com', 'mfd@gmail.com', 'mfd@gmail.co'),
('ds', 'mohi@gm.com', 'd'),
('mohitbabu', 'mohitbabu123@gmail.com', '123'),
('mohit', 'mohitsin3232@gmail.com', '4073327abc'),
('mohit', 'mohitsinghjne@gmail.com', '342433'),
('mohit', 'mohitsinghnedgi3232@gmail.com', 'dffd'),
('mohit', 'mohitsinghnegi3232@gmail.com', 'mohiti'),
('pr32a32c3hi', 'pr2ac323232hi123@gmail.com', '3232'),
('pr32ac3hi', 'pr2ac3232hi123@gmail.com', '3234'),
('pr2ac3hi', 'pr2ac32hi123@gmail.com', 'e32'),
('prac3hi', 'prac32hi123@gmail.com', '2333'),
('prachi', 'prachi123@gmail.com', 'prachi'),
('riya2', 'riya112@gmail.com', '123'),
('riya', 'riya123@gmail.com', 'riya'),
('riya', 'riya223@gmail.com', 'riya'),
('riya', 'riya43223@gmail.com', '334'),
('mohit', 's@cx.com', '123'),
('ds', 's@gmail.com', 'ds'),
('sarbesh', 'sarbesh123@gmail.com', 'sarbesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `3` (`email`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `1` (`email`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD UNIQUE KEY `6` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
