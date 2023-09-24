-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2023 at 07:03 AM
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
  `Date` date NOT NULL,
  `status` varchar(123) NOT NULL,
  `Dog_id` varchar(255) NOT NULL,
  `DateReq` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adoptionrequest`
--

INSERT INTO `adoptionrequest` (`AdoptReq_id`, `Fullname`, `Address`, `Email`, `PhoneNum`, `Interview`, `Date`, `status`, `Dog_id`, `DateReq`) VALUES
(4, 'Dean Jerick Igaya', 'Pagal, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352208378', 'No', '2023-09-10', 'Pending', '', '2023-09-24'),
(5, 'Dean Jerick Igaya', 'Pagal, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352208378', 'Yes', '2023-09-10', 'Pending', '', '2023-09-24'),
(6, 'Dean Jerick Igaya', 'Pagal, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352208378', '', '2023-09-06', 'Pending', '', '2023-09-24'),
(7, 'Dean Jerick Igaya', 'Pagal, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352208378', 'No', '2023-09-10', 'Pending', '', '2023-09-24'),
(8, 'Dean Jerick Igaya', 'Pagal, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352208378', 'Yes', '2023-09-11', 'Pending', '', '2023-09-24'),
(9, 'Randel T, Valimento', 'Tiaong, Baliwag, Bulacan', 'valimento2002@gmail.com', '09471238467', 'Yes', '2023-09-11', 'Pending', '', '2023-09-24'),
(10, 'Dean Jerick Igaya', 'Pagal, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352208378', 'Yes', '2023-09-11', 'Pending', '', '2023-09-24'),
(11, 'Randel T, Valimento', 'Tiaong, Baliwag, Bulacan', 'valimento2002@gmail.com', '09471238467', 'Yes', '2023-09-12', 'Pending', '', '2023-09-24'),
(12, 'Randel T, Valimento', 'Tiaong, Baliwag, Bulacan', 'valimento2002@gmail.com', '09471238467', 'Yes', '2023-09-12', 'Pending', '', '2023-09-24'),
(13, 'Dean Jerick Igaya', 'Pagal, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352208378', 'Yes', '2023-09-13', 'Pending', '', '2023-09-24'),
(14, 'Dean Jerick Igaya', 'Pagal, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352208378', 'Yes', '2023-09-11', 'Pending', '', '2023-09-24'),
(15, 'Dean Jerick Igaya', 'Pagal, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352208378', 'No', '2023-09-13', 'Pending', '', '2023-09-24'),
(16, 'Randel T, Valimento', 'Tiaong, Baliwag, Bulacan', 'valimento2002@gmail.com', '09471238467', 'Yes', '2023-09-13', 'Pending', '', '2023-09-24'),
(17, 'Dean Jerick Igaya', 'Pagal, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352208378', 'Yes', '2023-09-12', 'Pending', '', '2023-09-24'),
(18, 'Randel T, Valimento', 'Tiaong, Baliwag, Bulacan', 'valimento2002@gmail.com', '09471238467', 'Yes', '2023-09-14', 'Pending', '', '2023-09-24'),
(19, 'Dean Jerick Igaya', 'Pagal, Baliwag, Bulacan', 'deanigaya@gmail.com', '09352208378', 'Yes', '2023-09-15', 'Pending', '', '2023-09-24'),
(20, 'Cedric Escribel', '0718', 'Cedric@gmail.com', '09123456', 'No', '2023-09-11', 'Pending', '', '2023-09-24'),
(21, 'Cedric Escribel', '0718123', 'Cedric1@gmail', '09512331235', 'Yes', '2023-10-07', 'Pending', '60', '2023-09-24');

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
(9, 'Paitan', 2147483647, 12, 'notes', '2023-09-24', 'Pending'),
(10, 'Paitan', 2147483647, 14, 'note', '2023-09-24', 'Pending'),
(11, 'Paitan', 2147483647, 14, 'note', '2023-09-24', 'Pending'),
(12, 'Paitan', 2147483647, 12, 'note\r\n', '2023-09-24', 'Pending'),
(13, 'Barangca', 2147483647, 11, 'note', '2023-09-24', 'Pending'),
(14, 'Barangca', 2147483647, 7, 'note', '2023-09-24', 'Pending'),
(15, 'Barangca', 2147483647, 12, 'note', '2023-09-24', 'Pending'),
(16, 'Barangca', 2147483647, 12, 'note', '2023-09-24', 'Pending'),
(17, 'Piel', 2147483647, 13, 'note', '2023-09-24', 'Pending'),
(18, 'Piel', 2147483647, 15, 'note', '2023-09-24', 'Pending'),
(19, 'Piel', 2147483647, 15, 'note', '2023-09-24', 'Pending'),
(20, 'Piel', 2147483647, 15, 'note', '2023-09-24', 'Pending'),
(21, 'Barangca', 2147483647, 2, 'notes', '2023-09-24', 'Pending'),
(22, 'Piel', 2147483647, 2, 'notes', '2023-09-24', 'Pending'),
(23, 'Barangca', 2147483647, 13, 'notes', '2023-09-24', 'Pending'),
(24, 'Piel', 2147483647, 14, 'notes', '2023-09-24', 'Pending'),
(25, 'Paitan', 2147483647, 14, 'notes', '2023-09-24', 'Pending'),
(26, 'Paitan', 2147483647, 15, 'notes', '2023-09-24', 'Pending'),
(27, 'Barangca', 2147483647, 16, 'notes', '2023-09-24', 'Pending'),
(28, 'Paitan', 2147483647, 23, 'notes', '2023-09-24', 'Pending');

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
(48, 'Good old Dog', 'Doggy', 22, 'Male', '64fbe8ee2dcd4.jpg'),
(49, 'Good funny and playful dog', 'Dos', 21, 'Male', '64fbe97656fe3.jpg'),
(50, 'Fat Dog with good attitude', 'Maymay', 23, 'Male', '64fbeb88559aa.jpg'),
(51, 'Old Skinny dog', 'Chelsea', 25, 'Female', '64fbec5431a16.jpg'),
(52, 'Loud ', 'Chip', 2, 'Male', '64fbf1bcaad8b.png'),
(53, 'Sweet', 'Elvis', 2, 'Male', '64fbf2132e291.jpg'),
(54, 'Cute and jolly', 'Ender', 2, 'Male', '64fbf27a051bb.jpg'),
(55, 'Happy', 'Ethan', 1, 'Female', '64fbf313450e3.png'),
(56, 'Lovely', 'Fang', 3, 'Male', '64fbf32e1565d.png'),
(57, 'Cute', 'Griffey', 2, 'Female', '64fbf35c4293c.jpg'),
(58, 'Happy dog', 'Hanz', 2, 'Female', '64fbf381ae49a.png'),
(59, 'Cute and Playful', 'Graham', 3, 'Female', '64fbf407bca44.png'),
(60, 'Cute', 'Iggy', 12, 'Female', '64fbf427635d9.png'),
(61, 'Lovely dog', 'Andy', 2, 'Male', '64fbf445224aa.jpg'),
(62, 'Loves to play', 'Jerry', 2, 'Male', '64fbf47ec0656.png'),
(63, 'Playful dog', 'Dog name sample', 12, 'male', '64fc111d07ae5.png');

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
(2, 'Argo', '2023-09-09', '2', 'Male', 'Pagala', 'Pending'),
(3, 'Arnold', '2023-09-10', '1', 'Male', 'Pagala', 'Pending'),
(4, 'Bowser', '2023-09-09', '1', 'Female', 'Piel', 'Pending'),
(5, 'Brett', '2023-09-12', '1', 'Male', 'Pagala', 'Pending'),
(6, 'Bucky', '2023-09-09', '3', 'Male', 'Pagala', 'Pending'),
(7, 'Abby', '2023-09-09', '3', 'Female', 'Pagala', 'Pending'),
(8, 'Marco', '2023-09-08', '2', 'Male', 'Piel', 'Pending'),
(9, 'Bry', '2023-09-07', '1', 'Male', 'Piel', 'Pending'),
(10, 'Blacky', '2023-09-06', '1', 'Male', 'Tarcan', 'Pending'),
(11, 'Chester', '2023-09-04', '1', 'Male', 'Pagala', 'Pending'),
(12, 'Macky', '2023-09-07', '2', 'Female', 'Tarcan', 'Pending'),
(13, 'Chou', '2023-09-08', '1', 'Male', 'Piel', 'Pending'),
(14, 'Melvin', '2023-09-07', '3', 'Male', 'Tarcan', 'Pending');

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
(8, '𝑺𝑷𝑨𝒀 𝑨𝑵𝑫 𝑵𝑼𝑬𝑻𝑬𝑹', '𝑺𝑷𝑨𝒀 𝑨𝑵𝑫 𝑵𝑼𝑬𝑻𝑬𝑹| Ang ating Pamahalaang Panlalawigan ng Bulacan sa pangunguna ng ating Igg. Gob. Daniel R. Fernando at Bise Gob. Alex C. Castro ', '64fbc51b9c0ee.jpg', '2023-09-20'),
(9, 'kapon', '13th Low Cost Kapon in 𝐁𝐮𝐥𝐢𝐮𝐠𝐠, 𝐁𝐮𝐥𝐜𝐜𝐜𝐢 Location: Washko Laundromat, 63 F. Vergel De Dios St, Brgy. Conception', '64fbcaa48c70b.jpg', '2023-09-13');

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
(35, 'Cedric Escribel', '0951233456', 'Carabao', '14.9464387,120.8843322', 'details\r\n', '2023-09-24', 'Pending', '41'),
(36, 'Cedric Escribel', '0951233456', 'Cow', '14.9464387,120.8843322', 'note details', '2023-09-24', 'Pending', '41'),
(37, 'Dean Jerick Igaya', '09352208378', 'Carabao', '14.9464387,120.8843322', 'additional details', '2023-09-24', 'Pending', '42'),
(38, 'Dean Jerick Igaya', '09352208378', 'Cow', '14.9464387,120.8843322', 'details', '2023-09-24', 'Pending', '42'),
(39, 'Cedric Escribel', '0951233456', 'Carabao', '14.9464387,120.8843322', 'details', '2023-09-24', 'Pending', '41'),
(40, 'Dean Jerick Igaya', '09352208378', 'Cow', '14.9464387,120.8843322', 'details', '2023-09-24', 'Pending', '42'),
(41, 'Randel T, Valimento', '09471238467', 'Cow', '14.9464387,120.8843322', 'details', '2023-09-24', 'Pending', '43'),
(42, 'Randel T, Valimento', '09471238467', 'Carabao', '14.9464387,120.8843322', 'details\r\n', '2023-09-24', 'Pending', '43'),
(43, 'Randel T, Valimento', '09471238467', 'Carabao', '14.9464387,120.8843322', 'details', '2023-09-24', 'Pending', '43'),
(44, 'April Joy R. Sablayan', '09648392710', 'Carabao', '14.9464387,120.8843322', 'details', '2023-09-24', 'Pending', '44'),
(45, 'April Joy R. Sablayan', '09648392710', 'Carabao', '14.9464387,120.8843322', 'details\r\n', '2023-09-24', 'Pending', '44'),
(46, 'Dean Jerick Igaya', '09352208378', 'Carabao', '14.9464387,120.8843322', 'details', '2023-09-24', 'Pending', '42'),
(47, 'Dean Jerick Igaya', '09352208378', 'Carabao', '14.9464387,120.8843322', 'additional details', '2023-09-24', 'Pending', '42'),
(48, 'Randel T, Valimento', '09471238467', 'Cow', '14.9464387,120.8843322', 'additional details', '2023-09-24', 'Pending', '43'),
(49, 'April Joy R. Sablayan', '09648392710', 'Carabao', '14.9464387,120.8843322', 'details', '2023-09-24', 'Pending', '44'),
(50, 'April Joy R. Sablayan', '09648392710', 'Carabao', '14.9464387,120.8843322', 'test', '2023-09-24', 'Pending', '44'),
(51, 'April Joy R. Sablayan', '09648392710', 'Carabao', '14.9464387,120.8843322', 'details\r\n', '2023-09-24', 'Pending', '44'),
(52, 'Randel T, Valimento', '09471238467', 'Carabao', '14.9464387,120.8843322', 'details', '2023-09-24', 'Pending', '43'),
(53, 'Randel T, Valimento', '09471238467', 'Carabao', '14.9464387,120.8843322', 'details', '2023-09-24', 'Pending', '43'),
(54, 'Dean Jerick Igaya', '09352208378', 'Cow', '14.9464387,120.8843322', 'details', '2023-09-24', 'Pending', '42'),
(55, 'Dean Jerick Igaya', '09352208378', 'Carabao', '14.9464387,120.8843322', 'details', '2023-09-24', 'Pending', '42'),
(56, 'Cedric Escribel', '09123456', 'Carabao', '14.9464387,120.8843322', 'Carabao insemination', '2023-09-24', 'Pending', '45');

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
(20, 'April Joy R. Sablayan', '09125678912', 'Dog', 'Dog accident', '14.9464387,120.8843322', '2023-09-24', 'Pending'),
(21, 'Dean Jerick Igaya', '09745183942', 'Cat', 'Stuck in a tree', '14.9464387,120.8843322', '2023-09-24', 'Pending'),
(22, 'Randel T. Valimento', '09745183942', 'Dog', 'The dog is biting', '14.9464387,120.8843322', '2023-09-24', 'Pending'),
(23, 'Dean Jerick Igaya', '09124795317', 'Cat', 'Cat accident', '14.9464387,120.8843322', '2023-09-24', 'Pending'),
(24, 'Dean Jerick Igaya', '09124795317', 'Cat', 'Abused', '14.9464387,120.8843322', '2023-09-24', 'Pending'),
(25, 'April Joy R. Sablayan', '09124795317', 'Dog', 'Being hit by a car', '14.9464387,120.8843322', '2023-09-24', 'Pending'),
(26, 'Dean Jerick Igaya', '09124795317', 'Cat', 'Accident', '14.9464387,120.8843322', '2023-09-24', 'Pending'),
(27, 'Randel T. Valimento', '09124795317', 'Dog', 'Need medical assistance', '14.9464387,120.8843322', '2023-09-24', 'Pending'),
(28, 'April Joy R. Sablayan', '09125678912', 'Dog', 'Need some medical assistance', '14.9464387,120.8843322', '2023-09-24', 'Pending'),
(29, 'Dean Jerick Igaya', '09125678912', 'Dog', 'Dog is stuck', '14.9464387,120.8843322', '2023-09-24', 'Pending'),
(30, 'April Joy R. Sablayan', '09745183942', 'Dog', 'Dog accident', '14.9464387,120.8843322', '2023-09-24', 'Pending'),
(31, 'Dean Jerick Igaya', '09124795317', 'Dog', 'Dog causing trouble', '14.9464387,120.8843322', '2023-09-24', 'Pending'),
(32, 'Dean Jerick Igaya', '09124795317', 'Cat', 'Need medical assistance', '14.9464387,120.8843322', '2023-09-24', 'Pending'),
(33, 'Dean Jerick Igaya', '09124795317', 'Dog', 'Involved in an accident', '14.9464387,120.8843322', '2023-09-24', 'Pending'),
(34, 'April Joy R. Sablayan', '09125678912', 'Dog', 'Severe accident', '14.9464387,120.8843322', '2023-09-24', 'Pending'),
(35, 'Randel T. Valimento', '09125678912', 'Cat', 'Stuck in a machine', '14.9464387,120.8843322', '2023-09-24', 'Pending'),
(36, 'April Joy R. Sablayan', '09124795317', 'Cat', 'Accident ', '14.9464387,120.8843322', '2023-09-24', 'Pending'),
(37, 'April Joy R. Sablayan', '09125678912', 'Dog', 'Need medical attention', '14.9464387,120.8843322', '2023-09-24', 'Pending'),
(38, 'Dean Jerick Igaya', '09125678912', 'Cat', 'Needs to be rescued ', '14.9464387,120.8843322', '2023-09-24', 'Pending');

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
(19, 'Dean Jerick Igaya', 2147483647, 'Anti-rabies Vaccination', '0000-00-00', 'Browny', 'Aspin', 'Brown', 2, 'Male', 'details', '42', 'Decline'),
(20, 'Dean Jerick Igaya', 2147483647, 'Castration', '0000-00-00', 'Whitey', 'Aspin', 'White', 1, 'Male', 'details', '42', 'Pending'),
(21, 'Randel T, Valimento', 2147483647, 'Anti-rabies Vaccination', '0000-00-00', 'Whitey', 'Labrador', 'Brown', 1, 'Male', 'note', '43', 'Pending'),
(22, 'Dean Jerick Igaya', 2147483647, 'Anti-rabies Vaccination', '0000-00-00', 'Blacky', 'Beagle', 'Black', 2, 'Male', 'notes', '42', 'Pending'),
(23, 'Dean Jerick Igaya', 2147483647, 'Anti-rabies Vaccination', '0000-00-00', 'Ace', 'Labrador', 'White', 1, 'Male', 'notes', '42', 'Pending'),
(24, 'Randel T, Valimento', 2147483647, 'Castration', '0000-00-00', 'Alpha', 'Aspin', 'Black', 1, 'Female', 'note', '43', 'Pending'),
(25, 'Randel T, Valimento', 2147483647, 'Anti-rabies Vaccination', '0000-00-00', 'Whitey', 'Beagle', 'White', 2, 'Male', 'note', '43', 'Pending'),
(26, 'Randel T, Valimento', 2147483647, 'Anti-rabies Vaccination', '0000-00-00', 'Apollo', 'Aspin', 'White', 2, 'Male', 'note', '43', 'Pending'),
(27, 'Randel T, Valimento', 2147483647, 'Castration', '0000-00-00', 'Browny', 'Labrador', 'White', 2, 'Female', 'note', '43', 'Decline'),
(28, 'April Joy R. Sablayan', 2147483647, 'Anti-rabies Vaccination', '0000-00-00', 'Uno', 'Aspin', 'Brown', 2, 'Male', 'note', '44', 'Pending'),
(29, 'April Joy R. Sablayan', 2147483647, 'Castration', '0000-00-00', 'Blacky', 'Labrador', 'Black', 2, 'Male', 'note', '44', 'Pending'),
(30, 'Dean Jerick Igaya', 2147483647, 'Anti-rabies Vaccination', '0000-00-00', 'Whitey', 'Aspin', 'White', 2, 'Male', 'note', '42', 'Pending'),
(31, 'Randel T, Valimento', 2147483647, 'Anti-rabies Vaccination', '0000-00-00', 'Milkie', 'Aspin', 'White', 1, 'Male', 'note', '43', 'Pending'),
(32, 'April Joy R. Sablayan', 2147483647, 'Anti-rabies Vaccination', '0000-00-00', 'Emma', 'Labrador', 'Brown', 2, 'Female', 'note', '44', 'Pending'),
(33, 'Dean Jerick Igaya', 2147483647, 'Anti-rabies Vaccination', '0000-00-00', 'Caloy', 'Beagle', 'White', 2, 'Male', 'note', '42', 'Pending'),
(34, 'Randel T, Valimento', 2147483647, 'Anti-rabies Vaccination', '0000-00-00', 'Blacky', 'Labrador', 'Brown', 1, 'Male', 'note', '43', 'Pending'),
(35, 'April Joy R. Sablayan', 2147483647, 'Anti-rabies Vaccination', '0000-00-00', 'Blacky', 'Aspin', 'Brown', 2, 'Male', 'notes', '44', 'Pending'),
(36, 'Dean Jerick Igaya', 2147483647, 'Anti-rabies Vaccination', '0000-00-00', 'Ced', 'Labrador', 'White', 2, 'Male', 'note', '42', 'Pending'),
(37, 'Randel T, Valimento', 2147483647, 'Anti-rabies Vaccination', '0000-00-00', 'Ace', 'Aspin', 'Black', 1, 'Male', 'note', '43', 'Pending'),
(38, 'Randel T, Valimento', 2147483647, 'Castration', '0000-00-00', 'Browny', 'Labrador', 'Black', 2, 'Male', 'Test note', '43', 'Pending'),
(39, 'Cedric Escribel', 9123456, 'Anti-rabies Vaccination', '0000-00-00', 'Whitey', 'Labrador', 'Black', 12, 'Male', 'ready for vaccination', '45', 'Pending'),
(40, 'Cedric Escribel', 2147483647, 'Castration', '2023-09-24', 'Browny', 'Aspin', 'Brown', 12, 'Male', 'Male brown Aspin dog', '46', 'Pending');

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
(41, 'Ced@gmail.com', '$2y$10$28CqMjJKnJZt4ecJHwnyp.Y2vzX2k5csFTWjGQehS99EzjdL2Pocm', 'Cedric Escribel', '0718', '0951233456', '2023-09-09'),
(42, 'deanigaya@gmail.com', '$2y$10$SH.9urimO7EfoxFDoQ/.7OOv8VL4kQREvT0EtVATK8/PiSPmNU3ui', 'Dean Jerick Igaya', 'Pagal, Baliwag, Bulacan', '09352208378', '2023-09-09'),
(43, 'valimento2002@gmail.com', '$2y$10$fHZVOHhDC6bO/te7lZYC3Ol2Bb06P0ArJt.3uL0Tz8HQydbtZ/i.q', 'Randel T, Valimento', 'Tiaong, Baliwag, Bulacan', '09471238467', '2023-09-09'),
(44, 'apriljoy@gmail.com', '$2y$10$.sTt2lQSnbVcT0iqPMtQCuJ98uGsqwmJNlAhHwsc.CUIt0VbA9KrG', 'April Joy R. Sablayan', 'Pagala, Baliwag, Bulacan', '09648392710', '2023-09-09'),
(45, 'Cedric@gmail.com', '$2y$10$0IQo2ATDpAhodRMy9MzNxuXhs2Lh4cQu4o7fSspMdq598IIseyDN2', 'Cedric Escribel', '0718', '09123456', '2023-09-09'),
(46, 'Cedric1@gmail', '$2y$10$Fb.jhxZEoFTUoUIqoY2fy.nyN5GWIloxtmuAAymQYRpqFj9ncfAsK', 'Cedric Escribel', '0718123', '09512331235', '2023-09-24');

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
  MODIFY `AdoptReq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `catch`
--
ALTER TABLE `catch`
  MODIFY `DogCatch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `Dog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `dogs_pound`
--
ALTER TABLE `dogs_pound`
  MODIFY `DPoundID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `EventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `insemination`
--
ALTER TABLE `insemination`
  MODIFY `Insemination_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `rescue`
--
ALTER TABLE `rescue`
  MODIFY `Rescue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `Schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
