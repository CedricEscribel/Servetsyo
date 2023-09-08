-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 12:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servetsyo`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoption`
--

CREATE TABLE `adoption` (
  `Adoption_id` int(11) NOT NULL,
  `FullName` varchar(128) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `PhoneNum` varchar(128) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `interview` varchar(122) NOT NULL,
  `date` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adoptionrequest`
--

CREATE TABLE `adoptionrequest` (
  `AdoptReq_id` int(11) NOT NULL,
  `Fullname` varchar(256) NOT NULL,
  `Address` varchar(512) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `PhoneNum` varchar(128) NOT NULL,
  `Interview` varchar(128) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adoptionrequest`
--

INSERT INTO `adoptionrequest` (`AdoptReq_id`, `Fullname`, `Address`, `Email`, `PhoneNum`, `Interview`, `Date`) VALUES
(1, 'Cedric Escribel', '0718', '', '09123', '', '2023-09-08'),
(2, 'Cedric Escribel', '0718', '', '09123', '', '2023-09-02'),
(3, 'Cedric Escribel', '0718', 'ced@gmail.com', '09123', 'Yes', '2023-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `catch`
--

CREATE TABLE `catch` (
  `DogCatch_id` int(11) NOT NULL,
  `BarangayID` varchar(128) NOT NULL,
  `ContNum` int(128) NOT NULL,
  `DogCount` int(25) NOT NULL,
  `Notes` varchar(258) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catch`
--

INSERT INTO `catch` (`DogCatch_id`, `BarangayID`, `ContNum`, `DogCount`, `Notes`) VALUES
(4, 'Barangca', 9123, 21, 'notes'),
(5, 'Piel', 9123, 22, 'notesupdated'),
(6, 'Paitan', 9123, 22, 'note'),
(7, 'Piel', 9123, 0, 'alert');

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `Dog_id` int(11) NOT NULL,
  `DogInfo` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Age` int(21) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`Dog_id`, `DogInfo`, `Name`, `Age`, `Gender`, `image`) VALUES
(41, 'details', 'name', 0, 'gender', '64fa05c2a2f43.png'),
(42, 'sa', 'sa', 0, 'sa', '64fa05e38e4bb.jpg'),
(43, 'details', 'dog3', 3, 'male', '64fa0a4e1a712.jpg'),
(44, 'details', 'add', 123, 'male', '64fac4bc34101.jpg'),
(45, 'details', 'another', 12, 'fem', '64fac4cd4a99e.jpg'),
(46, '123', '3', 0, 'fem', '64fac4f59311c.jpg'),
(47, 'details', 'add', 0, 'gender', '64fac9fd0fa43.png');

-- --------------------------------------------------------

--
-- Table structure for table `dogs_pound`
--

CREATE TABLE `dogs_pound` (
  `DPoundID` int(11) NOT NULL,
  `DogName` varchar(123) NOT NULL,
  `DateIn` date NOT NULL,
  `Age` varchar(123) NOT NULL,
  `Gender` varchar(312) NOT NULL,
  `RescuedAt` varchar(312) NOT NULL,
  `Status` varchar(312) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dogs_pound`
--

INSERT INTO `dogs_pound` (`DPoundID`, `DogName`, `DateIn`, `Age`, `Gender`, `RescuedAt`, `Status`) VALUES
(1, 'das', '2023-09-02', 'das', 'das', 'das', '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `EventId` int(11) NOT NULL,
  `EventName` varchar(256) NOT NULL,
  `Details` varchar(512) NOT NULL,
  `image` varchar(258) NOT NULL,
  `Dates` varchar(258) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`EventId`, `EventName`, `Details`, `image`, `Dates`) VALUES
(4, '', '', '64fad3d29ed86.png', ''),
(5, '', '', '64fad3f68807b.jpg', ''),
(6, 'name', 'details', '64fad519e5c09.jpg', ''),
(7, 'name', 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', '64fad5f24933c.jpg', '2023-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `insemination`
--

CREATE TABLE `insemination` (
  `Insemination_ID` int(11) NOT NULL,
  `Name` varchar(258) NOT NULL,
  `ContNum` varchar(258) NOT NULL,
  `Animal` varchar(258) NOT NULL,
  `Coordinates` varchar(258) NOT NULL,
  `Details` varchar(265) NOT NULL,
  `Status` varchar(258) NOT NULL,
  `user_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insemination`
--

INSERT INTO `insemination` (`Insemination_ID`, `Name`, `ContNum`, `Animal`, `Coordinates`, `Details`, `Status`, `user_id`) VALUES
(24, 'Cedric Escribel', '09123', 'Cow', '14.9430074,120.9044903', 'try with coordinates', '', '39'),
(27, 'Cedric Escribel', '09123', '', '15.0593937,120.6567054', 'a', '', '39');

-- --------------------------------------------------------

--
-- Table structure for table `rescue`
--

CREATE TABLE `rescue` (
  `Rescue_id` int(11) NOT NULL,
  `Name` varchar(128) NOT NULL,
  `animal` varchar(125) NOT NULL,
  `ContactNum` int(128) NOT NULL,
  `Details` varchar(256) NOT NULL,
  `Coordinates` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rescue`
--

INSERT INTO `rescue` (`Rescue_id`, `Name`, `animal`, `ContactNum`, `Details`, `Coordinates`) VALUES
(1, 'dog', '', 0, 'details', ''),
(2, '', '', 0, '', ''),
(3, '', '', 0, '', ''),
(4, 'snoopy', '', 912536, 'Array', '15.0593937,120.6567054'),
(5, 'detailssample', '', 912536, '', '15.0593937,120.6567054');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `Schedule_id` int(11) NOT NULL,
  `FullN` varchar(256) NOT NULL,
  `PhoneNum` int(18) NOT NULL,
  `Sched` varchar(128) NOT NULL,
  `Date` date NOT NULL,
  `PetName` varchar(128) NOT NULL,
  `Breed` varchar(128) NOT NULL,
  `Color` varchar(128) NOT NULL,
  `Age` int(25) NOT NULL,
  `Gender` varchar(128) NOT NULL,
  `Message` varchar(256) NOT NULL,
  `user_id` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`Schedule_id`, `FullN`, `PhoneNum`, `Sched`, `Date`, `PetName`, `Breed`, `Color`, `Age`, `Gender`, `Message`, `user_id`) VALUES
(15, 'Cedric Escribel', 9123, 'Cat', '0000-00-00', 'perry', 'persian', 'black/white', 2, 'female', '', '39');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Fullname` varchar(128) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `PhoneNum` varchar(24) NOT NULL,
  `CreateDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `Email`, `Password`, `Fullname`, `Address`, `PhoneNum`, `CreateDate`) VALUES
(39, 'ced@gmail.com', '$2y$10$IFXIB/BaEjxN65QIjGAkd.iylDVAmDOHypQ2YfiR88aFyUEjaTfUi', 'Cedric Escribel', '0718', '09123', '2023-09-05'),
(40, 'Cedric@gmail.com', '$2y$10$EaR0DfB1h2/tPPpLS4OekOaIrGgbqwcQ3wfqe6e2iddoo3PHF2Hru', 'Cedric Escribel', '0718', '09123456', '2023-09-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoption`
--
ALTER TABLE `adoption`
  ADD PRIMARY KEY (`Adoption_id`);

--
-- Indexes for table `adoptionrequest`
--
ALTER TABLE `adoptionrequest`
  ADD PRIMARY KEY (`AdoptReq_id`);

--
-- Indexes for table `catch`
--
ALTER TABLE `catch`
  ADD PRIMARY KEY (`DogCatch_id`);

--
-- Indexes for table `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`Dog_id`);

--
-- Indexes for table `dogs_pound`
--
ALTER TABLE `dogs_pound`
  ADD PRIMARY KEY (`DPoundID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`EventId`);

--
-- Indexes for table `insemination`
--
ALTER TABLE `insemination`
  ADD PRIMARY KEY (`Insemination_ID`);

--
-- Indexes for table `rescue`
--
ALTER TABLE `rescue`
  ADD PRIMARY KEY (`Rescue_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`Schedule_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adoption`
--
ALTER TABLE `adoption`
  MODIFY `Adoption_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adoptionrequest`
--
ALTER TABLE `adoptionrequest`
  MODIFY `AdoptReq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `catch`
--
ALTER TABLE `catch`
  MODIFY `DogCatch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `Dog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `dogs_pound`
--
ALTER TABLE `dogs_pound`
  MODIFY `DPoundID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `EventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `insemination`
--
ALTER TABLE `insemination`
  MODIFY `Insemination_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `rescue`
--
ALTER TABLE `rescue`
  MODIFY `Rescue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `Schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
