CREATE DATABASE `project01` CHARACTER SET utf8 COLLATE utf8_unicode_ci;
use project01;

CREATE TABLE IF NOT EXISTS `account` (
    `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(100) UNIQUE NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(11),
    `address` TEXT,
    `role` TINYINT DEFAULT 0

);


CREATE TABLE IF NOT EXISTS `category`(
    `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) UNIQUE NOT NULL,
    `status` TINYINT DEFAULT 1
);


CREATE TABLE IF NOT EXISTS `product`(
    `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `price` FLOAT NOT NULL,
    `sale_price` FLOAT DEFAULT 0,
    `image` VARCHAR(255),
    `category_id` INT NOT NULL,
    `status` TINYINT DEFAULT 1,
    `description` TEXT
);


CREATE TABLE IF NOT EXISTS `img_product`(
    `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `id_product` INT NOT NULL,
    `image` VARCHAR(255)
);


CREATE TABLE IF NOT EXISTS `orders`(
    `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `account_id` INT NOT NULL,
    `total_price` FLOAT NOT NULL,
    `status` TINYINT DEFAULT 0,
    `create_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `phone` VARCHAR(20),
    `address` TEXT,
    `note` TEXT
);


CREATE TABLE IF NOT EXISTS `order_detail`(
    `order_id` INT NOT NULL,
    `product_id` INT NOT NULL,  
    `price` FLOAT,
    `quantity` INT
);

ALTER TABLE `product` ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
ALTER TABLE `img_product` ADD CONSTRAINT `fk_img_product_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);
ALTER TABLE `orders` ADD CONSTRAINT `fk_orders_account` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`);
ALTER TABLE `order_detail` ADD CONSTRAINT `fk_order_detail_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);
ALTER TABLE `order_detail` ADD CONSTRAINT `fk_order_detail_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
