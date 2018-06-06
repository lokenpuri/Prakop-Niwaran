-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 08:17 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation_request`
--

CREATE TABLE `donation_request` (
  `request_id` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` text NOT NULL,
  `contact` text NOT NULL,
  `message` varchar(255) NOT NULL,
  `received_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation_request`
--

INSERT INTO `donation_request` (`request_id`, `name`, `email`, `subject`, `contact`, `message`, `received_date`) VALUES
(6, 'Suman Thakuri', 'suman@gmail.com', '9834567238', 'Request for donation for flood victims', 'please help us !! our homes and property are damaged by flood. we do not have basic needs to live our days.  ', '2017-08-05 04:49:33'),
(8, 'Decem Limbu', 'decem12@gmail.com', '9823438432', 'Request for donation for flood victims', 'please donate', '2017-08-05 05:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(10) NOT NULL,
  `status` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `status`, `name`, `date`) VALUES
(26, 'hello everyone, mero gau ma pahiro le 10 ota ghar lageko xa, teha khane basne subidha kei xaina pani ko pipe pani pahiro le lagyo\r\nplz hamilai help garnu hos plz\r\n', 'Tezz Bahadur Saru ', '2017-08-05 12:14:08'),
(27, 'Please help garnus !!\r\nhamro gau ma earthquake sabai ghar haru bhatkayeko xa ani khane laune kei xaina \r\nsathai pani ko mul pani sukeko xa \r\nplease help garnus ', 'Urendra Khakurel', '2017-08-05 13:49:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'abc', 'abc@gmail.com', '0b4e7a0e5fe84ad35fb5f95b9ceeac79'),
(2, 'Lokendra Puri', 'lokenpuri@gmail.com', 'db3a3f196ccbf6323b5b463dd3675a6f'),
(3, 'Decem Limbu', 'decem12@gmail.com', '4dbbb70df8c5bf3f135d90032fe61aec'),
(4, 'Naran Panthi', 'nrn.panthi@gmail.coom', 'f89c4102541a29c3a19df4d39a60aa6c'),
(5, 'Tezz Bahadur Saru ', 'liontez12@magar.com', 'e0b7801b64c435fe986f829b0dfd0075'),
(6, 'Urendra Khakurel', 'uren@gmail.com', '84070f6a12e70b04ee5094c55bc3722f'),
(7, 'Denish Yadav', 'denish@gmail.com', 'c4440a4e384e15b52dca4066bfe10fd6'),
(8, 'urendra', 'khakurel045@gmail.com', '28312dc1afae6c3111cd46f192a9ef5c');

-- --------------------------------------------------------

--
-- Table structure for table `user_message`
--

CREATE TABLE `user_message` (
  `msg_id` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` text NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_message`
--

INSERT INTO `user_message` (`msg_id`, `name`, `email`, `contact`, `message`) VALUES
(1, 'Lokendra Puri', 'lokenpuri@gmail.com', '9849279815', 'hello there!!'),
(2, 'Lokendra Puri', 'lokenpuri@gmail.com', '9823438432', 'hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation_request`
--
ALTER TABLE `donation_request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_message`
--
ALTER TABLE `user_message`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation_request`
--
ALTER TABLE `donation_request`
  MODIFY `request_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_message`
--
ALTER TABLE `user_message`
  MODIFY `msg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
