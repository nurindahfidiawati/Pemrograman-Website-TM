-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2021 pada 04.55
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mhs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mhs`
--

CREATE TABLE `tb_mhs` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mhs`
--

INSERT INTO `tb_mhs` (`id`, `username`, `email`, `nama`, `nim`, `prodi`, `password`) VALUES
(6, 'aming', 'aming@gmai.com', 'aming', '12345', 'sistem informasi', '$2y$10$vcJLs6IY2.z9ApjTaxPDkOyGEk/9D0PgVvVr.aaidfQRL2da6MA0i'),
(10, 'aming', 'aming@gmai.com', 'Aming Anggara Putra', '192410101039', 'Sistem Informasi', '$2y$10$ChQmUNZr3q4idyEhl68ugOLVDE7M6Bc6lmMnbDlmIEDLGan7CssH.'),
(11, 'aming123', 'aming@gmail.com', 'Aming Anggara Putra', '192410101039', 'Sistem Informasi', '$2y$10$JThIEaRikhwiAxXanonPYOzjYFaDGPu.uu5KMUPTMJUICbe/2A/zK'),
(12, 'wati123', 'wati@gmail.com', 'Nur Indah Fidia Wati', '192410101039', 'Sistem Informasi', '$2y$10$rUonYkU4EMUKGejF7JCzUu6CuE0uzdPSb7YtDchxjtZxTGvUn8FQW');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_mhs`
--
ALTER TABLE `tb_mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_mhs`
--
ALTER TABLE `tb_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
