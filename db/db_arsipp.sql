-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Agu 2021 pada 06.42
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
-- Database: `db_arsipp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id` int(11) NOT NULL,
  `nomor_surat` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id`, `nomor_surat`, `kategori`, `judul`, `file`, `waktu`) VALUES
(1, '2020/PD3/TU/001', 'Pengumuman', 'Nota Dinas WFH', '', '2021-06-21 17:23:00'),
(4, '2020/PD2/TU/002', 'Undangan', 'Halal Bi Halal', '', '2021-04-21 18:23:29'),
(5, '2021/PD2/TU/003', 'Undangan', 'Makan Bersama', '7_Undangan_Tk3_2020-2021.pdf', '2021-08-29 21:51:39'),
(6, '2021/PD2/TU/004', 'Undangan', 'Perpanjangan PPKM', 'SOAL_TES_OBSERVASI_SERTIKOM_BNSP_2021.pdf', '2021-08-29 21:56:50');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
