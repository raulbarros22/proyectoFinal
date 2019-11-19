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

INSERT INTO products values (DEFAULT, now(), now(), 'Iphone 11 Pro Max', 1199.99, './images/apple-iphone-11promax.jpg', "Iphone 11 Pro Max");