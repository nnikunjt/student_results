-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 06:07 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_results`
--

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(255) NOT NULL,
  `roll_no` int(255) NOT NULL,
  `test_date` date NOT NULL,
  `math_total` int(255) DEFAULT NULL,
  `math_obtain` varchar(255) DEFAULT NULL,
  `sci_total` int(255) DEFAULT NULL,
  `sci_obtain` int(255) DEFAULT NULL,
  `sst_total` int(255) DEFAULT NULL,
  `sst_obtain` int(255) DEFAULT NULL,
  `percentage` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `roll_no`, `test_date`, `math_total`, `math_obtain`, `sci_total`, `sci_obtain`, `sst_total`, `sst_obtain`, `percentage`) VALUES
(8, 181211, '2018-07-07', 50, '50', 50, 49, 0, 0, 99),
(9, 181012, '2018-07-25', 50, '45', 50, 10, 50, 5, 40),
(11, 181211, '2018-07-03', 50, '20', 50, 22, 50, 15, 38),
(12, 181211, '2018-07-14', 50, '20', 50, 25, 50, 47, 61.333333333333),
(13, 181211, '2018-07-21', 50, '45', 50, 49, 50, 47, 94),
(14, 181211, '2018-08-01', 50, '20', 50, 25, 60, 55, 62.5),
(15, 181211, '2018-08-19', 50, '50', 0, 0, 0, 0, 100);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `roll_no` int(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `std` int(255) NOT NULL,
  `medium` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `father_no` int(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `mother_no` int(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `roll_no`, `student_name`, `std`, `medium`, `birthdate`, `father_name`, `father_no`, `mother_name`, `mother_no`, `address`) VALUES
(1, 181211, 'Nikunj', 12, 'Gujarati', '2001-02-15', 'nareshbhai', 1212121212, 'varshaben', 2121212121, 'iyouououou'),
(2, 181012, 'kishan', 10, 'Gujarati', '2000-07-26', 'shaileshbhai', 1414141414, 'xyz', 2147483647, 'y8ury9 tryirtyjh'),
(3, 181213, 'Nikunj', 12, 'Gujarati', '2001-02-15', 'nareshbhai', 7676367, 'varshaben', 434343, 'greyhey'),
(4, 18114, 'ghh', 1, 'Gujarati', '0000-00-00', 'ghfgh', 7676367, 'gfhfghhfg', 36534, 'gg'),
(5, 180715, 'dhgg', 7, 'Gujarati', '2001-02-15', 'ghfgh', 7676367, 'fd', 0, 'rt'),
(6, 181216, 'Upeksha', 12, 'Gujarati', '2003-01-14', 'nareshbhai', 7676367, 'varshaben', 36534, 'ffdfdffbzffdvsddvhfhfhgfhh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`) VALUES
(1, 'nikunj', '123456'),
(3, 'yash', 'yash');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roll_no` (`roll_no`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`roll_no`) REFERENCES `students` (`roll_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
