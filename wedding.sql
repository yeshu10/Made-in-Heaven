-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 22, 2023 at 07:11 AM
-- Server version: 10.4.10-MariaDB
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
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `UID` int(11) NOT NULL,
  `DATE` date NOT NULL,
  `ID` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`UID`, `DATE`, `ID`) VALUES
(15, '2023-03-17', ''),
(15, '2023-03-24', ''),
(15, '2023-03-30', ''),
(15, '2023-03-31', 'P01'),
(15, '2023-03-25', ''),
(15, '2023-03-24', 'P01'),
(16, '2023-03-31', ''),
(16, '2023-03-28', ''),
(16, '2023-03-29', ''),
(16, '2023-03-19', ''),
(15, '2023-04-20', ''),
(15, '2023-03-21', ''),
(15, '2023-04-08', 'H010'),
(15, '2023-04-14', 'hoik'),
(15, '2023-04-08', ''),
(15, '2023-04-08', 'H01'),
(15, '2023-09-20', ''),
(15, '2023-04-01', ''),
(15, '2023-04-02', ''),
(15, '2023-04-06', ''),
(15, '2023-08-20', ''),
(15, '2023-08-21', '');

-- --------------------------------------------------------

--
-- Table structure for table `catrers`
--

DROP TABLE IF EXISTS `catrers`;
CREATE TABLE IF NOT EXISTS `catrers` (
  `IMG` char(30) NOT NULL,
  `ID` varchar(5) NOT NULL,
  `NAME` char(40) NOT NULL,
  `PRICE` int(15) NOT NULL,
  `ADDRESS` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catrers`
--

INSERT INTO `catrers` (`IMG`, `ID`, `NAME`, `PRICE`, `ADDRESS`) VALUES
('', 'C01', 'Fresco Foods', 2000, 'South Bangalore'),
('', 'C02', 'SFM BANGOLORE', 2500, 'BANGALORE'),
('', 'C01', 'Fresco Foods', 2000, 'South Bangalore'),
('', 'C02', 'SFM BANGOLORE', 2500, 'BANGALORE');

-- --------------------------------------------------------

--
-- Table structure for table `decors`
--

DROP TABLE IF EXISTS `decors`;
CREATE TABLE IF NOT EXISTS `decors` (
  `IMG` int(15) NOT NULL,
  `ID` varchar(5) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `PRICE` int(10) NOT NULL,
  `ADDRESS` int(30) NOT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `makeup`
--

DROP TABLE IF EXISTS `makeup`;
CREATE TABLE IF NOT EXISTS `makeup` (
  `IMG` char(30) NOT NULL,
  `ID` varchar(5) NOT NULL,
  `NAME` char(40) NOT NULL,
  `PRICE` int(15) NOT NULL,
  `ADDRESS` varchar(20) NOT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makeup`
--

INSERT INTO `makeup` (`IMG`, `ID`, `NAME`, `PRICE`, `ADDRESS`) VALUES
('', 'M03', 'GLOSS N GLASS', 5000, 'Bangalore'),
('', 'M01', 'Radiance', 70000, 'Bangalore'),
('', 'M02', 'Beauty Tales', 65000, 'Bangalore'),
('', 'M04', 'MN MAKEUP ARTIST', 15000, 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `mehndi`
--

DROP TABLE IF EXISTS `mehndi`;
CREATE TABLE IF NOT EXISTS `mehndi` (
  `IMG` char(30) NOT NULL,
  `ID` varchar(5) NOT NULL,
  `NAME` char(40) NOT NULL,
  `PRICE` int(15) NOT NULL,
  `ADDRESS` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mehndi`
--

INSERT INTO `mehndi` (`IMG`, `ID`, `NAME`, `PRICE`, `ADDRESS`) VALUES
('', 'H01', 'Glamourous  Floral', 100000, 'Bangalore'),
('', 'H02', 'MEHANDI BY ALEENA', 70000, 'Bangalore'),
('', 'H04', 'Henna strings', 80000, 'South Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

DROP TABLE IF EXISTS `photographer`;
CREATE TABLE IF NOT EXISTS `photographer` (
  `IMG` char(30) NOT NULL,
  `ID` varchar(5) NOT NULL,
  `NAME` char(40) NOT NULL,
  `PRICE` int(15) NOT NULL,
  `ADDRESS` varchar(20) NOT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`IMG`, `ID`, `NAME`, `PRICE`, `ADDRESS`) VALUES
('', 'P03', 'Gold fish', 60000, 'Bangalore'),
('', 'P01', 'weddingcinemas', 60000, 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `usermaster`
--

DROP TABLE IF EXISTS `usermaster`;
CREATE TABLE IF NOT EXISTS `usermaster` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=111 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usermaster`
--

INSERT INTO `usermaster` (`uid`, `fname`, `lname`, `mobile`, `email`, `pass`, `address`) VALUES
(1, 'yash', 'kesarwani', '4643135135465', 'yash@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '313 L.I.G. Preetam Nagar, Allahabad'),
(107, 'RIYA', 'SINGH', '9335356912', 'riya9@gmail.com', 'a392b73f474e8d2817a8cae4b41f30fb65adc62f', 'dfghg'),
(15, 'yes', 'ghj', '1234567654', 'abc@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'delhi'),
(16, 'x', 'y', '9563214632', 'xyz@gmail.com', '348162101fc6f7e624681b7400b085eeac6df7bd', 'goa'),
(101, 'Admin', 'Admin', '9853214456', 'admin@gmail.com', '1d9709e95a16f3751167bf338d652fd45b0710e7', 'delhi'),
(102, 'hnj', 'kji', '1234569878', 'abc@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'jhki'),
(103, 'ghjk', 'kjh', '1235845364', 'hello@gmail.com', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d', 'hjkl'),
(104, '&#60;script&#62;alert(1)&#60;/script&#62;', 'fish', '5632145632', 'fish@gmail.com', 'a392b73f474e8d2817a8cae4b41f30fb65adc62f', 'delhi'),
(105, 'fish', 'fish', '5632145632', 'scriptalert1script', 'a392b73f474e8d2817a8cae4b41f30fb65adc62f', 'delhi'),
(106, 'RISHI', 'SINGH', '8563214521', 'RISHI@gmail.com', '34bff7be484da58a7c244a79ef278630f334a732', 'jaipur'),
(14, 'shubh', 'gupta', '9123654789', 'subh@gmail.com', '93d58432b67cd40a9fc43818f907523f128fc750', 'delhi'),
(108, 'm', 'n', '1236547989', 'mnop@new.com', '71148077832098f0ea5bca0a0981250d8f4345cd', 'ghkj'),
(109, 'fish', 'fish', '5632145632', 'hi@gmail.com', 'a392b73f474e8d2817a8cae4b41f30fb65adc62f', '&#60;script&#62;alert(1)&#60;/script&#62;'),
(110, 'riya', 'singh', '7896541231', 'hiii@gmail.com', '777c15f3f09056fc79591646e717b5e95cef624c', '&#60;script&#62;alert(1)&#60;/script&#62;');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

DROP TABLE IF EXISTS `venues`;
CREATE TABLE IF NOT EXISTS `venues` (
  `IMG` varchar(30) NOT NULL,
  `ID` varchar(5) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `PRICE` int(7) NOT NULL,
  `ADDRESS` varchar(30) NOT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
