-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 03:48 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecc`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`) VALUES
(1, 'PHP is Programming Language'),
(2, 'HTML is a Markup Language'),
(3, 'JS is Scripting language'),
(4, 'SQL is query Language'),
(5, 'Programming involves Algorithms'),
(6, 'ECMA 6 also known as ES6'),
(7, 'I love PHP Data Object'),
(8, 'PDO works with parametized query'),
(9, 'PDO works with multiple DBs'),
(10, 'var in JS is a global variable'),
(11, 'let and const was introduced in ES6'),
(12, 'Array is a list of objects'),
(13, 'Arrays can be accessed by their Index Num'),
(14, 'Array contains multiple values'),
(15, 'Js method is a property of an object'),
(16, 'JSON is Js Object Notation'),
(17, 'JSON are strings'),
(18, 'JSON.stringify converts JS Obj to JSON'),
(20, 'Less Program at day. Be the Beast at night'),
(21, ' JSON.parse() transforms JSON to JS Obj'),
(22, 'Programming involves Critical thinking'),
(23, 'By GABSON @ 2022 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
