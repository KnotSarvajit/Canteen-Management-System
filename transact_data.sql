-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 12:40 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteen_manage_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `transact_data`
--

CREATE TABLE `transact_data` (
  `id` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `amount` float(20,2) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transact_data`
--

INSERT INTO `transact_data` (`id`, `item`, `amount`, `date`, `time`) VALUES
('39EAB06D','Samosa', 10,'date', 'time'),
('769174F8','Chaat', 50,'date', 'time'),
('81A3DC79','Pav Bhaji', 60,'date', 'time'),
('866080F8','Puffs', 50,'date', 'time');




--
-- Indexes for dumped tables
--

--
-- Indexes for table `transact_data`
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
