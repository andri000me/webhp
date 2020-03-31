-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 25 Feb 2015 pada 10.04
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `ukom2015`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayar_cicilan`
--

CREATE TABLE IF NOT EXISTS `bayar_cicilan` (
  `kode_cicilan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kredit` int(11) NOT NULL,
  `tgl_cicilan` date NOT NULL,
  `jumlah_cicilan` decimal(10,2) NOT NULL,
  `cicilan_ke` int(11) NOT NULL,
  `cicilan_sisa_ke` int(11) NOT NULL,
  `cicilan_sisa_harga` decimal(10,2) NOT NULL,
  PRIMARY KEY (`kode_cicilan`),
  KEY `kode_kredit` (`kode_kredit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `beli_cash`
--

CREATE TABLE IF NOT EXISTS `beli_cash` (
  `kode_cash` int(11) NOT NULL AUTO_INCREMENT,
  `ktp` varchar(16) NOT NULL,
  `kode_mobil` int(11) NOT NULL,
  `cash_tgl` date NOT NULL,
  `cash_bayar` decimal(10,2) NOT NULL,
  PRIMARY KEY (`kode_cash`),
  KEY `ktp` (`ktp`),
  KEY `kode_mobil` (`kode_mobil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data untuk tabel `beli_cash`
--

INSERT INTO `beli_cash` (`kode_cash`, `ktp`, `kode_mobil`, `cash_tgl`, `cash_bayar`) VALUES
(18, '16', 2, '2015-02-25', 100000.00),
(20, '19', 2, '2015-02-25', 2000000.00),
(21, '20', 2, '2015-02-25', 10000.00),
(22, '21', 2, '2015-02-25', 0.00),
(23, '121', 2, '2015-02-25', 0.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kredit`
--

CREATE TABLE IF NOT EXISTS `kredit` (
  `kode_kredit` int(11) NOT NULL AUTO_INCREMENT,
  `ktp` varchar(16) NOT NULL,
  `kode_paket` int(11) NOT NULL,
  `kode_mobil` int(11) NOT NULL,
  `tgl_kredit` date NOT NULL,
  `fotokopi_ktp` varchar(30) NOT NULL,
  `fotokopi_kk` varchar(30) NOT NULL,
  `fotokopi_slip_gaji` varchar(30) NOT NULL,
  PRIMARY KEY (`kode_kredit`),
  KEY `ktp` (`ktp`),
  KEY `kode_paket` (`kode_paket`),
  KEY `kode_mobil` (`kode_mobil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `ktp` varchar(16) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` int(2) NOT NULL,
  PRIMARY KEY (`id_login`),
  KEY `ktp` (`ktp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `ktp`, `username`, `password`, `level`) VALUES
(2, '', 'admin', 'admin', 1),
(3, '123123123', 'dais', 'dais', 2),
(5, '12', 'dede', 'dede', 2),
(6, '20', '', '', 0),
(7, '21', 'gambar', 'gambar', 23123123),
(8, '121', 'lamuness', 'lamuness', 2),
(9, '56', 'sasa', 'sasa', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE IF NOT EXISTS `mobil` (
  `kode_mobil` int(11) NOT NULL AUTO_INCREMENT,
  `merk` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `warna` varchar(40) NOT NULL,
  `harga_mobil` decimal(10,2) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  PRIMARY KEY (`kode_mobil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`kode_mobil`, `merk`, `type`, `warna`, `harga_mobil`, `gambar`) VALUES
(2, 'sdasd', 'sdfdsf', '#408080', 4224.00, 'mobil (1).jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_kredit`
--

CREATE TABLE IF NOT EXISTS `paket_kredit` (
  `kode_paket` int(11) NOT NULL AUTO_INCREMENT,
  `harga_paket` int(11) NOT NULL,
  `uang_muka` int(11) NOT NULL,
  `paket_jumlah_cicilan` int(11) NOT NULL,
  `bunga` int(11) NOT NULL,
  `nilai_cicilan` int(11) NOT NULL,
  PRIMARY KEY (`kode_paket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE IF NOT EXISTS `pembeli` (
  `ktp` varchar(16) NOT NULL,
  `nama_pembeli` varchar(30) NOT NULL,
  `alamat_pembeli` text NOT NULL,
  `telp_pembeli` varchar(13) NOT NULL,
  PRIMARY KEY (`ktp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`ktp`, `nama_pembeli`, `alamat_pembeli`, `telp_pembeli`) VALUES
('121', 'wdasd', 'sadasd', '123123'),
('123', 'daviid', 'babelan', '095959'),
('16', 'dais', 'babelan', '085694417659'),
('18', 'sdasdasd', 'asdasdas', '4312312321'),
('19', 'dais', 'asdasd', '085694417659'),
('20', 'asdasd', 'asdasd', '213123'),
('21', 'asdasd', 'asdasd', '231231'),
('21321', 'sadasd', 'sadasd', '23123'),
('56', 'sdasd', 'asdasd', 'asdasd');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bayar_cicilan`
--
ALTER TABLE `bayar_cicilan`
  ADD CONSTRAINT `bayar_cicilan_ibfk_1` FOREIGN KEY (`kode_kredit`) REFERENCES `kredit` (`kode_kredit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `beli_cash`
--
ALTER TABLE `beli_cash`
  ADD CONSTRAINT `beli_cash_ibfk_1` FOREIGN KEY (`ktp`) REFERENCES `pembeli` (`ktp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `beli_cash_ibfk_2` FOREIGN KEY (`kode_mobil`) REFERENCES `mobil` (`kode_mobil`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kredit`
--
ALTER TABLE `kredit`
  ADD CONSTRAINT `kredit_ibfk_1` FOREIGN KEY (`ktp`) REFERENCES `pembeli` (`ktp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kredit_ibfk_2` FOREIGN KEY (`kode_paket`) REFERENCES `paket_kredit` (`kode_paket`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kredit_ibfk_3` FOREIGN KEY (`kode_mobil`) REFERENCES `mobil` (`kode_mobil`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
