-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 04, 2019 at 09:37 AM
-- Server version: 10.1.40-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `namagzbl_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_book`
--

CREATE TABLE `tb_book` (
  `id_book` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `date_published` date NOT NULL,
  `number_of_pages` int(10) NOT NULL,
  `id_book_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_book`
--

INSERT INTO `tb_book` (`id_book`, `title`, `author`, `date_published`, `number_of_pages`, `id_book_type`) VALUES
(1, 'Laskar Pelangi', 'Andre Hirata', '2019-07-04', 1001, 1),
(2, 'Sang Pemimpi', 'Andre Hirata', '2019-07-04', 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_book_type`
--

CREATE TABLE `tb_book_type` (
  `id_book_type` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_book_type`
--

INSERT INTO `tb_book_type` (`id_book_type`, `type_name`) VALUES
(1, 'Novel'),
(2, 'Documentation'),
(3, 'Other');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_book`
--
ALTER TABLE `tb_book`
  ADD PRIMARY KEY (`id_book`),
  ADD KEY `fk_book_type` (`id_book_type`);

--
-- Indexes for table `tb_book_type`
--
ALTER TABLE `tb_book_type`
  ADD PRIMARY KEY (`id_book_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_book`
--
ALTER TABLE `tb_book`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_book_type`
--
ALTER TABLE `tb_book_type`
  MODIFY `id_book_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_book`
--
ALTER TABLE `tb_book`
  ADD CONSTRAINT `fk_book_type` FOREIGN KEY (`id_book_type`) REFERENCES `tb_book_type` (`id_book_type`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
