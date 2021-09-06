CREATE DATABASE IF NOT EXISTS `M151` DEFAULT CHARACTER SET utf8;
USE `M151`;

DROP TABLE IF EXISTS `data`;

CREATE TABLE IF NOT EXISTS `data` (
	`id` SERIAL,
	`lastname` TEXT NOT NULL,
	`firstname` TEXT NOT NULL,
	`birthday` DATE NOT NULL,
	`email` TEXT,
	`ahv` TEXT NOT NULL UNIQUE,
	`personal` INT NOT NULL,
	`telephone` TEXT,
	`company` TEXT NOT NULL,
	`department` TEXT NOT NULL,
	`jobtitle` TEXT NOT NULL,
	`jobdesc` TEXT DEFAULT '',	
	PRIMARY KEY (`id`)
);


-- mysql_insert
DROP PROCEDURE IF EXISTS `mysql_insert`;

DELIMITER //
CREATE PROCEDURE `mysql_insert`(
	IN `firstname` text,
	IN `lastname` text,
	IN `birthday` date,
	IN `email` text,
	IN `ahv` text,
	IN `personal` int,
	IN `telephone` text,
	IN `company` text,
	IN `department` text,
	IN `jobtitle` text,
	IN `jobdesc` text
)
BEGIN
  INSERT INTO 
		`data` (
			`firstname`, 
			`lastname`, 
			`birthday`, 
			`email`, 
			`ahv`, 
			`personal`, 
			`telephone`, 
			`company`, 
			`department`, 
			`jobtitle`, 
			`jobdesc`
			)
		VALUES (
			firstname,
			lastname,
			birthday,
			email,
			ahv,
			personal,
			telephone,
			company,
			department,
			jobtitle,
			jobdesc
		);
	END;
//
DELIMITER ;


-- mysql_select
DROP PROCEDURE IF EXISTS `mysql_select`;

DELIMITER //
CREATE PROCEDURE `mysql_select`()
BEGIN
	SELECT * FROM `data`;
END;
//
DELIMITER ;

-- mysql_update
DROP PROCEDURE IF EXISTS `mysql_update`;

DELIMITER //
CREATE PROCEDURE `mysql_update`(
	IN `id` int,
	IN `col` text,
	IN `val` text
)
BEGIN
	UPDATE
		`data`
	SET
		col = val
	WHERE
		`id` = id;
END;
//
DELIMITER ;