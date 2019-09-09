-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Sep 2019 pada 09.44
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

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
  `id_admin` char(5) NOT NULL,
  `nama_admin` varchar(250) NOT NULL,
  `email_admin` varchar(250) NOT NULL,
  `no_laporan_FK` char(5) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `no_laporan_FK`, `password`) VALUES
('AD001', 'Tari', 'tariaya@gmail.com', 'LA001', '123'),
('AD002', 'Raka', 'akara9@gmail.com', 'LA002', ''),
('AD003', 'Bambang', 'bambang12@gmail.com', 'LA003', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` char(5) NOT NULL,
  `nama_customer` varchar(250) NOT NULL,
  `email_customer` varchar(250) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `email_customer`, `password`) VALUES
('CU001', 'Andi', 'andi4me@gmail.com', '12345'),
('CU002', 'Joko', 'jokoukch@gmail.com', ''),
('CU003', 'Rani', 'raerani@gmail.com', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `no_polisi` varchar(20) NOT NULL,
  `jenis_keluhan` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `jam` varchar(100) NOT NULL,
  `id_customer_FK` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keluhan`
--

INSERT INTO `keluhan` (`no_polisi`, `jenis_keluhan`, `keterangan`, `tanggal`, `jam`, `id_customer_FK`) VALUES
('AD011D', 'Pengecekan masalah', 'Saat jalan, bagian bawah mobil bunyi', '10 Oktober 2019', '13:10', 'CU001'),
('D1747AFR', 'Masalah mesin', 'Sering mogok', '19 Juli 2019', '10:14', 'CU002'),
('DS1634AA', 'Service AC', 'AC tidak dingin', '2 Agustus 2019', '8:05', 'CU003'),
('PA1235AV', 'Masalah rem', 'Rem tidak bisa', '4 September 2019', '09:45', 'CU003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `no_laporan` char(5) NOT NULL,
  `tgl_laporan` varchar(100) NOT NULL,
  `id_manajer_FK` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`no_laporan`, `tgl_laporan`, `id_manajer_FK`) VALUES
('LA001', '22 Juli 2019', 'MJ002'),
('LA002', '27 Agustus 2019', 'MJ003'),
('LA003', '15 Oktober 2019', 'MJ001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `manajer`
--

CREATE TABLE `manajer` (
  `id_manajer` char(5) NOT NULL,
  `nama_manajer` varchar(250) NOT NULL,
  `email_manajer` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `manajer`
--

INSERT INTO `manajer` (`id_manajer`, `nama_manajer`, `email_manajer`) VALUES
('MJ001', 'Rio', 'rio99@gmail.com'),
('MJ002', 'Azra', 'aaazra@gmail.com'),
('MJ003', 'Nisa', 'anisa@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tagihan` char(5) NOT NULL,
  `tgl_tagihan` varchar(100) NOT NULL,
  `jam_tagihan` varchar(100) NOT NULL,
  `no_antrean` char(4) NOT NULL,
  `status` varchar(250) NOT NULL,
  `total` int(250) NOT NULL,
  `no_polisi_FK` varchar(20) NOT NULL,
  `id_admin_FK` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tagihan`
--

INSERT INTO `tagihan` (`id_tagihan`, `tgl_tagihan`, `jam_tagihan`, `no_antrean`, `status`, `total`, `no_polisi_FK`, `id_admin_FK`) VALUES
('TA001', '19 Juli 2019', '13:10', 'A001', 'Belum Lunas', 300000, 'D1747AFR', 'AD002'),
('TA002', '24 Agustus 2019', '08:05', 'A002', 'Belum Lunas', 110000, 'AD011D', 'AD001'),
('TA003', '19 Juli 2019', '13:10', 'A003', 'Lunas', 90000, 'DS1634AA', 'AD003');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `no_laporan_FK` (`no_laporan_FK`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`no_polisi`),
  ADD KEY `id_customer_FK` (`id_customer_FK`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`no_laporan`),
  ADD KEY `id_manajer_FK` (`id_manajer_FK`);

--
-- Indeks untuk tabel `manajer`
--
ALTER TABLE `manajer`
  ADD PRIMARY KEY (`id_manajer`);

--
-- Indeks untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tagihan`),
  ADD KEY `id_admin_FK` (`id_admin_FK`),
  ADD KEY `no_polisi_FK` (`no_polisi_FK`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`no_laporan_FK`) REFERENCES `laporan` (`no_laporan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD CONSTRAINT `keluhan_ibfk_1` FOREIGN KEY (`id_customer_FK`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`id_manajer_FK`) REFERENCES `manajer` (`id_manajer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD CONSTRAINT `tagihan_ibfk_1` FOREIGN KEY (`id_admin_FK`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tagihan_ibfk_2` FOREIGN KEY (`no_polisi_FK`) REFERENCES `keluhan` (`no_polisi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
