-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2024 at 03:51 PM
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
-- Database: `crp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED DEFAULT NULL,
  `car_id` int(10) UNSIGNED DEFAULT NULL,
  `numberOfDays` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `customer_id`, `car_id`, `numberOfDays`, `price`) VALUES
(27, 1, 18, '1', '1455'),
(28, 1, 18, '1', '21247.027439999998'),
(29, 1, 19, '1', '4850'),
(30, 1, 20, '1', '3880'),
(31, 1, 21, '8', '18624'),
(32, 1, 21, '1', '18065.28'),
(33, 13, 26, '4', '27160'),
(34, 14, 22, '3', '5238'),
(35, 14, 25, '11', '18139'),
(36, 15, 19, '6', '29100'),
(37, 16, 23, '6', '6984'),
(38, 8, 32, '4', '197880'),
(39, 8, 20, '3', '14550'),
(40, 11, 26, '2', '15520');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(6) UNSIGNED NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `year` int(4) NOT NULL,
  `color` varchar(30) DEFAULT NULL,
  `rental_price` decimal(10,2) DEFAULT NULL,
  `available` tinyint(1) DEFAULT 1,
  `new` int(11) DEFAULT NULL,
  `Discription` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `brand`, `model`, `year`, `color`, `rental_price`, `available`, `new`, `Discription`) VALUES
(18, 'Ertiga', 'Ertiga top model', 2006, 'white& black', 1500.00, 1, NULL, 'The Maruti Ertiga has 1 Petrol Engine and 1 CNG Engine on offer. The Petrol engine is 1462 cc while the CNG engine is 1462 cc . It is available with Manual & Automatic transmission.Depending upon the variant and fuel type the Ertiga has a mileage of 20.3 kmpl to 26.11 /Km .'),
(19, 'Range Rover', 'Range Rover', 1998, 'white', 5000.00, 1, 1, 'The Land Rover Range Rover, generally shortened to Range Rover, is a 4x4 luxury SUV produced by Land Rover, a marque and sub-brand of Jaguar Land Rover. The Range Rover line was launched in 1970 by British Leyland and is now in its fifth generation.'),
(20, 'Maruti Suzuki Jimny', 'jimny', 2016, 'Black&yellow', 4000.00, 1, 1, 'The Suzuki Jimny is a series of four-wheel drive off-road mini SUVs that have been manufactured and marketed by Suzuki since 1970. The Jimny has a 1.5 liter engine, a robust ladder frame, three ample body angles, and 3-link rigid axle suspensions with coil springs. It also has 4WD with a low-range transfer gear. '),
(21, 'Mahendra XUV', 'mahendra', 2014, 'white', 2400.00, 1, 1, 'The Mahindra XUV500 is a compact crossover SUV produced by the Indian automobile manufacturer Mahindra & Mahindra. '),
(22, 'Hundai Exter', 'Hundai', 2009, 'white', 1800.00, 1, NULL, 'Hyundai Exter Pros. Well-positioned overall package. Priced competitively against rivals. Unique looks with the H-shaped LED DRLs & tail-lamps and crossover styling'),
(23, 'Tata Nexon', 'TATA', 1990, 'red', 1200.00, 1, NULL, 'The Tata Nexon is a subcompact crossover SUV produced by the Indian automaker Tata Motors since 2017.'),
(24, 'Hyundai 120', 'Hyundai', 2002, 'red', 1300.00, 1, NULL, 'The Hyundai i20 is a supermini hatchback produced by Hyundai since 2008. The i20 made its debut at the Paris Motor Show in October 2008, and sits between the i10 and i30'),
(25, 'Toyota Rumion ', 'Toyota', 2003, 'red', 1700.00, 1, 1, 'The Hyundai i20 has 1 Petrol Engine on offer. The Petrol engine is 1197 cc . It is available with Manual & Automatic transmission.Depending upon the variant and fuel type the i20 has a mileage of 16.0 to 20.0 kmpl .'),
(26, 'Toyota Land Cruiser ', 'Land Cruiser ', 2022, 'white', 7000.00, 1, 1, 'The Toyota Land Cruiser has a legendary resume as an off-roader, but the current model comes across as more luxurious than adventurous'),
(27, 'Kia Seltos ', 'Seltos ', 2021, 'blue', 700.00, 1, NULL, 'The Kia Seltos has 1 Diesel Engine and 2 Petrol Engine on offer. The Diesel engine is 1493 cc while the Petrol engine is 1497 cc and 1482 cc . It is available with Automatic & Manual transmission.'),
(29, 'skoda', 'skoda', 2022, 'blue ', 800.00, 1, NULL, 'There are a total of 3 Skoda models currently on sale in India. These include 1 Sedan and 2 SUVs. Skoda has 4 upcoming car launches in India - the Skoda Enyaq iV, Skoda Octavia RS iV, Skoda Kodiaq 2024, Skoda Superb 2024'),
(30, 'mahendra scorpio', 'mahendra2022', 2000, 'red', 2200.00, 1, NULL, 'The Mahindra Scorpio has 3 Diesel Engine on offer. The Diesel engine is 2523 cc and 2179 cc and 1997 cc . It is available with Manual & Automatic transmission.Depending upon the variant and fuel type the Scorpio has a mileage of 16.36 kmpl & Ground clearance of Scorpio is 180mm.'),
(31, 'Kia Sonet', 'kia', 2010, 'red', 2600.00, 1, NULL, 'The trim is available in two engine options, 1.0-litre turbo petrol engine and the 1.5-litre CRDi diesel.'),
(32, 'rolls royce', 'rolls royce fantom', 2020, 'blue', 50000.00, 1, NULL, 'The first automobile creation of Rolls-Royce only had 10 hp.This vehicle had a double 1.8-liter cylinder and was a three-speed manual transmission engine.'),
(33, 'honda amaze', 'amaze', 2020, 'brown', 3000.00, 1, NULL, 'asdfghjklasdfghjkl');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `carID` int(11) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `carID`, `start`, `end`) VALUES
(3, 18, '2024-01-17', '2024-01-18'),
(4, 18, '2024-01-19', '2024-01-20'),
(5, 19, '2024-01-17', '2024-01-18'),
(6, 20, '2024-01-17', '2024-01-18'),
(7, 21, '2024-01-17', '2024-01-25'),
(8, 21, '2024-01-10', '2024-01-11'),
(9, 26, '2024-01-26', '2024-01-30'),
(10, 22, '2024-01-28', '2024-01-31'),
(11, 25, '2024-01-30', '2024-02-10'),
(12, 19, '2024-01-31', '2024-02-06'),
(13, 23, '2024-01-24', '2024-01-30'),
(14, 32, '2024-02-01', '2024-02-05'),
(15, 20, '2024-02-03', '2024-02-06'),
(16, 26, '2024-02-21', '2024-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `email`, `password`) VALUES
(1, 'kull', 'k@gmail.com', '12345678'),
(8, 'kuldeepmishraa_', 'kuldeepmishra8461@gmail.com', '987456321'),
(9, 'yash kulkarni', 'kulkarniyash01@gmail.com', 'yash'),
(11, 'Shivam', 'shivamdhura69@gmail.com', 'dhura69'),
(12, 'vivek', 'vivek01@gmail.com', '753159'),
(13, 'krishnakant', 'krishna@gmail.com', '6897'),
(14, 'shivalimam', 'shivali@gmail.com', '123456'),
(15, 'nehamam', 'neha@gmail.com', '123456'),
(16, 'mohan', 'mohan23@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
