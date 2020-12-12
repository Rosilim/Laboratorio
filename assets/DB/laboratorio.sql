 
CREATE DATABASE IF NOT EXISTS `laboratorio`  
USE `laboratorio`; 

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text DEFAULT NULL,
  `apellido` text DEFAULT NULL,
  `correo` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `foto` text DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
 
INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `correo`, `password`, `foto`) VALUES
	(1, 'Administrador', 'UTP', 'admin@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auJRR6foEJ7ynpjisKtbiKJbvJsoQ8VPS', '10855.jpg'); 
