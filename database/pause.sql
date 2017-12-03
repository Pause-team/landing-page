-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2017 at 08:41 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pause`
--

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `playlist_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` text,
  `private` tinyint(4) NOT NULL DEFAULT '0',
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `playlist_videos`
--

CREATE TABLE `playlist_videos` (
  `playlist_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(255) NOT NULL DEFAULT '0',
  `email` varchar(45) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `created_on` datetime NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `name`, `created_on`, `last_login`) VALUES
('\"9ww3BCuTu0P9DKQ5sKfIHP8rIV83\"', 'swarnims@bu.edu', 'Swarnim Rajneesh Sinha', '0000-00-00 00:00:00', '2017-12-02 22:17:08'),
('\"NplPz09KpMOJ1HnElCMXjnXUBlU2\"', 'swarnimsinha1994@gmail.com', 'Swarnim Sinha', '0000-00-00 00:00:00', '2017-12-01 20:12:43');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `video_title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `video_progress` varchar(255) NOT NULL,
  `total_duration` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  `last_viewed` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `user_id`, `video_title`, `url`, `video_progress`, `total_duration`, `created_on`, `last_viewed`) VALUES
(28, '\"9ww3BCuTu0P9DKQ5sKfIHP8rIV83\"', 'Day[9] HearthStone Decktacular #323 - Elemental Control Mage', 'https://www.youtube.com/watch?v=dNVicRxv2AY', '31.165728', '6708.741', '0000-00-00 00:00:00', '2017-12-02 22:17:08'),
(25, '\"9ww3BCuTu0P9DKQ5sKfIHP8rIV83\"', 'harry potter', 'https://www.youtube.com/watch?v=KIPTE0R5WPA', '59.04007', '7076.501', '0000-00-00 00:00:00', '2017-12-01 23:44:42'),
(17, '\"NplPz09KpMOJ1HnElCMXjnXUBlU2\"', 'Friday Hearthstone - P3', 'https://www.youtube.com/watch?v=KIPTE0R5WPA', '51.03114', '7076.501', '0000-00-00 00:00:00', '2017-12-01 20:12:43'),
(24, 'NplPz09KpMOJ1HnElCMXjnXUBlU2', '', 'https://www.youtube.com/watch?v=KIPTE0R5WPA', '39.032482', '7076.501', '0000-00-00 00:00:00', '2017-12-01 02:11:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`playlist_id`,`user_id`),
  ADD KEY `playlist_user_idx` (`user_id`);

--
-- Indexes for table `playlist_videos`
--
ALTER TABLE `playlist_videos`
  ADD PRIMARY KEY (`playlist_id`,`video_id`),
  ADD KEY `video_id_link_idx` (`video_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`user_id`,`url`),
  ADD KEY `video_user_id_idx` (`user_id`),
  ADD KEY `video_id` (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `playlist_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
