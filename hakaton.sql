-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2014 at 04:37 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hakaton`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `correct` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `question_id` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `question_id` (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=65 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `description`, `correct`, `question_id`) VALUES
(1, '4', '1', 1),
(2, '3', '0', 1),
(3, 'Nema je', '0', 2),
(4, 'Bolje da ne znas', '1', 2),
(5, 'Penguin', '0', 3),
(6, 'Parrot', '1', 3),
(7, 'Puffin', '0', 3),
(8, 'Partridge', '0', 3),
(9, 'Will', '1', 4),
(10, 'Shall', '0', 4),
(11, 'Would', '0', 4),
(12, 'Should', '0', 4),
(13, 'Gun', '1', 5),
(14, 'Tooth', '0', 5),
(15, 'Delicious', '0', 5),
(16, 'Eagle', '0', 5),
(17, 'Apricot', '0', 6),
(18, 'Mango', '0', 6),
(19, 'Grapefruit', '0', 6),
(20, 'Plum', '1', 6),
(21, 'Ice hockey', '0', 7),
(22, 'Basketball', '0', 7),
(23, 'Tug of war', '1', 7),
(24, 'Polo', '0', 7),
(25, 'On his hands', '0', 8),
(26, 'On his arms', '0', 8),
(27, 'On his legs', '1', 8),
(28, 'On his head', '0', 8),
(29, 'Taurus', '0', 9),
(30, 'Capricorn', '0', 9),
(31, 'Aries', '0', 9),
(32, 'Aquarius', '1', 9),
(33, 'Ecuador', '0', 10),
(34, 'Morocco', '0', 10),
(35, 'Nepal', '1', 10),
(36, 'Russia', '0', 10),
(37, 'Northern Ireland', '0', 11),
(38, 'Scotland', '1', 11),
(39, 'England', '0', 11),
(40, 'Wales', '0', 11),
(41, 'Ranulph Fiennes', '0', 12),
(42, 'Nelson Mandela', '1', 12),
(43, 'Mikhail Gorbachev', '0', 12),
(44, 'Mother Teresa', '0', 12),
(45, 'Germany', '0', 13),
(46, 'Holland', '0', 13),
(47, 'Belgium', '1', 13),
(48, 'Austria', '0', 13),
(49, 'Dog', '0', 14),
(50, 'Tiger', '0', 14),
(51, 'Bear', '1', 14),
(52, 'Clown', '0', 14),
(53, 'Octopus', '0', 15),
(54, 'Pigeon', '1', 15),
(55, 'Salmon', '0', 15),
(56, 'Horse', '0', 15),
(57, 'St John', '0', 16),
(58, 'St James', '1', 16),
(59, 'St Peter', '0', 16),
(60, 'St Benedict', '0', 16),
(61, 'Henry I', '0', 17),
(62, 'Henry V', '0', 17),
(63, 'Henry II', '1', 17),
(64, 'Richard I', '0', 17);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject_id` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `description`, `subject_id`) VALUES
(1, 'Koliko je 2 + 2 ?', 2),
(2, 'Razlika izmedju plate i novca ?', 1),
(3, 'Complete this phrase. As sick as a...', 3),
(4, 'Which legal document states a person''s wishes regarding the disposal of their property after death?', 3),
(5, 'Complete the title of the James Bond film The Man With The Golden...', 3),
(6, 'Which of these fruits shares its name with something superior or desirable?', 3),
(7, 'In which sport do two teams pull at the opposite ends of a rope?', 3),
(8, 'Where would a cowboy wear his chaps?', 3),
(9, 'Which of these zodiac signs is not represented by an animal that grows horns?', 3),
(10, 'Sherpas and Gurkhas are native to which country?', 3),
(11, 'Prime Minister Tony Blair was born in which country?', 3),
(12, 'Whose autobiography has the title A Long Walk To Freedom?', 3),
(13, 'Duffle coats are named after a town in which country?', 3),
(14, 'Complete this stage instruction in Shakespeare''s The Winter''s Tale: "Exit, pursued by a ..."', 3),
(15, 'The young of which creature is known as a squab?', 3),
(16, 'Who is the patron saint of Spain?', 3),
(17, 'Which king was married to Eleanor of Aquitaine?', 3);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `description`) VALUES
(1, 'Ekonomija', ''),
(2, 'Matematika', ''),
(3, 'Millionaire', 'Questions from who wants to be a millionaire');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `gender` enum('f','m') COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `g_likes` int(255) NOT NULL DEFAULT '0',
  `g_dislikes` int(255) NOT NULL DEFAULT '0',
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
