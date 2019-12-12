-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: navshop
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
  `name` varchar(45) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Televisores y audio',NULL,NULL,NULL),(2,'Celulares',NULL,NULL,NULL),(3,'Notebooks',NULL,NULL,NULL);
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
  `price` decimal(10,0) DEFAULT NULL,
  `discount` decimal(10,0) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `activo` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'caelular Smart TV 50” 4K Ultra HD TCL L50P65','tHRb8pJIb8SttERaZM0zcftTa89cuyo5nyEXbW0t.jpeg','2',5,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',39999,17,NULL,'2019-12-12 11:51:02',NULL),(2,'tele2','376JOnnGzpHQd4LWBc9bHmojSMXP1sVkNymCSukw.jpeg','1',1,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',39999,17,NULL,'2019-12-12 11:54:24',NULL),(3,'Samsung A30 bla bla y bla','c66BAwddSmN7Rx3du9RUOGWmA0ekgK4DFzZaYopH.jpeg','2',1,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',39999,17,NULL,'2019-12-12 12:22:11',NULL),(4,'NB 54 bla bla y ms bla','NV7E3SIJXkayViSDyBCcApQt2MfiMlWR2KYo6Aho.jpeg','3',1,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',39999,17,NULL,'2019-12-12 12:39:48',NULL),(5,'celuuu',NULL,'2',1,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',39999,17,NULL,NULL,NULL),(6,'NB LENOVO 45553nbjkbb 512MB','2AkZn1sCGBaG1SaQdtnXzfo34BCe7xTaNsSmZw9l.jpeg','3',0,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',39999,17,NULL,'2019-12-12 12:40:55',NULL),(7,'Smart TV 105” 4K Ultra HD TCL L50P55','WGDu0UFKDQrIZBPOop2fchMuJwZLyBieJ233oY6N.jpeg','1',3,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',99999,26,NULL,'2019-12-12 12:51:12',NULL),(8,'Smart TV 150” 4K Ultra HD TCL L50P55','Zd42v65AWZN2o1cjhpx3wXUojBcyo5P4GSDP6U2W.jpeg','1',2,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',149999,25,NULL,'2019-12-12 12:11:44',NULL),(9,'Smart TV 500” 4K Ultra HD TCL L50P55','tGkqEpvOdO96Trtz3TnyiYeexkycOOu09vx0hfiG.jpeg','1',18,'Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!',99999,25,NULL,'2019-12-12 12:12:36',NULL),(10,'Smart TV 43\" Full HD AOC 43S5295/77',NULL,'1',2,'el mejor tele',45000,17,'2019-12-07 23:53:07','2019-12-07 23:53:07',NULL),(12,'REE-SMART TV 4K 55\" LG 55UK6550PSB',NULL,'1',1,'el mejor tele ,NO LO VAS A PODER CREEEWEE!',55000,10,'2019-12-08 20:20:15','2019-12-08 20:20:15',NULL),(13,'SUPER TV NUNCA TAXI','1eIaej3jjKCI0t4Tu2lyW37ZCxapLwVmJx6qItBQ.jpeg','1',4,'el mejor tele ,NO LO VAS A PODER CREEEWEE!',100000,15,'2019-12-08 20:36:23','2019-12-12 12:52:40',NULL),(14,'Vicente','rm2LSiiHBZTZevts0BhCzoC620Zhrg6Oyp0mtJT7.jpeg','1',5,'el mejor tele ,NO LO VAS A PODER CREEEWEE!',444444,50,'2019-12-09 22:25:16','2019-12-09 22:25:16',NULL),(15,'Smart TV 47\" Full HD AOC 43S5295/77','w3kdSndXyBAPDADZkWT9tQVM2S2RHxZLH2IKxg4j.jpeg','1',15,'el mejor tele ,NO LO VAS A PODER CREEEWEE!',52999,0,'2019-12-12 12:42:29','2019-12-12 12:42:29',NULL);
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
  `user` varchar(100) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `time_update` varchar(45) DEFAULT NULL,
  `is_admin` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_UNIQUE` (`user`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'jony','Rodriguez','Vicente A Rodriguez','jony@spiralshoes.com','$2y$10$TY4kxVe.J0qdbAelFZMQLeV/3tgbOwxG2Cci7VFbXKOP42q/ohGcW','jony@spiralshoes.com.jpg','2019-11-22 19:36:15','',1),(50,'g','g','g','g@g.com','$2y$10$A1MSuCQKVao4u.A1srvnbeq.0Tsv4dC/ZzOT1y76r4aHn0clXFzgG','g@g.com.jpg','2019-11-19 22:18:26',NULL,NULL),(51,'albert','einstein','albert','a@a.com','$2y$10$EZx75wC.wJVQ7NRCnesJ1uVCyWg5do5yK0Ufl5vNRnhZvY0ftvVua','a@a.com.jpg','2019-11-19 22:18:26',NULL,NULL);
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

-- Dump completed on 2019-12-12  9:53:25
