-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 06:39 PM
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
(9, 'randel', '$2y$10$FE9bM6BIEszmNo/Kt6.1qOEq1w3Rv005plh1b.vwwmOorwLR12THm', 'Barangay', 'randel', 'barangay', '2023-10-17'),
(10, 'April', '$2y$10$ivvvWIbjIw.3.jIfCu9vlOfH.jBkr8rbsipgERKz4FLD6C/ior7oW', 'Barangay', 'April', 'april', '2023-10-17');

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
(24, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-09-25', 'Approve', '69', '2023-09-24'),
(25, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-09-27', 'Approve', '72', '2023-09-24'),
(26, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'No', '2023-09-30', 'Approve', '71', '2023-09-24'),
(27, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-09-29', 'adoption', '75', '2023-09-24'),
(28, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-09-28', 'adoption', '70', '2023-09-24'),
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
(78, 'Dean Jerick C. Igaya', 'Pagala, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352218378', 'Yes', '2023-10-07', 'Pending', '82', '2023-09-28'),
(79, 'Cedric Escribel', 'Aldama Stabarbara Baliuag Bulacan', 'CedricEscribel@gmail.com', '09512339636', 'Yes', '2023-10-01', 'Approve', '86', '2023-09-30'),
(80, 'Cedric', 'Aldama sta barbara', 'Cedric@gmail', '09511234567', 'Yes', '2023-10-13', 'Pending', '', '2023-10-08'),
(81, 'Cedric', 'Aldama sta barbara baliuag bulacana', 'Cedric@gmail', '09511234567', 'Yes', '2023-10-25', 'Pending', '', '2023-10-16'),
(82, 'Cedric', 'Aldama sta barbara baliuag bulacana', 'Cedric@gmail', '09511234567', 'Yes', '2023-10-27', 'Pending', '3', '2023-10-16');

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
(40, 'Bagong Nayon', '09352218378', 12, 'Sample notes', '2023-09-28', 'Approve'),
(41, 'San Jose', '09147852349', 15, 'Sample notes', '2023-09-28', 'adoption'),
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
(89, 'Makinabang', '09352218378', 13, 'Testing note', '2023-09-28', 'Pending'),
(90, 'Santo Cristo', '', 12, 'try changing select to value', '2023-10-05', 'Pending');

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
(1, 'a', 'a', 'a', '2023-10-14', 'a', 'a', 'a', 'adoption'),
(2, 'a', 'a', 'Male', '2023-10-20', '', 'a', '', 'Euthanized'),
(3, 'name', '12345', 'Female', '2023-10-27', '', 'details', '', 'adoption'),
(4, 'try', 'month', 'Female', '2023-10-18', 'asd', 'das', '', 'pending'),
(5, 'a', 'a', 'Female', '2023-10-17', 'a', 'a', '6520f79364894.gif', 'pending'),
(6, 'try pic', 'try pic', 'Female', '2023-10-09', 'try pic', 'try pic', '6520f8b99e237.jpg', 'pending'),
(7, 'sample', 'month', 'Male', '2023-10-09', 'location', 'details', '65221982d0351.png', 'pending'),
(8, '2', '2', 'Female', '2023-10-10', '2', '2', '652219966249e.png', 'Euthanized'),
(15, 'unique', 'sa', 'Male', '2023-10-10', 'dsa', 'dsa', '652219bfd2d19.png', 'adoption'),
(16, 'c', 'c', 'Male', '2023-10-09', 'c', 'c', '65221a3d0e08c.png', 'adopted'),
(17, 'c', 'c', 'Male', '2023-10-14', 'ac', 'ac', '65297732596c1.png', 'claimed');

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
(16, 'Anti-rabies vaccination', '', '6514fd9792d1e.jpg', '2023-09-29', ''),
(17, 'Vaccination', 'details', '65178c5bd9f7a.png', '2023-10-02', ''),
(18, 'dsa', 'dsa', '651ecf7c67b86.png', '2023-10-13', '');

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
(106, 'April Joy R. Sablayan', '09147852349', 'Cow', '17.4292992,120.50432', 'Artificial insemination', '2023-09-29', 'Pending', '49'),
(107, 'Cedric Escribel', '09512339636', 'Carabao', '14.9464387,120.8843322', 'Carabao to be inseminated', '2023-09-30', 'Pending', '51'),
(108, 'Cedric', '09511234567', 'Cow', '14.9443694,120.8843322', 'sample schedule', '2023-10-09', 'Pending', '50'),
(109, 'Cedric', '09511234567', 'Cow', '14.9464387,120.8843322', 'dsada', '2023-10-14', 'Pending', '50');

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
(41, 'April Joy R. Sablayan', '09124578961', 'Dog', 'Sample', '14.3917056,121.0515456', '2023-09-24', 'Approve'),
(42, 'Cedric D. Escribel', '09174852169', 'Dog', 'Example', '14.3917056,121.0515456', '2023-09-24', 'Approve'),
(43, 'Randel T. Valimento', '09352208378', 'Cat', 'Situation sample', '14.3917056,121.0515456', '2023-09-24', 'Approve'),
(44, 'April Joy R. Sablayan', '09124578961', 'Dog', 'Situation sample', '14.3917056,121.0515456', '2023-09-24', 'Approve'),
(45, 'April Joy R. Sablayan', '09617548478', 'Dog', 'Example details', '14.3917056,121.0515456', '2023-09-24', 'Approve'),
(48, 'Randel T. Valimento', '09617548478', 'Cat', 'Testing', '17.4292992,120.50432', '2023-09-28', 'Approve'),
(49, 'Randel T. Valimento', '09617548478', 'Dog', 'Test details', '17.4292992,120.50432', '2023-09-28', 'Approve'),
(50, 'Randel T. Valimento', '09617548478', 'Dog', 'Sample situation', '17.4292992,120.50432', '2023-09-28', 'Approve'),
(51, 'April Joy R. Sablayan', '09617548478', 'Cat', 'Situation sample', '17.4292992,120.50432', '2023-09-28', 'Decline'),
(52, 'Cedric D. Escribel', '09617548478', 'Dog', 'Sample details', '17.4292992,120.50432', '2023-09-28', 'Approve'),
(53, 'April Joy R. Sablayan', '09617548478', 'Dog', 'Details sample', '17.4292992,120.50432', '2023-09-28', 'Approve'),
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
(92, 'April Joy R. Sablayan', '09352208378', 'Cat', 'Example situation', '17.4292992,120.50432', '2023-09-28', 'Pending'),
(93, 'cedric', '09244444444', 'Dog', 'dog', '14.9464387,120.8843322', '2023-09-29', 'Pending'),
(94, 'cedric', '09512339636', 'Dog', 'Dog to be rescue', '14.9464387,120.8843322', '2023-09-30', 'Pending'),
(95, 'name', '09512339636', 'Dog', 'danger', '14.9464387,120.8843322', '2023-10-05', 'Pending');

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
(53, 'April Joy R. Sablayan', '09147852349', 'Anti-rabies Vaccination', '2023-09-28', 'Peanut', 'Aspin', 'Black and White', 3, 'Male', 'Testing note', '49', 'Approve'),
(54, 'Dean Jerick C. Igaya', '09352218378', 'Anti-rabies Vaccination', '2023-09-28', 'Magie', 'Shih tzu', 'White', 4, 'Female', 'Testing', '47', 'Approve'),
(55, 'Dean Jerick C. Igaya', '09352218378', 'Anti-rabies Vaccination', '2023-09-28', 'Bobby', 'Poodle', 'Black', 3, 'Male', 'Test note', '47', 'adoption'),
(56, 'Randel T. Valimento', '09157139465', 'Anti-rabies Vaccination', '2023-09-28', 'Mick', 'Aspin', 'Black', 5, 'Female', 'Additional details', '48', 'Decline'),
(57, 'Randel T. Valimento', '09157139465', 'Anti-rabies Vaccination', '2023-09-28', 'Aly', 'Golden Retriever', 'Brown', 5, 'Male', 'Note details', '48', 'Approve'),
(58, 'April Joy R. Sablayan', '09147852349', 'Anti-rabies Vaccination', '2023-09-28', 'Max', 'Bulldog', 'Brown', 4, 'Male', 'Additional details note', '49', 'Pending'),
(59, 'Dean Jerick C. Igaya', '09352218378', 'Anti-rabies Vaccination', '2023-09-28', 'Becka', 'Aspin', 'White', 3, 'Female', 'Note sample', '47', 'Pending'),
(60, 'April Joy R. Sablayan', '09147852349', 'Castration', '2023-09-28', 'Milo', 'Poodle', 'White', 5, 'Male', 'Additional details', '49', 'Approve'),
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
(50, 'Cedric@gmail', '$2y$10$TVrtwR6Cwwf0cjuJqZtCDe9G74Cb24oV21wj7vbvhz7fCfmo5mhMG', 'Cedric', 'Aldama sta barbara baliuag bulacana', '09511234567', '2023-09-29', 'user'),
(56, 'Barangay1@gmail', '$2y$10$Lt2irxnDWP47MXjTROuD3.OdEJBSdXROKRv.J6sXQ4cfbyJXw6jlq', 'name', 'Sta barbara', '09123456789', '2023-10-16', 'barangay');

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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `adoptionrequest`
--
ALTER TABLE `adoptionrequest`
  MODIFY `AdoptReq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `catch`
--
ALTER TABLE `catch`
  MODIFY `DogCatch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `dogs_info`
--
ALTER TABLE `dogs_info`
  MODIFY `dog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `EventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `Schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
