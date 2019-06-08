/*
SQLyog Community v13.1.2 (64 bit)
MySQL - 10.1.31-MariaDB : Database - dealer
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dealer` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dealer`;

/*Table structure for table `brands` */

DROP TABLE IF EXISTS `brands`;

CREATE TABLE `brands` (
  `brands_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`brands_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `brands` */

insert  into `brands`(`brands_id`,`name`) values 
(1,'Honda camaro13'),
(2,'Honda civic');

/*Table structure for table `cars` */

DROP TABLE IF EXISTS `cars`;

CREATE TABLE `cars` (
  `cars_id` int(11) NOT NULL AUTO_INCREMENT,
  `brands_id` int(11) DEFAULT NULL,
  `models_id` int(11) DEFAULT NULL,
  `registration_car` varchar(60) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  `placa` varchar(60) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `sale_price` decimal(10,2) DEFAULT NULL,
  `buy_price` decimal(10,2) DEFAULT NULL,
  `picture_one` varchar(100) DEFAULT NULL,
  `picture_two` varchar(100) DEFAULT NULL,
  `picture_there` varchar(100) DEFAULT NULL,
  `picture_four` varchar(100) DEFAULT NULL,
  `admision_date` varchar(100) DEFAULT NULL,
  `description` longtext,
  PRIMARY KEY (`cars_id`),
  KEY `models_car` (`models_id`),
  KEY `brands_car` (`brands_id`),
  CONSTRAINT `brands_car` FOREIGN KEY (`brands_id`) REFERENCES `brands` (`brands_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `models_car` FOREIGN KEY (`models_id`) REFERENCES `models` (`models_id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `cars` */

insert  into `cars`(`cars_id`,`brands_id`,`models_id`,`registration_car`,`color`,`placa`,`year`,`sale_price`,`buy_price`,`picture_one`,`picture_two`,`picture_there`,`picture_four`,`admision_date`,`description`) values 
(1,1,3,'088880888','Negro','89aAV54',2012,5000.00,50000.00,NULL,NULL,NULL,NULL,NULL,'Nille'),
(2,1,3,'096656','Blanco','AB8799',2012,20000.00,50000.00,NULL,NULL,NULL,NULL,NULL,'sdfsdf'),
(3,1,1,'AC565','GRIS','A789',1995,20000.00,50000.00,NULL,NULL,NULL,NULL,NULL,NULL),
(4,1,3,'AC565500','Rosado','AB8799',2019,8500.00,9000.00,NULL,NULL,NULL,NULL,NULL,NULL),
(5,1,1,'20163542','Blanco','AB8799',1998,20000.00,50000.00,NULL,NULL,NULL,NULL,NULL,NULL),
(8,1,3,'20163542','Blanco','AB8799',2000,20000.00,50000.00,NULL,NULL,NULL,NULL,NULL,NULL),
(9,1,1,'20163542','Blanco','123',1998,20000.00,50000.00,NULL,NULL,NULL,NULL,NULL,NULL),
(10,1,1,'20163542','Blanco','AB8799',1998,20000.00,50000.00,NULL,NULL,NULL,NULL,NULL,NULL),
(11,1,1,'20163542','Blanco','AB8799',1998,20000.00,50000.00,'C:/xampp/htdocs/dealer/subidas/10295772_442136799256916_2709830669936784752_n_442136799256916.jpg',NULL,NULL,NULL,NULL,NULL),
(12,1,1,'20163542','Blanco','AB8799',1998,20000.00,50000.00,'3633_311717572298840_2000284601_n_3117175722988401.jpg',NULL,NULL,NULL,NULL,NULL),
(13,1,1,'AREF87','Rosado','A789',1978,17000.00,20000.00,'1796884_399396813530915_1355285208_o_399396813530915.jpg',NULL,NULL,NULL,NULL,'lOS HIJOS'),
(14,1,1,'096656','Blanco','AB8799',1998,20000.00,50000.00,'449_311719132298684_1888757349_n_311719132298684.jpg',NULL,NULL,NULL,NULL,'ASADASD');

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `customers_id` int(11) NOT NULL AUTO_INCREMENT,
  `identity_number` varchar(60) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `last_name` varchar(150) NOT NULL,
  `sex` char(3) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `sector` varchar(300) DEFAULT NULL,
  `telephone` varchar(48) DEFAULT NULL,
  `mobile` varchar(48) DEFAULT NULL,
  `email` varchar(180) DEFAULT NULL,
  `admission_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`customers_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `customers` */

insert  into `customers`(`customers_id`,`identity_number`,`name`,`last_name`,`sex`,`birth_date`,`address`,`sector`,`telephone`,`mobile`,`email`,`admission_date`) values 
(12,'402-56988898-8','Veneury','Devers Nolasco','M','0000-00-00','Hainamosa','Villa','8094167984','8094167984','deversnolasco@gmail.com','2019-06-05 04:05:51'),
(13,'155-65336665-7','Maria ','Sandoval Gutierrez','F','1998-10-08','Villa francia no. 03','Alma rosa II','809-652-9663','809-698-9878','mariasandovalG@gmail.com','2019-06-08 04:00:26'),
(14,'089666545','Nancy','PEREZ','F','2005-05-08','Los solares del perla','El perla','809-965-6658','809-965-8745','nancy@gmail.com','2019-06-08 04:43:49');

/*Table structure for table `employes` */

DROP TABLE IF EXISTS `employes`;

CREATE TABLE `employes` (
  `employes_id` int(11) NOT NULL AUTO_INCREMENT,
  `identity_number` varchar(20) NOT NULL,
  `name_employes` varchar(50) NOT NULL,
  `last_nameemplyes` varchar(50) DEFAULT NULL,
  `sex` enum('M','F') NOT NULL,
  `birth_date` date DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `sector` varchar(100) DEFAULT NULL,
  `telephone` varchar(16) DEFAULT NULL,
  `mobile` varchar(16) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `admission_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`employes_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `employes` */

insert  into `employes`(`employes_id`,`identity_number`,`name_employes`,`last_nameemplyes`,`sex`,`birth_date`,`address`,`sector`,`telephone`,`mobile`,`email`,`admission_date`) values 
(2,'6456565','Veneury WEW','Devers Nolasco','M','1998-10-08','Hainamosa','Villa','8094167984','8094167984','20163542@itla.edu.do','2019-06-05 12:01:34'),
(3,'123123','VeneuryASA','Devers NolascoASA','M','2018-10-08','Hainamosa','A','8094167984','8094167984','deversnolasco@gmail.com','2019-06-05 12:01:16'),
(4,'0050505','Juan','Garcia','M','2019-06-03','Hainamosa','Villa Esfuerzo','8094167984','8094167984','crisyunior1@hotmail.com','2019-06-07 18:32:27');

/*Table structure for table `models` */

DROP TABLE IF EXISTS `models`;

CREATE TABLE `models` (
  `models_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`models_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `models` */

insert  into `models`(`models_id`,`name`) values 
(1,'K-5 update'),
(3,'Misuki');

/*Table structure for table `sales` */

DROP TABLE IF EXISTS `sales`;

CREATE TABLE `sales` (
  `sale_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_customers` int(11) DEFAULT NULL,
  `id_employes` int(11) DEFAULT NULL,
  `card_id` int(11) DEFAULT NULL,
  `sale_date` date DEFAULT NULL,
  `type_pay` varchar(50) DEFAULT NULL,
  `itebis` decimal(18,2) DEFAULT NULL,
  `sub_total` decimal(18,2) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `total` decimal(18,2) DEFAULT NULL,
  PRIMARY KEY (`sale_id`),
  KEY `customers_id` (`id_customers`),
  KEY `employes_id` (`id_employes`),
  KEY `card_id` (`card_id`),
  CONSTRAINT `card_id` FOREIGN KEY (`card_id`) REFERENCES `cars` (`cars_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `customers_id` FOREIGN KEY (`id_customers`) REFERENCES `customers` (`customers_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `employes_id` FOREIGN KEY (`id_employes`) REFERENCES `employes` (`employes_id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `sales` */

insert  into `sales`(`sale_id`,`id_customers`,`id_employes`,`card_id`,`sale_date`,`type_pay`,`itebis`,`sub_total`,`discount`,`total`) values 
(1,12,4,1,'2019-06-21','Mia',18.00,50.00,0,500.00),
(3,12,2,2,'2000-02-01','Tarjeta',9000.00,50000.00,5900,59000.00);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `user_password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `users` */

/*Table structure for table `users_type` */

DROP TABLE IF EXISTS `users_type`;

CREATE TABLE `users_type` (
  `id_typeUser` int(11) NOT NULL AUTO_INCREMENT,
  `type_user` int(2) NOT NULL,
  PRIMARY KEY (`id_typeUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `users_type` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
