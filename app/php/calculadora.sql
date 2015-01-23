SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE IF NOT EXISTS `calcError` (
`id` int(10) unsigned NOT NULL,
  `calculadoraID` int(10) unsigned NOT NULL,
  `errorID` int(10) unsigned NOT NULL,
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `calculadoras` (
`id` int(10) unsigned NOT NULL,
  `operacion` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '-',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `errors` (
`id` int(10) unsigned NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '-',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `resultados` (
`id` int(10) unsigned NOT NULL,
  `calculadoraID` int(10) unsigned NOT NULL,
  `resultado` float(14,4) NOT NULL DEFAULT '0.0000',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(10) unsigned NOT NULL,
  `usuario` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


ALTER TABLE `calcError`
 ADD PRIMARY KEY (`id`), ADD KEY `calculadoraID` (`calculadoraID`), ADD KEY `errorID` (`errorID`);

ALTER TABLE `calculadoras`
 ADD PRIMARY KEY (`id`), ADD KEY `operacion` (`operacion`);

ALTER TABLE `errors`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `resultados`
 ADD PRIMARY KEY (`id`), ADD KEY `resultado` (`resultado`), ADD KEY `calculadoraID` (`calculadoraID`);

ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`);


ALTER TABLE `calcError`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
ALTER TABLE `calculadoras`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
ALTER TABLE `errors`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
ALTER TABLE `resultados`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
ALTER TABLE `usuarios`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;

ALTER TABLE `calcError`
ADD CONSTRAINT `calcError_ibfk_1` FOREIGN KEY (`calculadoraID`) REFERENCES `calculadoras` (`id`) ON UPDATE CASCADE,
ADD CONSTRAINT `calcError_ibfk_2` FOREIGN KEY (`errorID`) REFERENCES `errors` (`id`) ON UPDATE CASCADE;

ALTER TABLE `resultados`
ADD CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`calculadoraID`) REFERENCES `calculadoras` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
