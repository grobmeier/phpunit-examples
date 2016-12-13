DROP TABLE IF EXISTS `persons`;
CREATE TABLE `persons` (
	`email` varchar(100),
	`id` int NOT NULL,
	`nick` varchar(100),
	PRIMARY KEY (`id`)
);