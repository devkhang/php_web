create table customer (
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_account varchar(50) NOT null,
    pwd varchar(50) NOT null,
    date_create varchar(50) NOT null DEFAULT CURRENT_TIME
);
CREATE TABLE admin (
    id int PRIMARY KEY AUTO_INCREMENT NOT null,
    name varchar(50) NOT null,
    user_account varchar(50) NOT null,
    pwd varchar(50) NOT null,
    date_create varchar(50) NOT null DEFAULT CURRENT_TIME
)
INSERT into admin(name,user_account,pwd)
VALUES ('khang','khanghayho123','wibulord123'),
('duy','duynguyen123','cuocsongkhokhan'),
('tram','nguyentram123','cuocsongkhokhan2')

INSERT into customer(name,user_account,pwd)
VALUES ('cuong','mask82','hai3456789'),
('nghia','mackop','190590'),
('duy','duy_nguyen123','0908534618')

CREATE TABLE admin (
    MaSP varchar(10) PRIMARY KEY,
    TenSP varchar(50),
    Gia	double,
    SoLuongTonKho int(11),
    HinhMoTa	text,
    SoSao	int(11),
    SoDanhGia	int(11),
    ThongTinSanPham	text,
    KhuyenMai	text
);
