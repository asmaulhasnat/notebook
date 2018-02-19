-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 18, 2018 at 11:29 PM
-- Server version: 10.1.24-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webepjfl_diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2017_04_09_094723_ctrate_notebooks_table', 1),
(7, '2017_04_10_161445_create_notes_table', 2),
(8, '2017_04_10_164011_create_notes_table', 3),
(10, '2017_04_10_175604_create_notes_table', 4),
(11, '2017_04_10_175703_create_notes_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notebooks`
--

CREATE TABLE IF NOT EXISTS `notebooks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `notebooks`
--

INSERT INTO `notebooks` (`id`, `user_id`, `name`, `created_at`, `updated_at`) VALUES
(18, 6, 'billing project', '2017-05-29 16:05:47', '2017-05-29 16:05:47'),
(19, 7, 'imam profile', '2017-06-07 12:05:39', '2017-06-07 12:05:56'),
(20, 8, 'rakib', '2017-06-10 10:30:31', '2017-06-10 10:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `notebook_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `notebook_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(21, 18, 'accounting module', 'accounting module has many features', '2017-05-29 16:08:12', '2017-05-29 16:08:12'),
(22, 19, 'imam', 'my name is imam', '2017-06-07 12:06:24', '2017-06-07 12:06:24'),
(23, 20, 'rakib', 'birthdayertyuiop[ sdfghjkl; sadfghjkl; afghjk', '2017-06-10 10:30:56', '2017-06-10 10:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'sweetfarju', 'ahsweet92@gmail.com', '$2y$10$oD93DdeXu.XtlTfzrvJeQOS6Lrl.63VVJSWAeDySkJBTdP6Rjfgai', NULL, '2017-05-29 16:05:04', '2017-05-29 16:05:04'),
(7, 'imam', 'imam@gmail.com', '$2y$10$ly1wvW1Wcq034hgR9TZB5uykmCDDW05Dd4UME6ZJXIbdPq.FVP/mq', NULL, '2017-06-07 12:05:25', '2017-06-07 12:05:25'),
(8, 'sweet', 'sweet1@gmail.com', '$2y$10$HWXmGb2Om/8RTSJGTDH3TuunlW4dDIEXheIHvvFTsvbJVH9Pu0Tea', NULL, '2017-06-10 10:30:15', '2017-06-10 10:30:15');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
