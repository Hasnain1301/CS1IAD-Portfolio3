-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 12:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astoncv`
--

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE `cvs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyprogramming` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `URLlinks` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cvs`
--

INSERT INTO `cvs` (`id`, `name`, `email`, `password`, `keyprogramming`, `profile`, `education`, `URLlinks`) VALUES
(1, 'hasnain', 'hasnain123@gmail.com', '$2y$10$SQ1aONONEz/3PFeT.nHv2e/48DT758ByNdkbbS0St/gUQOlCq9Idm', 'python', 'software developer', 'aston uni', 'https://uk.linkedin.com/'),
(2, 'harry', 'harry@gmail.com', '$2y$10$gXfv/APaEIByuWwJaMcU8u4oAMHfX2vWEGcgylW2Xrn9DSj5VCthG', 'python', 'student', 'university', 'https://uk.linkedin.com/'),
(3, 'john', 'john@gmail.com', '$2y$10$x30Bk20ydE6NzX3Tym0w/uPSCezzOhaDHAA83ZByIpy/eBiaHniaS', 'java', 'software eng', 'graduate', 'https://uk.linkedin.com/'),
(4, 'smith', 'simth@gmail.com', '$2y$10$8EA1iT1O3JaclJyfyYFCLuDnPucfF83e/LMbPq0kihyJl0xJ2JRmS', 'c++', 'student', 'degree', 'https://uk.linkedin.com/'),
(5, 'harvey', 'harvey@gmail.com', '$2y$10$Z3TphOMIB.sSeJzKax34juZBZ0KLbgosXdqNP590zuPm1lncBR/W2', 'python', 'student', 'uni student', 'https://uk.linkedin.com/'),
(6, 'dustin ', 'dustin@gmail.com', '$2y$10$eyTZVoFHL2BBUi2Mu5YxpOd2BqzolB3BKckMmiJOBYouzCaTDgp9a', 'javascript', 'ceo of a company', 'graduate', 'https://uk.linkedin.com/'),
(7, 'Liam', 'liam@gmail.com', '$2y$10$BTjQqd/XSs0Y7Gb6FgcJM.g3FXbd3ADFTbE7MuexzT9AiItF98nMe', 'java', 'teacher', 'graduate', 'https://uk.linkedin.com/'),
(8, 'Noah', 'noah@gmail.com', '$2y$10$YaIoxUTZhoLT0iZPiiDYoO5.FkB7Hs2NmJgDrhe95YjgpGVe98O4O', 'c#', 'software eng', 'graduate', 'https://uk.linkedin.com/'),
(9, 'Olivia', 'Olivia@gmail.com', '$2y$10$qDpeqI0Y8Tht8GvFkNveF.nv1ENd4RvaZWP/8a8sjP6glep9IHfeu', 'java', 'technician', 'employee', 'https://uk.linkedin.com/'),
(10, 'Emma', 'Emma@gmail.com', '$2y$10$sal6BYewRkkeMTygiNxeyOmQkxO3HJIf6ZxLhFFWOlB04bWd/TClq', 'python', 'uni student', 'undergrad', 'https://uk.linkedin.com/'),
(11, 'Ava', 'Ava@gmail.com', '$2y$10$RNT0QqqpQWDVN8tiG/qcheqpGrwsjv0cK8CONQdJQ9QAE7FnuPaPm', 'c#', 'secondary school', 'in school', 'https://uk.linkedin.com/'),
(12, 'alex', 'alex@gmail.com', '$2y$10$uWoMkidqTptgxfUMoMe85.VigXGJeKIl4tXDmgbWwYKAIt6EePAxa', 'c++', 'working in a tech company', 'graduate', 'https://uk.linkedin.com/'),
(13, 'Hayden', 'hayden@gmail.com', '$2y$10$7izxxAyBp81Jt54pa9EI0ekb2QlXAIbc3UVTiL30Q.c9lV9j7Ue7G', 'javascript', 'lecturer', 'graduate', 'https://uk.linkedin.com/'),
(14, 'Ian', 'ian@gmail.com', '$2y$10$D8km6LYrduwIxtD5bI89AORNz70yItjbkHvo2ND.asIQr4exz7waK', 'javascript', 'owner of a company', 'graduate', 'https://uk.linkedin.com/'),
(15, 'Bailey', 'bailey@gmail.com', '$2y$10$zGxCUJOcBG5N7RQQj6ZzF.Xc/44u7gtM9B0iA41qCMx7MiWKjs3q.', 'java', 'software developer', 'graduate', 'https://uk.linkedin.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
