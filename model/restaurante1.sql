SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
DROP DATABASE restaurante;
CREATE DATABASE IF NOT EXISTS `restaurante`;
USE restaurante;


--
-- Base de datos: `restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipoUsuario` int(1) NOT NULL,
  `estado` varchar(36) NOT NULL,
  PRIMARY KEY (`id`)
);

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `tipoUsuario`, `estado`) VALUES
(4, 'dragosani24@gmail.com', 'dragos007', 2, '1');
DROP TABLE proveedores;
CREATE TABLE IF NOT EXISTS `proveedores` (
  `idProveedor` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) ,
  `nombreEstablecimiento` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `direccion` TEXT NOT NULL,
  PRIMARY KEY (`idProveedor`),
  FOREIGN KEY (idUsuario) REFERENCES usuarios(id)
);
INSERT INTO `proveedores` ( `idUsuario`, `nombreEstablecimiento`,`descripcion`, `telefono`, `direccion`) 
VALUES ( '4', 'SushiSantiago', 'Sushi y preparacion de bebidas orientales', 5556611270, 'Pedro Luis Ogazon 77, Col. San Angel Inn,Alvaro Obregon,cp. 01000');

DROP TABLE comensales;

CREATE TABLE IF NOT EXISTS `comensales` (
  `idComensal` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) ,
  `nombreCompleto` varchar(128) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `direccion` TEXT NOT NULL,
  PRIMARY KEY (`idComensal`),
  FOREIGN KEY (idUsuario) REFERENCES usuarios(id)
);
INSERT INTO `comensales` ( `idUsuario`, `nombreCompleto`, `telefono`, `direccion`) 
VALUES ( 1, 'Juan David Contreras Ruiz', '5545348744','Calle 7 92-9, col. san pedro de los pinos, Benito Juarez, 03800');


CREATE TABLE IF NOT EXISTS `comanda` (
  `idComanda` int(11) NOT NULL AUTO_INCREMENT,
  `idComensal` int(11) ,
  `idProveedor` int(11) ,
  `cantidadaPagar` varchar(128) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fechaPedido` DATE NOT NULL,
  PRIMARY KEY (`idComanda`),
  FOREIGN KEY (idComensal) REFERENCES comensales(idComensal),
  FOREIGN KEY (idProveedor) REFERENCES proveedores(idProveedor)
);

CREATE TABLE IF NOT EXISTS `productos` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `idProveedor` int(11) ,
  `descripcion` TEXT NOT NULL,
  `costo` real NOT NULL,
  PRIMARY KEY (`idProducto`),
  FOREIGN KEY (idProveedor) REFERENCES proveedores(idProveedor)
);