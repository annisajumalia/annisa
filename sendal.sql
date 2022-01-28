-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jan 2022 pada 10.30
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `annisa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sendal`
--

CREATE TABLE `sendal` (
  `id` int(12) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `size` varchar(20) NOT NULL,
  `harga` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sendal`
--

INSERT INTO `sendal` (`id`, `merek`, `size`, `harga`) VALUES
(13, 'adidas', '41', '12.0000'),
(14, 'suallow', '29', '12.0000'),
(16, 'dd', '-1', '120000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sendal`
--
ALTER TABLE `sendal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`merek`),
  ADD UNIQUE KEY `nim` (`size`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sendal`
--
ALTER TABLE `sendal`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
