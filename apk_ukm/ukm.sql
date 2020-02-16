-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 01 Des 2019 pada 11.38
-- Versi Server: 5.6.11
-- Versi PHP: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `ukm`
--
CREATE DATABASE IF NOT EXISTS `ukm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ukm`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `thn_masuk` varchar(4) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(10) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nim`, `nama`, `jurusan`, `tgl_lahir`, `thn_masuk`, `jenis_kelamin`, `alamat`, `no_telp`) VALUES
(1, '175610056', 'Pepe', 'Teknik Komputer', '2019-11-11', '2017', 'Laki-laki', 'sorong', '081211345678'),
(2, '175610056', 'Wahyu', 'Sistem Informasi', '2019-11-11', '2017', 'Laki-laki', 'sorong', '081211345678'),
(4, '175610056', 'Wahyu', 'Sistem Informasi', '2019-11-11', '2017', 'Laki-laki', 'sorong', '081211345678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `nim`, `password`, `status`) VALUES
(1, 'soholeh', '175610047', 'admin123', 'admin'),
(2, 'gerson', '175610055', 'ketua123', 'ketua'),
(3, 'kusi', '175610048', 'anggota123', 'anggota'),
(6, 'mahasiswa', '175610010', 'anggota123', 'anggota'),
(7, 'm2', '175610001', 'anggota123', 'anggota'),
(8, 'Idal', '175610051', '12345', 'anggota'),
(9, 'Aldo', '175610042', 'ketua', 'anggota'),
(10, 'andi', '175610032', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus`
--

CREATE TABLE IF NOT EXISTS `pengurus` (
  `id_pengurus` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(13) NOT NULL,
  PRIMARY KEY (`id_pengurus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `pengurus`
--

INSERT INTO `pengurus` (`id_pengurus`, `nim`, `nama`, `jabatan`) VALUES
(1, '175610057', 'Agnes', 'Bendahara'),
(4, '175610055', 'Gersonius Y R Leto', 'Ketua'),
(5, '175610048', 'Alex', 'Wakil Ketua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proker`
--

CREATE TABLE IF NOT EXISTS `proker` (
  `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kegiatan` varchar(50) NOT NULL,
  `tgl_kegiatan` date NOT NULL,
  `jatuh_tempo_kegiatan` date NOT NULL,
  PRIMARY KEY (`id_kegiatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `proker`
--

INSERT INTO `proker` (`id_kegiatan`, `nama_kegiatan`, `tgl_kegiatan`, `jatuh_tempo_kegiatan`) VALUES
(1, 'jalan-jalan', '2019-12-04', '2019-12-12'),
(4, 'Makrab', '2019-12-03', '2019-12-24'),
(6, 'Party', '2019-12-31', '2020-01-01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
