-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 10:54 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'zuca@hotmail.com', '$2y$10$9ITkpCizSrW.wrugRE2Mrus1luf1HxWG8s3REiqSHitpUyEa/93OK'),
(5, 'leo@leo.com', '$2y$10$dbBinaele9vTC5x1Gt0EgOHK662LJ5UNtWDWk2SSzkLFIdQXmG0WC'),
(6, 'aron@aron.com', '$2y$10$p4JSuBZAwt8jwrZlVS1d2u.uQtBDdCkFaz.XdaKr8JpEf7zc5AMk.'),
(7, 'aron@aron.com', '$2y$10$TvI73Lp.bJffeU2eZkgDveOI7lMO9WuXRs4/wX9qwOlaPhEmkSqZG'),
(8, 'dejzon@hotmail.com', '$2y$10$xjEEhyr5BFKQ9612E3qJsOFKk7hrH2fDFOWu8M1gkMEmP7T1w78Am'),
(9, 'fifi@fifi.com', '$2y$10$gHC0UZisRqzB7QRhtGxVsOPSM8NDfGRC6xX6N6R/fbtJbTvV8/Oae');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
