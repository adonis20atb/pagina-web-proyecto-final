-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2025 a las 01:57:56
-- Versión del servidor: 9.2.0
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `nombre` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `mensaje` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(55,0) NOT NULL,
  `imagen` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int DEFAULT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `contraseña`) VALUES
(NULL, 'waDA', 'Valentina@gmail.com', '$2y$10$DsCfryegU/tKZ25RMSCAWOGEMpqEacHpfKNOqO32AhgJQjA.kHmQe'),
(NULL, 'waDAgfgfg', 'Valentina@gmail.com', '$2y$10$YSnbWVtpNr9M2ay.Amk3iOhv5P4jA8MW3ZVVV2YDiG3DJ9lSwToVi'),
(NULL, 'wadonis', 'adonis004008@gmail.com', '$2y$10$RJL2u3Y0YCjzcvzg4vAEi.Iw/A/HZBEXVd24EJDLjEGlgv3Q2fio.'),
(NULL, 'waDA', 'Valentina@gmail.com', '$2y$10$OzeUu2mImGw6stswsBJmuODSyEPUdz0SwNYsEb1Z1HRVxBkgM.LTS'),
(NULL, 'aa', 'Valentina@gmail.com', '$2y$10$nZF3Z3jYmqE8Awifr5o7OOXrbZ8RJtOkGT2GVw/d8ivrkCrUHqwrm'),
(NULL, 'adonis', 'Valentina@gmail.com', '$2y$10$d0s.ozQUwiiPS9d1Isqx.ubxULU6elf7PMA5y76GHvuSTGyXblD3m'),
(NULL, 'adonis', 'Valentina@gmail.com', '$2y$10$Zt5OneYFUNi9V0XfCYF2yOLfkpv.BFQPObYkMNmFtC0b8JBaEpuHW'),
(NULL, 'adonis', 'Valentina@gmail.com', '$2y$10$nAdtio/N79zXpjnlXlYfDuawTxFZYop649UUlf6gtTQZzfPY9UDp6'),
(NULL, '', '', '$2y$10$zsU5xozYANfnRrgeaPpnxOqi.2b8qyGhmuHY2YTHuiqxkizm2Q5vC'),
(NULL, 'ad@gamil.com', 'Valentina@gmail.com', '$2y$10$NPBYkqWqcnhf5EeIapkhg.UK8XTbx7BojSUbGyBXGbz0QoNCEAL3.'),
(NULL, 'waDA', 'Valentina@gmail.com', '$2y$10$jSYWXAXTp7R7OtwF69mvXuI7MD4JOBq3Xfy4LjqqSdNmyR95.0.BW'),
(NULL, 'adonis', 'admin@gmail.com', '$2y$10$igobBFWbpVwc0qJMAzBYZOX5aBIpiPXSzP3Hx0D36rftjbNI2Ok.C'),
(NULL, 'adonis', 'admin@adonis.com', '$2y$10$fIMfKOw9AFJ73LuPbXT8j.xIH8gx6/Wf/.211zWh8ViUhqUK6dAwC'),
(NULL, 'adonis', 'admin@adonis.com', '$2y$10$vsK7spQhqZ.sTCF5XROJuukwA8yxCuJJEdIFDHlmerAhHSOyTh4O.'),
(NULL, 'adonis', 'admin@adonis.com', '$2y$10$yhiGryJzLFPECwCPD9lvLOiP6Jz3vkj9rAidr9UrQgf5rBhx4yLpe'),
(NULL, 'galletas', 'admin@adonis.com', '$2y$10$ru/ra4pAFryIUUd0B.wC/e0jEFfCL/gnoFZK3w8h5pXP5U0dOKdGu'),
(NULL, 'galletas', 'admin@adonis.com', '$2y$10$SMKxJht55MjuVDnrVbaQPeGtUnmhUiQxeo562/FkAjdBCRaxpnvje'),
(NULL, 'adonis', 'Valentina@gmail.com', '$2y$10$Fpc1aflCrdWJON2iutKjiOw8PpemYfdVeYY1geisThBaTQiOuAvp6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
