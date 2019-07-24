-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2018 at 07:16 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(1) NOT NULL,
  `email` varchar(80) NOT NULL,
  `admin_password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `archieved_books`
--

CREATE TABLE `archieved_books` (
  `id` int(10) NOT NULL,
  `title` varchar(80) NOT NULL,
  `author` varchar(80) NOT NULL,
  `category` varchar(80) NOT NULL,
  `number_of_pages` int(10) NOT NULL,
  `number_of_reads` int(10) NOT NULL,
  `number_of_likes` int(10) NOT NULL,
  `number_of_dislikes` int(10) NOT NULL,
  `recomended` int(10) NOT NULL,
  `date_of_arrival` datetime NOT NULL,
  `date_archived` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) NOT NULL,
  `title` varchar(80) NOT NULL,
  `author` varchar(80) NOT NULL,
  `category` varchar(80) NOT NULL,
  `number_of_pages` int(10) NOT NULL,
  `number_of_reads` int(10) NOT NULL,
  `number_of_likes` int(10) NOT NULL,
  `number_of_dislikes` int(10) NOT NULL,
  `recomended` int(10) NOT NULL,
  `date_of_arrival` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `borrow_book`
--

CREATE TABLE `borrow_book` (
  `id` int(10) NOT NULL,
  `student_name` varchar(80) NOT NULL,
  `index_number` varchar(10) NOT NULL,
  `email` varchar(80) NOT NULL,
  `title` varchar(80) NOT NULL,
  `reason` text NOT NULL,
  `time_in` datetime NOT NULL,
  `time_out` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deleted_accounts`
--

CREATE TABLE `deleted_accounts` (
  `id` int(10) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `index_number` varchar(10) NOT NULL,
  `student_level` int(2) NOT NULL,
  `course` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL,
  `number_of_times_login` int(10) NOT NULL,
  `time_login` datetime NOT NULL,
  `time_logout` datetime NOT NULL,
  `date_account_was_created` datetime NOT NULL,
  `date_account_was_deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `FAQs`
--

CREATE TABLE `FAQs` (
  `id` int(10) NOT NULL,
  `question` text NOT NULL,
  `name_of_poster` varchar(80) NOT NULL,
  `comments` text NOT NULL,
  `number_of_likes` int(10) DEFAULT NULL,
  `number_of_dislikes` int(10) DEFAULT NULL,
  `name_of_commenter` varchar(80) NOT NULL,
  `number_of_comments` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `index_number` varchar(255) NOT NULL,
  `image` longblob NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `index_number` varchar(10) NOT NULL,
  `student_level` varchar(3) NOT NULL,
  `course` varchar(255) NOT NULL,
  `student_password` varchar(80) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL,
  `number_of_times_login` int(10) NOT NULL,
  `time_login` datetime NOT NULL,
  `time_logout` datetime NOT NULL,
  `date_account_was_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `first_name`, `last_name`, `index_number`, `student_level`, `course`, `student_password`, `email`, `phone_number`, `active_status`, `number_of_times_login`, `time_login`, `time_logout`, `date_account_was_created`) VALUES
(6, 'michael', 'otu', '040918148', '100', 'BIT', 'acb6d05f53009ac6584c061cb9cc1fe6', 'popecan1000@gmail.com', '0267330353', 0, 132, '2018-10-25 13:06:49', '2018-10-25 13:28:47', '2018-10-23 19:39:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `archieved_books`
--
ALTER TABLE `archieved_books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `borrow_book`
--
ALTER TABLE `borrow_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deleted_accounts`
--
ALTER TABLE `deleted_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `index_number` (`index_number`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_password` (`student_password`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `archieved_books`
--
ALTER TABLE `archieved_books`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `borrow_book`
--
ALTER TABLE `borrow_book`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deleted_accounts`
--
ALTER TABLE `deleted_accounts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
