-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Agu 2022 pada 11.18
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deacourse_laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `tag`, `created_at`, `updated_at`) VALUES
(9, 'Officia dignissimos eius possimus aliquid enim culpa consequatur. Quia sint tempore quibusdam dolorem nihil beatae. Molestiae a ut voluptatem doloremque nesciunt.', 'Dolor repellat aperiam earum soluta non nihil illum. Sit tempore unde vero ut illo. Ut voluptatum dicta non est.', 'aut', '2022-07-31 18:35:58', '2022-08-01 18:55:33'),
(10, 'Est similique harum velit. Ut totam debitis molestiae nostrum laborum quas quaerat. Cum repudiandae molestias aspernatur sequi dolorem laboriosam perspiciatis voluptatem.', 'Esse quia maiores cumque iusto quo. Voluptatum dolores et ea laboriosam quia. Eligendi voluptatem doloribus ea.', 'sunt', '2022-07-31 18:35:58', '2022-07-31 18:35:58'),
(11, 'Sed qui repellendus eveniet suscipit nobis facere. Quis odio ipsam quis qui omnis. Et aliquam id fuga delectus.', 'Cum hic aut cum ut id mollitia. Tenetur quia fuga illum et.', 'autem', '2022-07-31 18:35:58', '2022-07-31 18:35:58'),
(13, 'Similique nam laudantium voluptates alias voluptatem nesciunt. Quia quasi laudantium nemo. Sit consequatur vel qui impedit nemo.', 'Sed deleniti aliquam sint perferendis autem ad necessitatibus. Doloribus recusandae placeat ut ut cupiditate ea. Vel fugiat amet hic quis.', 'debitis', '2022-07-31 18:35:58', '2022-07-31 18:35:58'),
(14, 'Sequi aut qui consequatur sit. Repudiandae ut eveniet ut rerum est veniam recusandae consequatur. Ea voluptatem sit repudiandae.', 'Ut est ut consequuntur consequatur aperiam. Rerum sint numquam quis id quasi ullam. Dolore nulla porro est.', 'non', '2022-07-31 18:35:58', '2022-07-31 18:35:58'),
(16, 'Pariatur reprehenderit vero occaecati sequi fugiat voluptatem. Perspiciatis eum quia ullam repellendus asperiores debitis ut. In similique deserunt dignissimos reiciendis repellat explicabo suscipit.', 'Autem cumque nihil velit. Aliquam ut quia facere natus.', 'harum', '2022-07-31 18:35:58', '2022-07-31 18:35:58'),
(17, 'Quis aut ex eum aspernatur sit. Incidunt qui sunt minima qui impedit. Nihil laboriosam ut impedit est quibusdam aliquid.', 'Ut quia odio architecto ut ut. Est voluptates aliquid vel.', 'ipsa', '2022-07-31 18:35:58', '2022-08-01 16:00:24'),
(18, 'Et corporis nisi et blanditiis. Voluptatem sunt et ex voluptatem id quia. Id aut et aut nisi.', 'Nihil at vero aut maiores natus. Quaerat veritatis fugiat esse minima sint. Et voluptas neque fuga a aliquid et tempora laborum.', 'aut1', '2022-07-31 18:35:58', '2022-08-01 16:12:25'),
(19, 'Iste et eveniet deserunt quis. Eaque officiis sint sit minus tempora nihil. Odio ab alias alias aut quidem consequuntur officiis veniam.', 'Et sunt iusto quod est autem. Eum dolor sint enim excepturi ab et labore.', 'placeat', '2022-07-31 18:35:58', '2022-07-31 18:35:58'),
(20, 'Fugiat earum fugiat molestiae laboriosam omnis. Consequatur quae laboriosam voluptatem aut debitis. Esse temporibus mollitia beatae qui ducimus alias.', 'Et ipsum aut laborum recusandae illo hic tenetur. Sint fugiat a repudiandae quia enim error odio. Et ipsum aut laborum recusandae illo hic tenetur. Sint fugiat a repudiandae quia enim error odio. Et ipsum aut laborum recusandae illo hic tenetur. Sint fugiat a repudiandae quia enim error odio. Et ipsum aut laborum recusandae illo hic tenetur. Sint fugiat a repudiandae quia enim error odio. Et ipsum aut laborum recusandae illo hic tenetur. Sint fugiat a repudiandae quia enim error odio.', 'tempora', '2022-07-31 18:35:58', '2022-08-01 17:12:46'),
(27, 'tes31', '1', '1', '2022-08-01 17:24:51', '2022-08-01 19:08:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_07_31_043203_create_users_table', 1),
(5, '2022_07_31_062138_create_articles_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `token`, `created_at`, `updated_at`) VALUES
(1, 'deafrizal', '$2y$10$zi/OGVMQKTxMXi8ZYdu7LeVIVqrqoxMwOT1R8RW91b3iiah3Kldx2', NULL, '2022-07-31 16:48:44', '2022-08-01 19:20:28'),
(2, 'deafrizal1', '$2y$10$DxrawyXngAELbOf44tT1YeOByzKiY0l16y9A29uufgLSQW2UU4PvS', NULL, '2022-08-01 17:04:54', '2022-08-01 17:05:59'),
(3, 'deafrizal2', '$2y$10$rTLiZEEHqjONsz4LzxsPauVBtkm1z5AGlQLbeqti0T7Xj0QyLCj6m', NULL, '2022-08-01 17:51:45', '2022-08-01 17:51:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
