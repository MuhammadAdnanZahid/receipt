-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2021 at 09:12 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `society`
--

-- --------------------------------------------------------

--
-- Table structure for table `ask10_cmsusers`
--

CREATE TABLE `ask10_cmsusers` (
  `userid` smallint(5) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `status` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(15) NOT NULL,
  `userimg` varchar(256) DEFAULT NULL,
  `partner_id` int(11) NOT NULL DEFAULT 0,
  `district_id` int(11) NOT NULL DEFAULT 0,
  `user_rights` varchar(256) DEFAULT NULL,
  `createdon` datetime DEFAULT NULL,
  `updatedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ask10_cmsusers`
--

INSERT INTO `ask10_cmsusers` (`userid`, `name`, `username`, `password`, `status`, `email`, `role`, `userimg`, `partner_id`, `district_id`, `user_rights`, `createdon`, `updatedon`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Active', 'asadislam78@yahoo.com', 'Admin', '1602061055_hs.jpg', 0, 0, NULL, '2011-12-27 06:52:22', '2021-01-08 01:40:09'),
(7, 'Momin Ali', 'momin', 'a437c07f621651d0fb6f2197082d7273', 'Inactive', 'momin@ali.com', 'Member', '', 0, 0, NULL, '2020-11-04 23:11:06', '2021-01-08 02:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `ask10_reciept`
--

CREATE TABLE `ask10_reciept` (
  `rid` smallint(6) NOT NULL,
  `reciept_business` varchar(255) NOT NULL,
  `reciept_product` varchar(255) NOT NULL,
  `reciept_color` varchar(255) NOT NULL,
  `reciept_size` smallint(6) NOT NULL,
  `reciept_oldprice` smallint(6) NOT NULL,
  `reciept_price` smallint(6) NOT NULL,
  `createdon` datetime NOT NULL,
  `updatedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ask10_reciept`
--

INSERT INTO `ask10_reciept` (`rid`, `reciept_business`, `reciept_product`, `reciept_color`, `reciept_size`, `reciept_oldprice`, `reciept_price`, `createdon`, `updatedon`) VALUES
(1, 'Service', '839-33kh9-30', 'green', 500, 0, 1200, '2021-02-25 12:02:04', '2021-02-25 07:04:04'),
(7, 'Bata', '839-33kh9-35', 'red', 32, 1000, 900, '2021-02-25 12:02:37', '2021-02-25 07:38:37'),
(8, 'addd', '839-33kh9-36', 'red', 32, 1000, 900, '2021-02-25 12:02:29', '2021-02-25 07:56:29'),
(9, 'raz', '839-33kh9-36', 'red', 32, 1000, 900, '2021-02-25 13:02:15', '2021-02-25 08:06:15'),
(10, 'aaaa', '839-33kh9-37', 'red', 32, 1000, 900, '2021-02-25 13:02:10', '2021-02-25 08:08:10');

-- --------------------------------------------------------

--
-- Table structure for table `ask10_site`
--

CREATE TABLE `ask10_site` (
  `siteid` smallint(5) NOT NULL,
  `business_name` varchar(150) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_color` varchar(255) NOT NULL,
  `product_size` smallint(6) NOT NULL,
  `product_oldprice` smallint(6) DEFAULT NULL,
  `product_price` smallint(6) NOT NULL,
  `authorid` smallint(2) NOT NULL,
  `lastupdatedby` smallint(2) NOT NULL,
  `createdon` datetime DEFAULT NULL,
  `updatedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ask10_site`
--

INSERT INTO `ask10_site` (`siteid`, `business_name`, `product_name`, `product_color`, `product_size`, `product_oldprice`, `product_price`, `authorid`, `lastupdatedby`, `createdon`, `updatedon`) VALUES
(1, 'aaaa', '839-33kh9-37', 'red', 32, 1000, 900, 1, 1, '2014-06-16 00:00:00', '2021-02-25 08:08:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ask10_reciept`
--
ALTER TABLE `ask10_reciept`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ask10_reciept`
--
ALTER TABLE `ask10_reciept`
  MODIFY `rid` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
