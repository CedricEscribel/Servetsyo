-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 02:19 PM
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
(22, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-09-25', 'Approve', '64', '2023-09-24'),
(24, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-09-25', 'Pending', '69', '2023-09-24'),
(25, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-09-27', 'Pending', '72', '2023-09-24'),
(26, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'No', '2023-09-30', 'Pending', '71', '2023-09-24'),
(27, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-09-29', 'Pending', '75', '2023-09-24'),
(28, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-09-28', 'Pending', '70', '2023-09-24'),
(29, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-09-28', 'Pending', '74', '2023-09-24'),
(33, 'April Joy R. Sablayan', 'Concepcion, Baliwag, Bulacan', 'apriljoy@gmail.com', '09147852349', 'Yes', '2023-09-30', 'Pending', '83', '2023-09-28'),
(34, 'April Joy R. Sablayan', 'Concepcion, Baliwag, Bulacan', 'apriljoy@gmail.com', '09147852349', 'No', '2023-10-04', 'Pending', '79', '2023-09-28'),
(35, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-10-07', 'Pending', '79', '2023-09-28'),
(36, 'Randel T. Valimento', 'Santa Barbara, Baliwag, Bulacan', 'valimento2002@gmail.com', '09157139465', 'Yes', '2023-09-29', 'Pending', '84', '2023-09-28'),
(37, 'Randel T. Valimento', 'Santa Barbara, Baliwag, Bulacan', 'valimento2002@gmail.com', '09157139465', 'Yes', '2023-09-30', 'Pending', '83', '2023-09-28'),
(38, 'April Joy R. Sablayan', 'Concepcion, Baliwag, Bulacan', 'apriljoy@gmail.com', '09147852349', 'Yes', '2023-10-07', 'Pending', '79', '2023-09-28'),
(39, 'April Joy R. Sablayan', 'Concepcion, Baliwag, Bulacan', 'apriljoy@gmail.com', '09147852349', 'No', '2023-09-30', 'Pending', '79', '2023-09-28'),
(40, 'April Joy R. Sablayan', 'Concepcion, Baliwag, Bulacan', 'apriljoy@gmail.com', '09147852349', 'Yes', '2023-09-30', 'Pending', '84', '2023-09-28'),
(41, 'April Joy R. Sablayan', 'Concepcion, Baliwag, Bulacan', 'apriljoy@gmail.com', '09147852349', 'Yes', '2023-10-06', 'Pending', '83', '2023-09-28'),
(42, 'Randel T. Valimento', 'Santa Barbara, Baliwag, Bulacan', 'valimento2002@gmail.com', '09157139465', 'No', '2023-10-03', 'Pending', '74', '2023-09-28'),
(43, 'Randel T. Valimento', 'Santa Barbara, Baliwag, Bulacan', 'valimento2002@gmail.com', '09157139465', 'Yes', '2023-10-06', 'Pending', '82', '2023-09-28'),
(44, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-10-05', 'Pending', '80', '2023-09-28'),
(45, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-10-04', 'Pending', '83', '2023-09-28'),
(46, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-10-07', 'Pending', '74', '2023-09-28'),
(47, 'April Joy R. Sablayan', 'Concepcion, Baliwag, Bulacan', 'apriljoy@gmail.com', '09147852349', 'Yes', '2023-09-29', 'Pending', '72', '2023-09-28'),
(48, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-09-27', 'Pending', '80', '2023-09-28'),
(49, 'Randel T. Valimento', 'Santa Barbara, Baliwag, Bulacan', 'valimento2002@gmail.com', '09157139465', 'Yes', '2023-10-06', 'Pending', '80', '2023-09-28'),
(50, 'Randel T. Valimento', 'Santa Barbara, Baliwag, Bulacan', 'valimento2002@gmail.com', '09157139465', 'Yes', '2023-09-29', 'Pending', '84', '2023-09-28'),
(51, 'Randel T. Valimento', 'Santa Barbara, Baliwag, Bulacan', 'valimento2002@gmail.com', '09157139465', 'Yes', '2023-09-30', 'Pending', '74', '2023-09-28'),
(52, 'Randel T. Valimento', 'Santa Barbara, Baliwag, Bulacan', 'valimento2002@gmail.com', '09157139465', 'Yes', '2023-09-30', 'Pending', '80', '2023-09-28'),
(53, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-09-30', 'Pending', '82', '2023-09-28'),
(54, 'April Joy R. Sablayan', 'Concepcion, Baliwag, Bulacan', 'apriljoy@gmail.com', '09147852349', 'No', '2023-09-29', 'Pending', '82', '2023-09-28'),
(55, 'April Joy R. Sablayan', 'Concepcion, Baliwag, Bulacan', 'apriljoy@gmail.com', '09147852349', 'Yes', '2023-09-30', 'Pending', '71', '2023-09-28'),
(56, 'April Joy R. Sablayan', 'Concepcion, Baliwag, Bulacan', 'apriljoy@gmail.com', '09147852349', 'Yes', '2023-09-30', 'Pending', '78', '2023-09-28'),
(57, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-10-03', 'Pending', '82', '2023-09-28'),
(58, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-10-04', 'Pending', '84', '2023-09-28'),
(59, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-10-04', 'Pending', '72', '2023-09-28'),
(60, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-10-04', 'Pending', '74', '2023-09-28'),
(61, 'Randel T. Valimento', 'Santa Barbara, Baliwag, Bulacan', 'valimento2002@gmail.com', '09157139465', 'Yes', '2023-09-29', 'Pending', '79', '2023-09-28'),
(62, 'Randel T. Valimento', 'Santa Barbara, Baliwag, Bulacan', 'valimento2002@gmail.com', '09157139465', 'Yes', '2023-09-30', 'Pending', '84', '2023-09-28'),
(63, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', '', '2023-09-29', 'Pending', '72', '2023-09-28'),
(64, 'April Joy R. Sablayan', 'Concepcion, Baliwag, Bulacan', 'apriljoy@gmail.com', '09147852349', 'Yes', '2023-09-30', 'Pending', '80', '2023-09-28'),
(65, 'April Joy R. Sablayan', 'Concepcion, Baliwag, Bulacan', 'apriljoy@gmail.com', '09147852349', 'Yes', '2023-09-29', 'Pending', '80', '2023-09-28'),
(66, 'April Joy R. Sablayan', 'Concepcion, Baliwag, Bulacan', 'apriljoy@gmail.com', '09147852349', 'Yes', '2023-10-06', 'Pending', '72', '2023-09-28'),
(67, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-10-04', 'Pending', '82', '2023-09-28'),
(68, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'No', '2023-10-04', 'Pending', '84', '2023-09-28'),
(69, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-10-04', 'Pending', '80', '2023-09-28'),
(70, 'Randel T. Valimento', 'Santa Barbara, Baliwag, Bulacan', 'valimento2002@gmail.com', '09157139465', 'Yes', '2023-10-05', 'Pending', '84', '2023-09-28'),
(71, 'Randel T. Valimento', 'Santa Barbara, Baliwag, Bulacan', 'valimento2002@gmail.com', '09157139465', 'Yes', '2023-09-29', 'Pending', '79', '2023-09-28'),
(72, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-10-05', 'Pending', '79', '2023-09-28'),
(73, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'No', '2023-10-06', 'Pending', '72', '2023-09-28'),
(74, 'Randel T. Valimento', 'Santa Barbara, Baliwag, Bulacan', 'valimento2002@gmail.com', '09157139465', 'No', '2023-10-04', 'Pending', '80', '2023-09-28'),
(75, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-10-04', 'Pending', '79', '2023-09-28'),
(76, 'April Joy R. Sablayan', 'Concepcion, Baliwag, Bulacan', 'apriljoy@gmail.com', '09147852349', 'Yes', '2023-10-05', 'Pending', '79', '2023-09-28'),
(77, 'April Joy R. Sablayan', 'Concepcion, Baliwag, Bulacan', 'apriljoy@gmail.com', '09147852349', 'Yes', '2023-09-30', 'Pending', '72', '2023-09-28'),
(78, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-10-07', 'Pending', '82', '2023-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `catch`
--

CREATE TABLE `catch` (
  `DogCatch_id` int(11) NOT NULL,
  `BarangayID` varchar(128) NOT NULL,
  `ContNum` varchar(13) NOT NULL,
  `DogCount` int(25) NOT NULL,
  `Notes` varchar(258) NOT NULL,
  `ReqDate` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catch`
--

INSERT INTO `catch` (`DogCatch_id`, `BarangayID`, `ContNum`, `DogCount`, `Notes`, `ReqDate`, `status`) VALUES
(40, 'Bagong Nayon', '09352218378', 12, 'Sample notes', '2023-09-28', 'Pending'),
(41, 'San Jose', '09147852349', 15, 'Sample notes', '2023-09-28', 'Pending'),
(42, 'Barangca', '09352218378', 14, 'Notes', '2023-09-28', 'Pending'),
(43, 'San Jose', '09157139465', 14, 'Notes', '2023-09-28', 'Pending'),
(44, 'Hinukay', '09147852349', 14, 'Sample notes', '2023-09-28', 'Pending'),
(45, 'Calantipay', '09352218378', 13, 'Example notes', '2023-09-28', 'Pending'),
(46, 'Poblacion', '09352218378', 10, 'Notes sample', '2023-09-28', 'Pending'),
(47, 'Poblacion', '09157139465', 12, 'Testing', '2023-09-28', 'Pending'),
(48, 'Pinagbarilan', '09147852349', 11, 'Testing notes', '2023-09-28', 'Pending'),
(49, 'Poblacion', '09147852349', 14, 'Testing request', '2023-09-28', 'Pending'),
(50, 'Catulinan', '09352218378', 13, 'Testing for request', '2023-09-28', 'Pending'),
(51, 'Bagong Nayon', '09352218378', 15, 'Test request', '2023-09-28', 'Pending'),
(52, 'Concepcion', '09352218378', 13, 'Testing', '2023-09-28', 'Pending'),
(53, 'Santo Cristo', '09352218378', 15, 'Test', '2023-09-28', 'Pending'),
(54, 'Santo Cristo', '09352218378', 15, 'Notes sample', '2023-09-28', 'Pending'),
(55, 'Paitan', '09352218378', 13, 'Sample test', '2023-09-28', 'Pending'),
(56, 'Santa Barbara', '09352218378', 12, 'Sample notes', '2023-09-28', 'Pending'),
(57, 'Tibag', '09352218378', 9, 'Sample notes test', '2023-09-28', 'Pending'),
(58, 'Santo Cristo', '09352218378', 13, 'Testing', '2023-09-28', 'Pending'),
(59, 'Paitan', '09352218378', 14, 'Test note', '2023-09-28', 'Pending'),
(60, 'Santo Niño', '09352218378', 15, 'Notes test', '2023-09-28', 'Pending'),
(61, 'Piel', '09352218378', 12, 'Notes testing', '2023-09-28', 'Pending'),
(62, 'Santa Barbara', '09352218378', 10, 'Testing note', '2023-09-28', 'Pending'),
(63, 'Santo Niño', '09352218378', 12, 'Note testing', '2023-09-28', 'Pending'),
(64, 'Matangtubig', '09352218378', 13, 'Testing', '2023-09-28', 'Pending'),
(65, 'Calantipay', '09352218378', 13, 'Notes', '2023-09-28', 'Pending'),
(66, 'Pagala', '09352218378', 15, 'Test note', '2023-09-28', 'Pending'),
(67, 'Concepcion', '09352218378', 12, 'Notes', '2023-09-28', 'Pending'),
(68, 'Piel', '09352218378', 16, 'Notes test', '2023-09-28', 'Pending'),
(69, 'Piel', '09352218378', 11, 'Notes', '2023-09-28', 'Pending'),
(70, 'Makinabang', '09352218378', 10, 'Sample notes', '2023-09-28', 'Pending'),
(71, 'Paitan', '09352218378', 13, 'Testing notes', '2023-09-28', 'Pending'),
(72, 'Catulinan', '09352218378', 12, 'Notes sample', '2023-09-28', 'Pending'),
(73, 'Hinukay', '09352218378', 13, 'Sample test', '2023-09-28', 'Pending'),
(74, 'Hinukay', '09352218378', 12, 'Notes sample test', '2023-09-28', 'Pending'),
(75, 'Matangtubig', '09352218378', 10, 'Notes test', '2023-09-28', 'Pending'),
(76, 'Concepcion', '09352218378', 10, 'Notes test', '2023-09-28', 'Pending'),
(77, 'Catulinan', '09352218378', 10, 'Sample note', '2023-09-28', 'Pending'),
(78, 'Hinukay', '09352218378', 13, 'Sample', '2023-09-28', 'Pending'),
(79, 'Tiaong', '09352218378', 10, 'Notes sample', '2023-09-28', 'Pending'),
(80, 'Concepcion', '09352218378', 13, 'Notes sample test', '2023-09-28', 'Pending'),
(81, 'Concepcion', '09352218378', 10, 'Sample test', '2023-09-28', 'Pending'),
(82, 'Makinabang', '09352218378', 13, 'Testing', '2023-09-28', 'Pending'),
(83, 'Calantipay', '09352218378', 13, 'Notes testing', '2023-09-28', 'Pending'),
(84, 'Concepcion', '09352218378', 10, 'Sample notes', '2023-09-28', 'Pending'),
(85, 'Catulinan', '09352218378', 10, 'Notes sample', '2023-09-28', 'Pending'),
(86, 'Catulinan', '09352218378', 13, 'Test', '2023-09-28', 'Pending'),
(87, 'Hinukay', '09352218378', 10, 'Notes sample', '2023-09-28', 'Pending'),
(88, 'Catulinan', '09352218378', 12, 'Notes test', '2023-09-28', 'Pending'),
(89, 'Makinabang', '09352218378', 13, 'Testing note', '2023-09-28', 'Pending');

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
(70, 'Loves to eat and play', 'Browny', 2, 'Male', '6510545a9e98a.jpg'),
(71, 'Cute dog', 'Mico', 1, 'Male', '65105477085c2.jpg'),
(72, 'Shy dog', 'Bob', 1, 'Male', '65105497e1d14.jpg'),
(74, 'Lovely dog', 'Milo', 5, 'Female', '651054d135f9a.jpg'),
(75, 'Behave ', 'Steve', 4, 'Male', '651054f174d0e.jpg'),
(78, 'Playful dog', 'Maya', 5, 'Male', '651586aeeaba6.jpg'),
(79, 'Jolly dog', 'Lexi', 3, 'Male', '651586c623346.jpg'),
(80, 'Loves to play', 'Athena', 4, 'Male', '651586e09f6a4.jpg'),
(81, 'Playful dog', 'Charlie', 4, 'Male', '65158707cfc66.jpg'),
(82, 'Loves to play ball', 'Ella', 4, 'Female', '651587cedf9ae.jpg'),
(83, 'Small dog', 'Popoy', 4, 'Male', '651587eac4c55.jpg'),
(84, 'Always sleeping', 'Sky', 5, 'Female', '6515883f145cd.jpg'),
(85, 'Playful and jolly', 'Marsha', 4, 'Female', '65158864f1d9b.jpg');

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
(20, 'Whitey', '2023-09-23', '2', 'Male', 'Pagala', 'Pending'),
(21, ' Cassey', '2023-09-28', '2', 'Female', 'Pagala', 'Pending'),
(22, 'Small', '2023-09-27', '2', 'Male', 'San Jose', 'Pending'),
(23, 'Black dog', '2023-09-26', '5', 'Female', 'Makinabang', 'Pending'),
(24, 'Fluffy dog', '2023-09-26', '5', 'Male', 'Pinagbarilan', 'Pending'),
(25, 'Mico', '2023-09-19', '6', 'Male', 'Poblacion', 'Pending'),
(26, 'Big dog', '2023-09-28', '6', 'Male', 'Sabang', 'Pending'),
(27, 'Playful dog', '2023-09-28', '2', 'Female', 'Piel', 'Pending'),
(28, 'Aly', '2023-09-28', '5', 'Male', 'Catulinan', 'Pending'),
(29, 'Jolly dog', '2023-09-27', '5', 'Female', 'Hinukay', 'Pending'),
(30, 'Macky', '2023-09-27', '4', 'Male', 'Santa Barbara', 'Pending'),
(31, 'Carla', '2023-09-27', '2', 'Female', 'Poblacion', 'Pending'),
(32, 'Marky', '2023-09-27', '3', 'Male', 'Matangtubig', 'Pending'),
(33, 'Cooper', '2023-09-27', '3', 'Male', 'San Roque', 'Pending'),
(34, 'Duke', '2023-09-28', '2', 'Male', 'Paitan', 'Pending'),
(35, 'Rocky', '2023-09-28', '3', 'Male', 'Piel', 'Pending'),
(36, 'Luna', '2023-09-28', '3', 'Female', 'Pinagbarilan', 'Pending'),
(37, 'Brown dog', '2023-09-27', '2', 'Male', 'Poblacion', 'Pending'),
(38, 'Playful dog', '2023-09-28', '3', 'Female', 'Sabang', 'Pending'),
(39, 'Daisy', '2023-09-28', '3', 'Female', 'Poblacion', 'Pending'),
(40, 'Zoe', '2023-09-27', '2', 'Female', 'Sabang', 'Pending'),
(41, 'Bela', '2023-09-24', '2', 'Female', 'Hinukay', 'Pending'),
(42, 'Steph', '2023-09-28', '2', 'Female', 'Hinukay', 'Pending'),
(43, 'Max', '2023-09-28', '2', 'Male', 'Piel', 'Pending'),
(44, 'Buddy', '2023-09-28', '2', 'Male', 'Concepcion', 'Pending'),
(45, 'Leo', '2023-09-27', '3', 'Male', 'Piel', 'Pending'),
(46, 'Duke', '2023-09-27', '2', 'Male', 'Poblacion', 'Pending'),
(47, 'Jack', '2023-09-27', '2', 'Female', 'Poblacion', 'Pending'),
(48, 'Mics', '2023-09-27', '2', 'Female', 'Piel', 'Pending'),
(49, 'Wild dog', '2023-09-28', '2', 'Male', 'Paitan', 'Pending'),
(50, 'Wild dog', '2023-09-27', '4', 'Male', 'San Roque', 'Pending'),
(51, 'Jack', '2023-09-21', '3', 'Male', 'Pinagbarilan', 'Pending'),
(52, 'Oli', '2023-09-27', '3', 'Male', 'Santa Barbara', 'Pending'),
(53, 'Mack', '2023-09-27', '5', 'Male', 'Piel', 'Pending'),
(54, 'Rockie', '2023-09-27', '3', 'Female', 'San Roque', 'Pending'),
(55, 'Murphy', '2023-09-28', '2', 'Male', 'Makinabang', 'Pending'),
(56, 'Jax', '2023-09-27', '5', 'Male', 'Calantipay', 'Pending'),
(57, 'Loui', '2023-09-27', '3', 'Male', 'Hinukay', 'Pending'),
(58, 'Finn', '2023-09-27', '6', 'Male', 'Barangca', 'Pending'),
(59, 'Zeus', '2023-09-27', '4', 'Male', 'Pagala', 'Pending'),
(60, 'Brick', '2023-09-27', '3', 'Male', 'Concepcion', 'Pending'),
(61, 'Summer', '2023-09-27', '2', 'Male', 'Sabang', 'Pending'),
(62, 'Sam', '2023-09-27', '2', 'Male', 'Tarcan', 'Pending'),
(63, 'Rusty', '2023-09-27', '5', 'Male', 'Sabang', 'Pending'),
(64, 'Ozzy', '2023-09-27', '4', 'Male', 'Catulinan', 'Pending'),
(65, 'Mac', '2023-09-27', '3', 'Male', 'Piel', 'Pending'),
(66, 'Kaikai', '2023-09-27', '5', 'Male', 'Piel', 'Pending');

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
(13, 'Mass Vaccination', 'Sample additional details', '6510580a30da8.png', '2023-09-25'),
(14, 'Free castration', 'Test details', '6510585e59e3f.png', '2023-09-29'),
(15, 'ANTI-RABIES VACCINATION', 'Free anti-rabies vaccination to all animal owners', '6514fd0529774.jpg', '2023-09-30'),
(16, 'Anti-rabies vaccination', '', '6514fd9792d1e.jpg', '2023-09-29');

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
(57, 'Dean Jerick C. Igaya', '09352218378', 'Carabao', '14.3917056,121.0515456', 'Test details', '2023-09-24', 'Approve', '47'),
(58, 'Randel T. Valimento', '09157139465', 'Carabao', '14.3917056,121.0515456', 'Test carabao', '2023-09-24', 'Decline', '48'),
(59, 'Dean Jerick C. Igaya', '09352218378', 'Cow', '14.3917056,121.0515456', 'Details', '2023-09-24', 'Pending', '47'),
(60, 'April Joy R. Sablayan', '09147852349', 'Goat', '14.3917056,121.0515456', 'Goat details', '2023-09-24', 'Pending', '49'),
(61, 'Randel T. Valimento', '09157139465', 'Cow', '14.3917056,121.0515456', 'Test cow', '2023-09-24', 'Pending', '48'),
(62, 'Randel T. Valimento', '09157139465', 'Carabao', '14.3917056,121.0515456', 'Details testing', '2023-09-24', 'Pending', '48'),
(63, 'Dean Jerick C. Igaya', '09352218378', 'Carabao', '14.3917056,121.0515456', 'Details example', '2023-09-24', 'Pending', '47'),
(64, 'Dean Jerick C. Igaya', '09352218378', 'Carabao', '14.3917056,121.0515456', 'Details', '2023-09-24', 'Pending', '47'),
(65, 'Dean Jerick C. Igaya', '09352218378', 'Carabao', '14.3917056,121.0515456', 'Details', '2023-09-24', 'Pending', '47'),
(66, 'April Joy R. Sablayan', '09147852349', 'Cow', '14.3917056,121.0515456', 'Details sample', '2023-09-24', 'Pending', '49'),
(67, 'April Joy R. Sablayan', '09147852349', 'Carabao', '17.4292992,120.50432', 'Additional details sample', '2023-09-29', 'Pending', '49'),
(68, 'Dean Jerick C. Igaya', '09352218378', 'Carabao', '17.4292992,120.50432', 'Test', '2023-09-29', 'Pending', '47'),
(69, 'Dean Jerick C. Igaya', '09352218378', 'Cow', '17.4292992,120.50432', 'Details', '2023-09-29', 'Pending', '47'),
(70, 'Randel T. Valimento', '09157139465', 'Carabao', '17.4292992,120.50432', 'Sample details', '2023-09-29', 'Pending', '48'),
(71, 'Randel T. Valimento', '09157139465', 'Cow', '17.4292992,120.50432', 'Details test', '2023-09-29', 'Pending', '48'),
(72, 'Dean Jerick C. Igaya', '09352218378', 'Goat', '17.4292992,120.50432', 'Testing details', '2023-09-29', 'Pending', '47'),
(73, 'April Joy R. Sablayan', '09147852349', 'Cow', '17.4292992,120.50432', 'Sample details', '2023-09-29', 'Pending', '49'),
(74, 'April Joy R. Sablayan', '09147852349', 'Cow', '17.4292992,120.50432', 'Details test', '2023-09-29', 'Pending', '49'),
(75, 'April Joy R. Sablayan', '09147852349', 'Carabao', '17.4292992,120.50432', 'Testing', '2023-09-29', 'Pending', '49'),
(76, 'April Joy R. Sablayan', '09147852349', 'Cow', '17.4292992,120.50432', 'Test cow', '2023-09-29', 'Pending', '49'),
(77, 'April Joy R. Sablayan', '09147852349', 'Goat', '17.4292992,120.50432', 'Details goat', '2023-09-29', 'Pending', '49'),
(78, 'Dean Jerick C. Igaya', '09352218378', 'Goat', '17.4292992,120.50432', 'Goat test', '2023-09-29', 'Pending', '47'),
(79, 'Randel T. Valimento', '09157139465', 'Carabao', '17.4292992,120.50432', 'Testing', '2023-09-29', 'Pending', '48'),
(80, 'Randel T. Valimento', '09157139465', 'Cow', '17.4292992,120.50432', 'Test details', '2023-09-29', 'Pending', '48'),
(81, 'Randel T. Valimento', '09157139465', 'Cow', '17.4292992,120.50432', 'Testing ', '2023-09-29', 'Pending', '48'),
(82, 'Randel T. Valimento', '09157139465', 'Cow', '17.4292992,120.50432', 'Test details', '2023-09-29', 'Pending', '48'),
(83, 'Dean Jerick C. Igaya', '09352218378', 'Goat', '17.4292992,120.50432', 'Test details', '2023-09-29', 'Pending', '47'),
(84, 'Dean Jerick C. Igaya', '09352218378', 'Carabao', '17.4292992,120.50432', 'Testing carabao', '2023-09-29', 'Pending', '47'),
(85, 'Dean Jerick C. Igaya', '09352218378', 'Cow', '17.4292992,120.50432', 'Test details', '2023-09-29', 'Pending', '47'),
(86, 'Dean Jerick C. Igaya', '09352218378', 'Goat', '17.4292992,120.50432', 'Test details sample', '2023-09-29', 'Pending', '47'),
(87, 'April Joy R. Sablayan', '09147852349', 'Cow', '17.4292992,120.50432', 'Sample', '2023-09-29', 'Pending', '49'),
(88, 'April Joy R. Sablayan', '09147852349', 'Cow', '17.4292992,120.50432', 'Sample details', '2023-09-29', 'Pending', '49'),
(89, 'April Joy R. Sablayan', '09147852349', 'Carabao', '17.4292992,120.50432', 'Sample carabao', '2023-09-29', 'Pending', '49'),
(90, 'Randel T. Valimento', '09157139465', 'Carabao', '17.4292992,120.50432', 'Sample testing', '2023-09-29', 'Pending', '48'),
(91, 'Randel T. Valimento', '09157139465', 'Goat', '17.4292992,120.50432', 'Testing details', '2023-09-29', 'Pending', '48'),
(92, 'Randel T. Valimento', '09157139465', 'Goat', '17.4292992,120.50432', 'Test for artificial insemination', '2023-09-29', 'Pending', '48'),
(93, 'Dean Jerick C. Igaya', '09352218378', 'Carabao', '17.4292992,120.50432', 'Testing artificial', '2023-09-29', 'Pending', '47'),
(94, 'April Joy R. Sablayan', '09147852349', 'Cow', '17.4292992,120.50432', 'Test cow', '2023-09-29', 'Pending', '49'),
(95, 'April Joy R. Sablayan', '09147852349', 'Carabao', '17.4292992,120.50432', 'Test additional details', '2023-09-29', 'Pending', '49'),
(96, 'April Joy R. Sablayan', '09147852349', 'Goat', '17.4292992,120.50432', 'Test ', '2023-09-29', 'Pending', '49'),
(97, 'Dean Jerick C. Igaya', '09352218378', 'Goat', '17.4292992,120.50432', 'Details sample', '2023-09-29', 'Pending', '47'),
(98, 'Dean Jerick C. Igaya', '09352218378', 'Cow', '17.4292992,120.50432', 'Sample data', '2023-09-29', 'Pending', '47'),
(99, 'Dean Jerick C. Igaya', '09352218378', 'Goat', '17.4292992,120.50432', 'Sample details', '2023-09-29', 'Pending', '47'),
(100, 'Randel T. Valimento', '09157139465', 'Cow', '17.4292992,120.50432', 'Sample', '2023-09-29', 'Pending', '48'),
(101, 'Randel T. Valimento', '09157139465', 'Carabao', '17.4292992,120.50432', 'Details carabao', '2023-09-29', 'Pending', '48'),
(102, 'Randel T. Valimento', '09157139465', 'Cow', '17.4292992,120.50432', 'Sample test', '2023-09-29', 'Pending', '48'),
(103, 'Dean Jerick C. Igaya', '09352218378', 'Carabao', '17.4292992,120.50432', 'Test', '2023-09-29', 'Pending', '47'),
(104, 'Dean Jerick C. Igaya', '09352218378', 'Goat', '17.4292992,120.50432', 'Testing details', '2023-09-29', 'Pending', '47'),
(105, 'April Joy R. Sablayan', '09147852349', 'Goat', '17.4292992,120.50432', 'Testing of details', '2023-09-29', 'Pending', '49'),
(106, 'April Joy R. Sablayan', '09147852349', 'Cow', '17.4292992,120.50432', 'Artificial insemination', '2023-09-29', 'Pending', '49');

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
(39, 'Dean Jerick C. Igaya', '09352208378', 'Dog', 'Situation', '14.3917056,121.0515456', '2023-09-24', 'Approve'),
(40, 'Randel T. Valimento', '09617548478', 'Dog', 'Sample situation', '14.3917056,121.0515456', '2023-09-24', 'Decline'),
(41, 'April Joy R. Sablayan', '09124578961', 'Dog', 'Sample', '14.3917056,121.0515456', '2023-09-24', 'Pending'),
(42, 'Cedric D. Escribel', '09174852169', 'Dog', 'Example', '14.3917056,121.0515456', '2023-09-24', 'Pending'),
(43, 'Randel T. Valimento', '09352208378', 'Cat', 'Situation sample', '14.3917056,121.0515456', '2023-09-24', 'Pending'),
(44, 'April Joy R. Sablayan', '09124578961', 'Dog', 'Situation sample', '14.3917056,121.0515456', '2023-09-24', 'Pending'),
(45, 'April Joy R. Sablayan', '09617548478', 'Dog', 'Example details', '14.3917056,121.0515456', '2023-09-24', 'Pending'),
(48, 'Randel T. Valimento', '09617548478', 'Cat', 'Testing', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(49, 'Randel T. Valimento', '09617548478', 'Dog', 'Test details', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(50, 'Randel T. Valimento', '09617548478', 'Dog', 'Sample situation', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(51, 'April Joy R. Sablayan', '09617548478', 'Cat', 'Situation sample', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(52, 'Cedric D. Escribel', '09617548478', 'Dog', 'Sample details', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(53, 'April Joy R. Sablayan', '09617548478', 'Dog', 'Details sample', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(54, 'Dean Jerick C. Igaya', '09124578961', 'Cat', 'Example situation', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(55, 'Randel T. Valimento', '09617548478', 'Cat', 'Sample situation', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(56, 'Cedric D. Escribel', '09124578961', 'Dog', 'Testing ', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(57, 'April Joy R. Sablayan', '09124578961', 'Cat', 'Testing details', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(58, 'Randel T. Valimento', '09352208378', 'Cat', 'Example test', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(59, 'April Joy R. Sablayan', '09617548478', 'Cat', 'Sample details', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(60, 'Cedric D. Escribel', '09174852169', 'Cat', 'Example situation', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(61, 'Cedric D. Escribel', '09352208378', 'Cat', 'Sample', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(62, 'Cedric D. Escribel', '09124578961', 'Dog', 'Explain the situation', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(63, 'Dean Jerick C. Igaya', '09352208378', 'Cat', 'Example test', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(64, 'Cedric D. Escribel', '09617548478', 'Dog', 'Sample details', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(65, 'Cedric D. Escribel', '09352208378', 'Dog', 'Explain sample', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(66, 'Dean Jerick C. Igaya', '09352208378', 'Dog', 'Sample testing', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(67, 'Dean Jerick C. Igaya', '09352208378', 'Cat', 'Sample test', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(68, 'April Joy R. Sablayan', '09352208378', 'Dog', 'Sample testing', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(69, 'Dean Jerick C. Igaya', '09352208378', 'Dog', 'Test sample', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(70, 'Randel T. Valimento', '09617548478', 'Dog', 'Sample testing', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(71, 'Randel T. Valimento', '09352208378', 'Dog', 'Sample details', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(72, 'April Joy R. Sablayan', '09617548478', 'Dog', 'Sample testing', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(73, 'Randel T. Valimento', '09352208378', 'Cat', 'Testing data', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(74, 'April Joy R. Sablayan', '09352208378', 'Cat', 'Test situation', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(75, 'Randel T. Valimento', '09617548478', 'Cat', 'Testing for situation', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(76, 'April Joy R. Sablayan', '09617548478', 'Cat', 'Test sample', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(77, 'Randel T. Valimento', '09352208378', 'Dog', 'Sample testing', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(78, 'Cedric D. Escribel', '09617548478', 'Cat', 'Sample details', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(79, 'Dean Jerick C. Igaya', '09617548478', 'Dog', 'Details sample', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(80, 'Cedric D. Escribel', '09352208378', 'Dog', 'Explain sample', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(81, 'Dean Jerick C. Igaya', '09352208378', 'Dog', 'For testing', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(82, 'Randel T. Valimento', '09617548478', 'Cat', 'Test', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(83, 'April Joy R. Sablayan', '09352208378', 'Cat', 'Testing', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(84, 'Cedric D. Escribel', '09617548478', 'Cat', 'Testing', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(85, 'Randel T. Valimento', '09352208378', 'Cat', 'Situation sample', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(86, 'April Joy R. Sablayan', '09352208378', 'Cat', 'Sample', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(87, 'April Joy R. Sablayan', '09352208378', 'Dog', 'Sample testing', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(88, 'Cedric D. Escribel', '09617548478', 'Dog', 'Sample for testing', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(89, 'Randel T. Valimento', '09352208378', 'Dog', 'Sample test', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(90, 'April Joy R. Sablayan', '09352208378', 'Dog', 'Testing sample', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(91, 'Randel T. Valimento', '09617548478', 'Dog', 'Sample situation', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(92, 'April Joy R. Sablayan', '09352208378', 'Cat', 'Example situation', '17.4292992,120.50432', '2023-09-28', 'Pending');

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
  `status` varchar(124) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`Schedule_id`, `FullN`, `PhoneNum`, `Sched`, `Date`, `PetName`, `Breed`, `Color`, `Age`, `Gender`, `Message`, `user_id`, `status`) VALUES
(53, 'April Joy R. Sablayan', '09147852349', 'Anti-rabies Vaccination', '2023-09-28', 'Peanut', 'Aspin', 'Black and White', 3, 'Male', 'Testing note', '49', 'Pending'),
(54, 'Dean Jerick C. Igaya', '09352218378', 'Anti-rabies Vaccination', '2023-09-28', 'Magie', 'Shih tzu', 'White', 4, 'Female', 'Testing', '47', 'Pending'),
(55, 'Dean Jerick C. Igaya', '09352218378', 'Anti-rabies Vaccination', '2023-09-28', 'Bobby', 'Poodle', 'Black', 3, 'Male', 'Test note', '47', 'Pending'),
(56, 'Randel T. Valimento', '09157139465', 'Anti-rabies Vaccination', '2023-09-28', 'Mick', 'Aspin', 'Black', 5, 'Female', 'Additional details', '48', 'Pending'),
(57, 'Randel T. Valimento', '09157139465', 'Anti-rabies Vaccination', '2023-09-28', 'Aly', 'Golden Retriever', 'Brown', 5, 'Male', 'Note details', '48', 'Pending'),
(58, 'April Joy R. Sablayan', '09147852349', 'Anti-rabies Vaccination', '2023-09-28', 'Max', 'Bulldog', 'Brown', 4, 'Male', 'Additional details note', '49', 'Pending'),
(59, 'Dean Jerick C. Igaya', '09352218378', 'Anti-rabies Vaccination', '2023-09-28', 'Becka', 'Aspin', 'White', 3, 'Female', 'Note sample', '47', 'Pending'),
(60, 'April Joy R. Sablayan', '09147852349', 'Castration', '2023-09-28', 'Milo', 'Poodle', 'White', 5, 'Male', 'Additional details', '49', 'Pending'),
(61, 'April Joy R. Sablayan', '09147852349', 'Anti-rabies Vaccination', '2023-09-28', 'Demie', 'Aspin', 'White', 4, 'Male', 'Note sample', '49', 'Pending'),
(62, 'April Joy R. Sablayan', '09147852349', 'Anti-rabies Vaccination', '2023-09-28', 'Mico', 'Aspin', 'White', 6, 'Female', 'Details sample', '49', 'Pending'),
(63, 'Randel T. Valimento', '09157139465', 'Anti-rabies Vaccination', '2023-09-28', 'Ned', 'Chihuahua', 'Brown', 3, 'Female', 'Note sample', '48', 'Pending'),
(64, 'Randel T. Valimento', '09157139465', 'Castration', '2023-09-28', 'Caloy', 'Aspin', 'Black', 3, 'Female', 'Note example', '48', 'Pending'),
(65, 'Dean Jerick C. Igaya', '09352218378', 'Castration', '2023-09-28', 'Cassy', 'Pomeranian', 'Black', 4, 'Male', 'Note details', '47', 'Pending'),
(66, 'Dean Jerick C. Igaya', '09352218378', 'Castration', '2023-09-28', 'Fendy', 'Chow chow', 'Black', 5, 'Female', 'Note details', '47', 'Pending'),
(67, 'Dean Jerick C. Igaya', '09352218378', 'Castration', '2023-09-28', 'Sandy', 'Aspin', 'White', 3, 'Female', 'Additional details', '47', 'Pending'),
(68, 'April Joy R. Sablayan', '09147852349', 'Castration', '2023-09-28', 'Pat', 'Aspin', 'Black', 3, 'Male', 'Testing details', '49', 'Pending'),
(69, 'April Joy R. Sablayan', '09147852349', 'Castration', '2023-09-28', 'Migo', 'Poodle', 'White', 4, 'Male', 'Test note', '49', 'Pending'),
(70, 'Dean Jerick C. Igaya', '09352218378', 'Castration', '2023-09-28', 'Oly', 'Poodle', 'Whtie', 4, 'Male', 'Note sample', '47', 'Pending'),
(71, 'Dean Jerick C. Igaya', '09352218378', 'Anti-rabies Vaccination', '2023-09-28', 'Veronica', 'Aspin', 'Brown', 3, 'Female', 'Note sample', '47', 'Pending'),
(72, 'Randel T. Valimento', '09157139465', 'Anti-rabies Vaccination', '2023-09-28', 'Sam', 'Aspin', 'White and brown', 3, 'Male', 'Notes', '48', 'Pending'),
(73, 'Randel T. Valimento', '09157139465', 'Anti-rabies Vaccination', '2023-09-28', 'Gelly', 'Aspin', 'White', 5, 'Male', 'Additional details', '48', 'Pending'),
(74, 'Dean Jerick C. Igaya', '09352218378', 'Anti-rabies Vaccination', '2023-09-28', 'Holly', 'Aspin', 'White', 3, 'Male', 'Note details', '47', 'Pending'),
(75, 'Dean Jerick C. Igaya', '09352218378', 'Anti-rabies Vaccination', '2023-09-28', 'Bella', 'Aspin', 'White', 4, 'Male', 'Notes', '47', 'Pending'),
(76, 'Dean Jerick C. Igaya', '09352218378', 'Anti-rabies Vaccination', '2023-09-28', 'Zack', 'Aspin', 'White', 4, 'Male', 'Notes', '47', 'Pending'),
(77, 'Dean Jerick C. Igaya', '09352218378', 'Castration', '2023-09-28', 'Mela', 'Aspin', 'White', 3, 'Male', 'Additional details', '47', 'Pending'),
(78, 'Dean Jerick C. Igaya', '09352218378', 'Anti-rabies Vaccination', '2023-09-28', 'Alyson', 'Poodle', 'White', 3, 'Male', 'Note details', '47', 'Pending'),
(79, 'Dean Jerick C. Igaya', '09352218378', 'Anti-rabies Vaccination', '2023-09-28', 'Micko', 'Aspin', 'White', 3, 'Female', 'Note sample', '47', 'Pending'),
(80, 'April Joy R. Sablayan', '09147852349', 'Anti-rabies Vaccination', '2023-09-28', 'Uno', 'Aspin', 'Black', 3, 'Male', 'Details sample', '49', 'Pending'),
(81, 'Randel T. Valimento', '09157139465', 'Castration', '2023-09-28', 'Martha', 'Pomeranian', 'White', 6, 'Female', 'Note sample', '48', 'Pending'),
(82, 'Dean Jerick C. Igaya', '09352218378', 'Castration', '2023-09-28', 'Chelsea', 'Poodle', 'Black', 3, 'Male', 'Note sample details', '47', 'Pending'),
(83, 'Dean Jerick C. Igaya', '09352218378', 'Anti-rabies Vaccination', '2023-09-28', 'Pat', 'Aspin', 'White and Black', 3, 'Male', 'Additional details sample', '47', 'Pending'),
(84, 'April Joy R. Sablayan', '09147852349', 'Anti-rabies Vaccination', '2023-09-28', 'Felly', 'Poodle', 'White', 3, 'Female', 'Sample note', '49', 'Pending'),
(85, 'April Joy R. Sablayan', '09147852349', 'Anti-rabies Vaccination', '2023-09-28', 'Pam', 'Aspin', 'White and brown', 4, 'Female', 'Sample note', '49', 'Pending'),
(86, 'April Joy R. Sablayan', '09147852349', 'Anti-rabies Vaccination', '2023-09-28', 'Gelo', 'Aspin', 'White', 3, 'Female', 'Note sample', '49', 'Pending'),
(87, 'Randel T. Valimento', '09157139465', 'Anti-rabies Vaccination', '2023-09-28', 'Denn', 'Aspin', 'Black', 3, 'Male', 'Additional details sample', '48', 'Pending'),
(88, 'Randel T. Valimento', '09157139465', 'Anti-rabies Vaccination', '2023-09-28', 'Mico', 'Poodle', 'Black', 3, 'Male', 'Note sample', '48', 'Pending'),
(89, 'Randel T. Valimento', '09157139465', 'Anti-rabies Vaccination', '2023-09-28', 'Sasha', 'Labrador', 'Brown', 2, 'Male', 'Notes', '48', 'Pending'),
(90, 'Randel T. Valimento', '09157139465', 'Anti-rabies Vaccination', '2023-09-28', 'Patrick', 'Aspin', 'Black', 3, 'Male', 'Notes sample', '48', 'Pending'),
(91, 'Dean Jerick C. Igaya', '09352218378', 'Anti-rabies Vaccination', '2023-09-28', 'Wendy', 'Aspin', 'White', 3, 'Male', 'Additional details', '47', 'Pending'),
(92, 'Dean Jerick C. Igaya', '09352218378', 'Anti-rabies Vaccination', '2023-09-28', 'Marco', 'Poodle', 'Black', 3, 'Male', 'Note details', '47', 'Pending'),
(93, 'Dean Jerick C. Igaya', '09352218378', 'Anti-rabies Vaccination', '2023-09-28', 'Pinty', 'Bulldog', 'Black', 2, 'Male', 'Notes sample\r\n', '47', 'Pending'),
(94, 'April Joy R. Sablayan', '09147852349', 'Castration', '2023-09-28', 'Queenie', 'Aspin', 'White', 2, 'Female', 'Notes example', '49', 'Pending'),
(95, 'April Joy R. Sablayan', '09147852349', 'Anti-rabies Vaccination', '2023-09-28', 'Rana', 'Labrador', 'White', 2, 'Male', 'Sample notes', '49', 'Pending'),
(96, 'Dean Jerick C. Igaya', '09352218378', 'Castration', '2023-09-28', 'Fiona', 'Aspin', 'Brown', 3, 'Female', 'Additional details', '47', 'Pending'),
(97, 'Dean Jerick C. Igaya', '09352218378', 'Castration', '2023-09-28', 'Lary', 'Labrador', 'Brown', 3, 'Male', 'Notes ', '47', 'Pending'),
(98, 'Dean Jerick C. Igaya', '09352218378', 'Anti-rabies Vaccination', '2023-09-28', 'Olie', 'Aspin', 'White and brown', 3, 'Male', 'Sample note', '47', 'Pending'),
(99, 'Randel T. Valimento', '09157139465', 'Anti-rabies Vaccination', '2023-09-28', 'Samie', 'Aspin', 'Brown', 3, 'Male', 'Sample notes details', '48', 'Pending'),
(100, 'Randel T. Valimento', '09157139465', 'Anti-rabies Vaccination', '2023-09-28', 'Harry', 'Poodle', 'White', 4, 'Male', 'Notes', '48', 'Pending'),
(101, 'Randel T. Valimento', '09157139465', 'Castration', '2023-09-28', 'Holly', 'Aspin', 'Whtie', 2, 'Male', 'Notes sample', '48', 'Pending'),
(102, 'Dean Jerick C. Igaya', '09352218378', 'Anti-rabies Vaccination', '2023-09-28', 'Rico', 'Labrador', 'Whtie', 3, 'Female', 'Additional details', '47', 'Pending'),
(103, 'April Joy R. Sablayan', '09147852349', 'Anti-rabies Vaccination', '2023-09-28', 'Willy', 'Aspin', 'White', 3, 'Male', 'Sample details', '49', 'Pending');

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
-- AUTO_INCREMENT for table `adoptionrequest`
--
ALTER TABLE `adoptionrequest`
  MODIFY `AdoptReq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `catch`
--
ALTER TABLE `catch`
  MODIFY `DogCatch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `Dog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `dogs_pound`
--
ALTER TABLE `dogs_pound`
  MODIFY `DPoundID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `EventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `insemination`
--
ALTER TABLE `insemination`
  MODIFY `Insemination_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `rescue`
--
ALTER TABLE `rescue`
  MODIFY `Rescue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `Schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
