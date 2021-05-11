-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 05:51 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teknindo`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` int(11) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `referensi` int(11) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `brand` varchar(10) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `kode_lokasi` varchar(10) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `kode_barang_masuk` int(11) NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `no_po` int(11) NOT NULL,
  `tgl_barang_masuk` date NOT NULL,
  `penerima` varchar(20) NOT NULL,
  `Kode_suplier` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `nip` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `bagian` varchar(25) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `foto` longblob NOT NULL,
  `password` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nip`, `nama`, `jabatan`, `bagian`, `jenis_kelamin`, `no_telpon`, `foto`, `password`, `username`) VALUES
(17101111, 'sunaryo', 'Teknisi', 'Service', 'L', '085717878007', '', '234567', 'Aryo'),
(17101112, 'Angel Karambol', 'Admin', 'Service', 'P', '085717789008', '', '345678', 'Angel'),
(171011400, 'Asep Subarkah', 'Manager', 'Marketing', 'L', '085717879008', '', '123456', 'asep');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `kode_lokasi` int(11) NOT NULL,
  `nama_rak` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `permintaan_barang_keluar`
--

CREATE TABLE `permintaan_barang_keluar` (
  `kode_barang` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `tanggal_keluar` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `kode_suplier` int(11) NOT NULL,
  `nama_suplier` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`kode_barang_masuk`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`kode_lokasi`);

--
-- Indexes for table `permintaan_barang_keluar`
--
ALTER TABLE `permintaan_barang_keluar`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`kode_suplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `kode_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `kode_barang_masuk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `nip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171011401;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `kode_lokasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permintaan_barang_keluar`
--
ALTER TABLE `permintaan_barang_keluar`
  MODIFY `kode_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suplier`
--
ALTER TABLE `suplier`
  MODIFY `kode_suplier` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
