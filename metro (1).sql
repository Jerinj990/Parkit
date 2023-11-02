-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 08:32 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metro`
--

-- --------------------------------------------------------

--
-- Table structure for table `banktable`
--

CREATE TABLE `banktable` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `cardnumber` varchar(15) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `exp_month` varchar(2) NOT NULL,
  `exp_year` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banktable`
--

INSERT INTO `banktable` (`id`, `name`, `cardnumber`, `cvv`, `exp_month`, `exp_year`) VALUES
(1, 'ABC', '123456789012', '321', '03', '2026'),
(2, 'XYZ', '234567890123', '432', '08', '2027'),
(3, 'PQR', '456789012345', '543', '03', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `bookingtable`
--

CREATE TABLE `bookingtable` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `user` int(10) NOT NULL,
  `vehicletype` varchar(20) NOT NULL,
  `vehicleno` varchar(10) NOT NULL,
  `bookfromdate` varchar(10) NOT NULL,
  `bookfromtime` varchar(10) NOT NULL,
  `booktodate` varchar(10) NOT NULL,
  `booktotime` varchar(10) NOT NULL,
  `service` varchar(15) NOT NULL,
  `parkingplace` varchar(20) NOT NULL,
  `amount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookingtable`
--

INSERT INTO `bookingtable` (`id`, `name`, `user`, `vehicletype`, `vehicleno`, `bookfromdate`, `bookfromtime`, `booktodate`, `booktotime`, `service`, `parkingplace`, `amount`) VALUES
(11, 'jerin joy', 16, '2 wheeler', 'kl 40 s gj', '2021-11-27', '12:27', '2021-11-28', '12:27', '-1', '10', '260');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktable`
--

CREATE TABLE `feedbacktable` (
  `id` int(11) NOT NULL,
  `user` int(20) NOT NULL,
  `message` varchar(50) NOT NULL,
  `reply` varchar(150) NOT NULL,
  `feedback_date` varchar(15) NOT NULL,
  `reply_date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacktable`
--

INSERT INTO `feedbacktable` (`id`, `user`, `message`, `reply`, `feedback_date`, `reply_date`) VALUES
(9, 16, 'nfjwhdhvkjksdhchdwoofnksbvb sgvihfohwkxsd', 'poda patti', '2021-11-27', '2021-11-27'),
(10, 16, 'fdhdbg', '--', '2021-11-27', '--');

-- --------------------------------------------------------

--
-- Table structure for table `parkingareatable`
--

CREATE TABLE `parkingareatable` (
  `parkingplaceno` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `email` varchar(15) NOT NULL,
  `address` varchar(35) NOT NULL,
  `rate` varchar(10) NOT NULL,
  `additionalrate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parkingareatable`
--

INSERT INTO `parkingareatable` (`parkingplaceno`, `title`, `location`, `phoneno`, `email`, `address`, `rate`, `additionalrate`) VALUES
(10, 'kakkanad', 'near municipal groun', '9999999999', 'parkitkakkanad@', 'Municipal ground\r\nkakkana', '150', '5'),
(11, 'kaloor', 'opp metro', '8888888888', 'prkitklr@gmail.', '\r\nkaloor\r\nopp metro pillar 456\r\n', '200', '10'),
(12, 'mg road', 'opp center square', '7777777777', 'prkitcenter@gma', 'mg road po\r\nopp center square \r\nmet', '250', '13'),
(13, 'kadavantra', 'kadavantra jn', '5555555555', 'prktkdvnt@gmail', 'kadavantra jn\r\nmetro pillar 333\r\n', '300', '20');

-- --------------------------------------------------------

--
-- Table structure for table `servicetable`
--

CREATE TABLE `servicetable` (
  `id` int(11) NOT NULL,
  `servicename` varchar(30) NOT NULL,
  `rate` varchar(5) NOT NULL,
  `vehicletype` varchar(25) NOT NULL,
  `details` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicetable`
--

INSERT INTO `servicetable` (`id`, `servicename`, `rate`, `vehicletype`, `details`) VALUES
(9, 'washing', '100', 'only for cars', '\r\nprovides washing for cars'),
(10, 'washing', '50', 'For 2 wheelers', '\r\nprovides washing for 2 wheelers'),
(11, 'Detailing', 'min c', 'for all vehicles', 'Provides paint detailing\r\n[charges may vary accord');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `name` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `addha` varchar(20) NOT NULL,
  `address` varchar(25) NOT NULL,
  `id` int(11) NOT NULL,
  `role` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`name`, `mobile`, `email`, `password`, `addha`, `address`, `id`, `role`) VALUES
('ADMIN', '909', 'admin@gmail.com', 'admin', '567', 'aaaa', 12, 'ADMIN'),
('jerin joy', '7025736904', 'jerinj990@gamil.com', 'A12sdfgq', '234567890', 'aaa', 16, 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banktable`
--
ALTER TABLE `banktable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookingtable`
--
ALTER TABLE `bookingtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parkingareatable`
--
ALTER TABLE `parkingareatable`
  ADD PRIMARY KEY (`parkingplaceno`);

--
-- Indexes for table `servicetable`
--
ALTER TABLE `servicetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banktable`
--
ALTER TABLE `banktable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bookingtable`
--
ALTER TABLE `bookingtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `parkingareatable`
--
ALTER TABLE `parkingareatable`
  MODIFY `parkingplaceno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `servicetable`
--
ALTER TABLE `servicetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
