-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.22 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for pospoint
CREATE DATABASE IF NOT EXISTS `pospoint` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `pospoint`;

-- Dumping structure for table pospoint.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `main_menu` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `menu1` varchar(250) DEFAULT NULL,
  `menu1_price` varchar(250) DEFAULT NULL,
  `menu2` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `menu2_price` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `price` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

-- Dumping data for table pospoint.products: 47 rows
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `main_menu`, `menu1`, `menu1_price`, `menu2`, `menu2_price`, `name`, `price`) VALUES
	(10, 'Wok', 'Wok 1', '12', 'Wok2', '12', 'asd', '12'),
	(4, 'Burger', 'Burger Food', '12.12', 'Family Menu', '12.11', 'xcv', '34'),
	(11, 'Wok', 'Wok1 Beef', '12', 'Wok2 Beef', '11.34', 'qwer', '15'),
	(6, 'Burger', 'Burger Beef', '12', 'Fish Burger', '11.1', 'zxc', '8'),
	(7, 'Burger', 'Burger King ', '11.23', 'Egg Burger', '12.23', 'fgh', '9'),
	(13, 'Fries', 'qqqq', '123', NULL, NULL, NULL, NULL),
	(12, 'Fries', 'ddddd', '12', NULL, NULL, NULL, NULL),
	(14, 'Chiken', 'ertyy', '23', NULL, NULL, NULL, NULL),
	(15, 'Chiken', 'qwe', '12', NULL, NULL, NULL, NULL),
	(16, 'Fries', 'Fsdsd', '1231', NULL, NULL, NULL, NULL),
	(17, 'Fries', 'asdax', '12', NULL, NULL, NULL, NULL),
	(18, 'Salads', NULL, NULL, NULL, NULL, 'qwe', '12'),
	(19, 'Salads', NULL, NULL, NULL, NULL, 'qwe', '11'),
	(20, 'Coffee', NULL, NULL, NULL, NULL, 'Iced Coffee', '12'),
	(21, 'Coffee', NULL, NULL, NULL, NULL, 'Hot Coffee', '11'),
	(22, 'Burger', NULL, NULL, NULL, NULL, 'qwe', '12'),
	(23, 'Burger', NULL, NULL, NULL, NULL, 'qweas', '11'),
	(24, 'Burger', NULL, NULL, NULL, NULL, 'asd', '11'),
	(25, 'Burger', NULL, NULL, NULL, NULL, 'ert', '11'),
	(26, 'Burger', NULL, NULL, NULL, NULL, 'Beef Burger', '12.0'),
	(27, 'Burger', NULL, NULL, NULL, NULL, 'Fries', '5.0'),
	(28, 'Burger', NULL, NULL, NULL, NULL, 'Chicken', '1.3'),
	(29, 'Tea', NULL, NULL, NULL, NULL, 'Tea1', '12'),
	(30, 'Tea', NULL, NULL, NULL, NULL, 'Tea1', '12'),
	(31, 'qwe', NULL, NULL, NULL, NULL, 'zxc', '12'),
	(32, 'qwe', NULL, NULL, NULL, NULL, 'qwe', 'qwe'),
	(33, 'Coffee', NULL, NULL, NULL, NULL, 'Coffee', '12.34'),
	(34, 'Coffee', NULL, NULL, NULL, NULL, 'Iced Coffee', '3.4'),
	(35, 'Burger', NULL, NULL, NULL, NULL, 'Beef Burger', '2.3'),
	(36, 'Burger', NULL, NULL, NULL, NULL, 'Chiken Burger', '22'),
	(37, 'zxc', NULL, NULL, NULL, NULL, 'Array', 'Array'),
	(38, 'Wraps', NULL, NULL, NULL, NULL, 'Array', 'Array'),
	(39, 'Burger', NULL, NULL, NULL, NULL, 'qwe', '12'),
	(40, 'Burger', NULL, NULL, NULL, NULL, 'asd', '12'),
	(41, 'Burger', NULL, NULL, NULL, NULL, 'asd', '12'),
	(42, 'zxc', NULL, NULL, NULL, NULL, 'qwe', '12'),
	(43, 'zxc', NULL, NULL, NULL, NULL, 'asd', '11'),
	(44, 'zxc', NULL, NULL, NULL, NULL, 'qwe', '12'),
	(45, 'zxc', NULL, NULL, NULL, NULL, 'asd', '11'),
	(46, '123', NULL, NULL, NULL, NULL, 'asd', '12'),
	(47, '123', NULL, NULL, NULL, NULL, 'asd', '11'),
	(48, 'qwe', NULL, NULL, NULL, NULL, '', ''),
	(49, 'qwe', NULL, NULL, NULL, NULL, '', ''),
	(50, 'qwe', NULL, NULL, NULL, NULL, '', ''),
	(51, 'qwe', NULL, NULL, NULL, NULL, 'asd', '12'),
	(52, 'qwe', NULL, NULL, NULL, NULL, 'asd', '12'),
	(53, 'qwer', NULL, NULL, NULL, NULL, 'Array', 'Array');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
