-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 01:26 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eduwork_kasus`
--

-- --------------------------------------------------------

--
-- Table structure for table `gender_produk`
--

CREATE TABLE `gender_produk` (
  `id_gender` int(11) NOT NULL,
  `gender` enum('Men','Women','Kids') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gender_produk`
--

INSERT INTO `gender_produk` (`id_gender`, `gender`) VALUES
(1, 'Men'),
(2, 'Women'),
(3, 'Kids');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `harga` decimal(11,0) DEFAULT NULL,
  `id_gender` int(11) DEFAULT NULL,
  `id_ukuran` int(11) NOT NULL,
  `id_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `image`, `harga`, `id_gender`, `id_ukuran`, `id_status`) VALUES
(3, 'Gucci', '../assets/images/instagram-01.jpg', 5000000, 2, 4, 1),
(4, 'LV', '../assets/images/baner-right-image-01.jpg', 300000, 2, 2, 2),
(6, 'Prada', '../assets/images/instagram-05.jpg', 2500000, 2, 4, 1),
(9, 'Givenchy', '../assets/images/men-01.jpg', 4000000, 1, 5, 1),
(13, 'H&M', '../assets/images/baner-right-image-02.jpg', 2000000, 1, 2, 1),
(17, 'Christian Dior', '../assets/images/team-member-01.jpg', 1500000, 2, 5, 1),
(55, 'Puma', '../assets/images/men-03.jpg', 400000, 1, 4, 1),
(78, 'Pull & Bear', '../assets/images/explore-image-02.jpg', 350000, 2, 5, 1),
(88, 'Hermès', '../assets/images/kid-01.jpg', 250000, 3, 2, 1),
(111, 'Zara', '../assets/images/baner-right-image-03.jpg', 300000, 3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `status_produk`
--

CREATE TABLE `status_produk` (
  `id_status` int(11) NOT NULL,
  `status_produk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status_produk`
--

INSERT INTO `status_produk` (`id_status`, `status_produk`) VALUES
(1, 'Ready'),
(2, 'Sold Out');

-- --------------------------------------------------------

--
-- Table structure for table `ukuran_produk`
--

CREATE TABLE `ukuran_produk` (
  `id_ukuran` int(11) NOT NULL,
  `ukuran` enum('xs','s','m','l','xl','xxl') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ukuran_produk`
--

INSERT INTO `ukuran_produk` (`id_ukuran`, `ukuran`) VALUES
(1, 'xs'),
(2, 's'),
(3, 'm'),
(4, 'l'),
(5, 'xl'),
(6, 'xxl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gender_produk`
--
ALTER TABLE `gender_produk`
  ADD PRIMARY KEY (`id_gender`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_ukuran` (`id_ukuran`),
  ADD KEY `id_gender` (`id_gender`);

--
-- Indexes for table `status_produk`
--
ALTER TABLE `status_produk`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `ukuran_produk`
--
ALTER TABLE `ukuran_produk`
  ADD PRIMARY KEY (`id_ukuran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gender_produk`
--
ALTER TABLE `gender_produk`
  MODIFY `id_gender` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `status_produk`
--
ALTER TABLE `status_produk`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ukuran_produk`
--
ALTER TABLE `ukuran_produk`
  MODIFY `id_ukuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status_produk` (`id_status`),
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`id_ukuran`) REFERENCES `ukuran_produk` (`id_ukuran`),
  ADD CONSTRAINT `produk_ibfk_3` FOREIGN KEY (`id_gender`) REFERENCES `gender_produk` (`id_gender`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
