-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 05:48 PM
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
-- Database: `oop-ug`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `text`) VALUES
(1, 'about title', 'about text');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `ord` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `path`, `ord`) VALUES
(1, 'Home', '?page=home', 1),
(2, 'About', '?page=about', 2),
(3, 'News', '?page=news', 3),
(4, 'Contact', '?page=contact', 4);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_text` text NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `publish_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `short_text`, `text`, `image`, `publish_date`) VALUES
(1, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate cursus lectus in volutpat. Curabitur blandit molestie metus, id commodo tellus ultrices at. Sed at rhoncus elit. Aliquam urna quam', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate cursus lectus in volutpat. Curabitur blandit molestie metus, id commodo tellus ultrices at. Sed at rhoncus elit. Aliquam urna quam, consectetur nec imperdiet non, consectetur non mi. Vestibulum vestibulum turpis turpis, ac hendrerit nisl ullamcorper nec. Praesent blandit vel dui tempus auctor. Fusce dictum mauris nec fermentum dictum. Sed eu gravida neque, nec faucibus nibh. Proin gravida gravida felis, vitae feugiat purus dignissim vehicula. Donec blandit tellus ac leo pharetra commodo. Fusce congue commodo ullamcorper', 'img-1642349225.jpg', '2022-01-16'),
(2, 'Curabitur ante ante', 'Vestibulum tempor lacus luctus pretium tempor. Mauris varius eget sapien et ullamcorper. Sed non ullamcorper lectus, quis imperdiet nisi.', 'Vestibulum tempor lacus luctus pretium tempor. Mauris varius eget sapien et ullamcorper. Sed non ullamcorper lectus, quis imperdiet nisi. Cras convallis orci volutpat enim elementum aliquet. Phasellus auctor metus in elementum efficitur. Suspendisse ultrices pretium augue. Phasellus mattis ligula sed mauris luctus, porttitor vestibulum nisl suscipit. Quisque dapibus, odio quis volutpat lobortis, erat augue dignissim ligula, dapibus porta erat nulla vel eros. Maecenas at ornare ipsum, blandit mattis purus. Aenean congue felis quis eros maximus, ac ullamcorper enim fringilla. Etiam tincidunt felis quis ex feugiat, eu sagittis ante tempor. Donec eu magna nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc nec neque fermentum, aliquam nunc vel, malesuada enim.', 'download-1642349298.jfif', '2022-01-16'),
(3, 'Nunc tincidunt', 'Donec augue tortor, ultricies a efficitur dignissim, pretium ac dui. Aliquam ut luctus nulla, non blandit mauris. In molestie euismod eleifend.', 'Donec augue tortor, ultricies a efficitur dignissim, pretium ac dui. Aliquam ut luctus nulla, non blandit mauris. In molestie euismod eleifend. Suspendisse tempus commodo ornare. Praesent ullamcorper nec leo non fringilla. Praesent laoreet varius dignissim. Aenean massa erat, blandit nec aliquam sed, faucibus sed leo. Donec a mauris nec erat pellentesque dapibus. Quisque ante urna, ultrices nec justo vulputate, condimentum rhoncus libero.', 'GeFvQkBbSLaMdpKXF1Zv_bigstock-Aerial-View-Of-Blue-Lakes-And--227291596-1642349351.jpg', '2022-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `text`) VALUES
(1, 'Consulting', 'Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod Lorem ipsum dolor sit ametelit.'),
(2, 'Finance', 'Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod Lorem ipsum dolor sit ametelit.'),
(3, 'Technology', 'Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod Lorem ipsum dolor sit ametelit.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '25d55ad283aa400af464c76d713c07ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
