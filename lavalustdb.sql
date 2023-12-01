-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2023 at 08:24 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lavalustdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_employee`
--

CREATE TABLE `table_employee` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_employee`
--

INSERT INTO `table_employee` (`id`, `name`, `email`, `address`, `phone`) VALUES
(30, 'Chynna Alcantara', 'customer@gmail.com', 'SA BAHAY', 123456789),
(31, 'fernando de luna', 'customer@gmail.com', 'SA BAHAY', 123456789),
(32, 'King', 'pachecoking38@gmail.com', 'ewqddsd', 1213);

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `id` int NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'user',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`id`, `email`, `password`, `role`, `created_at`) VALUES
(25, 'admin@gmail.com', '$2y$10$LBydJvdLqi7m5aiN.TrNP.xIPQwB2bfjqf3xTB1fbyw1IyrRF5jxa', 'admin', '2023-11-27 15:23:32'),
(26, 'customer@gmail.com', '$2y$10$LBydJvdLqi7m5aiN.TrNP.xIPQwB2bfjqf3xTB1fbyw1IyrRF5jxa', 'user', '2023-11-27 15:26:59'),
(27, 'customer', '$2y$10$R1V1hrH1BRCcgz3HGLzK5ePPtKQsc.Igg4a/0i10PV24OSJCPRYDW', 'user', '2023-11-27 15:40:06'),
(28, 'customer@gmail.com', '$2y$10$0mpBXWNQDgqn/DXMIf16XOWm9pYXJmXDb0kkA0DbcNRSd8TTwGPtS', 'user', '2023-11-27 15:42:48'),
(29, 'customer@gmail.com', '$2y$10$qsyqXO6uvn.Z.aF1sjVGNOwQjm9pEyLflnrquUhJynZkBm.dA6pVW', 'user', '2023-11-27 15:42:59'),
(30, 'customer@gmail.com', '$2y$10$5eyidz1Mara3nhzztZN1JuRiVjxpCO1/SNGE/bRyRRwBcLtswKKkO', 'user', '2023-11-27 15:43:40'),
(31, 'pachecoking38@gmail.com', '$2y$10$/rozMb8xOVfDBIkmrmJZweArGSR6EIkbs2T6v5PUo9tfWF7KwjYtm', 'user', '2023-11-27 15:59:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_employee`
--
ALTER TABLE `table_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_employee`
--
ALTER TABLE `table_employee`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
