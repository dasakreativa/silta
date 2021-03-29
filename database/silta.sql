-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 07:26 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silta`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `remember_token`, `created_at`, `updated_at`, `nip`, `username`, `email`, `email_verified_at`, `password`) VALUES
(1, 'mlL6Wc6ASk7RcRGr64wkekBZRWnq8PMh8uWpp16x1j8FGv21eXEyJQpvN031', '2021-03-26 08:22:19', '2021-03-26 08:22:18', '195902112004128902', 'suryadisyt', 'suryadisuryaningrat@gmail.com', '2021-03-26 08:22:08', '$2y$10$Yt6vsDM6Oq.5Tz6xL2jLZueOu8P1qgdiUBi.odIxph.XK66SYpEta');

-- --------------------------------------------------------

--
-- Table structure for table `biodata_siswa`
--

CREATE TABLE `biodata_siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_depan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_belakang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_absensi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_rumah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desa_kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabupaten_kota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_pos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('l','p') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'l',
  `goldar` enum('a','ab','b','o') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'a',
  `kewarganegaraan` enum('wni','wna') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'wni',
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tinggi_badan` int(10) UNSIGNED NOT NULL,
  `berat_badan` int(10) UNSIGNED NOT NULL,
  `nama_depan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_belakang_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_rumah_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desa_kelurahan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabupaten_kota_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provinsi_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_pos_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_hp_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `goldar_ayah` enum('a','ab','b','o') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'a',
  `kewarganegaraan_ayah` enum('wni','wna') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'wni',
  `tempat_lahir_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir_ayah` date DEFAULT NULL,
  `nama_depan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_belakang_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_rumah_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desa_kelurahan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabupaten_kota_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provinsi_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_pos_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_hp_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `goldar_ibu` enum('a','ab','b','o') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'a',
  `kewarganegaraan_ibu` enum('wni','wna') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'wni',
  `tempat_lahir_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir_ibu` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodata_siswa`
--

INSERT INTO `biodata_siswa` (`id`, `nik`, `nis`, `nisn`, `nama_depan`, `nama_belakang`, `kelas`, `jurusan`, `nomor_absensi`, `alamat_rumah`, `desa_kelurahan`, `kecamatan`, `kabupaten_kota`, `provinsi`, `kode_pos`, `nomor_hp`, `jenis_kelamin`, `goldar`, `kewarganegaraan`, `tempat_lahir`, `tanggal_lahir`, `tinggi_badan`, `berat_badan`, `nama_depan_ayah`, `nama_belakang_ayah`, `alamat_rumah_ayah`, `desa_kelurahan_ayah`, `kecamatan_ayah`, `kabupaten_kota_ayah`, `provinsi_ayah`, `kode_pos_ayah`, `nomor_hp_ayah`, `goldar_ayah`, `kewarganegaraan_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `nama_depan_ibu`, `nama_belakang_ibu`, `alamat_rumah_ibu`, `desa_kelurahan_ibu`, `kecamatan_ibu`, `kabupaten_kota_ibu`, `provinsi_ibu`, `kode_pos_ibu`, `nomor_hp_ibu`, `goldar_ibu`, `kewarganegaraan_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`) VALUES
(1, '3521081902030003', '10104', '00321000912', 'Amir', 'Zuhdi Wibowo', 'XII', 'MIPA 1', '04', 'Jalan Brigjend Katamso, RT 003/02, Nomor 02', 'Munggut', 'Padas', 'Ngawi', 'Jawa Timur', '63281', '081234771365', 'l', 'a', 'wni', 'Klaten', '2003-02-19', 165, 64, 'Dwi', 'Joko Susilo', 'Jalan Brigjend Katamso, RT 003/02, Nomor 02', 'Munggut', 'Padas', 'Ngawi', 'Jawa Timur', '63281', '085706040580', 'o', 'wni', 'Ngawi', '1968-03-13', 'Harni', 'Susanti', 'Jalan Brigjend Katamso, RT 003/02, Nomor 02', 'Munggut', 'Padas', 'Ngawi', 'Jawa Timur', '63281', '08129858818', 'a', 'wni', 'Klaten', '1976-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foto_profil`
--

CREATE TABLE `foto_profil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_upload` datetime NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foto_profil`
--

INSERT INTO `foto_profil` (`id`, `nis`, `tanggal_upload`, `url`) VALUES
(1, '10104', '2021-03-28 06:23:05', 'uploads/img/user_10141.png');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_26_145808_admin', 1),
(5, '2021_03_26_145850_pegawai', 1),
(6, '2021_03_26_145902_guru', 1),
(7, '2021_03_27_212851_create_biodata_siswas_table', 2),
(8, '2021_03_28_061730_create_foto_profils_table', 3),
(9, '2021_03_28_070255_create_verify_users_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `remember_token`, `created_at`, `updated_at`, `nis`, `username`, `email`, `email_verified_at`, `password`) VALUES
(1, '7kScRUaPmkVuVauTqIzsKofT3b2qheQqtrklcMJgwZXSHWc5SzTPGV0a0w7K', '2021-03-26 08:19:58', '2021-03-26 08:20:10', '10104', 'cakadi190', 'officialcakadi@gmail.com', NULL, '$2y$10$Yt6vsDM6Oq.5Tz6xL2jLZueOu8P1qgdiUBi.odIxph.XK66SYpEta');

-- --------------------------------------------------------

--
-- Table structure for table `verify_users`
--

CREATE TABLE `verify_users` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_verifikasi` int(10) DEFAULT NULL,
  `accessed_at` timestamp NULL DEFAULT NULL,
  `verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indexes for table `biodata_siswa`
--
ALTER TABLE `biodata_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis_biodata_user` (`nis`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `foto_profil`
--
ALTER TABLE `foto_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `guru_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pegawai_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `nis` (`nis`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `verify_users`
--
ALTER TABLE `verify_users`
  ADD PRIMARY KEY (`token`),
  ADD UNIQUE KEY `token` (`token`),
  ADD UNIQUE KEY `kode_verifikasi` (`kode_verifikasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `biodata_siswa`
--
ALTER TABLE `biodata_siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foto_profil`
--
ALTER TABLE `foto_profil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biodata_siswa`
--
ALTER TABLE `biodata_siswa`
  ADD CONSTRAINT `nis_biodata_user` FOREIGN KEY (`nis`) REFERENCES `users` (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
