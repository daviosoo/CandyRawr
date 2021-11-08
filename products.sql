-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 04:51 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `candyrawr`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(150) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `brand`, `price`, `description`, `photo`) VALUES
(1, 'Trululu Snacks Aros/Caja x 12 Bolsas', 'Super', 16200, 'Deliciosas gomitas en formas de aros', 'https://firebasestorage.googleapis.com/v0/b/candyrawr-3606f.appspot.com/o/Aros.png?alt=media&token=7a911a5e-a75e-401a-bf29-c2ba0fff3124'),
(2, 'Trululu Snacks Gusanos Aceitados/Caja x 12 Bolsas', 'Super', 16200, 'Deliciosas gomitas en forma de gusanitos', 'https://firebasestorage.googleapis.com/v0/b/candyrawr-3606f.appspot.com/o/Gusanos.png?alt=media&token=a37730b1-9c03-449b-9664-5cbb491622a9'),
(3, 'Trululu Snacks Splash/Caja x 12 Bolsas', 'Super', 16200, 'Deliciosas gomitas en formas de splash', 'https://firebasestorage.googleapis.com/v0/b/candyrawr-3606f.appspot.com/o/Splash.png?alt=media&token=ed90c472-d6b2-4309-b594-8f2a61c21f03'),
(4, 'Trululu Snacks Franki Halloween', 'Super', 15900, 'Deliciosas gomitas en forma de Franki', 'https://firebasestorage.googleapis.com/v0/b/candyrawr-3606f.appspot.com/o/frankie.png?alt=media&token=cf89b248-1782-4334-b696-0f4e02f44d68'),
(5, 'Trululu Masmelos Barrilete/Caja x 12 Bolsas', 'Super', 16200, 'Deliciosos Masmelos en forma de barrilete', 'https://firebasestorage.googleapis.com/v0/b/candyrawr-3606f.appspot.com/o/masmelos.png?alt=media&token=9827309e-50fc-41a4-9595-30abd16b52f8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
