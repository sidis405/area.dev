# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.34)
# Database: area
# Generation Time: 2015-09-08 08:58:28 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table activities
# ------------------------------------------------------------

DROP TABLE IF EXISTS `activities`;

CREATE TABLE `activities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status_id` int(11) DEFAULT '2',
  `featured` int(11) NOT NULL DEFAULT '0',
  `featured_image_id` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `activities` WRITE;
/*!40000 ALTER TABLE `activities` DISABLE KEYS */;

INSERT INTO `activities` (`id`, `title`, `slug`, `subtitle`, `description`, `status_id`, `featured`, `featured_image_id`, `active`, `order`, `created_at`, `updated_at`)
VALUES
	(1,'Suvereto (LI), complesso rurale, edificio principale e fabbricati minori','suvereto-li-complesso-rurale-edificio-principale-e-fabbricati-minori','2012, 2013 - Restauro e risanamento conservativo, consolidamenti e costruzione di fabbricato ex novo;','Assistenza alla progettazione, alla direzione dei lavori, ed alla direzione artistica;',2,0,NULL,0,0,'2015-09-07 13:39:09','2015-09-07 13:39:09');

/*!40000 ALTER TABLE `activities` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table activities_status
# ------------------------------------------------------------

DROP TABLE IF EXISTS `activities_status`;

CREATE TABLE `activities_status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `activities_status` WRITE;
/*!40000 ALTER TABLE `activities_status` DISABLE KEYS */;

INSERT INTO `activities_status` (`id`, `title`, `slug`, `created_at`, `updated_at`)
VALUES
	(1,'Ultimato','ultimato','2015-09-07 14:54:18','2015-09-07 14:54:18'),
	(2,'In Corso','in-corso','2015-09-07 14:54:51','2015-09-07 14:54:51');

/*!40000 ALTER TABLE `activities_status` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table media
# ------------------------------------------------------------

DROP TABLE IF EXISTS `media`;

CREATE TABLE `media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `model_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `collection_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `disk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(10) unsigned NOT NULL,
  `manipulations` text COLLATE utf8_unicode_ci NOT NULL,
  `custom_properties` text COLLATE utf8_unicode_ci,
  `title` text COLLATE utf8_unicode_ci,
  `subtitle` text COLLATE utf8_unicode_ci,
  `order_column` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `media_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;

INSERT INTO `media` (`id`, `model_id`, `model_type`, `collection_name`, `name`, `file_name`, `disk`, `size`, `manipulations`, `custom_properties`, `title`, `subtitle`, `order_column`, `created_at`, `updated_at`)
VALUES
	(1,1,'Area\\Models\\Activities','images','Screen Shot 2015-08-14 at 14.23.34','Screen Shot 2015-08-14 at 14.23.34.png','uploads',78402,'[]','[]',NULL,NULL,1,'2015-09-07 15:27:48','2015-09-07 15:27:48'),
	(2,1,'Area\\Models\\Activities','images','Screen Shot 2015-09-02 at 12.51.22','Screen Shot 2015-09-02 at 12.51.22.png','uploads',142044,'[]','[]',NULL,NULL,1,'2015-09-07 15:27:48','2015-09-07 15:27:48'),
	(3,1,'Area\\Models\\Activities','images','sidrit_trandafili','sidrit_trandafili.jpg','uploads',30696,'[]','[]',NULL,NULL,2,'2015-09-07 15:27:51','2015-09-07 15:27:51'),
	(4,1,'Area\\Models\\Activities','images','Screen Shot 2015-08-14 at 14.23.34','Screen Shot 2015-08-14 at 14.23.34.png','uploads',78402,'[]','[]',NULL,NULL,3,'2015-09-07 15:28:43','2015-09-07 15:28:43'),
	(5,1,'Area\\Models\\Activities','images','Screen Shot 2015-09-02 at 12.51.22','Screen Shot 2015-09-02 at 12.51.22.png','uploads',142044,'[]','[]',NULL,NULL,4,'2015-09-07 15:28:43','2015-09-07 15:28:43'),
	(6,1,'Area\\Models\\Activities','images','sidrit_trandafili','sidrit_trandafili.jpg','uploads',30696,'[]','[]',NULL,NULL,5,'2015-09-07 15:28:46','2015-09-07 15:28:46'),
	(7,1,'Area\\Models\\Activities','images','Screen Shot 2015-08-14 at 14.23.34','Screen Shot 2015-08-14 at 14.23.34.png','uploads',78402,'[]','[]',NULL,NULL,6,'2015-09-07 15:28:46','2015-09-07 15:28:46'),
	(8,1,'Area\\Models\\Activities','images','Screen Shot 2015-09-02 at 12.51.22','Screen Shot 2015-09-02 at 12.51.22.png','uploads',142044,'[]','[]',NULL,NULL,7,'2015-09-07 15:28:48','2015-09-07 15:28:48'),
	(9,1,'Area\\Models\\Activities','images','sidrit_trandafili','sidrit_trandafili.jpg','uploads',30696,'[]','[]',NULL,NULL,8,'2015-09-07 15:28:51','2015-09-07 15:28:51'),
	(10,1,'Area\\Models\\Activities','images','Screen Shot 2015-08-14 at 14.23.34','Screen Shot 2015-08-14 at 14.23.34.png','uploads',78402,'[]','[]',NULL,NULL,9,'2015-09-07 15:28:54','2015-09-07 15:28:54'),
	(11,1,'Area\\Models\\Activities','images','Screen Shot 2015-09-02 at 12.51.22','Screen Shot 2015-09-02 at 12.51.22.png','uploads',142044,'[]','[]',NULL,NULL,10,'2015-09-07 15:28:57','2015-09-07 15:28:57'),
	(12,1,'Area\\Models\\Activities','images','sidrit_trandafili','sidrit_trandafili.jpg','uploads',30696,'[]','[]',NULL,NULL,11,'2015-09-07 15:28:58','2015-09-07 15:28:58'),
	(13,1,'Area\\Models\\Activities','images','Screen Shot 2015-08-14 at 14.23.34','Screen Shot 2015-08-14 at 14.23.34.png','uploads',78402,'[]','[]',NULL,NULL,12,'2015-09-07 15:29:01','2015-09-07 15:29:01'),
	(14,1,'Area\\Models\\Activities','images','Screen Shot 2015-09-02 at 12.51.22','Screen Shot 2015-09-02 at 12.51.22.png','uploads',142044,'[]','[]',NULL,NULL,13,'2015-09-07 15:29:03','2015-09-07 15:29:03'),
	(15,1,'Area\\Models\\Activities','images','sidrit_trandafili','sidrit_trandafili.jpg','uploads',30696,'[]','[]',NULL,NULL,14,'2015-09-07 15:29:05','2015-09-07 15:29:05');

/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
	('2014_10_12_000000_create_users_table',1),
	('2014_10_12_100000_create_password_resets_table',1),
	('2015_09_07_112146_create_media_table',1),
	('2015_09_07_120756_create_activities_table',1),
	('2015_09_07_120808_create_activities_status_table',1),
	('2015_09_07_120816_create_activities_staff_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table staff
# ------------------------------------------------------------

DROP TABLE IF EXISTS `staff`;

CREATE TABLE `staff` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'AREA Admin','info@example.com','$2y$10$Sn77EnmS7IqDoKX2HVa/se3BM5Jm/KyW/J5StUBEfLOvvoWLpEYTO',NULL,'2015-09-07 12:16:19','2015-09-07 12:16:19');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
