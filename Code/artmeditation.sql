-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2018 at 03:15 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artmeditation`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`user_id`, `time`) VALUES
(7, '1532091485'),
(7, '1532091525'),
(7, '1532091542'),
(1, '1532091586'),
(1, '1532091751'),
(1, '1532091837'),
(1, '1532092159'),
(1, '1532092252'),
(1, '1532092288'),
(1, '1532092313'),
(1, '1532092493'),
(1, '1535437280'),
(1, '1535437296'),
(1, '1535437430'),
(14, '1535437477');

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `name` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`name`, `email`, `comment`) VALUES
('mansi', 'mansidesai3', 'hii\r\n'),
('mansi', 'mansidesai3', 'hiiiiiiiiiiiii'),
('mansi', 'mansidesai3006@gmail.com', 'jjjk\r\n'),
('mansi', 'mansidesai3006@gmail.com', 'huytu'),
('mansi', 'mansidesai3006@gmail.com', 'hiiiiiiiiiiiiiiii'),
('mansi', 'mansidesai3006@gmail.com', 'ghjgh'),
('mansi', 'mansidesai0630@gmail.com', 'tyhdyg'),
('mansi', 'mansidesai3006@gmail.com', 'hiiii'),
('mansi', 'mansidesai3006@gmail.com', 'hiiii'),
('mansi', 'mansidesai3006@gmail.com', 'hiiii'),
('mansi', 'mansidesai3006@gmail.com', 'hiiiiiiiiiiiiiiii\r\n'),
('mansi', 'mansidesai3006@gmail.com', 'hiiiiiiiiiiiii'),
('mansi', 'mansidesai0630@gmail.com', 'dfdfda');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(30) NOT NULL,
  `f_name` varchar(30) DEFAULT NULL,
  `l_name` varchar(30) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `f_name`, `l_name`, `username`, `email`, `password`) VALUES
(1, 'mansi', 'desai', 'manu', 'mansi@gmail.com', '$2y$10$NXZzi5/mu5FFpAJSZxQ6wugGOziP3FjFYJpE3/yDi6CJrEoxBnvH.'),
(2, 'mansi', 'desai', 'mansi', 'mansidesai@gmail.com', '$2y$10$/m0uJApLZoh7jfzFvPSdz.ahy/C2uwIh2sUziTtdhOJM/hrJtTZvy'),
(4, 'sonu', 'desai', 'sonali', 'so@gmail.com', '$2y$10$/CSsJX0nwUpCO8ZFfg4sMO2h1cSWvAzQqKKbbZtm27wg8ceDlQ2NC'),
(5, 'abc', 'def', 'abcd', 'abc@gmail.com', '$2y$10$aOo/nyXQ5AwaHMd1hbnLFuNoiJl0ufsqaw.z2jOF7OywpTmSdmDfO'),
(6, 'Vedant', 'sawant', 'vedu', 'vedu@gmail.com', '$2y$10$AuLIa9xOWJyG5rVKRkTkXeTQ1w5UvKEWxIoScCtaDOinHcqukEKSC'),
(7, 'abc', 'def', 'zxc', 'zx@gmail.com', '$2y$10$zOeUb/wcxxaLZRJ61hhScevSXyj6epfDZawtDQ7xCvF6jkWc/5/y2'),
(8, 'zxc', 'zxc', 'zxcv', 'zx@gmail.com', '$2y$10$0ukXwJHnhTVqjkGF8LumieAsvez7KWAoLTvTiSlAM/be0/4Bkk556'),
(9, 'mansi', 'desai', 'manu', 'mansi@gmail.com', '$2y$10$Gj5SS0ekExU//v8FDGMQtOC7R6wmqlPb3BEwlw.aU7TUPmq4h037i'),
(10, 'Ankita', 'Salekar', 'anku', 'ankita12@gmail.com', '$2y$10$i4iLSEB1YCcZo4LDvaQgtu19ypuB2R9wliLnD1.dtC7D82MB9ih4y'),
(11, 'priyanka', 'jadhav', 'priya', 'priya456@gmail.com', '$2y$10$1OL82yClOw0zX.uiD5K1H.FcpqU8KYSJ/HtzSmZX1lX0pKnevXVVi'),
(12, 'mansi', 'desai', 'manu', 'm@gmail.com', '$2y$10$e1df9cxNLNBzpAHWvLOwve.FYfYGPayiGkQHGpv9Rc6gfoRYl1hNm'),
(13, 'Mansi', 'Desai', 'Manu', 'Mansi@gmail.com', '$2y$10$ocf7mRO3lJB1DJwfhXly7uNCL.wXVM2yp9bu5Gq75KQYV9Mr6Kig6'),
(14, 'ranjit', 'jadhav', 'ranju', 'r@yahoo.com', '$2y$10$GAgbowb/PTmhoJF06utIK.1FA9VUE2NGHVoPAMai9Be11mi89GjxW'),
(15, 'akshata', 'jadhav', 'akshu', 'akshu.jadhav97@gmail.com', '$2y$10$2aVvgfgTgzZP63hnKL8Je.fiUX83XNbZzXC3oxzh09GEPOOuY0PpK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
