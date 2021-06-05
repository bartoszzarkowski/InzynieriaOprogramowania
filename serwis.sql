-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Cze 2021, 00:17
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `serwis`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `ID_klienta` int(10) NOT NULL,
  `Imie` varchar(24) COLLATE utf8_polish_ci NOT NULL,
  `Nazwisko` varchar(24) COLLATE utf8_polish_ci NOT NULL,
  `E_mail` varchar(24) COLLATE utf8_polish_ci NOT NULL,
  `Nr_telefonu` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`ID_klienta`, `Imie`, `Nazwisko`, `E_mail`, `Nr_telefonu`) VALUES
(1, 'Jan', 'Kowalski', 'jkowalski@wp.pl', 999999999),
(2, 'Andrzej', 'Nowak', 'anowak@wp.pl', 555555555),
(3, 'Tadeusz', 'Kościuszko', 'tkosciuszko@wp.pl', 111111111),
(4, 'Adam', 'Mickiewicz', 'amickiewicz@wp.pl', 222222222),
(5, 'Jan', 'Fasola', 'jfasola@wp.pl', 333333333),
(6, 'Michal', 'Materla', 'mmaterla@wp.pl', 777777777),
(7, 'Marcin', 'Maj', 'mmaj@wp.pl', 444444444),
(8, 'Ambroży', 'Kleks', 'akleks@wp.pl', 888888888),
(9, 'Mariusz', 'Kwiecień', 'mkwiecien@wp.pl', 666666666);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `serwisy`
--

CREATE TABLE `serwisy` (
  `ID_serwisu` int(10) NOT NULL,
  `ID_uzytkownika` int(10) DEFAULT NULL,
  `ID_klienta` int(10) DEFAULT NULL,
  `Data_przyjecia` date NOT NULL,
  `Status` varchar(16) COLLATE utf8_polish_ci NOT NULL DEFAULT 'Oczekujące',
  `Priorytet` int(1) NOT NULL,
  `Opis` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `Szacowana_kwota` float NOT NULL,
  `Cena_uslugi` float DEFAULT NULL,
  `Cena_podzespolow` float DEFAULT NULL,
  `Cena_calkowita` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `serwisy`
--

INSERT INTO `serwisy` (`ID_serwisu`, `ID_uzytkownika`, `ID_klienta`, `Data_przyjecia`, `Status`, `Priorytet`, `Opis`, `Szacowana_kwota`, `Cena_uslugi`, `Cena_podzespolow`, `Cena_calkowita`) VALUES
(1, 2, 1, '2021-06-04', 'Oczekujące', 1, 'Nie włącza się, sprawdzić dysk twardy', 60, NULL, NULL, NULL),
(2, 2, 2, '2021-06-05', 'Do_odebrania', 1, 'Uszkodzone zawiasy, wymienić na nowe.', 150, 150, 50, 250),
(3, 2, 3, '2021-06-05', 'Oczekujące', 5, 'Wymienić baterię jak najszybciej', 200, NULL, NULL, NULL),
(4, 2, 4, '2021-06-05', 'Oczekujące', 1, 'Uszkodzony wyświetlacz.', 300, NULL, NULL, NULL),
(5, 2, 7, '2021-06-06', 'Oczekujące', 1, 'Wymiana klawiatury.', 150, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `ID_uzytkownika` int(10) NOT NULL,
  `Imie` varchar(24) COLLATE utf8_polish_ci NOT NULL,
  `Nazwisko` varchar(24) COLLATE utf8_polish_ci NOT NULL,
  `E_mail` varchar(24) COLLATE utf8_polish_ci NOT NULL,
  `Haslo` varchar(24) COLLATE utf8_polish_ci NOT NULL,
  `Nr_telefonu` int(9) NOT NULL,
  `Uprawnienia` varchar(24) COLLATE utf8_polish_ci NOT NULL DEFAULT 'Serwisant'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`ID_uzytkownika`, `Imie`, `Nazwisko`, `E_mail`, `Haslo`, `Nr_telefonu`, `Uprawnienia`) VALUES
(1, 'Piotr', 'Nowak', 'pnowak@wp.pl', '12345678', 123456789, 'Administrator'),
(2, 'Adam', 'Kowalski', 'akowalski@wp.pl', '87654321', 987654321, 'Serwisant');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`ID_klienta`);

--
-- Indeksy dla tabeli `serwisy`
--
ALTER TABLE `serwisy`
  ADD PRIMARY KEY (`ID_serwisu`),
  ADD KEY `ID_uzytkownika` (`ID_uzytkownika`),
  ADD KEY `ID_klienta` (`ID_klienta`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`ID_uzytkownika`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `ID_klienta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `serwisy`
--
ALTER TABLE `serwisy`
  MODIFY `ID_serwisu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `ID_uzytkownika` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `serwisy`
--
ALTER TABLE `serwisy`
  ADD CONSTRAINT `serwisy_ibfk_1` FOREIGN KEY (`ID_uzytkownika`) REFERENCES `uzytkownicy` (`ID_uzytkownika`),
  ADD CONSTRAINT `serwisy_ibfk_2` FOREIGN KEY (`ID_klienta`) REFERENCES `klienci` (`ID_klienta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
