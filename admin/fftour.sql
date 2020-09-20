-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 11:31 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fftour`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `rules` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`rules`, `id`) VALUES
('Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime voluptate quisquam eaque eum illum ea commodi perferendis dolore rerum possimus inventore id doloribus amet, vero expedita distinctio in consectetur. Dolor nam pariatur, excepturi eum minima tempore dicta natus, autem modi voluptatum assumenda! Perspiciatis hic quos a, molestiae tempore suscipit quae! niamur ফসাডফ ফাড্স ফাসাদ ফাসাদ ফাসাদ সদফ সদফাস dfsdfs dfsadf sdf dfasdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo`) VALUES
(1, 'pubglogo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  `type` int(11) NOT NULL,
  `prize` int(11) NOT NULL,
  `pkill` int(11) NOT NULL,
  `map` varchar(255) NOT NULL,
  `participant` int(11) NOT NULL,
  `entry` int(11) NOT NULL,
  `mtype` int(11) NOT NULL,
  `prize1` int(11) NOT NULL,
  `prize2` int(11) NOT NULL,
  `prize3` int(11) NOT NULL,
  `rules` text NOT NULL,
  `status` int(11) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `name`, `time`, `type`, `prize`, `pkill`, `map`, `participant`, `entry`, `mtype`, `prize1`, `prize2`, `prize3`, `rules`, `status`, `details`) VALUES
(1, 'Grand Solo | Match 1', '2020-07-17 17:00:00', 2, 220, 4, 'Bermuda', 48, 10, 1, 100, 70, 50, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime voluptate quisquam eaque eum illum ea commodi perferendis dolore rerum possimus inventore id doloribus amet, vero expedita distinctio in consectetur. Dolor nam pariatur, excepturi eum minima tempore dicta natus, autem modi voluptatum assumenda! Perspiciatis hic quos a, molestiae tempore suscipit quae!', 1, ''),
(10, 'Grand Solo | Match 3', '2020-07-18 18:00:00', 1, 220, 4, 'Bermuda', 48, 10, 1, 100, 70, 50, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime voluptate quisquam eaque eum illum ea commodi perferendis dolore rerum possimus inventore id doloribus amet, vero expedita distinctio in consectetur. Dolor nam pariatur, excepturi eum minima tempore dicta natus, autem modi voluptatum assumenda! Perspiciatis hic quos a, molestiae tempore suscipit quae!', 0, 'id: dfjsdfjl pass: djkflsjdf'),
(11, 'Clash Squad | No ammo', '2020-07-18 08:35:00', 1, 100, 0, 'Bermuda', 2, 25, 4, 100, 0, 0, 'dfjk khdfkhkj kjsdlfkkd hfdsfhkjladh klhdfhasdkjfl', 1, ''),
(12, 'Clash SQUAD', '2020-07-19 08:00:00', 1, 100, 0, 'Bermuda', 2, 25, 4, 100, 0, 0, 'fsd dfsdf dfsdaf dfsdf fdadfsa', 0, ''),
(14, 'Grand Solo | Match 1', '2020-07-18 16:43:00', 1, 220, 4, 'Bermuda', 48, 10, 1, 100, 70, 50, 'fsdafasd', 0, ''),
(16, 'Grand Solo | Match 7', '2020-07-19 21:19:00', 2, 220, 4, 'Bermuda', 48, 10, 1, 100, 70, 50, 'fds fsadf dfsdfsdaf df only for showing', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `msg`) VALUES
(1, 'Room ID and Password Published <br> Join Now'),
(2, 'Room ID and Password Published <br> Join Now'),
(3, 'New match Published <br> Join Now'),
(4, 'New match Published <br> Join Now'),
(5, 'New match Published <br> Join Now'),
(6, 'Room ID and Password Published <br> Join Now'),
(7, 'New match Published <br> Join Now'),
(8, 'Match Result Published <br> Join Now');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int(11) NOT NULL,
  `match_id` int(11) NOT NULL,
  `player_id` varchar(255) NOT NULL,
  `rank` int(11) NOT NULL,
  `kills` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `team` varchar(255) NOT NULL,
  `stat` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `match_id`, `player_id`, `rank`, `kills`, `win`, `team`, `stat`) VALUES
(4, 1, 'abdullah', 2, 4, 116, '0', 1),
(5, 10, 'abdullah', 0, 0, 0, '0', 1),
(6, 10, 'abdullah', 0, 0, 0, '0', 1),
(7, 5, 'sonto', 1, 5, 120, '0', 1),
(8, 5, 'sonto', 2, 5, 90, '0', 1),
(9, 1, 'admin', 1, 6, 124, '0', 1),
(10, 10, 'admin', 0, 0, 0, '0', 0),
(11, 1, 'admin', 3, 4, 66, '', 1),
(12, 1, 'admin', 4, 2, 8, '', 1),
(13, 1, 'admin', 5, 2, 8, '', 1),
(15, 11, 'admin', 1, 5, 100, '', 1),
(16, 11, 'admin', 0, 0, 0, '', 0),
(17, 11, 'admin', 0, 0, 0, '', 0),
(18, 11, 'admin', 0, 0, 0, '', 0),
(19, 11, 'dfsdfas', 0, 0, 0, '111admin', 0),
(20, 11, 'fsdfsdaf', 0, 0, 0, '111admin', 0),
(21, 11, 'fdsfas', 0, 0, 0, '111admin', 0),
(22, 11, 'fsdfas', 0, 0, 0, '111admin', 0),
(23, 10, 'admin', 0, 0, 0, '', 0),
(24, 12, 'abir', 4, 2, 0, '121admin', 1),
(25, 12, 'hasan', 1, 1, 0, '121admin', 1),
(26, 12, 'niloy', 1, 2, 100, '121admin', 1),
(27, 12, 'rifat', 1, 0, 0, '121admin', 1),
(28, 10, 'orabdullah', 0, 0, 0, '', 0),
(29, 10, 'orabdullah', 0, 0, 0, '', 0),
(30, 10, 'orabdullah', 0, 0, 0, '', 0),
(31, 10, 'abdullah', 0, 0, 0, '', 0),
(32, 10, 'abdullah', 0, 0, 0, '', 0),
(33, 10, 'admin', 0, 0, 0, '', 0),
(34, 10, 'admin', 0, 0, 0, '', 0),
(35, 10, 'admin', 0, 0, 0, '', 0),
(36, 10, 'admin', 0, 0, 0, '', 0),
(37, 10, 'admin', 0, 0, 0, '', 0),
(38, 12, 'abir', 0, 0, 0, '121admin', 0),
(39, 12, 'hasan', 0, 0, 0, '121admin', 0),
(40, 12, 'fsdaf', 0, 0, 0, '121admin', 0),
(41, 12, 'fsdfsdaf', 0, 0, 0, '121admin', 0),
(42, 13, 'abir', 0, 0, 0, '131admin', 0),
(43, 13, 'hasan', 0, 0, 0, '131admin', 0),
(44, 13, 'niloy', 0, 0, 0, '131admin', 0),
(45, 13, 'rifat', 0, 0, 0, '131admin', 0),
(46, 13, 'fsda', 0, 0, 0, '131admin', 0),
(47, 13, 'abir', 0, 0, 0, '131admin', 0),
(48, 13, '', 0, 0, 0, '131admin', 0),
(49, 13, '', 0, 0, 0, '131admin', 0),
(50, 13, '', 0, 0, 0, '131admin', 0),
(51, 14, 'sabbir1', 1, 4, 116, '', 1),
(52, 14, 'sabbir1', 2, 3, 112, '', 1),
(53, 15, 'sabbir1', 1, 2, 108, '', 1),
(54, 14, 'abdullah', 45, 6, 26, '', 1),
(55, 14, 'niamurndc17', 0, 0, 0, '', 0),
(56, 10, 'sabbir1', 2, 2, 78, '', 1),
(57, 1, 'sabbir1', 0, 0, 0, '', 0),
(58, 1, '⥑⥎⤼↺ নিমু ', 0, 0, 0, '', 0),
(59, 14, '⥑⥎⤼↺ নিমু ', 0, 0, 0, '', 0),
(60, 14, 'niloy', 0, 0, 0, '', 0),
(61, 10, 'niloy', 0, 0, 0, '', 0),
(62, 1, 'niloy', 0, 0, 0, '', 0),
(63, 16, 'fdsasf', 0, 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`) VALUES
(1, 'codlogo.jpg'),
(14, 'pubglogo.jpg'),
(15, 'fflogo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transections`
--

CREATE TABLE `transections` (
  `id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `reciver` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `type` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `last` int(11) NOT NULL,
  `cond` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transections`
--

INSERT INTO `transections` (`id`, `sender`, `reciver`, `amount`, `time`, `type`, `status`, `last`, `cond`) VALUES
(5, 'admin', 'admin', 5757, '2020-07-17 10:57:37', 'bkash', 1, 5785, 1),
(6, 'admin', 'admin', 578, '2020-07-17 10:57:43', 'bkash', 2, 3552, 1),
(7, 'admin', 'admin', 67, '2020-07-17 10:57:48', 'bkash', 2, 57, 1),
(8, 'admin', 'admin', 57, '2020-07-17 10:57:55', 'bkash', 3, 57, 1),
(9, 'admin', 'admin', 578, '2020-07-17 10:58:00', 'bkash', 3, 5785, 1),
(10, 'admin', 'admin', 5785, '2020-07-17 10:58:05', 'bkash', 2, 575, 1),
(11, 'admin', 'admin', 5757, '2020-07-17 10:58:10', 'bkash', 1, 5575, 1),
(12, 'admin', 'admin', 1000, '2020-07-17 11:26:20', 'rocket', 2, 12365478, 1),
(13, 'admin', 'admin', 110, '2020-07-17 11:50:53', 'bkash', 2, 365214789, 1),
(14, 'admin', 'admin', 80, '2020-07-17 12:39:44', 'bkash', 1, 1236, 1),
(15, 'admin', 'admin', 50, '2020-07-17 12:41:33', 'bkash', 1, 12365, 1),
(16, 'admin', 'admin', 45, '2020-07-17 12:43:06', 'bkash', 1, 6321, 1),
(17, 'admin', 'admin', 10, '2020-07-17 12:45:31', 'bkash', 1, 123456, 1),
(18, 'admin', 'admin', 50, '2020-07-17 12:46:03', 'bkash', 1, 6521, 1),
(19, 'admin', 'admin', 50, '2020-07-17 12:47:36', 'bkash', 1, 12345, 1),
(20, 'admin', 'admin', 50, '2020-07-17 12:47:59', 'bkash', 1, 1234, 1),
(21, 'admin', 'admin', 9, '2020-07-17 12:49:14', 'bkash', 1, 565, 1),
(22, 'admin', 'admin', 65, '2020-07-17 12:51:14', 'bkash', 1, 1236, 1),
(25, 'admin', 'admin', 10, '2020-07-17 13:27:07', 'join', 1, 0, 1),
(26, 'admin', 'admin', 10, '2020-07-17 13:28:57', 'join', 0, 0, 1),
(27, 'admin', 'admin', 100, '2020-07-17 13:46:11', 'join', 0, 0, 1),
(28, 'admin', 'admin', 100, '2020-07-17 13:46:11', 'join', 0, 0, 1),
(29, 'admin', 'admin', 100, '2020-07-17 13:58:06', 'join', 0, 0, 1),
(32, 'admin', 'admin', 66, '2020-07-17 15:18:38', 'reward', 1, 0, 1),
(33, 'admin', 'admin', 66, '2020-07-17 15:20:14', 'reward', 3, 0, 1),
(34, 'admin', 'admin', 66, '2020-07-17 15:30:26', 'reward', 3, 0, 1),
(35, 'admin', 'abdullah', 8, '2020-07-17 15:31:55', 'reward', 3, 0, 1),
(36, 'admin', 'niamurndc17', 8, '2020-07-17 15:40:49', 'reward', 3, 0, 1),
(37, 'admin', 'admin', 10, '2020-07-17 16:35:20', 'join', 0, 0, 1),
(38, 'admin', 'admin', 100, '2020-07-18 05:56:18', 'join', 0, 0, 1),
(39, 'admin', 'admin', 10, '2020-07-18 06:08:32', 'join', 0, 0, 1),
(40, 'admin', 'admin', 10, '2020-07-18 06:14:04', 'join', 0, 0, 1),
(41, 'admin', 'admin', 10, '2020-07-18 06:15:01', 'join', 0, 0, 1),
(42, 'admin', 'admin', 10, '2020-07-18 06:16:26', 'join', 0, 0, 1),
(43, 'admin', 'admin', 10, '2020-07-18 06:16:31', 'join', 0, 0, 1),
(44, 'admin', 'admin', 10, '2020-07-18 06:16:59', 'join', 0, 0, 1),
(45, 'admin', 'admin', 10, '2020-07-18 06:24:27', 'join', 0, 0, 1),
(46, 'admin', 'admin', 10, '2020-07-18 06:27:11', 'join', 0, 0, 1),
(47, 'admin', 'admin', 10, '2020-07-18 06:27:18', 'join', 0, 0, 1),
(48, 'admin', 'admin', 10, '2020-07-18 06:27:35', 'join', 0, 0, 1),
(49, 'admin', 'admin', 100, '2020-07-18 06:31:30', 'join', 0, 0, 1),
(50, 'admin', 'admin', 100, '2020-07-18 06:31:30', 'join', 0, 0, 1),
(51, 'admin', 'admin', 100, '2020-07-18 06:31:30', 'join', 0, 0, 1),
(52, 'admin', 'admin', 100, '2020-07-18 06:31:31', 'join', 0, 0, 1),
(53, 'admin', 'admin', 100, '2020-07-18 06:33:57', 'join', 0, 0, 1),
(54, 'admin', 'admin', 100, '2020-07-18 06:33:57', 'join', 0, 0, 1),
(55, 'admin', 'admin', 100, '2020-07-18 06:33:57', 'join', 0, 0, 1),
(56, 'admin', 'admin', 100, '2020-07-18 06:33:57', 'join', 0, 0, 1),
(57, 'admin', 'admin', 100, '2020-07-18 06:34:15', 'join', 0, 0, 1),
(58, 'admin', 'admin', 100, '2020-07-18 06:35:35', 'join', 0, 0, 1),
(59, 'admin', 'admin', 100, '2020-07-18 06:35:35', 'join', 0, 0, 1),
(60, 'admin', 'admin', 100, '2020-07-18 06:35:35', 'join', 0, 0, 1),
(61, 'admin', 'admin', 100, '2020-07-18 06:35:35', 'join', 0, 0, 1),
(62, 'sabbir1', 'admin', 100, '2020-07-18 06:53:38', 'bkash', 1, 1236, 1),
(63, 'sabbir1', 'admin', 10, '2020-07-18 06:54:37', 'join', 0, 0, 1),
(64, 'sabbir1', 'admin', 10, '2020-07-18 06:54:44', 'join', 0, 0, 1),
(65, 'admin', '', 116, '2020-07-18 07:03:19', 'reward', 3, 0, 1),
(66, 'admin', '', 116, '2020-07-18 07:05:06', 'reward', 3, 0, 1),
(67, 'admin', '', 112, '2020-07-18 07:05:15', 'reward', 3, 0, 1),
(68, 'sabbir1', 'admin', 10, '2020-07-18 07:09:16', 'join', 0, 0, 1),
(69, 'admin', '', 108, '2020-07-18 07:09:36', 'reward', 3, 0, 1),
(70, 'sabbir1', 'admin', 10, '2020-07-18 07:12:46', 'join', 0, 0, 1),
(71, 'admin', 'abdullah', 26, '2020-07-18 07:16:59', 'reward', 3, 0, 1),
(72, 'sabbir1', 'admin', 10, '2020-07-18 07:17:10', 'join', 0, 0, 1),
(73, 'admin', 'abir', 0, '2020-07-18 07:18:35', 'reward', 3, 0, 1),
(74, 'sabbir1', 'admin', 10, '2020-07-18 07:20:21', 'join', 0, 0, 1),
(75, 'admin', 'sabbir1', 78, '2020-07-18 07:20:53', 'reward', 3, 0, 1),
(76, 'admin', 'sabbir1', 100, '2020-07-18 07:26:56', 'bkash', 2, 23654789, 1),
(77, 'sabbir1', 'admin', 10, '2020-07-18 07:33:08', 'join', 0, 0, 1),
(78, '⥑⥎⤼↺ নিমু ', 'admin', 100, '2020-07-18 11:00:43', 'bkash', 1, 1234, 1),
(79, '⥑⥎⤼↺ নিমু ', 'admin', 10, '2020-07-18 11:01:23', 'join', 0, 0, 1),
(80, '⥑⥎⤼↺ নিমু ', 'admin', 10, '2020-07-18 11:02:06', 'join', 0, 0, 1),
(81, 'niloy', 'admin', 50, '2020-07-18 11:35:43', 'bkash', 1, 6548, 1),
(82, 'niloy', 'admin', 10, '2020-07-18 11:36:15', 'join', 0, 0, 1),
(83, 'admin', 'niloy', 100, '2020-07-18 11:45:12', 'reward', 3, 0, 1),
(84, 'niloy', 'admin', 10, '2020-07-18 13:11:04', 'join', 0, 0, 1),
(85, 'niloy', 'admin', 10, '2020-07-18 13:14:45', 'join', 0, 0, 1),
(86, 'admin', 'hasan', 0, '2020-07-18 13:16:11', 'reward', 3, 0, 1),
(87, 'admin', 'rifat', 0, '2020-07-18 13:16:19', 'reward', 3, 0, 1),
(88, 'admin', 'niloy', 100, '2020-07-18 13:20:00', 'bkash', 2, 172569845, 1),
(89, 'abdullah', 'admin', 10, '2020-07-24 10:47:42', 'join', 0, 0, 1),
(90, 'abdullah', 'admin', 0, '2020-07-24 12:25:50', 'bkash', 1, 0, 0),
(91, 'abdullah', 'admin', 200, '2020-07-24 12:26:05', 'bkash', 1, 1236, 1),
(92, 'admin', 'abdullah', 100, '2020-07-24 12:27:17', 'bkash', 2, 12364789, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `balance` int(11) NOT NULL,
  `kills` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `balance`, `kills`, `win`, `play`, `status`) VALUES
(1, 'admin', '123456', 3406, 19, 767, 5, 1),
(2, 'abdullah', '123456', 124, 10, 34, 4, 0),
(3, 'sumon', '123456', 0, 0, 0, 0, 0),
(4, '', '', 452, 0, 452, 0, 0),
(5, 'sabbir1', '123456', 8, 11, 0, 4, 0),
(6, '⥑⥎⤼↺ নিমু ', '123456', 80, 0, 0, 0, 0),
(7, 'niloy', '123456', 20, 2, 100, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transections`
--
ALTER TABLE `transections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transections`
--
ALTER TABLE `transections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
