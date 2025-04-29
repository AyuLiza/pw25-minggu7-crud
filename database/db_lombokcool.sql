-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2025 at 12:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lombokcool`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud_0003`
--

CREATE TABLE `crud_0003` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `layanan` varchar(100) DEFAULT NULL,
  `status` enum('Pending','Selesai','Batal') DEFAULT 'Pending',
  `tanggal_pesan` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crud_0003`
--

INSERT INTO `crud_0003` (`id`, `nama`, `alamat`, `telepon`, `email`, `layanan`, `status`, `tanggal_pesan`) VALUES
(3, 'Bagas', 'Bertais', '085868783', 'bagas@icloud.com', 'Bongkar Pasang', 'Batal', '2025-04-28 20:42:41'),
(4, 'Dapin', 'Kekalik', '081236754', 'dapin@gmail.com', 'Isi Freon', 'Pending', '2025-04-29 02:18:34'),
(5, 'Aca', 'Ampenan', '085467392', 'aca@gmail.com', 'Perawatan Besar', 'Batal', '2025-04-29 02:51:09'),
(6, 'Eca', 'Sweta ', '0823475869', 'eca@gmail.com', 'Pasang Baru', 'Selesai', '2025-04-29 03:03:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud_0003`
--
ALTER TABLE `crud_0003`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud_0003`
--
ALTER TABLE `crud_0003`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
