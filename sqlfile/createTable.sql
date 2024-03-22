Ten cua database la: webphpdatabase

CREATE TABLE SANPHAM(
    HangDTH varchar(10),
    Ten varchar(50),
    Mau varchar(10),
    KhuyeMai int,
    MieuTa text,
    SoLuongTonKho int NOT NULL,
    Gia int,
    HinhAnhMH varchar(200),
    HinhAnhChiTiet varchar(200),
    CONSTRAINT pk_sanpham PRIMARY KEY(HangDTH, Ten)
);


CREATE TABLE TAIKHOAN(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_account varchar(60) NOT null, 
    HinhDaiDien varchar(200), 
    DiaChi varchar(100), 
    Email varchar(100), 
    pwd varchar(20) NOT null, 
    SoDTH varchar(10), 
    TinhTrang char(1),
    vaitro char(1)
);

CREATE TABLE HOADON(
    MaHD varchar(10) PRIMARY KEY,
    ThoiGianDat date ,
    TrangThaiXuLy varchar(1),
    MaTK varchar(20),
    CONSTRAINT fk_hoadon_taikhoan FOREIGN KEY(MaTK) REFERENCES TAIKHOAN(MaTK)
);

CREATE TABLE TAIKHOANGADMIN(
    MaTK varchar(20) PRIMARY KEY,
    Ten varchar(60),
    Pwd varchar(20),
    HinhDaiDien varchar(200)
);


CREATE TABLE CHITIETGIOHANG(
    HangDTH varchar(10),
    Ten varchar(50),
    MaTK varchar(20), 
    SoLuong int,
    CONSTRAINT pk_chitietgiohang PRIMARY KEY(HangDTH, Ten, MaTK)
);

CREATE TABLE CHITIETDONHANG(
    HangDTH varchar(10),
    Ten varchar(50),
    MaHD varchar(10),
    SoLuong int,
    CONSTRAINT pk_chitietdonhang PRIMARY KEY(HangDTH, Ten, MaHD)
);




































