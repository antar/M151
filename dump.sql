CREATE DATABASE IF NOT EXISTS `M151` DEFAULT CHARACTER SET utf8;
USE `M151`;

CREATE TABLE IF NOT EXISTS `DATA` (
	`id` SERIAL,
	`lastname` TEXT NOT NULL,
	`firstname` TEXT NOT NULL,
	`birthday` TEXT NOT NULL,
	`email` TEXT,
	`ahv` TEXT NOT NULL UNIQUE,
	`personal` INT NOT NULL,
	`telephone` TEXT,
	`company` TEXT NOT NULL,
	`department` TEXT NOT NULL UNIQUE,
	`jobtitle` TEXT NOT NULL,
	`jobdesc` TEXT DEFAULT '',	
	PRIMARY KEY (`id`)
);
