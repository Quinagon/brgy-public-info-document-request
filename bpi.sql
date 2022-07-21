-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2021 at 08:09 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpi`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement_tbl`
--

CREATE TABLE `announcement_tbl` (
  `a_ID` int(11) NOT NULL,
  `a_title` varchar(100) NOT NULL,
  `a_description` varchar(1000) NOT NULL,
  `a_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement_tbl`
--

INSERT INTO `announcement_tbl` (`a_ID`, `a_title`, `a_description`, `a_image`) VALUES
(1, '', 'Sample Image\r\n', 'barangay.jpg'),
(3, '', 'Dito Ang Titulo\r\n', 'Barangay-743.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tbl`
--

CREATE TABLE `feedback_tbl` (
  `id_no.` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_tbl`
--

INSERT INTO `feedback_tbl` (`id_no.`, `name`, `email`, `subject`, `message`, `date`) VALUES
(4, 'Rey Chabby Estrera', 'estrera.reychabby2@gmail.com', 'RoadWork', 'ghgh[phgpog', '2021-07-13'),
(5, 'Rey Chabby Estrera', 'estrera.reychabby2@gmail.com', 'asdasd', 'ghgh[phgpog', '2021-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `project_tbl`
--

CREATE TABLE `project_tbl` (
  `project_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `p_title` varchar(500) NOT NULL,
  `p_description` varchar(1000) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `featured` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_tbl`
--

INSERT INTO `project_tbl` (`project_id`, `image`, `p_title`, `p_description`, `start_date`, `end_date`, `status`, `featured`) VALUES
(7, 'IMG_20201128_115807.jpg', 'Kiwanis', 'KIwanis Club of Manila Christmas Party', '2020-12-25', '2020-12-25', 'Finished', ''),
(8, 'IMG_20201128_115459.jpg', 'Christmas Donation', 'Christmas Donation of the Kiwanis Club of Manila on Father Monti Foundation', '2020-12-25', '2020-12-25', 'Finished', 'Yes'),
(13, 'asdasd.png', 'Online Classroom', 'Online Class', '2021-07-14', '2021-07-14', 'Ongoing', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `id_no.` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `birthdate` date NOT NULL,
  `contact_no` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `address` varchar(500) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `acct_type` varchar(5) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`id_no.`, `name`, `gender`, `birthdate`, `contact_no`, `email`, `address`, `username`, `password`, `acct_type`, `created_at`) VALUES
(16, 'Rey Chabby Estrera', 'Male', '1999-02-20', 2147483647, 'rey.chabby.cabantug.estrera@gmail.com', '#9 Alimango st., Jem 7 Subdivision brgy. talipapa', 'Rey Chabby', 'eb53f9bf129df40c19637270ff7421a8', '', '2021-07-09'),
(17, 'Don Juan Tiburcio', 'Male', '1985-12-23', 2147483647, 'someone@someone.com', '#9 Alimango st., Jem 7 Subdivision brgy. talipapa', 'Juan', 'b9e748e59873e94a3101fb4c1e580eb8', 'admin', '2021-07-13'),
(18, 'Patricia Mae Amar', 'Female', '2000-08-31', 2147483647, 'somewhere@someone.com', '#9 Alimango st., Jem 7 Subdivision brgy. talipapa', 'amar', '8ce2a9452a4246ad9da4c5b0629a1e33', 'user', '2021-07-13'),
(19, 'Darlene Quinagon', 'Female', '2021-07-01', 0, 'darlene.quinagon@gmail.com', '42 San julian ', 'drln', 'drln', 'admin', '2021-07-01'),
(20, 'Darlene Quinagon', 'Female', '2021-07-01', 0, 'darlene.quinagon@gmail.com', '42 San julian ', 'drln', 'drln', 'admin', '2021-07-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement_tbl`
--
ALTER TABLE `announcement_tbl`
  ADD PRIMARY KEY (`a_ID`);

--
-- Indexes for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  ADD PRIMARY KEY (`id_no.`);

--
-- Indexes for table `project_tbl`
--
ALTER TABLE `project_tbl`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`id_no.`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement_tbl`
--
ALTER TABLE `announcement_tbl`
  MODIFY `a_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  MODIFY `id_no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project_tbl`
--
ALTER TABLE `project_tbl`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `id_no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
