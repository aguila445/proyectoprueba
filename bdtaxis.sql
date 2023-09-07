# Host: localhost  (Version 5.5.5-10.4.25-MariaDB)
# Date: 2023-09-05 20:13:20
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "asistencia"
#

DROP TABLE IF EXISTS `asistencia`;
CREATE TABLE `asistencia` (
  `idAsistencia` int(11) NOT NULL AUTO_INCREMENT,
  `nota` tinyint(3) DEFAULT 0,
  `evento` varchar(255) DEFAULT '',
  `fecha` timestamp NULL DEFAULT current_timestamp(),
  `ip` varchar(255) DEFAULT '',
  PRIMARY KEY (`idAsistencia`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "asistencia"
#

INSERT INTO `asistencia` VALUES (3,1,'INGRESO','2023-04-10 15:05:35','192.168.100.6'),(4,2,'INGRESO','2023-04-10 23:07:15','::1'),(5,2,'SALIDA','2023-04-10 23:16:04','::1'),(6,3,'INGRESO','2023-04-10 23:16:14','::1'),(7,3,'SALIDA','2023-04-10 23:17:34','192.168.100.6');

#
# Structure for table "carrera"
#

DROP TABLE IF EXISTS `carrera`;
CREATE TABLE `carrera` (
  `idcarrera` int(11) NOT NULL AUTO_INCREMENT,
  `carrera` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idcarrera`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "carrera"
#

INSERT INTO `carrera` VALUES (1,'SISTEMAS'),(2,'DERECHO'),(3,'ADMINISTRACION');

#
# Structure for table "cliente"
#

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `idCliente` smallint(5) unsigned NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` varchar(80) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `latitud` decimal(9,6) DEFAULT NULL,
  `longitud` decimal(9,6) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  `fechaActualizacion` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# Data for table "cliente"
#

INSERT INTO `cliente` VALUES (1,'Jose',NULL,NULL,NULL,NULL,NULL,1,'2023-06-17 16:18:57',NULL),(2,'Adrian',NULL,NULL,NULL,NULL,NULL,1,'2023-06-17 16:18:57',NULL);

#
# Structure for table "estudiante"
#

DROP TABLE IF EXISTS `estudiante`;
CREATE TABLE `estudiante` (
  `idEstudiante` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `primerApellido` varchar(255) DEFAULT NULL,
  `segundoApellido` varchar(255) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nota` varchar(8) DEFAULT NULL,
  `foto` varchar(255) DEFAULT '',
  `latitud` decimal(9,6) DEFAULT NULL,
  `longitud` decimal(9,6) DEFAULT NULL,
  `estado` int(11) DEFAULT 1,
  `creado` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idEstudiante`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "estudiante"
#

INSERT INTO `estudiante` VALUES (1,'eduardo','macherano','dalas',NULL,NULL,NULL,NULL,'1.pdf',NULL,NULL,1,'2023-06-30 15:37:03'),(3,'lidia','patzi','vaca',NULL,NULL,NULL,NULL,'3.pdf',NULL,NULL,1,'2023-06-30 16:43:16'),(4,'rudy','palacios','gomez',NULL,NULL,NULL,NULL,'4.jpg',NULL,NULL,1,'2023-06-30 17:38:14'),(5,'anibal','guzman','contreras',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2023-06-30 19:06:47'),(6,'luis','candia','as',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2023-06-30 19:18:06');

#
# Structure for table "contacto"
#

DROP TABLE IF EXISTS `contacto`;
CREATE TABLE `contacto` (
  `idContacto` int(11) NOT NULL AUTO_INCREMENT,
  `contacto` varchar(255) DEFAULT NULL,
  `direcccion` varchar(80) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `habilitado` varchar(255) DEFAULT '1',
  PRIMARY KEY (`idContacto`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "contacto"
#

INSERT INTO `contacto` VALUES (1,' IMPORTADORA SANTACRUZ',NULL,' 591707452',' importadoras@gmail.com','1');

#
# Structure for table "pedido"
#

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE `pedido` (
  `idUsuario` smallint(5) unsigned NOT NULL,
  `idCliente` smallint(6) NOT NULL,
  `idEstudiante` smallint(6) NOT NULL,
  `telefono` varchar(20) NOT NULL DEFAULT '0',
  `fecha` datetime NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `direccion` varchar(100) NOT NULL DEFAULT 'NULL',
  `latitud` decimal(9,6) NOT NULL,
  `longitud` decimal(9,6) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  `fechaActualizacion` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idUsuario`,`idCliente`,`idEstudiante`),
  KEY `id_cliente` (`idCliente`),
  KEY `id_producto` (`idEstudiante`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# Data for table "pedido"
#


#
# Structure for table "servicio"
#

DROP TABLE IF EXISTS `servicio`;
CREATE TABLE `servicio` (
  `idPedido` int(11) NOT NULL AUTO_INCREMENT,
  `idCliente` int(11) DEFAULT NULL,
  `idEstudiante` int(11) DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idPedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "servicio"
#


#
# Structure for table "usuario"
#

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `email` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "usuario"
#

INSERT INTO `usuario` VALUES (1,'jefe','202cb962ac59075b964b07152d234b70','admi',''),(2,'ope','289dff07669d7a23de0ef88d2f7129e7','secre','');

#
# Structure for table "vehiculo"
#

DROP TABLE IF EXISTS `vehiculo`;
CREATE TABLE `vehiculo` (
  `idProducto` smallint(5) unsigned NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `marca` varchar(15) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  `fechaActualizacion` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# Data for table "vehiculo"
#

INSERT INTO `vehiculo` VALUES (1,'Pan',10.99,'',1,'2023-06-17 16:23:16',NULL),(2,'Leche',5.99,'',1,'2023-06-17 16:23:16',NULL);
