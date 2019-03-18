-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2019 at 11:07 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_13_064506_create_test_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'test', '2019-03-18 10:05:26', '2019-03-18 10:05:26'),
(2, 'test2', '2019-03-18 10:05:26', '2019-03-18 10:05:26'),
(3, 'test3', '2019-03-18 10:05:46', '2019-03-18 10:05:46'),
(4, 'test4', '2019-03-18 10:05:46', '2019-03-18 10:05:46');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'I\'ll try if I like being that person, I\'ll come up: if not, I\'ll stay down here with me! There are.', 'Veniam cum aut optio culpa totam dicta est. Dolor omnis in ut ut et pariatur molestiae.', '2019-03-13 07:13:09', '2019-03-13 07:13:09'),
(2, 'It\'s enough to drive one crazy!\' The Footman seemed to her full size by this time.) \'You\'re.', 'Exercitationem aut porro dolore fugiat. Dolorum animi fuga doloribus consequatur et. Numquam ea aut consectetur unde.', '2019-03-13 07:13:09', '2019-03-13 07:13:09'),
(3, 'How brave they\'ll all think me at home! Why, I wouldn\'t say anything about it, and then nodded.', 'Sed accusantium quia sequi aliquid dolores ducimus eos. Nisi reprehenderit suscipit velit voluptatem molestias ea aspernatur. Ducimus nobis autem qui dolor dolorum aut. Dolores voluptas esse inventore asperiores.', '2019-03-13 07:13:09', '2019-03-13 07:13:09'),
(4, 'Alice. \'Now we shall get on better.\' \'I\'d rather finish my tea,\' said the Pigeon went on, taking.', 'Omnis vel dolor odit praesentium aliquam. Eligendi nam aut saepe laboriosam repellat quia delectus. Aliquid alias placeat fugit id. Nisi enim nihil doloremque eveniet aut non aspernatur.', '2019-03-13 07:13:09', '2019-03-13 07:13:09'),
(5, 'Was kindly permitted to pocket the spoon: While the Duchess sang the second time round, she came.', 'Odit aut dolorem qui temporibus. Quia consequatur asperiores in pariatur. Exercitationem quia accusantium sed commodi eos explicabo.', '2019-03-13 07:13:09', '2019-03-13 07:13:09'),
(6, 'Mock Turtle in the morning, just time to hear it say, as it was good manners for her neck would.', 'Est et voluptas ut optio similique. Rerum est saepe neque reprehenderit deleniti. Dolores nulla qui velit nisi neque. Officiis et perspiciatis quos consectetur et sapiente repellat non.', '2019-03-13 07:13:09', '2019-03-13 07:13:09'),
(7, 'May it won\'t be raving mad--at least not so mad as it went, as if a fish came to the law, And.', 'In alias maiores sit. Fuga ipsa autem ab. Voluptas asperiores eveniet soluta eos illum. Qui rerum reprehenderit occaecati consequatur.', '2019-03-13 07:13:09', '2019-03-13 07:13:09'),
(8, 'I\'ll be jury,\" Said cunning old Fury: \"I\'ll try the effect: the next witness!\' said the Hatter.', 'Veniam ad eius et labore. Sit eos sunt deleniti quo cupiditate. Perferendis neque harum reprehenderit molestiae quo ipsum voluptatem eum. Velit doloremque doloremque amet temporibus natus fuga. Ex saepe deserunt veniam officia.', '2019-03-13 07:13:09', '2019-03-13 07:13:09'),
(9, 'Soup! Soup of the Gryphon, and the baby at her side. She was walking hand in hand, in couples.', 'A alias similique deserunt dolorum ea et. Id sit ea iure suscipit autem vel. Officiis fugiat omnis perferendis est molestiae atque. Animi velit in sint iusto pariatur. Assumenda omnis perspiciatis et adipisci a mollitia.', '2019-03-13 07:13:09', '2019-03-13 07:13:09'),
(10, 'And she\'s such a rule at processions; \'and besides, what would be of any use, now,\' thought poor.', 'Exercitationem eum et ipsa nostrum possimus. Qui voluptatum rerum quisquam labore. Fuga non et quis et assumenda aliquid. Doloremque voluptas ducimus ad corporis nam.', '2019-03-13 07:13:09', '2019-03-13 07:13:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
