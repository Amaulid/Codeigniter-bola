-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2019 pada 07.30
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futsal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_inbox`
--

CREATE TABLE `tb_inbox` (
  `id_inbox` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_inbox`
--

INSERT INTO `tb_inbox` (`id_inbox`, `nama`, `email`, `pesan`) VALUES
(8, 'Aldi M', 'admin@mfood.com', 'PING !!!'),
(9, 'Sandi No', 'user@gmail.com', 'kartu member \r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `tgl_jadwal` date NOT NULL,
  `jam` varchar(20) NOT NULL,
  `id_lapang` varchar(15) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `tgl_jadwal`, `jam`, `id_lapang`, `harga`, `status`) VALUES
(3, '2019-07-11', '09:00 - 10:00', 'Lapangan 1', '160000', 'Kosong'),
(4, '2019-07-11', '10:00 - 11:00', 'Lapangan 1', '160000', 'Kosong'),
(5, '0000-00-00', '13:00 - 14:00', '', '', ''),
(6, '0000-00-00', '14:00 - 15:00', '', '', ''),
(7, '0000-00-00', '15:00 - 16:00', '', '', ''),
(8, '0000-00-00', '16:00 - 17:00', '', '', ''),
(9, '0000-00-00', '17:00 - 18:00', '', '', ''),
(10, '0000-00-00', '18:00 - 19:00', '', '', ''),
(11, '0000-00-00', '19:00 - 20:00', '', '', ''),
(12, '0000-00-00', '20:00 - 21:00', '', '', ''),
(13, '0000-00-00', '21:00 - 22:00', '', '', ''),
(14, '0000-00-00', '22:00 - 23:00', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jam`
--

CREATE TABLE `tb_jam` (
  `id_jam` int(11) NOT NULL,
  `jam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jam`
--

INSERT INTO `tb_jam` (`id_jam`, `jam`) VALUES
(1, '09:00 - 10:00'),
(2, '10:00 - 11:00'),
(3, '11:00 - 12:00'),
(4, '12:00 - 13:00'),
(5, '13:00 - 14:00'),
(6, '15:00 - 16:00'),
(7, '16:00 - 17:00'),
(8, '17:00 - 18:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konfirmasi`
--

CREATE TABLE `tb_konfirmasi` (
  `id_konfirm` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_konfirmasi`
--

INSERT INTO `tb_konfirmasi` (`id_konfirm`, `nama`, `harga`, `gambar`) VALUES
(5, 'amaulid65', '160000', 'Capture3.PNG'),
(6, 'user12', '160000', 'Capture.PNG'),
(7, 'amaulid65', '160000', '9.PNG'),
(8, 'amaulid65', '160000', 'Capture1.PNG'),
(9, 'amaulid65', '160000', 'bg-laptop-asus.jpg'),
(10, 'amaulid65', '160000', 'bg-laptop-asus1.jpg'),
(11, 'amaulid65', '160000', 'Capture2.PNG'),
(12, 'amaulid65', '160000', 'Capture3.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lapang`
--

CREATE TABLE `tb_lapang` (
  `id_lapang` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_lapang`
--

INSERT INTO `tb_lapang` (`id_lapang`, `keterangan`, `harga`, `gambar`) VALUES
(1, 'Rumput Syntetis', 160000, 'lp2.jpg'),
(2, 'Rumput Syntetis', 160000, 'lp1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `id_jam` varchar(20) NOT NULL,
  `tgl_jadwal` date NOT NULL,
  `id_lapang` varchar(15) NOT NULL,
  `notelp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pemesanan`, `nama`, `alamat`, `id_jam`, `tgl_jadwal`, `id_lapang`, `notelp`) VALUES
(96, 'amaulid65', 'Tempuran', '15:00 - 16:00', '2019-07-27', 'Lapangan A', '08433423134'),
(97, 'user12', 'Tempuran', '10:00 - 11:00', '2019-07-27', 'Lapangan A', '08433423134'),
(98, 'amaulid65', 'karawang', '08:00 - 09:00', '2019-07-27', 'Lapangan A', '085776688899'),
(99, 'amaulid65', 'Tempuran', '08:00 - 09:00', '2019-07-28', 'Lapangan A', '08433423134'),
(100, 'amaulid65', 'karawang', '18:00 - 19:00', '2019-07-28', 'Lapangan A', '085776688899'),
(101, 'amaulid65', 'karawang', '08:00 - 09:00', '2019-07-30', 'Lapangan A', '08433423134'),
(102, 'amaulid65', 'karawang', '15:00 - 16:00', '2019-07-30', 'Lapangan A', '085776688899'),
(103, 'amaulid65', '', '13:00 - 14:00', '2019-07-30', 'Lapangan A', '085776688899'),
(104, 'amaulid65', 'Karawang', '08:00 - 09:00', '2019-09-15', 'Lapangan A', '08577889000'),
(105, 'amaulid65', '', '08:00 - 09:00', '2019-09-23', 'Lapangan A', '085776688899');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `email`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '', '123456', 1),
(16, 'Ahmad Maulid Ridwan', 'amaulid65', 'amaulid65@gmail.com', '123456', 2),
(23, 'user', 'user12', 'a@a.a', '123456', 2),
(24, 'Junaedi', 'junaedi', 'maulid65@gmail.com', '123456', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_inbox`
--
ALTER TABLE `tb_inbox`
  ADD PRIMARY KEY (`id_inbox`);

--
-- Indeks untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `tb_jam`
--
ALTER TABLE `tb_jam`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indeks untuk tabel `tb_konfirmasi`
--
ALTER TABLE `tb_konfirmasi`
  ADD PRIMARY KEY (`id_konfirm`);

--
-- Indeks untuk tabel `tb_lapang`
--
ALTER TABLE `tb_lapang`
  ADD PRIMARY KEY (`id_lapang`);

--
-- Indeks untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_inbox`
--
ALTER TABLE `tb_inbox`
  MODIFY `id_inbox` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_jam`
--
ALTER TABLE `tb_jam`
  MODIFY `id_jam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_konfirmasi`
--
ALTER TABLE `tb_konfirmasi`
  MODIFY `id_konfirm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_lapang`
--
ALTER TABLE `tb_lapang`
  MODIFY `id_lapang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
