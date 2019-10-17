-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 17, 2019 at 07:47 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

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
  `check_in_interval` int(100) NOT NULL,
  `duration` int(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `creator` varchar(200) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `check_in_question` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lobby`
--

INSERT INTO `lobby` (`lobbyID`, `title`, `number`, `check_in_interval`, `duration`, `description`, `creator`, `active`, `check_in_question`) VALUES
(1, 'Biting Nails', 16, 0, 0, '', '', 0, ''),
(2, 'Eating badly', 3, 0, 0, '', '', 0, ''),
(3, 'Test Active', 2, 0, 0, '', '', 1, ''),
(4, 'Test AddLobby', 5, 0, 0, '', '', 0, ''),
(5, 'Test AddLobby2', 7, 0, 0, '', '', 0, ''),
(6, 'Playing Monopoly Game', 1, 0, 0, '', '', 0, ''),
(7, 'Bad Habit', 3, 0, 0, '', '', 0, ''),
(8, 'Being Howard', 6, 0, 0, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `lobby_join`
--

CREATE TABLE `lobby_join` (
  `joinID` int(110) NOT NULL,
  `participantID` int(110) NOT NULL,
  `lobbyID` int(110) NOT NULL,
  `checked` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lobby_join`
--

INSERT INTO `lobby_join` (`joinID`, `participantID`, `lobbyID`, `checked`) VALUES
(1, 2, 1, 0),
(2, 3, 1, 0),
(3, 3, 4, 0),
(4, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `participant_details`
--

CREATE TABLE `participant_details` (
  `participantID` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `age` int(100) NOT NULL,
  `city` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participant_details`
--

INSERT INTO `participant_details` (`participantID`, `name`, `age`, `city`) VALUES
(1, 'Fardeen', 20, 'Brisbane'),
(2, 'Jo', 20, 'Brisbane'),
(3, 'Paul', 21, 'Sydney'),
(4, 'Justin', 19, 'Brisbane'),
(5, 'Howard', 28, 'Brisbane'),
(7, 'sam', 20, 'LA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lobby`
--
ALTER TABLE `lobby`
  ADD PRIMARY KEY (`lobbyID`);

--
-- Indexes for table `lobby_join`
--
ALTER TABLE `lobby_join`
  ADD PRIMARY KEY (`joinID`),
  ADD KEY `Lobby_fk` (`lobbyID`),
  ADD KEY `participant_fk` (`participantID`);

--
-- Indexes for table `participant_details`
--
ALTER TABLE `participant_details`
  ADD PRIMARY KEY (`participantID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lobby`
--
ALTER TABLE `lobby`
  MODIFY `lobbyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lobby_join`
--
ALTER TABLE `lobby_join`
  MODIFY `joinID` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `participant_details`
--
ALTER TABLE `participant_details`
  MODIFY `participantID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lobby_join`
--
ALTER TABLE `lobby_join`
  ADD CONSTRAINT `Lobby_fk` FOREIGN KEY (`lobbyID`) REFERENCES `lobby` (`lobbyID`),
  ADD CONSTRAINT `participant_fk` FOREIGN KEY (`participantID`) REFERENCES `participant_details` (`participantID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
