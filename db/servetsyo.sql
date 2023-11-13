-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2023 at 12:11 PM
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
(50, 'Cedric@gmail', '$2y$10$TVrtwR6Cwwf0cjuJqZtCDe9G74Cb24oV21wj7vbvhz7fCfmo5mhMG', 'Cedric', 'Aldama sta barbara baliuag bulacan', '09511234567', '2023-09-29', 'user'),
(59, 'jab.sablay@gmail.com', '$2y$10$tbk5eVaf0vcvAlMmJ56baOxaamgVJp5VHrefNsLGDngQaWsiFraIm', 'Julian', 'Bahay', '09552157558', '2023-10-23', 'user'),
(60, 'rhianeobenita88@gmail.com', '$2y$10$epUFzk7Rd/ynPkWy7pkSS.ps4fg5O1Rva0ZO8lCQqDkZF.ruafGny', 'Rhiane Kherdy Cirillo Obenita', '0248, Maligaya St Bagong Nayon Baliwag Bulacan', '09948748694', '2023-10-23', 'user'),
(61, 'aprilsablayan@gmail.com', '$2y$10$sORzGdTAeqfbnKM/H1dUtuYhN8HEibYopeWda5ODQ0Dk3R77JNv8K', 'APRIL JOY SABLAYAN', 'Sulivan Baliwag', '09466145983', '2023-10-25', 'user'),
(62, 'deanjerick@gmail.com', '$2y$10$AWEO7VW2Jahnos5djg9yJedX.zHz977Gg2i6Oczb36/TiE4TMzcqC', 'Dean Jerick C. Igaya', '115, Pagala, Baliwag, Bulacan', '09875786758', '2023-10-26', 'user'),
(63, 'charlesdelacruzqt@gmail.com', '$2y$10$5uLjhp3a2.8mVN1szgWGiODWjGEoOWs0ga8KsEuQiJRzfXqEjBcvW', 'Charles', 'Sabang', '09976879268', '2023-10-26', 'user'),
(64, 'jamellapenaflor@gmail.com', '$2y$10$AkzV1jOfyWfdBwco6/h6AeVjoBwO4frK56PmImxNqFGmOIOnViMhK', 'Jamella', 'Pulilan, Bulacan', '09623933798', '2023-10-26', 'user'),
(65, 'clavetoria@gmail.com', '$2y$10$Dq3QEj45aiAjMd2KSm1pNey1TxGRpIQSq0al0/jXxTEhc86XEMVwu', 'Charity Joy', '287 Benigno Aquino Ave. Brgy. San Roque, Baliwag, Bulacan', '09612771393', '2023-10-26', 'user'),
(66, 'tintinelarin@gmail.com', '$2y$10$CyUljBPccqV/qQZ3RGTNUOQmeS256.l6X30KbRdyRveYiBMorpPuC', 'Kristine Joy Larin', 'Baliwag Bulacan', '09397167451', '2023-10-26', 'user'),
(67, 'judyancoquiaolivo@gmail.com', '$2y$10$kWHrRsH.JArdNFAbcyNseOKhxmTiIt3kD0VlqbN78ub1CMRMwxkoC', 'JUDY ANN OLIVO', 'PULILAN', '09632546739', '2023-10-26', 'user'),
(68, 'judyanncoquiaolivo@gmail.com', '$2y$10$LbE/usnRvEKPSg0R573e1u8ajVJfBoGJ3eMNOr7yHZJ1EbAq/EuEW', 'JUDY ANN OLIVO', 'PULILAN', '09632546739', '2023-10-26', 'user'),
(69, 'ariellabuson70@gmail.com', '$2y$10$DSigaS5mfYRwgIOo4Sv.bO1GtjqLSy5Wyfr7YycOsvk81iRxvpVqC', 'Ariel Labuson ', 'Pulilan Bulacan', '09451570794', '2023-10-26', 'user'),
(70, 'valimentorandelt@gmail.com', '$2y$10$bz0k0H2BPs8qus0ZCzYHq.PMi51QLPSRCEhpBPElsHN6ecz8wNa5m', 'Randel', 'Valimento', '09472316679', '2023-10-27', 'user'),
(71, 'sablayanapriljoy@gmail.com', '$2y$10$p/lvMiZuBlhuUDV7J6dYtuz1EsLXS319ZUyU30UutyJTcK3f1lUR.', 'April Joy Sablayan', 'Sulivan , Baliwag', '09466145983', '2023-10-27', 'user'),
(72, 'randel03@gmail.com', '$2y$10$.epLuc67cDvUT78bXAvna.RbvW9HQMuY4KZTwpNdPuqQ/qZ9JZfI2', 'Randel T. Valimento', 'Pagala, Baliwag, Bulacan', '09268391672', '2023-10-27', 'user'),
(73, 'april19@gmail.com', '$2y$10$wD6o944RRPrDy/qp0xa54.kRbFn6iEJTYTJkcXp8T9OkXibgTFUuu', 'April Joy R. Sablayan', '', '09124578931', '2023-10-27', 'Barangay'),
(74, 'randel03@gmail.com', '$2y$10$zNdFugSQUY.m51GNQym1WemchAJdSsUPLkEoCFywIZSKfO395qYH2', 'Randel T. Valimento', '', '09124578963', '2023-10-27', 'Barangay'),
(75, 'del03@gmail.com', '$2y$10$cjvGq.swzU/LA.X1F6jq2u6imXkXfYvEA7zVfps.K2q3HTnnjdU.2', 'Randel T. Valimento', '', '09124578963', '2023-10-27', 'Barangay'),
(76, 'dean18@gmail.com', '$2y$10$Zg3R2TcbdxPGd34m2KSiYeVMoE67QsH5V3bM9wYLDg/HtkZpnpCXy', 'Dean Jerick C. Igaya', '', '09745896124', '2023-10-27', 'Barangay'),
(77, 'randelval@gmail.com', '$2y$10$pRv2m68iHzx5DZKypye5QO0Dh6i6fbZF5cRQIFPQLT4OG7r3WLWdK', 'Randel T. Valimento', 'Piel, Baliwag, Bulacan', '09374859123', '2023-10-27', 'user'),
(78, 'paulo.victoria@bpc.edu.ph', '$2y$10$UxBLBbpj7ILf8rhKRpBC..t4rZTSHwEeRzx5DI2CjnNAimKZmwO1C', 'Paulo Victoria', 'Malolos Bulacan', '09321292312', '2023-10-27', 'user');

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
  MODIFY `dog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
