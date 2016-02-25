-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.9-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.2.0.4947
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- Dumping data for table canvera.album_images: ~15 rows (approximately)
DELETE FROM `album_images`;
/*!40000 ALTER TABLE `album_images` DISABLE KEYS */;
INSERT INTO `album_images` (`id`, `album_id`, `title`, `name_on_server`, `filename`, `is_active`) VALUES
	(34, 36, 'demo title', '56ceaa2dadcaa.jpg', 'fullimage1.jpg', 1),
	(35, 36, NULL, '56ceaa2db5be2.jpg', 'owl3.jpg', 1),
	(36, 36, 'Owl closeup', '56ceaa2dc385d.jpg', 'owl4.jpg', 1),
	(37, 37, NULL, '56cee27a2d306.jpg', 'owl1.jpg', 1),
	(38, 37, NULL, '56cee27a3527e.jpg', 'owl2.jpg', 1),
	(39, 37, NULL, '56cee27a5332b.jpg', 'owl3.jpg', 1),
	(40, 37, NULL, '56cee27a5d43f.jpg', 'owl4.jpg', 1),
	(41, 37, NULL, '56cee27a68be0.jpg', 'owl5.jpg', 1),
	(42, 38, NULL, '56cee2f6ee90a.jpg', 'fullimage1.jpg', 1),
	(43, 38, NULL, '56cee2f71d930.jpg', 'fullimage2.jpg', 1),
	(44, 38, NULL, '56cee2f72b57c.jpg', 'fullimage3.jpg', 1),
	(45, 39, NULL, '56cef1ecedc37.jpg', 'fullimage4.jpg', 1),
	(46, 39, NULL, '56cef1ed0763e.jpg', 'fullimage5.jpg', 1),
	(47, 39, NULL, '56cef1ed0f590.jpg', 'fullimage6.jpg', 1),
	(48, 39, NULL, '56cef1ed1d18f.jpg', 'owl2.jpg', 1);
/*!40000 ALTER TABLE `album_images` ENABLE KEYS */;

-- Dumping data for table canvera.categories: ~8 rows (approximately)
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `is_active`) VALUES
	(1, 'Wedding', 1),
	(2, 'Occassions', 1),
	(3, 'Baby & Kids', 1),
	(4, 'Nature & Wildlife', 1),
	(5, 'Fashion', 1),
	(6, 'Commercial', 1),
	(7, 'Corporate Events', 1),
	(8, 'Travel', 1);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping data for table canvera.category_map: ~8 rows (approximately)
DELETE FROM `category_map`;
/*!40000 ALTER TABLE `category_map` DISABLE KEYS */;
INSERT INTO `category_map` (`id`, `photographer_id`, `category_id`) VALUES
	(1, 5, 4),
	(2, 5, 3),
	(3, 5, 8),
	(4, 4, 1),
	(7, 4, 5),
	(8, 2, 7),
	(9, 3, 4),
	(11, 3, 6);
/*!40000 ALTER TABLE `category_map` ENABLE KEYS */;

-- Dumping data for table canvera.photographers: ~5 rows (approximately)
DELETE FROM `photographers`;
/*!40000 ALTER TABLE `photographers` DISABLE KEYS */;
INSERT INTO `photographers` (`id`, `name`, `email`, `password`, `cover`, `phone`, `address`, `city`, `state`, `pin`, `is_active`) VALUES
	(1, 'click Studio', 'sid@mail.in', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, 'kolkata', 'west bengal', NULL, 1),
	(2, 'sid studio', 'sid.studio@mail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, 'hyderabad', 'andhra pradesh', NULL, 1),
	(3, 'Creative Studio', 'creative@mail.com', '9b7c68a918b17eb053809b198d7c9abfc142f30a', NULL, NULL, NULL, 'Mumbai', 'Maharashtra', NULL, 1),
	(4, 'Fashionista Studio', 'fashionista@mail.com', 'ed421c35417f4de7c64a7ae212c0a721f6436e9b', NULL, NULL, NULL, 'Delhi', '', NULL, 1),
	(5, 'Flora Studio', 'flora@mail.com', '62dd97305921119d3a3dd1e70060cecb2b0da9a8', NULL, NULL, NULL, 'kolkata', 'west bengal', NULL, 1);
/*!40000 ALTER TABLE `photographers` ENABLE KEYS */;

-- Dumping data for table canvera.photographer_location: ~0 rows (approximately)
DELETE FROM `photographer_location`;
/*!40000 ALTER TABLE `photographer_location` DISABLE KEYS */;
/*!40000 ALTER TABLE `photographer_location` ENABLE KEYS */;

-- Dumping data for table canvera.photo_albums: ~4 rows (approximately)
DELETE FROM `photo_albums`;
/*!40000 ALTER TABLE `photo_albums` DISABLE KEYS */;
INSERT INTO `photo_albums` (`id`, `photographer_id`, `name`, `description`, `create_date`, `is_active`) VALUES
	(36, 1, 'hello world', 'This is test album', '2016-02-25 13:26:51', 1),
	(37, 1, 'owl carousel', 'Magnificent Owls', '2016-02-25 16:46:10', 1),
	(38, 5, 'demo album', 'this is a demo album', '2016-02-25 16:48:14', 1),
	(39, 5, 'first album', 'this is a album', '2016-02-25 17:52:04', 1);
/*!40000 ALTER TABLE `photo_albums` ENABLE KEYS */;

-- Dumping data for table canvera.user_orders: ~0 rows (approximately)
DELETE FROM `user_orders`;
/*!40000 ALTER TABLE `user_orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_orders` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
