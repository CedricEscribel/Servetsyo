-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 03:47 PM
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
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `admin_id` int(11) NOT NULL,
  `Username` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `User_type` varchar(12) NOT NULL,
  `Fullname` varchar(123) NOT NULL,
  `Position` varchar(123) NOT NULL,
  `createdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`admin_id`, `Username`, `Password`, `User_type`, `Fullname`, `Position`, `createdate`) VALUES
(3, 'Admin', '$2y$10$O1Phz/CQ4U.LKi3aacFyYeNgKb5LndWbcX.ny5pEc8bNcyUXPQkVu', 'SuperAdmin', '', '', '2023-10-17'),
(5, 'Cedric', '$2y$10$uc96IXVZytWwUFAB2kNYBesIrxqPKXaw8mbbWNka9SgfQyTZ3w8Ly', 'Admin', 'Cedric', 'admin', '2023-10-17'),
(8, 'dean', '$2y$10$PJ6Q4Mz8F3yfaNsYCyKZIOIhZzep2HxW22i4N/H/vYuElAHTOqgPO', 'Admin', 'dean', 'dean', '2023-10-17'),
(9, 'randel', '$2y$10$FE9bM6BIEszmNo/Kt6.1qOEq1w3Rv005plh1b.vwwmOorwLR12THm', 'Barangay', 'randel', 'barangay', '2023-10-17');

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
  `DateReq` date NOT NULL DEFAULT current_timestamp(),
  `user_id` varchar(15) NOT NULL,
  `SetDate` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catch`
--

CREATE TABLE `catch` (
  `DogCatch_id` int(11) NOT NULL,
  `BarangayID` varchar(128) NOT NULL,
  `Fullname` varchar(125) NOT NULL,
  `ContNum` varchar(13) NOT NULL,
  `DogCount` int(25) NOT NULL,
  `Notes` varchar(258) NOT NULL,
  `ReqDate` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catch`
--

INSERT INTO `catch` (`DogCatch_id`, `BarangayID`, `Fullname`, `ContNum`, `DogCount`, `Notes`, `ReqDate`, `status`) VALUES
(65, 'Calantipay', '', '09352218378', 13, 'Notes', '2023-09-28', 'Pending'),
(66, 'Pagala', '', '09352218378', 15, 'Test note', '2023-09-28', 'Pending'),
(67, 'Concepcion', '', '09352218378', 12, 'Notes', '2023-09-28', 'Pending'),
(68, 'Piel', '', '09352218378', 16, 'Notes test', '2023-09-28', 'Pending'),
(69, 'Piel', '', '09352218378', 11, 'Notes', '2023-09-28', 'Pending'),
(70, 'Makinabang', '', '09352218378', 10, 'Sample notes', '2023-09-28', 'Pending'),
(71, 'Paitan', '', '09352218378', 13, 'Testing notes', '2023-09-28', 'Pending'),
(72, 'Catulinan', '', '09352218378', 12, 'Notes sample', '2023-09-28', 'Pending'),
(73, 'Hinukay', '', '09352218378', 13, 'Sample test', '2023-09-28', 'Pending'),
(74, 'Hinukay', '', '09352218378', 12, 'Notes sample test', '2023-09-28', 'Pending'),
(75, 'Matangtubig', '', '09352218378', 10, 'Notes test', '2023-09-28', 'Pending'),
(76, 'Concepcion', '', '09352218378', 10, 'Notes test', '2023-09-28', 'Pending'),
(77, 'Catulinan', '', '09352218378', 10, 'Sample note', '2023-09-28', 'Pending'),
(78, 'Hinukay', '', '09352218378', 13, 'Sample', '2023-09-28', 'Pending'),
(79, 'Tiaong', '', '09352218378', 10, 'Notes sample', '2023-09-28', 'Pending'),
(80, 'Concepcion', '', '09352218378', 13, 'Notes sample test', '2023-09-28', 'Pending'),
(81, 'Concepcion', '', '09352218378', 10, 'Sample test', '2023-09-28', 'Pending'),
(82, 'Makinabang', '', '09352218378', 13, 'Testing', '2023-09-28', 'Pending'),
(83, 'Calantipay', '', '09352218378', 13, 'Notes testing', '2023-09-28', 'Pending'),
(84, 'Concepcion', '', '09352218378', 10, 'Sample notes', '2023-09-28', 'Pending'),
(85, 'Catulinan', '', '09352218378', 10, 'Notes sample', '2023-09-28', 'Pending'),
(86, 'Catulinan', '', '09352218378', 13, 'Test', '2023-09-28', 'Pending'),
(87, 'Hinukay', '', '09352218378', 10, 'Notes sample', '2023-09-28', 'Pending'),
(88, 'Catulinan', '', '09352218378', 12, 'Notes test', '2023-09-28', 'Pending'),
(89, 'Makinabang', '', '09352218378', 13, 'Testing note', '2023-09-28', 'Pending'),
(90, 'Santo Cristo', '', '', 12, 'try changing select to value', '2023-10-05', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `dogs_info`
--

CREATE TABLE `dogs_info` (
  `dog_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `age` varchar(128) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `rescue_loc` varchar(122) NOT NULL,
  `dog_info` varchar(255) NOT NULL,
  `image` varchar(258) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dogs_info`
--

INSERT INTO `dogs_info` (`dog_id`, `description`, `age`, `gender`, `date`, `rescue_loc`, `dog_info`, `image`, `status`) VALUES
(20, 'dog cute', '21', 'Male', '2023-10-21', 'Calantipay', 'dog cute', '6533579badb54.jpg', 'Adoption');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `EventId` int(11) NOT NULL,
  `EventName` varchar(256) NOT NULL,
  `Details` varchar(512) NOT NULL,
  `image` varchar(258) NOT NULL,
  `Dates` varchar(258) NOT NULL,
  `Expired_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`EventId`, `EventName`, `Details`, `image`, `Dates`, `Expired_date`) VALUES
(31, 'sample', 'sa', '653525318ec91.jpg', '2023-10-22', '2023-10-23');

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
  `user_id` varchar(11) NOT NULL,
  `SetDate` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `Schedule_id` int(11) NOT NULL,
  `FullN` varchar(256) NOT NULL,
  `PhoneNum` varchar(18) NOT NULL,
  `Sched` varchar(128) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `PetName` varchar(128) NOT NULL,
  `Breed` varchar(128) NOT NULL,
  `Color` varchar(128) NOT NULL,
  `Age` int(25) NOT NULL,
  `Gender` varchar(128) NOT NULL,
  `Message` varchar(256) NOT NULL,
  `user_id` varchar(128) NOT NULL,
  `status` varchar(124) NOT NULL,
  `SetDate` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `CreateDate` date NOT NULL DEFAULT current_timestamp(),
  `RoleType` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `Email`, `Password`, `Fullname`, `Address`, `PhoneNum`, `CreateDate`, `RoleType`) VALUES
(47, 'deanigaya@gmail.com', '$2y$10$xPn29ToHFTjeekKGOxSYC.Zi3q/AzPiCY9/wppNFn.YJvqk7hjGOi', 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', '09352218378', '2023-09-24', ''),
(48, 'valimento2002@gmail.com', '$2y$10$RdE4sdfFLdSEQ4FiI.V.ReASEDwnhtrie7bLtM20Tcalmb7EGc3fG', 'Randel T. Valimento', 'Santa Barbara, Baliwag, Bulacan', '09157139465', '2023-09-24', ''),
(49, 'apriljoy@gmail.com', '$2y$10$dI2I5KO.plM6AD6YBpfcEOGHi.7XS.hPc/HF0EsJVK.zO2lFPS/Ca', 'April Joy R. Sablayan', 'Concepcion, Baliwag, Bulacan', '09147852349', '2023-09-24', ''),
(50, 'Cedric@gmail', '$2y$10$TVrtwR6Cwwf0cjuJqZtCDe9G74Cb24oV21wj7vbvhz7fCfmo5mhMG', 'Cedric', 'Aldama sta barbara baliuag bulacan', '09511234567', '2023-09-29', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`admin_id`);

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
-- Indexes for table `dogs_info`
--
ALTER TABLE `dogs_info`
  ADD PRIMARY KEY (`dog_id`);

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
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `adoptionrequest`
--
ALTER TABLE `adoptionrequest`
  MODIFY `AdoptReq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `catch`
--
ALTER TABLE `catch`
  MODIFY `DogCatch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `dogs_info`
--
ALTER TABLE `dogs_info`
  MODIFY `dog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `EventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `insemination`
--
ALTER TABLE `insemination`
  MODIFY `Insemination_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `rescue`
--
ALTER TABLE `rescue`
  MODIFY `Rescue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `Schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
