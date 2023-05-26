-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 May 2023, 11:44:01
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `laravel`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
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
-- Tablo için tablo yapısı `kargo_sirketleri`
--

CREATE TABLE `kargo_sirketleri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firma_adi` varchar(255) NOT NULL,
  `telefon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kargo_takip`
--

CREATE TABLE `kargo_takip` (
  `kargo_takip_id` bigint(20) UNSIGNED NOT NULL,
  `kargo_durumu` varchar(255) NOT NULL,
  `kargo_sirketi_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `id` int(11) NOT NULL,
  `ad` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `durum` varchar(255) DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL,
  `resim` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `ad`, `keywords`, `durum`, `parent_id`, `updated_at`, `created_at`, `resim`) VALUES
(1, 'Kadın', 'kadın', 'Mevcut', 0, '0000-00-00', '0000-00-00', NULL),
(2, 'Erkek', 'erkek', 'Mevcut', 0, '0000-00-00', '0000-00-00', NULL),
(3, 'Kız Çocuk', 'kız çocuk', 'Mevcut', 0, '0000-00-00', '0000-00-00', NULL),
(4, 'Erkek Çocuk', 'erkek çocuk', 'Mevcut', 0, '0000-00-00', '0000-00-00', NULL),
(5, 'Etek', 'etek kadın', 'Mevcut', 1, '0000-00-00', '0000-00-00', NULL),
(6, 'Pantolon', 'pantolon kadın', 'Mevcut', 1, '0000-00-00', '0000-00-00', NULL),
(7, 'Üst', 'kazak kadın', 'Mevcut', 1, '2023-05-13', '0000-00-00', NULL),
(8, 'Elbise', 'kadın elbise', 'Mevcut', 1, '0000-00-00', '0000-00-00', NULL),
(9, 'Aksesuar', 'kadın aksesuar ', 'Mevcut', 1, '0000-00-00', '0000-00-00', NULL),
(10, 'Mont & Ceket', 'mont kadın ceket', 'Mevcut', 1, '0000-00-00', '0000-00-00', NULL),
(11, 'Ayakkabı', 'kadın ayakkabı', 'Mevcut', 1, '0000-00-00', '0000-00-00', NULL),
(12, 'Şort', 'erkek şort', 'Mevcut', 2, '0000-00-00', '0000-00-00', NULL),
(14, 'Kazak', 'kazak erkek', 'Mevcut', 2, '0000-00-00', '0000-00-00', NULL),
(15, 'Pantolon', 'erkek pantolon', 'Mevcut', 2, '0000-00-00', '0000-00-00', NULL),
(16, 'T-shirt', 'erkek tişört', 'Mevcut', 2, '2023-05-14', '0000-00-00', NULL),
(18, 'Elbise', 'çocuk elbise', 'Mevcut', 3, '0000-00-00', '0000-00-00', NULL),
(19, 'Üst', 'kız çocuk üst', 'Mevcut', 3, '0000-00-00', '0000-00-00', NULL),
(20, 'Pantolon', 'kız çocuk pantolon', 'Mevcut', 3, '0000-00-00', '0000-00-00', NULL),
(21, 'Ayakkabı', 'kız çocuk ayakkabı', 'Mevcut', 3, '0000-00-00', '0000-00-00', NULL),
(22, 'Pantolon', 'çocuk pantolon', 'Mevcut', 4, '0000-00-00', '0000-00-00', NULL),
(23, 'Üst', 'erkek çocuk üst', 'Mevcut', 4, '0000-00-00', '0000-00-00', NULL),
(24, 'Ayakkabı', 'erkek çocuk ayakkabı', 'Mevcut', 4, '0000-00-00', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kullanici_id` int(11) NOT NULL,
  `ad` varchar(255) NOT NULL,
  `soyad` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefon` varchar(255) NOT NULL,
  `bakiye` int(11) NOT NULL,
  `dogum_tarihi` date NOT NULL,
  `olusturma_zamani` date NOT NULL,
  `guncelleme_zamani` date NOT NULL,
  `adres` longtext NOT NULL,
  `kullanici_tipi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kullanici_id`, `ad`, `soyad`, `email`, `telefon`, `bakiye`, `dogum_tarihi`, `olusturma_zamani`, `guncelleme_zamani`, `adres`, `kullanici_tipi_id`, `password`) VALUES
(0, 'Helen', 'Uzunçayır', 'helen@gmail.com', '05648793527', 111111111, '0000-00-00', '0000-00-00', '0000-00-00', 'Sakarya mah.', 1, '123'),
(1, 'Ela', 'Karaoğlu', 'ela@gmail.com', '05679749832', 11111111, '0000-00-00', '0000-00-00', '0000-00-00', '', 1, '123'),
(2, 'Selin', 'Avcı', 'selin@gmail.com', '05348796279', 11111111, '0000-00-00', '0000-00-00', '0000-00-00', '', 1, '123'),
(3, 'Ayşe', 'Dal', 'aysedal@gmail.com', '05347892690', 1111, '0000-00-00', '0000-00-00', '0000-00-00', 'mehmet akif ersoy mah. 8429.sokak no:7', 2, '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici_tipleri`
--

CREATE TABLE `kullanici_tipleri` (
  `kullanici_tipi_id` int(15) NOT NULL,
  `tip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kullanici_tipleri`
--

INSERT INTO `kullanici_tipleri` (`kullanici_tipi_id`, `tip`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_05_21_300000_create_team_invitations_table', 1),
(9, '2023_04_22_155326_create_kullanicilar_table', 1),
(10, '2023_04_22_160329_create_kullanici_tipleri_table', 1),
(11, '2023_04_22_160404_create_urunler_table', 1),
(12, '2023_04_22_160438_create_kategoriler_table', 1),
(13, '2023_04_22_160503_create_sepet_table', 1),
(14, '2023_04_22_160528_create_siparisler_table', 1),
(15, '2023_04_22_160615_create_siparis_detaylari_table', 1),
(16, '2023_04_22_160639_create_resimler_table', 1),
(17, '2023_04_22_160712_create_kargo_sirketleri_table', 1),
(18, '2023_04_22_160749_create_kargo_takip_table', 1),
(19, '2023_04_24_132337_create_sessions_table', 1),
(20, '2023_05_03_181926_create_settings_table', 1),
(21, '2023_05_06_111458_create_sepets_table', 1),
(22, '2023_05_15_101220_create_roles_table', 2),
(23, '2023_05_15_101449_create_role_users_table', 2),
(24, '2023_05_15_131737_create_siparis_detaylaris_table', 3),
(25, '2023_05_25_190840_create_shopcart_items_table', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
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
-- Tablo için tablo yapısı `resimler`
--

CREATE TABLE `resimler` (
  `resim_id` bigint(20) UNSIGNED NOT NULL,
  `resim` varchar(255) NOT NULL,
  `olusturma_zamani` date NOT NULL,
  `guncelleme_zamani` date NOT NULL,
  `urun_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `role_users`
--

CREATE TABLE `role_users` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `sepet_id` int(11) NOT NULL,
  `tutar` int(11) DEFAULT NULL,
  `adet` int(11) DEFAULT NULL,
  `urun_id` bigint(20) UNSIGNED NOT NULL,
  `kullanici_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sepet`
--

INSERT INTO `sepet` (`sepet_id`, `tutar`, `adet`, `urun_id`, `kullanici_id`, `created_at`, `updated_at`) VALUES
(24, NULL, NULL, 91, 1, '2023-05-26 06:35:51', '2023-05-26 06:35:51');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepets`
--

CREATE TABLE `sepets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sessions`
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
-- Tablo döküm verisi `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6DAMc9QVn05WRjtorhwQsGWN0rIQOFk4SjF6wvI6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36 Edg/113.0.1774.57', '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', 1685094184),
('dlcxEAIUgN0GnUxf3byNRorGFWxUEaobZGc2IpNv', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36 Edg/113.0.1774.57', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUnR0ak11eE9aNllOUnloYXFhcHhqZVVOZWFwNDNNVXF4ak1OUzdBZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1685091223),
('oBvxyTRE7JZ2EP2BbLrdI367xEwcDdjrcHaELbFD', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36 Edg/113.0.1774.50', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN1NwUFJkYzcwcFVNVW11VWxPbGs2VFJMdGFqQWVldDY0NFNsYWJoRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1685035676),
('qCKAJRTtQ39R7MJp48mADm9PxT6R9zneshlyC23i', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36 Edg/113.0.1774.42', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTjlvQW54RERoMW9EdnlhOU9YR1NoODNSeEZyRFh0TlJsc1p5UXN2VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0X3BhZ2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1684268761);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `ad` varchar(255) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `aciklama` varchar(255) DEFAULT NULL,
  `sirket` varchar(255) DEFAULT NULL,
  `adres` varchar(255) DEFAULT NULL,
  `telefon` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `smtpserver` varchar(255) DEFAULT NULL,
  `smtpemail` varchar(255) DEFAULT NULL,
  `smtpsifre` varchar(255) DEFAULT NULL,
  `smtpport` varchar(255) DEFAULT '0',
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `hakkimizda` text DEFAULT NULL,
  `contact` text DEFAULT NULL,
  `referanslar` text DEFAULT NULL,
  `ikon` varchar(255) DEFAULT NULL,
  `durum` varchar(5) DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `shopcart_items`
--

CREATE TABLE `shopcart_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `urun_id` bigint(20) UNSIGNED NOT NULL,
  `sepet_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

CREATE TABLE `siparisler` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kullanici_id` bigint(20) UNSIGNED NOT NULL,
  `toplam_tutar` int(11) DEFAULT NULL,
  `urun_sayisi` int(11) DEFAULT NULL,
  `kargo_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kargo_durumu` varchar(255) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `siparisler`
--

INSERT INTO `siparisler` (`id`, `kullanici_id`, `toplam_tutar`, `urun_sayisi`, `kargo_id`, `kargo_durumu`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, '2023-05-26', '2023-05-26'),
(3, 1, NULL, NULL, NULL, NULL, '2023-05-26', '2023-05-26');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_detaylari`
--

CREATE TABLE `siparis_detaylari` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siparis_id` bigint(20) UNSIGNED NOT NULL,
  `tutar` int(11) NOT NULL,
  `urun_adedi` int(11) NOT NULL,
  `urun_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_detaylaris`
--

CREATE TABLE `siparis_detaylaris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `urun_id` bigint(20) UNSIGNED NOT NULL,
  `siparis_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(11) NOT NULL,
  `kategori_id` bigint(20) DEFAULT NULL,
  `ad` varchar(255) NOT NULL,
  `aciklama` text NOT NULL,
  `fiyat` int(11) NOT NULL,
  `renk` varchar(255) NOT NULL,
  `beden` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `miktar` int(11) NOT NULL,
  `durum` varchar(255) NOT NULL,
  `resim` varchar(600) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `kategori_id`, `ad`, `aciklama`, `fiyat`, `renk`, `beden`, `keywords`, `miktar`, `durum`, `resim`, `updated_at`, `created_at`) VALUES
(4, 5, 'Katlı etek', 'Kadın katlı etek', 250, 'Mavi', 'xs', 'kadın etek', 10, 'Mevcut', 'images/QuJURs4ETp2mIKioLMU1T11NP0ccVe9btgRdiSq5.jpg', '2023-05-16', '2023-05-13'),
(5, 5, 'Geometrik desenli etek', 'Geometrik desenli midi boy etek', 350, 'Mavi', 's', 'kadın etek', 10, 'Mevcut', 'images/bgNpQsyyFmS1U2hBwgZFK0O7J6FKIJbmeP8ggLJJ.jpg', '2023-05-13', '2023-05-13'),
(6, 5, 'Pembe desenli etek', 'Pembe desenli mini boy etek', 250, 'pembe', 'm', 'kadın etek', 10, 'Mevcut', 'images/77qhYshLk1eXScBT3wD4M6Tr3WGFre33CQ2K7nvR.jpg', '2023-05-13', '2023-05-13'),
(7, 5, 'Yeşil saten etek', 'Yeşil saten midi boy etek', 450, 'yeşil', 'm', 'kadın etek', 10, 'Mevcut', 'images/llOGT2Xak4A9c7F9kpiLqbv6pRLZGmEDNdGMGQWB.jpg', '2023-05-13', '2023-05-13'),
(8, 5, 'Çiçekli saten etek', 'Çiçekli saten midi boy etek', 450, 'siyah', 'm', 'kadın etek', 10, 'Mevcut', 'images/bvBFz0mhKkahWkJTmBMXfjcKKMTLM2wYMjP2BIia.jpg', '2023-05-13', '2023-05-13'),
(9, 6, 'Beyaz pantolon', 'Beyaz boru paça pantolon', 380, 'beyaz', 'm', 'kadın pantolon', 10, 'Mevcut', 'images/XsYGilZco9nmRgf2EcKJS1aqG2maghZOUtjEb8lA.jpg', '2023-05-13', '2023-05-13'),
(10, 6, 'Kot pantolon', 'Kot bol paça pantolon', 450, 'Mavi', 's', 'kadın pantolon', 10, 'Mevcut', 'images/Yyc3j5NI6y8OY1Pkaw6xwo6xJzy3sjzvsAU5u9Co.jpg', '2023-05-13', '2023-05-13'),
(11, 6, 'Siyah pantolon', 'Siyah kot pantolon', 450, 'siyah', 'm', 'kadın pantolon', 10, 'Mevcut', 'images/vzKguRu8LygNwBI5eAbYeTbozsAnw7WxbzIL5Q96.jpg', '2023-05-13', '2023-05-13'),
(12, 6, 'Şifon gömlek', 'Şifon siyah beyaz geçişli gömlek', 340, 'siyah', 'l', 'kadın gömlek', 10, 'Mevcut', 'images/vDTewnG1KxiZmuRRqo8n3KJRNkpvfORUDLGpe94e.jpg', '2023-05-13', '2023-05-13'),
(13, 7, 'Örgülü kazak', 'Örgü detaylı kazak', 350, 'yeşil', 'xs', 'kadın kazak', 10, 'Mevcut', 'images/l8jJa6a5LgT0BSUTWTIxuGuJkQiHc0OFUDQiHniE.jpg', '2023-05-14', '2023-05-13'),
(14, 7, 'Bürümcük gömlek', 'Bürümcük desenli gömlek', 450, 'yeşil', 'xs', 'kadın gömlek', 10, 'Mevcut', 'images/ejWMspiBwBg1Q9mSB0mSWOes1Vk3wJRWXN2Px8Mo.jpg', '2023-05-13', '2023-05-13'),
(15, 7, 'Geometrik desenli bluz', 'Geometrik desenli sıfır kol bluz', 380, 'siyah', 'xs', 'kadın gömlek', 10, 'Mevcut', 'images/LoLIWdviNaPePku5b3Hiptgx7ZZNI9j4rlMU1Z9C.jpg', '2023-05-13', '2023-05-13'),
(16, 7, 'Puantiyeli gömlek', 'Puantiyeli  V yaka gömlek', 380, 'beyaz', 'l', 'kadın gömlek', 10, 'Mevcut', 'images/AdtGQQXx0LgKZQPYFm9SbP34JLO4CUBxRCx5YVFy.jpg', '2023-05-13', '2023-05-13'),
(17, 8, 'V yaka elbise', 'V yaka mini boy şık elbise', 500, 'pembe', 'm', 'kadın elbise', 10, 'Mevcut', 'images/S09TuDHpELSfdYnyO7vQYsqaILYMrDHQHQaJgY72.jpg', '2023-05-13', '2023-05-13'),
(18, 8, 'Volanlı saten elbise', 'Volanlı saten mini boy elbise', 600, 'Mavi', 's', 'kadın elbise', 10, 'Mevcut', 'images/SD3uv4gZAqcTvCyhKWW2A4HtRHa5xLpeLmUfyl8P.jpg', '2023-05-13', '2023-05-13'),
(19, 8, 'Kadın siyah elbise', 'Kadın siyah midi boy elbise', 670, 'siyah', 'xs', 'kadın elbise', 10, 'Mevcut', 'images/j3xQ0EP7MgfyQeBZIYxpe6N7N2nDDAGbk1xrVM4f.jpg', '2023-05-13', '2023-05-13'),
(20, 8, 'Krem elbise', 'Krem dantel detaylı elbise', 450, 'beyaz', 's', 'kadın elbise', 10, 'Mevcut', 'images/3ZPjgctr19Dh0ZQZIv6yzWrieEqeTbctfSK8z1dL.jpg', '2023-05-13', '2023-05-13'),
(21, 8, 'Paisley desenli elbise', 'Paisley desenli büzgülü misi boy elbise', 800, 'siyah', 'm', 'kadın elbise', 10, 'Mevcut', 'images/sNZqydjIpj0JDEM6WbBdy1OOKLPqIwitcF0XKtu2.jpg', '2023-05-13', '2023-05-13'),
(22, 8, 'Saten elbise', 'Saten dökümlü yaka elbise', 680, 'yeşil', 'xs', 'kadın elbise', 10, 'Mevcut', 'images/JvM22JkJyu0QVqwfbVxoVOnlLYRYNvtZYulpam8h.jpg', '2023-05-13', '2023-05-13'),
(23, 8, 'Fırfır detaylı elbise', 'Fırfır detaylı ipli midi boy elbise', 680, 'mor', 'xs', 'kadın elbise', 10, 'Mevcut', 'images/Z7uzLjXzgD0MzmxxA6CSo4D5PHum5ao6Tufxcfm6.jpg', '2023-05-13', '2023-05-13'),
(24, 8, 'Desenli elbise', 'Desenli mini boy elbise', 490, 'siyah', 'xs', 'kadın elbise', 10, 'Mevcut', 'images/QOtBPmYyS7q4pT7TCnCoceGrGjboALRNTCWnZbg5.jpg', '2023-05-13', '2023-05-13'),
(25, 8, 'Colorblock pilili elbise', 'Colorblock pilili midi boy elbise', 980, 'siyah', 's', 'kadın elbise', 10, 'Mevcut', 'images/knBjFu8RlfE5eY8r1A5kZ6POGEyTuqVaeVHQLNx4.jpg', '2023-05-13', '2023-05-13'),
(26, 8, 'Çiçek desenli elbise', 'Çiçek desenli mini boy elbise', 450, 'kırmızı', 's', 'kadın elbise', 560, 'Mevcut', 'images/eQMWtRieeCl5P10COEx47hdvAouw7Ey43l1jx4Ef.jpg', '2023-05-13', '2023-05-13'),
(27, 8, 'Anvelop kesimli gömlek elbise', 'Anvelop kesimli midi boy gömlek elbise', 880, 'yeşil', 's', 'kadın elbise', 10, 'Mevcut', 'images/hFRnwCsmUQfeuBgHvV6TXm4qfK8FRnkPMh0hxe6M.jpg', '2023-05-13', '2023-05-13'),
(28, 9, 'Kristal askılı omuz çantası', 'Kristal askılı omuz çantası', 380, 'siyah', 's', 'kadın çanta', 10, 'Mevcut', 'images/YDHsk98bbBc6AjVV8MzG76zwviODT2Bop8f3SNxZ.jpg', '2023-05-13', '2023-05-13'),
(29, 9, 'Çiçekli örgü çanta', 'Çiçekli örgü çanta', 350, 'mor', 'st', 'kadın çanta', 10, 'Mevcut', 'images/BR8n8usliUbbJkdkRQfmbOh8E4FZugb4gY4gp0N9.jpg', '2023-05-13', '2023-05-13'),
(30, 9, 'Mini çanta', 'Büzgü detaylı mini çanta', 470, 'kırmızı', 'st', 'kadın çanta', 10, 'Mevcut', 'images/uzlu25a9CV0HX1egnqlX1UG2rf8I9WKV1sw2Ff8f.jpg', '2023-05-13', '2023-05-13'),
(31, 9, 'Zincirli çanta', 'Zincirli saten çanta', 450, 'pembe', 'st', 'kadın çanta', 10, 'Mevcut', 'images/i4M3yVfe69FTorLCq0kN2B1T0eD3oXMN5PC78xNS.jpg', '2023-05-13', '2023-05-13'),
(32, 9, 'Kemer', 'Suni deri kemer', 80, 'yeşil', 's', 'kadın kemer', 10, 'Mevcut', 'images/8YhMB2kcTbhq629pYTn0NWgIwJqhDO1mNbqQMmoM.jpg', '2023-05-13', '2023-05-13'),
(33, 9, 'Şapka', 'Hasır şapka', 130, 'çok renkli', 'st', 'kadın şapka', 10, 'Mevcut', 'images/7tPXitkfFS2YvPosvqwGByy9oBepOhz0GIDmZlxX.jpg', '2023-05-13', '2023-05-13'),
(34, 9, 'Bere', 'Yünlü bere', 67, 'turuncu', 'st', 'bere kadın', 10, 'Mevcut', 'images/QkKOYW65YviQ112GUMLEK2oo0eJIZsgvszB8OFWR.jpg', '2023-05-13', '2023-05-13'),
(35, 9, 'Yarı değerli taş kolye', 'Yarı değerli taş kolye', 250, 'yeşil', 'st', 'kolye', 10, 'Mevcut', 'images/xrPsYvhOv4wGyPhRNO42YeYRrlio1SVnhrIQklEb.jpg', '2023-05-13', '2023-05-13'),
(36, 9, 'Kil boncuk kolye', 'Kil yuvarlak boncuk kolye', 180, 'yeşil', 'xs', 'kolye', 10, 'Mevcut', 'images/fnCdiKUw0hLtDq2eJOUnw5OH20bDOwiBQDKTHJ5h.jpg', '2023-05-13', '2023-05-13'),
(37, 9, 'Boncuk uçlu kolye', 'Boncuk uçlu zincirli kolye', 180, 'turuncu', 'st', 'kolye', 10, 'Mevcut', 'images/Q6epWjH5abB70maOASngbHj6NLaPbgbCs4mB28Hv.jpg', '2023-05-13', '2023-05-13'),
(38, 9, 'Yüzük', 'Kare şeklinde yüzük', 180, 'kahverengi', 'st', 'yüzük', 10, 'Mevcut', 'images/8PmsltPmb3w4Z1beCux2KVGCCEOyejSL8A4BCg8h.jpg', '2023-05-13', '2023-05-13'),
(41, 11, 'Topuklu ayakkabı', 'Şık topuklu suni deri ayakkabı', 450, 'beyaz', 's', 'kadın ayakkabı', 24, 'Mevcut', 'images/3UeJ7EtMLspN4XhN5shE3WsdjByd760BUFqAn6kV.jpg', '2023-05-14', '2023-05-14'),
(42, 11, 'Yüksek topuklu ayakkabı', 'Bantlı yüksek topuklu ayakkabı', 580, 'pembe', 'm', 'kadın ayakkabı', 10, 'Mevcut', 'images/mjZoDWaWY5or2tFbrTgghN38zfZTevYlErUExpNs.jpg', '2023-05-14', '2023-05-14'),
(43, 11, 'Karma renkli spor ayakkabı', 'Karma renkli deri spor ayakkabı', 450, 'beyaz', 'm', 'kadın ayakkabı', 22, 'Mevcut', 'images/vyZlsbZJ3fINhjDcJOBw3zGYTYjIxXJKiEq2Bxhd.jpg', '2023-05-14', '2023-05-14'),
(44, 11, 'Kare modelli topuklu ayakkabı', 'Suni deri arkası açık topuklu ayakkabı', 490, 'Mavi', 'xs', 'kadın ayakkabı', 22, 'Mevcut', 'images/2cC1sPnb9xX47507SWfskXUpVm6gnfNOCszT48NJ.jpg', '2023-05-14', '2023-05-14'),
(45, 10, 'Klasik kemerli trençkot', 'Kemerli kısa boy trençkot', 850, 'Mavi', 'm', 'kadın ceket', 36, 'Mevcut', 'images/BV0b3HvMnyV7Ph3jKfenuAwWsVsxi0UrWIktwaSM.jpg', '2023-05-14', '2023-05-14'),
(46, 10, 'Eskitilmiş görünümlü biker ceket', 'Eskitilmiş görünümlü suni deri biker ceket', 1200, 'siyah', 's', 'kadın ceket', 14, 'Mevcut', 'images/BYuSZQYD9YxIrtTnS59sLg62Amf5Cw5TSXTIzEVe.jpg', '2023-05-14', '2023-05-14'),
(47, 10, 'Ultralight düğmeli ceket', 'Ultralight düğmeli şişme ceket', 470, 'mor', 'l', 'kadın ceket', 42, 'Mevcut', 'images/mC39z74FxXaOLRmQPbFjf0aTG2j5vqwXKPJ2eEiS.jpg', '2023-05-14', '2023-05-14'),
(48, 10, 'Çift düğmeli trençkot', 'Çift düğmeli midi boy trençkot', 1400, 'yeşil', 'm', 'kadın ceket', 48, 'Mevcut', 'images/gdjt2tLu1PFXfQX5zG0XIzk9xXpXAR3bjd5wOrgM.jpg', '2023-05-14', '2023-05-14'),
(49, 12, 'Şort', 'Diz altı şort', 190, 'siyah', 'm', 'erkek şort', 34, 'Mevcut', 'images/e2UAu1k2OOgqzLr3nTx7JA3VGHxSDbHil57KoSE5.png', '2023-05-14', '2023-05-14'),
(50, 12, 'Şort mavi', 'Rahat kumaş şort', 170, 'Mavi', 'l', 'erkek şort', 23, 'Mevcut', 'images/WOV1u2NgtprxHgErOrhRKkiJ0JwcBHdsCX00auZ6.png', '2023-05-14', '2023-05-14'),
(51, 12, 'Bej şort', 'Rahat kumaş şık şort', 180, 'bej', 'l', 'erkek şort', 36, 'Mevcut', 'images/v0wJ42cvbHmDi1x87qcKnCa5539iiPjyzuYUWZIQ.png', '2023-05-14', '2023-05-14'),
(52, 12, 'Kahverengi şort', 'Kahverengi rahat şort', 170, 'kahverengi', 's', 'erkek şort', 14, 'Mevcut', 'images/zmuc1EkQZfzKP9u5M2MELVzkm86wxKeVOOKKK9w2.png', '2023-05-14', '2023-05-14'),
(53, 12, 'Siyah şort', 'Rahat kumaş şort', 140, 'siyah', 'm', 'erkek şort', 22, 'Mevcut', 'images/cFRwSd67dgESfHFkUicdyHcxeUfArVSRlZOkoe0A.png', '2023-05-14', '2023-05-14'),
(54, 15, 'Gri pantolon', 'Kumaş şık pantolon', 370, 'gri', 's', 'erkek pantolon', 13, 'Mevcut', 'images/krIvrEruEOVav6Rn3DoOqoBQo2ptKFFFRBGckp7v.png', '2023-05-14', '2023-05-14'),
(55, 15, 'Siyah pantolon', 'Şık pantolon', 400, 'siyah', 'm', 'erkek pantolon', 36, 'Mevcut', 'images/yeiw79ozu2DzdSIz8fxql4PAjOLShR7vNE0sMR5L.png', '2023-05-14', '2023-05-14'),
(56, 15, 'Şık pantolon', 'Bej şık kumaş pantolon', 400, 'bej', 'm', 'erkek pantolon', 22, 'Mevcut', 'images/6ClmZLaB4JCA7qrgb7zpE5Hn8MjnZeNPe1LUf0zH.png', '2023-05-14', '2023-05-14'),
(57, 15, 'Rahat kesim pantolon', 'Rahat kesim keten pantolon', 370, 'beyaz', 'xs', 'erkek pantolon', 23, 'Mevcut', 'images/DbFbL0DtTSemlv9XCMUd7USgVMOvLavHNvq2s7c4.png', '2023-05-14', '2023-05-14'),
(58, 15, 'Bol paça pantolon', 'Kumaş bol paça pantolon', 480, 'siyah', 'm', 'erkek pantolon', 24, 'Mevcut', 'images/myLYXNIRvZzUvGbW7tziDqea02ujLNGLnNMwvDD0.png', '2023-05-14', '2023-05-14'),
(59, 16, 'Beyaz t-shirt', 'Yazılı t-shirt', 100, 'beyaz', 's', 'erkek tişört', 22, 'Mevcut', 'images/l0zHo6yu54YTdWSAeYwZkrYbqOnsWJxUfCS6a2Ia.png', '2023-05-14', '2023-05-14'),
(60, 16, 'Yazılı t-shirt', 'Beyaz yazılı t-shirt', 80, 'beyaz', 'm', 'erkek tişört', 24, 'Mevcut', 'images/JnDbIjVU1ucYBwths49JRR5tTmShIXTWqbbrlppd.png', '2023-05-14', '2023-05-14'),
(61, 16, 'Sarı t-shirt', 'Sarı düz t-shirt', 70, 'sarı', 's', 'erkek tişört', 14, 'Mevcut', 'images/cj7UYSBHtO37KPIsxbMB4oGKs8R1TLfTpr55ploc.png', '2023-05-14', '2023-05-14'),
(62, 16, 'Gri t-shirt', 'Gri yazılı t-shirt', 70, 'gri', 'xs', 'erkek tişört', 14, 'Mevcut', 'images/wr6xXG5knttl5kttmyuLKOsyj8MuYsJWmIdxExWe.png', '2023-05-14', '2023-05-14'),
(63, 16, 'Beyaz yazılı t-shirt', 'Beyaz yazılı pamuklu t-shirt', 90, 'beyaz', 'm', 'erkek tişört', 23, 'Mevcut', 'images/T2HYg8oEtAvQUbZ5yYMdxIP3K8UImwlYArD3Pzb0.png', '2023-05-14', '2023-05-14'),
(64, 14, 'Gri kazak', 'Gri yünlü kazak', 370, 'gri', 's', 'erkek kazak', 10, 'Mevcut', 'images/ZdzAlE1WhQoeGMOpdWjEIqsniJ3ElVxfodgAn7lt.png', '2023-05-14', '2023-05-14'),
(65, 14, 'Lacivert kazak', 'Lacivert %3 yünlü kazak', 450, 'lacivert', 'l', 'erkek kazak', 24, 'Mevcut', 'images/9kX2nJ6X0kYKLAQmmZHWGmbGDYX4cii2WpKyiORa.png', '2023-05-14', '2023-05-14'),
(66, 14, 'Bej kazak', 'Bej akrilik kazak', 390, 'bej', 'm', 'erkek pantolon', 22, 'Mevcut', 'images/EQ4KUuXpivUk8Na1l2j7uqLA9SJnssEsPavXcI2z.png', '2023-05-14', '2023-05-14'),
(67, 14, 'Mavi kazak', 'Mavi akrilik kazak', 400, 'Mavi', 'm', 'erkek kazak', 14, 'Mevcut', 'images/w2CQIS9Y5gODNGAQwECj1XIKudpwowPiSyUZTTZY.png', '2023-05-14', '2023-05-14'),
(68, 14, 'Beyaz sweatshirt', 'Beyaz yumuşak sweatshirt', 450, 'beyaz', 'xs', 'erkek kazak', 22, 'Mevcut', 'images/otrsW8syFBbHqqMkZiILh3UeSW0ggKtdsQhUlU5P.png', '2023-05-14', '2023-05-14'),
(69, 19, 'Renkli kazak', 'Renkli akrilik süslü kazak', 200, 'pembe', 'xs', 'kız kazak', 24, 'Mevcut', 'images/mclAfa8eJAyVcVGaHTgOi8owbyHcFATt554qUIsM.jpg', '2023-05-14', '2023-05-14'),
(70, 19, 'Püsküllü kazak', 'Püsküllü akrilik kazak', 250, 'yeşil', 'xs', 'kız kazak', 14, 'Mevcut', 'images/kmcnoKHXlxXiHMfhtaGyrG6Wb8JMEi6DxeZJ4mkw.jpg', '2023-05-14', '2023-05-14'),
(71, 20, 'Çiçekli pantolon', 'Turuncu çiçekli pantolon', 230, 'pembe', 'xs', 'kız pantolon', 36, 'Mevcut', 'images/36FR22X79grk4MmwERfkJeDbfki6LrrZqEyiPHBI.jpg', '2023-05-14', '2023-05-14'),
(72, 19, 'Delikli kazak', 'Delikli yün kazak', 240, 'pembe', 'xs', 'kız kazak', 24, 'Mevcut', 'images/MWoY076Wo4Er1dT2AHZ9cxFX7k5jou6pZaovyfAf.jpg', '2023-05-14', '2023-05-14'),
(73, 19, 'Katlı kol t-shirt', 'Katlı kol süslü t-shirt', 100, 'mor', 'xs', 'kız çocuk tişört', 14, 'Mevcut', 'images/NKb0rluvKqrWcPuA106dgyL8KAERDS9KIhoWAZrt.jpg', '2023-05-14', '2023-05-14'),
(74, 20, 'Rahat pantolon', 'Rahat kesim pantolon', 250, 'mor', 'xs', 'kız pantolon', 24, 'Mevcut', 'images/I3FDKrFuXub8NOTju6K91r1R8lNjrN0OgAq4QRQ1.jpg', '2023-05-14', '2023-05-14'),
(75, 19, 'Yazılı t-shirt', 'Yazılı kalpli t-shirt', 150, 'yeşil', 'xs', 'kız çocuk tişört', 36, 'Mevcut', 'images/D6ra6u0H3x3lV5knTsShMzubwx2kx0HzH0NkyIDr.jpg', '2023-05-14', '2023-05-14'),
(76, 21, 'Spor ayakkabı', 'Rahat spor ayakkabı', 450, 'gri', 'xs', 'kız ayakkabı', 22, 'Mevcut', 'images/FUbOwBMk0zDEO04qG2ohA8wpdlEkSeBgWmuPIoEx.jpg', '2023-05-14', '2023-05-14'),
(77, 19, 'Kelebekli t-shirt', 'Kelebekli t-shirt', 150, 'beyaz', 'xs', 'kız çocuk tişört', 14, 'Mevcut', 'images/rD34bu5ft71LZxWcJOkULIQ8RZ1NeWqUFdh3jvCg.jpg', '2023-05-14', '2023-05-14'),
(78, 21, 'Bilek boy ayakkabı', 'Bilek boy ayılı ayakkabı', 350, 'siyah', 'xs', 'kız ayakkabı', 14, 'Mevcut', 'images/gha1esAxiiF41gGeb0fIuyNLsEzv55cW2KncdGWy.jpg', '2023-05-14', '2023-05-14'),
(79, 21, 'Sade spor ayakkabı', 'Sade spor ayakkabı', 450, 'beyaz', 'xs', 'kız ayakkabı', 14, 'Mevcut', 'images/QPIHUNvh8FgPRmsQOk4tzGcD3Cxpmh8GEGoectfT.jpg', '2023-05-14', '2023-05-14'),
(80, 18, 'Elbise', 'Sert kumaş elbise', 380, 'pembe', 'xs', 'kız elbise', 22, 'Mevcut', 'images/1JwEqcmzApFRX4AWhV7lMVW7ZqEj6tbZ038ACPB3.jpg', '2023-05-14', '2023-05-14'),
(81, 21, 'İncili babet', 'İncili bilek bağcıklı babet', 350, 'beyaz', 'xs', 'kız ayakkabı', 36, 'Mevcut', 'images/VxPskinNnWnFOKw8kzp5Ii9pvFzv8UcQI8Nw74qG.jpg', '2023-05-14', '2023-05-14'),
(82, 18, 'Şık elbise', 'Tarlatanlı şık elbise', 470, 'siyah', 'xs', 'kız elbise', 22, 'Mevcut', 'images/K7DfP8t6eBYKvvp4boNhX9RUtzRJSuocPNZ5GMZS.jpg', '2023-05-14', '2023-05-14'),
(83, 18, 'Siyah elbise', 'Tül detaylı kollu elbise', 350, 'siyah', 'xs', 'kız elbise', 22, 'Mevcut', 'images/ASHnW3osftWDjR7j1oBRkel0iNMr9QLeHqC1qxwc.jpg', '2023-05-14', '2023-05-14'),
(84, 24, 'Spor ayakkabı', 'Siyah spor ayakkabı', 350, 'siyah', 'xs', 'erkek çocuk ayakkabı', 36, 'Mevcut', 'images/7kqfQORCxJ83jT0NPMyl14rwEcsj5Fzo7bY240k1.jpg', '2023-05-14', '2023-05-14'),
(85, 24, 'Krampon', 'Çocuk krampon', 450, 'siyah', 'xs', 'erkek çocuk ayakkabı', 14, 'Mevcut', 'images/LhORUWV63gMmBJQii7O8Cds7CiVzr90augVLh3OH.jpg', '2023-05-14', '2023-05-14'),
(86, 24, 'Deri spor ayakkabı', 'Deri spor ayakkabı', 370, 'siyah', 'xs', 'erkek çocuk ayakkabı', 24, 'Mevcut', 'images/9wYCU694qGLt9PwdfnHNXYkzvzwldGzvKHuBfcon.jpg', '2023-05-14', '2023-05-14'),
(87, 23, 'Düğmeli kazak', 'Düğmeli yünlü kazak', 340, 'gri', 'xs', 'erkek çocuk kazak', 14, 'Mevcut', 'images/NyRJ3d3gplkGJNwHdkpWDODNQT1o9jyVf5JlFuJ9.jpg', '2023-05-14', '2023-05-14'),
(88, 23, 'Çizgili kazak', 'Yatay çizgili kazak', 380, 'Mavi', 'xs', 'erkek çocuk kazak', 36, 'Mevcut', 'images/mIamUI2Ul7h9Nx6AnuD5HIEBeMmQQd6y06eFBS0V.jpg', '2023-05-14', '2023-05-14'),
(89, 23, 'Modelli kazak', 'Modelli yün kazak', 350, 'gri', 'xs', 'erkek çocuk kazak', 14, 'Mevcut', 'images/PQhFw42SXpJNpTxS5GObvYPuFUO6zIYIUZb8OkJX.jpg', '2023-05-14', '2023-05-14'),
(90, 23, 'İki renk çizgili kazak', 'İki renk çizgili kazak', 360, 'gri', 'xs', 'erkek çocuk kazak', 24, 'Mevcut', 'images/QlNEuetyecBm9qe3PwdDhCige0AqKoZTmmNgMIPK.jpg', '2023-05-14', '2023-05-14'),
(91, 22, 'Pantolon', 'Lastikli erkek çocuk pantolon', 370, 'kahverengi', 'xs', 'erkek çocuk pantolon', 36, 'Mevcut', 'images/Vahld2EfCuIWV2c4xhNpBCYvZ8FBRKGB1fWdrcxR.jpg', '2023-05-14', '2023-05-14'),
(92, 22, 'Beyaz pantolon', 'Beyaz kumaş pantolon', 306, 'beyaz', 'xs', 'erkek çocuk pantolon', 14, 'Mevcut', 'images/oWDgFWd4MyK7PMlYlxB594KqQz08agA7BQKQRSWu.jpg', '2023-05-14', '2023-05-14'),
(93, 22, 'Siyah eşofman', 'Siyah içi yünlü eşofman', 300, 'siyah', 'xs', 'erkek çocuk pantolon', 14, 'Mevcut', 'images/oU7s62WsFL1SsctGOBX3nuOawOfo9aiy6u69mBQ5.jpg', '2023-05-14', '2023-05-14'),
(94, 23, 'Beyaz gömlek', 'Beyaz gömlek', 280, 'beyaz', 'xs', 'erkek çocuk gömlek', 22, 'Mevcut', 'images/JdSATllNyB8ooe9gGhQ8rKEazP9HkSvMmJKA5j14.jpg', '2023-05-14', '2023-05-14'),
(95, 23, 'Cepli t-shirt', 'Cepli pamuklu t-shirt', 120, 'gri', 'xs', 'erkek çocuk tişört', 14, 'Mevcut', 'images/A6i6pqBSbkACV4PgWz6Apk2hKwK0Y4Hsag4GKiCe.jpg', '2023-05-14', '2023-05-14'),
(96, 23, 'Yazılı t-shirt', 'Yazılı pamuklu t-shirt', 110, 'siyah', 'xs', 'erkek çocuk tişört', 36, 'Mevcut', 'images/8zz1TWtbX6rHM599CbjslW4Jezi04D9sgy3sOChg.jpg', '2023-05-14', '2023-05-14'),
(97, 23, 'Basketbol resimli t-shirt', 'Çizimli pamuklu t-shirt', 130, 'sarı', 'xs', 'erkek çocuk tişört', 35, 'Mevcut', 'images/HJyTKVVnKaI92JRWpN9cq3RhSEkoS8vaxIWIkvxS.jpg', '2023-05-14', '2023-05-14');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `address`) VALUES
(1, 'helen', 'helen@gmail.com', NULL, '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sakarya mah. yıldıztabya alibeyköy caddesi');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `kargo_sirketleri`
--
ALTER TABLE `kargo_sirketleri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kargo_takip`
--
ALTER TABLE `kargo_takip`
  ADD PRIMARY KEY (`kargo_takip_id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `kullanici_tipleri`
--
ALTER TABLE `kullanici_tipleri`
  ADD PRIMARY KEY (`kullanici_tipi_id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `resimler`
--
ALTER TABLE `resimler`
  ADD PRIMARY KEY (`resim_id`);

--
-- Tablo için indeksler `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`sepet_id`);

--
-- Tablo için indeksler `sepets`
--
ALTER TABLE `sepets`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `shopcart_items`
--
ALTER TABLE `shopcart_items`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparis_detaylari`
--
ALTER TABLE `siparis_detaylari`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparis_detaylaris`
--
ALTER TABLE `siparis_detaylaris`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Tablo için indeksler `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Tablo için indeksler `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kargo_sirketleri`
--
ALTER TABLE `kargo_sirketleri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kargo_takip`
--
ALTER TABLE `kargo_takip`
  MODIFY `kargo_takip_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici_tipleri`
--
ALTER TABLE `kullanici_tipleri`
  MODIFY `kullanici_tipi_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `resimler`
--
ALTER TABLE `resimler`
  MODIFY `resim_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `sepet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Tablo için AUTO_INCREMENT değeri `sepets`
--
ALTER TABLE `sepets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `shopcart_items`
--
ALTER TABLE `shopcart_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `siparis_detaylari`
--
ALTER TABLE `siparis_detaylari`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `siparis_detaylaris`
--
ALTER TABLE `siparis_detaylaris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
