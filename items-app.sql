-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table items-app.barang
CREATE TABLE IF NOT EXISTS `barang` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kd_barang` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_satuan` int NOT NULL,
  `kd_klasifikasi` int NOT NULL,
  `kd_rak` int NOT NULL,
  `kd_gudang` int NOT NULL,
  `stok` int NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `barang_kd_barang_unique` (`kd_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table items-app.barang: ~0 rows (approximately)
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` (`id`, `kd_barang`, `barang`, `deskripsi`, `kd_satuan`, `kd_klasifikasi`, `kd_rak`, `kd_gudang`, `stok`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 'BRG01ASRG', 'ASUS ROG', 'ASUS ROG merupakan hp gaming canggih dari perusahaaan ASUS', 1, 1, 1, 1, 100, 1, '2024-07-10 04:00:36', '2024-07-12 06:21:13'),
	(2, 'BRG02CKBL', 'Chiki Bal', 'Chiki bal merupakan produk makanan snack untuk anak', 2, 2, 2, 2, 120, 1, '2024-07-10 04:02:00', '2024-07-11 15:42:00'),
	(3, 'BRG03TLIMP', 'Telur Impor', 'Telur impor dari Thailand', 3, 4, 4, 4, 115, 1, '2024-07-10 04:03:39', '2024-07-12 06:23:46'),
	(4, 'BRG04OSKDN', 'Oskadon', 'Oskadon obat sakit kepala', 1, 5, 5, 5, 110, 1, '2024-07-10 04:05:30', '2024-07-11 15:38:31');
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;

-- Dumping structure for table items-app.barang_keluar
CREATE TABLE IF NOT EXISTS `barang_keluar` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kd_transaksi` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `barang_keluar_kd_transaksi_unique` (`kd_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table items-app.barang_keluar: ~0 rows (approximately)
/*!40000 ALTER TABLE `barang_keluar` DISABLE KEYS */;
INSERT INTO `barang_keluar` (`id`, `kd_transaksi`, `kd_barang`, `quantity`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 'TKLR52BRG03TLIMP', 'BRG03TLIMP', 2, 1, '2024-07-12 06:23:46', '2024-07-12 06:23:46');
/*!40000 ALTER TABLE `barang_keluar` ENABLE KEYS */;

-- Dumping structure for table items-app.barang_masuk
CREATE TABLE IF NOT EXISTS `barang_masuk` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kd_transaksi` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `barang_masuk_kd_transaksi_unique` (`kd_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table items-app.barang_masuk: ~0 rows (approximately)
/*!40000 ALTER TABLE `barang_masuk` DISABLE KEYS */;
INSERT INTO `barang_masuk` (`id`, `kd_transaksi`, `kd_barang`, `quantity`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 'TMSK43BRG01ASRG', 'BRG01ASRG', 5, 1, '2024-07-12 06:21:13', '2024-07-12 06:21:13'),
	(2, 'TMSK17BRG03TLIMP', 'BRG03TLIMP', 7, 1, '2024-07-12 06:23:15', '2024-07-12 06:23:15');
/*!40000 ALTER TABLE `barang_masuk` ENABLE KEYS */;

-- Dumping structure for table items-app.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table items-app.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table items-app.gudang
CREATE TABLE IF NOT EXISTS `gudang` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `gudang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table items-app.gudang: ~0 rows (approximately)
/*!40000 ALTER TABLE `gudang` DISABLE KEYS */;
INSERT INTO `gudang` (`id`, `gudang`, `deskripsi`, `created_at`, `updated_at`) VALUES
	(1, 'Gdg Elektronik', 'Gudang yang berisi elektronik', '2024-07-10 03:19:38', '2024-07-10 03:48:06'),
	(2, 'Gdg Makanan dan Minuman', 'Gudang yang berisi makanan dan minuman', '2024-07-10 03:21:14', '2024-07-10 03:21:14'),
	(3, 'Gdg Pakaian dan Aksesoris', 'Gudang yang berisi pakaian dan aksesoris', '2024-07-10 03:21:42', '2024-07-10 03:21:42'),
	(4, 'Gdg Kebutuhan Pokok', 'Gudang yang berisi kebutuhan pokok', '2024-07-10 03:22:00', '2024-07-10 03:22:00'),
	(5, 'Gdg Obat', 'Gudang yang berisi obat-obatan', '2024-07-10 03:22:20', '2024-07-10 03:22:20');
/*!40000 ALTER TABLE `gudang` ENABLE KEYS */;

-- Dumping structure for table items-app.history
CREATE TABLE IF NOT EXISTS `history` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kd_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table items-app.history: ~0 rows (approximately)
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
INSERT INTO `history` (`id`, `kd_barang`, `quantity`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 'BRG01ASRG', 5, 'Barang Masuk', 1, '2024-07-12 06:21:13', '2024-07-12 06:21:13'),
	(2, 'BRG03TLIMP', 7, 'Barang Masuk', 1, '2024-07-12 06:23:15', '2024-07-12 06:23:15'),
	(3, 'BRG03TLIMP', 2, 'Barang Keluar', 1, '2024-07-12 06:23:46', '2024-07-12 06:23:46');
/*!40000 ALTER TABLE `history` ENABLE KEYS */;

-- Dumping structure for table items-app.klasifikasi
CREATE TABLE IF NOT EXISTS `klasifikasi` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `klasifikasi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table items-app.klasifikasi: ~0 rows (approximately)
/*!40000 ALTER TABLE `klasifikasi` DISABLE KEYS */;
INSERT INTO `klasifikasi` (`id`, `klasifikasi`, `deskripsi`, `created_at`, `updated_at`) VALUES
	(1, 'Elektronik', 'Barang terkait elektronik', '2024-07-10 03:12:52', '2024-07-10 03:46:30'),
	(2, 'Makanan dan Minuman', 'Barang terkait produk makanan dan minuman', '2024-07-10 03:13:19', '2024-07-10 03:13:19'),
	(3, 'Pakaian dan Aksesoris', 'Barang terkait pakaian dan aksesoris', '2024-07-10 03:13:58', '2024-07-10 03:13:58'),
	(4, 'Kebutuhan Pokok', 'Barang terkait kebutuhan pokok', '2024-07-10 03:14:20', '2024-07-10 03:14:20'),
	(5, 'Obat - Obatan', 'Barang terkait obat-obatan', '2024-07-10 03:14:37', '2024-07-10 03:14:37');
/*!40000 ALTER TABLE `klasifikasi` ENABLE KEYS */;

-- Dumping structure for table items-app.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table items-app.migrations: ~0 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2024_07_05_025138_create_barang_table', 1),
	(6, '2024_07_05_025411_create_satuan_table', 1),
	(7, '2024_07_05_025420_create_klasifikasi_table', 1),
	(8, '2024_07_05_025431_create_rak_table', 1),
	(9, '2024_07_05_025438_create_gudang_table', 1),
	(10, '2024_07_05_025451_create_barang_masuk_table', 1),
	(11, '2024_07_05_025458_create_barang_keluar_table', 1),
	(12, '2024_07_05_025506_create_history_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table items-app.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table items-app.password_reset_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;

-- Dumping structure for table items-app.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table items-app.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table items-app.rak
CREATE TABLE IF NOT EXISTS `rak` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `rak` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table items-app.rak: ~0 rows (approximately)
/*!40000 ALTER TABLE `rak` DISABLE KEYS */;
INSERT INTO `rak` (`id`, `rak`, `deskripsi`, `created_at`, `updated_at`) VALUES
	(1, 'ELTK', 'Rak yang berisi barang elektronik', '2024-07-10 03:15:36', '2024-07-10 03:17:00'),
	(2, 'MKNMN', 'Rak yang berisi produk makanan dan minuman', '2024-07-10 03:17:30', '2024-07-10 03:17:30'),
	(3, 'PKAS', 'Rak yang berisi pakaian dan aksesoris', '2024-07-10 03:17:50', '2024-07-10 03:46:52'),
	(4, 'KBTPK', 'Rak yang berisi kebutuhan pokok', '2024-07-10 03:18:10', '2024-07-10 03:18:10'),
	(5, 'OBT', 'Rak yang berisi obat-obatan', '2024-07-10 03:18:43', '2024-07-10 03:18:43');
/*!40000 ALTER TABLE `rak` ENABLE KEYS */;

-- Dumping structure for table items-app.satuan
CREATE TABLE IF NOT EXISTS `satuan` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `satuan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table items-app.satuan: ~0 rows (approximately)
/*!40000 ALTER TABLE `satuan` DISABLE KEYS */;
INSERT INTO `satuan` (`id`, `satuan`, `deskripsi`, `created_at`, `updated_at`) VALUES
	(1, 'pcs', 'Satuan dasar yang sering digunakan untuk menghitung barang yang berdiri sendiri, seperti elektronik, pakaian, atau alat tulis.', '2024-07-10 03:09:17', '2024-07-10 03:46:06'),
	(2, 'kotak', 'Barang yang dikemas dalam kotak, seperti makanan ringan, sepatu, atau barang grosir.', '2024-07-10 03:09:35', '2024-07-10 03:09:35'),
	(3, 'lusin', 'Satuan yang sering digunakan untuk menghitung barang dalam jumlah 12, seperti telur, pensil, atau handuk.', '2024-07-10 03:09:46', '2024-07-10 03:09:46'),
	(4, 'kg', 'Barang yang diukur berdasarkan berat, seperti bahan makanan, biji-bijian, atau bahan baku.', '2024-07-10 03:09:59', '2024-07-10 03:09:59'),
	(5, 'paket', 'Barang yang dikemas dalam paket, seperti minuman kaleng, alat tulis, atau peralatan dapur.', '2024-07-10 03:10:27', '2024-07-10 03:10:27');
/*!40000 ALTER TABLE `satuan` ENABLE KEYS */;

-- Dumping structure for table items-app.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Aktif','Tidak Aktif') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Aktif',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table items-app.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `nama`, `email`, `password`, `telepon`, `alamat`, `foto`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Trihadi Putra', 'trihadi17@gmail.com', '$2y$12$W2grbbc9Q67PZEBLofa1B.fzbz3kR1Dhi/BsUAHXhAqJymFu5IKMy', '08911281811', 'Jalan Raya', 'image.png', 'Aktif', '2024-07-10 03:02:41', NULL),
	(2, 'Indro Kustiawan', 'indrokustiawan@gmail.com', '$2y$12$t6DaxpXlwaTqjTEr3jtHYeIAyzquP1mqMJXow/YMfVxUrr3j29.Hy', '081241141', 'Jalan Tol', 'image.png', 'Aktif', '2024-07-10 03:02:42', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
