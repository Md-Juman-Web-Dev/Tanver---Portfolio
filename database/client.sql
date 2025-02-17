-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2025 at 06:55 PM
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
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `skills`, `img`) VALUES
(1, 'Tanvir Ahmed  Shawon', 'Digital Marketing, UI/UX Design', 'banner-67b3770a34e12.jpg');

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
(1, 'Facebook'),
(2, 'Google');

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
(41, 'Cade Cardenas', 'cyvy@mailinator.com', 'Voluptatum do nihil ', 'Sed reprehenderit c'),
(42, 'Myra Myers', 'xekas@mailinator.com', 'Deleniti molestiae i', 'Irure a commodo porr');

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
(28, 'Hope Gomez', 'Facebook', 'Et dolores esse com', '2017-12-03', NULL, 'Explicabo Dolorem a', 'portfolio-67b3666c3e45e.png,portfolio-67b3666c3e853.png,portfolio-67b3666c3eac4.png,portfolio-67b3666c3ed28.png'),
(29, 'Juman', 'Facebook', 'Sadman', '2025-02-17', NULL, 'Juman Shostha Project', 'portfolio-67b3670c1af93.png'),
(30, 'Rae Miles', 'Google', 'Quis totam totam sit', '2025-02-08', NULL, 'Magna voluptatem in ', 'portfolio-67b3694bb5920.png'),
(31, 'Ariana Buckley', 'Vegetables', 'Dolore nostrum eaque', '1995-06-11', NULL, 'Nulla ipsum aliquid', 'portfolio-67b3695bc13c6.png');

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
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
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
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
