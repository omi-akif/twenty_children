-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 01:24 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daycares_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `display_home` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `title`, `address`, `phone`, `email`, `display_home`, `status`) VALUES
(5, 'Main Branch', '19-B/2-C & 2-D, Block-F, 5th Floor, Ring Road, Shamoli, Dhaka-1207', '+880-1817000000', 'info@demo.com', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `day_cares`
--

CREATE TABLE `day_cares` (
  `id` int(11) NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `area` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `database_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `day_cares`
--

INSERT INTO `day_cares` (`id`, `title`, `area`, `description`, `database_name`) VALUES
(1, 'ধানমন্ডি শিশু দিবাযত্ন কেন্দ্র', 'পশ্চিম ধানমন্ডি, ধানমন্ডি, ঢাকা', NULL, 'daycares_1'),
(2, 'মতিঝিল শিশু দিবাযত্ন কেন্দ্র', 'মতিঝিল, বাংলাদেশ ব্যাংক/সোনালী ব্যাংক প্রধান কার্যালয়ের আশপাশে, ঢাকা', NULL, 'daycares_2'),
(3, 'রায়ের বাজার শিশু দিবাযত্ন কেন্দ্র', 'রায়ের বাজার, শিকদার মেডিকেল কলেজের উওর-পশ্চিম পাশে, ঢাকা', NULL, 'daycares_3'),
(4, 'কমলাপুর শিশু দিবাযত্ন কেন্দ্র', 'কমলাপুর, কমলাপুর স্টেশনের পশ্চিম পাশে, ঢাকা', NULL, 'daycares_4'),
(5, 'মুগদা শিশু দিবাযত্ন কেন্দ্র', 'মুগদা (বাসাবোর কাছাকাছি), ঢাকা', NULL, 'daycares_5'),
(6, 'পল্লবী শিশু দিবাযত্ন কেন্দ্র', 'বর্ধিত পল্লবী, পল্লবী, ঢাকা', NULL, 'daycares_6'),
(7, 'সায়েদাবাদ শিশু দিবাযত্ন কেন্দ্র', 'সায়েদাবাদ, সায়েদাবাদ বাসষ্টন্ডের পূর্ব পাশে, ঢাকা', NULL, 'daycares_7'),
(8, 'মহাখালী শিশু দিবাযত্ন কেন্দ্র', 'মহাখালী, আইসিডিডিআরবি হাসপাতালের আশে পাশে, ঢাকা', NULL, 'daycares_8'),
(9, 'পলাশবাড়ী শিশু দিবাযত্ন কেন্দ্র', 'পলাশবাড়ী আশুলিয়া, ঢাকা', NULL, 'daycares_9'),
(10, 'রংপুর শিশু দিবাযত্ন কেন্দ্র', 'কেরানীপাড়া (ডিসির মোড়), জেলা মহিলা বিষয়ক কর্মকর্তার আশেপাশে, রংপুর', NULL, 'daycares_10'),
(11, 'গোপালগঞ্জ শিশু দিবাযত্ন কেন্দ্র', 'শিশুবন, পাঁচরিয়া, গোপালগঞ্জ', NULL, 'daycares_11'),
(12, 'গাজীপুর শিশু দিবাযত্ন কেন্দ্র', 'পশ্চিম জয়দেবপুর, ডিআইটি রোড (জেলা কার্যালয় সংলগ্ন), গাজীপুর', NULL, 'daycares_12'),
(13, 'কক্সবাজার শিশু দিবাযত্ন কেন্দ্র', 'টেশপাড়া, কালুর দোকান, পাহাড়তলী রোড (জেলা অফিস সংলগ্ন), কক্সবাজার', NULL, 'daycares_13'),
(14, 'নওগাঁ শিশু দিবাযত্ন কেন্দ্র', 'মুর্তির মোড়, নওগাঁ', NULL, 'daycares_14'),
(15, 'গাইবান্ধা শিশু দিবাযত্ন কেন্দ্র', 'দক্ষিণ ধানছড়া, গাইবান্ধা', NULL, 'daycares_15'),
(16, 'ভোলা শিশু দিবাযত্ন কেন্দ্র', 'কালিখোলা, ভোলা', NULL, 'daycares_16'),
(17, 'টাঙ্গাইল শিশু দিবাযত্ন কেন্দ্র', 'রেজিষ্ট্রিপাড়া/আকুর টাকুর পাড়া, টাঙ্গাইল ', NULL, 'daycares_17'),
(18, 'নোয়াখালী শিশু দিবাযত্ন কেন্দ্র', 'ফকিরপুর, মাইজদিকোর্ট, নোয়াখালী', NULL, 'daycares_18'),
(19, 'চাঁদপুর শিশু দিবাযত্ন কেন্দ্র', 'চাঁদপুর জেলা শহর (জেলা প্রশাসক কার্যালয়ের আশেপাশে), চাঁদপুর', NULL, 'daycares_19');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_file` varchar(100) NOT NULL,
  `category_id` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL,
  `display_home` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `image_file`, `category_id`, `url`, `display_home`, `status`) VALUES
(26, '', '01.jpg', 'দব-যতন-কনদর-১', '', 0, 1),
(27, '', '02.jpg', 'দব-যতন-কনদর-২', '', 0, 1),
(28, '', '03.jpg', 'দব-যতন-কনদর-৩', '', 0, 1),
(29, '', '04.jpg', 'দব-যতন-কনদর-৪', '', 0, 1),
(30, '', '05.jpg', 'দব-যতন-কনদর-৫', '', 0, 1),
(31, '', '06.jpg', 'দব-যতন-কনদর-৬', '', 0, 1),
(32, '', '07.jpg', 'দব-যতন-কনদর-৭', '', 0, 1),
(33, '', '08.jpg', 'দব-যতন-কনদর-৮', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_category`
--

CREATE TABLE `gallery_category` (
  `id` smallint(6) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery_category`
--

INSERT INTO `gallery_category` (`id`, `cat_name`, `slug`, `status`) VALUES
(7, 'দিবা যত্ন কেন্দ্র  ১', 'দব-যতন-কনদর-১', 1),
(8, 'দিবা যত্ন কেন্দ্র  ২', 'দব-যতন-কনদর-২', 1),
(9, 'দিবা যত্ন কেন্দ্র  ৩', 'দব-যতন-কনদর-৩', 1),
(10, 'দিবা যত্ন কেন্দ্র  ৪', 'দব-যতন-কনদর-৪', 1),
(11, 'দিবা যত্ন কেন্দ্র  ৫', 'দব-যতন-কনদর-৫', 1),
(12, 'দিবা যত্ন কেন্দ্র  ৬', 'দব-যতন-কনদর-৬', 1),
(13, 'দিবা যত্ন কেন্দ্র  ৭', 'দব-যতন-কনদর-৭', 1),
(14, 'দিবা যত্ন কেন্দ্র  ৮', 'দব-যতন-কনদর-৮', 1),
(15, 'দিবা যত্ন কেন্দ্র  ৯', 'দব-যতন-কনদর-৯', 1),
(17, 'দিবা যত্ন কেন্দ্র ১০', 'দব-যতন-কনদর-১০', 1),
(18, 'দিবা যত্ন কেন্দ্র ১১', 'দব-যতন-কনদর-১১', 1),
(19, 'দিবা যত্ন কেন্দ্র ১২', 'দব-যতন-কনদর-১২', 1),
(20, 'দিবা যত্ন কেন্দ্র ১৩', 'দব-যতন-কনদর-১৩', 1),
(21, 'দিবা যত্ন কেন্দ্র ১৪', 'দব-যতন-কনদর-১৪', 1),
(22, 'দিবা যত্ন কেন্দ্র ১৫', 'দব-যতন-কনদর-১৫', 1),
(23, 'দিবা যত্ন কেন্দ্র ১৬', 'দব-যতন-কনদর-১৬', 1),
(24, 'দিবা যত্ন কেন্দ্র ১৭', 'দব-যতন-কনদর-১৭', 1),
(25, 'দিবা যত্ন কেন্দ্র ১৮', 'দব-যতন-কনদর-১৮', 1),
(26, 'দিবা যত্ন কেন্দ্র ১৯', 'দব-যতন-কনদর-১৯', 1),
(27, 'দিবা যত্ন কেন্দ্র ২০', 'দব-যতন-কনদর-২০', 1);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Super Admin'),
(2, 'dc_admin', 'Day Care Admin'),
(3, 'parents', 'Parents');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `contact_number` varchar(30) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_address` varchar(200) NOT NULL,
  `image_file` varchar(100) NOT NULL,
  `image_file1` varchar(255) NOT NULL,
  `copyright` varchar(50) NOT NULL,
  `google_map` text NOT NULL,
  `google_map_lng` varchar(50) NOT NULL,
  `video_title` varchar(100) NOT NULL,
  `video_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `contact_number`, `contact_email`, `contact_address`, `image_file`, `image_file1`, `copyright`, `google_map`, `google_map_lng`, `video_title`, `video_link`) VALUES
(1, '+880-1817000000', 'info@demo.com', '19-B/2-C & 2-D, Block-F, 5th Floor, Ring Road, Shamoli, Dhaka-1207', 'logo.png', 'logo1.png', 'Day Care', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.3029262561745!2d90.35383331435895!3d23.772224893860464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c09877020211%3A0x659eedef50a532ae!2z4Kas4Ka-4Kav4Ka84Kak4KeB4KayIOCmhuCmruCmvuCmqCDgprngpr7gpongppzgpr_gpoIg4Ka44KeL4Ka44Ka-4KaH4Kaf4Ka_!5e0!3m2!1sbn!2sbd!4v1514693295088\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '90.353453', 'Your Company Slogna', 'https://www.youtube.com/watch?v=PRq2eH4BrtU');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` varchar(300) NOT NULL,
  `image_file` varchar(100) NOT NULL,
  `display_home` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `details`, `image_file`, `display_home`, `status`) VALUES
(13, 'Welcome', '', 'slider_(2).jpg', 1, 1),
(14, 'Banner 2', '', 'slider_(4).jpg', 1, 1),
(15, 'Banner 3', '', 'slider_(6).jpg', 1, 1),
(16, 'Banner 4', '', 'slider_(1).jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `day_care_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `day_care_id`, `ip_address`, `username`, `email`, `password`, `first_name`, `last_name`, `phone`, `gender`, `salt`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `company`) VALUES
(1, NULL, '127.0.0.1', 'superadmin', 'kaosermahmud.cse@gmail.com', '$2y$08$JVmNVsHrxUX5BL2hULDBfeDx2bUndCpLTo9dLripmVBJyrhuIAVIu', 'Kaoser', 'Mahmud', '01923405632', NULL, '', '', NULL, NULL, NULL, 1496699848, 1578818105, 1, NULL),
(4, NULL, '::1', 'mostafa.csit@gmail.com', 'mostafa.csit@gmail.com', '$2y$08$lNymcMnrj39073RLH49yNe/PhANZzvmyklstkHu4f16dNcrEQg/FO', 'Ataul', 'Mostafa', '01923405632', NULL, NULL, NULL, NULL, NULL, NULL, 1502622274, 1579085806, 1, NULL),
(7, 1, '::1', 'dc_dhanmondi', '', '$2y$08$G3X/D6jUJOxwkmC7cp4cPO4b/qSz9UIoJfmggLRKw1KXJyKLKPhCS', 'Dhanmondi', 'Daycare', '', NULL, NULL, NULL, NULL, NULL, NULL, 1578983843, 1579068648, 1, NULL),
(8, 2, '::1', 'dc_motijheel', '', '$2y$08$XwTWPuNtcQcbVjaN38muYeaaKfOLtbJ1t0mUJNwTySTq5XwPvabji', 'Motijheel', 'Daycare', '', NULL, NULL, NULL, NULL, NULL, NULL, 1578984142, NULL, 1, NULL),
(9, 3, '::1', 'dc_rayerbazar', '', '$2y$08$kTiD8r31VJYgIioXALIfm.0njsIWCpRhpWHmJJkE4bqPJoAXb2c1G', 'Rayerbazar', 'Daycare', '', NULL, NULL, NULL, NULL, NULL, NULL, 1578984185, NULL, 1, NULL),
(10, 4, '::1', 'dc_kamalapur', '', '$2y$08$jDL9ZLKpjo1IsxXG0ZIPm.VFexmcU4v88/pJI.TA8dUlVoKbM9y6a', 'Kamalapur', 'Daycare', '', NULL, NULL, NULL, NULL, NULL, NULL, 1578984214, NULL, 1, NULL),
(11, 5, '::1', 'dc_mugda', '', '$2y$08$mUJGnPuxMEi6alU/svTWjOkweIK2sM./yhaqNt0ISxK5Qvytqozni', 'Mugda', 'Daycare', '', NULL, NULL, NULL, NULL, NULL, NULL, 1578984240, NULL, 1, NULL),
(12, 6, '::1', 'dc_pallabi', '', '$2y$08$Mw/CGRHvYLi1/qhfw7kH/OjW8200b6aYSi2bdbB0CXKY64iWGZ4Oa', 'Pallabi', 'Daycare', '', NULL, NULL, NULL, NULL, NULL, NULL, 1578984291, NULL, 1, NULL),
(13, 7, '::1', 'dc_sayedabad', '', '$2y$08$G/yhiihUmpaaHL0tqdDO3.TaIq2vdFOFHY8W9MzMlmGc4FpUNt.Yq', 'Sayedabad', 'Daycare', '', NULL, NULL, NULL, NULL, NULL, NULL, 1578984321, NULL, 1, NULL),
(14, 8, '::1', 'dc_mohakhali', '', '$2y$08$crhj8ccZumn53Ut0ow0h8OLAD0s926MxiKTpR6mlga064g51Dv/g6', 'Mohakhali', 'Daycare', '', NULL, NULL, NULL, NULL, NULL, NULL, 1578984349, NULL, 1, NULL),
(15, 9, '::1', 'dc_palashbari', '', '$2y$08$bveKDcLIBuBh180q9bE52OpqncqxW.97ZY2xNXcQVp7/RyFwt5aOa', 'Palashbari', 'Daycare', '', NULL, NULL, NULL, NULL, NULL, NULL, 1578984382, NULL, 1, NULL),
(16, 10, '::1', 'dc_rangpur', '', '$2y$08$PblplkFQQJtRm2GYI4FJQemCKhfgRrzUTbW4sO5rCf5CDwlkbjofe', 'Rangpur', 'Daycare', '', NULL, NULL, NULL, NULL, NULL, NULL, 1578984415, NULL, 1, NULL),
(17, 11, '::1', 'dc_gopalganj', '', '$2y$08$zVKNVENpcJFlT8GEtj1tj.4hcOe28n6G70jHlSO3kOSbsA6b7YqUK', 'Gopalganj', 'Daycare', '', NULL, NULL, NULL, NULL, NULL, NULL, 1578984546, NULL, 1, NULL),
(18, 12, '::1', 'dc_gazipur', '', '$2y$08$czaUDSXYE1ShwyQUuRYmc.yxBqeVoRrmb2Q4qLWVU2ZdEP5ZSsYA6', 'Gazipur', 'Daycare', '', NULL, NULL, NULL, NULL, NULL, NULL, 1578984575, NULL, 1, NULL),
(19, 13, '::1', 'dc_coxsbazar', '', '$2y$08$N7gZKl7pCStp5AA3QlGhqOv8e3BMnaFLh/a6pjdZfk7gCeXSrXg2W', 'Coxsbazar', 'Daycare', '', NULL, NULL, NULL, NULL, NULL, NULL, 1578984606, NULL, 1, NULL),
(20, 14, '::1', 'dc_naogaon', '', '$2y$08$WxQXom3dtJzcaQT.BYJAse8t/I.UFC4Prbhv.w2fAVe66/tUABKp6', 'Naogaon', 'Daycare', '', NULL, NULL, NULL, NULL, NULL, NULL, 1578984641, NULL, 1, NULL),
(21, 15, '::1', 'dc_gaibandha', '', '$2y$08$cEfmhYAFqqATYQkmFej/m.mdtHvz470nQO82kIuK/eLe7PugvHti2', 'Gaibandha', 'Daycare', '', NULL, NULL, NULL, NULL, NULL, NULL, 1578984694, NULL, 1, NULL),
(22, 16, '::1', 'dc_bhola', '', '$2y$08$Ke4qyOmO0REpHQ5oA4q4/eC4raKfPs.qiO6hxybHpHpiIN3IoYwLu', 'Bhola', 'Daycare', '', NULL, NULL, NULL, NULL, NULL, NULL, 1578984738, NULL, 1, NULL),
(23, 17, '::1', 'dc_tangail', '', '$2y$08$VnUJtmyL3vvVxrcUDOzA/u7mEjUg.s8xJTGEvnjpxTyRXeceQff4i', 'Tangail', 'Daycare', '', NULL, NULL, NULL, NULL, NULL, NULL, 1578984769, NULL, 1, NULL),
(24, 18, '::1', 'dc_noakhali', '', '$2y$08$X8ezaffffbyu/a30DWUMEuFMNLCYYSAfL5jrhXp/srXgu4PVK6wpe', 'Noakhali', 'Daycare', '', NULL, NULL, NULL, NULL, NULL, NULL, 1578984801, NULL, 1, NULL),
(25, 19, '::1', 'dc_chandpur', '', '$2y$08$83bqvteVEn6BUkkcfEB1pOX6PSkyoFoPowqjhhztdVIII7OEKnErm', 'Chandpur', 'Daycare', '', NULL, NULL, NULL, NULL, NULL, NULL, 1578984915, NULL, 1, NULL),
(27, 1, '::1', 'mostafa@gmail.com', '', '$2y$08$hmkhMa80fdfcfpVxF.3Yxe7mIl3yh6FfeRBlfSePwRsG27ZVtjjy2', 'আতাউল', 'মোস্তাফা', '01813291011', 'Male', NULL, NULL, NULL, NULL, NULL, 1579088488, 1579088610, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(22, 1, 1),
(21, 4, 1),
(20, 7, 2),
(56, 8, 2),
(55, 9, 2),
(57, 10, 2),
(54, 11, 2),
(53, 12, 2),
(58, 13, 2),
(52, 14, 2),
(51, 15, 2),
(50, 16, 2),
(49, 17, 2),
(48, 18, 2),
(47, 19, 2),
(46, 20, 2),
(45, 21, 2),
(44, 22, 2),
(43, 23, 2),
(42, 24, 2),
(41, 25, 2),
(60, 27, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day_cares`
--
ALTER TABLE `day_cares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_category`
--
ALTER TABLE `gallery_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `day_cares`
--
ALTER TABLE `day_cares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `gallery_category`
--
ALTER TABLE `gallery_category`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
