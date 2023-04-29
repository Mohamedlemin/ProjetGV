-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 29, 2023 at 04:17 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `Article`
--

CREATE TABLE `Article` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `datEx` date NOT NULL,
  `NumE` int(11) NOT NULL,
  `NomA` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Article`
--

INSERT INTO `Article` (`id`, `code`, `prix`, `datEx`, `NumE`, `NomA`) VALUES
(1, 123, 120, '2024-04-17', 1, 'Fanta'),
(2, 4930, 100, '2026-04-29', 2, 'Coca cola');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `dateN` varchar(50) NOT NULL,
  `numM` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `Nom`, `prenom`, `dateN`, `numM`) VALUES
(1, 'Mohamed', 'bechir', '1997-04-09', 49915181),
(2, 'Mekfoule', 'El bechir', '2002-04-29', 47572960);

-- --------------------------------------------------------

--
-- Table structure for table `Etagere`
--

CREATE TABLE `Etagere` (
  `id` int(11) NOT NULL,
  `NumE` varchar(50) NOT NULL,
  `NomR` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Etagere`
--

INSERT INTO `Etagere` (`id`, `NumE`, `NomR`) VALUES
(1, '1', 'Boissons'),
(2, '2', 'Boissons'),
(3, '3', 'Lait');

-- --------------------------------------------------------

--
-- Table structure for table `Rayon`
--

CREATE TABLE `Rayon` (
  `id` int(11) NOT NULL,
  `NomR` varchar(50) NOT NULL,
  `NomSF` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Rayon`
--

INSERT INTO `Rayon` (`id`, `NomR`, `NomSF`) VALUES
(1, 'Boissons', '1'),
(2, 'Lait', 'Mekfoula marche');

-- --------------------------------------------------------

--
-- Table structure for table `Supermarch`
--

CREATE TABLE `Supermarch` (
  `id` int(11) NOT NULL,
  `NomS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Supermarch`
--

INSERT INTO `Supermarch` (`id`, `NomS`) VALUES
(1, 'Mekfoula marche');

-- --------------------------------------------------------

--
-- Table structure for table `Ticket`
--

CREATE TABLE `Ticket` (
  `id` int(11) NOT NULL,
  `numM` int(11) NOT NULL,
  `datej` date NOT NULL,
  `codeA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Ticket`
--

INSERT INTO `Ticket` (`id`, `numM`, `datej`, `codeA`) VALUES
(1, 49915181, '2023-04-29', 123),
(2, 49915181, '2023-04-29', 4930);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `pass`, `role`) VALUES
(1, 'med', '12345', 'Admin'),
(2, 'ahmed', '123', 'Vendeur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Article`
--
ALTER TABLE `Article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Etagere`
--
ALTER TABLE `Etagere`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Rayon`
--
ALTER TABLE `Rayon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Supermarch`
--
ALTER TABLE `Supermarch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Ticket`
--
ALTER TABLE `Ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Article`
--
ALTER TABLE `Article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Etagere`
--
ALTER TABLE `Etagere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Rayon`
--
ALTER TABLE `Rayon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Supermarch`
--
ALTER TABLE `Supermarch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Ticket`
--
ALTER TABLE `Ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
