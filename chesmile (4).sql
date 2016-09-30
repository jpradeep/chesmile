-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2016 at 04:29 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chesmile`
--

-- --------------------------------------------------------

--
-- Table structure for table `acl_phinxlog`
--

CREATE TABLE IF NOT EXISTS `acl_phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acl_phinxlog`
--

INSERT INTO `acl_phinxlog` (`version`, `migration_name`, `start_time`, `end_time`) VALUES
(20141229162641, 'DbAcl', '2016-09-18 23:07:35', '2016-09-18 23:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lft` (`lft`,`rght`),
  KEY `alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=111 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 180),
(2, 1, NULL, NULL, 'Groups', 2, 13),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 1, NULL, NULL, 'Pages', 14, 17),
(9, 8, NULL, NULL, 'display', 15, 16),
(10, 1, NULL, NULL, 'Posts', 18, 29),
(11, 10, NULL, NULL, 'index', 19, 20),
(12, 10, NULL, NULL, 'view', 21, 22),
(13, 10, NULL, NULL, 'add', 23, 24),
(14, 10, NULL, NULL, 'edit', 25, 26),
(15, 10, NULL, NULL, 'delete', 27, 28),
(16, 1, NULL, NULL, 'Users', 30, 49),
(17, 16, NULL, NULL, 'index', 31, 32),
(18, 16, NULL, NULL, 'view', 33, 34),
(19, 16, NULL, NULL, 'add', 35, 36),
(20, 16, NULL, NULL, 'edit', 37, 38),
(21, 16, NULL, NULL, 'delete', 39, 40),
(22, 16, NULL, NULL, 'login', 41, 42),
(23, 16, NULL, NULL, 'logout', 43, 44),
(24, 1, NULL, NULL, 'Widgets', 50, 61),
(25, 24, NULL, NULL, 'index', 51, 52),
(26, 24, NULL, NULL, 'view', 53, 54),
(27, 24, NULL, NULL, 'add', 55, 56),
(28, 24, NULL, NULL, 'edit', 57, 58),
(29, 24, NULL, NULL, 'delete', 59, 60),
(30, 1, NULL, NULL, 'Acl', 62, 63),
(31, 1, NULL, NULL, 'Bake', 64, 65),
(32, 1, NULL, NULL, 'DebugKit', 66, 81),
(33, 32, NULL, NULL, 'Panels', 67, 72),
(34, 33, NULL, NULL, 'index', 68, 69),
(35, 33, NULL, NULL, 'view', 70, 71),
(36, 32, NULL, NULL, 'Requests', 73, 76),
(37, 36, NULL, NULL, 'view', 74, 75),
(38, 32, NULL, NULL, 'Toolbar', 77, 80),
(39, 38, NULL, NULL, 'clearCache', 78, 79),
(40, 1, NULL, NULL, 'Migrations', 82, 83),
(42, 1, NULL, NULL, 'AdminDashBoard', 84, 95),
(43, 42, NULL, NULL, 'index', 85, 86),
(46, 1, NULL, NULL, 'AclPhinxlog', 96, 107),
(47, 46, NULL, NULL, 'index', 97, 98),
(48, 46, NULL, NULL, 'view', 99, 100),
(49, 46, NULL, NULL, 'add', 101, 102),
(50, 46, NULL, NULL, 'edit', 103, 104),
(51, 46, NULL, NULL, 'delete', 105, 106),
(52, 1, NULL, NULL, 'Acos', 108, 119),
(53, 52, NULL, NULL, 'index', 109, 110),
(54, 52, NULL, NULL, 'view', 111, 112),
(55, 52, NULL, NULL, 'add', 113, 114),
(56, 52, NULL, NULL, 'edit', 115, 116),
(57, 52, NULL, NULL, 'delete', 117, 118),
(58, 42, NULL, NULL, 'view', 87, 88),
(59, 42, NULL, NULL, 'add', 89, 90),
(60, 42, NULL, NULL, 'edit', 91, 92),
(61, 42, NULL, NULL, 'delete', 93, 94),
(62, 1, NULL, NULL, 'ArosAcos', 120, 131),
(63, 62, NULL, NULL, 'index', 121, 122),
(64, 62, NULL, NULL, 'view', 123, 124),
(65, 62, NULL, NULL, 'add', 125, 126),
(66, 62, NULL, NULL, 'edit', 127, 128),
(67, 62, NULL, NULL, 'delete', 129, 130),
(68, 1, NULL, NULL, 'Aros', 132, 143),
(69, 68, NULL, NULL, 'index', 133, 134),
(70, 68, NULL, NULL, 'view', 135, 136),
(71, 68, NULL, NULL, 'add', 137, 138),
(72, 68, NULL, NULL, 'edit', 139, 140),
(73, 68, NULL, NULL, 'delete', 141, 142),
(79, 16, NULL, NULL, 'adminlogin', 45, 46),
(86, 16, NULL, NULL, 'activate', 47, 48),
(93, 1, NULL, NULL, 'Categories', 144, 155),
(94, 93, NULL, NULL, 'index', 145, 146),
(95, 93, NULL, NULL, 'view', 147, 148),
(96, 93, NULL, NULL, 'add', 149, 150),
(97, 93, NULL, NULL, 'edit', 151, 152),
(98, 93, NULL, NULL, 'delete', 153, 154),
(99, 1, NULL, NULL, 'SubCategories', 156, 167),
(100, 99, NULL, NULL, 'index', 157, 158),
(101, 99, NULL, NULL, 'view', 159, 160),
(102, 99, NULL, NULL, 'add', 161, 162),
(103, 99, NULL, NULL, 'edit', 163, 164),
(104, 99, NULL, NULL, 'delete', 165, 166),
(105, 1, NULL, NULL, 'UserProfile', 168, 179),
(106, 105, NULL, NULL, 'index', 169, 170),
(107, 105, NULL, NULL, 'view', 171, 172),
(108, 105, NULL, NULL, 'add', 173, 174),
(109, 105, NULL, NULL, 'edit', 175, 176),
(110, 105, NULL, NULL, 'delete', 177, 178);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lft` (`lft`,`rght`),
  KEY `alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Groups', 1, NULL, 1, 42),
(2, 1, 'Users', 1, NULL, 2, 3),
(3, NULL, 'Groups', 2, NULL, 43, 46),
(4, 3, 'Users', 2, NULL, 44, 45),
(6, NULL, 'Groups', 4, NULL, 47, 50),
(7, 6, 'Users', 3, NULL, 48, 49),
(8, 1, 'Users', 4, NULL, 4, 5),
(9, 1, 'Users', 5, NULL, 6, 7),
(10, 1, 'Users', 6, NULL, 8, 9),
(11, 1, 'Users', 7, NULL, 10, 11),
(12, 1, 'Users', 8, NULL, 12, 13),
(13, 1, 'Users', 9, NULL, 14, 15),
(14, 1, 'Users', 10, NULL, 16, 17),
(15, 1, 'Users', 11, NULL, 18, 19),
(16, 1, 'Users', 12, NULL, 20, 21),
(17, 1, 'Users', 13, NULL, 22, 23),
(18, 1, 'Users', 14, NULL, 24, 25),
(19, 1, 'Users', 15, NULL, 26, 27),
(20, 1, 'Users', 16, NULL, 28, 29),
(21, 1, 'Users', 17, NULL, 30, 31),
(22, 1, 'Users', 18, NULL, 32, 33),
(23, 1, 'Users', 19, NULL, 34, 35),
(24, 1, 'Users', 20, NULL, 36, 37),
(25, 1, 'Users', 21, NULL, 38, 39),
(26, 1, 'Users', 22, NULL, 40, 41);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aro_id` int(11) NOT NULL,
  `aco_id` int(11) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `aro_id` (`aro_id`,`aco_id`),
  KEY `aco_id` (`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '-1', '-1', '-1', '-1'),
(2, 6, 1, '1', '1', '1', '1'),
(3, 1, 10, '1', '1', '1', '1'),
(4, 3, 10, '1', '1', '1', '1'),
(5, 3, 19, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `active`, `created`, `modified`) VALUES
(3, 'Arts and Crafts', 1, '2016-09-29 05:14:52', '2016-09-29 05:14:52'),
(4, 'Theatrical ', 1, '2016-09-29 05:14:59', '2016-09-29 05:14:59'),
(5, 'Dance', 1, '2016-09-29 05:15:10', '2016-09-29 05:15:10'),
(6, 'Music', 1, '2016-09-29 05:15:16', '2016-09-29 05:15:16'),
(7, 'Day Events', 1, '2016-09-29 05:15:23', '2016-09-29 05:15:23'),
(8, 'Festivals', 1, '2016-09-29 05:15:29', '2016-09-29 05:15:29'),
(9, 'Business', 1, '2016-09-29 05:15:37', '2016-09-29 05:15:37'),
(10, 'Education', 1, '2016-09-29 05:15:45', '2016-09-29 05:15:45'),
(11, 'Adventure', 1, '2016-09-29 05:16:02', '2016-09-29 05:16:02'),
(12, 'Auditions', 1, '2016-09-29 05:16:09', '2016-09-29 05:16:09'),
(13, 'Exhibitions/ Trade Fairs', 1, '2016-09-29 05:16:15', '2016-09-29 05:16:15'),
(14, 'Contests ', 1, '2016-09-29 05:16:22', '2016-09-29 05:16:22'),
(15, 'Fundraising and Charity', 1, '2016-09-29 05:16:28', '2016-09-29 05:16:28'),
(16, 'Health and Wellness', 1, '2016-09-29 05:16:35', '2016-09-29 05:16:35'),
(17, 'Sports', 1, '2016-09-29 05:16:52', '2016-09-29 05:16:52'),
(18, 'Beauty and Fashion', 1, '2016-09-29 05:16:58', '2016-09-29 05:16:58'),
(19, 'Food and Dining', 1, '2016-09-29 05:17:03', '2016-09-29 05:17:03'),
(20, 'Road shows', 1, '2016-09-29 05:17:15', '2016-09-29 05:17:15'),
(21, 'Spiritual Events', 1, '2016-09-29 05:17:20', '2016-09-29 05:17:20'),
(22, 'Fun and Entertainment', 1, '2016-09-29 05:17:30', '2016-09-29 05:17:30'),
(23, 'Kids', 1, '2016-09-29 05:17:38', '2016-09-29 05:17:38'),
(24, 'Party And Nightlife', 1, '2016-09-29 05:17:44', '2016-09-29 05:17:44');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `role`, `created`, `modified`) VALUES
(1, 'Individual', 'Users', '2016-09-19 04:41:13', '2016-09-19 06:29:24'),
(2, 'Event_Organizer', 'Users', '2016-09-19 05:26:45', '2016-09-19 06:29:33'),
(4, 'Admin', 'Admin', '2016-09-19 06:32:37', '2016-09-19 06:32:37');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE IF NOT EXISTS `sub_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `categories_id`, `name`, `active`, `created`, `modified`) VALUES
(1, 1, 'Pop', 1, '2016-09-28 13:23:02', '2016-09-28 13:23:02'),
(2, 24, 'DJ Nights', 1, '2016-09-29 05:18:28', '2016-09-29 05:18:28'),
(3, 24, 'Drinks', 1, '2016-09-29 05:18:41', '2016-09-29 05:18:41'),
(4, 24, 'Night Life Events', 1, '2016-09-29 05:18:51', '2016-09-29 05:18:51'),
(5, 24, 'Pubs', 1, '2016-09-29 05:19:03', '2016-09-29 05:19:03'),
(6, 24, 'Others', 1, '2016-09-29 05:19:14', '2016-09-29 05:19:14'),
(7, 9, 'Agriculture', 1, '2016-09-29 05:19:38', '2016-09-29 05:19:38'),
(8, 4, 'Mime Show', 1, '2016-09-29 05:19:46', '2016-09-29 05:19:46'),
(9, 3, 'Calligraphy', 1, '2016-09-29 05:24:58', '2016-09-29 05:24:58'),
(10, 3, 'Painting', 1, '2016-09-29 05:25:04', '2016-09-29 05:25:04'),
(11, 5, 'Folk', 1, '2016-09-29 05:25:12', '2016-09-29 05:25:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` char(60) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `Active` tinyint(1) NOT NULL DEFAULT '0',
  `activation_key` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `fullname`, `group_id`, `Active`, `activation_key`, `created`, `modified`) VALUES
(1, 'jpradeep.anna@gmail.com', '$2y$10$h4ZX8nm/lk8KmADoYxdQWeUyAFDmTfxvJeNUP6cklqlhamIs69Gaa', 'Pradeep', 1, 1, '', '2016-09-19 04:41:32', '2016-09-19 04:42:37'),
(3, 'pradeep@orbiten.in', '$2y$10$b6Wlz6kyF83UQtal34Y8u.aZAQ23qnw9r3MCT9w1FKekd5X1hf6OW', 'Pradeep', 4, 1, '', '2016-09-19 06:33:47', '2016-09-19 06:33:47'),
(4, 'pradeep@goldpalminfotech.com', '$2y$10$B6ULkFP2VLksipyOgU0bB.9D.jt4OAyAhpY40854wW0r5yZm21kmO', 'Pradeep', 1, 1, '', '2016-09-20 16:22:30', '2016-09-20 16:22:30'),
(5, 'admin@admin.com', '$2y$10$UMlWjasqFiDq.HDgX2Cx7OnwNkSrrcft/tNWbFRYu9niDHNdJBPni', 'Sam', 1, 1, '', '2016-09-24 03:07:16', '2016-09-24 03:07:16'),
(22, 'jpradeep.cse@gmail.com', '$2y$10$YKBwNtPPd8XQjV1fJvVeWuIfSeyeWzmco.JwTV.Djeq0ktrLZFd2O', 'pradeep', 1, 0, '6b12f946-5139-4047-9b2c-2a109ccd4a09', '2016-09-24 07:18:40', '2016-09-24 07:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `Mobile` varchar(255) DEFAULT NULL,
  `Address_1` varchar(255) DEFAULT NULL,
  `Address_2` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `Zipcode` int(11) DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `Created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE IF NOT EXISTS `widgets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `part_no` varchar(12) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
