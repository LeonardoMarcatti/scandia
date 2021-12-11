INSTRUCTIONS

1 - Run the SQL scrpt below:
    1.1 - This script will create the database and the table for the products in it.

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

2 - Inside /config folder you gonna find a database file responsable for creating DB conecton. You have to adjust server, db, user and password according to your system. 
