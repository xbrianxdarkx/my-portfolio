-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 09:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regform`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phonenumber` int(25) NOT NULL,
  `bloodtype` varchar(10) NOT NULL,
  `address` varchar(250) NOT NULL,
  `name` varchar(120) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `email`, `phonenumber`, `bloodtype`, `address`, `name`, `password`) VALUES
(11, 'trycathy@gmail.com', 1234578, 'A', 'bahaylang', 'cathy', '$2y$10$CmV5O2y.BLVWV3zkB72zhe234YhUXNdSTIN00BWKGLcYLJeVRBr.6'),
(12, 'mc@gmail.com', 121245, 'A', 'basta', 'cathy', '$2y$10$swTMGECkuFIpcoho8/5gmO60ROyru3JISFRKr1ItZ6aol7mjvklUe'),
(13, 'maed@gmail.com', 12134578, 'O', 'dyanlang', 'mae', '$2y$10$nS1kMd8ClLJ5oiyCqPyZ2O43HCkWJl9P9Eml8m65lHPZLCsq3ctem'),
(14, '19charlesbrian@gmail.com', 2147483647, 'O', 'blk 16 lot 1', 'Brian Natividad', '$2y$10$9HXLGft6sT2LlzqLAdAHpON1gbyPaGYALmCysq7Xg9S9I/YUNG/Xm'),
(17, 'admin1@gmail.com', 1213445, 'A', 'dyanlang', 'admin', '$2y$10$1N3u3UVhEWG6iaXjmeGpP.hdhf2/0yiys/JpYTeowzrD9r3nsKbiG'),
(18, 'ymikaellamarie@gmail.com', 2147483647, 'o', 'ph9', 'Mikaella', '$2y$10$uVJ3aFvQQLGTNWnZV4cpme4JrdblaLcFM0hfYkg6ULA4Iu6I96QoS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
