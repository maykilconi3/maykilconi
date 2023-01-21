-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 12:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `liberal`
--

-- --------------------------------------------------------

--
-- Table structure for table `sh_duyuru`
--

CREATE TABLE `sh_duyuru` (
  `id` int(11) NOT NULL,
  `d_icerik` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `d_time` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sh_kullanici`
--

CREATE TABLE `sh_kullanici` (
  `id` int(11) NOT NULL,
  `k_mail` varchar(64) COLLATE utf8_turkish_ci NOT NULL,
  `k_adi` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `k_sifre` varchar(56) COLLATE utf8_turkish_ci NOT NULL,
  `k_profil` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `k_rol` enum('0','1','2') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0',
  `k_log` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `u_time` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `k_browser` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `k_os` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `k_time` varchar(32) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `sh_kullanici`
--

INSERT INTO `sh_kullanici` (`id`, `k_mail`, `k_adi`, `k_sifre`, `k_profil`, `k_rol`, `k_log`, `u_time`, `k_browser`, `k_os`, `k_time`) VALUES
(1, 'admin@wizards.works', 'wizard', 'cc6dffbc2336a099320f77214db13ef3', 'upload/profile/GR4fzYvY.jpg', '1', '::1', '1', 'Google Chrome', 'Windows 10', '2021-12-24'),
(14, 'negatif@gmail.com', 'Negatif', '22c5448647af8ffb1a20b0ce0fb601fa', 'upload/profile/WSmoCSMx.jpg', '0', '85.98.17.26', '1', 'Google Chrome', 'Windows 10', '2021-12-25'),
(15, 'daphy@skydev.com', 'daphy34', '908e989515a90e8451242c3423528a00', '', '0', '139.28.105.130', '1', 'Google Chrome', 'Windows 10', '2021-12-25'),
(16, 'self@a.com', 'self', 'fbf80ad9c7e713a5c3c57e90e1bdb697', 'upload/profile/k8GYN3R6.jpg', '1', '185.163.111.167', '2022-01-24', 'Google Chrome', 'Windows 10', '2021-12-25'),
(17, 'bruh@c.com', 'self2', 'f2c6ec1e4a750c284e43b149bbe54a91', 'upload/profile/MnLmIYcT.php', '0', '37.155.236.94', '1', 'Google Chrome', 'Mac OS X', '2021-12-25'),
(18, 'self@b.com', 'self3', '83bbca144c7e7aca7f2cea217465a00b', 'upload/profile/Eas4oEmT.php', '0', '37.155.236.94', '1', 'Google Chrome', 'Mac OS X', '2021-12-25'),
(19, 'pasalar779@gmail.com', 'kakashi', 'c040198566fb81378f70edd524fa6ad6', '', '0', '95.2.15.200', '1', 'Google Chrome', 'Windows 10', '2021-12-25'),
(20, 'exwellripper@gmail.com', 'Exwell ', 'dfbc16d045979dd5277b77ec84c8b55d', '', '0', '78.174.67.154', '1', 'Google Chrome', 'Windows 10', '2021-12-25'),
(21, 'yosef@yoseff.com', 'Yoseff', 'd3408adc9d3ebf86c691c9c3bdac5bfd', 'upload/profile/fpQCCPZy.png', '1', '23.106.56.51', '2022-01-24', 'Google Chrome', 'Windows 10', '2021-12-25'),
(22, 'aziz3xr@gmail.com', 'azizallh', '4d9e7ea08a1419bba7ebe3ad3523f811', '', '0', '194.135.154.200', '1', 'Handheld Browser', 'Android Device', '2021-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `sh_log`
--

CREATE TABLE `sh_log` (
  `id` int(11) NOT NULL,
  `k_adi` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `k_ip` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `k_city` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `k_country` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `k_acent` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `k_time` varchar(24) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sh_duyuru`
--
ALTER TABLE `sh_duyuru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sh_kullanici`
--
ALTER TABLE `sh_kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sh_log`
--
ALTER TABLE `sh_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sh_duyuru`
--
ALTER TABLE `sh_duyuru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sh_kullanici`
--
ALTER TABLE `sh_kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
