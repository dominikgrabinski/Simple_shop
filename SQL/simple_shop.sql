-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 31 Mar 2017, 13:31
-- Wersja serwera: 5.7.16
-- Wersja PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `simple_shop`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Admin`
--

CREATE TABLE `Admin` (
  `id` int(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Magazine`
--

CREATE TABLE `Magazine` (
  `id` int(255) NOT NULL,
  `Products_id` int(255) NOT NULL,
  `Orders_id` int(255) NOT NULL,
  `dostepnosc` varchar(20) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `liczba_w_magazynie` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Orders`
--

CREATE TABLE `Orders` (
  `id` int(255) NOT NULL,
  `User_id` int(255) NOT NULL,
  `Status_id` int(255) NOT NULL,
  `adres_zamownienia` varchar(255) NOT NULL,
  `suma_do_zaplaty` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Products`
--

CREATE TABLE `Products` (
  `id` int(11) NOT NULL,
  `tytul` varchar(255) NOT NULL,
  `platforma` varchar(50) NOT NULL,
  `gatunek` varchar(30) NOT NULL,
  `opis` longtext NOT NULL,
  `cena` decimal(5,2) NOT NULL,
  `kategoria_wiekowa` varchar(30) NOT NULL,
  `wydawca` varchar(50) NOT NULL,
  `jezyk` varchar(20) NOT NULL,
  `data_premiery` date NOT NULL,
  `promocja` varchar(50) NOT NULL,
  `edycja` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `Products`
--

INSERT INTO `Products` (`id`, `tytul`, `platforma`, `gatunek`, `opis`, `cena`, `kategoria_wiekowa`, `wydawca`, `jezyk`, `data_premiery`, `promocja`, `edycja`) VALUES
(1, 'Diablo', 'PS4', 'Akcja', 'Wydanie Ultimate Evil Edition zawiera pełną wersję gry Diablo III oraz rozszerzenie Reaper of Souls. Szykuj się – nadciąga coś naprawdę straszliwego. \r\n\r\nWezwij swoich sojuszników – Graj w pojedynkę lub skrzyknij znajomych i stwórz drużynę złożoną z nawet czterech bohaterów — grających lokalnie na jednym ekranie albo w sieci, za pośrednictwem usługi PlayStation Network lub Xbox Live.\r\nZostań legendarnym bohaterem – Wciel się w jednego z ostatnich obrońców ludzkości — krzyżowca, barbarzyńcę, szamana, mnicha, łowczynię demonów lub czarownicę — i rozwijaj swoją postać, zdobywając legendarne skarby oraz opanowując nowe, niszczycielskie moce i zdolności.\r\nPrzerwij demoniczne oblężenie – Siej spustoszenie w szeregach sług zła i poznaj fabułę Diablo III na przestrzeni wszystkich pięciu aktów; przemierzaj otwarty świat w trybie przygodowym lub poluj na pradawne demony i potwory, które czają się w mrocznych ostępach krain śmiertelników.', '119.99', '16+', 'Blizzard Enterteinment', 'Polski', '2012-05-12', 'tak', 'zwykła'),
(2, 'Fifa17', 'Ps4', 'Sportowa', 'xxx', '169.99', '3+', 'Electronic Arts', 'Polski', '2016-10-16', 'Nie', 'zwykła');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Status`
--

CREATE TABLE `Status` (
  `id` int(255) NOT NULL,
  `status_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `first_login_date` datetime NOT NULL,
  `last_login_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `Users`
--

INSERT INTO `Users` (`id`, `name`, `email`, `password`, `salt`, `first_login_date`, `last_login_date`) VALUES
(2, 'Janusz', 'Janusz@janusz.pl', '1eac2457beaf09612bfb9674afd415662926ab40454a10ac9b2c321978b62456', 'xxx', '2017-03-29 15:51:31', '2017-03-29 19:54:12'),
(9, '', 'zz', '4a60bf7d4bc1e485744cf7e8d0860524752fca1ce42331be7c439fd23043f151', '', '2017-03-29 19:32:50', '2017-03-29 19:32:50'),
(12, '', 'tomek', 'a6bbc4b66450dd5910cbdf7f914792e63ba52418817765095952bfea7b751d70', '', '2017-03-29 19:35:05', '2017-03-29 19:35:05'),
(13, '', 'dupa', '4b227777d4dd1fc61c6f884f48641d02b4d121d3fd328cb08b5531fcacdabf8a', '4b062e70d8b471ab7a93e8d244b6fd03e3e0a165f1008ffb5ed51a0dbc5f3e43', '2017-03-29 20:14:50', '2017-03-29 20:33:44'),
(14, '', 'xx', 'ab42081446e87db130555f711ae7d15373c81663a4b618aca776607ecb7b22e8', '37598cb65b7f8ff2588cafc363597d4f956a32dc2653fbc937cdea048750092d', '2017-03-29 20:35:02', '2017-03-31 12:32:18'),
(15, '', 'dlugihujekdlugi1@wp.pl', 'f52105ff5c8333432eb3ffbb02f27fe05c0e2cee41a7fe5107c5d3f0e7ab0115', '7e3ddda87f1fde92d36f967734720f9edd3044483b17bb6abf1dbb7da4486d8c', '2017-03-29 20:49:47', '2017-03-29 20:50:08');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `verified_user`
--

CREATE TABLE `verified_user` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `verify`
--

CREATE TABLE `verify` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `code` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `Admin` ADD FULLTEXT KEY `email` (`email`);

--
-- Indexes for table `Magazine`
--
ALTER TABLE `Magazine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Products_id` (`Products_id`),
  ADD KEY `Orders_id` (`Orders_id`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `User_id` (`User_id`),
  ADD KEY `Status_id` (`Status_id`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Status`
--
ALTER TABLE `Status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `verified_user`
--
ALTER TABLE `verified_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verify`
--
ALTER TABLE `verify`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `Admin`
--
ALTER TABLE `Admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `Magazine`
--
ALTER TABLE `Magazine`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `Orders`
--
ALTER TABLE `Orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `Products`
--
ALTER TABLE `Products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `Status`
--
ALTER TABLE `Status`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT dla tabeli `verified_user`
--
ALTER TABLE `verified_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT dla tabeli `verify`
--
ALTER TABLE `verify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `Magazine`
--
ALTER TABLE `Magazine`
  ADD CONSTRAINT `Magazine_ibfk_1` FOREIGN KEY (`Products_id`) REFERENCES `Products` (`id`),
  ADD CONSTRAINT `Magazine_ibfk_2` FOREIGN KEY (`Orders_id`) REFERENCES `Orders` (`id`);

--
-- Ograniczenia dla tabeli `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `Orders_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `Users` (`id`),
  ADD CONSTRAINT `Orders_ibfk_2` FOREIGN KEY (`Status_id`) REFERENCES `Status` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
