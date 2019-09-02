-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Sep 2019 pada 19.48
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

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
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12004;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10004;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `no_laporan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12348;

--
-- AUTO_INCREMENT untuk tabel `manajer`
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

--
-- Table structure for table `tagihan`
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
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`id_tagihan`, `tanggal`, `jam`, `no_antrean`, `nopol`, `status`, `total`, `id_admin`) VALUES
('B010', '2019-07-19', '13:10:00', 'X01', 'D137AA', 'Belum Lunas', 300000, 'A002'),
('B011', '2019-08-24', '08:05:00', 'X02', 'AD011D', 'Belum Lunas', 110000, 'A001'),
('B012', '2019-10-10', '10:14:00', 'X03', 'E111A', 'Lunas', 90000, 'A003');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tagihan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
