-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2017 at 09:02 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ufcnewdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `pref_phone` varchar(50) NOT NULL,
  `alt_phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `meet_purpose` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pref_date` varchar(20) NOT NULL,
  `pref_time` varchar(30) NOT NULL,
  `howdidyouhear` varchar(200) DEFAULT NULL,
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `fname`, `lname`, `pref_phone`, `alt_phone`, `email`, `meet_purpose`, `address`, `pref_date`, `pref_time`, `howdidyouhear`, `createdOn`) VALUES
(1, 'Anwar', 'Baig', '12345', '123456', 'anwar.warsi@ymail.com', 'hello', 'address', 'pre-date', 'Afternoon', 'asdasd', '2017-04-03 14:40:52'),
(2, 'Anwar', 'Baig', '12345', '12345', 'anwar.warsi@ymail.com', 'hello', 'asdasd', '13/13/1235', 'Afternoon', 'asdasd', '2017-04-03 14:43:09'),
(3, 'test', 'test', '3444243234', '32423423432', 'test@gmail.com', '213123123asdasd', 'asdasdsasdasd', '06/12/2017', 'Afternoon', 'sdfsdfsdf', '2017-04-03 15:09:10'),
(4, 'Anwar', 'Baig', '12345', '12345', 'ahsan.israr@live.com', 'testing', 'testing address', '2017-04-06', 'Afternoon', 'asdasd', '2017-04-03 16:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `services` varchar(255) DEFAULT NULL,
  `question_comments` varchar(255) DEFAULT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `first_name`, `last_name`, `phone`, `email`, `address`, `services`, `question_comments`, `createdon`) VALUES
(5, 'Anwar', 'Baig', '1212121', 'anwar.warsi@ymail.com', 'Address', 'Pre and Post Bankruptcy Counseling,Home-buyer Education Programs,Credit Review Counseling,Have Us Speak At Your Event', 'asdasdasd', '2017-03-31 18:22:15'),
(6, 'Anwar', 'Baig', '1212121', 'ahsan.israr@live.com', 'asdasdasd', NULL, '', '2017-03-31 18:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ip` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `full_name`, `email`, `ip`, `date`) VALUES
(1, 'Anwar', 'digweb@insurefloridians.com', '::1', '2017-07-12 19:13:44'),
(2, 'Anwar', 'digweb@insurefloridians.com', '::1', '2017-07-12 19:14:13'),
(3, 'Anwar', 'digweb@insurefloridians.com', '::1', '2017-07-12 19:15:50'),
(4, 'Anwar', 'digweb@insurefloridians.com', '::1', '2017-07-12 19:18:05'),
(5, 'Anwar', 'digweb@insurefloridians.com', '::1', '2017-07-12 19:18:29'),
(6, 'Anvaar', 'digweb@insurefloridians.com', '::1', '2017-07-12 20:52:17'),
(7, 'Anvaar', 'digweb@insurefloridians.com', '::1', '2017-07-12 20:53:57'),
(8, 'Anvaar', 'digweb@insurefloridians.com', '::1', '2017-07-12 20:53:57'),
(9, 'Anvaar', 'digweb@insurefloridians.com', '::1', '2017-07-12 20:53:57'),
(10, 'Anvaar', 'digweb@insurefloridians.com', '::1', '2017-07-12 20:53:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
