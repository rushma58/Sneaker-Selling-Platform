CREATE DATABASE minorI_db;
USE minorI_db;

-- create table user info
CREATE TABLE userInfo(
	user_id INT PRIMARY KEY auto_increment,
    first_name VARCHAR(20) not null,
    last_name VARCHAR(20) not null,
    email VARCHAR(50) unique,
    phone_number CHAR(10) unique,
    dob DATE not null,
    gender VARCHAR(6) not null,
    username VARCHAR(15) not null unique,
    u_password VARCHAR(15) not null
);  

CREATE TABLE user_profile (
  id int(50) NOT NULL,
  user_id int(100) NOT NULL,
  city varchar(50) NOT NULL,
  state varchar(50) NOT NULL,
  phone int(50) NOT NULL,
  profile_image varchar(50) NOT NULL
);
select * from userInfo;


SELECT * FROM minori_db.userinfo;

create table cart(
	cart_id int primary key auto_increment,
    user_id int,
    product_id int,
     foreign key(user_id) references userInfo(user_id),
    foreign key(product_id) references products(shoe_id)
);
select * from cart;
delete from cart where user_id = 31;
create or replace view seller as
select u.user_id as seller_id, concat(u.first_name," ",u.last_name) as seller_name, u.phone_number
from userinfo u
join products p
on u.user_id = p.seller_id;
select * from seller; 

create or replace view cartDetail AS
select u.user_id, p.title, p.price, s.seller_name, s.phone_number
from userinfo u
join cart c
on u.user_id = c.user_id
join products p
on c.product_id = p.shoe_id
join seller s
on p.seller_id = s.seller_id;


alter table userinfo modify column created_on datetime;


select * from cartdetail;
select * from userinfo;



