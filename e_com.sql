-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 27, 2019 at 09:16 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `achat`
--

DROP TABLE IF EXISTS `achat`;
CREATE TABLE IF NOT EXISTS `achat` (
  `numb` int(5) NOT NULL AUTO_INCREMENT,
  `Game_id` int(5) NOT NULL,
  `User_id` int(5) NOT NULL,
  PRIMARY KEY (`numb`),
  KEY `Game_id` (`Game_id`),
  KEY `User_id` (`User_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achat`
--

INSERT INTO `achat` (`numb`, `Game_id`, `User_id`) VALUES
(1, 1, 3),
(2, 1, 4),
(3, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `id_game` int(5) NOT NULL AUTO_INCREMENT,
  `Game_N` varchar(25) NOT NULL,
  `Price` int(3) NOT NULL,
  `Genre` varchar(25) NOT NULL,
  `Platform` varchar(25) NOT NULL,
  PRIMARY KEY (`id_game`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id_game`, `Game_N`, `Price`, `Genre`, `Platform`) VALUES
(1, 'Assassins Creed IV', 100, 'Adventure', 'Playstation4'),
(2, 'State Of Decay', 55, 'Horror', 'PC'),
(3, 'Drakensang', 35, 'RPG', 'PC'),
(4, 'UnderRail', 35, 'Horror', 'PC'),
(5, 'Mordheim', 40, 'Puzzle', 'PC'),
(6, 'Star Control : Origins', 50, 'Action', 'PC'),
(7, 'Niffelheim', 60, 'Action', 'Playstation4'),
(8, 'Tropico 6', 40, 'Puzzle', 'Playstation4'),
(9, 'At The Gates', 55, 'Puzzle', 'PC'),
(10, 'Ace Combat', 25, 'Puzzle', 'Playstation4'),
(11, 'Ape Out', 55, 'Mystery', 'PC'),
(12, 'Enter The Gungeon', 30, 'Horror', 'Playstation4');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `First_N` varchar(25) NOT NULL,
  `Last_N` varchar(25) NOT NULL,
  `Adresse` varchar(50) NOT NULL,
  `Phone` int(8) NOT NULL,
  `User_N` varchar(25) NOT NULL,
  `Passw` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `User_N` (`User_N`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `First_N`, `Last_N`, `Adresse`, `Phone`, `User_N`, `Passw`, `Email`) VALUES
(1, 'el behi', 'seifeddine', 'rue hsairia,nabeul', 50812600, 'seisoun', 'seisoun5', 'seifeddineelbehi@gmail.com'),
(2, 'mensi', 'ghaith', 'fochene', 52509447, 'MEN_C', 'ghaith', 'ghaithmensi@gmail.com'),
(3, 'bessaker', 'anas', 'tunis', 89955447, 'Paranox', 'saif', 'anas@outlook.com'),
(4, 'yessine el behi', 'ahmed', 'nabeul', 21500740, 'ahmedou', 'ahmed', 'ahmedou2411@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `achat`
--
ALTER TABLE `achat`
  ADD CONSTRAINT `game_id_fk` FOREIGN KEY (`Game_id`) REFERENCES `games` (`id_game`),
  ADD CONSTRAINT `log_id_fk` FOREIGN KEY (`User_id`) REFERENCES `login` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
