-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2017 at 04:24 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_olshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_admin` varchar(40) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`) VALUES
(1, 'aku', 'anu', 'anumu'),
(4, 'admin', 'admin', 'Irvan Mustakim');

-- --------------------------------------------------------

--
-- Table structure for table `diskon`
--

CREATE TABLE IF NOT EXISTS `diskon` (
  `id_diskon` int(11) NOT NULL AUTO_INCREMENT,
  `id_jenis` int(11) NOT NULL,
  `id_sepatu` int(11) NOT NULL,
  `diskon` int(15) NOT NULL,
  `harga_asli` double(15,2) NOT NULL,
  `harga_diskon` double(15,2) NOT NULL,
  PRIMARY KEY (`id_diskon`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `diskon`
--

INSERT INTO `diskon` (`id_diskon`, `id_jenis`, `id_sepatu`, `diskon`, `harga_asli`, `harga_diskon`) VALUES
(14, 5, 20, 20, 560000.00, 448000.00),
(15, 5, 26, 30, 360000.00, 252000.00),
(16, 5, 32, 50, 755000.00, 377500.00),
(17, 5, 35, 20, 427000.00, 341600.00),
(18, 5, 31, 10, 420000.00, 378000.00);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE IF NOT EXISTS `jenis` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(30) NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
(5, 'SNEAKERS'),
(11, 'SPORT'),
(12, 'PANTOFEL');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE IF NOT EXISTS `keranjang` (
  `id_keranjang` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NOT NULL,
  `id_sepatu` int(11) NOT NULL,
  PRIMARY KEY (`id_keranjang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `keranjang`
--


-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kodepos` varchar(6) NOT NULL,
  `kecamatan` varchar(35) NOT NULL,
  `kota` varchar(15) NOT NULL,
  `provinsi` varchar(15) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `tgl_daftar` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `username`, `password`, `nama_lengkap`, `email`, `alamat`, `kodepos`, `kecamatan`, `kota`, `provinsi`, `nohp`, `tgl_daftar`) VALUES
(4, 'irvan', '123', 'irvan mustakim', 'irvan281197@gmail.com', 'tebo jambi ', '123456', 'rimbo ilir', 'tebo', 'jambi', '082280343239', '2017-12-05 23:27:41');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NOT NULL,
  `id_sepatu` int(11) NOT NULL,
  `kdpesanan` varchar(25) NOT NULL,
  `nama2` varchar(40) NOT NULL,
  `nohp2` varchar(15) NOT NULL,
  `kdpos2` varchar(7) NOT NULL,
  `prov2` varchar(30) NOT NULL,
  `kota2` varchar(30) NOT NULL,
  `kcmt2` varchar(30) NOT NULL,
  `alamat2` text NOT NULL,
  `harga2` double(15,2) NOT NULL,
  `status` varchar(15) NOT NULL,
  `bukti` text NOT NULL,
  `tgl_pemesanan` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_pemesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pemesanan`
--


-- --------------------------------------------------------

--
-- Table structure for table `sepatu`
--

CREATE TABLE IF NOT EXISTS `sepatu` (
  `id_sepatu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(25) NOT NULL,
  `nama_sepatu` varchar(40) NOT NULL,
  `harga_sepatu` double(15,2) NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL,
  `stok` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`id_sepatu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `sepatu`
--

INSERT INTO `sepatu` (`id_sepatu`, `nama_jenis`, `nama_sepatu`, `harga_sepatu`, `gambar`, `deskripsi`, `stok`, `status`) VALUES
(20, 'PANTOFEL', ' Pantofel xmust', 448000.00, 'pantofel1.png', 'terbuat dari kulit sapi\r\nwarna terang ', 'masih', ''),
(21, 'PANTOFEL', ' pantofel chocolate sweet', 340000.00, 'pantofel2.png', 'dari kuliat sapi asli\r\nwaterproof\r\n', 'masih', ''),
(22, 'PANTOFEL', ' pantofel star', 255000.00, 'pantofel3.png', 'kulit kambing\r\nnyaman di kaki', 'masih', ''),
(23, 'PANTOFEL', ' pantofel dark', 342000.00, 'pantofel4.png', 'kulit sapi import', 'masih', ''),
(24, 'PANTOFEL', ' pantofel slime sr', 287000.00, 'pantofel5.png', 'kulit kambing', 'habis', ''),
(25, 'SNEAKERS', ' new era white', 185000.00, 'snakers1.png', 'jahitan rapi', 'masih', ''),
(26, 'SNEAKERS', ' new era tornado red', 252000.00, 'snakers2.png', 'limited edition', 'masih', ''),
(27, 'SNEAKERS', ' all start', 150000.00, 'snakers3.png', 'kain anti luntur', 'masih', ''),
(28, 'SNEAKERS', ' adidas c45', 246000.00, 'snakers4.png', 'jahitan kuat', 'masih', ''),
(29, 'SNEAKERS', ' adidas pinky', 570000.00, 'snakers5.png', 'limited edition', 'habis', ''),
(30, 'SPORT', ' nike torbin', 320000.00, 'sport1.png', 'dengan lem terkuat', 'masih', ''),
(31, 'SPORT', ' league sport 33', 378000.00, 'sport3.png', 'sepatu murah tapi awet', 'masih', ''),
(32, 'SPORT', ' mizuno tornado', 377500.00, 'sport5.png', 'sepatu volly branded', 'masih', ''),
(33, 'SPORT', ' nike xytr', 408000.00, 'sport7.png', 'jahitan rapi', 'masih', ''),
(34, 'SPORT', ' adidas predator', 850000.00, 'sport4.png', 'limited edition', 'masih', ''),
(35, 'SPORT', ' adidas pinky boy', 341600.00, 'sport6.png', 'limited edition', 'habis', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NOT NULL,
  `kdpesanan` varchar(30) NOT NULL,
  `total_bayar` double(15,2) NOT NULL,
  `tgl_transaksi` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_member`, `kdpesanan`, `total_bayar`, `tgl_transaksi`) VALUES
(1, 4, 'pesan-20171217030534', 300000.00, '2017-12-17 06:36:44');
