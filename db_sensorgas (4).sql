-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2022 pada 11.43
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sensorgas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sensor`
--

CREATE TABLE `tb_sensor` (
  `id` int(11) NOT NULL,
  `gas` int(11) NOT NULL,
  `suhu` int(11) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sensor`
--

INSERT INTO `tb_sensor` (`id`, `gas`, `suhu`, `Waktu`) VALUES
(1, 50, 0, '2022-09-22 18:25:26'),
(3, 33, 0, '2022-09-24 14:22:02'),
(4, 33, 0, '2022-09-24 14:22:02'),
(5, 33, 0, '2022-09-24 14:22:10'),
(6, 33, 0, '2022-09-24 14:22:10'),
(7, 33, 0, '2022-09-24 15:01:05'),
(8, 33, 0, '2022-09-24 15:01:05'),
(9, 33, 0, '2022-09-24 15:01:10'),
(10, 33, 0, '2022-09-24 15:01:10'),
(11, 33, 0, '2022-09-24 15:01:40'),
(12, 34, 0, '2022-09-24 15:01:40'),
(13, 33, 0, '2022-09-24 15:01:42'),
(14, 34, 0, '2022-09-24 15:01:42'),
(15, 33, 23, '2022-09-24 15:49:17'),
(16, 44, 55, '2022-09-27 14:49:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`) VALUES
(1, 'rizki', '$2y$10$kbyuA6dmxjemsNxV3wAP0uI6Mc/78rPMJAtEgz5FCC86rDPRzwite');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_sensor`
--
ALTER TABLE `tb_sensor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_sensor`
--
ALTER TABLE `tb_sensor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
