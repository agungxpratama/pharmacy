-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2020 at 03:11 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy_kids1`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `lihat_keranjang` (IN `id` INT(3))  NO SQL
BEGIN
SELECT
id_keranjang,id_obat,nama_obat,harga_obat,quantity,pengiriman,
harga(id_keranjang) AS 'total_harga'
FROM keranjang2 WHERE id_keranjang = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lihat_obat` (IN `id` INT(3))  NO SQL
BEGIN
SELECT * FROM obat WHERE id_obat = id;
END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `harga` (`id` INT) RETURNS VARCHAR(15) CHARSET latin1 NO SQL
begin
declare total varchar(15);
set total = (select concat(pengiriman+(harga_obat*quantity)) as 'total1' from keranjang2 where id_keranjang = id );
return(total);
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(20) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `foto` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bayar`
--

CREATE TABLE `bayar` (
  `id_bayar` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_bayar` int(20) NOT NULL,
  `id_transaksi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detailtransaksi` int(5) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `harga_obat` int(20) NOT NULL,
  `quantity` int(30) NOT NULL,
  `pengiriman` varchar(10) NOT NULL,
  `total_harga` int(30) NOT NULL,
  `id_transaksi` int(10) NOT NULL,
  `id_obat` int(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id_diagnosa` int(20) NOT NULL,
  `nama_diagnosa` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_artikel` int(10) NOT NULL,
  `id_obat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `db_keranjang` int(11) NOT NULL,
  `id_keranjang` int(20) NOT NULL,
  `id_obat` int(20) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `harga_obat` int(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`db_keranjang`, `id_keranjang`, `id_obat`, `nama_obat`, `harga_obat`, `quantity`, `id_user`, `id_transaksi`) VALUES
(1, 2, 8, 'Panadol', 15000, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang2`
--

CREATE TABLE `keranjang2` (
  `id_keranjang` int(10) NOT NULL,
  `id_obat` int(10) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `harga_obat` int(15) NOT NULL,
  `quantity` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `id_user` int(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`id_user`, `email`, `password`) VALUES
(1, 'qwe@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'qwe@gm.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(10) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `foto` text NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `merek` varchar(30) NOT NULL,
  `jenis_obat` varchar(30) NOT NULL,
  `aturan_pakai` text NOT NULL,
  `komposisi` text NOT NULL,
  `deskripsi` text NOT NULL,
  `kemasan` varchar(30) NOT NULL,
  `indikasi_umum` text NOT NULL,
  `manufaktur` text NOT NULL,
  `segmentasi` text NOT NULL,
  `harga_obat` int(6) NOT NULL,
  `efek_samping` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `foto`, `kategori`, `merek`, `jenis_obat`, `aturan_pakai`, `komposisi`, `deskripsi`, `kemasan`, `indikasi_umum`, `manufaktur`, `segmentasi`, `harga_obat`, `efek_samping`) VALUES
(8, 'Panadol', 'panadol.jpg', 'Pusing', 'asd', 'Pil', '3', 'par', 'Obat penreda Pusing', 'Kaplet', 'meredakan pusing', 'kalbe', '-', 15000, 'dapat menyebabkan kantuk');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `kota` varchar(255) NOT NULL,
  `kode_pos` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama_lengkap`, `telepon`, `alamat`, `tanggal`, `kota`, `kode_pos`, `kecamatan`, `kelurahan`, `provinsi`, `metode_pembayaran`, `email`, `id_user`, `quantity`, `total_harga`) VALUES
(1, 'qwerty', '822827102', 'qwertyuiop', '0000-00-00', '', '', '', '', '0', 'Treansfer Bank', 'qwe@gmail.com', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_beli`
--

CREATE TABLE `transaksi_beli` (
  `id_transaksi` int(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` date NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `metode_pembayaran` varchar(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_keranjang` int(10) NOT NULL,
  `id_obat` int(5) NOT NULL,
  `nama_obat` varchar(25) NOT NULL,
  `quantity` varchar(15) NOT NULL,
  `harga_obat` varchar(20) NOT NULL,
  `total_harga` varchar(20) NOT NULL,
  `pengiriman` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_beli`
--

INSERT INTO `transaksi_beli` (`id_transaksi`, `nama_lengkap`, `telepon`, `alamat`, `tanggal`, `kota`, `kode_pos`, `kecamatan`, `kelurahan`, `provinsi`, `metode_pembayaran`, `id_user`, `id_keranjang`, `id_obat`, `nama_obat`, `quantity`, `harga_obat`, `total_harga`, `pengiriman`) VALUES
(5, 'Ridho udut Wanda popo', 'bhjbjhbjhb', 'wdawd', '0000-00-00', 'bhjbjh', 'jhbjh', 'bjhbjhb', '', 'bjh', '', 0, 0, 1, 'obh', '6', '655', '33930', '30000'),
(6, 'Wanda', '08463546453', 'asdfhjkl;', '0000-00-00', 'jujuju', '5646', 'sdfghjkl', '', 'wdwad', '', 0, 0, 1, 'obh', '5', '655', '28275', '25000'),
(7, 'Wanda', '08463546453', 'asdfhjkl;', '0000-00-00', 'jujuju', '5646', 'sdfghjkl', '', 'wdwad', '', 0, 0, 1, 'obh', '5', '655', '28275', '25000'),
(8, 'Wanda', '08463546453', 'asdfhjkl;', '0000-00-00', 'jujuju', '5646', 'sdfghjkl', '', 'wdwad', '', 0, 0, 1, 'obh', '5', '655', '28275', '25000'),
(9, 'Wanda', '08463546453', 'jalan sukabirus', '0000-00-00', 'bandung', '2312', 'sukapura', '', 'jawa barat', '', 0, 0, 1, 'obh', '8', '655', '30240', '25000'),
(10, 't', '56745', 'jalan sukabirus', '0000-00-00', 'dwad', '2312', 'gj', '', 'juu', '', 0, 0, 1, 'obh', '1', '655', '30655', '30000'),
(11, 'Wanda', '56745', 'jalan sukabirus', '0000-00-00', 'jujuju', '34435', 'sukapura', '', 'jawa barat', '', 0, 0, 1, 'obh', '1', '655', '30655', '30000'),
(12, 'sadfgh', 'zsfhb', 'jszfxhbj', '0000-00-00', 'szjhb', 'szdhj', 'szghj', '', 'zsfxdhb', '', 0, 0, 2, 'PANADOL ANAK-ANAK 0-1 DRO', '5', '30000', '170000', '20000'),
(13, 'Wanda', '08463546453', 'jalan sukabirus', '0000-00-00', 'bandung', '34435', 'sukapura', '', 'jawa barat', '', 0, 0, 3, 'PANADOL ANAK-ANAK 0-1 DRO', '4', '500000', '2030000', '30000'),
(14, 'Wanda', '081272636484', 'jalan soreang', '0000-00-00', 'bandung', '5646', 'sukapura', '', 'jawa barat', '', 0, 0, 3, 'PANADOL ANAK-ANAK 0-1 DRO', '1', '500000', '530000', '30000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` int(12) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `alamat`, `telepon`, `email`) VALUES
(1, 'qwerty', 'qwertyuiop', 822827102, 'qwe@gmail.com'),
(2, 'qwe', 'qweas', 2147483647, 'qwe@gm.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `bayar`
--
ALTER TABLE `bayar`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detailtransaksi`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`),
  ADD KEY `id_artikel` (`id_artikel`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`db_keranjang`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `keranjang2`
--
ALTER TABLE `keranjang2`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `transaksi_beli`
--
ALTER TABLE `transaksi_beli`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`),
  ADD KEY `id_keranjang` (`id_keranjang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detailtransaksi` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id_diagnosa` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `db_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keranjang2`
--
ALTER TABLE `keranjang2`
  MODIFY `id_keranjang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi_beli`
--
ALTER TABLE `transaksi_beli`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bayar`
--
ALTER TABLE `bayar`
  ADD CONSTRAINT `bayar_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi_beli` (`id_transaksi`);

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi_beli` (`id_transaksi`),
  ADD CONSTRAINT `detail_transaksi_ibfk_3` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD CONSTRAINT `diagnosa_ibfk_2` FOREIGN KEY (`id_artikel`) REFERENCES `artikel` (`id_artikel`),
  ADD CONSTRAINT `diagnosa_ibfk_3` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
