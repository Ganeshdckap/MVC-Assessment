CREATE DATABASE mvc ;
use mvc;

CREATE TABLE products(
id int not null AUTO_INCREMENT,
    product_name  varchar(255) not null,
    price varchar(255) not null,
    image varchar(255) not null,
    sku varchar(255) not null,
    brand varchar(255) not null,
    manufactured varchar(255) not null,
    availabe_stock int not null,
    created_at timestamp,
    updated_at timestamp,
    PRIMARY KEY(id)
);