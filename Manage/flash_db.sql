-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 06:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flash_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni_t`
--

CREATE TABLE `alumni_t` (
  `id` int(11) NOT NULL,
  `name` varchar(240) NOT NULL,
  `session` varchar(240) NOT NULL,
  `package` float(6,2) DEFAULT NULL,
  `pro_pic` varchar(240) NOT NULL,
  `company` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni_t`
--

INSERT INTO `alumni_t` (`id`, `name`, `session`, `package`, `pro_pic`, `company`) VALUES
(1, 'ravi', 'i', NULL, 'Alumni/pic/C20_kokUsAEsIOM.jpg', 'tcs'),
(2, 'dsd', '$i', NULL, 'Alumni/pic/Binay_Krishna_Bose.jpg', 'sadsa');

-- --------------------------------------------------------

--
-- Table structure for table `flash_t`
--

CREATE TABLE `flash_t` (
  `id` int(30) NOT NULL,
  `head` varchar(300) NOT NULL,
  `publish` date NOT NULL,
  `url` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flash_t`
--

INSERT INTO `flash_t` (`id`, `head`, `publish`, `url`) VALUES
(107, 'Walk-In-Interview Non-Teaching Posts on Contractual Basis ', '2022-08-16', 'https://www.cuk.ac.in/WalkInInterview2022/Walk%20In%20Interview%20for%20Non%20Teaching%2012%2008%202022.pdf'),
(109, 'Leon Edwards KOs Kamaru Usman with insane head kick - then celebrates like Conor ', '2022-08-21', 'https://www.msn.com/en-in/sports/news/leon-edwards-kos-kamaru-usman-with-insane-head-kick-then-celebrates-like-conor-mcgregor/ar-AA10Tjuc?cvid=2be017766ac44a9ea5df509ead82c2ba'),
(110, 'dsfds', '2022-08-09', 'sgfsgd');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_t`
--

CREATE TABLE `gallery_t` (
  `id` int(255) NOT NULL,
  `g_tittle` varchar(200) NOT NULL,
  `g_image` varchar(250) NOT NULL,
  `g_url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_t`
--

INSERT INTO `gallery_t` (`id`, `g_tittle`, `g_image`, `g_url`) VALUES
(42, 'Independence Day', 'Gallery/Album/Veer-Surendra-Sai.jpg', 'https://photos.app.goo.gl/dKRQYnyahshGmgmN8'),
(46, 'reef', 'Gallery/Album/Binay_Krishna_Bose.jpg', 'gdgd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni_t`
--
ALTER TABLE `alumni_t`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flash_t`
--
ALTER TABLE `flash_t`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_t`
--
ALTER TABLE `gallery_t`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni_t`
--
ALTER TABLE `alumni_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `flash_t`
--
ALTER TABLE `flash_t`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `gallery_t`
--
ALTER TABLE `gallery_t`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
