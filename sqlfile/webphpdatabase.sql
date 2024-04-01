-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2024 at 08:01 AM
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
-- Database: `webphpdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `MaSP` int(11) NOT NULL,
  `MaHD` int(10) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`MaSP`, `MaHD`, `SoLuong`) VALUES
(1, 1, 1),
(1, 2, 1),
(1, 3, 2),
(1, 4, 1),
(1, 5, 2),
(2, 6, 1),
(2, 7, 2),
(2, 8, 1),
(2, 9, 2),
(4, 1, 3),
(4, 2, 2),
(4, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `MaSP` int(11) NOT NULL,
  `MaTK` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `chitietgiohang`
--

INSERT INTO `chitietgiohang` (`MaSP`, `MaTK`, `SoLuong`) VALUES
(1, 1, 1),
(1, 2, 2),
(2, 1, 1),
(2, 2, 2),
(3, 1, 1),
(4, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `ThoiGianDat` datetime NOT NULL,
  `TrangThaiXuLy` varchar(1) NOT NULL,
  `MaTK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `ThoiGianDat`, `TrangThaiXuLy`, `MaTK`) VALUES
(1, '2023-10-29 00:00:00', '0', 1),
(2, '2023-09-29 00:00:00', '1', 2),
(3, '2023-08-29 00:00:00', '0', 3),
(4, '2023-07-29 00:00:00', '1', 3),
(5, '2023-11-29 00:00:00', '1', 2),
(6, '2023-11-29 00:00:00', '0', 2),
(7, '2023-11-29 00:00:00', '0', 2),
(8, '2023-11-29 00:00:00', '1', 1),
(9, '2023-11-29 00:00:00', '0', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `HangDTH` varchar(10) NOT NULL,
  `Ten` varchar(50) NOT NULL,
  `Mau` varchar(10) NOT NULL,
  `KhuyeMai` int(11) NOT NULL,
  `MieuTa` text NOT NULL,
  `SoLuongTonKho` int(11) NOT NULL,
  `Gia` int(11) NOT NULL,
  `HinhAnhMH` varchar(200) NOT NULL,
  `HinhAnhChiTiet` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `HangDTH`, `Ten`, `Mau`, `KhuyeMai`, `MieuTa`, `SoLuongTonKho`, `Gia`, `HinhAnhMH`, `HinhAnhChiTiet`) VALUES
(1, 'oppo', 'OPPO A57 128GB', 'xanh', 0, 'Mới, đầy đủ phụ kiện từ nhà sản xuất \n\n\r\nCông nghệ màn hình:IPS LCD \n\r\nĐộ phân giải:HD+ (720 x 1612 Pixels) \n\r\nMàn hình rộng:6.56\" - Tần số quét 60 Hz \n\r\nĐộ sáng tối đa:600 nits \n\r\nMặt kính cảm ứng:Kính cường lực Panda \n', 10, 3790000, 'assets/oppo-a57-xanh-thumb-1-600x600.jpeg', 'assets/OPPO A57 128GB.jpg'),
(2, 'oppo', 'OPPO Reno10 5G 128GB', 'xanh', 10, 'Mới, đầy đủ phụ kiện từ nhà sản xuất \n\r\nĐiện thoại x 1\n\r\nSạc x 1\n\r\nCáp dữ liệu USB x 1\n\r\nCông cụ đẩy SIM x 1\n\r\nHướng dẫn sử dụngx 1\n\r\nỐp bảo vệ x 1\n', 20, 9490000, 'assets/oppo-reno10-blue-thumbnew-600x600.jpg', 'assets/oppo-reno10-xanh-128gb-1.jpg'),
(3, 'samsung', 'Samsung Galaxy Z Fold5 5G', 'trắng', 20, 'Mới, đầy đủ phụ kiện từ nhà sản xuất\n\r\nChip Snapdragon 8 Gen 2 for Galaxy\n\r\nRAM: 12 GB\n\r\nDung lượng: 256 GB\n\r\nCamera sau: Chính 50 MP & Phụ 12 MP, 10 MP\n\r\nCamera trước: 10 MP & 4 MP\n\r\nPin 4400 mAh, Sạc 25 W\n', 10, 40990000, 'assets/samsung-galaxy-z-fold5-kem-600x600.jpg', 'assets/samsung-galaxy-z-fold5-kem-600x600.jpg'),
(4, 'samsung', 'Samsung Galaxy S22 Ultra 5G 128GB', 'Dull Purpl', 0, 'Mới, đầy đủ phụ kiện từ nhà sản xuất\n\r\nChip Snapdragon 8 Gen 1\n\r\nRAM: 8 GB\n\r\nDung lượng: 128 GB\n\r\nCamera sau: Chính 108 MP & Phụ 12 MP, 10 MP, 10 MP\n\r\nCamera trước: 40 MP\n\r\nPin 5000 mAh, Sạc 45 W\n', 50, 16990000, 'assets/Galaxy-S22-Ultra-Burgundy-600x600.jpg', 'assets/Galaxy-S22-Ultra-Burgundy-600x600.jpg'),
(5, 'iphone', 'iPhone 15 Pro Max 512GB', 'đen', 0, 'Máy mới 100% , chính hãng Apple Việt Nam.\n\r\niPhone 15 Pro Max, Cáp Type C - Type C, Tài liệu hướng dẫn\n\r\n1 ĐỔI 1 trong 30 ngày nếu có lỗi phần cứng nhà sản xuất. Bảo hành 12 tháng tại trung tâm bảo hành chính hãng Apple\n', 10, 46990000, 'assets/iphone-15-pro-max-blue-thumbnew-600x600.jpg', 'assets/iphone_15_pro_max_512gb_-_1_1_.webp'),
(6, 'iphone', 'iPhone 15 Plus 128GB', 'trắng', 0, 'Mới, đầy đủ phụ kiện từ nhà sản xuất\n\r\n6.1 inch\n\r\nMàn hình Super Retina XDR\n\r\nĐộ phân giải 2556x1179 pixel với mật độ điểm ảnh 460 ppi\n\r\n1 ĐỔI 1 trong 30 ngày nếu có lỗi phần cứng nhà sản xuất. Bảo hành 12 tháng tại trung tâm bảo hành chính hãng Apple\n', 20, 25990000, 'assets/iphone-15-plus-128gb-xanh-thumb-600x600.jpg', 'assets/iphone-15-128gb.jpg'),
(7, 'iphone', 'Phone 15 Pro Max 256GB', 'trắng', 0, 'Mới, đầy đủ phụ kiện từ nhà sản xuất\n\r\nKích thước: 6.1 inch\n\r\nSuper Retina XDR OLED\n\r\nCông nghệ ProMotion\n\r\nDynamic Island\n\r\n2556 x 1179 pixels\n\r\n1 ĐỔI 1 trong 30 ngày nếu có lỗi phần cứng nhà sản xuất. Bảo hành 12 tháng tại trung tâm bảo hành chính hãng Apple\n', 30, 33990000, 'assets/iphone-15-pro-max-white-thumbnew-600x600.jpg', 'assets/iphone_15_pro_max_256gb_-_1_1_.webp');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTK` int(11) NOT NULL,
  `user_account` varchar(60) NOT NULL,
  `HinhDaiDien` varchar(200) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `SoDTH` varchar(10) NOT NULL,
  `TinhTrang` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`MaTK`, `user_account`, `HinhDaiDien`, `DiaChi`, `Email`, `pwd`, `SoDTH`, `TinhTrang`) VALUES
(1, 'Roboute Guilliman', 'assets/guillimanfinal.jpg', 'TP.Hồ Chí Minh', 'A@gmail.com', '12345', '113', 'k'),
(2, 'Horus Lupercal', 'assets/horus.jpg', 'TP.Hồ Chí Minh', 'Horus@gmail.com', '12345', '114', 'm'),
(3, 'Lion El\'jonson', 'assets/lion.jpg', 'TP.Hồ Chí Minh', 'Lion@gmail.com', '12345', '115', 'k');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoangadmin`
--

CREATE TABLE `taikhoangadmin` (
  `MaTK` int(11) NOT NULL,
  `Ten` varchar(60) NOT NULL,
  `Pwd` varchar(20) NOT NULL,
  `HinhDaiDien` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `taikhoangadmin`
--

INSERT INTO `taikhoangadmin` (`MaTK`, `Ten`, `Pwd`, `HinhDaiDien`) VALUES
(1, 'Nguyen San', '911', 'Admin/assets/duynguyen.png'),
(2, 'Au Khang', '911', 'Admin/assets/khangau.png'),
(3, 'Tram', '911', 'Admin/assets/tram.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`MaSP`,`MaHD`),
  ADD KEY `fk_hoadong_chitietdonghang` (`MaHD`);

--
-- Indexes for table `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD PRIMARY KEY (`MaSP`,`MaTK`),
  ADD KEY `fk_taikhoan_chitietgiohang` (`MaTK`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `fk_hoadon_taikhoan` (`MaTK`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTK`);

--
-- Indexes for table `taikhoangadmin`
--
ALTER TABLE `taikhoangadmin`
  ADD PRIMARY KEY (`MaTK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `taikhoangadmin`
--
ALTER TABLE `taikhoangadmin`
  MODIFY `MaTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `fk_hoadong_chitietdonghang` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`),
  ADD CONSTRAINT `fk_sanpham_chitietdonhang` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD CONSTRAINT `fk_sanpham_chitietgiohang` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`),
  ADD CONSTRAINT `fk_taikhoan_chitietgiohang` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_hoadon_taikhoan` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
