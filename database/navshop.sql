-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: localhost    Database: navshop
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.18.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carts` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantify` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `state` int(11) DEFAULT NULL,
  PRIMARY KEY (`product_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carts`
--

LOCK TABLES `carts` WRITE;
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;
/*!40000 ALTER TABLE `carts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Televisores y audio',NULL,NULL,NULL),(2,'Celulares',NULL,NULL,NULL),(3,'notebooks',NULL,NULL,NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `category_id` varchar(45) DEFAULT NULL,
  `stock` int(11) DEFAULT '0',
  `description` longtext,
  `price` decimal(10,0) DEFAULT NULL,
  `discount` decimal(10,0) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'MONTOTOTV 50” 4K Ultra HD TCL L50P65','xrPuucnVCewsu4txTFgli4OrhqgTzDhg4qRLkAza.jpeg','1',70,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',52000,17,'2019-12-11 18:59:55',NULL),(2,'tele2',NULL,'1',1,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',39999,17,NULL,NULL),(3,'Cell 3',NULL,'2',1,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',39999,17,NULL,NULL),(4,'NB 54',NULL,'3',1,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',39999,17,NULL,NULL),(5,'celuuu',NULL,'2',1,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',39999,17,NULL,NULL),(6,'NOteb 1',NULL,'3',0,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',39999,17,NULL,NULL),(7,'Smart TV 50” 4K Ultra HD TCL L50P55',NULL,'1',1,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',55000,25,NULL,NULL),(8,'Smart TV 50” 4K Ultra HD TCL L50',NULL,'1',100,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',200,10,'2019-12-11 18:41:03',NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `time_update` varchar(45) DEFAULT NULL,
  `is_admin` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_UNIQUE` (`user`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (0,'jony','Rodriguez','Vicente A Rodriguez','jony@spiralshoes.com','$2y$10$TY4kxVe.J0qdbAelFZMQLeV/3tgbOwxG2Cci7VFbXKOP42q/ohGcW','jony@spiralshoes.com.jpg','2019-11-22 16:36:15',NULL,NULL),(50,'g','g','g','g@g.com','$2y$10$A1MSuCQKVao4u.A1srvnbeq.0Tsv4dC/ZzOT1y76r4aHn0clXFzgG','g@g.com.jpg','2019-11-19 19:18:26',NULL,NULL),(51,'albert','einstein','albert','a@a.com','$2y$10$EZx75wC.wJVQ7NRCnesJ1uVCyWg5do5yK0Ufl5vNRnhZvY0ftvVua','a@a.com.jpg','2019-11-19 19:18:26',NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-11 16:58:24
