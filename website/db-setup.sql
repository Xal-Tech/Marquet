CREATE TABLE IF NOT EXISTS `accounts` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
  	`username` varchar(50) NOT NULL,
  	`password` varchar(255) NOT NULL,
  	`cellnumber` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `productos` ( 
	`id` int(11) NOT NULL , 
	`vendedor` varchar(50) NOT NULL , 
	`nombre-producto` varchar(50) NOT NULL , 
	`imagen` varchar(100) NOT NULL , 
	`precio` FLOAT NOT NULL , 
	PRIMARY KEY (`id`)
) ENGINE = InnoDB;
