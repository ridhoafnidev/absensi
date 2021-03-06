-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 20, 2022 at 12:08 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi_depag`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_absensi`
--

CREATE TABLE `tb_absensi` (
  `id_absensi` int(11) NOT NULL,
  `date_absensi` date NOT NULL,
  `time_absensi` time NOT NULL,
  `status_absensi_id` int(11) NOT NULL,
  `tanggal_mulai` varchar(10) NOT NULL DEFAULT '',
  `tanggal_selesai` varchar(10) NOT NULL DEFAULT '',
  `dokumen_pendukung` varchar(50) NOT NULL DEFAULT '',
  `jenis_cuti` varchar(150) NOT NULL DEFAULT '',
  `lembur` tinyint(4) NOT NULL DEFAULT '0',
  `keterangan` varchar(100) NOT NULL DEFAULT '',
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `alamat_absensi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `jenis_absensi` enum('masuk','keluar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_absensi`
--

INSERT INTO `tb_absensi` (`id_absensi`, `date_absensi`, `time_absensi`, `status_absensi_id`, `tanggal_mulai`, `tanggal_selesai`, `dokumen_pendukung`, `jenis_cuti`, `lembur`, `keterangan`, `lat`, `lng`, `alamat_absensi`, `created_at`, `updated_at`, `user_id`, `jenis_absensi`) VALUES
(6, '2022-04-21', '07:38:00', 1, '', '', '', '', 0, '', 0, 0, '', '2022-04-23 08:58:43', '2022-04-23 08:58:43', 2, 'masuk'),
(60, '2022-04-21', '16:57:59', 1, '', '', '', '', 0, '', 0, 0, '', '2022-04-23 08:58:43', '2022-04-23 08:58:43', 2, 'keluar'),
(61, '2022-04-22', '07:55:03', 1, '', '', '', '', 0, '', 0, 0, '', '2022-04-23 08:58:43', '2022-04-23 08:58:43', 2, 'masuk'),
(62, '2022-04-22', '17:01:34', 1, '', '', '', '', 0, '', 0, 0, '', '2022-04-23 08:58:43', '2022-04-23 08:58:43', 2, 'keluar'),
(63, '2022-04-19', '07:22:36', 1, '', '', '', '', 0, '', 0, 0, '', '2022-04-23 08:58:43', '2022-04-23 08:58:43', 2, 'masuk'),
(64, '2022-04-25', '00:00:00', 5, '2022-04-25', '2022-04-27', '', '', 0, '', 0, 0, 'PKU', '2022-04-23 08:58:43', '2022-04-23 08:58:43', 2, 'masuk');

-- --------------------------------------------------------

--
-- Table structure for table `tb_master_jabatan_fungsional`
--

CREATE TABLE `tb_master_jabatan_fungsional` (
  `id_jabatan_fungsional` int(11) NOT NULL,
  `jabatan_fungsional` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_master_jabatan_fungsional`
--

INSERT INTO `tb_master_jabatan_fungsional` (`id_jabatan_fungsional`, `jabatan_fungsional`) VALUES
(1, 'Kepala 1'),
(2, 'Kepala 2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_master_jabatan_struktural`
--

CREATE TABLE `tb_master_jabatan_struktural` (
  `id_master_jabatan_struktural` int(11) NOT NULL,
  `jabatan_struktural` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_master_jabatan_struktural`
--

INSERT INTO `tb_master_jabatan_struktural` (`id_master_jabatan_struktural`, `jabatan_struktural`) VALUES
(1, 'Kepala kantor'),
(2, 'Kepala seksi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_master_jam_kerja`
--

CREATE TABLE `tb_master_jam_kerja` (
  `id_jam_kerja` int(11) NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') NOT NULL,
  `jam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_master_jam_kerja`
--

INSERT INTO `tb_master_jam_kerja` (`id_jam_kerja`, `hari`, `jam`) VALUES
(1, 'Senin', '07:30:00 - 16:00:00'),
(2, 'Selasa', '07:30:00 - 16:00:00'),
(3, 'Rabu', '07:30:00 - 16:00:00'),
(4, 'Kamis', '07:30:00 - 16:00:00'),
(5, 'Jumat', '07:30:00 - 16:00:00'),
(6, 'Sabtu', '00:00 - 00:00'),
(7, 'Minggu', '00:00 - 00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_master_jenis_tenaga`
--

CREATE TABLE `tb_master_jenis_tenaga` (
  `id_master_jenis_tenaga` int(11) NOT NULL,
  `jenis_tenaga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_master_jenis_tenaga`
--

INSERT INTO `tb_master_jenis_tenaga` (`id_master_jenis_tenaga`, `jenis_tenaga`) VALUES
(1, 'Honor'),
(2, 'PNS');

-- --------------------------------------------------------

--
-- Table structure for table `tb_master_level`
--

CREATE TABLE `tb_master_level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(50) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_master_level`
--

INSERT INTO `tb_master_level` (`id_level`, `level`, `is_active`) VALUES
(1, 'pegawai', 1),
(2, 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_master_office`
--

CREATE TABLE `tb_master_office` (
  `id_master_office` int(11) NOT NULL,
  `office_name` varchar(50) NOT NULL,
  `office_address` varchar(50) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_master_office`
--

INSERT INTO `tb_master_office` (`id_master_office`, `office_name`, `office_address`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
(1, 'Kantor Baru', 'Jalan Narasinga', -6.229455, 106.608975, '2022-05-10 04:14:26', '2022-05-10 04:14:26');

-- --------------------------------------------------------

--
-- Table structure for table `tb_master_pangkat_golongan`
--

CREATE TABLE `tb_master_pangkat_golongan` (
  `id_pangkat_golongan` int(11) NOT NULL,
  `pangkat_golongan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_master_pangkat_golongan`
--

INSERT INTO `tb_master_pangkat_golongan` (`id_pangkat_golongan`, `pangkat_golongan`) VALUES
(1, 'Golongan Ia'),
(2, 'Golongan Ib');

-- --------------------------------------------------------

--
-- Table structure for table `tb_master_pns_nonpns`
--

CREATE TABLE `tb_master_pns_nonpns` (
  `id_master_pns_nonpns` int(11) NOT NULL,
  `pns_nonpns` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_master_pns_nonpns`
--

INSERT INTO `tb_master_pns_nonpns` (`id_master_pns_nonpns`, `pns_nonpns`) VALUES
(1, 'PNS'),
(2, 'NON-PNS');

-- --------------------------------------------------------

--
-- Table structure for table `tb_master_status_absensi`
--

CREATE TABLE `tb_master_status_absensi` (
  `id_status_absensi` int(11) NOT NULL,
  `status_absensi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_master_status_absensi`
--

INSERT INTO `tb_master_status_absensi` (`id_status_absensi`, `status_absensi`) VALUES
(1, 'WFH (Rumah)'),
(2, 'WFO (Kantor)'),
(3, 'Sakit'),
(4, 'Cuti'),
(5, 'Dinas Luar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_master_unit_kerja`
--

CREATE TABLE `tb_master_unit_kerja` (
  `id_master_unit_kerja` int(11) NOT NULL,
  `unit_kerja` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_master_unit_kerja`
--

INSERT INTO `tb_master_unit_kerja` (`id_master_unit_kerja`, `unit_kerja`) VALUES
(1, 'Kantor urusan agama kecamatan batang gangsal'),
(2, 'Kantor kementerian agama kab. Indragiri hulu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nik` varchar(18) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `pns_nonpns_id` int(11) NOT NULL,
  `jenis_tenaga_id` int(11) NOT NULL,
  `unit_kerja_id` int(11) NOT NULL,
  `jabatan_struktural_id` int(11) NOT NULL,
  `jabatan_fungsional_id` int(11) NOT NULL,
  `pangkat_golongan_id` int(11) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `grade` varchar(11) NOT NULL DEFAULT '',
  `tunjangan` varchar(11) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `user_id`, `nik`, `nip`, `nama_lengkap`, `foto`, `email`, `no_hp`, `pns_nonpns_id`, `jenis_tenaga_id`, `unit_kerja_id`, `jabatan_struktural_id`, `jabatan_fungsional_id`, `pangkat_golongan_id`, `is_active`, `grade`, `tunjangan`) VALUES
(3, 2, '123456', '7654321', 'Ahmad Zahid', '3_images.jpeg', 'ahmad@gmail.com', '082154321267', 1, 1, 2, 1, 1, 1, 1, '11', '5000000'),
(4, 5, '098765', '567890', 'Aman', '', 'aman@gmail.com', '0812', 1, 1, 1, 2, 1, 1, 1, '11', '6500000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level_id` int(11) NOT NULL DEFAULT '1',
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `authkey` varchar(50) NOT NULL DEFAULT '',
  `accesToken` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level_id`, `is_active`, `created_at`, `updated_at`, `authkey`, `accesToken`) VALUES
(2, 'ahmad', '$2y$10$Pcr5OgzbhEJ7oUllq6ZvYO9HKE1wd66p8Jk4JGZhzY3XicQBrkBSC', 1, 1, '2022-04-12 08:08:56', '2022-05-12 10:31:09', '', ''),
(5, '567890', '567890', 1, 1, '2022-05-17 16:29:24', '2022-05-17 16:29:24', '', ''),
(6, 'admin', '$2y$10$2J8487haXMNup5mpAlbSUeUVJzcqYZuGqimoQVvWZ8s22oa.tRpQG', 2, 1, '2022-04-12 08:08:56', '2022-05-12 10:31:09', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `FK_AbsensiMasterStatusAbsensi` (`status_absensi_id`),
  ADD KEY `FK_AbsensiUser` (`user_id`);

--
-- Indexes for table `tb_master_jabatan_fungsional`
--
ALTER TABLE `tb_master_jabatan_fungsional`
  ADD PRIMARY KEY (`id_jabatan_fungsional`);

--
-- Indexes for table `tb_master_jabatan_struktural`
--
ALTER TABLE `tb_master_jabatan_struktural`
  ADD PRIMARY KEY (`id_master_jabatan_struktural`);

--
-- Indexes for table `tb_master_jam_kerja`
--
ALTER TABLE `tb_master_jam_kerja`
  ADD PRIMARY KEY (`id_jam_kerja`);

--
-- Indexes for table `tb_master_jenis_tenaga`
--
ALTER TABLE `tb_master_jenis_tenaga`
  ADD PRIMARY KEY (`id_master_jenis_tenaga`);

--
-- Indexes for table `tb_master_level`
--
ALTER TABLE `tb_master_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_master_office`
--
ALTER TABLE `tb_master_office`
  ADD PRIMARY KEY (`id_master_office`);

--
-- Indexes for table `tb_master_pangkat_golongan`
--
ALTER TABLE `tb_master_pangkat_golongan`
  ADD PRIMARY KEY (`id_pangkat_golongan`);

--
-- Indexes for table `tb_master_pns_nonpns`
--
ALTER TABLE `tb_master_pns_nonpns`
  ADD PRIMARY KEY (`id_master_pns_nonpns`);

--
-- Indexes for table `tb_master_status_absensi`
--
ALTER TABLE `tb_master_status_absensi`
  ADD PRIMARY KEY (`id_status_absensi`);

--
-- Indexes for table `tb_master_unit_kerja`
--
ALTER TABLE `tb_master_unit_kerja`
  ADD PRIMARY KEY (`id_master_unit_kerja`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `FK_PegawaiMasterUnitKerja` (`pns_nonpns_id`),
  ADD KEY `FK_PegawaiMasterJenisTenaga` (`jenis_tenaga_id`),
  ADD KEY `FK_PegawaiMasterUnitKerjaDuplicate` (`unit_kerja_id`),
  ADD KEY `FK_PegawaiMasterJabatanStruktural` (`jabatan_struktural_id`),
  ADD KEY `FK_PegawaiMasterJabatanFungsional` (`jabatan_fungsional_id`),
  ADD KEY `FK_PegawaiMasterPangkatGolongan` (`pangkat_golongan_id`),
  ADD KEY `FK_PegawaiUser` (`user_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `FK_UserMasterLevel` (`level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tb_master_jabatan_fungsional`
--
ALTER TABLE `tb_master_jabatan_fungsional`
  MODIFY `id_jabatan_fungsional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_master_jabatan_struktural`
--
ALTER TABLE `tb_master_jabatan_struktural`
  MODIFY `id_master_jabatan_struktural` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_master_jam_kerja`
--
ALTER TABLE `tb_master_jam_kerja`
  MODIFY `id_jam_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_master_jenis_tenaga`
--
ALTER TABLE `tb_master_jenis_tenaga`
  MODIFY `id_master_jenis_tenaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_master_level`
--
ALTER TABLE `tb_master_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_master_office`
--
ALTER TABLE `tb_master_office`
  MODIFY `id_master_office` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_master_pangkat_golongan`
--
ALTER TABLE `tb_master_pangkat_golongan`
  MODIFY `id_pangkat_golongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_master_pns_nonpns`
--
ALTER TABLE `tb_master_pns_nonpns`
  MODIFY `id_master_pns_nonpns` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_master_status_absensi`
--
ALTER TABLE `tb_master_status_absensi`
  MODIFY `id_status_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_master_unit_kerja`
--
ALTER TABLE `tb_master_unit_kerja`
  MODIFY `id_master_unit_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD CONSTRAINT `FK_AbsensiMasterStatusAbsensi` FOREIGN KEY (`status_absensi_id`) REFERENCES `tb_master_status_absensi` (`id_status_absensi`),
  ADD CONSTRAINT `FK_AbsensiUser` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD CONSTRAINT `FK_PegawaiMasterJabatanFungsional` FOREIGN KEY (`jabatan_fungsional_id`) REFERENCES `tb_master_jabatan_fungsional` (`id_jabatan_fungsional`),
  ADD CONSTRAINT `FK_PegawaiMasterJabatanStruktural` FOREIGN KEY (`jabatan_struktural_id`) REFERENCES `tb_master_jabatan_struktural` (`id_master_jabatan_struktural`),
  ADD CONSTRAINT `FK_PegawaiMasterJenisTenaga` FOREIGN KEY (`jenis_tenaga_id`) REFERENCES `tb_master_jenis_tenaga` (`id_master_jenis_tenaga`),
  ADD CONSTRAINT `FK_PegawaiMasterPangkatGolongan` FOREIGN KEY (`pangkat_golongan_id`) REFERENCES `tb_master_pangkat_golongan` (`id_pangkat_golongan`),
  ADD CONSTRAINT `FK_PegawaiMasterUnitKerja` FOREIGN KEY (`pns_nonpns_id`) REFERENCES `tb_master_pns_nonpns` (`id_master_pns_nonpns`),
  ADD CONSTRAINT `FK_PegawaiMasterUnitKerjaDuplicate` FOREIGN KEY (`unit_kerja_id`) REFERENCES `tb_master_unit_kerja` (`id_master_unit_kerja`),
  ADD CONSTRAINT `FK_PegawaiUser` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `FK_UserMasterLevel` FOREIGN KEY (`level_id`) REFERENCES `tb_master_level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
