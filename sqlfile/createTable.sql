Ten databse "webphpdatabase"


CREATE TABLE SANPHAM(
    MaSP int PRIMARY KEY AUTO_INCREMENT,
    HangDTH varchar(10),
    Ten varchar(50),
    Mau varchar(10),
    KhuyeMai int,
    MieuTa text,
    SoLuongTonKho int NOT NULL,
    Gia int,
    HinhAnhMH varchar(200),
    HinhAnhChiTiet varchar(200)
);


CREATE TABLE TAIKHOAN(
    MaTK INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_account varchar(60) NOT null, 
    HinhDaiDien varchar(200), 
    DiaChi varchar(100), 
    Email varchar(100), 
    pwd varchar(255) NOT null, 
    SoDTH varchar(10), 
    TinhTrang char(1)// 'k' (khoa), 'm' (mo)
);

CREATE TABLE HOADON(
    MaHD INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    ThoiGianDat date,
    TrangThaiXuLy varchar(1), //'1' (da xu ly), '0' (chua xu ly)
    MaTK INT,
    diachi varchar(50),
    CONSTRAINT fk_hoadon_taikhoan FOREIGN KEY(MaTK) REFERENCES TAIKHOAN(MaTK),
    Tongtien INT
);

CREATE TABLE TAIKHOANGADMIN(
    MaTK varchar(20) PRIMARY KEY,
    Ten varchar(60),
    Pwd varchar(20),
    HinhDaiDien varchar(200)
);


CREATE TABLE CHITIETGIOHANG(
    MaSP int,
    MaTK int,
    SoLuong int,
    
    CONSTRAINT fk_sanpham_chitietgiohang FOREIGN KEY (MaSP) REFERENCES SANPHAM(MaSP),
    CONSTRAINT fk_taikhoan_chitietgiohang FOREIGN KEY (MaTK) REFERENCES TAIKHOAN(MaTK),
    CONSTRAINT pk_chitietgiohang PRIMARY KEY(MaSP, MaTK)
);

CREATE TABLE CHITIETDONHANG(
    MaSP int,
    MaHD int,
    SoLuong int,
    
    CONSTRAINT fk_sanpham_chitietdonhang FOREIGN KEY (MaSP) REFERENCES SANPHAM(MaSP),
    CONSTRAINT fk_hoadong_chitietdonghang FOREIGN KEY (MaHD) REFERENCES HOADON(MaHD),
    CONSTRAINT pk_chitietdonhang PRIMARY KEY(MaSP, MaHD)
);



//////////////////////////////////////



-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 20, 2024 lúc 07:49 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webphpdatabase`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `MaSP` int(11) NOT NULL,
  `MaHD` int(11) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`MaSP`, `MaHD`, `SoLuong`) VALUES
(1, 10, 1),
(1, 12, 5),
(2, 10, 1),
(3, 11, 1),
(3, 12, 1),
(4, 12, 1),
(5, 11, 1),
(6, 11, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `MaSP` int(11) NOT NULL,
  `MaTK` int(11) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
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
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `ThoiGianDat`, `TrangThaiXuLy`, `MaTK`, `diachi`, `Tongtien`) VALUES
(1, '2023-10-29', '0', 1, 'TP.Hồ Chí Minh', 1500000),
(2, '2023-09-29', '1', 2, 'TP.Hồ Chí Minh', 20000000),
(3, '2023-08-29', '0', 3, 'TP.Hồ Chí Minh', 30000000),
(4, '2023-07-29', '1', 3, 'TP.Hồ Chí Minh', 45000000),
(5, '2023-11-29', '1', 2, 'TP.Hồ Chí Minh', 10000000),
(6, '2023-11-29', '0', 2, 'TP.Hồ Chí Minh', 3790000),
(7, '2023-11-29', '0', 2, 'TP.Hồ Chí Minh', 40500000),
(8, '2023-11-29', '1', 1, 'TP.Hồ Chí Minh', 10000000),
(9, '2023-11-29', '0', 3, 'TP.Hồ Chí Minh', 15000000),
(10, '2024-04-15', '0', 1, 'TP.Hồ Chí Minh', 13280000),
(11, '2024-04-15', '0', 1, '374/9/17 Âu Cơ phường 10 quận.TB', 113970000),
(12, '2024-04-15', '0', 2, '374/9/17 Âu Cơ phường 10 quận.TB', 76930000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
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
  `HinhAnhChiTiet` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `HangDTH`, `Ten`, `Mau`, `KhuyeMai`, `MieuTa`, `SoLuongTonKho`, `Gia`, `HinhAnhMH`, `HinhAnhChiTiet`) VALUES
(1, 'oppo', 'OPPO A57 128GB', 'xanh', 0, 'Mới, đầy đủ phụ kiện từ nhà sản xuất \n\n\r\nCông nghệ màn hình:IPS LCD \n\r\nĐộ phân giải:HD+ (720 x 1612 Pixels) \n\r\nMàn hình rộng:6.56\" - Tần số quét 60 Hz \n\r\nĐộ sáng tối đa:600 nits \n\r\nMặt kính cảm ứng:Kính cường lực Panda \n', -5, 3790000, 'assets/oppo-a57-xanh-thumb-1-600x600.jpeg', 'assets/OPPO A57 128GB.jpg'),
(2, 'oppo', 'OPPO Reno10 5G 128GB', 'xanh', 10, 'Mới, đầy đủ phụ kiện từ nhà sản xuất \n\r\nĐiện thoại x 1\n\r\nSạc x 1\n\r\nCáp dữ liệu USB x 1\n\r\nCông cụ đẩy SIM x 1\n\r\nHướng dẫn sử dụngx 1\n\r\nỐp bảo vệ x 1\n', 19, 9490000, 'assets/oppo-reno10-blue-thumbnew-600x600.jpg', 'assets/oppo-reno10-xanh-128gb-1.jpg'),
(3, 'samsung', 'Samsung Galaxy Z Fold5 5G', 'trắng', 20, 'Mới, đầy đủ phụ kiện từ nhà sản xuất\n\r\nChip Snapdragon 8 Gen 2 for Galaxy\n\r\nRAM: 12 GB\n\r\nDung lượng: 256 GB\n\r\nCamera sau: Chính 50 MP & Phụ 12 MP, 10 MP\n\r\nCamera trước: 10 MP & 4 MP\n\r\nPin 4400 mAh, Sạc 25 W\n', -1, 40990000, 'assets/samsung-galaxy-z-fold5-kem-600x600.jpg', 'assets/samsung-galaxy-z-fold5-kem-600x600.jpg'),
(4, 'samsung', 'Samsung Galaxy S22 Ultra 5G 128GB', 'Dull Purpl', 0, 'Mới, đầy đủ phụ kiện từ nhà sản xuất\n\r\nChip Snapdragon 8 Gen 1\n\r\nRAM: 8 GB\n\r\nDung lượng: 128 GB\n\r\nCamera sau: Chính 108 MP & Phụ 12 MP, 10 MP, 10 MP\n\r\nCamera trước: 40 MP\n\r\nPin 5000 mAh, Sạc 45 W\n', -1, 16990000, 'assets/Galaxy-S22-Ultra-Burgundy-600x600.jpg', 'assets/Galaxy-S22-Ultra-Burgundy-600x600.jpg'),
(5, 'iphone', 'iPhone 15 Pro Max 512GB', 'đen', 0, 'Máy mới 100% , chính hãng Apple Việt Nam.\n\r\niPhone 15 Pro Max, Cáp Type C - Type C, Tài liệu hướng dẫn\n\r\n1 ĐỔI 1 trong 30 ngày nếu có lỗi phần cứng nhà sản xuất. Bảo hành 12 tháng tại trung tâm bảo hành chính hãng Apple\n', -1, 46990000, 'assets/iphone-15-pro-max-blue-thumbnew-600x600.jpg', 'assets/iphone_15_pro_max_512gb_-_1_1_.webp'),
(6, 'iphone', 'iPhone 15 Plus 128GB', 'trắng', 0, 'Mới, đầy đủ phụ kiện từ nhà sản xuất\n\r\n6.1 inch\n\r\nMàn hình Super Retina XDR\n\r\nĐộ phân giải 2556x1179 pixel với mật độ điểm ảnh 460 ppi\n\r\n1 ĐỔI 1 trong 30 ngày nếu có lỗi phần cứng nhà sản xuất. Bảo hành 12 tháng tại trung tâm bảo hành chính hãng Apple\n', -1, 25990000, 'assets/iphone-15-plus-128gb-xanh-thumb-600x600.jpg', 'assets/iphone-15-128gb.jpg'),
(7, 'iphone', 'Phone 15 Pro Max 256GB', 'trắng', 0, 'Mới, đầy đủ phụ kiện từ nhà sản xuất\n\r\nKích thước: 6.1 inch\n\r\nSuper Retina XDR OLED\n\r\nCông nghệ ProMotion\n\r\nDynamic Island\n\r\n2556 x 1179 pixels\n\r\n1 ĐỔI 1 trong 30 ngày nếu có lỗi phần cứng nhà sản xuất. Bảo hành 12 tháng tại trung tâm bảo hành chính hãng Apple\n', 30, 33990000, 'assets/iphone-15-pro-max-white-thumbnew-600x600.jpg', 'assets/iphone_15_pro_max_256gb_-_1_1_.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
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
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`MaTK`, `user_account`, `HinhDaiDien`, `DiaChi`, `Email`, `pwd`, `SoDTH`, `TinhTrang`) VALUES
(1, 'Roboute Guilliman', 'assets/guillimanfinal.jpg', 'TP.Hồ Chí Minh', 'A@gmail.com', '12345', '113', 'k'),
(2, 'Horus Lupercal', 'assets/horus.jpg', 'TP.Hồ Chí Minh', 'Horus@gmail.com', '12345', '114', 'm'),
(3, 'Lion El\'jonson', 'assets/lion.jpg', 'TP.Hồ Chí Minh', 'Lion@gmail.com', '12345', '115', 'k');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoangadmin`
--

CREATE TABLE `taikhoangadmin` (
  `MaTK` varchar(20) NOT NULL,
  `Ten` varchar(60) DEFAULT NULL,
  `Pwd` varchar(20) DEFAULT NULL,
  `HinhDaiDien` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`MaSP`,`MaHD`),
  ADD KEY `fk_hoadong_chitietdonghang` (`MaHD`);

--
-- Chỉ mục cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD PRIMARY KEY (`MaSP`,`MaTK`),
  ADD KEY `fk_taikhoan_chitietgiohang` (`MaTK`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `fk_hoadon_taikhoan` (`MaTK`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTK`);

--
-- Chỉ mục cho bảng `taikhoangadmin`
--
ALTER TABLE `taikhoangadmin`
  ADD PRIMARY KEY (`MaTK`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `fk_hoadong_chitietdonghang` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`),
  ADD CONSTRAINT `fk_sanpham_chitietdonhang` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Các ràng buộc cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD CONSTRAINT `fk_sanpham_chitietgiohang` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`),
  ADD CONSTRAINT `fk_taikhoan_chitietgiohang` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_hoadon_taikhoan` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

































