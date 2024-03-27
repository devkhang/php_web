create table customer (
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name varchar(50) NOT null,
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