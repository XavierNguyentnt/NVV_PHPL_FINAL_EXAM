-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 07, 2025 at 12:10 PM
-- Server version: 5.7.24
-- PHP Version: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `v_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `item_sale`
--

CREATE TABLE `item_sale` (
  `id` int(11) NOT NULL,
  `item_code` varchar(10) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` decimal(8,0) DEFAULT NULL,
  `expired_date` date DEFAULT NULL,
  `note` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_sale`
--

INSERT INTO `item_sale` (`id`, `item_code`, `item_name`, `quantity`, `expired_date`, `note`) VALUES
(1, 'Coca', 'Coca cola', '100', '2024-01-01', ''),
(2, 'Bim', 'Bim Bim', '100', '2024-01-01', 'Discount'),
(3, 'Lavie', 'Lavie', '100', '2024-01-01', 'Discount'),
(4, 'Pen', 'Pencil', '100', '2024-01-01', ''),
(5, 'SevenUp', 'Seven up', '100', '2024-01-01', ''),
(6, 'Note', 'NoteBook', '100', '2024-01-01', ''),
(7, 'Note1', 'NoteBook 1', '100', '2024-01-01', 'Discount'),
(8, 'Note2', 'NoteBook 2', '100', '2024-01-01', 'Discount'),
(9, 'Note3', 'NoteBook 3', '100', '2024-01-01', 'Discount'),
(10, 'Note4', 'NoteBook 4', '100', '2024-01-01', 'Discount'),
(11, 'Note5', 'NoteBook 5', '100', '2024-01-01', 'Discount'),
(12, 'Note6', 'NoteBook 6', '100', '2024-01-01', 'Discount'),
(13, 'Note7', 'NoteBook 7', '100', '2024-01-01', 'Discount');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_sale`
--
ALTER TABLE `item_sale`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_sale`
--
ALTER TABLE `item_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
