-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 05:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coaching_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `batchmanage`
--

CREATE TABLE `batchmanage` (
  `bid` int(10) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `startingdate` date NOT NULL,
  `coursefee` float(10,2) NOT NULL,
  `timeduration` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batchmanage`
--

INSERT INTO `batchmanage` (`bid`, `coursename`, `startingdate`, `coursefee`, `timeduration`) VALUES
(1, 'PWAD-54', '2022-11-12', 10001.00, '8AM-12AM'),
(3, 'JEE R-101', '2022-11-01', 25000.00, '1pm - 3 pm'),
(4, 'PWAD-53', '2022-11-01', 20000.00, '9AM-1AM'),
(6, 'Auto Cad ', '2022-11-20', 20000.00, '1PM-4PM'),
(20, 'PWAD-55', '2023-01-07', 40000.00, '9AM-1AM'),
(21, 'Auto-cad', '2022-12-18', 25000.00, '1pm - 3 pm'),
(22, 'PWAD-1234567', '2022-12-20', 5000.00, '8AM-12AM'),
(23, 'Auto-cad', '2022-12-31', 15000.00, '8AM-1PM');

-- --------------------------------------------------------

--
-- Table structure for table `collectionfee`
--

CREATE TABLE `collectionfee` (
  `collid` int(15) NOT NULL,
  `sid` int(10) NOT NULL,
  `colldate` date NOT NULL,
  `collamount` float(10,2) NOT NULL,
  `collnote` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collectionfee`
--

INSERT INTO `collectionfee` (`collid`, `sid`, `colldate`, `collamount`, `collnote`) VALUES
(6, 19, '2022-11-20', 8000.00, 'cash'),
(7, 20, '2022-11-20', 14000.00, 'cash'),
(11, 22, '2022-12-02', 15000.00, 'cash'),
(12, 16, '2022-12-02', 10000.00, 'cash'),
(13, 22, '2022-12-02', 1500.00, 'cash'),
(14, 16, '2022-12-02', 2000.00, 'cash'),
(16, 20, '2022-12-04', 1000.00, 'Cash'),
(17, 23, '2022-12-09', 5455.00, 'Cash'),
(18, 40, '2022-12-25', 6100.00, 'Visa'),
(19, 41, '2022-12-31', 5000.00, 'Visa'),
(20, 41, '2022-12-19', 6000.00, 'Cash'),
(21, 41, '2022-12-20', 500.00, 'yes take');

-- --------------------------------------------------------

--
-- Stand-in structure for view `collectionview`
-- (See below for the actual view)
--
CREATE TABLE `collectionview` (
`collid` int(15)
,`studentname` varchar(50)
,`colldate` date
,`collamount` float(10,2)
,`collnote` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Id_number` int(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `emailadd` varchar(50) NOT NULL,
  `phoneno` int(15) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Id_number`, `firstname`, `lastname`, `emailadd`, `phoneno`, `address`) VALUES
(1, 'Ruhul ', 'Amin ', 'ruhul.gub@gmail.com', 1916095334, 'mirpur, Dhaka '),
(12, '', '', '', 0, ''),
(13, '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(10) NOT NULL,
  `bid` int(40) NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `stdcontact` varchar(25) NOT NULL,
  `stdmail` varchar(60) NOT NULL,
  `stdimage` varchar(60) NOT NULL,
  `stdaddress` varchar(200) NOT NULL,
  `totalfee` float(10,2) NOT NULL,
  `collectedfee` float(10,2) NOT NULL,
  `dueamount` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `bid`, `studentname`, `stdcontact`, `stdmail`, `stdimage`, `stdaddress`, `totalfee`, `collectedfee`, `dueamount`) VALUES
(37, 3, 'Farhana', '019156546664', 'bellal@gmail.com', 'upload/1671257170.png', 'jihjib', 25000.00, 0.00, 25000.00),
(38, 22, 'bellal', '0191565466', 'ruhul.gub@gmail.com', 'upload/1671335439.png', 'w4e5rtyui', 5000.00, 0.00, 5000.00),
(40, 4, 'hazrat bellal', '01716565565', 'bellal@gmail.com', 'upload/1671429027.jpg', 'mirpur 2', 20000.00, 6100.00, 13900.00),
(41, 3, 'soyeb saheb', '0171654655', 'soyeb@gmail.com', 'upload/1671429737.jpg', 'Badda', 25000.00, 11500.00, 13500.00);

-- --------------------------------------------------------

--
-- Table structure for table `userpanel`
--

CREATE TABLE `userpanel` (
  `adminname` varchar(50) NOT NULL,
  `adminpassword` varchar(50) NOT NULL,
  `adminemail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userpanel`
--

INSERT INTO `userpanel` (`adminname`, `adminpassword`, `adminemail`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'ruhul.gub@gmail.com');

-- --------------------------------------------------------

--
-- Structure for view `collectionview`
--
DROP TABLE IF EXISTS `collectionview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `collectionview`  AS SELECT `collectionfee`.`collid` AS `collid`, `student`.`studentname` AS `studentname`, `collectionfee`.`colldate` AS `colldate`, `collectionfee`.`collamount` AS `collamount`, `collectionfee`.`collnote` AS `collnote` FROM (`collectionfee` join `student`) WHERE `collectionfee`.`sid` = `student`.`sid``sid`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batchmanage`
--
ALTER TABLE `batchmanage`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `collectionfee`
--
ALTER TABLE `collectionfee`
  ADD PRIMARY KEY (`collid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`Id_number`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `bid` (`bid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batchmanage`
--
ALTER TABLE `batchmanage`
  MODIFY `bid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `collectionfee`
--
ALTER TABLE `collectionfee`
  MODIFY `collid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `Id_number` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collectionfee`
--
ALTER TABLE `collectionfee`
  ADD CONSTRAINT `collectionfee_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `batchmanage` (`bid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
