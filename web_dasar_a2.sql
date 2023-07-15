-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 11:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_dasar_a2`
--

-- --------------------------------------------------------

--
-- Table structure for table `prodi_umsu`
--

CREATE TABLE `prodi_umsu` (
  `id` int(11) NOT NULL,
  `nama_prodi` varchar(20) NOT NULL,
  `buat` datetime NOT NULL,
  `edit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi_umsu`
--

INSERT INTO `prodi_umsu` (`id`, `nama_prodi`, `buat`, `edit`) VALUES
(7, 'Sistem Informasi', '2023-07-15 14:52:02', '2023-07-15 14:52:17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `created`, `updated`, `login`) VALUES
(2, 'abc', 'abc@gmail.com', '$2y$10$uWMYD2ocHOcfrBGew9IsXOAcEbpn0ZJd/QIoubrsa0Omg4roc5AOa', '2023-07-15 16:38:39', '2023-07-15 16:38:39', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prodi_umsu`
--
ALTER TABLE `prodi_umsu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_prodi` (`nama_prodi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prodi_umsu`
--
ALTER TABLE `prodi_umsu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
