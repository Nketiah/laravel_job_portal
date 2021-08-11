-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 11:16 AM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `job_categories`
--

CREATE TABLE `job_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_models`
--

CREATE TABLE `job_models` (
  `id` bigint UNSIGNED NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_description` text COLLATE utf8mb4_unicode_ci,
  `job_requirement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_models`
--

INSERT INTO `job_models` (`id`, `job_title`, `job_location`, `company_name`, `category`, `job_type`, `job_description`, `job_requirement`, `company_logo`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'React Js developer', 'Kumasi', 'INNORIK', 'IT', 'remote', 'We bridge time zones and distance with thorough and transparent communication. We’re a group of solid humans from a variety of backgrounds, with a wide range of perspectives, which serves to strengthen our team. We frequently work in cross-functional projects, and you’ll get to work with awesome people in all different roles in the company. We leave our egos at the door and value input and ideas from everyone at the company.', '[\"first degree in computer science\",\"wassce\"]', 'logos/KJZdBDWEOQWKuGVFmyfmYXETlp9IBD06WGpD1gee.png', 4, '2021-08-10 14:51:22', '2021-08-10 14:51:22'),
(2, 'Agric extension officer', 'Koforidua', 'oola farm', 'Agriculture', 'office', 'You\'ll be working closely with a young group of highly motivated, fast-paced business owners that will expect you to hold yourself to the highest standards of code quality and work ethic. You will be rewarded for going above and beyond, and for adhering to our core values.', '[\"HND\",\"Wassce\"]', 'logos/dmeaDv6TXfRRs7wnBVYbNtgGixOoY4bF7ljqxDiU.png', 4, '2021-08-11 10:01:07', '2021-08-11 10:01:07'),
(3, 'Fashion designer', 'Takoradi', 'Pivoo', 'Fashion', 'office', 'You\'ll be working closely with a young group of highly motivated, fast-paced business owners that will expect you to hold yourself to the highest standards of code quality and work ethic. You will be rewarded for going above and beyond, and for adhering to our core values.', '[\"HND\",\"Wassce\"]', 'logos/ImslFTF53pZVzSELIcnbleSEyfiBDAcScqUaTAWj.png', 4, '2021-08-11 10:02:25', '2021-08-11 10:02:25'),
(4, 'IT school teacher', 'Madina', 'west blue', 'Technician', 'office', 'We are a fast-paced team of engineers, marketing geeks, and hardworking, purpose-oriented individuals. To date, we’ve processed millions of online web inquiries and generated tens of millions of unique site visitors.', '[\"first degree in computer science\"]', 'logos/zMYRAKbaTfdhKtPZMyv09rJARWLSgANXP0NYvPYW.png', 4, '2021-08-11 11:09:33', '2021-08-11 11:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `job__applieds`
--

CREATE TABLE `job__applieds` (
  `id` bigint UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nss_certificate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `company_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `job_model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job__applieds`
--

INSERT INTO `job__applieds` (`id`, `firstname`, `lastname`, `age`, `religion`, `nationality`, `institution`, `nss_certificate`, `resume`, `status`, `company_id`, `created_at`, `updated_at`, `user_id`, `job_model_id`) VALUES
(2, 'Joseph', 'Bretto', 12, 'Christian', 'Nigeria', 'ktu', 'logos/os5zJfWlYBWcxFZcPYNKwqtXgC8duN9yLrm03b1H.pdf', 'logos/JgvhspUU4uDwbTFLl8gFkGGxnJwYJAxi3sggjDG3.pdf', 0, 4, '2021-08-11 09:53:49', '2021-08-11 09:53:49', 3, 1);

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_07_14_090113_create_roles_table', 1),
(4, '2021_07_16_000000_create_users_table', 1),
(5, '2021_07_21_171928_create_job_models_table', 1),
(6, '2021_07_21_172011_create_job_categories_table', 1),
(7, '2021_08_03_074824_create_job__applieds_table', 1),
(8, '2021_08_10_141317_create_countries_table', 1),
(9, '2021_08_10_141342_create_categories_table', 1);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'freelancer', NULL, NULL),
(2, 'company', NULL, NULL),
(3, 'admin', NULL, NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `qualification`, `company_name`, `role_id`) VALUES
(3, 'Nii Armar', 'nii@gmail.com', '2021-08-10 14:41:42', '$2y$10$IZtICn8oH60yDV2fQEqQSeeIVPJhG8lH2oXJc5NGVBRVP0Ot3C5o.', NULL, '2021-08-10 14:41:26', '2021-08-10 14:41:42', NULL, NULL, 1),
(4, 'Kwame Nsiah', 'gyatabajoe@gmail.com', '2021-08-10 14:42:49', '$2y$10$f0Np.QrrZj/p5fsNayOf5erIT9rG0IpptgCa3Qzmx1kCdT/MLb26e', NULL, '2021-08-10 14:42:28', '2021-08-10 14:42:49', NULL, NULL, 2),
(5, 'Kelvin Asare', 'asare@gmail.com', '2021-08-10 14:44:29', '$2y$10$ftjEXCa08.b5k0t3j0Enc.f5whPh7JrlVot8q6eCVX9p3ts.dkfh6', NULL, '2021-08-10 14:44:10', '2021-08-10 14:44:29', NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `job_categories`
--
ALTER TABLE `job_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_models`
--
ALTER TABLE `job_models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_models_user_id_foreign` (`user_id`);

--
-- Indexes for table `job__applieds`
--
ALTER TABLE `job__applieds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job__applieds_user_id_foreign` (`user_id`),
  ADD KEY `job__applieds_job_model_id_foreign` (`job_model_id`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_categories`
--
ALTER TABLE `job_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_models`
--
ALTER TABLE `job_models`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job__applieds`
--
ALTER TABLE `job__applieds`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_models`
--
ALTER TABLE `job_models`
  ADD CONSTRAINT `job_models_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `job__applieds`
--
ALTER TABLE `job__applieds`
  ADD CONSTRAINT `job__applieds_job_model_id_foreign` FOREIGN KEY (`job_model_id`) REFERENCES `job_models` (`id`),
  ADD CONSTRAINT `job__applieds_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
