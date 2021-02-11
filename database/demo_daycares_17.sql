-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2020 at 07:13 AM
-- Server version: 5.5.52-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_daycares_17`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` int(11) NOT NULL,
  `time` datetime DEFAULT NULL,
  `device_id` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `members_id` int(11) NOT NULL,
  `day_cares_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `budgets`
--

CREATE TABLE `budgets` (
  `id` int(11) NOT NULL,
  `day_cares_id` int(11) NOT NULL,
  `budget_types_id` int(11) NOT NULL,
  `title` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `total_item_count` int(11) DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `budget_items`
--

CREATE TABLE `budget_items` (
  `id` int(11) NOT NULL,
  `budgets_id` int(11) NOT NULL,
  `item_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sorting` tinyint(2) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  `item_count` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `budget_types`
--

CREATE TABLE `budget_types` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `budget_types`
--

INSERT INTO `budget_types` (`id`, `name`, `status`) VALUES
(1, 'Monthly', 1),
(2, 'Advance', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `feature_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `day_cares_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  `day_cares_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `parents_id` int(11) DEFAULT NULL,
  `registrations_id` int(11) DEFAULT NULL,
  `member_types_id` int(11) NOT NULL,
  `day_cares_id` int(11) NOT NULL,
  `child_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_dob` date DEFAULT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_age` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_weight` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_height` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth_mark` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth_certificate_no` int(11) DEFAULT NULL,
  `describe_food` text COLLATE utf8_unicode_ci,
  `describe_health_problem` text COLLATE utf8_unicode_ci,
  `child_vaccination` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `bcg` tinyint(1) NOT NULL DEFAULT '0',
  `penta` tinyint(1) NOT NULL DEFAULT '0',
  `pcb` tinyint(1) NOT NULL DEFAULT '0',
  `opb` tinyint(1) NOT NULL DEFAULT '0',
  `ipb` tinyint(1) NOT NULL DEFAULT '0',
  `mr` tinyint(1) NOT NULL DEFAULT '0',
  `ham` tinyint(1) NOT NULL DEFAULT '0',
  `phone` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `immunization_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `is_waiting_sms_send` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(4) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_types`
--

CREATE TABLE `member_types` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `string` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member_types`
--

INSERT INTO `member_types` (`id`, `name`, `string`) VALUES
(1, 'Child', NULL),
(2, 'Staff', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `day_cares_id` int(11) NOT NULL,
  `parents_id` int(11) NOT NULL,
  `members_id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `child_mother_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_mother_national_no` int(11) DEFAULT NULL,
  `child_father_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_father_national_no` int(11) DEFAULT NULL,
  `child_parents_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_parents_ph_no` int(11) DEFAULT NULL,
  `child_parents_national_no` int(11) DEFAULT NULL,
  `child_mother_designation` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_mother_working_place` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_mother_ph_no` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_mother_total_salary` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_mother_basic_salary` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_mother_pay_scale` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_mother_job_duration` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_father_total_salary` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_father_basic_salary` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_father_pay_scale` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_parents_present_address` text COLLATE utf8_unicode_ci,
  `child_mother_permanent_address` text COLLATE utf8_unicode_ci,
  `child_mother_parmanent_ph_no` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_father_permanent_address` text COLLATE utf8_unicode_ci,
  `child_father_ph_no` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_admit_interest` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_number` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `day_cares_id`, `parents_id`, `members_id`, `status`, `child_mother_name`, `child_mother_national_no`, `child_father_name`, `child_father_national_no`, `child_parents_name`, `child_parents_ph_no`, `child_parents_national_no`, `child_mother_designation`, `child_mother_working_place`, `child_mother_ph_no`, `child_mother_total_salary`, `child_mother_basic_salary`, `child_mother_pay_scale`, `child_mother_job_duration`, `child_father_total_salary`, `child_father_basic_salary`, `child_father_pay_scale`, `child_parents_present_address`, `child_mother_permanent_address`, `child_mother_parmanent_ph_no`, `child_father_permanent_address`, `child_father_ph_no`, `child_admit_interest`, `child_number`, `created`, `updated`) VALUES
(2, 1, 27, 0, NULL, 'সাইমা ইসলাম', 2147483647, 'আতাউল মোস্তাফা', 2147483647, 'আতাউল মোস্তাফা', 1977450000, 254875855, 'ম্যানেজার', 'বিডি', '018548785878', '30000', '20000', 'গ্রেড - ২', '৫ বছর', '40000', '25000', 'গ্রেড - ৩', 'আদাবর, ঢাকা', 'চট্টগ্রাম', '0185525554', 'চট্টগ্রাম', '25454587', '১', 2, '2020-01-15 18:14:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`,`members_id`,`day_cares_id`),
  ADD KEY `fk_attendances_members1_idx` (`members_id`),
  ADD KEY `fk_attendances_day_cares1_idx` (`day_cares_id`);

--
-- Indexes for table `budgets`
--
ALTER TABLE `budgets`
  ADD PRIMARY KEY (`id`,`day_cares_id`,`budget_types_id`),
  ADD KEY `fk_budgets_day_cares1_idx` (`day_cares_id`),
  ADD KEY `fk_budgets_budget_types1_idx` (`budget_types_id`);

--
-- Indexes for table `budget_items`
--
ALTER TABLE `budget_items`
  ADD PRIMARY KEY (`id`,`budgets_id`),
  ADD KEY `fk_budget_items_budgets1_idx` (`budgets_id`);

--
-- Indexes for table `budget_types`
--
ALTER TABLE `budget_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`,`day_cares_id`),
  ADD KEY `fk_events_day_cares1_idx` (`day_cares_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`,`day_cares_id`),
  ADD KEY `fk_galleries_day_cares1_idx` (`day_cares_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`,`member_types_id`,`day_cares_id`),
  ADD KEY `fk_members_day_cares1_idx` (`day_cares_id`),
  ADD KEY `fk_members_member_types1_idx` (`member_types_id`);

--
-- Indexes for table `member_types`
--
ALTER TABLE `member_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`,`day_cares_id`,`parents_id`,`members_id`),
  ADD KEY `fk_registrations_parents1_idx` (`parents_id`),
  ADD KEY `fk_registrations_members1_idx` (`members_id`),
  ADD KEY `fk_registrations_day_cares2_idx` (`day_cares_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `budgets`
--
ALTER TABLE `budgets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `budget_items`
--
ALTER TABLE `budget_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `budget_types`
--
ALTER TABLE `budget_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `member_types`
--
ALTER TABLE `member_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
