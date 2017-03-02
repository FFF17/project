-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2017 at 03:07 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
`id` int(15) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `tag`, `banner`, `tanggal`) VALUES
(43, 'Test2', 'Test2', 'test3', NULL, '2017-02-16 01:00:04'),
(44, 'adad', 'aadawd', 'dadad', NULL, '2017-02-16 01:00:04'),
(47, '', 'adwadawdawdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '', NULL, '2017-02-18 07:12:37'),
(48, 'test', 'Hai semua :)  Jika kalian lihat, terkadang di setiap artikel yang akan kita baca, selalu ada tulisan "Read More" atau "Baca Selengkapnya". Benar bukan? Bagaimana cara membuatnya? Mudah loh.. Script read more ini bisa memotong kalimat untuk ditampilkan. Langsung saja yuk!', 'test', NULL, '2017-02-18 07:14:12'),
(49, '', 'aad', '', NULL, '2017-02-18 07:19:26'),
(50, 'test', 'With the rivers Eamont and Lowther flowing nearby and meeting to the west, the site had natural defences. As well as two rivers, three Roman roads intersected at the fort: the York - Scotch Corner - Stainmore Pass - Brough under Stainmore - Kirkby Thore - Brougham route (along the present A66); the Manchester/Lancaster - Burrow-in-Lonsdale - Middleton - Low Borrow Bridge (Tebay) - Brougham route (along the present West Coast rail line); and the Glannaventa (Ravenglass) Roman port - Hardknott ', 'test', NULL, '2017-02-19 13:37:28'),
(51, 'test', 'tttttttttttttttttttt', 'ttttttt', NULL, '2017-02-20 00:44:20'),
(52, 'test', 'SQL is a standard language for accessing databases.\r\n\r\nOur SQL tutorial will teach you how to use SQL to access and manipulate data in: MySQL, SQL Server, Access, Oracle, Sybase, DB2, and other database systems.', 'test4', NULL, '2017-02-20 15:38:42'),
(54, 'Mohamad ferdiansyah', 'SQL is a standard language for accessing databases.\r\n\r\nOur SQL tutorial will teach you how to use SQL to access and manipulate data in: MySQL, SQL Server, Access, Oracle, Sybase, DB2, and other database systems.', 'SQL', NULL, '2017-02-20 15:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
`id` int(100) NOT NULL,
  `komentar` varchar(1000) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `komentator` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `komentar`, `id_artikel`, `komentator`) VALUES
(1, '', 0, ''),
(2, '', 0, ''),
(3, '', 0, ''),
(4, '', 0, ''),
(5, '', 43, ''),
(6, '', 0, ''),
(7, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tblogin`
--

CREATE TABLE IF NOT EXISTS `tblogin` (
`id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblogin`
--

INSERT INTO `tblogin` (`id`, `email`, `password`) VALUES
(1, 'ferdiansyah17@gamil.com', '$2y$10$XiCnlOS.zc.FACwZgqXaju9VvyYeoGKrAVMOD35WfUh5Tseq/efIy'),
(2, 'ferdiansyah17@gmail.com', '$2y$10$3fNDrt/4kju1SIpioTWom.eKX1qoZ5pUWvnyuEI6m5mNdkrOLWDGS'),
(3, 'ff@mail.com', '$2y$10$rqM2L2qcnTK7MIbD2tb67.SZBpkxEGl9KTmdkOilvZFQ0pFevoMP6'),
(4, 'bla@gmail.com', '$2y$10$gmPWQ1jNFknAoFyw2soxdeXrTbYK9KMsTMzLtDeNdausp/bhxiMT.'),
(6, 'dff@gmail.com', '$2y$10$VEkNyCH6qSWq17.Uh/xl9.cTC4T.hAuo3hC.ojD.H4T3TldKr82Bq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblogin`
--
ALTER TABLE `tblogin`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tblogin`
--
ALTER TABLE `tblogin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
