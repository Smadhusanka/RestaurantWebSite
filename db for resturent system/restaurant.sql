-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 19, 2023 at 06:52 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `cusbooking`
--

DROP TABLE IF EXISTS `cusbooking`;
CREATE TABLE IF NOT EXISTS `cusbooking` (
  `tableID` int NOT NULL AUTO_INCREMENT,
  `cusName` varchar(50) NOT NULL,
  `cusEmail` varchar(50) NOT NULL,
  `cusDate` varchar(10) NOT NULL,
  `noOfPepole` int NOT NULL,
  `specialRequest` varchar(200) NOT NULL,
  PRIMARY KEY (`tableID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cusquery`
--

DROP TABLE IF EXISTS `cusquery`;
CREATE TABLE IF NOT EXISTS `cusquery` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cusName` varchar(50) NOT NULL,
  `cusEmail` varchar(50) NOT NULL,
  `cusSubject` varchar(50) NOT NULL,
  `cusMessage` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cusregister`
--

DROP TABLE IF EXISTS `cusregister`;
CREATE TABLE IF NOT EXISTS `cusregister` (
  `cusID` int NOT NULL AUTO_INCREMENT,
  `cusName` varchar(50) NOT NULL,
  `cusEmail` varchar(50) NOT NULL,
  `cusCity` varchar(20) NOT NULL,
  `cusAddress` varchar(50) NOT NULL,
  `cusMobileNumber` int NOT NULL,
  `cusUsername` varchar(15) NOT NULL,
  `cusPassword` varchar(15) NOT NULL,
  PRIMARY KEY (`cusID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drinkorder`
--

DROP TABLE IF EXISTS `drinkorder`;
CREATE TABLE IF NOT EXISTS `drinkorder` (
  `orderID` int NOT NULL AUTO_INCREMENT,
  `Cosmopolitan` int NOT NULL,
  `Margarita` int NOT NULL,
  `Mimosa` int NOT NULL,
  `Mojito` int NOT NULL,
  `MoscowMule` int NOT NULL,
  `OldFashioned` int NOT NULL,
  `PimmsCup` int NOT NULL,
  `Spritz` int NOT NULL,
  `totalPrice` int NOT NULL,
  `cusID` int NOT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foodorder`
--

DROP TABLE IF EXISTS `foodorder`;
CREATE TABLE IF NOT EXISTS `foodorder` (
  `orderID` int NOT NULL AUTO_INCREMENT,
  `kebabr` int NOT NULL,
  `Lasagna` int NOT NULL,
  `Paella` int NOT NULL,
  `Pizza` int NOT NULL,
  `Ramen` int NOT NULL,
  `Rendang` int NOT NULL,
  `Sushi` int NOT NULL,
  `TomYamGoongr` int NOT NULL,
  `totalPrice` int NOT NULL,
  `cusID` int NOT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shorteatsorder`
--

DROP TABLE IF EXISTS `shorteatsorder`;
CREATE TABLE IF NOT EXISTS `shorteatsorder` (
  `orderID` int NOT NULL AUTO_INCREMENT,
  `Burger` int NOT NULL,
  `ChineseRolls` int NOT NULL,
  `Cutlets` int NOT NULL,
  `Pastries` int NOT NULL,
  `Patties` int NOT NULL,
  `Sandwitches` int NOT NULL,
  `StuffedBuns` int NOT NULL,
  `VegitableRoti` int NOT NULL,
  `totalPrice` int NOT NULL,
  `cusID` int NOT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
