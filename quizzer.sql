-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2019 at 04:41 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizzer`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL DEFAULT '0',
  `choice` text COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `choice`) VALUES
(17, 1, 0, 'Hypertext marker langauge'),
(18, 1, 0, 'hypetext mark language'),
(19, 1, 1, 'Hypertext markup language'),
(20, 1, 0, 'HTM language'),
(21, 1, 0, 'HYper language'),
(22, 2, 0, 'attribute name'),
(23, 2, 1, 'tag name'),
(24, 2, 0, 'class name'),
(25, 2, 0, 'element name'),
(26, 2, 0, 'none '),
(27, 3, 0, 'b'),
(28, 3, 1, 'bdi'),
(29, 3, 0, 'bdo'),
(30, 3, 0, 'base'),
(31, 3, 0, 'none'),
(32, 4, 0, 'details'),
(33, 4, 1, 'command'),
(34, 4, 0, 'code'),
(35, 4, 0, 'all of above'),
(36, 4, 0, 'none'),
(37, 5, 1, 'range'),
(38, 5, 0, 'email'),
(39, 5, 0, 'file'),
(40, 5, 0, 'date'),
(41, 5, 0, 'none1'),
(42, 6, 0, 'mob'),
(43, 6, 1, 'tel'),
(44, 6, 0, 'mobile'),
(45, 6, 0, 'telephone'),
(46, 6, 0, 'none'),
(47, 7, 0, 'ins'),
(48, 7, 1, 'keygen'),
(49, 7, 0, 'key'),
(50, 7, 0, 'command'),
(51, 7, 0, 'none'),
(52, 8, 0, 'highlight'),
(53, 8, 1, 'mark'),
(54, 8, 0, 'strong'),
(55, 8, 0, 'blink'),
(56, 8, 0, 'none'),
(57, 9, 0, 'navigation'),
(58, 9, 0, 'anchor tag'),
(59, 9, 1, 'nav'),
(60, 9, 0, 'option'),
(61, 9, 0, 'none'),
(62, 10, 0, 'sink'),
(63, 10, 1, 'track'),
(64, 10, 0, 'stable'),
(65, 10, 0, 'caption'),
(66, 10, 0, 'none');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `question` text COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `question`) VALUES
(1, 'HTML stands for:'),
(2, '. All elements are identified by their __________ and are marked up using either start tags and end tags or self-closing tags.'),
(3, 'The __________ element represents a span of text that is isolated from its surroundings for the purposes of bidirectional text formatting.'),
(4, '. A ____________ element must have a start tag but must not have an end tag.'),
(5, 'Which type attribute of input element sets the elementâ€™s value to a string representing a number?'),
(6, 'Which of the following type attributes of input element defines control for entering a telephone number?'),
(7, 'Which element represents a control for generating a public-private key pair?'),
(8, 'Which element represents marked or highlighted text for reference purposes?'),
(9, 'Which element(s) represents a section of a document that links to other documents?'),
(10, 'Subtitle tracks and caption tracks to be specified for audio and video elements can be added using which of the following element?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
