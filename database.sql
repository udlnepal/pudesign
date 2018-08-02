-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2018 at 01:09 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_cp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `title`, `slug`, `text`) VALUES
(1, 'Test', 'test', 'Hello World !!'),
(2, 'What is Lorem Ipsum?', 'what-is-lorem-ipsum', 'Lorem Ipsum is simply dummy text.');

-- --------------------------------------------------------

--
-- Table structure for table `fql_sm`
--

CREATE TABLE `fql_sm` (
  `fo_id` int(15) NOT NULL,
  `fo_type` varchar(50) NOT NULL,
  `fo_ql_sm_title` varchar(200) NOT NULL,
  `fo_ql_sm_url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `middle_block`
--

CREATE TABLE `middle_block` (
  `id` int(15) NOT NULL,
  `icon_class_value` varchar(50) NOT NULL,
  `title_mblock` varchar(50) NOT NULL,
  `content_mblock` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `middle_block`
--

INSERT INTO `middle_block` (`id`, `icon_class_value`, `title_mblock`, `content_mblock`) VALUES
(5, 'fas fa-wrench', 'Engineering & Technology', 'The PU School of Science & Technology (PUSET), consists of the university''s "engineering & lightrmation technology" professions'' programs. '),
(6, 'fas fa-users', 'Management Campus', 'The PU Management Campus, consists of the university''s "management" professions'' programs.'),
(7, 'fas fa-school', 'Janata Adarsha Multiple Campus', 'Janata Adarsha Multiple Campus, consists of the university''s "arts & education" professions'' programs.'),
(9, 'fas fa-user-md ', 'Medical & Allied Science', 'The PU College of Medical & Alied Sciences (PUCMAS), consists of the university''s "medical-helping" professions'' programs.');

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

CREATE TABLE `news_events` (
  `ne_ql_id` int(25) NOT NULL,
  `ne_ql_type` varchar(25) NOT NULL,
  `title` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL,
  `link_address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_events`
--

INSERT INTO `news_events` (`ne_ql_id`, `ne_ql_type`, `title`, `date`, `link_address`) VALUES
(10, 'news', 'Science & Technology Programs', '', '#'),
(11, 'qlinks', 'Management Programs', '', '#'),
(12, 'qlinks', 'Health & Allied Science Programs', '', '#'),
(13, 'qlinks', 'Education Programs', '', '#'),
(14, 'qlinks', 'Art Programs', '', '#'),
(15, 'qlinks', 'Law Programs', '', '#'),
(16, 'news', 'Notice For All Affiliated Colleges', '2018-07-25', '#'),
(17, 'news', 'Faculty of Science and Technology', '2018-07-16', '#'),
(18, 'news', 'Entrance Result of Masters in Pharmacy', '2018-05-26', '#'),
(19, 'news', 'Entrance Result of Masters in Public Health', '2018-05-25', '#'),
(20, 'qlinks', 'aa', '', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `updated_at` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `updated_at`) VALUES
(24, 'dhruba', 'maharjan', 'dhruba@ramesh.com', '912ec803b2ce49e4a541068d495ab570', '2018-08-02 13:03:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `fql_sm`
--
ALTER TABLE `fql_sm`
  ADD PRIMARY KEY (`fo_id`);

--
-- Indexes for table `middle_block`
--
ALTER TABLE `middle_block`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_events`
--
ALTER TABLE `news_events`
  ADD PRIMARY KEY (`ne_ql_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fql_sm`
--
ALTER TABLE `fql_sm`
  MODIFY `fo_id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `middle_block`
--
ALTER TABLE `middle_block`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `ne_ql_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
