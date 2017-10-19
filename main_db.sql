-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 Okt 2017 pada 17.19
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `main_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(18) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `role`, `name`, `username`, `password`) VALUES
(1, 'admin', 'Harry Ermawan', 'malicioushex', 'd8578edf8458ce06fbc5bb76a58c5ca4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog_tbl`
--

CREATE TABLE `blog_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `pubdate` date NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blog_tbl`
--

INSERT INTO `blog_tbl` (`id`, `title`, `slug`, `desc`, `img`, `pubdate`, `created`, `modified`) VALUES
(1, 'testing postingan', 'testing-postingan', 'testing-postingantesting-postingantesting-postingantesting-postingantesting-postingantesting-postingantesting-postingantesting-postingantesting-postingantesting-postingantesting-postingan', 'img/picture1.jpg', '2017-10-02', '2017-10-01', '2017-10-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `message_tbl`
--

CREATE TABLE `message_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `message_tbl`
--

INSERT INTO `message_tbl` (`id`, `name`, `email`, `phone`, `description`) VALUES
(1, 'Harry', 'harryermawan@gmail.com', '83820202307', NULL),
(2, 'Harry', 'harryermawan@gmail.c', '83820202307', 'hello i\'m harry'),
(3, 'az', 'aza@sx', '83213232312', '								\r\n		asdsadasda					'),
(4, 'ad', 'sda@ad', '341342', '								\r\n							asvdwc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects_tbl`
--

CREATE TABLE `projects_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `author` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `projects_tbl`
--

INSERT INTO `projects_tbl` (`id`, `title`, `category`, `author`, `description`, `image`, `link`) VALUES
(1, 'Business Company Profile', 'Fullstack', 'Harry Ermawan', 'Business Company Profile built using PHP Native and HTML5&CSS3', 'image1.jpg', 'siliwangidev.com/demo/CMS_PHP'),
(2, 'Responsive Admin Template', 'Web Design', 'Harry Ermawan', 'Responsive Design for Admin built using Bootstrap ,JQuery , JS, Html5, and css3', 'image2.jpg', 'siliwangidev.com/demo/CMSAdminTemplate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_tbl`
--
ALTER TABLE `message_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects_tbl`
--
ALTER TABLE `projects_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `message_tbl`
--
ALTER TABLE `message_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `projects_tbl`
--
ALTER TABLE `projects_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
