-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2024 at 02:13 AM
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
-- Database: `escuelalaravel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseId` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `teacherId` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `school` text NOT NULL,
  `subject` text NOT NULL,
  `numberGrades` int(11) NOT NULL,
  `numberStudents` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseId`, `slug`, `teacherId`, `name`, `school`, `subject`, `numberGrades`, `numberStudents`, `created_at`, `updated_at`) VALUES
(1, '772', 1, '4to1ra', 'EES31', 'Historia', 10, 12, '2024-07-03 04:37:15', '2024-07-03 04:37:15'),
(2, '7180', 1, '5to2da', 'EES31', 'ggf', 12, 22, '2024-07-06 20:45:48', '2024-07-06 20:45:48'),
(3, '8008', 1, '4to1ra', 'EES31', 'Historia', 12, 32, '2024-07-11 20:38:45', '2024-07-11 20:38:45'),
(4, '97513', 1, '6to4ta', 'EES22', 'Filosofia', 12, 11, '2024-07-11 20:40:30', '2024-07-11 20:40:30'),
(5, '25207', 2, '1ro6ta', 'EES24', 'Geografia', 12, 14, '2024-07-11 21:32:12', '2024-07-11 21:32:12');

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
(1, '2014_10_12_000000_create_teachers_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(4, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2024_03_13_193749_create_courses_table', 1),
(8, '2024_03_16_022952_create_students_table', 1),
(9, '2024_03_31_221652_create_sessions_table', 1),
(10, '2024_04_06_225806_students', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('eAaCYGcb5V5W0C0LB6Zxyz2Y9gC7QkF1dJcEsjBh', 5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiVGpiS0dMM0w2QlRhS09YTHVQS3lNaVJzZzJIZUthS2o5MEprenJTeSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njc6Imh0dHA6Ly9sb2NhbGhvc3QvbWklMjBwcm95ZWN0by9lc2N1ZWxhTGFyYXZlbC9lc2N1ZWxhTGFyYXZlbC9wdWJsaWMiO31zOjk6InRlYWNoZXJJZCI7aTo1O3M6NDoibmFtZSI7czoxMjoiQ2hpYXJhIFNvZmlhIjtzOjU6ImVtYWlsIjtzOjIwOiJjaGlhcml0YUBob3RtYWlsLmNvbSI7czozOiJyb2wiO2k6MjtzOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo1O30=', 1720724195),
('FfVAzlThwelgsMqCgjhITgbBzqkxVLmebduzP9Rd', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiRUgxcHlQWDZYWGtsV0p4WjNKcVFJUGN6Q1dBNTJWTjNQSEFDeEw1biI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njc6Imh0dHA6Ly9sb2NhbGhvc3QvbWklMjBwcm95ZWN0by9lc2N1ZWxhTGFyYXZlbC9lc2N1ZWxhTGFyYXZlbC9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6OToidGVhY2hlcklkIjtpOjE7czo0OiJuYW1lIjtzOjE2OiJFbW1hbnVlbCBNYXTDrWFzIjtzOjM6InJvbCI7aToyO3M6NToiZW1haWwiO3M6OToiZW1tYWRAZGRzIjt9', 1715521254),
('Nj9aLTaNN1qgFSQTMowIfmGUkgi04AgwYHOm6u0A', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiV1FCeVFLdFVGdThkam94UEZ0Nmx5dlJCS3NuamlrN1YybE1YMlZFcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODI6Imh0dHA6Ly9sb2NhbGhvc3QvbWklMjBwcm95ZWN0by9lc2N1ZWxhTGFyYXZlbC9lc2N1ZWxhTGFyYXZlbC9wdWJsaWMvY291cnNlcy9jcmVhdGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6OToidGVhY2hlcklkIjtpOjE7czo0OiJuYW1lIjtzOjE2OiJFbW1hbnVlbCBNYXTDrWFzIjtzOjM6InJvbCI7aToyO3M6NToiZW1haWwiO3M6OToiZW1tYWRAZGRzIjt9', 1720287961),
('NsHVHzKH0dR6rmMkgGGgVfzKeTbmu24qbYY6voz3', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiQTc0UzdIY0pTcWpnS09rSkJXNUEzN00wRjhMalg0Z3RVSjJTd1NHdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Nzc6Imh0dHA6Ly9sb2NhbGhvc3QvbWklMjBwcm95ZWN0by9lc2N1ZWxhTGFyYXZlbC9lc2N1ZWxhTGFyYXZlbC9wdWJsaWMvY291cnNlcy8xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjk6InRlYWNoZXJJZCI7aToxO3M6NDoibmFtZSI7czoxNjoiRW1tYW51ZWwgTWF0w61hcyI7czozOiJyb2wiO2k6MjtzOjU6ImVtYWlsIjtzOjk6ImVtbWFkQGRkcyI7fQ==', 1720220187),
('TnyX8nCtIAGAP94AimSOA5baeHxrdogYKasrY9t5', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiaGVzbmhlelRFcWUyVnFWTnQzMHlMUVlBY0pVOFdsNFFpNlE2cjJnbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njc6Imh0dHA6Ly9sb2NhbGhvc3QvbWklMjBwcm95ZWN0by9lc2N1ZWxhTGFyYXZlbC9lc2N1ZWxhTGFyYXZlbC9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6OToidGVhY2hlcklkIjtpOjE7czo0OiJuYW1lIjtzOjE2OiJFbW1hbnVlbCBNYXTDrWFzIjtzOjM6InJvbCI7aToyO3M6NToiZW1haWwiO3M6OToiZW1tYWRAZGRzIjt9', 1715593913),
('Uc56qKWuyUxN5RpUGxC6bd8MvC82P9C8TwAjKhvu', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieURrTUFPSjZSTmJMMnZBZHNEZW5NUVc2Q1l6bUVqTTNTNVFxUldjSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njc6Imh0dHA6Ly9sb2NhbGhvc3QvbWklMjBwcm95ZWN0by9lc2N1ZWxhTGFyYXZlbC9lc2N1ZWxhTGFyYXZlbC9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1719970404),
('W9yt2vd0AfTXLzEzUqXgqmX80eUIv9Xuv60GVoo4', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiUDNrSnJVUnBzZzVacVVBeVBQdWJ4TVJKeGxsSlVlZE03QnZIczUxSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njc6Imh0dHA6Ly9sb2NhbGhvc3QvbWklMjBwcm95ZWN0by9lc2N1ZWxhTGFyYXZlbC9lc2N1ZWxhTGFyYXZlbC9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6OToidGVhY2hlcklkIjtpOjE7czo0OiJuYW1lIjtzOjE2OiJFbW1hbnVlbCBNYXTDrWFzIjtzOjM6InJvbCI7aToyO3M6NToiZW1haWwiO3M6OToiZW1tYWRAZGRzIjt9', 1719952815),
('YGmRfNts2PR13feng8Pl1misjXIjspSnBETm9ros', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiMnRmUjF4bWxtdUFRY3hzeHp2SjdCQXVadDE1cUlCYnNibHVla242eSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Nzc6Imh0dHA6Ly9sb2NhbGhvc3QvbWklMjBwcm95ZWN0by9lc2N1ZWxhTGFyYXZlbC9lc2N1ZWxhTGFyYXZlbC9wdWJsaWMvY291cnNlcy8xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjk6InRlYWNoZXJJZCI7aToxO3M6NDoibmFtZSI7czoxNjoiRW1tYW51ZWwgTWF0w61hcyI7czozOiJyb2wiO2k6MjtzOjU6ImVtYWlsIjtzOjk6ImVtbWFkQGRkcyI7fQ==', 1719970702),
('z7evwQiXiWELABtZP4nrY1XcDL4Y7p0PD9N5mod4', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiQ2phSldtWjJYdGx4b0J1eEVmaE93WFB1ckJPY21pb2tvbUw0dWtqSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Nzc6Imh0dHA6Ly9sb2NhbGhvc3QvbWklMjBwcm95ZWN0by9lc2N1ZWxhTGFyYXZlbC9lc2N1ZWxhTGFyYXZlbC9wdWJsaWMvY291cnNlcy8xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjk6InRlYWNoZXJJZCI7aToxO3M6NDoibmFtZSI7czoxNjoiRW1tYW51ZWwgTWF0w61hcyI7czozOiJyb2wiO2k6MjtzOjU6ImVtYWlsIjtzOjk6ImVtbWFkQGRkcyI7fQ==', 1719971408),
('zwBeafdv7AHDQAY4KNP0218Uv6mWEKkVEW9vT6IX', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo5OntzOjY6Il90b2tlbiI7czo0MDoiaFJPVHQyYThpTmhaQkQycnBaUEtrSHN4UDBldWNvWkkzejI5UW80TiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo4MjoiaHR0cDovL2xvY2FsaG9zdC9taSUyMHByb3llY3RvL2VzY3VlbGFMYXJhdmVsL2VzY3VlbGFMYXJhdmVsL3B1YmxpYy9jb3Vyc2VzL2NyZWF0ZSI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjc1OiJodHRwOi8vbG9jYWxob3N0L21pJTIwcHJveWVjdG8vZXNjdWVsYUxhcmF2ZWwvZXNjdWVsYUxhcmF2ZWwvcHVibGljL2NvdXJzZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6OToidGVhY2hlcklkIjtpOjE7czo0OiJuYW1lIjtzOjE2OiJFbW1hbnVlbCBNYXTDrWFzIjtzOjM6InJvbCI7aToyO3M6NToiZW1haWwiO3M6OToiZW1tYWRAZGRzIjt9', 1715525936);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentId` bigint(20) UNSIGNED NOT NULL,
  `teacherId` int(11) NOT NULL,
  `courseId` int(11) NOT NULL,
  `columnNumber` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `grades` varchar(60) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentId`, `teacherId`, `courseId`, `columnNumber`, `name`, `grades`, `created_at`, `updated_at`) VALUES
(4, 1, 1, 0, 'Emmanuel Matías', '10', '2024-07-06 01:48:16', '2024-07-06 01:48:20'),
(5, 1, 1, 1, 'jorgito', '6', '2024-07-06 01:54:32', '2024-07-06 01:55:24'),
(6, 1, 1, 2, '5to2da', NULL, '2024-07-06 01:55:56', '2024-07-06 01:55:56'),
(7, 2, 5, 0, 'jorgito', '10', '2024-07-11 21:32:31', '2024-07-11 21:32:36');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacherId` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(90) NOT NULL,
  `branch` text NOT NULL,
  `rol` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `namePhoto` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacherId`, `name`, `branch`, `rol`, `email`, `email_verified_at`, `password`, `photo`, `namePhoto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'emmanuel matías', 'Ciencias Sociales', 2, 'emmad@dds', NULL, '$2y$12$oUUtZff.N.gRSp6EYiiDl.UZfCBf9xsW6V9I9AINiPE.XLVz8pMSe', 'C:\\xampp\\tmp\\phpEB6F.tmp', 'photo.1.png', NULL, '2024-05-10 12:30:28', '2024-05-12 16:51:33'),
(2, 'emmanuel matías di benedetto', 'Ciencias Sociales', 2, 'emma33@gmail.com', NULL, '$2y$12$ZX78ycvxJ3t.s5VSdQDkXeuHd4X05I9XdFV0FYY6SbEUzkHJPqbLC', NULL, NULL, NULL, '2024-07-11 21:30:04', '2024-07-11 21:30:04'),
(4, 'emmanuel matías di benedetto', 'Ciencias Sociales', 2, 'emma33333@gmail.com', NULL, '$2y$12$.N8GydibkR82M/9AH5III.63SI86AoIYi7UC6yhuafBDamQS8R4Vi', NULL, NULL, NULL, '2024-07-11 21:30:46', '2024-07-11 21:30:46'),
(5, 'chiara sofia', 'Letras', 2, 'chiarita@hotmail.com', NULL, '$2y$12$L8uIOfuKgRl.iHn/I8AcQ.Dse8Z6bRYQZr7XDRhGyc4ULEsWxxQP6', NULL, 'generico.png', NULL, '2024-07-11 21:56:05', '2024-07-11 21:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseId`),
  ADD UNIQUE KEY `courses_slug_unique` (`slug`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentId`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacherId`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courseId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `studentId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacherId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
