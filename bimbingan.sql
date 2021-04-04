-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2021 at 04:30 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimbingan`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nidn` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `nidn`, `alamat`, `kontak`, `created_at`, `updated_at`) VALUES
(8, 'Bagiya Saefullah', '1425366402', 'Dk. Industri No. 882, Jambi 17868, DKI', '0807 4585 267', '2021-04-01 12:07:55', '2021-04-01 12:07:55'),
(9, 'Ilsa Rachel Farida', '318628204', 'Gg. Eka No. 838, Sungai Penuh 12239, Maluku', '0358 2308 6039', '2021-04-01 12:07:55', '2021-04-01 12:07:55'),
(10, 'Taufik Maheswara', '1325368775', 'Jr. Baranang Siang No. 419, Gorontalo 74787, DIY', '0880 6513 095', '2021-04-01 12:07:55', '2021-04-01 12:07:55'),
(11, 'Laras Puput Pudjiastuti M.Kom.', '655790413', 'Ds. Sukajadi No. 200, Singkawang 94953, SulSel', '0931 5941 0733', '2021-04-01 12:07:55', '2021-04-01 12:07:55'),
(12, 'Zulfa Melani', '352026276', 'Kpg. Bah Jaya No. 508, Banda Aceh 11884, SulUt', '029 6715 493', '2021-04-01 12:07:55', '2021-04-01 12:07:55');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(10) UNSIGNED NOT NULL,
  `mahasiswa_id` int(10) UNSIGNED NOT NULL,
  `dosen_id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `awal` datetime NOT NULL,
  `akhir` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `mahasiswa_id`, `dosen_id`, `judul`, `deskripsi`, `awal`, `akhir`, `created_at`, `updated_at`) VALUES
(1, 14, 10, 'Membangun Platform Machine Learning', 'saya akan membuat skripsi dengan judul tersebut', '2021-04-02 00:00:00', '2021-04-04 00:00:00', '2021-04-02 00:26:07', '2021-04-02 00:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `tanggal_lahir`, `alamat`, `tahun_masuk`, `created_at`, `updated_at`) VALUES
(12, 'Daliman Kariman Rajasa S.T.', '106090175', '1974-08-29', 'Psr. Batako No. 135, Bekasi 98183, Maluku', '1975', '2021-04-01 12:06:09', '2021-04-01 12:06:09'),
(13, 'Azalea Gilda Agustina S.IP', '1636823665', '2015-10-26', 'Ki. Suharso No. 268, Cilegon 64346, SumBar', '1970', '2021-04-01 12:06:09', '2021-04-01 12:06:09'),
(14, 'Emil Wahyudin', '945249715', '2016-08-29', 'Kpg. Agus Salim No. 834, Tanjungbalai 49048, SulTeng', '1989', '2021-04-01 12:06:09', '2021-04-01 12:06:09'),
(15, 'Wani Mulyani', '2076096093', '1986-07-03', 'Psr. Baiduri No. 649, Madiun 30850, Maluku', '2013', '2021-04-01 12:06:09', '2021-04-01 12:06:09'),
(16, 'Faizah Faizah Permata S.Farm', '781312734', '1986-06-11', 'Jr. Astana Anyar No. 583, Blitar 77959, BaBel', '1994', '2021-04-01 12:06:09', '2021-04-01 12:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_03_31_105553_create_mahasiswa', 1),
(2, '2021_04_01_075203_create_dosen_table', 1),
(3, '2021_04_01_075430_create_jadwal_table', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwal_mahasiswa_id_foreign` (`mahasiswa_id`),
  ADD KEY `jadwal_dosen_id_foreign` (`dosen_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_dosen_id_foreign` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `jadwal_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
