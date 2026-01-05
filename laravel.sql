-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2026 pada 13.20
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Obat Bebas', 'Obat yang dapat dibeli tanpa resep dokter untuk keluhan ringan.', '2026-01-01 21:30:09', '2026-01-01 21:30:09'),
(2, 'Obat Bebas Terbatas', 'Obat yang dapat dibeli tanpa resep namun dengan aturan pakai tertentu.', '2026-01-01 21:30:40', '2026-01-01 21:30:40'),
(3, 'Obat Resep', 'Obat yang hanya dapat dibeli dengan resep dokter.', '2026-01-01 21:31:04', '2026-01-01 21:31:04'),
(4, 'Vitamin & Suplemen', 'Produk vitamin dan suplemen untuk menjaga kesehatan tubuh.', '2026-01-01 21:31:27', '2026-01-01 21:31:27'),
(5, 'Alat Kesehatan', 'Alat medis sederhana untuk kebutuhan kesehatan sehari-hari.', '2026-01-01 21:31:50', '2026-01-01 21:31:50'),
(6, 'Obat Herbal', 'Obat berbahan alami atau herbal untuk pengobatan tradisional.', '2026-01-01 21:32:12', '2026-01-01 21:32:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_12_29_202926_create_categories_table', 1),
(5, '2025_12_29_203121_create_products_table', 1),
(6, '2025_12_29_203212_add_role_to_users_table', 1),
(10, '2026_01_01_154247_create_stock_logs_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `price`, `stock`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Paracetamol 500 mg', 5000, 45, 'Obat penurun demam dan pereda nyeri ringan hingga sedang.', 'products/wpLs1WFOjZ5a3cwpgvUb3Mf3qShg6H0PF9zlCsgH.jpg', '2026-01-01 21:34:38', '2026-01-01 21:45:42'),
(2, 6, 'Antangin Cair', 4000, 33, 'Obat herbal untuk membantu meredakan masuk angin.', 'products/B5AK9R9m5Quo6lV0ZOJ4UZ400QYhyZBShi5hlRMK.jpg', '2026-01-01 21:36:00', '2026-01-01 21:46:31'),
(3, 2, 'OBH Combi Batuk Berdahak', 15000, 10, 'Sirup obat batuk untuk membantu meredakan batuk berdahak.', 'products/fXstShpwWejTNT3KGdLus75gCHMVBMdjQUw4NB15.jpg', '2026-01-01 21:37:08', '2026-01-01 21:46:52'),
(4, 2, 'Decolgen', 3500, 30, 'Obat untuk membantu meredakan gejala flu dan pilek.', 'products/6kvu8FX1WthMg3zMwXlJfJK11UCI2jDVUregBEwb.jpg', '2026-01-01 21:38:23', '2026-01-01 21:38:44'),
(5, 4, 'Vitamin C 500 mg', 2000, 30, 'Suplemen vitamin C untuk membantu menjaga daya tahan tubuh.', 'products/lxzklrjtNsNmtKpyHigH6Wav2wdLBwajOlfubbJG.jpg', '2026-01-01 21:39:52', '2026-01-01 21:46:09'),
(6, 1, 'Imboost Force', 35000, 10, 'Suplemen untuk membantu meningkatkan sistem imun tubuh.', 'products/xXGjlAzisgENztk2DAk2Jh7EYySPQtt6VcoRjFPx.jpg', '2026-01-01 21:40:57', '2026-01-01 21:40:57'),
(7, 5, 'Masker Medis', 2000, 40, 'Masker medis sekali pakai untuk melindungi pernapasan.', 'products/JsiYY6B3cCLV00xOrY0TS275iVuGolZZXrdDzIvw.jpg', '2026-01-01 21:42:04', '2026-01-01 21:47:04'),
(8, 5, 'Termometer Digital', 45000, 6, 'Alat pengukur suhu tubuh digital.', 'products/QJlRRR0uVMIYekRIk5A5WImDWNwtiHWs4LHz1m2p.jpg', '2026-01-01 21:43:07', '2026-01-01 21:43:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
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
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7MttQJJftPe7xvxgT1xXSL4cVvRFQ6GtFlkKqF39', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTktKTERwR1ZHMHdINDI4RDlveUQ0UHZRczI5V0laR1VOeDFSTmQ1MyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9zdG9jay1sb2dzIjtzOjU6InJvdXRlIjtzOjIyOiJhZG1pbi5zdG9jay1sb2dzLmluZGV4Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1767432581),
('az4c9jtYg2REKprlXVimUNz3E3mYeuJbDbIyh1SB', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU00wNlIzdTV1akRzaWFVMHhsdHJoVXRFZ09KTmNXMjlLRnVtcHdvUSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO3M6NToicm91dGUiO047fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1767532588),
('NCtLhTZLkY8809zrtbFoLhWmNoYrsLJgZ14Q3pvq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRzNDYllXT0JQU0xtTldDU09nMU9uZlJ1T2t2R3hOc25nNmxLNDJ2TSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO3M6NToicm91dGUiO047fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1767532589),
('TRpYIH3YC8I2lt94WhEdyHTsf6cF9SuHhE36SBql', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRkxEeVpEQ0lXVHg1RW1KTG01UUdaUlFJQ2xaYlk4ekFCYW52ZXBkQiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO3M6NToicm91dGUiO047fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1767532590),
('WymfVbmZ4aUmOeLddQAsGYKuqIeTxLSpD4YgKUS4', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUHhoWWNyUU9Ub0hXSTZ4ZE9RWXlPZjBlVFAzNUh6WjNWejdEc2Q5NyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO3M6NToicm91dGUiO047fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1767581597);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stock_logs`
--

CREATE TABLE `stock_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('in','out') NOT NULL,
  `quantity` int(11) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `stock_logs`
--

INSERT INTO `stock_logs` (`id`, `product_id`, `user_id`, `type`, `quantity`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'in', 20, 'Restock dari distributor', '2026-01-01 21:45:42', '2026-01-01 21:45:42'),
(2, 5, 1, 'in', 10, 'Penambahan stok bulanan', '2026-01-01 21:46:09', '2026-01-01 21:46:09'),
(3, 2, 1, 'in', 15, 'Pengadaan ulang', '2026-01-01 21:46:31', '2026-01-01 21:46:31'),
(4, 3, 1, 'out', 2, 'Penjualan', '2026-01-01 21:46:52', '2026-01-01 21:46:52'),
(5, 7, 1, 'out', 10, 'Penjualan', '2026-01-01 21:47:04', '2026-01-01 21:47:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$ewzniwvRJRVPgmZILNsWoezfB1ZdYhomJBb7ZmIYjIt2wcfW1k6My', '6meCw4RkmI6kYkapN9why5eIg92uEC7L12AtywQL3FHEdZ3SKBq32wQp7Y4m', '2026-01-01 06:45:08', '2026-01-01 21:15:59', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `stock_logs`
--
ALTER TABLE `stock_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stock_logs_product_id_foreign` (`product_id`),
  ADD KEY `stock_logs_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `stock_logs`
--
ALTER TABLE `stock_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `stock_logs`
--
ALTER TABLE `stock_logs`
  ADD CONSTRAINT `stock_logs_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stock_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
