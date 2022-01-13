-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 12:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `khs`
--

CREATE TABLE `khs` (
  `NIM` varchar(5) NOT NULL,
  `kodeMK` varchar(5) NOT NULL,
  `namaMK` varchar(20) NOT NULL,
  `nilai` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khs`
--

INSERT INTO `khs` (`NIM`, `kodeMK`, `namaMK`, `nilai`) VALUES
('MHS01', '10230', 'Dasar Pemrograman', 'A'),
('MHS02', '10331', 'Dasar Sistem Kompute', 'A-'),
('MHS03', '10531', 'Logika Informatika', 'B'),
('MHS04', '10531', 'Logika Informatika', 'B+'),
('MHS05', '60220', 'Metodologi Penelitia', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jkel` varchar(1) NOT NULL,
  `alamat` text NOT NULL,
  `ttl` date NOT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jkel`, `alamat`, `ttl`, `email`) VALUES
('MHS01', 'Siti Aminah', 'P', 'SOLO', '1999-10-01', NULL),
('MHS02', 'Rita', 'P', 'SOLO', '1999-01-01', NULL),
('MHS03', 'Amirudin', 'L', 'SEMARANG', '1998-08-11', NULL),
('MHS04', 'Siti Maryam', 'P', 'JAKARTA', '1995-04-15', NULL),
('MHS05', 'Alviahtu Zakiah', 'P', 'KALTENG', '2001-05-05', 'alviahtu05@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `sks` int(11) NOT NULL,
  `sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kode`, `nama`, `sks`, `sem`) VALUES
('10230', 'Dasar Pemrograman', 2, 1),
('10331', 'Dasar Sistem Komputer', 3, 1),
('10531', 'Logika Informatika', 3, 1),
('60220', 'Metodologi Penelitian', 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `password`, `nama`, `email`, `level`) VALUES
('alviahtzkh', 'ef8e613cfce04922b2677309bf4837f5', 'Alviahtu Zakiah', 'alviahtu05@gmail.com', ''),
('oreobiru_', '7231361c245e8d99224c2097fe51a3a1', 'Alviahtu Zakiah', 'alviahtuzakiah@gmail.com', ''),
('vanilablu.e', '37d76dc51407ac9f18ebd28fd9f5c608', 'Alviahtu Zakiah', 'alviahtu05@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `khs`
--
ALTER TABLE `khs`
  ADD UNIQUE KEY `NIM` (`NIM`,`kodeMK`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
