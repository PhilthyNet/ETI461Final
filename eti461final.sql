-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2023 at 05:52 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eti461final`
--

-- --------------------------------------------------------

--
-- Table structure for table `Agents`
--

CREATE TABLE `Agents` (
  `agentID` int NOT NULL,
  `agentName` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `agentNum` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `agentEmail` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `categoryID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Agents`
--

INSERT INTO `Agents` (`agentID`, `agentName`, `agentNum`, `agentEmail`, `categoryID`) VALUES
(1, 'John Thiem', '(814)969-3032', 'johnthiem@johnthiem.com', 3),
(2, 'Joe Bighat', '(751)899-6969', 'bighatrealty@texasrealty.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Categories`
--

CREATE TABLE `Categories` (
  `categoryID` int NOT NULL,
  `categories` varchar(250) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Categories`
--

INSERT INTO `Categories` (`categoryID`, `categories`) VALUES
(1, 'Sales'),
(2, 'Rentals'),
(3, 'Agents');

-- --------------------------------------------------------

--
-- Table structure for table `Rentals`
--

CREATE TABLE `Rentals` (
  `rentalID` int NOT NULL,
  `listingPrice` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `state` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `categoryID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Rentals`
--

INSERT INTO `Rentals` (`rentalID`, `listingPrice`, `city`, `state`, `address`, `categoryID`) VALUES
(1, '1500', 'State College', 'Pennsylvania', '325 N Burrowes Road', 2),
(2, '2500', 'State College', 'Pennsylvania', '254 East Beaver Ave', 2),
(3, '3000', 'State College', 'Pennsylvania', '616 East College Ave', 2),
(4, '12000', 'Houston', 'Texas', '1 Penthouse Drive', 2),
(5, '6700', 'Houston', 'Texas', '1234 Numbers Road', 2),
(6, '3000', 'Houston', 'Texas', '4615 Maple Street', 2);

-- --------------------------------------------------------

--
-- Table structure for table `Sales`
--

CREATE TABLE `Sales` (
  `saleID` int NOT NULL,
  `listingPrice` int NOT NULL,
  `city` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `state` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `categoryID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Sales`
--

INSERT INTO `Sales` (`saleID`, `listingPrice`, `city`, `state`, `address`, `categoryID`) VALUES
(1, 340000, 'State College', 'Pennsylvania', '340 N Burrowes', 1),
(2, 375000, 'State College', 'Pennsylvania', '210 College Ave', 1),
(3, 380000, 'State College', 'Pennsylvania', '12 Curtin Road', 1),
(4, 1340000, 'Houston', 'Texas', '2323 Main Street', 1),
(5, 1255000, 'Houston', 'Texas', '155 Cowboy Lane', 1),
(6, 1140000, 'Houston', 'Texas', '5566 Big Hat Road', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Agents`
--
ALTER TABLE `Agents`
  ADD PRIMARY KEY (`agentID`);

--
-- Indexes for table `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `Rentals`
--
ALTER TABLE `Rentals`
  ADD PRIMARY KEY (`rentalID`);

--
-- Indexes for table `Sales`
--
ALTER TABLE `Sales`
  ADD PRIMARY KEY (`saleID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
