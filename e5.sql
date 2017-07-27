-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2017 at 03:04 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e5`
--

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id_img` int(10) UNSIGNED NOT NULL,
  `car` text NOT NULL,
  `img` text NOT NULL,
  `folder` text NOT NULL,
  `nbrSlika` int(10) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id_img`, `car`, `img`, `folder`, `nbrSlika`) VALUES
(1, '1', 'slika0.jpg', 'img/cars/Bugatti/', 6),
(2, '1', 'slika1.jpg', 'img/cars/Bugatti/', NULL),
(3, '1', 'slika2.jpg', 'img/cars/Bugatti/', NULL),
(4, '1', 'slika3.jpg', 'img/cars/Bugatti/', NULL),
(5, '1', 'slika4.jpg', 'img/cars/Bugatti/', NULL),
(6, '1', 'slika5.jpg', 'img/cars/Bugatti/', NULL),
(7, '2', 'slika6.jpg', 'img/cars/Bugatti/', NULL),
(8, '2', 'slika7.jpg', 'img/cars/Bugatti/', NULL),
(9, '2', 'slika8.jpg', 'img/cars/Bugatti/', NULL),
(10, '2', 'slika9.jpg', 'img/cars/Bugatti/', NULL),
(11, '3', 'slika0.jpg', 'img/cars/Rolls-Royce/', NULL),
(12, '3', 'slika1.jpg', 'img/cars/Rolls-Royce/', NULL),
(13, '3', 'slika2.jpg', 'img/cars/Rolls-Royce/', NULL),
(14, '3', 'slika3.jpg', 'img/cars/Rolls-Royce/', NULL),
(15, '3', 'slika4.jpg', 'img/cars/Rolls-Royce/', NULL),
(16, '3', 'slika5.jpg', 'img/cars/Rolls-Royce/', NULL),
(17, '4', 'slika6.jpg', 'img/cars/Rolls-Royce/', NULL),
(18, '4', 'slika7.jpg', 'img/cars/Rolls-Royce/', NULL),
(19, '4', 'slika8.jpg', 'img/cars/Rolls-Royce/', NULL),
(20, '4', 'slika9.jpg', 'img/cars/Rolls-Royce/', NULL),
(21, '5', 'slika0.jpg', 'img/cars/Bentley/', NULL),
(22, '5', 'slika1.jpg', 'img/cars/Bentley/', NULL),
(23, '5', 'slika2.jpg', 'img/cars/Bentley/', NULL),
(24, '5', 'slika3.jpg', 'img/cars/Bentley/', NULL),
(25, '5', 'slika4.jpg', 'img/cars/Bentley/', NULL),
(26, '6', 'slika0.jpg', 'img/cars/Lamborghini/', NULL),
(27, '6', 'slika1.jpg', 'img/cars/Lamborghini/', NULL),
(28, '6', 'slika2.jpg', 'img/cars/Lamborghini/', NULL),
(29, '6', 'slika3.jpg', 'img/cars/Lamborghini/', NULL),
(30, '6', 'slika4.jpg', 'img/cars/Lamborghini/', NULL),
(32, '7', 'slika1.jpg', 'img/cars/Porsche/', NULL),
(33, '7', 'slika2.jpg', 'img/cars/Porsche/', NULL),
(34, '7', 'slika3.jpg', 'img/cars/Porsche/', NULL),
(35, '7', 'slika4.jpg', 'img/cars/Porsche/', NULL),
(36, '7', 'slika5.jpg', 'img/cars/Porsche/', NULL),
(37, '8', 'slika0.jpg', 'img/cars/McLaren/', NULL),
(38, '8', 'slika1.jpg', 'img/cars/McLaren/', NULL),
(39, '8', 'slika2.jpg', 'img/cars/McLaren/', NULL),
(40, '8', 'slika3.jpg', 'img/cars/McLaren/', NULL),
(41, '8', 'slika4.jpg', 'img/cars/McLaren/', NULL),
(42, '8', 'slika5.jpg', 'img/cars/McLaren/', NULL),
(43, '2', 'slika10.jpg', 'img/cars/Bugatti/', NULL),
(44, '2', 'slika11.jpg', 'img/cars/Bugatti/', NULL),
(45, '6', 'slika5.jpg', 'img/cars/Lamborghini/', NULL),
(46, '7', 'slika6.jpg', 'img/cars/Porsche/', NULL),
(47, '5', 'slika5.jpg', 'img/cars/Bentley/', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sve`
--

CREATE TABLE `sve` (
  `id` int(10) UNSIGNED NOT NULL,
  `Make` text NOT NULL,
  `Model` text NOT NULL,
  `Model_Year` text NOT NULL,
  `Mileage` text NOT NULL,
  `Engine` text NOT NULL,
  `Cylinder` text NOT NULL,
  `Transmission` text NOT NULL,
  `Exterior_Color` text NOT NULL,
  `Interior_Color` text NOT NULL,
  `Door` text NOT NULL,
  `numberMark` int(10) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sve`
--

INSERT INTO `sve` (`id`, `Make`, `Model`, `Model_Year`, `Mileage`, `Engine`, `Cylinder`, `Transmission`, `Exterior_Color`, `Interior_Color`, `Door`, `numberMark`) VALUES
(1, 'Bugatti', 'Veyron', '2014', '11,000 KM', '8.0 L', 'W16', 'Automatic', 'Platinum Silver', 'Ivory', '2', 12),
(2, 'Bugatti', 'Veyron', '2012', '19,000 KM', '8.0 L', 'W16', 'Automatic', 'Red', 'Black', '2', 12),
(3, 'Rolls-Royce', 'Phantom', '2016', '3,000 KM', '6.8 L', 'V12', 'Automatic', 'White', 'Blue', '2', 10),
(4, 'Rolls-Royce', 'Ghost', '2016', 'New', '6.5 L', 'V12', 'Automatic', 'Smokey Quartz', 'Ivory', '4', 10),
(5, 'Bentley', 'Arnage', '2006', '17,000 KM', '6.8 L', 'V8', 'Automatic', 'Blue', 'Beige', '4', 6),
(6, 'Lamborghini', 'Aventador', '2016', '2,000 KM', '6.5 L', 'V12', 'Automatic', 'Yellow', 'Black', '2', 6),
(7, 'Porsche', '911', '2016', '11,000 KM', '4.0 L', 'V6', 'Automatic', 'Purple', 'Black', '2', 7),
(8, 'McLaren', '675', '2016', 'New', '3.8 L', 'V8', 'Automatic', 'White', 'Black', '2', 6),
(9, 'Bugatti', 'Korel', '2014', '11,000 KM', '8.0 L', 'W16', 'Manual', 'Platinum Silver', 'Ivory', '2', 0),
(10, 'Bugatti', 'Korel', '2014', '11,000 KM', '8.0 L', 'W16', 'Manual', 'Red', 'Black', '6', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idusers` int(11) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `potvrda` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idusers`, `name`, `email`, `pass`, `status`, `potvrda`) VALUES
(1, 'Test', 'test@test.com', '*C79449F2604761E3DE642326A7AEAA6F6D5AC6BA', 'Admin', '1'),
(2, 'Test', 'test@tesst.com', '*C79449F2604761E3DE642326A7AEAA6F6D5AC6BA', 'Admin', '1'),
(3, 'Test', 'teesst@teesst.com', '*C79449F2604761E3DE642326A7AEAA6F6D5AC6BA', NULL, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id_img`);

--
-- Indexes for table `sve`
--
ALTER TABLE `sve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idusers`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id_img` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `sve`
--
ALTER TABLE `sve`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idusers` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
