-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2024 at 01:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctd_cms_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `boards`
--

CREATE TABLE `boards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `work_space_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `borad_name` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `department_name` varchar(50) DEFAULT NULL,
  `department_head_name` varchar(50) DEFAULT NULL,
  `regulating_authority` varchar(200) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `user_id`, `department_name`, `department_head_name`, `regulating_authority`, `status`, `created_at`, `updated_at`) VALUES
(1, 24, 'production', 'Irtaza Javeed', '', 'ac', NULL, NULL),
(2, 10, 'design', 'zubair', 'zubair', 'active', '2024-11-08 23:15:05', '2024-11-08 23:15:05'),
(3, 29, 'admin', 'uzair', 'uzair', 'active', '2024-11-11 20:57:43', '2024-11-11 20:57:46'),
(4, NULL, 'Apps', 'Gilliam', 'Compton', 'active', '2024-11-15 18:46:51', '2024-11-20 14:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2024_10_25_230326_create_roles_table', 2),
(8, '2024_10_25_230439_create_users_permission_table', 3),
(9, '2024_10_25_231244_create_users_table', 3),
(10, '2024_10_28_171153_create_notification_table', 3),
(11, '2024_11_07_185352_add_nic_number_and_department_to_users', 3),
(12, '2024_11_08_200624_create_departments_table', 3),
(13, '2024_11_08_200723_create_sections_table', 3),
(14, '2024_11_08_215538_alter_users_table', 3),
(15, '2024_11_08_215538_alter_users_table3232', 4),
(16, '2024_11_08_223038_alter_users_table', 4),
(17, '2024_11_11_172550_add_department_id_and_section_id_to_users', 5),
(18, '2024_11_11_183331_remove_department_from_users_table', 6),
(19, '2024_11_15_172601_add_user_id_column_to_departments_table', 7),
(20, '2024_11_15_181643_create_work_space_table', 8),
(21, '2024_11_15_181658_create_boards_table', 8),
(22, '2024_11_15_181708_create_projects_table', 8),
(23, '2024_11_15_181721_create_tasks_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `notification_type` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `user_id`, `notification_type`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'HR Login', NULL, NULL, '2024-11-08', '2024-11-08'),
(2, 1, 'HR Login', NULL, NULL, '2024-11-11', '2024-11-11'),
(3, NULL, 'HR create a new user record', NULL, NULL, '2024-11-11', '2024-11-11'),
(4, NULL, 'HR create a new user record', NULL, NULL, '2024-11-11', '2024-11-11'),
(5, NULL, 'HR create a new user record', NULL, NULL, '2024-11-11', '2024-11-11'),
(6, NULL, 'HR create a new user record', NULL, NULL, '2024-11-11', '2024-11-11'),
(7, NULL, 'HR create a new user record', NULL, NULL, '2024-11-11', '2024-11-11'),
(8, NULL, 'HR create a new user record', NULL, NULL, '2024-11-11', '2024-11-11'),
(9, NULL, 'HR create a new user record', NULL, NULL, '2024-11-11', '2024-11-11'),
(10, 8, 'Admin Login', NULL, NULL, '2024-11-11', '2024-11-11'),
(11, 8, 'Admin Login', NULL, NULL, '2024-11-11', '2024-11-11'),
(12, NULL, 'Admin create a new user record', NULL, NULL, '2024-11-11', '2024-11-11'),
(13, 1, 'HR Login', NULL, NULL, '2024-11-11', '2024-11-11'),
(14, NULL, 'Admin create a new user record', NULL, NULL, '2024-11-11', '2024-11-11'),
(15, 9, 'Create New Password Successfully Updated', NULL, NULL, '2024-11-11', '2024-11-11'),
(16, 8, 'Lead Login', NULL, NULL, '2024-11-11', '2024-11-11'),
(17, 4, 'Head Login', NULL, NULL, '2024-11-11', '2024-11-11'),
(18, 10, 'User Login', NULL, NULL, '2024-11-11', '2024-11-11'),
(19, 8, 'Create New Password Successfully Updated', NULL, NULL, '2024-11-11', '2024-11-11'),
(20, 9, 'Create New Password Successfully Updated', NULL, NULL, '2024-11-11', '2024-11-11'),
(21, 8, 'Create New Password Successfully Updated', NULL, NULL, '2024-11-11', '2024-11-11'),
(22, 8, 'Lead Login', NULL, NULL, '2024-11-11', '2024-11-11'),
(23, 1, 'HR Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(24, NULL, 'HR create a new user record', NULL, NULL, '2024-11-12', '2024-11-12'),
(25, 11, 'Lead Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(26, 4, 'Head Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(27, 11, 'Admin Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(28, 11, 'Admin Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(29, 11, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(30, 11, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(31, 11, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(32, 11, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(33, 11, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(34, 11, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(35, 11, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(36, 11, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(37, 11, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(38, 11, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(39, 11, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(40, 11, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(41, 11, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(42, NULL, 'Admin create a new user record', NULL, NULL, '2024-11-12', '2024-11-12'),
(43, 12, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(44, 12, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(45, 11, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(46, 12, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(47, 11, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(48, 11, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(49, 4, 'Admin Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(50, 1, 'HR Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(51, 4, 'Admin Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(52, 12, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(53, 11, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(54, NULL, 'HR create a new user record', NULL, NULL, '2024-11-12', '2024-11-12'),
(55, 13, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(56, 13, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(57, 13, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(58, 13, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(59, 13, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(60, 13, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(61, 1, 'HR Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(62, 1, 'HR Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(63, 13, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(64, 12, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(65, 13, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(66, 13, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(67, 4, 'Admin Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(68, 1, 'HR Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(69, NULL, 'HR create a new user record', NULL, NULL, '2024-11-12', '2024-11-12'),
(70, 14, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(71, 4, 'Admin Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(72, 14, 'User Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(73, 1, 'HR Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(74, 4, 'Admin Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(75, 1, 'HR Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(76, 1, 'HR Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(77, 4, 'Admin Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(78, 1, 'HR Login', NULL, NULL, '2024-11-12', '2024-11-12'),
(79, NULL, 'HR create a new user record', NULL, NULL, '2024-11-12', '2024-11-12'),
(80, NULL, 'HR create a new user record', NULL, NULL, '2024-11-12', '2024-11-12'),
(81, NULL, 'HR create a new user record', NULL, NULL, '2024-11-13', '2024-11-13'),
(82, NULL, 'HR create a new user record', NULL, NULL, '2024-11-13', '2024-11-13'),
(83, NULL, 'HR create a new user record', NULL, NULL, '2024-11-13', '2024-11-13'),
(84, 1, 'HR Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(85, 19, 'Super Admin Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(86, 1, 'HR Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(87, 10, 'User Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(88, 15, 'User Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(89, 1, 'HR Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(90, NULL, 'HR create a new user record', NULL, NULL, '2024-11-13', '2024-11-13'),
(91, 20, 'User Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(92, 4, 'Admin Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(93, NULL, 'Admin create a new user record', NULL, NULL, '2024-11-13', '2024-11-13'),
(94, 21, 'Super Admin Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(95, 20, 'User Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(96, 19, 'HR Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(97, 15, 'User Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(98, 1, 'HR Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(99, 1, 'HR Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(100, 1, 'HR Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(101, 1, 'HR Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(102, 1, 'HR Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(103, 4, 'Admin Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(104, 1, 'HR Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(105, 4, 'Admin Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(106, NULL, 'Admin create a new user record', NULL, NULL, '2024-11-13', '2024-11-13'),
(107, 4, 'Admin Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(108, NULL, 'Admin create a new user record', NULL, NULL, '2024-11-13', '2024-11-13'),
(109, 23, 'Create New Password Successfully Updated', NULL, NULL, '2024-11-13', '2024-11-13'),
(110, 21, 'Super Admin Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(111, 20, 'Create New Password Successfully Updated', NULL, NULL, '2024-11-13', '2024-11-13'),
(112, 20, 'Create New Password Successfully Updated', NULL, NULL, '2024-11-13', '2024-11-13'),
(113, 20, 'User Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(114, 20, 'Create New Password Successfully Updated', NULL, NULL, '2024-11-13', '2024-11-13'),
(115, 20, 'User Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(116, 4, 'Admin Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(117, 4, 'Admin Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(118, NULL, 'Admin create a new user record', NULL, NULL, '2024-11-13', '2024-11-13'),
(119, 24, 'Head Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(120, 24, 'Head Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(121, 24, 'Head Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(122, 24, 'Head Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(123, 24, 'Head Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(124, 24, 'Head Login', NULL, NULL, '2024-11-13', '2024-11-13'),
(125, 1, 'HR Login', NULL, NULL, '2024-11-14', '2024-11-14'),
(126, 15, 'User Login', NULL, NULL, '2024-11-14', '2024-11-14'),
(127, NULL, 'HR create a new user record', NULL, NULL, '2024-11-14', '2024-11-14'),
(128, NULL, 'HR create a new user record', NULL, NULL, '2024-11-14', '2024-11-14'),
(129, 4, 'Admin Login', NULL, NULL, '2024-11-14', '2024-11-14'),
(130, 4, 'Admin Login', NULL, NULL, '2024-11-14', '2024-11-14'),
(131, NULL, 'Admin create a new user record', NULL, NULL, '2024-11-14', '2024-11-14'),
(132, 1, 'HR Login', NULL, NULL, '2024-11-14', '2024-11-14'),
(133, 4, 'Admin Login', NULL, NULL, '2024-11-14', '2024-11-14'),
(134, 24, 'Head Login', NULL, NULL, '2024-11-14', '2024-11-14'),
(135, 21, 'Super Admin Login', NULL, NULL, '2024-11-14', '2024-11-14'),
(136, 22, 'User Login', NULL, NULL, '2024-11-14', '2024-11-14'),
(137, 1, 'HR Login', NULL, NULL, '2024-11-15', '2024-11-15'),
(138, NULL, 'HR create a new user record', NULL, NULL, '2024-11-15', '2024-11-15'),
(139, 24, 'Head Login', NULL, NULL, '2024-11-15', '2024-11-15'),
(140, 24, 'Head Login', NULL, NULL, '2024-11-15', '2024-11-15'),
(141, 25, 'Head Login', NULL, NULL, '2024-11-15', '2024-11-15'),
(142, NULL, 'HR create a new user record', NULL, NULL, '2024-11-15', '2024-11-15'),
(143, 29, 'Head Login', NULL, NULL, '2024-11-15', '2024-11-15'),
(144, 24, 'Head Login', NULL, NULL, '2024-11-15', '2024-11-15'),
(145, 10, 'Admin Login', NULL, NULL, '2024-11-15', '2024-11-15'),
(146, 1, 'HR Login', NULL, NULL, '2024-11-15', '2024-11-15'),
(147, 1, 'HR Login', NULL, NULL, '2024-11-15', '2024-11-15'),
(148, 1, 'HR Login', NULL, NULL, '2024-11-20', '2024-11-20'),
(149, 10, 'Admin Login', NULL, NULL, '2024-11-20', '2024-11-20'),
(150, 1, 'HR Login', NULL, NULL, '2024-11-20', '2024-11-20'),
(151, 24, 'Head Login', NULL, NULL, '2024-11-20', '2024-11-20'),
(152, 29, 'Head Login', NULL, NULL, '2024-11-20', '2024-11-20'),
(153, 1, 'HR Login', NULL, NULL, '2024-11-20', '2024-11-20'),
(154, 24, 'Head Login', NULL, NULL, '2024-11-20', '2024-11-20'),
(155, 24, 'Head Login', NULL, NULL, '2024-11-20', '2024-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `board_id` bigint(20) UNSIGNED DEFAULT NULL,
  `workspace_id` bigint(20) UNSIGNED DEFAULT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `section_id` bigint(20) UNSIGNED DEFAULT NULL,
  `project_name` varchar(100) DEFAULT NULL,
  `poject_description` varchar(1000) DEFAULT NULL,
  `priority` varchar(50) DEFAULT NULL,
  `file_attached` varchar(1000) DEFAULT NULL,
  `file_size` varchar(1000) DEFAULT NULL,
  `check_list` varchar(100) DEFAULT NULL,
  `project_type` varchar(50) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_type` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_type`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', NULL, NULL),
(2, 'admin', NULL, NULL),
(3, 'hr', NULL, NULL),
(4, 'head', NULL, NULL),
(5, 'manager', NULL, NULL),
(6, 'lead', NULL, NULL),
(7, 'agent', NULL, NULL),
(8, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `section_name` varchar(50) DEFAULT NULL,
  `section_lead_name` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `department_id`, `section_name`, `section_lead_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'development', 'yaad ', 'active', '2024-11-09', '2024-11-09'),
(2, 1, 'designer', 'anas', 'active', '2024-11-11', '2024-11-11'),
(3, 1, 'marketing', 'fazal abas', 'active', '2024-11-09', '2024-11-09'),
(5, 3, 'super admin', 'uzair', 'active', '2024-11-12', '2024-11-12'),
(6, 3, 'admin', 'uzair', 'active', '2024-11-12', '2024-11-12'),
(7, 3, 'backEnd', 'kamran', 'inactive', '2024-11-14', '2024-11-21'),
(8, 1, 'Ebook', 'Hussain', 'active', '2024-11-20', '2024-11-21'),
(9, 1, 'Adrian', 'Richards', 'inactive', '2024-11-20', '2024-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('dUuYWFzqF8ko0vQs9cbIupAlY5f7c5aVp5vx2nBN', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidm5nNnNzc0RWNWxZbTl1d2Zhc1FYZzE4ZWFnVmdLUFZUcmdneTViayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjY6Imh0dHA6Ly9sb2NhbGhvc3QvY3RkX2Ntc19wcm9qZWN0L3NlY3Rpb24vYXNzZXRzL2ltYWdlcy9naWZ0Ym94LnBuZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732147674),
('ktwxZTlgMfA0AJJoPv4lIoUJhqcGaQIxlqqXPwS6', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoickpyYndkUzZoeFZTaWV1aEd0eW1QdUYwdFd6b2k2dnJseXdpQnJBTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODM6Imh0dHA6Ly9sb2NhbGhvc3QvY3RkX2Ntc19wcm9qZWN0L3NlY3Rpb24vZGFzaGJvYXJkL2Fzc2V0cy9pbWFnZXMvdXNlcnMvYXZhdGFyLTEuanBnIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1732143110);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `work_space_id` bigint(20) UNSIGNED DEFAULT NULL,
  `board_id` bigint(20) UNSIGNED DEFAULT NULL,
  `project_id` bigint(20) UNSIGNED DEFAULT NULL,
  `card_title` varchar(100) DEFAULT NULL,
  `descriptions` varchar(1000) DEFAULT NULL,
  `file_attached` varchar(1000) DEFAULT NULL,
  `file_size` varchar(1000) DEFAULT NULL,
  `process_status` varchar(50) DEFAULT NULL,
  `assign_to` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `section_id` bigint(20) UNSIGNED DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `contact_number` varchar(100) DEFAULT NULL,
  `nic_number` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gendar` enum('Male','Female','Other') NOT NULL DEFAULT 'Male',
  `qualification` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `address_one` varchar(500) DEFAULT NULL,
  `address_two` varchar(500) DEFAULT NULL,
  `profile_image` varchar(50) DEFAULT NULL,
  `designation_role` varchar(50) DEFAULT NULL,
  `email_verification_token` varchar(50) DEFAULT NULL,
  `reset_password_token` varchar(50) DEFAULT NULL,
  `forgot_password_token` varchar(50) DEFAULT NULL,
  `role_type` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pendding',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `department_id`, `section_id`, `first_name`, `middle_name`, `last_name`, `email`, `password`, `contact_number`, `nic_number`, `date_of_birth`, `gendar`, `qualification`, `designation`, `joining_date`, `address_one`, `address_two`, `profile_image`, `designation_role`, `email_verification_token`, `reset_password_token`, `forgot_password_token`, `role_type`, `status`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 1, 'anam', NULL, 'khalid', 'anam@gmail.com', '$2y$10$NGEf', '0430343433', '4535359353234', '2022-07-15', 'Male', 'MBA', 'HR', '2014-11-12', 'DHA Phase II karachi sdfsdfsd', 'Sadar karachi Sindh Pakistan', 'anam_1731520629_client-10.png', 'hr', NULL, NULL, NULL, NULL, 'active', NULL, 'GPQen8ZMvdW4lPpVaMCDMNAH7NuXoAQYon9ndYXxdKcaDYWUrUEJbR6wQvSh', NULL, '2024-11-13 13:00:18'),
(2, NULL, 1, 2, 'Anas', 'Galena Sheppard', 'Moses', 'tywo@mailinator.com', '$2y$10$M.J', '+1 (782) 365-7797', NULL, '2009-05-15', 'Male', 'Autem laboriosam ut', 'Nobis ut ratione eni', '1980-03-11', 'Ipsa aut est totam', 'Aliquip distinctio', NULL, 'user', NULL, NULL, NULL, NULL, 'approve', NULL, 'fCPXkKNLpDafZSIOuR5XnE8Ii4rbdYzp38h7kxjJjLeMUQAMLN3tqQXIX2PZ', '2024-11-11 12:02:38', '2024-11-11 18:18:28'),
(3, 6, 1, 1, 'fahad', 'Mechelle Reid', 'ali', 'ripyce@mailinator.com', '$2y$10$gwL', '+1 (873) 428-6774', NULL, '1995-09-12', 'Other', 'Earum officiis verit', 'Sequi eiusmod repreh', '1980-07-19', 'Voluptate beatae har', 'At cupiditate quidem', NULL, 'Lead', NULL, NULL, NULL, NULL, 'approve', NULL, NULL, '2024-11-11 12:42:17', '2024-11-11 19:16:37'),
(4, 2, 1, 1, 'yaad', 'Bert Holcomb', 'ali', 'lyqehok@mailinator.com', '$2y$10$T', '+1 (985) 839-5016', '357', '2010-01-04', 'Male', 'Mollit alias vel sin', 'Quod excepturi et qu', '1988-09-25', 'Amet est aut qui ea', 'Aliqua Enim maiores', 'yaad_1731522779_client-02.png', 'head', NULL, NULL, NULL, NULL, 'active', NULL, 'cB0ffraJWg45wDFNxyXRmW1WOewNhUy2f0oTHZORslMTwOx6ldS4oncaML2U', '2024-11-11 12:50:41', '2024-11-13 13:32:59'),
(8, 6, 1, 6, NULL, 'Marsden Morrison', 'Mcpherson', 'jacunutofo@mailinator.com', '$2y$10$a', '+1 (624) 602-3247', '741', '2013-10-16', 'Male', 'Consequatur amet e', 'Ea quam totam quia n', '1979-06-07', 'Dolore veniam alias', 'Suscipit ega quia sim', NULL, 'lead', NULL, NULL, NULL, NULL, 'pending', NULL, 'jUy7Ze0JvzALOnmCRIMzIqXkiEmi2Qx6HleccnQ5A0JQAAN9EdhMBJvDrfI0', '2024-11-11 15:59:49', '2024-11-12 17:44:17'),
(9, 8, 1, 1, 'Wing', 'Daniel Gibbs', 'Moran', 'fusyzy@mailinator.com', '$2y$10$2J', '+1 (678) 843-8658', '689', '2002-05-18', 'Male', 'Molestias consequunt', 'Dolor vitae duis qui', '1979-03-30', 'Nulla voluptatem Se', 'Sed qui est est max', NULL, 'user', NULL, NULL, NULL, NULL, 'approve', NULL, NULL, '2024-11-11 16:33:34', '2024-11-11 18:13:32'),
(10, 2, 1, 1, 'zubair', 'Liberty Mack', 'Ayers', 'fozoq@mailinator.com', '$2y$10$m', '+1 (654) 454-3071', '418', '1988-10-08', 'Other', 'Qui voluptate qui di', 'Enim magna nobis dol', '2015-05-10', 'Amet in cillum atqu', 'In officia est enim', NULL, 'user', NULL, NULL, NULL, NULL, 'active', NULL, 'BoF1KDALUeMq88ea7c6XvzDOGNRaVyt31IKc5dN9Sq9YvDGoXLqBLEAzx2td', '2024-11-11 17:30:30', '2024-11-12 19:59:13'),
(11, 8, 1, 1, 'umar', 'Omar Craig', 'Savage', 'ralyfeqow@mailinator.com', '$2y$10$r', '+1 (936) 513-9633', '545', '1981-12-15', 'Male', 'Inter', 'Wordpress Developer', '2012-06-20', 'Gulshan e Iqbal karachi', 'same', NULL, 'user', NULL, NULL, NULL, NULL, 'active', NULL, 'qStkHKpjnhVScAMmbhjejvGX7s99gBrtY2E6SnG9DKeJlLp10HnfkfAcnGlb', '2024-11-12 11:18:55', '2024-11-12 11:57:31'),
(12, 8, 1, 1, 'usama', 'Ingrid Holder', 'Herring', 'kexogofi@mailinator.com', '$2y$10$M', '+1 (835) 531-8837', '61', '1978-01-13', 'Female', 'Possimus iusto magn', 'Dignissimos consecte', '1973-06-07', 'Dicta quas minus ab', 'Enim consectetur ali', NULL, 'user', NULL, NULL, NULL, NULL, 'active', NULL, 'BuPeRzevddVcoPLizRHa9Xf3HGbH1cMMTS05552bjZFmVpx28H28p6YkIc4Q', '2024-11-12 12:43:26', '2024-11-12 12:44:28'),
(13, 8, 1, 2, 'sami', 'James Riddle', 'Mcmahon', 'byqyb@mailinator.com', '$2y$10$cG', '+1 (716) 643-755454', '44952523523532', '2018-05-01', 'Male', 'MBA', 'Quidem sint qui atqu', '1988-09-14', 'Ullamco iure quos to', 'karachi fdfsdf', 'sami_1731445862_user_01.png', 'user', NULL, NULL, NULL, NULL, 'active', NULL, '4Q2485fPdLDfOwkiDi5QW0IepVRtD5d8IXtWbzKAZViNHG3Mexc0cGWyB766', '2024-11-12 13:02:41', '2024-11-12 16:11:02'),
(14, 8, 1, 1, NULL, 'Sydney Berry', 'khan', 'xizok@mailinator.com', '$2y$10$ENp', '+1 (423) 321-2228', '398', '2005-08-16', 'Male', 'Facilis dolore conse', 'Elit dolor cum veli', '2010-10-27', 'Quidem obcaecati nih', 'Ullam lorem incididu', NULL, 'user', NULL, NULL, NULL, NULL, 'pending', NULL, 'MIe5SucgB4Q5X0XK8RKDbllmatG5cO6DxupyjuDbfO5XSpncUFN7CBOqqKpG', '2024-11-12 16:33:49', '2024-11-12 17:44:34'),
(15, 8, 1, 1, 'Cameron', NULL, 'Alston', 'betiv@mailinator.com', '$2y$10uta', '+1 (302) 972-2684', '452', '1999-05-09', 'Male', 'Eum nulla sed qui qu', 'Mollit numquam est', '1974-08-16', 'Praesentium dolorem', 'Ducimus quaerat in', 'Jocelyn_1731518900_user_01.png', 'user', NULL, NULL, NULL, NULL, 'active', NULL, NULL, '2024-11-12 18:32:15', '2024-11-14 16:46:18'),
(18, 1, 1, 1, 'Madeson', NULL, 'Harvey', 'heliqoreki@mailinator.com', '$2y$10', '+1 (155) 161-5912', '710', '1991-09-02', 'Male', 'Amet quasi vel atqu', 'Veniam voluptate do', '1996-04-25', 'Exercitation aperiam', 'Molestiae dicta fuga', NULL, 'superadmin', NULL, NULL, NULL, NULL, 'active', NULL, NULL, '2024-11-12 19:06:08', '2024-11-13 13:16:31'),
(19, 3, 1, 1, 'rawaid', NULL, 'Guerra', 'lifoza@mailinator.com', '54twett45', '+1 (772) 179-2602', '653', '1988-08-27', 'Male', 'Aut eius nihil quis', 'Ex repudiandae quisq', '2018-08-30', 'Et autem ipsam dolor', 'Corporis velit volup', NULL, 'superadmin', NULL, NULL, NULL, NULL, 'active', NULL, NULL, '2024-11-12 19:38:48', '2024-11-12 19:57:07'),
(20, 8, 1, 1, 'sami', NULL, 'Whitfield', 'lasiqe@mailinator.com', 'User12345678', '+1 (649) 988-3271', '959', '1985-05-21', 'Male', 'Inventore in do cumq', 'Qui id veniam est', '1972-02-27', 'Vero est sapiente u', 'Pariatur Expedita e', 'sami_1731518879_user_01.png', 'user', NULL, NULL, NULL, NULL, 'active', NULL, NULL, '2024-11-13 11:24:53', '2024-11-13 14:10:18'),
(21, 1, 1, 1, 'Linda', NULL, 'Brewer', 'nuquxyvy@mailinator.com', 'jL3S1B5SBJ', '+1 (402) 116-4337', '681', '1976-10-21', 'Male', 'Voluptas cum mollit', 'Doloribus quae nulla', '2008-08-09', 'Consectetur blandit', 'Duis et totam quis u', NULL, 'superadmin', NULL, NULL, NULL, NULL, 'active', NULL, NULL, '2024-11-13 11:52:32', '2024-11-13 14:00:52'),
(22, 8, 1, 1, 'kami', NULL, 'Goodwin', 'bamisove@mailinator.com', '5yyOiCRT4Z', '+1 (975) 145-5524', '645', '2005-09-02', 'Other', 'Dolor at lorem eveni', 'Adipisci qui suscipi', '2012-03-04', 'Quam eos eveniet ne', 'Nostrum quia ea pers', NULL, 'user', NULL, NULL, NULL, NULL, 'active', NULL, NULL, '2024-11-13 13:41:28', '2024-11-14 17:59:21'),
(23, 8, 1, 1, 'faheem', NULL, 'Stone', 'repunic@mailinator.com', '$2y$10$OoBCuSvMU', '+1 (529) 479-3889', '754', '1980-05-06', 'Male', 'Nostrud aut libero a', 'Aut voluptatem Est', '1981-03-08', 'Deleniti error lorem', 'Qui praesentium temp', NULL, 'user', NULL, NULL, NULL, NULL, 'approve', NULL, NULL, '2024-11-13 13:42:59', '2024-11-13 14:00:16'),
(24, 4, 1, 7, 'Irtaza', NULL, 'javeed', 'irtaza@mailinator.com', 'TqNhQUI79c', '+1 (953) 776-1718', '236525235235', '2016-12-21', 'Male', 'Odio eu ut qui offic', 'Molestiae necessitat', '2011-01-31', 'Consequatur Esse se', 'Nisi fugit id non d', 'Irtaza_1731526511_client-01.png', 'head', NULL, NULL, NULL, NULL, 'active', NULL, NULL, '2024-11-13 14:31:01', '2024-11-13 14:35:34'),
(25, 4, 1, 1, 'Mercedes', NULL, 'Ferrell', 'kume@mailinator.com', 'RUWztN0QZ3', '+1 (854) 204-1086', '976', '1984-10-29', 'Other', 'Ea sunt vel sit iste', 'Provident perspicia', '1988-10-04', 'Autem ullam beatae s', 'Fugit doloremque et', NULL, 'user', NULL, NULL, NULL, NULL, 'active', NULL, NULL, '2024-11-14 16:36:56', '2024-11-15 16:20:07'),
(26, 8, 1, 1, 'rawaid', NULL, 'ali', 'soragyqi@mailinator.com', 'iKT7JKj8xV', '+1 (193) 936-7528', '58', '1985-02-26', 'Male', 'Saepe ut fuga Volup', 'Iure facere dolores', '2016-03-21', 'Esse voluptatum ut o', 'Qui ut ad non ut dol', NULL, 'user', NULL, NULL, NULL, NULL, 'approve', NULL, NULL, '2024-11-14 16:48:16', '2024-11-14 17:13:29'),
(27, 8, 1, 1, 'Urielle', NULL, 'Hutchinson', 'misycaz@mailinator.com', '4SFZZjpJTC', '+1 (545) 265-5263', '524', '1999-09-24', 'Male', 'Consectetur et eum', 'Exercitationem esse', '1990-10-18', 'Deserunt sunt conse', 'Id eos officiis qui', NULL, 'user', NULL, NULL, NULL, NULL, 'pending', NULL, NULL, '2024-11-14 17:31:25', '2024-11-14 17:31:50'),
(28, 8, 1, 1, 'fazal', NULL, 'abbas', 'fazal@mailinator.com', 'YslTXFX5M9', '+1 (356) 476-6547', '566', '2018-05-26', 'Male', 'Totam sit tempore', 'Quasi voluptatem es', '1991-09-09', 'Perspiciatis vero c', 'Velit laboris non f', NULL, 'user', NULL, NULL, NULL, NULL, 'pendding', NULL, NULL, '2024-11-15 11:59:00', '2024-11-15 11:59:33'),
(29, 4, 3, 6, 'zubair', NULL, 'Peterson', 'fybi@mailinator.com', 'xfXSu1jfYK', '+1 (635) 242-1249', '988', '1984-08-10', 'Other', 'Alias sit natus culp', 'Voluptate nostrud sa', '1974-11-02', 'Pariatur Nemo culpa', 'Irure vel dignissimo', NULL, 'head', NULL, NULL, NULL, NULL, 'active', NULL, NULL, '2024-11-15 16:25:10', '2024-11-15 16:26:06');

-- --------------------------------------------------------

--
-- Table structure for table `users_permission`
--

CREATE TABLE `users_permission` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `action` varchar(50) DEFAULT NULL,
  `allowed` enum('yes','no') NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `work_space`
--

CREATE TABLE `work_space` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `section_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `work_space_name` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boards`
--
ALTER TABLE `boards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `boards_work_space_id_foreign` (`work_space_id`),
  ADD KEY `boards_user_id_foreign` (`user_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departments_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notification_user_id_index` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_user_id_foreign` (`user_id`),
  ADD KEY `projects_board_id_foreign` (`board_id`),
  ADD KEY `projects_workspace_id_foreign` (`workspace_id`),
  ADD KEY `projects_department_id_foreign` (`department_id`),
  ADD KEY `projects_section_id_foreign` (`section_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_department_id_foreign` (`department_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_user_id_foreign` (`user_id`),
  ADD KEY `tasks_work_space_id_foreign` (`work_space_id`),
  ADD KEY `tasks_board_id_foreign` (`board_id`),
  ADD KEY `tasks_project_id_foreign` (`project_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_department_id_foreign` (`department_id`),
  ADD KEY `users_section_id_foreign` (`section_id`);

--
-- Indexes for table `users_permission`
--
ALTER TABLE `users_permission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_permission_role_id_foreign` (`role_id`);

--
-- Indexes for table `work_space`
--
ALTER TABLE `work_space`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_space_department_id_foreign` (`department_id`),
  ADD KEY `work_space_section_id_foreign` (`section_id`),
  ADD KEY `work_space_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boards`
--
ALTER TABLE `boards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users_permission`
--
ALTER TABLE `users_permission`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `work_space`
--
ALTER TABLE `work_space`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `boards`
--
ALTER TABLE `boards`
  ADD CONSTRAINT `boards_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `boards_work_space_id_foreign` FOREIGN KEY (`work_space_id`) REFERENCES `work_space` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_board_id_foreign` FOREIGN KEY (`board_id`) REFERENCES `boards` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `projects_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `projects_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `projects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `projects_workspace_id_foreign` FOREIGN KEY (`workspace_id`) REFERENCES `work_space` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_board_id_foreign` FOREIGN KEY (`board_id`) REFERENCES `boards` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tasks_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tasks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tasks_work_space_id_foreign` FOREIGN KEY (`work_space_id`) REFERENCES `work_space` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users_permission`
--
ALTER TABLE `users_permission`
  ADD CONSTRAINT `users_permission_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `work_space`
--
ALTER TABLE `work_space`
  ADD CONSTRAINT `work_space_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `work_space_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `work_space_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
