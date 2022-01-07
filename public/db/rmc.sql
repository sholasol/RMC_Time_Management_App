-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 07, 2022 at 10:58 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lead` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `lead`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Admin Department', 'System Admin', 'This is a sample admin department', '2021-09-11 11:16:43', '2021-09-11 11:16:43'),
(2, 'Test Department', 'Line Manager', 'Test Department', '2021-09-11 11:20:46', '2021-09-11 11:20:46'),
(4, 'Site Works', 'System Admin', 'This is site work deparment', '2021-09-13 12:03:44', '2021-09-13 12:03:44');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_09_10_074938_create_sessions_table', 1),
(7, '2021_09_11_114312_create_departments_table', 2),
(8, '2021_09_11_131839_create_projects_table', 3),
(9, '2021_09_11_151556_create_project_teams_table', 4),
(10, '2021_09_11_155226_create_teams_table', 5),
(11, '2021_09_13_140118_create_timesheets_table', 6),
(12, '2021_09_21_203417_create_project_types_table', 7),
(13, '2021_09_21_203639_create_tasks_table', 7);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `docs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `user_id`, `name`, `code`, `slug`, `owner`, `comment`, `status`, `docs`, `start`, `end`, `created_at`, `updated_at`) VALUES
(2, 1, 'Mystras calm buoy inspection and maintenance', 'RMC-fO00H', 'project-tester', 'System User', 'Description for the completion', 'Completed', NULL, '2021-09-11', '2021-09-17', '2021-09-11 15:01:17', '2021-09-21 21:02:04'),
(3, 1, 'Testing', NULL, 'testing', 'System User', 'teehuje', 'On-going', NULL, '2021-09-02', '2021-09-07', '2021-09-11 15:07:42', '2021-09-11 15:07:42'),
(4, 1, 'Another Project', NULL, 'another-project', 'Line Manager', 'This is a testing of the project', 'On-going', NULL, '2021-09-14', '2021-09-21', '2021-09-12 17:17:16', '2021-09-12 17:17:16'),
(5, 1, 'Information Technology', 'RMC-906Jk', NULL, 'Manager User', 'Description', 'On-going', NULL, '2021-09-21', '2021-09-23', '2021-09-21 20:49:46', '2021-09-21 20:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `project_teams`
--

CREATE TABLE `project_teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_types`
--

CREATE TABLE `project_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_types`
--

INSERT INTO `project_types` (`id`, `type`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Engineering', '9TbQB', '2021-09-21 20:05:29', '2021-09-21 20:05:29'),
(2, 'Information Technology', 'RMC-906Jk', '2021-09-21 20:07:20', '2021-09-21 20:07:20'),
(3, 'Mystras calm buoy inspection and maintenance', 'RMC-fO00H', '2021-09-21 20:07:52', '2021-09-21 20:07:52'),
(4, 'Mystras winch repair and refurbishment', 'RMC-p8zFp', '2021-09-21 20:08:22', '2021-09-21 20:08:22'),
(5, '12-Inch Adnab-Adna pipeline design & construction project', 'RMC-1001', '2021-09-21 20:09:08', '2021-09-21 20:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('bYWaj4KF9v65BYleFvPF5zjZTndTAQPcpqG8bE24', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:93.0) Gecko/20100101 Firefox/93.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoidW8xQ290OVBqMEhRdDhSME9Zb2pWY2JIMHNIRWhJOHRyaW15YU9MdyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM2OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vcHJvamVjdHMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkQU5udzlxVVdRT0R6OVhuMG4vSmdSZURMUWh4clVIbFlleUV5RXZGR1J6QmR2bVRmaVlnS2kiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJEFObnc5cVVXUU9EejlYbjBuL0pnUmVETFFoeHJVSGxZZXlFeUV2RkdSekJkdm1UZmlZZ0tpIjt9', 1633976364),
('N67HimrSC0Xb3HczuQ7YSX3K1kf3M0ARugTNCWgh', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:94.0) Gecko/20100101 Firefox/94.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiWTQxaGhuR2UyejlXb2tsQmIwNkwyWUoxRWoydFhPcGt0dFRtMUR5ayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkQU5udzlxVVdRT0R6OVhuMG4vSmdSZURMUWh4clVIbFlleUV5RXZGR1J6QmR2bVRmaVlnS2kiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJEFObnc5cVVXUU9EejlYbjBuL0pnUmVETFFoeHJVSGxZZXlFeUV2RkdSekJkdm1UZmlZZ0tpIjt9', 1638732224),
('NKqjpXDhMyioVfFuFkLcDsTd7cj9oTcjIJr5ZpB9', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:93.0) Gecko/20100101 Firefox/93.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiUEpjckQxd2ZzYVo1RXhqM0pwaVdmTlNxRW9oekZjZ0RBa0FJQWxRSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi92aWV3LXVzZXJ0YXNrLzIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkQU5udzlxVVdRT0R6OVhuMG4vSmdSZURMUWh4clVIbFlleUV5RXZGR1J6QmR2bVRmaVlnS2kiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJEFObnc5cVVXUU9EejlYbjBuL0pnUmVETFFoeHJVSGxZZXlFeUV2RkdSekJkdm1UZmlZZ0tpIjt9', 1633985772);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Structural Cabling', 'TSK-Zs4Ow', '2021-09-21 21:28:01', '2021-09-21 21:28:01');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `slug`, `team_member`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'test', 'System Admin,Line Manager', NULL, '2021-09-12 17:12:25', '2021-09-12 17:12:25'),
(2, 'project', 'System Admin', NULL, '2021-09-12 17:15:11', '2021-09-12 17:15:11'),
(3, 'project', 'Line Manager', NULL, '2021-09-12 17:15:11', '2021-09-12 17:15:11'),
(4, 'project', 'System User', NULL, '2021-09-12 17:15:11', '2021-09-12 17:15:11'),
(5, 'another-project', 'System Admin', NULL, '2021-09-12 17:17:16', '2021-09-12 17:17:16'),
(6, 'another-project', 'Line Manager', NULL, '2021-09-12 17:17:16', '2021-09-12 17:17:16'),
(7, 'another-project', 'System User', NULL, '2021-09-12 17:17:16', '2021-09-12 17:17:16'),
(8, 'RMC-906Jk', 'System Admin', NULL, '2021-09-21 20:49:46', '2021-09-21 20:49:46'),
(9, 'RMC-906Jk', 'Engr. Engr.', NULL, '2021-09-21 20:49:46', '2021-09-21 20:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `timesheets`
--

CREATE TABLE `timesheets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `approved_by` bigint(20) UNSIGNED DEFAULT NULL,
  `project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` bigint(20) UNSIGNED DEFAULT NULL,
  `task` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `docs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` time DEFAULT NULL,
  `end` time DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timesheets`
--

INSERT INTO `timesheets` (`id`, `user_id`, `approved_by`, `project`, `project_id`, `task`, `code`, `comment`, `docs`, `start`, `end`, `location`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Test Project', NULL, NULL, NULL, 'Test report', NULL, '00:00:00', '00:00:00', NULL, '2021-09-13 16:52:25', '2021-09-13 16:52:25'),
(2, 1, NULL, 'Project Tester', NULL, NULL, NULL, 'This is another testing project. This is used to check the functionality of the application for site use.', NULL, '00:00:00', '00:00:00', NULL, '2021-09-13 17:01:58', '2021-09-13 17:01:58'),
(3, 1, NULL, 'Project Tester', NULL, NULL, NULL, 'We have been able to complete the outstanding works and new cables laid.', NULL, '00:00:00', '00:00:00', NULL, '2021-09-13 17:12:34', '2021-09-13 17:12:34'),
(4, 9, 1, 'Another Project', NULL, NULL, NULL, 'This is some project report that would notify the line manager of what was done.', NULL, '00:00:00', '00:00:00', NULL, '2021-09-13 19:58:48', '2021-09-14 10:15:46'),
(5, 9, NULL, 'Testing', NULL, NULL, NULL, 'This is another project activity', NULL, '00:00:00', '00:00:00', NULL, '2021-09-13 19:59:25', '2021-09-13 19:59:25'),
(6, 9, NULL, 'Project Tester', NULL, NULL, NULL, 'Another project task activity', NULL, '00:00:00', '00:00:00', NULL, '2021-09-13 20:31:29', '2021-09-13 20:31:29'),
(7, 1, 1, 'Testing', NULL, NULL, NULL, 'This is a brief work activity report', NULL, '00:00:00', '00:00:00', 'Testing Location', '2021-09-14 09:26:57', '2021-09-14 10:05:23'),
(8, 1, NULL, 'Project Tester', NULL, NULL, NULL, 'This is some project report', NULL, NULL, NULL, 'Ajah', '2021-09-15 19:23:08', '2021-09-15 19:23:08'),
(9, 1, NULL, 'Another Project', NULL, NULL, NULL, 'This is some project report', NULL, '02:20:00', '03:30:00', 'Lekki', '2021-09-15 19:26:20', '2021-09-15 19:26:20'),
(10, 9, NULL, 'Project Tester', NULL, NULL, NULL, 'This is some project report', NULL, '10:20:00', '23:30:00', 'Ajah', '2021-09-15 19:37:41', '2021-09-15 19:37:41'),
(11, 1, NULL, 'Mystras calm buoy inspection and maintenance', NULL, 'Structural Cabling', 'TSK-Zs4Ow', 'Some project activity', NULL, '10:37:00', '11:20:00', 'Ajah Lekki', '2021-09-22 08:37:48', '2021-09-22 08:37:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'STD' COMMENT 'MGR is for Line managers, USR is user and ADM for admins',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `email_verified_at`, `password`, `department`, `two_factor_secret`, `two_factor_recovery_codes`, `utype`, `phone`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'System', 'Admin', 'admin@admin.com', NULL, '$2y$10$ANnw9qUWQODz9Xn0n/JgReDLQhxrUHlYeyEyEvFGRzBdvmTfiYgKi', NULL, NULL, NULL, 'ADM', NULL, NULL, NULL, NULL, '2021-09-10 17:35:55', '2021-09-10 17:35:55'),
(8, 'Manager', 'User', 'manager@manager.com', NULL, '$2y$10$4v2T/BMb41.WeVLVVJccS.0HRVeTL1pBlaN43cFfZ6uhFG8MBqYO6', 'Admin Department', NULL, NULL, 'MGR', '07077788890', NULL, NULL, '1632301189.jpg', '2021-09-13 11:55:17', '2021-09-22 07:59:49'),
(9, 'Engr.', 'Engr.', 'engr@engr.com', NULL, '$2y$10$0rI/y.cPLcndLiR.rR5oK.HVXTvtM/TobW0DOEZhAkdPRDYSZGTU2', 'Site Works', NULL, NULL, 'USR', '09099988890', NULL, NULL, '1632301054.jpg', '2021-09-13 12:04:14', '2021-09-22 07:57:34'),
(10, 'Adewale', 'Ayomide', 'ade.ayo@yahoo.com', NULL, '$2y$10$XYFMGC51YEhL5STPX8otB.ENR95iYzFWnS1W6R6/BkOg5lw7vR6Hm', 'Site Works', NULL, NULL, 'USR', '07088899909', NULL, NULL, '1631556674.jpg', '2021-09-13 17:11:14', '2021-09-13 17:11:14'),
(11, 'New', 'User', 'new@new.com', NULL, '$2y$10$kP86XZ3DCG47HT.fUc4yK.500Nf5b.T/2p3khVT2lipAXIpSwgO.2', 'Site Works', NULL, NULL, 'USR', '08000990090', NULL, NULL, '1632242141.png', '2021-09-21 15:35:41', '2021-09-21 15:35:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_teams`
--
ALTER TABLE `project_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_types`
--
ALTER TABLE `project_types`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timesheets`
--
ALTER TABLE `timesheets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project_teams`
--
ALTER TABLE `project_teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_types`
--
ALTER TABLE `project_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `timesheets`
--
ALTER TABLE `timesheets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
