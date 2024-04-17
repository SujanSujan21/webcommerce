-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2024 at 02:04 PM
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
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_image1`, `product_image2`, `product_price`) VALUES
(1, 'Pedigree Pro Adult Small Breed', 'prod-1.0.jpg', 'prod-1.jpg', '189'),
(2, 'Drools Focus Puppy Super Premium Dry Dog Food', 'prod-2.jpg', 'prod-2.0.jpg', '1692'),
(3, 'Meat Up Chicken Flavour Real Chicken Biscuit', 'prod-3.jpg', 'prod-3.0.jpg', '375'),
(4, 'Himalaya Healthy Pet Chunk Dog Food - Adult, Chicken Flavour', 'prod-4.jpg', 'prod-4.0.jpg', '327'),
(5, 'Foodie Puppies Interactive Non-Toxic Soft Latex Chew Squeaky Rugby Ball for Dogs', 'prod-5.jpg', 'prod-5.0.jpg', '525'),
(6, 'Non Toxic Rubber Spiked Ball | Chew Toy for Dogs, Puppies, Pets', 'prod-6.jpg', 'prod-6.0.jpg', '250.45'),
(7, 'Petroyale Furpro-40 | Protein Powder for Dogs | Shedding Control for Pets ', 'prod-7.jpg', 'prod-7.0.jpg', '1200.60'),
(8, 'Drools Absolute Skin + Coat Tablet- Dog Supplement, 50 Pieces', 'prod-8.jpg', 'prod-8.0.jpg', '386.80');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
