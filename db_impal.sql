-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Sep 2019 pada 03.21
-- Versi Server: 10.1.29-MariaDB
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
-- Database: `db_impal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nama_admin` varchar(250) NOT NULL,
  `email_adm` varchar(250) NOT NULL,
  `no_laporan_FK` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_adm`, `no_laporan_FK`) VALUES
(12001, 'Tari', 'tariaya@gmail.com', 11003),
(12002, 'Raka', 'akara9@gmail.com', 11001),
(12003, 'Bambang', 'bambang12@gmail.com', 11002);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(5) NOT NULL,
  `nama_customer` varchar(250) NOT NULL,
  `email_cust` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `email_cust`) VALUES
(10001, 'Andi', 'andi4mi@gmail.com'),
(10002, 'Joko', 'jokoukch@ymail.com'),
(10003, 'Rani', 'raerani@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `No_polisi` varchar(8) NOT NULL,
  `Keluhan` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL,
  `Jam` varchar(5) NOT NULL,
  `Tanggal` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keluhan`
--

INSERT INTO `keluhan` (`No_polisi`, `Keluhan`, `Keterangan`, `Jam`, `Tanggal`) VALUES
('D137AA', 'Masalah mesin', 'sering mogok', '1014', '19 Juli 2019'),
('AD011D', 'Service AC', 'tidak berfungsi', '8:05', '24 Agustus 2019'),
('E111A', 'Pengecekan masalah', 'saat jalan bagian bawah bunyi', '13:10', '10 Oktober 2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `no_laporan` int(5) NOT NULL,
  `tgl_laporan` varchar(30) NOT NULL,
  `id_manajer_FK` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`no_laporan`, `tgl_laporan`, `id_manajer_FK`) VALUES
(11001, '24 Juli 2019', 13002),
(11002, '16 Agustus 2019', 13001),
(11003, '2 September 2019', 13003);

-- --------------------------------------------------------

--
-- Struktur dari tabel `manajer`
--

CREATE TABLE `manajer` (
  `id_manajer` int(5) NOT NULL,
  `nama_mnj` varchar(250) NOT NULL,
  `email_mnj` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `manajer`
--

INSERT INTO `manajer` (`id_manajer`, `nama_mnj`, `email_mnj`) VALUES
(13001, 'Rio', 'rio99@gmail.com'),
(13002, 'Azra', 'aaazra@gmail.com'),
(13003, 'Nisa', 'anisa@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tagihan` varchar(4) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `no_antrean` varchar(3) NOT NULL,
  `nopol` varchar(8) NOT NULL,
  `status` varchar(15) NOT NULL,
  `total` int(10) NOT NULL,
  `id_admin` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tagihan`
--

INSERT INTO `tagihan` (`id_tagihan`, `tanggal`, `jam`, `no_antrean`, `nopol`, `status`, `total`, `id_admin`) VALUES
('B010', '2019-07-19', '13:10:00', 'X01', 'D137AA', 'Belum Lunas', 300000, 'A002'),
('B011', '2019-08-24', '08:05:00', 'X02', 'AD011D', 'Belum Lunas', 110000, 'A001'),
('B012', '2019-10-10', '10:14:00', 'X03', 'E111A', 'Lunas', 90000, 'A003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` char(5) NOT NULL,
  `No_polisi` varchar(8) NOT NULL,
  `id_tagihan` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id_tugas`, `No_polisi`, `id_tagihan`) VALUES
('AX001', 'D137AA', 'B010'),
('AX002', 'AD011D', 'B011'),
('AX003', 'E111A', 'B012');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `no_laporan_FK` (`no_laporan_FK`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`no_laporan`),
  ADD KEY `id_manajer_FK` (`id_manajer_FK`);

--
-- Indexes for table `manajer`
--
ALTER TABLE `manajer`
  ADD PRIMARY KEY (`id_manajer`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12004;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10004;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `no_laporan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12348;

--
-- AUTO_INCREMENT for table `manajer`
--
ALTER TABLE `manajer`
  MODIFY `id_manajer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13004;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`no_laporan_FK`) REFERENCES `laporan` (`no_laporan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`id_manajer_FK`) REFERENCES `manajer` (`id_manajer`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
