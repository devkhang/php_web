Ten cua database la: webphpdatabase

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
    MaTK varchar(20) PRIMARY KEY,
    TenNguoiDung varchar(60), 
    HinhDaiDien varchar(200), 
    DiaChi varchar(100), 
    Email varchar(100), 
    Pwd varchar(20), 
    SoDTH varchar(10), 
    TinhTrang varchar(1)
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
    MaSP int,
    MaTK varchar(20),
    SoLuong int,
    
    CONSTRAINT fk_sanpham_chitietgiohang FOREIGN KEY (MaSP) REFERENCES SANPHAM(MaSP),
    CONSTRAINT fk_taikhoan_chitietgiohang FOREIGN KEY (MaTK) REFERENCES TAIKHOAN(MaTK),
    CONSTRAINT pk_chitietgiohang PRIMARY KEY(MaSP, MaTK)
);

CREATE TABLE CHITIETDONHANG(
    MaSP int,
    MaHD varchar(10),
    SoLuong int,
    
    CONSTRAINT fk_sanpham_chitietdonhang FOREIGN KEY (MaSP) REFERENCES SANPHAM(MaSP),
    CONSTRAINT fk_hoadong_chitietdonghang FOREIGN KEY (MaHD) REFERENCES HOADON(MaHD),
    CONSTRAINT pk_chitietdonhang PRIMARY KEY(MaSP, MaHD)
);




































