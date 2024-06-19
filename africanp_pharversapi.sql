-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 19, 2024 at 05:53 AM
-- Server version: 5.7.44-cll-lve
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `africanp_pharversapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `batch_uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(1, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-14 11:25:35', '2024-03-14 11:25:35'),
(2, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-14 11:25:50', '2024-03-14 11:25:50'),
(3, 'default', 'User Made an update on the logo and the favicons page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-14 11:26:02', '2024-03-14 11:26:02'),
(4, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-14 11:26:02', '2024-03-14 11:26:02'),
(5, 'default', 'User Made an update on the logo and the favicons page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-14 11:26:20', '2024-03-14 11:26:20'),
(6, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-14 11:26:21', '2024-03-14 11:26:21'),
(7, 'default', 'User Made an update on the logo and the favicons page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-14 11:26:33', '2024-03-14 11:26:33'),
(8, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-14 11:26:34', '2024-03-14 11:26:34'),
(9, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-14 11:27:45', '2024-03-14 11:27:45'),
(10, 'default', 'Evoked an update Settings Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-14 11:28:45', '2024-03-14 11:28:45'),
(11, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-14 11:28:49', '2024-03-14 11:28:49'),
(12, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-14 11:32:31', '2024-03-14 11:32:31'),
(13, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 09:47:17', '2024-03-16 09:47:17'),
(14, 'default', 'Evoked an update Settings Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 09:47:56', '2024-03-16 09:47:56'),
(15, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 09:48:00', '2024-03-16 09:48:00'),
(16, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 09:51:16', '2024-03-16 09:51:16'),
(17, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 09:51:37', '2024-03-16 09:51:37'),
(18, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 09:52:22', '2024-03-16 09:52:22'),
(19, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 09:53:19', '2024-03-16 09:53:19'),
(20, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 09:53:26', '2024-03-16 09:53:26'),
(21, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 09:53:45', '2024-03-16 09:53:45'),
(22, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 09:54:17', '2024-03-16 09:54:17'),
(23, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 09:54:54', '2024-03-16 09:54:54'),
(24, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 09:55:01', '2024-03-16 09:55:01'),
(25, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:03:04', '2024-03-16 10:03:04'),
(26, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:07:52', '2024-03-16 10:07:52'),
(27, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:14:32', '2024-03-16 10:14:32'),
(28, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:14:53', '2024-03-16 10:14:53'),
(29, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:15:12', '2024-03-16 10:15:12'),
(30, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:18:41', '2024-03-16 10:18:41'),
(31, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:19:49', '2024-03-16 10:19:49'),
(32, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:20:57', '2024-03-16 10:20:57'),
(33, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:21:10', '2024-03-16 10:21:10'),
(34, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:21:56', '2024-03-16 10:21:56'),
(35, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:22:39', '2024-03-16 10:22:39'),
(36, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:23:54', '2024-03-16 10:23:54'),
(37, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:24:18', '2024-03-16 10:24:18'),
(38, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:26:14', '2024-03-16 10:26:14'),
(39, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:28:20', '2024-03-16 10:28:20'),
(40, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:32:33', '2024-03-16 10:32:33'),
(41, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:34:40', '2024-03-16 10:34:40'),
(42, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:34:46', '2024-03-16 10:34:46'),
(43, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:34:57', '2024-03-16 10:34:57'),
(44, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:38:20', '2024-03-16 10:38:20'),
(45, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:41:51', '2024-03-16 10:41:51'),
(46, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:42:46', '2024-03-16 10:42:46'),
(47, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:42:54', '2024-03-16 10:42:54'),
(48, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-16 10:46:59', '2024-03-16 10:46:59'),
(49, 'default', 'Accessed All Admins Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 03:56:34', '2024-03-18 03:56:34'),
(50, 'default', 'Edited User ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 03:56:41', '2024-03-18 03:56:41'),
(51, 'default', 'Evoked an edit user for user with ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:01:00', '2024-03-18 04:01:00'),
(52, 'default', 'Edited User ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:01:01', '2024-03-18 04:01:01'),
(53, 'default', 'Access All users Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:03:40', '2024-03-18 04:03:40'),
(54, 'default', 'Edited User ID number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:03:46', '2024-03-18 04:03:46'),
(55, 'default', 'Evoked an edit user for user with ID number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:05:48', '2024-03-18 04:05:48'),
(56, 'default', 'Edited User ID number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:05:49', '2024-03-18 04:05:49'),
(57, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:10:18', '2024-03-18 04:10:18'),
(58, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:10:56', '2024-03-18 04:10:56'),
(59, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:11:02', '2024-03-18 04:11:02'),
(60, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:11:18', '2024-03-18 04:11:18'),
(61, 'default', 'Evoked a delete User Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:15:52', '2024-03-18 04:15:52'),
(62, 'default', 'Accessed the all blogs page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:16:35', '2024-03-18 04:16:35'),
(63, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:16:43', '2024-03-18 04:16:43'),
(64, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:21:55', '2024-03-18 04:21:55'),
(65, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:24:05', '2024-03-18 04:24:05'),
(66, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:24:23', '2024-03-18 04:24:23'),
(67, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:25:53', '2024-03-18 04:25:53'),
(68, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:26:08', '2024-03-18 04:26:08'),
(69, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:27:05', '2024-03-18 04:27:05'),
(70, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:27:27', '2024-03-18 04:27:27'),
(71, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:27:45', '2024-03-18 04:27:45'),
(72, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:28:00', '2024-03-18 04:28:00'),
(73, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:39:04', '2024-03-18 04:39:04'),
(74, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:55:23', '2024-03-18 04:55:23'),
(75, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:57:56', '2024-03-18 04:57:56'),
(76, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:58:38', '2024-03-18 04:58:38'),
(77, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:59:08', '2024-03-18 04:59:08'),
(78, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 04:59:53', '2024-03-18 04:59:53'),
(79, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 05:00:21', '2024-03-18 05:00:21'),
(80, 'default', 'Accessed the all blogs page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 05:00:52', '2024-03-18 05:00:52'),
(81, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 05:19:39', '2024-03-18 05:19:39'),
(82, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 05:22:06', '2024-03-18 05:22:06'),
(83, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 05:37:26', '2024-03-18 05:37:26'),
(84, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 05:39:37', '2024-03-18 05:39:37'),
(85, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 05:40:09', '2024-03-18 05:40:09'),
(86, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 05:41:03', '2024-03-18 05:41:03'),
(87, 'default', 'Evoked add Category Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 06:02:21', '2024-03-18 06:02:21'),
(88, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 06:02:22', '2024-03-18 06:02:22'),
(89, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 06:02:29', '2024-03-18 06:02:29'),
(90, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 06:05:09', '2024-03-18 06:05:09'),
(91, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 06:29:33', '2024-03-18 06:29:33'),
(92, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 06:29:47', '2024-03-18 06:29:47'),
(93, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 06:30:27', '2024-03-18 06:30:27'),
(94, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 06:31:40', '2024-03-18 06:31:40'),
(95, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 06:31:40', '2024-03-18 06:31:40'),
(96, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 06:32:55', '2024-03-18 06:32:55'),
(97, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 06:32:55', '2024-03-18 06:32:55'),
(98, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 06:33:38', '2024-03-18 06:33:38'),
(99, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 06:34:45', '2024-03-18 06:34:45'),
(100, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 06:37:40', '2024-03-18 06:37:40'),
(101, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 06:37:40', '2024-03-18 06:37:40'),
(102, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 06:42:31', '2024-03-18 06:42:31'),
(103, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 06:44:01', '2024-03-18 06:44:01'),
(104, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 06:44:31', '2024-03-18 06:44:31'),
(105, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 06:45:02', '2024-03-18 06:45:02'),
(106, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 10:00:35', '2024-03-18 10:00:35'),
(107, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 10:03:03', '2024-03-18 10:03:03'),
(108, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 10:14:20', '2024-03-18 10:14:20'),
(109, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 10:16:17', '2024-03-18 10:16:17'),
(110, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 10:18:02', '2024-03-18 10:18:02'),
(111, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 10:22:44', '2024-03-18 10:22:44'),
(112, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 10:23:04', '2024-03-18 10:23:04'),
(113, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 10:24:31', '2024-03-18 10:24:31'),
(114, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 10:25:49', '2024-03-18 10:25:49'),
(115, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 10:26:28', '2024-03-18 10:26:28'),
(116, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 10:32:02', '2024-03-18 10:32:02'),
(117, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 10:32:11', '2024-03-18 10:32:11'),
(118, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 10:33:01', '2024-03-18 10:33:01'),
(119, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 10:39:21', '2024-03-18 10:39:21'),
(120, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 10:39:56', '2024-03-18 10:39:56'),
(121, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 10:47:59', '2024-03-18 10:47:59'),
(122, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 10:48:11', '2024-03-18 10:48:11'),
(123, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 10:52:38', '2024-03-18 10:52:38'),
(124, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 10:53:30', '2024-03-18 10:53:30'),
(125, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 11:13:33', '2024-03-18 11:13:33'),
(126, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 11:14:52', '2024-03-18 11:14:52'),
(127, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 11:17:10', '2024-03-18 11:17:10'),
(128, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 11:23:24', '2024-03-18 11:23:24'),
(129, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 11:24:11', '2024-03-18 11:24:11'),
(130, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 11:24:17', '2024-03-18 11:24:17'),
(131, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 11:26:04', '2024-03-18 11:26:04'),
(132, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 11:26:49', '2024-03-18 11:26:49'),
(133, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 11:30:13', '2024-03-18 11:30:13'),
(134, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 11:32:05', '2024-03-18 11:32:05'),
(135, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 11:39:33', '2024-03-18 11:39:33'),
(136, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 11:42:14', '2024-03-18 11:42:14'),
(137, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 11:46:08', '2024-03-18 11:46:08'),
(138, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 11:46:42', '2024-03-18 11:46:42'),
(139, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 11:49:57', '2024-03-18 11:49:57'),
(140, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 11:54:14', '2024-03-18 11:54:14'),
(141, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 12:05:54', '2024-03-18 12:05:54'),
(142, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 12:05:56', '2024-03-18 12:05:56'),
(143, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-18 12:06:25', '2024-03-18 12:06:25'),
(144, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 03:58:44', '2024-03-19 03:58:44'),
(145, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:11:59', '2024-03-19 04:11:59'),
(146, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:13:46', '2024-03-19 04:13:46'),
(147, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:19:53', '2024-03-19 04:19:53'),
(148, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:20:43', '2024-03-19 04:20:43'),
(149, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:20:46', '2024-03-19 04:20:46'),
(150, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:24:47', '2024-03-19 04:24:47'),
(151, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:24:49', '2024-03-19 04:24:49'),
(152, 'default', 'Accessed the all podcasts page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:26:35', '2024-03-19 04:26:35'),
(153, 'default', 'Accessed the all podcasts page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:27:31', '2024-03-19 04:27:31'),
(154, 'default', 'Accessed the all podcasts page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:31:40', '2024-03-19 04:31:40'),
(155, 'default', 'Accessed the all podcasts page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:32:24', '2024-03-19 04:32:24'),
(156, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:32:54', '2024-03-19 04:32:54'),
(157, 'default', 'Accessed Edit Podcast For Podcast ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:33:07', '2024-03-19 04:33:07'),
(158, 'default', 'Accessed Edit Podcast For Podcast ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:34:10', '2024-03-19 04:34:10'),
(159, 'default', 'Accessed Edit Podcast For Podcast ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:36:53', '2024-03-19 04:36:53'),
(160, 'default', 'Accessed Edit Podcast For Podcast ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:37:03', '2024-03-19 04:37:03'),
(161, 'default', 'Accessed Edit Podcast For Podcast ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:37:44', '2024-03-19 04:37:44'),
(162, 'default', 'Accessed Edit Podcast For Podcast ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:38:55', '2024-03-19 04:38:55'),
(163, 'default', 'Accessed Edit Podcast For Podcast ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:39:59', '2024-03-19 04:39:59'),
(164, 'default', 'Accessed Edit Podcast For Podcast ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:41:07', '2024-03-19 04:41:07'),
(165, 'default', 'Accessed Edit Podcast For Podcast ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:41:17', '2024-03-19 04:41:17'),
(166, 'default', 'Accessed Edit Podcast For Podcast ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:45:37', '2024-03-19 04:45:37'),
(167, 'default', 'Accessed Edit Podcast For Podcast ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:46:37', '2024-03-19 04:46:37'),
(168, 'default', 'Accessed Edit Podcast For Podcast ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:53:06', '2024-03-19 04:53:06'),
(169, 'default', 'Accessed Edit Podcast For Podcast ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:54:11', '2024-03-19 04:54:11'),
(170, 'default', 'Accessed Edit Podcast For Podcast ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:55:59', '2024-03-19 04:55:59'),
(171, 'default', 'Accessed Edit Podcast For Podcast ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:57:36', '2024-03-19 04:57:36'),
(172, 'default', 'Evoked an Edit Podcast Operation For Podcast ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:57:44', '2024-03-19 04:57:44'),
(173, 'default', 'Evoked an Edit Podcast Operation For Podcast ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:58:36', '2024-03-19 04:58:36'),
(174, 'default', 'Accessed Edit Podcast For Podcast ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 04:58:37', '2024-03-19 04:58:37'),
(175, 'default', 'Accessed Edit Podcast For Podcast ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:01:28', '2024-03-19 05:01:28'),
(176, 'default', 'Evoked an Edit Podcast Operation For Podcast ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:01:38', '2024-03-19 05:01:38'),
(177, 'default', 'Accessed Edit Podcast For Podcast ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:01:38', '2024-03-19 05:01:38'),
(178, 'default', 'Accessed the all podcasts page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:01:51', '2024-03-19 05:01:51'),
(179, 'default', 'Accessed the all podcasts page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:04:44', '2024-03-19 05:04:44'),
(180, 'default', 'Evoked a delete How it works Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:04:51', '2024-03-19 05:04:51'),
(181, 'default', 'Accessed the all podcasts page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:04:55', '2024-03-19 05:04:55'),
(182, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:07:28', '2024-03-19 05:07:28'),
(183, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:14:25', '2024-03-19 05:14:25'),
(184, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:14:50', '2024-03-19 05:14:50'),
(185, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:15:13', '2024-03-19 05:15:13'),
(186, 'default', 'Evoked an add Blog Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:18:24', '2024-03-19 05:18:24'),
(187, 'default', 'Evoked an add Blog Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:21:33', '2024-03-19 05:21:33'),
(188, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:21:43', '2024-03-19 05:21:43'),
(189, 'default', 'Accessed the all blogs page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:23:38', '2024-03-19 05:23:38'),
(190, 'default', 'Accessed Edit Blog For Blog ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:23:43', '2024-03-19 05:23:43'),
(191, 'default', 'Accessed Edit Blog For Blog ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:24:43', '2024-03-19 05:24:43'),
(192, 'default', 'Accessed Edit Blog For Blog ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:24:54', '2024-03-19 05:24:54'),
(193, 'default', 'Accessed Edit Blog For Blog ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:25:33', '2024-03-19 05:25:33'),
(194, 'default', 'Accessed Edit Blog For Blog ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:30:00', '2024-03-19 05:30:00'),
(195, 'default', 'Evoked an Edit Blog Operation For Blog ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:30:20', '2024-03-19 05:30:20'),
(196, 'default', 'Accessed Edit Blog For Blog ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:30:21', '2024-03-19 05:30:21'),
(197, 'default', 'Evoked an Edit Blog Operation For Blog ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:31:16', '2024-03-19 05:31:16'),
(198, 'default', 'Accessed Edit Blog For Blog ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:31:16', '2024-03-19 05:31:16'),
(199, 'default', 'Evoked an Edit Blog Operation For Blog ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:35:11', '2024-03-19 05:35:11'),
(200, 'default', 'Evoked an Edit Blog Operation For Blog ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:35:37', '2024-03-19 05:35:37'),
(201, 'default', 'Evoked an Edit Blog Operation For Blog ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:35:50', '2024-03-19 05:35:50'),
(202, 'default', 'Accessed Edit Blog For Blog ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:35:51', '2024-03-19 05:35:51'),
(203, 'default', 'Evoked an Edit Blog Operation For Blog ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:36:09', '2024-03-19 05:36:09'),
(204, 'default', 'Accessed Edit Blog For Blog ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:36:13', '2024-03-19 05:36:13'),
(205, 'default', 'Accessed the all blogs page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:38:15', '2024-03-19 05:38:15'),
(206, 'default', 'Accessed the all blogs page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 05:38:43', '2024-03-19 05:38:43'),
(207, 'default', 'Accessed the all blogs page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 06:07:43', '2024-03-19 06:07:43'),
(208, 'default', 'Evoked a delete Blog Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 06:07:49', '2024-03-19 06:07:49'),
(209, 'default', 'Accessed the all blogs page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 06:07:53', '2024-03-19 06:07:53'),
(210, 'default', 'Accessed the all blogs page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 07:35:16', '2024-03-19 07:35:16'),
(211, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 10:51:18', '2024-03-19 10:51:18'),
(212, 'default', 'Accessed Add Video Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 10:55:26', '2024-03-19 10:55:26'),
(213, 'default', 'Accessed Add Video Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 10:56:10', '2024-03-19 10:56:10'),
(214, 'default', 'Accessed Add Video Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 10:56:51', '2024-03-19 10:56:51'),
(215, 'default', 'Accessed the all Videos page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 10:57:48', '2024-03-19 10:57:48'),
(216, 'default', 'Accessed Add Video Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 10:58:45', '2024-03-19 10:58:45'),
(217, 'default', 'Evoked an add Video Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:00:37', '2024-03-19 11:00:37'),
(218, 'default', 'Evoked an add Video Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:00:55', '2024-03-19 11:00:55'),
(219, 'default', 'Evoked an add Video Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:01:45', '2024-03-19 11:01:45'),
(220, 'default', 'Accessed Add Video Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:01:51', '2024-03-19 11:01:51'),
(221, 'default', 'Accessed the all Videos page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:02:42', '2024-03-19 11:02:42'),
(222, 'default', 'Accessed the all Videos page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:03:38', '2024-03-19 11:03:38'),
(223, 'default', 'Accessed the all Videos page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:04:03', '2024-03-19 11:04:03'),
(224, 'default', 'Accessed the all Videos page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:06:00', '2024-03-19 11:06:00'),
(225, 'default', 'Accessed the all Videos page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:06:48', '2024-03-19 11:06:48'),
(226, 'default', 'Accessed the all Videos page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:07:16', '2024-03-19 11:07:16'),
(227, 'default', 'Accessed Edit Video For Video ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:07:43', '2024-03-19 11:07:43'),
(228, 'default', 'Accessed Edit Video For Video ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:08:03', '2024-03-19 11:08:03'),
(229, 'default', 'Accessed Edit Video For Video ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:08:34', '2024-03-19 11:08:34'),
(230, 'default', 'Accessed Edit Video For Video ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:10:22', '2024-03-19 11:10:22'),
(231, 'default', 'Accessed Edit Video For Video ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:12:09', '2024-03-19 11:12:09'),
(232, 'default', 'Accessed Edit Video For Video ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:13:31', '2024-03-19 11:13:31'),
(233, 'default', 'Accessed Edit Video For Video ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:14:09', '2024-03-19 11:14:09'),
(234, 'default', 'Evoked an Edit Video Operation For Video ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:14:23', '2024-03-19 11:14:23'),
(235, 'default', 'Accessed Edit Video For Video ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:14:24', '2024-03-19 11:14:24'),
(236, 'default', 'Accessed Edit Video For Video ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:15:37', '2024-03-19 11:15:37'),
(237, 'default', 'Evoked an Edit Video Operation For Video ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:15:46', '2024-03-19 11:15:46'),
(238, 'default', 'Accessed Edit Video For Video ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:15:49', '2024-03-19 11:15:49'),
(239, 'default', 'Evoked an Edit Video Operation For Video ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:15:56', '2024-03-19 11:15:56'),
(240, 'default', 'Accessed Edit Video For Video ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:15:56', '2024-03-19 11:15:56'),
(241, 'default', 'Accessed the all Videos page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:16:07', '2024-03-19 11:16:07'),
(242, 'default', 'Accessed the all Videos page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:18:41', '2024-03-19 11:18:41'),
(243, 'default', 'Accessed the all Videos page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:19:17', '2024-03-19 11:19:17'),
(244, 'default', 'Accessed Add Video Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:20:16', '2024-03-19 11:20:16'),
(245, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-19 11:35:04', '2024-03-19 11:35:04'),
(246, 'default', 'Accessed Add Advertisement Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 06:58:48', '2024-03-25 06:58:48'),
(247, 'default', 'Accessed Add Advertisement Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 06:59:22', '2024-03-25 06:59:22'),
(248, 'default', 'Accessed Add Advertisement Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 06:59:37', '2024-03-25 06:59:37'),
(249, 'default', 'Accessed Add Advertisement Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 07:00:21', '2024-03-25 07:00:21'),
(250, 'default', 'Accessed Add Advertisement Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 07:01:35', '2024-03-25 07:01:35'),
(251, 'default', 'Accessed Add Advertisement Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 07:03:52', '2024-03-25 07:03:52'),
(252, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 09:31:51', '2024-03-25 09:31:51'),
(253, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 09:32:43', '2024-03-25 09:32:43'),
(254, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 09:35:44', '2024-03-25 09:35:44'),
(255, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 09:36:19', '2024-03-25 09:36:19'),
(256, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 09:36:37', '2024-03-25 09:36:37'),
(257, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 09:37:01', '2024-03-25 09:37:01'),
(258, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 09:40:55', '2024-03-25 09:40:55'),
(259, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 09:54:29', '2024-03-25 09:54:29'),
(260, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 09:54:54', '2024-03-25 09:54:54'),
(261, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:09:37', '2024-03-25 10:09:37'),
(262, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:11:02', '2024-03-25 10:11:02'),
(263, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:11:29', '2024-03-25 10:11:29'),
(264, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:11:55', '2024-03-25 10:11:55'),
(265, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:21:18', '2024-03-25 10:21:18'),
(266, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:21:42', '2024-03-25 10:21:42'),
(267, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:22:01', '2024-03-25 10:22:01'),
(268, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:22:49', '2024-03-25 10:22:49'),
(269, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:24:21', '2024-03-25 10:24:21'),
(270, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:25:59', '2024-03-25 10:25:59'),
(271, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:26:11', '2024-03-25 10:26:11'),
(272, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:27:20', '2024-03-25 10:27:20'),
(273, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:27:42', '2024-03-25 10:27:42'),
(274, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:28:21', '2024-03-25 10:28:21'),
(275, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:33:53', '2024-03-25 10:33:53'),
(276, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:45:25', '2024-03-25 10:45:25'),
(277, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:48:23', '2024-03-25 10:48:23'),
(278, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:49:00', '2024-03-25 10:49:00'),
(279, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:50:12', '2024-03-25 10:50:12'),
(280, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:51:17', '2024-03-25 10:51:17'),
(281, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:52:06', '2024-03-25 10:52:06'),
(282, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:52:59', '2024-03-25 10:52:59'),
(283, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:53:39', '2024-03-25 10:53:39'),
(284, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:55:04', '2024-03-25 10:55:04'),
(285, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:55:44', '2024-03-25 10:55:44'),
(286, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 10:56:01', '2024-03-25 10:56:01'),
(287, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:00:16', '2024-03-25 11:00:16'),
(288, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:08:33', '2024-03-25 11:08:33'),
(289, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:08:52', '2024-03-25 11:08:52'),
(290, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:08:59', '2024-03-25 11:08:59'),
(291, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:09:05', '2024-03-25 11:09:05'),
(292, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:09:09', '2024-03-25 11:09:09'),
(293, 'default', 'Evoked an Edit Advertisement Operation For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:09:26', '2024-03-25 11:09:26'),
(294, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:09:39', '2024-03-25 11:09:39'),
(295, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:11:18', '2024-03-25 11:11:18'),
(296, 'default', 'Evoked an Edit Advertisement Operation For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:11:27', '2024-03-25 11:11:27'),
(297, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:11:30', '2024-03-25 11:11:30'),
(298, 'default', 'Accessed Edit Advertisement For Advertisement ID number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:11:37', '2024-03-25 11:11:37'),
(299, 'default', 'Evoked an Edit Advertisement Operation For Advertisement ID number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:11:46', '2024-03-25 11:11:46'),
(300, 'default', 'Accessed Edit Advertisement For Advertisement ID number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:11:49', '2024-03-25 11:11:49'),
(301, 'default', 'Accessed Edit Advertisement For Advertisement ID number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:11:55', '2024-03-25 11:11:55'),
(302, 'default', 'Evoked an Edit Advertisement Operation For Advertisement ID number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:12:08', '2024-03-25 11:12:08'),
(303, 'default', 'Accessed Edit Advertisement For Advertisement ID number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:12:11', '2024-03-25 11:12:11'),
(304, 'default', 'Accessed Edit Advertisement For Advertisement ID number 4 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:12:16', '2024-03-25 11:12:16'),
(305, 'default', 'Evoked an Edit Advertisement Operation For Advertisement ID number 4 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:12:26', '2024-03-25 11:12:26'),
(306, 'default', 'Accessed Edit Advertisement For Advertisement ID number 4 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:12:29', '2024-03-25 11:12:29'),
(307, 'default', 'Accessed Edit Advertisement For Advertisement ID number 5 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:12:34', '2024-03-25 11:12:34'),
(308, 'default', 'Evoked an Edit Advertisement Operation For Advertisement ID number 5 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:12:46', '2024-03-25 11:12:46'),
(309, 'default', 'Accessed Edit Advertisement For Advertisement ID number 5 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:12:49', '2024-03-25 11:12:49'),
(310, 'default', 'Accessed Edit Advertisement For Advertisement ID number 6 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:12:54', '2024-03-25 11:12:54'),
(311, 'default', 'Evoked an Edit Advertisement Operation For Advertisement ID number 6 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:13:09', '2024-03-25 11:13:09'),
(312, 'default', 'Accessed Edit Advertisement For Advertisement ID number 6 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:13:11', '2024-03-25 11:13:11'),
(313, 'default', 'Accessed Edit Advertisement For Advertisement ID number 5 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:13:19', '2024-03-25 11:13:19'),
(314, 'default', 'Accessed Edit Advertisement For Advertisement ID number 5 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:17:14', '2024-03-25 11:17:14'),
(315, 'default', 'Accessed Edit Advertisement For Advertisement ID number 5 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:18:40', '2024-03-25 11:18:40'),
(316, 'default', 'Accessed Edit Advertisement For Advertisement ID number 5 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:19:04', '2024-03-25 11:19:04'),
(317, 'default', 'Accessed Edit Advertisement For Advertisement ID number 5 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:19:23', '2024-03-25 11:19:23'),
(318, 'default', 'Accessed Edit Advertisement For Advertisement ID number 5 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:20:01', '2024-03-25 11:20:01'),
(319, 'default', 'Accessed Edit Advertisement For Advertisement ID number 5 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:20:57', '2024-03-25 11:20:57');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(320, 'default', 'Accessed Edit Advertisement For Advertisement ID number 5 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:21:57', '2024-03-25 11:21:57'),
(321, 'default', 'Evoked an Edit Advertisement Operation For Advertisement ID number 5 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:23:50', '2024-03-25 11:23:50'),
(322, 'default', 'Accessed Edit Advertisement For Advertisement ID number 5 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:23:50', '2024-03-25 11:23:50'),
(323, 'default', 'Accessed Edit Advertisement For Advertisement ID number 5 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:24:26', '2024-03-25 11:24:26'),
(324, 'default', 'Accessed Edit Advertisement For Advertisement ID number 5 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-25 11:24:36', '2024-03-25 11:24:36'),
(325, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-26 10:32:05', '2024-03-26 10:32:05'),
(326, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-26 10:33:34', '2024-03-26 10:33:34'),
(327, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-26 10:33:51', '2024-03-26 10:33:51'),
(328, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-26 10:34:11', '2024-03-26 10:34:11'),
(329, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-26 10:35:15', '2024-03-26 10:35:15'),
(330, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-26 10:35:30', '2024-03-26 10:35:30'),
(331, 'default', 'Accessed the all blogs page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-26 10:36:10', '2024-03-26 10:36:10'),
(332, 'default', 'Accessed Edit Blog For Blog ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-26 10:36:15', '2024-03-26 10:36:15'),
(333, 'default', 'Evoked an Edit Blog Operation For Blog ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-26 10:51:09', '2024-03-26 10:51:09'),
(334, 'default', 'Accessed Edit Blog For Blog ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-26 10:51:17', '2024-03-26 10:51:17'),
(335, 'default', 'Accessed the all blogs page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-26 10:58:12', '2024-03-26 10:58:12'),
(336, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 05:31:04', '2024-03-27 05:31:04'),
(337, 'default', 'Access Edit Category ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 05:34:01', '2024-03-27 05:34:01'),
(338, 'default', 'Evoked Edit Category For Category ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 05:34:54', '2024-03-27 05:34:54'),
(339, 'default', 'Evoked Edit Category For Category ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 05:36:17', '2024-03-27 05:36:17'),
(340, 'default', 'Evoked Edit Category For Category ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 05:38:14', '2024-03-27 05:38:14'),
(341, 'default', 'Access Edit Category ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 05:38:15', '2024-03-27 05:38:15'),
(342, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 05:48:44', '2024-03-27 05:48:44'),
(343, 'default', 'Evoked add Category Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 05:49:41', '2024-03-27 05:49:41'),
(344, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 05:49:41', '2024-03-27 05:49:41'),
(345, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 05:55:06', '2024-03-27 05:55:06'),
(346, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 05:55:27', '2024-03-27 05:55:27'),
(347, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 05:55:46', '2024-03-27 05:55:46'),
(348, 'default', 'Accessed All Extras', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 05:55:51', '2024-03-27 05:55:51'),
(349, 'default', 'Access Edit Category ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 05:56:22', '2024-03-27 05:56:22'),
(350, 'default', 'Access Edit Category ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 05:56:42', '2024-03-27 05:56:42'),
(351, 'default', 'Access Edit Category ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 05:57:45', '2024-03-27 05:57:45'),
(352, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 05:57:55', '2024-03-27 05:57:55'),
(353, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 05:58:40', '2024-03-27 05:58:40'),
(354, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 05:58:59', '2024-03-27 05:58:59'),
(355, 'default', 'Evoked add Category Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:00:33', '2024-03-27 06:00:33'),
(356, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:00:33', '2024-03-27 06:00:33'),
(357, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:00:39', '2024-03-27 06:00:39'),
(358, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:01:19', '2024-03-27 06:01:19'),
(359, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:02:05', '2024-03-27 06:02:05'),
(360, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:02:24', '2024-03-27 06:02:24'),
(361, 'default', 'Evoked add Category Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:03:00', '2024-03-27 06:03:00'),
(362, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:03:01', '2024-03-27 06:03:01'),
(363, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:03:07', '2024-03-27 06:03:07'),
(364, 'default', 'Access Edit Category ID number 4 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:03:38', '2024-03-27 06:03:38'),
(365, 'default', 'Evoked Edit Category For Category ID number 4 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:04:08', '2024-03-27 06:04:08'),
(366, 'default', 'Access Edit Category ID number 4 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:04:09', '2024-03-27 06:04:09'),
(367, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:04:14', '2024-03-27 06:04:14'),
(368, 'default', 'Access Edit Category ID number 4 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:04:28', '2024-03-27 06:04:28'),
(369, 'default', 'Evoked Edit Category For Category ID number 4 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:05:03', '2024-03-27 06:05:03'),
(370, 'default', 'Access Edit Category ID number 4 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:05:03', '2024-03-27 06:05:03'),
(371, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:05:10', '2024-03-27 06:05:10'),
(372, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:05:37', '2024-03-27 06:05:37'),
(373, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:05:51', '2024-03-27 06:05:51'),
(374, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:05:58', '2024-03-27 06:05:58'),
(375, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:06:32', '2024-03-27 06:06:32'),
(376, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:07:46', '2024-03-27 06:07:46'),
(377, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:08:56', '2024-03-27 06:08:56'),
(378, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:09:19', '2024-03-27 06:09:19'),
(379, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:12:31', '2024-03-27 06:12:31'),
(380, 'default', 'Evoked add Category Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:14:56', '2024-03-27 06:14:56'),
(381, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:15:00', '2024-03-27 06:15:00'),
(382, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:15:50', '2024-03-27 06:15:50'),
(383, 'default', 'Access Edit Category ID number 5 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:15:54', '2024-03-27 06:15:54'),
(384, 'default', 'Evoked Edit Category For Category ID number 5 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:16:06', '2024-03-27 06:16:06'),
(385, 'default', 'Access Edit Category ID number 5 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:16:09', '2024-03-27 06:16:09'),
(386, 'default', 'Access Edit Category ID number 5 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:16:54', '2024-03-27 06:16:54'),
(387, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:17:57', '2024-03-27 06:17:57'),
(388, 'default', 'Evoked add Category Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:18:16', '2024-03-27 06:18:16'),
(389, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:18:20', '2024-03-27 06:18:20'),
(390, 'default', 'Evoked add Category Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:19:15', '2024-03-27 06:19:15'),
(391, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:19:17', '2024-03-27 06:19:17'),
(392, 'default', 'Evoked add Category Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:22:25', '2024-03-27 06:22:25'),
(393, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:22:28', '2024-03-27 06:22:28'),
(394, 'default', 'Evoked add Category Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:24:10', '2024-03-27 06:24:10'),
(395, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:24:13', '2024-03-27 06:24:13'),
(396, 'default', 'Evoked add Category Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:24:56', '2024-03-27 06:24:56'),
(397, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:24:59', '2024-03-27 06:24:59'),
(398, 'default', 'Evoked add Category Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:26:52', '2024-03-27 06:26:52'),
(399, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:26:54', '2024-03-27 06:26:54'),
(400, 'default', 'Evoked add Category Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:28:46', '2024-03-27 06:28:46'),
(401, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:28:49', '2024-03-27 06:28:49'),
(402, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:39:55', '2024-03-27 06:39:55'),
(403, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:40:27', '2024-03-27 06:40:27'),
(404, 'default', 'Evoked add Category Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:42:14', '2024-03-27 06:42:14'),
(405, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:42:16', '2024-03-27 06:42:16'),
(406, 'default', 'Evoked add Category Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:43:05', '2024-03-27 06:43:05'),
(407, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:43:08', '2024-03-27 06:43:08'),
(408, 'default', 'Evoked add Category Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:43:52', '2024-03-27 06:43:52'),
(409, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:43:55', '2024-03-27 06:43:55'),
(410, 'default', 'Evoked add Category Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:45:58', '2024-03-27 06:45:58'),
(411, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:46:28', '2024-03-27 06:46:28'),
(412, 'default', 'Evoked add Category Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:47:20', '2024-03-27 06:47:20'),
(413, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:47:24', '2024-03-27 06:47:24'),
(414, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:47:30', '2024-03-27 06:47:30'),
(415, 'default', 'Evoked a delete Categorgy Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:47:37', '2024-03-27 06:47:37'),
(416, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:47:42', '2024-03-27 06:47:42'),
(417, 'default', 'Evoked a delete Categorgy Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:47:47', '2024-03-27 06:47:47'),
(418, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:47:51', '2024-03-27 06:47:51'),
(419, 'default', 'Evoked a delete Categorgy Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:47:51', '2024-03-27 06:47:51'),
(420, 'default', 'Evoked a delete Categorgy Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:47:59', '2024-03-27 06:47:59'),
(421, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:48:03', '2024-03-27 06:48:03'),
(422, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 06:49:34', '2024-03-27 06:49:34'),
(423, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 07:39:12', '2024-03-27 07:39:12'),
(424, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 07:39:21', '2024-03-27 07:39:21'),
(425, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 07:39:35', '2024-03-27 07:39:35'),
(426, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 07:39:43', '2024-03-27 07:39:43'),
(427, 'default', 'Accessed the all podcasts page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 07:40:44', '2024-03-27 07:40:44'),
(428, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 07:40:48', '2024-03-27 07:40:48'),
(429, 'default', 'Accessed the all podcasts page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 07:46:41', '2024-03-27 07:46:41'),
(430, 'default', 'Accessed Add Video Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 07:46:55', '2024-03-27 07:46:55'),
(431, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 07:47:08', '2024-03-27 07:47:08'),
(432, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 07:50:55', '2024-03-27 07:50:55'),
(433, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 08:03:06', '2024-03-27 08:03:06'),
(434, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 08:04:02', '2024-03-27 08:04:02'),
(435, 'default', 'Accessed The Lipa na M-PESA Online Table ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 08:05:45', '2024-03-27 08:05:45'),
(436, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 08:06:41', '2024-03-27 08:06:41'),
(437, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 08:07:03', '2024-03-27 08:07:03'),
(438, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 08:15:51', '2024-03-27 08:15:51'),
(439, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 09:02:28', '2024-03-27 09:02:28'),
(440, 'default', 'Accessed the all blogs page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 09:08:15', '2024-03-27 09:08:15'),
(441, 'default', 'Accessed Edit Blog For Blog ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 09:08:19', '2024-03-27 09:08:19'),
(442, 'default', 'Evoked an Edit Blog Operation For Blog ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 09:08:36', '2024-03-27 09:08:36'),
(443, 'default', 'Accessed Edit Blog For Blog ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 09:08:36', '2024-03-27 09:08:36'),
(444, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 09:10:53', '2024-03-27 09:10:53'),
(445, 'default', 'Evoked an add Blog Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 09:16:06', '2024-03-27 09:16:06'),
(446, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-03-27 09:16:15', '2024-03-27 09:16:15'),
(447, 'default', 'Accessed the all blogs page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-04-09 06:29:59', '2024-04-09 06:29:59'),
(448, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-05-16 08:51:04', '2024-05-16 08:51:04'),
(449, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-05-28 12:43:32', '2024-05-28 12:43:32'),
(450, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-05-28 12:43:54', '2024-05-28 12:43:54'),
(451, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-05-28 12:44:48', '2024-05-28 12:44:48'),
(452, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-05-28 12:46:08', '2024-05-28 12:46:08'),
(453, 'default', 'User id {{Auth::User()->id}} Accessed Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 05:40:57', '2024-06-03 05:40:57'),
(454, 'default', 'User id {{Auth::User()->id}} Accessed Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 05:41:19', '2024-06-03 05:41:19'),
(455, 'default', 'User id {{Auth::User()->id}} Accessed Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 05:41:34', '2024-06-03 05:41:34'),
(456, 'default', 'User id {{Auth::User()->id}} Accessed Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 05:41:43', '2024-06-03 05:41:43'),
(457, 'default', 'User id {{Auth::User()->id}} Accessed Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 05:41:57', '2024-06-03 05:41:57'),
(458, 'default', 'User id {{Auth::User()->id}} Accessed Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 05:42:24', '2024-06-03 05:42:24'),
(459, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 05:44:28', '2024-06-03 05:44:28'),
(460, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 05:45:27', '2024-06-03 05:45:27'),
(461, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 05:49:00', '2024-06-03 05:49:00'),
(462, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 05:50:30', '2024-06-03 05:50:30'),
(463, 'default', 'Evoked an add Blog Operation', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 05:51:16', '2024-06-03 05:51:16'),
(464, 'default', 'Evoked an add Blog Operation', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 05:51:53', '2024-06-03 05:51:53'),
(465, 'default', 'Evoked an add Blog Operation', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 05:52:41', '2024-06-03 05:52:41'),
(466, 'default', 'Evoked an add Blog Operation', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 05:55:27', '2024-06-03 05:55:27'),
(467, 'default', 'Evoked an add Blog Operation', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 05:56:19', '2024-06-03 05:56:19'),
(468, 'default', 'Evoked an add Blog Operation', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 05:56:59', '2024-06-03 05:56:59'),
(469, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 05:57:02', '2024-06-03 05:57:02'),
(470, 'default', 'User id {{Auth::User()->id}} Accessed Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 05:57:09', '2024-06-03 05:57:09'),
(471, 'default', 'User id {{Auth::User()->id}} Accessed Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 05:57:55', '2024-06-03 05:57:55'),
(472, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 05:57:58', '2024-06-03 05:57:58'),
(473, 'default', 'Evoked an add Blog Operation', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 05:58:44', '2024-06-03 05:58:44'),
(474, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 05:58:48', '2024-06-03 05:58:48'),
(475, 'default', 'User id {{Auth::User()->id}} Accessed Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 05:58:56', '2024-06-03 05:58:56'),
(476, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:04:09', '2024-06-03 06:04:09'),
(477, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:05:16', '2024-06-03 06:05:16'),
(478, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:05:48', '2024-06-03 06:05:48'),
(479, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:06:29', '2024-06-03 06:06:29'),
(480, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:06:42', '2024-06-03 06:06:42'),
(481, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:08:43', '2024-06-03 06:08:43'),
(482, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:09:21', '2024-06-03 06:09:21'),
(483, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:10:34', '2024-06-03 06:10:34'),
(484, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:11:11', '2024-06-03 06:11:11'),
(485, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:11:37', '2024-06-03 06:11:37'),
(486, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:12:05', '2024-06-03 06:12:05'),
(487, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:12:26', '2024-06-03 06:12:26'),
(488, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:14:31', '2024-06-03 06:14:31'),
(489, 'default', 'User id {{Auth::User()->id}} Accessed Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:19:06', '2024-06-03 06:19:06'),
(490, 'default', 'User id {{Auth::User()->id}} Accessed Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:19:28', '2024-06-03 06:19:28'),
(491, 'default', 'User id {{Auth::User()->id}} Accessed Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:20:00', '2024-06-03 06:20:00'),
(492, 'default', 'User id {{Auth::User()->id}} Accessed Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:20:53', '2024-06-03 06:20:53'),
(493, 'default', 'User id {{Auth::User()->id}} Accessed Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:21:30', '2024-06-03 06:21:30'),
(494, 'default', 'User id {{Auth::User()->id}} Accessed Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:23:55', '2024-06-03 06:23:55'),
(495, 'default', 'User id {{Auth::User()->id}} Accessed Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:25:20', '2024-06-03 06:25:20'),
(496, 'default', 'User id {{Auth::User()->id}} Accessed Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:25:38', '2024-06-03 06:25:38'),
(497, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:25:43', '2024-06-03 06:25:43'),
(498, 'default', 'User id {{Auth::User()->id}} Accessed Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:25:50', '2024-06-03 06:25:50'),
(499, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:25:55', '2024-06-03 06:25:55'),
(500, 'default', 'Evoked an Edit Blog Operation For Blog ID number 6 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:26:29', '2024-06-03 06:26:29'),
(501, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:26:29', '2024-06-03 06:26:29'),
(502, 'default', 'Evoked an Edit Blog Operation For Blog ID number 6 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:26:52', '2024-06-03 06:26:52'),
(503, 'default', 'User id {{Auth::User()->id}} Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:26:55', '2024-06-03 06:26:55'),
(504, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:28:58', '2024-06-03 06:28:58'),
(505, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:30:32', '2024-06-03 06:30:32'),
(506, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:32:18', '2024-06-03 06:32:18'),
(507, 'default', 'Accessed the all podcasts page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:33:21', '2024-06-03 06:33:21'),
(508, 'default', 'Accessed the all podcasts page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:33:56', '2024-06-03 06:33:56'),
(509, 'default', 'Accessed the all podcasts page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:35:08', '2024-06-03 06:35:08'),
(510, 'default', 'Accessed the all podcasts page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:36:10', '2024-06-03 06:36:10'),
(511, 'default', 'Accessed the all podcasts page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:37:33', '2024-06-03 06:37:33'),
(512, 'default', 'Accessed the all podcasts page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:37:50', '2024-06-03 06:37:50'),
(513, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:38:00', '2024-06-03 06:38:00'),
(514, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:44:00', '2024-06-03 06:44:00'),
(515, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:44:47', '2024-06-03 06:44:47'),
(516, 'default', 'Evoked an add Podcast Operation', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:46:09', '2024-06-03 06:46:09'),
(517, 'default', 'Accessed Add Podcast Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:46:12', '2024-06-03 06:46:12'),
(518, 'default', 'Accessed the all podcasts page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:46:40', '2024-06-03 06:46:40'),
(519, 'default', 'Accessed the all Videos page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:53:16', '2024-06-03 06:53:16'),
(520, 'default', 'Accessed the all Videos page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:53:52', '2024-06-03 06:53:52'),
(521, 'default', 'Accessed the all Videos page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:54:08', '2024-06-03 06:54:08'),
(522, 'default', 'Accessed the all Videos page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:54:18', '2024-06-03 06:54:18'),
(523, 'default', 'Accessed the all Videos page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:57:11', '2024-06-03 06:57:11'),
(524, 'default', 'Accessed the all Videos page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 06:59:35', '2024-06-03 06:59:35'),
(525, 'default', 'Accessed the all Videos page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:00:19', '2024-06-03 07:00:19'),
(526, 'default', 'Accessed the all Videos page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:00:46', '2024-06-03 07:00:46'),
(527, 'default', 'Accessed Add Video Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:01:22', '2024-06-03 07:01:22'),
(528, 'default', 'Accessed Add Video Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:01:45', '2024-06-03 07:01:45'),
(529, 'default', 'Accessed Add Video Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:02:51', '2024-06-03 07:02:51'),
(530, 'default', 'Accessed Add Video Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:03:12', '2024-06-03 07:03:12'),
(531, 'default', 'Accessed Add Video Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:04:35', '2024-06-03 07:04:35'),
(532, 'default', 'Evoked an add Video Operation', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:05:54', '2024-06-03 07:05:54'),
(533, 'default', 'Accessed Add Video Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:06:52', '2024-06-03 07:06:52'),
(534, 'default', 'Evoked an add Video Operation', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:07:39', '2024-06-03 07:07:39'),
(535, 'default', 'Accessed Add Video Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:07:42', '2024-06-03 07:07:42'),
(536, 'default', 'Accessed the all Videos page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:07:50', '2024-06-03 07:07:50'),
(537, 'default', 'Accessed the all Videos page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:08:38', '2024-06-03 07:08:38'),
(538, 'default', 'Accessed Edit Video For Video ID number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:09:18', '2024-06-03 07:09:18'),
(539, 'default', 'Accessed Edit Video For Video ID number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:10:41', '2024-06-03 07:10:41'),
(540, 'default', 'Evoked an Edit Video Operation For Video ID number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:11:29', '2024-06-03 07:11:29'),
(541, 'default', 'Accessed Edit Video For Video ID number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:11:29', '2024-06-03 07:11:29'),
(542, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:15:12', '2024-06-03 07:15:12'),
(543, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:16:37', '2024-06-03 07:16:37'),
(544, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:17:44', '2024-06-03 07:17:44'),
(545, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:19:43', '2024-06-03 07:19:43'),
(546, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:23:00', '2024-06-03 07:23:00'),
(547, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:23:13', '2024-06-03 07:23:13'),
(548, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:23:40', '2024-06-03 07:23:40'),
(549, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:29:37', '2024-06-03 07:29:37'),
(550, 'default', 'Evoked an update Settings Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:29:46', '2024-06-03 07:29:46'),
(551, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:29:50', '2024-06-03 07:29:50'),
(552, 'default', 'Evoked an update Settings Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:30:35', '2024-06-03 07:30:35'),
(553, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:30:38', '2024-06-03 07:30:38'),
(554, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:30:59', '2024-06-03 07:30:59'),
(555, 'default', 'Evoked an update Settings Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:31:19', '2024-06-03 07:31:19'),
(556, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:31:23', '2024-06-03 07:31:23'),
(557, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:31:37', '2024-06-03 07:31:37'),
(558, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 07:31:53', '2024-06-03 07:31:53'),
(559, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:03:12', '2024-06-03 09:03:12'),
(560, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:05:29', '2024-06-03 09:05:29'),
(561, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:05:58', '2024-06-03 09:05:58'),
(562, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:12:09', '2024-06-03 09:12:09'),
(563, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:13:08', '2024-06-03 09:13:08'),
(564, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:13:58', '2024-06-03 09:13:58'),
(565, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:14:46', '2024-06-03 09:14:46'),
(566, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:15:59', '2024-06-03 09:15:59'),
(567, 'default', 'User Made an update on the logo and the favicons page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:16:13', '2024-06-03 09:16:13'),
(568, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:16:14', '2024-06-03 09:16:14'),
(569, 'default', 'User Made an update on the logo and the favicons page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:16:30', '2024-06-03 09:16:30'),
(570, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:16:30', '2024-06-03 09:16:30'),
(571, 'default', 'User Made an update on the logo and the favicons page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:16:38', '2024-06-03 09:16:38'),
(572, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:16:38', '2024-06-03 09:16:38'),
(573, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:21:15', '2024-06-03 09:21:15'),
(574, 'default', 'User Made an update on the logo and the favicons page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:21:37', '2024-06-03 09:21:37'),
(575, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:21:37', '2024-06-03 09:21:37'),
(576, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:21:58', '2024-06-03 09:21:58'),
(577, 'default', 'User Made an update on the logo and the favicons page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:22:17', '2024-06-03 09:22:17'),
(578, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:22:17', '2024-06-03 09:22:17'),
(579, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:22:51', '2024-06-03 09:22:51'),
(580, 'default', 'User Made an update on the logo and the favicons page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:23:02', '2024-06-03 09:23:02'),
(581, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:23:03', '2024-06-03 09:23:03'),
(582, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:23:53', '2024-06-03 09:23:53'),
(583, 'default', 'User Made an update on the logo and the favicons page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:24:04', '2024-06-03 09:24:04'),
(584, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:24:05', '2024-06-03 09:24:05'),
(585, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-03 09:24:12', '2024-06-03 09:24:12'),
(586, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-04 01:21:16', '2024-06-04 01:21:16'),
(587, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-04 08:12:25', '2024-06-04 08:12:25'),
(588, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-04 08:13:34', '2024-06-04 08:13:34'),
(589, 'default', 'Evoked an add Blog Operation', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-04 08:15:11', '2024-06-04 08:15:11'),
(590, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-04 08:15:18', '2024-06-04 08:15:18'),
(591, 'default', 'Evoked an add Blog Operation', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-04 08:16:48', '2024-06-04 08:16:48'),
(592, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-04 08:16:50', '2024-06-04 08:16:50'),
(593, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-04 09:24:29', '2024-06-04 09:24:29'),
(594, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-04 09:25:12', '2024-06-04 09:25:12'),
(595, 'default', 'Evoked an add Blog Operation', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-04 09:26:40', '2024-06-04 09:26:40'),
(596, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-04 09:26:43', '2024-06-04 09:26:43'),
(597, 'default', 'Evoked an add Blog Operation', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-04 09:28:42', '2024-06-04 09:28:42'),
(598, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-04 09:28:44', '2024-06-04 09:28:44'),
(599, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-06 00:13:06', '2024-06-06 00:13:06'),
(600, 'default', 'Accessed Edit Advertisement For Advertisement ID number 6 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-06 00:21:56', '2024-06-06 00:21:56'),
(601, 'default', 'Evoked an Edit Advertisement Operation For Advertisement ID number 6 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-06 00:23:58', '2024-06-06 00:23:58'),
(602, 'default', 'Accessed Edit Advertisement For Advertisement ID number 6 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-06 00:24:07', '2024-06-06 00:24:07'),
(603, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-06 04:16:17', '2024-06-06 04:16:17'),
(604, 'default', 'Accessed Edit Advertisement For Advertisement ID number 10 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-06 04:16:24', '2024-06-06 04:16:24'),
(605, 'default', 'Evoked an Edit Advertisement Operation For Advertisement ID number 10 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-06 04:17:35', '2024-06-06 04:17:35'),
(606, 'default', 'Accessed Edit Advertisement For Advertisement ID number 10 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-06 04:17:43', '2024-06-06 04:17:43'),
(607, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-06 04:17:55', '2024-06-06 04:17:55'),
(608, 'default', 'Accessed Edit Advertisement For Advertisement ID number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-06 04:18:08', '2024-06-06 04:18:08'),
(609, 'default', 'Evoked an Edit Advertisement Operation For Advertisement ID number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-06 04:19:00', '2024-06-06 04:19:00'),
(610, 'default', 'Accessed Edit Advertisement For Advertisement ID number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-06 04:19:03', '2024-06-06 04:19:03'),
(611, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-06 04:19:08', '2024-06-06 04:19:08'),
(612, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-06 04:29:01', '2024-06-06 04:29:01'),
(613, 'default', 'Accessed Edit Advertisement For Advertisement ID number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-06 04:39:55', '2024-06-06 04:39:55'),
(614, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-06 05:35:16', '2024-06-06 05:35:16'),
(615, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 03:48:04', '2024-06-07 03:48:04'),
(616, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 03:54:29', '2024-06-07 03:54:29'),
(617, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 03:57:24', '2024-06-07 03:57:24'),
(618, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 03:58:05', '2024-06-07 03:58:05'),
(619, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 04:01:34', '2024-06-07 04:01:34'),
(620, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 04:03:59', '2024-06-07 04:03:59'),
(621, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 04:06:05', '2024-06-07 04:06:05'),
(622, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 04:13:11', '2024-06-07 04:13:11'),
(623, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 04:13:47', '2024-06-07 04:13:47'),
(624, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 04:14:09', '2024-06-07 04:14:09'),
(625, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 04:19:47', '2024-06-07 04:19:47'),
(626, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 04:20:05', '2024-06-07 04:20:05'),
(627, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 04:20:16', '2024-06-07 04:20:16'),
(628, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 04:21:11', '2024-06-07 04:21:11'),
(629, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 04:21:31', '2024-06-07 04:21:31'),
(630, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 04:22:21', '2024-06-07 04:22:21'),
(631, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 04:23:09', '2024-06-07 04:23:09'),
(632, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 04:27:36', '2024-06-07 04:27:36'),
(633, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 05:19:16', '2024-06-07 05:19:16'),
(634, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 05:20:21', '2024-06-07 05:20:21'),
(635, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 05:24:17', '2024-06-07 05:24:17'),
(636, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 05:28:22', '2024-06-07 05:28:22'),
(637, 'default', 'Evoked an add Blog Operation', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 05:33:23', '2024-06-07 05:33:23'),
(638, 'default', 'Evoked an add Blog Operation', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 05:34:05', '2024-06-07 05:34:05'),
(639, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 05:34:08', '2024-06-07 05:34:08'),
(640, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 05:47:47', '2024-06-07 05:47:47'),
(641, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 06:06:55', '2024-06-07 06:06:55');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(642, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 06:39:36', '2024-06-07 06:39:36'),
(643, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 06:40:41', '2024-06-07 06:40:41'),
(644, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 06:44:56', '2024-06-07 06:44:56'),
(645, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 06:45:30', '2024-06-07 06:45:30'),
(646, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 06:50:45', '2024-06-07 06:50:45'),
(647, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 06:51:38', '2024-06-07 06:51:38'),
(648, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:00:02', '2024-06-07 07:00:02'),
(649, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:00:16', '2024-06-07 07:00:16'),
(650, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:00:51', '2024-06-07 07:00:51'),
(651, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:11:08', '2024-06-07 07:11:08'),
(652, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:13:10', '2024-06-07 07:13:10'),
(653, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:22:23', '2024-06-07 07:22:23'),
(654, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:22:57', '2024-06-07 07:22:57'),
(655, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:24:00', '2024-06-07 07:24:00'),
(656, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:26:54', '2024-06-07 07:26:54'),
(657, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:28:03', '2024-06-07 07:28:03'),
(658, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:35:18', '2024-06-07 07:35:18'),
(659, 'default', 'Evoked a Switch Ads Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:37:57', '2024-06-07 07:37:57'),
(660, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:38:20', '2024-06-07 07:38:20'),
(661, 'default', 'Evoked a Switch Ads Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:38:28', '2024-06-07 07:38:28'),
(662, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:38:52', '2024-06-07 07:38:52'),
(663, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:41:21', '2024-06-07 07:41:21'),
(664, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:42:14', '2024-06-07 07:42:14'),
(665, 'default', 'Evoked a Switch Ads Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:42:22', '2024-06-07 07:42:22'),
(666, 'default', 'Evoked a Switch Ads Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:42:29', '2024-06-07 07:42:29'),
(667, 'default', 'Evoked a Switch Ads Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:44:48', '2024-06-07 07:44:48'),
(668, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:46:50', '2024-06-07 07:46:50'),
(669, 'default', 'Evoked a Switch Ads Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:46:56', '2024-06-07 07:46:56'),
(670, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:47:02', '2024-06-07 07:47:02'),
(671, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:47:36', '2024-06-07 07:47:36'),
(672, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:48:10', '2024-06-07 07:48:10'),
(673, 'default', 'Evoked a Switch Ads Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:48:19', '2024-06-07 07:48:19'),
(674, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:48:24', '2024-06-07 07:48:24'),
(675, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:51:21', '2024-06-07 07:51:21'),
(676, 'default', 'Evoked a Switch Ads Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:51:25', '2024-06-07 07:51:25'),
(677, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:57:53', '2024-06-07 07:57:53'),
(678, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:58:25', '2024-06-07 07:58:25'),
(679, 'default', 'Evoked a Switch Ads Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:58:32', '2024-06-07 07:58:32'),
(680, 'default', 'Evoked a Switch Ads Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 07:59:16', '2024-06-07 07:59:16'),
(681, 'default', 'Evoked a Switch Ads Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 08:00:54', '2024-06-07 08:00:54'),
(682, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 08:00:58', '2024-06-07 08:00:58'),
(683, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 08:03:56', '2024-06-07 08:03:56'),
(684, 'default', 'Evoked a Switch Ads Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 08:04:01', '2024-06-07 08:04:01'),
(685, 'default', 'Evoked a Switch Ads Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 08:04:02', '2024-06-07 08:04:02'),
(686, 'default', 'Evoked a Switch Ads Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 08:04:03', '2024-06-07 08:04:03'),
(687, 'default', 'Evoked a Switch Ads Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 08:04:04', '2024-06-07 08:04:04'),
(688, 'default', 'Evoked a Switch Ads Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 08:04:05', '2024-06-07 08:04:05'),
(689, 'default', 'Evoked a Switch Ads Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 08:04:06', '2024-06-07 08:04:06'),
(690, 'default', 'Evoked a Switch Ads Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 08:04:06', '2024-06-07 08:04:06'),
(691, 'default', 'Evoked a Switch Ads Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 08:04:07', '2024-06-07 08:04:07'),
(692, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 08:04:08', '2024-06-07 08:04:08'),
(693, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 08:04:13', '2024-06-07 08:04:13'),
(694, 'default', 'Evoked a Switch Ads Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 08:59:46', '2024-06-07 08:59:46'),
(695, 'default', 'Evoked a Switch Ads Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:00:10', '2024-06-07 09:00:10'),
(696, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:00:21', '2024-06-07 09:00:21'),
(697, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:12:50', '2024-06-07 09:12:50'),
(698, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:13:48', '2024-06-07 09:13:48'),
(699, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:14:32', '2024-06-07 09:14:32'),
(700, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:15:04', '2024-06-07 09:15:04'),
(701, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:15:40', '2024-06-07 09:15:40'),
(702, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:18:08', '2024-06-07 09:18:08'),
(703, 'default', 'Evoked an Edit Advertisement Operation For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:18:12', '2024-06-07 09:18:12'),
(704, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:18:12', '2024-06-07 09:18:12'),
(705, 'default', 'Accessed Edit Advertisement For Advertisement ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:20:30', '2024-06-07 09:20:30'),
(706, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:23:00', '2024-06-07 09:23:00'),
(707, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:23:32', '2024-06-07 09:23:32'),
(708, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:24:48', '2024-06-07 09:24:48'),
(709, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:26:54', '2024-06-07 09:26:54'),
(710, 'default', 'Accessed All Partners', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:36:31', '2024-06-07 09:36:31'),
(711, 'default', 'Accessed All Partners', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:37:55', '2024-06-07 09:37:55'),
(712, 'default', 'Accessed All Partners', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:38:20', '2024-06-07 09:38:20'),
(713, 'default', 'Accessed All Partners', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:39:17', '2024-06-07 09:39:17'),
(714, 'default', 'Accessed All Partners', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:39:28', '2024-06-07 09:39:28'),
(715, 'default', 'Accessed All Partners', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:39:50', '2024-06-07 09:39:50'),
(716, 'default', 'Accessed All Partners', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:40:42', '2024-06-07 09:40:42'),
(717, 'default', 'Accessed All Partners', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:40:55', '2024-06-07 09:40:55'),
(718, 'default', 'Accessed All Partners', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:41:24', '2024-06-07 09:41:24'),
(719, 'default', 'Accessed All Partners', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:41:36', '2024-06-07 09:41:36'),
(720, 'default', 'Accessed the all blogs page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:42:06', '2024-06-07 09:42:06'),
(721, 'default', 'Accessed the all blogs page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:45:38', '2024-06-07 09:45:38'),
(722, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:49:21', '2024-06-07 09:49:21'),
(723, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:49:29', '2024-06-07 09:49:29'),
(724, 'default', 'Evoked an add Blog Operation', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:54:04', '2024-06-07 09:54:04'),
(725, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 09:54:08', '2024-06-07 09:54:08'),
(726, 'default', 'Evoked an add Blog Operation', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 10:17:00', '2024-06-07 10:17:00'),
(727, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 10:17:03', '2024-06-07 10:17:03'),
(728, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 10:21:21', '2024-06-07 10:21:21'),
(729, 'default', 'Evoked an add Blog Operation', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 10:23:25', '2024-06-07 10:23:25'),
(730, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-07 10:23:27', '2024-06-07 10:23:27'),
(731, 'default', 'Accessed All Banners', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-11 06:16:37', '2024-06-11 06:16:37'),
(732, 'default', 'Accessed All Partners', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-11 06:16:49', '2024-06-11 06:16:49'),
(733, 'default', 'Accessed All Partners', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-11 06:18:11', '2024-06-11 06:18:11'),
(734, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-11 06:18:18', '2024-06-11 06:18:18'),
(735, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-11 06:19:09', '2024-06-11 06:19:09'),
(736, 'default', 'Evoked a Switch Ads Request', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-11 06:19:15', '2024-06-11 06:19:15'),
(737, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-11 06:19:37', '2024-06-11 06:19:37'),
(738, 'default', 'Accessed the all advertisements page ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-11 06:21:06', '2024-06-11 06:21:06'),
(739, 'default', 'Accessed Edit Advertisement For Advertisement ID number 10 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-11 06:22:33', '2024-06-11 06:22:33'),
(740, 'default', 'Evoked an Edit Advertisement Operation For Advertisement ID number 10 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-11 06:22:45', '2024-06-11 06:22:45'),
(741, 'default', 'Accessed Edit Advertisement For Advertisement ID number 10 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-11 06:22:54', '2024-06-11 06:22:54'),
(742, 'default', 'Accessed Edit Advertisement For Advertisement ID number 10 ', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2024-06-11 06:23:03', '2024-06-11 06:23:03'),
(743, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 3, '[]', NULL, '2024-06-12 17:57:45', '2024-06-12 17:57:45'),
(744, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 3, '[]', NULL, '2024-06-12 18:00:51', '2024-06-12 18:00:51'),
(745, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 3, '[]', NULL, '2024-06-12 18:02:34', '2024-06-12 18:02:34'),
(746, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 3, '[]', NULL, '2024-06-12 18:34:01', '2024-06-12 18:34:01'),
(747, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 3, '[]', NULL, '2024-06-13 12:51:12', '2024-06-13 12:51:12'),
(748, 'default', 'Accessed the all blogs page ', NULL, NULL, NULL, 'App\\Models\\User', 3, '[]', NULL, '2024-06-13 12:52:07', '2024-06-13 12:52:07'),
(749, 'default', 'Accessed Edit Blog For Blog ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 3, '[]', NULL, '2024-06-13 12:52:14', '2024-06-13 12:52:14'),
(750, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 3, '[]', NULL, '2024-06-13 15:00:08', '2024-06-13 15:00:08'),
(751, 'default', 'Evoked an add Blog Operation', NULL, NULL, NULL, 'App\\Models\\User', 3, '[]', NULL, '2024-06-13 15:01:23', '2024-06-13 15:01:23'),
(752, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 3, '[]', NULL, '2024-06-13 15:01:30', '2024-06-13 15:01:30'),
(753, 'default', 'Accessed the all blogs page ', NULL, NULL, NULL, 'App\\Models\\User', 3, '[]', NULL, '2024-06-13 15:01:53', '2024-06-13 15:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimension` text COLLATE utf8mb4_unicode_ci,
  `page` text COLLATE utf8mb4_unicode_ci,
  `placement` text COLLATE utf8mb4_unicode_ci,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `active`, `title`, `date`, `url`, `dimension`, `page`, `placement`, `author`, `image`, `created_at`, `updated_at`) VALUES
(1, 0, 'Leadboard', '2024-06-07', '2', '728X90', 'home', 'top', '1', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/advertisements/leadboard.jpg', NULL, NULL),
(2, 0, 'Super Leadboard', NULL, '4', '970 X 90', 'home', 'top', '1', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/advertisements/superleadboard.jpg', NULL, NULL),
(3, 0, 'Wallpaper-right', '2024-06-20', '12', '210X900', 'all', 'all', '1', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/advertisements/side-left.gif', NULL, NULL),
(4, 0, 'Medium Rectangle ', NULL, '13', '300X100', 'all', 'all', '1', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/advertisements/mediumrectangle.jpg', NULL, NULL),
(5, 0, 'Wallpaper-left', '2024-06-20', '123', '210X900', 'all', 'all', '1', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/advertisements/side-lefted.gif', NULL, NULL),
(6, 0, 'Fixed Footer', '2024-06-07', '', '728X90', 'all', 'footer', '1', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/advertisements/ad-footer.gif', NULL, NULL),
(7, 0, '3.0-square-side', '2024-03-25', '14', '300X100', 'all', 'all', '1', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/advertisements/3.1rectangle.jpg', NULL, NULL),
(8, 0, '3.1-square-side', '2024-03-25', '111q', '300X100', 'all', 'all', '1', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/advertisements/3.1rectangle.jpg', NULL, NULL),
(9, 0, 'Interviews', NULL, '444', '970 X 90', 'home', 'top', '1', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/advertisements/superleadboard.jpg', NULL, NULL),
(10, 1, 'ad-newsletter', '2024-06-11', '111qw', '300X100', 'all', 'all', '1', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/advertisements/issue800.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `podcast_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whitepaper_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `active`, `slung`, `company_id`, `type`, `podcast_url`, `video_url`, `title`, `tags`, `video`, `meta`, `content`, `author`, `category`, `image_one`, `whitepaper_file`, `image_two`, `image_three`, `image_four`, `created_at`, `updated_at`) VALUES
(1, 1, 'malaria-12-african-countries-to-benefit-from-life-saving-vaccine', 0, 'News', NULL, NULL, 'Malaria : 12 African countries to benefit from life saving vaccine', NULL, NULL, 'Research suggests that to prevent common mould growth, low-dose far-UVC light could be applied as a chemical-free addition to manual cleaning of indoor surfaces.', '<ul>\r\n	<li><strong>GSK developed a novel Malaria vaccine (</strong><strong>RTS,S/AS01) active against the <em>Plasmodium falciparum</em> species.</strong></li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>In 2019 a pilot programme for vaccination against malaria was launched in Ghana, Kenya and Malawi. Funded by Gavi, Global Fund and Unitaid.</strong></li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>In 2021, WHO recommended widespread use of the malaria vaccine RTS,S/AS01</strong>.<strong> Largely </strong> <strong>due to the positive impact the jab has had on the disease.</strong></li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>18 million more doses to be distributed to 12 countries: </strong><strong>Ghana, Kenya, Malawi, Benin, Burkina Faso, Burundi, Cameroon, Democratic Republic of the Congo, Liberia, Niger, Sierra Leone and Uganda</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><a href=\"#aioseo-disease-burden-of-malaria-in-africa\">Disease Burden of Malaria</a></li>\r\n	<li><a href=\"#aioseo-why-africa-bears-the-brunt-of-malaria\">Why Africa bears the brunt</a></li>\r\n	<li><a href=\"#aioseo-a-pilot-program-for-vaccination-against-malaria\">Malaria vaccine pilot programme</a></li>\r\n	<li><a href=\"#aioseo-increasing-access-to-the-malaria-vaccine\">Gavi announces increased supply of Malaria vaccine</a></li>\r\n</ul>\r\n\r\n<p>Disease Burden of Malaria</p>\r\n\r\n<p>Over the years, the burden of Malaria in Africa has been extremely disproportionate in relation to global figures. In 2021 for example,&nbsp;<a href=\"https://www.who.int/teams/global-malaria-programme/reports/world-malaria-report-2022\" target=\"_blank\"><strong>World Malaria repor</strong></a><a href=\"https://www.who.int/teams/global-malaria-programme/reports/world-malaria-report-2022\">t</a>&nbsp;estimates that malaria cases in the continent stood at approximately 234 million (95% of global cases). A figure that has led to close to 600,000 deaths (96% of global deaths); 476,000 of which being children under 5 years old.</p>\r\n\r\n<p>Four countries in the region (Nigeria, Democratic Republic of the Congo, Uganda and Mozambique) accounted for close to 50% of global cases of malaria in the same year.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Why Africa bears the brunt</p>\r\n\r\n<ul>\r\n	<li>A dry climate with heavy rainfall that encourages breeding of mosquitoes.</li>\r\n	<li><em>Anopheles gambiae</em>; the predominant vector species that leads to high transmission</li>\r\n	<li>High prevalence of the&nbsp;<em>Plasmodium falciparum</em>&nbsp;malaria parasite that can cause morbidity and mortality within 24 hours.</li>\r\n	<li>Low financially resourced region.</li>\r\n</ul>\r\n\r\n<p>Malaria vaccine pilot programme</p>\r\n\r\n<p>It took more than 30 years for GlaxoSmithKline (GSK) to develop the (RTS,S/AS01) malaria vaccine that was later used in a pilot vaccination program. Three countries were included in this pilot;&nbsp;<strong>Kenya, Ghana and Malawi.</strong>&nbsp;A huge milestone since it was the first vaccine to be approved by WHO for use against a human parasitic disease. &nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p>&ldquo;This vaccine has the potential to be very impactful in the fight against malaria, and when broadly deployed alongside other interventions, it can prevent tens of thousands of future deaths every year,&rdquo;</p>\r\n<cite>Thabani Maphosa, Gavi</cite></blockquote>\r\n\r\n<p>Funded by Gavi, Global Fund and Unitaid, the pilot has resulted in a total of 4.5 million vaccines being administered to children in these countries and the benefits are showing. The Kenyan Ministry of Health for example, estimates that prevalence of malaria in the Lake endemic region of the country has dropped from 27% in 2015 to 19% in 2020.</p>\r\n\r\n<p>In October 2021, WHO recommended the widespread use of the Malaria vaccine RTS,S/AS01 including sub-Saharan Africa and other parts of the region. A decision largely driven by positive findings from the pilot, including;</p>\r\n\r\n<ul>\r\n	<li>a strong safety profile of the vaccine,</li>\r\n	<li>strong impact on reducing cases of malaria morbidity and mortality,</li>\r\n	<li>cost effectiveness</li>\r\n</ul>\r\n\r\n<p>Gavi announces increased supply of Malaria vaccine</p>\r\n\r\n<p>Gavi has <strong><a href=\"https://www.gavi.org/news/media-room/18-million-doses-first-ever-malaria-vaccine-allocated-12-african-countries-2023\" target=\"_blank\">announced</a> </strong>that a total of <strong>18 million more doses</strong> of the RTS,S/AS01 malaria vaccine will be distributed to <strong>12 African countries</strong> for the period between 2023-2025.&nbsp; Ghana, Malawi and Kenya will be prioritized with a total of <strong>6.9 million doses</strong> to ensure continuity of care in immunization service.</p>\r\n\r\n<p>The other 9 countries will receive a total of <strong>11.1 million doses.</strong> Selection and allocation process was based on a detailed <strong><a href=\"https://www.who.int/publications/m/item/framework-for-allocation-of-limited-malaria-vaccine-supply\">Framework</a></strong> by WHO that provides guidance on prioritization of areas for supply of the life saving jab.</p>\r\n\r\n<blockquote>\r\n<p>&ldquo;While we work with manufacturers to help ramp up supply, we need to make sure the doses that we do have are used as effectively as possible, which means applying all the learnings from our pilot programmes as we broaden out to a new total of 12 countries.&rdquo;</p>\r\n<cite>Thabani Maphosa, Gavi.</cite></blockquote>\r\n\r\n<p>The spread in use of the vaccine is expected to be a major step in the fight against the malaria disease burden and alleviating morbidity and mortality rates in children.</p>', '1', '17', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/pexels-pragyan-bezbaruah-9891863-1200x800.jpg', NULL, NULL, NULL, NULL, '2024-03-19 05:21:42', '2024-03-19 05:21:42'),
(4, 1, 'daewoong-pharmaceuticals-fexuprazan-looks-into-africa', 0, 'News', NULL, NULL, 'Daewoong Pharmaceutical’s Fexuprazan looks into Africa', NULL, NULL, 'Daewoong Pharmaceutical’s Fexuprazan takes its first step into Africa, entering into a partnership with Cooper Pharma in Morocco.', '<p><em><a href=\"https://daewoong.co.kr/en/main/index\" target=\"_blank\">Daewoong Pharmaceutica</a>l (CEO&nbsp;Jeon Seng-ho,&nbsp;Lee Chang-jae) announced on the 19th&nbsp;of June the signing of an Agreement for license and distribution of potassium-competitive acid blocker (P-CAB) type drug Fexuprazan to&nbsp;Morocco, which is the second largest pharmaceutical market in the&nbsp;North Africa. The partnering company is Cooper Pharma, a leading Moroccan pharmaceutical company with presence in&nbsp;Africa&nbsp;and&nbsp;Middle East.</em></p>\r\n\r\n<hr />\r\n<p>The Agreement is worth about&nbsp;USD20.32 million&nbsp;(equivalent to&nbsp;KRW27 billion) and the local release of Fexuprazan in&nbsp;Morocco&nbsp;is scheduled for 2025. Cooper Pharma will carry out active marketing campaigns for the sale of Fexuprazan for a term of 10 years in the Moroccan market.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>Cooper Pharma, founded in 1933, has rapidly expanded its businesses in the pharmaceutical industry, keeping its number one ranking position in&nbsp;Morocco&rsquo;s&nbsp;PPI market, which was estimated to be around&nbsp;KRW75.5 billion&nbsp;in revenue last year. Daewoong intends to propose a new innovative solution to GERD drugs building on Cooper Pharma&rsquo;s significant market dominance and network.</p>\r\n\r\n<p>By entering into this Agreement, Daewoong Pharmaceutical plans to expand its presence of P-CAB drug Fexuprazan in the African pharmaceutical market for gastroesophageal reflux disease (GERD). Fexuprazan, in particular, features fast and stable suppression of gastric acid regardless of food intake and the longest half-life of 9 hours among P-CABs, meaning that the treatment has a longer duration action than other drugs.</p>\r\n\r\n<hr />\r\n<p>Read also: <a href=\"https://africanpharmaceuticalreview.com/malaria-vaccine-12-countries-to-benefit-from-increased-supply/\">12 African countries to benefit from life saving GSK vaccine (africanpharmaceuticalreview.com)</a></p>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p>&ldquo;It is inspiring that we have entered the African market in just less than a year after its launch in Korea, in the global market for treating gastroesophageal reflux diseases. We will continue to show the strength of Fexuprazan and make it grow into a global blockbuster.&rdquo;</p>\r\n<cite>Jeon Seng-ho, CEO of Daewoong Pharmaceuticals</cite></blockquote>\r\n\r\n<p>Forward-looking statements</p>\r\n\r\n<p>This press release contains forward-looking statements that are based on the current beliefs and expectations of Daewoong Pharmaceutical&rsquo;s management. Factors that could cause or contribute to such differences include, but are not limited to:</p>\r\n\r\n<p>(1) Regulatory and governmental approvals: The approval process for pharmaceutical products is subject to extensive regulations and may involve uncertainties and delays. Any failure to obtain necessary approvals or the occurrence of delays in the approval process could adversely affect Daewoong Pharmaceutical&rsquo;s business and results of operations; and</p>\r\n\r\n<p>(2) Clinical trials: The success of Daewoong Pharmaceutical&rsquo;s products depends on the results of clinical trials. The results of early clinical trials may not be indicative of the results of later-stage or larger-scale clinical trials.</p>\r\n\r\n<p>SOURCE: Daewoong Pharmaceutical Co., Ltd.</p>', '1', '10', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/image_2023-07-24_125514226.png', NULL, NULL, NULL, NULL, '2024-03-27 09:16:15', '2024-03-27 09:16:15'),
(5, 1, 'this-is-a-test-blog', 2, 'Articles', NULL, NULL, 'This is a test blog', NULL, NULL, 'This is a yesy blog meta description', 'nill', '1', '7', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/confidence-l-10-removebg-preview.png', NULL, NULL, NULL, NULL, '2024-06-03 05:57:02', '2024-06-03 05:57:02'),
(6, 1, 'this-is-anothewr-test-blogs', 2, 'Articles', NULL, NULL, 'This is anothewr test blogs', NULL, NULL, 'This is a nother test blog with company ID', '<p>This is a nother test blog with company IDsss</p>', '1', '8', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/joylinks-xl-30.png', NULL, NULL, NULL, NULL, '2024-06-03 05:58:47', '2024-06-03 05:58:47'),
(9, 1, 'malariaaaa-12-african-countries-to-benefit-from-life-saving-vaccine', 0, 'Interviews', NULL, NULL, 'Malariaa : 12 African countries to benefit from life saving vaccine', NULL, NULL, 'Research suggests that to prevent common mould growth, low-dose far-UVC light could be applied as a chemical-free addition to manual cleaning of indoor surfaces.', '<ul>\r\n	<li><strong>GSK developed a novel Malaria vaccine (</strong><strong>RTS,S/AS01) active against the <em>Plasmodium falciparum</em> species.</strong></li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>In 2019 a pilot programme for vaccination against malaria was launched in Ghana, Kenya and Malawi. Funded by Gavi, Global Fund and Unitaid.</strong></li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>In 2021, WHO recommended widespread use of the malaria vaccine RTS,S/AS01</strong>.<strong> Largely </strong> <strong>due to the positive impact the jab has had on the disease.</strong></li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>18 million more doses to be distributed to 12 countries: </strong><strong>Ghana, Kenya, Malawi, Benin, Burkina Faso, Burundi, Cameroon, Democratic Republic of the Congo, Liberia, Niger, Sierra Leone and Uganda</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><a href=\"#aioseo-disease-burden-of-malaria-in-africa\">Disease Burden of Malaria</a></li>\r\n	<li><a href=\"#aioseo-why-africa-bears-the-brunt-of-malaria\">Why Africa bears the brunt</a></li>\r\n	<li><a href=\"#aioseo-a-pilot-program-for-vaccination-against-malaria\">Malaria vaccine pilot programme</a></li>\r\n	<li><a href=\"#aioseo-increasing-access-to-the-malaria-vaccine\">Gavi announces increased supply of Malaria vaccine</a></li>\r\n</ul>\r\n\r\n<p>Disease Burden of Malaria</p>\r\n\r\n<p>Over the years, the burden of Malaria in Africa has been extremely disproportionate in relation to global figures. In 2021 for example,&nbsp;<a href=\"https://www.who.int/teams/global-malaria-programme/reports/world-malaria-report-2022\" target=\"_blank\"><strong>World Malaria repor</strong></a><a href=\"https://www.who.int/teams/global-malaria-programme/reports/world-malaria-report-2022\">t</a>&nbsp;estimates that malaria cases in the continent stood at approximately 234 million (95% of global cases). A figure that has led to close to 600,000 deaths (96% of global deaths); 476,000 of which being children under 5 years old.</p>\r\n\r\n<p>Four countries in the region (Nigeria, Democratic Republic of the Congo, Uganda and Mozambique) accounted for close to 50% of global cases of malaria in the same year.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Why Africa bears the brunt</p>\r\n\r\n<ul>\r\n	<li>A dry climate with heavy rainfall that encourages breeding of mosquitoes.</li>\r\n	<li><em>Anopheles gambiae</em>; the predominant vector species that leads to high transmission</li>\r\n	<li>High prevalence of the&nbsp;<em>Plasmodium falciparum</em>&nbsp;malaria parasite that can cause morbidity and mortality within 24 hours.</li>\r\n	<li>Low financially resourced region.</li>\r\n</ul>\r\n\r\n<p>Malaria vaccine pilot programme</p>\r\n\r\n<p>It took more than 30 years for GlaxoSmithKline (GSK) to develop the (RTS,S/AS01) malaria vaccine that was later used in a pilot vaccination program. Three countries were included in this pilot;&nbsp;<strong>Kenya, Ghana and Malawi.</strong>&nbsp;A huge milestone since it was the first vaccine to be approved by WHO for use against a human parasitic disease. &nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p>&ldquo;This vaccine has the potential to be very impactful in the fight against malaria, and when broadly deployed alongside other interventions, it can prevent tens of thousands of future deaths every year,&rdquo;</p>\r\n<cite>Thabani Maphosa, Gavi</cite></blockquote>\r\n\r\n<p>Funded by Gavi, Global Fund and Unitaid, the pilot has resulted in a total of 4.5 million vaccines being administered to children in these countries and the benefits are showing. The Kenyan Ministry of Health for example, estimates that prevalence of malaria in the Lake endemic region of the country has dropped from 27% in 2015 to 19% in 2020.</p>\r\n\r\n<p>In October 2021, WHO recommended the widespread use of the Malaria vaccine RTS,S/AS01 including sub-Saharan Africa and other parts of the region. A decision largely driven by positive findings from the pilot, including;</p>\r\n\r\n<ul>\r\n	<li>a strong safety profile of the vaccine,</li>\r\n	<li>strong impact on reducing cases of malaria morbidity and mortality,</li>\r\n	<li>cost effectiveness</li>\r\n</ul>\r\n\r\n<p>Gavi announces increased supply of Malaria vaccine</p>\r\n\r\n<p>Gavi has <strong><a href=\"https://www.gavi.org/news/media-room/18-million-doses-first-ever-malaria-vaccine-allocated-12-african-countries-2023\" target=\"_blank\">announced</a> </strong>that a total of <strong>18 million more doses</strong> of the RTS,S/AS01 malaria vaccine will be distributed to <strong>12 African countries</strong> for the period between 2023-2025.&nbsp; Ghana, Malawi and Kenya will be prioritized with a total of <strong>6.9 million doses</strong> to ensure continuity of care in immunization service.</p>\r\n\r\n<p>The other 9 countries will receive a total of <strong>11.1 million doses.</strong> Selection and allocation process was based on a detailed <strong><a href=\"https://www.who.int/publications/m/item/framework-for-allocation-of-limited-malaria-vaccine-supply\">Framework</a></strong> by WHO that provides guidance on prioritization of areas for supply of the life saving jab.</p>\r\n\r\n<blockquote>\r\n<p>&ldquo;While we work with manufacturers to help ramp up supply, we need to make sure the doses that we do have are used as effectively as possible, which means applying all the learnings from our pilot programmes as we broaden out to a new total of 12 countries.&rdquo;</p>\r\n<cite>Thabani Maphosa, Gavi.</cite></blockquote>\r\n\r\n<p>The spread in use of the vaccine is expected to be a major step in the fight against the malaria disease burden and alleviating morbidity and mortality rates in children.</p>', '1', '17', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/image_2023-07-24_125514226.png', NULL, NULL, NULL, NULL, '2024-03-19 05:21:42', '2024-03-19 05:21:42'),
(10, 1, 'case-study-franz-ziels-utilisation-of-enzyme-indicators-using-fractional-kill-time-method', 0, 'Whitepapers/Application Notes', NULL, NULL, 'Case Study: Franz Ziel’s utilisation of Enzyme Indicators using Fractional Kill Time method', NULL, NULL, 'An EJPPS published study on Enzymatic Indicators in Vaporized Hydrogen Peroxide Decontamination Cycles: Application-related Research focusing on Fractional Kill Time (FKT) and Reverse Fractional Kill Time (RFKT) Studies', '<p>The accepted standard from a regulatory perspective for vaporized hydrogen peroxide (vH2O2) cycle validation is the use of biological indicators (BIs). Novel enzymatic indicators (EIs) are gaining more importance in this field, relying on specific enzymatic reactions for their functionality.</p>\n\n<p>The aim of this work is to determine how enzymatic indicators can contribute to the cycle development process. Emphasis was placed on the initial informative study, the fractional kill time study, which is a basis for future studies.</p>\n\n<p>The results indicate that enzymatic indicators have the potential to facilitate further development of the cycle. This requires an analysis of the determined data, measured in relative light units (RLU), and aligning it with the BI growth, resulting in Full Kill/ No Kill limits. The use of enzymatic indicators for decontamination cycle development opens new perspectives and holds considerable potential for practical use in the development and validation of decontamination processes.</p>', '1', '14', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/Franz-Ziel-Graphic-300x278.jpg', NULL, NULL, NULL, NULL, '2024-06-04 08:15:17', '2024-06-04 08:15:17'),
(11, 1, 'whitepaper-molecular-contamination-control-odours-gases-and-toxics', 0, 'Whitepapers/Application Notes', NULL, NULL, 'Whitepaper: Molecular contamination control – odours, gases and toxics', NULL, NULL, 'Identify molecular contamination concerns in the pharmaceutical workspace and determine the right filtration solution for dealing with these problems.', '<p>Molecular contamination concerns are present in many different formats and can affect the pharmaceutical industry. From supply air concerns of neighbouring industrial facilities to exhaust air requirements, ensuring molecular contaminants are not released into the environment to dealing with vapours used in sterilisation processes and protecting test samples from contamination. This whitepaper is focusing on the contamination risks that are caused by gases and vapours.</p>\r\n\r\n<p>Download this whitepaper to discover:</p>\r\n\r\n<ul>\r\n	<li>The consequences of airborne molecular contaminants</li>\r\n	<li>What is molecular filtration and how it works</li>\r\n	<li>Molecular contamination concerns</li>\r\n	<li>Molecular filtration product solutions</li>\r\n</ul>', '1', '12', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/Camfil-asset-3.jpg', NULL, NULL, NULL, NULL, '2024-06-04 08:16:50', '2024-06-04 08:16:50'),
(12, 1, 'cases-study-franz-ziels-utilisation-of-enzyme-indicators-using-fractional-kill-time-method', 0, 'Whitepapers/Application Notes', NULL, NULL, 'Cases Study: Franz Ziel’s utilisation of Enzyme Indicators using Fractional Kill Time method', NULL, NULL, 'An EJPPS published study on Enzymatic Indicators in Vaporized Hydrogen Peroxide Decontamination Cycles: Application-related Research focusing on Fractional Kill Time (FKT) and Reverse Fractional Kill Time (RFKT) Studies', '<p>The accepted standard from a regulatory perspective for vaporized hydrogen peroxide (vH2O2) cycle validation is the use of biological indicators (BIs). Novel enzymatic indicators (EIs) are gaining more importance in this field, relying on specific enzymatic reactions for their functionality.</p>\r\n\r\n<p>The aim of this work is to determine how enzymatic indicators can contribute to the cycle development process. Emphasis was placed on the initial informative study, the fractional kill time study, which is a basis for future studies.</p>\r\n\r\n<p>The results indicate that enzymatic indicators have the potential to facilitate further development of the cycle. This requires an analysis of the determined data, measured in relative light units (RLU), and aligning it with the BI growth, resulting in Full Kill/ No Kill limits. The use of enzymatic indicators for decontamination cycle development opens new perspectives and holds considerable potential for practical use in the development and validation of decontamination processes.</p>', '1', '14', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/Franz-Ziel-Graphic-300x278.jpg', NULL, NULL, NULL, NULL, '2024-06-04 08:15:17', '2024-06-04 08:15:17'),
(13, 1, 'whitepapers-molecular-contamination-control-odours-gases-and-toxics', 0, 'Whitepapers/Application Notes', NULL, NULL, 'Whitepapers: Molecular contamination control – odours, gases and toxics', NULL, NULL, 'Identify molecular contamination concerns in the pharmaceutical workspace and determine the right filtration solution for dealing with these problems.', '<p>Molecular contamination concerns are present in many different formats and can affect the pharmaceutical industry. From supply air concerns of neighbouring industrial facilities to exhaust air requirements, ensuring molecular contaminants are not released into the environment to dealing with vapours used in sterilisation processes and protecting test samples from contamination. This whitepaper is focusing on the contamination risks that are caused by gases and vapours.</p>\r\n\r\n<p>Download this whitepaper to discover:</p>\r\n\r\n<ul>\r\n	<li>The consequences of airborne molecular contaminants</li>\r\n	<li>What is molecular filtration and how it works</li>\r\n	<li>Molecular contamination concerns</li>\r\n	<li>Molecular filtration product solutions</li>\r\n</ul>', '1', '12', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/Camfil-asset-3.jpg', NULL, NULL, NULL, NULL, '2024-06-04 08:16:50', '2024-06-04 08:16:50'),
(14, 1, 'casse-study-franz-ziels-utilisation-of-enzyme-indicators-using-fractional-kill-time-method', 0, 'Whitepapers/Application Notes', NULL, NULL, 'Casse Study: Franz Ziel’s utilisation of Enzyme Indicators using Fractional Kill Time method', NULL, NULL, 'An EJPPS published study on Enzymatic Indicators in Vaporized Hydrogen Peroxide Decontamination Cycles: Application-related Research focusing on Fractional Kill Time (FKT) and Reverse Fractional Kill Time (RFKT) Studies', '<p>The accepted standard from a regulatory perspective for vaporized hydrogen peroxide (vH2O2) cycle validation is the use of biological indicators (BIs). Novel enzymatic indicators (EIs) are gaining more importance in this field, relying on specific enzymatic reactions for their functionality.</p>\r\n\r\n<p>The aim of this work is to determine how enzymatic indicators can contribute to the cycle development process. Emphasis was placed on the initial informative study, the fractional kill time study, which is a basis for future studies.</p>\r\n\r\n<p>The results indicate that enzymatic indicators have the potential to facilitate further development of the cycle. This requires an analysis of the determined data, measured in relative light units (RLU), and aligning it with the BI growth, resulting in Full Kill/ No Kill limits. The use of enzymatic indicators for decontamination cycle development opens new perspectives and holds considerable potential for practical use in the development and validation of decontamination processes.</p>', '1', '14', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/Franz-Ziel-Graphic-300x278.jpg', NULL, NULL, NULL, NULL, '2024-06-04 08:15:17', '2024-06-04 08:15:17'),
(16, 1, 'malariaz-12-african-countries-to-benefit-from-life-saving-vaccine', 0, 'News', NULL, NULL, 'Malariaz : 12 African countries to benefit from life saving vaccine', NULL, NULL, 'Research suggests that to prevent common mould growth, low-dose far-UVC light could be applied as a chemical-free addition to manual cleaning of indoor surfaces.', '<ul>\r\n	<li><strong>GSK developed a novel Malaria vaccine (</strong><strong>RTS,S/AS01) active against the <em>Plasmodium falciparum</em> species.</strong></li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>In 2019 a pilot programme for vaccination against malaria was launched in Ghana, Kenya and Malawi. Funded by Gavi, Global Fund and Unitaid.</strong></li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>In 2021, WHO recommended widespread use of the malaria vaccine RTS,S/AS01</strong>.<strong> Largely </strong> <strong>due to the positive impact the jab has had on the disease.</strong></li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>18 million more doses to be distributed to 12 countries: </strong><strong>Ghana, Kenya, Malawi, Benin, Burkina Faso, Burundi, Cameroon, Democratic Republic of the Congo, Liberia, Niger, Sierra Leone and Uganda</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><a href=\"#aioseo-disease-burden-of-malaria-in-africa\">Disease Burden of Malaria</a></li>\r\n	<li><a href=\"#aioseo-why-africa-bears-the-brunt-of-malaria\">Why Africa bears the brunt</a></li>\r\n	<li><a href=\"#aioseo-a-pilot-program-for-vaccination-against-malaria\">Malaria vaccine pilot programme</a></li>\r\n	<li><a href=\"#aioseo-increasing-access-to-the-malaria-vaccine\">Gavi announces increased supply of Malaria vaccine</a></li>\r\n</ul>\r\n\r\n<p>Disease Burden of Malaria</p>\r\n\r\n<p>Over the years, the burden of Malaria in Africa has been extremely disproportionate in relation to global figures. In 2021 for example,&nbsp;<a href=\"https://www.who.int/teams/global-malaria-programme/reports/world-malaria-report-2022\" target=\"_blank\"><strong>World Malaria repor</strong></a><a href=\"https://www.who.int/teams/global-malaria-programme/reports/world-malaria-report-2022\">t</a>&nbsp;estimates that malaria cases in the continent stood at approximately 234 million (95% of global cases). A figure that has led to close to 600,000 deaths (96% of global deaths); 476,000 of which being children under 5 years old.</p>\r\n\r\n<p>Four countries in the region (Nigeria, Democratic Republic of the Congo, Uganda and Mozambique) accounted for close to 50% of global cases of malaria in the same year.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Why Africa bears the brunt</p>\r\n\r\n<ul>\r\n	<li>A dry climate with heavy rainfall that encourages breeding of mosquitoes.</li>\r\n	<li><em>Anopheles gambiae</em>; the predominant vector species that leads to high transmission</li>\r\n	<li>High prevalence of the&nbsp;<em>Plasmodium falciparum</em>&nbsp;malaria parasite that can cause morbidity and mortality within 24 hours.</li>\r\n	<li>Low financially resourced region.</li>\r\n</ul>\r\n\r\n<p>Malaria vaccine pilot programme</p>\r\n\r\n<p>It took more than 30 years for GlaxoSmithKline (GSK) to develop the (RTS,S/AS01) malaria vaccine that was later used in a pilot vaccination program. Three countries were included in this pilot;&nbsp;<strong>Kenya, Ghana and Malawi.</strong>&nbsp;A huge milestone since it was the first vaccine to be approved by WHO for use against a human parasitic disease. &nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p>&ldquo;This vaccine has the potential to be very impactful in the fight against malaria, and when broadly deployed alongside other interventions, it can prevent tens of thousands of future deaths every year,&rdquo;</p>\r\n<cite>Thabani Maphosa, Gavi</cite></blockquote>\r\n\r\n<p>Funded by Gavi, Global Fund and Unitaid, the pilot has resulted in a total of 4.5 million vaccines being administered to children in these countries and the benefits are showing. The Kenyan Ministry of Health for example, estimates that prevalence of malaria in the Lake endemic region of the country has dropped from 27% in 2015 to 19% in 2020.</p>\r\n\r\n<p>In October 2021, WHO recommended the widespread use of the Malaria vaccine RTS,S/AS01 including sub-Saharan Africa and other parts of the region. A decision largely driven by positive findings from the pilot, including;</p>\r\n\r\n<ul>\r\n	<li>a strong safety profile of the vaccine,</li>\r\n	<li>strong impact on reducing cases of malaria morbidity and mortality,</li>\r\n	<li>cost effectiveness</li>\r\n</ul>\r\n\r\n<p>Gavi announces increased supply of Malaria vaccine</p>\r\n\r\n<p>Gavi has <strong><a href=\"https://www.gavi.org/news/media-room/18-million-doses-first-ever-malaria-vaccine-allocated-12-african-countries-2023\" target=\"_blank\">announced</a> </strong>that a total of <strong>18 million more doses</strong> of the RTS,S/AS01 malaria vaccine will be distributed to <strong>12 African countries</strong> for the period between 2023-2025.&nbsp; Ghana, Malawi and Kenya will be prioritized with a total of <strong>6.9 million doses</strong> to ensure continuity of care in immunization service.</p>\r\n\r\n<p>The other 9 countries will receive a total of <strong>11.1 million doses.</strong> Selection and allocation process was based on a detailed <strong><a href=\"https://www.who.int/publications/m/item/framework-for-allocation-of-limited-malaria-vaccine-supply\">Framework</a></strong> by WHO that provides guidance on prioritization of areas for supply of the life saving jab.</p>\r\n\r\n<blockquote>\r\n<p>&ldquo;While we work with manufacturers to help ramp up supply, we need to make sure the doses that we do have are used as effectively as possible, which means applying all the learnings from our pilot programmes as we broaden out to a new total of 12 countries.&rdquo;</p>\r\n<cite>Thabani Maphosa, Gavi.</cite></blockquote>\r\n\r\n<p>The spread in use of the vaccine is expected to be a major step in the fight against the malaria disease burden and alleviating morbidity and mortality rates in children.</p>', '1', '17', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/pexels-pragyan-bezbaruah-9891863-1200x800.jpg', NULL, NULL, NULL, NULL, '2024-03-19 05:21:42', '2024-03-19 05:21:42'),
(17, 1, 'sample-webinars', 2, 'Webinars', NULL, NULL, 'Sample Webinars 1', NULL, NULL, 'This is a yesy blog meta description', '<p>Test blog test meta description</p>', '1', '7', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/confidence-l-10-removebg-preview.png', NULL, NULL, NULL, NULL, '2024-06-03 05:57:02', '2024-06-03 05:57:02'),
(18, 1, 'Sample-Webinars-2', 2, 'Webinars', NULL, NULL, 'Sample Webinars 2', NULL, NULL, 'This is a yesy blog meta description', '<p>Test blog test meta description</p>', '1', '7', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/confidence-l-10-removebg-preview.png', NULL, NULL, NULL, NULL, '2024-06-03 05:57:02', '2024-06-03 05:57:02'),
(19, 1, 'sample-webinars-3', 2, 'Webinars', NULL, NULL, 'Sample Webinars 3', NULL, NULL, 'This is a yesy blog meta description', '<p>Test blog test meta description</p>', '1', '7', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/confidence-l-10-removebg-preview.png', NULL, NULL, NULL, NULL, '2024-06-03 05:57:02', '2024-06-03 05:57:02'),
(20, 1, 'Sample-Webinars-4', 2, 'Webinars', NULL, NULL, 'Sample Webinars 4', NULL, NULL, 'This is a yesy blog meta description', '<p>Test blog test meta description</p>', '1', '7', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/confidence-l-10-removebg-preview.png', NULL, NULL, NULL, NULL, '2024-06-03 05:57:02', '2024-06-03 05:57:02'),
(21, 1, 'exclusive-interview-dr-evelyn-wesangula-why-you-should-care-about-resistance', 0, 'Interviews', NULL, NULL, 'Exclusive Interview: Dr. Evelyn Wesangula: Why You Should Care About Resistance', NULL, NULL, 'Dr. Evelyn Wesangula shares her unique insights about antimicrobial resistance, why it\'s an important conversation to have and what can be done to save millions of lives.', '<p>Dr. Evelyn Wesangula is an antimicrobial steward who has dedicated a huge part of her career to fighting antimicrobial resistance (AMR). She is currently the Senior AMR Control Specialist working at the&nbsp;<a href=\"https://ecsahc.org/\" target=\"_blank\">East Central and Southern Africa Health Community</a>&nbsp;where she supports implementation of National Action Plans for containments and prevention of antimicrobial resistance.</p>\r\n\r\n<p>She has, for many years been the National Focal Person on antimicrobial resistance control in Kenya and championed for the development of a National Action Plan on Prevention and Containment of Antimicrobial Resistance in Kenya.</p>\r\n\r\n<p>She is also a contributing author to the&nbsp;<a href=\"https://www.momanyink.com/wp-content/uploads/2020/07/National-AMS-Guidelines-for-Healthcare-Settings-in-Kenya.pdf\" target=\"_blank\">National Antimicrobial Stewardship guidelines for healthcare settings</a>&nbsp;as well as development of Infection Prevention and Control strategic documents in Kenya.</p>\r\n\r\n<p>On a global scale, she has worked as a consultant in various international health organizations centered around antimicrobial stewardship.</p>\r\n\r\n<p>See below what she had to say about antimicrobial resistance.</p>\r\n\r\n<hr />\r\n<p><strong>How would you define antimicrobial resistance to a 10-year-old?</strong></p>\r\n\r\n<p>Microbes, which include bacteria, fungi, parasites and viruses have the ability to cause infection and disease.</p>\r\n\r\n<p>When you develop such an infection, what would ideally happen &ndash; assuming you have a well-functioning immunity &ndash; is that your body would clear this infection.</p>\r\n\r\n<p>But in the event this doesn&rsquo;t happen, then you would require an antimicrobial agent.</p>\r\n\r\n<p>Now, effective antimicrobial agents are able to step in and fight off the microbe and infection. However, in certain instances these microorganisms can develop ways of evading the action of these drugs, despite being administered in the correct doses.</p>\r\n\r\n<p>When the microorganisms remain unresponsive, then we term that phenomenon as antimicrobial resistance.</p>\r\n\r\n<p><strong>What are the consequences of this?</strong></p>\r\n\r\n<p>One; you end up with severe illness.&nbsp;</p>\r\n\r\n<p>Two; if you&rsquo;re admitted in hospital, you will have a longer stay than initially projected.</p>\r\n\r\n<p>Third; If you&rsquo;re lucky and you survive, you will have to part with a lot of money since the commonly used, more affordable antimicrobial agents are no longer working. The doctor will have no choice but to prescribe a more expensive anti-microbial agent.</p>\r\n\r\n<p>Fourth; If you can&rsquo;t afford this newer more effective antibiotic for example, or your infection remains unresponsive, then death can happen.</p>\r\n\r\n<p><strong>How did your career journey lead you to antimicrobial resistance?</strong></p>\r\n\r\n<p>(Smiles) To be honest I haven&rsquo;t really thought about it much.</p>\r\n\r\n<p>So, a lot of my years in service have been dedicated to infectious diseases.</p>\r\n\r\n<p>After internship, my first posting was in Malindi District Hospital where I was the first pharmacist in both the hospital and the county (district at the time).</p>\r\n\r\n<p>At the facility level, I was heavily involved in the setting up of the HIV comprehensive care clinic and from that point, I began working very closely in both TB(Tuberculosis) and HIV management.</p>\r\n\r\n<p>So, I continued to grow my passion in these diseases over a few years then I transitioned into the Malaria program (while still serving in different capacities).&nbsp;</p>\r\n\r\n<p>From that point, I realized I had a passion in infectious diseases and so I applied to do a Master&rsquo;s in Tropical and Infectious Diseases at the University of Nairobi. At the time, this was not one of those career paths that was chosen by pharmacy professionals.</p>\r\n\r\n<p>In fact, we were the first cohort of pharmacists to do the course. I remember we were only two female pharmacists in the program and nobody understood why we were there. But the truth is, we were just both passionate about infectious diseases.</p>\r\n\r\n<p>When I finished training, I ended up at the Jaramogi Odinga Odinga Teaching and Referral Hospital, (formerly the New Nyanza Provincial General Hospital).</p>\r\n\r\n<p>To be honest,&nbsp;I felt a bit misplaced at the beginning, but eventually I found my space.&nbsp;</p>\r\n\r\n<p>And that space was in the lab.</p>\r\n\r\n<p>I spent a lot of my time in the lab because I had started to develop a passion in microbiology.</p>\r\n\r\n<p>Progressively, I studied the patterns of antibiotic use at the hospital trying to correlate this with what was happening at the lab- particularly around culture sensitivity testing. From there I developed an interest in infection prevention and control (IPC).</p>\r\n\r\n<p>So, I became part of the team that was strengthening IPC at the hospital as well as conceptualizing what an antimicrobial use program at the hospital would look like.&nbsp;</p>\r\n\r\n<p>Before I could complete what we had started, I transitioned into teaching.</p>\r\n\r\n<p>I started teaching at the Kenya Medical Training College (KMTC) and that is where I dived into antimicrobial resistance fully. I got an opportunity to coordinate the Global Antimicrobial Resistance Partnership-an initiative that brought together multisectoral experts including animal and plant health.</p>\r\n\r\n<p>When the first situation analysis on antimicrobial use and resistance in Kenya was published, I realized I needed to do something about it.</p>\r\n\r\n<p>I started looking for platforms to drive that agenda and I knew that we needed policy support but at the time, the Ministry of Health didn&rsquo;t even have an active antimicrobial resistance program.</p>\r\n\r\n<p>So, I started looking for opportunities.&nbsp;</p>\r\n\r\n<p>The earliest opportunity that presented itself in terms of disseminating the findings, was the Infection Prevention and Control Program.</p>\r\n\r\n<p>I spoke at almost every IPC program disseminating the data.</p>\r\n\r\n<p>Through that, we developed the IPC strategy and one of the strategic objectives was to establish a national AMR committee from a one health perspective.&nbsp;</p>\r\n\r\n<p>So when that was identified within the IPC strategy, the next natural thing was to have an AMR desk at the Ministry of Health and the rest is history.</p>\r\n\r\n<p>I was appointed as a focal point for AMR, moved from KMTC and went to the Ministry of Health to establish the national AMR program.</p>', '1', '13', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/IMG_5455-1-min-868x1024.jpg', NULL, NULL, NULL, NULL, '2024-06-04 09:26:43', '2024-06-04 09:26:43'),
(22, 1, 'exclusive-dr-tracie-muraya-why-we-should-all-join-forces-to-fight-antimicrobial-resistance', 0, 'Interviews', NULL, NULL, 'EXCLUSIVE: Dr. Tracie Muraya: Why we should all join forces to fight antimicrobial resistance', NULL, NULL, 'We have an informative conversation with Dr. Tracie Muraya about antimicrobial resistance focusing on what can be done to mitigate its impact', '<p><strong>How would you define antimicrobial resistance?</strong></p>\r\n\r\n<p>Antimicrobial resistance or AMR occurs when microbes including bacteria, viruses, fungi or parasites no longer respond to antimicrobial agents that have been previously known to be effective against them.</p>\r\n\r\n<p>A phenomenon that occurs naturally but is fueled by misuse of antimicrobial agents. Whether it&rsquo;s overuse or underuse, it boils down to inappropriate use of antibiotics.</p>\r\n\r\n<p>To be clear AMR involves all classes of antimicrobial agents however for the sake of this conversation I&rsquo;ll focus on antibiotics.</p>\r\n\r\n<p><img alt=\"\" src=\"https://africanpharmaceuticalreview.com/wp-content/uploads/2023/11/Untitled-design-6-1-1024x684.jpg\" style=\"height:684px; width:1024px\" /></p>\r\n\r\n<p><strong>Why is it something we should care about?</strong></p>\r\n\r\n<p>When Sir Alexander Fleming was accepting his Nobel Prize for his 1928 discovery of penicillin, he did caution that using penicillin in the wrong way would eventually lead to a point where this drug would no longer work.</p>\r\n\r\n<p>A bit of context.</p>\r\n\r\n<p>Before the emergence of penicillin, people were dying from the most basic infections; minor wounds, pneumonia, they were all death sentences. &nbsp;So, when it came along, penicillin was a lifesaver as it spared thousands of soldiers from deaths from gunshot wounds and other injuries acquired from the trenches.</p>\r\n\r\n<p>Fast forward a couple of years later;</p>\r\n\r\n<p>Antibiotics were all of a sudden, a gold mine that was attracting a lot of investments and therefore manufactured left, right and center. Unfortunately, with this, the issue of misuse became a reality.</p>\r\n\r\n<p>Within a short period of time microbes started showing signs of resistance against these &lsquo;new antibiotics.&rsquo;</p>\r\n\r\n<p>Sir Fleming&rsquo;s prediction came true.</p>\r\n\r\n<p>In the recent past discovery of new antibiotics has been far and between. At some point there was a 30-year gap where we didn&rsquo;t see any antibiotic coming through. And even when new ones emerged, they were merely combinations of already existing molecular formulations.</p>\r\n\r\n<p>What has happened is that we are now at an era where we&rsquo;re seeing a dry pipeline of antibiotics.</p>\r\n\r\n<p>Pharmaceutical companies have shied away from investing in products that they believe in a few years may become ineffective, triggering a dip in sales. At the end of the day, all businesses focus on the bottom line; a solid return on investment.</p>\r\n\r\n<p>Consequently, we are facing a glooming reality that we might not have antibiotics moving forward. Essentially, a post-antibiotic era. Similar to the period before the Second World War, that was a pre-antibiotic era. If status quo remains as far as addressing antimicrobial resistance is concerned, then we will move to a post-antibiotic era where we will struggle to find effective treatment for common infections.</p>\r\n\r\n<p><strong>What will that mean?</strong></p>\r\n\r\n<p>In its simplest form, a paper cut may drive you six feet under.</p>\r\n\r\n<p>A young mother giving birth through cesarean section in a low resourced setting where there&rsquo;s poor infection prevention control and lack of prophylactic medication for infection prevention, will face the cruel possibility of death.</p>\r\n\r\n<p>The consequences don&rsquo;t just end there unfortunately; In Africa, non-communicable diseases (including cancer) have progressively emerged as a huge source of disease burden.</p>\r\n\r\n<p>To treat cancer, antibiotics are needed because the patients&rsquo; immunity tend to become compromised. Making them vulnerable to opportunistic infections.</p>\r\n\r\n<p>So as much as the anti-cancer medication may be effective, patients may still lose their lives due to lack of effective treatment options to manage the hospital or community acquired infections.</p>\r\n\r\n<p>And there are many other scenarios similar to this.</p>\r\n\r\n<p>Impact of AMR cuts across individuals, sectors and even regions. So, we all have to come together and do something about it. We all have a role to play.</p>\r\n\r\n<p><strong>How was your journey like leading you to the antimicrobial resistance space?</strong></p>\r\n\r\n<p>(Smiles) You know, I&rsquo;ve been asked that question so many times, so I&rsquo;ve had time to reflect on it.</p>\r\n\r\n<p>Although I didn&rsquo;t realize it at the time, my passion for public health started right from when I was a pharmacist intern in Kenya.</p>\r\n\r\n<p>At that early part of my career, I quickly realized that our public health care system needed a lot of improvement. Similar to most African countries. Seeing patients who were unable to afford a prescription costing less than a dollar is an example of the scenarios that I witnessed and felt that something needed to be done.</p>\r\n\r\n<p>Fast forward a few years later and I join the private sector- which was a whole other world altogether.&nbsp; Patients were able to pay for six-month worth of antiretroviral prescriptions sometimes costing almost a thousand dollars.</p>\r\n\r\n<p>A stark difference from what I had seen in public sector and honestly that just didn&rsquo;t sit right with me.</p>\r\n\r\n<p>So, I took up a course; Master&rsquo;s in Public Health and once I graduated, I thought to myself, I think I&rsquo;m done with the clinical/administration space.</p>\r\n\r\n<p>I volunteered at an NGO, the Ecumenical Pharmaceutical Network (EPN) so that I could put in practice what I had learnt. In that sense develop the public health skills which I knew were vital for me to have any sort of impact.</p>\r\n\r\n<p>Fortunately, they needed someone who had experience in HIV programmes, which I had. Volunteered for about six months trying to strengthen the HIV program. So, that&rsquo;s how I got into it.</p>\r\n\r\n<p>Thereafter, NGO world being what it is; where you can shift from one programme to another, I ended up in the AMR space.&nbsp; While in this new space I realized; this is something I&rsquo;ve been dealing with since I started my career.&nbsp;</p>\r\n\r\n<p>Even back then, in hospital practice when I was the chief pharmacist at the Mombasa Hospital, I had overseen the development of the hospital&rsquo;s antibiotic treatment guidelines and policy to reshape how antimicrobial agents were used at the hospital.</p>\r\n\r\n<p><strong>How were they used?</strong></p>\r\n\r\n<p>Just like many hospitals, the consultant doctors would from the onset go for the &lsquo;big guns&rsquo;-the reserve antibiotics-like meropenem. When there was no clear justification that this was necessary. &nbsp;At the time, I would just comply and issue these drugs.</p>\r\n\r\n<p>Thinking about it now, I was contributing to AMR in a negative way(sighs).</p>\r\n\r\n<p>Sadly, it&rsquo;s the same in many other hospitals where pharmacists get intimidated and fail to speak against inappropriate use of antibiotics. Especially when the culture is propagated by senior doctors.</p>\r\n\r\n<p>It&rsquo;s therefore a goal of mine to ensure that young pharmacists are not pushed around, like I was back then, to create this monster called antimicrobial resistance. A monster that is claiming the lives of patients and our colleagues alike.</p>', '1', '12', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/Untitled-design-6-1024x684.jpg', NULL, NULL, NULL, NULL, '2024-06-04 09:28:44', '2024-06-04 09:28:44');
INSERT INTO `blogs` (`id`, `active`, `slung`, `company_id`, `type`, `podcast_url`, `video_url`, `title`, `tags`, `video`, `meta`, `content`, `author`, `category`, `image_one`, `whitepaper_file`, `image_two`, `image_three`, `image_four`, `created_at`, `updated_at`) VALUES
(23, 1, 'how-to-improve-pharma-through-africa-pooled-procurement-mechanism', 0, 'Whitepapers/Application Notes', NULL, NULL, 'How To Improve Pharma Through Africa Pooled Procurement Mechanism', NULL, NULL, 'Africa Pooled Procurement Mechanism is a strategy poised to help improve affordability and accessibility of life saving medical products.', '<p>The African Pooled Procurement Mechanism</p>\r\n\r\n<p>In February 2024, during the African Union (AU) Summit in Addis Ababa, a landmark&nbsp;<a href=\"https://africacdc.org/news-item/africa-cdc-spearheads-bold-move-to-secure-africas-health-future-by-creating-a-50-billion-dollar-medical-market/\" target=\"_blank\">decision</a>&nbsp;was made to establish an Africa Pooled Procurement Mechanism overseen by the Africa Centers for Disease Control and Prevention (Africa CDC).</p>\r\n\r\n<p>This initiative aims to streamline the procurement of pharmaceuticals across the continent, leveraging collective bargaining power to improve access and affordability.</p>\r\n\r\n<p>A few months later, in Mombasa, Kenya, African ministers&nbsp;<a href=\"https://www.uneca.org/stories/an-african-pooled-procurement-mechanism-will-enhance-quality-and-safe-medical-supplies-for-a#:~:text=The%20goal%20of%20operationalizing%20pooled,job%20and%20transform%20African%20economies.\" target=\"_blank\">convened</a>&nbsp;to synchronize the operationalization of the AfCFTA-anchored Pharmaceutical Initiative with the initial phase of the African Pooled Procurement Mechanism.</p>\r\n\r\n<p>This coordination marks a significant step towards addressing Africa&rsquo;s critical pharmaceutical needs.</p>\r\n\r\n<hr />\r\n<p>Addressing Africa&rsquo;s Pharmaceutical Challenges</p>\r\n\r\n<p>Africa endures a disproportionately high disease burden yet continues to rely heavily on foreign imports for its pharmaceutical needs.</p>\r\n\r\n<p>This dependency has led to persistent issues such as limited accessibility, high costs, and frequent shortages of essential medicines. Furthermore, the prevalence of substandard and falsified drugs has made the situation worse.</p>\r\n\r\n<p>While there has been a concerted effort to boost local pharmaceutical production, questions about feasibility remain a significant obstacle.</p>\r\n\r\n<p>The primary argument for local production is the potential cost savings from reduced transportation expenses and customs fees.</p>\r\n\r\n<p>However, as noted by Warren Kaplan and Richard Laing in their paper &ldquo;Local Production of Pharmaceuticals,&rdquo; if a developing country imports active pharmaceutical ingredients (APIs) at high costs, local production may not lead to significantly lower prices for the end products.</p>\r\n\r\n<p>Thus, merely shifting to local production without addressing the cost of raw materials might not improve access to affordable medicines.</p>\r\n\r\n<hr />\r\n<p>Benefits of Pooled Procurement</p>\r\n\r\n<p>Pooled procurement offers several significant benefits for African countries in their quest to improve access to affordable and high-quality medicines:</p>\r\n\r\n<p>1.&nbsp;<strong>Increased Purchasing Power:&nbsp;</strong>By consolidating demand, pooled procurement enhances the collective purchasing power of participating countries. This leverage enables them to negotiate better terms and conditions in supply agreements, potentially lowering the cost of medicines.</p>\r\n\r\n<p>2.&nbsp;<strong>Cost Savings:&nbsp;</strong>Economies of scale achieved through pooled procurement can lead to substantial savings. These savings come from reduced unit costs, lower procurement expenses, and decreased overheads in the supply chain and administrative operations.</p>\r\n\r\n<p>3.&nbsp;<strong>Improved Accessibility:</strong>&nbsp;Smaller countries that struggle to meet high minimum order requirements can benefit from pooled procurement. By aggregating their orders with those of other countries, they can access a broader range of medicines, ensuring that no country is left out due to insufficient order volumes.</p>\r\n\r\n<p>4.&nbsp;<strong>Quality Assurance:</strong>&nbsp;Consolidation of procurement processes helps maintain high product quality standards. It also fosters local production investment by providing vendors with volume guarantees, encouraging them to invest in local manufacturing facilities.</p>\r\n\r\n<p>By leveraging these benefits, the pooled procurement mechanism can play a crucial role in enhancing the efficiency, affordability, and reliability of the pharmaceutical supply chain across Africa.</p>\r\n\r\n<hr />\r\n<p><strong>RELATED:</strong>&nbsp;<a href=\"https://www.africanpharmaceuticalreview.com/how-to-improve-feasibility-of-local-pharma-manufacturing-in-africa/\">How to improve feasibility of local pharma manufacturing in Africa (africanpharmaceuticalreview.com)</a></p>\r\n\r\n<hr />\r\n<p>Ensuring Success Of Pooled Procurement in Africa</p>\r\n\r\n<p>Implementing pooled procurement in Africa involves several key steps to ensure success and sustainability. Here are the crucial areas of focus:</p>\r\n\r\n<p>Regulatory and Formulary Harmonization</p>\r\n\r\n<p>To effectively navigate pooled procurement across the continent, a consistent regulatory framework among participating countries is essential.</p>\r\n\r\n<p>Harmonization of standards, guidelines, and procedures for handling and distributing medical products is crucial. This alignment will eliminate bottlenecks in the registration process, pharmacovigilance, and post-market surveillance.</p>\r\n\r\n<p>As of 2024, several African countries still lack autonomous national medicines regulatory authorities overseeing the regulation of health products and technologies.</p>\r\n\r\n<p>Establishing these authorities and aligning their structures is vital.</p>\r\n\r\n<p>The African Medicines Agency (AMA) is making progress in this area, aiming to create a unified regulatory environment for pharmaceutical sector development in Africa.</p>\r\n\r\n<p>With 29 out of 55 AU countries having ratified the Treaty, there is optimism that harmonization will pave the way for successful pooled procurement.</p>\r\n\r\n<p>Health Policy Alignment</p>\r\n\r\n<p>Aligning national formularies, essential medicines lists, and standard treatment guidelines across countries is critical for successful pooled procurement.</p>\r\n\r\n<p>Consistent health policies will ensure that the demand for medicines is harmonized, preventing discrepancies in the management of the same diseases across different nations.</p>\r\n\r\n<p>Political Goodwill</p>\r\n\r\n<p>Achieving pooled procurement requires strong political support. Top leadership and relevant ministries across African countries must collaborate and commit to this strategy. Political goodwill is essential to create the necessary efficiency and reap the intended benefits promptly.</p>\r\n\r\n<p>Foreign Partnerships</p>\r\n\r\n<p>Forming partnerships with regions that have mature pharmaceutical sectors can provide valuable insights and resources. For example, India has demonstrated its capability to consolidate resources and produce medicines for both domestic use and global export.</p>\r\n\r\n<p>Partnering with such regions can help Africa develop effective pharmaceutical procurement strategies.</p>\r\n\r\n<p>Regional Hubs and Increased Production Capacity</p>\r\n\r\n<p>For pooled procurement of active pharmaceutical ingredients (APIs) targeted for local production, it is more sustainable to establish regional manufacturing hubs rather than individual country-level production.</p>\r\n\r\n<p>This approach ensures optimal production utilization and increases the capacity of manufacturing plants. Regional hubs can serve specific pharmaceutical market needs, fostering a more efficient and scalable production system.</p>\r\n\r\n<p>Infrastructural Upgrades</p>\r\n\r\n<p>Efficient movement of consignments across countries requires upgraded infrastructure.</p>\r\n\r\n<p>Enhancing connectivity through improved transportation networks and upgrading warehousing capabilities to accommodate pharmaceuticals, including those needing specific temperature and humidity controls, is crucial for the success of pooled procurement.</p>\r\n\r\n<p>Creating Transparency and Visibility</p>\r\n\r\n<p>Supply chain optimization requires visibility across the procurement process. Leveraging technology to create a procurement and inventory management platform will enhance transparency within the procurement pool.</p>\r\n\r\n<p>Understanding which countries are ordering which items and in what quantities is essential to prevent overstocking and ensure equitable distribution of medicines.</p>\r\n\r\n<hr />\r\n<p>Conclusion</p>\r\n\r\n<p>Implementing pooled procurement in Africa is a multifaceted process that involves regulatory harmonization, health policy alignment, political support, strategic partnerships, regional production hubs, infrastructural upgrades, and enhanced transparency.</p>\r\n\r\n<p>While not a panacea, pooled procurement, combined with other strategic efforts, holds significant promise for improving Africa&rsquo;s pharmaceutical sector.</p>\r\n\r\n<p>Political will and a collaborative spirit are crucial to overcoming the challenges and realizing the benefits of this initiative, ultimately providing high-quality, safe, and affordable medicines to patients across the continent.</p>\r\n\r\n<p>Did you find this informative?&nbsp;<a href=\"https://subscribers.africanpharmaceuticalreview.com/public/login\" target=\"_blank\">Subscribe</a>&nbsp;now for more.</p>', '2', '15', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/Africa.jpg', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/whitepapers/INV000003 (1).pdf', NULL, NULL, NULL, '2024-06-07 05:34:08', '2024-06-07 05:34:08'),
(24, 1, 'epr-podcast-24-developing-modifier-gene-therapy-ocugen', 0, 'Podcasts', 'https://www.europeanpharmaceuticalreview.com/?powerpress_pinw=229361-podcast', 'https://www.europeanpharmaceuticalreview.com/?powerpress_pinw=229361-podcast', 'EPR Podcast 24 – Developing modifier gene therapy – Ocugen', NULL, NULL, 'In this podcast, Dr Neena Haider, Faculty at Harvard Medical School and Dr Arun Upadhyay, Chief Scientific Officer at Ocugen, discuss the development of modifier gene therapy for ocular diseases.', '<p>Ocugen is utilising the modifier gene therapy technology approach to treat retinal diseases. The therapy can be used to treat both inherited disorders, such as retinitis pigmentosa (RP), Leber congenital amaurosis, and Stargardt disease, but also multifactorial diseases like dry age-related macular degeneration and angiographic atrophy.</p>\r\n\r\n<p>The company&rsquo;s lead candidate in modifier gene therapy, OCU400, is in Phase III trials for treatment of RP and Phase I/II for treatment of Leber congenital amaurosis.</p>\r\n\r\n<p>In this episode, Dr Neena Haider, Faculty member at Harvard Medical School and founder of biotech company Shifa Precision and Dr Arun Upadhyay CSO of Ocugen discuss the development of modifier gene therapy.</p>\r\n\r\n<h2>What is a modifier gene therapy?</h2>\r\n\r\n<p>Neena starts by discussing the complexity of retinal diseases where multiple genes are involved.</p>\r\n\r\n<p>About two to 3,000 genes &ndash; so about 10 percent of the genes in the genome &ndash; are involved in helping us see, Neena explains. &ldquo;If there are mutations&hellip; in any one of these, it impacts how the retina functions.&rdquo;</p>\r\n\r\n<p>Modifier genes&hellip; have been identified and used to suppress or treat or attenuate disease.&rdquo;</p>\r\n\r\n<p>&ldquo;If we look at retinitis pigmentosa, it&rsquo;s known as a rare disease &ndash; affecting one in 4,000. However, there&rsquo;s over 200 different roadmaps to get to this disease, meaning either different mutations in known genes or hundreds of different genes,&rdquo; Neena says.</p>\r\n\r\n<p>Modifier genes, which are &ldquo;normal genes that modulate clinical outcomes by interacting with disease-causing genes,&rdquo; have been identified and used to suppress or treat or attenuate disease.</p>\r\n\r\n<p>Arun and Neena discuss the benefits and challenges of the modifier gene therapy approach, including the manufacturing considerations.&nbsp;</p>\r\n\r\n<h2>Future trends in gene therapy&nbsp;</h2>\r\n\r\n<p>The speakers also share their predictions for the gene therapy space. They anticipate a trend towards more gene agnostic approaches, combination therapeutics and alternative delivery technologies.</p>\r\n\r\n<p>&ldquo;What I see is the gene therapy approach is going to expand into the non-genetic area, primarily focused on metabolic disorders, neurological disorders, and other chronic disorders,&rdquo; says Arun.</p>\r\n\r\n<p>Neena adds: &ldquo;We have already started on [an] upward trend. What I predict is that [the gene therapy] space is going to really explode in the most fascinating way &hellip; so we&rsquo;re going to see better, more effective and sustained therapeutics.&rdquo;</p>', '2', '14', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/shutterstock_2467208125-400x187.jpg', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/whitepapers/shutterstock_2467208125-400x187.jpg', NULL, NULL, NULL, '2024-06-07 09:54:08', '2024-06-07 09:54:08'),
(25, 1, 'epr-podcast-23-inspiring-inclusion-in-pharma-kylie-bromley-biogen', 0, 'Podcasts', 'https://www.europeanpharmaceuticalreview.com/podcasts/epr-podcast-25-fair-data-in-pharma-giovanni-nisato-pistoia-alliance/', NULL, 'EPR Podcast 23 – Inspiring inclusion in pharma – Kylie Bromley, Biogen', NULL, NULL, 'In this podcast, Giovanni Nisato, Project Manager at the Pistoia Alliance discusses data integrity and the progress towards implementation of FAIR data principles in the pharmaceutical industry.', '<p>In this podcast, Giovanni Nisato, project manager at the Pistoia Alliance discusses data integrity and the FAIR data principles. In this role, he&nbsp;coordinates FAIR Community of Experts, which created the FAIR Maturity Matrix.</p>\r\n\r\n<p>Giovanni starts the conversation by defining&nbsp;<a href=\"https://www.europeanpharmaceuticalreview.com/topic/data-integrity/\" target=\"_blank\">data integrity</a>&nbsp;and explaining why it is &lsquo;mission critical&rsquo; for the pharmaceutical industry.&nbsp;</p>\r\n\r\n<p>Next, the podcast introduces FAIR (Findable, Accessible, Interoperable, Reusable) data principles and explores how their adoption have evolved over the past decade.</p>\r\n\r\n<p>&ldquo;This year we celebrated the 10-year anniversary of the first workshop where those FAIR data principles were reformulated. And they were then published in 2016,&rdquo; Giovanni says.</p>\r\n\r\n<p>Since then, the pharmaceutical industry has seen a &ldquo;move towards data centricity as a way of thinking.&rdquo; But adoption of the FAIR data principles is not mainstream yet.&nbsp;</p>\r\n\r\n<h2>Adoption of FAIR data principles</h2>\r\n\r\n<p>Additionally, while the principles are increasingly recognised in academia and R&amp;D, their implementation in the clinical domain is lagging behind.</p>\r\n\r\n<p>While the principles are increasingly recognised in academia and R&amp;D, their implementation in the clinical domain is lagging behind&rdquo;</p>\r\n\r\n<p>&ldquo;I would say that the implementation of FAIR data principles is perhaps starting, but there&rsquo;s a lot of room for improvement in the clinical space,&rdquo; Giovanni reflects.</p>\r\n\r\n<p>This is one area the Alliance has focused on, producing the&nbsp;<a href=\"http://fair4clin.pistoiaalliance.org/\" target=\"_blank\">FAIR4Clin</a>&nbsp;guide that gives a comprehensive overview on FAIR resources in the clinical domain.</p>\r\n\r\n<p>Giovanni also explains the&nbsp;FAIR Maturity Matrix, a framework developed to help organisations benchmark and assess their systemic level of FAIR maturity. The&nbsp;<a href=\"http://fairmm.pistoiaalliance.org/\">FAIR Maturity Matrix</a>&nbsp;was co-created by&nbsp;members of the FAIR Community of Experts of the Pistoia Alliance. Giovanni presents seven key dimensions that make up the matrix: data, leadership, strategy, roles, processes, knowledge, and tools. He also introduces the six maturity levels of the framework.</p>\r\n\r\n<p>Finally, Giovanni looks ahead, outlining two priorities that are needed to accelerate adoption of FAIR data principles in the industry.</p>', '2', '10', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/shutterstock_1022645374-400x187.jpg', NULL, NULL, NULL, NULL, '2024-06-07 10:17:02', '2024-06-07 10:17:02'),
(26, 1, 'eprs-podcast-24-developing-modifier-gene-therapy-ocugen', 0, 'Podcasts', 'https://www.europeanpharmaceuticalreview.com/?powerpress_pinw=229361-podcast', 'https://www.europeanpharmaceuticalreview.com/?powerpress_pinw=229361-podcast', 'EPRS Podcast 24 – Developing modifier gene therapy – Ocugen', NULL, NULL, 'In this podcast, Dr Neena Haider, Faculty at Harvard Medical School and Dr Arun Upadhyay, Chief Scientific Officer at Ocugen, discuss the development of modifier gene therapy for ocular diseases.', '<p>Ocugen is utilising the modifier gene therapy technology approach to treat retinal diseases. The therapy can be used to treat both inherited disorders, such as retinitis pigmentosa (RP), Leber congenital amaurosis, and Stargardt disease, but also multifactorial diseases like dry age-related macular degeneration and angiographic atrophy.</p>\r\n\r\n<p>The company&rsquo;s lead candidate in modifier gene therapy, OCU400, is in Phase III trials for treatment of RP and Phase I/II for treatment of Leber congenital amaurosis.</p>\r\n\r\n<p>In this episode, Dr Neena Haider, Faculty member at Harvard Medical School and founder of biotech company Shifa Precision and Dr Arun Upadhyay CSO of Ocugen discuss the development of modifier gene therapy.</p>\r\n\r\n<h2>What is a modifier gene therapy?</h2>\r\n\r\n<p>Neena starts by discussing the complexity of retinal diseases where multiple genes are involved.</p>\r\n\r\n<p>About two to 3,000 genes &ndash; so about 10 percent of the genes in the genome &ndash; are involved in helping us see, Neena explains. &ldquo;If there are mutations&hellip; in any one of these, it impacts how the retina functions.&rdquo;</p>\r\n\r\n<p>Modifier genes&hellip; have been identified and used to suppress or treat or attenuate disease.&rdquo;</p>\r\n\r\n<p>&ldquo;If we look at retinitis pigmentosa, it&rsquo;s known as a rare disease &ndash; affecting one in 4,000. However, there&rsquo;s over 200 different roadmaps to get to this disease, meaning either different mutations in known genes or hundreds of different genes,&rdquo; Neena says.</p>\r\n\r\n<p>Modifier genes, which are &ldquo;normal genes that modulate clinical outcomes by interacting with disease-causing genes,&rdquo; have been identified and used to suppress or treat or attenuate disease.</p>\r\n\r\n<p>Arun and Neena discuss the benefits and challenges of the modifier gene therapy approach, including the manufacturing considerations.&nbsp;</p>\r\n\r\n<h2>Future trends in gene therapy&nbsp;</h2>\r\n\r\n<p>The speakers also share their predictions for the gene therapy space. They anticipate a trend towards more gene agnostic approaches, combination therapeutics and alternative delivery technologies.</p>\r\n\r\n<p>&ldquo;What I see is the gene therapy approach is going to expand into the non-genetic area, primarily focused on metabolic disorders, neurological disorders, and other chronic disorders,&rdquo; says Arun.</p>\r\n\r\n<p>Neena adds: &ldquo;We have already started on [an] upward trend. What I predict is that [the gene therapy] space is going to really explode in the most fascinating way &hellip; so we&rsquo;re going to see better, more effective and sustained therapeutics.&rdquo;</p>', '2', '14', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/shutterstock_2467208125-400x187.jpg', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/whitepapers/shutterstock_2467208125-400x187.jpg', NULL, NULL, NULL, '2024-06-07 09:54:08', '2024-06-07 09:54:08'),
(27, 1, 'eprs-podcast-23-inspiring-inclusion-in-pharma-kylie-bromley-biogen', 0, 'Podcasts', 'https://www.europeanpharmaceuticalreview.com/podcasts/epr-podcast-25-fair-data-in-pharma-giovanni-nisato-pistoia-alliance/', NULL, 'EPRW Podcast 23 – Inspiring inclusion in pharma – Kylie Bromley, Biogen', NULL, NULL, 'In this podcast, Giovanni Nisato, Project Manager at the Pistoia Alliance discusses data integrity and the progress towards implementation of FAIR data principles in the pharmaceutical industry.', '<p>In this podcast, Giovanni Nisato, project manager at the Pistoia Alliance discusses data integrity and the FAIR data principles. In this role, he&nbsp;coordinates FAIR Community of Experts, which created the FAIR Maturity Matrix.</p>\r\n\r\n<p>Giovanni starts the conversation by defining&nbsp;<a href=\"https://www.europeanpharmaceuticalreview.com/topic/data-integrity/\" target=\"_blank\">data integrity</a>&nbsp;and explaining why it is &lsquo;mission critical&rsquo; for the pharmaceutical industry.&nbsp;</p>\r\n\r\n<p>Next, the podcast introduces FAIR (Findable, Accessible, Interoperable, Reusable) data principles and explores how their adoption have evolved over the past decade.</p>\r\n\r\n<p>&ldquo;This year we celebrated the 10-year anniversary of the first workshop where those FAIR data principles were reformulated. And they were then published in 2016,&rdquo; Giovanni says.</p>\r\n\r\n<p>Since then, the pharmaceutical industry has seen a &ldquo;move towards data centricity as a way of thinking.&rdquo; But adoption of the FAIR data principles is not mainstream yet.&nbsp;</p>\r\n\r\n<h2>Adoption of FAIR data principles</h2>\r\n\r\n<p>Additionally, while the principles are increasingly recognised in academia and R&amp;D, their implementation in the clinical domain is lagging behind.</p>\r\n\r\n<p>While the principles are increasingly recognised in academia and R&amp;D, their implementation in the clinical domain is lagging behind&rdquo;</p>\r\n\r\n<p>&ldquo;I would say that the implementation of FAIR data principles is perhaps starting, but there&rsquo;s a lot of room for improvement in the clinical space,&rdquo; Giovanni reflects.</p>\r\n\r\n<p>This is one area the Alliance has focused on, producing the&nbsp;<a href=\"http://fair4clin.pistoiaalliance.org/\" target=\"_blank\">FAIR4Clin</a>&nbsp;guide that gives a comprehensive overview on FAIR resources in the clinical domain.</p>\r\n\r\n<p>Giovanni also explains the&nbsp;FAIR Maturity Matrix, a framework developed to help organisations benchmark and assess their systemic level of FAIR maturity. The&nbsp;<a href=\"http://fairmm.pistoiaalliance.org/\">FAIR Maturity Matrix</a>&nbsp;was co-created by&nbsp;members of the FAIR Community of Experts of the Pistoia Alliance. Giovanni presents seven key dimensions that make up the matrix: data, leadership, strategy, roles, processes, knowledge, and tools. He also introduces the six maturity levels of the framework.</p>\r\n\r\n<p>Finally, Giovanni looks ahead, outlining two priorities that are needed to accelerate adoption of FAIR data principles in the industry.</p>', '2', '10', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/shutterstock_1022645374-400x187.jpg', NULL, NULL, NULL, NULL, '2024-06-07 10:17:02', '2024-06-07 10:17:02'),
(28, 1, 'epr-podcast-22-pharmaceutical-packaging-manu-kittanakere-gilead', 0, 'Podcasts', 'https://www.learningcontainer.com/wp-content/uploads/2020/02/Kalimba.mp3', NULL, 'EPR Podcast 22 – Pharmaceutical packaging – Manu Kittanakere, Gilead', NULL, NULL, 'In this podcast, Manu Kittanakere, Associate Director of Packaging Engineering at Gilead discusses the future of pharmaceutical packaging, including the growing importance of AI, automation and sustainability in packaging engineering.', '<p>In this episode,&nbsp;<em>Caroline</em>&nbsp;speaks to Manu Kittanakere, Associate Director of Packaging Engineering at Gilead, about the pharmaceutical packaging landscape. Manu reflects on the changes he has witnessed in pharmaceutical packaging over his 17-year career.</p>\r\n\r\n<p>&ldquo;There is a lot of dynamic change happening with supply chain regulations, which has a direct impact on packaging,&rdquo; Manu says.</p>\r\n\r\n<p>He also explains how pharmaceutical packaging sector has evolved significantly over that period, with the growth of contract manufacturing/packaging organisations and an increased emphasis on sustainability, automation, and innovation.</p>\r\n\r\n<h2>Pharmaceutical packaging: the landscape and challenges today</h2>\r\n\r\n<p>Packaging plays a crucial role in preserving medications and ensuring patient adherence. Manu speaks about a range of packaging options on the&nbsp;<a href=\"https://www.europeanpharmaceuticalreview.com/news/187941/europes-pharmaceutical-packaging-market-to-value-over-35-billion-by-2028/\" target=\"_blank\">market</a>, including the use of bottles, blister packs, vials, and pre-filled syringes/autoinjectors.</p>\r\n\r\n<p>In the oral solid dose (OSD) space, the bulk of pharmaceuticals rely on HDPE bottles or blister packaging&rdquo;</p>\r\n\r\n<p>In the oral solid dose (OSD) space, the bulk of pharmaceuticals rely on HDPE bottles or blister packaging. However, regional and company preferences do vary.</p>\r\n\r\n<p>&ldquo;What I have observed is that&hellip;in the US, bottles are preferred compared to blisters. But in Europe and Japan, blisters are preferred,&rdquo; Manu says.</p>\r\n\r\n<p>&ldquo;Vial kits, pre-filled syringes and auto injectors are also gaining a lot of traction with biologics being one of the main focuses in the coming years,&rdquo; he adds.</p>\r\n\r\n<p>Finally, there have been advancements in the cold chain packaging to meet the needs of cell and gene therapies and other biologics.</p>\r\n\r\n<h2>Sustainability: a focus for 2024 and beyond</h2>\r\n\r\n<p>Looking to the future, Manu predicts that sustainability will be a major focus in the pharmaceutical industry in 2024.</p>\r\n\r\n<p>Additionally, packaging developers and engineers will increasingly leverage virtual simulation and smart software to support packaging design.</p>\r\n\r\n<p>Looking further ahead, Manu projects innovations in desiccants, materials, and smart packaging. Listen to the full podcast to find out more!</p>', '2', '15', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/shutterstock_2351693121-200x134.jpg', NULL, NULL, NULL, NULL, '2024-06-07 10:23:27', '2024-06-07 10:23:27'),
(29, 1, 'counterfeit-medicines-3-ways-africa-can-win-the-fight-ii', 0, 'Podcasts', NULL, NULL, 'Counterfeit Medicines : 3 Ways Africa Can Win The Fight (II)', NULL, NULL, 'Counterfeit Medicines are a pervasive global challenge with Africa showing huge vulnerabilities that make it an easy prey for those involved.', '<p>The&nbsp;<a href=\"https://www.who.int/news-room/fact-sheets/detail/substandard-and-falsified-medical-products\" target=\"_blank\">World Health Organization</a>&nbsp;(WHO) defines falsified or counterfeit medicines as those that deliberately or fraudulently misrepresent their identity, composition or source.</p>\r\n\r\n<p>These are products that have been formulated and developed by entities other than the genuine manufacturers, attempting to mimic the original product without the requisite rights or authority.</p>\r\n\r\n<p>In terms of composition, these medicines may contain no active pharmaceutical ingredient (API), the incorrect API or incorrect amount of API, often substituting this with inert substances like chalk, potato starch or corn starch.</p>\r\n\r\n<p>The Challenge of Falsified Medicines</p>\r\n\r\n<p>Falsified medicines are a pervasive global challenge, significantly impacting low- and middle-income countries, including those in Africa. It is estimated that 10% of medical products in these regions are either substandard or falsified.</p>\r\n\r\n<p>Despite substantial investments in combating counterfeit medical products, this issue persists due to the lucrative nature of the counterfeit medicine market.</p>\r\n\r\n<p>Falsified medicines are a $200 billion industry, accounting for the largest portion of the $1.7 trillion in fraudulent goods traded globally every year.</p>\r\n\r\n<p><strong>Ramifications of Counterfeit Medicine</strong>s</p>\r\n\r\n<p>Passing counterfeit medicines as authentic may have far-reaching implications affecting various stakeholders:</p>\r\n\r\n<p><strong>Patients:&nbsp;</strong>The highest concern lies with patients, who may suffer from fatal adverse drug reactions, treatment failures, prolonged hospital stays, antimicrobial resistance, increased healthcare costs, and even death. For instance, it is estimated that 450,000 people die annually from malaria due to falsified antimalarial medicines.</p>\r\n\r\n<p><strong>Authentic companies:&nbsp;</strong>Legitimate pharmaceutical companies face undue competition, losing revenue to counterfeit products and suffering brand damage. The fear of counterfeit medicines can deter patients from using genuine products, compelling companies to invest heavily in product authentication measures.</p>\r\n\r\n<p><strong>Healthcare providers and regulatory authorities:</strong>&nbsp;The prevalence of counterfeit medicines can erode trust in healthcare providers and regulatory authorities, questioning their ability to ensure the quality, safety and efficacy of medical products.</p>\r\n\r\n<p><strong>Countries:</strong>&nbsp;Nations dealing with the influx of counterfeit medicines may suffer reputational damage affecting their standing in the global community.</p>\r\n\r\n<hr />\r\n<p><strong>RELATED</strong>:&nbsp;<a href=\"https://www.africanpharmaceuticalreview.com/counterfeit-medicines-3-ways-africa-can-win-the-fight/\">Counterfeit medicines: 3 ways Africa can win the fight (africanpharmaceuticalreview.com)</a></p>\r\n\r\n<hr />\r\n<p>Why Africa is Particularly Vulnerable</p>\r\n\r\n<p>Corruption and porous borders</p>\r\n\r\n<p>A significant portion of pharmaceutical products in Africa is imported.</p>\r\n\r\n<p>And so are counterfeit medicines.</p>\r\n\r\n<p>Although many African countries have stringent laws and policies for importing medical products, these measures often fail in practice. Corruption and weak border controls allow counterfeit medicines to enter the market unchecked.</p>\r\n\r\n<p>High poverty rates</p>\r\n\r\n<p>Africa has the highest poverty rate globally, with an estimated 35.5% of the population living on less than $1.90 a day. Limited financial resources make it difficult for many to access proper healthcare, leading them to purchase cheaper, unregulated medicines from informal sources. These unverified sources are often counterfeit.</p>\r\n\r\n<p>Ineffective National Regulatory Authorities (NRAs)</p>\r\n\r\n<p>Approximately, one-third of countries worldwide lack effective drug regulatory authorities, and many African nations fall into this category. Some countries don&rsquo;t have dedicated national drug agencies, while others have regulatory bodies that lack autonomy, adequate financing, infrastructure, and human resources.</p>\r\n\r\n<p>These shortcomings make it challenging to combat counterfeit medicines effectively.</p>\r\n\r\n<p>Strategies to fight against counterfeit medicines</p>\r\n\r\n<p>Outsourcing supply chain monitoring systems</p>\r\n\r\n<p>Implementing advanced track-and-trace technology can significantly reduce the prevalence of counterfeit medicines.</p>\r\n\r\n<p>However, the high initial cost deters many manufacturers.</p>\r\n\r\n<p>Outsourcing this function to specialized companies can provide access to the latest technology without the need for substantial capital investment. These companies can develop new-generation taggants, unique identifiers, and encrypted data that can be authenticated by distributors or consumers through scanners and mobile applications.</p>\r\n\r\n<p>Coordination between regulatory authorities</p>\r\n\r\n<p>Strengthening national regulatory authorities is crucial, but collaboration among African countries is equally important.</p>\r\n\r\n<p>By pooling resources, sharing information, and enhancing post-market surveillance, African nations can present a united front against counterfeit medicines. Cooperative efforts can make it more challenging for counterfeiters to navigate through multiple countries&rsquo; borders and regulatory systems.</p>\r\n\r\n<p>Establishing more WHO-prequalified quality control laboratories can aid in the detection and prevention of counterfeit medicines.</p>\r\n\r\n<p>Empower the consumers</p>\r\n\r\n<p>Consumers must be educated about the dangers of counterfeit medicines.</p>\r\n\r\n<p>Anti-counterfeiting strategies often focus on manufacturers, distributors, and regulatory authorities, overlooking the critical role of consumers.</p>\r\n\r\n<p>Education programs should be designed to help consumers recognize, detect, and report counterfeit medicines. Leveraging platforms like social media and mobile technology (e.g., apps and USSD codes) can facilitate consumer engagement in monitoring and reporting counterfeit products.</p>\r\n\r\n<hr />\r\n<p>Conclusion</p>\r\n\r\n<p>Counterfeit medicines remain a huge challenge In Africa and the world at large.</p>\r\n\r\n<p>The continent is extremely vulnerable to these medicines and the nature of the consequences are too devastating to turn a blind eye on.</p>\r\n\r\n<p>Through initiatives such as regulatory harmonization, Africa is well placed to improve on its systemic issues that make it and an easy target for those engaging in the practice.</p>\r\n\r\n<p>And through strategies like empowering consumers, increased coordination between African regulatory authorities and outsourcing supply chain monitoring systems, the continent can make significant strides in combating the scourge of falsified medicines, ensuring safer healthcare outcomes for all.</p>\r\n\r\n<hr />\r\n<p>Did you find this informative?&nbsp;<a href=\"https://subscribers.africanpharmaceuticalreview.com/public/login\" target=\"_blank\">Subscribe</a>&nbsp;for more.</p>', '3', '13', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/blogs/Untitled-design-17-870x570.jpg', NULL, NULL, NULL, NULL, '2024-06-13 15:01:29', '2024-06-13 15:01:29');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thicknesses` text COLLATE utf8mb4_unicode_ci,
  `a_c_ratings` text COLLATE utf8mb4_unicode_ci,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `name`, `thicknesses`, `a_c_ratings`, `meta`, `slung`, `content`, `image`, `created_at`, `updated_at`) VALUES
(5, 'QA/QC', NULL, NULL, NULL, 'QA/QC', 'qaqc', '<p>QA/QC</p>', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/categories/qa-vs-qc.webp', '2024-03-27 06:14:59', '2024-03-27 06:14:59'),
(6, 'R&D', NULL, NULL, NULL, 'R&D', 'rd', '<p>R&amp;D</p>', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/categories/RD.jpg', '2024-03-27 06:18:20', '2024-03-27 06:18:20'),
(7, 'Supply Chain', NULL, NULL, NULL, 'Supply Chain', 'supply-chain', '<p>Supply Chain</p>', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/categories/78805a221a988e79ef3f42d7c5bfd418-7-700x709.webp', '2024-03-27 06:19:17', '2024-03-27 06:19:17'),
(8, 'Digitalization', NULL, NULL, NULL, 'Digitalization,', 'digitalization', '<p>Digitalization,&nbsp;</p>', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/categories/sustainability-11-02204-g001.webp', '2024-03-27 06:22:27', '2024-03-27 06:22:27'),
(9, 'Analytical Techniques', NULL, NULL, NULL, 'Analytical Techniques', 'analytical-techniques', '<p>Analytical Techniques</p>', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/categories/regis_analytical-methods.png', '2024-03-27 06:24:12', '2024-03-27 06:24:12'),
(10, 'Manufacturing', NULL, NULL, NULL, 'Manufacturing', 'manufacturing', '<p>Manufacturing</p>', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/categories/istockphoto-1352428937-612x612.jpg', '2024-03-27 06:24:58', '2024-03-27 06:24:58'),
(11, 'Regulatory affairs', NULL, NULL, NULL, 'Regulatory affairs', 'regulatory-affairs', '<p>Regulatory affairs</p>', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/categories/AdobeStock_265419142_1920x900-scaled-N°-37-scaled.jpg', '2024-03-27 06:26:54', '2024-03-27 06:26:54'),
(12, 'Biopharma', NULL, NULL, NULL, 'Biopharma', 'biopharma', '<p>Biopharma</p>', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/categories/BioPharma.jpg', '2024-03-27 06:28:48', '2024-03-27 06:28:48'),
(13, 'Drug delivery', NULL, NULL, NULL, 'Drug delivery', 'drug-delivery', '<p>Drug delivery</p>', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/categories/Pharma_logistics.jpg', '2024-03-27 06:42:16', '2024-03-27 06:42:16'),
(14, 'Formulation', NULL, NULL, NULL, 'Formulation', 'formulation', '<p>Formulation</p>', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/categories/Pharma_logistics.jpg', '2024-03-27 06:43:07', '2024-03-27 06:43:07'),
(15, 'Vaccines', NULL, NULL, NULL, 'Vaccines', 'vaccines', '<p>Vaccines</p>', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/categories/vaccines.tmb-1200v.jpg', '2024-03-27 06:43:55', '2024-03-27 06:43:55'),
(16, 'Microbiology', NULL, NULL, NULL, 'Microbiology', 'microbiology', '<p>Microbiology</p>', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/categories/istock-507526558_pathogen-plates.jpg', '2024-03-27 06:46:28', '2024-03-27 06:46:28'),
(17, 'AI', NULL, NULL, NULL, 'AI', 'ai', '<p>AI</p>', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/categories/Ai-in-pharma--1600x900.jpg', '2024-03-27 06:47:23', '2024-03-27 06:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `title`, `tagline`, `slung`, `user_id`, `address`, `email`, `mobile`, `website`, `facebook`, `linkedin`, `twitter`, `instagram`, `image`, `logo`, `favicon`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Designekta Studios', '', 'designekta-studios', NULL, 'Chalbi', 'info@designekta.com', '0723014032', 'https://designekta.com', 'https://www.facebook.com/', 'https://www.linkedin.com/', 'https://www.x.com/', 'https://www.instagram.com/', '0', 'Flag_of_Kenya-64x43.png', '', '<p>\n                                At Entegris, our 50+ years of proven materials science experience in the most demanding industries allows us to easily become a strategic partner by applying our expertise to develop the cleanest, most scalable, and most reliable solutions to reduce your validation time, development costs, and time to market.\n                                <br><br>\n                                We combine product innovation with quick-turn customisation to deliver critical answers for your upstream and downstream needs. Our comprehensive set of bag solutions, bioreactors, mixing systems, and microcarrier separation systems meet the emerging requirements of fast-growing, single-use bioprocessing applications.\n                                <br><br>\n                                For biopharmaceutical, pharmaceutical and CDMOs, we are playing a supporting but crucial role in their efforts to develop and manufacture vaccine therapies for COVID-19.   We are committed to remaining a strong partner and as such, have dedicated ourselves to maintaining critical operations by relying on our business continuity plans and leveraging trusted supply partners.\n                          </p>', '2024-05-29 04:55:55', '2024-05-29 04:55:55'),
(2, 'Skyline Group', 'Corporate Branding beyond Africa', 'skyline-pr', NULL, '3671 Riverside Downs', 'info@skylinepublicrelations.com', '0723014032', 'https://skylinepublicrelations.com', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', '0723ff48-ed8b-4257-bb08-82d59a526326.png', 'Flag_of_Kenya-64x43.png', 'WAKAZI MOCK LOGO (1).png', '<p>\n                                At Entegris, our 50+ years of proven materials science experience in the most demanding industries allows us to easily become a strategic partner by applying our expertise to develop the cleanest, most scalable, and most reliable solutions to reduce your validation time, development costs, and time to market.\n                                <br><br>\n                                We combine product innovation with quick-turn customisation to deliver critical answers for your upstream and downstream needs. Our comprehensive set of bag solutions, bioreactors, mixing systems, and microcarrier separation systems meet the emerging requirements of fast-growing, single-use bioprocessing applications.\n                                <br><br>\n                                For biopharmaceutical, pharmaceutical and CDMOs, we are playing a supporting but crucial role in their efforts to develop and manufacture vaccine therapies for COVID-19.   We are committed to remaining a strong partner and as such, have dedicated ourselves to maintaining critical operations by relying on our business continuity plans and leveraging trusted supply partners.\n                          </p>', '2024-06-03 05:19:24', '2024-06-03 05:19:24');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `title`, `slung`, `image`, `created_at`, `updated_at`) VALUES
(1, 'News', 'news', NULL, NULL, NULL),
(2, 'Articles', 'articles', NULL, NULL, NULL),
(3, 'Interviews', 'interviews', NULL, NULL, NULL),
(4, 'Videos', 'videos', NULL, NULL, NULL),
(5, 'Webinars', 'webinars', NULL, NULL, NULL),
(6, 'Publications', 'publications', NULL, NULL, NULL),
(7, 'Whitepapers/Application Notes', 'white-papers-application-notes', NULL, NULL, NULL),
(8, 'Events', 'events', NULL, NULL, NULL),
(9, 'Podcasts', 'podcasts', NULL, NULL, NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_0000090000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_12_100124_create_notifications_table', 2),
(7, '2023_06_12_100124_create_activity_log_table', 3),
(8, '2023_06_12_100124_create__site_settings_table', 4),
(9, '2023_06_12_100124_create_messages_table', 5),
(10, '2023_06_12_100124_create_blogs_table', 6),
(11, '2019_02_08_105647_create_blocks_contents_tables', 7),
(12, '2021_11_12_153947_remove_blocks_contents_tables', 7),
(13, '2023_06_12_100124_create_categories_table', 7),
(14, '2024_03_19_071618_create_podcasts_table', 8),
(15, '2024_03_19_134316_create_videos_table', 9),
(16, '2024_03_25_100259_create_advertisements_tables', 10),
(17, '2024_03_25_100259_create_advertisements_table', 11),
(18, '2024_05_16_164855_create_contents_table', 12),
(19, '2014_10_12_000000_create_userss_table', 13),
(20, '2024_05_28_070506_create_companies_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `podcasts`
--

CREATE TABLE `podcasts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` int(11) NOT NULL DEFAULT '0',
  `content` text COLLATE utf8mb4_unicode_ci,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `podcasts`
--

INSERT INTO `podcasts` (`id`, `active`, `title`, `meta`, `slung`, `company_id`, `content`, `author`, `category`, `file`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'EPR Podcast Episode 21 – Biosimilars – Salim Benkhalifa, Celltrion Healthcare France', 'In this podcast, Manu Kittanakere, Associate Director of Packaging Engineering at Gilead discusses the future of pharmaceutical packaging, including the growing importance of AI, automation and sustainability in packaging engineering.', 'epr-podcast-episode-21-biosimilars-salim-benkhalifa-celltrion-healthcare-france', 0, '<p>In this episode,&nbsp;<em>Caroline</em>&nbsp;speaks to Manu Kittanakere, Associate Director of Packaging Engineering at Gilead, about the pharmaceutical packaging landscape. Manu reflects on the changes he has witnessed in pharmaceutical packaging over his 17-year career.</p>\r\n\r\n<p>&ldquo;There is a lot of dynamic change happening with supply chain regulations, which has a direct impact on packaging,&rdquo; Manu says.</p>\r\n\r\n<p>He also explains how pharmaceutical packaging sector has evolved significantly over that period, with the growth of contract manufacturing/packaging organisations and an increased emphasis on sustainability, automation, and innovation.</p>\r\n\r\n<h2>Pharmaceutical packaging: the landscape and challenges today</h2>\r\n\r\n<p>Packaging plays a crucial role in preserving medications and ensuring patient adherence. Manu speaks about a range of packaging options on the&nbsp;<a href=\"https://www.europeanpharmaceuticalreview.com/news/187941/europes-pharmaceutical-packaging-market-to-value-over-35-billion-by-2028/\" target=\"_blank\">market</a>, including the use of bottles, blister packs, vials, and pre-filled syringes/autoinjectors.</p>', 'Bevin Likuyani', '1', 'https://www.voxtab.com/downloads/audio-files/VOXTAB_legal_audio.mp3', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/podcasts/fc780793-6bf7-44aa-bcec-cd9b3789392d.jpg', '2024-03-19 04:20:45', '2024-03-19 04:20:45'),
(2, 1, 'EPR Podcast 22 – Pharmaceutical packaging – Manu Kittanakere, Gilead', 'In this podcast, Manu Kittanakere, Associate Director of Packaging Engineering at Gilead discusses the future of pharmaceutical packaging, including the growing importance of AI, automation and sustainability in packaging engineering.', 'epr-podcast-22-pharmaceutical-packaging-manu-kittanakere-gilead', 0, '<p>In this episode,&nbsp;<em>Caroline</em>&nbsp;speaks to Manu Kittanakere, Associate Director of Packaging Engineering at Gilead, about the pharmaceutical packaging landscape. Manu reflects on the changes he has witnessed in pharmaceutical packaging over his 17-year career.</p>\n\n<p>&ldquo;There is a lot of dynamic change happening with supply chain regulations, which has a direct impact on packaging,&rdquo; Manu says.</p>\n\n<p>He also explains how pharmaceutical packaging sector has evolved significantly over that period, with the growth of contract manufacturing/packaging organisations and an increased emphasis on sustainability, automation, and innovation.</p>\n\n<h2>Pharmaceutical packaging: the landscape and challenges today</h2>\n\n<p>Packaging plays a crucial role in preserving medications and ensuring patient adherence. Manu speaks about a range of packaging options on the&nbsp;<a href=\"https://www.europeanpharmaceuticalreview.com/news/187941/europes-pharmaceutical-packaging-market-to-value-over-35-billion-by-2028/\" target=\"_blank\">market</a>, including the use of bottles, blister packs, vials, and pre-filled syringes/autoinjectors.</p>', 'Bevin Likuyani', '1', 'https://www.voxtab.com/downloads/audio-files/VOXTAB_legal_audio.mp3', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/podcasts/file.png', '2024-03-19 04:24:49', '2024-03-19 04:24:49'),
(5, 1, 'Confidence Adult Diapers', 'Confidence Adult Diapers', 'confidence-adult-diapers', 2, '<p>Introducing you to&nbsp;Confidence Adult Diapers</p>', 'Albert', '14', 'https://commondatastorage.googleapis.com/codeskulptor-assets/week7-brrring.m4a', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/podcasts/High-Quality-Assured-Adult-Diapers-with-Frontal-Tape.png', '2024-06-03 06:46:12', '2024-06-03 06:46:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expertise` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT '0',
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `expertise`, `company_id`, `email`, `image`, `email_verified_at`, `password`, `is_admin`, `country`, `city`, `status`, `address`, `mobile`, `content`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bevin Likuyani', 'albro', 'IT', '1', 'albertmuhatia@gmail.com', NULL, NULL, '$2y$12$HQRtmlhunl7t3PrN9GdXQeYhHCx6N3pj6TzxDUJSvHtrbjbbsIu9S', 1, 'Kenya', 'Nairobi', 1, 'Chalbi', '0723014032', '<p><em><strong>Bevin Likuyani </strong>is a Pharmacist with a MPharm (Pharmacoepidemiology &amp; Pharmacovigilance) and MBA (Strategic Management) from School of Business, University of Nairobi). He is a Certified Supply Chain Pharmacist. (American Association of Supply Chain Management)</em> and Editor at African Pharmaceutical Review. <strong>Email: bevin@africanpharmaceuticalreview.com</strong> <a href=\"https://www.linkedin.com/in/bevin-likuyani/\" target=\"_blank\" rel=\"noreferrer noopener\">LinkedIn</a></p>', 2, NULL, '2024-05-29 04:52:55', '2024-05-29 04:52:55'),
(2, 'Albert', 'Albros', 'IT', '2', 'albertmuhatia58@gmail.com', NULL, NULL, '$2y$12$lN5LC/MqfJvq77tCBemJn.h4jAjL47inT6mx48n7uz8dWrRHZ6hj2', 1, 'Kenya', 'Nairobi', 1, '3571 Riverside Downs', '0723014032', 'This is my short bio', 1, NULL, '2024-06-03 05:17:36', '2024-06-03 05:17:36'),
(3, 'Admin User', NULL, NULL, NULL, 'admin@africanpharmaceuticalreview.com', NULL, NULL, '$2y$12$h96JV3MNtgFPfqAQNO9gCOXIpNWDAH2Jn5x09IKm0qhX5tk7t2C5C', 0, NULL, NULL, 1, NULL, NULL, '<p><em><strong>Bevin Likuyani </strong>is a Pharmacist with a MPharm (Pharmacoepidemiology &amp; Pharmacovigilance) and MBA (Strategic Management) from School of Business, University of Nairobi). He is a Certified Supply Chain Pharmacist. (American Association of Supply Chain Management)</em> and Editor at African Pharmaceutical Review. <strong>Email: bevin@africanpharmaceuticalreview.com</strong> <a href=\"https://www.linkedin.com/in/bevin-likuyani/\" target=\"_blank\" rel=\"noreferrer noopener\">LinkedIn</a></p>', 1, NULL, '2024-06-11 13:38:07', '2024-06-11 13:38:07'),
(4, 'Manager User', NULL, NULL, NULL, 'manager@africanpharmaceuticalreview.com', NULL, NULL, '$2y$12$MNqfOH4BDg50tgZR32kC2OvmT9zC/6dABnyvAbnvLNOvsxXHK3Fj6', 0, NULL, NULL, 1, NULL, NULL, NULL, 2, NULL, '2024-06-11 13:38:07', '2024-06-11 13:38:07'),
(5, 'User', NULL, NULL, NULL, 'user@africanpharmaceuticalreview.com', NULL, NULL, '$2y$12$l/tR875Hj/4lt28s6YHcmOesYNN4I4rBQw2mqZw.FXx3JNUHAqpJ2', 0, NULL, NULL, 1, NULL, NULL, NULL, 0, NULL, '2024-06-11 13:38:08', '2024-06-11 13:38:08');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` int(11) NOT NULL DEFAULT '0',
  `content` text COLLATE utf8mb4_unicode_ci,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `active`, `title`, `meta`, `slung`, `company_id`, `content`, `author`, `category`, `file`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Video: Unveiling the science behind NGS', 'Virtual seminar presented by Christine Farrance, PhD, Senior Global Scientific Affairs Liaison of Microbial Solutions at Charles River designed to improve your understanding of how to leverage NGS to analyze the entire genome and mixed samples in a single, efficient test to identify, classify, and understand microbes in mixed and pure samples.', 'video-unveiling-the-science-behind-ngs', 0, '<p>A study has determined that intermittent low-intensity far-UVC light can inhibit&nbsp;<a href=\"https://www.europeanpharmaceuticalreview.com/topic/mould-contamination/\" target=\"_blank\">mould</a>&nbsp;growth below the threshold limit value of 23 mJ/cm2.</p>\r\n\r\n<p>At 222nm, far-UVC light was shown to prevent development of common mould-producing&nbsp;<a href=\"https://www.europeanpharmaceuticalreview.com/topic/microbiology/\" target=\"_blank\">fungi</a>, specifically&nbsp;<em>Penicillium candidum</em>.</p>\r\n\r\n<p>The on-off duty cycle pattern of the far-UVC light used in the study is &ldquo;consistent with its use in real-world settings&rdquo;, the corresponding paper stated.</p>', 'Bevin Likuyani', '1', 'NSmevXhc6IA', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/Videos/file.png', '2024-03-19 11:01:00', '2024-03-19 11:01:00'),
(2, 1, 'Unveiling the science behind NGS', 'Virtual seminar presented by Christine Farrance, PhD, Senior Global Scientific Affairs Liaison of Microbial Solutions at Charles River designed to improve your understanding of how to leverage NGS to analyze the entire genome and mixed samples in a single, efficient test to identify, classify, and understand microbes in mixed and pure samples.', 'unveiling-the-science-behind-ngs', 0, '<p>A study has determined that intermittent low-intensity far-UVC light can inhibit&nbsp;<a href=\"https://www.europeanpharmaceuticalreview.com/topic/mould-contamination/\" target=\"_blank\">mould</a>&nbsp;growth below the threshold limit value of 23 mJ/cm2.</p>\r\n\r\n<p>At 222nm, far-UVC light was shown to prevent development of common mould-producing&nbsp;<a href=\"https://www.europeanpharmaceuticalreview.com/topic/microbiology/\" target=\"_blank\">fungi</a>, specifically&nbsp;<em>Penicillium candidum</em>.</p>\r\n\r\n<p>The on-off duty cycle pattern of the far-UVC light used in the study is &ldquo;consistent with its use in real-world settings&rdquo;, the corresponding paper stated.</p>', 'Bevin Likuyani', '1', 'NSmevXhc6IA', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/Videos/featured-bg.png', '2024-03-19 11:01:50', '2024-03-19 11:01:50'),
(3, 1, 'test video', 'This is a description of manufaturing', 'test-video', 2, '<p>This is a description of manufaturing</p>\r\n\r\n<p>This is a description of manufaturing</p>\r\n\r\n<p>This is a description of manufaturing</p>\r\n\r\n<p>This is a description of manufaturing</p>', 'Albert', '8', 'hu3uY3dbUTI', 'https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/uploads/Videos/AFP10L_1.png', '2024-06-03 07:07:42', '2024-06-03 07:07:42');

-- --------------------------------------------------------

--
-- Table structure for table `_site_settings`
--

CREATE TABLE `_site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sitename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_footer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mpesa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tagline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277444357953!2d36.8222756!3d-1.2821653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1617719690195!5m2!1sen!2ske',
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `risks` text COLLATE utf8mb4_unicode_ci,
  `welcome` text COLLATE utf8mb4_unicode_ci,
  `tawkTo` text COLLATE utf8mb4_unicode_ci,
  `tawkToStatus` tinyint(4) NOT NULL DEFAULT '1',
  `whatsAppStatus` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_site_settings`
--

INSERT INTO `_site_settings` (`id`, `sitename`, `logo`, `logo_footer`, `logo_two`, `favicon`, `email`, `email_one`, `mobile_one`, `mobile_two`, `mpesa`, `paypal`, `tagline`, `url`, `location`, `map`, `address`, `facebook`, `whatsapp`, `telegram`, `twitter`, `linkedin`, `instagram`, `youtube`, `google`, `risks`, `welcome`, `tawkTo`, `tawkToStatus`, `whatsAppStatus`, `created_at`, `updated_at`) VALUES
(1, 'African Pharmaceutical Review', 'aprlogo.png', 'aprlogo.png', 'aprlogo.png', NULL, 'info@africanpharmaceuticalreview.com', NULL, NULL, NULL, NULL, 'bervin@africanpharmaceuticalreview.com', NULL, 'https://www.africanpharmaceuticalreview.com', 'Raphta Road', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277444357953!2d36.8222756!3d-1.2821653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1617719690195!5m2!1sen!2ske', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://africanpharmaceuticalreview.com/', 'http://africanpharmaceuticalreview.com/', 1, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `advertisements_title_unique` (`title`),
  ADD UNIQUE KEY `advertisements_url_unique` (`url`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slung_unique` (`slung`),
  ADD UNIQUE KEY `blogs_title_unique` (`title`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `podcasts`
--
ALTER TABLE `podcasts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `podcasts_title_unique` (`title`),
  ADD UNIQUE KEY `podcasts_slung_unique` (`slung`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `videos_title_unique` (`title`),
  ADD UNIQUE KEY `videos_slung_unique` (`slung`);

--
-- Indexes for table `_site_settings`
--
ALTER TABLE `_site_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=754;

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `podcasts`
--
ALTER TABLE `podcasts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `_site_settings`
--
ALTER TABLE `_site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
