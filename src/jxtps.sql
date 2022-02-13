/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.5.4-MariaDB-log : Database - juxtapose
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`juxtapose` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `juxtapose`;

/*Table structure for table `banks` */

DROP TABLE IF EXISTS `banks`;

CREATE TABLE `banks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `no_rek` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_bank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `banks_user_id_foreign` (`user_id`),
  CONSTRAINT `banks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `banks` */

insert  into `banks`(`id`,`user_id`,`no_rek`,`jenis_bank`,`created_at`,`updated_at`) values 
(1,1,'0218363129321','BCA','2022-02-13 12:20:59','2022-02-13 12:20:59'),
(2,2,'54654644','BRI','2022-02-13 14:08:44','2022-02-13 14:08:44'),
(3,2,'54654644','BRI','2022-02-13 14:11:41','2022-02-13 14:11:41');

/*Table structure for table `data_usahas` */

DROP TABLE IF EXISTS `data_usahas`;

CREATE TABLE `data_usahas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `usaha_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `file_prospektus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_saham` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_saham` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dividen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penawaran` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_pemilik` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `data_usahas_user_id_foreign` (`user_id`),
  CONSTRAINT `data_usahas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `data_usahas` */

insert  into `data_usahas`(`id`,`usaha_id`,`user_id`,`file_prospektus`,`foto`,`harga_saham`,`total_saham`,`dividen`,`penawaran`,`desc_pemilik`,`foto2`,`created_at`,`updated_at`) values 
(1,1,1,'Audrey Tilanov Pramasa1.jpg','Audrey Tilanov Pramasa2.jpg','2','1111','2','3','Merupakan seorang entrepreneur muda yang bergerak di bidang makanan','Audrey Tilanov Pramasa108838420.jpg','2022-02-13 13:31:57','2022-02-13 13:31:57');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `find_partners` */

DROP TABLE IF EXISTS `find_partners`;

CREATE TABLE `find_partners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `visi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `misi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budayakerja` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `milestone` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kebutuhanmitra` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tujuanbermitra` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kompetensimitra` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `find_partners_user_id_foreign` (`user_id`),
  CONSTRAINT `find_partners_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `find_partners` */

insert  into `find_partners`(`id`,`user_id`,`visi`,`misi`,`budayakerja`,`milestone`,`kebutuhanmitra`,`tujuanbermitra`,`kompetensimitra`,`catatan`,`created_at`,`updated_at`) values 
(1,1,'test1','tess2','tes3','tes4','tes5','tes6','tes6','esada','2022-02-13 12:57:27','2022-02-13 12:57:27'),
(2,1,'test1','tess2','tes3','tes4','tes5','tes6','tes6','esada','2022-02-13 13:01:01','2022-02-13 13:01:01'),
(3,1,'test1','tess2','tes3','tes4','tes5','tes6','tes6','esada','2022-02-13 13:06:35','2022-02-13 13:06:35'),
(4,1,'test1','tess2','tes3','tes4','tes5','tes6','tes6','esada','2022-02-13 13:06:45','2022-02-13 13:06:45'),
(5,1,'test1','tess2','tes3','tes4','tes5','tes6','tes6','esada','2022-02-13 13:07:08','2022-02-13 13:07:08');

/*Table structure for table `history_pembelians` */

DROP TABLE IF EXISTS `history_pembelians`;

CREATE TABLE `history_pembelians` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `usaha_id` bigint(20) unsigned DEFAULT NULL,
  `total_saham` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bukti` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `history_pembelians_user_id_foreign` (`user_id`),
  KEY `history_pembelians_usaha_id_foreign` (`usaha_id`),
  CONSTRAINT `history_pembelians_usaha_id_foreign` FOREIGN KEY (`usaha_id`) REFERENCES `usahas` (`id`),
  CONSTRAINT `history_pembelians_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `history_pembelians` */

insert  into `history_pembelians`(`id`,`user_id`,`usaha_id`,`total_saham`,`bukti`,`created_at`,`updated_at`) values 
(1,2,1,'12','andre1.jpg','2022-02-13 15:40:08','2022-02-13 15:40:08'),
(2,2,1,'115','andre1.jpg','2022-02-13 15:42:08','2022-02-13 15:42:08'),
(3,2,1,'533','andre3.jpg','2022-02-13 15:50:41','2022-02-13 15:50:41'),
(4,2,1,'231','andre1.jpg','2022-02-13 15:54:49','2022-02-13 15:54:49');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2022_02_13_062028_create_banks_table',1),
(7,'2022_02_13_062218_create_data_usahas_table',1),
(8,'2022_02_13_062436_create_history_pembelians_table',1),
(9,'2022_02_13_062132_create_usahas_table',2),
(10,'2022_02_13_124255_create_find_partners_table',3),
(11,'2022_02_13_062217_create_data_usahas_table',4),
(12,'2022_02_13_062437_create_history_pembelians_table',5);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `usahas` */

DROP TABLE IF EXISTS `usahas`;

CREATE TABLE `usahas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `nama_usaha` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_npwp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_berdiri` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_usaha` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_usaha` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_usaha` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usahas_user_id_foreign` (`user_id`),
  CONSTRAINT `usahas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `usahas` */

insert  into `usahas`(`id`,`user_id`,`nama_usaha`,`no_npwp`,`tahun_berdiri`,`alamat_usaha`,`desc_usaha`,`jenis_usaha`,`created_at`,`updated_at`) values 
(1,1,'Coffee Elite','31241412321','2022','Jalan Tukad Kaliasem no 123B','Coffee Elite merupakan warung kopi kekinian yang mengikuti budaya tongkorongan anak muda jaman sekarang','makanan','2022-02-13 12:41:40','2022-02-13 12:41:40');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_terdaftar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_ktp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kewarganegaraan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_ktp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_npwp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fase` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accepted` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`no_terdaftar`,`no_ktp`,`kewarganegaraan`,`tempat_lahir`,`tgl_lahir`,`agama`,`alamat`,`file_ktp`,`file_npwp`,`no_telp`,`role`,`jenis_kelamin`,`fase`,`accepted`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Audrey Tilanov Pramasa','tilanovaudrey@gmail.com',NULL,'$2y$10$RLJB1vQqeowqGZl31QgJA.EKUQdkqtUdaz7wX52Cawpc9/bPZ0fu2',NULL,'5171011723813621','laki',NULL,'2022-02-02','Islam','Bali, Denpasar Selatan, Banjar Pegok, Sesetan','Vector.png','logo.png','082144928293','pemilik','laki','7',NULL,NULL,'2022-02-13 11:16:32','2022-02-13 13:50:26'),
(2,'andre','muhammad@gmail.com',NULL,'$2y$10$.AzsMjFXJIFa9ftK48pvx..kvEYxCBxRONcFDx6k6KZ.sgryiZ7J.',NULL,'32143143232','laki',NULL,'2022-02-16','Islam','Bali, Denpasar Selatan, Banjar Pegok, Sesetan','audit ti.pdf','audit ti.pdf','082144928293','investor','laki','7',NULL,NULL,'2022-02-13 14:06:00','2022-02-13 15:40:09');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
