-- Adminer 4.8.1 MySQL 8.0.28 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `age` int NOT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `user` (`id`, `email`, `first_name`, `last_name`, `age`, `date_created`) VALUES
(1,	'spanhbob98@mail.ru',	'Иван',	'Иванов',	23,	NULL),
(2,	'magistr357753@yandex.ru',	'Андрей',	'Сергеевич',	22,	NULL),
(3,	'Sorokinacc@mail.ru',	'Инна',	'Новикова',	25,	NULL);

-- 2022-05-29 19:00:55
