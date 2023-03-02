-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1:3307
-- Timp de generare: feb. 18, 2023 la 05:06 PM
-- Versiune server: 10.4.22-MariaDB
-- Versiune PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `library`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `autor`
--

CREATE TABLE `autor` (
  `idAutor` int(11) NOT NULL,
  `Nume` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `autor`
--

INSERT INTO `autor` (`idAutor`, `Nume`) VALUES
(1, 'Stephen King'),
(2, 'Haruki Murakami'),
(3, 'Mircea Eliade'),
(4, 'Jane Austen'),
(5, 'H.P Lovecraft'),
(6, 'Bram Stoker'),
(7, 'Stendhal'),
(8, 'Albert Camus'),
(9, 'Franz Kafka'),
(10, 'Ray Bradbury'),
(11, 'Marc Levy'),
(12, 'James M. Cain'),
(13, 'J.D. Salinger'),
(14, 'George Orwell'),
(15, 'Harper Lee'),
(16, 'Virginia Woolf'),
(17, 'Thomas Mann'),
(18, 'Fyodor Dostoievski');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `carte`
--

CREATE TABLE `carte` (
  `idCarte` int(11) NOT NULL,
  `Titlu` varchar(45) DEFAULT NULL,
  `idAutor` int(11) NOT NULL,
  `Gen` varchar(45) DEFAULT NULL,
  `An_Publicare` int(11) DEFAULT NULL,
  `Nr_Pagini` int(11) DEFAULT NULL,
  `idEditura` int(11) NOT NULL,
  `Pret` int(11) DEFAULT NULL,
  `Limba` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `carte`
--

INSERT INTO `carte` (`idCarte`, `Titlu`, `idAutor`, `Gen`, `An_Publicare`, `Nr_Pagini`, `idEditura`, `Pret`, `Limba`) VALUES
(1, 'Mr. Mercedes', 1, 'Detectiv', 1996, 243, 1, 60, 'Eng'),
(2, 'Pride and Prejudice', 4, 'Romantică', 2016, 384, 2, 10, 'Eng'),
(3, 'The Necronomicon', 5, 'Horror', 2021, 928, 3, 123, 'Eng'),
(4, 'Dracula', 6, 'Horror', 2020, 384, 4, 19, 'Eng'),
(5, 'Maitreyi', 3, 'Romantică', 1933, 175, 5, 15, 'Ro'),
(6, 'The Red and the Black', 7, 'Aventură', 2002, 608, 6, 45, 'Eng'),
(7, 'The Stranger', 8, 'Filozofie', 1989, 144, 2, 65, 'Eng'),
(8, 'Metamorfoza', 9, 'Filozofie', 2012, 192, 7, 19, 'Ro'),
(9, 'Misery', 1, 'Horror', 2020, 356, 1, 26, 'Eng'),
(10, 'Fahrenheit 451', 10, 'SF', 2021, 176, 8, 29, 'Eng'),
(11, 'Pădurea Norvegiană', 2, 'Romantică', 2011, 360, 7, 20, 'Ro'),
(12, 'Kafka pe malul mării', 2, 'Fantastică', 2014, 564, 7, 21, 'Ro'),
(13, 'În altă viață', 11, 'Romantică', 2016, 248, 9, 25, 'Ro'),
(14, 'The postman always rings twice', 12, 'Crimă', 2003, 632, 10, 125, 'Eng'),
(15, 'De veghe în lanul de secară', 13, 'Filozofie', 2016, 280, 7, 27, 'Ro'),
(16, '1984', 14, 'SF', 2021, 432, 5, 14, 'Ro'),
(17, 'To kill a mocking bird', 15, 'Aventură', 2015, 320, 11, 20, 'Eng'),
(18, 'Spre far', 16, 'Detectiv', 2002, 256, 12, 10, 'Ro'),
(19, 'Muntele vrăjit', 17, 'Fantastică', 2014, 1184, 12, 41, 'Ro'),
(20, 'Crimă și pedeapsă', 18, 'Crimă', 2019, 720, 13, 10, 'Ro');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `comenzi`
--

CREATE TABLE `comenzi` (
  `idComenzi` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `Nume` varchar(45) NOT NULL,
  `Prenume` varchar(45) NOT NULL,
  `Oras` varchar(45) NOT NULL,
  `CodPostal` int(11) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Adresa` varchar(45) NOT NULL,
  `bookTitle` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `Data_Comanda` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `editura`
--

CREATE TABLE `editura` (
  `idEditura` int(11) NOT NULL,
  `Nume` varchar(45) DEFAULT NULL,
  `Telefon` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `editura`
--

INSERT INTO `editura` (`idEditura`, `Nume`, `Telefon`) VALUES
(1, 'Nemira', '0728425167'),
(2, 'Vintage', '0727565156'),
(3, 'Gollancz', '0726546487'),
(4, 'Vellant', '0747855217'),
(5, 'Cartex', '0729532147'),
(6, 'Penguin', '0726546547'),
(7, 'Polirom', '0764544452'),
(8, 'ART', '0728423477'),
(9, 'Trei', '0726465472'),
(10, 'Everyman Library', '0725647513'),
(11, 'Cornerstone', '0787984789'),
(12, 'RAO', '0724889512'),
(13, 'Litera', '0754654657');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `idUserCart` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `bookTitle` varchar(45) DEFAULT NULL,
  `bookAuthor` varchar(45) DEFAULT NULL,
  `bookPrice` varchar(45) DEFAULT NULL,
  `logged` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `logged` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`idUser`, `username`, `password`, `email`, `logged`) VALUES
(1, 'crys28', 'crys28', 'cristian_iacomachi@yahoo.com', 0);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`idAutor`);

--
-- Indexuri pentru tabele `carte`
--
ALTER TABLE `carte`
  ADD PRIMARY KEY (`idCarte`),
  ADD KEY `idEditura_idx` (`idEditura`),
  ADD KEY `idAutor_idx` (`idAutor`);

--
-- Indexuri pentru tabele `comenzi`
--
ALTER TABLE `comenzi`
  ADD PRIMARY KEY (`idComenzi`);

--
-- Indexuri pentru tabele `editura`
--
ALTER TABLE `editura`
  ADD PRIMARY KEY (`idEditura`);

--
-- Indexuri pentru tabele `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`idUserCart`);

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `comenzi`
--
ALTER TABLE `comenzi`
  MODIFY `idComenzi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pentru tabele `shoppingcart`
--
ALTER TABLE `shoppingcart`
  MODIFY `idUserCart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constrângeri pentru tabele eliminate
--

--
-- Constrângeri pentru tabele `carte`
--
ALTER TABLE `carte`
  ADD CONSTRAINT `idAutor` FOREIGN KEY (`idAutor`) REFERENCES `autor` (`idAutor`),
  ADD CONSTRAINT `idEditura` FOREIGN KEY (`idEditura`) REFERENCES `editura` (`idEditura`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
