-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2024 at 12:56 AM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jqysfwmy_db608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(8) NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `sequence` int(8) NOT NULL,
  `deal` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `discount` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `price_now` decimal(8,2) NOT NULL,
  `category_0` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `category_1` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `category_2` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image_main` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `images_small` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `brand`, `model`, `color`, `sequence`, `deal`, `price`, `discount`, `price_now`, `category_0`, `category_1`, `category_2`, `date_create`, `date_modify`, `description`, `image_main`, `images`, `images_small`, `quantity`) VALUES
(1, 'Alpha a7 Mirrorless Camera', 'Sony', 'Alpha a7', 'Black', 1, 'Holiday Deal!', 2200.00, '-10%', 1980.00, '01', 'Camera', 'Digital Camera', '2024-11-27 06:57:04', '2024-12-08 19:29:37', 'One of the best digital mirrorless cameras on the market. Body only. A lens needs to be purchased separately. ', 'Camera_SonyA7_01.jpg', 'Camera_SonyA7_01.jpg,Camera_SonyA7_02.jpg,Camera_SonyA7_03.jpg', '', 100),
(2, 'EOS R10 Mirrorless Camera', 'Canon', 'EOS R10', 'Black', 3, 'Holiday Deal!', 880.00, '-10%', 792.00, '01', 'Camera', 'Digital Camera', '2024-11-27 06:55:53', '2024-12-08 19:26:35', 'One of the best mirrorless cameras for beginners.', 'Camera_CanonEOSR10_01.jpg', 'Camera_CanonEOSR10_01.jpg,Camera_CanonEOSR10_02.jpg,Camera_CanonEOSR10_03.jpg', '', 100),
(3, 'Alpha a7R Mirrorless Camera', 'Sony', 'Alpha a7R', 'Black', 2, 'Holiday Deal!', 3500.00, '-10%', 3150.00, '01', 'Camera', 'Digital Camera', '2024-11-27 06:56:27', '2024-12-08 19:30:32', 'One of the best digital cameras for professional photographers.', 'Camera_SonyA7R_01.jpg', 'Camera_SonyA7R_01.jpg,Camera_SonyA7R_02.jpg,Camera_SonyA7R_03.jpg', '', 100),
(4, 'Mini 12 Instant Film Party Camera', 'Instax', 'Mini 12', 'Various', 5, 'Holiday Deal!', 80.00, '-10%', 72.00, '01', 'Camera', 'Film Camera', '2024-11-27 06:55:14', '2024-12-08 19:30:59', 'One of the best instant cameras overall.', 'Camera_InstaxMini12_01.jpg', 'Camera_InstaxMini12_01.jpg,Camera_InstaxMini12_02.jpg,Camera_InstaxMini12_03.jpg', '', 100),
(5, 'K1000 Classic SLR Film Camera', 'Pentax', 'K1000', 'Silver Black', 4, 'Holiday Deal!', 200.00, '-10%', 180.00, '01', 'Camera', 'Film Camera', '2024-11-27 06:54:57', '2024-12-08 19:31:40', 'A classic film camera for beginners.  Fully manual single-lens reflex camera.', 'Camera_PentaxK1000_01.jpg', 'Camera_PentaxK1000_01.jpg,Camera_PentaxK1000_02.jpg,Camera_PentaxK1000_03.jpg', '', 100),
(6, 'F100 35mm Film SLR Camera', 'Nikon', 'F100', 'Black', 6, 'Holiday Deal!', 1700.00, '-10%', 1530.00, '01', 'Camera', 'Film Camera', '2024-11-27 06:54:41', '2024-12-08 19:32:03', 'One of the best SLR cameras before the digital era.', 'Camera_NikonF100_01.jpg', 'Camera_NikonF100_01.jpg,Camera_NikonF100_02.jpg,Camera_NikonF100_03.jpg', '', 100),
(7, 'FE 24-70mm F2.8 GM II Full-frame Lens', 'Sony', 'FE 24-70mm f/2.8 GM II', 'Black', 9, 'Holiday Deal!', 1600.00, '-15%', 1360.00, '02', 'Lens', '', '2024-11-06 04:35:09', '2024-12-08 19:32:24', 'Sony FE 24-70mm F2.8 GM II Full-frame Standard Zoom G Master Lens. This high-performance full-frame standard zoom lens is designed with impressive optical quality. It features a constant f/2.8 aperture for outstanding low-light performance and creative control over depth of field across the zoom range. ', 'Lens_SonyFE24to70_01.jpg', 'Lens_SonyFE24to70_01.jpg,Lens_SonyFE24to70_02.jpg,Lens_SonyFE24to70_03.jpg', '', 100),
(8, 'RF 24-70mm f/2.8 L IS USM Lens', 'Canon', 'RF 24-70mm f/2.8 L IS USM', 'Black', 8, 'Holiday Deal!', 1900.00, '-10%', 1710.00, '02', 'Lens', '', '2024-11-06 04:50:25', '2024-12-08 19:28:52', 'Covering wide-angle to short telephoto perspectives, it’s ideal for a variety of subjects, from landscapes and street photography to portraits and events.', 'Lens_CanonRF24to70_01.jpg', 'Lens_CanonRF24to70_01.jpg,Lens_CanonRF24to70_02.jpg,Lens_CanonRF24to70_03.jpg', '', 100),
(9, '50mm f/1.8D AF Nikkor Classic Lens', 'Nikon', '50mm f/1.8D AF Nikkor', 'Black', 7, 'Holiday Deal!', 100.00, '-20%', 80.00, '02', 'Lens', '', '2024-11-06 05:15:33', '2024-12-08 19:33:35', 'This classic 50mm lens is a versatile choice for portraits, street photography, and general-purpose shooting.', 'Lens_Nikon50mmNikkor_01.jpg', 'Lens_Nikon50mmNikkor_01.jpg,Lens_Nikon50mmNikkor_02.jpg,Lens_Nikon50mmNikkor_03.jpg', '', 100),
(10, 'Tri1 Quick Release Compact Tripod', 'reCama', 'Tri 1', 'Black', 11, 'Holiday Deal!', 120.00, '-10%', 108.00, '03', 'Camera Support', 'Tripod', '2024-11-06 13:15:44', '2024-12-08 19:34:26', 'Steady, trustworthy, and smooth tripod. The legs are extendable in a quick rotating way. Bubble levels on the tripod head can help you adjust to precise angles. ', 'Tripod_1_01.jpeg', 'Tripod_1_01.jpeg,Tripod_1_02.jpeg,Tripod_1_03.jpeg', '', 100),
(11, 'Tri2 Carbon Fiber Professional Tripod', 'reCama', 'Tri 2', 'Black', 12, 'Holiday Deal!', 200.00, '-15%', 170.00, '03', 'Camera Support', 'Tripod', '2024-11-06 17:31:39', '2024-12-08 19:34:48', 'Lightweight and portable, it’s ideal for professionals and hobbyists seeking dependable performance without a premium price.', 'Tripod_2_01.jpeg', 'Tripod_2_01.jpeg,Tripod_2_02.jpeg,Tripod_2_03.jpeg', '', 100),
(12, 'Str100 Handheld Camera Gimbal Stabilizer', 'reCama', 'Sta 100', 'Black', 10, 'Holiday Deal!', 135.00, '-20%', 108.00, '03', 'Camera Support', 'Stabilizer', '2024-11-06 17:41:45', '2024-12-08 19:35:18', 'Compact and easy to set up, it’s perfect for content creators who want reliable stability on the go.', 'Stabilizer_1_01.jpg', 'Stabilizer_1_01.jpg,Stabilizer_1_02.jpg,Stabilizer_1_03.jpg', '', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
