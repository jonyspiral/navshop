-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: navshop
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.6-MariaDB

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
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantify` int(11) NOT NULL,
  `state` int(11) DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carts`
--

LOCK TABLES `carts` WRITE;
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;
INSERT INTO `carts` VALUES (10,1,7,1,1,'2019-12-19 20:46:36','2019-12-19 20:46:36'),(11,1,1,2,1,'2019-12-19 20:47:31','2019-12-19 20:47:34');
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
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Televisores y audio','tv.png',NULL,NULL,'Los mejores televisores del mercado, al mejor precio en cuotas y envio gratis'),(2,'Celulares','celular.png',NULL,NULL,'Los mejores smartphones del mercado, al mejor precio en cuotas y envio gratis.'),(3,'notebooks','notebook.png',NULL,NULL,'Los mejores notebooks del mercado, al mejor precio en cuotas y envio gratis.');
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
  `stock` int(11) DEFAULT 0,
  `description` longtext DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Smart TV 50” 4K Ultra HD TCL L50P65','MJyHShJMcpEA5oJH589abVwzEPIETkgY9iRvlvxY.jpeg','1',3,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!\"',39999.00,17.00,'2019-12-19 20:47:35',NULL),(2,'SMART DE GOMA CON CONTROL REMOTO 55\"','q1ctTwVpBgNElXXpVZ6hs1BKX19f27i4XzCGwWqX.jpeg','1',1,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!\"',39999.00,17.00,'2019-12-17 15:34:55',NULL),(3,'Cell 3',NULL,'2',0,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',25700.00,17.00,'2019-12-19 20:33:09',NULL),(4,'NB 54',NULL,'3',1,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',35000.00,17.00,NULL,NULL),(5,'celuuu',NULL,'2',1,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',39999.00,17.00,NULL,NULL),(6,'NOteb 1',NULL,'3',0,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',39999.00,17.00,NULL,NULL),(7,'Smart TV 50” 4K Ultra HD TCL L50P55','T3Mhn7hNp9qc5GaGoWaK4eWevgkcIQwNsCyTvFbM.jpeg','1',0,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!\"\"\"\"\"',55000.00,25.00,'2019-12-19 20:46:36',NULL),(8,'Smart TV 50” 4K Ultra HD TCL L50P55','7KgRIgg7IPrEMQWsZG3FNjWUbV8fE4FZHK6nWpD3.jpeg','1',2,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!\"',55000.00,20.00,'2019-12-18 17:51:36',NULL),(9,'Smart TV 50” 4K Ultra HD TCL L50P55',NULL,'1',2,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',55000.00,20.00,NULL,NULL),(10,'Smart TV 50” 4K Ultra HD TCL L50P55',NULL,'1',1,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',55000.00,20.00,NULL,NULL),(11,'Smartito TV 50” 4K Ultra HD TCL L50P55',NULL,'1',4,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',55000.00,20.00,NULL,NULL),(12,'Smart TV 50” 4K Ultra HD TCL L50P55',NULL,'1',3,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',55000.00,20.00,'2019-12-19 20:26:23',NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastName` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_admin` tinyint(4) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Rodriguez','Vicente','jony@spiralshoes.com','$2y$10$TY4kxVe.J0qdbAelFZMQLeV/3tgbOwxG2Cci7VFbXKOP42q/ohGcW','GSqkHoHZgnWYjgueIatApJr06ZoSbVzNz5u61NCa.jpeg','2019-11-22 13:36:15','2019-12-19 15:30:10',1,'dxMorZuwP4P0N39BzQS1vNPxfMm6G37TEW3P16iT8rjQAWWBxbgVb01q8TVP'),(50,'g','g','g@g.com','$2y$10$A1MSuCQKVao4u.A1srvnbeq.0Tsv4dC/ZzOT1y76r4aHn0clXFzgG','g@g.com.jpg','2019-11-19 16:18:26',NULL,0,NULL),(51,'einstein','albert','a@a.com','$2y$10$EZx75wC.wJVQ7NRCnesJ1uVCyWg5do5yK0Ufl5vNRnhZvY0ftvVua','a@a.com.jpg','2019-11-19 16:18:26',NULL,0,NULL),(52,'menem','Carlos','c@c.com','$2y$10$m5lNPzcU33OOmG2Y.9Rv1uM92zwcPCQWuGj4eJOfBcVBls8bltB4u',NULL,'2019-12-03 14:42:54','2019-12-03 14:42:54',0,NULL);
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

-- Dump completed on 2019-12-19 17:51:47
