
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `car_rent_prices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `car_rent_prices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `car_id` int(10) unsigned NOT NULL,
  `rent_term` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rent_price` decimal(10,0) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rent_type` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `carrier_form_registrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrier_form_registrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_url` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `trasporter_type` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `carriers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carriers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `carrier_type` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `ip_address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacturer` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_of_manufacture` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_consumption` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine_power` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_type` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `equipment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `car_image` text COLLATE utf8mb4_unicode_ci,
  `url` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_people` int(11) DEFAULT NULL,
  `home_rent_form` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `cars_reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cars_reservations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `car_id` int(10) unsigned NOT NULL,
  `car_title` text COLLATE utf8mb4_unicode_ci,
  `rental_time_borrow` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rental_time_return` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rental_date_borrow` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rental_date_return` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_rental` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accessories` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` int(10) unsigned NOT NULL,
  `delivery` text COLLATE utf8mb4_unicode_ci,
  `order_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer_name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_email` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_phone` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_company` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_ico_id` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cars_reservations_order_id_unique` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `contact_form_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_form_messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `page_url` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_email` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_phone` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_company` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_ico_id` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `delivery_address` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=238 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=272 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`),
  FULLTEXT KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`),
  FULLTEXT KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `location` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_img` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `featured` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `services_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services_orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `service_id` int(10) unsigned NOT NULL,
  `order_id` bigint(20) unsigned NOT NULL,
  `service_title` text COLLATE utf8mb4_unicode_ci,
  `page_url` text COLLATE utf8mb4_unicode_ci,
  `customer_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination_point` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure_point` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `car` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_id` int(11) DEFAULT NULL,
  `number_of_passengers` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'On-Hold',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimonials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `page_url` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `transfer_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transfer_orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_url` text COLLATE utf8mb4_unicode_ci,
  `car_id` int(10) unsigned NOT NULL,
  `departure` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure_date` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `return_date` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure_time` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_time` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adult_count` int(10) unsigned NOT NULL,
  `child5plus_count` int(10) unsigned DEFAULT NULL,
  `child1plus_count` int(10) unsigned DEFAULT NULL,
  `infant_count` int(10) unsigned DEFAULT NULL,
  `customer_first_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_last_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_message` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(10) unsigned DEFAULT NULL,
  `order_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'On-Hold',
  `voucher_id` text COLLATE utf8mb4_unicode_ci,
  `payment_status` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not paid',
  `payment_method` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` decimal(10,0) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `transfer_orders_order_id_unique` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_roles` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL,
  `carrier_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

LOCK TABLES `car_rent_prices` WRITE;
/*!40000 ALTER TABLE `car_rent_prices` DISABLE KEYS */;
INSERT INTO `car_rent_prices` VALUES (1,1,'1-4 дня',100,'2019-01-29 13:38:00','2019-02-18 14:37:59','short_term_rental'),(2,1,'5-12 дней',1150,'2019-01-29 13:39:00','2019-01-30 07:41:03','short_term_rental'),(3,1,'13- 29 дней',850,'2019-01-29 13:40:00','2019-01-30 07:40:57','short_term_rental'),(4,1,'Выходные **',3100,'2019-01-29 13:40:00','2019-01-30 07:41:10','short_term_rental'),(5,1,'месяц',13500,'2019-01-29 13:41:00','2019-01-30 07:41:26','short_term_rental'),(6,1,'залог',10000,'2019-01-29 13:41:00','2019-01-30 07:41:19','short_term_rental'),(7,1,'1 месяц',100,'2019-01-30 08:05:57','2019-01-30 08:05:57','long_term_rental'),(8,1,'2-3 месяца',200,'2019-01-30 08:06:26','2019-01-30 08:06:26','long_term_rental'),(9,1,'4-6 месяца',300,'2019-01-30 08:07:03','2019-01-30 08:07:03','long_term_rental'),(10,1,'7-9 месяца',400,'2019-01-30 08:07:28','2019-01-30 08:07:28','long_term_rental'),(11,1,'10-12 месяца',500,'2019-01-30 08:07:46','2019-01-30 08:07:46','long_term_rental'),(13,1,'залог',700,'2019-01-30 08:08:27','2019-01-30 08:08:27','long_term_rental'),(14,2,'1-4 дня',100,'2019-03-14 14:53:14','2019-03-14 14:53:14','short_term_rental'),(15,3,'1-4 дня',100,'2019-03-14 14:54:19','2019-03-14 14:54:19','short_term_rental');
/*!40000 ALTER TABLE `car_rent_prices` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `carrier_form_registrations` WRITE;
/*!40000 ALTER TABLE `carrier_form_registrations` DISABLE KEYS */;
INSERT INTO `carrier_form_registrations` VALUES (1,'Customer first name','Customer last name','test@example.com','0123456789','Kiev','Customer message','http://voyager.apoehali.com.ua/partner','2019-01-28 10:17:35',NULL,'legal'),(2,'Customer first name','Customer last name','admin@example.com','123','Kiev','123','http://voyager.apoehali.com.ua/partner','2019-01-28 10:26:31',NULL,'legal'),(3,'Ivan','Ivanov','goodrobin50@gmail.com','012345','Kiev','test','http://voyager.apoehali.com.ua/partner','2019-03-01 09:59:29',NULL,'legal');
/*!40000 ALTER TABLE `carrier_form_registrations` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `carriers` WRITE;
/*!40000 ALTER TABLE `carriers` DISABLE KEYS */;
INSERT INTO `carriers` VALUES (6,'legal_person','Test company name','012345','Kiev','','',NULL,NULL,NULL,NULL,22,'2019-03-06 19:21:35',NULL),(7,'legal_person','Test companyname','12345','Kiev','','',NULL,NULL,NULL,NULL,23,'2019-03-22 13:22:29',NULL),(8,'individual_person','вфывфы','+420704164472','Прага','','',NULL,NULL,NULL,NULL,24,'2019-03-26 09:32:22',NULL);
/*!40000 ALTER TABLE `carriers` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES (1,'Škoda Fabia Kombi 1,0 TSI STYLE NEW AUTOMAT','Škoda','2019','5 l/100 km','81 kW','Бензин','Малый','Комплектация Стайл, Эл. Стеклоподъёмники, Радио, USB, AUX, 2-х зонный Авт.кондиционер, 6 airbags, alu диски, парктроник (взади), круиз-контроль, LED, Автоматическая КП + tiptronic',10,'[\"cars\\/January2019\\/Ps9E2i0MVzLFoCECr3Wt.jpeg\",\"cars\\/January2019\\/Yyr0QSrwGa95MpcVWThD.jpeg\",\"cars\\/January2019\\/UOyGz6xxPGZXtWfnqr8I.jpeg\",\"cars\\/January2019\\/pkmx1hLa1Vk1fSPQRXEv.jpeg\"]','2019-01-29 08:03:00','2019-02-21 15:57:20','cars/January2019/8wjhxriVepqmWxAGVUWn.png','skoda-fabia-kombi-1-0-tsi-style-new-automat',4,1),(2,'Škoda Fabia Kombi 1,0 STYLE NEW','Škoda','2018','5 l/100km','55 kW','Бензин','Малый','Комплектация Стайл, Эл. Стеклоподъёмники, Радио, USB, AUX, 2-х зонный Авт.кондиционер, 6 airbags, alu диски, парктроник (взади), круиз-контроль, LED',8,'[\"cars\\/January2019\\/apzoN3eNkT4QoB0tBYHf.jpeg\",\"cars\\/January2019\\/MkDuF3nT693GdmvIEMcA.jpeg\",\"cars\\/January2019\\/ZQud1uktC6KykXSl3axy.jpeg\",\"cars\\/January2019\\/BladowAREyoabG8LO08N.jpeg\",\"cars\\/January2019\\/hPZjNASdulYomnI8rjgS.jpeg\",\"cars\\/January2019\\/dMARmp10lx1BRa1yVJGC.jpeg\",\"cars\\/January2019\\/yjlK3zG28bc4WjQ9CJQe.png\",\"cars\\/January2019\\/U7iaXjtJQgp28wd8NMZh.jpeg\"]','2019-01-29 08:08:00','2019-02-21 15:57:31','cars/January2019/Mf0gvlGEQNF7QtG3Sz2J.jpeg','skoda-fabia-kombi-1-0-style-new',4,1),(3,'Škoda Fabia 1,2 TSI Automat NEW','Škoda','2018','5 l/100 km','81 kW','Бензин','Малый','Комплектация Ambition, Эл. Стекло подъёмники, Радио, CD, Авт.кондиционер, Автоматическая КП + tiptronic',5,'[\"cars\\/February2019\\/ZGaoYXZQbfaKVVUuUclQ.jpeg\",\"cars\\/February2019\\/KrUGZ2pRewZbnnASz5io.jpeg\",\"cars\\/February2019\\/s7FWJbC6kKS7LVgcNFGh.jpeg\",\"cars\\/February2019\\/GhXPstybSNm2T9w6ZsHD.jpeg\",\"cars\\/February2019\\/apvoUQUxFWw7cXnz3K1x.jpeg\",\"cars\\/February2019\\/LScnZXOsi4iDm9vdCxNE.jpeg\",\"cars\\/February2019\\/fenH92jHZUuQ2v3ctggE.jpeg\",\"cars\\/February2019\\/OxiVIyOxAN2mXcdzLX7k.jpeg\",\"cars\\/February2019\\/E3eiWcr89gQI9wTjpK7G.jpeg\"]','2019-02-22 07:55:00','2019-02-22 08:19:52','cars/February2019/PGY5ssuKcKDe3vkKWpEO.jpeg','skoda-fabia-1-2-tsi-automat-new',5,1);
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `cars_reservations` WRITE;
/*!40000 ALTER TABLE `cars_reservations` DISABLE KEYS */;
INSERT INTO `cars_reservations` VALUES (1,1,'Škoda Fabia Kombi 1,0 TSI STYLE NEW AUTOMAT','9:00','9:00','01/02/2019','03/02/2019','with limit','Cash','Baby seat, GPS Tom Tom',4,NULL,NULL,'2019-02-01 10:22:01',NULL,'Test Customer Name','test@test.com','012345','Test Customer Company','Test Customer IČO/ID'),(2,1,'Škoda Fabia Kombi 1,0 TSI STYLE NEW AUTOMAT','9:00','9:00','01/02/2019','22/02/2019','with limit','Credit card','Baby seat, GPS Tom Tom',5,NULL,NULL,'2019-02-01 10:30:01',NULL,'Test Customer Name','123@test.com','123','Test Customer Company','Test Customer IČO/ID'),(3,1,'Škoda Fabia Kombi 1,0 TSI STYLE NEW AUTOMAT','9:00','9:00','01/02/2019','02/02/2019','without limit','Credit card','Baby seat, GPS Tom Tom',7,NULL,NULL,'2019-02-01 10:35:51',NULL,'Test Customer Name','123@test.com','123','Test Customer Company','Test Customer IČO/ID'),(4,1,'Škoda Fabia Kombi 1,0 TSI STYLE NEW AUTOMAT','9:00','9:00','08/02/2019','15/02/2019','without limit','Cash','Baby seat, GPS Tom Tom',12,NULL,NULL,'2019-02-04 08:25:30',NULL,'Test First Name','test@example.com','012345','Companyname',''),(5,1,'Škoda Fabia Kombi 1,0 TSI STYLE NEW AUTOMAT','9:00','9:00','08/02/2019','10/02/2019','with limit','Cash','Baby seat, GPS Tom Tom',13,'Delivery address content',NULL,'2019-02-06 08:26:43',NULL,'Test Customer Name','test@test.com','12345','Test Customer Company','Test Customer IČO/ID');
/*!40000 ALTER TABLE `cars_reservations` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,NULL,1,'Category 1','category-1','2019-01-16 13:33:42','2019-01-16 13:33:42'),(2,NULL,1,'Category 2','category-2','2019-01-16 13:33:42','2019-01-16 13:33:42');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `contact_form_messages` WRITE;
/*!40000 ALTER TABLE `contact_form_messages` DISABLE KEYS */;
INSERT INTO `contact_form_messages` VALUES (1,'Customer first name','Customer last name','test@test.com','0971231212','Message content','2019-01-25 13:20:27','2019-01-25 13:20:27',NULL),(4,'123','123','123@test.com','123','123','2019-01-28 10:26:56',NULL,'http://voyager.apoehali.com.ua/contacts'),(5,'Customer name','Customer lastname','test@example.com','012345','comment content','2019-02-11 07:19:02',NULL,'http://voyager.localhost/contacts');
/*!40000 ALTER TABLE `contact_form_messages` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'Test Customer Name','test@test.com','012345','Test Customer Company','Test Customer IČO/ID',NULL,'Test delivery addresss','2019-02-01 10:14:00',NULL,NULL,NULL),(2,'Test Customer Name','test@test.com','012345','Test Customer Company','Test Customer IČO/ID',NULL,'Test delivery addresss','2019-02-01 10:16:49',NULL,NULL,NULL),(3,'Test Customer Name','test@test.com','012345','Test Customer Company','Test Customer IČO/ID',NULL,'Test delivery addresss','2019-02-01 10:20:13',NULL,NULL,NULL),(4,'Test Customer Name','test@test.com','012345','Test Customer Company','Test Customer IČO/ID',NULL,'Test delivery addresss','2019-02-01 10:22:01',NULL,NULL,NULL),(5,'Test Customer Name','123@test.com','123','Test Customer Company','Test Customer IČO/ID',NULL,'123','2019-02-01 10:30:01',NULL,NULL,NULL),(6,'','@','','','',NULL,'','2019-02-01 10:35:22',NULL,NULL,NULL),(7,'Test Customer Name','123@test.com','123','Test Customer Company','Test Customer IČO/ID',NULL,'123','2019-02-01 10:35:51',NULL,NULL,NULL),(8,'','@','','','',NULL,'','2019-02-01 11:17:42',NULL,NULL,NULL),(9,'Test Customer Name','@','','','',NULL,'123','2019-02-01 11:24:12',NULL,NULL,NULL),(10,'Test Customer Name','123@test.com','123','Test Customer Company','Test Customer IČO/ID',NULL,'123','2019-02-01 12:03:45',NULL,NULL,NULL),(11,'Test Customer Name','123@test.com','123','Test Customer Company','Test Customer IČO/ID',NULL,'123','2019-02-01 12:04:19',NULL,NULL,NULL),(12,'Test First Name','test@example.com','012345','Companyname','',NULL,'123','2019-02-04 08:25:30',NULL,NULL,NULL),(13,'Test Customer Name','test@test.com','12345','Test Customer Company','Test Customer IČO/ID',NULL,'Delivery address content','2019-02-06 08:26:43',NULL,NULL,NULL),(14,'Test Customer Name','123@test.com','12345','','',NULL,'','2019-02-08 08:42:28',NULL,NULL,NULL),(15,'Test Customer Name','123@test.com','12345','','',NULL,'','2019-02-08 08:47:32',NULL,NULL,NULL),(16,'Test Customer Name','123@test.com','12345','','',NULL,'','2019-02-08 08:48:35',NULL,NULL,NULL),(17,'Test Customer Name','123@test.com','1234567','','',NULL,'','2019-02-08 10:23:56',NULL,NULL,NULL),(18,'Test Customer Name','123@test.com','1234567','','',NULL,'','2019-02-08 10:25:21',NULL,NULL,NULL),(19,'Test Customer Name','123@test.com','1234567','','',NULL,'','2019-02-08 10:29:10',NULL,NULL,NULL),(20,'Test name','test@example.com','012345','','',NULL,'','2019-02-10 09:10:35',NULL,NULL,NULL),(21,'Имя и фамилия','test@example.com','012345','','',NULL,'','2019-02-15 17:48:53',NULL,NULL,NULL),(22,'Имя и фамилия','mail@mail.com','012345','','',NULL,'','2019-02-15 19:09:43',NULL,NULL,NULL),(23,'Имя и фамилия','mail@mail.com','012345','','',NULL,'','2019-02-17 14:34:44',NULL,NULL,NULL),(24,'Test customer name','test@test.com','012345','','',NULL,'','2019-02-18 10:17:05',NULL,NULL,NULL),(25,'Test customer name','test@test.com','012345','','',NULL,'','2019-02-18 10:24:29',NULL,NULL,NULL),(26,'Test customer name','test@test.com','012345','','',NULL,'','2019-02-18 10:34:59',NULL,NULL,NULL),(27,'Test customer name','test@test.com','012345','','',NULL,'','2019-02-18 10:35:09',NULL,NULL,NULL),(28,'Test customer name','test@test.com','012345','','',NULL,'','2019-02-18 10:35:14',NULL,NULL,NULL),(29,'','test@example.com','12345','','',NULL,'','2019-02-26 18:24:22',NULL,NULL,NULL),(30,'','test@example.com','12345','','',NULL,'','2019-02-26 18:25:02',NULL,NULL,NULL),(31,'','test@example.com','12345','','',NULL,'','2019-02-26 18:25:37',NULL,NULL,NULL),(32,'','test@example.com','12345','','',NULL,'','2019-02-26 18:27:11',NULL,NULL,NULL),(33,'','test@example.com','12345','','',NULL,'','2019-02-26 18:29:08',NULL,NULL,NULL),(34,'','test@example.com','12345','','',NULL,'','2019-02-26 18:29:44',NULL,NULL,NULL),(35,'','test@example.com','12345','','',NULL,'','2019-02-26 18:41:54',NULL,NULL,NULL),(36,'','test@example.com','12345','','',NULL,'','2019-02-26 18:43:47',NULL,NULL,NULL),(37,'','test@example.com','12345','','',NULL,'','2019-02-26 18:44:23',NULL,NULL,NULL),(38,'','test@example.com','12345','','',NULL,'','2019-02-26 18:44:41',NULL,NULL,NULL),(39,'Customer name','test@example.com','12345','','',NULL,'','2019-02-26 19:40:07',NULL,NULL,NULL),(40,'','','','','',NULL,'','2019-02-28 08:36:40',NULL,NULL,NULL),(41,'','123@123.com','12345678','','',NULL,'','2019-02-28 08:37:10',NULL,NULL,NULL),(42,'','123@123.com','12345678','','',NULL,'','2019-02-28 08:37:51',NULL,NULL,NULL),(43,'','test@test.com','12345','','',NULL,'','2019-02-28 09:49:17',NULL,NULL,NULL),(44,'','test@test.com','12345','','',NULL,'','2019-02-28 09:49:59',NULL,NULL,NULL),(45,'','test@test.com','12345','','',NULL,'','2019-02-28 09:50:13',NULL,NULL,NULL),(46,'','test@test.com','12345','','',NULL,'','2019-02-28 10:00:16',NULL,'Test customer name','Test customer lastname'),(47,'','123@123.com','12345','','',NULL,'','2019-02-28 10:03:38',NULL,'123','123'),(48,'','123@123.com','12345','','',NULL,'','2019-02-28 10:04:20',NULL,'123','123'),(49,'','123@123.com','12345','','',NULL,'','2019-02-28 10:04:42',NULL,'123','123'),(50,'','123@123qwerty.com','12345','','',NULL,'','2019-02-28 10:05:04',NULL,'123qwerty','123qwerty'),(51,'','TEST123@123qwerty.com','12345','','',NULL,'','2019-02-28 10:06:09',NULL,'123qwertyTEST','123qwertyTEST'),(52,'','TEST123@123qwerty.com','12345','','',NULL,'','2019-02-28 10:07:08',NULL,'123qwertyTEST','123qwertyTEST'),(53,'','TEST123@123qwerty.com','12345','','',NULL,'','2019-02-28 10:09:09',NULL,'123qwertyTEST','123qwertyTEST'),(54,'','123@123','123','','',NULL,'','2019-02-28 10:14:49',NULL,'123','123'),(55,'','Ivan@123.com','123','','',NULL,'','2019-02-28 10:15:36',NULL,'Ivan','Ivanov'),(56,'','','','','',NULL,'','2019-02-28 10:17:00',NULL,'',''),(57,'','12@12.com','12345','','',NULL,'','2019-02-28 11:21:18',NULL,'12','12'),(58,'','','','','',NULL,'','2019-02-28 11:22:20',NULL,'',''),(59,'','','','','',NULL,'','2019-02-28 11:52:12',NULL,'',''),(60,'','test@test.com','012345','','',NULL,'','2019-03-01 07:18:07',NULL,'Test customer name','Test customer name'),(61,'','test@test.com','12345','','',NULL,'','2019-03-01 07:46:16',NULL,'Test customer name','Test customer name'),(62,'','test@test.com','12345','','',NULL,'','2019-03-01 08:06:34',NULL,'Ivan','Test'),(63,'','123@123.com','123','','',NULL,'','2019-03-01 08:09:33',NULL,'123','123'),(64,'','goodrobin50@gmail.com','012345','','',NULL,'','2019-03-01 08:53:54',NULL,'Ivan','Ivanov'),(65,'','goodrobin50@gmail.com','012345','','',NULL,'','2019-03-01 09:00:40',NULL,'Ivan','Ivanov'),(66,'','goodrobin50@gmail.com','012345','','',NULL,'','2019-03-01 09:05:18',NULL,'Ivan','Ivanov'),(67,'','goodrobin50@gmail.com','012345','','',NULL,'','2019-03-01 09:06:00',NULL,'Ivan','Ivanov'),(68,'','goodrobin50@gmail.com','012345','','',NULL,'','2019-03-01 09:10:50',NULL,'Ivan','Ivanov'),(69,'','goodrobin50@gmail.com','012345','','',NULL,'','2019-03-01 09:12:05',NULL,'Ivan','Ivanov'),(70,'','goodrobin50@gmail.com','012345','','',NULL,'','2019-03-01 09:13:06',NULL,'Ivan','Ivanov'),(71,'','goodrobin50@gmail.com','012345','','',NULL,'','2019-03-01 09:16:15',NULL,'Ivan','Ivanov'),(72,'','goodrobin50@gmail.com','012345','','',NULL,'','2019-03-01 09:17:13',NULL,'Ivan','Ivanov'),(73,'','goodrobin50@gmail.com','012345','','',NULL,'','2019-03-01 09:18:52',NULL,'Ivan','Ivanov'),(74,'','goodrobin50@gmail.com','012345','','',NULL,'','2019-03-01 09:27:30',NULL,'Ivan','Ivanov'),(75,'','goodrobin50@gmail.com','012345','','',NULL,'','2019-03-01 09:40:11',NULL,'Ivan','Ivanov'),(76,'','goodrobin50@gmail.com','012345','','',NULL,'','2019-03-01 09:44:24',NULL,'Ivan','Ivanov'),(77,'','goodrobin50@gmail.com','012345','','',NULL,'','2019-03-01 09:45:22',NULL,'Ivan','Ivanov'),(78,'','goodrobin50@gmail.com','012345','','',NULL,'','2019-03-01 09:46:17',NULL,'Petro','Petrov'),(79,'','goodrobin50@gmail.com','12345','','',NULL,'','2019-03-01 10:19:42',NULL,'Ivan','Ivanov'),(80,'','goodrobin50@gmail.com','12345','','',NULL,'','2019-03-01 12:03:25',NULL,'Ivan','Ivanov'),(81,'','goodrobin50@gmail.com','12345','','',NULL,'','2019-03-01 12:07:20',NULL,'Ivan','Ivanov'),(82,'','goodrobin50@gmail.com','123','','',NULL,'','2019-03-01 12:10:44',NULL,'test','test'),(83,'','goodrobin58@gmail.com','12345','','',NULL,'','2019-03-04 11:48:49',NULL,'Customer name','Customer lastname'),(84,'','test@example.com','12345','','',NULL,'','2019-03-05 08:53:32',NULL,'Ivan','Ivanov'),(85,'','goodrobin58@gmail.com','12345','','',NULL,'','2019-03-05 08:55:04',NULL,'Ivan','Ivanov'),(86,'','','','','',NULL,'','2019-03-14 08:01:11',NULL,'',''),(87,'','','','','',NULL,'','2019-03-14 16:58:43',NULL,'',''),(88,'','test@example.com','012345','','',NULL,'','2019-03-18 11:50:15',NULL,'Customer firstname','Customer lastname'),(89,'','mail@mail.com','12345','','',NULL,'','2019-03-18 11:54:19',NULL,'Customer name','Customer name'),(90,'','test@example.com','012345','','',NULL,'','2019-03-18 12:54:19',NULL,'Customer firstname','Customer lastname'),(91,'','goodrobin58@gmail.com','012345','','',NULL,'','2019-03-18 13:02:55',NULL,'Customer firstname','Customer lastname'),(92,'','','','','',NULL,'','2019-03-26 08:31:54',NULL,'',''),(93,'','pridevtv@email.cz','+420704164472','','',NULL,'','2019-03-26 09:14:48',NULL,'вфвы','афа'),(94,'','','','','',NULL,'','2019-04-03 04:37:55',NULL,'',''),(95,'','goodrobin50@gmail.com','12345','','',NULL,'','2019-04-04 11:34:06',NULL,'John','Doe'),(96,'','goodrobin50@gmail.com','12345','','',NULL,'','2019-04-04 12:25:24',NULL,'John','Doe'),(97,'','goodrobin50@gmail.com','12345','','',NULL,'','2019-04-05 18:23:19',NULL,'Ivan','Doe'),(98,'','goodrobin50@gmail.com','12345','','',NULL,'','2019-04-06 03:54:27',NULL,'John','Doe'),(99,'','goodrobin50@gmail.com','12345','','',NULL,'','2019-04-06 03:59:14',NULL,'Ivan','Ivanov'),(100,'','goodrobin50@gmail.com','12345','','',NULL,'','2019-04-08 03:46:40',NULL,'Ivan','Ivanov'),(101,'','','','','',NULL,'','2019-04-08 04:18:50',NULL,'',''),(102,'','goodrobin50@gmail.com','12345','','',NULL,'','2019-04-08 04:19:59',NULL,'Doe','John'),(103,'','goodrobin50@gmail.com','12345','','',NULL,'','2019-04-08 06:13:15',NULL,'Ivan','Ivanov'),(104,'','goodrobin50@gmail.com','12345','','',NULL,'','2019-04-08 10:48:55',NULL,'Ivan','Ivanov'),(105,'','goodrobin50@gmail.com','12345','','',NULL,'','2019-04-08 11:02:41',NULL,'Ivan','Ivanov');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,'{}',1),(2,1,'name','text','Name',1,1,1,1,1,1,'{}',2),(3,1,'email','text','Email',1,1,1,1,1,1,'{}',3),(4,1,'password','password','Password',1,0,0,1,1,0,'{}',4),(5,1,'remember_token','text','Remember Token',0,0,0,0,0,0,'{}',5),(6,1,'created_at','timestamp','Created At',0,1,1,0,0,0,'{}',6),(7,1,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',7),(8,1,'avatar','image','Avatar',0,1,1,1,1,1,'{}',8),(9,1,'user_belongsto_role_relationship','relationship','Role',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}',10),(10,1,'user_belongstomany_role_relationship','relationship','Roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',11),(12,1,'settings','hidden','Settings',0,0,0,0,0,0,'{}',12),(13,2,'id','number','ID',1,0,0,0,0,0,NULL,1),(14,2,'name','text','Name',1,1,1,1,1,1,NULL,2),(15,2,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(16,2,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(17,3,'id','number','ID',1,0,0,0,0,0,NULL,1),(18,3,'name','text','Name',1,1,1,1,1,1,NULL,2),(19,3,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(20,3,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(21,3,'display_name','text','Display Name',1,1,1,1,1,1,NULL,5),(22,1,'role_id','text','Role',0,1,1,1,1,1,'{}',9),(23,4,'id','number','ID',1,0,0,0,0,0,NULL,1),(24,4,'parent_id','select_dropdown','Parent',0,0,1,1,1,1,'{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}',2),(25,4,'order','text','Order',1,1,1,1,1,1,'{\"default\":1}',3),(26,4,'name','text','Name',1,1,1,1,1,1,NULL,4),(27,4,'slug','text','Slug',1,1,1,1,1,1,'{\"slugify\":{\"origin\":\"name\"}}',5),(28,4,'created_at','timestamp','Created At',0,0,1,0,0,0,NULL,6),(29,4,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,7),(30,5,'id','number','ID',1,0,0,0,0,0,NULL,1),(31,5,'author_id','text','Author',1,0,1,1,0,1,NULL,2),(32,5,'category_id','text','Category',1,0,1,1,1,0,NULL,3),(33,5,'title','text','Title',1,1,1,1,1,1,NULL,4),(34,5,'excerpt','text_area','Excerpt',1,0,1,1,1,1,NULL,5),(35,5,'body','rich_text_box','Body',1,0,1,1,1,1,NULL,6),(36,5,'image','image','Post Image',0,1,1,1,1,1,'{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}',7),(37,5,'slug','text','Slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}',8),(38,5,'meta_description','text_area','Meta Description',1,0,1,1,1,1,NULL,9),(39,5,'meta_keywords','text_area','Meta Keywords',1,0,1,1,1,1,NULL,10),(40,5,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}',11),(41,5,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,12),(42,5,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,13),(43,5,'seo_title','text','SEO Title',0,1,1,1,1,1,NULL,14),(44,5,'featured','checkbox','Featured',1,1,1,1,1,1,NULL,15),(45,6,'id','number','ID',1,0,0,0,0,0,NULL,1),(46,6,'author_id','text','Author',1,0,0,0,0,0,NULL,2),(47,6,'title','text','Title',1,1,1,1,1,1,NULL,3),(48,6,'excerpt','text_area','Excerpt',1,0,1,1,1,1,NULL,4),(49,6,'body','rich_text_box','Body',1,0,1,1,1,1,NULL,5),(50,6,'slug','text','Slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}',6),(51,6,'meta_description','text','Meta Description',1,0,1,1,1,1,NULL,7),(52,6,'meta_keywords','text','Meta Keywords',1,0,1,1,1,1,NULL,8),(53,6,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}',9),(54,6,'created_at','timestamp','Created At',1,1,1,0,0,0,NULL,10),(55,6,'updated_at','timestamp','Updated At',1,0,0,0,0,0,NULL,11),(56,6,'image','image','Page Image',0,1,1,1,1,1,NULL,12),(57,7,'id','text','Id',1,1,1,0,0,0,'{}',1),(58,7,'title','text','Title',1,1,1,1,1,1,'{}',2),(60,7,'content','rich_text_box','Content',1,1,1,1,1,1,'{}',6),(61,7,'created_at','timestamp','Created At',1,1,1,1,0,1,'{}',7),(62,7,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',8),(63,7,'url','text','Url',0,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}',5),(64,7,'gallery','multiple_images','Gallery',0,1,1,1,1,1,'{}',4),(65,7,'page_img','image','Page image',0,1,1,1,1,1,'{}',3),(66,8,'id','text','Id',1,1,1,0,0,0,'{}',1),(67,8,'content','text_area','Content',1,1,1,1,1,1,'{}',4),(68,8,'first_name','text','First Name',1,1,1,1,1,1,'{}',2),(69,8,'last_name','text','Last Name',1,1,1,1,1,1,'{}',3),(70,8,'created_at','timestamp','Created At',1,1,1,1,0,1,'{}',5),(71,8,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',6),(72,8,'email','text','Email',1,1,1,1,1,1,'{}',7),(73,8,'rating','select_dropdown','Rating',0,1,1,1,1,1,'{\"options\":{\"1\":\"1\",\"2\":\"2\",\"3\":\"3\",\"4\":\"4\",\"5\":\"5\",\"\":\"\"}}',8),(74,8,'page_id','text','Page Id',0,0,0,0,0,0,'{}',10),(75,8,'page_url','text','Page Url',0,1,1,1,1,1,'{}',9),(76,8,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"options\":{\"enable\":\"enable\",\"disable\":\"disable\",\"\":\"\"}}',11),(77,18,'id','text','Id',1,0,0,0,0,0,'{}',1),(78,18,'first_name','text','First Name',1,1,1,1,1,1,'{}',2),(79,18,'last_name','text','Last Name',1,1,1,1,1,1,'{}',3),(80,18,'email','text','Email',1,1,1,1,1,1,'{}',4),(81,18,'phone','text','Phone',1,1,1,1,1,1,'{}',5),(82,18,'message','text_area','Message',1,1,1,1,1,1,'{}',6),(83,18,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',7),(84,18,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',8),(85,19,'id','text','Id',1,1,1,0,0,0,'{}',1),(86,19,'first_name','text','First Name',1,1,1,1,1,1,'{}',2),(87,19,'last_name','text','Last Name',1,1,1,1,1,1,'{}',3),(88,19,'email','text','Email',1,1,1,1,1,1,'{}',4),(89,19,'phone','text','Phone',1,1,1,1,1,1,'{}',5),(90,19,'city','text','City',1,1,1,1,1,1,'{}',6),(91,19,'message','text_area','Message',1,1,1,1,1,1,'{}',7),(92,19,'page_url','text','Page Url',0,0,1,0,0,0,'{}',8),(93,19,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',10),(94,19,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',11),(95,19,'trasporter_type','select_dropdown','Trasporter Type',0,1,1,1,1,1,'{\"options\":{\"legal\":\"legal\",\"individual\":\"individual\",\"\":\"\"}}',9),(96,20,'id','text','Id',1,0,0,0,0,0,'{}',1),(97,20,'title','text','Title',1,1,1,1,1,1,'{}',2),(98,20,'manufacturer','text','Manufacturer',1,1,1,1,1,1,'{}',3),(99,20,'year_of_manufacture','text','Year Of Manufacture',1,1,1,1,1,1,'{}',4),(100,20,'fuel_consumption','text','Fuel Consumption',1,1,1,1,1,1,'{}',6),(101,20,'engine_power','text','Engine Power',1,1,1,1,1,1,'{}',7),(102,20,'fuel_type','text','Fuel Type',1,1,1,1,1,1,'{}',8),(103,20,'class','text','Class',1,1,1,1,1,1,'{}',9),(104,20,'equipment','text_area','Equipment',1,1,1,1,1,1,'{}',10),(105,20,'rating','text','Rating',0,1,1,1,1,1,'{}',11),(106,20,'images','multiple_images','Images',0,1,1,1,1,1,'{}',13),(107,20,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',14),(108,20,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',15),(109,20,'car_image','image','Car Image',0,1,1,1,1,1,'{}',12),(110,20,'url','text','Url',0,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}',16),(111,20,'number_of_people','text','Number Of People',0,1,1,1,1,1,'{}',5),(113,21,'id','text','Id',1,1,1,0,0,0,'{}',1),(114,21,'car_id','text','Car Id',1,1,1,1,1,1,'{}',2),(115,21,'rent_term','select_dropdown','Rent Term',1,1,1,1,1,1,'{\"options\":{\"1-4 \\u0434\\u043d\\u044f\":\"1-4 \\u0434\\u043d\\u044f\",\"5-12 \\u0434\\u043d\\u0435\\u0439\":\"5-12 \\u0434\\u043d\\u0435\\u0439\",\"13-29 \\u0434\\u043d\\u0435\\u0439\":\"13-29 \\u0434\\u043d\\u0435\\u0439\",\"1 \\u043c\\u0435\\u0441\\u044f\\u0446\":\"1 \\u043c\\u0435\\u0441\\u044f\\u0446\",\"2-3 \\u043c\\u0435\\u0441\\u044f\\u0446\\u0430\":\"2-3 \\u043c\\u0435\\u0441\\u044f\\u0446\\u0430\",\"4-6 \\u043c\\u0435\\u0441\\u044f\\u0446\\u0430\":\"4-6 \\u043c\\u0435\\u0441\\u044f\\u0446\\u0430\",\"7-9 \\u043c\\u0435\\u0441\\u044f\\u0446\\u0435\\u0432\":\"7-9 \\u043c\\u0435\\u0441\\u044f\\u0446\\u0435\\u0432\",\"10-12 \\u043c\\u0435\\u0441\\u044f\\u0446\\u0435\\u0432\":\"10-12 \\u043c\\u0435\\u0441\\u044f\\u0446\\u0435\\u0432\",\"\\u0417\\u0430\\u043b\\u043e\\u0433\":\"\\u0417\\u0430\\u043b\\u043e\\u0433\",\"\":\"\"}}',3),(116,21,'rent_price','text','Rent Price',1,1,1,1,1,1,'{}',4),(117,21,'car_rent_price_belongsto_car_relationship','relationship','cars',0,1,1,1,1,1,'{\"model\":\"App\\\\Car\",\"table\":\"cars\",\"type\":\"belongsTo\",\"column\":\"car_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"car_rent_prices\",\"pivot\":\"0\",\"taggable\":\"0\"}',7),(118,21,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',6),(119,21,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',8),(120,21,'rent_type','select_dropdown','Rent Type',0,1,1,1,1,1,'{\"options\":{\"short_term_rental\":\"Short term rental\",\"long_term_rental\":\"Long term rental\",\"\":\"\"}}',5),(121,22,'id','text','Id',1,1,1,0,0,0,'{}',0),(122,22,'car_id','text','Car Id',1,0,1,1,1,1,'{}',2),(123,22,'car_title','text','Car Title',0,1,1,1,1,1,'{}',3),(124,22,'rental_time_borrow','time','Rental Time Borrow',1,1,1,1,1,1,'{}',4),(125,22,'rental_time_return','time','Rental Time Return',1,1,1,1,1,1,'{}',5),(126,22,'rental_date_borrow','date','Rental Date Borrow',1,1,1,1,1,1,'{}',6),(127,22,'rental_date_return','date','Rental Date Return',1,1,1,1,1,1,'{}',7),(128,22,'type_of_rental','text','Type Of Rental',1,1,1,1,1,1,'{}',8),(129,22,'payment_method','text','Payment Method',1,1,1,1,1,1,'{}',9),(130,22,'accessories','text','Accessories',0,0,1,1,1,1,'{}',10),(131,22,'customer_id','text','Customer Id',1,1,1,1,1,1,'{}',11),(132,22,'delivery','text_area','Delivery',1,0,1,1,1,1,'{}',12),(133,22,'order_id','text','Order Id',0,0,1,1,1,1,'{}',13),(134,22,'created_at','timestamp','Created At',1,1,1,1,0,1,'{}',14),(135,22,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',15),(136,22,'customer_name','text','Customer Name',0,0,1,1,1,1,'{}',16),(137,22,'customer_email','text','Customer Email',0,0,1,1,1,1,'{}',17),(138,22,'customer_phone','text','Customer Phone',0,0,1,1,1,1,'{}',18),(139,22,'customer_company','text','Customer Company',0,0,1,1,1,1,'{}',19),(140,22,'customer_ico_id','text','Customer Ico Id',0,0,1,1,1,1,'{}',20),(141,23,'id','text','Id',1,1,1,0,0,0,'{}',1),(142,23,'customer_name','text','Customer Name',0,1,1,1,1,1,'{}',2),(143,23,'customer_email','text','Customer Email',0,1,1,1,1,1,'{}',3),(144,23,'customer_phone','text','Customer Phone',0,1,1,1,1,1,'{}',4),(145,23,'customer_company','text','Customer Company',0,0,1,1,1,1,'{}',5),(146,23,'customer_ico_id','text','Customer Ico Id',0,0,1,1,1,1,'{}',6),(147,23,'address','text_area','Address',0,0,1,1,1,1,'{}',7),(148,23,'delivery_address','text_area','Delivery Address',0,1,1,1,1,1,'{}',8),(149,23,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',9),(150,23,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',10),(151,23,'first_name','text','First Name',0,0,1,1,1,1,'{}',11),(152,23,'last_name','text','Last Name',0,0,1,1,1,1,'{}',12),(153,7,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"options\":{\"ACTIVE\":\"ACTIVE\",\"INACTIVE\":\"INACTIVE\",\"\":\"\"}}',9),(154,7,'featured','checkbox','Featured',0,0,1,1,1,1,'{\"0\":\"Not Featured\",\"1\":\"Featured\",\"checked\":false}',10),(155,24,'id','text','Id',1,1,1,0,0,0,'{}',0),(156,24,'service_id','text','Service Id',1,0,1,0,0,0,'{}',2),(157,24,'order_id','text','Order Id',1,1,1,0,0,0,'{}',3),(158,24,'service_title','text','Service Title',0,0,1,1,1,1,'{}',4),(159,24,'page_url','text','Page Url',0,0,1,0,0,0,'{}',5),(160,24,'customer_name','text','Customer Name',1,0,1,1,1,1,'{}',6),(161,24,'customer_email','text','Customer Email',1,1,1,1,1,1,'{}',7),(162,24,'customer_phone','text','Customer Phone',1,0,1,1,1,1,'{}',8),(163,24,'destination_point','text_area','Destination Point',1,0,1,1,1,1,'{}',9),(164,24,'departure_point','text_area','Departure Point',1,0,1,1,1,1,'{}',10),(165,24,'date','date','Date',1,1,1,1,1,1,'{}',11),(166,24,'time','time','Time',1,1,1,1,1,1,'{}',12),(167,24,'comment','text_area','Comment',0,0,1,1,1,1,'{}',13),(168,24,'car','text','Car',1,0,1,1,1,1,'{}',14),(169,24,'car_id','text','Car Id',0,0,1,1,1,1,'{}',15),(170,24,'number_of_passengers','text','Number Of Passengers',1,0,1,1,1,1,'{}',16),(171,24,'created_at','timestamp','Created At',1,1,1,1,0,1,'{}',17),(172,24,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',18),(173,25,'id','text','Id',1,1,1,0,0,0,'{}',1),(177,25,'location','text','Location',0,0,1,1,1,1,'{}',2),(178,25,'firstname','text','Firstname',0,0,1,1,1,1,'{}',3),(179,25,'lastname','text','Lastname',0,0,1,1,1,1,'{}',4),(180,25,'ip_address','text','Ip Address',0,1,1,1,1,1,'{}',5),(181,25,'phone','text','Phone',0,0,1,1,1,1,'{}',6),(182,25,'address','text_area','Address',0,0,1,1,1,1,'{}',8),(183,25,'created_at','timestamp','Created At',1,1,1,1,0,1,'{}',10),(184,25,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',11),(187,25,'user_id','text','User Id',1,1,1,1,1,1,'{}',9),(188,25,'email','text','Email',0,0,1,1,1,1,'{}',7),(189,1,'email_verified_at','timestamp','Email Verified At',0,0,1,1,1,1,'{}',6),(190,1,'account_id','text','Account Id',0,1,1,1,1,1,'{}',12),(191,24,'user_id','text','User Id',0,0,1,1,1,1,'{}',19),(192,24,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"options\":{\"On-Hold\":\"On-Hold\",\"Processing\":\"Processing\",\"Completed\":\"Completed\",\"Cancelled\":\"Cancelled\"}}',20),(193,20,'home_rent_form','text','Home Rent Form',0,0,1,1,1,1,'{}',17),(194,26,'id','text','Id',1,1,1,0,0,0,'{}',0),(195,26,'page_url','text','Page Url',0,0,1,1,1,1,'{}',2),(196,26,'car_id','text','Car Id',1,1,1,1,1,1,'{}',3),(197,26,'departure','text','Departure',1,1,1,1,1,1,'{}',4),(198,26,'destination','text','Destination',1,1,1,1,1,1,'{}',5),(199,26,'departure_date','text','Departure Date',1,1,1,1,1,1,'{}',6),(200,26,'return_date','text','Return Date',1,1,1,1,1,1,'{}',7),(201,26,'departure_time','text','Departure Time',0,0,1,1,1,1,'{}',8),(202,26,'return_time','text','Return Time',0,0,1,1,1,1,'{}',9),(203,26,'adult_count','text','Adult Count',1,1,1,1,1,1,'{}',10),(204,26,'child5plus_count','text','Child5plus Count',0,0,1,1,1,1,'{}',11),(205,26,'child1plus_count','text','Child1plus Count',0,0,1,1,1,1,'{}',12),(206,26,'infant_count','text','Infant Count',0,0,1,1,1,1,'{}',13),(207,26,'customer_first_name','text','Customer First Name',1,0,1,1,1,1,'{}',14),(208,26,'customer_last_name','text','Customer Last Name',1,0,1,1,1,1,'{}',15),(209,26,'customer_email','text','Customer Email',1,0,1,1,1,1,'{}',16),(210,26,'customer_phone','text','Customer Phone',1,0,1,1,1,1,'{}',17),(211,26,'customer_message','text','Customer Message',0,0,1,1,1,1,'{}',18),(212,26,'user_id','text','User Id',0,0,1,1,1,1,'{}',19),(213,26,'order_id','text','Order Id',0,1,1,1,1,1,'{}',20),(214,26,'created_at','timestamp','Created At',1,1,1,1,0,1,'{}',21),(215,26,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',22),(216,26,'transfer_order_hasone_car_relationship','relationship','cars',0,1,1,1,1,1,'{\"model\":\"App\\\\Car\",\"table\":\"cars\",\"type\":\"belongsTo\",\"column\":\"car_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"car_rent_prices\",\"pivot\":\"0\",\"taggable\":\"0\"}',26),(217,26,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"options\":{\"On-Hold\":\"On-Hold\",\"Processing\":\"Processing\",\"Completed\":\"Completed\",\"Cancelled\":\"Cancelled\"}}',23),(218,26,'voucher_id','text','Voucher Id',0,0,1,1,1,1,'{}',27),(219,26,'payment_status','select_dropdown','Payment Status',1,1,1,1,1,1,'{\"options\":{\"paid\":\"paid\",\"not paid\":\"not paid\"}}',24),(220,27,'id','text','Id',1,1,1,0,0,0,'{}',1),(221,27,'carrier_type','select_dropdown','Carrier Type',1,1,1,1,1,1,'{\"options\":{\"legal_person\":\"Legal Person\",\"individual_person\":\"Individual Person\"}}',2),(222,27,'company_name','text','Company Name',0,1,1,1,1,1,'{}',3),(223,27,'phone','text','Phone',1,1,1,1,1,1,'{}',4),(224,27,'city','text','City',0,1,1,1,1,1,'{}',5),(225,27,'first_name','text','First Name',0,1,1,1,1,1,'{}',6),(226,27,'last_name','text','Last Name',0,1,1,1,1,1,'{}',7),(227,27,'message','text_area','Message',0,0,1,1,1,1,'{}',8),(228,27,'address','text_area','Address',0,0,1,1,1,1,'{}',9),(229,27,'ip_address','text','Ip Address',0,1,1,1,1,1,'{}',10),(230,27,'photo','image','Photo',0,0,1,1,1,1,'{}',11),(231,27,'user_id','text','User Id',1,0,1,1,1,1,'{}',12),(232,27,'created_at','timestamp','Created At',1,1,1,1,0,1,'{}',13),(233,27,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',14),(234,27,'carrier_belongsto_user_relationship','relationship','User email',0,1,1,1,1,1,'{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"email\",\"pivot_table\":\"car_rent_prices\",\"pivot\":\"0\",\"taggable\":\"0\"}',16),(235,27,'carrier_belongsto_user_relationship_1','relationship','User name',0,1,1,1,1,1,'{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"car_rent_prices\",\"pivot\":\"0\",\"taggable\":\"0\"}',15),(236,26,'payment_method','text','Payment Method',0,0,1,1,1,1,'{}',25),(237,26,'total_price','text','Total Price',0,0,1,1,1,1,'{}',27);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy',NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null}','2019-01-16 13:33:34','2019-02-14 18:51:06'),(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2019-01-16 13:33:34','2019-01-16 13:33:34'),(3,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'','',1,0,NULL,'2019-01-16 13:33:34','2019-01-16 13:33:34'),(4,'categories','categories','Category','Categories','voyager-categories','TCG\\Voyager\\Models\\Category',NULL,'','',1,0,NULL,'2019-01-16 13:33:41','2019-01-16 13:33:41'),(5,'posts','posts','Post','Posts','voyager-news','TCG\\Voyager\\Models\\Post','TCG\\Voyager\\Policies\\PostPolicy','','',1,0,NULL,'2019-01-16 13:33:42','2019-01-16 13:33:42'),(6,'pages','pages','Page','Pages','voyager-file-text','TCG\\Voyager\\Models\\Page',NULL,'','',1,0,NULL,'2019-01-16 13:33:42','2019-01-16 13:33:42'),(7,'services','services','Service','Services','voyager-data','App\\Service',NULL,NULL,'Service blocks',1,0,'{\"order_column\":\"created_at\",\"order_display_column\":\"created_at\",\"order_direction\":\"desc\",\"default_search_key\":\"title\"}','2019-01-18 07:52:45','2019-02-06 09:50:35'),(8,'testimonials','testimonials','Testimonial','Testimonials','voyager-data','App\\Testimonial',NULL,NULL,NULL,1,0,'{\"order_column\":\"created_at\",\"order_display_column\":\"created_at\",\"order_direction\":\"desc\",\"default_search_key\":\"content\"}','2019-01-21 09:09:31','2019-01-21 12:30:44'),(18,'contact_form_messages','contact-form-messages','Contact Form Message','Contact Form Messages','voyager-data','App\\ContactFormMessage',NULL,NULL,NULL,1,0,'{\"order_column\":\"created_at\",\"order_display_column\":\"created_at\",\"order_direction\":\"asc\",\"default_search_key\":null}','2019-01-25 13:18:32','2019-01-25 13:23:24'),(19,'carrier_form_registrations','carrier-form-registrations','Carrier Registration','Carrier Registrations','voyager-data','App\\CarrierFormRegistration',NULL,NULL,NULL,1,0,'{\"order_column\":\"created_at\",\"order_display_column\":\"created_at\",\"order_direction\":\"asc\",\"default_search_key\":null}','2019-01-28 08:34:23','2019-01-28 10:21:13'),(20,'cars','cars','Car','Cars','voyager-data','App\\Car',NULL,NULL,NULL,1,0,'{\"order_column\":\"created_at\",\"order_display_column\":\"created_at\",\"order_direction\":\"asc\",\"default_search_key\":null}','2019-01-29 07:58:03','2019-02-21 15:56:38'),(21,'car_rent_prices','car-rent-prices','Car Rent Price','Car Rent Prices','voyager-data','App\\CarRentPrice',NULL,NULL,NULL,1,0,'{\"order_column\":\"car_id\",\"order_display_column\":\"car_id\",\"order_direction\":\"asc\",\"default_search_key\":null}','2019-01-29 13:22:01','2019-03-14 15:03:21'),(22,'cars_reservations','cars-reservations','Cars Reservation','Cars Reservations','voyager-data','App\\CarsReservation',NULL,NULL,NULL,1,0,'{\"order_column\":\"created_at\",\"order_display_column\":\"created_at\",\"order_direction\":\"asc\",\"default_search_key\":null}','2019-01-31 13:43:15','2019-02-01 08:57:12'),(23,'customers','customers','Customer','Customers','voyager-data','App\\Customer',NULL,NULL,NULL,1,0,'{\"order_column\":\"created_at\",\"order_display_column\":\"created_at\",\"order_direction\":\"desc\",\"default_search_key\":null}','2019-02-01 08:50:36','2019-02-28 10:01:13'),(24,'services_orders','services-orders','Services Order','Services Orders','voyager-data','App\\ServicesOrder',NULL,NULL,NULL,1,0,'{\"order_column\":\"created_at\",\"order_display_column\":\"created_at\",\"order_direction\":\"desc\",\"default_search_key\":null}','2019-02-06 13:42:25','2019-02-18 10:50:46'),(25,'profiles','profiles','Profile','Profiles','voyager-data','App\\Profile',NULL,NULL,NULL,1,0,'{\"order_column\":\"created_at\",\"order_display_column\":\"created_at\",\"order_direction\":\"desc\",\"default_search_key\":null}','2019-02-09 05:31:24','2019-02-14 10:02:15'),(26,'transfer_orders','transfer-orders','Transfer Order','Transfer Orders','voyager-data','App\\TransferOrder',NULL,NULL,NULL,1,0,'{\"order_column\":\"created_at\",\"order_display_column\":\"created_at\",\"order_direction\":\"desc\",\"default_search_key\":null}','2019-02-26 14:32:34','2019-03-18 11:34:33'),(27,'carriers','carriers','Carrier','Carriers','voyager-data','App\\Carrier',NULL,NULL,NULL,1,0,'{\"order_column\":\"created_at\",\"order_display_column\":\"created_at\",\"order_direction\":\"desc\",\"default_search_key\":null}','2019-03-06 11:29:07','2019-03-06 13:27:29');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2019-01-16 11:33:35','2019-01-16 11:33:35','voyager.dashboard',NULL),(2,1,'Media','','_self','voyager-images',NULL,NULL,4,'2019-01-16 11:33:35','2019-01-16 11:52:50','voyager.media.index',NULL),(3,1,'Users','','_self','voyager-person',NULL,NULL,2,'2019-01-16 11:33:35','2019-01-16 11:53:10','voyager.users.index',NULL),(4,1,'Roles','','_self','voyager-lock',NULL,NULL,3,'2019-01-16 11:33:35','2019-01-16 11:53:11','voyager.roles.index',NULL),(5,1,'Tools','','_self','voyager-tools',NULL,NULL,8,'2019-01-16 11:33:35','2019-01-16 11:52:50',NULL,NULL),(6,1,'Menu Builder','','_self','voyager-list',NULL,5,1,'2019-01-16 11:33:35','2019-01-16 11:52:50','voyager.menus.index',NULL),(7,1,'Database','','_self','voyager-data',NULL,5,2,'2019-01-16 11:33:35','2019-01-16 11:52:50','voyager.database.index',NULL),(8,1,'Compass','','_self','voyager-compass',NULL,5,3,'2019-01-16 11:33:35','2019-01-16 11:52:50','voyager.compass.index',NULL),(9,1,'BREAD','','_self','voyager-bread',NULL,5,4,'2019-01-16 11:33:35','2019-01-16 11:52:50','voyager.bread.index',NULL),(10,1,'Settings','','_self','voyager-settings',NULL,NULL,9,'2019-01-16 11:33:35','2019-01-16 11:52:50','voyager.settings.index',NULL),(11,1,'Categories','','_self','voyager-categories',NULL,NULL,7,'2019-01-16 11:33:41','2019-01-16 11:52:50','voyager.categories.index',NULL),(12,1,'Posts','','_self','voyager-news',NULL,NULL,5,'2019-01-16 11:33:42','2019-01-16 11:52:50','voyager.posts.index',NULL),(13,1,'Pages','','_self','voyager-file-text',NULL,NULL,6,'2019-01-16 11:33:43','2019-01-16 11:52:50','voyager.pages.index',NULL),(14,1,'Hooks','','_self','voyager-hook',NULL,5,5,'2019-01-16 11:33:44','2019-01-16 11:52:50','voyager.hooks',NULL),(18,1,'Services','','_self','voyager-data',NULL,86,1,'2019-01-18 05:52:45','2019-02-10 06:53:01','voyager.services.index',NULL),(19,4,'О компании','/pages/about-us','_self',NULL,'#000000',NULL,2,'2019-01-18 08:08:01','2019-01-28 05:55:48',NULL,''),(20,4,'Автопарк','/autopark','_self',NULL,'#000000',NULL,3,'2019-01-18 08:08:24','2019-01-29 05:44:08',NULL,''),(21,4,'Часто задаваемые вопросы','/pages','_self',NULL,'#000000',NULL,4,'2019-01-18 08:08:40','2019-01-18 08:34:00',NULL,''),(22,4,'Условия бронирования','/pages','_self',NULL,'#000000',NULL,5,'2019-01-18 08:08:55','2019-01-18 08:34:00',NULL,''),(23,4,'Контакты','/contacts','_self',NULL,'#000000',NULL,6,'2019-01-18 08:09:24','2019-01-25 09:16:16',NULL,''),(24,4,'Как стать партнером','/partner','_self','custom--menu-class','#000000',NULL,7,'2019-01-18 08:09:59','2019-01-28 06:09:12',NULL,''),(25,4,'Турфирмам','/pages','_self',NULL,'#000000',NULL,8,'2019-01-18 08:16:37','2019-01-18 08:34:00',NULL,''),(26,4,'Транспортным компаниям','/pages','_self',NULL,'#000000',NULL,9,'2019-01-18 08:16:56','2019-01-18 08:34:00',NULL,''),(27,4,'Водителям','/pages','_self',NULL,'#000000',NULL,10,'2019-01-18 08:17:14','2019-01-18 08:34:00',NULL,''),(28,4,'Отзывы','/reviews','_self',NULL,'#000000',NULL,11,'2019-01-18 08:17:24','2019-01-25 09:15:15',NULL,''),(29,4,'Персональный водитель','/pages','_self',NULL,'#000000',NULL,12,'2019-01-18 08:17:41','2019-01-18 08:34:00',NULL,''),(30,4,'Водитель для деловых поездок','/pages','_self',NULL,'#000000',NULL,13,'2019-01-18 08:17:52','2019-01-18 08:34:00',NULL,''),(31,4,'Трансфер для детей','/pages','_self',NULL,'#000000',NULL,14,'2019-01-18 08:18:02','2019-01-18 08:34:00',NULL,''),(32,4,'Свадебный трансфер','/pages','_self',NULL,'#000000',NULL,15,'2019-01-18 08:18:11','2019-01-18 08:34:00',NULL,''),(33,4,'Туристические экскурвсии','/pages','_self',NULL,'#000000',NULL,16,'2019-01-18 08:18:19','2019-01-18 08:34:00',NULL,''),(34,4,'Трансфер из аэропорта','/pages','_self',NULL,'#000000',NULL,17,'2019-01-18 08:19:56','2019-01-18 08:34:00',NULL,''),(35,4,'Трансфер по городам','/pages','_self',NULL,'#000000',NULL,18,'2019-01-18 08:20:05','2019-01-18 08:34:00',NULL,''),(36,4,'Трансфер по странам Европы','/pages','_self',NULL,'#000000',NULL,19,'2019-01-18 08:20:14','2019-01-18 08:34:00',NULL,''),(37,4,'Горящие предложения','/pages','_self',NULL,'#000000',NULL,20,'2019-01-18 08:20:24','2019-01-18 08:34:00',NULL,''),(38,4,'Автопрокат','/pages','_self',NULL,'#000000',NULL,21,'2019-01-18 08:20:32','2019-01-18 08:34:00',NULL,''),(40,5,'О нас','/pages/about-us','_self',NULL,'#000000',NULL,1,'2019-01-18 08:44:26','2019-02-05 08:25:45',NULL,''),(41,5,'Автопарк','/autopark','_self',NULL,'#000000',40,2,'2019-01-18 08:44:41','2019-02-06 06:46:18',NULL,''),(42,5,'Трансфер','/pages','_self',NULL,'#000000',NULL,2,'2019-01-18 08:44:51','2019-02-09 04:20:15',NULL,''),(43,5,'Автопрокат','/autopark','_self',NULL,'#000000',NULL,3,'2019-01-18 08:45:00','2019-03-14 15:46:16',NULL,''),(44,5,'Как стать партнером','/partner','_self',NULL,'#000000',NULL,5,'2019-01-18 08:45:09','2019-02-09 04:20:15',NULL,''),(45,5,'Отзывы','/reviews','_self',NULL,'#000000',40,5,'2019-01-18 08:45:25','2019-02-09 04:20:15',NULL,''),(46,5,'Контакты','/contacts','_self',NULL,'#000000',NULL,7,'2019-01-18 08:45:38','2019-02-09 04:20:15',NULL,''),(47,1,'Testimonials','','_self','voyager-data',NULL,85,2,'2019-01-21 07:09:31','2019-02-10 06:52:51','voyager.testimonials.index',NULL),(50,1,'Contact Form Messages','','_self','voyager-data','#000000',85,1,'2019-01-25 11:18:32','2019-02-10 06:52:42','voyager.contact-form-messages.index','null'),(51,1,'Carriers Registrations','','_self','voyager-data','#000000',87,3,'2019-01-28 06:34:23','2019-03-06 09:42:43','voyager.carrier-form-registrations.index','null'),(52,4,'Новости','/news','_self',NULL,'#000000',NULL,32,'2019-01-29 05:19:34','2019-01-29 05:19:34',NULL,''),(53,5,'Новости','/news','_self',NULL,'#000000',NULL,6,'2019-01-29 05:20:34','2019-02-09 04:20:15',NULL,''),(54,1,'Cars','','_self','voyager-data',NULL,86,2,'2019-01-29 05:58:03','2019-02-10 06:53:29','voyager.cars.index',NULL),(55,1,'Car Rent Prices','','_self','voyager-data','#000000',86,3,'2019-01-29 11:22:01','2019-02-10 06:53:42','voyager.car-rent-prices.index','null'),(56,1,'Cars Reservations','','_self','voyager-data',NULL,84,2,'2019-01-31 11:43:15','2019-02-10 06:07:17','voyager.cars-reservations.index',NULL),(57,1,'Customers','','_self','voyager-data',NULL,87,2,'2019-02-01 06:50:36','2019-02-10 06:59:48','voyager.customers.index',NULL),(58,5,'О компании','pages/o-kompanii','_self',NULL,'#000000',40,1,'2019-02-05 08:25:36','2019-02-05 08:25:47',NULL,''),(59,5,'Бронирование','pages/bronirovanie','_self',NULL,'#000000',40,3,'2019-02-05 08:27:00','2019-02-06 06:46:23',NULL,''),(60,5,'Вопросы','pages/voprosy','_self',NULL,'#000000',40,4,'2019-02-05 08:28:09','2019-02-06 06:46:23',NULL,''),(61,5,'Трансфер аэропорт','/','_self',NULL,'#000000',42,2,'2019-02-05 08:36:54','2019-02-05 08:38:38',NULL,''),(62,5,'Трансфер по городам','/','_self',NULL,'#000000',42,1,'2019-02-05 08:38:25','2019-02-05 08:38:38',NULL,''),(63,5,'Трансфер по странам','/','_self',NULL,'#000000',42,3,'2019-02-05 08:39:09','2019-02-05 08:39:38',NULL,''),(64,5,'Трансфер для детей','/','_self',NULL,'#000000',42,4,'2019-02-05 08:39:32','2019-02-05 08:39:38',NULL,''),(65,5,'Свадебный трансфер','/','_self',NULL,'#000000',42,5,'2019-02-05 08:40:10','2019-02-05 08:40:18',NULL,''),(66,5,'Горящие предложения','/','_self',NULL,'#000000',42,6,'2019-02-05 08:40:35','2019-02-05 08:40:41',NULL,''),(67,5,'Персональный водитель','/','_self',NULL,'#000000',80,2,'2019-02-05 09:13:46','2019-02-06 07:37:44',NULL,''),(68,5,'Деловые поездки','/','_self',NULL,'#000000',67,1,'2019-02-05 09:14:29','2019-02-05 09:15:35',NULL,''),(69,5,'Туристические экскурсии','/','_self',NULL,'#000000',67,2,'2019-02-05 09:15:13','2019-02-05 09:15:39',NULL,''),(70,5,'Свадебный трансфер','/','_self',NULL,'#000000',67,3,'2019-02-05 09:15:25','2019-02-05 09:15:41',NULL,''),(71,5,'Трансфер для детей','/','_self',NULL,'#000000',67,4,'2019-02-05 09:16:10','2019-02-05 09:16:16',NULL,''),(72,5,'Туристические экскурсии','/','_self',NULL,'#000000',80,3,'2019-02-05 09:17:24','2019-02-06 07:37:44',NULL,''),(73,5,'Обзорная экскурсия по Праге','/','_self',NULL,'#000000',72,1,'2019-02-05 09:18:09','2019-02-05 09:19:02',NULL,''),(74,5,'Экскурсии по Чехии и Европе','/','_self',NULL,'#000000',72,2,'2019-02-05 09:18:52','2019-02-05 09:19:02',NULL,''),(75,5,'Замки Чехии и Европы','/','_self',NULL,'#000000',72,3,'2019-02-05 09:19:20','2019-02-05 09:19:25',NULL,''),(76,5,'Фестивали','/','_self',NULL,'#000000',72,4,'2019-02-05 09:19:42','2019-02-05 09:19:52',NULL,''),(77,5,'Транспортным компаниям','/','_self',NULL,'#000000',44,1,'2019-02-05 09:20:16','2019-02-05 09:20:26',NULL,''),(78,5,'Турфирмам','/','_self',NULL,'#000000',44,2,'2019-02-05 09:20:44','2019-02-05 09:20:49',NULL,''),(79,5,'Водителям','/','_self',NULL,'#000000',44,3,'2019-02-05 09:21:07','2019-02-05 09:21:12',NULL,''),(80,5,'Услуги','/services','_self',NULL,'#000000',NULL,4,'2019-02-06 06:47:10','2019-02-09 04:20:15',NULL,''),(81,5,'Все услуги','/services','_self',NULL,'#000000',80,1,'2019-02-06 07:37:35','2019-02-06 07:37:44',NULL,''),(82,1,'Services Orders','','_self','voyager-data',NULL,84,1,'2019-02-06 11:42:26','2019-02-10 06:07:16','voyager.services-orders.index',NULL),(83,1,'Profiles','','_self','voyager-data',NULL,87,1,'2019-02-09 03:31:24','2019-02-10 06:59:48','voyager.profiles.index',NULL),(84,1,'Orders','','_self','voyager-file-text','#000000',NULL,10,'2019-02-10 06:06:25','2019-02-10 06:54:27',NULL,''),(85,1,'Feedback','','_self','voyager-group','#000000',NULL,11,'2019-02-10 06:52:06','2019-02-10 07:05:22',NULL,''),(86,1,'Data','','_self','voyager-data','#000000',NULL,13,'2019-02-10 06:52:29','2019-02-10 07:02:15',NULL,''),(87,1,'Customers','','_self','voyager-people','#000000',NULL,12,'2019-02-10 06:53:52','2019-02-10 07:03:30',NULL,''),(88,1,'Transfer Orders','admin/transfer-orders','_self','voyager-data','#000000',84,3,'2019-02-26 12:47:35','2019-02-26 12:49:00',NULL,''),(89,1,'Carriers','/admin/carriers','_self','voyager-data','#000000',87,4,'2019-03-06 09:43:33','2019-03-06 09:44:26',NULL,''),(192,6,'Contacts','/contacts','_self',NULL,'#000000',NULL,7,'2019-01-18 08:09:24','2019-03-14 11:08:43',NULL,''),(208,6,'About us','/pages/about-us','_self',NULL,'#000000',NULL,1,'2019-01-18 08:44:26','2019-03-14 09:22:28',NULL,''),(209,6,'Car park','/autopark','_self',NULL,'#000000',208,2,'2019-01-18 08:44:41','2019-03-14 09:22:47',NULL,''),(210,6,'Transfer','/pages','_self',NULL,'#000000',NULL,2,'2019-01-18 08:44:51','2019-03-14 09:24:08',NULL,''),(211,6,'Car rental','/autopark','_self',NULL,'#000000',NULL,3,'2019-01-18 08:45:00','2019-03-14 15:45:37',NULL,''),(212,6,'How to become a partner','/partner','_self',NULL,'#000000',NULL,5,'2019-01-18 08:45:09','2019-03-14 11:08:42',NULL,''),(213,6,'reviews','/reviews','_self',NULL,'#000000',208,5,'2019-01-18 08:45:25','2019-03-14 09:23:49',NULL,''),(219,6,'News','/news','_self',NULL,'#000000',NULL,6,'2019-01-29 05:20:34','2019-03-14 11:08:43',NULL,''),(224,6,'About company','pages/o-kompanii','_self',NULL,'#000000',208,1,'2019-02-05 08:25:36','2019-03-14 09:22:34',NULL,''),(225,6,'Booking','pages/bronirovanie','_self',NULL,'#000000',208,3,'2019-02-05 08:27:00','2019-03-14 09:23:12',NULL,''),(226,6,'Questions','pages/voprosy','_self',NULL,'#000000',208,4,'2019-02-05 08:28:09','2019-03-14 09:23:28',NULL,''),(227,6,'Airport transfer','/','_self',NULL,'#000000',210,4,'2019-02-05 08:36:54','2019-04-09 09:53:29',NULL,''),(228,6,'Transfer to the cities','/','_self',NULL,'#000000',210,2,'2019-02-05 08:38:25','2019-04-09 09:53:29',NULL,''),(229,6,'Transfer by country','/','_self',NULL,'#000000',210,3,'2019-02-05 08:39:09','2019-04-09 09:53:29',NULL,''),(230,6,'Transfer for children','/','_self',NULL,'#000000',233,1,'2019-02-05 08:39:32','2019-03-14 11:16:21',NULL,''),(231,6,'Wedding Transfer','/','_self',NULL,'#000000',233,2,'2019-02-05 08:40:10','2019-03-14 11:16:21',NULL,''),(232,6,'Hot Deals','/','_self',NULL,'#000000',210,7,'2019-02-05 08:40:35','2019-04-09 09:53:29',NULL,''),(233,6,'Personal driver','/','_self',NULL,'#000000',246,2,'2019-02-05 09:13:46','2019-03-14 09:27:54',NULL,''),(234,6,'Business trips','/','_self',NULL,'#000000',233,3,'2019-02-05 09:14:29','2019-03-14 11:16:21',NULL,''),(235,6,'Guided Tours','/','_self',NULL,'#000000',246,3,'2019-02-05 09:15:13','2019-03-14 09:28:00',NULL,''),(236,6,'Wedding Transfer','/','_self',NULL,'#000000',210,5,'2019-02-05 09:15:25','2019-04-09 09:53:29',NULL,''),(237,6,'Transfer for children','/','_self',NULL,'#000000',210,6,'2019-02-05 09:16:10','2019-04-09 09:53:29',NULL,''),(238,6,'Guided Tours','/','_self',NULL,'#000000',233,4,'2019-02-05 09:17:24','2019-03-14 11:16:21',NULL,''),(239,6,'Prague City Tour','/','_self',NULL,'#000000',235,1,'2019-02-05 09:18:09','2019-03-14 11:10:24',NULL,''),(240,6,'Excursions in the Czech Republic and Europe','/','_self',NULL,'#000000',235,2,'2019-02-05 09:18:52','2019-03-14 11:10:24',NULL,''),(241,6,'Castles of the Czech Republic and Europe','/','_self',NULL,'#000000',235,3,'2019-02-05 09:19:20','2019-03-14 11:10:29',NULL,''),(242,6,'Festivals','/','_self',NULL,'#000000',235,4,'2019-02-05 09:19:42','2019-03-14 11:10:37',NULL,''),(243,6,'Transport companies','/','_self',NULL,'#000000',212,1,'2019-02-05 09:20:16','2019-03-14 09:28:57',NULL,''),(244,6,'Travel Agencies','/','_self',NULL,'#000000',212,2,'2019-02-05 09:20:44','2019-03-14 09:29:10',NULL,''),(245,6,'Drivers','/','_self',NULL,'#000000',212,3,'2019-02-05 09:21:07','2019-03-14 09:29:14',NULL,''),(246,6,'Services','/services','_self',NULL,'#000000',NULL,4,'2019-02-06 06:47:10','2019-03-14 09:27:33',NULL,''),(247,6,'All services','/services','_self',NULL,'#000000',246,1,'2019-02-06 07:37:35','2019-03-14 09:27:35',NULL,''),(256,7,'O nás','pages/about-us','_self',NULL,'#000000',NULL,1,'2019-03-14 11:23:35','2019-03-14 11:25:04',NULL,''),(257,7,'O firmě','pages/o-kompanii','_self',NULL,'#000000',256,1,'2019-03-14 11:24:07','2019-03-14 11:25:36',NULL,''),(258,7,'Parkoviště','autopark','_self',NULL,'#000000',256,2,'2019-03-14 11:27:01','2019-03-14 11:27:21',NULL,''),(259,7,'Rezervace','pages/bronirovanie','_self',NULL,'#000000',256,3,'2019-03-14 11:28:02','2019-03-14 11:28:06',NULL,''),(260,7,'Otázky','pages/voprosy','_self',NULL,'#000000',256,4,'2019-03-14 11:28:55','2019-03-14 11:28:58',NULL,''),(261,7,'Recenze','reviews','_self',NULL,'#000000',256,5,'2019-03-14 11:29:34','2019-03-14 11:29:38',NULL,''),(262,7,'Převod','transfer','_self',NULL,'#000000',NULL,2,'2019-03-14 11:31:45','2019-03-14 11:32:48',NULL,''),(263,7,'Převod do měst','transfer','_self',NULL,'#000000',262,1,'2019-03-14 11:32:38','2019-03-14 11:32:42',NULL,''),(264,7,'Transfer z letiště','transfer','_self',NULL,'#000000',262,2,'2019-03-14 11:33:23','2019-03-14 11:33:28',NULL,''),(265,7,'Převod podle země','transfer','_self',NULL,'#000000',262,3,'2019-03-14 11:33:54','2019-03-14 11:35:02',NULL,''),(266,7,'Transfer pro děti','transfer','_self',NULL,'#000000',262,4,'2019-03-14 11:34:23','2019-03-14 11:35:04',NULL,''),(267,7,'Svatební Transfer','transfer','_self',NULL,'#000000',262,5,'2019-03-14 11:34:39','2019-03-14 11:35:07',NULL,''),(268,7,'Hot nabídky','transfer','_self',NULL,'#000000',262,6,'2019-03-14 11:34:58','2019-03-14 11:35:08',NULL,''),(269,6,'Carrier signup','/carrier-signup','_self',NULL,'#000000',212,4,'2019-04-03 02:24:53','2019-04-03 02:25:02',NULL,''),(270,5,'Регистрация перевозчика','/carrier-signup','_self',NULL,'#000000',44,4,'2019-04-03 02:26:08','2019-04-03 02:26:14',NULL,''),(271,6,'Order transfer','/order-transfer','_self',NULL,'#000000',210,1,'2019-04-09 09:52:51','2019-04-09 09:53:29',NULL,'');
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2019-01-16 13:33:35','2019-01-16 13:33:35'),(4,'Footer menu','2019-01-18 10:06:44','2019-01-18 10:06:44'),(5,'Header menu ru','2019-01-18 10:43:24','2019-03-14 08:19:24'),(6,'Header menu en','2019-01-18 10:43:24','2019-03-14 08:19:24'),(7,'Header menu cz','2019-03-14 11:22:41','2019-03-14 11:22:41');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_01_000000_add_voyager_user_fields',1),(4,'2016_01_01_000000_create_data_types_table',1),(5,'2016_05_19_173453_create_menu_table',1),(6,'2016_10_21_190000_create_roles_table',1),(7,'2016_10_21_190000_create_settings_table',1),(8,'2016_11_30_135954_create_permission_table',1),(9,'2016_11_30_141208_create_permission_role_table',1),(10,'2016_12_26_201236_data_types__add__server_side',1),(11,'2017_01_13_000000_add_route_to_menu_items_table',1),(12,'2017_01_14_005015_create_translations_table',1),(13,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(14,'2017_03_06_000000_add_controller_to_data_types_table',1),(15,'2017_04_21_000000_add_order_to_data_rows_table',1),(16,'2017_07_05_210000_add_policyname_to_data_types_table',1),(17,'2017_08_05_000000_add_group_to_settings_table',1),(18,'2017_11_26_013050_add_user_role_relationship',1),(19,'2017_11_26_015000_create_user_roles_table',1),(20,'2018_03_11_000000_add_user_settings',1),(21,'2018_03_14_000000_add_details_to_data_types_table',1),(22,'2018_03_16_000000_make_settings_value_nullable',1),(23,'2016_01_01_000000_create_pages_table',2),(24,'2016_01_01_000000_create_posts_table',2),(25,'2016_02_15_204651_create_categories_table',2),(26,'2017_04_11_000000_alter_post_nullable_fields_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (2,1,'О нас','This is test excerpt content','<div class=\"row\">\r\n<div class=\"col-md-6\">\r\n<h2 class=\"title-section\">О нас</h2>\r\n<p>AutoPride - это сервис по бронированию трансферов и аренды автомобилей с водителем по самым выгодным ценам. Заказать трансфер на нашем сайте выгоднее, чем вызвать такси или обращаться в транспортные компании.</p>\r\n<p>Вы хотите взять машину в аренду? Цены на почасовую аренду автомобиля с водителем ниже чем в других компаниях. Цены на почасовую аренду автомобиля с водителем ниже чем в других компаниях.</p>\r\n</div>\r\n<div class=\"col-md-6\"><img class=\"thumbnail\" src=\"http://voyager.apoehali.com.ua/storage/pages/January2019/about-us.png\" alt=\"\" /></div>\r\n</div>\r\n<p>AutoPride - это сервис по бронированию трансферов и аренды автомобилей с водителем по самым выгодным ценам. Заказать трансфер на нашем сайте выгоднее, чем вызвать такси или обращаться в транспортные компании.</p>\r\n<p>AutoPride - это сервис по бронированию трансферов и аренды автомобилей с водителем по самым выгодным ценам. Заказать трансфер на нашем сайте выгоднее, чем вызвать такси или обращаться в транспортные компании.</p>\r\n<p>AutoPride - это сервис по бронированию трансферов и аренды автомобилей с водителем по самым выгодным ценам. Заказать трансфер на нашем сайте выгоднее, чем вызвать такси или обращаться в транспортные компании.</p>',NULL,'about-us','Meta Description test','meta_key_1, meta_key_2','ACTIVE','2019-01-28 06:33:59','2019-01-28 07:14:23'),(3,1,'Test page','sdadasd','<h1>Heading 1</h1>\r\n<h2>Heading 2</h2>\r\n<h3>Heading 3</h3>\r\n<p>Test page <strong>content</strong></p>\r\n<p>AutoPride - это сервис по бронированию трансферов и аренды автомобилей с водителем по самым выгодным ценам. Заказать трансфер на нашем сайте выгоднее, чем вызвать такси или обращаться в транспортные компании.</p>\r\n<p>Вы хотите взять машину в аренду? Цены на почасовую аренду автомобиля с водителем ниже чем в других компаниях. Цены на почасовую аренду автомобиля с водителем ниже чем в других компаниях.</p>',NULL,'test-page','sadasdsad','sadasd','INACTIVE','2019-01-28 07:34:14','2019-01-28 07:38:43'),(4,1,'О компании','О компании','<p>Page content</p>',NULL,'o-kompanii','О компании','О компании','ACTIVE','2019-02-05 10:20:23','2019-02-06 08:58:40'),(5,1,'Бронирование','Бронирование','<p>Page content</p>',NULL,'bronirovanie','Бронирование','Бронирование','ACTIVE','2019-02-05 10:22:04','2019-02-05 10:22:04'),(6,1,'Вопросы','Вопросы','<p>Page content</p>',NULL,'voprosy','Вопросы','Вопросы','ACTIVE','2019-02-05 10:22:33','2019-02-05 10:22:33');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(1,3),(1,4),(1,5),(2,1),(3,1),(4,1),(4,3),(4,4),(4,5),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(11,5),(12,1),(12,5),(13,1),(13,5),(14,1),(14,5),(15,1),(15,5),(16,1),(16,5),(17,1),(17,5),(18,1),(18,5),(19,1),(19,5),(20,1),(20,5),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(26,3),(26,4),(26,5),(27,1),(27,3),(27,4),(27,5),(28,1),(28,3),(28,4),(28,5),(29,1),(29,3),(29,4),(29,5),(30,1),(30,3),(30,4),(30,5),(31,1),(31,3),(31,4),(31,5),(32,1),(32,3),(32,4),(32,5),(33,1),(33,3),(33,4),(33,5),(34,1),(34,3),(34,4),(34,5),(35,1),(35,3),(35,4),(35,5),(36,1),(36,4),(36,5),(37,1),(37,4),(37,5),(38,1),(38,4),(38,5),(39,1),(39,4),(39,5),(40,1),(40,4),(40,5),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(62,1),(63,1),(64,1),(65,1),(66,1),(67,1),(68,1),(69,1),(70,1),(71,1),(72,1),(73,1),(74,1),(75,1),(76,1),(77,1),(78,1),(79,1),(80,1),(81,1),(82,1),(83,1),(84,1),(85,1),(86,1),(87,1),(88,1),(89,1),(90,1),(91,1),(92,1),(93,1),(94,1),(95,1),(96,1),(97,1),(98,1),(99,1),(100,1),(101,1),(102,1),(103,1),(104,1),(105,1),(106,1),(107,1),(108,1),(109,1),(110,1),(111,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2019-01-16 13:33:35','2019-01-16 13:33:35'),(2,'browse_bread',NULL,'2019-01-16 13:33:35','2019-01-16 13:33:35'),(3,'browse_database',NULL,'2019-01-16 13:33:35','2019-01-16 13:33:35'),(4,'browse_media',NULL,'2019-01-16 13:33:36','2019-01-16 13:33:36'),(5,'browse_compass',NULL,'2019-01-16 13:33:36','2019-01-16 13:33:36'),(6,'browse_menus','menus','2019-01-16 13:33:36','2019-01-16 13:33:36'),(7,'read_menus','menus','2019-01-16 13:33:36','2019-01-16 13:33:36'),(8,'edit_menus','menus','2019-01-16 13:33:36','2019-01-16 13:33:36'),(9,'add_menus','menus','2019-01-16 13:33:36','2019-01-16 13:33:36'),(10,'delete_menus','menus','2019-01-16 13:33:36','2019-01-16 13:33:36'),(11,'browse_roles','roles','2019-01-16 13:33:36','2019-01-16 13:33:36'),(12,'read_roles','roles','2019-01-16 13:33:36','2019-01-16 13:33:36'),(13,'edit_roles','roles','2019-01-16 13:33:36','2019-01-16 13:33:36'),(14,'add_roles','roles','2019-01-16 13:33:36','2019-01-16 13:33:36'),(15,'delete_roles','roles','2019-01-16 13:33:36','2019-01-16 13:33:36'),(16,'browse_users','users','2019-01-16 13:33:36','2019-01-16 13:33:36'),(17,'read_users','users','2019-01-16 13:33:36','2019-01-16 13:33:36'),(18,'edit_users','users','2019-01-16 13:33:36','2019-01-16 13:33:36'),(19,'add_users','users','2019-01-16 13:33:37','2019-01-16 13:33:37'),(20,'delete_users','users','2019-01-16 13:33:37','2019-01-16 13:33:37'),(21,'browse_settings','settings','2019-01-16 13:33:37','2019-01-16 13:33:37'),(22,'read_settings','settings','2019-01-16 13:33:37','2019-01-16 13:33:37'),(23,'edit_settings','settings','2019-01-16 13:33:37','2019-01-16 13:33:37'),(24,'add_settings','settings','2019-01-16 13:33:37','2019-01-16 13:33:37'),(25,'delete_settings','settings','2019-01-16 13:33:37','2019-01-16 13:33:37'),(26,'browse_categories','categories','2019-01-16 13:33:41','2019-01-16 13:33:41'),(27,'read_categories','categories','2019-01-16 13:33:41','2019-01-16 13:33:41'),(28,'edit_categories','categories','2019-01-16 13:33:41','2019-01-16 13:33:41'),(29,'add_categories','categories','2019-01-16 13:33:41','2019-01-16 13:33:41'),(30,'delete_categories','categories','2019-01-16 13:33:41','2019-01-16 13:33:41'),(31,'browse_posts','posts','2019-01-16 13:33:42','2019-01-16 13:33:42'),(32,'read_posts','posts','2019-01-16 13:33:42','2019-01-16 13:33:42'),(33,'edit_posts','posts','2019-01-16 13:33:42','2019-01-16 13:33:42'),(34,'add_posts','posts','2019-01-16 13:33:42','2019-01-16 13:33:42'),(35,'delete_posts','posts','2019-01-16 13:33:42','2019-01-16 13:33:42'),(36,'browse_pages','pages','2019-01-16 13:33:43','2019-01-16 13:33:43'),(37,'read_pages','pages','2019-01-16 13:33:43','2019-01-16 13:33:43'),(38,'edit_pages','pages','2019-01-16 13:33:43','2019-01-16 13:33:43'),(39,'add_pages','pages','2019-01-16 13:33:43','2019-01-16 13:33:43'),(40,'delete_pages','pages','2019-01-16 13:33:43','2019-01-16 13:33:43'),(41,'browse_hooks',NULL,'2019-01-16 13:33:44','2019-01-16 13:33:44'),(42,'browse_services','services','2019-01-18 07:52:45','2019-01-18 07:52:45'),(43,'read_services','services','2019-01-18 07:52:45','2019-01-18 07:52:45'),(44,'edit_services','services','2019-01-18 07:52:45','2019-01-18 07:52:45'),(45,'add_services','services','2019-01-18 07:52:45','2019-01-18 07:52:45'),(46,'delete_services','services','2019-01-18 07:52:45','2019-01-18 07:52:45'),(47,'browse_testimonials','testimonials','2019-01-21 09:09:31','2019-01-21 09:09:31'),(48,'read_testimonials','testimonials','2019-01-21 09:09:31','2019-01-21 09:09:31'),(49,'edit_testimonials','testimonials','2019-01-21 09:09:31','2019-01-21 09:09:31'),(50,'add_testimonials','testimonials','2019-01-21 09:09:31','2019-01-21 09:09:31'),(51,'delete_testimonials','testimonials','2019-01-21 09:09:31','2019-01-21 09:09:31'),(62,'browse_contact_form_messages','contact_form_messages','2019-01-25 13:18:32','2019-01-25 13:18:32'),(63,'read_contact_form_messages','contact_form_messages','2019-01-25 13:18:32','2019-01-25 13:18:32'),(64,'edit_contact_form_messages','contact_form_messages','2019-01-25 13:18:32','2019-01-25 13:18:32'),(65,'add_contact_form_messages','contact_form_messages','2019-01-25 13:18:32','2019-01-25 13:18:32'),(66,'delete_contact_form_messages','contact_form_messages','2019-01-25 13:18:32','2019-01-25 13:18:32'),(67,'browse_carrier_form_registrations','carrier_form_registrations','2019-01-28 08:34:23','2019-01-28 08:34:23'),(68,'read_carrier_form_registrations','carrier_form_registrations','2019-01-28 08:34:23','2019-01-28 08:34:23'),(69,'edit_carrier_form_registrations','carrier_form_registrations','2019-01-28 08:34:23','2019-01-28 08:34:23'),(70,'add_carrier_form_registrations','carrier_form_registrations','2019-01-28 08:34:23','2019-01-28 08:34:23'),(71,'delete_carrier_form_registrations','carrier_form_registrations','2019-01-28 08:34:23','2019-01-28 08:34:23'),(72,'browse_cars','cars','2019-01-29 07:58:03','2019-01-29 07:58:03'),(73,'read_cars','cars','2019-01-29 07:58:03','2019-01-29 07:58:03'),(74,'edit_cars','cars','2019-01-29 07:58:03','2019-01-29 07:58:03'),(75,'add_cars','cars','2019-01-29 07:58:03','2019-01-29 07:58:03'),(76,'delete_cars','cars','2019-01-29 07:58:03','2019-01-29 07:58:03'),(77,'browse_car_rent_prices','car_rent_prices','2019-01-29 13:22:01','2019-01-29 13:22:01'),(78,'read_car_rent_prices','car_rent_prices','2019-01-29 13:22:01','2019-01-29 13:22:01'),(79,'edit_car_rent_prices','car_rent_prices','2019-01-29 13:22:01','2019-01-29 13:22:01'),(80,'add_car_rent_prices','car_rent_prices','2019-01-29 13:22:01','2019-01-29 13:22:01'),(81,'delete_car_rent_prices','car_rent_prices','2019-01-29 13:22:01','2019-01-29 13:22:01'),(82,'browse_cars_reservations','cars_reservations','2019-01-31 13:43:15','2019-01-31 13:43:15'),(83,'read_cars_reservations','cars_reservations','2019-01-31 13:43:15','2019-01-31 13:43:15'),(84,'edit_cars_reservations','cars_reservations','2019-01-31 13:43:15','2019-01-31 13:43:15'),(85,'add_cars_reservations','cars_reservations','2019-01-31 13:43:15','2019-01-31 13:43:15'),(86,'delete_cars_reservations','cars_reservations','2019-01-31 13:43:15','2019-01-31 13:43:15'),(87,'browse_customers','customers','2019-02-01 08:50:36','2019-02-01 08:50:36'),(88,'read_customers','customers','2019-02-01 08:50:36','2019-02-01 08:50:36'),(89,'edit_customers','customers','2019-02-01 08:50:36','2019-02-01 08:50:36'),(90,'add_customers','customers','2019-02-01 08:50:36','2019-02-01 08:50:36'),(91,'delete_customers','customers','2019-02-01 08:50:36','2019-02-01 08:50:36'),(92,'browse_services_orders','services_orders','2019-02-06 13:42:25','2019-02-06 13:42:25'),(93,'read_services_orders','services_orders','2019-02-06 13:42:25','2019-02-06 13:42:25'),(94,'edit_services_orders','services_orders','2019-02-06 13:42:25','2019-02-06 13:42:25'),(95,'add_services_orders','services_orders','2019-02-06 13:42:25','2019-02-06 13:42:25'),(96,'delete_services_orders','services_orders','2019-02-06 13:42:25','2019-02-06 13:42:25'),(97,'browse_profiles','profiles','2019-02-09 05:31:24','2019-02-09 05:31:24'),(98,'read_profiles','profiles','2019-02-09 05:31:24','2019-02-09 05:31:24'),(99,'edit_profiles','profiles','2019-02-09 05:31:24','2019-02-09 05:31:24'),(100,'add_profiles','profiles','2019-02-09 05:31:24','2019-02-09 05:31:24'),(101,'delete_profiles','profiles','2019-02-09 05:31:24','2019-02-09 05:31:24'),(102,'browse_transfer_orders','transfer_orders','2019-02-26 14:32:34','2019-02-26 14:32:34'),(103,'read_transfer_orders','transfer_orders','2019-02-26 14:32:34','2019-02-26 14:32:34'),(104,'edit_transfer_orders','transfer_orders','2019-02-26 14:32:34','2019-02-26 14:32:34'),(105,'add_transfer_orders','transfer_orders','2019-02-26 14:32:34','2019-02-26 14:32:34'),(106,'delete_transfer_orders','transfer_orders','2019-02-26 14:32:34','2019-02-26 14:32:34'),(107,'browse_carriers','carriers','2019-03-06 11:29:07','2019-03-06 11:29:07'),(108,'read_carriers','carriers','2019-03-06 11:29:07','2019-03-06 11:29:07'),(109,'edit_carriers','carriers','2019-03-06 11:29:07','2019-03-06 11:29:07'),(110,'add_carriers','carriers','2019-03-06 11:29:07','2019-03-06 11:29:07'),(111,'delete_carriers','carriers','2019-03-06 11:29:07','2019-03-06 11:29:07');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (2,1,1,'My Sample Post',NULL,'This is the excerpt for the sample Post','<p>This is the body for the sample post, which includes the body.</p>\r\n<h2>We can use all kinds of format!</h2>\r\n<p><img src=\"http://voyager.apoehali.com.ua/storage/posts/January2019/w-353313-unsplash.jpg\" alt=\"\" width=\"525\" height=\"394\" /></p>\r\n<p>And include a bunch of other stuff.</p>','posts/post2.jpg','my-sample-post','Meta Description for sample post','keyword1, keyword2, keyword3','PUBLISHED',0,'2019-01-16 13:33:42','2019-01-28 06:30:27'),(3,0,NULL,'Latest Post',NULL,'This is the excerpt for the latest post','<p>This is the body for the latest post</p>','posts/post3.jpg','latest-post','This is the meta description','keyword1, keyword2, keyword3','PUBLISHED',0,'2019-01-16 13:33:42','2019-01-16 13:33:42'),(4,0,NULL,'Yarr Post',NULL,'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.','<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>','posts/post4.jpg','yarr-post','this be a meta descript','keyword1, keyword2, keyword3','PUBLISHED',0,'2019-01-16 13:33:42','2019-01-16 13:33:42');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (1,'Kiev','Firstname','Lastname',NULL,'012345','Customer addess','2019-02-09 07:01:58','2019-02-09 07:01:58',0,NULL,NULL),(2,NULL,NULL,NULL,NULL,NULL,NULL,'2019-02-13 18:07:40',NULL,0,NULL,NULL),(3,NULL,NULL,NULL,NULL,NULL,NULL,'2019-02-13 18:14:19',NULL,0,NULL,NULL),(4,NULL,NULL,NULL,NULL,NULL,NULL,'2019-02-13 18:18:15',NULL,0,NULL,NULL),(5,NULL,NULL,NULL,NULL,NULL,NULL,'2019-02-13 18:23:25',NULL,0,NULL,NULL),(6,NULL,NULL,NULL,NULL,NULL,NULL,'2019-02-13 18:26:25',NULL,0,NULL,NULL),(7,NULL,NULL,NULL,NULL,NULL,NULL,'2019-02-13 18:29:31',NULL,0,NULL,NULL),(8,NULL,NULL,NULL,NULL,NULL,NULL,'2019-02-13 18:42:05',NULL,0,NULL,NULL),(9,NULL,NULL,NULL,NULL,NULL,NULL,'2019-02-13 19:06:40',NULL,0,NULL,NULL),(10,NULL,NULL,NULL,NULL,NULL,NULL,'2019-02-13 19:14:51',NULL,0,NULL,NULL),(11,NULL,NULL,NULL,NULL,NULL,NULL,'2019-02-13 19:18:35',NULL,0,NULL,NULL),(12,NULL,NULL,NULL,NULL,NULL,NULL,'2019-02-13 19:29:01',NULL,0,NULL,NULL),(17,NULL,NULL,NULL,NULL,NULL,NULL,'2019-02-13 19:53:08',NULL,0,NULL,NULL),(18,NULL,NULL,NULL,NULL,NULL,NULL,'2019-02-14 10:01:12',NULL,11,NULL,NULL),(19,NULL,NULL,NULL,NULL,NULL,NULL,'2019-02-14 10:07:56',NULL,12,NULL,NULL),(20,'Wachington','John','Wilson',NULL,'012345','Wachington, Wall Street 1','2019-03-14 16:13:42','2019-03-14 14:13:42',1,'bob@example.com','1552580022.jpg'),(21,'Kiev','Firstname','Lastname',NULL,'012345678','Kiev, Viborska 1','2019-02-15 18:12:58','2019-02-15 16:12:58',13,NULL,NULL),(22,'Kiev','First Name','Last Name',NULL,'0123456789','Street name 1','2019-02-19 10:24:57','2019-02-19 08:24:57',15,NULL,'1550571897.jpg'),(23,NULL,NULL,NULL,NULL,NULL,NULL,'2019-04-09 13:21:27',NULL,25,NULL,NULL),(24,NULL,NULL,NULL,NULL,NULL,NULL,'2019-04-09 13:24:28',NULL,26,NULL,NULL);
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2019-01-16 13:33:35','2019-01-16 13:33:35'),(2,'user','Normal User','2019-01-16 13:33:35','2019-01-16 13:33:35'),(3,'User role 1','User role 1','2019-01-17 13:08:46','2019-01-17 13:08:46'),(4,'User role 2','User role 2','2019-01-17 13:09:16','2019-01-17 13:09:16'),(5,'User role 3','User role 3','2019-01-17 13:10:04','2019-01-17 13:10:04');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Трансфер из аэропорта','[\"services\\/January2019\\/djuqV25PHEGxYCrK7T68.jpg\",\"services\\/January2019\\/mHHZjrOyHRXXSPNBtcmx.jpg\",\"services\\/January2019\\/VuBg372o3j3D6AP0Lk4c.jpg\"]','<p>AutoPride - это сервис по бронированию трансферов и аренды автомобилей с водителем по самым выгодным ценам. Заказать трансфер на нашем сайте выгоднее, чем вызвать такси или обращаться в транспортные компании.</p>\r\n<p>Вы хотите взять машину в аренду? Цены на почасовую аренду автомобиля с водителем ниже чем в других компаниях. Цены на почасовую аренду автомобиля с водителем ниже чем в других компаниях.</p>','2019-02-06 11:17:28','2019-02-06 09:17:28','transfer-iz-aeroporta','services/January2019/HS8OIEYNfAA7wtyDRc5W.png','ACTIVE',NULL),(2,'Туристические экскурсии','[\"services\\/January2019\\/MJWPyQSXzCE4gfrBjpvY.jpg\",\"services\\/January2019\\/lvD0ej57uEhjEpyYAyTW.png\",\"services\\/January2019\\/xHczRGGjWr9MXoLDa3d7.png\",\"services\\/January2019\\/Wz3psphvBVsJTI3nsYcF.png\",\"services\\/January2019\\/MfLWBzk6l0urzlbUTyGh.jpg\",\"services\\/January2019\\/TdVJJvff79SFAtT8l02j.jpg\"]','<p>AutoPride - это сервис по бронированию трансферов и аренды автомобилей с водителем по самым выгодным ценам. Заказать трансфер на нашем сайте выгоднее, чем вызвать такси или обращаться в транспортные компании.<br /><br />Вы хотите взять машину в аренду? Цены на почасовую аренду автомобиля с водителем ниже чем в других компаниях. Цены на почасовую аренду автомобиля с водителем ниже чем в других компаниях.</p>','2019-01-25 12:33:00','2019-02-06 09:32:56','turisticheskie-ekskursii','services/January2019/vWtM2nGO6mha3Czs7u6p.png','ACTIVE',NULL),(3,'Личный водитель','[\"services\\/January2019\\/KLH5N0Ef1EETi52M8fAn.jpg\",\"services\\/January2019\\/iqI7i9JcCy9PRlgyNOBF.jpg\",\"services\\/January2019\\/nXRV71HhCGAPDfFMSFNf.jpg\"]','<p>AutoPride - это сервис по бронированию трансферов и аренды автомобилей с водителем по самым выгодным ценам. Заказать трансфер на нашем сайте выгоднее, чем вызвать такси или обращаться в транспортные компании.<br /><br />Вы хотите взять машину в аренду? Цены на почасовую аренду автомобиля с водителем ниже чем в других компаниях. Цены на почасовую аренду автомобиля с водителем ниже чем в других компаниях.</p>','2019-01-21 09:54:00','2019-01-25 10:32:55','lichnyj-voditel','services/January2019/LfmfgWgtmCiJftCr9gsl.png','INACTIVE',NULL),(4,'Трансферы в Праге','[\"services\\/January2019\\/DnowoYvNuhHP59D5E5xt.png\",\"services\\/January2019\\/yCqchURCn2kYFmtXIptb.png\",\"services\\/January2019\\/JqvinhtHPGKqzK8GxMk0.jpg\",\"services\\/January2019\\/LKuVl16wPEBdveYIIXY4.jpg\"]','<p>AutoPride - это сервис по бронированию трансферов и аренды автомобилей с водителем по самым выгодным ценам. Заказать трансфер на нашем сайте выгоднее, чем вызвать такси или обращаться в транспортные компании.<br /><br />Вы хотите взять машину в аренду? Цены на почасовую аренду автомобиля с водителем ниже чем в других компаниях. Цены на почасовую аренду автомобиля с водителем ниже чем в других компаниях.</p>','2019-01-21 09:54:00','2019-01-25 10:32:19','transfery-v-prage','services/January2019/ve0BHAf6mYjCna8Rc214.png','INACTIVE',NULL),(5,'Поездки по Чехии','[\"services\\/January2019\\/WYy9dI5V7bLcy6iZPxhs.png\",\"services\\/January2019\\/o5NWm0aIiLkBXhkbluL0.png\",\"services\\/January2019\\/4N9BDFq11sGk527hYOPj.png\",\"services\\/January2019\\/6TnjWpMEtk6kOlNGjIkR.png\",\"services\\/January2019\\/QBN2Vp07bgLsbetk2enn.jpg\",\"services\\/January2019\\/svcOluhSFM97OYeqOlvE.jpg\"]','<p>AutoPride - это сервис по бронированию трансферов и аренды автомобилей с водителем по самым выгодным ценам. Заказать трансфер на нашем сайте выгоднее, чем вызвать такси или обращаться в транспортные компании.<br /><br />Вы хотите взять машину в аренду? Цены на почасовую аренду автомобиля с водителем ниже чем в других компаниях. Цены на почасовую аренду автомобиля с водителем ниже чем в других компаниях.</p>','2019-02-06 11:33:00','2019-02-06 09:54:31','poezdki-po-chehii','services/January2019/RU6NRvRP1b95Lsj5pm8a.png','ACTIVE',1),(6,'Поездки по Европе','[\"services\\/January2019\\/9bZg1Vzjr61iUM5ZUOtj.jpg\",\"services\\/January2019\\/6iCJFqksMmPb8bjHks7A.jpg\",\"services\\/January2019\\/RZWLwdP1LB1kp8tjbsjR.jpg\"]','<p>AutoPride - это сервис по бронированию трансферов и аренды автомобилей с водителем по самым выгодным ценам. Заказать трансфер на нашем сайте выгоднее, чем вызвать такси или обращаться в транспортные компании.<br /><br />Вы хотите взять машину в аренду? Цены на почасовую аренду автомобиля с водителем ниже чем в других компаниях. Цены на почасовую аренду автомобиля с водителем ниже чем в других компаниях.</p>','2019-01-21 09:55:00','2019-01-29 07:24:44','poezdki-po-evrope','services/January2019/Hb7pBssl1QT4yXESWCi0.png','INACTIVE',NULL);
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `services_orders` WRITE;
/*!40000 ALTER TABLE `services_orders` DISABLE KEYS */;
INSERT INTO `services_orders` VALUES (1,1,95707,'Трансфер из аэропорта','http://voyager.apoehali.com.ua/services/order-service/1','Test Customer Name','123@test.com','1234567','Пункт назначения','Пункт отправления','2018-09-01','9:00','Примечание','Škoda Fabia Kombi 1,0 STYLE NEW',2,5,'2019-02-08 10:25:21',NULL,NULL,'On-Hold'),(2,1,95707,'Трансфер из аэропорта','http://voyager.apoehali.com.ua/services/order-service/1','Test Customer Name','123@test.com','1234567','Пункт назначения','Пункт отправления','2018-09-01','9:00','Примечание','Škoda Fabia Kombi 1,0 STYLE NEW',2,5,'2019-02-08 10:29:10',NULL,NULL,'On-Hold'),(3,5,68835,'Поездки по Чехии','http://voyager.apoehali.com.ua/services/order-service/5','Test name','test@example.com','012345','Пункт назначения','Пункт отправления','12.10.18','9:00','12345','Škoda Fabia Kombi 1,0 TSI STYLE NEW AUTOMAT',1,1,'2019-02-10 09:10:35',NULL,NULL,'On-Hold'),(4,1,32185,'Трансфер из аэропорта','http://voyager.localhost/services/order-service/1','Имя и фамилия','test@example.com','012345','Пункт назначения','Пункт отправления','01.10.2000','9:00','test','Škoda Fabia Kombi 1,0 TSI STYLE NEW AUTOMAT',1,1,'2019-02-15 17:48:53',NULL,13,'On-Hold'),(5,2,92988,'Туристические экскурсии','http://voyager.localhost/services/order-service/2','Имя и фамилия','mail@mail.com','012345','Пункт назначения','Пункт отправления','01.10.2000','9:00','123','Škoda Fabia Kombi 1,0 STYLE NEW',2,8,'2019-02-15 19:09:43',NULL,13,'On-Hold'),(6,1,30791,'Трансфер из аэропорта','http://voyager.localhost/services/order-service/1','Имя и фамилия','mail@mail.com','012345','Пункт назначения','Пункт отправления','10.10.2019','9:00','Примечание:','Škoda Fabia Kombi 1,0 TSI STYLE NEW AUTOMAT',1,1,'2019-02-17 14:34:44',NULL,15,'On-Hold'),(7,5,46517,'Поездки по Чехии','http://voyager.apoehali.com.ua/services/order-service/5','Test customer name','test@test.com','012345','Пункт назначения','Пункт отправления','10.10.2019','9:00','Comment content','Škoda Fabia Kombi 1,0 STYLE NEW',2,4,'2019-02-18 10:17:05',NULL,15,'On-Hold'),(8,2,23727,'Туристические экскурсии','http://voyager.apoehali.com.ua/services/order-service/2','Test customer name','test@test.com','012345','Пункт назначения','Пункт отправления','2019-11-10','10:10','content','Škoda Fabia Kombi 1,0 STYLE NEW',2,8,'2019-02-18 10:24:00','2019-02-18 10:50:10',15,'Cancelled'),(9,2,23727,'Туристические экскурсии','http://voyager.apoehali.com.ua/services/order-service/2','Test customer name','test@test.com','012345','Пункт назначения','Пункт отправления','10.11.2019','9:00','content','Škoda Fabia Kombi 1,0 STYLE NEW',2,8,'2019-02-18 10:34:59',NULL,15,'On-Hold'),(10,2,23727,'Туристические экскурсии','http://voyager.apoehali.com.ua/services/order-service/2','Test customer name','test@test.com','012345','Пункт назначения','Пункт отправления','2019-11-10','10:10','content','Škoda Fabia Kombi 1,0 STYLE NEW',2,8,'2019-02-18 10:35:00','2019-02-18 10:49:50',15,'Completed'),(11,2,12545,'Туристические экскурсии','http://voyager.apoehali.com.ua/services/order-service/2','Test customer name','test@test.com','012345','Пункт назначения','Пункт отправления','2019-11-10','12:12','content','Škoda Fabia Kombi 1,0 STYLE NEW',2,8,'2019-02-18 10:35:00','2019-02-18 10:49:28',15,'Processing'),(12,2,66391,'Туристические экскурсии','http://voyager.apoehali.com.ua/services/order-service/2','Customer name','test@example.com','12345','Пункт назначения','Пункт отправления','10.10.2019','9:00','test','Škoda Fabia Kombi 1,0 TSI STYLE NEW AUTOMAT',1,1,'2019-02-26 19:40:07',NULL,1,'On-Hold');
/*!40000 ALTER TABLE `services_orders` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.title','Site Title','Site Title','','text',1,'Site'),(2,'site.description','Site Description','Site Description','','text',2,'Site'),(3,'site.logo','Site Logo','','','image',3,'Site'),(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID',NULL,'','text',4,'Site'),(5,'admin.bg_image','Admin Background Image','','','image',5,'Admin'),(6,'admin.title','Admin Title','Voyager','','text',1,'Admin'),(7,'admin.description','Admin Description','Welcome to Voyager. The Missing Admin for Laravel','','text',2,'Admin'),(9,'admin.icon_image','Admin Icon Image','','','image',4,'Admin'),(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)',NULL,'','text',1,'Admin');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (1,'AutoPride - это сервис по бронированию трансферов и аренды автомобилей с водителем по самым выгодным ценам. Заказать трансфер на нашем сайте выгоднее, чем вызвать такси или обращаться в транспортные компании.','Елена','Степановна','2019-01-25 13:08:56','2019-01-25 11:08:56','test@example.com',NULL,NULL,'transfer-iz-aeroporta','enable'),(12,'123','123','123','2019-01-25 12:33:00','2019-01-25 10:35:27','123@test.com',4,NULL,'turisticheskie-ekskursii','enable'),(15,'123','qwe','qwerty','2019-01-28 08:23:03',NULL,'swqwewqe@wqw.com',4,NULL,'transfer-iz-aeroporta','disable'),(16,'123','First Name','Last Name','2019-02-04 10:26:59',NULL,'mail@mail.com',5,NULL,'reviews','disable'),(17,'dasda','Звезды','ГДЕ?','2019-03-26 11:01:02',NULL,'gdezvezdy@gmail.com',5,NULL,'reviews','disable'),(18,'adad','Звезды','ГДЕ?','2019-03-26 11:01:13',NULL,'gdezvezddy@gmail.com',0,NULL,'reviews','disable');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `transfer_orders` WRITE;
/*!40000 ALTER TABLE `transfer_orders` DISABLE KEYS */;
INSERT INTO `transfer_orders` VALUES (1,'http://voyager.apoehali.com.ua',1,'Прага аеропорт','Прага адресс','26/02/2019','27/02/2019','','',1,2,4,5,'Иван','Иванов','test@example.com','12345','Комментарий',NULL,75026,'2019-02-26 18:29:44',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(2,'http://voyager.apoehali.com.ua',1,'Прага аеропорт','Прага аеропорт','27/02/2019','28/02/2019',NULL,NULL,1,2,3,0,'Customer name','Customer name','test@example.com','12345','test',1,12591,'2019-02-26 18:44:00','2019-02-26 19:19:20','Processing',NULL,'not paid',NULL,NULL),(3,'http://voyager.apoehali.com.ua',1,'Berlin, Streetname 1','Прага отель','02/03/2019','09/03/2019','','',1,12,12,12,'12','12','123@123.com','12345678','test',NULL,60823,'2019-02-28 08:37:51',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(4,'http://voyager.apoehali.com.ua',1,'Bratislava, Test 1','Berlin, Streetname 1','01/03/2019','02/03/2019',NULL,NULL,1,2,3,4,'Test customer name','Test customer lastname','test@test.com','12345','message',NULL,81252,'2019-02-28 09:50:00','2019-02-28 09:52:07','Completed',NULL,'not paid',NULL,NULL),(5,'http://voyager.apoehali.com.ua',1,'Прага аеропорт','Zličín bus station','01/03/2019','02/03/2019','','',1,2,3,4,'Test customer name','Test customer lastname','test@test.com','12345','test',1,67297,'2019-02-28 10:00:16',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(6,'http://voyager.apoehali.com.ua',3,'Прага аеропорт','Smíchovské nádraží / Smichov train station / Nádražní','01/03/2019','02/03/2019','','',1,2,3,4,'123','123','123@123.com','12345','12345',1,48085,'2019-02-28 10:04:42',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(7,'http://voyager.apoehali.com.ua',2,'Прага аеропорт','Smíchovské nádraží / Smichov train station / Nádražní','01/03/2019','02/03/2019','','',1,2,3,4,'123qwerty','123qwerty','123@123qwerty.com','12345','12345qwerty',1,36872,'2019-02-28 10:05:04',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(8,'http://voyager.apoehali.com.ua',3,'Прага аеропорт','Smíchovské nádraží / Smichov train station / Nádražní','01/03/2019','02/03/2019','','',1,2,3,4,'123qwertyTEST','123qwertyTEST','TEST123@123qwerty.com','12345','TEST12345qwerty',1,33526,'2019-02-28 10:06:09',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(9,'http://voyager.apoehali.com.ua',2,'Прага аеропорт','Smíchovské nádraží / Smichov train station / Nádražní','01/03/2019','02/03/2019','','',1,2,3,4,'123qwertyTEST','123qwertyTEST','TEST123@123qwerty.com','12345','TEST12345qwerty',1,35660,'2019-02-28 10:07:08',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(10,'http://voyager.apoehali.com.ua',2,'streetname 1','Smíchovské nádraží / Smichov train station / Nádražní','01/03/2019','02/03/2019','','',1,2,3,4,'123qwertyTEST','123qwertyTEST','TEST123@123qwerty.com','12345','TEST12345qwerty',1,34559,'2019-02-28 10:09:09',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(11,'http://voyager.apoehali.com.ua',2,'zxc','Прага аеропорт','01/03/2019','02/03/2019','','',1,0,0,0,'123','123','123@123','123','123',1,27367,'2019-02-28 10:14:49',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(12,'http://voyager.apoehali.com.ua',2,'zxc','Прага аеропорт','01/03/2019','02/03/2019','','',1,0,0,0,'Ivan','Ivanov','Ivan@123.com','123','123',1,13016,'2019-02-28 10:15:36',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(14,'http://voyager.apoehali.com.ua',2,'Прага аеропорт','Na Knížecí bus station','01/03/2019','02/03/2019','','',2,0,0,0,'12','12','12@12.com','12345','test',1,52891,'2019-02-28 11:21:18',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(15,'http://voyager.apoehali.com.ua',2,'Прага аеропорт','Прага аеропорт','01/03/2019','02/03/2019','','',1,0,0,0,'','','','','',1,64590,'2019-02-28 11:52:12',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(16,'http://voyager.apoehali.com.ua',1,'4 Arts Suites, Rybna 650/3','Holešovice vlakové nádraží / Holesovice train station / Partyzánská','02/03/2019','03/03/2019','','',1,2,3,4,'Test customer name','Test customer name','test@test.com','012345','message',NULL,87950,'2019-03-01 07:18:07',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(17,'http://voyager.apoehali.com.ua',1,'test','Прага аеропорт','02/03/2019','03/03/2019','','',1,0,0,0,'Test customer name','Test customer name','test@test.com','12345','test',1,24680,'2019-03-01 07:46:16',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(18,'http://voyager.apoehali.com.ua',2,'Hlavní nádraží / Main Train Station / Wilsonova 300/8','Smíchovské nádraží / Smichov train station / Nádražní','01/03/2019','02/03/2019','9:00','9:00',1,0,0,0,'Ivan','Test','test@test.com','12345','message',1,35937,'2019-03-01 08:06:34',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(19,'http://voyager.apoehali.com.ua',2,'Прага аеропорт','Прага аеропорт','01/03/2019','02/03/2019','10:00','12:00',1,2,3,4,'123','123','123@123.com','123','test',1,29258,'2019-03-01 08:09:33',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(20,'http://voyager.apoehali.com.ua',1,'Прага аеропорт','Černý Most bus station','02/03/2019','02/03/2019','9:00','9:00',1,0,0,0,'Ivan','Ivanov','goodrobin50@gmail.com','012345','test',1,16080,'2019-03-01 08:53:54',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(21,'http://voyager.apoehali.com.ua',1,'Прага аеропорт','Černý Most bus station','02/03/2019','02/03/2019','9:00','9:00',1,0,0,0,'Ivan','Ivanov','goodrobin50@gmail.com','012345','testeet',1,67516,'2019-03-01 09:00:40',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(22,'http://voyager.apoehali.com.ua',1,'Прага аеропорт','Černý Most bus station','02/03/2019','02/03/2019','9:00','9:00',1,0,0,0,'Ivan','Ivanov','goodrobin50@gmail.com','012345','testeet',1,12007,'2019-03-01 09:05:18',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(23,'http://voyager.apoehali.com.ua',1,'Прага аеропорт','Černý Most bus station','02/03/2019','02/03/2019','9:00','9:00',1,0,0,0,'Ivan','Ivanov','goodrobin50@gmail.com','012345','testeet',1,96095,'2019-03-01 09:06:00',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(24,'http://voyager.apoehali.com.ua',1,'Прага аеропорт','Černý Most bus station','02/03/2019','02/03/2019','9:00','9:00',1,0,0,0,'Ivan','Ivanov','goodrobin50@gmail.com','012345','testeet sdadsad',1,48820,'2019-03-01 09:10:50',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(25,'http://voyager.apoehali.com.ua',1,'Прага аеропорт','Černý Most bus station','02/03/2019','02/03/2019','9:00','9:00',1,0,0,0,'Ivan','Ivanov','goodrobin50@gmail.com','012345','testeet sdadsad',1,80822,'2019-03-01 09:12:05',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(26,'http://voyager.apoehali.com.ua',1,'Прага аеропорт','Černý Most bus station','02/03/2019','02/03/2019','9:00','9:00',1,0,0,0,'Ivan','Ivanov','goodrobin50@gmail.com','012345','testeet sdadsad',1,75677,'2019-03-01 09:13:06',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(27,'http://voyager.apoehali.com.ua',1,'Прага аеропорт','Černý Most bus station','02/03/2019','02/03/2019','9:00','9:00',1,0,0,0,'Ivan','Ivanov','goodrobin50@gmail.com','012345','testeet sdadsad ewqerewr',1,43956,'2019-03-01 09:16:15',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(28,'http://voyager.apoehali.com.ua',1,'Прага аеропорт','Černý Most bus station','02/03/2019','02/03/2019','9:00','9:00',1,0,0,0,'Ivan','Ivanov','goodrobin50@gmail.com','012345','testeet sdadsad ewqerewr',1,24134,'2019-03-01 09:17:13',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(29,'http://voyager.apoehali.com.ua',1,'Прага аеропорт','Černý Most bus station','02/03/2019','02/03/2019','9:00','9:00',1,0,0,0,'Ivan','Ivanov','goodrobin50@gmail.com','012345','testeet sdadsad ewqerewr',1,86318,'2019-03-01 09:18:52',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(30,'http://voyager.apoehali.com.ua',1,'Прага аеропорт','Černý Most bus station','02/03/2019','02/03/2019','9:00','9:00',1,0,0,0,'Ivan','Ivanov','goodrobin50@gmail.com','012345','testeet sdadsad ewqerewr',1,73802,'2019-03-01 09:27:30',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(31,'http://voyager.apoehali.com.ua',1,'Прага аеропорт','Černý Most bus station','02/03/2019','02/03/2019','9:00','9:00',1,0,0,0,'Ivan','Ivanov','goodrobin50@gmail.com','012345','testeet sdadsad ewqerewr',1,28638,'2019-03-01 09:40:11',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(32,'http://voyager.apoehali.com.ua',1,'Прага аеропорт','Černý Most bus station','02/03/2019','02/03/2019','9:00','9:00',1,0,0,0,'Ivan','Ivanov','goodrobin50@gmail.com','012345','testeet sdadsad ewqerewr',1,43329,'2019-03-01 09:44:24',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(33,'http://voyager.apoehali.com.ua',1,'Прага аеропорт','Černý Most bus station','02/03/2019','02/03/2019','9:00','9:00',1,0,0,0,'Ivan','Ivanov','goodrobin50@gmail.com','012345','testeet sdadsad ewqerewr addasd',1,49107,'2019-03-01 09:45:22',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(34,'http://voyager.apoehali.com.ua',2,'Прага аеропорт','Černý Most bus station','02/03/2019','02/03/2019','9:00','9:00',1,0,0,0,'Petro','Petrov','goodrobin50@gmail.com','012345','testeet sdadsad ewqerewr addasd',1,53232,'2019-03-01 09:46:17',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(35,'http://voyager.apoehali.com.ua',1,'Прага аеропорт','Прага аеропорт','01/03/2019','02/03/2019','9:00','9:00',1,0,0,0,'Ivan','Ivanov','goodrobin50@gmail.com','12345','test',1,12227,'2019-03-01 10:19:42',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(36,'http://voyager.apoehali.com.ua',1,'4 Arts Suites, Rybna 650/3','Černý Most bus station','01/03/2019','02/03/2019','10:00','11:00',1,2,3,4,'Ivan','Ivanov','goodrobin50@gmail.com','12345','test',1,72287,'2019-03-01 12:03:25',NULL,'On-Hold',NULL,'not paid',NULL,NULL),(37,'http://voyager.apoehali.com.ua',2,'Прага аеропорт','Прага аеропорт','01/03/2019','02/03/2019','9:00','9:00',1,0,0,0,'Ivan','Ivanov','goodrobin50@gmail.com','12345','test',1,34783,'2019-03-07 15:54:17','2019-03-07 13:54:17','On-Hold','ba519d34ccb0e59a8108a36704b82c9f3cae413c7a67fc74','not paid','',NULL),(38,'http://voyager.apoehali.com.ua',3,'test address','Прага аеропорт','02/03/2019','03/03/2019','9:00','9:00',1,0,0,0,'test','test','goodrobin50@gmail.com','123','123',1,54134,'2019-03-01 00:10:44',NULL,'On-Hold','b63f6ce4a5627761b9fb5564cf106c93701993e013e2849c','not paid',NULL,NULL),(39,'http://voyager.apoehali.com.ua',1,'Выбрать...','Прага аеропорт','15/03/2019','','9:00','9:00',1,0,0,0,'Customer name','Customer lastname','goodrobin58@gmail.com','12345','test',NULL,90237,'2019-03-03 23:48:49',NULL,'On-Hold','06c78775346432ca40f645b211f5262d8bc1253138696f5e','not paid',NULL,NULL),(40,'http://voyager.apoehali.com.ua',3,'1Bed4U 2Hostel,Lublanska 800/65','Прага аеропорт','05/03/2019','06/03/2019','9:00','9:00',1,2,3,4,'Ivan','Ivanov','test@example.com','12345','test',NULL,73458,'2019-03-05 08:53:31',NULL,'On-Hold','dc53aad231f62c5c5b7b108b3cff8e7e161a51e655377e83','not paid',NULL,NULL),(41,'http://voyager.apoehali.com.ua',3,'1Bed4U 2Hostel,Lublanska 800/65','Прага аеропорт','05/03/2019','06/03/2019','9:00','9:00',1,2,3,4,'Ivan','Ivanov','goodrobin58@gmail.com','12345','test',NULL,12186,'2019-03-05 08:55:00','2019-03-05 09:14:57','On-Hold','dad34bd107a9360927a4537b72d54105217ea27399092f0f','paid',NULL,NULL),(42,'http://voyager.apoehali.com.ua',1,'Выбрать...','Прага аеропорт','15/03/2019','16/03/2019','9:00','9:00',1,2,3,4,'','','','','',1,24605,'2019-03-14 04:58:43',NULL,'On-Hold','198014f3d13faaf4d0743adb66de2b998734f57b2e00dd84','not paid',NULL,NULL),(43,'http://voyager.apoehali.com.ua',3,'123','Прага аеропорт','18/03/2019','22/03/2019','9:00','9:00',1,0,0,0,'Customer firstname','Customer lastname','test@example.com','012345','123',1,49980,'2019-03-17 23:50:15',NULL,'On-Hold','9a5ba112059b91b4b6370ce0403a2f421b7e69e19bdb6471','not paid',NULL,4002323),(44,'http://voyager.apoehali.com.ua',3,'Amigo City Centre Hotel, Legerova 13','Litomysl,','20/03/2019','23/03/2019','9:00','9:00',1,0,0,0,'Customer name','Customer name','mail@mail.com','12345','123',1,95756,'2019-03-17 23:54:19',NULL,'On-Hold','72a30da543b4a2798cd440246476cbc2dbac7c36aba3d349','not paid',NULL,300),(45,'http://voyager.apoehali.com.ua',3,'123','Прага аеропорт','20/03/2019','31/03/2019','9:00','9:00',1,0,0,0,'Customer firstname','Customer lastname','test@example.com','012345','123',1,55022,'2019-03-18 00:54:19',NULL,'On-Hold','9d10cb549a3655cc73d3276c2c5427819a0feb7090485d6d','not paid',NULL,1100),(46,'http://voyager.apoehali.com.ua',3,'Hlavní nádraží / Main Train Station / Wilsonova 300/8','Прага аеропорт','20/03/2019','24/03/2019','9:00','9:00',1,0,0,0,'Customer firstname','Customer lastname','goodrobin58@gmail.com','012345','123',1,48721,'2019-03-18 20:07:38','2019-03-18 18:07:38','On-Hold','ef87d612bdfcd42e89f012d4d2a06b89cd601b01078c5bef','not paid','',400),(47,'http://voyager.apoehali.com.ua',2,'Прага аеропорт','hotel hilton','28/03/2019','31/03/2019','9:00','10:00',3,4,0,0,'вфвы','афа','pridevtv@email.cz','+420704164472','Please be in time.',NULL,70246,'2019-03-26 09:14:48',NULL,'On-Hold','2d5b55e17d078e8560c03dca18894d5092791877c4d7b071','not paid',NULL,300),(48,'http://voyager.apoehali.com.ua',3,'Выбрать...','Прага аеропорт','08/05/2019','17/05/2019','08:45','09:30',1,2,3,4,'','','','','',1,98290,'2019-04-03 04:37:55',NULL,'On-Hold','760137dbc923b8023e6ff1849b3ac2dafacbca6503286e88','not paid',NULL,900),(49,'http://voyager.apoehali.com.ua',3,'test streetname','desctination address','05/04/2019','18/04/2019','08:45','13:45',1,0,0,0,'John','Doe','goodrobin50@gmail.com','12345','test',NULL,16204,'2019-04-04 15:17:37','2019-04-04 12:17:37','On-Hold','c4a29b952144db2283b17befce4172268753acdfbcc579c9','not paid','cash_to_driver',1300),(50,'http://voyager.apoehali.com.ua',3,'Прага аеропорт','Bratislava, Streetname 1','12/04/2019','20/04/2019','13:45','21:00',1,2,3,4,'John','Doe','goodrobin50@gmail.com','12345','test',1,81668,'2019-04-04 15:27:05','2019-04-04 12:27:05','On-Hold','af585f9b06b59ee578849adfcd6824fd85f9e7078c2135fe','not paid','cash_to_driver',800),(51,'http://voyager.apoehali.com.ua/order-transfer',1,'selected-2','1','08/04/2019','12/04/2019','08:00','08:00',1,2,3,4,'Ivan','Ivanov','goodrobin50@gmail.com','12345','test message',NULL,76666,'2019-04-08 06:48:54','2019-04-08 03:48:54','On-Hold','d5f37f7e8e4b50829e267c70cfd5f42a9364b073dedd9500','not paid','cash_to_driver',400),(52,'http://voyager.apoehali.com.ua',3,'Прага аеропорт','Прага аеропорт','08/04/2019','10/04/2019','8:00','8:00',1,0,0,0,'Doe','John','goodrobin50@gmail.com','12345','123',NULL,19469,'2019-04-08 04:19:59',NULL,'On-Hold','5df3d0124fd7df289a5ae2b2001a65d8501e9c294072509a','not paid',NULL,200),(53,'http://voyager.apoehali.com.ua/order-transfer',2,'selected-2','1','08/04/2019','11/04/2019','08:00','16:30',1,0,0,0,'Ivan','Ivanov','goodrobin50@gmail.com','12345','order transfer test',NULL,77055,'2019-04-08 06:13:15',NULL,'On-Hold','4cd46dc10a83902d1b5af40e4d2f5dbface4e26626bf580e','not paid',NULL,400),(54,'http://voyager.apoehali.com.ua/order-transfer',1,'selected-2','1','08/04/2019','10/04/2019','08:00','08:00',1,0,0,0,'Ivan','Ivanov','goodrobin50@gmail.com','12345','12345',1,90588,'2019-04-07 22:48:55',NULL,'On-Hold','7bb34ab6309509469fdcc4913e206d022de37383c40a6951','not paid',NULL,200),(55,'http://voyager.apoehali.com.ua/order-transfer',1,'1','1','08/04/2019','15/04/2019','08:00','08:00',1,0,0,0,'Ivan','Ivanov','goodrobin50@gmail.com','12345','test',1,85634,'2019-04-07 23:02:41',NULL,'On-Hold','490c45e66b4832f684ab7eefefdd0b1ca38429c91e1a2fc5','not paid',NULL,700);
/*!40000 ALTER TABLE `transfer_orders` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
INSERT INTO `translations` VALUES (1,'data_types','display_name_singular',5,'pt','Post','2019-01-16 13:33:43','2019-01-16 13:33:43'),(2,'data_types','display_name_singular',6,'pt','Página','2019-01-16 13:33:43','2019-01-16 13:33:43'),(3,'data_types','display_name_singular',1,'pt','Utilizador','2019-01-16 13:33:43','2019-01-16 13:33:43'),(4,'data_types','display_name_singular',4,'pt','Categoria','2019-01-16 13:33:43','2019-01-16 13:33:43'),(5,'data_types','display_name_singular',2,'pt','Menu','2019-01-16 13:33:43','2019-01-16 13:33:43'),(6,'data_types','display_name_singular',3,'pt','Função','2019-01-16 13:33:43','2019-01-16 13:33:43'),(7,'data_types','display_name_plural',5,'pt','Posts','2019-01-16 13:33:43','2019-01-16 13:33:43'),(8,'data_types','display_name_plural',6,'pt','Páginas','2019-01-16 13:33:43','2019-01-16 13:33:43'),(9,'data_types','display_name_plural',1,'pt','Utilizadores','2019-01-16 13:33:43','2019-01-16 13:33:43'),(10,'data_types','display_name_plural',4,'pt','Categorias','2019-01-16 13:33:43','2019-01-16 13:33:43'),(11,'data_types','display_name_plural',2,'pt','Menus','2019-01-16 13:33:43','2019-01-16 13:33:43'),(12,'data_types','display_name_plural',3,'pt','Funções','2019-01-16 13:33:43','2019-01-16 13:33:43'),(13,'categories','slug',1,'pt','categoria-1','2019-01-16 13:33:43','2019-01-16 13:33:43'),(14,'categories','name',1,'pt','Categoria 1','2019-01-16 13:33:43','2019-01-16 13:33:43'),(15,'categories','slug',2,'pt','categoria-2','2019-01-16 13:33:43','2019-01-16 13:33:43'),(16,'categories','name',2,'pt','Categoria 2','2019-01-16 13:33:44','2019-01-16 13:33:44'),(17,'pages','title',1,'pt','Olá Mundo','2019-01-16 13:33:44','2019-01-16 13:33:44'),(18,'pages','slug',1,'pt','ola-mundo','2019-01-16 13:33:44','2019-01-16 13:33:44'),(19,'pages','body',1,'pt','<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>','2019-01-16 13:33:44','2019-01-16 13:33:44'),(20,'menu_items','title',1,'pt','Painel de Controle','2019-01-16 13:33:44','2019-01-16 13:33:44'),(21,'menu_items','title',2,'pt','Media','2019-01-16 13:33:44','2019-01-16 13:33:44'),(22,'menu_items','title',12,'pt','Publicações','2019-01-16 13:33:44','2019-01-16 13:33:44'),(23,'menu_items','title',3,'pt','Utilizadores','2019-01-16 13:33:44','2019-01-16 13:33:44'),(24,'menu_items','title',11,'pt','Categorias','2019-01-16 13:33:44','2019-01-16 13:33:44'),(25,'menu_items','title',13,'pt','Páginas','2019-01-16 13:33:44','2019-01-16 13:33:44'),(26,'menu_items','title',4,'pt','Funções','2019-01-16 13:33:44','2019-01-16 13:33:44'),(27,'menu_items','title',5,'pt','Ferramentas','2019-01-16 13:33:44','2019-01-16 13:33:44'),(28,'menu_items','title',6,'pt','Menus','2019-01-16 13:33:44','2019-01-16 13:33:44'),(29,'menu_items','title',7,'pt','Base de dados','2019-01-16 13:33:44','2019-01-16 13:33:44'),(30,'menu_items','title',10,'pt','Configurações','2019-01-16 13:33:44','2019-01-16 13:33:44');
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Admin','admin@example.com','users/default.png',NULL,'$2y$10$cd/Q/L7dzO6UQ1g2yjyqjuiFojHncwPw2f.5ut9yTd1M5ztUO9nba','KsFxnM8LWzTOOapn8YMOOqxeex7Oc0dDZaqCzJsPoTei2nogrI4ZSQ1lHqgC','{\"locale\":\"en\"}','2019-01-16 13:33:42','2019-02-26 14:36:00',20,NULL),(4,3,'Test User 1','test123@test.com','users/January2019/CUqdr9VSMDMqEuDTz4SC.png',NULL,'$2y$10$pMBcm21bDza.fBgSScSw7.I1XF6A28CYiERFJ7bVbPC5qV.gJMjjS',NULL,'{\"locale\":\"en\"}','2019-01-17 13:13:32','2019-01-17 13:13:32',NULL,NULL),(6,4,'Test User 2','test2@test.com','users/January2019/DNml0Kcm3XQ1C6LZTNJj.png',NULL,'$2y$10$y6YloBFEHMVbHuA/ysXB3eSu8SRp9tjmjQkgxfHS9sh9X9akCJxJ.',NULL,'{\"locale\":\"en\"}','2019-01-17 13:14:36','2019-01-17 13:14:36',NULL,NULL),(7,5,'Test User 3','test3@example.com','users/January2019/a3KiCAplUH3uk1NAnb4U.png',NULL,'$2y$10$1avQYu.KEhwckK.fmkGNfOfFynTVELAi5Vr2jvRMXHXK.7SgETkWm',NULL,'{\"locale\":\"en\"}','2019-01-17 13:15:22','2019-01-17 13:15:22',NULL,NULL),(8,2,'Username_test','username_test@test.com','users/default.png',NULL,'$2y$10$i58HZ1L4YuBwOvLW0Ui9F.SPiJIrlSGdgOO8X00IY89gbandXQkFC','HkteQIrMFyPZh0eTl28MbEuo5bheA7JBpSxM3jWa6cJhHDyghHTnta6FmoXd',NULL,'2019-02-14 08:30:55','2019-02-14 08:30:56',NULL,NULL),(15,1,'Username','test@test.com','users/default.png',NULL,'$2y$10$VCkf/Vcb3apr4EJQWwKU7O50JEL.u83mwPF2PgIxDVPXG8IgFIGq2','w4LHbbW38BMpMbLljcnsXKICEOTyRpF9J8NACdxoeBmYSqjBCX1icT8FCrRG',NULL,'2019-02-16 15:31:50','2019-02-18 11:42:46',22,NULL),(22,NULL,NULL,'goodrobin50@gmail.com','users/default.png',NULL,'$2y$10$qpr8AKh.46p68dE0YodGKu7q6D0dZwkgJR9H3nWO2Ay5GoeHEiTte',NULL,NULL,'2019-03-06 19:21:35',NULL,NULL,6),(23,NULL,NULL,'hello@gmail.com','users/default.png',NULL,'$2y$10$36is84cGOsZo8KYd4nY84.lnX6NOEsagjg/n1/vEFHdBURFGICdKS',NULL,NULL,'2019-03-22 13:22:29',NULL,NULL,7),(24,NULL,NULL,'pridevtv@email.cz','users/default.png',NULL,'$2y$10$Gl9i3CjLUqPCiqEL/V3SDO7gmhOyF4kkY3gjAMXzFBio4sXBIGFqu',NULL,NULL,'2019-03-26 09:32:22',NULL,NULL,8),(25,NULL,'Username001','goodrobin50123@gmail.com','users/default.png',NULL,'$2y$10$PdKb2wPiHbdscXflP11x9.t7Haxf.YYyYsPiyXHs16r8jpXShw50K',NULL,NULL,'2019-04-09 13:21:27',NULL,23,NULL),(26,NULL,'Username00123','goodrobin50qwerty@gmail.com','users/default.png',NULL,'$2y$10$juJTavlFkK5mqrjly4N.DOczG1YqUQgxAbVe7ZnKPfx9swDFz8Dde',NULL,NULL,'2019-04-09 13:24:28',NULL,24,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

