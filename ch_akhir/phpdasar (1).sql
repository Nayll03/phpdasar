-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Sep 2022 pada 05.32
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
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nrp` char(15) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nrp`, `nama`, `email`, `jurusan`, `gambar`) VALUES
(33, '81634965', 'Felicia Ivanka', 'tinynight05@gmail.com', 'RPL', '631184722b1c6.jpg'),
(34, '153477', 'Anisa Dwi Lestari', 'aniss@gmail.com', 'RPL', '7.jpg'),
(36, '372756784', 'aditya ivanka', 'aditt@gmail.com', 'TKR', 'b.jpg'),
(38, '67909642', 'chandra yogi', 'candra@gmail.com', 'TSM', 'cowok.jpg'),
(39, '7853642678', 'arabella fransisca', 'belara@gmail.com', 'TB', 'im.jpg'),
(45, '24625768', 'sifana algina', 'sifaaa@gmail.com', 'TKJ', '63117da145e9b.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'naili', '$2y$10$fCgndCMbfZPrDja4yCM9SeXS69lnES3b7fMnseXrhsf6ovCMz3Y5e'),
(2, 'admin', '$2y$10$Denazh9QwCuAARibMdmL7egctHBRDT0TZVtYmGaxS3glBPCIByeIm'),
(4, 'idiani', '$2y$10$EaQawKPPuEBpBcq9bct8hOVEiJ2cxNW2Qq.7yn5ZR78zh8gAdwTTe'),
(5, 'amaliyah', '$2y$10$a/4ksVXHnMYcqbXLRtQiEeFNLnCWGwo4jcV2HdtpfQrLVfarscJs2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
