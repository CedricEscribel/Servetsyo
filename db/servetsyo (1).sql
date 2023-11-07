-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 11:12 AM
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

--
-- Dumping data for table `adoptionrequest`
--

INSERT INTO `adoptionrequest` (`AdoptReq_id`, `Fullname`, `Address`, `Email`, `PhoneNum`, `Interview`, `Date`, `status`, `Dog_id`, `DateReq`, `user_id`, `SetDate`) VALUES
(84, 'Cedric Escribel', 'Aldama sta barbara baliuag bulacan', 'Cedric@gmail.com', '09511234567', 'Yes', '2023-11-17', 'Pending', '20', '2023-11-04', '50', '2023-11-07'),
(85, 'Cedric', 'Aldama sta barbara baliuag bulacan', 'Cedric@gmail', '09511234567', 'Yes', '2023-11-18', 'Pending', '20', '2023-11-04', '50', '2023-11-08'),
(86, 'Cedric', 'Aldama sta barbara baliuag bulacan', 'Cedric@gmail', '09511234567', 'Yes', '2023-11-17', 'Pending', '20', '2023-11-04', '50', '2023-11-30');

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
  `SetDate` varchar(123) NOT NULL,
  `status` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catch`
--

INSERT INTO `catch` (`DogCatch_id`, `BarangayID`, `Fullname`, `ContNum`, `DogCount`, `Notes`, `ReqDate`, `SetDate`, `status`) VALUES
(65, 'Calantipay', '', '09352218378', 13, 'Notes', '2023-09-28', '2023-11-08', 'Pending'),
(66, 'Pagala', '', '09352218378', 15, 'Test note', '2023-09-28', '2023-11-08', 'Pending'),
(67, 'Concepcion', '', '09352218378', 12, 'Notes', '2023-09-28', '', 'Pending'),
(68, 'Piel', '', '09352218378', 16, 'Notes test', '2023-09-28', '', 'Pending'),
(69, 'Piel', '', '09352218378', 11, 'Notes', '2023-09-28', '', 'Pending'),
(70, 'Makinabang', '', '09352218378', 10, 'Sample notes', '2023-09-28', '', 'Pending'),
(71, 'Paitan', '', '09352218378', 13, 'Testing notes', '2023-09-28', '', 'Pending'),
(72, 'Catulinan', '', '09352218378', 12, 'Notes sample', '2023-09-28', '', 'Pending'),
(73, 'Hinukay', '', '09352218378', 13, 'Sample test', '2023-09-28', '', 'Pending'),
(74, 'Hinukay', '', '09352218378', 12, 'Notes sample test', '2023-09-28', '', 'Pending'),
(75, 'Matangtubig', '', '09352218378', 10, 'Notes test', '2023-09-28', '', 'Pending'),
(76, 'Concepcion', '', '09352218378', 10, 'Notes test', '2023-09-28', '', 'Pending'),
(77, 'Catulinan', '', '09352218378', 10, 'Sample note', '2023-09-28', '', 'Pending'),
(78, 'Hinukay', '', '09352218378', 13, 'Sample', '2023-09-28', '', 'Pending'),
(79, 'Tiaong', '', '09352218378', 10, 'Notes sample', '2023-09-28', '', 'Pending'),
(80, 'Concepcion', '', '09352218378', 13, 'Notes sample test', '2023-09-28', '', 'Pending'),
(81, 'Concepcion', '', '09352218378', 10, 'Sample test', '2023-09-28', '', 'Pending'),
(82, 'Makinabang', '', '09352218378', 13, 'Testing', '2023-09-28', '', 'Pending'),
(83, 'Calantipay', '', '09352218378', 13, 'Notes testing', '2023-09-28', '', 'Pending'),
(84, 'Concepcion', '', '09352218378', 10, 'Sample notes', '2023-09-28', '', 'Pending'),
(85, 'Catulinan', '', '09352218378', 10, 'Notes sample', '2023-09-28', '', 'Pending'),
(86, 'Catulinan', '', '09352218378', 13, 'Test', '2023-09-28', '', 'Pending'),
(87, 'Hinukay', '', '09352218378', 10, 'Notes sample', '2023-09-28', '', 'Pending'),
(88, 'Catulinan', '', '09352218378', 12, 'Notes test', '2023-09-28', '', 'Pending'),
(89, 'Makinabang', '', '09352218378', 13, 'Testing note', '2023-09-28', '', 'Pending'),
(90, 'Santo Cristo', '', '', 12, 'try changing select to value', '2023-10-05', '', 'Pending');

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
(23, 'sample', '12', 'Female', '2023-10-31', 'San Roque', 'sample', '6548f344493e6.jpg', 'Pound');

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

--
-- Dumping data for table `insemination`
--

INSERT INTO `insemination` (`Insemination_ID`, `Name`, `ContNum`, `Animal`, `Coordinates`, `Details`, `ReqDate`, `status`, `user_id`, `SetDate`) VALUES
(110, 'Cedric', '09511234567', '', '14.9464387,120.8843322', '', '2023-11-04', 'Pending', '50', '2023-11-08'),
(111, 'Cedric D Escribel', '09512334567', '', '14.9464387,120.8843322', 'goat insemination', '2023-11-06', 'Pending', '62', '2023-11-15'),
(112, 'Cedric D Escribel', '09512334567', '', '14.9464387,120.8843322', '', '2023-11-06', 'Pending', '62', ''),
(113, 'Cedric D Escribel', '09512334567', 'Cow', '14.9464387,120.8843322', '', '2023-11-06', 'Pending', '62', ''),
(114, 'Cedric D Escribel', '09512334567', 'other', '14.9464387,120.8843322', '', '2023-11-06', 'Pending', '62', ''),
(115, 'Cedric D Escribel', '09512334567', 'other', '14.9464387,120.8843322', '', '2023-11-06', 'Pending', '62', ''),
(116, 'Cedric D Escribel', '09512334567', 'Carabao', '14.9464387,120.8843322', '', '2023-11-06', 'Pending', '62', ''),
(117, 'Cedric D Escribel', '09512334567', 'dragon', '14.9464387,120.8843322', '', '2023-11-06', 'Pending', '62', '');

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
(98, 's', '22222222222', '', 's', '14.9464387,120.8843322', '2023-11-06', 'Pending'),
(99, '2', '22222222222', 'doga', 'd', '14.9464387,120.8843322', '2023-11-06', 'Pending'),
(100, 'dsa', '22222222222', 'Dog', 'd', '14.9464387,120.8843322', '2023-11-06', 'Pending');

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
  `Animal` varchar(123) NOT NULL,
  `Breed` varchar(128) NOT NULL,
  `Color` varchar(128) NOT NULL,
  `Age` int(25) NOT NULL,
  `Gender` varchar(128) NOT NULL,
  `Message` varchar(256) NOT NULL,
  `user_id` varchar(128) NOT NULL,
  `status` varchar(124) NOT NULL,
  `SetDate` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`Schedule_id`, `FullN`, `PhoneNum`, `Sched`, `Date`, `PetName`, `Animal`, `Breed`, `Color`, `Age`, `Gender`, `Message`, `user_id`, `status`, `SetDate`) VALUES
(113, 'Cedric', '09512334567', 'Anti-rabies Vaccination', '2023-11-06', 'sample', '', 'sample', 'sample', 1, 'Male', 'sample', '62', 'Pending', '2023-11-07'),
(114, 'Cedric D Escribel', '09512334567', '', '2023-11-06', 's', '', 's', 's', 2, 'Male', '', '62', 'Pending', ''),
(115, 'Cedric D Escribel', '09512334567', 'sample', '2023-11-06', 'sample', 's', 'sample', 'sample', 2, 'Female', '', '62', 'Pending', '');

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
(62, 'Cedric@gmail', '$2y$10$hvcbNpDX/tpmjAtHc1XtseGN/dAySg4Cg9VjDJv.8OmzPeCyENuYG', 'Cedric D Escribel', 'Baliuag Bulacan', '09512334567', '2023-11-06', 'user'),
(63, 'Barangay@bal', '$2y$10$qlomSIhCy4i7v9GFVPtsLuEBUJlEbNt3mm87iOITb3vo9gYmd7E2K', 'Barangay', '', '11111111111', '2023-11-07', 'Barangay');

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
  MODIFY `AdoptReq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `catch`
--
ALTER TABLE `catch`
  MODIFY `DogCatch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `dogs_info`
--
ALTER TABLE `dogs_info`
  MODIFY `dog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `EventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `insemination`
--
ALTER TABLE `insemination`
  MODIFY `Insemination_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `rescue`
--
ALTER TABLE `rescue`
  MODIFY `Rescue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `Schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
