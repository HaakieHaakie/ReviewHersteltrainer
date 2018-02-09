-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 09 feb 2018 om 13:04
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
-- Database: `reviewdehersteltrainer`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reviews`
--

CREATE TABLE `reviews` (
  `id` int(15) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `beoordeling` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `reviews`
--

INSERT INTO `reviews` (`id`, `naam`, `achternaam`, `email`, `review`, `beoordeling`) VALUES
(1, 'erik', 'van der Vegt', 'koperendakje@hotmail.com', 'hallo', 'uitstekend'),
(2, 'Martje', 'van der Vegt', 'm.vandervegt@ziggo.nl', 'Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren \'60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.', 'nietAanbevelen'),
(10, 'Max', 'van der Vegt', 'maxvandervegt@ziggo.nl', 'ik vind dit een leuke site', 'goed'),
(11, 're', 'tr', 'ryt', 'gyygyg', 'uitstekend'),
(12, 're', 'tr', 'ryt@kdcm.nl', 'gyygyg', 'uitstekend'),
(13, 're', 'tr', 'ryt@kdcm.nl', 'gyygyg', 'uitstekend'),
(14, 'qewd', 'wd', '233@sccd.fv', '2322', 'matig'),
(15, 'ew', '322', 'ewfd', '3', 'uitstekend'),
(16, 'ew', 'dfqeew', 'ewfd@ede.nl', '3', 'goed'),
(17, 't4t', 'ttt', 'ttt@rfrre.jk', 'eeeeweeewq', 'matig'),
(18, '4r3q', 'erfer', 'e.vandervegt@ziggo.nl', 'hnyet', 'slecht'),
(19, 'erik', 'van Dam', 'koperendakje@hotmail.com', 'nhb xfdb', 'slecht'),
(20, 'erik', 'van de berg', 'koperendakje@hotmail.com', 'ncc hgc chh ', 'nietAanbevelen'),
(21, 'erik', 'rr', 'koperendakje@hotmail.com', 'nb yntytybebtyebeyt', 'uitstekend'),
(22, 'erik', 'rr', 'koperendakje@hotmail.com', 'nb yntytybebtyebeyt', 'uitstekend'),
(23, 'erik', 'rr', 'koperendakje@hotmail.com', 'nb yntytybebtyebeyt', 'uitstekend'),
(24, 'erik', 'rr', 'koperendakje@hotmail.com', 'nb yntytybebtyebeyt', 'uitstekend'),
(25, 'erik', 'vfvr', 'gggrg@', 'fdvwf', 'goed'),
(26, 'erik', 'vfvr', 'gggrg@f34.y6', 'fdvwf', 'goed'),
(27, 'erik', 'van Dam', 'koperendakje@hotmail.com', 'hoi', 'goed'),
(28, 'erik', 'van der Vegt', 'koperendakje@hotmail.com', 'kgg  ', 'uitstekend'),
(29, 'erik', 'dsccq', 'koperendakje@hotmail.com', 'nkg,', 'goed'),
(30, 'erik', 'dsccq', 'koperendakje@hotmail.com', 'nkg,', 'goed'),
(31, 'erik', 'van de berg', 'koperendakje@hotmail.com', 'dyrg6', 'matig'),
(32, 'erik', 'van Dam', 'koperendakje@hotmail.com', '                <div class=\"item2\">Menu</div>', 'uitstekend'),
(33, 'erik', 'van de berg', 'koperendakje@hotmail.com', '</div>', 'nietAanbevelen'),
(34, 'erik', 'van de berg', 'koperendakje@hotmail.com', '</div>', 'nietAanbevelen'),
(35, 'erik', 'van de berg', 'koperendakje@hotmail.com', '</div>', 'nietAanbevelen'),
(36, 'erik', 'van der Vegt', 'koperendakje@hotmail.com', 'trh467', 'uitstekend'),
(37, 'erik', 'van der Vegt', 'koperendakje@hotmail.com', 'Wat is Lorem Ipsum?\r\nLorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren \'60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.\r\n\r\nWaarom gebruiken we het?\r\nHet is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale verdeling van letters bestaat, in tegenstelling tot \"Hier uw tekst, hier uw tekst\" wat het tot min of meer leesbaar nederlands maakt. Veel desktop publishing pakketten en web pagina editors gebruiken tegenwoordig Lorem Ipsum als hun standaard model tekst, en een zoekopdracht naar \"lorem ipsum\" ontsluit veel websites die nog in aanbouw zijn. Verscheidene versies hebben zich ontwikkeld in de loop van de jaren, soms per ongeluk soms expres (ingevoegde humor en dergelijke).\r\n\r\n\r\nWaar komt het vandaan?\r\nIn tegenstelling tot wat algemeen aangenomen wordt is Lorem Ipsum niet zomaar willekeurige tekst. het heeft zijn wortels in een stuk klassieke latijnse literatuur uit 45 v.Chr. en is dus meer dan 2000 jaar oud. Richard McClintock, een professor latijn aan de Hampden-Sydney College in Virginia, heeft Ã©Ã©n van de meer obscure latijnse woorden, consectetur, uit een Lorem Ipsum passage opgezocht, en heeft tijdens het zoeken naar het woord in de klassieke literatuur de onverdachte bron ontdekt. Lorem Ipsum komt uit de secties 1.10.32 en 1.10.33 van \"de Finibus Bonorum et Malorum\" (De uitersten van goed en kwaad) door Cicero, geschreven in 45 v.Chr. Dit boek is een verhandeling over de theorie der ethiek, erg populair tijdens de renaissance. De eerste regel van Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", komt uit een zin in sectie 1.10.32.\r\n\r\nHet standaard stuk van Lorum Ipsum wat sinds de 16e eeuw wordt gebruikt is hieronder, voor wie er interesse in heeft, weergegeven. Secties 1.10.32 en 1.10.33 van \"de Finibus Bonorum et Malorum\" door Cicero zijn ook weergegeven in hun exacte originele vorm, vergezeld van engelse versies van de 1914 vertaling door H. Rackham.\r\n\r\nWaar kan ik het vinden?\r\nEr zijn vele variaties van passages van Lorem Ipsum beschikbaar maar het merendeel heeft te lijden gehad van wijzigingen in een of andere vorm, door ingevoegde humor of willekeurig gekozen woorden die nog niet half geloofwaardig ogen. Als u een passage uit Lorum Ipsum gaat gebruiken dient u zich ervan te verzekeren dat er niets beschamends midden in de tekst verborgen zit. Alle Lorum Ipsum generators op Internet hebben de eigenschap voorgedefinieerde stukken te herhalen waar nodig zodat dit de eerste echte generator is op internet. Het gebruikt een woordenlijst van 200 latijnse woorden gecombineerd met een handvol zinsstructuur modellen om een Lorum Ipsum te genereren die redelijk overkomt. De gegenereerde Lorum Ipsum is daardoor altijd vrij van herhaling, ingevoegde humor of ongebruikelijke woorden etc.\r\n\r\n\r\n5\r\n	paragrafen\r\n	woorden\r\n	bytes\r\n	lijsten\r\n	Start met \"Lorem\r\nipsum dolor sit amet...\"\r\nGenereer Lorem Ipsum\r\n', 'uitstekend');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
