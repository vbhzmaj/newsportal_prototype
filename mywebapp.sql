-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 05, 2019 at 06:19 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mywebapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `idcomment` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `iduser` int(11) NOT NULL,
  `idnews` int(11) NOT NULL,
  `cdatetime` datetime DEFAULT CURRENT_TIMESTAMP,
  `is_approved` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idcomment`),
  KEY `iduser` (`iduser`),
  KEY `idnews` (`idnews`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`idcomment`, `comment`, `iduser`, `idnews`, `cdatetime`, `is_approved`) VALUES
(43, 'Dolor netus eleifend sagittis integer curae; purus ipsum pulvinar consectetur massa sem facilisi. Natoque feugiat aptent consequat habitant cum tincidunt sociosqu integer. Egestas dictumst quam lacinia dapibus proin rhoncus per iaculis. Placerat neque dapibus, id integer.', 11, 4, '2019-02-05 06:17:10', b'1'),
(45, 'Dolor netus eleifend sagittis integer curae; purus ipsum pulvinar consectetur massa sem facilisi. Natoque feugiat aptent consequat habitant cum tincidunt sociosqu integer. Egestas dictumst quam lacinia dapibus proin rhoncus per iaculis. Placerat neque dapibus, id integer.', 10, 10, '2019-02-05 06:27:06', b'1'),
(46, 'Dolor netus eleifend sagittis integer curae; purus ipsum pulvinar consectetur massa sem facilisi. Natoque feugiat aptent consequat habitant cum tincidunt sociosqu integer. Egestas dictumst quam lacinia dapibus proin rhoncus per iaculis. Placerat neque dapibus, id integer.', 10, 10, '2019-02-05 06:27:10', b'1'),
(47, 'Dolor netus eleifend sagittis integer curae; purus ipsum pulvinar consectetur massa sem facilisi. Natoque feugiat aptent consequat habitant cum tincidunt sociosqu integer. Egestas dictumst quam lacinia dapibus proin rhoncus per iaculis. Placerat neque dapibus, id integer.', 10, 4, '2019-02-05 06:27:24', b'1'),
(50, 'Dolor netus eleifend sagittis integer curae; purus ipsum pulvinar consectetur massa sem facilisi. Natoque feugiat aptent consequat habitant cum tincidunt sociosqu integer. Egestas dictumst quam lacinia dapibus proin rhoncus per iaculis. Placerat neque dapibus, id integer.', 10, 5, '2019-02-05 06:28:19', b'1'),
(51, 'Dolor netus eleifend sagittis integer curae; purus ipsum pulvinar consectetur massa sem facilisi. Natoque feugiat aptent consequat habitant cum tincidunt sociosqu integer. Egestas dictumst quam lacinia dapibus proin rhoncus per iaculis. Placerat neque dapibus, id integer.', 10, 8, '2019-02-05 06:28:27', b'1'),
(52, 'Dolor netus eleifend sagittis integer curae; purus ipsum pulvinar consectetur massa sem facilisi. Natoque feugiat aptent consequat habitant cum tincidunt sociosqu integer. Egestas dictumst quam lacinia dapibus proin rhoncus per iaculis. Placerat neque dapibus, id integer.', 10, 1, '2019-02-05 06:28:37', b'1'),
(53, 'Dolor netus eleifend sagittis integer curae; purus ipsum pulvinar consectetur massa sem facilisi. Natoque feugiat aptent consequat habitant cum tincidunt sociosqu integer. Egestas dictumst quam lacinia dapibus proin rhoncus per iaculis. Placerat neque dapibus, id integer.', 10, 2, '2019-02-05 06:28:48', NULL),
(54, 'Dolor netus eleifend sagittis integer curae; purus ipsum pulvinar consectetur massa sem facilisi. Natoque feugiat aptent consequat habitant cum tincidunt sociosqu integer. Egestas dictumst quam lacinia dapibus proin rhoncus per iaculis. Placerat neque dapibus, id integer.', 10, 6, '2019-02-05 06:28:59', NULL),
(56, 'Dolor netus eleifend sagittis integer curae; purus ipsum pulvinar consectetur massa sem facilisi. Natoque feugiat aptent consequat habitant cum tincidunt sociosqu integer. Egestas dictumst quam lacinia dapibus proin rhoncus per iaculis. Placerat neque dapibus, id integer.', 11, 4, '2019-02-05 06:30:24', NULL),
(57, 'Dolor netus eleifend sagittis integer curae; purus ipsum pulvinar consectetur massa sem facilisi. Natoque feugiat aptent consequat habitant cum tincidunt sociosqu integer. Egestas dictumst quam lacinia dapibus proin rhoncus per iaculis. Placerat neque dapibus, id integer.', 11, 5, '2019-02-05 06:30:34', NULL),
(58, 'Dolor netus eleifend sagittis integer curae; purus ipsum pulvinar consectetur massa sem facilisi. Natoque feugiat aptent consequat habitant cum tincidunt sociosqu integer. Egestas dictumst quam lacinia dapibus proin rhoncus per iaculis. Placerat neque dapibus, id integer.', 11, 6, '2019-02-05 06:30:49', NULL),
(59, 'Dolor netus eleifend sagittis integer curae; purus ipsum pulvinar consectetur massa sem facilisi. Natoque feugiat aptent consequat habitant cum tincidunt sociosqu integer. Egestas dictumst quam lacinia dapibus proin rhoncus per iaculis. Placerat neque dapibus, id integer.', 11, 1, '2019-02-05 06:30:59', NULL),
(60, 'Dolor netus eleifend sagittis integer curae; purus ipsum pulvinar consectetur massa sem facilisi. Natoque feugiat aptent consequat habitant cum tincidunt sociosqu integer. Egestas dictumst quam lacinia dapibus proin rhoncus per iaculis. Placerat neque dapibus, id integer.', 11, 8, '2019-02-05 06:31:08', NULL),
(61, 'Dolor netus eleifend sagittis integer curae; purus ipsum pulvinar consectetur massa sem facilisi. Natoque feugiat aptent consequat habitant cum tincidunt sociosqu integer. Egestas dictumst quam lacinia dapibus proin rhoncus per iaculis. Placerat neque dapibus, id integer.', 12, 10, '2019-02-05 06:31:55', NULL),
(63, 'Dolor netus eleifend sagittis integer curae; purus ipsum pulvinar consectetur massa sem facilisi. Natoque feugiat aptent consequat habitant cum tincidunt sociosqu integer. Egestas dictumst quam lacinia dapibus proin rhoncus per iaculis. Placerat neque dapibus, id integer.', 12, 4, '2019-02-05 06:32:12', NULL),
(66, 'Dolor netus eleifend sagittis integer curae; purus ipsum pulvinar consectetur massa sem facilisi. Natoque feugiat aptent consequat habitant cum tincidunt sociosqu integer. Egestas dictumst quam lacinia dapibus proin rhoncus per iaculis. Placerat neque dapibus, id integer.', 12, 6, '2019-02-05 06:33:06', NULL),
(67, 'Dolor netus eleifend sagittis integer curae; purus ipsum pulvinar consectetur massa sem facilisi. Natoque feugiat aptent consequat habitant cum tincidunt sociosqu integer. Egestas dictumst quam lacinia dapibus proin rhoncus per iaculis. Placerat neque dapibus, id integer.', 12, 8, '2019-02-05 06:34:14', NULL),
(68, 'Dolor netus eleifend sagittis integer curae; purus ipsum pulvinar consectetur massa sem facilisi. Natoque feugiat aptent consequat habitant cum tincidunt sociosqu integer. Egestas dictumst quam lacinia dapibus proin rhoncus per iaculis. Placerat neque dapibus, id integer.', 12, 5, '2019-02-05 06:34:21', NULL),
(69, 'Dolor netus eleifend sagittis integer curae; purus ipsum pulvinar consectetur massa sem facilisi. Natoque feugiat aptent consequat habitant cum tincidunt sociosqu integer.', 8, 8, '2019-02-05 07:13:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `idnews` int(11) NOT NULL AUTO_INCREMENT,
  `ntitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ncontent` text COLLATE utf8_unicode_ci NOT NULL,
  `ncategory` enum('Domestic','International','Business','Sport','Showbizz') COLLATE utf8_unicode_ci NOT NULL,
  `ndatetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idnews`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`idnews`, `ntitle`, `ncontent`, `ncategory`, `ndatetime`) VALUES
(1, 'Nole conquered Melbourne', 'Lorem ipsum.', 'Sport', '2019-02-03 20:49:40'),
(2, 'Rafa worried ahead of RG', 'Rafa worried ahead of RG', 'Sport', '2019-02-03 22:58:42'),
(4, 'Floods in Sarajevo', 'Floods in Sarajevo', 'Domestic', '2019-02-03 23:06:20'),
(5, 'Mexican wall again', 'Aenean non aliquet orci. Proin non mauris malesuada, consequat risus id, ultrices mauris. In imperdiet dapibus turpis eget semper. Nulla aliquam euismod quam, quis tempor tellus ultricies et. Quisque velit erat, varius non iaculis at, egestas eget eros. Etiam eleifend eros in consectetur aliquet. Donec varius odio ut fermentum venenatis. Morbi cursus, sem ut placerat molestie, tellus dolor convallis tortor, vitae aliquam ante metus vitae ex. Cras id bibendum urna, eu convallis metus. Cras vitae nisi in urna imperdiet ultrices in ut nulla. Nam bibendum erat a vehicula dapibus.', 'International', '2019-02-03 23:06:59'),
(6, 'NY Stock Exchange', 'Phasellus at imperdiet erat. Nullam ultricies lectus sed dui efficitur luctus. Nunc dictum lacus sit amet nibh aliquam finibus. Nullam eget ipsum ex. Morbi nec blandit eros. In nunc enim, feugiat a rutrum at, pellentesque a dui. Phasellus nec placerat nulla. Duis scelerisque dolor erat, et accumsan orci elementum pulvinar. Etiam mattis sed ligula sed pharetra. Donec eleifend mollis risus rhoncus eleifend. In hac habitasse platea dictumst. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam scelerisque eget eros eu dapibus. Proin mattis, ante non tempor iaculis, est nulla lacinia nunc, nec lobortis est nibh at tellus. Mauris pulvinar libero sapien, egestas accumsan sapien rutrum ac.\r\n\r\nNullam porta vehicula nisl et eleifend. Sed placerat lacus id nulla iaculis bibendum. Nam laoreet sit amet lorem id eleifend. Donec non eros libero. Fusce eu porttitor nulla. Sed tempor pretium lectus, non porttitor enim porttitor nec. Nullam mollis eget ipsum imperdiet blandit. In quis mi mi. Vestibulum tincidunt, urna sed feugiat imperdiet, ligula mauris sodales nisi, nec rhoncus nulla magna sed lorem. Sed nec enim efficitur, ullamcorper nulla non, fringilla justo. Etiam mi quam, sodales vehicula condimentum pharetra, posuere at dolor. Praesent eu risus non massa pharetra iaculis et dictum lorem. Integer a leo sed lacus malesuada porttitor. Duis tempor placerat posuere.', 'Business', '2019-02-03 23:07:45'),
(8, 'Koncert Zdravka Colica u Herceg Novom odgodjen iz sigurnosnih razloga', '(from klix.ba) Koncert Zdravka ÄŒoliÄ‡a u Herceg Novom kojim je trebalo da bude otvoren Praznik mimoze odgoÄ‘en je za 8. februar, pa Ä‡e manifestacija, umjesto veÄeras, biti otvorena sutra na FeÅ¡ti od mimoze, ribe i vina, odluÄila je Direkcija manifestacije nakon konsultacija sa meteoroloÅ¡kim stanicama, sluÅ¾bama bezbjednosti i razgovora sa izvoÄ‘aÄem. \r\nIz Direkcije navode da je ova odluka donesena zbog bezbjednosnih razloga, saopÅ¡teno je iz opÅ¡tinske SluÅ¾be za informisanje.\r\n\r\nPraznik mimoze u Herceg Novom ove godine obiljeÅ¾ava 50 godina postojanja.\r\n\r\nTokom 50 dana trajanja Praznika mimoze biÄ‡e organizovana Äetiri maskenbala, koncerti na otvorenom, veÄeri mediteranske pjesme, meÄ‘unarodne karnevalske povorke, meÄ‘unarodni susret duvaÄkih i maÅ¾oret ansambala i izloÅ¾ba cvijeÄ‡a, te dogaÄ‘aji na kojima Ä‡e biti predstavljeni prijateljski gradovi i drÅ¾ave.\r\n\r\nPrema prognozi meteorologa, u Herceg Novom veÄeras i sutra biÄ‡e oblaÄno, sa jakom kiÅ¡om i vjetrom.', 'Showbizz', '2019-02-03 23:18:40'),
(10, 'Manchester City won', 'Ante orci laoreet condimentum sodales. Habitasse cum libero nibh. Tortor est hac pharetra ultrices orci laoreet fames rhoncus! Nisl cursus ac proin arcu hendrerit nunc cum placerat class. Sociis ad adipiscing lectus curabitur venenatis cras aliquam vivamus non dapibus sociosqu! Faucibus proin etiam laoreet risus convallis consequat sit eleifend quam auctor. Mattis commodo sapien ullamcorper quis ad nibh curae; ipsum taciti sem. Lorem mauris.', 'Sport', '2019-02-05 05:26:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` bit(1) DEFAULT NULL,
  `isblocked` bit(1) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iduser`, `username`, `password`, `email`, `status`, `isblocked`) VALUES
(1, 'AdoMino', 'adminpassword', 'draganovic@hotmail.com', b'1', NULL),
(2, 'NewUser', '146b65fd2004858b1c615bc8cf8b8a5b', 'example@live.com', NULL, NULL),
(3, 'NewUser1', '412566367c67448b599d1b7666f8ccfc', 'example1@live.com', NULL, NULL),
(4, 'Neko', '2ab4f27ab1ffdcdad8ed21a965ca62ad', 'draganovic12@hotmail.com', NULL, NULL),
(5, 'mike', 'f6122c971aeb03476bf01623b09ddfd4', 'mike@live.com', NULL, NULL),
(6, 'john', '92eb5ffee6ae2fec3ad71c777531578f', 'john@live.com', NULL, NULL),
(7, 'zmaj', '39d1afaecd1175110302e31c9eef67ac', 'zmaj@gmail.com', NULL, NULL),
(8, 'stan', 'f52412c4ff1dacd2111f4951f3db1260', 'stan@gmail.com', NULL, NULL),
(9, 'jan', 'fa27ef3ef6570e32a79e74deca7c1bc3', 'jan@gmail.com', NULL, NULL),
(10, 'nole', '76fb0155da47a15975b3211fdcb3fa32', 'nole@live.com', NULL, NULL),
(11, 'rafa', '35cd2d0d62d9bc5e60a3ca9f7593b05b', 'rafa@gmail.com', NULL, NULL),
(12, 'damir', 'd00b510fdd0dccff2bc5bb9c9fe54728', 'damir@live.com', NULL, NULL),
(13, 'zver', 'c634ebce64f3275b3ebc94b82384ca11', 'zver@gmail.com', NULL, NULL),
(14, 'donald', '0d343c0f0ca763f983c8042350059f56', 'trump@live.com', NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_idnews` FOREIGN KEY (`idnews`) REFERENCES `news` (`idnews`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_iduser` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
