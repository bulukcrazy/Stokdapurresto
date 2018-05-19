-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2018 at 10:13 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  `blokir` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `create` datetime DEFAULT NULL,
  `lastupdate` datetime DEFAULT NULL,
  `lastlogin` datetime DEFAULT NULL,
  `ipaddress` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`, `nama_lengkap`, `level`, `blokir`, `create`, `lastupdate`, `lastlogin`, `ipaddress`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin', 'N', '1999-12-31 00:00:00', '2018-04-08 15:43:07', '2018-05-11 13:31:20', '::1'),
('simbakawa', '66fa7a30e6060508ca781e5055b7e6f4', 'Pengurus Barang', 'admin', 'Y', NULL, '2018-04-08 15:33:17', '2018-05-07 23:10:30', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` char(15) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `satuan` char(10) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `harga_beli` bigint(20) NOT NULL,
  `harga_jual` varchar(20) NOT NULL,
  `stok_awal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `satuan`, `kategori`, `harga_beli`, `harga_jual`, `stok_awal`) VALUES
('bahan01', 'Beras Kampung Lokal ', 'Kg', 'bahan', 0, '', 10),
('bahan02', 'Beras Pandan Wangi ', 'Kg', 'bahan', 0, '', 10),
('bahan03', 'Beras CK', 'Kg', 'bahan', 0, '', 10),
('bahan04', 'Beras Cap Mangkok ', 'Kg', 'bahan', 0, '', 10),
('bahan05', 'Beras Top Man ', 'Kg', 'bahan', 0, '', 10),
('bahan06', 'Jagung Pipilan / Biji ', 'Kg', 'bahan', 0, '', 10),
('bahan07', 'Jagung Kisar / Halus ', 'Kg', 'bahan', 0, '', 10),
('bahan08', 'Gula Pasir ', 'Kg', 'bahan', 0, '', 10),
('bahan09', 'Wortel', 'Kg', 'bahan', 0, '', 10),
('bahan10', 'Kembang Kol', 'Kg', 'bahan', 0, '', 10),
('bahan11', 'Kol', 'Kg', 'bahan', 0, '', 10),
('bahan12', 'Bayam', 'Kg', 'bahan', 0, '', 10),
('bahan13', 'Buncis', 'Kg', 'bahan', 0, '', 10),
('bahan14', 'Kangkung', 'Kg', 'bahan', 0, '', 10),
('bahan15', 'Kacang Panjang', 'Kg', 'bahan', 0, '', 10),
('bahan16', 'Kentang', 'Kg', 'bahan', 0, '', 10),
('bahan17', 'Sawi Kriting ', 'Kg', 'bahan', 0, '', 10),
('bahan18', 'Sawi Putih ', 'Kg', 'bahan', 0, '', 10),
('bahan19', 'Tomat Lokal ', 'Kg', 'bahan', 0, '', 10),
('bahan20', 'Tomat Antar Pulau ', 'Kg', 'bahan', 0, '', 10),
('bahan21', 'Daging Sapi ', 'Kg', 'bahan', 0, '', 10),
('bahan22', 'Daging Ayam Kampung ', 'Kg', 'bahan', 0, '', 10),
('bahan23', 'Daging Ayam Ras', 'Kg', 'bahan', 0, '', 10),
('bahan24', 'Ikan Tenggiri ', 'Kg', 'bahan', 0, '', 10),
('bahan25', 'Ikan Merah ', 'Kg', 'bahan', 0, '', 10),
('bahan26', 'Ikan Kakap Hitam ', 'Kg', 'bahan', 0, '', 10),
('bahan27', 'Ikan Kakap Putih', 'Kg', 'bahan', 0, '', 10),
('bahan28', 'Ikan Bawal Hitam ', 'Kg', 'bahan', 0, '', 10),
('bahan29', 'Ikan Bawal Putih ', 'Kg', 'bahan', 0, '', 10),
('bahan30', 'Ikan Tongkol Hitam ', 'Kg', 'bahan', 0, '', 10),
('bahan31', 'Ikan Tongkol Putih ', 'Kg', 'bahan', 0, '', 10),
('bahan32', 'Ikan Gembung Pisang ', 'Kg', 'bahan', 0, '', 10),
('bahan33', 'Udang Air Tawar Kelas A ', 'Kg', 'bahan', 0, '', 10),
('bahan34', 'Udang Air Tawar Kelas B', 'Kg', 'bahan', 0, '', 10),
('bahan35', 'Udang Air Tawar Kelas C ', 'Kg', 'bahan', 0, '', 10),
('bahan36', 'Udang Laut Dogol ', 'Kg', 'bahan', 0, '', 10),
('bahan37', 'Udang Laut Wangkang', 'Kg', 'bahan', 0, '', 10),
('bahan38', 'Udang  Laut Putih ', 'Kg', 'bahan', 0, '', 10),
('bahan39', 'Minyak Goreng Dalam Kemasan ', 'Liter', 'bahan', 0, '', 10),
('bahan40', 'Minyak Goreng Curah', 'Liter', 'bahan', 0, '', 10),
('bahan41', 'Mentega Kemasan (250 gram)', 'Bks', 'bahan', 0, '', 10),
('bahan42', 'Mentega Timbang ', 'Kg', 'bahan', 0, '', 10),
('bahan43', 'Susu Bubuk (40 gram)', 'Shaset', 'bahan', 0, '', 10),
('bahan44', 'Susu Kental Manis (375 gr)', 'Kaleng', 'bahan', 0, '', 10),
('bahan45', 'Telur Ayam Kampung', 'Butir', 'bahan', 0, '', 10),
('bahan46', 'Telur Ayam Ras (Ukuran Kecil)', 'Butir', 'bahan', 0, '', 10),
('bahan47', 'Telur Ayam Ras (Ukuran Sedang)', 'Butir', 'bahan', 0, '', 10),
('bahan48', 'Telur Ayam Ras (Ukuran Besar)', 'Butir', 'bahan', 0, '', 10),
('bahan49', 'Gas Elpiji 3 Kg ', 'Tbg', 'bahan', 0, '', 10),
('bahan50', 'Gas Elpiji 12 Kg ', 'Tbg', 'bahan', 0, '', 10),
('bahan51', 'Garam Yodium ', 'Kg', 'bahan', 0, '', 10),
('bahan52', 'Garam Non Yodium ', 'Kg', 'bahan', 0, '', 10),
('bahan53', 'Kacang Kedelai', 'Kg', 'bahan', 0, '', 10),
('bahan54', 'Kacang Tanah ', 'Kg', 'bahan', 0, '', 10),
('bahan55', 'Kacang Hijau', 'Kg', 'bahan', 0, '', 10),
('bahan56', 'Kecang Merah Besar ', 'Kg', 'bahan', 0, '', 10),
('bahan57', 'Kacang Merah Kecil', 'Kg', 'bahan', 0, '', 10),
('bahan58', 'Bawang Merah', 'Kg', 'bahan', 0, '', 10),
('bahan59', 'Bawang Putih ', 'Kg', 'bahan', 0, '', 10),
('bahan60', 'Bawang Bombay ', 'Kg', 'bahan', 0, '', 10),
('bahan61', 'Cabe Rawit Lokal ', 'Kg', 'bahan', 0, '', 10),
('bahan62', 'Cabe Rawit Antar Pulau', 'Kg', 'bahan', 0, '', 10),
('bahan63', 'Cabe Merah Besar', 'Kg', 'bahan', 0, '', 10),
('bahan64', 'Cabe Keriting', 'Kg', 'bahan', 0, '', 10),
('bahan65', 'Cabe Kering', 'Kg', 'bahan', 0, '', 10),
('bahan66', 'Terigu Cap Segitiga Biru', 'Grm', 'bahan', 0, '', 10),
('kode_barang', 'nama_barang', 'satuan', 'kategori', 0, 'harga_jual', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `kode_menu` char(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`kode_menu`, `nama`, `jenis`, `keterangan`) VALUES
('AYM01', 'Ayam Geprek', 'MKN', ''),
('AYM02', 'Ayam Goreng ', 'MKN', ''),
('AYM03', 'Ayam BAKAR', 'MKN', ''),
('J01', 'Jus Jeruk', 'MNM', ''),
('J02', 'Jus Apel', 'MNM', ''),
('J03', 'Jus Strawberi', 'MNM', ''),
('NG01', 'Nasi Goreng Balado', 'MKN', ''),
('NG02', 'Nasi Goreng Kambing', 'MKN', '');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `kode_beli` char(15) NOT NULL,
  `tgl_beli` date NOT NULL,
  `kode_supplier` char(5) NOT NULL,
  `kode_barang` char(15) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `harga_beli` bigint(20) NOT NULL,
  `sumber` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`kode_beli`, `tgl_beli`, `kode_supplier`, `kode_barang`, `jumlah_beli`, `harga_beli`, `sumber`) VALUES
('0001', '2018-05-11', 'SP001', 'bahan12', 9, 0, ''),
('0001', '2018-05-11', 'SP001', 'bahan45', 9, 0, ''),
('0001', '2018-05-11', 'SP001', 'bahan47', 1, 0, ''),
('01', '2018-05-10', 'SP001', 'bahan01', 1, 0, ''),
('01', '2018-05-10', 'SP001', 'bahan02', 1, 0, ''),
('1', '2018-05-10', 'SP001', 'bahan01', 1, 0, ''),
('1', '2018-05-10', 'SP001', 'bahan02', 1, 0, ''),
('B01', '2018-05-11', 'SP001', 'bahan01', 1, 1000, 'undefined'),
('B02', '2018-05-11', 'SP002', 'bahan14', 2, 10000, 'undefined'),
('B03', '2018-05-11', 'SP005', 'bahan01', 1, 20000, 'undefined');

-- --------------------------------------------------------

--
-- Table structure for table `penerima`
--

CREATE TABLE `penerima` (
  `kode_penerima` int(10) NOT NULL,
  `nama_penerima` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `penerima`
--

INSERT INTO `penerima` (`kode_penerima`, `nama_penerima`) VALUES
(1, 'Agus Saefudin'),
(2, 'Ahmad Safingi'),
(3, 'Akhmad Syarif Fadilah'),
(4, 'Akhwal Margianto'),
(5, 'Alim Fahmi'),
(6, 'Alwan'),
(7, 'Andika Yulian Putra'),
(8, 'Anik Tri Rahayu'),
(9, 'Arif Kisworo'),
(10, 'Arif Wibowo'),
(11, 'Aris Budiyanto'),
(12, 'Artini Waluyati'),
(13, 'Ayu Olivia Sharaswati'),
(14, 'Banjar Eko Warsito'),
(15, 'Barkah Nurhidayati'),
(16, 'Budi Pujantoro'),
(17, 'Cahyani Tri Wardiyaningrum'),
(18, 'Debora Septi Wulandari'),
(19, 'Dhian Nur Laeli'),
(20, 'Didi Endaryanto'),
(21, 'Dilli Ariyanti'),
(22, 'Doni Sapta Indriawan'),
(23, 'Dwi Harliyani'),
(24, 'Dwitya Ilham Kurniadi'),
(25, 'Edy Waluyo'),
(26, 'Endang Lestyowati'),
(27, 'Enokta Dwi Santosa'),
(28, 'Erna Widiyaningsih'),
(29, 'Ery Purwanti'),
(30, 'Faris Jaya Mustika'),
(31, 'Farkhan Sukron'),
(32, 'Firdaus Achmad'),
(33, 'Firdaus Khanafi'),
(34, 'Fitri Budyawati'),
(35, 'Fitri Hidayati'),
(36, 'Hamid'),
(37, 'HANUM KURNIA SARI'),
(38, 'Haryati'),
(39, 'Hikma Fajarini'),
(40, 'Imam Fadoli'),
(41, 'Indriyaningsih'),
(42, 'Irfan Dakhli'),
(43, 'Irma Eftiyana'),
(44, 'ISNA ZAHROTUN NISA'),
(45, 'Isti Nurwahyuni'),
(46, 'Joni Kristianto'),
(47, 'KALTUM KUSBANDIJAH'),
(48, 'Kapsah Erniwati'),
(49, 'Karyawati Rahayu'),
(50, 'Katoyo'),
(51, 'Khoerul Hidayat'),
(52, 'Kurnia Santosa'),
(53, 'Kusrini Wulandari'),
(54, 'Lis Utami Fauziah'),
(55, 'LUSI NURMAWATI'),
(56, 'Lutfi Akhmad Syarwani'),
(57, 'MARDHIANA KUSUMA WARDANI'),
(58, 'MUHAMAD YUSUF EFENDI'),
(59, 'Muhammad Aris Fajar Ilmawan'),
(60, 'Muhammad Faisol Arief'),
(61, 'Mulyadi'),
(62, 'Mulyanti'),
(63, 'Nila Sri Subekti'),
(64, 'Ninik Isdiyanti'),
(65, 'NUGRAH AJI SASONGKO'),
(66, 'Nugroho'),
(67, 'Nur Arif Purnawan'),
(68, 'Paino'),
(69, 'Pipit Eko Priyono'),
(70, 'Purwi Kirana Sari'),
(71, 'Rahdwi Ayu Kurniyanti U'),
(72, 'Rakhman Hakim Arief'),
(73, 'Riyatno'),
(74, 'Sahid Pamudi'),
(75, 'Salis Ujiono'),
(76, 'Serani Triyanto'),
(77, 'Setyo Eko Widodo'),
(78, 'Sigit Purnama'),
(79, 'Slamet Haryanto'),
(80, 'Slamet Rifai'),
(81, 'Sri Handayani'),
(82, 'Sriyati'),
(83, 'Subiyanti'),
(84, 'SUDIYONO'),
(85, 'Sunarso'),
(86, 'Suparman'),
(87, 'Supriyadi'),
(88, 'Sutriangkat'),
(89, 'Tri Puji Utami'),
(90, 'Tri Subekti'),
(91, 'Uli Rahmania Latansa'),
(92, 'Umu Faizah'),
(93, 'Wahid Hasyim'),
(94, 'WAHYU HARYADI'),
(95, 'Wahyu Setiyani'),
(96, 'Warastri Kurniati'),
(97, 'Wasis Sucipto'),
(98, 'Widarto'),
(99, 'Widiono'),
(100, 'WILIS HANGGARJATI'),
(101, 'Yuli Setiyawan'),
(102, 'Yuli Tristiawan'),
(103, 'Yuni Siyami Imroatun');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `kode_jual` char(15) NOT NULL,
  `tgl_jual` date NOT NULL,
  `kode_barang` char(15) NOT NULL,
  `jumlah_jual` int(11) NOT NULL,
  `harga_jual` bigint(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `kode_menu` char(10) DEFAULT NULL,
  `banyak` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`kode_jual`, `tgl_jual`, `kode_barang`, `jumlah_jual`, `harga_jual`, `username`, `kode_menu`, `banyak`) VALUES
('JL0015', '2018-05-11', 'bahan17', 2, 0, 'admin', 'NG01', '2'),
('JL0016', '2018-05-11', 'bahan17', 2, 0, 'admin', 'NG01', '2'),
('JL0017', '2018-05-11', 'bahan17', 4, 0, 'admin', 'NG01', '4'),
('JL0018', '2018-05-11', 'bahan22', 2, 0, 'admin', 'AYM01', '2'),
('JL0018', '2018-05-11', 'bahan59', 2, 0, 'admin', 'AYM01', '2'),
('JL0018', '2018-05-11', 'bahan63', 4, 0, 'admin', 'AYM01', '2'),
('JL0019', '2018-05-11', 'bahan08', 2, 0, 'admin', 'J03', '2'),
('JL0020', '2018-05-11', 'bahan66', 4, 0, 'admin', 'J01', '2');

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `kode_resep` int(10) NOT NULL,
  `kode_barang` char(50) NOT NULL,
  `kode_menu` char(50) NOT NULL,
  `Qt` int(10) NOT NULL,
  `Ukuran` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`kode_resep`, `kode_barang`, `kode_menu`, `Qt`, `Ukuran`) VALUES
(7, 'bahan22', 'AYM01', 1, ''),
(8, 'bahan63', 'AYM01', 2, ''),
(9, 'bahan59', 'AYM01', 1, ''),
(10, 'bahan23', 'AYM02', 1, ''),
(11, 'bahan59', 'AYM02', 2, ''),
(12, 'bahan54', 'AYM02', 2, ''),
(13, 'bahan08', 'J03', 1, ''),
(14, 'bahan17', 'NG01', 1, ''),
(15, 'bahan66', 'J01', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `retur_pembelian`
--

CREATE TABLE `retur_pembelian` (
  `kode_retur` char(30) NOT NULL,
  `tgl_retur` date NOT NULL,
  `kode_beli` char(15) NOT NULL,
  `kode_barang` char(15) NOT NULL,
  `jumlah_retur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `kode_supplier` char(5) NOT NULL DEFAULT '',
  `nama_supplier` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`kode_supplier`, `nama_supplier`, `alamat`, `username`) VALUES
('SP001', 'CV PRIMA BANJARNEGARA', 'BANJARNEGARA', 'admin'),
('SP002', 'UD SARWODADI', 'BANJARNEGARA', 'admin'),
('SP005', 'TK SAHABAT', 'WANADADI', 'admin'),
('SP006', 'CV PARAMITA', 'BANJARNEGARA', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`username`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`) USING BTREE;

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`kode_menu`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`kode_beli`,`kode_supplier`,`kode_barang`) USING BTREE,
  ADD KEY `kode_barang` (`kode_barang`) USING BTREE,
  ADD KEY `kode_supplier` (`kode_supplier`) USING BTREE,
  ADD KEY `kode_beli` (`kode_beli`) USING BTREE;

--
-- Indexes for table `penerima`
--
ALTER TABLE `penerima`
  ADD PRIMARY KEY (`kode_penerima`) USING BTREE;

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`kode_jual`,`kode_barang`) USING BTREE,
  ADD KEY `kode_barang` (`kode_barang`) USING BTREE;

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`kode_resep`);

--
-- Indexes for table `retur_pembelian`
--
ALTER TABLE `retur_pembelian`
  ADD PRIMARY KEY (`kode_retur`,`kode_beli`,`kode_barang`) USING BTREE,
  ADD KEY `kode_beli` (`kode_beli`) USING BTREE,
  ADD KEY `kode_barang` (`kode_barang`) USING BTREE;

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kode_supplier`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penerima`
--
ALTER TABLE `penerima`
  MODIFY `kode_penerima` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `kode_resep` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`),
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`kode_supplier`) REFERENCES `supplier` (`kode_supplier`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`);

--
-- Constraints for table `retur_pembelian`
--
ALTER TABLE `retur_pembelian`
  ADD CONSTRAINT `retur_pembelian_ibfk_1` FOREIGN KEY (`kode_beli`) REFERENCES `pembelian` (`kode_beli`),
  ADD CONSTRAINT `retur_pembelian_ibfk_2` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
