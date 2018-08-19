-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2018 at 08:19 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msq`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz`
--

CREATE TABLE `tbl_quiz` (
  `QuizID` int(11) NOT NULL,
  `QuizName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_quiz`
--

INSERT INTO `tbl_quiz` (`QuizID`, `QuizName`) VALUES
(1, 'Software Project Management'),
(2, 'Data Sceince'),
(3, 'OOP'),
(4, 'Software Engineering'),
(5, 'PHP'),
(6, 'HTML'),
(7, 'JAVASCRIPT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz_answers`
--

CREATE TABLE `tbl_quiz_answers` (
  `QuizAnswersID` int(11) NOT NULL,
  `Answer` text NOT NULL,
  `IsValid` int(11) NOT NULL,
  `QuizQuestionsID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_quiz_answers`
--

INSERT INTO `tbl_quiz_answers` (`QuizAnswersID`, `Answer`, `IsValid`, `QuizQuestionsID`) VALUES
(1, 'Keeping overall costs within budget', 0, 2),
(4, 'Avoiding customer complaints', 1, 2),
(5, 'Specification delays', 0, 4),
(6, 'Product competition', 0, 4),
(7, 'Testing', 1, 4),
(8, 'Staff turnover', 0, 4),
(9, 'Project Management', 0, 3),
(10, 'Manager life cycle', 0, 3),
(11, 'Project Management Life Cycle', 1, 3),
(12, 'All of the mentioned', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz_questions`
--

CREATE TABLE `tbl_quiz_questions` (
  `QuizQuestionsID` int(11) NOT NULL,
  `ActualQuestion` text NOT NULL,
  `quizID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_quiz_questions`
--

INSERT INTO `tbl_quiz_questions` (`QuizQuestionsID`, `ActualQuestion`, `quizID`) VALUES
(2, 'Which of the following is not project management goal?', 1),
(3, 'The process each manager follows during the life of a project is known as', 1),
(4, 'Which of the following is not considered as a risk in project management?', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_quiz`
--
ALTER TABLE `tbl_quiz`
  ADD PRIMARY KEY (`QuizID`);

--
-- Indexes for table `tbl_quiz_answers`
--
ALTER TABLE `tbl_quiz_answers`
  ADD PRIMARY KEY (`QuizAnswersID`),
  ADD KEY `questionfk` (`QuizQuestionsID`);

--
-- Indexes for table `tbl_quiz_questions`
--
ALTER TABLE `tbl_quiz_questions`
  ADD PRIMARY KEY (`QuizQuestionsID`),
  ADD KEY `quizfk` (`quizID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_quiz`
--
ALTER TABLE `tbl_quiz`
  MODIFY `QuizID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_quiz_answers`
--
ALTER TABLE `tbl_quiz_answers`
  MODIFY `QuizAnswersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_quiz_questions`
--
ALTER TABLE `tbl_quiz_questions`
  MODIFY `QuizQuestionsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_quiz_answers`
--
ALTER TABLE `tbl_quiz_answers`
  ADD CONSTRAINT `questionfk` FOREIGN KEY (`QuizQuestionsID`) REFERENCES `tbl_quiz_questions` (`QuizQuestionsID`);

--
-- Constraints for table `tbl_quiz_questions`
--
ALTER TABLE `tbl_quiz_questions`
  ADD CONSTRAINT `quizfk` FOREIGN KEY (`quizID`) REFERENCES `tbl_quiz` (`QuizID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
