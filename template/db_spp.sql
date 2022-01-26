-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 03:29 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `kompetensi_keahlian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kompetensi_keahlian`) VALUES
(1, 'XI RPL 1', 'Rekayasa Perangkat Lunak'),
(2, 'XI RPL 2', 'Rekayasa Perangkat Lunak'),
(3, 'XI RPL 3', 'Rekayasa Perangkat Lunak'),
(4, 'XI TKJ 1', 'Teknik Komputer dan Jaringan'),
(5, 'XI TKJ 2', 'Teknik Komputer dan Jaringan'),
(6, 'XI TKJ 3', 'Teknik Komputer dan Jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `id_spp` int(11) NOT NULL,
  `bulan_spp` varchar(8) NOT NULL,
  `tahun_spp` varchar(4) NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `keterangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_petugas`, `nisn`, `tgl_bayar`, `id_spp`, `bulan_spp`, `tahun_spp`, `jatuh_tempo`, `keterangan`) VALUES
(129, 2, '123', '2022-01-25', 1, '10', '2021', '2021-10-10', 'LUNAS'),
(130, 1, '123', '2022-01-25', 1, '11', '2021', '2021-11-10', 'LUNAS'),
(131, 0, '123', '0000-00-00', 1, '12', '2021', '2021-12-10', ''),
(132, 0, '123', '0000-00-00', 1, '01', '2022', '2022-01-10', ''),
(133, 0, '123', '0000-00-00', 1, '02', '2022', '2022-02-10', ''),
(134, 0, '123', '0000-00-00', 1, '03', '2022', '2022-03-10', ''),
(135, 0, '123', '0000-00-00', 1, '04', '2022', '2022-04-10', ''),
(136, 0, '123', '0000-00-00', 1, '05', '2022', '2022-05-10', ''),
(137, 0, '123', '0000-00-00', 1, '06', '2022', '2022-06-10', ''),
(138, 0, '123', '0000-00-00', 1, '07', '2022', '2022-07-10', ''),
(139, 0, '123', '0000-00-00', 1, '08', '2022', '2022-08-10', ''),
(140, 0, '123', '0000-00-00', 1, '09', '2022', '2022-09-10', ''),
(141, 1, '12345', '2022-01-25', 1, '10', '2021', '2021-10-10', 'LUNAS'),
(142, 1, '12345', '2022-01-25', 1, '11', '2021', '2021-11-10', 'LUNAS'),
(143, 1, '12345', '2022-01-25', 1, '12', '2021', '2021-12-10', 'LUNAS'),
(144, 2, '12345', '2022-01-25', 1, '01', '2022', '2022-01-10', 'LUNAS'),
(145, 1, '12345', '2022-01-25', 1, '02', '2022', '2022-02-10', 'LUNAS'),
(146, 0, '12345', '0000-00-00', 1, '03', '2022', '2022-03-10', ''),
(147, 0, '12345', '0000-00-00', 1, '04', '2022', '2022-04-10', ''),
(148, 0, '12345', '0000-00-00', 1, '05', '2022', '2022-05-10', ''),
(149, 0, '12345', '0000-00-00', 1, '06', '2022', '2022-06-10', ''),
(150, 0, '12345', '0000-00-00', 1, '07', '2022', '2022-07-10', ''),
(151, 0, '12345', '0000-00-00', 1, '08', '2022', '2022-08-10', ''),
(152, 0, '12345', '0000-00-00', 1, '09', '2022', '2022-09-10', ''),
(153, 1, '556', '2022-01-25', 1, '10', '2021', '2021-10-10', 'LUNAS'),
(154, 1, '556', '2022-01-25', 1, '11', '2021', '2021-11-10', 'LUNAS'),
(155, 1, '556', '2022-01-25', 1, '12', '2021', '2021-12-10', 'LUNAS'),
(156, 0, '556', '0000-00-00', 1, '01', '2022', '2022-01-10', ''),
(157, 0, '556', '0000-00-00', 1, '02', '2022', '2022-02-10', ''),
(158, 0, '556', '0000-00-00', 1, '03', '2022', '2022-03-10', ''),
(159, 0, '556', '0000-00-00', 1, '04', '2022', '2022-04-10', ''),
(160, 0, '556', '0000-00-00', 1, '05', '2022', '2022-05-10', ''),
(161, 0, '556', '0000-00-00', 1, '06', '2022', '2022-06-10', ''),
(162, 0, '556', '0000-00-00', 1, '07', '2022', '2022-07-10', ''),
(163, 0, '556', '0000-00-00', 1, '08', '2022', '2022-08-10', ''),
(164, 0, '556', '0000-00-00', 1, '09', '2022', '2022-09-10', ''),
(165, 0, '111', '0000-00-00', 1, '11', '2021', '2021-11-10', ''),
(166, 0, '111', '0000-00-00', 1, '12', '2021', '2021-12-10', ''),
(167, 0, '111', '0000-00-00', 1, '01', '2022', '2022-01-10', ''),
(168, 0, '111', '0000-00-00', 1, '02', '2022', '2022-02-10', ''),
(169, 0, '111', '0000-00-00', 1, '03', '2022', '2022-03-10', ''),
(170, 0, '111', '0000-00-00', 1, '04', '2022', '2022-04-10', ''),
(171, 0, '111', '0000-00-00', 1, '05', '2022', '2022-05-10', ''),
(172, 0, '111', '0000-00-00', 1, '06', '2022', '2022-06-10', ''),
(173, 0, '111', '0000-00-00', 1, '07', '2022', '2022-07-10', ''),
(174, 0, '111', '0000-00-00', 1, '08', '2022', '2022-08-10', ''),
(175, 0, '111', '0000-00-00', 1, '09', '2022', '2022-09-10', ''),
(176, 0, '111', '0000-00-00', 1, '10', '2022', '2022-10-10', '');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(1, 'admin', 'admin', 'Admin', 'admin'),
(2, 'petugas', 'petugas', 'Petugas SPP', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` char(10) NOT NULL,
  `nis` char(8) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `id_spp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `nama`, `id_kelas`, `alamat`, `no_telp`, `id_spp`) VALUES
('111', '111', 'Neilsya Amstrani M-H', 5, 'Tulungagung', '081334220448', 1),
('123', '123', 'Neilsya Amstrani', 0, 'Tulungagung', '085806752070', 0),
('12345', '12345', 'NeilsyaAMH', 3, 'Malang', '081334220448', 1),
('556', '556', 'Maulidatul ', 3, 'Malang', '085806752070', 1);

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun`, `nominal`) VALUES
(1, 2021, 600000),
(2, 2022, 700000),
(3, 2023, 800000),
(4, 2024, 900000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_petugas` (`id_petugas`) USING BTREE;

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
