-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2021 at 08:08 AM
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
-- Database: `brgyinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin_staff`
--

CREATE TABLE `tbladmin_staff` (
  `res_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` varchar(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `civilstatus` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `profile` blob NOT NULL,
  `date_registered` date NOT NULL,
  `role` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin_staff`
--

INSERT INTO `tbladmin_staff` (`res_id`, `user_id`, `firstname`, `middlename`, `lastname`, `birthday`, `age`, `email`, `contactno`, `gender`, `civilstatus`, `address`, `profile`, `date_registered`, `role`) VALUES
(1, NULL, 'Darlene', 'Luyas', 'Quinagon', '2000-02-04', 0, 'darlene.quinagon@gmail.com', '09987654321', 'female', 'single', '42 San Julian St Quezon City', '', '2021-07-22', 'admin'),
(2, NULL, 'Mica mae', 'Luyas', 'Quinagon', '2001-02-04', 0, 'mica@example.com', '09987654321', 'female', 'single', '42 San Julian St Quezon City', '', '2021-07-22', 'admin'),
(3, NULL, 'Dave', 'Luyas', 'Quinagon', '2002-07-02', 0, 'daveluyas@gmail.com', '09987654321', 'male', 'single', '42 San Julian St Quezon City', '', '2021-07-22', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblbrgy_business_permit`
--

CREATE TABLE `tblbrgy_business_permit` (
  `permit_id` int(11) NOT NULL,
  `res_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `business_name` varchar(200) NOT NULL,
  `business_address` varchar(200) NOT NULL,
  `business_type` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_recorded` date NOT NULL,
  `status` varchar(15) NOT NULL,
  `reference_no` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbrgy_business_permit`
--

INSERT INTO `tblbrgy_business_permit` (`permit_id`, `res_id`, `name`, `business_name`, `business_address`, `business_type`, `email`, `date_recorded`, `status`, `reference_no`) VALUES
(98, NULL, 'Darlene Quinagon', 'Milk Tea ', 'San Julan St', 'Online', '', '2021-07-01', 'Approved', 0),
(99, NULL, 'Clarissa Moralde', 'CLothable', 'Virtual', 'Online Business', '', '2021-07-02', '', 0),
(100, NULL, 'Clarissa Moralde', 'CLothable', 'Virtual', 'Online Business', '', '2021-07-02', '', 0),
(101, NULL, 'Tricia Yu', 'FoodSpa', 'Virtual', 'Food Cart', '', '2021-06-30', 'Approved', 0),
(102, NULL, 'Tricia Yu', 'FoodSpa', 'Virtual', 'Food Cart', '', '2021-06-30', 'Approved', 0),
(103, NULL, 'Darlene Quinagon', 'Livinstar', '32 San Julian st. Gulod Novaliches Quezon City', 'Clothing - Online business', 'darlene.quinagon@gmail.com', '2021-07-12', 'Approved', 827944860),
(104, NULL, 'Darlene Quinagon', 'Livinstar', '32 San Julian st. Gulod Novaliches Quezon City', 'Clothing - Online business', 'darlene.quinagon@gmail.com', '2021-07-12', 'Dispproved', 1451015490),
(105, NULL, 'Collin Carpena', 'Livinstar', '32 San Julian st. Gulod Novaliches Quezon City', 'Clothing - Online business', 'darlene.quinagon@gmail.com', '2021-07-14', 'pending', 2076362331);

-- --------------------------------------------------------

--
-- Table structure for table `tblbrgy_id`
--

CREATE TABLE `tblbrgy_id` (
  `certificate_id` int(11) NOT NULL,
  `res_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `contactno` int(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_recorded` date NOT NULL,
  `referenceno` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbrgy_id`
--

INSERT INTO `tblbrgy_id` (`certificate_id`, `res_id`, `name`, `contact_person`, `contactno`, `address`, `date_recorded`, `referenceno`, `status`, `email`) VALUES
(12, NULL, 'Geiza Salvador', 'Mama nya', 9087654, 'sa bahay nya', '2021-07-01', 0, '0', ''),
(13, NULL, 'DARLENE LUYAS QUINAGON', 'Mae Tabaosares', 2147483647, 'Vitrual', '2021-07-07', 146425335, 'pending', 'darlene.quinagon@gmail.com'),
(14, NULL, 'DARLENE LUYAS QUINAGON', 'Mica Quinagon', 2147483647, 'Vitrual', '2021-07-07', 72485948, 'Approved', 'darlene.quinagon@gmail.com'),
(15, NULL, 'DARLENE LUYAS QUINAGON', 'Mica Quinagon', 2147483647, 'Vitrual', '2021-07-07', 1704585317, 'pending', 'darlene.quinagon@gmail.com'),
(16, NULL, 'Mae Tabaosares', 'Summer meow meow', 2147483647, 'North Fairview qc', '2021-07-13', 428781010, 'pending', 'mae.cabatas.tabaosares@gmail.com'),
(17, NULL, 'Darlene Quinagon', 'Summer meow meow', 2147483647, '32 San Julian st.', '2021-07-14', 1764551733, 'pending', 'darlene.quinagon@gmail.com');

-- --------------------------------------------------------

--
-- Stand-in structure for view `tblcertificate`
-- (See below for the actual view)
--
CREATE TABLE `tblcertificate` (
`req_id` int(11)
,`res_id` int(11)
,`name` varchar(255)
,`type_of_request` varchar(200)
,`reference_no` int(100)
,`email` varchar(255)
,`purpose` varchar(200)
,`date_recorded` date
,`status` varchar(200)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tblclearance`
-- (See below for the actual view)
--
CREATE TABLE `tblclearance` (
`req_id` int(11)
,`res_id` int(11)
,`name` varchar(255)
,`type_of_request` varchar(200)
,`reference_no` int(100)
,`email` varchar(255)
,`purpose` varchar(200)
,`date_recorded` date
,`status` varchar(200)
);

-- --------------------------------------------------------

--
-- Table structure for table `tblcomplaints`
--

CREATE TABLE `tblcomplaints` (
  `complaints_id` int(11) NOT NULL,
  `res_id` int(11) DEFAULT NULL,
  `complainant` varchar(255) NOT NULL,
  `location_of_incidents` varchar(300) NOT NULL,
  `person_to_complain` varchar(300) NOT NULL,
  `subject_of_complain` varchar(255) NOT NULL,
  `complain` varchar(300) NOT NULL,
  `file_attachment` longblob NOT NULL,
  `date_recorded` date NOT NULL,
  `reference_no` int(100) NOT NULL,
  `status` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcomplaints`
--

INSERT INTO `tblcomplaints` (`complaints_id`, `res_id`, `complainant`, `location_of_incidents`, `person_to_complain`, `subject_of_complain`, `complain`, `file_attachment`, `date_recorded`, `reference_no`, `status`, `email`) VALUES
(8, NULL, 'Darlene Quinagon', '32 San Julian st.', 'John Loise Pechon', 'Stalker', 'Nistalk nya mga acct ko, sometimes hacked it.', '', '2021-07-12', 1663193721, 'Approved', 'darlene.quinagon@gmail.com'),
(9, NULL, 'Darlene Quinagon', 'Victoria st', 'John Loise Pechon', 'Stalker', 'Nistalk nya mga acct ko, sometimes hacked it.', '', '2021-07-12', 59438976, 'Dispproved', 'darlene.quinagon@gmail.com'),
(10, NULL, 'Mae Tabaosares', 'Victoria st', 'John Loise Pechon', 'Stalker', 'Nistalk nya mga acct ko, sometimes hacked it.', '', '2021-07-14', 327536514, 'Approved', 'darlene.quinagon@gmail.com'),
(11, NULL, 'Darlene Quinagon', 'Victoria st', 'John Loise Pechon', 'Stalker', 'Nistalk nya mga acct ko, sometimes hacked it.', '', '2021-07-14', 629378171, 'Disapproved', 'darlene.quinagon@gmail.com'),
(12, NULL, 'Darlene Quinagon', 'Victoria st', 'John Loise Pechon', 'Stalker', 'Nistalk nya mga acct ko, sometimes hacked it.', '', '2021-07-14', 1825064185, 'pending', 'darlene.quinagon@gmail.com'),
(13, NULL, 'Mae Tabaosares', 'Victoria st', 'John Loise Pechon', 'Stalker', 'Nistalk nya mga acct ko, sometimes hacked it.', '', '2021-07-14', 1790493154, 'pending', 'darlene.quinagon@gmail.com'),
(14, NULL, 'Collin Carpena', 'Victoria st', 'John Loise Pechon', 'Stalker', 'Nistalk nya mga acct ko, sometimes hacked it.', '', '2021-07-14', 824749083, 'Approved', 'darlene.quinagon@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbldocument_res`
--

CREATE TABLE `tbldocument_res` (
  `req_id` int(11) NOT NULL,
  `res_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `type_of_request` varchar(200) NOT NULL,
  `reference_no` int(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `date_recorded` date NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldocument_res`
--

INSERT INTO `tbldocument_res` (`req_id`, `res_id`, `name`, `type_of_request`, `reference_no`, `email`, `purpose`, `date_recorded`, `status`) VALUES
(11, NULL, 'Jemilyn Roque', 'Barangay Indigency', 1243040393, 'jem@example.com', 'School Requirements', '2021-07-07', 'Disapproved'),
(12, NULL, 'Jemilyn Roque', 'Barangay Indigency', 2130049997, 'jem@example.com', 'Scholarship', '2021-07-07', 'Approved'),
(13, NULL, 'Jemilyn Roque', 'Barangay Indigency', 1844664969, 'jem@example.com', 'School Requirements', '2021-07-07', 'Disapproved'),
(14, NULL, 'Jemilyn Roque', 'Barangay Indigency', 1918140852, 'jem@example.com', 'Scholarship', '2021-07-07', 'Disapproved'),
(15, NULL, 'Jemilyn Roque', 'Barangay CertificateBarangay Indigency', 439491371, 'jem@example.com', 'Scholarship', '2021-07-07', 'pending'),
(16, NULL, 'Jemilyn Roque', 'Barangay Indigency', 1411864487, 'jem@example.com', 'School Requirements', '2021-07-07', 'pending'),
(17, NULL, 'Jemilyn Roque', 'Barangay Indigency', 1044946982, 'jem@example.com', 'Scholarship', '2021-07-07', 'pending'),
(18, NULL, 'Jemilyn Roque', 'Barangay Certificate', 1591730241, 'jem@example.com', 'School Requirements', '2021-07-07', 'Approved'),
(19, NULL, 'Jemilyn Roque', 'Barangay Certificate', 823318110, 'jem@example.com', 'Scholarship', '2021-07-07', 'Approved'),
(21, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Certificate', 1172857342, 'darlene.quinagon@gmail.com', 'School Requirements', '2021-07-07', 'Approved'),
(22, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Certificate', 1217438825, 'darlene.quinagon@gmail.com', 'School Requirements', '2021-07-07', 'Approved'),
(23, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Certificate', 57422296, 'darlene.quinagon@gmail.com', 'Scholarship', '2021-07-07', 'Approved'),
(24, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Certificate', 694330743, 'darlene.quinagon@gmail.com', 'Scholarship', '2021-07-07', 'Approved'),
(25, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Certificate', 1520454742, 'darlene.quinagon@gmail.com', 'Scholarship', '2021-07-07', 'Approved'),
(26, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Certificate', 993808306, 'darlene.quinagon@gmail.com', 'Scholarship', '2021-07-07', 'Approved'),
(27, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Certificate', 249881949, 'darlene.quinagon@gmail.com', 'Scholarship', '2021-07-07', 'Approved'),
(28, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Certificate', 1603586736, 'darleneluyasquinagon@gmail.com', 'School Requirements', '2021-07-07', 'Approved'),
(29, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Certificate', 314242708, 'darleneluyasquinagon@gmail.com', 'School Requirements', '2021-07-07', 'Approved'),
(30, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Certificate', 1041013678, 'darlene.quinagon@gmail.com', 'School Requirements', '2021-07-07', 'Approved'),
(31, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Certificate', 1422272316, 'darleneluyasquinagon@gmail.com', 'School Requirements', '2021-07-07', 'Approved'),
(32, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Certificate', 1620372378, 'darleneluyasquinagon@gmail.com', 'School Requirements', '2021-07-07', 'Approved'),
(33, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Certificate', 2128695048, 'darleneluyasquinagon@gmail.com', 'School Requirements', '2021-07-07', 'Approved'),
(34, NULL, 'Darla Luyas', 'Barangay Certificate', 1142374477, 'darleneluyasquinagon@gmail.com', 'Scholarship', '2021-07-07', 'Approved'),
(35, NULL, 'DRLN Quinagon', 'Barangay Certificate', 152394964, 'darleneluyasquinagon@gmail.com', 'Scholarship', '2021-07-07', 'pending'),
(36, NULL, 'ARLYN LUYAS', 'Barangay Certificate', 1959301310, 'darleneluyasquinagon@gmail.com', 'School Requirements', '2021-07-07', 'Approved'),
(37, NULL, 'arlinang luyas', 'Barangay Certificate', 636447092, 'darleneluyasquinagon@gmail.com', 'Scholarship', '2021-07-07', 'Approved'),
(38, NULL, 'linang quinagom', 'Barangay Certificate', 1818465433, 'darleneluyasquinagon@gmail.com', 'School Requirements', '2021-07-07', 'pending'),
(39, NULL, 'linang quinagom', 'Barangay Certificate', 1093289390, 'darleneluyasquinagon@gmail.com', 'School Requirements', '2021-07-07', 'pending'),
(40, NULL, 'linang quinagom', 'Barangay Clearance', 2101843656, 'darleneluyasquinagon@gmail.com', 'School Requirements', '2021-07-07', 'Approved'),
(41, NULL, 'mikay quinagon', 'Barangay Certificate', 1736937449, 'darleneluyasquinagon@gmail.com', 'Scholarship', '2021-07-07', 'pending'),
(42, NULL, 'mikay quinagon', 'Barangay Certificate', 894760368, 'darleneluyasquinagon@gmail.com', 'Scholarship', '2021-07-07', 'pending'),
(43, NULL, 'Mikaaaaay', 'Barangay Certificate', 1079060858, 'darleneluyasquinagon@gmail.com', 'Scholarship', '2021-07-07', 'pending'),
(44, NULL, 'Mae Tabaosares', 'Barangay Clearance', 398189498, 'darleneluyasquinagon@gmail.com', 'Scholarship', '2021-07-07', 'Approved'),
(45, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Certificate', 0, 'darleneluyasquinagon@gmail.com', 'Scholarship', '2021-07-07', 'Approved'),
(46, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Certificate', 1, 'darlene.quinagon@gmail.com', 'School Requirements', '2021-07-07', 'Approved'),
(47, NULL, 'DARLENEQUINAGON', 'Barangay Indigency', 0, 'darlene.quinagon@gmail.com', 'School Requirements', '2021-07-07', 'Approved'),
(48, NULL, 'Mica Quinagon', 'Barangay Indigency', 1561986534, 'darleneluyasquinagon@gmail.com', 'Scholarship', '2021-07-07', 'pending'),
(49, NULL, 'Mica Quinagon', 'Barangay Indigency', 727288428, 'darleneluyasquinagon@gmail.com', 'Scholarship', '2021-07-07', 'pending'),
(50, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Indigency', 717780159, 'darlene.quinagon@gmail.com', 'School Requirements', '2021-07-07', 'Approved'),
(51, NULL, 'ARLYN LUYAS', 'Barangay Certificate', 137490746, 'darleneluyasquinagon@gmail.com', 'Scholarship', '2021-07-07', 'Approved'),
(52, NULL, 'Mica Quinagon', 'Barangay Certificate', 2054640083, 'darleneluyasquinagon@gmail.com', 'School Requirements', '2021-07-07', 'pending'),
(53, NULL, 'Mae Tabaosares', 'Barangay Certificate', 1364644906, 'darleneluyasquinagon@gmail.com', 'Scholarship', '2021-07-07', 'pending'),
(54, NULL, 'Mae Tabaosares', 'Barangay Clearance', 3811743, 'darleneluyasquinagon@gmail.com', 'School Requirements', '2021-07-07', 'Approved'),
(55, NULL, 'Mae Tabaosares', 'Barangay Certificate', 363994737, 'darleneluyasquinagon@gmail.com', 'School Requirements', '2021-07-07', 'pending'),
(56, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Certificate', 541744323, 'darlene.quinagon@gmail.com', 'Scholarship', '2021-07-07', 'Approved'),
(57, NULL, 'Darlene', 'Barangay Clearance', 850805073, 'darleneluyas@gmail.com', 'Scholarship', '2021-07-07', 'Approved'),
(58, NULL, 'Darlene', 'Barangay Clearance', 1849939234, 'darleneluyas@gmail.com', 'School Requirements', '2021-07-07', 'Approved'),
(59, NULL, 'Darlene', 'Barangay Certificate', 1433857732, 'darleneluyas@gmail.com', 'School Requirements', '2021-07-07', 'Approved'),
(60, NULL, 'Darlene', 'Barangay Certificate', 1286819875, 'darleneluyas@gmail.com', 'School Requirements', '2021-07-07', 'Approved'),
(61, NULL, 'Darlene', 'Barangay Certificate', 1344285660, 'darleneluyas@gmail.com', 'Scholarship', '2021-07-07', 'Approved'),
(62, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Certificate', 262516713, 'darlene.quinagon@gmail.com', 'Scholarship', '2021-07-07', 'Approved'),
(63, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Certificate', 1173559816, 'darleneluyas@gmail.com', 'Scholarship', '2021-07-07', 'Dispproved'),
(64, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Certificate', 576296853, 'darlene.quinagon@gmail.com', 'Scholarship', '2021-07-07', 'Approved'),
(65, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Certificate', 1246306685, 'darlene.quinagon@gmail.com', 'School Requirements', '2021-07-07', 'Approved'),
(66, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Certificate', 715255826, 'darleneluyasquinagon@gmail.com', 'Scholarship', '2021-07-07', 'Approved'),
(67, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Clearance', 311547226, 'darlene.quinagon@gmail.com', 'Scholarship', '2021-07-07', 'Approved'),
(68, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Clearance', 9362467, 'darlene.quinagon@gmail.com', 'Scholarship', '2021-07-07', 'Approved'),
(69, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Certificate', 569964048, 'darleneluyasquinagon@gmail.com', 'Scholarship', '2021-07-07', 'Approved'),
(70, NULL, 'DARLENE', 'Barangay Certificate', 1717113470, 'darleneluyas@gmail.com', 'Scholarship', '2021-07-07', 'Approved'),
(71, NULL, 'Mikaaaaay', 'Barangay Clearance', 318908091, 'darleneluyasquinagon@gmail.com', 'Scholarship', '2021-07-07', 'Approved'),
(72, NULL, 'DARLENE LUYAS QUINAGON', 'Barangay Certificate', 1281268962, 'darlene.quinagon@gmail.com', 'Scholarship', '2021-07-07', 'Approved'),
(73, NULL, 'Darlene Quinagon', 'Barangay Certificate', 1385773769, 'darlene.quinagon@gmail.com', 'Work Requirements', '2021-07-12', 'pending'),
(74, NULL, 'Darlene Quinagon', 'Barangay Certificate', 550706617, 'darlene.quinagon@gmail.com', '', '2021-07-12', 'pending'),
(75, NULL, 'Darlene Quinagon', 'Barangay Certificate', 248890417, 'darlene.quinagon@gmail.com', '', '2021-07-12', 'pending'),
(76, NULL, 'Darlene Quinagon', 'Barangay Certificate', 2070267050, 'darlene.quinagon@gmail.com', 'Work Requirements', '2021-07-13', 'pending'),
(77, NULL, 'Darlene Quinagon', 'Barangay Certificate', 1636824099, 'darlene.quinagon@gmail.com', 'Work Requirements', '2021-07-13', 'pending'),
(78, NULL, 'Darlene Quinagon', 'Barangay Certificate', 261531504, 'darlene.quinagon@gmail.com', 'Work Requirements', '2021-07-13', 'pending'),
(79, NULL, 'Darlene Quinagon', 'Barangay Certificate', 639638177, 'darlene.quinagon@gmail.com', 'Work Requirements', '2021-07-13', 'pending'),
(80, NULL, 'Mae Tabaosares', 'Barangay Clearance', 873447547, 'loise@exampe.com', 'Work Requirements', '2021-07-13', 'Approved'),
(81, NULL, 'Collin Carpena', 'Barangay Clearance', 1397820107, 'collin@example.com', 'Work Requirements', '2021-07-13', 'Approved'),
(82, NULL, 'Darlene Quinagon', 'Barangay Certificate', 263430124, 'darlene.quinagon@gmail.com', 'Work Requirements', '2021-07-14', 'Approved'),
(83, NULL, 'Darlene Quinagon', 'Barangay Clearance', 1369087355, 'darlene.quinagon@gmail.com', 'Work Requirements', '2021-07-14', 'Approved'),
(84, NULL, 'Darlene Quinagon', 'Barangay Certificate', 1430144203, 'darlene.quinagon@gmail.com', 'Work Requirements', '2021-07-14', 'pending'),
(85, NULL, 'Mae Tabaosares', 'Barangay Clearance', 1041408983, 'darlene.quinagon@gmail.com', 'Work Requirements', '2021-07-14', 'pending'),
(86, NULL, 'Collin Carpena', 'Barangay Indigency', 433362008, 'darlene.quinagon@gmail.com', 'Work Requirements', '2021-07-14', 'Approved'),
(87, NULL, 'Darlene Quinagon', 'Barangay Clearance', 1511520966, 'darlene.quinagon@gmail.com', 'Work Requirements', '2021-07-14', 'pending'),
(88, NULL, 'Mae Tabaosares', 'Barangay Clearance', 95873180, 'darlene.quinagon@gmail.com', 'Work Requirements', '2021-07-14', 'pending'),
(89, NULL, 'Collin Carpena', 'Barangay Clearance', 386459183, 'darlene.quinagon@gmail.com', 'Work Requirements', '2021-07-14', 'pending'),
(90, NULL, 'Darlene Quinagon', 'Barangay Certificate', 1119224067, 'darlene.quinagon@gmail.com', 'Work Requirements', '2021-07-14', 'pending'),
(91, NULL, 'Darlene Quinagon', 'Barangay Certificate', 1404958289, 'darlene.quinagon@gmail.com', 'Work Requirements', '2021-07-26', 'Approved'),
(92, NULL, 'Darlene Quinagon', 'Barangay Certificate', 1847116926, 'darlene.quinagon@gmail.com', 'Work Requirements', '2021-07-26', 'pending'),
(93, NULL, 'Darlene Quinagon', 'Barangay Certificate', 1597069930, 'darlene.quinagon@gmail.com', 'Work Requirements', '2021-07-26', 'pending'),
(94, NULL, 'Darlene Quinagon', 'Barangay Certificate', 879082317, 'darlene.quinagon@gmail.com', 'Work Requirements', '2021-07-26', 'pending'),
(95, NULL, 'Darlene Quinagon', 'Barangay Certificate', 294046647, 'darlene.quinagon@gmail.com', 'Work Requirements', '2021-07-26', 'pending'),
(96, NULL, 'Darlene Quinagon', 'Barangay Certificate', 1791206316, 'darlene.quinagon@gmail.com', 'Work Requirements', '2021-07-26', 'pending'),
(97, NULL, 'Darlene Quinagon', 'Barangay Certificate', 1040842824, 'darlene.quinagon@gmail.com', 'Work Requirements', '2021-07-26', 'pending'),
(98, NULL, 'Darlene Quinagon', 'Barangay Certificate', 1086539501, 'darlene.quinagon@gmail.com', 'Work Requirements', '2021-07-26', 'pending');

-- --------------------------------------------------------

--
-- Stand-in structure for view `tblindigency`
-- (See below for the actual view)
--
CREATE TABLE `tblindigency` (
`req_id` int(11)
,`res_id` int(11)
,`name` varchar(255)
,`type_of_request` varchar(200)
,`reference_no` int(100)
,`email` varchar(255)
,`purpose` varchar(200)
,`date_recorded` date
,`status` varchar(200)
);

-- --------------------------------------------------------

--
-- Table structure for table `tblresidents`
--

CREATE TABLE `tblresidents` (
  `res_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` varchar(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `civilstatus` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `profile` blob NOT NULL,
  `date_registered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblresidents`
--

INSERT INTO `tblresidents` (`res_id`, `user_id`, `firstname`, `middlename`, `lastname`, `birthday`, `age`, `email`, `contactno`, `gender`, `civilstatus`, `address`, `profile`, `date_registered`) VALUES
(161766, NULL, 'Darlene ', 'Luyas', 'Quinagon', '2000-02-04', 21, 'darlene.quinagon@gmail.com', '09987654321', 'female', 'single', '32 San Julian st.', '', '2021-07-20'),
(161767, NULL, 'Rey', 'Chabby', 'Estrera', '2021-07-21', 21, 'reychabby@example.com', '09987654321', 'male', 'single', 'QCU', '', '2021-07-21'),
(161768, NULL, 'Geiza May', 'Refugo', 'Salvador', '2021-07-21', 0, 'jza@exampe.com', '09123456789', 'female', 'single', 'QCU', '', '2021-07-21'),
(161769, NULL, 'Mica mae', 'Luyas', 'Quinagon', '2001-02-12', 0, 'mica@example.com', '09987654321', 'female', 'single', '42 San Julian St Quezon City', '', '2021-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbluseracct`
--

CREATE TABLE `tbluseracct` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `user_type` varchar(11) NOT NULL,
  `date_registered` date NOT NULL DEFAULT current_timestamp(),
  `profile` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluseracct`
--

INSERT INTO `tbluseracct` (`user_id`, `username`, `password`, `user_type`, `date_registered`, `profile`) VALUES
(1279, 'Joan', 'joan', 'admin', '2021-07-20', ''),
(1280, 'Darlene', 'drln', 'resident', '2021-07-20', ''),
(1281, 'Rey', 'rey', 'resident', '2021-07-21', ''),
(1283, 'Mica mae', 'quinagon', 'resident', '2021-07-22', ''),
(1284, 'Darlene', 'quinagon', 'resident', '2021-07-22', ''),
(1286, 'Dave', 'dave', 'admin', '2021-07-22', '');

-- --------------------------------------------------------

--
-- Structure for view `tblcertificate`
--
DROP TABLE IF EXISTS `tblcertificate`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tblcertificate`  AS SELECT `tbldocument_res`.`req_id` AS `req_id`, `tbldocument_res`.`res_id` AS `res_id`, `tbldocument_res`.`name` AS `name`, `tbldocument_res`.`type_of_request` AS `type_of_request`, `tbldocument_res`.`reference_no` AS `reference_no`, `tbldocument_res`.`email` AS `email`, `tbldocument_res`.`purpose` AS `purpose`, `tbldocument_res`.`date_recorded` AS `date_recorded`, `tbldocument_res`.`status` AS `status` FROM `tbldocument_res` WHERE `tbldocument_res`.`type_of_request` = 'Barangay Certificate' ;

-- --------------------------------------------------------

--
-- Structure for view `tblclearance`
--
DROP TABLE IF EXISTS `tblclearance`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tblclearance`  AS SELECT `tbldocument_res`.`req_id` AS `req_id`, `tbldocument_res`.`res_id` AS `res_id`, `tbldocument_res`.`name` AS `name`, `tbldocument_res`.`type_of_request` AS `type_of_request`, `tbldocument_res`.`reference_no` AS `reference_no`, `tbldocument_res`.`email` AS `email`, `tbldocument_res`.`purpose` AS `purpose`, `tbldocument_res`.`date_recorded` AS `date_recorded`, `tbldocument_res`.`status` AS `status` FROM `tbldocument_res` WHERE `tbldocument_res`.`type_of_request` = 'Barangay Clearance' ;

-- --------------------------------------------------------

--
-- Structure for view `tblindigency`
--
DROP TABLE IF EXISTS `tblindigency`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tblindigency`  AS SELECT `tbldocument_res`.`req_id` AS `req_id`, `tbldocument_res`.`res_id` AS `res_id`, `tbldocument_res`.`name` AS `name`, `tbldocument_res`.`type_of_request` AS `type_of_request`, `tbldocument_res`.`reference_no` AS `reference_no`, `tbldocument_res`.`email` AS `email`, `tbldocument_res`.`purpose` AS `purpose`, `tbldocument_res`.`date_recorded` AS `date_recorded`, `tbldocument_res`.`status` AS `status` FROM `tbldocument_res` WHERE `tbldocument_res`.`type_of_request` = 'Barangay Indigency' ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin_staff`
--
ALTER TABLE `tbladmin_staff`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tblbrgy_business_permit`
--
ALTER TABLE `tblbrgy_business_permit`
  ADD PRIMARY KEY (`permit_id`),
  ADD KEY `res_id` (`res_id`);

--
-- Indexes for table `tblbrgy_id`
--
ALTER TABLE `tblbrgy_id`
  ADD PRIMARY KEY (`certificate_id`),
  ADD KEY `res_id` (`res_id`);

--
-- Indexes for table `tblcomplaints`
--
ALTER TABLE `tblcomplaints`
  ADD PRIMARY KEY (`complaints_id`),
  ADD KEY `res_id` (`res_id`);

--
-- Indexes for table `tbldocument_res`
--
ALTER TABLE `tbldocument_res`
  ADD PRIMARY KEY (`req_id`),
  ADD KEY `res_id` (`res_id`);

--
-- Indexes for table `tblresidents`
--
ALTER TABLE `tblresidents`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbluseracct`
--
ALTER TABLE `tbluseracct`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin_staff`
--
ALTER TABLE `tbladmin_staff`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblbrgy_business_permit`
--
ALTER TABLE `tblbrgy_business_permit`
  MODIFY `permit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `tblbrgy_id`
--
ALTER TABLE `tblbrgy_id`
  MODIFY `certificate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tblcomplaints`
--
ALTER TABLE `tblcomplaints`
  MODIFY `complaints_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbldocument_res`
--
ALTER TABLE `tbldocument_res`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `tblresidents`
--
ALTER TABLE `tblresidents`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161770;

--
-- AUTO_INCREMENT for table `tbluseracct`
--
ALTER TABLE `tbluseracct`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1287;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblbrgy_business_permit`
--
ALTER TABLE `tblbrgy_business_permit`
  ADD CONSTRAINT `tblbrgy_business_permit_ibfk_1` FOREIGN KEY (`res_id`) REFERENCES `tblresidents` (`res_id`);

--
-- Constraints for table `tblbrgy_id`
--
ALTER TABLE `tblbrgy_id`
  ADD CONSTRAINT `tblbrgy_id_ibfk_1` FOREIGN KEY (`res_id`) REFERENCES `tblresidents` (`res_id`);

--
-- Constraints for table `tblcomplaints`
--
ALTER TABLE `tblcomplaints`
  ADD CONSTRAINT `tblcomplaints_ibfk_1` FOREIGN KEY (`res_id`) REFERENCES `tblresidents` (`res_id`);

--
-- Constraints for table `tbldocument_res`
--
ALTER TABLE `tbldocument_res`
  ADD CONSTRAINT `tbldocument_res_ibfk_1` FOREIGN KEY (`res_id`) REFERENCES `tblresidents` (`res_id`);

--
-- Constraints for table `tblresidents`
--
ALTER TABLE `tblresidents`
  ADD CONSTRAINT `tblresidents_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbluseracct` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
