DROP DATABASE IF EXISTS goodBuy_db;
CREATE DATABASE goodBuy_db;
USE goodBuy_db;

CREATE TABLE `goodbuy_db`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `titulo` VARCHAR(45) NOT NULL,
  `precio` DOUBLE NOT NULL,
  `imageURL` VARCHAR(150) NOT NULL,
  `description` VARCHAR(300) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;

ALTER TABLE `goodbuy_db`.`products` 
ADD COLUMN `display_size` VARCHAR(15) NULL DEFAULT 'No especificado' `description`,
ADD COLUMN `camara` VARCHAR(15) NULL DEFAULT 'No especificado' AFTER `display_size`,
ADD COLUMN `RAM` VARCHAR(15) NULL DEFAULT 'No especificado' AFTER `camara`,
ADD COLUMN `OS` VARCHAR(15) NULL DEFAULT 'No especificado' AFTER `RAM`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dni` int(11) DEFAULT NULL,
  `cart_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `cart_id_idx` (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `carts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `product_id` int DEFAULT NULL,
  `total_price` double NOT NULL DEFAULT 0,
  `subtotal` double NOT NULL DEFAULT 0,
  `discounts` double NOT NULL DEFAULT 0,
  `shipping_cost` double NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
  
CREATE TABLE `goodbuy_db`.`cart_product` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cart_id` INT NOT NULL,
  `product_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `cart_product_idx` (`cart_id` ASC),
  INDEX `product_cart_idx` (`product_id` ASC),
  CONSTRAINT `cart_product`
    FOREIGN KEY (`cart_id`)
    REFERENCES `goodbuy_db`.`carts` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `product_cart`
    FOREIGN KEY (`product_id`)
    REFERENCES `goodbuy_db`.`products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


INSERT INTO products values (DEFAULT, now(), now(), 'Iphone 11 Pro Max', 1199.99, '/images/iphone11-430.jpg', "A new dual‑camera system captures more of what you see and love. The fastest chip ever in a smartphone and all‑day battery life let you do more and charge less. And the highest‑quality video in a smartphone, so your memories look better than ever.");
INSERT INTO products values(DEFAULT, now(), now(), 'Motorola One Zoom ', '499.99', '/images/Motorola-One-Zoom-430.jpg', 'Motorola One Zoom 64GB', '5.8', '48MP', '4GB', 'Android 10');
