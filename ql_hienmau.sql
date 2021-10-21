-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 03:45 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ql_hienmau`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_donor`
--

CREATE TABLE `blood_donor` (
  `bd_id` varchar(10) NOT NULL,
  `bd_name` varchar(50) NOT NULL,
  `bd_sex` char(1) NOT NULL,
  `bd_age` int(30) NOT NULL,
  `bd_bgroup` varchar(5) NOT NULL,
  `bd_reg_date` date NOT NULL,
  `bd_phno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_donor`
--

INSERT INTO `blood_donor` (`bd_id`, `bd_name`, `bd_sex`, `bd_age`, `bd_bgroup`, `bd_reg_date`, `bd_phno`) VALUES
('001', 'Trần thủy', 'F', 18, 'A', '2021-10-19', '01111111'),
('002', 'Ngô thủy', 'M', 21, 'B', '2021-08-18', '022211111'),
('003', 'Nguyễn Tú', 'M', 23, 'B', '2021-10-15', '03331111'),
('004', 'Vi uyên', 'F', 28, 'O', '2021-10-14', '04444111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_donor`
--
ALTER TABLE `blood_donor`
  ADD PRIMARY KEY (`bd_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
