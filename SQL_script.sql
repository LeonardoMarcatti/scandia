create database scandiweb;
use scandiweb;
create table products(
	id int unsigned not null auto_increment primary key,
    sku varchar(10) not null unique,
    name varchar(50) not null,
    price float not null,
    size int unsigned null,
    height float null,
    width float null,
    length float null,
    weight float null,
    product_type varchar(15)
);