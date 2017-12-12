-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2017 at 06:25 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_system`
--
CREATE DATABASE IF NOT EXISTS `booking_system` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `booking_system`;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `bookingmonth` varchar(255) NOT NULL,
  `bookingday` int(11) NOT NULL,
  `bookingyear` int(11) NOT NULL,
  `reservedate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `userid`, `location`, `type`, `bookingmonth`, `bookingday`, `bookingyear`, `reservedate`) VALUES
(1, 1, 'Busay, Cebu', 'Wedding', 'December', 19, 2016, 'October 24, 2017');

-- --------------------------------------------------------

--
-- Table structure for table `deletedbookings`
--

CREATE TABLE `deletedbookings` (
  `id` int(11) NOT NULL,
  `bookingid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `bookingmonth` varchar(255) NOT NULL,
  `bookingday` int(11) NOT NULL,
  `bookingyear` int(11) NOT NULL,
  `reservedate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deletedbookings`
--

INSERT INTO `deletedbookings` (`id`, `bookingid`, `userid`, `location`, `type`, `bookingmonth`, `bookingday`, `bookingyear`, `reservedate`) VALUES
(23, 2, 1, 'Argao', 'Personal', 'November', 18, 2017, 'October 16, 2016'),
(24, 1, 1, 'Chateau De Busay', 'Wedding', 'October', 18, 2016, 'October 16, 2016'),
(25, 3, 1, 'SM City Event Center', 'Personal', 'December', 25, 2016, 'October 16, 2016'),
(26, 1, 1, 'Busay, Lahug', 'Wedding', 'July', 24, 2017, 'January 30, 2017'),
(27, 1, 2, 'Busay, Lahug', 'Wedding', 'December', 20, 2017, 'February 8, 2017');

-- --------------------------------------------------------

--
-- Table structure for table `deletedusers`
--

CREATE TABLE `deletedusers` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `birthmonth` varchar(255) NOT NULL,
  `birthday` int(11) NOT NULL,
  `birthyear` int(11) NOT NULL,
  `booking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deletedusers`
--

INSERT INTO `deletedusers` (`id`, `userid`, `firstname`, `lastname`, `username`, `password`, `email`, `address`, `gender`, `age`, `birthmonth`, `birthday`, `birthyear`, `booking`) VALUES
(11, 1, 'Allain Darrel Julius', 'Solis', 'darrel360', 'qwe', 'darrelsolis.360@gmail.com', 'Talisay City', 'Male', 19, 'July', 18, 1997, 2),
(12, 1, 'Scott', 'Dihayco', 'scottie', '123', 'scott@gmail.com', 'Lapu-lapu', 'Male', 21, 'October', 17, 1996, 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `message`, `name`) VALUES
(1, 'You\'re very good at what you do!', 'Darrel Solis'),
(2, 'I like you.', 'Jude Igot');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `birthmonth` varchar(255) NOT NULL,
  `birthday` int(11) NOT NULL,
  `birthyear` int(11) NOT NULL,
  `booking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `address`, `gender`, `age`, `birthmonth`, `birthday`, `birthyear`, `booking`) VALUES
(1, 'Allain Darrel', 'Solis', 'darrelsolis', '1234', 'darrelsolis.360@gmail.com', 'Camella Homes Lawaan Talisay City, Cebu', 'Male', 19, 'July', 18, 1997, 1),
(2, 'Jude', 'Igot', 'judigot', '123456', 'judigot@gmail.com', 'Babag 1, Lapu-Lapu City', 'Male', 18, 'December', 14, 1996, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deletedbookings`
--
ALTER TABLE `deletedbookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deletedusers`
--
ALTER TABLE `deletedusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `deletedbookings`
--
ALTER TABLE `deletedbookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `deletedusers`
--
ALTER TABLE `deletedusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
