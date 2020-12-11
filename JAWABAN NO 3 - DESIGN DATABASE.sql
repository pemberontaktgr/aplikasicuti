-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2020 pada 18.07
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasicuti_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti_karyawan`
--

CREATE TABLE `cuti_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `NIK` varchar(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `bagian` varchar(20) NOT NULL,
  `pengajuan_cuti` int(100) DEFAULT NULL,
  `sisa_cuti` int(2) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cuti_karyawan`
--

INSERT INTO `cuti_karyawan` (`id_karyawan`, `NIK`, `nama`, `jabatan`, `bagian`, `pengajuan_cuti`, `sisa_cuti`, `date`) VALUES
(34, '19020045', 'Vicky oka widiantara', 'Admin', 'Produksi', 2, 10, '2020-12-11'),
(35, '19020045', 'Vicky', 'Spv', 'Produksi', 10, 10, '2020-12-09'),
(36, '19020045', 'ayu', 'Manager', 'Marketing', 20, 50, '2020-11-30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cuti_karyawan`
--
ALTER TABLE `cuti_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cuti_karyawan`
--
ALTER TABLE `cuti_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
