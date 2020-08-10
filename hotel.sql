-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 12:12 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `Id` int(250) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `Body` mediumtext NOT NULL,
  `Photo` mediumblob NOT NULL,
  `Poster` varchar(250) NOT NULL,
  `Date` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`Id`, `Title`, `Body`, `Photo`, `Poster`, `Date`) VALUES
(4, 'How to get to us in person. The workers and the manager of Trust Resort', 'It is important that you as the customer of Trust Resort and the workers or even the manager are connected together. this will enhance faster booking of your hotel room each time you want to lodge. imagine an instance where you will need to arrive late at night. in such situation. it is very necessary that you have communicated with us and we have placed a booking for you awaiting for you to come and collect your booking slip and proceed to your room.\r\n\r\nIn view of the above, you are here by advised to get the contact of Trust resort; including email and or phone number for easy accessibility.\r\n\r\nThe Trust Resort Team is dedicated to serving you. Your comfortabilty  is our great gain.\r\nManager, Resort Team', 0x626c6f6770686f746f732f706963352e6a7067, 'moses', 'Mon-May-2018'),
(3, 'A warm welcome message to Trust Resort by The Manager', 'Hi, welcome to Trust Resort. \r\nWere you notified about Trust resort through email? Were you notified through phone message? or did you read it on the news papers. Well all these plenty questions do not necessarily matter anyway. It is my pleasure to welcome you officially to Trust Resort. I  do hope you will enjoy your stay i this beautiful pace. do not get bore. If you have any question or contribution towards our service in Trust resort, please feel very free to communicate us through our official email or better still though the use of the comment box below.\r\n\r\nOnce again, we welcome you to Trust Resort with Lots of joy in our heart.\r\n#Regards\r\nTrust Resort Team.', 0x626c6f6770686f746f732f626c6f672e6a7067, 'moses', 'Mon-May-2018');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Id` int(250) NOT NULL,
  `Surname` varchar(250) NOT NULL,
  `Othernames` varchar(250) NOT NULL,
  `Gender` varchar(250) NOT NULL,
  `Room` varchar(250) NOT NULL,
  `Days` varchar(250) NOT NULL,
  `Expiration` varchar(250) NOT NULL,
  `Price` varchar(250) NOT NULL,
  `Reg` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Id`, `Surname`, `Othernames`, `Gender`, `Room`, `Days`, `Expiration`, `Price`, `Reg`) VALUES
(33, 'lkjhgf', 'hgfd', 'Male', '4', 'lkjhg', 'lkjhgf', '3,000', '1191352705'),
(32, 'John', 'Ominyi', 'Male', '90', '6', '14/47/778', '3,000', '1271782137'),
(30, 'Smith', 'Smith', 'Female', '1', '3', '3', '3,000', '1257665743'),
(31, 'Smith', 'Smith', 'Female', '1', '3', '3', '3,000', '1163511310');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `Id` int(250) NOT NULL,
  `Username` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Firstname` varchar(250) NOT NULL,
  `Othernames` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`Id`, `Username`, `Password`, `Firstname`, `Othernames`) VALUES
(1, 'Moses', '6242', 'Angwa', 'Moses');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `Id` int(250) NOT NULL,
  `Number` varchar(250) NOT NULL,
  `Price` varchar(250) NOT NULL,
  `Description` mediumtext NOT NULL,
  `Status` varchar(250) NOT NULL DEFAULT 'Available',
  `Photo` mediumblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`Id`, `Number`, `Price`, `Description`, `Status`, `Photo`) VALUES
(21, '90', '3,000', 'nice', 'Taken', 0x726f6f6d70686f746f732f31632035782e6a7067),
(18, '3', '3,000', 'Good simple room with 3 bed', 'Available', 0x726f6f6d70686f746f732f486f75736520283239292e6a7067),
(19, '4', '3,000', 'Single room for men', 'Available', 0x726f6f6d70686f746f732f31632035782e6a7067),
(17, '1', '3,000', 'Nice simple room for honey moon', 'Available', 0x726f6f6d70686f746f732f486f757365202832292e6a7067),
(16, '2', '3,000', 'Nice Single room. cheap price', 'Taken', 0x726f6f6d70686f746f732f486f75736520283238292e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Reg`),
  ADD UNIQUE KEY `Reg` (`Reg`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`Number`),
  ADD UNIQUE KEY `Number` (`Number`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `Id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `Id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `Id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
