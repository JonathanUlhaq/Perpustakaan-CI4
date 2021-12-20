-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 11:23 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` varchar(255) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `id_akun`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `gender`, `nomor_telepon`, `pekerjaan`) VALUES
('ANG1579', 19, 'Mauditya', '', '2021-12-12', 'ACEH SELATAN', 'Laki-Laki', '081213548', 'Pegawai Swasta'),
('ANG3669', 21, 'Dicky', 'TOBA SAMOSIR', '16/12/2021', 'TOBA SAMOSIR', 'Laki-Laki', '0645654654', 'PNS'),
('ANG4625', 20, 'Hemas Woro', 'SRAGEN', '09/12/2021', 'SRAGEN', 'Laki-Laki', '0812665', 'Pegawai Swasta'),
('ANG4847', 16, 'Jovian Nathaniel Ulhaq', 'MAGETAN', '03/12/2021', 'MAGETAN', 'Laki-Laki', '081229990721', 'Mahasiswa'),
('ANG8811', 17, 'Jono Joni', 'PIDIE JAYA', '01/12/2021', 'PIDIE JAYA', 'Wanita', '3123123', 'PNS');

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'site adminstrator'),
(2, 'petugas', 'site adminstrator\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(2, 2),
(2, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 14),
(1, 14),
(2, 15),
(2, 15),
(2, 15);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'jojo@gmail.com', 1, '2021-11-22 07:58:15', 1),
(2, '::1', 'jojo@gmail.com', 1, '2021-11-22 08:03:40', 1),
(3, '::1', 'jojo@gmail.com', 1, '2021-11-22 08:05:08', 1),
(4, '::1', 'jojo@gmail.com', 1, '2021-11-22 08:05:47', 1),
(5, '::1', 'jojo@gmail.com', 1, '2021-11-22 08:13:58', 1),
(6, '::1', 'jojo@gmail.com', 1, '2021-11-22 08:46:22', 1),
(7, '::1', 'jojo@gmail.com', 1, '2021-11-22 08:50:32', 1),
(8, '::1', 'jojos@gmail.com ', NULL, '2021-11-22 21:48:57', 0),
(9, '::1', 'jojos@gmail.com', NULL, '2021-11-22 21:49:13', 0),
(10, '::1', 'jojo@gmail.com', 1, '2021-11-22 21:49:25', 1),
(11, '::1', 'jojo@gmail.com', 1, '2021-11-22 22:10:01', 1),
(12, '::1', 'jamas@gmail.com', 4, '2021-11-22 23:06:16', 1),
(13, '::1', 'jojo@gmail.com', 1, '2021-11-22 23:10:23', 1),
(14, '::1', 'jojo@gmail.com', 1, '2021-11-23 20:44:27', 1),
(15, '::1', 'ulhaq@gmail.com', NULL, '2021-12-01 07:59:02', 0),
(16, '::1', 'vianulhag', NULL, '2021-12-01 07:59:20', 0),
(17, '::1', 'vianulhag', NULL, '2021-12-01 07:59:32', 0),
(18, '::1', 'jojo@gmail.com', 1, '2021-12-01 08:00:49', 1),
(19, '::1', 'petugas@gmail.com', 6, '2021-12-01 08:17:18', 1),
(20, '::1', 'admin@gmail.com', 5, '2021-12-01 08:21:06', 1),
(21, '::1', 'petugas@gmail.com', 6, '2021-12-01 08:26:02', 1),
(22, '::1', 'admin@gmail.com', 5, '2021-12-01 08:27:51', 1),
(23, '::1', 'vianulhag', NULL, '2021-12-16 07:53:29', 0),
(24, '::1', 'fafa@gmail.com', 7, '2021-12-16 07:53:58', 1),
(25, '::1', 'vianulhag', NULL, '2021-12-16 07:59:10', 0),
(26, '::1', 'adminbaru@gmail.com', 8, '2021-12-16 08:00:22', 1),
(27, '::1', 'petugas', NULL, '2021-12-16 08:18:53', 0),
(28, '::1', 'petugaskuh@gmail.com', 9, '2021-12-16 08:19:40', 1),
(29, '::1', 'vianulhag@gmail.com', 10, '2021-12-16 08:21:47', 1),
(30, '::1', 'vianulhag', NULL, '2021-12-16 19:28:26', 0),
(31, '::1', 'vianulhag@gmail.com', NULL, '2021-12-16 19:28:42', 0),
(32, '::1', 'vianulhag', NULL, '2021-12-16 19:28:52', 0),
(33, '::1', 'vianulhag@gmail.com', 10, '2021-12-16 19:29:04', 1),
(34, '::1', 'petugas@gmail.com', 11, '2021-12-16 19:33:27', 1),
(35, '::1', 'vianulhag', NULL, '2021-12-16 20:24:53', 0),
(36, '::1', 'jovian', NULL, '2021-12-16 20:24:59', 0),
(37, '::1', 'vianulhag@gmail.com', 10, '2021-12-16 20:25:13', 1),
(38, '::1', 'fasfa@gmail.com', 12, '2021-12-17 03:45:28', 1),
(39, '::1', 'jovian', NULL, '2021-12-17 03:46:07', 0),
(40, '::1', 'vianulhag', NULL, '2021-12-17 03:46:15', 0),
(41, '::1', 'jovian', NULL, '2021-12-17 03:46:24', 0),
(42, '::1', 'vianulhag@gmail.com', 10, '2021-12-17 03:46:51', 1),
(43, '::1', 'vianulhag@gmail.com', 10, '2021-12-17 04:03:15', 1),
(44, '::1', 'cungik@gmail.com', 13, '2021-12-17 06:07:52', 1),
(45, '::1', 'cungik@gmail.com', 13, '2021-12-17 06:08:18', 1),
(46, '::1', 'cungik@gmail.com', 13, '2021-12-17 06:10:18', 1),
(47, '::1', 'cungik@gmail.com', 13, '2021-12-17 06:11:50', 1),
(48, '::1', 'cungik@gmail.com', 13, '2021-12-17 06:14:49', 1),
(49, '::1', 'cungik@gmail.com', 13, '2021-12-17 06:16:03', 1),
(50, '::1', 'cungik@gmail.com', 13, '2021-12-17 06:17:28', 1),
(51, '::1', 'vianulhag@gmail.com', 10, '2021-12-17 08:40:28', 1),
(52, '::1', 'vianulhag@gmail.com', 10, '2021-12-17 08:40:37', 1),
(53, '::1', 'fasfa@gmail.com', 12, '2021-12-17 08:40:53', 1),
(54, '::1', 'fasfa@gmail.com', 12, '2021-12-17 08:41:07', 1),
(55, '::1', 'fafa', NULL, '2021-12-17 09:05:30', 0),
(56, '::1', 'fafa', NULL, '2021-12-17 09:05:40', 0),
(57, '::1', 'fasfa@gmail.com', 12, '2021-12-17 09:05:47', 1),
(58, '::1', 'fasfa@gmail.com', 12, '2021-12-17 09:14:58', 1),
(59, '::1', 'vianulhag@gmail.com', 10, '2021-12-17 20:20:16', 1),
(60, '::1', 'fasfa@gmail.com', 12, '2021-12-17 20:20:35', 1),
(61, '::1', 'fasfa@gmail.com', 12, '2021-12-17 20:24:38', 1),
(62, '::1', 'vianulhag@gmail.com', 10, '2021-12-18 00:54:00', 1),
(63, '::1', 'fasfa@gmail.com', 12, '2021-12-18 00:58:12', 1),
(64, '::1', 'fasfa@gmail.com', 12, '2021-12-18 09:19:12', 1),
(65, '::1', 'vianulhag@gmail.com', 10, '2021-12-18 22:38:06', 1),
(66, '::1', 'fasfa@gmail.com', 12, '2021-12-18 22:38:36', 1),
(67, '::1', 'fasfa@gmail.com', 12, '2021-12-19 01:56:49', 1),
(68, '::1', 'fasfa@gmail.com', 12, '2021-12-19 06:14:18', 1),
(69, '::1', 'fasfa@gmail.com', 12, '2021-12-19 10:23:45', 1),
(70, '::1', 'vianulhag', NULL, '2021-12-19 10:40:14', 0),
(71, '::1', 'vianulhag@gmail.com', 10, '2021-12-19 10:40:20', 1),
(72, '::1', 'fasfa@gmail.com', 12, '2021-12-19 11:10:53', 1),
(73, '::1', 'vianulhag@gmail.com', 10, '2021-12-19 11:12:02', 1),
(74, '::1', 'admin@gmail.com', 14, '2021-12-19 11:34:28', 1),
(75, '::1', 'admin@gmail.com', 14, '2021-12-19 11:35:11', 1),
(76, '::1', 'admin@gmail.com', 14, '2021-12-19 11:36:52', 1),
(77, '::1', 'admin@gmail.com', 14, '2021-12-19 11:38:02', 1),
(78, '::1', 'admin@gmail.com', 14, '2021-12-19 11:39:15', 1),
(79, '::1', 'admin@gmail.com', 14, '2021-12-19 11:40:33', 1),
(80, '::1', 'admin@gmail.com', 14, '2021-12-19 11:40:40', 1),
(81, '::1', 'admin@gmail.com', 14, '2021-12-19 11:41:36', 1),
(82, '::1', 'petugas@gmail.com', 15, '2021-12-19 11:42:58', 1),
(83, '::1', 'petugas@gmail.com', 15, '2021-12-19 11:43:37', 1),
(84, '::1', 'petugas@gmail.com', 15, '2021-12-19 11:45:19', 1),
(85, '::1', 'petugas@gmail.com', 15, '2021-12-19 11:46:21', 1),
(86, '::1', 'petugas@gmail.com', 15, '2021-12-19 11:47:25', 1),
(87, '::1', 'admin@gmail.com', 14, '2021-12-19 11:47:55', 1),
(88, '::1', 'petugas@gmail.com', 15, '2021-12-19 11:50:13', 1),
(89, '::1', 'petugas@gmail.com', 15, '2021-12-19 11:50:20', 1),
(90, '::1', 'admin@gmail.com', 14, '2021-12-19 12:00:18', 1),
(91, '::1', 'jovian@gmail.com', 16, '2021-12-19 12:07:32', 1),
(92, '::1', 'petugas@gmail.com', 15, '2021-12-19 12:12:10', 1),
(93, '::1', 'jovian@gmail.com', 16, '2021-12-19 20:03:38', 1),
(94, '::1', 'admin@gmail.com', 14, '2021-12-19 20:29:46', 1),
(95, '::1', 'jovian@gmail.com', 16, '2021-12-19 20:56:47', 1),
(96, '::1', 'jono@gmail.com', 17, '2021-12-19 21:07:35', 1),
(97, '::1', 'jini@gmail.com', 18, '2021-12-19 21:11:08', 1),
(98, '::1', 'admin@gmail.com', 14, '2021-12-19 21:13:35', 1),
(99, '::1', 'madun@gmail.com', 19, '2021-12-19 21:14:16', 1),
(100, '::1', 'madun@gmail.com', 19, '2021-12-19 21:21:01', 1),
(101, '::1', 'hemas@gmail.com', 20, '2021-12-19 22:10:54', 1),
(102, '::1', 'hemas@gmail.com', 20, '2021-12-19 22:11:36', 1),
(103, '::1', 'dicky@gmail.com', 21, '2021-12-19 22:20:03', 1),
(104, '::1', 'dicky@gmail.com', 21, '2021-12-19 22:20:32', 1),
(105, '::1', 'admin@gmail.com', 14, '2021-12-20 00:09:55', 1),
(106, '::1', 'admin@gmail.com', 14, '2021-12-20 01:14:04', 1),
(107, '::1', 'admin@gmail.com', 14, '2021-12-20 01:15:43', 1),
(108, '::1', 'jono@gmail.com', 17, '2021-12-20 01:16:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-user', 'Manage All User'),
(2, 'check-books', 'Check Books');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_users_permissions`
--

INSERT INTO `auth_users_permissions` (`user_id`, `permission_id`) VALUES
(14, 1),
(15, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) DEFAULT NULL,
  `prov_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `prov_id`) VALUES
(1, 'PIDIE JAYA', 1),
(2, 'SIMEULUE', 1),
(3, 'BIREUEN', 1),
(4, 'ACEH TIMUR', 1),
(5, 'ACEH UTARA', 1),
(6, 'PIDIE', 1),
(7, 'ACEH BARAT DAYA', 1),
(8, 'GAYO LUES', 1),
(9, 'ACEH SELATAN', 1),
(10, 'ACEH TAMIANG', 1),
(11, 'ACEH BESAR', 1),
(12, 'ACEH TENGGARA', 1),
(13, 'BENER MERIAH', 1),
(14, 'ACEH JAYA', 1),
(15, 'LHOKSEUMAWE', 1),
(16, 'ACEH BARAT', 1),
(17, 'NAGAN RAYA', 1),
(18, 'LANGSA', 1),
(19, 'BANDA ACEH', 1),
(20, 'ACEH SINGKIL', 1),
(21, 'SABANG', 1),
(22, 'ACEH TENGAH', 1),
(23, 'SUBULUSSALAM', 1),
(24, 'NIAS SELATAN', 2),
(25, 'MANDAILING NATAL', 2),
(26, 'DAIRI', 2),
(27, 'LABUHAN BATU UTARA', 2),
(28, 'TAPANULI UTARA', 2),
(29, 'SIMALUNGUN', 2),
(30, 'LANGKAT', 2),
(31, 'SERDANG BEDAGAI', 2),
(32, 'TAPANULI SELATAN', 2),
(33, 'ASAHAN', 2),
(34, 'PADANG LAWAS UTARA', 2),
(35, 'PADANG LAWAS', 2),
(36, 'LABUHAN BATU SELATAN', 2),
(37, 'PADANG SIDEMPUAN', 2),
(38, 'TOBA SAMOSIR', 2),
(39, 'TAPANULI TENGAH', 2),
(40, 'HUMBANG HASUNDUTAN', 2),
(41, 'SIBOLGA', 2),
(42, 'BATU BARA', 2),
(43, 'SAMOSIR', 2),
(44, 'PEMATANG SIANTAR', 2),
(45, 'LABUHAN BATU', 2),
(46, 'DELI SERDANG', 2),
(47, 'GUNUNGSITOLI', 2),
(48, 'NIAS UTARA', 2),
(49, 'NIAS', 2),
(50, 'KARO', 2),
(51, 'NIAS BARAT', 2),
(52, 'MEDAN', 2),
(53, 'PAKPAK BHARAT', 2),
(54, 'TEBING TINGGI', 2),
(55, 'BINJAI', 2),
(56, 'TANJUNG BALAI', 2),
(57, 'DHARMASRAYA', 3),
(58, 'SOLOK SELATAN', 3),
(59, 'SIJUNJUNG (SAWAH LUNTO SIJUNJUNG)', 3),
(60, 'PASAMAN BARAT', 3),
(61, 'SOLOK', 3),
(62, 'PASAMAN', 3),
(63, 'PARIAMAN', 3),
(64, 'TANAH DATAR', 3),
(65, 'PADANG PARIAMAN', 3),
(66, 'PESISIR SELATAN', 3),
(67, 'PADANG', 3),
(68, 'SAWAH LUNTO', 3),
(69, 'LIMA PULUH KOTO / KOTA', 3),
(70, 'AGAM', 3),
(71, 'PAYAKUMBUH', 3),
(72, 'BUKITTINGGI', 3),
(73, 'PADANG PANJANG', 3),
(74, 'KEPULAUAN MENTAWAI', 3),
(75, 'INDRAGIRI HILIR', 4),
(76, 'KUANTAN SINGINGI', 4),
(77, 'PELALAWAN', 4),
(78, 'PEKANBARU', 4),
(79, 'ROKAN HILIR', 4),
(80, 'BENGKALIS', 4),
(81, 'INDRAGIRI HULU', 4),
(82, 'ROKAN HULU', 4),
(83, 'KAMPAR', 4),
(84, 'KEPULAUAN MERANTI', 4),
(85, 'DUMAI', 4),
(86, 'SIAK', 4),
(87, 'TEBO', 5),
(88, 'TANJUNG JABUNG BARAT', 5),
(89, 'MUARO JAMBI', 5),
(90, 'KERINCI', 5),
(91, 'MERANGIN', 5),
(92, 'BUNGO', 5),
(93, 'TANJUNG JABUNG TIMUR', 5),
(94, 'SUNGAIPENUH', 5),
(95, 'BATANG HARI', 5),
(96, 'JAMBI', 5),
(97, 'SAROLANGUN', 5),
(98, 'PALEMBANG', 6),
(99, 'LAHAT', 6),
(100, 'OGAN KOMERING ULU TIMUR', 6),
(101, 'MUSI BANYUASIN', 6),
(102, 'PAGAR ALAM', 6),
(103, 'OGAN KOMERING ULU SELATAN', 6),
(104, 'BANYUASIN', 6),
(105, 'MUSI RAWAS', 6),
(106, 'MUARA ENIM', 6),
(107, 'OGAN KOMERING ULU', 6),
(108, 'OGAN KOMERING ILIR', 6),
(109, 'EMPAT LAWANG', 6),
(110, 'LUBUK LINGGAU', 6),
(111, 'PRABUMULIH', 6),
(112, 'OGAN ILIR', 6),
(113, 'BENGKULU TENGAH', 7),
(114, 'REJANG LEBONG', 7),
(115, 'MUKO MUKO', 7),
(116, 'KAUR', 7),
(117, 'BENGKULU UTARA', 7),
(118, 'LEBONG', 7),
(119, 'KEPAHIANG', 7),
(120, 'BENGKULU SELATAN', 7),
(121, 'SELUMA', 7),
(122, 'BENGKULU', 7),
(123, 'LAMPUNG UTARA', 8),
(124, 'WAY KANAN', 8),
(125, 'LAMPUNG TENGAH', 8),
(126, 'MESUJI', 8),
(127, 'PRINGSEWU', 8),
(128, 'LAMPUNG TIMUR', 8),
(129, 'LAMPUNG SELATAN', 8),
(130, 'TULANG BAWANG', 8),
(131, 'TULANG BAWANG BARAT', 8),
(132, 'TANGGAMUS', 8),
(133, 'LAMPUNG BARAT', 8),
(134, 'PESISIR BARAT', 8),
(135, 'PESAWARAN', 8),
(136, 'BANDAR LAMPUNG', 8),
(137, 'METRO', 8),
(138, 'BELITUNG', 9),
(139, 'BELITUNG TIMUR', 9),
(140, 'BANGKA', 9),
(141, 'BANGKA SELATAN', 9),
(142, 'BANGKA BARAT', 9),
(143, 'PANGKAL PINANG', 9),
(144, 'BANGKA TENGAH', 9),
(145, 'KEPULAUAN ANAMBAS', 10),
(146, 'BINTAN', 10),
(147, 'NATUNA', 10),
(148, 'BATAM', 10),
(149, 'TANJUNG PINANG', 10),
(150, 'KARIMUN', 10),
(151, 'LINGGA', 10),
(152, 'JAKARTA UTARA', 11),
(153, 'JAKARTA BARAT', 11),
(154, 'JAKARTA TIMUR', 11),
(155, 'JAKARTA SELATAN', 11),
(156, 'JAKARTA PUSAT', 11),
(157, 'KEPULAUAN SERIBU', 11),
(158, 'DEPOK', 12),
(159, 'KARAWANG', 12),
(160, 'CIREBON', 12),
(161, 'BANDUNG', 12),
(162, 'SUKABUMI', 12),
(163, 'SUMEDANG', 12),
(164, 'INDRAMAYU', 12),
(165, 'MAJALENGKA', 12),
(166, 'KUNINGAN', 12),
(167, 'TASIKMALAYA', 12),
(168, 'CIAMIS', 12),
(169, 'SUBANG', 12),
(170, 'PURWAKARTA', 12),
(171, 'BOGOR', 12),
(172, 'BEKASI', 12),
(173, 'GARUT', 12),
(174, 'PANGANDARAN', 12),
(175, 'CIANJUR', 12),
(176, 'BANJAR', 12),
(177, 'BANDUNG BARAT', 12),
(178, 'CIMAHI', 12),
(179, 'PURBALINGGA', 13),
(180, 'KEBUMEN', 13),
(181, 'MAGELANG', 13),
(182, 'CILACAP', 13),
(183, 'BATANG', 13),
(184, 'BANJARNEGARA', 13),
(185, 'BLORA', 13),
(186, 'BREBES', 13),
(187, 'BANYUMAS', 13),
(188, 'WONOSOBO', 13),
(189, 'TEGAL', 13),
(190, 'PURWOREJO', 13),
(191, 'PATI', 13),
(192, 'SUKOHARJO', 13),
(193, 'KARANGANYAR', 13),
(194, 'PEKALONGAN', 13),
(195, 'PEMALANG', 13),
(196, 'BOYOLALI', 13),
(197, 'GROBOGAN', 13),
(198, 'SEMARANG', 13),
(199, 'DEMAK', 13),
(200, 'REMBANG', 13),
(201, 'KLATEN', 13),
(202, 'KUDUS', 13),
(203, 'TEMANGGUNG', 13),
(204, 'SRAGEN', 13),
(205, 'JEPARA', 13),
(206, 'WONOGIRI', 13),
(207, 'KENDAL', 13),
(208, 'SURAKARTA (SOLO)', 13),
(209, 'SALATIGA', 13),
(210, 'SLEMAN', 14),
(211, 'BANTUL', 14),
(212, 'YOGYAKARTA', 14),
(213, 'GUNUNG KIDUL', 14),
(214, 'KULON PROGO', 14),
(215, 'GRESIK', 15),
(216, 'KEDIRI', 15),
(217, 'SAMPANG', 15),
(218, 'BANGKALAN', 15),
(219, 'SUMENEP', 15),
(220, 'SITUBONDO', 15),
(221, 'SURABAYA', 15),
(222, 'JEMBER', 15),
(223, 'PAMEKASAN', 15),
(224, 'JOMBANG', 15),
(225, 'PROBOLINGGO', 15),
(226, 'BANYUWANGI', 15),
(227, 'PASURUAN', 15),
(228, 'BOJONEGORO', 15),
(229, 'BONDOWOSO', 15),
(230, 'MAGETAN', 15),
(231, 'LUMAJANG', 15),
(232, 'MALANG', 15),
(233, 'BLITAR', 15),
(234, 'SIDOARJO', 15),
(235, 'LAMONGAN', 15),
(236, 'PACITAN', 15),
(237, 'TULUNGAGUNG', 15),
(238, 'MOJOKERTO', 15),
(239, 'MADIUN', 15),
(240, 'PONOROGO', 15),
(241, 'NGAWI', 15),
(242, 'NGANJUK', 15),
(243, 'TUBAN', 15),
(244, 'TRENGGALEK', 15),
(245, 'BATU', 15),
(246, 'TANGERANG', 16),
(247, 'SERANG', 16),
(248, 'PANDEGLANG', 16),
(249, 'LEBAK', 16),
(250, 'TANGERANG SELATAN', 16),
(251, 'CILEGON', 16),
(252, 'KLUNGKUNG', 17),
(253, 'KARANGASEM', 17),
(254, 'BANGLI', 17),
(255, 'TABANAN', 17),
(256, 'GIANYAR', 17),
(257, 'BADUNG', 17),
(258, 'JEMBRANA', 17),
(259, 'BULELENG', 17),
(260, 'DENPASAR', 17),
(261, 'MATARAM', 18),
(262, 'DOMPU', 18),
(263, 'SUMBAWA BARAT', 18),
(264, 'SUMBAWA', 18),
(265, 'LOMBOK TENGAH', 18),
(266, 'LOMBOK TIMUR', 18),
(267, 'LOMBOK UTARA', 18),
(268, 'LOMBOK BARAT', 18),
(269, 'BIMA', 18),
(270, 'TIMOR TENGAH SELATAN', 19),
(271, 'FLORES TIMUR', 19),
(272, 'ALOR', 19),
(273, 'ENDE', 19),
(274, 'NAGEKEO', 19),
(275, 'KUPANG', 19),
(276, 'SIKKA', 19),
(277, 'NGADA', 19),
(278, 'TIMOR TENGAH UTARA', 19),
(279, 'BELU', 19),
(280, 'LEMBATA', 19),
(281, 'SUMBA BARAT DAYA', 19),
(282, 'SUMBA BARAT', 19),
(283, 'SUMBA TENGAH', 19),
(284, 'SUMBA TIMUR', 19),
(285, 'ROTE NDAO', 19),
(286, 'MANGGARAI TIMUR', 19),
(287, 'MANGGARAI', 19),
(288, 'SABU RAIJUA', 19),
(289, 'MANGGARAI BARAT', 19),
(290, 'LANDAK', 20),
(291, 'KETAPANG', 20),
(292, 'SINTANG', 20),
(293, 'KUBU RAYA', 20),
(294, 'PONTIANAK', 20),
(295, 'KAYONG UTARA', 20),
(296, 'BENGKAYANG', 20),
(297, 'KAPUAS HULU', 20),
(298, 'SAMBAS', 20),
(299, 'SINGKAWANG', 20),
(300, 'SANGGAU', 20),
(301, 'MELAWI', 20),
(302, 'SEKADAU', 20),
(303, 'KOTAWARINGIN TIMUR', 21),
(304, 'SUKAMARA', 21),
(305, 'KOTAWARINGIN BARAT', 21),
(306, 'BARITO TIMUR', 21),
(307, 'KAPUAS', 21),
(308, 'PULANG PISAU', 21),
(309, 'LAMANDAU', 21),
(310, 'SERUYAN', 21),
(311, 'KATINGAN', 21),
(312, 'BARITO SELATAN', 21),
(313, 'MURUNG RAYA', 21),
(314, 'BARITO UTARA', 21),
(315, 'GUNUNG MAS', 21),
(316, 'PALANGKA RAYA', 21),
(317, 'TAPIN', 22),
(318, 'BANJAR', 22),
(319, 'HULU SUNGAI TENGAH', 22),
(320, 'TABALONG', 22),
(321, 'HULU SUNGAI UTARA', 22),
(322, 'BALANGAN', 22),
(323, 'TANAH BUMBU', 22),
(324, 'BANJARMASIN', 22),
(325, 'KOTABARU', 22),
(326, 'TANAH LAUT', 22),
(327, 'HULU SUNGAI SELATAN', 22),
(328, 'BARITO KUALA', 22),
(329, 'BANJARBARU', 22),
(330, 'KUTAI BARAT', 23),
(331, 'SAMARINDA', 23),
(332, 'PASER', 23),
(333, 'KUTAI KARTANEGARA', 23),
(334, 'BERAU', 23),
(335, 'PENAJAM PASER UTARA', 23),
(336, 'BONTANG', 23),
(337, 'KUTAI TIMUR', 23),
(338, 'BALIKPAPAN', 23),
(339, 'MALINAU', 24),
(340, 'NUNUKAN', 24),
(341, 'BULUNGAN (BULONGAN)', 24),
(342, 'TANA TIDUNG', 24),
(343, 'TARAKAN', 24),
(344, 'BOLAANG MONGONDOW (BOLMONG)', 25),
(345, 'BOLAANG MONGONDOW SELATAN', 25),
(346, 'MINAHASA SELATAN', 25),
(347, 'BITUNG', 25),
(348, 'MINAHASA', 25),
(349, 'KEPULAUAN SANGIHE', 25),
(350, 'MINAHASA UTARA', 25),
(351, 'KEPULAUAN TALAUD', 25),
(352, 'KEPULAUAN SIAU TAGULANDANG BIARO (SITARO)', 25),
(353, 'MANADO', 25),
(354, 'BOLAANG MONGONDOW UTARA', 25),
(355, 'BOLAANG MONGONDOW TIMUR', 25),
(356, 'MINAHASA TENGGARA', 25),
(357, 'KOTAMOBAGU', 25),
(358, 'TOMOHON', 25),
(359, 'BANGGAI KEPULAUAN', 26),
(360, 'TOLI-TOLI', 26),
(361, 'PARIGI MOUTONG', 26),
(362, 'BUOL', 26),
(363, 'DONGGALA', 26),
(364, 'POSO', 26),
(365, 'MOROWALI', 26),
(366, 'TOJO UNA-UNA', 26),
(367, 'BANGGAI', 26),
(368, 'SIGI', 26),
(369, 'PALU', 26),
(370, 'MAROS', 27),
(371, 'WAJO', 27),
(372, 'BONE', 27),
(373, 'SOPPENG', 27),
(374, 'SIDENRENG RAPPANG / RAPANG', 27),
(375, 'TAKALAR', 27),
(376, 'BARRU', 27),
(377, 'LUWU TIMUR', 27),
(378, 'SINJAI', 27),
(379, 'PANGKAJENE KEPULAUAN', 27),
(380, 'PINRANG', 27),
(381, 'JENEPONTO', 27),
(382, 'PALOPO', 27),
(383, 'TORAJA UTARA', 27),
(384, 'LUWU', 27),
(385, 'BULUKUMBA', 27),
(386, 'MAKASSAR', 27),
(387, 'SELAYAR (KEPULAUAN SELAYAR)', 27),
(388, 'TANA TORAJA', 27),
(389, 'LUWU UTARA', 27),
(390, 'BANTAENG', 27),
(391, 'GOWA', 27),
(392, 'ENREKANG', 27),
(393, 'PAREPARE', 27),
(394, 'KOLAKA', 28),
(395, 'MUNA', 28),
(396, 'KONAWE SELATAN', 28),
(397, 'KENDARI', 28),
(398, 'KONAWE', 28),
(399, 'KONAWE UTARA', 28),
(400, 'KOLAKA UTARA', 28),
(401, 'BUTON', 28),
(402, 'BOMBANA', 28),
(403, 'WAKATOBI', 28),
(404, 'BAU-BAU', 28),
(405, 'BUTON UTARA', 28),
(406, 'GORONTALO UTARA', 29),
(407, 'BONE BOLANGO', 29),
(408, 'GORONTALO', 29),
(409, 'BOALEMO', 29),
(410, 'POHUWATO', 29),
(411, 'MAJENE', 30),
(412, 'MAMUJU', 30),
(413, 'MAMUJU UTARA', 30),
(414, 'POLEWALI MANDAR', 30),
(415, 'MAMASA', 30),
(416, 'MALUKU TENGGARA BARAT', 31),
(417, 'MALUKU TENGGARA', 31),
(418, 'SERAM BAGIAN BARAT', 31),
(419, 'MALUKU TENGAH', 31),
(420, 'SERAM BAGIAN TIMUR', 31),
(421, 'MALUKU BARAT DAYA', 31),
(422, 'AMBON', 31),
(423, 'BURU', 31),
(424, 'BURU SELATAN', 31),
(425, 'KEPULAUAN ARU', 31),
(426, 'TUAL', 31),
(427, 'HALMAHERA BARAT', 32),
(428, 'TIDORE KEPULAUAN', 32),
(429, 'TERNATE', 32),
(430, 'PULAU MOROTAI', 32),
(431, 'KEPULAUAN SULA', 32),
(432, 'HALMAHERA SELATAN', 32),
(433, 'HALMAHERA TENGAH', 32),
(434, 'HALMAHERA TIMUR', 32),
(435, 'HALMAHERA UTARA', 32),
(436, 'YALIMO', 33),
(437, 'DOGIYAI', 33),
(438, 'ASMAT', 33),
(439, 'JAYAPURA', 33),
(440, 'PANIAI', 33),
(441, 'MAPPI', 33),
(442, 'TOLIKARA', 33),
(443, 'PUNCAK JAYA', 33),
(444, 'PEGUNUNGAN BINTANG', 33),
(445, 'JAYAWIJAYA', 33),
(446, 'LANNY JAYA', 33),
(447, 'NDUGA', 33),
(448, 'BIAK NUMFOR', 33),
(449, 'KEPULAUAN YAPEN (YAPEN WAROPEN)', 33),
(450, 'PUNCAK', 33),
(451, 'INTAN JAYA', 33),
(452, 'WAROPEN', 33),
(453, 'NABIRE', 33),
(454, 'MIMIKA', 33),
(455, 'BOVEN DIGOEL', 33),
(456, 'YAHUKIMO', 33),
(457, 'SARMI', 33),
(458, 'MERAUKE', 33),
(459, 'DEIYAI (DELIYAI)', 33),
(460, 'KEEROM', 33),
(461, 'SUPIORI', 33),
(462, 'MAMBERAMO RAYA', 33),
(463, 'MAMBERAMO TENGAH', 33),
(464, 'RAJA AMPAT', 34),
(465, 'MANOKWARI SELATAN', 34),
(466, 'MANOKWARI', 34),
(467, 'KAIMANA', 34),
(468, 'MAYBRAT', 34),
(469, 'SORONG SELATAN', 34),
(470, 'FAKFAK', 34),
(471, 'PEGUNUNGAN ARFAK', 34),
(472, 'TAMBRAUW', 34),
(473, 'SORONG', 34),
(474, 'TELUK WONDAMA', 34),
(475, 'TELUK BINTUNI', 34);

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `id_buku` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `tahun_terbit` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`id_buku`, `cover`, `judul`, `genre`, `tahun_terbit`, `pengarang`, `status`, `penerbit`, `created_at`, `updated_at`) VALUES
('BK_1696', '1639663882_49a5369106dcedad81ba.jpg', 'Azab Orang Pesugihan Babi Ngepet', 'Non', '2021', 'Ustadzah Ismaturrofiah', 'Ada', 'Tawasaf', 2021, 2021),
('BK_3420', '1639968262_0efa2071af5c5d16221f.jpg', '1001 Doa Anak Terverifikasi dan Unggul', 'Rhn', '2012', 'Ustadzah Ismaturrofiah Uhwan', 'Ada', 'PT Insaf Indonesia', 2021, 2021),
('BK_3660', '1639984892_94df9403ab673e2e789e.jpg', 'CARA MENGHINDARI PIDANA DENGAN KELAKUAN SOPAN', 'Act', '2021', 'Rachel Venya', 'Ada', 'PT Anda Sopan Kami Segan', 2021, 2021),
('BK_6312', '1639984690_f6e332872b2fdc9f1e28.jpg', 'Pesugihan Biar Kaya Mendadak', 'Thril', '2019', 'Raden Roro Hemas Woro', 'Ada', 'PT Azabun Jahilliyah', 2021, 2021),
('BK_6795', '1639967533_680e45ea584f10ab19e6.jpg', '101 Cara Jitu Mahir IT', 'Non', '2020', 'M Azhar McI', 'Ada', 'Kawah Baru Nusantara', 2021, 2021),
('BK_7922', '1639984743_8e2b2aa925bf68b2be3a.jpg', 'Primbon Jawa', 'Thril', '2020', 'Kangmas DIcky Tobing', 'Ada', 'PT Sopan Segan', 2021, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id_genre` varchar(255) NOT NULL,
  `nama_genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id_genre`, `nama_genre`) VALUES
('Act', 'Action'),
('Adv', 'Adventure'),
('Non', 'Non-Fiksi'),
('Rhn', 'Rohani'),
('Roman', 'Romance'),
('Thril', 'Thriller');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1637587856, 1);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` varchar(255) NOT NULL,
  `id_buku` varchar(255) NOT NULL,
  `id_anggota` varchar(255) NOT NULL,
  `jumlah_buku` varchar(255) NOT NULL,
  `tanggal_peminjaman` varchar(255) DEFAULT NULL,
  `tanggal_pengembalian` varchar(255) DEFAULT NULL,
  `setatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_buku`, `id_anggota`, `jumlah_buku`, `tanggal_peminjaman`, `tanggal_pengembalian`, `setatus`) VALUES
('PM_1473', 'BK_1696', 'ANG8811', '1', '20-12-2021', '27-12-2021', 'Sudah Kembali'),
('PM_2715', 'BK_1696', 'ANG4625', '2', '20-12-2021', '27-12-2021', 'Sudah Kembali'),
('PM_294', 'BK_3420', 'ANG8811', '2', '20-12-2021', '27-12-2021', 'Sudah Kembali'),
('PM_2966', 'BK_3420', 'ANG3669', '1', '20-12-2021', '27-12-2021', 'Sudah Kembali'),
('PM_3231', 'BK_6312', 'ANG1579', '3', '19-12-2021', '26-12-2021', 'Sudah Kembali'),
('PM_3254', 'BK_1696', 'ANG4847', '1', '19-12-2021', '26-12-2021', 'Sudah Kembali'),
('PM_4300', 'BK_1696', 'ANG3669', '2', '20-12-2021', '27-12-2021', 'Sudah Kembali'),
('PM_4425', 'BK_6795', 'ANG4847', '1', '19-12-2021', '26-12-2021', 'Sudah Kembali'),
('PM_4524', 'BK_3420', 'ANG1579', '1', '20-12-2021', '27-12-2021', 'Sudah Kembali'),
('PM_4628', 'BK_3420', 'ANG1579', '2', '19-12-2021', '26-12-2021', 'Sudah Kembali'),
('PM_4946', 'BK_3420', 'ANG4625', '2', '20-12-2021', '27-12-2021', 'Sudah Kembali'),
('PM_5482', 'BK_6312', 'ANG8811', '2', '20-12-2021', '27-12-2021', 'Sudah Kembali'),
('PM_5710', 'BK_3420', 'ANG3669', '2', '20-12-2021', '27-12-2021', 'Sudah Kembali'),
('PM_6336', 'BK_6312', 'ANG4847', '1', '19-12-2021', '26-12-2021', 'Sudah Kembali'),
('PM_7468', 'BK_1696', 'ANG4847', '1', '19-12-2021', '26-12-2021', 'Sudah Kembali'),
('PM_8322', 'BK_3420', 'ANG4847', '1', '19-12-2021', '26-12-2021', 'Sudah Kembali'),
('PM_8531', 'BK_3420', 'ANG4847', '2', '19-12-2021', '26-12-2021', 'Sudah Kembali'),
('PM_9650', 'BK_3420', 'ANG4847', '1', '19-12-2021', '26-12-2021', 'Sudah Kembali');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(14, 'admin@gmail.com', 'admin', '$2y$10$mMdCT2AMr5pcP1S8kmlm1.JegiFF/Vs2O0FJw1dbMghhbxMeSPGo6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-19 11:34:24', '2021-12-19 11:34:24', NULL),
(15, 'petugas@gmail.com', 'petugas', '$2y$10$hBDRQ64cZTggBgAph2HlGu9m0wA1iHnqo.Zjw4O6b.9P5H.4sQ/YW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-19 11:42:44', '2021-12-19 11:42:44', NULL),
(16, 'jovian@gmail.com', 'jovian', '$2y$10$JIN5p2Jha1CiswDpPcvQe.grgEQLG49IzJB9D2zSo16iH7YcjAv9y', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-19 12:07:28', '2021-12-19 12:07:28', NULL),
(17, 'jono@gmail.com', 'jono', '$2y$10$PzatnK/OIc/MGWqkS8lkTOdCL3ZWIKgB3CWoJgPfbtwkdsSnyxNWm', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-19 21:07:30', '2021-12-19 21:07:30', NULL),
(18, 'jini@gmail.com', 'jini', '$2y$10$Q5olEw3u/c3FH8yhZiAEo.LxQv7sdy6gX5Xd0hzHgzaYCl00s9JKm', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-19 21:11:01', '2021-12-19 21:11:01', NULL),
(19, 'madun@gmail.com', 'madun', '$2y$10$KV4zok8quz8XbT.x9AOe7..ErXaXo.xChYcjWafXmPfF8w8IWF7Va', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-19 21:14:04', '2021-12-19 21:14:04', NULL),
(20, 'hemas@gmail.com', 'hemas', '$2y$10$MIvCrJ4Qa7trZOAY8xfqEOEp7dstRkWZ.5sCRjSk7JYyWeYJ.eh8.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-19 22:10:28', '2021-12-19 22:10:28', NULL),
(21, 'dicky@gmail.com', 'dicky', '$2y$10$jTg02UVtq0nM24kYmium.O2u4t7Z4LV0a0tJumT6zmr2zkGiPkJBi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-19 22:19:53', '2021-12-19 22:19:53', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`) USING BTREE;

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `genre` (`genre`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=476;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD CONSTRAINT `data_buku_ibfk_1` FOREIGN KEY (`genre`) REFERENCES `genre` (`id_genre`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `data_buku` (`id_buku`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
