-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Sep 2019 pada 14.58
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
  `id_admin` varchar(5) NOT NULL,
  `nama_admin` varchar(250) NOT NULL,
  `email_admin` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_keluhan_FK` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `password`, `id_keluhan_FK`) VALUES
('AD001', 'Tari', 'tariaya@gmail.com', '123', 'KE001'),
('AD002', 'Raka', 'araka9@gmail.com', '1234', 'KE002'),
('AD003', 'Bambang', 'bambang12@gmail.com', '12345', 'KE003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(5) NOT NULL,
  `nama_customer` varchar(250) NOT NULL,
  `email_customer` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `email_customer`, `password`) VALUES
('CU001', 'Andi', 'andi4me@gmail.com', '123'),
('CU002', 'Joko', 'jokoukch@gmail.com', '1234'),
('CU003', 'Rani', 'raerani@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `id_keluhan` char(5) NOT NULL,
  `no_polisi` varchar(20) NOT NULL,
  `jenis_keluhan` varchar(250) NOT NULL,
  `keterangan` text NOT NULL,
  `jam` varchar(10) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `no_antrean` char(4) NOT NULL,
  `id_customer_FK` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keluhan`
--

INSERT INTO `keluhan` (`id_keluhan`, `no_polisi`, `jenis_keluhan`, `keterangan`, `jam`, `tanggal`, `no_antrean`, `id_customer_FK`) VALUES
('KE001', 'AD011D', 'Pengecekan masalah', 'Saat jalan, bagian bawah mobil bunyi', '13:00', '10 Oktober 2019', 'A015', 'CU001'),
('KE002', 'D1747AFR', 'Masalah mesin', 'Mobil sering mogok tiba-tiba', '08:30', '19 Juli 2019', 'A021', 'CU002'),
('KE003', 'DS1634AA', 'Service AC', 'AC tidak dingin', '10:00', '2 Agustus 2019', 'A033', 'CU003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `manajer`
--

CREATE TABLE `manajer` (
  `id_manajer` char(5) NOT NULL,
  `nama_manajer` varchar(250) NOT NULL,
  `email_manajer` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_tagihan_FK` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `manajer`
--

INSERT INTO `manajer` (`id_manajer`, `nama_manajer`, `email_manajer`, `password`, `id_tagihan_FK`) VALUES
('MJ001', 'Rio', 'rio99@gmail.com', '123', 'TA001'),
('MJ002', 'Azra', 'aaazra@gmail.com', '1234', 'TA002'),
('MJ003', 'Nisa', 'anisa@gmailcom', '12345', 'TA003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tagihan` char(5) NOT NULL,
  `tgl_tagihan` varchar(50) NOT NULL,
  `jam_tagihan` varchar(10) NOT NULL,
  `no_antrean` char(4) NOT NULL,
  `no_polisi` varchar(20) NOT NULL,
  `rincian` text NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_customer_FK` char(5) NOT NULL,
  `id_admin_FK` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tagihan`
--

INSERT INTO `tagihan` (`id_tagihan`, `tgl_tagihan`, `jam_tagihan`, `no_antrean`, `no_polisi`, `rincian`, `total_harga`, `status`, `id_customer_FK`, `id_admin_FK`) VALUES
('TA001', '10 Oktober 2019', '14:30', 'A015', 'AD011D', 'Pengecekan masalah', 100000, 'Lunas', 'CU001', 'AD001'),
('TA002', '19 Juli 2019', '11:30', 'A021', 'D1747AFR', 'Pengecekan masalah, Ganti oli transmisi', 250000, 'Lunas', 'CU002', 'AD002'),
('TA003', '2 Agustus 2019', '15:00', 'A033', 'DS1634AA', 'Pengecekan masalah AC mobil', 100000, 'Belum Lunas', 'CU003', 'AD003');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_keluhan_FK` (`id_keluhan_FK`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id_keluhan`),
  ADD KEY `keluhan_ibfk_1` (`id_customer_FK`);

--
-- Indeks untuk tabel `manajer`
--
ALTER TABLE `manajer`
  ADD PRIMARY KEY (`id_manajer`),
  ADD KEY `id_tagihan_FK` (`id_tagihan_FK`);

--
-- Indeks untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tagihan`),
  ADD KEY `id_admin_FK` (`id_admin_FK`),
  ADD KEY `id_customer_FK` (`id_customer_FK`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_keluhan_FK`) REFERENCES `keluhan` (`id_keluhan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD CONSTRAINT `keluhan_ibfk_1` FOREIGN KEY (`id_customer_FK`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `manajer`
--
ALTER TABLE `manajer`
  ADD CONSTRAINT `manajer_ibfk_1` FOREIGN KEY (`id_tagihan_FK`) REFERENCES `tagihan` (`id_tagihan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD CONSTRAINT `tagihan_ibfk_1` FOREIGN KEY (`id_admin_FK`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tagihan_ibfk_2` FOREIGN KEY (`id_customer_FK`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
