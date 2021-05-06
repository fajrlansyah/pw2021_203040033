-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 08:08 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_203040033`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nrp` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `img`, `nrp`, `nama`, `email`, `jurusan`) VALUES
(1, 'aldi.jpeg', '203040050', 'IYAA', 'yojihh12@gmail.com', 'Teknik Industri'),
(2, 'anton.jpeg', '203040028', 'Anton trio', 'antontrio@gmail.com', 'Fakultas Kedokteran Gigi'),
(3, 'bagus.jpeg', '203040029', 'Bagus Rizky', 'bagusrizky@gmail.com', 'Teknik Informatika'),
(4, 'bio.jpeg', '203040030', 'Bio Adhansyah', 'bioadhansyah@gmail.com', 'Teknik Informatika'),
(5, 'dimas.jpeg', '203040031', 'Dimas Ardiansyah', 'dimasardiansyah@gmail.com', 'Teknik Informatika'),
(6, 'elvin.jpeg', '203040032', 'Elvin Zahra', 'elvinzahra@gmail.com', 'Teknik Informatika'),
(7, 'fajri.jpeg', '203040033', 'Muhammad Fajriansyah', 'fajrlansyah@gmail.com', 'Teknik Informatika'),
(8, 'nandhy.jpeg', '203040034', 'Nandhy Perisya', 'nandhyperisya@gmail.com', 'Teknik Informatika'),
(9, 'nuel.jpeg', '203040035', 'Nuel Marco', 'nuelmarco@gmail.com', 'Teknik Informatika'),
(10, 'raka.jpeg', '203040036', 'Raka Saputra', 'rakasaputra@gmail.com', 'Teknik Informatika');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
