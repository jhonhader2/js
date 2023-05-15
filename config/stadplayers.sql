-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.4.0.6659
-- --------------------------------------------------------
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET NAMES utf8 */
;

/*!50503 SET NAMES utf8mb4 */
;

/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */
;

/*!40103 SET TIME_ZONE='+00:00' */
;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */
;

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */
;

/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */
;

-- Volcando estructura de base de datos para stadplayers
DROP DATABASE IF EXISTS `stadplayers`;

CREATE DATABASE IF NOT EXISTS `stadplayers`
/*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci */
/*!80016 DEFAULT ENCRYPTION='N' */
;

USE `stadplayers`;

-- Volcando estructura para tabla stadplayers.estadisticas
DROP TABLE IF EXISTS `estadisticas`;

CREATE TABLE IF NOT EXISTS `estadisticas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8mb4_spanish2_ci,
  `valor` int DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 6 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_spanish2_ci;

-- Volcando datos para la tabla stadplayers.estadisticas: ~4 rows (aproximadamente)
DELETE FROM
  `estadisticas`;

INSERT INTO
  `estadisticas` (`id`, `nombre`, `valor`)
VALUES
  (2, 'Faltas', 3),
  (3, 'Gol de Cabeza', 1),
  (4, 'Gol de Chilena', 2),
  (5, 'Autogol', 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */
;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */
;

/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */
;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */
;