-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2022 at 05:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_account` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_account`, `username`, `password`, `level`) VALUES
(2, 'datb1910206@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(5, 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(7, 'dat1234@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(8, 'dat12345@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `bill_id` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `location` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_bill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`bill_id`, `id_account`, `location`, `price_bill`) VALUES
(1, 5, 'hậu giang', 1017),
(2, 5, 'hậu giang', 1516),
(3, 5, 'hau giang', 3013),
(4, 5, 'hau giang', 4891);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'Nhẫn'),
(2, 'Vòng tay'),
(3, 'Dây chuyền'),
(4, 'Bông tai');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cart_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `cart_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `image`, `price`, `quantity`, `description`, `brand_id`) VALUES
(2, 'Dây chuyền vàng 24K', 'DC1.webp', 789, 2, 'sản phẩm đẹp cập nhật vào 23/4/2022', 3),
(5, 'vong tat vang 24k', 'L7.webp', 799, 13, 'sản phẩm mới ra ngày 20-4-2022', 2),
(7, 'vong tay vang 24k 1-21', 'L6.webp', 789, 8, 'sản phẩm mới ra ngày 20-4-2022', 2),
(8, 'bông tai 24k mới', 'E8.webp', 999, 5, 'sản phẩm mới ra ngày 20-4-2022', 4),
(11, 'Nhẫn Bạc Nữ Đính Đá Mạ Vàng Trắng AvaJi AVJ.R03213', '1.webp', 499, 18, 'sản phẩm đẹp cập nhật vào 23/4/2022', 1),
(12, 'Nhẫn Bạc Nữ Đính Đá Mạ Vàng Trắng AvaJi AVJ.R002323', '4.webp', 599, 13, 'sản phẩm đẹp cập nhật vào 23/4/2022', 1),
(13, 'Nhẫn Bạc Nữ Đính Đá Mạ Vàng Trắng AvaJi AVJ.R000575', '5.webp', 299, 5, 'sản phẩm đẹp cập nhật vào 23/4/2022', 1),
(14, 'Nhẫn Bạc Nữ Đính Đá Mạ Vàng Trắng AvaJi AVJ.R000238', '6.webp', 339, 10, 'sản phẩm đẹp cập nhật vào 23/4/2022', 1),
(15, 'Nhẫn Bạc Nữ Đính Đá Mạ Vàng Trắng AvaJi AVJ.R000897', '7.webp', 1099, 50, 'sản phẩm đẹp cập nhật vào 23/4/2022', 1),
(16, 'Nhẫn Bạc Nữ Đính Đá Mạ Vàng Trắng AvaJi AVJ.001', '8.webp', 789, 60, 'sản phẩm đẹp cập nhật vào 23/4/2022', 1),
(17, 'Nhẫn Bạc Nữ Đính Đá Mạ Vàng Trắng AvaJi AVJ.002', '9.webp', 399, 30, 'sản phẩm đẹp cập nhật vào 23/4/2022', 1),
(18, 'Nhẫn Bạc Nữ Đính Đá Mạ Vàng Trắng AvaJi AVJ.003', '10.webp', 699, 50, 'sản phẩm đẹp cập nhật vào 23/4/2022', 1),
(19, 'Nhẫn Bạc Nữ Đính Đá Mạ Vàng Trắng AvaJi AVJ.004', '11.webp', 899, 80, 'sản phẩm đẹp cập nhật vào 23/4/2022', 1),
(20, 'Nhẫn Bạc Nữ Đính Đá Mạ Vàng Trắng AvaJi AVJ.005', '13.webp', 599, 80, 'sản phẩm đẹp cập nhật vào 23/4/2022', 1),
(21, 'Nhẫn Bạc Nữ Đính Đá Mạ Vàng Trắng AvaJi AVJ.006', '14.webp', 999, 200, 'sản phẩm đẹp cập nhật vào 23/4/2022', 1),
(22, 'Nhẫn Bạc Nữ Đính Đá Mạ Vàng Trắng AvaJi AVJ.007', '15.webp', 1999, 100, 'sản phẩm đẹp cập nhật vào 23/4/2022', 1),
(23, 'Dây Chuyền Vàng 610 24K Nữ AvaJi AVJ.N001', 'DC1.webp', 1000, 70, 'sản phẩm đẹp cập nhật vào 23/4/2022', 3),
(24, 'Dây Chuyền Vàng 610 24K Nữ AvaJi AVJ.N002', 'DC2.webp', 899, 60, 'sản phẩm đẹp cập nhật vào 23/4/2022', 3),
(25, 'Dây Chuyền Vàng 610 24K Nữ AvaJi AVJ.N003', 'DC3.webp', 1099, 60, 'sản phẩm đẹp cập nhật vào 23/4/2022', 3),
(26, 'Dây Chuyền Vàng 610 24K Nữ AvaJi AVJ.N004', 'DC4.webp', 1500, 70, 'sản phẩm đẹp cập nhật vào 23/4/2022', 3),
(27, 'Dây Chuyền Vàng 610 24K Nữ AvaJi AVJ.N006', 'DC6.webp', 1200, 100, 'sản phẩm đẹp cập nhật vào 23/4/2022', 3),
(28, 'Dây Chuyền Vàng 610 24K Nữ AvaJi AVJ.N005', 'DC5.webp', 1100, 90, 'sản phẩm đẹp cập nhật vào 23/4/2022', 3),
(30, 'Bông Tai Vàng 610 18K Nữ AvaJi AVJ.E001', 'E1.webp', 500, 50, 'sản phẩm đẹp cập nhật vào 23/4/2022', 4),
(32, 'Bông Tai Vàng 610 18K Nữ AvaJi AVJ.E002', 'E6.webp', 1000, 100, 'sản phẩm đẹp cập nhật vào 23/4/2022', 4),
(33, 'Vòng Tay Bạc Nữ Đính Đá Mạ Vàng 18K AvaJi AVJ.T001', 'L1.webp', 2000, 100, 'sản phẩm đẹp cập nhật vào 23/4/2022', 2),
(34, 'Vòng Tay Bạc Nữ Đính Đá Mạ Vàng 18K AvaJi AVJ.T002', 'L2.webp', 2500, 50, 'sản phẩm đẹp cập nhật vào 23/4/2022', 2),
(35, 'Vòng Tay Bạc Nữ Đính Đá Mạ Vàng 18K AvaJi AVJ.T003', 'L7.webp', 3000, 90, 'sản phẩm đẹp cập nhật vào 23/4/2022', 2),
(36, 'vong tay vang 24k 24/4/2022', 'L5.webp', 999, 100, 'sản phẩm đẹp cập nhật vào 24/4/2022', 2),
(37, 'bong tai vang 24k 26-4-2022', 'E7.webp', 399, 60, 'sản phẩm đẹp cập nhật vào 26/4/2022', 4),
(38, 'bong tai vang 24k 26-4-2022', 'E7.webp', 399, 60, 'sản phẩm đẹp cập nhật vào 26/4/2022', 4),
(39, 'bong tai vang 24k 26-4-2022', 'E7.webp', 399, 60, 'sản phẩm đẹp cập nhật vào 26/4/2022', 4),
(40, 'bong tai vang 24k 27-4-2022', '6.webp', 999, 60, 'sản phẩm đẹp cập nhật vào 27/4/2022', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `id_account` (`id_account`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`id_account`) REFERENCES `account` (`id_account`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
