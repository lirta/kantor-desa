-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 06:45 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kantor_desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `file_syarat`
--

CREATE TABLE `file_syarat` (
  `id_file` int(11) NOT NULL,
  `id_pengajuan` int(11) NOT NULL,
  `id_syarat` int(11) NOT NULL,
  `file` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_syarat`
--

INSERT INTO `file_syarat` (`id_file`, `id_pengajuan`, `id_syarat`, `file`) VALUES
(9, 53358606, 1, '53358606Atambah data pegawai@2x.png'),
(10, 53358606, 2, '53358606classDiagram.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_surat`
--

CREATE TABLE `jenis_surat` (
  `id_jenis_surat` int(11) NOT NULL,
  `nama_surat` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_surat`
--

INSERT INTO `jenis_surat` (`id_jenis_surat`, `nama_surat`) VALUES
(2, 'PEMBUATAN SURAT KETERANGAN DOMISILI'),
(3, 'surat');

-- --------------------------------------------------------

--
-- Table structure for table `kariawan`
--

CREATE TABLE `kariawan` (
  `id_kariawan` varchar(100) NOT NULL,
  `nama_kariawan` varchar(125) NOT NULL,
  `jenis_kariawan` varchar(10) NOT NULL,
  `agama_kariawan` varchar(20) NOT NULL,
  `alamat_kariawan` varchar(125) NOT NULL,
  `jabatan_kariawan` varchar(50) NOT NULL,
  `no_hp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kariawan`
--

INSERT INTO `kariawan` (`id_kariawan`, `nama_kariawan`, `jenis_kariawan`, `agama_kariawan`, `alamat_kariawan`, `jabatan_kariawan`, `no_hp`) VALUES
('31408173', 'Rinso CAir', 'LAKI-LAKI', 'islam', 'garuda sakti', 'admin', '8484884'),
('50238501', 'gentho', 'LAKI-LAKI', 'islam', 'garuda sakti', 'kepala desa', '081277967050');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `id_kariawan` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(155) NOT NULL,
  `akses` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `id_kariawan`, `username`, `password`, `akses`, `status`) VALUES
(114, '50238501', 'kepala', 'c4ca4238a0b923820dcc509a6f75849b', 'KEPALA_DESA', 'AKTIF'),
(115, '31408173', 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 'ADMIN', 'AKTIF');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `id_jenis_surat` int(11) NOT NULL,
  `nik_pengajuan` int(30) NOT NULL,
  `nama_pengajuan` varchar(50) NOT NULL,
  `tempat_lahir_pengajuan` varchar(50) NOT NULL,
  `tgl_lahir_pengajuan` varchar(50) NOT NULL,
  `agama_pengajuan` varchar(10) NOT NULL,
  `pekerjaan_pengajuan` varchar(100) NOT NULL,
  `alamat_pengajuan` varchar(125) NOT NULL,
  `hp_pengajuan` varchar(30) NOT NULL,
  `tgl_pengajuan` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `id_jenis_surat`, `nik_pengajuan`, `nama_pengajuan`, `tempat_lahir_pengajuan`, `tgl_lahir_pengajuan`, `agama_pengajuan`, `pekerjaan_pengajuan`, `alamat_pengajuan`, `hp_pengajuan`, `tgl_pengajuan`, `status`) VALUES
(53358606, 2, 1232131, 'inda lirta padisma', 'pdg', '18-11-1990', 'islam', 'developer', 'lintau', '081277967050', '11/05/2020', 'SELESAI');

-- --------------------------------------------------------

--
-- Table structure for table `syarat`
--

CREATE TABLE `syarat` (
  `id_syarat` int(11) NOT NULL,
  `id_jenis_surat` int(11) NOT NULL,
  `syarat` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syarat`
--

INSERT INTO `syarat` (`id_syarat`, `id_jenis_surat`, `syarat`) VALUES
(1, 2, 'scen Ktp dan KK suami dan isteri pemberi hibah 233'),
(2, 2, 'Fc. KTP pembeli3333'),
(8, 3, 'scen Ktp dan KK suami dan isteri pemberi hibah 2'),
(9, 3, 'scen KTP dan KK penjual/yang punya sertifikat (suami isteri)'),
(10, 3, 'scen KTP dan KK penjual/yang punya sertifikat (suami isteri)'),
(11, 3, 'padisma');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file_syarat`
--
ALTER TABLE `file_syarat`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  ADD PRIMARY KEY (`id_jenis_surat`);

--
-- Indexes for table `kariawan`
--
ALTER TABLE `kariawan`
  ADD PRIMARY KEY (`id_kariawan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `syarat`
--
ALTER TABLE `syarat`
  ADD PRIMARY KEY (`id_syarat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_syarat`
--
ALTER TABLE `file_syarat`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  MODIFY `id_jenis_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `syarat`
--
ALTER TABLE `syarat`
  MODIFY `id_syarat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
