-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2023 at 03:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shp`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'Long ribbed off-shoulder dress', 1990),
(2, 'Long Gathered Sheer Cami Dress', 999),
(3, 'Lace Bodycon Dress With Ruffle', 2999),
(4, 'Asymmetric Knit Dress', 1445),
(5, 'Knit Dress', 1999),
(6, 'Long Flared Chiffon Dress With Cold Shoulders', 2999),
(7, 'Solids: Sage Green', 599),
(8, 'Solids: Mustard', 399),
(9, 'Aqua (Colourblock)', 799),
(10, 'Disney: Cute Maleficent', 549),
(11, 'Solids: White', 599),
(12, 'Tie Dye: Grey & Black', 699);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` text NOT NULL,
  `username` varchar(18) NOT NULL,
  `email` varchar(21) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `username`, `email`, `password`) VALUES
('Tejal', 'Tejal', 'kotatejal12@gmail.com', '$2y$10$C/5dF32gb.nbsLuU.gDfXu24tNEy.vCCybkNkdmGo3FQFxKDpsmim'),
('V', 'V', 'viv@gmail.com', '$2y$10$o2xGomzxLbPr2ijJkL1o9O4QJ0QPbSvDchNABCVIjOawH0z6h2r6.'),
('vivaan', 'vivaan', 'pranavvpendal1@gmail.', '$2y$10$0h3Jdwz0CmdQjATk7ylQ8.NbM/9iVSqgZAmhJXjaWK6/gqgHDbJ.u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
