-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 11:12 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(11) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Mayur', 'mihir', 5000, '2021-07-14 00:37:05'),
(2, 'mihir', 'Mayur', 10000, '2021-07-14 00:39:58'),
(3, 'Monica', 'Ritesh', 2000, '2021-07-14 18:26:46'),
(4, 'Ritesh', 'amanu', 2000, '2021-07-14 20:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `age`, `email`, `contact`, `balance`) VALUES
(1, 'Mihir', 'Male', 20, 'Mihir@email.com', '9850132687', 10000),
(2, 'Sanket', 'Male', 20, 'sanket@email.com', '7456321891', 6000),
(3, 'Ritesh', 'Male', 25, 'ritesh@email.com', '7869541234', 3000),
(4, 'Harsh', 'Male', 21, 'harsh@email.com', '9456321798', 5000),
(5, 'Sanesh', 'Male', 20, 'sanesh@email.com', '7896541239', 3000),
(6, 'Naresh', 'Male', 20, 'Naresh@email.com', '9258963147', 6000),
(7, 'Sony', 'Female', 20, 'Sony@gmail.com', '7456987123', 5000),
(8, 'Omika', 'Female', 21, 'Omika@email.com', '9159632578', 3000),
(9, 'Parth', 'Male', 20, 'Parth@email.com', '7896541239', 4000),
(10, 'Tanya', 'Female', 19, 'Tanya@email.com', '4156329875', 5000),
(11, 'Nisha', 'Female', 20, 'Nisha@gmail.com', '9231820814', 7000),
(12, 'Aman', 'Male', 21, 'Aman@gmail.com', '8999889998', 44000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
