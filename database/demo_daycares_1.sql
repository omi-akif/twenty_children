-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2020 at 07:11 AM
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
-- Database: `demo_daycares_1`
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

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `time`, `device_id`, `members_id`, `day_cares_id`, `created`, `updated`) VALUES
(1, '2020-01-13 04:05:27', '1', 3, 1, '2020-01-13 00:00:00', '2020-01-13 00:00:00'),
(2, '2020-01-13 10:18:04', '1', 4, 1, '2020-01-13 00:00:00', '2020-01-13 00:00:00'),
(3, '2020-01-21 17:16:13', NULL, 3, 1, '2020-01-21 17:16:16', NULL),
(4, '2020-01-27 11:45:18', NULL, 3, 1, '2020-01-27 11:45:23', NULL),
(5, '2020-01-27 11:45:25', NULL, 4, 1, '2020-01-27 11:45:28', NULL);

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

--
-- Dumping data for table `budgets`
--

INSERT INTO `budgets` (`id`, `day_cares_id`, `budget_types_id`, `title`, `description`, `total_item_count`, `total_amount`, `created`, `updated`) VALUES
(1, 1, 1, 'October 2019 Monthly Budget', NULL, 10, NULL, '2020-01-14 00:00:00', '2020-01-14 00:00:00'),
(2, 1, 1, 'November 2019 Monthly Budget', 'November budget ', NULL, NULL, '2020-01-14 20:04:26', NULL),
(7, 1, 2, 'Advance Bill January 2020', 'test', NULL, NULL, '2020-01-15 16:18:54', NULL),
(5, 1, 1, 'test monthly', 'dddd', NULL, NULL, '2020-01-15 14:52:15', NULL),
(6, 1, 2, 'Advance Bill December 2019', 'test', NULL, NULL, '2020-01-15 15:31:21', NULL);

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

--
-- Dumping data for table `budget_items`
--

INSERT INTO `budget_items` (`id`, `budgets_id`, `item_name`, `sorting`, `status`, `item_count`, `amount`, `created`, `updated`) VALUES
(1, 1, 'hand wash', NULL, NULL, 6, NULL, '2020-01-14 00:00:00', '2020-01-14 00:00:00'),
(2, 1, 'Refil pack', NULL, NULL, 6, NULL, '2020-01-14 00:00:00', '2020-01-14 00:00:00'),
(3, 2, 'হ্যান্ড ওয়াশ', NULL, NULL, 6, NULL, '2020-01-14 20:04:26', NULL),
(4, 2, 'রিফিল প্যাক', NULL, NULL, 6, NULL, '2020-01-14 20:04:26', NULL),
(5, 2, 'বেবি পাউডার (১০০ মি. গ্রা.)', NULL, NULL, 6, NULL, '2020-01-14 20:04:26', NULL),
(6, 2, 'বেবি লোশন (১০০ মি. গ্রা.)', NULL, NULL, 6, NULL, '2020-01-14 20:04:26', NULL),
(7, 2, 'বেবি শ্যাম্পু (১০০ মি. গ্রা.)', NULL, NULL, 6, NULL, '2020-01-14 20:04:26', NULL),
(8, 2, 'বেবি সোপ (৪০ মি. গ্রা.)', NULL, NULL, 6, NULL, '2020-01-14 20:04:26', NULL),
(9, 2, 'অলিভ অয়েল (৫০০ মি. গ্রা.)', NULL, NULL, 4, NULL, '2020-01-14 20:04:26', NULL),
(10, 2, 'ভ্যাসলিন (১৫ মি. গ্রা.)', NULL, NULL, 3, NULL, '2020-01-14 20:04:26', NULL),
(11, 2, 'সরিষার তেল (৫০০ মি. গ্রা.)', NULL, NULL, 3, NULL, '2020-01-14 20:04:26', NULL),
(12, 2, 'ভিম বার', NULL, NULL, 1, NULL, '2020-01-14 20:04:26', NULL),
(13, 2, 'লিকুইড ডিশ ওয়াশ', NULL, NULL, 1, NULL, '2020-01-14 20:04:26', NULL),
(14, 2, 'ওয়াশিং পাউডার (৫০০ মি. গ্রা.)', NULL, NULL, 1, NULL, '2020-01-14 20:04:26', NULL),
(15, 2, 'লাইজল (৫০০ মি. লি.)', NULL, NULL, 5, NULL, '2020-01-14 20:04:26', NULL),
(16, 2, 'হারপিক', NULL, NULL, 4, NULL, '2020-01-14 20:04:26', NULL),
(17, 2, 'হারপিক পাউডার (৫০০ গ্রাম)', NULL, NULL, 5, NULL, '2020-01-14 20:04:26', NULL),
(18, 2, 'ওডোনিল', NULL, NULL, 1, NULL, '2020-01-14 20:04:26', NULL),
(19, 2, 'ফেসিয়াল টিস্যু', NULL, NULL, 1, NULL, '2020-01-14 20:04:26', NULL),
(20, 2, 'ন্যাপকিন টিস্যু', NULL, NULL, 6, NULL, '2020-01-14 20:04:26', NULL),
(21, 2, 'টয়লেট টিস্যু', NULL, NULL, 3, NULL, '2020-01-14 20:04:26', NULL),
(22, 2, 'অ্যারোসল (৮৭৫ মি. লি.)', NULL, NULL, 5, NULL, '2020-01-14 20:04:26', NULL),
(23, 2, 'এয়ার ফ্রেশনার', NULL, NULL, 1, NULL, '2020-01-14 20:04:26', NULL),
(24, 2, 'ডেটল (১ লিটার)', NULL, NULL, 3, NULL, '2020-01-14 20:04:26', NULL),
(25, 2, 'ফিনাইল (১ লিটার)', NULL, NULL, 4, NULL, '2020-01-14 20:04:26', NULL),
(26, 2, 'ফুলের ঝাড়ু', NULL, NULL, 6, NULL, '2020-01-14 20:04:26', NULL),
(27, 2, 'ঝুল ঝাড়ু', NULL, NULL, 2, NULL, '2020-01-14 20:04:26', NULL),
(28, 2, 'মব', NULL, NULL, 1, NULL, '2020-01-14 20:04:26', NULL),
(29, 2, 'শলার ঝাড়ু', NULL, NULL, 1, NULL, '2020-01-14 20:04:26', NULL),
(30, 1, 'dsfsdfsd', NULL, NULL, 3, NULL, NULL, NULL),
(31, 1, 'sdssss', NULL, NULL, 4, NULL, NULL, NULL),
(32, 1, 'sdfssss', NULL, NULL, 44, NULL, NULL, NULL),
(33, 5, 'হ্যান্ড ওয়াশ', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(34, 5, 'রিফিল প্যাক', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(35, 5, 'বেবি পাউডার (১০০ মি. গ্রা.)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(36, 5, 'বেবি লোশন (১০০ মি. গ্রা.)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(37, 5, 'বেবি শ্যাম্পু (১০০ মি. গ্রা.)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(38, 5, 'বেবি সোপ (৪০ মি. গ্রা.)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(39, 5, 'অলিভ অয়েল (৫০০ মি. গ্রা.)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(40, 5, 'ভ্যাসলিন (১৫ মি. গ্রা.)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(41, 5, 'সরিষার তেল (৫০০ মি. গ্রা.)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(42, 5, 'ভিম বার', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(43, 5, 'লিকুইড ডিশ ওয়াশ', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(44, 5, 'ওয়াশিং পাউডার (৫০০ মি. গ্রা.)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(45, 5, 'লাইজল (৫০০ মি. লি.)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(46, 5, 'হারপিক', NULL, NULL, 2, NULL, '2020-01-15 14:52:15', NULL),
(47, 5, 'হারপিক পাউডার (৫০০ গ্রাম)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(48, 5, 'ওডোনিল', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(49, 5, 'ফেসিয়াল টিস্যু', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(50, 5, 'ন্যাপকিন টিস্যু', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(51, 5, 'টয়লেট টিস্যু', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(52, 5, 'অ্যারোসল (৮৭৫ মি. লি.)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(53, 5, 'এয়ার ফ্রেশনার', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(54, 5, 'ডেটল (১ লিটার)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(55, 5, 'ফিনাইল (১ লিটার)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(56, 5, 'ফুলের ঝাড়ু', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(57, 5, 'ঝুল ঝাড়ু', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(58, 5, 'মব', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(59, 5, 'শলার ঝাড়ু', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(60, 6, 'বিদ্যুত বিল', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(61, 6, 'ডিশ বিল', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(62, 6, 'ইন্টারনেট বিল', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(63, 6, 'ময়লা বিল', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(64, 6, 'পেপার বিল', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(65, 6, 'পানির কিট', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(66, 6, 'পলিথিন বাবদ', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(67, 6, 'চা পাতা, টি-ব্যাগ, চিনি, বিস্কুট বাবদ', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(68, 6, 'আপ্যায়ন খরচ', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(69, 6, 'টেলিফোন বিল', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(70, 6, 'মেরামত সংক্রান্ত', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(71, 6, 'বাচ্চাদের জরুরী ঔষধসহ আনুষাঙ্গিক (ডেঙ্গু প্রত', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(72, 6, 'অন্যান্য', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(73, 7, 'বিদ্যুত বিল', NULL, NULL, NULL, 4000, '2020-01-15 16:18:54', NULL),
(74, 7, 'ডিশ বিল', NULL, NULL, NULL, 500, '2020-01-15 16:18:54', NULL),
(75, 7, 'ইন্টারনেট বিল', NULL, NULL, NULL, 1000, '2020-01-15 16:18:54', NULL),
(76, 7, 'ময়লা বিল', NULL, NULL, NULL, 250, '2020-01-15 16:18:54', NULL),
(77, 7, 'পেপার বিল', NULL, NULL, NULL, 240, '2020-01-15 16:18:54', NULL),
(78, 7, 'পানির কিট', NULL, NULL, NULL, 1300, '2020-01-15 16:18:54', NULL),
(79, 7, 'পলিথিন বাবদ', NULL, NULL, NULL, 570, '2020-01-15 16:18:54', NULL),
(80, 7, 'চা পাতা, টি-ব্যাগ, চিনি, বিস্কুট বাবদ', NULL, NULL, NULL, 1500, '2020-01-15 16:18:54', NULL),
(81, 7, 'আপ্যায়ন খরচ', NULL, NULL, NULL, 1500, '2020-01-15 16:18:54', NULL),
(82, 7, 'টেলিফোন বিল', NULL, NULL, NULL, 1000, '2020-01-15 16:18:54', NULL),
(83, 7, 'মেরামত সংক্রান্ত', NULL, NULL, NULL, 3000, '2020-01-15 16:18:54', NULL),
(84, 7, 'বাচ্চাদের জরুরী ঔষধসহ আনুষাঙ্গিক (ডেঙ্গু প্রত', NULL, NULL, NULL, 2000, '2020-01-15 16:18:54', NULL),
(85, 7, 'অন্যান্য', NULL, NULL, NULL, 1000, '2020-01-15 16:18:54', NULL);

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

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `date`, `location`, `feature_image`, `day_cares_id`, `status`) VALUES
(1, 'test event 2', '<p>Contrary to popular belief, Lorem Ipsum is', '2020-01-20 05:18:18', 'dhaka 2', 'Blick-auf-die-Skyline-von-Dhaka-Copyright-iStockphoto-948x320.jpg', 1, 1),
(2, 'test 2', '<p>dsf dsfsdf</p>\r\n\r\n<p>dsf sd</p>\r\n\r\n<p>fds&', '2020-01-20 12:36:54', 'chittagong', '10553589_254574751406826_109475571718522446_n1.jpg', 0, 0);

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

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `status`, `day_cares_id`) VALUES
(3, '1-02.jpg', 1, 1),
(5, '1-04.png', 1, 1),
(6, '1-12.png', 1, 1),
(7, '1-03.jpg', 1, 1),
(8, '1-07.png', 1, 1),
(9, '1-011.png', 1, 1),
(10, '1-08.jpg', 1, 1),
(11, '1-07.jpg', 1, 1),
(12, '1-02.png', 1, 1);

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

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `parents_id`, `registrations_id`, `member_types_id`, `day_cares_id`, `child_name`, `child_dob`, `gender`, `child_age`, `child_weight`, `child_height`, `birth_mark`, `birth_certificate_no`, `describe_food`, `describe_health_problem`, `child_vaccination`, `bcg`, `penta`, `pcb`, `opb`, `ipb`, `mr`, `ham`, `phone`, `image_file`, `immunization_file`, `created`, `updated`, `is_waiting_sms_send`, `status`) VALUES
(1, 27, 2, 1, 1, 'হুমাইরা মোস্তাফা', '2019-10-23', 'Female', '১৪ মাস', '৫ কেজি', '২ ফুট', 'নাই', 2147483647, 'নাই', 'নাই', 'No', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2020-01-15 18:14:20', NULL, 0, 0),
(2, 27, 2, 1, 1, 'বাবু', '2019-10-23', 'Male', '১০ মাস', '৫ কেজি', '১.৫ ফুট', 'নাই', 2147483647, 'নাই', 'নাই', 'No', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2020-01-15 18:14:20', NULL, 0, 1),
(3, NULL, NULL, 2, 1, 'Kaoser Mahmud', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '018566956875', '14457421_1113871188704343_206025188351581740_n1.jpg', NULL, NULL, NULL, 0, 0),
(4, NULL, NULL, 2, 1, 'Zuel Ali', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '01552548755', 'Untitled.png', NULL, NULL, NULL, 0, 0),
(5, 30, 3, 1, 1, 'সর্না সালাম', '2016-06-08', 'Male', '৪ বছর ', '৭ কেজি ', '২ ফিট ', 'মুখে তিল', 2147483647, 'নাই ', 'নাই', NULL, 1, 1, 1, 1, 1, 1, 0, NULL, '1579707196-14457421_1113871188704343_206025188351581740_n1.jpg', '1579707196-14457421_1113871188704343_206025188351581740_n1.jpg', '2020-01-22 21:33:16', NULL, 0, 0),
(6, 31, 4, 1, 1, 'শুয়াইব', '2016-08-23', 'Male', '৫', '১২', '৩', 'না', 0, '', '', NULL, 1, 0, 0, 0, 1, 0, 0, NULL, '1579754079-index1.jpeg', '1579754079-index1.jpeg', '2020-01-23 10:34:39', NULL, 0, 0),
(7, 33, 5, 1, 1, 'সর্না ', '0000-00-00', 'Male', '', '', '', '', 0, '', '', NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2020-01-28 10:31:01', NULL, 0, 0);

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
(2, 1, 27, 0, NULL, 'সাইমা ইসলাম', 2147483647, 'আতাউল মোস্তাফা', 2147483647, 'আতাউল মোস্তাফা', 1977450000, 254875855, 'ম্যানেজার', 'বিডি', '018548785878', '30000', '20000', 'গ্রেড - ২', '৫ বছর', '40000', '25000', 'গ্রেড - ৩', 'আদাবর, ঢাকা', 'চট্টগ্রাম', '0185525554', 'চট্টগ্রাম', '25454587', '১', 2, '2020-01-15 18:14:20', NULL),
(3, 1, 30, 0, NULL, 'সামিয়া সালাম', 2147483647, 'আব্দুস সালাম ', 2147483647, 'সালাম খান', 1878858586, 854545874, 'গৃহিনী ', 'নারায়নগঞ্জ ', '01878596965', '20000', '12000', '10', '৫ বছর ', '25000', '15000', '12', 'নারায়নগঞ্জ , ঢাকা ', NULL, NULL, NULL, NULL, '২টি', 5, '2020-01-22 21:33:16', NULL),
(4, 1, 31, 0, NULL, 'সডজফক', 234324234, '', 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '', 0, '2020-01-23 10:34:39', NULL),
(5, 1, 33, 0, NULL, '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '', 0, '2020-01-28 10:31:01', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `member_types`
--
ALTER TABLE `member_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
