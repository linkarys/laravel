-- create table host
CREATE TABLE `host` (
  `name` varchar(255) DEFAULT NULL,
  `create_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- insert some value into host
INSERT INTO host(name) VALUES
	('cvs.php.net'),
	('dbi.perl.org'),
	('jakarta.apache.org'),
	('lists.mysql.com'),
	('mysql.com'),
	('com'),
	('www.kitebird.com')
;

-- split host name, variable can do this too.
SELECT name,
	substring_index(full_name, '.', 1) AS leftside,
	substring_index(substring_index(full_name, '.', 2), '.', -1) AS leftside,
	substring_index(full_name, '.', -1) AS leftside
FROM (
	SELECT
		name,
		substring_index(concat('..', name), '.', -3) AS full_name
	FROM
		host) AS t1;


-- new table ip
CREATE TABLE hostip(
	ip VARCHAR(10) NOT NULL,
	create_at DATETIME default CURRENT_TIMESTAMP,
	update_at DATETIME default CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


-- insert some record into table ip
INSERT INTO hostip(ip) VALUES('22.0.0.1'), ('127.0.0.1'), ('192.168.0.2'), ('192.168.0.10'), ('192.168.1.2'), ('192.168.1.10'), ('255.255.255.255');

-- use set
CREATE TABLE item(
	id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
	name char(20),
	colors set('red', 'green', 'blue') DEFAULT 'blue',
	PRIMARY key(id)
	);

-- alter table
ALTER TABLE host ADD COLUMN id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT;


-- new create table sql
DROP TABLE IF EXISTS `host`;
CREATE TABLE `host` (
	`id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
	`name` varchar(255) DEFAULT NULL,
	`create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8