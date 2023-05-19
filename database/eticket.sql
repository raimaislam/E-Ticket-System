-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 05:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtrain`
--

CREATE TABLE `addtrain` (
  `VendorName` varchar(30) NOT NULL,
  `TrainCode` varchar(30) NOT NULL,
  `TrainName` varchar(30) NOT NULL,
  `FirstClass` int(50) NOT NULL,
  `EcoClass` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addtrain`
--

INSERT INTO `addtrain` (`VendorName`, `TrainCode`, `TrainName`, `FirstClass`, `EcoClass`) VALUES
('Remo', '793', 'Panchaghar Express', 50, 200),
('Remo', '703', 'Mahanagar Godhuli', 50, 200),
('Remo', '704', 'Mahanagar Godhuli', 50, 200);

-- --------------------------------------------------------

--
-- Table structure for table `cusdata`
--

CREATE TABLE `cusdata` (
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `DateOfBirth` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cusdata`
--

INSERT INTO `cusdata` (`FirstName`, `LastName`, `Email`, `Password`, `DateOfBirth`, `Phone`) VALUES
('Zaid', 'Islam', 'zaidislam@gmail.com', '12345', '2023', '1897267890'),
('Zain', 'Imam', 'zainimamm@gmail.com', '1234567', '2023', '1721926840'),
('Tae', 'Sul', 'taesul@gmail.com', '123456', '2023-03-22', '01715980988'),
('Tara', 'alam', 'tarasingh@gmail.com', '123456789', '2023-03-15', '01717898241');

-- --------------------------------------------------------

--
-- Table structure for table `cusschedule`
--

CREATE TABLE `cusschedule` (
  `phone` varchar(100) NOT NULL,
  `train` varchar(100) NOT NULL,
  `fromstation` varchar(100) NOT NULL,
  `tostation` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `username` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`username`, `phone`, `email`, `address`, `password`, `gender`, `dob`, `nid`) VALUES
('myname', '', 'nazat.mf@gmail.com', '', '', 'male', '', '../resources/nazat mustag.jpg'),
('nazat mustag', '01968141122', 'mt@gmail.com', 'Road#8,Block#B', 'Agent4747#', 'male', '2023-04-20', '../resources/nazat mustag.jpg'),
('dasha taranka', '01793231124', 'dasha@gmail.com', 'uttara,dhaka', 'Agent4747#', 'female', '2023-04-01', '../resources/dasha taranka.jpg'),
('jamal khan', '01979427788', 'jamal@gmail.com', 'gulshan,dhaka', 'Agent4747#', 'male', '2023-05-02', '../resources/jamal khan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `train` varchar(100) NOT NULL,
  `fromstation` varchar(100) NOT NULL,
  `tostation` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `seats` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `booked` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`train`, `fromstation`, `tostation`, `date`, `time`, `seats`, `price`, `booked`) VALUES
('Mahanagar', 'Dhaka', 'Mymensingh', '2023-04-10', '12:00pm', 765, 550, 10),
('Choutala', 'Chattagram', 'Dhaka', '2023-04-14', '2:00pm', 850, 0, 0),
('Express', 'Dhaka', 'coxbazar', '2023-04-25', '7:00pm', 830, 0, 0),
('Express', 'Dhaka', 'Mymensingh', '2023-04-13', '8:00am', 760, 0, 0),
('Jatra', 'Bogura', 'Dhaka', '2023-05-15', '12:00pm', 560, 899, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
