-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2020 at 08:59 AM
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
-- Database: `simple_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_biodata`
--

CREATE TABLE `tb_biodata` (
  `biodata_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `spesialis` varchar(250) NOT NULL,
  `website` varchar(100) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `asal` varchar(250) NOT NULL,
  `umur` int(10) NOT NULL,
  `pekerjaan` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_biodata`
--

INSERT INTO `tb_biodata` (`biodata_id`, `id`, `nama`, `spesialis`, `website`, `telepon`, `asal`, `umur`, `pekerjaan`, `deskripsi`) VALUES
(3, 2, 'Hafiizh Zoelva Khairani', 'Web Developer, Web Designer', 'www.ieabjb.my.id', '082157254820', 'Kota Martapura (Kalimantan Selatan)', 20, 'Mahasiswa', 'Selamat datang di Web Personal saya, di Web ini anda dapat melihat profile, resume, portfolio, dan lain sebagainya tentang saya. Saya hanya seorang Beginner Web Developer yang masih banyak belajar dan juga ikut dalam Organisasi Kemanusiaan yaitu Indonesian Escorting Ambulance.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_portfolio`
--

CREATE TABLE `tb_portfolio` (
  `resume_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `jenis` enum('Certificate','Seminar','Portfolio') NOT NULL,
  `filter` enum('filter-app','filter-card','filter-web') NOT NULL,
  `judul` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_portfolio`
--

INSERT INTO `tb_portfolio` (`resume_id`, `id`, `jenis`, `filter`, `judul`, `link`) VALUES
(18, 2, 'Certificate', 'filter-app', 'PENDIDIKAN DAN PELATIHAN APLIKASI KOMPUTER TINGKAT DASAR DAN MENENGAH', 'https://drscdn.500px.org/photo/1019611875/m=900/v2?sig=c1162d962f602e9f8e21bd74884a46d2fe62ef592332c770158f0764479897ef'),
(19, 2, 'Certificate', 'filter-app', 'SERTIFIKAT PELATIHAN HUAWEI', 'https://drscdn.500px.org/photo/1019612703/m=900/v2?sig=9c84539a16993dafccab076e90b2cf58f4d8eddfa328022e27bfb608e2829086'),
(20, 2, 'Seminar', 'filter-card', 'SEMINAR NGULIK ROBOT DI ERA NEW NORMAL MENUJU RISET MASA DEPAN', 'https://drscdn.500px.org/photo/1019613928/m=900/v2?sig=b12f67d69638237f76eb39105b18753abd21bf26cb85e8cc4136c6f6ceb3ae98'),
(22, 2, 'Portfolio', 'filter-web', 'PROJEK WEBSITE IEA BANJARBARU AWAL', 'https://drscdn.500px.org/photo/1019615086/m=900/v2?sig=26d27e9820349879eb1aaa690619260af661c9a675e7e43df8e5391ed657d2e6'),
(23, 2, 'Portfolio', 'filter-web', 'PROJEK WEBSITE IEA BANJARBARU AWAL', 'https://drscdn.500px.org/photo/1019615088/m=900/v2?sig=3050e5d4bf010041e71d6077983c967ce625404618bbd2f45a7ea855fadcbe56'),
(24, 2, 'Seminar', 'filter-card', 'SEMINAR MEMBANGUN STARTUP DI ERA NEW NORMAL', 'https://drscdn.500px.org/photo/1019614247/m=900/v2?sig=8f90034fe2cf75c051b34d85ec2a95c269089557660ca610d61b985dd07cc7a0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` int(11) NOT NULL DEFAULT 0,
  `updated_at` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'zoelva10', '$2y$10$yc3zdN5YdWz0Rks9xsDuA.5jKD/6YTxE5if0990Oonv1PIMGxLZI2', 'ad2da69cec1274f6cb1ca9e373de545b', 1596289622, 1596604102);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_biodata`
--
ALTER TABLE `tb_biodata`
  ADD PRIMARY KEY (`biodata_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tb_portfolio`
--
ALTER TABLE `tb_portfolio`
  ADD PRIMARY KEY (`resume_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_biodata`
--
ALTER TABLE `tb_biodata`
  MODIFY `biodata_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_portfolio`
--
ALTER TABLE `tb_portfolio`
  MODIFY `resume_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
