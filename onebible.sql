-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 03:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onebible`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_05_14_021439_create_books_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `new_books`
--

CREATE TABLE `new_books` (
  `id` int(11) NOT NULL,
  `n_book` varchar(100) NOT NULL,
  `chapters` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_books`
--

INSERT INTO `new_books` (`id`, `n_book`, `chapters`) VALUES
(1, 'Matthew', 28),
(2, 'Mark', 16),
(3, 'Luke', 24),
(4, 'John', 21),
(5, 'Acts (of the Apostles)', 28),
(6, 'Romans', 16),
(7, '1 Corinthians', 16),
(8, '2 Corinthians', 13),
(9, 'Galatians', 6),
(10, 'Ephesians', 6),
(11, 'Philippians', 4),
(12, 'Colossians', 4),
(13, '1 Thessalonians', 5),
(14, '2 Thessalonians', 3),
(15, '1 Timothy', 6),
(16, '2 Timothy', 4),
(17, 'Titus', 3),
(18, 'Philemon', 1),
(19, 'Hebrews', 13),
(20, 'James', 5),
(21, '1 Peter', 5),
(22, '2 Peter', 3),
(23, '1 John', 5),
(24, '2 John', 1),
(25, '3 John', 1),
(26, 'Jude', 1),
(27, 'Revelation', 22);

-- --------------------------------------------------------

--
-- Table structure for table `old_books`
--

CREATE TABLE `old_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `books` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chapters` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `old_books`
--

INSERT INTO `old_books` (`id`, `books`, `chapters`) VALUES
(1, 'Genesis', 50),
(2, 'Exodus', 40),
(3, 'Leviticus', 27),
(4, 'Numbers', 36),
(5, 'Deuteronomy', 34),
(6, 'Joshua', 24),
(7, 'Judges', 21),
(8, 'Ruth', 4),
(9, '1 Samuel', 31),
(10, '2 Samuel', 24),
(11, '1 Kings', 22),
(12, '2 Kings', 25),
(13, '1 Chronicles', 29),
(14, '2 Chronicles', 36),
(15, 'Ezra', 10),
(16, 'Nehemiah', 13),
(17, 'Esther', 10),
(18, 'Job', 42),
(19, 'Psalms', 150),
(20, 'Proverbs', 31),
(21, 'Ecclesiastes', 12),
(22, 'Song of Solomon', 8),
(23, 'Isaiah', 66),
(24, 'Jeremiah', 52),
(25, 'Lamentations', 5),
(26, 'Ezekiel', 48),
(27, 'Daniel', 12),
(28, 'Hosea', 14),
(29, 'Joel', 3),
(30, 'Amos', 9),
(31, 'Obadiah', 1),
(32, 'Jonah', 4),
(33, 'Micah', 7),
(34, 'Nahum', 3),
(35, 'Habakkuk', 3),
(36, 'Zephaniah', 3),
(37, 'Haggai', 2),
(38, 'Zechariah', 14),
(39, 'Malachi', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_books`
--
ALTER TABLE `new_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `old_books`
--
ALTER TABLE `old_books`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `new_books`
--
ALTER TABLE `new_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `old_books`
--
ALTER TABLE `old_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
