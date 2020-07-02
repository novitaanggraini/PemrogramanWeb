-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2020 pada 16.40
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kejaribkl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `foto`
--

INSERT INTO `foto` (`id_foto`, `foto`, `tanggal`) VALUES
(1, 'p19.jpg', '2020-07-01 14:53:23'),
(2, 'p2.jpg', '2020-07-01 14:38:54'),
(3, 'p3.jpg', '2020-07-01 14:39:08'),
(4, 'p4.jpg', '2020-07-01 14:39:20'),
(5, 'p5.jpg', '2020-07-01 14:39:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posting`
--

CREATE TABLE `posting` (
  `id_post` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `posting`
--

INSERT INTO `posting` (`id_post`, `judul`, `foto`, `body`, `tanggal`) VALUES
(1, 'Informasi Putusan Denda Tilang Tanggal 10 Januari 2020', 'kejaribkl.jpg', '<p><span style=\"font-family: Roboto; font-size: 16px;\">Berikut ini Kami sampaikan Informasi Putusan Denda Tilang Tanggal 10 Januari 2020 :</span><br style=\"box-sizing: border-box; font-family: Roboto; font-size: 16px;\" />\r\n<br style=\"box-sizing: border-box; font-family: Roboto; font-size: 16px;\" />\r\n<a href=\"http://www.kejari-bangkalan.go.id/wp-content/uploads/2020/01/PUTUSAN-DENDA-TILANG-TGL-10-JANUARI-2020.pdf\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Roboto; vertical-align: baseline; color: rgb(247, 13, 40); text-decoration-line: none;\">PUTUSAN DENDA TILANG TGL 10 JANUARI 2020</a></p>\r\n', '2020-07-01 13:29:55'),
(5, 'Informasi Putusan Denda Tilang Tanggal 17 Januari 2020', 'kejaribkl.jpg', '<p><span style=\"font-family: Roboto; font-size: 16px;\">Berikut ini Kami sampaikan Informasi Putusan Denda Tilang Tanggal 10 Januari 2020 :</span><br style=\"box-sizing: border-box; font-family: Roboto; font-size: 16px;\" />\r\n<br style=\"box-sizing: border-box; font-family: Roboto; font-size: 16px;\" />\r\n<a href=\"http://www.kejari-bangkalan.go.id/wp-content/uploads/2020/01/PUTUSAN-DENDA-TILANG-TGL-10-JANUARI-2020.pdf\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Roboto; vertical-align: baseline; color: rgb(247, 13, 40); text-decoration-line: none;\">PUTUSAN DENDA TILANG TGL 10 JANUARI 2020</a></p>\r\n', '2020-07-01 13:32:32'),
(6, 'Informasi Putusan Denda Tilang Tanggal 24 Januari 2020', 'kejaribkl.jpg', '<p><span style=\"font-family: Roboto; font-size: 16px;\">Berikut ini Kami sampaikan Informasi Putusan Denda Tilang Tanggal 24 Januari 2020 :</span><br style=\"box-sizing: border-box; font-family: Roboto; font-size: 16px;\" />\r\n<br style=\"box-sizing: border-box; font-family: Roboto; font-size: 16px;\" />\r\n<a href=\"http://www.kejari-bangkalan.go.id/wp-content/uploads/2020/01/PUTUSAN-DENDA-TILANG-TGL-24-JANUARI-2020-HAL-1_7.pdf\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Roboto; vertical-align: baseline; color: rgb(247, 13, 40); text-decoration-line: none;\">PUTUSAN DENDA TILANG TGL 24 JANUARI 2020 HAL 1_7</a><br style=\"box-sizing: border-box; font-family: Roboto; font-size: 16px;\" />\r\n<a href=\"http://www.kejari-bangkalan.go.id/wp-content/uploads/2020/01/PUTUSAN-DENDA-TILANG-TGL-24-JANUARI-2020-HAL-8_15.pdf\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Roboto; vertical-align: baseline; color: rgb(247, 13, 40); text-decoration-line: none;\">PUTUSAN DENDA TILANG TGL 24 JANUARI 2020 HAL</a></p>\r\n', '2020-07-01 13:34:01'),
(7, 'Informasi Putusan Denda Tilang Tanggal 20 Maret 2020', 'kejaribkl.jpg', '<p><span style=\"font-family: Roboto; font-size: 16px;\">Berikut ini Kami sampaikan Informasi Putusan Denda Tilang Tanggal 20 Maret 2020 :</span><br style=\"box-sizing: border-box; font-family: Roboto; font-size: 16px;\" />\r\n<a href=\"http://www.kejari-bangkalan.go.id/wp-content/uploads/2020/03/PUTUSAN-DENDA-TILANG-TGL-20-MARET-2020.pdf\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Roboto; vertical-align: baseline; color: rgb(247, 13, 40); text-decoration-line: none;\">PUTUSAN DENDA TILANG TGL 20 MARET 2020</a></p>\r\n', '2020-07-02 11:39:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.svg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `photo`) VALUES
(1, 'adminkejari', 'adminkejaribkl@gmail.com', '$2y$10$YC44foXs2cu5YrIqQ0aYFeAtTZbDTD6HpIg868g/dms/EjkIPSxOG', 'Novita Anggraini', 'default.svg'),
(3, 'adminsatu', 'adminsatu@gmail.com', '$2y$10$jTXWoFsaAJ86Z9WGjC9ZQuEu2k8SO3yT5xizmNN9RwRXOCI8pfzrG', 'Admin', 'default.svg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id_video`, `video`, `tanggal`) VALUES
(1, 'https://www.youtube.com/embed/-paPSYriC9E', '2020-07-01 16:17:57'),
(2, 'https://www.youtube.com/embed/gNQ-iy5NpJQ', '2020-07-01 16:17:23'),
(3, 'https://www.youtube.com/embed/sdcazi-wKQY', '2020-07-01 16:16:44'),
(4, 'https://www.youtube.com/embed/mXVA5DN1KVE', '2020-07-01 16:16:20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indeks untuk tabel `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id_post`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `posting`
--
ALTER TABLE `posting`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
