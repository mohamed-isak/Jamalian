-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 23, 2020 at 06:08 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id8353612_bright`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` int(11) NOT NULL,
  `ANAME` varchar(150) NOT NULL,
  `APASS` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `ANAME`, `APASS`) VALUES
(1, 'admin', '1234'),
(6, 'Isaks', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'Admin', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `BID` int(11) NOT NULL,
  `BTITLE` varchar(150) NOT NULL,
  `KEYWORDS` varchar(150) NOT NULL,
  `FILE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BID`, `BTITLE`, `KEYWORDS`, `FILE`) VALUES
(13, 'Programming in c', 'C,leap year,if else', 'upload/C Program to Check Leap Year.pdf'),
(14, 'Stories', 'Viveganadhar stories,story', 'upload/Vivekanandar_Stories.pdf'),
(15, 'Dravidar iyakka parvayil bharadhi', 'Bharadhi,dravidar,poet', 'upload/dravidar_iyaka_parvaiyil_bharathiyar.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `pid` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `discription` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `aid` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`pid`, `file`, `discription`, `date`, `aid`) VALUES
(44, 'upload/post/IMG-20191221-WA0010.jpg', 'Hi', '01-01-2020 12:54:03 PM', 'Admin'),
(46, 'upload/post/groups.jpg', 'Hey our clg peaceful ', '07-01-2020 11:34:19 PM', 'Isaks'),
(47, 'upload/post/18.jpg', 'Hey... function mood', '07-01-2020 11:35:15 PM', 'Isaks'),
(48, 'upload/post/animal.jpg', 'Sample demo for upload', '14-02-2020 11:52:03 PM', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `pid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `uname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`pid`, `sid`, `uname`, `bio`, `dob`, `location`, `img`) VALUES
(5, 29, 'Admin', 'Software developer android developer web developer', '1999-11-10', 'Madurai', 'upload/profile/animal.jpg'),
(6, 31, 'MD. Isak', 'Hiiiiii----- single --- jmc', '2019-12-17', 'Trichy', 'upload/profile/IMG-20191213-WA0005.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `RID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `MES` text NOT NULL,
  `LOGS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`RID`, `ID`, `MES`, `LOGS`) VALUES
(47, 17, 'Check the requrst time and date', '06-12-2019 11:38:26 PM'),
(48, 17, 'Check the allignment and time to display the time', '07-12-2019 12:01:05 AM'),
(49, 17, 'Ji', '07-12-2019 12:07:05 AM'),
(50, 17, 'Check the alignment of date', '07-12-2019 03:20:05 PM'),
(51, 29, 'Post new images', '07-12-2019 09:34:51 PM'),
(52, 29, 'Hhhh', '07-12-2019 09:57:34 PM'),
(53, 29, 'Hi', '08-12-2019 11:54:18 AM'),
(54, 29, 'Yuuyyghhg', '09-12-2019 11:11:28 PM'),
(55, 29, 'Hello world', '27-12-2019 08:59:55 PM'),
(56, 31, 'Hlo plz upload the previous year question papers', '04-01-2020 05:50:02 PM'),
(57, 29, 'The request is not work', '14-02-2020 11:57:38 PM');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `UNAME` varchar(255) NOT NULL,
  `PASS` varchar(150) NOT NULL,
  `MAIL` varchar(150) NOT NULL,
  `DEP` varchar(150) NOT NULL,
  `RNO` varchar(255) NOT NULL,
  `TIME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `NAME`, `UNAME`, `PASS`, `MAIL`, `DEP`, `RNO`, `TIME`) VALUES
(29, 'Naina mohamed J', 'Admin', '827ccb0eea8a706c4c34a16891f84e7b', 'nm@gmail.com', 'MCA', '17ua0643', '07-12-2019 08:57:07 PM'),
(30, 'Jalal', 'Jalal', '361e1e206e0004daf405aff8033f8f6e', 'mohamedjalalj8@gmail.com', 'III bsc', '17ucs027', '07-12-2019 09:32:30 PM'),
(31, 'Mohamed isak', 'MD. Isak', '827ccb0eea8a706c4c34a16891f84e7b', 'mitrichy@gmail.com', 'III bsc', '17ua0626', '08-12-2019 09:25:25 AM'),
(32, 'Mohamed Firnas', 'Mohamed Firnas', '5f0c654c7991085761c395f23780f95c', '1234gg@hotmail.com', 'III bsc', '16us6711', '08-12-2019 07:35:29 PM'),
(33, 'P. Md Dhanish', 'Dhanish077', '442cf6af72f4d96fc62747811f747b97', 'dhanish@gmail.com', 'III bsc', '17ua0622', '06-01-2020 12:08:39 AM'),
(34, 'Mohamed asar', 'Asar1785', '2a4aa8998c9218a7076d69ebd454ca55', 'asarmohamed173@gmail.com', 'III bsc', '17ua0619', '14-01-2020 10:49:15 AM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`BID`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `BID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
