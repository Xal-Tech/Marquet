CREATE TABLE IF NOT EXISTS `accounts` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
  	`username` varchar(50) NOT NULL,
  	`password` varchar(255) NOT NULL,
  	`cellnumber` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL,
  `foto-producto` varchar(100) NOT NULL,
  `nombre-producto` varchar(100) NOT NULL,
  `nombre-vendedor` varchar(100) NOT NULL,
  `foto-perfil` varchar(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `precio` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `productos` (`id`, `foto-producto`, `nombre-producto`, `nombre-vendedor`, `foto-perfil`, `rating`, `precio`) VALUES
(0, 'carne-1.jpg', 'Arrachera', 'Juan L&oacute;pez', 'demo1.jpg', '4/5', '$143 por kilo'),
(1, 'tomate-1.jpg', 'Tomate', 'Dorotea Riesco', 'demo2.jpg', '3/5', '$11 por kilo'),
(2, 'aceite-nutrioli-1.jpeg', 'Aceite Nutrioli', 'Carlos Subias', 'demo3.jpg', '5/5', '$151 por kilo'),
(3, 'concha-blanca-1.jpg', 'Concha', 'Maria Blanca Nieves', 'demo4.jpg', '4/5', '$13'),
(4, 'carne-3.jpg', 'Arrachera', 'Fernando Pedre&ntilde;o', 'demo5.jpg', '1/5', '$148 por kilo'),
(5, 'tomate-3.jpg', 'Tomate', 'Cristina Barranco', 'demo6.jpg', '2/5', '$14 por kilo'),
(6, 'aceite-nutrioli-2.jpeg', 'Aceite de soya', 'Juan Santolaya', 'demo7.jpg', '4/5', '$144 por kilo'),
(7, 'concha-blanca-2.jpeg', 'Concha blanca', 'Suri Alberdi', 'demo8.jpg', '4/5', '$14 por kilo');