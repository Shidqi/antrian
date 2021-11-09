-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2021 at 06:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perusahaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `menu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `content`, `menu`) VALUES
(1, '<div class=\'col-lg-8 col-md-8 col-sm-8 col-xs-12\'>\r\n        <div class=\'row\'>\r\n            <div class=\'col-lg-12 col-md-12 col-sm-12 col-xs-12\'>\r\n                <h1>Sampaikan kebutuhan anda sekarang</h1>\r\n                    \r\n                        <form method=\'post\' action=\'\'>\r\n                                <div class=\'row\'>\r\n                                    <div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>Nama pemesan</label>\r\n                                        <input type=\'text\' name=\'nama\' placeholder=\'\' class=\'form-control\' required>\r\n                                    </div>\r\n									<div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>No Telfon</label>\r\n                                        <input type=\'text\' name=\'tlp\' placeholder=\'\' class=\'form-control\' required>\r\n                                    </div>\r\n									<div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>Detail Pesanan</label>\r\n                                        <textarea class=\'form-control\' name=\'detail\' rows=\'6\' placeholder=\'\'></textarea>\r\n                                    </div>\r\n                                    <div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>E-mail</label>\r\n                                        <input type=\'text\' name=\'email\' placeholder=\'\' class=\'form-control\' required>\r\n                                    </div>\r\n                                    </div>\r\n                                    <div class=\'col-md-12\'>\r\n                                        <div class=\'form-group\'>\r\n                                            <input name=\'singlebutton\' class=\'btn btn-primary\' type=\'submit\' value=\'Sampaikan\'>\r\n                                        </div>\r\n                                    </div>\r\n                                </div>\r\n                            </form>\r\n                        </div>\r\n                    </div>\r\n                </div>', 'pesan'),
(2, '<div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-12\">\r\n<div class=\"row\">\r\n<div class=\'col-lg-12 col-md-12 col-sm-12 col-xs-12\'>\r\n                <h1>Para Calon Pendaftar</h1>\r\n                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">                 <table class=\'table table-striped\'>                 <thead>                     <tr>                         \r\n<th>No</th>                         <th>Nama</th>         <th>Alamat</th>                <th>Tahun</th>                     </tr>                 </thead>         <tbody>', 'listprojek'),
(3, '<div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-12\">\r\n<div class=\"row\">\r\n<div class=\'col-lg-12 col-md-12 col-sm-12 col-xs-12\'>\r\n<h1>Daftar Wisata</h1>\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"><table class=\'table table-striped\'><thead><tr>                         \r\n<th>Nama Wisata</th><th>Alamat</th></tr></thead><tbody>', 'admin'),
(4, '<div class=\'col-lg-8 col-md-8 col-sm-8 col-xs-12\'>\r\n        <div class=\'row\'>\r\n            <div class=\'col-lg-12 col-md-12 col-sm-12 col-xs-12\'>\r\n                <h1>Edit Data Wisata</h1>\r\n                    \r\n                        <form method=\'post\' action=\'\'>\r\n                                <div class=\'row\'>\r\n                                    <div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>Nama Tempat*</label>\r\n                                        <input type=\'text\' name=\'nama\' placeholder=\'\' class=\'form-control\' value=\'<?php echo $data[1]; ?>\' required>\r\n                                    </div>\r\n				    <div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>Alamat Tempat Wisata</label>\r\n                                        <textarea class=\'form-control\' name=\'alamat\' rows=\'6\' placeholder=\'\'></textarea>\r\n                                    </div>\r\n                                    <div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>Kontak</label>\r\n                                        <input type=\'text\' name=\'kontak\' placeholder=\'\' class=\'form-control\' required>\r\n                                    </div>\r\n				    <div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>Deskripsi</label>\r\n                                        <textarea class=\'form-control\' name=\'deskripsi\' rows=\'6\' placeholder=\'\'></textarea>\r\n                                    </div>\r\n                                    <label class=\'control-label\'>Foto</label>\r\n                                        <input type=\"file\" name=\"foto\">\r\n                                    </div>\r\n                                    <div class=\'col-md-12\'>\r\n                                        <div class=\'form-group\'>\r\n                                            <input name=\'singlebutton\' class=\'btn btn-default\' type=\'submit\' value=\'Daftar\'>\r\n                                        </div>\r\n                                    </div>\r\n                                </div>\r\n                            </form>\r\n                        </div>\r\n                    </div>\r\n                </div>', 'edit'),
(5, '<div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-12\">\r\n<div class=\"row\">\r\n<div class=\'col-lg-12 col-md-12 col-sm-12 col-xs-12\'>\r\n                <h1>Daftar Projek Yang telah kami kerjakan</h1>\r\n                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">                 <table class=\'table table-striped\'>                 <thead>                     <tr>                         \r\n<th>Nama Projek</th>                         <th>Client</th></tr>                 </thead>         <tbody>', 'portofolio'),
(6, '<div class=\'col-lg-8 col-md-8 col-sm-8 col-xs-12\'>\r\n            <div class=\'col-lg-12 col-md-12 col-sm-12 col-xs-12\'>                  \r\n                        <form method=\'post\' action=\'\' enctype=\'multipart/form-data\'>\r\n                                    <div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>nama</label>\r\n                                        <input type=\'text\' name=\'nama\' placeholder=\'\' class=\'form-control\' required>\r\n                                    </div>\r\n									<div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>No. telfon</label>\r\n                                        <input type=\'tel\' name=\'no_tlfn\' placeholder=\'\' class=\'form-control\' required>\r\n                                    </div>\r\n									<div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>email</label>\r\n                                        <input type=\'text\' name=\'email\' placeholder=\'\' class=\'form-control\' required>\r\n                                    </div>\r\n                                    <div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>jenis kelamin*</label>\r\n                                        <select class=\'form-control\' name=\'jenis_kelamin\' required>\r\n                                            <option value=\'Laki-Laki\'>Laki-Laki</option>\r\n                                            <option value=\'Perempuan\'>Perempuan</option>\r\n                                        </select>\r\n                                    </div>\r\n                                    <div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>tanggal lahir*</label>\r\n                                        <div class=\'datepicker-center\'>\r\n                                            <div class=\'input-group date \' data-date=\'\' data-date-format=\'yyyy-mm-dd\'>\r\n                                                <span class=\'input-group-addon\'><i class=\'glyphicon glyphicon-calendar\'></i></span>\r\n                                                <input class=\'form-control\' type=\'text\' name=\'tgl_regis\' readonly=\'readonly\'>\r\n                                            </div>\r\n                                        </div>\r\n                                    </div>\r\n									<div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>link portofolio</label>\r\n                                        <input type=\'text\' name=\'portofolio\' placeholder=\'\' class=\'form-control\' required>\r\n                                    </div>         \r\n									<div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>Jabatan yang dilamar</label>\r\n                                        <input type=\'text\' name=\'jabatan\' placeholder=\'\' class=\'form-control\' required>\r\n                                    </div>\r\n                                    <div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>status</label>\r\n                                        <select class=\'form-control\' name=\'status\' required>\r\n                                            <option value=\'Magang\'>Magang</option>\r\n                                            <option value=\'Full Time\'>Full Time</option>\r\n                                        </select>\r\n                                    </div>\r\n									<div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>Pendidikan Terakhir</label>\r\n                                        <select class=\'form-control\' name=\'pendidikan\' required>\r\n                                            <option value=\'SMA/SMK\'>SMA/SMK</option>\r\n                                            <option value=\'D3\'>D3</option>\r\n											<option value=\'S1\'>S1</option>\r\n                                        </select>\r\n                                    </div>\r\n									<div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>Asal Sekolah</label>\r\n                                        <input type=\'text\' name=\'asalsekolah\' placeholder=\'\' class=\'form-control\' required>\r\n                                    </div>\r\n                                    <div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>CV</label>\r\n                                        <input type=\"file\" name=\"cv\">\r\n                                    </div>\r\n                                    <div class=\'col-md-12\'>\r\n                                        <div class=\'form-group\'>\r\n                                            <input name=\'singlebutton\' class=\'btn btn-primary\' type=\'submit\' value=\'Daftar\'>\r\n                                        </div>\r\n                                    </div>\r\n                            </form>\r\n                        </div>\r\n                </div>', 'karir'),
(7, '<div class=\'col-lg-8 col-md-8 col-sm-8 col-xs-12\'>\r\n            <div class=\'col-lg-12 col-md-12 col-sm-12 col-xs-12\'>\r\n                <h1>Form Pendaftaran</h1>\r\n                <button class=\'btn btn-default\' onclick=\"goBack()\"><-Go Back</button>\r\n                <script>\r\n                function goBack() {\r\n                window.history.back();\r\n                }\r\n                </script>                    \r\n                        <form method=\'post\' action=\'\' enctype=\'multipart/form-data\'>\r\n                                    <div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>nama</label>\r\n                                        <input type=\'text\' name=\'nama\' placeholder=\'\' class=\'form-control\' required>\r\n                                    </div><br><br><br><br>\r\n                                    <div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>tanggal lahir*</label>\r\n                                        <div class=\'datepicker-center\'>\r\n                                            <div class=\'input-group date \' data-date=\'\' data-date-format=\'yyyy-mm-dd\'>\r\n                                                <span class=\'input-group-addon\'><i class=\'glyphicon glyphicon-calendar\'></i></span>\r\n                                                <input class=\'form-control\' type=\'text\' name=\'tgl_regis\' readonly=\'readonly\'>\r\n                                            </div>\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>jenis kelamin*</label>\r\n                                        <select class=\'form-control\' name=\'jenis_kelamin\' required>\r\n                                            <option value=\'Laki-Laki\'>Laki-Laki</option>\r\n                                            <option value=\'Perempuan\'>Perempuan</option>\r\n                                        </select>\r\n                                    </div>\r\n                                    \r\n                                    <div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>Alamat</label>\r\n                                        <textarea class=\'form-control\' name=\'almt\' rows=\'6\' placeholder=\'\' required></textarea>\r\n                                    </div>\r\n                                    <div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>No. telfon</label>\r\n                                        <input type=\'tel\' name=\'notelfon\' placeholder=\'\' class=\'form-control\' required>\r\n                                    </div>\r\n                                    <div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>email</label>\r\n                                        <input type=\'tel\' name=\'email\' placeholder=\'\' class=\'form-control\' required>\r\n                                    </div>\r\n                                    <div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>jabatan</label>\r\n                                        <input type=\'tel\' name=\'jabatan\' placeholder=\'\' class=\'form-control\' required>\r\n                                    </div>                                    \r\n                                    <div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>status</label>\r\n                                        <select class=\'form-control\' name=\'status\' required>\r\n                                            <option value=\'Pegawai Tetap\'>Pegawai Tetap</option>\r\n                                            <option value=\'Magang\'>Magang</option>\r\n                                        </select>\r\n                                    </div>\r\n                                    <div class=\'col-md-6\'>\r\n                                        <label class=\'control-label\'>Foto</label>\r\n                                        <input type=\"file\" name=\"foto\">\r\n                                    </div>\r\n                                    <div class=\'col-md-12\'>\r\n                                        <div class=\'form-group\'>\r\n                                            <input name=\'singlebutton\' class=\'btn btn-default\' type=\'submit\' value=\'Tambahkan\'>\r\n                                        </div>\r\n                                    </div>\r\n                            </form>\r\n                        </div>\r\n                </div>', 'tambahkar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_absensi`
--

CREATE TABLE `tbl_absensi` (
  `kd_absensi` int(11) NOT NULL,
  `tgl_absen` varchar(255) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `status_absen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_absensi`
--

INSERT INTO `tbl_absensi` (`kd_absensi`, `tgl_absen`, `nama_karyawan`, `status_absen`) VALUES
(4, 'Thursday, 22-07-2021 07:40:59 am', 'nona kecil', 'Masuk'),
(5, 'Thursday, 22-07-2021 07:59:17 pm', 'nona kecil', 'Masuk'),
(6, 'Thursday, 22-07-2021 07:59:58 pm', 'nona kecil', 'Masuk'),
(7, 'Friday, 06-08-2021 10:44:18 pm', 'nona kecil', 'Masuk'),
(8, 'Wednesday, 11-08-2021 09:14:52 pm', 'nona kecil', 'Masuk'),
(9, 'Thursday, 12-08-2021 11:03:23 am', 'nona kecil', 'Masuk'),
(10, 'Wednesday, 18-08-2021 09:17:47 pm', 'nona kecil', 'Masuk');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gaji`
--

CREATE TABLE `tbl_gaji` (
  `kd_gaji` int(11) NOT NULL,
  `tgl_gaji` date NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `gaji_karyawan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gaji`
--

INSERT INTO `tbl_gaji` (`kd_gaji`, `tgl_gaji`, `nama_karyawan`, `gaji_karyawan`) VALUES
(9, '2021-08-04', 'shidqi maulana syifa', 20000),
(11, '2021-08-18', 'nona kecil', 4000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(30) NOT NULL,
  `tgl_lahir_karyawan` date NOT NULL,
  `jenis_kelamin_karyawan` varchar(20) NOT NULL,
  `alamat_karyawan` varchar(50) NOT NULL,
  `foto_karyawan` varchar(500) NOT NULL,
  `no_telfon_karyawan` int(20) NOT NULL,
  `email_karyawan` varchar(30) NOT NULL,
  `jabatan_karyawan` varchar(30) NOT NULL,
  `status_karyawan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id_karyawan`, `nama_karyawan`, `tgl_lahir_karyawan`, `jenis_kelamin_karyawan`, `alamat_karyawan`, `foto_karyawan`, `no_telfon_karyawan`, `email_karyawan`, `jabatan_karyawan`, `status_karyawan`) VALUES
(1, 'shidqi maulana syifa', '1999-02-19', 'laki-laki', 'Jl tokyo', 'aaaaaa.PNG', 1234567890, 'shidqi@shidqi.jp', 'CEO', 'Pegawai Tetap'),
(2, 'sayu', '2021-06-16', 'Perempuan', 'Jl tokyo', 'sayu.jpg', 12345678, 'sayusayu@sayu.jp', 'HRD', 'Pegawai Tetap'),
(3, 'sodikin', '2021-06-09', 'laki-laki', 'mana', 'mau.png', 321, 'sodikin@email.com', 'Admin pemesanan', 'Pegawai Tetap'),
(4, 'yuna', '2021-06-09', 'Perempuan', 'akihabara', 'yuna.jpg', 12341, 'yunayuan@gmail.com', 'Keuangan', 'Pegawai Tetap'),
(5, 'nona kecil', '2021-06-23', 'Perempuan', 'jepang', 'matayume.jpg', 321654, 'nona@kecil.com', 'programer', 'Pegawai Tetap'),
(6, 'ereh', '2021-06-08', 'Laki-Laki', 'paradise', 'ereh.jpg', 4565465, 'ereh@titan.com', 'programmer', 'Pegawai Tetap'),
(7, 'doni', '2021-07-02', 'Laki-Laki', 'dirumah doni', 'E3jczF-UYAA9JHl.jpg', 987654321, 'doni@email.com', 'programmer', 'Pegawai Tetap'),
(8, 'nori', '2021-07-07', 'Laki-Laki', 'alamat nori', 'E3jcy7SUcAEqnuh.jpg', 123265468, 'nori@nori.com', 'keuangan', 'Magang'),
(9, 'nemmynemmy', '2019-02-02', 'Perempuan', 'alamat nemmy ya dirumah', 'E5QBIOQVUAYutRM.jpg', 2147, 'nemmy@icegang.com', 'admin', 'Magang'),
(15, 'Shidqi', '1923-08-17', 'Laki-Laki', 'Tanggerang', 'b.png', 987654321, 'shidqimaulanasyifa99@gmail.com', 'admin', 'Pegawai Tetap');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelamar`
--

CREATE TABLE `tbl_pelamar` (
  `kd_pelamar` int(11) NOT NULL,
  `nama_pelamar` varchar(30) NOT NULL,
  `no_telfon_pelamar` int(20) NOT NULL,
  `email_pelamar` varchar(50) NOT NULL,
  `jk_pelamar` varchar(10) NOT NULL,
  `tgl_lahir_pelamar` date NOT NULL,
  `link_portofolio` varchar(50) NOT NULL,
  `jabatan_yg_dilamar` varchar(30) NOT NULL,
  `status_pelamar` varchar(20) NOT NULL,
  `pendidikan_terakhir` varchar(20) NOT NULL,
  `cv_pelamar` varchar(50) NOT NULL,
  `asal_sekolah_kampus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pelamar`
--

INSERT INTO `tbl_pelamar` (`kd_pelamar`, `nama_pelamar`, `no_telfon_pelamar`, `email_pelamar`, `jk_pelamar`, `tgl_lahir_pelamar`, `link_portofolio`, `jabatan_yg_dilamar`, `status_pelamar`, `pendidikan_terakhir`, `cv_pelamar`, `asal_sekolah_kampus`) VALUES
(1, 'miko', 123, 'miko@miko', 'laki-laki', '2021-06-17', 'miko.co.id', 'programer', 'magang', 'd3', 'E4h8BqHXwAgyNEc.jpg', 'sekolah punya miku'),
(6, 'Asep', 123456789, 'asep@mail.com', 'Laki-Laki', '1997-04-20', 'asep.blogspot.com', 'Programmer', 'Magang', 'S1', 'E5pGocGVEAQ333S.jpg', 'UNiversitas Pamulang'),
(7, 'pawpaw', 908, 'papaw@rocketmail.com', 'Laki-Laki', '2021-08-10', 'damedame.co.id', 'manajer', 'Full Time', 'S1', '', 'Hogwarts Univercity');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesanan`
--

CREATE TABLE `tbl_pesanan` (
  `kd_pesanan` int(11) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `no_telfon_pemesan` int(11) NOT NULL,
  `email_pemesan` varchar(50) NOT NULL,
  `detail_pesanan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pesanan`
--

INSERT INTO `tbl_pesanan` (`kd_pesanan`, `nama_pemesan`, `no_telfon_pemesan`, `email_pemesan`, `detail_pesanan`) VALUES
(14, 'Shidqi ', 123456789, 'shidqimaulanasyifa99@gmail.com', 'Pemesanan website\r\n'),
(15, 'Shidqi', 123456789, 'shidqimaulanasyifa99@gmail.com', 'Ingin memesan aplikasi untuk website'),
(17, 'Shidqi', 123456, 'shidqimaulanasyifa99@gmail.com', 'detail pesanan'),
(18, 'Panesa', 123456, 'essa.panesa@gmail.com', 'Pemesanan Web site'),
(19, 'Shidqi Maulana Syifa', 123456789, 'shidqimaulanasyifa99@gmail.com', 'Pemesanan Aplikasi'),
(20, 'soni', 987654321, 'samsoni_smart@yahoo.com', 'Pemesanan Website');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projek`
--

CREATE TABLE `tbl_projek` (
  `kd_projek` int(11) NOT NULL,
  `nm_projek` varchar(100) NOT NULL,
  `nm_pemesan` varchar(50) NOT NULL,
  `email_pemesan` varchar(50) NOT NULL,
  `no_tlp_pemesan` int(20) NOT NULL,
  `jns_aplikasi` varchar(50) NOT NULL,
  `detail_aplikasi` text NOT NULL,
  `nm_kar_penanngung` varchar(50) NOT NULL,
  `nm_karyawan_1` varchar(50) NOT NULL,
  `nm_karyawan_2` varchar(50) NOT NULL,
  `nm_karyawan_3` varchar(50) NOT NULL,
  `nm_karyawan_4` varchar(50) NOT NULL,
  `nm_karyawan_5` varchar(50) NOT NULL,
  `nm_karyawan_6` varchar(50) NOT NULL,
  `status_project` varchar(20) NOT NULL,
  `deadline_project` date NOT NULL,
  `harga_project` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_projek`
--

INSERT INTO `tbl_projek` (`kd_projek`, `nm_projek`, `nm_pemesan`, `email_pemesan`, `no_tlp_pemesan`, `jns_aplikasi`, `detail_aplikasi`, `nm_kar_penanngung`, `nm_karyawan_1`, `nm_karyawan_2`, `nm_karyawan_3`, `nm_karyawan_4`, `nm_karyawan_5`, `nm_karyawan_6`, `status_project`, `deadline_project`, `harga_project`) VALUES
(12, 'pemesanan shidqi', 'Shidqi', 'shidqimaulanasyifa99@gmail.com', 123456789, 'Aplikasi Desktop', 'Pemesanan website\r\n', 'shidqi maulana syifa', 'yuna', 'doni', 'nona kecil', 'sayu', 'nemmynemmy', 'ereh', 'Proses', '2021-08-31', 232134);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `namauser` varchar(50) NOT NULL,
  `password_karyawan` varchar(50) NOT NULL,
  `jenis_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `namauser`, `password_karyawan`, `jenis_user`) VALUES
(1, 'shidqi maulana syifa', 'kmzway87aa', 'Admin'),
(3, 'yuna', 'yunaimut', 'Keuangan'),
(4, 'sodikin', 'sodik', 'Admin Pesan'),
(5, 'nona kecil', 'nonakecil', 'Karyawan'),
(7, 'ereh', 'attacktitan', 'Karyawan'),
(8, 'sayu', 'sayucantik', 'HRD'),
(9, 'doni', 'doni', 'Karyawan'),
(10, 'nori', 'nori', 'Keuangan'),
(11, 'nemmy', 'nemmy', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  ADD PRIMARY KEY (`kd_absensi`);

--
-- Indexes for table `tbl_gaji`
--
ALTER TABLE `tbl_gaji`
  ADD PRIMARY KEY (`kd_gaji`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tbl_pelamar`
--
ALTER TABLE `tbl_pelamar`
  ADD PRIMARY KEY (`kd_pelamar`);

--
-- Indexes for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  ADD PRIMARY KEY (`kd_pesanan`);

--
-- Indexes for table `tbl_projek`
--
ALTER TABLE `tbl_projek`
  ADD PRIMARY KEY (`kd_projek`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  MODIFY `kd_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_gaji`
--
ALTER TABLE `tbl_gaji`
  MODIFY `kd_gaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_pelamar`
--
ALTER TABLE `tbl_pelamar`
  MODIFY `kd_pelamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  MODIFY `kd_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_projek`
--
ALTER TABLE `tbl_projek`
  MODIFY `kd_projek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
