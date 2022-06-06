-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 09:24 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcbuild`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `motherboard`
--

CREATE TABLE `motherboard` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `m_price` int(15) NOT NULL,
  `m_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motherboard`
--

INSERT INTO `motherboard` (`m_id`, `m_name`, `m_price`, `m_details`) VALUES
(1, 'Aorus B450 Pro WiFi (Rev 1.1)', 23000, 'WiFi edition\r\nDual M.2 Slot\r\n3x PCie Lanes\r\n4x Memory slot\r\nB450 Chipset '),
(2, 'MSI H410M Pro VH', 13000, 'Supports 10th Gen Intel® Core™ / Pentium® Celeron® processors for LGA 1200 socket\r\nSupports DDR4 Memory, up to 2933(Max) MHz\r\nM.2 Slot for NVme SSD');

-- --------------------------------------------------------

--
-- Table structure for table `processor`
--

CREATE TABLE `processor` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` int(15) NOT NULL,
  `p_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `processor`
--

INSERT INTO `processor` (`p_id`, `p_name`, `p_price`, `p_details`) VALUES
(1, 'Ryzen 5 3600', 31000, ' AMD Unlocked processor\r\nBase Clock: 3.6Ghz upto 4.2Ghz\r\n6c / 12t\r\nBox pack\r\n '),
(2, 'i3 10100', 15000, 'Intel IGD processor \r\n4c/4t\r\n3.6Ghz to 4.3Ghz');

-- --------------------------------------------------------

--
-- Table structure for table `psu`
--

CREATE TABLE `psu` (
  `ps_id` int(11) NOT NULL,
  `ps_name` varchar(255) NOT NULL,
  `ps_watt` varchar(15) NOT NULL,
  `ps_price` int(20) NOT NULL,
  `ps_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `psu`
--

INSERT INTO `psu` (`ps_id`, `ps_name`, `ps_watt`, `ps_price`, `ps_details`) VALUES
(1, 'Goldkist', '650 Watts', 4500, ' 80+ Bronze Rated\r\n3x 8 Pin connector for GPU\r\n120mm Cooling Fan'),
(2, 'Whitehorse ', '450Watts', 1000, ' Normal 450 Watts PSU\r\nSurge Protection\r\n24 Pin full ATX power connector\r\n2x SATA power');

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE `ram` (
  `r_id` int(11) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_capacity` varchar(15) NOT NULL,
  `r_price` int(15) NOT NULL,
  `r_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`r_id`, `r_name`, `r_capacity`, `r_price`, `r_details`) VALUES
(1, 'HP v8', '8GB ', 8000, ' HP v8 RGB SYNC RAM\r\n2x Stick package\r\nHeatsink\r\n3200Mhz'),
(2, 'Kingston DDR4 RAM', '8GB ', 6000, 'Basic RAM modules\r\n3200Mhz\r\nDual Channel configurable');

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_capacity` varchar(15) NOT NULL,
  `s_price` int(11) NOT NULL,
  `s_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`s_id`, `s_name`, `s_capacity`, `s_price`, `s_details`) VALUES
(1, 'Acer FA100 ', '512GB', 9000, 'Gen 3 x4 SSD\r\nM.2 Single Cut\r\nRead and write speeds upto 2.2GB/s and 1.8GB/s'),
(2, 'Silicon Power SATA', '256GB', 5000, 'SATA 3.0 Interface\r\nRead and write speeds upto 700MB/s and 450MB/s\r\nRAID Storage');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motherboard`
--
ALTER TABLE `motherboard`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `processor`
--
ALTER TABLE `processor`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `psu`
--
ALTER TABLE `psu`
  ADD PRIMARY KEY (`ps_id`);

--
-- Indexes for table `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `motherboard`
--
ALTER TABLE `motherboard`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `processor`
--
ALTER TABLE `processor`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `psu`
--
ALTER TABLE `psu`
  MODIFY `ps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ram`
--
ALTER TABLE `ram`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `storage`
--
ALTER TABLE `storage`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
