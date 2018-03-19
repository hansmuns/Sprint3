-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 13 mrt 2018 om 11:04
-- Serverversie: 10.1.30-MariaDB
-- PHP-versie: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info_groep`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `infogroep`
--

CREATE TABLE `infogroep` (
  `ID` int(11) NOT NULL,
  `Naam` varchar(200) DEFAULT NULL,
  `Adres` varchar(200) DEFAULT NULL,
  `Woonplaats` varchar(200) DEFAULT NULL,
  `Hobbies` varchar(200) DEFAULT NULL,
  `Geboortedatum` varchar(200) DEFAULT NULL,
  `Vervoersmiddel` varchar(200) DEFAULT NULL,
  `Bijbaantje` varchar(200) DEFAULT NULL,
  `Vakantieland` varchar(200) DEFAULT NULL,
  `Semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `infogroep`
--

INSERT INTO `infogroep` (`ID`, `Naam`, `Adres`, `Woonplaats`, `Hobbies`, `Geboortedatum`, `Vervoersmiddel`, `Bijbaantje`, `Vakantieland`, `Semester`) VALUES
(1, 'leliefeld	Bas', 'Spaanlaan 12', 'Borne', 'motorcrossen', '18-05-1999', 'Auto', 'souf-chef', 'gran canaria', 2),
(2, 'Ramadan Rami', 'Keppelweg 45', 'Vroomshoop', 'gitaar spelen', '27-06-1998', 'Auto', 'geen', 'spanje', 2),
(3, 'Nijkamp Kevin', 'Kerkerstraat 12', 'Rijssen', 'zwemmen', '30-10-2000', 'Trein', 'Geen', 'Engeland', 2),
(4, 'Gerritzen	Renzo', 'Narsisstraat 51', 'Losser', 'Balisong', '29-11-2000', 'Trein', 'geen', 'Canada', 2),
(5, 'Moerdijk	Sanne', 'Zilverschoon 53', 'Oldenzaal', 'Paardrijden', '16-10-2000', 'Trein', 'Keukenhulp', 'indonesië', 2),
(6, 'Muns	Hans', 'Hessenstraat 7', 'Borculo', 'gitaar spelen', '06-03-2001', 'Bus en trein', 'diervoerder', 'Italië', 2),
(7, 'Öztürk Dogukan', 'Frakertlaan 28', 'Losser', 'Voetballen', '02-04-2001', 'trein', 'Vakkenvuller', 'Japan', 2);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `infogroep`
--
ALTER TABLE `infogroep`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
