# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.34)
# Database: area
# Generation Time: 2015-09-09 11:06:42 +0000
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
  `featured` enum('ON','OFF') COLLATE utf8_unicode_ci NOT NULL,
  `featured_image_id` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `activities` WRITE;
/*!40000 ALTER TABLE `activities` DISABLE KEYS */;

INSERT INTO `activities` (`id`, `title`, `slug`, `subtitle`, `description`, `status_id`, `position`, `featured`, `featured_image_id`, `active`, `created_at`, `updated_at`)
VALUES
	(1,'Animi et doloribus debitis quo animi.','animi-et-doloribus-debitis-quo-animi','2012, 2013 - Restauro e risanamento conservativo, consolidamenti e costruzione di fabbricato ex novo;','2012, 2013 - Restauro e risanamento conservativo, consolidamenti e costruzione di fabbricato ex novo;',2,0,'ON',2,0,'2015-09-09 09:35:03','2015-09-09 09:48:09'),
	(2,'The professionalism of Directors','the-professionalism-of-directors','2012, 2013 - Restauro e risanamento conservativo, consolidamenti e costruzione di fabbricato ex novo;','2012, 2013 - Restauro e risanamento conservativo, consolidamenti e costruzione di fabbricato ex novo;',2,0,'ON',4,0,'2015-09-09 09:45:41','2015-09-09 10:29:52'),
	(3,'Code of Business Conduct','code-of-business-conduct','2012, 2013 - Restauro e risanamento conservativo, consolidamenti e costruzione di fabbricato ex novo;','2012, 2013 - Restauro e risanamento conservativo, consolidamenti e costruzione di fabbricato ex novo;',1,0,'ON',5,0,'2015-09-09 09:48:31','2015-09-09 09:48:49');

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
	(1,'Ultimato','ultimato','2015-09-09 11:35:49','2015-09-09 11:35:49'),
	(2,'In Corso','in-corso','2015-09-09 11:36:03','2015-09-09 11:36:03');

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
  `custom_properties` text COLLATE utf8_unicode_ci NOT NULL,
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
	(1,1,'Area\\Models\\Activities','images','01_HP_RESTAURO','01_HP_RESTAURO.jpg','uploads',118077,'[]','[]',NULL,NULL,1,'2015-09-09 09:39:56','2015-09-09 09:39:56'),
	(2,1,'Area\\Models\\Activities','images','NYC-by-Bicycle-1','NYC-by-Bicycle-1.jpg','uploads',776942,'[]','[]',NULL,NULL,1,'2015-09-09 09:39:56','2015-09-09 09:39:56'),
	(3,2,'Area\\Models\\Activities','images','Fotolia_32505268_M','Fotolia_32505268_M.jpg','uploads',1250866,'[]','[]',NULL,NULL,2,'2015-09-09 09:45:53','2015-09-09 09:45:53'),
	(4,2,'Area\\Models\\Activities','images','Fotolia_43117675_M','Fotolia_43117675_M.jpg','uploads',1064071,'[]','[]',NULL,NULL,2,'2015-09-09 09:45:53','2015-09-09 09:45:53'),
	(5,3,'Area\\Models\\Activities','images','Fotolia_47439570_M','Fotolia_47439570_M.jpg','uploads',1108998,'[]','[]',NULL,NULL,3,'2015-09-09 09:48:42','2015-09-09 09:48:42');

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
	(1,'slogan','Slogan','<span style=\"color: rgb(51, 51, 51); font-family: Roboto; font-size: 26px; line-height: 28.6px; text-align: center;\">Un ragionevole uso dell’</span><b style=\"text-transform: uppercase; color: rgb(51, 51, 51); font-family: Roboto; font-size: 26px; line-height: 28.6px; text-align: center;\">ARCHITETTURA</b><span style=\"color: rgb(51, 51, 51); font-family: Roboto; font-size: 26px; line-height: 28.6px; text-align: center;\">&nbsp;</span><br style=\"color: rgb(51, 51, 51); font-family: Roboto; font-size: 26px; line-height: 28.6px; text-align: center;\"><span style=\"color: rgb(51, 51, 51); font-family: Roboto; font-size: 26px; line-height: 28.6px; text-align: center;\">è il solo presupposto per la sua conservazione.</span>','2015-09-08 16:59:06','2015-09-09 09:56:09'),
	(2,'block_1','Blocco Testo 1','<span style=\"font-family: Roboto; font-size: 16px; line-height: 22.8571px; text-align: center;\">L’acronimo e lo Studio&nbsp;</span><b style=\"font-family: Roboto; font-size: 16px; line-height: 22.8571px; text-align: center;\">AR[e]2A</b><span style=\"font-family: Roboto; font-size: 16px; line-height: 22.8571px; text-align: center;\">&nbsp;nascono nel 2015 da un’idea di&nbsp;</span><b style=\"font-family: Roboto; font-size: 16px; line-height: 22.8571px; text-align: center;\">Damiano Minozzi</b><span style=\"font-family: Roboto; font-size: 16px; line-height: 22.8571px; text-align: center;\">.</span><br style=\"font-family: Roboto; font-size: 16px; line-height: 22.8571px; text-align: center;\"><b style=\"font-family: Roboto; font-size: 16px; line-height: 22.8571px; text-align: center;\">Adeguamento, Restauro ed [efficientamento energetico]</b><span style=\"font-family: Roboto; font-size: 16px; line-height: 22.8571px; text-align: center;\">&nbsp;sono oggi gli strumenti che permettono la sopravvivenza dell’Architettura costruita, non soltanto in quanto materia da conservare, ma soprattutto quale spazio in quattro dimensioni, luogo utile all’uomo e, pertanto, area vissuta.</span>','2015-09-08 16:59:38','2015-09-09 09:56:40'),
	(3,'block_2','Blocco Testo 2','<span style=\"font-family: Roboto; font-size: 16px; line-height: 22.8571px; text-align: center;\">Nell’ambito dei Beni Culturali, ma non soltanto, lo Studio&nbsp;</span><b style=\"font-family: Roboto; font-size: 16px; line-height: 22.8571px; text-align: center;\">AR[e]2A</b><span style=\"font-family: Roboto; font-size: 16px; line-height: 22.8571px; text-align: center;\">&nbsp;si occupa di progettazione e direzione dei lavori per interventi di restauro e risanamento conservativo, ma anche di più ampi interventi di adeguamento, manutenzione straordinaria e ristrutturazione edilizia.&nbsp;</span><br style=\"font-family: Roboto; font-size: 16px; line-height: 22.8571px; text-align: center;\"><span style=\"font-family: Roboto; font-size: 16px; line-height: 22.8571px; text-align: center;\">In edifici storici vincolati, come in generale su tutto il patrimonio architettonico privato, consideriamo essenziale la possibilità di perseguire, con sapiente misura, i necessari adeguamenti strutturali e funzionali dell’Architettura, oltre che un suo sempre più improrogabile processo di efficientamento energetico.</span>','2015-09-08 16:59:38','2015-09-09 09:57:14'),
	(4,'address','Indirizzo','<span style=\"color: rgb(51, 51, 51); font-family: Roboto; background-color: rgb(245, 245, 245);\">Piazza Quinto Cecilio, 3 - 00152 Roma</span>','2015-09-08 17:00:23','2015-09-09 09:57:30'),
	(5,'mail','Email','<span style=\"color: rgb(51, 51, 51); font-family: Roboto; background-color: rgb(245, 245, 245);\">info@area.eu</span>','2015-09-08 17:00:33','2015-09-09 09:57:58'),
	(6,'tel','N. Telefono','<span style=\"color: rgb(51, 51, 51); font-family: Roboto; background-color: rgb(245, 245, 245);\">+39 06 60661294</span>','2015-09-08 17:00:44','2015-09-09 09:58:17');

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
	(1,'Damiano Minozzi','damiano-minozzi','Nasce a Roma il 19 Dicembre 1983. Molto presto si trasferisce in Umbria con i fratelli ed i genitori, i quali, in Valnerina, dedicheranno anni di lavoro al restauro dell’ex Convento francescano Madonna di Costantinopoli, dimora storica di famiglia.','<p><span style=\"color: rgb(51, 51, 51); font-family: Roboto; text-align: center; background-color: rgb(245, 245, 245);\">Nasce a Roma il 19 Dicembre 1983. Molto presto si trasferisce in Umbria con i fratelli ed i genitori, i quali, in Valnerina, dedicheranno anni di lavoro al restauro dell’ex Convento francescano Madonna di Costantinopoli, dimora storica di famiglia.</span><br></p>',1,NULL,0,'2015-09-09 09:59:43','2015-09-09 09:59:43'),
	(2,'Eleonora Torrigiani','eleonora-torrigiani','Nasce a Firenze il 7 Marzo 1988. Rientrata nel capoluogo toscano dopo diversi anni trascorsi a Roma con la famiglia, nel 2007 consegue presso il Liceo Machiavelli il diploma di maturità linguistica insieme al baccalauréat francese.','<p><span style=\"color: rgb(51, 51, 51); font-family: Roboto; text-align: center; background-color: rgb(245, 245, 245);\">Nasce a Firenze il 7 Marzo 1988. Rientrata nel capoluogo toscano dopo diversi anni trascorsi a Roma con la famiglia, nel 2007 consegue presso il Liceo Machiavelli il diploma di maturità linguistica insieme al baccalauréat francese.</span><br></p>',2,NULL,0,'2015-09-09 10:00:11','2015-09-09 10:00:11');

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
