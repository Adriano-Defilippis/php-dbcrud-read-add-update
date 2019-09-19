-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Creato il: Set 19, 2019 alle 23:00
-- Versione del server: 5.7.24
-- Versione PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pubool`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `menu_prodotti`
--

CREATE TABLE `menu_prodotti` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `prezzo` decimal(6,2) NOT NULL,
  `data_scadenza` date DEFAULT NULL,
  `category_prod` varchar(30) DEFAULT 'bevanda'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `menu_prodotti`
--

INSERT INTO `menu_prodotti` (`id`, `nome`, `marca`, `prezzo`, `data_scadenza`, `category_prod`) VALUES
(1, 'prosecco', 'asti', '2.50', '2020-03-18', 'vini'),
(3, 'birra-cruda', 'icknusa', '3.00', '2020-01-16', 'birre'),
(5, 'estratto-ananas', 'valfrutta', '2.00', '2019-12-13', 'succhi'),
(7, 'estratto-ananas', 'valfrutta', '2.00', '2019-12-13', 'succhi'),
(8, 'dddd', 'dsadadf', '3.00', NULL, 'vini'),
(9, 'dddd', 'dsadadf', '3.00', NULL, 'vini'),
(10, 'aaaa', 'aaaa', '45.00', '2020-05-05', 'bevanda'),
(11, 'merlot', 'francia', '4.00', '2020-05-05', 'vini'),
(12, 'ciao', 'ariciao', '34.00', '2018-06-08', 'bevanda'),
(13, 'birra chiara', 'peroni', '1.50', '2019-06-08', 'birre');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `menu_prodotti`
--
ALTER TABLE `menu_prodotti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `menu_prodotti`
--
ALTER TABLE `menu_prodotti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
