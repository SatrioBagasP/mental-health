-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2024 at 07:09 AM
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
-- Database: `rbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int NOT NULL,
  `email` varchar(225) DEFAULT NULL,
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `lvl` int DEFAULT NULL,
  `nomer_handphone_user` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `email`, `username`, `password`, `lvl`, `nomer_handphone_user`) VALUES
(1, '123@gmail.com', 'Satrio', '123', 1, '+6281336180467'),
(2, 'dokter@gmail.com', 'Dr Satrio S.Psi', '123', 2, NULL),
(3, 'test@gmail.com', 'Nugraha', '123', 1, '+6281358926700');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'University'),
(2, 'Personal'),
(3, 'Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `list_jadwal`
--

CREATE TABLE `list_jadwal` (
  `id_jadwal` int NOT NULL,
  `id_akun` int DEFAULT NULL,
  `id_psikolog` int DEFAULT NULL,
  `status` varchar(225) DEFAULT NULL,
  `tanggal_konsul` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `list_jadwal`
--

INSERT INTO `list_jadwal` (`id_jadwal`, `id_akun`, `id_psikolog`, `status`, `tanggal_konsul`) VALUES
(15, 1, 1, 'Accepted', '2024-01-20'),
(18, 3, 1, 'Accepted', '2024-01-24'),
(19, 1, 1, 'Accepted', '2024-01-25'),
(21, 1, 4, 'Pending', '1970-01-01'),
(22, 1, 4, 'Pending', '2024-03-06'),
(23, 1, 1, 'Accepted', '2024-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `psikolog`
--

CREATE TABLE `psikolog` (
  `id_psikolog` int NOT NULL,
  `id_akun` int DEFAULT NULL,
  `id_kategori` int DEFAULT NULL,
  `nama_psikolog` varchar(225) DEFAULT NULL,
  `deskripsi_psikolog` varchar(225) DEFAULT NULL,
  `gender_psikolog` varchar(225) DEFAULT NULL,
  `harga_psikolog` int DEFAULT NULL,
  `keahlian_psikolog` varchar(225) DEFAULT NULL,
  `nomer_handphone_psikolog` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `psikolog`
--

INSERT INTO `psikolog` (`id_psikolog`, `id_akun`, `id_kategori`, `nama_psikolog`, `deskripsi_psikolog`, `gender_psikolog`, `harga_psikolog`, `keahlian_psikolog`, `nomer_handphone_psikolog`) VALUES
(1, 2, 1, 'Dr Satrio S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Stress, Percintaan, Keluarga', '+6283117272129'),
(2, NULL, 1, 'Dr Irvan S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Stress', '+6283117272129'),
(3, NULL, 1, 'Dr Nugraha S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Stress, Kuliah ', '+6283117272129'),
(4, NULL, 2, 'Dr Tiffany S.Psi', 'Saya Adalah Dokter', 'Female', 500000, 'Kuliah, Rumah Tangga ', '+6283117272129'),
(5, NULL, 1, 'Dr Ahmad S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(6, NULL, 1, 'Dr Ahmad A S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(7, NULL, 1, 'Dr Ahmad B S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(8, NULL, 1, 'Dr Ahmad C S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(9, NULL, 1, 'Dr Ahmad D S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(10, NULL, 1, 'Dr Ahmad E S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(11, NULL, 1, 'Dr Ahmad F S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(12, NULL, 1, 'Dr Ahmad G S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(13, NULL, 1, 'Dr Ahmad H S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(14, NULL, 1, 'Dr Ahmad I S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(15, NULL, 2, 'Dr Ahmad J S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(16, NULL, 2, 'Dr Ahmad K S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(17, NULL, 2, 'Dr Ahmad L S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(18, NULL, 2, 'Dr Ahmad M S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(19, NULL, 2, 'Dr Ahmad N S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(20, NULL, 2, 'Dr Ahmad O S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(21, NULL, 2, 'Dr Ahmad P S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(22, NULL, 2, 'Dr Ahmad Q S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(23, NULL, 2, 'Dr Ahmad R S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(24, NULL, 2, 'Dr Ahmad S S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(25, NULL, 3, 'Dr Ahmad T S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(26, NULL, 3, 'Dr Ahmad U S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(27, NULL, 3, 'Dr Ahmad V S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(28, NULL, 3, 'Dr Ahmad W S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(29, NULL, 3, 'Dr Ahmad X S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(30, NULL, 3, 'Dr Ahmad Y S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(31, NULL, 3, 'Dr Ahmad Z S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(32, NULL, 3, 'Dr Ahmad Juan S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(33, NULL, 3, 'Dr Ahmad Wowo S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(34, NULL, 3, 'Dr Ahmad Petrik S.Psi', 'Saya Adalah Dokter', 'Male', 100000, 'Rumah Tangga ', '+6283117272129'),
(35, NULL, 3, 'Dummy', 'Dummy', 'Male', 500000, 'Dummy', '+6283117272129');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `list_jadwal`
--
ALTER TABLE `list_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `psikolog`
--
ALTER TABLE `psikolog`
  ADD PRIMARY KEY (`id_psikolog`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `list_jadwal`
--
ALTER TABLE `list_jadwal`
  MODIFY `id_jadwal` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `psikolog`
--
ALTER TABLE `psikolog`
  MODIFY `id_psikolog` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
