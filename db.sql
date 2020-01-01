-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `todo_list` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `todo_list`;

DROP TABLE IF EXISTS `todos`;
CREATE TABLE `todos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task_name` text NOT NULL,
  `task_date` varchar(255) NOT NULL,
  `task_description` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2019-12-30 20:24:10
