-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 23 nov 2015 om 08:55
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `am1a_2015_loginregistration`
--
CREATE DATABASE IF NOT EXISTS `am1a_2015_loginregistration` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `am1a_2015_loginregistration`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `infix` varchar(50) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(400) NOT NULL,
  `activation` enum('true','false') NOT NULL DEFAULT 'false',
  `password` varchar(32) NOT NULL,
  `userrole` enum('root','administrator','customer','developer') NOT NULL DEFAULT 'customer',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `firstname`, `infix`, `lastname`, `email`, `activation`, `password`, `userrole`) VALUES
(1, 'Bert', 'de', 'Vries', 'root@gmail.com', 'true', 'e8636ea013e682faf61f56ce1cb1ab5c', 'root'),
(2, 'Arjan', 'de', 'Ruijter', 'developer@gmail.com', 'true', 'e8636ea013e682faf61f56ce1cb1ab5c', 'developer'),
(3, 'Ruud', 'van', 'Staden', 'administrator@gmail.com', 'true', 'e8636ea013e682faf61f56ce1cb1ab5c', 'administrator'),
(4, 'Sandra', 'de', 'Bok', 'customer@gmail.com', 'true', 'e8636ea013e682faf61f56ce1cb1ab5c', 'customer'),
(5, 'niiet', 'ge', 'activeerd', 'notactivated@gmail.com', 'true', 'e8636ea013e682faf61f56ce1cb1ab5c', 'customer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
