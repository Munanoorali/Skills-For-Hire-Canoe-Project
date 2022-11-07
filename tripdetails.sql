-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 07, 2022 at 07:52 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tripdetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `tripsdetails`
--

DROP TABLE IF EXISTS `tripsdetails`;
CREATE TABLE IF NOT EXISTS `tripsdetails` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `heading` varchar(30) NOT NULL,
  `tripDate` date NOT NULL,
  `duration` int(3) NOT NULL,
  `summary` text NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tripsdetails`
--

INSERT INTO `tripsdetails` (`id`, `heading`, `tripDate`, `duration`, `summary`) VALUES
(1, 'Halifax', '2022-12-07', 14, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.                     Vestibulum ex lacus, vehicula vitae facilisis et, ullamcorper et lectus.                     Pellentesque habitant morbi tristique senectus et netus et malesuada fames                     ac turpis egestas. Etiam consequat ipsum lorem, vel imperdiet elit maximus id.                     Suspendisse elementum ultricies nunc, eu efficitur neque. Donec ante nisi,                     condimentum eu dictum eget, tempor a eros. Nunc porttitor finibus justo.                     Suspendisse et lacinia ligula. Mauris condimentum gravida porttitor.'),
(2, 'Sydney', '2022-11-23', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Vestibulum ex lacus, vehicula vitae facilisis et, ullamcorper et lectus.Pellentesque habitant morbi tristique senectus et netus et malesuada famesac   eestas. Etiam consequat ipsum lorem, vel imperdiet elit maximus id.Suspendisse elementum ultricies nunc, eu efficitur neque. Donec ante nisi, condimentum eu dictum eget, tempor a eros. Nunc porttitor finibus justo. Suspendisse et lacinia ligula. Mauris condimentum gravida porttitor.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
