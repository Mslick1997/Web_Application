-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2024 at 05:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chamaeng`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `iid` int(20) NOT NULL COMMENT 'ลำดับที่',
  `orderID` int(20) UNSIGNED ZEROFILL NOT NULL COMMENT 'เลขที่ใบสั่งซื้อ',
  `id` int(20) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสสินค้า',
  `orderPrice` float NOT NULL COMMENT 'ราคาสินค้า',
  `orderQty` int(11) NOT NULL COMMENT 'จำนวนสั่งซื้อ',
  `Total` float NOT NULL COMMENT 'ราคารวม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`iid`, `orderID`, `id`, `orderPrice`, `orderQty`, `Total`) VALUES
(1, 00000000000000000006, 00000000000000000001, 24, 4, 96),
(2, 00000000000000000006, 00000000000000000005, 24, 1, 24),
(3, 00000000000000000007, 00000000000000000001, 24, 3, 72),
(4, 00000000000000000008, 00000000000000000003, 24, 2, 48),
(5, 00000000000000000009, 00000000000000000003, 24, 1, 24),
(6, 00000000000000000010, 00000000000000000007, 24, 2, 48),
(7, 00000000000000000011, 00000000000000000003, 24, 3, 72),
(8, 00000000000000000012, 00000000000000000008, 24, 5, 120),
(9, 00000000000000000013, 00000000000000000001, 24, 5, 120),
(10, 00000000000000000013, 00000000000000000005, 24, 2, 48),
(11, 00000000000000000014, 00000000000000000001, 24, 1, 24),
(12, 00000000000000000015, 00000000000000000004, 24, 1, 24),
(13, 00000000000000000016, 00000000000000000001, 24, 1, 24),
(14, 00000000000000000017, 00000000000000000001, 24, 2, 48),
(15, 00000000000000000017, 00000000000000000010, 24, 5, 120),
(16, 00000000000000000018, 00000000000000000005, 24, 2, 48),
(17, 00000000000000000018, 00000000000000000007, 24, 4, 96),
(18, 00000000000000000019, 00000000000000000001, 24, 1, 24),
(19, 00000000000000000020, 00000000000000000002, 24, 1, 24),
(20, 00000000000000000021, 00000000000000000002, 24, 1, 24),
(21, 00000000000000000021, 00000000000000000001, 24, 1, 24),
(22, 00000000000000000022, 00000000000000000002, 24, 15, 360),
(23, 00000000000000000022, 00000000000000000001, 24, 18, 432),
(24, 00000000000000000022, 00000000000000000009, 24, 15, 360),
(25, 00000000000000000023, 00000000000000000001, 24, 2, 48),
(26, 00000000000000000024, 00000000000000000001, 24, 11, 264),
(27, 00000000000000000025, 00000000000000000001, 24, 11, 264),
(28, 00000000000000000026, 00000000000000000001, 24, 4, 96),
(29, 00000000000000000027, 00000000000000000001, 24, 4, 96),
(30, 00000000000000000028, 00000000000000000001, 24, 4, 96),
(31, 00000000000000000028, 00000000000000000005, 24, 4, 96),
(32, 00000000000000000029, 00000000000000000001, 24, 1, 24),
(33, 00000000000000000029, 00000000000000000002, 24, 1, 24),
(34, 00000000000000000030, 00000000000000000001, 24, 1, 24),
(35, 00000000000000000030, 00000000000000000002, 24, 1, 24),
(36, 00000000000000000031, 00000000000000000008, 24, 6, 144),
(37, 00000000000000000032, 00000000000000000008, 24, 6, 144),
(38, 00000000000000000032, 00000000000000000001, 24, 3, 72),
(39, 00000000000000000033, 00000000000000000005, 24, 8, 192),
(40, 00000000000000000033, 00000000000000000008, 24, 7, 168),
(41, 00000000000000000034, 00000000000000000005, 24, 8, 192),
(42, 00000000000000000034, 00000000000000000008, 24, 5, 120),
(43, 00000000000000000035, 00000000000000000003, 24, 1, 24),
(44, 00000000000000000036, 00000000000000000003, 24, 1, 24),
(45, 00000000000000000037, 00000000000000000003, 24, 3, 72),
(46, 00000000000000000038, 00000000000000000003, 24, 7, 168),
(47, 00000000000000000038, 00000000000000000005, 24, 11, 264),
(48, 00000000000000000039, 00000000000000000001, 24, 9, 216),
(49, 00000000000000000040, 00000000000000000005, 24, 1, 24),
(50, 00000000000000000041, 00000000000000000001, 24, 1, 24);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(20) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสสินค้า',
  `name` varchar(255) NOT NULL COMMENT 'ชื่อสินค้า',
  `detail` text NOT NULL COMMENT 'รายละเอียด',
  `price` float(8,2) DEFAULT NULL COMMENT 'ราคาขาย',
  `amount` int(20) DEFAULT NULL COMMENT 'จำนวน',
  `image` varchar(50) DEFAULT NULL COMMENT 'รูปภาพ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `detail`, `price`, `amount`, `image`) VALUES
(00000000000000000001, 'Thai tea', 'Thai tea, traditionally served as a refreshing iced or hot beverage, is brewed using Ceylon tea. However, due to the high cost of Ceylon tea, many places opt to use blended tea leaves with food coloring or lower-quality Ceylon tea powder instead.', 24.00, 11, 'ชาไทย.png'),
(00000000000000000002, 'Matcha green tea', 'Using English breakfast tea with fresh mint leaves, then adding flavor with lemon and honey, makes for a refreshing drink.', 24.00, 20, 'ชาเขียวกีวี.png'),
(00000000000000000003, 'Green milk tea', 'If it\'s not a coffee drink, you might want to consider ordering a refreshing green milk tea, sweet and soothing, with the authentic aroma of green tea. It\'s a popular choice for many young women who don\'t enjoy coffee.', 24.00, 20, 'ชาเขียวนม.png'),
(00000000000000000004, 'Green jasmine tea', 'Mali Green Tea is known for its inviting aroma. It combines green tea leaves with jasmine flowers, resulting in a fragrant scent and a delicate, smooth, and inviting taste. It\'s perfect for health-conscious individuals who enjoy green tea and aromatic beverages.', 24.00, 19, 'ชาเขียวมะลิ.png'),
(00000000000000000005, 'Green apple tea', 'Refreshing Green Apple Honey Tea from Nestea Green Apple Honey has a crisp green apple flavor with a rounded honey sweetness. It\'s rich in vitamin C, enhancing the value of every glass.', 24.00, 19, 'ชาเขียวแอปเปิ้ล.png'),
(00000000000000000006, 'Milk tea', 'Milk tea is a type of beverage found in various cultures, typically made with a combination of tea and milk. The differences can vary depending on the key ingredients, preparation methods, and additional components.', 24.00, 20, 'ชานม.png'),
(00000000000000000007, 'Cocoa milk tea', 'From the original authentic taste of Taiwanese milk tea, it has been blended with high-quality cocoa, resulting in a rich and intense flavor profile in Chama\'s new product, the \'Milk Cocoa\' flavor. This event allows friends to immerse themselves in the original Taiwanese milk tea experience, combined with the richness of cocoa sourced from agricultural groups in Mae Hong Son, Thailand.', 24.00, 20, 'ชานมโกโก้.png'),
(00000000000000000008, 'Strawberry milk tea', 'Taiwanese strawberry tea, a delightful pink color with a sweet and tangy aroma, combines the sweetness and fragrance of strawberries with a crunchy texture, creating a unique and enjoyable strawberry experience.', 24.00, 20, 'ชานมสตรอเบอร์รี่.png'),
(00000000000000000009, 'Lemon tea', 'Iced lemon tea that\'s more aromatic and refreshing than ever, thanks to the authentic tea scent from Nestea and the tangy, fragrant taste of real fresh lemons. Intensely flavorful, pleasantly sour, sweet, delicious, and thoroughly refreshing.', 24.00, 20, 'ชามะนาว.png'),
(00000000000000000010, 'Purple sweet potato milk tea', 'Purple sweet potato milk tea with a rich and creamy texture. The blend of milk and purple sweet potato creates a unique flavor that appeals to Thai taste buds.', 24.00, 15, 'ชานมเผือก.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `orderID` int(20) UNSIGNED ZEROFILL NOT NULL COMMENT 'เลขที่ใบสั่งซื้อ',
  `cus_name` varchar(60) NOT NULL COMMENT 'ชื่อลูกค้า',
  `address` text NOT NULL COMMENT 'ที่อยู่',
  `tel` varchar(10) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `total_price` float NOT NULL COMMENT 'ราคารวมสุทธิ',
  `order_status` varchar(1) NOT NULL COMMENT 'สถานะการสั่งซื้อ\r\n0-ยกเลิก\r\n1-สั่งซื้อ\r\n2-ชำระเงิน',
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'วันที่สั่งซื้อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`orderID`, `cus_name`, `address`, `tel`, `total_price`, `order_status`, `reg_date`) VALUES
(00000000000000000006, 'นันทภพ วีระหงษ์', '108 หมู่ 1 ต.หนองบัว อ.บ้านแพ้ว จ.สมุทรสาคร 74120 ', '0811165125', 120, '1', '2024-04-09 19:33:52'),
(00000000000000000007, 'นันทภพ วีระหงษ์', '108', '0811165125', 72, '1', '2024-04-09 19:33:54'),
(00000000000000000008, 'นันทภพ วีระหงษ์', '108', '0811165125', 48, '2', '2024-04-09 19:33:55'),
(00000000000000000009, 'นันทภพ วีระหงษ์', 'sdfg', '4563456', 24, '0', '2024-04-09 19:33:56'),
(00000000000000000010, 'นันทภพ วีระหงษ์', 'ttyrjtryj', '5785678', 48, '1', '2024-04-09 19:33:57'),
(00000000000000000011, 'นันทภพ วีระหงษ์', 'wgergwerg', '34645634', 72, '2', '2024-04-09 19:33:58'),
(00000000000000000012, 'นันทภพ วีระหงษ์', 'rtyhdfghdfg', '4563563456', 120, '1', '2024-04-09 19:33:58'),
(00000000000000000013, 'นันทภพ วีระหงษ์', 'fghdfgh', '563463456', 168, '2', '2024-04-09 19:34:00'),
(00000000000000000014, 'นันทภพ วีระหงษ์', 'adfgsdfg', '45634634', 24, '1', '2024-04-09 19:34:01'),
(00000000000000000015, 'นันทภพ วีระหงษ์', 'dfgsdfg', '34563456', 24, '2', '2024-04-09 19:34:02'),
(00000000000000000016, 'นันทภพ วีระหงษ์', 'aegsfdghgfh', '4536547', 24, '0', '2024-04-09 19:34:03'),
(00000000000000000017, 'นันทภพ วีระหงษ์', '108 หมู่ 1', '0811165125', 168, '2', '2024-04-09 19:34:04'),
(00000000000000000018, 'นันทภพ วีระหงษ์', '108 หมู่ 1', '0811165125', 144, '0', '2024-04-09 19:34:05'),
(00000000000000000019, 'นันทภพ วีระหงษ์', 'sdfg', '456345675', 24, '0', '2024-04-09 20:10:32'),
(00000000000000000020, 'นันทภพ วีระหงษ์', 'fghdfsghd', '456735756', 24, '0', '2024-04-09 19:34:07'),
(00000000000000000021, 'นันทภพ วีระหงษ์', '108 หมู่ 1 74120', '0811165125', 48, '2', '2024-04-09 19:34:07'),
(00000000000000000022, 'นันทภพ วีระหงษ์', 'dfghsdfgh', '4567345673', 1152, '0', '2024-04-09 19:34:09'),
(00000000000000000023, 'นันทภพ วีระหงษ์', 'zdfgsdfg', '4567345673', 48, '2', '2024-04-09 19:34:09'),
(00000000000000000024, 'นันทภพ วีระหงษ์', 'asdfgadfgsdfg', '3452345234', 264, '0', '2024-04-09 19:34:10'),
(00000000000000000025, 'นันทภพ วีระหงษ์', '108 หมู่ 1 อ.บ้านแพ้ว ต.หนองบัว จ.สมุทรสาคร', '0811165125', 264, '2', '2024-04-09 20:02:49'),
(00000000000000000026, 'นันทภพ วีระหงษ์', 'sgdfg', '34563456', 96, '1', '2024-04-09 19:34:11'),
(00000000000000000027, 'นันทภพ วีระหงษ์', 'hkhjkhjkhj', '6788967867', 96, '2', '2024-04-09 19:34:11'),
(00000000000000000028, 'นันทภพ วีระหงษ์', 'xdfhsdzfhsfgh', '4567435674', 192, '1', '2024-04-09 19:34:12'),
(00000000000000000029, 'นันทภพ วีระหงษ์', 'sdfsdfsdf', '52452345', 48, '0', '2024-04-09 19:34:15'),
(00000000000000000030, 'นันทภพ วีระหงษ์', 'dfgsdfh', '3457634565', 48, '0', '2024-04-09 19:34:17'),
(00000000000000000031, 'นันทภพ วีระหงษ์', 'xfghdfgh', '6573734567', 144, '0', '2024-04-09 19:34:20'),
(00000000000000000032, 'นันทภพ วีระหงษ์', 'r tjghjdfghjfghj', '6745675674', 216, '0', '2024-04-09 19:34:21'),
(00000000000000000033, 'นันทภพ วีระหงษ์', 'dghfxghdfghfdghdfgh', '7456745674', 360, '2', '2024-04-09 19:55:09'),
(00000000000000000034, 'ธนกฤต', 'กดิหกดิsergsfdg', '4352352345', 312, '2', '2024-04-09 19:57:03'),
(00000000000000000035, 'Pittawan', 'adfgsdg', '4523523452', 24, '2', '2024-04-09 20:17:53'),
(00000000000000000036, 'ธนกฤต', 'wefdgsrg', '523452345', 24, '0', '2024-04-09 20:31:16'),
(00000000000000000037, 'Pittawan', 'ghjfghjk', '6787685678', 72, '2', '2024-04-09 19:43:15'),
(00000000000000000038, 'Setthanan', 'กรุงเทพมหานคร', '099999999', 432, '2', '2024-04-09 21:05:25'),
(00000000000000000039, 'Adam Wong', 'นนทบุรี', '069324656', 216, '1', '2024-04-10 12:25:04'),
(00000000000000000040, 'sdfghdfgh', 'adfgsdfg', '4563456735', 24, '1', '2024-04-10 14:36:04'),
(00000000000000000041, 'XXXXX', 'dfghsdfhjdfg', '3567456846', 24, '1', '2024-04-10 14:36:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`iid`),
  ADD KEY `orderID` (`orderID`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`orderID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `iid` int(20) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่', AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(20) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'รหัสสินค้า', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `orderID` int(20) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'เลขที่ใบสั่งซื้อ', AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `tb_order` (`orderID`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
