# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.34)
# Database: area
# Generation Time: 2015-09-09 09:20:23 +0000
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
  `status_id` int(11) NOT NULL DEFAULT '2',
  `position` int(11) NOT NULL DEFAULT '0',
  `featured` int(11) NOT NULL DEFAULT '0',
  `featured_image_id` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



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
  `custom_properties` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `subtitle` text COLLATE utf8_unicode_ci,
  `order_column` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `media_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



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
	('2015_09_07_120816_create_activities_staff_table',2),
	('2015_09_08_145649_create_page_text_table',2);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table page_text
# ------------------------------------------------------------

DROP TABLE IF EXISTS `page_text`;

CREATE TABLE `page_text` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `page_text` WRITE;
/*!40000 ALTER TABLE `page_text` DISABLE KEYS */;

INSERT INTO `page_text` (`id`, `name`, `title`, `value`, `created_at`, `updated_at`)
VALUES
	(1,'slogan','Slogan','Lorem ipsum dolor sit amet, consectetur adipisicing elit. <span style=\"font-weight: bold;\">Neque asperiores pr</span>ovident quo, porro esse rerum tenetur ad culpa quis vero, illo fugit earum magnam nobis ratione vitae dolorum repudiandae accusantium.','2015-09-08 16:59:06','2015-09-08 15:33:03'),
	(2,'block_1','Blocco Testo 1','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque asperiores provident quo, porro esse rerum tenetur ad culpa quis vero, illo fugit earum magnam nobis ratione vitae dolorum repudiandae accusantium.','2015-09-08 16:59:38','2015-09-08 16:59:38'),
	(3,'block_2','Blocco Testo 2','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque asperiores provident quo, porro esse rerum tenetur ad culpa quis vero, illo fugit earum magnam nobis ratione vitae dolorum repudiandae accusantium.','2015-09-08 16:59:38','2015-09-08 16:59:38'),
	(4,'address','Indirizzo','Via Pinco Pallino 99, 00100, Roma','2015-09-08 17:00:23','2015-09-08 17:00:23'),
	(5,'mail','Email','joe@smith.com','2015-09-08 17:00:33','2015-09-08 17:00:33'),
	(6,'tel','N. Telefono','555-666677','2015-09-08 17:00:44','2015-09-08 17:00:44');

/*!40000 ALTER TABLE `page_text` ENABLE KEYS */;
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
  `position` int(11) NOT NULL DEFAULT '0',
  `featured_image_id` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;

INSERT INTO `staff` (`id`, `name`, `slug`, `intro`, `description`, `position`, `featured_image_id`, `active`, `created_at`, `updated_at`)
VALUES
	(1,'Sherlock Holmes','sherlock-holmes','Elementary','<p>yep</p>',1,NULL,0,'2015-09-08 17:00:18','2015-09-09 09:17:33'),
	(2,'David Grohl','david-grohl','The Foo','<p>Probot</p>',2,NULL,0,'2015-09-08 17:01:02','2015-09-08 17:01:02'),
	(3,'Jon Snow','jon-snow','Knows Nothing','<p>Nothing!</p>',3,NULL,0,'2015-09-08 17:01:43','2015-09-08 17:01:43');

/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;


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
	(1,'AREA Admin','info@example.com','$2y$10$ZhhFvinCsvzoUPsUjtW0deHCCwNO3qZ3AZ97HO8onDBXORP5MzJAO',NULL,'2015-09-08 16:59:38','2015-09-08 16:59:38');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
