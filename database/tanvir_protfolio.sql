-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2025 at 11:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanvir_protfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `aboutme` varchar(455) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `stitle` varchar(255) DEFAULT NULL,
  `sdesc` varchar(455) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `age` varchar(11) DEFAULT NULL,
  `website` varchar(25) DEFAULT NULL,
  `degree` varchar(25) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `freelance` varchar(255) DEFAULT NULL,
  `bdesc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `aboutme`, `img`, `stitle`, `sdesc`, `birth_date`, `age`, `website`, `degree`, `phone`, `email`, `city`, `freelance`, `bdesc`) VALUES
(1, 'Hi, I’m Tanvir Ahmed Shawon, a passionate and results-driven digital marketer with a knack for crafting data-driven strategies that deliver measurable results. With [X years] of experience in the ever-evolving world of digital marketing, I specialize in helping brands grow their online presence, engage their target audience, and achieve their business goals.', 'user-67ada7159209a.jpeg', 'Digital Marketing, UI/UX Design', 'Qui voluptates lorem', '2010-10-18', '20', 'www.nexgen.com', 'Masters', '01886352188', 'nexgen@gmail.com', 'Chattogram', 'Available', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `email`, `password`, `img`) VALUES
(1, 'Saalim Sadman', 'sadmanmd225@gmail.com', '$$2y$10$nMTz6.O.3S50dQdil1TrrOB5mFqmS.nt4aGa7kQ7JSlpy2YDnZ3jK', 'admin-67adb101e8b97.jpeg'),
(2, 'Juman', 'juman@gmail.com', '$$2y$10$uDHxOXmNEpa7pT/VB0pXOu2eDB/uSY8v3rCaq0pxfR2uK5C56K3c.', 'admin-67adb083a438f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `cta_link` varchar(450) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `skills`, `img`, `cta_link`) VALUES
(1, 'Tanvir Ahmed  Shawon', 'Digital Marketing, UI/UX Design', 'banner-67c01ac997d18.jpg', 'https://www.facebook.com/tanvirshawon03');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Facebook');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `email`, `subject`, `message`) VALUES
(0, 'Alfreda Sparks', 'cewuza@mailinator.com', 'Quis nulla anim reru', 'Dolore fuga Et reru');

-- --------------------------------------------------------

--
-- Table structure for table `cv_uploads`
--

CREATE TABLE `cv_uploads` (
  `id` int(11) NOT NULL,
  `cv_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cv_uploads`
--

INSERT INTO `cv_uploads` (`id`, `cv_file`) VALUES
(1, 'Ramadan-Kormo-Porikolpona.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `project_date` date NOT NULL,
  `project_url` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `category`, `client`, `project_date`, `project_url`, `description`, `img`) VALUES
(33, 'Jennifer Dejesus', 'Facebook', 'Assumenda suscipit i', '1986-04-03', NULL, 'Proident ad id dolo', 'portfolio-67bf79066b61d.png'),
(34, 'Autumn Duffy', 'Facebook', 'Atque non voluptas t', '2016-03-05', NULL, 'Iusto in voluptate d', 'portfolio-67c01b8c51fed.png');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `sarvice_name` varchar(256) NOT NULL,
  `sarvice_description` varchar(500) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `sarvice_name`, `sarvice_description`, `image`) VALUES
(19, 'Faith Sheppard', 'Incididunt reiciendi', 'service-67c0dfa871e05.jpg'),
(20, 'Gary Mendoza', 'Voluptatem quod qua', 'service-67c0dff6641f1.jpg'),
(21, 'Phoebe Mcintyre', 'Proident ullam aliq', 'service-67c0e0186f77c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services_title`
--

CREATE TABLE `services_title` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services_title`
--

INSERT INTO `services_title` (`id`, `title`) VALUES
(2, 'Optio exercitation');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `disc` varchar(455) DEFAULT NULL,
  `skill1` varchar(255) DEFAULT NULL,
  `skill2` varchar(255) DEFAULT NULL,
  `skill3` varchar(255) DEFAULT NULL,
  `skill4` varchar(255) DEFAULT NULL,
  `skill5` varchar(255) DEFAULT NULL,
  `skill6` varchar(255) DEFAULT NULL,
  `percentage1` int(255) NOT NULL,
  `percentage2` int(255) NOT NULL,
  `percentage3` int(255) NOT NULL,
  `percentage4` int(255) NOT NULL,
  `percentage5` int(255) NOT NULL,
  `percentage6` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `disc`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`, `skill6`, `percentage1`, `percentage2`, `percentage3`, `percentage4`, `percentage5`, `percentage6`) VALUES
(1, 'PHP Laravel developer | Web development expert | Founder of NexGen Media 🚀', 'HTML', 'CSS', 'JAVASCRIPT', 'PHP', 'LARAVEL', 'REACT', 1, 2, 3, 4, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int(11) NOT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `twitter`, `facebook`, `instagram`, `skype`, `linkedin`) VALUES
(1, 'https://www.facebook.com/saalimsadman6/', 'https://www.facebook.com/nexgenmediaproduction', 'https://www.youtube.com/', 'https://www.facebook.com/nexgenmediaproduction', 'https://www.facebook.com/nexgenmediaproduction');

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `id` int(11) NOT NULL,
  `client` varchar(255) DEFAULT NULL,
  `project` varchar(255) DEFAULT NULL,
  `support` varchar(255) DEFAULT NULL,
  `worker` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`id`, `client`, `project`, `support`, `worker`) VALUES
(1, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sumary`
--

CREATE TABLE `sumary` (
  `id` int(11) NOT NULL,
  `resume` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `title` varchar(256) DEFAULT NULL,
  `present` varchar(256) DEFAULT NULL,
  `experion` varchar(256) DEFAULT NULL,
  `labelOne` varchar(256) DEFAULT NULL,
  `labelTwo` varchar(256) DEFAULT NULL,
  `labelThree` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sumary`
--

INSERT INTO `sumary` (`id`, `resume`, `description`, `title`, `present`, `experion`, `labelOne`, `labelTwo`, `labelThree`) VALUES
(1, 'Hi, I’m Tanvir Ahmed Shawon, a passionate and results-driven digital marketer with a knack for crafting data-driven strategies that deliver measurable results. With [X years] of experience in the ever-evolving world of digital marketing, I specialize in helping brands grow their online presence, engage their target audience, and achieve their business goals.', 'deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.', 'Senior graphic design specialist', '2019 - Present', 'Experion, New York, NY', 'Lead in the design, development, and implementation of the graphic, layout, and production communication materials', 'Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project.', 'Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `occu` varchar(256) NOT NULL,
  `review` varchar(256) NOT NULL,
  `img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `visit_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip_address`, `visit_time`) VALUES
(87, '::1', '2025-02-27 17:29:46'),
(88, '::1', '2025-02-27 17:29:56'),
(89, '::1', '2025-02-27 17:30:00'),
(90, '::1', '2025-02-27 17:30:04'),
(91, '::1', '2025-02-27 17:30:05'),
(92, '::1', '2025-02-27 17:30:06'),
(93, '::1', '2025-02-27 17:30:09'),
(94, '::1', '2025-02-27 17:30:10'),
(95, '::1', '2025-02-27 17:30:11'),
(96, '::1', '2025-02-27 17:30:12'),
(97, '::1', '2025-02-27 17:33:19'),
(98, '::1', '2025-02-27 17:34:07'),
(99, '::1', '2025-02-27 17:34:17'),
(100, '::1', '2025-02-27 17:34:26'),
(101, '::1', '2025-02-27 17:34:31'),
(102, '::1', '2025-02-27 17:38:31'),
(103, '::1', '2025-02-27 17:39:54'),
(104, '::1', '2025-02-27 17:40:16'),
(105, '::1', '2025-02-27 17:40:37'),
(106, '::1', '2025-02-27 17:41:04'),
(107, '::1', '2025-02-27 17:41:12'),
(108, '::1', '2025-02-27 17:41:21'),
(109, '::1', '2025-02-27 17:42:04'),
(110, '::1', '2025-02-27 17:42:26'),
(111, '::1', '2025-02-27 17:42:38'),
(112, '::1', '2025-02-27 17:42:57'),
(113, '::1', '2025-02-27 17:43:20'),
(114, '::1', '2025-02-27 17:43:33'),
(115, '::1', '2025-02-27 17:43:47'),
(116, '::1', '2025-02-27 17:44:01'),
(117, '::1', '2025-02-27 17:45:21'),
(118, '::1', '2025-02-27 17:45:49'),
(119, '::1', '2025-02-27 17:46:06'),
(120, '::1', '2025-02-27 17:47:26'),
(121, '::1', '2025-02-27 17:48:00'),
(122, '::1', '2025-02-27 18:12:45'),
(123, '::1', '2025-02-27 18:14:00'),
(124, '::1', '2025-02-27 18:14:26'),
(125, '::1', '2025-02-27 18:15:59'),
(126, '::1', '2025-02-27 18:16:51'),
(127, '::1', '2025-02-27 18:18:46'),
(128, '::1', '2025-02-27 18:20:41'),
(129, '::1', '2025-02-27 18:20:57'),
(130, '::1', '2025-02-27 18:24:27'),
(131, '::1', '2025-02-27 18:24:32'),
(132, '::1', '2025-02-27 18:25:26'),
(133, '::1', '2025-02-27 18:26:56'),
(134, '::1', '2025-02-27 18:28:03'),
(135, '::1', '2025-02-27 18:28:38'),
(136, '::1', '2025-02-27 18:28:59'),
(137, '::1', '2025-02-27 18:33:18'),
(138, '::1', '2025-02-27 18:33:27'),
(139, '::1', '2025-02-27 18:34:00'),
(140, '::1', '2025-02-27 18:34:04'),
(141, '::1', '2025-02-27 18:34:11'),
(142, '::1', '2025-02-27 18:34:39'),
(143, '::1', '2025-02-27 18:34:41'),
(144, '::1', '2025-02-27 18:34:46'),
(145, '::1', '2025-02-27 18:35:25'),
(146, '::1', '2025-02-27 18:35:32'),
(147, '::1', '2025-02-27 18:35:36'),
(148, '::1', '2025-02-27 18:35:45'),
(149, '::1', '2025-02-27 18:36:26'),
(150, '::1', '2025-02-27 18:36:59'),
(151, '::1', '2025-02-27 18:37:20'),
(152, '::1', '2025-02-27 18:37:29'),
(153, '::1', '2025-02-27 18:37:39'),
(154, '::1', '2025-02-27 18:37:55'),
(155, '::1', '2025-02-27 18:38:12'),
(156, '::1', '2025-02-27 18:38:27'),
(157, '::1', '2025-02-27 18:38:51'),
(158, '::1', '2025-02-27 18:40:05'),
(159, '::1', '2025-02-27 18:40:16'),
(160, '::1', '2025-02-27 18:40:42'),
(161, '::1', '2025-02-27 18:43:00'),
(162, '::1', '2025-02-27 18:43:09'),
(163, '::1', '2025-02-27 18:43:13'),
(164, '::1', '2025-02-27 18:43:27'),
(165, '::1', '2025-02-27 18:43:57'),
(166, '::1', '2025-02-27 18:44:20'),
(167, '::1', '2025-02-27 18:45:25'),
(168, '::1', '2025-02-27 18:46:05'),
(169, '::1', '2025-02-27 18:46:24'),
(170, '::1', '2025-02-27 18:46:28'),
(171, '::1', '2025-02-27 18:46:53'),
(172, '::1', '2025-02-27 18:47:22'),
(173, '::1', '2025-02-27 18:47:42'),
(174, '::1', '2025-02-27 18:47:47'),
(175, '::1', '2025-02-27 18:47:53'),
(176, '::1', '2025-02-27 18:49:02'),
(177, '::1', '2025-02-27 18:49:37'),
(178, '::1', '2025-02-27 18:49:43'),
(179, '::1', '2025-02-27 18:49:45'),
(180, '::1', '2025-02-27 18:50:06'),
(181, '::1', '2025-02-27 18:50:40'),
(182, '::1', '2025-02-27 18:50:42'),
(183, '::1', '2025-02-27 18:50:44'),
(184, '::1', '2025-02-27 18:50:46'),
(185, '::1', '2025-02-27 18:50:50'),
(186, '::1', '2025-02-27 18:51:18'),
(187, '::1', '2025-02-27 18:51:19'),
(188, '::1', '2025-02-27 18:51:21'),
(189, '::1', '2025-02-27 18:51:24'),
(190, '::1', '2025-02-27 18:51:27'),
(191, '::1', '2025-02-27 18:51:28'),
(192, '::1', '2025-02-27 18:51:52'),
(193, '::1', '2025-02-27 18:56:00'),
(194, '::1', '2025-02-27 18:57:27'),
(195, '::1', '2025-02-27 19:02:48'),
(196, '::1', '2025-02-27 19:16:22'),
(197, '::1', '2025-02-27 19:16:25'),
(198, '::1', '2025-02-27 19:20:35'),
(199, '::1', '2025-02-27 20:08:22'),
(200, '::1', '2025-02-27 20:12:23'),
(201, '::1', '2025-02-27 20:12:42'),
(202, '::1', '2025-02-27 20:14:16'),
(203, '::1', '2025-02-27 20:14:36'),
(204, '::1', '2025-02-27 20:16:43'),
(205, '::1', '2025-02-27 20:17:16'),
(206, '::1', '2025-02-27 20:18:30'),
(207, '::1', '2025-02-27 20:21:14'),
(208, '::1', '2025-02-27 20:21:28'),
(209, '::1', '2025-02-27 20:22:10'),
(210, '::1', '2025-02-27 20:22:44'),
(211, '::1', '2025-02-27 20:22:57'),
(212, '::1', '2025-02-27 20:24:04'),
(213, '::1', '2025-02-27 20:40:07'),
(214, '::1', '2025-02-27 20:40:50'),
(215, '::1', '2025-02-27 20:41:15'),
(216, '::1', '2025-02-27 20:42:35'),
(217, '::1', '2025-02-27 20:43:01'),
(218, '::1', '2025-02-27 20:44:09'),
(219, '::1', '2025-02-27 20:45:29'),
(220, '::1', '2025-02-27 20:46:37'),
(221, '::1', '2025-02-27 21:36:46'),
(222, '::1', '2025-02-27 21:37:06'),
(223, '::1', '2025-02-27 21:48:16'),
(224, '::1', '2025-02-27 21:48:22'),
(225, '::1', '2025-02-27 21:59:07'),
(226, '::1', '2025-02-27 22:01:24'),
(227, '::1', '2025-02-27 22:01:32'),
(228, '::1', '2025-02-27 22:01:55'),
(229, '::1', '2025-02-27 22:01:56'),
(230, '::1', '2025-02-27 22:01:59'),
(231, '::1', '2025-02-27 22:02:16'),
(232, '::1', '2025-02-27 22:03:30'),
(233, '::1', '2025-02-27 22:03:51'),
(234, '::1', '2025-02-27 22:04:33'),
(235, '::1', '2025-02-27 22:05:49'),
(236, '::1', '2025-02-27 22:07:48'),
(237, '::1', '2025-02-27 22:08:28'),
(238, '::1', '2025-02-27 22:09:04'),
(239, '::1', '2025-02-27 22:09:16'),
(240, '::1', '2025-02-27 22:10:19'),
(241, '::1', '2025-02-27 22:11:54'),
(242, '::1', '2025-02-27 22:27:07'),
(243, '::1', '2025-02-27 22:27:16'),
(244, '::1', '2025-02-27 22:27:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv_uploads`
--
ALTER TABLE `cv_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_title`
--
ALTER TABLE `services_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cv_uploads`
--
ALTER TABLE `cv_uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `services_title`
--
ALTER TABLE `services_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
