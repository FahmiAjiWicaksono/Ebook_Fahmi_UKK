-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2021 pada 19.08
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
-- Database: `ukkfahmibaru`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(15) NOT NULL,
  `judul` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `pengarang` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `gambar_produk` varchar(225) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `judul`, `pengarang`, `penerbit`, `deskripsi`, `gambar_produk`) VALUES
(7, 'Laskar Pelangi ', 'Andrea Hirata', 'Gramedia', 'Kisah yang terutulis di buku ini Sangat bagus dan Menginspirasi ', '366-111.jpg'),
(8, 'Naruto Shippuden', 'Masashi Kishimoto', 'Elex Media indo', 'Buku Komik Ini becerita tentang perang ninja ke-4 Aliansi Shinobi vs Madara Uchiha', '937-7.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', '$2y$10$uTrIYjRAf1VCtkUkPG.9JO/68G3XjgEalFyh/YKSRWNKZe9JgywRm', 'super admin'),
(2, 'admin2', '$2y$10$kORTJzQf/y/rL3DkN1Ny5uwQzjXeJNYXKgInP1mBibCWeQMLmwtpW', 'admin'),
(13, 'Fahmi', '$2y$10$gY/xsyCNmlADAz5xXfPVV.aV7HYP8BChIrbggmB/322pJr76V89l.', ''),
(15, 'Fahmi12345', '$2y$10$tzkkPxq6I/KZ4xuQUirVyOJeuMUbJs2.fiHBP3TyxqRFEb4hxOcEK', 'Fahmi Aji Wicaksono');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
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
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
