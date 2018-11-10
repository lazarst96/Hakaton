-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2018 at 10:14 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmf`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`user_id`) VALUES
(3);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `source` varchar(256) NOT NULL,
  `report_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `source`, `report_id`) VALUES
(1, 'snoopy-2.png', 17);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `user_id` int(11) NOT NULL,
  `phone` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`user_id`, `phone`) VALUES
(1, '064 8573941'),
(2, '+381 66 7584851');

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE `reminder` (
  `id` int(11) NOT NULL,
  `therapy_id` int(11) NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `visited` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `therapy_id` int(11) NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `therapy_id`, `time`, `description`) VALUES
(1, 1, '2018-10-07 09:30:05', 'Sve ok, mazem atlex.'),
(2, 1, '2018-10-10 09:30:05', 'Sve ok, mazem atlex.'),
(3, 1, '2018-10-13 09:30:05', 'Sve ok, mazem atlex.'),
(4, 1, '2018-10-16 09:30:05', 'Sve ok, mazem atlex.'),
(5, 1, '2018-10-19 09:30:05', 'Sve ok, mazem atlex.'),
(6, 1, '2018-10-22 09:30:05', 'Sve ok, mazem atlex.'),
(7, 1, '2018-10-25 09:30:05', 'Sve ok, mazem atlex.'),
(8, 1, '2018-10-28 10:30:05', 'Sve ok, mazem atlex.'),
(9, 1, '2018-10-31 10:30:05', 'Sve ok, mazem atlex.'),
(10, 1, '2018-11-03 10:30:05', 'Sve ok, mazem atlex.'),
(11, 1, '2018-11-06 10:30:05', 'Sve ok, mazem atlex.'),
(12, 1, '2018-11-09 10:30:05', 'Sve ok, mazem atlex.'),
(13, 2, '2009-11-08 07:22:54', 'Izgleda isto kao pre. Danka'),
(14, 2, '2010-11-08 07:22:54', 'Izgleda isto kao pre. Danka'),
(15, 2, '2011-11-08 07:22:54', 'Izgleda isto kao pre. Danka'),
(16, 2, '2012-11-08 07:22:54', 'Izgleda isto kao pre. Danka'),
(17, 2, '2013-11-08 07:22:54', 'Izgleda drugacije, saljem sliku. Danka'),
(18, 3, '2013-12-26 08:22:54', 'Dobro sam, malo me svrbe konci. Danka');

-- --------------------------------------------------------

--
-- Table structure for table `therapy`
--

CREATE TABLE `therapy` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `open_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `close_time` timestamp NULL DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `description` text,
  `period` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `therapy`
--

INSERT INTO `therapy` (`id`, `patient_id`, `doctor_id`, `open_time`, `close_time`, `name`, `description`, `period`) VALUES
(1, 1, 3, '2018-10-04 09:30:05', NULL, 'Atletsko stopalo', 'Pacijent ima atletsko stopalo. Prepisana je terapija preparatom atlex na svaka 3 dana.', 3),
(2, 2, 3, '2009-11-05 07:22:54', '2013-11-23 14:05:13', 'Promena na melanomu', 'Pacijentu je preporuceno da prati promene na melanomu na levoj podlaktici jednom godisnje.', 365),
(3, 2, 3, '2013-12-24 08:45:00', '2014-03-24 08:45:00', 'Operacija', 'Pracenje stanja posle operacije uklanjanja melanoma', 14);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `password` varchar(256) DEFAULT NULL,
  `citizen_id` varchar(16) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `name`, `password`, `citizen_id`, `type`) VALUES
(1, 'dragisa4@eps.rs', 'Dragisa Stankovic', 'gaga1', '1104955730055', 0),
(2, 'dankajov@ptt.rs', 'Danka Jovanovic', 'zucapariz', '0607956735044', 0),
(3, 'zoran.kostic113@gmail.com', 'Zoran Kostic', '12345', '0511968730033', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `report_id` (`report_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `reminder`
--
ALTER TABLE `reminder`
  ADD PRIMARY KEY (`id`),
  ADD KEY `therapy_id` (`therapy_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `therapy_id` (`therapy_id`);

--
-- Indexes for table `therapy`
--
ALTER TABLE `therapy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`report_id`) REFERENCES `report` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reminder`
--
ALTER TABLE `reminder`
  ADD CONSTRAINT `reminder_ibfk_1` FOREIGN KEY (`therapy_id`) REFERENCES `therapy` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`therapy_id`) REFERENCES `therapy` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `therapy`
--
ALTER TABLE `therapy`
  ADD CONSTRAINT `therapy_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `therapy_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
