-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2021 at 02:44 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contribution_appication`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `f_id` int(20) NOT NULL,
  `f_name` varchar(125) NOT NULL,
  `f_description` text NOT NULL,
  `f_contact` varchar(255) NOT NULL,
  `faculty_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `file_categories`
--

CREATE TABLE `file_categories` (
  `ctg_id` int(20) NOT NULL,
  `ctg_name` varchar(255) NOT NULL,
  `ctg_description` text NOT NULL,
  `ctg_deadline` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `file_submit`
--

CREATE TABLE `file_submit` (
  `file_id` int(11) NOT NULL,
  `file_content_upload` varchar(555) NOT NULL,
  `file_date_uploaded` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file_submit`
--

INSERT INTO `file_submit` (`file_id`, `file_content_upload`, `file_date_uploaded`) VALUES
(4, './image/6e9b94ff974eb0caea9788a7aaa976d897485493_2490671654577425_8179314827781472256_n.png', 1614889476);

-- --------------------------------------------------------

--
-- Table structure for table `file_submit_to_system`
--

CREATE TABLE `file_submit_to_system` (
  `file_id` int(20) NOT NULL,
  `file_categories_id` int(20) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_description` text NOT NULL,
  `file_faculty_id` int(20) NOT NULL,
  `file_semester_id` int(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `comment` text NOT NULL,
  `file_date_uploaded` datetime NOT NULL,
  `file_date_edited` datetime NOT NULL,
  `file_content_upload` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(20) NOT NULL,
  `news_content_short` varchar(255) NOT NULL,
  `news_content` text NOT NULL,
  `news_image` varchar(255) NOT NULL,
  `news_date_create_time` datetime NOT NULL,
  `news_title` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `n_id` int(20) NOT NULL,
  `n_faculty_id` int(20) NOT NULL,
  `notification` text NOT NULL,
  `n_date_time` datetime NOT NULL,
  `n_status` int(11) NOT NULL,
  `n_user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(20) NOT NULL,
  `role_name` varchar(15) NOT NULL,
  `role_full_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semester_id` int(20) NOT NULL,
  `semester` varchar(125) NOT NULL,
  `schoolyear` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(125) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  `u_create_time` date NOT NULL,
  `fullname` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `username`, `password`, `email`, `status`, `u_create_time`, `fullname`) VALUES
(1, '', '', 'chinhtbgch17527@fpt.edu.vn', 1, '0000-00-00', 'Truong Ba Chinh David COdy'),
(2, '', '', 'linhttmgbh17474@fpt.edu.vn', 1, '0000-00-00', 'My Linh');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `user_role_Id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `role_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `file_categories`
--
ALTER TABLE `file_categories`
  ADD PRIMARY KEY (`ctg_id`);

--
-- Indexes for table `file_submit`
--
ALTER TABLE `file_submit`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `file_submit_to_system`
--
ALTER TABLE `file_submit_to_system`
  ADD PRIMARY KEY (`file_id`),
  ADD KEY `fogeign_key_file_semester` (`file_semester_id`),
  ADD KEY `file_submit_to_system_ibfk_1` (`file_categories_id`),
  ADD KEY `fogeign_key_file_faculty` (`file_faculty_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`n_id`),
  ADD KEY `fogeign_key_notification_faculty` (`n_faculty_id`),
  ADD KEY `fogeign_key_notification_user` (`n_user_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`,`role_name`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`user_role_Id`),
  ADD KEY `fogeign_key_userRole_role` (`role_id`),
  ADD KEY `fogeign_key_userRole_user` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_submit`
--
ALTER TABLE `file_submit`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `file_submit_to_system`
--
ALTER TABLE `file_submit_to_system`
  MODIFY `file_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `n_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `user_role_Id` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `file_submit_to_system`
--
ALTER TABLE `file_submit_to_system`
  ADD CONSTRAINT `file_submit_to_system_ibfk_1` FOREIGN KEY (`file_categories_id`) REFERENCES `file_categories` (`ctg_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fogeign_key_file_faculty` FOREIGN KEY (`file_faculty_id`) REFERENCES `faculty` (`f_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fogeign_key_file_semester` FOREIGN KEY (`file_semester_id`) REFERENCES `semester` (`semester_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `fogeign_key_notification_faculty` FOREIGN KEY (`n_faculty_id`) REFERENCES `faculty` (`f_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fogeign_key_notification_user` FOREIGN KEY (`n_user_id`) REFERENCES `user_role` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `fogeign_key_userRole_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fogeign_key_userRole_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
