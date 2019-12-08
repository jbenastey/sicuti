-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Des 2019 pada 09.50
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sicuti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sicuti_jabatan`
--

CREATE TABLE `sicuti_jabatan` (
  `jabatan_id` int(11) NOT NULL,
  `jabatan_nama` varchar(225) NOT NULL,
  `jabatan_level` enum('kankemenag kab/kota','sub perencanaan','sub organisasi','sub hukum','sub informasi','sub umum','pendidikan madrasah','pendidikan keagamaan','haji dan umrah','urusan agama','penerangan agama','masyarakat kriten','masyarakat hindu','masyarakat katolik','masyarakat budha','pegawai kankemenag kab/kota','pimpinan','admin','pegawai sub perencanaan','pegawai sub organisasi','pegawai sub hukum','pegawai sub informasi','pegawai sub umum','pegawai pendidikan madrasah','pegawai pendidikan keagamaan','pegawai haji dan umrah','pegawai urusan agama','pegawai penerangan agama','pegawai masyarakat kriten','pegawai masyarakat katolik','pegawai masyarakat hindu','pegawai masyarakat budha') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sicuti_jabatan`
--

INSERT INTO `sicuti_jabatan` (`jabatan_id`, `jabatan_nama`, `jabatan_level`) VALUES
(1, 'kepala', 'pimpinan'),
(2, 'Kepala Kantor Kementerian Agama Kabupaten Bengkalis', ''),
(3, 'Kepala Kantor Kementerian Agama Kabupaten Indragiri Hilir', ''),
(4, 'Kepala Kantor Kementerian Agama Kabupaten Indragiri Hulu', ''),
(5, 'Kepala Sub Bagian Perencanaan dan Keuangan', 'sub perencanaan'),
(6, 'Analis Laporan Realisasi Anggaran', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sicuti_pegawai`
--

CREATE TABLE `sicuti_pegawai` (
  `pegawai_id` int(11) NOT NULL,
  `pegawai_jabatan_id` int(11) NOT NULL,
  `pegawai_unit_id` int(11) NOT NULL,
  `pegawai_nama` varchar(225) NOT NULL,
  `pegawai_nip` varchar(25) NOT NULL,
  `pegawai_golongan` varchar(10) NOT NULL,
  `pegawai_nohp` int(15) NOT NULL,
  `pegawai_alamat` text NOT NULL,
  `pegawai_TMT` date NOT NULL,
  `pegawai_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sicuti_pegawai`
--

INSERT INTO `sicuti_pegawai` (`pegawai_id`, `pegawai_jabatan_id`, `pegawai_unit_id`, `pegawai_nama`, `pegawai_nip`, `pegawai_golongan`, `pegawai_nohp`, `pegawai_alamat`, `pegawai_TMT`, `pegawai_date_created`) VALUES
(1, 1, 2, 'sutejo saputra', '11551100566', 'IV/d', 628239138, 'jalan salak gg duri', '2018-12-15', '2019-12-01 20:50:16'),
(2, 5, 5, 'Drs. H. MULIARDI, M.Pd', '196910011997031004', 'IV/a', 2147483647, 'jalan tegal sari ujung', '2010-10-01', '2019-12-04 15:02:45'),
(3, 6, 5, 'VITRIA VIRGONORA, SE', '197908222005012009', 'IV/b', 2147483647, 'jalan satu arah', '1999-03-12', '2019-12-06 09:46:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sicuti_unit`
--

CREATE TABLE `sicuti_unit` (
  `unit_id` int(11) NOT NULL,
  `unit_kerja` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sicuti_unit`
--

INSERT INTO `sicuti_unit` (`unit_id`, `unit_kerja`) VALUES
(2, 'kepala'),
(3, 'Kantor Kementerian Agama Kabupaten Pelalawan'),
(4, 'Kementerian Agama Kabupaten Kepulauan Meranti'),
(5, 'Sub Bagian Perencanaan dan Keuangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sicuti_user`
--

CREATE TABLE `sicuti_user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(225) NOT NULL,
  `user_password` varchar(225) NOT NULL,
  `user_pegawai_id` int(11) DEFAULT NULL,
  `user_level` enum('kankemenag kab/kota','sub perencanaan','sub organisasi','sub hukum','sub informasi','sub umum','pendidikan madrasah','pendidikan keagamaan','haji dan umrah','urusan agama','penerangan agama','masyarakat kriten','masyarakat hindu','masyarakat katolik','masyarakat budha','pegawai kankemenag kab/kota','pimpinan','admin','pegawai sub perencanaan','pegawai sub organisasi','pegawai sub hukum','pegawai sub informasi','pegawai sub umum','pegawai pendidikan madrasah','pegawai pendidikan keagamaan','pegawai haji dan umrah','pegawai urusan agama','pegawai penerangan agama','pegawai masyarakat kriten','pegawai masyarakat katolik','pegawai masyarakat hindu','pegawai masyarakat budha') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sicuti_user`
--

INSERT INTO `sicuti_user` (`user_id`, `user_username`, `user_password`, `user_pegawai_id`, `user_level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, 'admin'),
(2, '11551100566', 'df5a808d0bc647dff5e202a9a59642eb', 1, 'pimpinan'),
(3, '197908222005012009', '93730b79cba80615b3e9dc79bf154ffb', 3, 'pegawai sub perencanaan'),
(4, '196910011997031004', '965dc0a8d93a61fde225fa0c57e9fca8', 2, 'sub perencanaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cuti`
--

CREATE TABLE `tb_cuti` (
  `cuti_id` int(11) NOT NULL,
  `cuti_pegawai_id` int(11) NOT NULL,
  `cuti_jenis` varchar(225) NOT NULL,
  `cuti_alasan` text NOT NULL,
  `cuti_tgl_mulai` date NOT NULL,
  `cuti_tgl_selesai` date NOT NULL,
  `cuti_status_pimpinan` enum('disetujui','tidak disetujui','belum','') NOT NULL DEFAULT 'belum',
  `cuti_status_kepala_bidang` enum('disetujui','tidak disetujui','belum','') DEFAULT 'belum',
  `cuti_tanggal_dibuat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_cuti`
--

INSERT INTO `tb_cuti` (`cuti_id`, `cuti_pegawai_id`, `cuti_jenis`, `cuti_alasan`, `cuti_tgl_mulai`, `cuti_tgl_selesai`, `cuti_status_pimpinan`, `cuti_status_kepala_bidang`, `cuti_tanggal_dibuat`) VALUES
(1, 3, 'Cuti Besar', 'pulang kampung', '2019-12-09', '2019-12-13', 'belum', 'disetujui', '2019-12-06 11:03:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sicuti_jabatan`
--
ALTER TABLE `sicuti_jabatan`
  ADD PRIMARY KEY (`jabatan_id`);

--
-- Indexes for table `sicuti_pegawai`
--
ALTER TABLE `sicuti_pegawai`
  ADD PRIMARY KEY (`pegawai_id`);

--
-- Indexes for table `sicuti_unit`
--
ALTER TABLE `sicuti_unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `sicuti_user`
--
ALTER TABLE `sicuti_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_cuti`
--
ALTER TABLE `tb_cuti`
  ADD PRIMARY KEY (`cuti_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sicuti_jabatan`
--
ALTER TABLE `sicuti_jabatan`
  MODIFY `jabatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sicuti_pegawai`
--
ALTER TABLE `sicuti_pegawai`
  MODIFY `pegawai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sicuti_unit`
--
ALTER TABLE `sicuti_unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sicuti_user`
--
ALTER TABLE `sicuti_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_cuti`
--
ALTER TABLE `tb_cuti`
  MODIFY `cuti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
