DROP DATABASE IF EXISTS goodBuy_db;
CREATE DATABASE goodBuy_db;
USE goodBuy_db;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titulo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `precio` double NOT NULL,
  `imageURL` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `display_size` varchar(15) COLLATE utf8_unicode_ci DEFAULT 'No especificado',
  `camara` varchar(15) COLLATE utf8_unicode_ci DEFAULT 'No especificado',
  `RAM` varchar(15) COLLATE utf8_unicode_ci DEFAULT 'No especificado',
  `OS` varchar(15) COLLATE utf8_unicode_ci DEFAULT 'No especificado',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `role` varchar(45) COLLATE utf8_unicode_ci DEFAULT 'USER',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `cart_id_idx` (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



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


INSERT INTO products values (DEFAULT, now(), now(), 'Iphone 11 Pro Max', '1199.99', '/images/iphone11-430.jpg', 'A new dual‑camera system captures more of what you see and love. The fastest chip ever in a smartphone and all‑day battery life let you do more and charge less. And the highest‑quality video in a smartphone, so your memories look better than ever.', '6.3', '3 X 12MP', '4GB', 'IOS 13.3');
INSERT INTO products values (DEFAULT, now(), now(), 'Motorola One Zoom ', '499.99', '/images/Motorola-One-Zoom-430.jpg', 'Motorola One Zoom 64GB', '5.8', '48MP', '4GB', 'Android 10');
