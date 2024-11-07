-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 06, 2024 at 06:01 PM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jqysfwmy_szixd608v01`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(8) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `category_1` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `category_2` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `category_3` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image_main` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `brand`, `model`, `color`, `price`, `category_1`, `category_2`, `category_3`, `date_create`, `date_modify`, `description`, `image_main`, `images`) VALUES
(1, 'Sony Alpha a7 IV Mirrorless Camera', 'Sony', 'Alpha 7 IV', 'Black', 2100.00, 'Camera', 'Digital Camera', '', '2024-11-05 20:38:15', '2024-11-05 20:38:15', 'One of the best digital mirrorless cameras on the market. Body only. A lens needs to be purchased separately. ', 'Camera_SonyAlpha7IV_01.jpeg', 'Camera_SonyAlpha7IV_02.jpeg,Camera_SonyAlpha7IV_03.jpeg,Camera_SonyAlpha7IV_04.jpeg'),
(2, 'Canon EOS R10 Mirrorless Camera', 'Canon', 'EOS R10', 'Black', 880.00, 'Camera', 'Digital Camera', '', '2024-11-05 22:56:24', '2024-11-05 22:56:24', 'One of the best mirrorless cameras for beginners.', 'Camera_CanonEOSR10_01.jpeg', 'Camera_CanonEOSR10_02.jpeg,Camera_CanonEOSR10_03.jpeg,Camera_CanonEOSR10_04.jpeg'),
(3, 'Sony Alpha a7R V Mirrorless Camera', 'Sony', 'Alpha 7R V', 'Black', 3500.00, 'Camera', 'Digital Camera', '', '2024-11-05 23:53:11', '2024-11-05 23:53:11', 'One of the best digital cameras for professional photographers.', 'Camera_SonyA7RV_01.jpg', 'Camera_SonyA7RV_02.jpg,Camera_SonyA7RV_03.jpg,Camera_SonyA7RV_04.jpg'),
(4, 'Fujifilm Instax Mini 12 Intant Film Camera', 'Instax', 'Mini 12', 'Various', 80.00, 'Camera', 'Film Camera', '', '2024-11-06 00:09:27', '2024-11-06 00:09:27', 'One of the best instant cameras overall.', 'Camera_InstaxMini12_01.jpg', 'Camera_InstaxMini12_02.jpg,Camera_InstaxMini12_03.jpg,Camera_InstaxMini12_04.jpg'),
(5, 'Pentax K1000 SLR Film Camera', 'Pentax', 'K1000', 'Silver Black', 200.00, 'Camera', 'Film Camera', '', '2024-11-06 00:24:23', '2024-11-06 00:24:23', 'A classic film camera for beginners.  Fully manual single-lens reflex camera.', 'Camera_PentaxK1000_01.jpg', 'Camera_PentaxK1000_02.jpg,Camera_PentaxK1000_03.jpg,Camera_PentaxK1000_04.jpg'),
(6, 'Nikon F100 35mm Film SLR Camera', 'Nikon', 'F100', 'Black', 1700.00, 'Camera', 'Film Camera', '', '2024-11-06 01:32:43', '2024-11-06 01:32:43', 'One of the best SLR cameras before the digital era.', 'Camera_NikonF100_01.jpg', 'Camera_NikonF100_02.jpg,Camera_NikonF100_03.jpg,Camera_NikonF100_04.jpg'),
(7, 'Sony FE 24-70mm F2.8 GM II Full-frame Standard Zoom G Master Len', 'Sony', 'FE 24-70mm f/2.8 GM II', 'Black', 1600.00, 'Lens', '', '', '2024-11-06 04:35:09', '2024-11-06 04:35:09', 'This high-performance full-frame standard zoom lens is designed with impressive optical quality. It features a constant f/2.8 aperture for outstanding low-light performance and creative control over depth of field across the zoom range. ', 'Lens_SonyFE24to70_01.jpg', 'Lens_SonyFE24to70_02.jpg,Lens_SonyFE24to70_03.jpg,Lens_SonyFE24to70_04.jpg'),
(8, 'Canon RF 24-70mm f/2.8 L IS USM Lens', 'Canon', 'RF 24-70mm f/2.8 L IS USM', 'Black', 1900.00, 'Lens', '', '', '2024-11-06 04:50:25', '2024-11-06 04:50:25', 'Covering wide-angle to short telephoto perspectives, it’s ideal for a variety of subjects, from landscapes and street photography to portraits and events.', 'Lens_CanonRF24to70_01.jpg', 'Lens_CanonRF24to70_02.jpg,Lens_CanonRF24to70_03.jpg,Lens_CanonRF24to70_04.jpg'),
(9, 'Nikon 50mm f/1.8D AF Nikkor Lens', 'Nikon', '50mm f/1.8D AF Nikkor', 'Black', 80.00, 'Lens', '', '', '2024-11-06 05:15:33', '2024-11-06 05:15:33', 'This classic 50mm lens is a versatile choice for portraits, street photography, and general-purpose shooting.', 'Lens_Nikon50mmNikkor_01.jpg', 'Lens_Nikon50mmNikkor_02.jpg,Lens_Nikon50mmNikkor_03.jpg,Lens_Nikon50mmNikkor_04.jpg'),
(10, 'Tripod 1', 'reCama', 'Tri 1', 'Black', 120.00, 'Camera Support', 'Tripod', '', '2024-11-06 13:15:44', '2024-11-06 13:15:44', 'Simple, trustworthy, and smooth tripod with a good warranty. ', 'Tripod_1_01.jpeg', 'Tripod_1_02.jpeg,Tripod_1_03.jpeg,Tripod_1_04.jpeg'),
(11, 'Tripod 2', 'reCama', 'Tri 2', 'Black', 200.00, 'Camera Support', 'Tripod', '', '2024-11-06 17:31:39', '2024-11-06 17:31:39', 'Lightweight and portable, it’s ideal for professionals and hobbyists seeking dependable performance without a premium price.', 'Tripod_2_01.jpeg', 'Tripod_2_02.jpeg,Tripod_2_03.jpeg,Tripod_2_04.jpeg'),
(12, 'reCama STA 1 Handheld Camera Stabilizer', 'reCama', 'Sta 1', 'Black', 0.00, 'Camera Support', 'Stabilizer', '', '2024-11-06 17:41:45', '2024-11-06 17:41:45', 'Compact and easy to set up, it’s perfect for content creators who want reliable stability on the go.', 'Stabilizer_1_01.jpeg', 'Stabilizer_1_02.jpeg,Stabilizer_1_03.jpeg,Stabilizer_1_04.jpeg');

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
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
