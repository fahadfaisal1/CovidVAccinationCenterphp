-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 04:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `addhospital`
--

CREATE TABLE `addhospital` (
  `did` int(11) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `profile` varchar(150) NOT NULL,
  `hlocation` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addhospital`
--

INSERT INTO `addhospital` (`did`, `dname`, `profile`, `hlocation`) VALUES
(2, 'Aga Khan', 'admin_profileaga.jpg', 'karachi'),
(4, 'Akram Hospital', 'Akram Hospital.jpg', 'karachi'),
(5, 'Chughtai Medical Center', 'Chughtai Medical Center.jpg', 'karachi'),
(6, 'Iqra Medical Complex Hospital', 'Iqra Medical Complex Hospital.jpg', 'karachi'),
(7, 'Liaquat National Hospital:', 'Liaquat National Hospital.jpg', 'karachi'),
(8, 'DHA Medical Center', 'DHA Medical Center.jpg', 'karachi');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `profile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `pass`, `number`, `profile`) VALUES
(5, 'saad', 'saad@gmail.com', '1234', '0849489428', 'avatar-04.jpg'),
(6, 'Adnan', 'Adnan@gmail.com', '1234', '0313-294-592', 'd.jfif'),
(7, 'Fahad', 'Fahad@gmail.com', '1234', '0313-2940592', 'Picsart_22-03-23_02-40-12-770.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pemail` varchar(50) NOT NULL,
  `pphone` varchar(50) NOT NULL,
  `pdate` varchar(50) NOT NULL,
  `uvaccination` varchar(50) NOT NULL,
  `pcity` varchar(50) NOT NULL,
  `pstatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `appointmentdate`
--

CREATE TABLE `appointmentdate` (
  `id` int(11) NOT NULL,
  `avail_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointmentdate`
--

INSERT INTO `appointmentdate` (`id`, `avail_date`) VALUES
(1, '4'),
(2, '6'),
(3, '8'),
(4, '12'),
(5, '14'),
(6, '16'),
(7, '9');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`) VALUES
(14, 'Fiber'),
(15, 'Codagenix vaccine'),
(16, 'Toxoid vaccines'),
(17, 'Protein Subunit'),
(18, 'BioNTech');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `hid` int(11) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `hemail` varchar(50) NOT NULL,
  `hpass` varchar(50) NOT NULL,
  `hlocation` varchar(50) NOT NULL,
  `hstatus` varchar(50) NOT NULL,
  `hprofile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`hid`, `hname`, `hemail`, `hpass`, `hlocation`, `hstatus`, `hprofile`) VALUES
(1, 'Aga khan ', 'agakhan@gmail.com', '1234', 'karachi', 'approved', ''),
(2, 'Akram Hospital', 'Akramhospital@gmail.com', '1234', 'karachi', 'approved', ''),
(3, 'atiahospital', 'atiahospital@gmail.com', '1234', 'karachi', 'approved', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `upassword` varchar(50) NOT NULL,
  `uphone` varchar(50) NOT NULL,
  `ucnic` varchar(50) NOT NULL,
  `ucity` varchar(50) NOT NULL,
  `uaddress` varchar(50) NOT NULL,
  `ustatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `uemail`, `upassword`, `uphone`, `ucnic`, `ucity`, `uaddress`, `ustatus`) VALUES
(1, 'Adnan', 'Adnan@gmail.com', '1234', '0313-2940592', '42301-60931553', 'karachi', 'north nazimabad', 'approved'),
(2, 'Fahad', 'fahad@gmail.com', '1234', '0313-2940582', '42301-80248116', 'lahore', 'Dha', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addhospital`
--
ALTER TABLE `addhospital`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `appointmentdate`
--
ALTER TABLE `appointmentdate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addhospital`
--
ALTER TABLE `addhospital`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointmentdate`
--
ALTER TABLE `appointmentdate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
