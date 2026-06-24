-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2026 at 05:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nova_baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `korisnickoime` varchar(50) DEFAULT NULL,
  `lozinka` varchar(50) DEFAULT NULL,
  `drzava` varchar(50) DEFAULT NULL,
  `opis` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ime`, `prezime`, `korisnickoime`, `lozinka`, `drzava`, `opis`, `created_at`, `updated_at`, `email`, `phone`) VALUES
(1, 'ivan', 'vrancic', NULL, NULL, NULL, NULL, '2026-06-24 02:14:43', '2026-06-24 02:14:43', '', NULL),
(3, 'ivan', 'kovacic', NULL, NULL, NULL, NULL, '2026-06-24 02:15:22', '2026-06-24 02:15:22', 'ivan2', NULL),
(4, 'lana', 'kovacic', NULL, NULL, NULL, NULL, '2026-06-24 02:15:33', '2026-06-24 02:15:33', '2', NULL),
(5, 'lana', 'stipancic', NULL, NULL, NULL, NULL, '2026-06-24 02:15:49', '2026-06-24 02:15:49', '23', NULL),
(6, 'a', 'a', 'a', '$2y$10$vMqQiyKAq4hTgdSPDrpxAOoXu7znhBqo/MCNlolpi/r', 'hrv', NULL, '2026-06-24 03:06:50', '2026-06-24 03:06:50', 'a@gmail.com', NULL),
(7, 'karlo', 'karlic', 'karlic', '$2y$10$ceYzrCVhIQiR86BomkUbmeT5lWLYTk8fRnJ5qEH4gDL', 'eng', NULL, '2026-06-24 03:07:21', '2026-06-24 03:07:21', 'karlo@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `korisnickoime` (`korisnickoime`),
  ADD KEY `ime` (`ime`,`prezime`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
