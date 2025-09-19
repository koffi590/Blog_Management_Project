-- Adminer 4.8.1 MySQL 8.0.43-0ubuntu0.24.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `blog_laravel` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `blog_laravel`;

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `articles_user_id_foreign` (`user_id`),
  CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `articles` (`id`, `title`, `description`, `image`, `category`, `user_id`, `created_at`, `updated_at`) VALUES
(1,	'Canon IMPRIMANTE JET D\'ENCRE PIXMA G3410 Paquet A4 - WiFi -12000 PAGES En Noir Et 7000 PAGES En COULEUR Noir',	'L’imprimante Canon G3410 et G3416 sont des modèles multifonctions qui font partie de la série PIXMA G. Ces imprimantes sont idéales pour une utilisation à domicile ou en bureau grâce à leurs fonctionnalités pratiques telles que l’impression, la numérisation et la copie, avec des cartouches d\'encre rechargeables pour une efficacité accrue.',	'https://ci.jumia.is/unsafe/fit-in/500x500/filters:fill(white)/product/57/399103/1.jpg?6431',	'Téléphonie',	1,	'2025-09-19 10:06:32',	'2025-09-19 10:06:32'),
(2,	'Pourquoi mettre des lunettes au UV ?',	'Le port de lunettes de protection est indispensable à chaque séance de puvathérapie. En effet, les UVA peuvent endommager le cristallin et provoquer des dommages qui accélèrent la survenue de la cataracte. Ils sont aussi susceptibles d\'altérer la cornée, avec un risque de kératite. C\'est pour cela qu\'il est obligatoire de porter des lunettes UV pendant la séance, puis des lunettes solaires pendant les 8 heures qui suivent la séance.\r\n\r\nCes lunettes de protection UV conviennent aussi bien dans le cadre de la puvathérapie chez un dermatologue que pour les séances de bronzage en solarium ou cabine UV. Elles ont pour rôle de bloquer les rayons UVA grâce à un traitement particulier des lentilles. Les lunettes sont constituées de 2 coquilles reliées par une barrette rigide arrondie. Les coquilles sont opaques, à l\'exception des lentilles centrales qui sont transparentes, laissant la possibilité à la personne qui les porte de continuer à voir autour d\'elle tout au long de la séance. De plus, ces lunettes anti-UV sont fournies avec un cordon élastique en silicone pour un maintien optimal.',	'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHUTAx_QRFUCzSd-uyELFMMuhUsCCekQNRKA&s',	'Vision',	1,	'2025-09-19 10:07:50',	'2025-09-19 10:07:50'),
(3,	'Qu\'est-ce que l\'e-santé ?',	'L\'e-santé, ou « e-health » en anglais, est l\'utilisation des technologies de l\'information et de la communication (TIC) pour améliorer les services de santé et le bien-être. Cela englobe des domaines variés tels que la télémédecine (consultations et expertises à distance), la santé mobile (applications et objets connectés), les dossiers médicaux numérisés, les systèmes d\'information hospitaliers, et l\'accès aux informations de santé pour les patients, dans le but d\'optimiser les soins, de coordonner les parcours de soins, et de faciliter l\'accès à la santé pour tous.',	'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ01nj1rVTq1N2MMFYJkOmNkh10XHpn7dGtjg&s',	'E-santé',	1,	'2025-09-19 10:09:43',	'2025-09-19 10:09:43'),
(4,	'Quel est le type de business le plus rentable ?',	'Technologie et logiciels. Les entreprises de technologie et de logiciels figurent parmi les plus rentables du monde. Des entreprises comme Apple, Microsoft et Google génèrent des milliards de dollars chaque année grâce à leurs produits et services innovants.',	'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfJYe5xzkKx2sWAEu36u5mGvAZriDPsf0rHg&s',	'Entreprenariat',	1,	'2025-09-19 10:12:45',	'2025-09-19 10:12:45'),
(5,	'Taux de reussite aux examens scolaires 2024-2025 en CI',	'En Côte d\'Ivoire, les taux de réussite nationaux pour l\'année 2025 sont les suivants : le Baccalauréat (BAC) affiche un taux de 40,15 %, le Brevet d\'Études du Premier Cycle (BEPC) est de 51,41 %, le Certificat d\'Études Primaires Élémentaires (CEPE) a un taux de 86,58 %, et le Brevet de Technicien Supérieur (BTS) s\'élève à 40,48 %',	'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQs3gxggdMQ_ynH_xWwqfZ3QZ4B4gWjdMD-oOxclO_EUWVRout7N5dJvAadzH6mcELgBzY&usqp=CAU',	'Education',	1,	'2025-09-19 10:15:26',	'2025-09-19 10:15:26'),
(6,	'Laravel',	'Les migrations sont un pilier essentiel pour la gestion de la base de données dans les frameworks modernes comme Symfony et Laravel. Pourtant, les approches diffèrent.\r\n\r\nLà où Symfony favorise une configuration explicite et un couplage direct à Doctrine, Laravel mise sur un système fluide, où l\'élégance syntaxique prime, et où les développeurs bénéficient de raccourcis efficaces grâce à Eloquent.\r\n\r\nUne migration est donc une classe prête à l\'emploi avec une structure pensée pour les besoins courants. Découvrons ensemble de quoi il en retourne !',	'https://cdn.laravel-france.com/images/covers/b0047317-e65d-4ea2-bc56-e6d0b8590ca1.png',	'Education',	1,	'2025-09-19 10:22:47',	'2025-09-19 10:22:47');

DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('356a192b7913b04c54574d18c28d46e6395428ab',	'i:1;',	1758276380),
('356a192b7913b04c54574d18c28d46e6395428ab:timer',	'i:1758276380;',	1758276380),
('da4b9237bacccdf19c0760cab7aec4a8359010b0',	'i:1;',	1758291014),
('da4b9237bacccdf19c0760cab7aec4a8359010b0:timer',	'i:1758291014;',	1758291014);

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `article_id` bigint unsigned NOT NULL,
  `parent_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`),
  KEY `comments_article_id_foreign` (`article_id`),
  KEY `comments_parent_id_foreign` (`parent_id`),
  CONSTRAINT `comments_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comments_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `comments` (`id`, `content`, `user_id`, `article_id`, `parent_id`, `created_at`, `updated_at`) VALUES
(1,	'dsggfg',	1,	6,	NULL,	'2025-09-19 11:39:38',	'2025-09-19 11:39:38'),
(4,	'oj,hk;h',	1,	5,	NULL,	'2025-09-19 14:36:14',	'2025-09-19 14:36:14'),
(5,	'azertyuiop',	2,	5,	NULL,	'2025-09-19 14:37:23',	'2025-09-19 14:37:23'),
(6,	'uihnpuihoi',	2,	5,	NULL,	'2025-09-19 14:37:53',	'2025-09-19 14:37:53'),
(7,	'èituiuiouo',	1,	6,	NULL,	'2025-09-19 14:46:09',	'2025-09-19 14:46:09'),
(8,	'hjhjjhjj',	2,	6,	NULL,	'2025-09-19 14:49:51',	'2025-09-19 14:49:51'),
(10,	'jhgjhgj',	2,	6,	NULL,	'2025-09-19 14:51:37',	'2025-09-19 14:51:37'),
(11,	'ok',	1,	6,	10,	'2025-09-19 15:08:33',	'2025-09-19 15:08:33'),
(12,	'c\'est just magique',	2,	6,	7,	'2025-09-19 15:09:22',	'2025-09-19 15:09:22');

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'0001_01_01_000000_create_users_table',	1),
(2,	'0001_01_01_000001_create_cache_table',	1),
(3,	'0001_01_01_000002_create_jobs_table',	1),
(4,	'2025_09_15_222602_create_articles_table',	1),
(5,	'2025_09_15_222658_create_comments_table',	1),
(6,	'2025_09_16_092211_role',	1);

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text,
  `payload` longtext NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5c5adt9FtcDTU47gAk0rQaEOc942i9BnvCYfdzTb',	1,	'127.0.0.1',	'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:142.0) Gecko/20100101 Firefox/142.0',	'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNzBZWWp0cHhYcjNsdXBoakp3QXFlcVl6bE1LT29Ya3BPM3hyeUsxRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcnRpY2xlcy82Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9',	1758294986),
('ZAIuORi4RNcngUxYmDKdsbWf3bqbQZVlRnXRKpwT',	2,	'127.0.0.1',	'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:142.0) Gecko/20100101 Firefox/142.0',	'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiN3habnB2QjhkMHNTSVdxTXV0QTkxblRpMUtPMnF2ZkVjb3NDT2JGWSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcnRpY2xlcy82Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9',	1758294944);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `users` (`id`, `name`, `birthdate`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'Joelle',	'1998-02-10',	'joellekoffi590@gmail.com',	'2025-09-19 10:05:20',	'$2y$12$5MbnIvDllY2bbaQk8Lpr8.I0RAGHX4maEVx7CJYfbmdVOflgXg196',	'user',	NULL,	'2025-09-19 10:05:04',	'2025-09-19 10:05:20'),
(2,	'paradis',	'1999-02-21',	'joekoffi24@gmail.com',	'2025-09-19 14:09:14',	'$2y$12$oZif4DNrCSWT6aMqeeHjG.MNafVoiQwMMGcVbCrdXIxA3iOW2VDby',	'user',	NULL,	'2025-09-19 14:08:54',	'2025-09-19 14:09:14');

-- 2025-09-19 16:13:36
