-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 29, 2024 at 07:54 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `management_system_vatara`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_name`, `email`, `type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mim', 'rafiaweshan4897@gmail.com', 'admin', NULL, '$2y$12$QM/wbnpkEmmMsG0rIKbfC.Tz8j7BkcS9sjBYMYtvOCrPnHPpkVFka', NULL, '2024-10-21 14:07:38', '2024-10-21 14:07:38');

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Absent',
  `submission_date` date NOT NULL,
  `month_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_classes` int NOT NULL,
  `starting_date` date NOT NULL,
  `number_of_students` int NOT NULL,
  `slot_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trainer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classes_done` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `name`, `total_classes`, `starting_date`, `number_of_students`, `slot_id`, `trainer_id`, `status`, `classes_done`, `created_at`, `updated_at`) VALUES
(1, 'batch1', 20, '2024-10-23', 20, '1', '1', 'active', 0, '2024-10-21 14:35:13', NULL),
(2, 'Batch 2', 15, '2024-10-09', 15, '2', '1', 'active', 0, '2024-10-22 11:05:36', NULL),
(3, 'batch 3', 18, '0024-10-02', 34, '3', '1', 'active', 0, '2024-10-22 11:19:09', NULL),
(4, 'batch 4', 500, '2024-10-24', 1000, '4', '1', 'active', 0, '2024-10-24 09:26:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('student1@gmail.com|127.0.0.1', 'i:1;', 1729593647),
('student1@gmail.com|127.0.0.1:timer', 'i:1729593647;', 1729593647),
('trainer1@tr.com|127.0.0.1', 'i:1;', 1729755305),
('trainer1@tr.com|127.0.0.1:timer', 'i:1729755305;', 1729755305),
('trainer2@trainer.com|127.0.0.1', 'i:1;', 1729755402),
('trainer2@trainer.com|127.0.0.1:timer', 'i:1729755402;', 1729755402);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supervisor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_participants` int DEFAULT NULL,
  `registration_fees` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `date`, `end_date`, `time`, `days`, `supervisor`, `total_participants`, `registration_fees`, `created_at`, `updated_at`) VALUES
(1, 'first event', 'blah blah blah', '2024-10-23', NULL, '09:10:00', 'Sunday,Monday', '1', 0, '500', NULL, NULL),
(2, 'second event', 'aifaigjas;lkfjasldf\r\nasdf\r\nas\r\ndfa\r\nsdf\r\nasdf', '2024-10-24', NULL, '10:10:00', 'Monday,Thursday', '1', 0, '500', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Complain', 'I have a complain.', NULL, NULL),
(2, 'instructor complain', 'our class is not regular teacher is also not puntual', NULL, NULL),
(3, 'hdjkhdklf', 'jkjkshdjj', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2024_08_07_152701_create_students_table', 2),
(151, '0001_01_01_000000_create_users_table', 3),
(152, '0001_01_01_000001_create_cache_table', 3),
(153, '0001_01_01_000002_create_jobs_table', 3),
(154, '2024_08_07_152630_create_admins_table', 3),
(155, '2024_08_07_152641_create_trainers_table', 3),
(156, '2024_08_11_145817_create_students_table', 3),
(157, '2024_08_18_140342_create_batches_table', 3),
(158, '2024_09_11_100341_create_events_table', 3),
(159, '2024_09_13_134807_create_slots_table', 3),
(160, '2024_10_07_054633_create_attendances_table', 3),
(161, '2024_10_18_225948_create_notices_table', 3),
(162, '2024_10_22_142642_create_feedback_table', 4),
(163, '2024_10_22_152546_create_requests_table', 5),
(165, '2024_10_23_222816_create_reports_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint UNSIGNED NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` int DEFAULT NULL,
  `students_admitted` int DEFAULT NULL,
  `students_graduated` int DEFAULT NULL,
  `revenue` decimal(15,2) DEFAULT NULL,
  `expenses` decimal(15,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `month`, `year`, `students_admitted`, `students_graduated`, `revenue`, `expenses`, `created_at`, `updated_at`) VALUES
(2, 'January', 2024, 45, 30, 10000.50, 5000.75, NULL, NULL),
(3, 'February', 2024, 50, 35, 12000.00, 5500.00, NULL, NULL),
(4, 'March', 2024, 60, 40, 14000.25, 6000.50, NULL, NULL),
(5, 'April', 2024, 55, 45, 13000.75, 5800.25, NULL, NULL),
(6, 'May', 2024, 70, 50, 15000.10, 6500.90, NULL, NULL),
(7, 'June', 2024, 65, 55, 16000.30, 6700.40, NULL, NULL),
(8, 'July', 2024, 80, 60, 18000.75, 7500.85, NULL, NULL),
(9, 'August', 2024, 90, 70, 20000.00, 8000.00, NULL, NULL),
(10, 'September', 2024, 85, 65, 17000.50, 7200.75, NULL, NULL),
(11, 'October', 2024, 96, 75, 21000.30, 8200.90, NULL, '2024-10-24 09:17:44'),
(12, 'November', 2024, 100, 80, 22000.40, 9000.50, NULL, NULL),
(13, 'December', 2024, 110, 90, 25000.25, 9500.75, NULL, NULL),
(14, 'January', 2023, 40, 28, 9000.50, 4500.75, NULL, NULL),
(15, 'February', 2023, 48, 33, 11000.00, 5200.00, NULL, NULL),
(16, 'March', 2023, 58, 38, 13000.25, 5800.50, NULL, NULL),
(17, 'April', 2023, 52, 42, 12000.75, 5500.25, NULL, NULL),
(18, 'May', 2023, 68, 48, 14000.10, 6200.90, NULL, NULL),
(19, 'June', 2023, 62, 53, 15000.30, 6400.40, NULL, NULL),
(20, 'July', 2023, 75, 58, 17000.75, 7200.85, NULL, NULL),
(21, 'August', 2023, 85, 68, 19000.00, 7800.00, NULL, NULL),
(22, 'September', 2023, 80, 60, 16000.50, 6900.75, NULL, NULL),
(23, 'October', 2023, 92, 70, 20000.30, 8000.90, NULL, NULL),
(24, 'November', 2023, 95, 75, 21000.40, 8500.50, NULL, NULL),
(25, 'December', 2023, 105, 85, 24000.25, 9200.75, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Xd25AVmOPenfosaN3mnxJ9NTsZK7gG222UpxIw43', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:132.0) Gecko/20100101 Firefox/132.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVFREcXgxZjZUblgwaEpJNVZYWjI3VUplNXdyTGNkdGxUT2lSR1BNVyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1NDoibG9naW5fdHJhaW5lcl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1729960563);

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` bigint UNSIGNED NOT NULL,
  `slot_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starting_time` time DEFAULT NULL,
  `ending_time` time DEFAULT NULL,
  `days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`id`, `slot_name`, `starting_time`, `ending_time`, `days`, `created_at`, `updated_at`) VALUES
(1, 'slot1', '09:00:00', '11:00:00', 'Saturday,Monday,Wednesday', NULL, NULL),
(2, 'Batch 2', '16:00:00', '18:00:00', 'Sunday,Tuesday,Thursday', NULL, NULL),
(3, 'batch 3', '16:00:00', '18:00:00', 'Saturday,Sunday,Monday,Tuesday,Wednesday,Friday', NULL, NULL),
(4, 'batch 4', '16:00:00', '15:00:00', 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint UNSIGNED NOT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `height` double DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_joining` date DEFAULT NULL,
  `gender` enum('male','female','other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attended_class` int DEFAULT NULL,
  `fees` int DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `enc_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `image`, `address`, `date_of_birth`, `height`, `weight`, `contact_number`, `email`, `date_of_joining`, `gender`, `batch_id`, `student_id`, `attended_class`, `fees`, `status`, `position`, `email_verified_at`, `enc_pass`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'mithila', 'student_image/1729521399.jpeg', 'dhaka', '2024-10-23', 5.7, 70, '11111111111', 'rafiawes4897@gmail.com', '2024-10-21', 'female', '1', '2', 0, 200, 'learning', 'White Belt', NULL, 'eyJpdiI6IlRCdDdsQit4L3RWWWxjai8vTlVFRFE9PSIsInZhbHVlIjoiQ01yTzBRcXhkbmlTWVZseWtMMno5Zz09IiwibWFjIjoiN2YyN2NhZGRhZGUyMTdiYTFlOWQyMjA5OWZjZWNlZmI3ZDM3ZDhkM2I4NTRkODc2NGU3OGMwODQ5NDJlZjA1MyIsInRhZyI6IiJ9', '$2y$12$qOcMQPXyXsUMmP3AZPeF..f.g83lWawuxg0W.uP73KHzKlhJbtcDO', 'etBhS9cyGbK27EMGdAGmOdztwKzSJ4XtVI04QjurJyiGotxMPzGTpoqnb9uX', '2024-10-21 14:36:39', '2024-10-22 07:34:06'),
(3, 'student2', 'student_image/1729709604.jpeg', 'dhaka', '2024-10-02', 5.7, 68, '01111111111', 'student2@st.com', '2024-10-24', 'male', '2', 'st24494885', 0, 200, 'learning', 'White Belt', NULL, 'eyJpdiI6Ik9wQzRwNEVDRmZJRE1ST25kUGg3dXc9PSIsInZhbHVlIjoiZEhVVXZnK0x1YWc0S3Z1bGwxdkYrZz09IiwibWFjIjoiYjUyZjBjYWJmMmJhYmY0MWJkZTFkYzljNTUzMzkyYTUwOGQ3MWRlYzI2NWMyMGE1ZDllNzI2NzkwY2U4YjVlOCIsInRhZyI6IiJ9', '$2y$12$Ly79IWQJvflwkscMISJzxeeGjqwtntf6VOV8QOsyHqk7hXyN7J4pe', NULL, '2024-10-23 18:53:25', '2024-10-23 18:53:25'),
(4, 'student2', 'student_image/1729709732.jpeg', 'dhaka', '2024-10-02', 5.7, 68, '01111111111', 'student2@st.com', '2024-10-24', 'male', '2', 'st24272676', 0, 200, 'learning', 'White Belt', NULL, 'eyJpdiI6IjFwN2Y1K1U0Q0cvUzNGeFVuS1ExSUE9PSIsInZhbHVlIjoib2VpQzUrWFNRWjNuc0pHZXNLVHFPUT09IiwibWFjIjoiODZiMjg4NThmZjI1YTVmM2ExODFlZTdkZDUyODYwMWUxYzRiNWE1MmNiOTBlOTJkOTNmMWFmNWJjMWNlODEyNCIsInRhZyI6IiJ9', '$2y$12$IK3EQWMhPUKNu0JeMTRAFO6GBppEBjPqfwv2iz/SJMs6nCWu33W42', NULL, '2024-10-23 18:55:33', '2024-10-23 18:55:33'),
(5, 'johura mmi', 'student_image/1729761463.jpg', 'mbmbnbmn', '1999-09-09', 127, 76, '0445664656', 'johuramimi6104@gmail.com', '2024-10-24', 'male', '2', 'st24095721', 0, -421, 'learning', 'White Belt', NULL, 'eyJpdiI6IklCUUdFOEF2TnVNRGczdmdWd1p4aFE9PSIsInZhbHVlIjoiOW9aN2dHMFFNNlZHKzFqbldKQi9NZz09IiwibWFjIjoiMWJmMTM2OWZkZGRjODU5MDAxNGQ5NGM1YzM4N2Q3ZGY0ZDI5MTk0OWQ3M2QzYmNkYWE0OWFjNTYwOWYwYWQyNCIsInRhZyI6IiJ9', '$2y$12$oFw6XUzl9qp0zWPrO9xIFu9jy.SoVHBPQwElxi5mX0VfqF1zYKygy', NULL, '2024-10-24 09:17:44', '2024-10-24 09:17:44');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` bigint UNSIGNED NOT NULL,
  `trainer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `height` double DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_joining` date DEFAULT NULL,
  `gender` enum('male','female','other') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batch_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trainer_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `honorarium` int DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `times` json DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `enc_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `trainer_name`, `image`, `address`, `date_of_birth`, `height`, `weight`, `contact_number`, `email`, `date_of_joining`, `gender`, `batch_id`, `trainer_id`, `position`, `honorarium`, `status`, `times`, `email_verified_at`, `enc_pass`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'trainer1', 'trainer_image/1729520510.jpeg', 'dhaka', '2024-10-14', 5.8, 70, '11111111111', 'trainer1@trainer.com', '2024-10-21', NULL, NULL, 'st24744914', 'Trainer', 3000, 'ative', NULL, NULL, 'eyJpdiI6IjdHaE1ZaHZabXhFZlJPazNidDZPYUE9PSIsInZhbHVlIjoidTVZbDdIWmozL2YvR2Jjc0g0VFd0dz09IiwibWFjIjoiMTllYTg0NGE4MjU3YWE1Y2MxZmEzMTBlNmIyZTAwMjUwNzY1NTQ0YTFhYjM4ODg4MzY4MDdkYjQxYzhlODg5YSIsInRhZyI6IiJ9', '$2y$12$QSe9sTtClcnbx/kVP5JisOvbCVyZ9.VAUPmknl.wQbccYf35FJxp6', 'lH0x5tCz7lbHiFiyvdohaVnpUoKAWmizHxb8blvztqioCO2SoUSPeU6aJyeJ', '2024-10-21 14:21:51', '2024-10-21 14:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
