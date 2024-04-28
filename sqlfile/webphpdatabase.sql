-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2024 at 03:37 PM
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
  `MaHD` int(11) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`MaSP`, `MaHD`, `SoLuong`) VALUES
(54, 20, 1),
(55, 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `MaSP` int(11) NOT NULL,
  `MaTK` int(11) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `ThoiGianDat` date DEFAULT NULL,
  `TrangThaiXuLy` varchar(1) DEFAULT NULL,
  `MaTK` int(11) DEFAULT NULL,
  `diachi` varchar(50) DEFAULT NULL,
  `Tongtien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `ThoiGianDat`, `TrangThaiXuLy`, `MaTK`, `diachi`, `Tongtien`) VALUES
(20, '2024-04-27', '0', 12, 'TP.HCM', 42680000);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `HangDTH` varchar(10) DEFAULT NULL,
  `Ten` varchar(50) DEFAULT NULL,
  `Mau` varchar(10) DEFAULT NULL,
  `KhuyeMai` int(11) DEFAULT NULL,
  `MieuTa` text DEFAULT NULL,
  `SoLuongTonKho` int(11) NOT NULL,
  `Gia` int(11) DEFAULT NULL,
  `HinhAnhMH` varchar(200) DEFAULT NULL,
  `HinhAnhChiTiet` varchar(200) DEFAULT NULL,
  `An` varchar(2) NOT NULL DEFAULT 'ka'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `HangDTH`, `Ten`, `Mau`, `KhuyeMai`, `MieuTa`, `SoLuongTonKho`, `Gia`, `HinhAnhMH`, `HinhAnhChiTiet`, `An`) VALUES
(54, 'iphone', 'iPhone 15 Pro Max 256GB 123', NULL, 0, 'Mới, đầy đủ phụ kiện từ nhà sản xuất \r\n\r\n\r\nCông nghệ màn hình:IPS LCD \r\n\r\nĐộ phân giải:HD+ (720 x 1612 Pixels) \r\n\r\nMàn hình rộng:6.56\" - Tần số quét 60 Hz \r\n\r\nĐộ sáng tối đa:600 nits \r\n\r\nMặt kính cảm ứng:Kính cường lực Panda ', 99, 29090000, './upload/5.webp', './upload/5.webp', 'ka'),
(55, 'iphone', 'iPhone 13 128GB', NULL, 0, 'Mới, đầy đủ phụ kiện từ nhà sản xuất \r\n\r\n\r\nCông nghệ màn hình:IPS LCD \r\n\r\nĐộ phân giải:HD+ (720 x 1612 Pixels) \r\n\r\nMàn hình rộng:6.56\" - Tần số quét 60 Hz \r\n\r\nĐộ sáng tối đa:600 nits \r\n\r\nMặt kính cảm ứng:Kính cường lực Panda ', 9, 13590000, './upload/2.webp', './upload/2.webp', 'ka'),
(56, 'iphone', 'iPhone 15 128GB', NULL, 0, 'Mới, đầy đủ phụ kiện từ nhà sản xuất \r\n\r\n\r\nCông nghệ màn hình:IPS LCD \r\n\r\nĐộ phân giải:HD+ (720 x 1612 Pixels) \r\n\r\nMàn hình rộng:6.56\" - Tần số quét 60 Hz \r\n\r\nĐộ sáng tối đa:600 nits \r\n\r\nMặt kính cảm ứng:Kính cường lực Panda ', 10, 19190000, './upload/3.webp', './upload/3.webp', 'ka'),
(57, 'iphone', 'iPhone 14 Pro Max 128GB', NULL, 0, 'Mới, đầy đủ phụ kiện từ nhà sản xuất \r\n\r\n\r\nCông nghệ màn hình:IPS LCD \r\n\r\nĐộ phân giải:HD+ (720 x 1612 Pixels) \r\n\r\nMàn hình rộng:6.56\" - Tần số quét 60 Hz \r\n\r\nĐộ sáng tối đa:600 nits \r\n\r\nMặt kính cảm ứng:Kính cường lực Panda ', 100, 27190000, './upload/4.webp', './upload/4.webp', 'ka'),
(58, 'iphone', 'iPhone 15 Pro 128GB', NULL, 0, 'Mới, đầy đủ phụ kiện từ nhà sản xuất \r\n\r\n\r\nCông nghệ màn hình:IPS LCD \r\n\r\nĐộ phân giải:HD+ (720 x 1612 Pixels) \r\n\r\nMàn hình rộng:6.56\" - Tần số quét 60 Hz \r\n\r\nĐộ sáng tối đa:600 nits \r\n\r\nMặt kính cảm ứng:Kính cường lực Panda ', 8, 24690000, './upload/5.webp', './upload/5.webp', 'ka'),
(59, 'iphone', 'iPhone 11 64GB ', NULL, 0, 'Mới, đầy đủ phụ kiện từ nhà sản xuất \r\n\r\n\r\nCông nghệ màn hình:IPS LCD \r\n\r\nĐộ phân giải:HD+ (720 x 1612 Pixels) \r\n\r\nMàn hình rộng:6.56\" - Tần số quét 60 Hz \r\n\r\nĐộ sáng tối đa:600 nits \r\n\r\nMặt kính cảm ứng:Kính cường lực Panda ', 34, 8790000, './upload/6.webp', './upload/6.webp', 'ka'),
(60, 'iphone', 'iPhone 14 Pro 128GB', NULL, 0, 'Mới, đầy đủ phụ kiện từ nhà sản xuất \r\n\r\n\r\nCông nghệ màn hình:IPS LCD \r\n\r\nĐộ phân giải:HD+ (720 x 1612 Pixels) \r\n\r\nMàn hình rộng:6.56\" - Tần số quét 60 Hz \r\n\r\nĐộ sáng tối đa:600 nits \r\n\r\nMặt kính cảm ứng:Kính cường lực Panda ', 34, 24190000, './upload/7.webp', './upload/7.webp', 'ka'),
(61, 'samsung', 'Samsung Galaxy S23 Ultra 256GB', NULL, 0, 'Mới, đầy đủ phụ kiện từ nhà sản xuất \r\n\r\n\r\nCông nghệ màn hình:IPS LCD \r\n\r\nĐộ phân giải:HD+ (720 x 1612 Pixels) \r\n\r\nMàn hình rộng:6.56\" - Tần số quét 60 Hz \r\n\r\nĐộ sáng tối đa:600 nits \r\n\r\nMặt kính cảm ứng:Kính cường lực Panda ', 45, 21990000, './upload/8.webp', './upload/8.webp', 'ka'),
(62, 'samsung', 'Samsung Galaxy S24 Ultra 12GB 256GB', NULL, 0, 'Mới, đầy đủ phụ kiện từ nhà sản xuất \r\n\r\n\r\nCông nghệ màn hình:IPS LCD \r\n\r\nĐộ phân giải:HD+ (720 x 1612 Pixels) \r\n\r\nMàn hình rộng:6.56\" - Tần số quét 60 Hz \r\n\r\nĐộ sáng tối đa:600 nits \r\n\r\nMặt kính cảm ứng:Kính cường lực Panda ', 3, 28490000, './upload/9.webp', './upload/9.webp', 'ka'),
(63, 'oppo', 'OPPO Reno11 F 5G 8GB 256GB', NULL, 0, 'Mới, đầy đủ phụ kiện từ nhà sản xuất \r\n\r\n\r\nCông nghệ màn hình:IPS LCD \r\n\r\nĐộ phân giải:HD+ (720 x 1612 Pixels) \r\n\r\nMàn hình rộng:6.56\" - Tần số quét 60 Hz \r\n\r\nĐộ sáng tối đa:600 nits \r\n\r\nMặt kính cảm ứng:Kính cường lực Panda ', 45, 8390000, './upload/10.webp', './upload/10.webp', 'ka'),
(64, 'oppo', 'OPPO Reno10 5G 8GB 256GB', NULL, 0, 'Mới, đầy đủ phụ kiện từ nhà sản xuất \r\n\r\n\r\nCông nghệ màn hình:IPS LCD \r\n\r\nĐộ phân giải:HD+ (720 x 1612 Pixels) \r\n\r\nMàn hình rộng:6.56\" - Tần số quét 60 Hz \r\n\r\nĐộ sáng tối đa:600 nits \r\n\r\nMặt kính cảm ứng:Kính cường lực Panda ', 56, 8990000, './upload/11.webp', './upload/11.webp', 'ka');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTK` int(11) NOT NULL,
  `user_account` varchar(60) NOT NULL,
  `HinhDaiDien` varchar(200) DEFAULT NULL,
  `DiaChi` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `pwd` varchar(255) NOT NULL,
  `SoDTH` varchar(10) DEFAULT NULL,
  `TinhTrang` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`MaTK`, `user_account`, `HinhDaiDien`, `DiaChi`, `Email`, `pwd`, `SoDTH`, `TinhTrang`) VALUES
(12, 'duy1', './upload/f1.jpg', 'Hue', 'duy1@gmail.com', '12345', '1134454545', 'm'),
(14, 'duy2', './upload/f2.jpg', 'TP.HCM', 'duy2@gmail.com', '12345', '113', 'k'),
(15, 'khang1', './upload/f3.jpg', 'TP.HCM', 'khang1@gmail.com', '12345', '112', 'k'),
(16, 'Tram1', './upload/f4.jpg', 'TP.HCM', 'Tram1@gmail.com', '12345', '114', 'm'),
(17, 'Tram2', './upload/f5.jpg', 'Vũng Tàu', 'Tram2@gmail.com', '12345', '114', 'm'),
(18, 'Khang2', './upload/f6.jpg', 'TP.HCM', 'Khang2@gmail.com', '12345', '115', 'm'),
(19, 'Tram3', './upload/f7.jpeg', 'TP.HCM', 'Tram3@gmail.com', '12345', '111', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoangadmin`
--

CREATE TABLE `taikhoangadmin` (
  `MaTK` int(20) NOT NULL,
  `Ten` varchar(60) DEFAULT NULL,
  `Pwd` varchar(20) DEFAULT NULL,
  `HinhDaiDien` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoangadmin`
--

INSERT INTO `taikhoangadmin` (`MaTK`, `Ten`, `Pwd`, `HinhDaiDien`) VALUES
(1, 'admin1', '123', ''),
(2, 'admin2', '123', '');

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
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `taikhoangadmin`
--
ALTER TABLE `taikhoangadmin`
  MODIFY `MaTK` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
