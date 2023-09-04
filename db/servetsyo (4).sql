-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 05:37 AM
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
  `id` int(11) NOT NULL,
  `FullName` varchar(128) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `PhoneNum` varchar(128) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `FindDog` varchar(25) NOT NULL,
  `interview` varchar(122) NOT NULL,
  `date` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `id` int(11) NOT NULL,
  `DogInfo` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Age` int(21) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`id`, `DogInfo`, `Name`, `Age`, `Gender`, `image`) VALUES
(31, 'details will be long details will be long details will be long details will be long details will be long ', 'details will be long ', 0, 'details will be long ', '64f45ccc6d3da.jpg'),
(32, 'details will be long details will be long details will be long details will be long details will be long ', 'details will be long ', 0, 'details will be long ', '64f45d08f116a.jpg'),
(33, 'details will be long ', 'details will be long ', 0, 'details will be long ', '64f45d1880d26.jpg'),
(34, 'details will be long details will be long ', 'details will be long details will be long ', 0, 'details will be long details will be long ', '64f45d22c7081.png'),
(35, 'details will be long details will be long ', 'details will be long details will be long ', 0, 'details will be long ', '64f45d31c0156.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `EventName` varchar(256) NOT NULL,
  `Details` varchar(512) NOT NULL,
  `image` varchar(258) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `EventName`, `Details`, `image`) VALUES
(1, 'try event', 'events', '64f4638fc5666.jpg'),
(2, 'event 2', 'details', '64f466e883560.jpg'),
(3, 'long detailslong details', 'long detailslong detailslong detailslong detailslong detailslong detailslong detailslong detailslong detailslong detailslong detailslong details', '64f46989aadcf.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rescue`
--

CREATE TABLE `rescue` (
  `id` int(11) NOT NULL,
  `Name` varchar(128) NOT NULL,
  `ContactNum` int(128) NOT NULL,
  `Details` varchar(256) NOT NULL,
  `Longitude` varchar(128) NOT NULL,
  `Latitude` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rescue`
--

INSERT INTO `rescue` (`id`, `Name`, `ContactNum`, `Details`, `Longitude`, `Latitude`) VALUES
(1, 'dog', 0, 'details', '', ''),
(2, '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `FullN` varchar(256) NOT NULL,
  `PhoneNum` int(18) NOT NULL,
  `Sched` varchar(128) NOT NULL,
  `Date` varchar(128) NOT NULL,
  `Time` varchar(128) NOT NULL,
  `Message` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `FullN`, `PhoneNum`, `Sched`, `Date`, `Time`, `Message`) VALUES
(1, 'cedric', 123, 'Vaccination', 'now', 'now', 'none'),
(2, '', 0, '', '', '', ''),
(3, '', 0, '', '', '', ''),
(4, 'cedric', 0, 'Vaccination', 'now', 'now', 'details');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Fullname` varchar(128) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `PhoneNum` varchar(24) NOT NULL,
  `CreateDate` date NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Email`, `Password`, `Fullname`, `Address`, `PhoneNum`, `CreateDate`, `Status`) VALUES
(31, 'cescribel21@gmail.com', '44ffe44097bbce02fbaa42734e92ae04', 'Cedric Escribel', 'Address', '09123', '2023-09-03', '0'),
(32, 'ced@gmail.com', '44ffe44097bbce02fbaa42734e92ae04', 'ced', 'ric', '123', '2023-09-04', ''),
(33, 'ced@gmail.com', '1ff1571b83c581bc954d9047e4e33e45', 'ced', 'ced', '23', '2023-09-04', ''),
(34, 'a', '$2y$10$QHVm8CtLge.zjIFJ7QSnhucihU1aW2omfZ7YV92N2I/xidz5nneeK', 'Cedric Escribel', '0718', 'a', '2023-09-04', ''),
(35, 'ced@dd.com', 'a', 'a', 'a', 'a', '2023-09-04', ''),
(36, 'a', '$2y$10$JmJRthSG3FkjEUlFuUdI2ewElweVS6wlinA/pObhPodQHVF01/Cm.', 'a', 'a', 'a', '2023-09-04', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoption`
--
ALTER TABLE `adoption`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rescue`
--
ALTER TABLE `rescue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adoption`
--
ALTER TABLE `adoption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rescue`
--
ALTER TABLE `rescue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
