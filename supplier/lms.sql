-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 06:59 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_inventory`
--

CREATE TABLE `book_inventory` (
  `ID` int(11) NOT NULL,
  `Code` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Bookname` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Author` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Unit_price` int(11) NOT NULL,
  `Stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book_inventory`
--

INSERT INTO `book_inventory` (`ID`, `Code`, `Bookname`, `Author`, `Unit_price`, `Stock`) VALUES
(1, 'B500', 'War and Peace', 'Leo Tolstoy', 450, 12),
(2, 'B400', 'In Search of Lost Time', 'Marcel Proust', 560, 26),
(3, 'B100', 'Robinson Crusoe', 'Robinson Crusoe', 550, 37),
(4, 'B600', 'Hamlet', 'William Shakespeare', 800, 6),
(5, 'B200', 'The Odyssey', 'Homer', 356, 32),
(6, 'B300', 'Pride and Prejudice', 'Jane Austen', 710, 41),
(7, 'B900', 'Gulliver\'s Travels', 'Jonathan Swift', 620, 21),
(8, 'B800', 'On the Road', 'Jack Kerouac', 200, 9),
(9, 'B100', 'B100', 'B100', 800, 6);

-- --------------------------------------------------------

--
-- Table structure for table `demand_booklist`
--

CREATE TABLE `demand_booklist` (
  `ID` int(11) NOT NULL,
  `Code` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Bookname` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Author` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Quantity` int(11) NOT NULL,
  `Deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `demand_booklist`
--

INSERT INTO `demand_booklist` (`ID`, `Code`, `Bookname`, `Author`, `Quantity`, `Deadline`) VALUES
(10, 'B100', 'Learn java', 'Mr. X', 20, '2021-04-12'),
(11, 'B101', 'Web Technologies', 'Mr.Y', 15, '2021-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `ID` int(11) NOT NULL,
  `Name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` decimal(20,0) NOT NULL,
  `Address` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `UserType` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `Image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`ID`, `Name`, `Email`, `Phone`, `Address`, `Password`, `Gender`, `UserType`, `DOB`, `Image`) VALUES
(1, 'admin', 'admin@lms.com', '123456789', 'ADC', 'admin', 'male', 'admin', '2021-04-12', ''),
(69, 'librarian', 'librarian@lms.com', '987456321', 'SDF', 'librarian', 'female', 'librarian', '2021-03-17', ''),
(71, 'supplier', 'supplier@lms.com', '456398217', 'GHF', 'supplier', 'male', 'supplier', '2021-04-15', ''),
(72, 'member', 'member@lms.com', '369852147', 'LUN', 'member', 'female', 'member', '2021-04-29', ''),
(73, 'qq', 'qq@lms.com', '147852369', 'QWE', '12', 'female', 'supplier', '2021-04-24', ''),
(74, 'ww', 'ww@lms.com', '852369741', 'CFT', '13', 'female', 'member', '2021-03-30', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_inventory`
--
ALTER TABLE `book_inventory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `demand_booklist`
--
ALTER TABLE `demand_booklist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_inventory`
--
ALTER TABLE `book_inventory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `demand_booklist`
--
ALTER TABLE `demand_booklist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
