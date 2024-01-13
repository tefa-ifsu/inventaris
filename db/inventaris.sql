-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2024 pada 14.31
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_inventaris`
--

CREATE TABLE `barang_inventaris` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(40) NOT NULL,
  `deskripsi_barang` varchar(40) NOT NULL,
  `kategori_barang` varchar(40) NOT NULL,
  `harga_barang` varchar(40) NOT NULL,
  `stok_barang` varchar(10) NOT NULL,
  `tanggal_pembelian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang_inventaris`
--

INSERT INTO `barang_inventaris` (`id_barang`, `kode_barang`, `nama_barang`, `deskripsi_barang`, `kategori_barang`, `harga_barang`, `stok_barang`, `tanggal_pembelian`) VALUES
(3, '', 'asdsd', 'sdasd', '', '', '', '0000-00-00'),
(4, '345312', 'mic komputer', '23', 'uuugma', '25.000', '2', '2024-01-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_barang_inventaris`
--

CREATE TABLE `kategori_barang_inventaris` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(40) NOT NULL,
  `ket` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori_barang_inventaris`
--

INSERT INTO `kategori_barang_inventaris` (`id_kategori`, `nama_kategori`, `ket`) VALUES
(3, 'maddog', 'sumoah'),
(6, 'elekt', 'buku elektronik'),
(7, 'uuugma', 'keagamaan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang_inventaris`
--
ALTER TABLE `barang_inventaris`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `kategori_barang_inventaris`
--
ALTER TABLE `kategori_barang_inventaris`
  ADD PRIMARY KEY (`id_kategori`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang_inventaris`
--
ALTER TABLE `barang_inventaris`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori_barang_inventaris`
--
ALTER TABLE `kategori_barang_inventaris`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
