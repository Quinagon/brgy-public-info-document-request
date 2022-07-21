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
-- Database: `pmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(10) UNSIGNED NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'Canada'),
(2, 'United States'),
(3, 'Mexico');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `color` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `start`, `end`, `color`) VALUES
(1, 'Event 1', '2021-08-09 10:00:00', '2021-08-09 12:00:00', ''),
(2, 'meeting', '2021-04-25 00:00:00', '2021-04-26 00:00:00', '#cc4125'),
(3, 'mtyu', '2021-04-26 00:00:00', '2021-04-27 00:00:00', NULL),
(4, 'meeting1', '2021-05-30 09:00:00', '2021-05-30 09:30:00', NULL),
(5, 'collab', '2021-08-01 00:00:00', '2021-08-01 00:30:00', NULL),
(6, 'collab ulit', '2021-08-01 00:30:00', '2021-08-01 01:00:00', NULL),
(7, 'collab na naman', '2021-08-01 01:00:00', '2021-08-01 02:00:00', NULL),
(8, 'gathering', '2021-08-02 09:00:00', '2021-08-02 09:30:00', NULL),
(9, 'rfsgf', '2021-06-13 09:00:00', '2021-06-13 09:30:00', NULL),
(10, 'event10', '2021-07-14 12:30:00', '2021-07-14 13:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id`, `from_id`, `to_id`, `type`) VALUES
(1, 1, 3, 'FinishToStart'),
(2, 1, 6, 'FinishToStart'),
(4, 2, 2, 'FinishToFinish'),
(5, 22, 22, 'FinishToFinish'),
(6, 22, 22, 'FinishToFinish'),
(7, 22, 22, 'FinishToStart'),
(27, 1, 28, 'FinishToStart'),
(28, 0, 2, 'FinishtoStart');

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `market_id` int(10) UNSIGNED NOT NULL,
  `market_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`market_id`, `market_name`, `photo`, `contact_email`, `country_id`, `is_active`, `create_date`, `notes`) VALUES
(1, 'Great North', NULL, 'jane@superco.com', 1, 1, '2021-05-31', 'nothing new'),
(2, 'The Middle', NULL, 'sue@superco.com', 2, NULL, '2001-01-01', 'these are notes'),
(3, 'Latin Market', NULL, 'john@superco.com', 1, 0, '1999-10-31', 'expanding soon');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `milestone` tinyint(1) NOT NULL DEFAULT 0,
  `ordinal` int(11) DEFAULT NULL,
  `ordinal_priority` datetime DEFAULT NULL,
  `complete` int(11) NOT NULL DEFAULT 0,
  `PROJECTCOST` decimal(13,2) NOT NULL DEFAULT 0.00,
  `PROJECTSTATUS` varchar(10) CHARACTER SET latin1 NOT NULL DEFAULT 'ONGOING',
  `PROJECTEXPENSES` decimal(13,2) NOT NULL DEFAULT 0.00,
  `Color` varchar(30) DEFAULT NULL,
  `Decision` varchar(50) NOT NULL,
  `Remarks` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `name`, `start`, `end`, `parent_id`, `milestone`, `ordinal`, `ordinal_priority`, `complete`, `PROJECTCOST`, `PROJECTSTATUS`, `PROJECTEXPENSES`, `Color`, `Decision`, `Remarks`) VALUES
(1, 'Chapter 1', '2021-06-16 00:00:00', '2021-06-17 00:00:00', 1, 0, 1, NULL, 0, '0.00', 'ONGOING', '0.00', NULL, '', ''),
(36, 'Analysis', '2021-06-30 00:00:00', '2021-07-01 00:00:00', NULL, 0, 2, '2021-07-14 04:48:11', 0, '89.00', 'ONGOING', '110.00', NULL, 'Approved', 'Proceed'),
(37, 'Testing', '2021-07-02 00:00:00', '2021-07-03 00:00:00', NULL, 0, 3, '2021-07-14 04:48:11', 0, '35000.00', 'ONGOING', '0.00', NULL, '', ''),
(38, 'QREWEQREWRJWEKRHWKER', '2021-10-01 00:00:00', '2021-10-02 00:00:00', 40, 0, 0, '2021-06-16 11:17:14', 0, '0.00', 'ONGOING', '0.00', NULL, '', ''),
(39, 'Alpha and Beta', '2021-07-03 00:00:00', '2021-07-05 00:00:00', 37, 0, 0, '2021-06-16 11:15:49', 0, '0.00', 'ONGOING', '0.00', NULL, '', ''),
(40, 'hjhj', '2021-10-01 00:00:00', '2021-10-02 00:00:00', 41, 0, 0, '2021-06-16 11:19:10', 0, '0.00', 'ONGOING', '0.00', NULL, '', ''),
(42, 'Implementation', '2021-07-04 00:00:00', '2021-07-05 00:00:00', NULL, 0, 4, '2021-07-14 04:48:11', 0, '20000.00', 'ONGOING', '0.00', NULL, '', ''),
(43, 'Project Completion', '2021-07-05 00:00:00', '2021-06-02 00:00:00', NULL, 1, 5, '2021-07-14 04:48:11', 0, '0.00', 'ONGOING', '0.00', NULL, '', ''),
(44, 'New Project', '2021-07-13 00:00:00', '2021-07-17 00:00:00', NULL, 0, 0, '2021-07-14 04:48:11', 0, '40000.00', 'ONGOING', '0.00', NULL, 'Approved', 'Proceed '),
(45, 'New', '2021-07-14 00:00:00', '2021-07-17 00:00:00', NULL, 0, 1, '2021-07-14 04:48:11', 0, '30000.00', 'ONGOING', '0.00', NULL, '', NULL),
(46, 'chap1', '2021-07-14 00:00:00', '2021-07-15 00:00:00', 45, 0, NULL, NULL, 0, '0.00', 'ONGOING', '0.00', NULL, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblaccounts`
--

CREATE TABLE `tblaccounts` (
  `ACCOUNT_ID` int(11) NOT NULL,
  `ACCOUNT_NAME` varchar(255) NOT NULL,
  `ACCOUNT_USERNAME` varchar(255) NOT NULL,
  `ACCOUNT_PASSWORD` text NOT NULL,
  `ACCOUNT_TYPE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblaccounts`
--

INSERT INTO `tblaccounts` (`ACCOUNT_ID`, `ACCOUNT_NAME`, `ACCOUNT_USERNAME`, `ACCOUNT_PASSWORD`, `ACCOUNT_TYPE`) VALUES
(1, 'Patricia Mae P. Amar', 'amarpatriciamae@gmail.com', 'patty', 'Administrator'),
(6, 'Genalyn Sebello', 'genalyn.viado.sebello@gmail.com', 'seb', 'Secretary'),
(7, 'Rey Chabby Estrera', 'rey.chabby.cabantug.estrera2@gmail.com', 'rey', 'Secretary');

-- --------------------------------------------------------

--
-- Table structure for table `tblcommonmaster`
--

CREATE TABLE `tblcommonmaster` (
  `COMMON_ID` int(11) NOT NULL,
  `COMMONCODE` varchar(30) NOT NULL,
  `CATEGORY` varchar(30) NOT NULL,
  `LISTNAME` varchar(30) NOT NULL,
  `IS_DEFAULT` varchar(3) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcommonmaster`
--

INSERT INTO `tblcommonmaster` (`COMMON_ID`, `COMMONCODE`, `CATEGORY`, `LISTNAME`, `IS_DEFAULT`) VALUES
(1, 'ExpensesBID DOCS', 'Expenses', 'BID DOCS', 'YES'),
(2, 'ExpensesBID PREP', 'Expenses', 'BID PREP', 'YES'),
(3, 'ExpensesAREGLO', 'Expenses', 'AREGLO', 'YES'),
(4, 'ExpensesCOSH', 'Expenses', 'COSH', 'YES'),
(5, 'ExpensesPERFORMANCE BOND', 'Expenses', 'PERFORMANCE BOND', 'YES'),
(6, 'ExpensesCARI', 'Expenses', 'CARI', 'YES'),
(7, 'ExpensesSURETY BOND (MOBILIZAT', 'Expenses', 'SURETY BOND (MOBILIZATION)', 'YES'),
(8, 'ExpensesCONTRACT NOTARY', 'Expenses', 'CONTRACT NOTARY', 'YES'),
(9, 'ExpensesPERT CPM', 'Expenses', 'PERT CPM', 'YES'),
(10, 'ExpensesVOUCHER PRINTING', 'Expenses', 'VOUCHER PRINTING', 'YES'),
(11, 'ExpensesCONTRACTORS AFFIDAVIT', 'Expenses', 'CONTRACTORS AFFIDAVIT', 'YES'),
(12, 'ExpensesMQC OT', 'Expenses', 'MQC OT', 'YES'),
(13, 'ExpensesPICTURES', 'Expenses', 'PICTURES', 'YES'),
(14, 'ExpensesQCP', 'Expenses', 'QCP', 'YES'),
(15, 'ExpensesMATERIALS TESTING', 'Expenses', 'MATERIALS TESTING', 'YES'),
(16, 'ExpensesMATERIALS ENGINEER', 'Expenses', 'MATERIALS ENGINEER', 'YES'),
(17, 'Expenses0217', 'Expenses', '0217', 'YES'),
(18, 'ExpensesBACK UP COMPUTATION', 'Expenses', 'BACK UP COMPUTATION', 'YES'),
(19, 'ExpensesAS BUILT PLAN', 'Expenses', 'AS BUILT PLAN', 'YES'),
(20, 'ExpensesPROJECT ENGINEER', 'Expenses', 'PROJECT ENGINEER', 'YES'),
(21, 'ExpensesSURETY BOND RETENTION', 'Expenses', 'SURETY BOND RETENTION', 'YES'),
(22, 'ExpensesSOP', 'Expenses', 'SOP', 'YES'),
(23, 'ExpensesMATERIALS', 'Expenses', 'MATERIALS', 'YES'),
(24, 'ExpensesCEMENT', 'Expenses', 'CEMENT', 'YES'),
(25, 'ExpensesAGGREGATES', 'Expenses', 'AGGREGATES', 'YES'),
(26, 'ExpensesFUEL', 'Expenses', 'FUEL', 'YES'),
(27, 'ExpensesROYALTY', 'Expenses', 'ROYALTY', 'YES'),
(28, 'ExpensesVAT', 'Expenses', 'VAT', 'YES'),
(29, 'ExpensesTARP', 'Expenses', 'TARP', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `tblexpenses`
--

CREATE TABLE `tblexpenses` (
  `EXPID` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `EXPTYPE` varchar(30) NOT NULL,
  `EXPITEM` varchar(50) NOT NULL,
  `SUPPLIER` varchar(50) NOT NULL,
  `DATEGIVEN` date NOT NULL,
  `DATEADDED` date NOT NULL,
  `EXPENSES` decimal(12,2) NOT NULL,
  `REQUESTEDBY` varchar(30) NOT NULL,
  `ENCODER` varchar(30) NOT NULL,
  `EMPID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblexpenses`
--

INSERT INTO `tblexpenses` (`EXPID`, `id`, `EXPTYPE`, `EXPITEM`, `SUPPLIER`, `DATEGIVEN`, `DATEADDED`, `EXPENSES`, `REQUESTEDBY`, `ENCODER`, `EMPID`) VALUES
(116, 36, 'BID DOCS', 'Print', 'N/A', '2021-07-14', '2021-07-14', '30.00', 'Pat', 'Genalyn Sebello', 6),
(117, 36, 'BID DOCS', 'Folder', 'N/A', '2021-07-14', '2021-07-14', '40.00', 'Pat', 'Genalyn Sebello', 6),
(118, 36, 'BID DOCS', 'Print', 'N/A', '2021-07-15', '2021-07-14', '40.00', 'Pat', 'Genalyn Sebello', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tblfinalprojects`
--

CREATE TABLE `tblfinalprojects` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `PROJECTCOST` decimal(13,0) NOT NULL,
  `PROJECTSTATUS` varchar(255) NOT NULL,
  `PROJECTEXPENSES` decimal(13,0) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `Decision` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblproject`
--

CREATE TABLE `tblproject` (
  `PROJECTID` int(11) NOT NULL,
  `PROJECTIMAGE` text NOT NULL,
  `PROJECTNAME` varchar(50) NOT NULL,
  `PROJECTDESCRIPTION` varchar(1000) NOT NULL,
  `STARTDATE` date NOT NULL,
  `ENDDATE` date NOT NULL,
  `PROJECTCOST` decimal(13,2) NOT NULL,
  `PROJECTSTATUS` varchar(10) NOT NULL,
  `PROJECTEXPENSES` decimal(13,2) NOT NULL,
  `FEATURED` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproject`
--

INSERT INTO `tblproject` (`PROJECTID`, `PROJECTIMAGE`, `PROJECTNAME`, `PROJECTDESCRIPTION`, `STARTDATE`, `ENDDATE`, `PROJECTCOST`, `PROJECTSTATUS`, `PROJECTEXPENSES`, `FEATURED`) VALUES
(1, '', 'Concreting of Brgy. Camindangan National Highway, ', '', '2018-12-05', '2019-03-04', '13404043.99', 'ONGOING', '723391.54', ''),
(2, '', 'Salong NHS', '', '2019-01-18', '2019-04-27', '10000000.00', 'ONGOING', '70000.00', ''),
(3, '', 'Two Story Building MOA', '', '2020-02-23', '2024-12-25', '3000500030.00', 'ONGOING', '0.00', ''),
(4, '', 'Development of SM Mall of Asia Cebu', '', '2020-02-26', '2025-12-27', '36000048762.00', 'FINISHED', '200000.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblsupplier`
--

CREATE TABLE `tblsupplier` (
  `SUPID` int(11) NOT NULL,
  `SUPCODE` varchar(30) NOT NULL,
  `SUPNAME` text NOT NULL,
  `SUPTIN` varchar(30) NOT NULL,
  `SUPADD` text NOT NULL,
  `SUPCONTACT` varchar(30) NOT NULL,
  `SUPREMARKS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsupplier`
--

INSERT INTO `tblsupplier` (`SUPID`, `SUPCODE`, `SUPNAME`, `SUPTIN`, `SUPADD`, `SUPCONTACT`, `SUPREMARKS`) VALUES
(1, 'S13183229', 'HARDWARE', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`market_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblaccounts`
--
ALTER TABLE `tblaccounts`
  ADD PRIMARY KEY (`ACCOUNT_ID`);

--
-- Indexes for table `tblcommonmaster`
--
ALTER TABLE `tblcommonmaster`
  ADD PRIMARY KEY (`COMMON_ID`);

--
-- Indexes for table `tblexpenses`
--
ALTER TABLE `tblexpenses`
  ADD PRIMARY KEY (`EXPID`);

--
-- Indexes for table `tblfinalprojects`
--
ALTER TABLE `tblfinalprojects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproject`
--
ALTER TABLE `tblproject`
  ADD PRIMARY KEY (`PROJECTID`);

--
-- Indexes for table `tblsupplier`
--
ALTER TABLE `tblsupplier`
  ADD PRIMARY KEY (`SUPID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `market`
--
ALTER TABLE `market`
  MODIFY `market_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tblaccounts`
--
ALTER TABLE `tblaccounts`
  MODIFY `ACCOUNT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblcommonmaster`
--
ALTER TABLE `tblcommonmaster`
  MODIFY `COMMON_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tblexpenses`
--
ALTER TABLE `tblexpenses`
  MODIFY `EXPID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `tblproject`
--
ALTER TABLE `tblproject`
  MODIFY `PROJECTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblsupplier`
--
ALTER TABLE `tblsupplier`
  MODIFY `SUPID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
