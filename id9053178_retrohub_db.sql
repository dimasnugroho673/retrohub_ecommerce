-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 24, 2019 at 01:26 PM
-- Server version: 5.7.27-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-8+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id9053178_retrohub_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(120) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `kategori`, `stok`, `harga`, `gambar`, `keterangan`) VALUES
(1, 'Polaroid Cam', 'Electronic', 11, 800000000, 'camera-polaroid.jpg', 'Polaroid Cam with seluloid'),
(2, 'Sand clock', 'Classic Items', 0, 10000000, 'sand-clock.jpg', 'Sand Clock Tempered Glass'),
(3, 'Machine Writer', 'Classic Items', 7, 55000000, 'machine-writer.jpg', 'Machine Writer for Message'),
(4, 'Older Car', 'Otomotif', 7, 36000000, 'car-old.jpg', 'OLder Car from United Kingdom'),
(5, 'Vinyl', 'Electronic', 30, 89000000, 'vinyl.jpg', 'Vinyl music analog Hi-Res'),
(6, 'Bicycle Ontel', 'Otomotif', 30, 89000000, 'bicycle-old2.jpg', 'Bicycle old from Java '),
(7, 'Steer Car', 'Otomotif', 30, 89000000, 'steer.jpg', 'Steer Old Car'),
(8, 'Video Recorder', 'Electronic', 30, 89000000, 'video-recorder2.jpg', 'Video Recorder Old 3gp'),
(12, 'Hire Plang', 'Classic Items', 50, 1000000, 'hire.jpg', 'Hiring signpost'),
(13, 'Retro Design', 'Design', 50, 2560000, 'design-old.jpg', 'Retro deisgn wallpaper'),
(16, 'Video Recorder', 'Electronic', 10, 89000000, 'design-old1.jpg', 'Video Recorder for old mov');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'Mi-chan', 'Toapaya Asri', '2019-05-25 21:43:15', '2019-05-26 21:43:15'),
(2, 'Michan', 'Toapaya Asri', '2019-05-25 22:21:38', '2019-05-26 22:21:38'),
(3, '', '', '2019-05-26 02:03:54', '2019-05-27 02:03:54'),
(4, '', '', '2019-05-26 02:10:44', '2019-05-27 02:10:44'),
(5, '', '', '2019-05-26 02:15:20', '2019-05-27 02:15:20'),
(6, 'Dimas', 'Toapaya Asri', '2019-08-19 13:23:58', '2019-08-20 13:23:58'),
(7, 'gc', 'gd', '2019-08-19 13:53:57', '2019-08-20 13:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(11) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_barang`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 3, 'Machine Writer', 1, 55000000, ''),
(2, 2, 1, 'Polaroid Cam', 1, 800000000, ''),
(3, 3, 4, 'Older Car', 1, 36000000, ''),
(4, 4, 3, 'Machine Writer', 1, 55000000, ''),
(5, 5, 4, 'Older Car', 1, 36000000, ''),
(6, 6, 4, 'Older Car', 1, 36000000, ''),
(7, 7, 2, 'Sand clock', 2, 10000000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_barang = NEW.id_barang
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `gambar`, `role_id`, `is_active`) VALUES
(1, 'Adminretro', 'adminretro', '123', 'team-3.jpg', 1, 1),
(2, 'First User', 'user', '123', 'team-4.jpg', 2, 1),
(3, 'Dimas Nugroho Putro', 'dimas', '123', '3.jpg', 2, 1),
(6, 'Mbull', 'michan', '123', 'kamera-1.jpg', 2, 1),
(8, 'asd', 'asd', '123', '32.jpg', 2, 1),
(9, 'asd', 'asd', '123', 'team-51.jpg', 2, 1),
(10, 'Dadang suratang ', 'Dadang ', 'bintangharapan', 'IMG-20190524-WA0006.jpg', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
