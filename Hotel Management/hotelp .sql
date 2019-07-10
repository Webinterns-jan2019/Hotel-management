-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2019 at 02:17 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelp`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `r_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`r_id`, `c_id`, `checkin`, `checkout`, `amount`) VALUES
(11, 555, '2019-02-13', '2019-02-23', 464644);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `c_id` int(11) NOT NULL,
  `gender` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `email`, `phone`, `address`, `password`, `c_id`, `gender`) VALUES
('vishu', 'ahyyh@gmail.com', 13113, 'fafsja', 'sgjgs', 1, ''),
('afaf', 'dadadaf', 311, 'fawfaf', 'fafas', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `Title` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `passwords` int(20) NOT NULL,
  `PhoneNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`Title`, `Firstname`, `Lastname`, `Email`, `passwords`, `PhoneNumber`) VALUES
('is', '', '', '', 0, 0),
('is', 'bvcb', '', '', 0, 0),
('is', 'bvcb', 'hjjafdj', '', 0, 0),
('is', 'bvcb', 'hjjafdj', 'ssss', 0, 0),
('is', 'bvcb', 'hjjafdj', 'ssss', 0, 0),
('is', 'bvcb', 'hjjafdj', 'ssss', 147, 789456),
('is', 'bvcb', 'hjjafdj', 'ssss', 0, 789456),
('is', 'bvcb', 'hjjafdj', 'ssss', 0, 789456),
('is', 'na', 'hjjafdj', 'ssss', 0, 789456),
('is', 'na', 'hjjafdj', 'ssss', 147, 789456),
('is', 'na', 'hjjafdj', 'ssss', 0, 789456),
('is', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(1, 'Admin', '1234'),
(2, 'Prasath', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_info`
--

CREATE TABLE `reservation_info` (
  `Type_of_Room` varchar(50) NOT NULL,
  `Bedding_type` varchar(50) NOT NULL,
  `No_of_Rooms` int(50) NOT NULL,
  `Meal_Plan` varchar(50) NOT NULL,
  `Check_in` date NOT NULL,
  `Check_Out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation_info`
--

INSERT INTO `reservation_info` (`Type_of_Room`, `Bedding_type`, `No_of_Rooms`, `Meal_Plan`, `Check_in`, `Check_Out`) VALUES
('dellux', 'single', 2, 'veg', '2019-07-01', '2019-07-04'),
(' simple', 'double', 1, 'jjs', '2017-06-12', '2017-03-03'),
(' simple', 'double', 1, 'jjs', '2017-06-12', '2017-03-03'),
(' is', 'cs', 12, 'hh', '2015-10-01', '2015-06-01'),
(' is', 'cs', 12, 'hh', '2015-10-01', '2015-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `r_id` int(200) NOT NULL,
  `types` varchar(200) NOT NULL,
  `bed` varchar(200) NOT NULL,
  `amount` int(200) NOT NULL,
  `allocated` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`r_id`, `types`, `bed`, `amount`, `allocated`) VALUES
(1, 'simple', 'quad', 9999, 0),
(2, 'simple', 'quad', 9999, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
