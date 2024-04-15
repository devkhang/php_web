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




































