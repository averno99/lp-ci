-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Feb 2022 pada 07.32
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lp-ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `header`
--

INSERT INTO `header` (`id`, `header`) VALUES
(1, 'kisspng-clip-art-computer-icons-cleaning-broom-encapsulate-5b9a4703cee9a5_6325129515368373798475.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tgl_buat` int(11) NOT NULL,
  `tgl_ubah` int(11) NOT NULL,
  `kontak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `nama`, `keterangan`, `gambar`, `tgl_buat`, `tgl_ubah`, `kontak`) VALUES
(1, 'Sapu Lidi Ajaib', 'Sapu lidi Ajaib adalah alat pembersih halaman, pekarangan, atau jalan raya, sapu lidi banyak di gunakan oleh perumahan, perkantoran atau petugas kebersihan, yang terbuat dari lidi pelepah pohon, lidi yang digunakan bisa berasal dari pelapah kelapa atau aren. Sapu lidi merupakan peralatan rumah tangga khas Indonesia.', 'sapu_lidi.jpg', 0, 0, '085389892222'),
(2, 'Sapu Ijuk', 'Sapu ijuk atau kadang disebut juga dengan sebutan sapu injuk, adalah sapu yang paling sering ditemui di rumah-rumah, dengan harga yang relatif murah. Menjadi alat kebersihan yang terbuat dari serat pohon aren yang dijalin menjadi satu, sehingga mengakibatkan sapu ini tidak bisa dicuci.', 'sapu_ijuk.jpeg', 0, 0, '089677781223');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$rZ9ABwKS/.P6xYmlWQZ3dOlW/q/0q1/qa6ChhXX1b60agzbXvL5j2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT untuk tabel `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
