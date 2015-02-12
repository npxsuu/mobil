-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2015 at 08:26 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` varchar(30) collate latin1_general_ci NOT NULL,
  `nama` varchar(30) collate latin1_general_ci NOT NULL,
  `alamat` varchar(30) collate latin1_general_ci NOT NULL,
  `tgl_lhr` date NOT NULL,
  `tmp_lhr` varchar(30) collate latin1_general_ci NOT NULL,
  `jk` enum('L','P') collate latin1_general_ci NOT NULL,
  `status` varchar(30) collate latin1_general_ci NOT NULL,
  `no_tlp` int(30) NOT NULL,
  `ket` varchar(30) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_anggota`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `alamat`, `tgl_lhr`, `tmp_lhr`, `jk`, `status`, `no_tlp`, `ket`) VALUES
('A123', 'Budi Hastaman', 'Srandakan, Bantul', '2015-01-09', 'Srandakan,Pandak,Bantul', 'L', '', 895643657, ''),
('A125', 'Wahyu Aji Saputro', 'Peni, Palbapang, Bantul', '1996-01-11', 'Peni, Palbapang, Bantul', 'L', '', 2147483647, ''),
('A127', 'Bagas Adi Putra', 'Peni, Palbapang, Bantul', '2015-01-17', 'Srandakan,Pandak,Bantul', 'L', '', 836534735, ''),
('54646', 'tanggo aji', 'aljskjd', '2015-01-24', 'sdfdsf', 'L', 'df', 6787, 'ghj');

-- --------------------------------------------------------

--
-- Table structure for table `angsuran`
--

CREATE TABLE `angsuran` (
  `id_angsuran` varchar(30) collate latin1_general_ci NOT NULL,
  `id_kategori` varchar(30) collate latin1_general_ci NOT NULL,
  `id_anggota` varchar(30) collate latin1_general_ci NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `angsuran_ke` varchar(30) collate latin1_general_ci NOT NULL,
  `besar_angsuran` varchar(30) collate latin1_general_ci NOT NULL,
  `ket` varchar(30) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_angsuran`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `angsuran`
--

INSERT INTO `angsuran` (`id_angsuran`, `id_kategori`, `id_anggota`, `tgl_pembayaran`, `angsuran_ke`, `besar_angsuran`, `ket`) VALUES
('AS990', 'K787', '', '2015-01-06', '5', '100000', ''),
('AS99021', 'K78766', 'A12367', '2015-01-23', '5', '1000000', ''),
('AS95465', 'K56756', 'A658789', '2015-02-25', '10', '5000000', ''),
('AS7898', 'K72000', 'A24478', '2015-01-16', '', '', ''),
('AS990457', 'K720006', '54646567', '2015-01-23', '7', '900000', 'ghj'),
('5654', 'aaaaa', 'aa', '2015-01-15', '8', '', 'gh');

-- --------------------------------------------------------

--
-- Table structure for table `detail_angsuran`
--

CREATE TABLE `detail_angsuran` (
  `id_angsuran` varchar(30) collate latin1_general_ci NOT NULL,
  `tgl_jatuh_tempo` date NOT NULL,
  `besar_angsuran` varchar(30) collate latin1_general_ci NOT NULL,
  `ket` varchar(30) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_angsuran`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `detail_angsuran`
--

INSERT INTO `detail_angsuran` (`id_angsuran`, `tgl_jatuh_tempo`, `besar_angsuran`, `ket`) VALUES
('AS990', '2015-01-31', '100000', ''),
('AS991', '2015-01-31', '50000', ''),
('AS992', '2015-02-28', '100000', ''),
('AS999', '2015-02-03', '100000', ''),
('AS911', '2015-03-11', '50000', ''),
('AS99065', '2015-01-24', '700000', 'utyu'),
('6756', '2015-01-20', '909000', 'fgh'),
('4776', '2015-01-20', '909000', 'fgh'),
('assa', '2015-01-20', 'sd', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pinjaman`
--

CREATE TABLE `kategori_pinjaman` (
  `id_kategori_pinjaman` varchar(30) collate latin1_general_ci NOT NULL,
  `nama_pinjaman` varchar(30) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_kategori_pinjaman`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `kategori_pinjaman`
--

INSERT INTO `kategori_pinjaman` (`id_kategori_pinjaman`, `nama_pinjaman`) VALUES
('IDK454', 'Pawiro Speed'),
('IDK455', 'Michael Edward'),
('IDK4556', 'Marco Finshen'),
('IDK447', 'Paijo Simatupang'),
('IDK448', 'Indra Birowo'),
('', 'sdf'),
('UGFYGY', 'HI');

-- --------------------------------------------------------

--
-- Table structure for table `petugas_koperasi`
--

CREATE TABLE `petugas_koperasi` (
  `id_petugas` varchar(30) collate latin1_general_ci NOT NULL,
  `nama` varchar(30) collate latin1_general_ci NOT NULL,
  `alamat` varchar(30) collate latin1_general_ci NOT NULL,
  `no_tlp` int(30) NOT NULL,
  `tmp_lhr` varchar(30) collate latin1_general_ci NOT NULL,
  `tgl_lhr` date NOT NULL,
  `ket` varchar(30) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_petugas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `petugas_koperasi`
--

INSERT INTO `petugas_koperasi` (`id_petugas`, `nama`, `alamat`, `no_tlp`, `tmp_lhr`, `tgl_lhr`, `ket`) VALUES
('P8989', 'Anjilo Olga', 'Karanggayam, Palbapang, Bantul', 67859683, 'Srandakan,Pandak,Bantul', '2015-02-20', ''),
('P3432', 'Tata Sudibjo', 'Palbapang, Bantul', 8456467, 'Ngawi, Jawa Timur', '2015-01-30', ''),
('P4546', 'Suryadi Inggredients', 'Cepor Lor, Palbapang, Bantul', 78568945, 'Pokoh, Palbapang, Bantul', '2015-01-10', ''),
('P7797', 'Hendri Pitoy', 'Sabdodadi, Pandak, Bantul', 78679668, 'Sabdodadi, Pandak, Bantul', '2015-01-31', ''),
('As', 'namaaa', 'sdsd', 980, 'sdf', '2015-01-30', 'df'),
('tyikuyg', '', '', 0, '', '0000-00-00', ''),
('49u59437', 'Tinaku', 'knsdjbfvj', 0, 'knfjb', '0000-00-00', 'igsn'),
('789', '', '', 0, '', '0000-00-00', 'uuuuuuuuuuuu');

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id_pinjaman` varchar(30) collate latin1_general_ci NOT NULL,
  `nama_pinjaman` varchar(30) collate latin1_general_ci NOT NULL,
  `id_anggota` varchar(30) collate latin1_general_ci NOT NULL,
  `besar_pinjaman` varchar(30) collate latin1_general_ci NOT NULL,
  `tgl_pengajuan_pinjaman` date NOT NULL,
  `tgl_acc_peminjam` date NOT NULL,
  `tgl_pinjaman` date NOT NULL,
  `tgl_pelunasan` date NOT NULL,
  `id_angsuran` varchar(30) collate latin1_general_ci NOT NULL,
  `ket` varchar(30) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_pinjaman`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`id_pinjaman`, `nama_pinjaman`, `id_anggota`, `besar_pinjaman`, `tgl_pengajuan_pinjaman`, `tgl_acc_peminjam`, `tgl_pinjaman`, `tgl_pelunasan`, `id_angsuran`, `ket`) VALUES
('P123', '', 'A244', '200000', '2015-01-30', '2015-01-31', '2015-04-15', '2015-09-17', 'AS9797', ''),
('P234', 'MODAL', 'A7779', '3000000', '2015-01-31', '2015-02-03', '2015-03-11', '2016-01-01', 'AS644', ''),
('P799', 'Modal', 'A9799', '80000', '2015-01-06', '2015-01-10', '2015-01-11', '2015-03-11', 'AS918', ''),
('P6868', 'USAHA', 'A6799', '900000', '2015-01-04', '2015-01-06', '2015-01-22', '2015-03-11', 'AS1000', ''),
('x', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', ''),
('AWAKA', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `simpanan`
--

CREATE TABLE `simpanan` (
  `id_simpanan` varchar(30) collate latin1_general_ci NOT NULL,
  `nm_simpanan` varchar(30) collate latin1_general_ci NOT NULL,
  `id_anggota` varchar(30) collate latin1_general_ci NOT NULL,
  `tgl_simpanan` date NOT NULL,
  `besar_simpanan` varchar(30) collate latin1_general_ci NOT NULL,
  `ket` varchar(30) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_simpanan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `simpanan`
--

INSERT INTO `simpanan` (`id_simpanan`, `nm_simpanan`, `id_anggota`, `tgl_simpanan`, `besar_simpanan`, `ket`) VALUES
('SI990', 'USAHA', 'A8776', '2015-01-30', '60000000', ''),
('SI5786', 'MODAL', 'A4576', '2015-05-14', '9000000', ''),
('SI0058', 'USAHA', 'A4543', '2015-01-28', '90000000', ''),
('SI67898', 'MODAL', 'A12465', '2015-01-06', '1000000', ''),
('SI00597', 'USAHA', 'A5467', '2015-01-08', '800000', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) collate latin1_general_ci NOT NULL,
  `password` varchar(40) collate latin1_general_ci NOT NULL,
  `level` varchar(2) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', '1');
