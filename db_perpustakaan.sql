-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 10:26 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `mapel` varchar(125) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `kelas`, `jurusan`, `mapel`, `link`) VALUES
(30, 'php', 'X', 'Rekayasa Perangkat Lunak (RPL)', '', 'https://www.dicoding.com/dashboard'),
(31, 'html', 'XI', 'Rekayasa Perangkat Lunak (RPL)', '', 'https://www.dicoding.com/dashboard'),
(32, 'Object Oriended Dasar PHP', 'XII', 'Rekayasa Perangkat Lunak (RPL)', '', 'kartuper.epizy.com'),
(42, 'sadas', 'X', 'Geologi Pertambangan (GP)', '', 'asda'),
(48, 'html', 'XI', 'Usaha Perjalanan Wisata (UPW)', '', 'afasf'),
(51, 'Object Oriended Dasar PHP', 'XI', '', 'Bahasa Indonesia', 'sasas');

-- --------------------------------------------------------

--
-- Table structure for table `novel`
--

CREATE TABLE `novel` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `penerbit` varchar(33) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `novel`
--

INSERT INTO `novel` (`id`, `judul`, `pengarang`, `penerbit`, `link`) VALUES
(1, 'Bumi', 'TereLiye', 'Gramedia', 'www.google.com'),
(2, 'Bulan', 'TereLiye', 'Gramedia', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(128) NOT NULL,
  `tlp` varchar(13) NOT NULL,
  `pringkat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nis`, `nama`, `jurusan`, `email`, `pass`, `tlp`, `pringkat`) VALUES
(1, '', 'admin', '', 'guru@guru.com', '12345', '', 'guru'),
(2, '', 'anggota', '', 'siswa@siswa.com', '12345', '', 'siswa'),
(70, '17676727', 'ghgghda', 'Teknik Komputer Jaringan (TKJ)', 'anggota@anggota.com', '12345', '213213213123', 'siswa'),
(71, '17676727', 'ghgghda', 'Teknik Komputer Jaringan (TKJ)', 'fjrhdytlh22@gmail.com', 'sadasdwa23123', '213213213123', 'siswa'),
(72, '17676727', 'ghgghda', 'Teknik Komputer Jaringan (TKJ)', 'fjrhdytlh22@gmail.com', 'sadasdwa23123', '213213213123', 'siswa'),
(73, '17676727', 'ghgghda', 'Teknik Komputer Jaringan (TKJ)', 'fjrhdytlh22@gmail.com', 'sadasdwa23123', '213213213123', 'siswa'),
(74, '17676727', 'ghgghda', 'Teknik Komputer Jaringan (TKJ)', 'fjrhdytlh22@gmail.com', 'sadasdwa23123', '213213213123', 'siswa'),
(75, '17676727', 'ghgghda', 'Teknik Komputer Jaringan (TKJ)', 'fjrhdytlh22@gmail.com', 'sadasdwa23123', '213213213123', 'siswa'),
(76, '17676727', 'ghgghda', 'Teknik Komputer Jaringan (TKJ)', 'fjrhdytlh22@gmail.com', 'sadasdwa23123', '213213213123', 'siswa'),
(77, '17676727', 'ghgghda', 'Teknik Komputer Jaringan (TKJ)', 'fjrhdytlh22@gmail.com', 'sadasdwa23123', '213213213123', 'siswa'),
(78, '17676727', 'ghgghda', 'Teknik Komputer Jaringan (TKJ)', 'fjrhdytlh22@gmail.com', 'sadasdwa23123', '213213213123', 'siswa'),
(79, '17676727', 'ghgghda', 'Teknik Komputer Jaringan (TKJ)', 'fjrhdytlh22@gmail.com', 'sadasdwa23123', '213213213123', 'siswa'),
(80, '17676727', 'ghgghda', 'Teknik Komputer Jaringan (TKJ)', 'fjrhdytlh22@gmail.com', 'sadasdwa23123', '213213213123', 'siswa'),
(81, '17676727', 'ghgghda', 'Teknik Komputer Jaringan (TKJ)', 'fjrhdytlh22@gmail.com', 'sadasdwa23123', '213213213123', 'siswa'),
(82, '192010181', 'fajar hidayatuloh', 'Rekayasa Perangkat Lunak (RPL)', 'fjrhdytlh22@gmail.com', '12345', '09889876778', 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembaca`
--

CREATE TABLE `tbl_pembaca` (
  `id` int(11) NOT NULL,
  `id_buku` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pembaca`
--

INSERT INTO `tbl_pembaca` (`id`, `id_buku`, `tanggal`, `jam`) VALUES
(1, '0', '0000-00-00', '00:00:00.000000'),
(2, '0', '0000-00-00', '00:00:00.000000'),
(3, '0', '0000-00-00', '00:00:00.000000'),
(4, '0', '0000-00-00', '00:00:00.000000'),
(5, '0', '0000-00-00', '00:00:00.000000'),
(6, '0', '0000-00-00', '00:00:00.000000'),
(7, '0', '0000-00-00', '00:00:00.000000'),
(8, '0', '0000-00-00', '00:00:00.000000'),
(9, '0', '0000-00-00', '00:00:00.000000'),
(10, '0', '0000-00-00', '00:00:00.000000'),
(11, '0', '0000-00-00', '00:00:00.000000'),
(12, '0', '0000-00-00', '00:00:00.000000'),
(13, '0', '0000-00-00', '00:00:00.000000'),
(14, '0', '0000-00-00', '00:00:00.000000'),
(15, '0', '0000-00-00', '00:00:00.000000'),
(16, '0', '0000-00-00', '00:00:00.000000'),
(17, '0', '0000-00-00', '00:00:00.000000'),
(18, '0', '0000-00-00', '00:00:00.000000'),
(19, '0', '0000-00-00', '00:00:00.000000'),
(20, '0', '0000-00-00', '00:00:00.000000'),
(21, '0', '0000-00-00', '00:00:00.000000'),
(22, '0', '0000-00-00', '00:00:00.000000'),
(23, '12', '0000-00-00', '00:00:00.000000'),
(24, '', '0000-00-00', '00:00:00.000000'),
(25, '', '0000-00-00', '00:00:00.000000'),
(26, '51', '0000-00-00', '00:00:00.000000'),
(27, '51', '2021-09-17', '00:00:00.000000'),
(28, '51', '2021-09-17', '09:29:11.000000'),
(29, '51', '2021-09-17', '14:31:30.000000'),
(30, '51', '2021-09-17', '14:55:02.000000'),
(31, '51', '2021-09-17', '14:58:07.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `novel`
--
ALTER TABLE `novel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pembaca`
--
ALTER TABLE `tbl_pembaca`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `novel`
--
ALTER TABLE `novel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `tbl_pembaca`
--
ALTER TABLE `tbl_pembaca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
