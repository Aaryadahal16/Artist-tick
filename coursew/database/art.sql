-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 01:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `art`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `productid` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `userid`, `username`, `productid`, `comment`) VALUES
(3, 3, 'Elena', 15, 'hasa'),
(4, 3, 'Eva', 18, 'Very elegent\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `fineart`
--

CREATE TABLE `fineart` (
  `id` int(11) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `price` varchar(40) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `artist` varchar(30) NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fineart`
--

INSERT INTO `fineart` (`id`, `picture`, `price`, `title`, `description`, `artist`, `type`) VALUES
(18, '421334_myartgaller.jpg', '$100', 'Bird', 'Fly high', 'bipu', 'Paintings'),
(19, '743761_myartgaller.jpg', '$90', 'TULIPS', 'Love is the flower you\'ve got to let go!', 'Rhythm', 'Photographs'),
(20, '512927_myartgaller.jpg', '$50', 'Palms', 'Your hand fits in mine like its made for me!', 'MJO', 'Photographs'),
(21, '913911_myartgaller.jpg', '12000', 'Marilyn Monroe', 'Famous Painting', 'Andy Warhol', 'Paintings'),
(22, '864196_myartgaller.jpg', '89', 'cub', 'cub of tiger', 'rohan', 'sketches'),
(24, '990878_myartgaller.jpg', '89', 'panda', 'panda', 'subu', 'sketches'),
(25, '378571_myartgaller.jpg', '$60', 'Mass', 'Beauty lies in the eyes of beholder', 'Rebecca', 'Abstract'),
(26, '734879_myartgaller.jpg', '$200', 'Feelings', 'Unexpressed Feelings', 'Aakriti', 'Abstract'),
(27, '329765_myartgaller.jpg', '$40', 'Motherly Love', 'Unconditional Love', 'Redhaan', 'Paintings'),
(28, '417184_myartgaller.jpg', '12,00,000', 'Charlie Chaplin', 'Let us strive for the impossible.', 'IRE', 'Paintings'),
(29, '593490_myartgaller.jpg', '100,000', 'Moon', 'The moon in her chariot Pearl', 'Daryaseum', 'Photographs'),
(30, '368375_myartgaller.jpg', '1,00,000', 'Autumn', 'Nothing so stable as change.', 'Raya', 'Photographs'),
(31, '877805_myartgaller.jpg', '1000', 'Portrait', 'Smile.', 'Elena', 'sketches'),
(32, '406630_myartgaller.jpg', '2,000', 'Deer', 'Wild and Free', 'ekater', 'sketches'),
(33, '466881_myartgaller.jpg', '$300', 'Eiffel Tower', 'Night is a World lit by itself.', 'Sidney', 'Photographs');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `number` varchar(50) NOT NULL DEFAULT '+977',
  `pass` varchar(40) NOT NULL,
  `usertype` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `username`, `mail`, `number`, `pass`, `usertype`) VALUES
(2, 'Aarya Dahal', 'dahalaarya16@gmail.com', '+977-9843576074', '5d41402abc4b2a76b9719d911017c592', 'admin'),
(3, 'subu', 'subu@gmail.com', '+977-9821887625', '875c2f84a5597c18455ed82485fe892c', 'user'),
(4, 'amisha', 'amisha@gmail.com', '+977', '7927221283b1fb48f9e3a9092ad95ee7', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fineart`
--
ALTER TABLE `fineart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fineart`
--
ALTER TABLE `fineart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
