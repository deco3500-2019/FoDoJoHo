-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 03:30 AM
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
-- Database: `bhbr`
--

-- --------------------------------------------------------

--
-- Table structure for table `lobby`
--

CREATE TABLE `lobby` (
  `lobbyID` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `number` int(11) NOT NULL DEFAULT '16',
  `participants` varchar(500) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lobby`
--

INSERT INTO `lobby` (`lobbyID`, `title`, `number`, `participants`, `active`) VALUES
(1, 'Biting Nails', 16, 'Joseph, Justin, Howard, Fardeen, Jennifer, Matt, Paul', 0),
(2, 'Eating badly', 3, 'James, John, Jonah', 0),
(3, 'Test Active', 2, 'Jill, Janet', 1),
(4, 'Test AddLobby', 5, 'Paul', 0),
(5, 'Test AddLobby2', 7, 'Paul, Loo', 0),
(6, 'Playing Monopoly Game', 1, 'Jimmy', 0),
(7, 'Bad Habit', 3, 'Poo, Loo, Loo', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lobby`
--
ALTER TABLE `lobby`
  ADD PRIMARY KEY (`lobbyID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lobby`
--
ALTER TABLE `lobby`
  MODIFY `lobbyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
