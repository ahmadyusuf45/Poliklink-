-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2017 at 04:25 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uji_coba`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_resep`
--

CREATE TABLE `detail_resep` (
  `kode_detail` int(11) NOT NULL,
  `kode_rsp` varchar(50) NOT NULL,
  `kode_obt` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `jml_beli` varchar(50) NOT NULL,
  `dosis` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_resep`
--

INSERT INTO `detail_resep` (`kode_detail`, `kode_rsp`, `kode_obt`, `harga`, `jml_beli`, `dosis`, `total`) VALUES
(2, 'RSP001', 'OBT001', '20000', '2', '2X3', '40000'),
(3, 'RSP002', 'OBT002', '30000', '3', '2X8', '90000');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `kode_dkt` varchar(50) NOT NULL,
  `nama_dkt` varchar(50) NOT NULL,
  `spesialis_dkt` varchar(50) NOT NULL,
  `alamat_dkt` varchar(50) NOT NULL,
  `tlp_dkt` varchar(50) NOT NULL,
  `kode_plk` varchar(50) NOT NULL,
  `tarif` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`kode_dkt`, `nama_dkt`, `spesialis_dkt`, `alamat_dkt`, `tlp_dkt`, `kode_plk`, `tarif`) VALUES
('DKT001', 'Mati', 'Kangker', 'kelet', '1023912093123', 'PLK001', '20000'),
('DKT002', 'Modar', 'Kulit', 'Jepara', '8938129381', 'PLK002', '40000');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `pass`, `status`) VALUES
('admin', 'admin', 'admin'),
('apotek', 'apotek', 'apotek'),
('manajer', 'manajer', 'manajer'),
('pendaftaran', 'pendaftaran', 'pendaftaran');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `kode_obt` varchar(50) NOT NULL,
  `nama_obt` varchar(50) NOT NULL,
  `jenis_obt` varchar(50) NOT NULL,
  `kategori_obt` varchar(50) NOT NULL,
  `harga_obt` varchar(50) NOT NULL,
  `jml_obt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kode_obt`, `nama_obt`, `jenis_obt`, `kategori_obt`, `harga_obt`, `jml_obt`) VALUES
('OBT001', 'Narkotika', 'Tablet', 'A', '20000', '16'),
('OBT002', 'Napzan', 'Bubuk', 'B', '30000', '14'),
('OBT003', 'Cocain', 'Cair', 'D', '30000', '20');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `kode_psn` varchar(50) NOT NULL,
  `nama_psn` varchar(50) NOT NULL,
  `alamat_psn` varchar(50) NOT NULL,
  `gender_psn` varchar(50) NOT NULL,
  `umur_psn` varchar(50) NOT NULL,
  `tlp_psn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`kode_psn`, `nama_psn`, `alamat_psn`, `gender_psn`, `umur_psn`, `tlp_psn`) VALUES
('PSN001', 'Votre', 'Kelet', 'Laki-Laki', '12', '0192310239013'),
('PSN002', 'Chill', 'Jepara', 'Permpuan', '90', '18931238123'),
('PSN003', 'Acer', 'kelet', 'Permpuan', '20', '000000'),
('PSN004', 'Intel', 'mati', 'Permpuan', '20', '12312312312');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `kode_byr` int(11) NOT NULL,
  `kode_psn` varchar(50) NOT NULL,
  `kode_dkt` varchar(50) NOT NULL,
  `tgl_byr` date NOT NULL,
  `jml_byr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`kode_byr`, `kode_psn`, `kode_dkt`, `tgl_byr`, `jml_byr`) VALUES
(1, 'PSN001', 'DKT001', '2017-05-29', '40000'),
(2, 'PSN002', 'DKT002', '2017-05-29', '40000'),
(4, 'PSN003', 'DKT002', '2017-05-18', '49000'),
(5, 'PSN004', 'DKT001', '2017-05-30', '13000');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `kode_pendaf` varchar(50) NOT NULL,
  `tgl_pendaf` date NOT NULL,
  `kode_dkt` varchar(50) NOT NULL,
  `kode_psn` varchar(50) NOT NULL,
  `kode_plk` varchar(50) NOT NULL,
  `biaya` varchar(50) NOT NULL,
  `status_pasien` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`kode_pendaf`, `tgl_pendaf`, `kode_dkt`, `kode_psn`, `kode_plk`, `biaya`, `status_pasien`, `keterangan`) VALUES
('PDF001', '2017-05-29', 'DKT001', 'PSN001', 'PLK001', '20000', 'aktif', 'modar'),
('PDF002', '2017-05-29', 'DKT002', 'PSN002', 'PLK002', '3000', 'aktif', 'kangker'),
('PDF003', '2017-05-18', 'DKT002', 'PSN003', 'PLK002', '9000', 'aktif', 'PARU PARU'),
('PDF004', '2017-05-30', 'DKT001', 'PSN004', 'PLK001', '2000', 'aktif', 'modar');

-- --------------------------------------------------------

--
-- Table structure for table `poliklinik`
--

CREATE TABLE `poliklinik` (
  `kode_plk` varchar(50) NOT NULL,
  `nama_plk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`kode_plk`, `nama_plk`) VALUES
('PLK001', 'Poliklinik penyakit dalam'),
('PLK002', 'Poliklinik saraf'),
('PLK003', 'Poliklinik jiwa'),
('PLK004', 'Poliklinik mata'),
('PLK005', 'Poliklinik kulit kelamin');

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `kode_rsp` varchar(50) NOT NULL,
  `tgl_rsp` date NOT NULL,
  `kode_psn` varchar(50) NOT NULL,
  `total_harga` varchar(50) NOT NULL,
  `bayar` varchar(50) NOT NULL,
  `kembali` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`kode_rsp`, `tgl_rsp`, `kode_psn`, `total_harga`, `bayar`, `kembali`) VALUES
('RSP001', '2017-05-29', 'PSN001', '40000', '10000', '30000'),
('RSP002', '2017-05-19', 'PSN002', '90000', '90000', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_resep`
--
ALTER TABLE `detail_resep`
  ADD PRIMARY KEY (`kode_detail`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`kode_dkt`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kode_obt`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`kode_psn`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`kode_byr`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`kode_pendaf`);

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`kode_plk`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`kode_rsp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_resep`
--
ALTER TABLE `detail_resep`
  MODIFY `kode_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `kode_byr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
