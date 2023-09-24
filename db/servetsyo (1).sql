-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2023 at 03:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
  `Date` date NOT NULL,
  `status` varchar(123) NOT NULL,
  `Dog_id` varchar(255) NOT NULL,
  `DateReq` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adoptionrequest`
--

INSERT INTO `adoptionrequest` (`AdoptReq_id`, `Fullname`, `Address`, `Email`, `PhoneNum`, `Interview`, `Date`, `status`, `Dog_id`, `DateReq`) VALUES
(22, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-09-25', 'Pending', '64', '2023-09-24'),
(23, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', '', '2023-09-23', 'Pending', '64', '2023-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `catch`
--

CREATE TABLE `catch` (
  `DogCatch_id` int(11) NOT NULL,
  `BarangayID` varchar(128) NOT NULL,
  `ContNum` int(128) NOT NULL,
  `DogCount` int(25) NOT NULL,
  `Notes` varchar(258) NOT NULL,
  `ReqDate` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catch`
--

INSERT INTO `catch` (`DogCatch_id`, `BarangayID`, `ContNum`, `DogCount`, `Notes`, `ReqDate`, `status`) VALUES
(29, 'Concepcion', 2147483647, 10, 'Test notes', '2023-09-24', 'Pending'),
(30, 'Barangca', 2147483647, 9, 'Test note', '2023-09-24', 'Pending'),
(31, 'Catulinan', 2147483647, 12, 'Sample', '2023-09-24', 'Pending'),
(32, 'Poblacion', 2147483647, 14, 'Testing', '2023-09-24', 'Pending'),
(33, 'Santo Cristo', 2147483647, 12, 'Testing', '2023-09-24', 'Pending'),
(34, 'San Roque', 2147483647, 13, 'Example', '2023-09-24', 'Pending'),
(35, 'Virgen delas Flores', 2147483647, 12, 'Testing', '2023-09-24', 'Pending'),
(36, 'Piel', 2147483647, 10, 'Testing', '2023-09-24', 'Pending'),
(37, 'Santa Barbara', 2147483647, 9, 'Test note', '2023-09-24', 'Pending'),
(38, 'Santa Barbara', 2147483647, 15, 'Notes', '2023-09-24', 'Pending');

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
  `status` varchar(312) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dogs_pound`
--

INSERT INTO `dogs_pound` (`DPoundID`, `DogName`, `DateIn`, `Age`, `Gender`, `RescuedAt`, `status`) VALUES
(15, 'Bruno', '2023-09-24', '1', 'Male', 'Pagala', 'Pending'),
(16, 'Small', '2023-09-22', '2', 'Male', 'Santa Barbara', 'Pending'),
(17, 'Mico', '2023-09-22', '2', 'Male', 'Pagala', 'Pending'),
(18, 'Gelo', '2023-09-22', '2', 'Female', 'Tiaong', 'Pending'),
(19, 'Brown', '2023-09-22', '2', 'Female', 'Sulivan', 'Pending'),
(20, 'Whitey', '2023-09-23', '2', 'Male', 'Pagala', 'Pending');

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
(10, 'MASS VACCINATION', 'Sample additional details', '65103d8eb9e69.png', '2023-09-28');

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
  `ReqDate` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(258) NOT NULL,
  `user_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insemination`
--

INSERT INTO `insemination` (`Insemination_ID`, `Name`, `ContNum`, `Animal`, `Coordinates`, `Details`, `ReqDate`, `status`, `user_id`) VALUES
(57, 'Dean Jerick C. Igaya', '09352218378', 'Carabao', '14.3917056,121.0515456', 'Test details', '2023-09-24', 'Pending', '47'),
(58, 'Randel T. Valimento', '09157139465', 'Carabao', '14.3917056,121.0515456', 'Test carabao', '2023-09-24', 'Pending', '48'),
(59, 'Dean Jerick C. Igaya', '09352218378', 'Cow', '14.3917056,121.0515456', 'Details', '2023-09-24', 'Pending', '47'),
(60, 'April Joy R. Sablayan', '09147852349', 'Goat', '14.3917056,121.0515456', 'Goat details', '2023-09-24', 'Pending', '49'),
(61, 'Randel T. Valimento', '09157139465', 'Cow', '14.3917056,121.0515456', 'Test cow', '2023-09-24', 'Pending', '48'),
(62, 'Randel T. Valimento', '09157139465', 'Carabao', '14.3917056,121.0515456', 'Details testing', '2023-09-24', 'Pending', '48'),
(63, 'Dean Jerick C. Igaya', '09352218378', 'Carabao', '14.3917056,121.0515456', 'Details example', '2023-09-24', 'Pending', '47'),
(64, 'Dean Jerick C. Igaya', '09352218378', 'Carabao', '14.3917056,121.0515456', 'Details', '2023-09-24', 'Pending', '47'),
(65, 'Dean Jerick C. Igaya', '09352218378', 'Carabao', '14.3917056,121.0515456', 'Details', '2023-09-24', 'Pending', '47'),
(66, 'April Joy R. Sablayan', '09147852349', 'Cow', '14.3917056,121.0515456', 'Details sample', '2023-09-24', 'Pending', '49');

-- --------------------------------------------------------

--
-- Table structure for table `rescue`
--

CREATE TABLE `rescue` (
  `Rescue_id` int(11) NOT NULL,
  `Name` varchar(128) NOT NULL,
  `ContactNum` varchar(123) NOT NULL,
  `animal` varchar(125) NOT NULL,
  `Details` varchar(256) NOT NULL,
  `Coordinates` varchar(128) NOT NULL,
  `ReqDate` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rescue`
--

INSERT INTO `rescue` (`Rescue_id`, `Name`, `ContactNum`, `animal`, `Details`, `Coordinates`, `ReqDate`, `status`) VALUES
(39, 'Dean Jerick C. Igaya', '09352208378', 'Dog', 'Situation', '14.3917056,121.0515456', '2023-09-24', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `Schedule_id` int(11) NOT NULL,
  `FullN` varchar(256) NOT NULL,
  `PhoneNum` int(18) NOT NULL,
  `Sched` varchar(128) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `PetName` varchar(128) NOT NULL,
  `Breed` varchar(128) NOT NULL,
  `Color` varchar(128) NOT NULL,
  `Age` int(25) NOT NULL,
  `Gender` varchar(128) NOT NULL,
  `Message` varchar(256) NOT NULL,
  `user_id` varchar(128) NOT NULL,
  `status` varchar(124) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`Schedule_id`, `FullN`, `PhoneNum`, `Sched`, `Date`, `PetName`, `Breed`, `Color`, `Age`, `Gender`, `Message`, `user_id`, `status`) VALUES
(41, 'Dean Jerick C. Igaya', 2147483647, 'Anti-rabies Vaccination', '2023-09-24', 'Cleo', 'Aspin', 'Brown', 1, 'Male', 'Test note', '47', 'Pending'),
(42, 'Randel T. Valimento', 2147483647, 'Castration', '2023-09-24', 'Martha', 'Aspin', 'Black', 2, 'Male', 'Sample details', '48', 'Pending'),
(43, 'Dean Jerick C. Igaya', 2147483647, 'Anti-rabies Vaccination', '2023-09-24', 'Candace', 'Persian', 'Orange', 1, 'Male', 'Note', '47', 'Pending'),
(44, 'Dean Jerick C. Igaya', 2147483647, 'Anti-rabies Vaccination', '2023-09-24', 'Bobby', 'Bulldog', 'Black and White', 2, 'Male', 'Note sample', '47', 'Pending'),
(45, 'April Joy R. Sablayan', 2147483647, 'Anti-rabies Vaccination', '2023-09-24', 'Jackie', 'Poodle', 'White', 1, 'Female', 'Test note\r\n', '49', 'Pending'),
(46, 'April Joy R. Sablayan', 2147483647, 'Anti-rabies Vaccination', '2023-09-24', 'Lui', 'Chow', 'Brown', 2, 'Male', 'Testing', '49', 'Pending'),
(47, 'Randel T. Valimento', 2147483647, 'Anti-rabies Vaccination', '2023-09-24', 'Mico', 'Husky', 'Black', 2, 'Male', 'Sample', '48', 'Pending'),
(48, 'Randel T. Valimento', 2147483647, 'Anti-rabies Vaccination', '2023-09-24', 'Cassy', 'Aspin', 'White', 2, 'Female', 'Notes', '48', 'Pending'),
(49, 'Randel T. Valimento', 2147483647, 'Castration', '2023-09-24', 'Carlo', 'Aspin', 'Black', 1, 'Male', 'Test note', '48', 'Pending'),
(50, 'Randel T. Valimento', 2147483647, 'Castration', '2023-09-24', 'Danny', 'Persian', 'Brown', 2, 'Female', 'Test note', '48', 'Pending');

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
(47, 'deanigaya@gmail.com', '$2y$10$xPn29ToHFTjeekKGOxSYC.Zi3q/AzPiCY9/wppNFn.YJvqk7hjGOi', 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', '09352218378', '2023-09-24'),
(48, 'valimento2002@gmail.com', '$2y$10$RdE4sdfFLdSEQ4FiI.V.ReASEDwnhtrie7bLtM20Tcalmb7EGc3fG', 'Randel T. Valimento', 'Santa Barbara, Baliwag, Bulacan', '09157139465', '2023-09-24'),
(49, 'apriljoy@gmail.com', '$2y$10$dI2I5KO.plM6AD6YBpfcEOGHi.7XS.hPc/HF0EsJVK.zO2lFPS/Ca', 'April Joy R. Sablayan', 'Concepcion, Baliwag, Bulacan', '09147852349', '2023-09-24');

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
  MODIFY `AdoptReq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `catch`
--
ALTER TABLE `catch`
  MODIFY `DogCatch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `Dog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `dogs_pound`
--
ALTER TABLE `dogs_pound`
  MODIFY `DPoundID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `EventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `insemination`
--
ALTER TABLE `insemination`
  MODIFY `Insemination_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `rescue`
--
ALTER TABLE `rescue`
  MODIFY `Rescue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `Schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
