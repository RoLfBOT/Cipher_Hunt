-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2017 at 10:36 AM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cipher`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `QuestionID` int(3) NOT NULL,
  `Question` varchar(5000) NOT NULL,
  `Solution` varchar(1000) NOT NULL,
  `QuestionLevel` int(3) NOT NULL,
  `Score` int(3) NOT NULL DEFAULT '10',
  `HINT1` varchar(800) NOT NULL,
  `HINT2` varchar(800) NOT NULL,
  `HINT3` varchar(800) NOT NULL,
  `StartTime` timestamp NULL DEFAULT NULL,
  `Hint1Time` timestamp NULL DEFAULT NULL,
  `Hint2Time` timestamp NULL DEFAULT NULL,
  `Hint3Time` timestamp NULL DEFAULT NULL,
  `EndTime` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`QuestionID`, `Question`, `Solution`, `QuestionLevel`, `Score`, `HINT1`, `HINT2`, `HINT3`, `StartTime`, `Hint1Time`, `Hint2Time`, `Hint3Time`, `EndTime`) VALUES
(1, 'NOIT       ITEP   MOCS   IHTN    IPEE    DEVL    EDTS\nUMUO   YEUL   CTXE    NEHT   ROFE   NILE     HTFO \nDNEE     HTTA   DNUO   FEBL   LIWR   EVLI      SEHT. YOUR TASK IS TO FIND OUT THE 22ND WORD OF THE CRYPT.', 'COMPETITION', 0, 20, 'RIGHT IS WRONG AND WRONG IS RIGHT.', 'HOLY QURAN IS ONE OF THE BEST BOOKS TO READ', 'JUST LEARN HOW TO READ ARABIC', '2017-10-31 06:30:00', '2017-10-31 08:30:00', '2017-10-31 09:30:00', '2017-10-31 10:30:00', '2017-10-31 11:30:00'),
(52, 'GSVHROE VIXZMYV ULFMWRM GSVLOWL\nPGIVVYB GSVNVZW WLDNROO.\n\nYOUR TASK IS TO FIND OUT THE 13TH WORD OF THE CRYPT.', 'MEADOW', 1, 20, 'THE METHOD', 'THIS CIPHER HAS NO KEY', 'WRITE THE ALPHABET ON A PAPER. FLIP IT. YOU HAVE THE ANSWER', '2017-10-31 11:30:00', '2017-10-31 13:30:00', '2017-10-31 14:30:00', '2017-10-31 15:30:00', '2017-10-31 16:30:00'),
(53, 'GUVF VF ABG N IREL FGEBAT PVCURE.\n\nYOUR TASK IS TO FIND OUT THE 6TH WORD OF THE CRYPT.', 'STRONG', 2, 40, 'THE KEY CAN BE OBTAINED USING THE HILL CLIMB METHOD.', 'A DERIVED STANDARD CIPHER.', 'THE 7TH WORD OF THE CRYPT IS THE KEY TO CIPHER', '2017-11-01 06:30:00', '2017-11-01 08:30:00', '2017-11-01 09:30:00', '2017-11-01 10:30:00', '2017-11-01 11:30:00'),
(54, '<img src="res/questions/3.png"><br>\n\nYOUR TASK IS TO FIND OUT THE 11TH WORD IN THE CIPHER.', 'TRUST', 3, 40, 'START FROM THE PLACE WHERE YOU FIND A NAME', 'FOLLOW THE RAINBOW, BUT BACKWARDS', 'THE CIPHER STARTS AND ENDS WITH A NAME', '2017-11-01 11:30:00', '2017-11-01 13:30:00', '2017-11-01 14:30:00', '2017-11-01 15:30:00', '2017-11-01 16:30:00'),
(55, '. . / .-. --- --- -- /\n-. ..- -- -… . .-. / …. .- … /\n. .. --. …. - /\n..-. .- -.-. - --- .-. … /\n\n. YOUR TASK IS TO FIND OUT THE WHOLE MESSAGE', 'THE ROOM NUMBER HAS EIGHT FACTORS', 4, 60, 'TERMINATIONS ARE GIVEN SO THE CODE SHOULD BE EASY', 'IT DOES NOT REQUIRE ANY SPECIAL EQUIPMENT.', 'IT IS NAMED AFTER INVENTOR OF THE TELEGRAPH', '2017-11-02 06:30:00', '2017-11-02 08:30:00', '2017-11-02 09:30:00', '2017-11-02 10:30:00', '2017-11-02 11:30:00'),
(58, 'GBQSHODQP ABN HHJW AD BBGGDTDF MNV DMTOF.\n\nYOUR TASK IS TO FIND THE 1ST AND 7TH WORD OF THE CRYPT(SEPARATE THE WORDS WITH A SPACE WHILE SUBMITTING THE ANSWER).', 'HAPPINESS FOUND', 6, 80, 'THIS CIPHER IN NOT A ONE TO ONE FUNCTION', 'ONE LETTER HAS BEEN SUBSTITUTED WITH A CHOICE OF 3-4 LETTERS', 'MOBILE KEYPADS MIGHT COME IN VERY HANDY', '2017-11-03 06:30:00', '2017-11-03 10:30:00', '2017-11-03 12:30:00', '2017-11-03 14:30:00', '2017-11-03 16:30:00'),
(59, 'TROS KEQC HEZB   JRUO  EREI  UMEV EWNG  SAEE\nXAIK  TKRR  PSNA   AIDI    LFHY FNIE    ORIA    TGSS. YOUR TASK IS TO FIND OUT THE 13TH WORD OF THE CRYPT.', 'DISCOVERIES', 5, 60, 'Shakespeare was one of the most influential people of his era and so were his characters. The name of this cipher is named on a king who appears in his novels', 'The second clue is the number of characters present in the crypt above. A perfect guess is all you need to crack the code', 'If you know how to read Chinese then well. You don’t need anything else to crack the code', '2017-11-02 11:30:00', '2017-11-02 13:30:00', '2017-11-02 14:30:00', '2017-11-02 15:30:00', '2017-11-02 16:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `TeamName` varchar(100) NOT NULL,
  `Mem01` varchar(100) NOT NULL,
  `Mem02` varchar(100) DEFAULT NULL,
  `Mem03` varchar(100) DEFAULT NULL,
  `Roll01` int(10) NOT NULL,
  `Roll02` int(10) DEFAULT NULL,
  `Roll03` int(10) DEFAULT NULL,
  `Pass` varchar(50) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `PhNo` int(12) DEFAULT NULL,
  `level` int(3) NOT NULL DEFAULT '0',
  `Score` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`TeamName`, `Mem01`, `Mem02`, `Mem03`, `Roll01`, `Roll02`, `Roll03`, `Pass`, `Mail`, `PhNo`, `level`, `Score`) VALUES
('abc', 'qwe', '', '', 101610092, NULL, NULL, '8eb208f7e05d987a9b044a8e98c6b087f15a0bfc', 'a@gmail.com', 1234567890, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`QuestionID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`TeamName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `QuestionID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
