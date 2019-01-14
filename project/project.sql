-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2017 at 03:33 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwp`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `username` varchar(50) NOT NULL,
  `fid` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `nop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`username`, `fid`, `date`, `nop`) VALUES
('AKANKSHA', 'ac340', '2017-11-26', 2);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cname` varchar(40) DEFAULT NULL,
  `id` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cname`, `id`) VALUES
('AHMEDABAD', 'AMD'),
('AMRITSAR', 'ATQ'),
('BHOPAL', 'BHO'),
('Banglaore', 'BLR'),
('Mumbai', 'BOM'),
('KOLKATA', 'CCU'),
('Cochin', 'COK'),
('Delhi', 'DEL'),
('GUWAHATI', 'GAU'),
('GAYA', 'GAY'),
('Goa', 'GOI'),
('Hyderabad', 'HYD'),
('CHANDIGARH', 'IXC'),
('JAMMU', 'IXJ'),
('RANCHI', 'IXR'),
('Port Blair', 'IXZ'),
('Jaipur', 'JAI'),
('LUCKNOW', 'LKO'),
('Chennai', 'MAA'),
('DAMAN', 'NMB'),
('PATNA', 'PAT'),
('PUNE', 'PNQ'),
('SHIMLA', 'SLV'),
('tirupati', 'TIR');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(50) NOT NULL,
  `password` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `password`) VALUES
('anuroopkhandelwal33@gmail.com', 'a384b6463fc216a5f8ecb6670f86456a'),
('sinhaakanksha285@gmail.com', 'fd2cc6c54239c40495a0d3a93b6380eb'),
('suraj', 'e2fc714c4727ee9395f324cd2e7f331f'),
('ruchi', '912ec803b2ce49e4a541068d495ab570'),
('akanksha', 'fd2cc6c54239c40495a0d3a93b6380eb');

-- --------------------------------------------------------

--
-- Table structure for table `fdetails`
--

CREATE TABLE `fdetails` (
  `fid` varchar(10) NOT NULL,
  `fsource` varchar(4) NOT NULL,
  `fdest` varchar(4) DEFAULT NULL,
  `fstime` time NOT NULL,
  `fdtime` time DEFAULT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fdetails`
--

INSERT INTO `fdetails` (`fid`, `fsource`, `fdest`, `fstime`, `fdtime`, `price`) VALUES
('ac113', 'BHO', 'BOM', '12:10:00', '01:25:00', '2345.00'),
('ac272', 'DEL', 'MAA', '16:25:00', '18:42:00', '6445.00'),
('ac340', 'MAA', 'DEL', '18:10:00', '20:00:00', '2277.00'),
('ac409', 'LKO', 'BOM', '05:00:00', '07:10:00', '3342.00'),
('ac727', 'GOI', 'COK', '14:10:00', '15:00:00', '2123.00'),
('ac742', 'MAA', 'IXZ', '19:30:30', '21:00:00', '34567.00'),
('ac982', 'DEL', 'SLV', '21:30:00', '10:40:00', '15899.00'),
('ai234', 'AMD', 'MAA', '12:00:00', '02:20:00', '2185.00'),
('ai677', 'BOM', 'LKO', '23:34:00', '01:20:00', '3342.00'),
('ai778', 'SLV', 'DEL', '03:40:00', '04:50:00', '15899.00'),
('ai785', 'GOI', 'MAA', '12:15:00', '15:40:00', '7865.00'),
('ga234', 'DEL', 'CCU', '14:00:00', '16:30:00', '5182.00'),
('ga453', 'JAI', 'BLR', '11:30:00', '02:00:00', '4455.00'),
('i234', 'DEL', 'MAA', '10:15:00', '12:30:00', '5650.00'),
('i333', 'BOM', 'BHO', '20:30:00', '21:40:00', '2345.00'),
('i341', 'PAT', 'DEL', '14:20:00', '16:40:00', '2950.00'),
('i403', 'CCU', 'DEL', '01:10:00', '03:00:00', '5182.00'),
('i437', 'MAA', 'GOI', '11:40:00', '01:50:00', '8556.00'),
('i446', 'BOM', 'HYD', '22:10:00', '23:00:00', '2606.00'),
('i456', 'MAA', 'BOM', '14:00:00', '16:30:00', '3578.00'),
('i63', 'CCU', 'PAT', '15:20:00', '16:40:00', '2677.00'),
('i633', 'IXZ', 'MAA', '18:30:00', '20:40:00', '7898.00'),
('i737', 'HYD', 'BOM', '04:20:00', '05:30:00', '2606.00'),
('i914', 'PAT', 'CCU', '13:00:00', '14:10:00', '2677.00'),
('ja145', 'COK', 'BOM', '00:30:00', '01:05:00', '1005.00'),
('ja213', 'CCU', 'BOM', '18:30:00', '20:50:00', '5345.00'),
('ja234', 'DEL', 'MAA', '22:30:00', '00:10:00', '2277.00'),
('ja265', 'GOI', 'MAA', '04:20:00', '06:30:00', '8556.00'),
('ja384', 'MAA', 'DEL', '02:00:00', '03:50:00', '4483.00'),
('ja448', 'IXR', 'CCU', '02:00:00', '02:50:00', '2462.00'),
('ja583', 'DEL', 'MAA', '20:43:00', '22:56:00', '5801.00'),
('ja59', 'CCU', 'DEL', '23:34:00', '01:20:00', '4500.00'),
('jl222', 'BOM', 'CCU', '20:30:00', '23:50:00', '5345.00'),
('jl405', 'MAA', 'DEL', '01:10:00', '03:40:00', '3650.00'),
('jl541', 'DEL', 'MAA', '04:20:00', '06:40:00', '4056.00'),
('sj105', 'MAA', 'CCU', '14:10:00', '16:00:00', '2445.90'),
('sj448', 'DEL', 'PAT', '02:00:00', '03:40:00', '2950.00'),
('sj558', 'COK', 'GOI', '01:20:00', '02:50:00', '2123.00'),
('sj812', 'MAA', 'IXZ', '04:10:00', '06:50:00', '7898.00'),
('sj974', 'MAA', 'DEL', '10:10:00', '12:00:00', '6445.00'),
('va234', 'DEL', 'MAA', '04:20:00', '06:30:00', '4483.00'),
('va716', 'MAA', 'DEL', '01:25:00', '04:00:00', '4056.00'),
('va876', 'MAA', 'DEL', '20:30:00', '22:40:00', '5801.00'),
('va892', 'DEL', 'CCU', '07:00:00', '08:45:00', '4500.00');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `fid` varchar(10) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `capacity` decimal(3,0) NOT NULL,
  `booked` decimal(3,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`fid`, `fname`, `capacity`, `booked`) VALUES
('ac113', 'Air Costa', '180', '0'),
('ac272', 'SpiceJet', '180', '0'),
('ac340', 'Jet Airways', '180', '0'),
('ac409', 'Air Costa', '180', '0'),
('ac727', 'SpiceJet', '180', '0'),
('ac742', 'Air Costa', '120', '0'),
('ac982', 'Air India', '180', '0'),
('ai234', 'Air India', '180', '0'),
('ai677', 'Air Costa', '180', '0'),
('ai778', 'Air India', '180', '0'),
('ai785', 'Air India', '210', '0'),
('ga234', 'GoAir', '180', '0'),
('ga453', 'GoAir', '230', '0'),
('i234', 'Indigo', '180', '0'),
('i333', 'Air Costa', '180', '0'),
('i341', 'Indigo', '180', '0'),
('i403', 'GoAir', '180', '0'),
('i437', 'Jet Airways', '180', '0'),
('i446', 'Indigo', '180', '0'),
('i456', 'Indigo', '200', '150'),
('i63', 'Indigo', '180', '0'),
('i633', 'Indigo', '180', '0'),
('i737', 'Indigo', '180', '0'),
('i914', 'Indigo', '180', '0'),
('ja145', 'Jet Airways', '180', '0'),
('ja213', 'Jet Airways', '190', '0'),
('ja234', 'Jet Airways', '180', '0'),
('ja265', 'Jet Airways', '180', '0'),
('ja384', 'Vistara Airlines', '180', '0'),
('ja583', 'Jet Airways', '180', '0'),
('ja59', 'Vistara Airlines', '180', '0'),
('jl222', 'JetLite', '160', '0'),
('jl405', 'Indigo', '180', '0'),
('jl541', 'JetLite', '180', '0'),
('sj105', 'SpiceJet', '198', '0'),
('sj448', 'Indigo', '180', '0'),
('sj558', 'SpiceJet', '180', '0'),
('sj812', 'Indigo', '180', '0'),
('sj974', 'SpiceJet', '180', '0'),
('va234', 'Vistara Airlines', '180', '0'),
('va716', 'JetLite', '180', '0'),
('va876', 'Jet Airways', '180', '0'),
('va892', 'Vistara Airlines', '180', '0');

-- --------------------------------------------------------

--
-- Table structure for table `fstatus`
--

CREATE TABLE `fstatus` (
  `date` date NOT NULL,
  `fid` varchar(6) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fdetails`
--
ALTER TABLE `fdetails`
  ADD PRIMARY KEY (`fid`,`fsource`,`fstime`),
  ADD UNIQUE KEY `fid` (`fid`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`fid`),
  ADD UNIQUE KEY `fid` (`fid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
