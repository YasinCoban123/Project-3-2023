-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 07:55 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoenreus`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `naam_achternaam` varchar(50) NOT NULL,
  `telefoonnummer` varchar(10) NOT NULL,
  `onderwerp` varchar(255) NOT NULL,
  `bericht` varchar(255) NOT NULL,
  `datum` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idproduct` int(10) NOT NULL,
  `naam` varchar(40) NOT NULL,
  `land` varchar(255) NOT NULL,
  `prijs` decimal(7,2) NOT NULL,
  `aantal_keer_gekocht` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idproduct`, `naam`, `land`, `prijs`, `aantal_keer_gekocht`) VALUES
(1, 'Nike Sock Dart Premium', 'USA', '89.00', ''),
(2, 'Nike Air Max Alpha', 'USA', '69.00', ''),
(3, 'Nike Air Max System', 'USA', '79.00', ''),
(4, 'Reebok NFX ', 'United Kingdom', '49.00', ''),
(5, 'Nike Air Max Alpha Trainer 5', 'USA', '59.00', ''),
(6, 'Puma X-ray Speed', 'Germany', '0.00', ''),
(7, 'O\'Neill Alta Men High Snowboots', 'USA', '49.00', ''),
(8, 'Adidas Pure Boost', 'Germany', '99.00', ''),
(9, 'Nike Air Max LTD 3', 'USA', '109.00', ''),
(10, 'Adidas Hoops 3.0', 'Germany', '39.00', ''),
(11, 'Asics Gel-Cumulus 24', 'Japan', '119.00', ''),
(2, 'Nike Air Max Alpha', 'USA', '69.00', ''),
(3, 'Nike Air Max System', 'USA', '79.00', ''),
(4, 'Reebok NFX ', 'United Kingdom', '49.00', ''),
(5, 'Nike Air Max Alpha Trainer 5', 'USA', '59.00', ''),
(6, 'Puma X-ray Speed', 'Germany', '0.00', ''),
(7, 'O\'Neill Alta Men High Snowboots', 'USA', '49.00', ''),
(8, 'Adidas Pure Boost', 'Germany', '99.00', ''),
(9, 'Nike Air Max LTD 3', 'USA', '109.00', ''),
(10, 'Adidas Hoops 3.0', 'Germany', '39.00', ''),
(11, 'Asics Gel-Cumulus 24', 'Japan', '119.00', ''),
(12, 'Adidas East Trail 2.0 Rain.RDY', 'Germany', '99.00', ''),
(13, 'Adidas Ultraboost 23', 'Germany', '149.00', ''),
(14, 'Adidas Adipower', 'Germany', '139.00', ''),
(2, 'Nike Air Max Alpha', 'USA', '69.00', ''),
(3, 'Nike Air Max System', 'USA', '79.00', ''),
(4, 'Reebok NFX ', 'United Kingdom', '49.00', ''),
(5, 'Nike Air Max Alpha Trainer 5', 'USA', '59.00', ''),
(6, 'Puma X-ray Speed', 'Germany', '0.00', ''),
(7, 'O\'Neill Alta Men High Snowboots', 'USA', '49.00', ''),
(8, 'Adidas Pure Boost', 'Germany', '99.00', ''),
(9, 'Nike Air Max LTD 3', 'USA', '109.00', ''),
(10, 'Adidas Hoops 3.0', 'Germany', '39.00', ''),
(11, 'Asics Gel-Cumulus 24', 'Japan', '119.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `retour`
--

CREATE TABLE `retour` (
  `id` int(10) NOT NULL,
  `naam_achternaam` varchar(50) NOT NULL,
  `telefoonnummer` varchar(10) NOT NULL,
  `ordernummer` varchar(30) NOT NULL,
  `reden` varchar(255) NOT NULL,
  `datum` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retour`
--
ALTER TABLE `retour`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `retour`
--
ALTER TABLE `retour`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;