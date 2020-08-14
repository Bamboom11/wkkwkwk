-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 06:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pi`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `nama`) VALUES
(1, 'Batuk sudah lebih dari 3 minggu'),
(2, 'Batuk berdahak'),
(3, 'Batuk berdarah'),
(4, 'Nyeri di dada'),
(5, 'Sesak napas ketika beraktivitas agak berat'),
(6, 'Demam'),
(7, 'Berkeringat di malam hari'),
(8, 'Nafsu makan berkurang'),
(9, 'Berat badan perlahan menurun'),
(10, 'Ketika bernapas terdengar suara “ngik” alias mengi'),
(11, 'Dahak bersifat mukoid (kental serta berwarna hijau)'),
(12, 'Dahak bersifat purulen (kuning serta bernanah)'),
(13, 'Dada terasa penuh/ketat (chest tightness)'),
(14, 'Batuk timbul akibat paparan zat tertentu/aktivitas/gangguan emosi/virus'),
(15, 'Batuk semakin parah pada malam hari'),
(16, 'Ada riwayat keluarga yang mengidap asma'),
(17, 'Pembengkakan di leher dan wajah'),
(18, 'Menggigil'),
(19, 'Sangat mudah lelah'),
(20, 'Nyeri di dada/bahu/punggung'),
(21, 'Perasaan tidak nyaman, pegal-pegal, dan lelah secara tiba-tiba (malaise)'),
(22, 'Suara parau (serak)');

-- --------------------------------------------------------

--
-- Table structure for table `keterangan`
--

CREATE TABLE `keterangan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keterangan`
--

INSERT INTO `keterangan` (`id`, `nama`) VALUES
(117, 'Batuk sudah lebih dari 3 minggu, Batuk berdahak, Batuk berdarah, Nyeri di dada, Sesak napas ketika beraktivitas agak berat, Demam, Berkeringat di malam hari, Nafsu makan berkurang, Berat badan perlahan menurun, dan lelah secara tiba-tiba (malaise)'),
(130, 'Batuk sudah lebih dari 3 minggu, Sesak napas ketika beraktivitas agak berat, Ketika bernapas terdengar suara “ngik” alias mengi, Dahak bersifat mukoid (kental serta berwarna hijau), Dahak bersifat purulen (kuning serta bernanah)'),
(137, 'Batuk sudah lebih dari 3 minggu, Ketika bernapas terdengar suara “ngik” alias mengi,'),
(141, 'adasdasd'),
(142, 'adsasdasdass');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `nama`) VALUES
(1, 'Tuberculosis (TBC)'),
(2, 'PPOKPenyakit Paru Obstruktif Kronik (PPOK)'),
(3, 'Asma'),
(4, 'Kanker Paru'),
(5, 'Pneumonia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keterangan`
--
ALTER TABLE `keterangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `keterangan`
--
ALTER TABLE `keterangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
