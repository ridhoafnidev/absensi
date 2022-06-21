-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 05:12 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

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
  `office_id` int(11) NOT NULL,
  `date_absensi` date NOT NULL,
  `time_absensi` time NOT NULL,
  `status_absensi_id` int(11) NOT NULL,
  `tanggal_mulai` varchar(10) NOT NULL DEFAULT '',
  `tanggal_selesai` varchar(10) NOT NULL DEFAULT '',
  `dokumen_pendukung` varchar(50) NOT NULL DEFAULT '',
  `jenis_cuti` varchar(150) NOT NULL DEFAULT '',
  `lembur` tinyint(4) NOT NULL DEFAULT 0,
  `keterangan` varchar(100) NOT NULL DEFAULT '',
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `alamat_absensi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `jenis_absensi` enum('masuk','keluar') NOT NULL,
  `terlambat` varchar(11) NOT NULL DEFAULT '',
  `plg_cepat` varchar(11) NOT NULL DEFAULT '',
  `anak_ke` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_absensi`
--

INSERT INTO `tb_absensi` (`id_absensi`, `office_id`, `date_absensi`, `time_absensi`, `status_absensi_id`, `tanggal_mulai`, `tanggal_selesai`, `dokumen_pendukung`, `jenis_cuti`, `lembur`, `keterangan`, `lat`, `lng`, `alamat_absensi`, `created_at`, `updated_at`, `user_id`, `jenis_absensi`, `terlambat`, `plg_cepat`, `anak_ke`) VALUES
(79, 1, '2022-05-02', '19:47:38', 3, '2022-05-02', '2022-05-20', '2_images.jpeg', '', 0, '', 37.421998333333335, -122.084, '1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA', '2022-05-28 12:47:38', '2022-05-28 12:47:38', 2, 'keluar', '', '', ''),
(81, 1, '2022-05-23', '22:20:00', 5, '2022-05-23', '2022-05-25', '', '', 0, '', 0, 0, '0', '2022-05-29 15:20:32', '2022-05-29 15:20:32', 2, 'masuk', '', '', ''),
(82, 1, '2022-05-29', '23:24:00', 1, '', '', '', '', 1, '', 0, 0, '0', '2022-05-29 15:25:19', '2022-05-29 15:25:19', 2, 'keluar', '', '', ''),
(83, 1, '2022-05-27', '07:22:40', 1, '', '', '', '', 0, '', 0, 0, 'pku', '2022-05-28 07:16:49', '2022-05-28 07:16:49', 2, 'masuk', '', '', ''),
(84, 1, '2022-05-27', '16:06:12', 1, '', '', '', '', 0, '', 0, 0, 'pku', '2022-05-28 07:16:49', '2022-05-28 07:16:49', 2, 'keluar', '', '', ''),
(85, 1, '2022-05-30', '19:47:38', 1, '', '', '', '', 0, '', 0, 0, 'pku', '2022-05-28 07:16:49', '2022-05-28 07:16:49', 2, 'keluar', '', '', ''),
(86, 1, '2022-06-01', '19:47:38', 4, '2022-06-01', '2022-06-05', '2_images.jpeg', 'Cuti Alasan Penting', 0, '', 37.421998333333335, -122.084, '1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA', '2022-05-28 12:47:38', '2022-05-28 12:47:38', 2, 'keluar', '', '', ''),
(87, 1, '2022-06-06', '07:30:00', 1, '', '', '', '', 0, '', 37.421998333333335, -122.084, '1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA', '2022-05-28 12:47:38', '2022-05-28 12:47:38', 2, 'masuk', '', '', ''),
(88, 1, '2022-06-06', '16:30:30', 1, '', '', '', '', 0, '', 37.421998333333335, -122.084, '1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA', '2022-05-28 12:47:38', '2022-05-28 12:47:38', 2, 'keluar', '', '', ''),
(89, 1, '2022-06-07', '22:20:00', 3, '2022-06-07', '2022-06-08', '', '', 0, '', 0, 0, '0', '2022-05-29 15:20:32', '2022-05-29 15:20:32', 2, 'masuk', '', '', ''),
(90, 1, '2022-06-08', '19:47:38', 4, '2022-06-08', '2022-06-09', '2_images.jpeg', 'Cuti Bersalin', 0, '', 37.421998333333335, -122.084, '1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA', '2022-05-28 12:47:38', '2022-05-28 12:47:38', 2, 'masuk', '', '', '4'),
(91, 1, '2022-06-10', '19:47:38', 4, '2022-06-10', '2022-06-11', '2_images.jpeg', 'Cuti Bersalin', 0, '', 37.421998333333335, -122.084, '1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA', '2022-05-28 12:47:38', '2022-05-28 12:47:38', 2, 'masuk', '', '', '2'),
(92, 1, '2022-05-28', '19:47:38', 4, '2022-05-28', '2022-06-03', '2_images.jpeg', 'Cuti Bersalin', 0, '', 37.421998333333335, -122.084, '1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA', '2022-05-28 12:47:38', '2022-05-28 12:47:38', 2, 'keluar', '', '', '');

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
(1, 'Tidak Ada'),
(2, 'Kepala 1'),
(3, 'Kepala 2'),
(5, 'Ahli Pertama Pranata Komputer');

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
(1, 'Tidak Ada'),
(2, 'Kepala seksi'),
(3, 'Kepala kantor'),
(5, 'Kepala Sub Bagian TU');

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
(1, 'Senin', '07:30 - 16:00'),
(2, 'Selasa', '07:30 - 16:00'),
(3, 'Rabu', '07:30 - 16:00'),
(4, 'Kamis', '07:30 - 16:00'),
(5, 'Jumat', '07:30 - 16:30'),
(6, 'Sabtu', '00:00 -00:00'),
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
  `is_active` tinyint(4) NOT NULL DEFAULT 1
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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_master_office`
--

INSERT INTO `tb_master_office` (`id_master_office`, `office_name`, `office_address`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
(1, 'Kemenag Inhu', 'Kemenag Inhu', -0.394472, 102.432389, '2022-05-10 04:14:26', '2022-05-10 04:14:26'),
(2, 'Kemenag Inhu 2', 'Kemenag Inhu 2', -0.394472, 102.432389, '2022-05-10 04:14:26', '2022-05-10 04:14:26');

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
(2, 'Golongan Ib'),
(3, 'III/A'),
(4, 'III/d');

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
  `office_id` int(11) NOT NULL,
  `nik` varchar(40) NOT NULL,
  `nip` varchar(40) NOT NULL,
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
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `grade` varchar(11) NOT NULL DEFAULT '',
  `tunjangan` varchar(11) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `user_id`, `office_id`, `nik`, `nip`, `nama_lengkap`, `foto`, `email`, `no_hp`, `pns_nonpns_id`, `jenis_tenaga_id`, `unit_kerja_id`, `jabatan_struktural_id`, `jabatan_fungsional_id`, `pangkat_golongan_id`, `is_active`, `grade`, `tunjangan`) VALUES
(10, 2, 1, '123456', '654321', 'Ahmad', '', 'ahmad@gmail.com', '12345', 1, 1, 1, 1, 1, 1, 1, '3', '5500000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tunjangan`
--

CREATE TABLE `tb_tunjangan` (
  `id` int(11) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `nominal_tunjangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tunjangan`
--

INSERT INTO `tb_tunjangan` (`id`, `grade`, `nominal_tunjangan`) VALUES
(1, '1', '100000'),
(2, '2', '200000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level_id` int(11) NOT NULL DEFAULT 1,
  `office_id` int(11) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `authkey` varchar(50) NOT NULL DEFAULT '',
  `accesToken` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level_id`, `office_id`, `is_active`, `created_at`, `updated_at`, `authkey`, `accesToken`) VALUES
(2, 'ahmad', '$2y$10$1bbd2K6XZuwoa8Ei.5Pwde6nuxq/.I7AcNO52wCj2.Zh1qGUad0bC', 1, 0, 1, '2022-04-12 08:08:56', '2022-05-24 02:08:41', '123456', '654321'),
(6, 'admin', '$2y$10$2J8487haXMNup5mpAlbSUeUVJzcqYZuGqimoQVvWZ8s22oa.tRpQG', 2, 1, 1, '2022-04-12 08:08:56', '2022-05-12 10:31:09', '', ''),
(17, '654321', '$2y$13$zU5aJjAGEazcEmgRKSocQOdmbZ7O1xGnWpX6Bm.3KX9/XkZVWUbsi', 1, 1, 1, '2022-05-29 15:17:14', '2022-05-29 15:17:14', 'sHxg3fOw7M6xXoCkyGN-JAWFWupKNqTn', 'VO_MvTpB4ja8wTMGKI7NQZVnHXHUleEl'),
(18, '', '$2y$13$oAoZGU6q0OhiNYq/scuaQOJaQEWiuaMTzsLzecl4Ws06WuX0uxUva', 1, 1, 1, '2022-06-11 04:11:57', '2022-06-11 04:11:57', '6GjT1RXE_8X1DR8uuLT4vrdciqP42gCy', 'BDqj4mTYM8h1pcXbvWEiBZkGaLWCzGZa'),
(19, '', '$2y$13$o7QjF9bnTNq0SfU2G1YTCe0SuQ/tZPYZt7Z7D49iF3myOWf.HEwPG', 1, 1, 1, '2022-06-11 04:13:21', '2022-06-11 04:13:21', 'v1hjEtGoRoXXrFYkc80x_Kkv7pKG_rSs', 'SLSzp_ACw89bMDlKUHr6GxPJqzSpUbqG'),
(20, '', '$2y$13$McOF35fTWSSPKq0ZMCDxBOaFg4xQy0zuwvWu95VVdTZMVIdT7MPC2', 1, 1, 1, '2022-06-11 04:14:00', '2022-06-11 04:14:00', '4n3RFYR_5wsrRz9SyHQtUfUHkejl3GdX', 'zYXpeWC77AUuBHLUNnFc_pK7TnpCVE_w'),
(21, '', '$2y$13$QuWIisiyGgP8CKbf2.VPAeYcNriGwqnYLwuQH9MihjWqOePSfGTiy', 1, 1, 1, '2022-06-11 04:14:30', '2022-06-11 04:14:30', '_bhA8GKGCP9EoB9JHgM1VDzUHN3jzaxm', '47miN19M-AVuv0SPW5OBH9YSXoP_c0Rm'),
(22, '', '$2y$13$HevdELjywdMzzTFtJLMZq.ZBGKRZmZTrQybm4Q7zCb.ZlpgZdAjxO', 1, 1, 1, '2022-06-14 02:26:55', '2022-06-14 02:26:55', 'XY-b1oEQnMExwIa9RziY6tEI7_NRZFFz', 'mos5QDtZ0OTc82JSN3vOYc5kLU5T0jmI'),
(23, '', '$2y$13$3Vt3r0Bw2gS5Wha6zQGhNuG0UjWxTh8zOELJ9TNYZcQ4yGvhe0Ueq', 1, 1, 1, '2022-06-14 07:10:04', '2022-06-14 07:10:04', 'gW6zKU1eF7rDZFpwi3RATUT_ANiRzUEp', 'i2iNwto1kEw56yIthKaj3h9J1Yhy8qBx'),
(24, '', '$2y$13$C.QGGY9rhgrNySeuqbEtR.gPW/fq1tjqKHwhEeY5Ja.tsHFF89PyW', 1, 1, 1, '2022-06-14 13:42:45', '2022-06-14 13:42:45', 'tohTVKBJhehWQwPQnw67mk4iVbdYXMom', 'srAJRGHN6_lGK7cAfnxeiPAxKmaoRDjn'),
(25, '', '$2y$13$p8IgC3q.L3yldXJUyD2fKeua..6KHkWLWUD9a0vCCilSKanxvoS3a', 1, 1, 1, '2022-06-14 13:42:51', '2022-06-14 13:42:51', 'pjLYHcNBM7_5UODdyz5SLNN7Anl9mP5s', 'Lt_2I0Mh92fbpR7AchBqjc13uKvros7z'),
(26, '', '$2y$13$qM5h8iRAz1L5VfppGvOD1e746G3bU.miqeiDl2K3C715LLStaEDRG', 1, 1, 1, '2022-06-14 13:57:20', '2022-06-14 13:57:20', 'KcM6N7zQL7S4gN0OeSSQgvBUU74z8t0z', 'U9aA3CvkogfCVk-7qJqFoWI_VlGsCziQ'),
(27, '', '$2y$13$qu2xf1tpPrZ/qUTCji0zfeB89ZNqV8bMKQ0TEgdZNdzdu7Nb7Ft1m', 1, 1, 1, '2022-06-14 13:57:52', '2022-06-14 13:57:52', 'paeuszgph2rJ0cn07SxPr9q2Tv_TAjze', 'GVP6nJogIT1Ygvm09RJl3Rjf-BwHg160'),
(28, '', '$2y$13$vTj4vJ//hhBwcuzQtjuLsujIduS33IuLDF9xy.xlRS1.9dFj4qQwO', 1, 1, 1, '2022-06-14 14:24:57', '2022-06-14 14:24:57', 'LJitbhpsBhw4GPgMZJJMYRx6dxOvfQju', 'k0ZO-umwfLfRQhKKWaSZnm7b0wcQPTXU'),
(29, '', '$2y$13$va/tilZvbKZXYasJj4VKm.fpwS2QGT4Dv7mnNNUEcUurQpsgi7ig2', 1, 1, 1, '2022-06-14 14:28:40', '2022-06-14 14:28:40', 'VdM_RsYaHVeu5VlJJmwjODXbqJ3RSoIU', 'cubsO7NSkN9dNuQgWNR7O9NGPZo203-R');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `FK_AbsensiMasterStatusAbsensi` (`status_absensi_id`),
  ADD KEY `FK_AbsensiUser` (`user_id`),
  ADD KEY `FK_AbsensiOffice` (`office_id`);

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
  ADD KEY `FK_PegawaiOffice` (`office_id`),
  ADD KEY `FK_PegawaiUser` (`user_id`);

--
-- Indexes for table `tb_tunjangan`
--
ALTER TABLE `tb_tunjangan`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `tb_master_jabatan_fungsional`
--
ALTER TABLE `tb_master_jabatan_fungsional`
  MODIFY `id_jabatan_fungsional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_master_jabatan_struktural`
--
ALTER TABLE `tb_master_jabatan_struktural`
  MODIFY `id_master_jabatan_struktural` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id_master_office` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_master_pangkat_golongan`
--
ALTER TABLE `tb_master_pangkat_golongan`
  MODIFY `id_pangkat_golongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_tunjangan`
--
ALTER TABLE `tb_tunjangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD CONSTRAINT `FK_AbsensiMasterStatusAbsensi` FOREIGN KEY (`status_absensi_id`) REFERENCES `tb_master_status_absensi` (`id_status_absensi`),
  ADD CONSTRAINT `FK_AbsensiOffice` FOREIGN KEY (`office_id`) REFERENCES `tb_master_office` (`id_master_office`),
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
  ADD CONSTRAINT `FK_PegawaiOffice` FOREIGN KEY (`office_id`) REFERENCES `tb_master_office` (`id_master_office`),
  ADD CONSTRAINT `FK_PegawaiUser` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `FK_UserMasterLevel` FOREIGN KEY (`level_id`) REFERENCES `tb_master_level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
