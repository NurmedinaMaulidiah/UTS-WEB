-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 01:40 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fantastic_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(25) NOT NULL,
  `psw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `email`, `username`, `psw`) VALUES
(1, 'adwiahmuhajir@gmail.com', 'dina', '$2y$10$pD.Paa11KVJ4/tmeTOUm7.nC.b2ezuutiJx1FTbyTX3OuFu4Kqefy'),
(2, 'dina@gmail.com', 'eviq', '$2y$10$NhrMg/EE1joZK8zCazGXjetVW95kn9lN5jeQ.yqysuLQr85rjINJW'),
(3, 'dina@gmail.com', 'zayn', '$2y$10$j0YkXQPYd4EmBOHV6wbOneae2F4K/.9Kos8qQ3ESVyat6L9EGOVzS'),
(4, 'nurmedinamaulidiah@gmail.com', 'mdn', '$2y$10$kZEC4B81BvC2hXoJGrdmO.zJsNK0p7HuwvcuoCaGGmEx0FSd8gt3a'),
(5, 'adwiahmuhajir@gmail.com', 'niall', '$2y$10$18X0d8PX2SuN.0ee/Ewu1O0BTWCJO1X9R.2q0ofXOwf7JMY3h455O'),
(6, 'dinsu@gmail.com', 'dinsu', '$2y$10$TtO0tO8ltIGsiRZqAPocHOu4XQQoSTq5Ht72aHaGTXlWHqQtU2076'),
(7, 'adwiahmuhajir@gmail.com', 'dinamauldh', '$2y$10$UKwn8EiYM3Z6jGfOBytmBuQ.qWHaxgP9IxOutg9BFBtM.xcK/Kon2');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(50) NOT NULL,
  `tglinput` varchar(10) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `harga`, `tglinput`, `gambar`) VALUES
(2, 'kimbab', 12000, '12-11-2022', 'kimbab.jpg'),
(3, 'fudgy brownies', 150000, '12-11-2022', 'fudgy brownies.jpg'),
(4, 'pudding mangga', 12000, '13-11-2022', 'pudding mangga.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
