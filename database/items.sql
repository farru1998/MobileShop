-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 12:26 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `items`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `login_id` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`login_id`, `password`, `name`, `id`) VALUES
('farhan.fahim010@gmail.com', 'Farhan1998', 'Muhammad Farhan', 1),
('mohammadbangee32@gmail.com', 'mohammad1999', 'Mohammad Bangee', 2),
('rameez@nu.edu.pk', '123', 'Rameez Ahsan', 3);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand`) VALUES
(1, 'Apple'),
(2, 'Xiaomi'),
(3, 'Samsung'),
(4, 'Anker'),
(5, 'Beats'),
(9, 'Audionic'),
(10, 'Huawei'),
(11, 'ABC');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `parent`) VALUES
(1, 'Mobiles', 0),
(2, 'Mobile Accesories', 0),
(3, 'Iphones', 1),
(4, 'Samsung', 1),
(5, 'Xiaomi', 1),
(6, 'Power Banks', 2),
(7, 'Ear Phones', 2),
(8, 'Chargers', 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_id` int(11) NOT NULL,
  `First_Name` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `Last_Name` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `Shipping_Address` text COLLATE utf32_unicode_ci NOT NULL,
  `Contact_number` bigint(25) NOT NULL,
  `mail` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_id`, `First_Name`, `Last_Name`, `Shipping_Address`, `Contact_number`, `mail`, `password`) VALUES
(19, 'nzn', 'snmbsn', 'xssx', 54545, 'm@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(22, 'lak', 'ahzh', 'bzba', 545, 'a@gmail.com', '8d5e957f297893487bd98fa830fa6413'),
(23, 'a', 'b', 'c', 12, 'k173740@nu.edu.pk', 'c20ad4d76fe97759aa27a0c99bff6710'),
(24, 'Muhammad', 'Farhan', 'North Nazimabad', 3161623928, 'k173945@nu.edu.pk', 'dea86e3ad17ca57ed16b51586e4df4ac'),
(25, 'Mohammad', 'Bangee', 'Nazimabad No.4', 3363307738, 'mohammadbangee32@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(26, 'Rameez', 'Ahsan', 'abcd', 1234, 'k173657@nu.edu.pk', '202cb962ac59075b964b07152d234b70'),
(27, 'Mohammad', 'Hussi', 'Karachi', 3212159002, 'mhussainpk2006@gmail.com', '44fc5528134971e71c4e21f08d5cf674'),
(28, 'Maimoona', 'Salman', 'karachi', 359002134, 'maimona87087@gmail.com', 'bb246a78958009802e729114e99a4fdc'),
(29, 'Farru', 'Bhao', 'ancd', 125, 'farru@gmail.com', '6b2b410e9e13634155e1d3a7d11e8600'),
(30, 'Ms', 'Rubab', 'abcd', 1234, 'rubab.jaffar@nu.edu.pk', '2b24d495052a8ce66358eb576b8912c8');

-- --------------------------------------------------------

--
-- Table structure for table `featured`
--

CREATE TABLE `featured` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `featured`
--

INSERT INTO `featured` (`id`, `name`) VALUES
(1, 'Sale'),
(2, 'New Arrivals'),
(3, 'Xiaomi Power Bank'),
(4, 'Anker Power Bank'),
(5, 'Samsung Power Bank'),
(7, 'Beats earphones'),
(8, 'Xiaomi earphones'),
(10, 'Audionic earphones'),
(11, 'All chargers'),
(12, 'Iphone mobile'),
(13, 'Samsung mobile'),
(14, 'Xiaomi mobiles');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `Customer_id` int(50) NOT NULL,
  `total_bill` int(11) NOT NULL,
  `shipping_address` text COLLATE utf32_unicode_ci NOT NULL,
  `mail` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `Customer_id`, `total_bill`, `shipping_address`, `mail`, `date`) VALUES
(81, 19, 79999, 'xssx', 'm@gmail.com', '0000-00-00'),
(82, 19, 3199, 'xssx', 'm@gmail.com', '0000-00-00'),
(83, 19, 12000, 'xssx', 'm@gmail.com', '0000-00-00'),
(84, 19, 49999, 'xssx', 'm@gmail.com', '0000-00-00'),
(85, 19, 61999, 'xssx', 'm@gmail.com', '0000-00-00'),
(86, 19, 110000, 'xssx', 'm@gmail.com', '0000-00-00'),
(87, 19, 3199, 'xssx', 'm@gmail.com', '0000-00-00'),
(88, 26, 440000, 'abcd', 'k173657@nu.edu.pk', '0000-00-00'),
(89, 29, 61999, 'ancd', 'farru@gmail.com', '0000-00-00'),
(90, 30, 555198, 'abcd', 'rubab.jaffar@nu.edu.pk', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(6, 81, 3, 1, 49999),
(8, 82, 97, 1, 3199),
(9, 83, 73, 3, 4000),
(10, 84, 3, 1, 49999),
(11, 85, 16, 1, 61999),
(12, 86, 2, 1, 110000),
(13, 87, 97, 1, 3199),
(14, 88, 2, 4, 110000),
(15, 89, 16, 1, 61999),
(16, 90, 7, 2, 2599);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `list_price` int(11) NOT NULL,
  `brand` int(11) NOT NULL,
  `categories` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `description` text COLLATE utf32_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `featured` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `title`, `price`, `list_price`, `brand`, `categories`, `image`, `description`, `quantity`, `featured`) VALUES
(1, 'Iphone 11', 182000, 185000, 1, '3', 'images/maxresdefault.jpg', 'RAM 4GB\r\nROM 128GB', 97, 1),
(2, 'Samsung Galaxy S10', 110000, 120000, 3, '4', 'images/Samsung-S10-to-Feature-3D-Sensing-Camera-Like-iPhone-X.jpg', 'The Galaxy S10 is a fitting 10th anniversary phone for Samsung and its storied S series. It delivers on change with a novel-looking Infinity-O screen so large it displaces the front camera, and a triple-lens rear camera that takes ultra-wide photos. Its in-screen fingerprint sensor tech should serve you well, while its Wireless PowerShare could serve your friends well. That’s a lot of change – just know that it comes at a high price and the Galaxy S10e and S10 Plus flank it from both sides of the coin as better options.', 75, 1),
(3, 'Samsung A50', 49999, 55000, 3, '4', 'images/8877149_R_Z001A.jfif', 'The Samsung Galaxy A50 has a 6.4\" (2340 x 1080 (FHD+)) Super AMOLED edge-to-edge screen. It is powered by a Octa-core, 2300 MHz, ARM Cortex-A73 and ARM Cortex-A53, 64-bit, 10 nm CPU and a Mali-G72 MP3 GPU. It comes with 4GB Or 6GB RAM and 64GB or 128GB ROM (the configuration may change depending on the model) , which can be expanded via MicroSD card, up to 512GB. The phone itself measures 158.5 x 74.7 x 7.7mm. It comes with a 4000 mAh battery.', 87, 1),
(4, 'Mi Power Bank 2', 1999, 0, 2, '5', 'images/10000mAh-Xiaomi-Mi-Power-Bank-2i-External-Battery-Bank-18W-Quick-Charge-Powerbank-10000-PLM09ZM-with.webp', 'Input type:  Micro USB\r\nOutput type:  USB-A\r\nLithium polymer battery\r\nRated capacity:  3.85V/10000mAh (38.5Wh)\r\n10W charger  supports DC5.0V / 2.0A outputs\r\n18W supports DC5.0V / 2.0A 9.0V / 2.0A 12V / 1.5A outputs', 100, 3),
(5, 'Mi Power Bank 2S', 2699, 0, 2, '5', 'images/mi-10000mah-power-bank-3.jpg', 'Weight: 240g\r\nWidth: 71.2mm\r\nLength: 147mm\r\nUSB: Single Input / Dual Output\r\nInput: 5V2.0A 9V / 12V 18W MAX\r\nOutput: 5.1V2.4A / 9V1.6A MAX / 12V1.2A\r\n14.4W MAX for the single output, 15W for Dual Output', 100, 3),
(6, 'Mi Power Bank Pro', 3199, 0, 2, '5', 'images/20190123180250_71705.webp', 'The new Mi Power Bank model has 20000mAh battery capacity and comes with two-way fast charging technology. Xiaomi has also provided a USB Type-C port that is touted to support up to 45W fast charging. The two standard USB Type-A ports, on the other hand, are rated to deliver up to 5V at 3A.', 97, 3),
(7, 'Mi Power Bank with flashlight', 2599, 0, 2, '5', 'images/6924b3f5efe44afbb07fe45dcc680e12.jpg_340x340q80.jpg_.webp', 'Specifications\r\n. Light source: LED\r\n. Color temperature: white light\r\n. Power: 3W\r\n. Battery: built-in lithium-ion battery\r\n. Battery capacity: 3350mAh\r\n. 11-mode for adjustable brightness\r\n. Working time: 12h ( daily use ) / 216min ( highlight brightness )', 88, 3),
(8, 'ANKER POWERCORE POWER BANK', 4999, 0, 4, '6', 'images/anker_powercore_select_20000mah_power_bank_1.jpg', 'Recharging time: 6.5 hours (with USB-A to Micro-USB cable, and 9V/2A AC charger)\r\nMicro-USB Input: 5V = 2.2A, 9V = 2A\r\nSingle Port Output: 5V = 3A, 9V = 2A, 12V = 1.5A\r\nDual Port Output: 5V = 3A Max\r\nTotal Power Output: 18W\r\n20000mAH', 100, 4),
(9, 'ANKER POWERCORE POWER BANK BLACK', 4400, 0, 4, '6', 'images/s-l640.jpg', '. Smaller and lighter.\r\n. 30% Lighter Than Other 13000mAh Batteries\r\n. Fast Charging IQ Technology\r\n. Multi Protect Safety System', 100, 4),
(10, 'ANKER POWERCORE+ MINI PORTABLE CHARGER SILVER', 1650, 0, 4, '6', 'images/31K4YKTeD9L.jpg', '. Capacity: 3350 mAh\r\n. Input: 5V / 1A\r\n. Output: 5V / 1A\r\n. Weight: 3oz / 80g\r\n. USB Ports: 1', 100, 4),
(11, 'ANKER POWERCORE POWER BANK', 2600, 0, 4, '6', 'images/A1109011_TD01.jpg', '. PowerIQ Technology\r\n. VoltageBoost Technology\r\n. Remarkably Small\r\n. Extreme PortabilityTop of Form\r\n. 5000 mAH', 100, 4),
(12, 'Samsung EB-PN915B ', 6900, 0, 3, '6', 'images/Samsung-EB-PN915B-11300mAh-White-power-bank-000000000006015578-Gal-6-Detail.jpg', 'Capacity: 11300 mAh\r\nTypical Capacity: (Normal Charge)\r\n7,900mAh (1.0A),39.5Wh\r\nCompatibility\r\nCompatible Models: Universal', 100, 5),
(13, 'Samsung EB-PN910B ', 4000, 0, 3, '6', 'images/my-9500mah-external-battery-pack-eb-pn910-eb-pn910bbegww-000070730-l-perspective-black-51391139.webp', 'Capacity: 9,500 mAh\r\nCompatible Models: Universal\r\nFeatures:\r\n.External Battery Pack\r\n.Packaging Contents\r\n.Battery Pack, Manual\r\nPhysical specification\r\nCable Length: 0.0598 m\r\nDimension (WxHxD): 79.8 x 159.0 x 13.9 mm\r\nWeight: 241 g', 100, 5),
(14, 'Samsung Power Bank Gold', 3499, 0, 3, '6', 'images/812tvk8k7tL._SL1500_.jpg', 'Capacity\r\n\r\n5,200 mAh\r\n\r\nTypical Capacity (Normal Charge)\r\n\r\n3,150mAh (2.0A), 15.75Wh\r\n\r\nTypical Capacity (Fast Charge)\r\n\r\n1,750 mAh (1.67 A), 15.75 Wh\r\n\r\nCable Length\r\n\r\n0.2 m\r\n\r\nDimension (WxHxD)\r\n\r\n71 x 145.6 x 10.7 mm\r\n\r\nWeight\r\n\r\n152.5 g', 100, 5),
(15, 'Limited 10,000 mAh PowerBank ', 4399, 0, 3, '6', 'images/01-gallery-heroimage-EB-P1100BSEGUS-120518.webp', '.Fast Charging\r\n.10000 mah\r\n.out from S10 and S10 Plus boxes', 100, 5),
(16, 'Mi 9T', 61999, 63999, 2, '5', 'images/1562691925_1491909.jpg', 'Display Type\r\nSuper AMOLED\r\nSize\r\n6.39 inches, 100.2 cm2\r\nResolution\r\n1080 x 2340 pixels, 19.5:9 ratio\r\nDisplay Colors\r\n16 Millions Colors\r\nPixel Density\r\n~403 ppi density\r\nTouch Screen\r\nYes\r\nDisplay Protection\r\nCorning Gorilla Glass 5\r\nFeatures\r\nFingerprint (under display), accelerometer, gyro, proximity, compass', 96, 1),
(17, 'Xiaomi In-Ear Headphones with Piston Basic ', 860, 0, 2, '7', 'images/2016033101616411r78kqan.jpg', 'Product nameMi Basic Piston Fresh Edition\r\nProduct typeHSEJ03JY\r\nType:In-Ear\r\nSpeaker impedance:32Î©\r\nWeight:14g\r\nCable length:1.4m\r\nJack type:3.5mm Plug\r\nRated power:5mW\r\n\r\n', 100, 8),
(18, 'Xiaomi Redmi AirDots Wireless earphone', 5600, 0, 2, '7', 'images/5e953aa1-170e-4ef6-b3db-4097bb7e46b8_1.4cb50a53a3cd82e5744e8c52ff7c5e64.jpeg', 'Product Dimensions: 1.6 x 1.2 x 2.4 inches Shipping Weight: 59 g Batteries 1 Lithium Polymer batteries required. (included) Item model number: Redmi Airdots', 100, 8),
(19, 'Xiaomi Mi Sports Bluetooth Earphones ', 4800, 0, 2, '7', 'images/31B7+cDEbdL._AC_SY400_.jpg', 'Item Weight: 99.8 g Product Dimensions: 3.2 x 0.4 x 2 inches Batteries: 1 Lithium Polymer batteries Item model number: SPORTSEARPHONESMINBK Connectivity technologies: Bluetooth', 100, 8),
(20, 'Xiaomi In-Ear Headphones with Piston Silver', 1299, 0, 2, '8', 'images/31Q1bX9CLBL.jpg', 'Product Dimensions: 2.8 x 2.8 x 0.9 inches Shipping Weight: 18.1 g Item model number: 362891 ASIN: B01N322FR3', 100, 8),
(21, 'Beats urBeats In-ear Headset by Dr. Dre', 3700, 0, 5, '7', 'images/bea-urbeats-gr_01_3.jpg', 'Product Dimensions: 1.9 x 5.7 x 5 inches Shipping Weight: 181 g\r\nBatteries 1 Lithium Polymer batteries required.', 100, 7),
(22, 'Beats Powerbeats Pro ', 31500, 0, 5, '7', 'images/31IPPjpxyRL._AC_SY400_.jpg', 'beats earphones', 100, 7),
(62, 'Beats By Dr. Dre Urbeats In-Ear Headphones', 8000, 0, 5, '7', 'images/51KQdMeudiL._SL1000_.jpg', 'Product Dimensions: 1 x 0.9 x 0.9 inches ; 18.1 g\r\nShipping Weight: 159 g\r\nItem model number: MHD02ZM/A', 100, 7),
(63, 'Beatsx Wireless In-Ear Headphones - Black,', 16000, 0, 5, '7', 'images/71WDXKrqCQL._SL1500_.jpg', 'Product Dimensions: 2.2 x 2.2 x 2.2 inches ; 200 g\r\nShipping Weight: 340 g\r\nBatteries 1 Lithium Polymer batteries required.\r\nItem model number: 479HW35', 100, 7),
(64, 'Audionic Thunder T-50 Flat Wire Stereo Earphones', 250, 0, 9, '7', 'images/9102d5022b7ad0971586753bb530d549.jpg_340x340q80.jpg_.webp', 'HIGH-QUALITY SPEAKER: IT OFFERS SUPERIOR SOUND QUALITY,\r\nHIGH COMFORT LEVEL: ITS COMFORTABLE EAR TIP\r\n', 50, 10),
(65, 'Audionic Damac D-10 Damac Earphones Hand Free', 500, 0, 9, '7', 'images/0216a3d4428718d70c2b80c12078945c.jpg_340x340q80.jpg_.webp', '1. Frequency Range\r\nThese earphones producr clear sound for you withthe\r\nfrequency response of20-2000 DHZ.\r\n\r\n\r\n2. Cable length\r\nIts feels you very comfortable with the length of 1.2m .\r\n\r\n3. Impedance\r\nIt is with the impedance of 32 ohm.\r\n\r\n4. Drive unit\r\nIt has a drive unit of 10mm that convert electric signals into sound for you more rapidly.\r\n\r\n5. Plug Type\r\nIts plug type is of 3.5mm stereo.', 80, 10),
(66, 'Audionic MN-250 Earphone Hand Free Universal', 550, 0, 9, '7', 'images/dbe3e9c6b42d9ec3c7c64df8da92af09.jpg', 'Extra Bass Sound\r\nBuilt In Microphone\r\nSpeaker : 10MM\r\nPlug Type : 3.5mm Stereo\r\nCable Lenght : 1.2m\r\n', 50, 10),
(67, 'Audionic Thunder T40 Universal Earphone', 650, 0, 9, '7', 'images/T-40-05.jpg', 'Ultra Small inear Earphones\r\n10mm speaker\r\n3.5mm Sterio Plug\r\n1.2m Cable Length\r\nExtra bass', 120, 10),
(68, 'Huawei AC Fast Wall Charger for Mobile Phones with MUSB Cable', 1200, 0, 10, '8', 'images/313DoGmpGWL.jpg', 'Compatible with: Mobile Phones\r\nType: Wall Charger\r\nBrand: Huawei', 100, 11),
(69, 'Samsung Fast Charger 3 Pin', 1000, 0, 3, '8', 'images/41O9weR-MgL.jpg', 'For Note8/Note9/S8/S8Plus/S9/S9Plus/S10/S10Plus - Black With cable USB Type-C', 50, 11),
(70, 'Cable charger for iPhone ', 4000, 0, 1, '8', 'images/51MWNwByOzL._SL1024_.jpg', 'Type : Power cord\r\nCompatible with : Mobile Phones\r\nBrand : Apple\r\n', 50, 11),
(71, 'Xiaomi Quick Charge Wireless Charger', 2400, 0, 2, '8', 'images/516uW3nqPOL._SL1500_.jpg', 'Compatible with : Mobile Phones\r\nBrand : Xiaomi\r\nType : Wireless Chargers', 20, 11),
(72, 'Xiaomi Wireless Car Charger 20W Max Power Inductive Electric Clamp Arm Double Heat Dissipation ', 6500, 0, 2, '8', 'images/51wJRgDylkL._SL1000_.jpg', 'Shipping Weight: 327 g\r\nManufacturer reference: KillBR\r\nASIN: B07QFS8JX4', 50, 11),
(73, 'Xiaomi Car Charger', 4000, 0, 2, '8', 'images/31+ZUZx0ESL.jpg', 'Brand Name	Xiaomi\r\nItem Weight	150 g\r\nProduct Dimensions	1.4 x 4.1 x 4 inches\r\nItem model number	2724668300248', 97, 11),
(74, 'ANKER POWERDRIVE', 2000, 0, 4, '8', 'images/519uXqNp4hL._SL1200_.jpg', 'Anker Powerdrive speed 2. Charger Type: Auto\r\nCharger compatibility: MP3\r\nSmartphone\r\nTablette\r\nPower supply: Cigarette Lighter. Colour of product: Black. Maximum Power.: 39Ã‚ W\r\n', 35, 11),
(75, 'ANKER POWERPORT 5 PORTS', 3500, 0, 4, '8', 'images/41onilUK5+L.jpg', '\r\nItem Weight	204 g\r\nProduct Dimensions	2 x 8.7 x 5.9 inches\r\nItem model number	A2054K11\r\nWeight	204 Grams\r\nColor	Black', 54, 11),
(76, 'IPhone 11', 121000, 0, 1, '3', 'images/61k8fzuMIAL._SL1500_.jpg', '\r\nOS	ios\r\nRAM	4 GB\r\nItem Weight	195 g\r\nProduct Dimensions	0.3 x 3 x 5.9 inches\r\nBatteries:	1 Lithium ion batteries required. (included)\r\nItem model number	MWM02AA/A\r\nWireless communication technologies	LTE\r\nConnectivity technologies	Wireless\r\nGPS	A-GPS\r\nScanner Resolution	1080p\r\nWeight	195 Grams\r\nColor	Black\r\nPhone Talk Time	17 hours', 58, 12),
(77, 'Apple iPhone 11 Pro without FaceTime 64GB 4G LTE - Space Grey', 170000, 0, 1, '3', 'images/81ftM1V00HL._SL1500_.jpg', '\r\nOS	ios\r\nItem Weight	499 g\r\nProduct Dimensions	6.4 x 3.5 x 2 inches\r\nBatteries:	1 Lithium ion batteries required. (included)\r\nItem model number	MWC22AE/A\r\nWireless communication technologies	4G\r\nConnectivity technologies	Bluetooth\r\nGPS	GPS/GNSS\r\nSpecial features	OLED Display, Camera, Front Camera\r\nDisplay resolution	2436x1125\r\nScanner Resolution	HD (720p)\r\nWeight	499 Grams\r\nColor	Space Grey\r\nPhone Talk Time	26 hours', 60, 12),
(78, 'Apple iPhone XR with FaceTime 64GB ', 90000, 0, 1, '3', 'images/61fNBLaPakL._SL1500_.jpg', '\r\nOS	ios\r\nItem Weight	195 g\r\nProduct Dimensions	5.9 x 0.3 x 3 inches\r\nBatteries:	1 Lithium ion batteries required. (included)\r\nItem model number	SMAPIXRG64BKP5\r\nWireless communication technologies	4G\r\nConnectivity technologies	USB\r\nSpecial features	Camera\r\nDisplay resolution	1792 x 828\r\nScanner Resolution	HD (1080p)\r\nWeight	195 Grams\r\nColor	Black\r\nPhone Talk Time	25 hours', 70, 12),
(79, 'Apple iPhone XS Max with FaceTime', 140000, 0, 1, '3', 'images/61QSgY4zXNL._SL1200_.jpg', 'OS	ios\r\nRAM	4 GB\r\nItem Weight	209 g\r\nProduct Dimensions	2.4 x 6.9 x 3.8 inches\r\nBatteries:	1 Lithium ion batteries required. (included)\r\nItem model number	MT5D2LL/A\r\nWireless communication technologies	4G\r\nConnectivity technologies	USB\r\nSpecial features	Camera\r\nScanner Resolution	HD (1080p)\r\nWeight	209 Grams\r\nColor	Space Grey\r\nPhone Talk Time	25 hours', 65, 12),
(80, 'Apple iPhone 6s Smartphone, 64 GB', 32000, 0, 1, '3', 'images/61B7Q-gplKL._SL1500_.jpg', 'Shipping Weight: 358 g\r\nBatteries 1 Lithium ion batteries required. (included)\r\nItem model number: 6s\r\nASIN: B07N7TCHHX', 80, 12),
(81, 'Apple iPhone 6s Plus Apple iPhone 6S Plus with FaceTime - 32GB', 42000, 0, 1, '3', 'images/41ePpH9IlrL (1).jpg', '\r\nOS	ios\r\nItem Weight	544 g\r\nProduct Dimensions	0.3 x 3.1 x 6.2 inches\r\nBatteries:	1 Lithium ion batteries required. (included)\r\nItem model number	iPhone 6s Plus\r\nWireless communication technologies	LTE\r\nConnectivity technologies	Bluetooth\r\nScanner Resolution	2.07\r\nWeight	544 Grams\r\nColor	Rose Gold\r\nPhone Talk Time	14 hours', 90, 12),
(82, 'Apple iPhone X with FaceTime ', 110000, 0, 1, '3', 'images/618ZI2Xyw+L._SL1500_.jpg', '\r\nOS	iOS\r\nRAM	256\r\nItem Weight	449 g\r\nProduct Dimensions	6.4 x 3.5 x 1.9 inches\r\nBatteries:	1 Lithium ion batteries required. (included)\r\nItem model number	MQAG2ZD/A\r\nWeight	449 Grams\r\nColor	Silver\r\nPhone Talk Time	21 hours', 45, 12),
(83, 'Apple iPhone 6 64GB Factory Unlocked', 28000, 0, 1, '3', 'images/81aaPi-hh6L._SL1500_.jpg', 'Product Dimensions: 5.4 x 0.3 x 2.6 inches ; 127 g\r\nShipping Weight: 295 g\r\nBatteries 1 Lithium Polymer batteries required. (included)\r\nItem model number: 6\r\nASIN: B00YD549VE', 58, 12),
(84, 'Samsung Galaxy S10 Dual SIM 128GB 8GB RAM', 90000, 0, 3, '4', 'images/61qd1vWTN9L._SL1500_.jpg', '\r\nOS	Android\r\nRAM	8 GB\r\nItem Weight	422 g\r\nPackage Dimensions	6.5 x 3.5 x 2.1 inches\r\nBatteries:	1 Lithium Polymer batteries required. (included)\r\nItem model number	SM-G973FZKDXSG\r\nConnectivity technologies	Bluetooth , WiFi \r\nSpecial features	Bluetooth Enabled, Camera, Octa Core Processor, Front Camera\r\nColor	Prism Black', 80, 13),
(85, 'Samsung Galaxy M20 ', 21000, 0, 3, '4', 'images/71LELx0Ky5L._SL1500_.jpg', 'Shipping Weight: 349 g\r\nBatteries 1 Lithium ion batteries required. (included)\r\nItem model number: SM-M205FDADXSG\r\nASIN: B07R2F41DY', 100, 13),
(86, 'Samsung Galaxy Note 10+ Dual SIM 256GB 12GB RAM 4G LTE (UAE Version) - Aura Glow by SAMSUNG', 135000, 0, 3, '4', 'images/51+XuvQr1GL._SL1080_.jpg', 'OS	android\r\nRAM	12 GB\r\nItem Weight	249 g\r\nProduct Dimensions	3 x 0.3 x 6.7 inches\r\nBatteries:	1 Lithium Polymer batteries required. (included)\r\nItem model number	SM-N975FZSDXSG\r\nWireless communication technologies	LTE\r\nConnectivity technologies	Bluetooth\r\nGPS	A-GPS, Galileo, Glonass, BeiDou\r\nSpecial features	Bluetooth Enabled, Camera\r\nScanner Resolution	UHD 4K\r\nWeight	249 Grams\r\nColor	Aura Glow\r\nPhone Talk Time	25 hours\r\n 	 ', 120, 13),
(87, 'Samsung Galaxy Note 9 Dual SIM 128GB 6GB RAM', 90000, 0, 3, '4', 'images/51lLEdwdXEL._SL1000_.jpg', 'OS	Android\r\nRAM	6 GB\r\nItem Weight	499 g\r\nProduct Dimensions	2.4 x 7.1 x 3.9 inches\r\nBatteries:	1 Lithium ion batteries required. (included)\r\nItem model number	SM-N960FZKDXSG\r\nConnectivity technologies	Bluetooth\r\nSpecial features	Bluetooth Enabled, Camera\r\nWeight	499 Grams\r\nColor	Midnight Black', 60, 13),
(88, 'Samsung Galaxy S10 Plus Dual SIM 128GB 8GB RAM', 105000, 0, 3, '4', 'images/61PBGbarJJL._SL1500_ (1).jpg', '\r\nOS	Android\r\nRAM	8 GB\r\nItem Weight	522 g\r\nPackage Dimensions	6.9 x 3.6 x 2.1 inches\r\nBatteries:	1 Lithium Polymer batteries required. (included)\r\nItem model number	SM-G975FZKDXSG\r\nConnectivity technologies	Bluetooth\r\nSpecial features	Camera\r\nColor	Prism Black', 59, 13),
(89, 'Samsung Galaxy A70 Dual SIM 128GB 6GB RAM', 50000, 0, 3, '4', 'images/41Eb2RdEcCL.jpg', 'OS	android\r\nRAM	6 GB\r\nItem Weight	181 g\r\nProduct Dimensions	64.7 x 3.1 x 30.2 inches\r\nBatteries:	1 Lithium ion batteries required. (included)\r\nItem model number	SM-A705FZWUXSG\r\nWireless communication technologies	LTE\r\nConnectivity technologies	Bluetooth\r\nSpecial features	Camera\r\nScanner Resolution	240 FHD\r\nWeight	181 Grams\r\nColor	White\r\nPhone Talk Time	24 hours', 150, 13),
(90, 'Samsung Galaxy A30 Dual Sim, 64 GB, 4GB RAM, 4G LTE, Black', 33000, 0, 3, '4', 'images/81XGP2V1SlL._SL1500_.jpg', '\r\nOS	Android\r\nRAM	4 GB\r\nItem Weight	200 g\r\nPackage Dimensions	6.6 x 3.4 x 2 inches\r\nBatteries:	1 Lithium ion batteries required. (included)\r\nItem model number	A30\r\nWeight	200 Grams\r\nColor	Black', 50, 13),
(91, 'Samsung Galaxy A50 Dual Sim, 128 GB, ', 45000, 0, 3, '4', 'images/61qy8s64YML._SL1500_.jpg', '\r\nItem Weight	422 g\r\nPackage Dimensions	8 x 3.5 x 2.1 inches\r\nBatteries:	1 Lithium ion batteries required. (included)\r\nItem model number	SM-A505FZKCXSG\r\nColor	Black\r\n 	 \r\n', 80, 2),
(92, 'Xiaomi Mi 9T Smartphone, 6.4\", Dual SIM, 128GB, 6GB RAM, Glacier Blue', 53000, 0, 2, '5', 'images/419g3dBWNfL.jpg', 'OS	android\r\nRAM	6 GB\r\nItem Weight	191 g\r\nProduct Dimensions	6.2 x 2.9 x 0.4 inches\r\nBatteries:	1 Lithium Polymer batteries required. (included)\r\nItem model number	23426\r\nWireless communication technologies	LTE\r\nConnectivity technologies	Bluetooth\r\nGPS	A-GPS\r\nSpecial features	Camera\r\nDisplay technology	Super AMOLED capacitive touchscreen\r\nDisplay resolution	1080 x 2340\r\nScanner Resolution	2160p\r\nWeight	191 Grams\r\nColor	Glacier Blue\r\nPhone Talk Time	10 hours', 150, 14),
(93, 'Xiaomi Mi A3, 6.1\", Dual SIM, 64 GB, 4GB RAM', 25000, 0, 2, '5', 'images/61D+c3cOVcL._SL1000_.jpg', '\r\nOS	android\r\nRAM	4 GB\r\nItem Weight	172 g\r\nProduct Dimensions	6 x 2.8 x 0.3 inches\r\nBatteries:	1 Lithium Polymer batteries required. (included)\r\nItem model number	24418\r\nWireless communication technologies	LTE\r\nConnectivity technologies	bluetooth\r\nSpecial features	Camera\r\nScanner Resolution	1080p\r\nWeight	172 Grams\r\nColor	Gray\r\nPhone Talk Time	30 hours', 70, 14),
(94, 'Xiaomi Redmi Note 8 Smartphone', 30000, 0, 2, '5', 'images/61BP1vfiQmL._SL1000_.jpg', 'OS	android\r\nRAM	64 GB\r\nItem Weight	191 g\r\nProduct Dimensions	2 x 3.1 x 6.1 inches\r\nBatteries:	1 Lithium Polymer batteries required. (included)\r\nItem model number	M1908C3GJ-WH\r\nWireless communication technologies	LTE\r\nConnectivity technologies	Bluetooth\r\nScanner Resolution	2160\r\nWeight	191 Grams\r\nColor	Moonlight White\r\nPhone Talk Time	15 hours', 50, 14),
(95, 'XIAOMI M1906G7GV-128 Redmi Note 8 Pro Dual SIM ', 39999, 0, 2, '5', 'images/61a2-6hP8iL._SL1000_.jpg', 'OS	android\r\nItem Weight	200 g\r\nProduct Dimensions	6.4 x 3 x 0.4 inches\r\nBatteries:	1 Lithium Polymer batteries required. (included)\r\nItem model number	M1906G7GV-128\r\nWireless communication technologies	4G\r\nConnectivity technologies	Bluetooth\r\nScanner Resolution	2160\r\nWeight	200 Grams\r\nColor	Green\r\nPhone Talk Time	14 hours', 49, 14),
(96, 'Xiaomi Redmi Note 8 Smartphone', 30000, 0, 2, '5', 'images/61BP1vfiQmL._SL1000_.jpg', 'OS	android\r\nRAM	64 GB\r\nItem Weight	191 g\r\nProduct Dimensions	2 x 3.1 x 6.1 inches\r\nBatteries:	1 Lithium Polymer batteries required. (included)\r\nItem model number	M1908C3GJ-WH\r\nWireless communication technologies	LTE\r\nConnectivity technologies	Bluetooth\r\nScanner Resolution	2160\r\nWeight	191 Grams\r\nColor	Moonlight White\r\nPhone Talk Time	15 hours', 49, 2),
(97, 'Mi Power Bank Pro', 3199, 0, 2, '6', 'images/20190123180250_71705.webp', 'jkhj', 95, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD UNIQUE KEY `customer_id` (`Customer_id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Indexes for table `featured`
--
ALTER TABLE `featured`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `id` (`id`) USING BTREE;

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `featured`
--
ALTER TABLE `featured`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
