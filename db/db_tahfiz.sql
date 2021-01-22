-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2021 pada 11.16
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tahfiz`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id` int(11) NOT NULL,
  `nama_kriteria` varchar(25) NOT NULL,
  `nilai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id`, `nama_kriteria`, `nilai`) VALUES
(1, 'Tajwid', '5'),
(2, 'Fasohah', '5'),
(3, 'Kelancaran Tahfiz', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tahfiz`
--

CREATE TABLE `tbl_tahfiz` (
  `id` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `asal_kelas` varchar(20) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `wali_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tahfiz`
--

INSERT INTO `tbl_tahfiz` (`id`, `nama`, `alamat`, `tempat_lahir`, `tgl_lahir`, `no_hp`, `asal_kelas`, `jk`, `wali_kelas`) VALUES
(1, 'Indah Noviani', 'Mutiara', 'Tanjung Balai', '2020-12-01', '0812345678', 'VII A', 'Perempuan', 'Nurleha'),
(2, 'Putri Andini', 'Sidodadi', 'Sidodadi', '2020-12-07', '087615263633', 'VII B', 'Perempuan', 'Sumianto'),
(3, 'Ramadhani', 'Sentang', 'Sentang', '2020-12-23', '081726373839', 'VII C', 'Perempuan', 'Nuraini');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', 'admin', 'putryandiniv1612@gmail.com', 'Yayasan Tahfizh Qur\'an Kisaran', 1, 'Staff Front Office Yayasan Tahfizh Qur\'an Kisaran');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_tahfiz`
--
ALTER TABLE `tbl_tahfiz`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_tahfiz`
--
ALTER TABLE `tbl_tahfiz`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
