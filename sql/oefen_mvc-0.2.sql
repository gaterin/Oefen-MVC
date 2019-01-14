-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 15 jan 2019 om 00:42
-- Serverversie: 10.1.36-MariaDB
-- PHP-versie: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oefen_mvc`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `locations`
--

CREATE TABLE `locations` (
  `locationId` int(11) NOT NULL,
  `locationName` varchar(24) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `locations`
--

INSERT INTO `locations` (`locationId`, `locationName`) VALUES
(1, 'Delft'),
(2, 'Utrecht'),
(3, 'Overvecht');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `productName` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `productPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`productId`, `productName`, `productPrice`) VALUES
(1, 'Banana', 0.25),
(3, 'Strawberry', 0.15),
(4, 'Grape', 0.55),
(5, 'Watermelon', 1.25),
(6, 'Orange', 0.56),
(7, 'Cherry', 69.69);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `stock`
--

CREATE TABLE `stock` (
  `amountInStock` int(11) NOT NULL,
  `locationId` int(11) NOT NULL,
  `productId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `stock`
--

INSERT INTO `stock` (`amountInStock`, `locationId`, `productId`) VALUES
(57, 1, 1),
(899, 1, 3),
(23, 1, 6),
(60, 1, 7),
(567, 2, 4),
(35, 2, 5),
(32, 2, 6),
(75, 2, 7);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `userroles`
--

CREATE TABLE `userroles` (
  `userRoleId` int(11) NOT NULL,
  `userRoleName` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `userroles`
--

INSERT INTO `userroles` (`userRoleId`, `userRoleName`) VALUES
(1, 'admin'),
(2, 'manager');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` varchar(24) DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL,
  `userRoleId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`userId`, `username`, `password`, `userRoleId`) VALUES
(1, 'admin', 'admin', 1),
(2, 'manager', 'manager', 2);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`locationId`);

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Indexen voor tabel `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`locationId`,`productId`),
  ADD KEY `stockProduct` (`productId`);

--
-- Indexen voor tabel `userroles`
--
ALTER TABLE `userroles`
  ADD PRIMARY KEY (`userRoleId`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `userRoleId` (`userRoleId`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `locations`
--
ALTER TABLE `locations`
  MODIFY `locationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `userroles`
--
ALTER TABLE `userroles`
  MODIFY `userRoleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stockLocation` FOREIGN KEY (`locationId`) REFERENCES `locations` (`locationId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stockProduct` FOREIGN KEY (`productId`) REFERENCES `products` (`productId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `userRoleId` FOREIGN KEY (`userRoleId`) REFERENCES `userroles` (`userRoleId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
