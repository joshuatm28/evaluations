-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2017 at 06:37 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sturec`
--

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
`persid` int(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middle` varchar(50) NOT NULL,
  `suffix` varchar(20) NOT NULL,
  `bdate` date NOT NULL,
  `placebdate` varchar(50) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `civil` varchar(60) NOT NULL,
  `citizenship` varchar(60) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `presadd1` varchar(70) NOT NULL,
  `presadd2` varchar(70) NOT NULL,
  `presadd3` varchar(70) NOT NULL,
  `presadd4` varchar(70) NOT NULL,
  `permadd1` varchar(70) NOT NULL,
  `permadd2` varchar(70) NOT NULL,
  `permadd3` varchar(70) NOT NULL,
  `permadd4` varchar(70) NOT NULL,
  `landline` int(30) NOT NULL,
  `primob` int(30) NOT NULL,
  `secmob` int(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `empstat` varchar(70) NOT NULL,
  `highed` varchar(70) NOT NULL,
  `yeargrad` varchar(70) NOT NULL,
  `school` varchar(70) NOT NULL,
  `course` varchar(70) NOT NULL,
  `status` varchar(50) NOT NULL,
  `campus` varchar(50) NOT NULL,
  `awards` varchar(70) NOT NULL,
  `techskill` varchar(70) NOT NULL,
  `innovation` varchar(70) NOT NULL,
  `teamwork` varchar(70) NOT NULL,
  `multitasking` varchar(70) NOT NULL,
  `workethics` varchar(70) NOT NULL,
  `selfmotivation` varchar(70) NOT NULL,
  `create_problem_solving` varchar(70) NOT NULL,
  `critical_thinking` varchar(70) NOT NULL,
  `decision_making` varchar(70) NOT NULL,
  `stress_tolerance` varchar(70) NOT NULL,
  `planning_organizing` varchar(70) NOT NULL,
  `social_perceptiveness` varchar(70) NOT NULL,
  `english_functional_skills` varchar(70) NOT NULL,
  `english_comprehension` varchar(70) NOT NULL,
  `math_functional_skill` varchar(70) NOT NULL,
  `problem_solving` varchar(70) NOT NULL,
  `carpentry` varchar(50) NOT NULL,
  `masonry` varchar(50) NOT NULL,
  `welding` varchar(50) NOT NULL,
  `auto_mechanic` varchar(50) NOT NULL,
  `plumbing` varchar(50) NOT NULL,
  `driving` varchar(50) NOT NULL,
  `gardening` varchar(50) NOT NULL,
  `tailoring` varchar(50) NOT NULL,
  `photography` varchar(50) NOT NULL,
  `hairdressing` varchar(50) NOT NULL,
  `cooking` varchar(50) NOT NULL,
  `baking` varchar(50) NOT NULL,
  `others` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`persid`, `lastname`, `firstname`, `middle`, `suffix`, `bdate`, `placebdate`, `age`, `gender`, `civil`, `citizenship`, `height`, `weight`, `presadd1`, `presadd2`, `presadd3`, `presadd4`, `permadd1`, `permadd2`, `permadd3`, `permadd4`, `landline`, `primob`, `secmob`, `email`, `empstat`, `highed`, `yeargrad`, `school`, `course`, `status`, `campus`, `awards`, `techskill`, `innovation`, `teamwork`, `multitasking`, `workethics`, `selfmotivation`, `create_problem_solving`, `critical_thinking`, `decision_making`, `stress_tolerance`, `planning_organizing`, `social_perceptiveness`, `english_functional_skills`, `english_comprehension`, `math_functional_skill`, `problem_solving`, `carpentry`, `masonry`, `welding`, `auto_mechanic`, `plumbing`, `driving`, `gardening`, `tailoring`, `photography`, `hairdressing`, `cooking`, `baking`, `others`) VALUES
(1, 'Flory', 'jason', 'Pido', '', '2017-12-01', 'Silay City', 12, '', 'Single', 'Filipino', '55', '55', 'Magsaysay Street', 'brgy.4 ', 'victorias city', 'negros occidental', 'Magsaysay Street', 'brgy.4 ', 'victorias city', 'negros occidental', 23132, 123123, 1231231, '@gmail.com', 'Self Employed', 'Elementary Graduate', 'asdasd', 'asdasd', 'asdasd', '', '', 'asdas', '', 'Innovation', '', '', '', '', '', 'Critical Thinking', '', '', '', '', '', 'English Comprehension', '', '', '', '', '', '', 'Plumbing', 'Driving', '', '', '', '', '', 'Baking', ''),
(2, '', '', '', '', '0000-00-00', '', 0, '', '', '', '0', '0', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Plumbing', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '0000-00-00', '', 45, '', '', '', '0', '0', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '0000-00-00', '', 0, '', '', '', '0', '0', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '0000-00-00', '', 0, '', '', '', '0', '0', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'asd', 'asdasd', 'asd', 'asd', '0000-00-00', '', 0, '', 'Widowed', '', '1', '23"', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'asd', 'dfg', 'fgdfg', 'dfg', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'asdasd', 'sadasd', 'asdasd', 'asdasdasd', '0000-00-00', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'sdfsdf', 'sdfsd', 'sdfsd', 'fsdfsdf', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'asdasd', 'asdas', 'asda', 'dasdasd', '0000-00-00', '', 0, 'Male', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '0000-00-00', '', 0, 'Male', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 'asdasd', 'sadas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'asdasdasd', '', '', '', '0000-00-00', '', 0, 'Male', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
 ADD PRIMARY KEY (`persid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
MODIFY `persid` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
