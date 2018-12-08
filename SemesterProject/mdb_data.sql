-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 07:16 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mdb_data`
--
CREATE DATABASE IF NOT EXISTS `mdb_data` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mdb_data`;

-- --------------------------------------------------------

--
-- Table structure for table `ArtistData`
--

CREATE TABLE `ArtistData` (
  `Artists` varchar(20) NOT NULL,
  `Albums` varchar(20) NOT NULL,
  `Genre` varchar(20) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ArtistData`
--

INSERT INTO `ArtistData` (`Artists`, `Albums`, `Genre`) VALUES
('Elvis Presley', 'Elvis Presley', "Rock 'N' Roll"),
('Elvis Presley', "Elvis' Christmas Album", "Rock 'N' Roll"),
('Elvis Presley', 'Pot Luck', "Rock 'N' Roll"),
('Elvis Presley', 'Good Times', "Rock 'N' Roll"),
('Elvis Presley', 'Promised Land', "Rock 'N' Roll"),

('Drake', 'Take Care', "Hip Hop"),
('Drake', 'Nothing Was The Same', "Hip Hop"),
('Drake', 'Scorpion', "Hip Hop"),
('Drake', 'Views', "Hip Hop"),
('Drake', 'Young & Successful', "Hip Hop"),

('Michael Jackson', 'Off the Wall', "Pop"),
('Michael Jackson', 'Thriller', "Pop"),
('Michael Jackson', 'Bad', "Pop"),
('Michael Jackson', 'Dangerous', "Pop"),
('Michael Jackson', 'Invincible', "Pop"),

('Nicki Minaj', 'Pink Friday', "Hip Hop"),
('Nicki Minaj', 'Pink Friday: Roman Reloaded', "Hip Hop"),
('Nicki Minaj', 'The Pinkprint', "Hip Hop"),
('Nicki Minaj', 'Queen', "Hip Hop"),

('Jimi Hendrix', 'The Cry of Love', "Rock"),
('Jimi Hendrix', 'War Heroes', "Rock"),
('Jimi Hendrix', 'Crash Landing', "Rock"),
('Jimi Hendrix', 'First Rays of the New Rising Sun', "Rock"),
('Jimi Hendrix', 'Valleys of Neptune', "Rock"),

('Alvin and the Chipmunks', 'When You Wish Upon a Chipmunk', "Children's music"),
('Alvin and the Chipmunks', 'Merry Christmas from the Chipmunks', "Children's music"),
('Alvin and the Chipmunks', 'Undeniable', "Children's music"),
('Alvin and the Chipmunks', 'Christmas with The Chipmunks', "Children's music"),
('Alvin and the Chipmunks', 'Christmas with THe Chipmunks, Volume 2', "Children's music");
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;