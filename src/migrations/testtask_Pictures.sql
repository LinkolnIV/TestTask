-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: testtask
-- ------------------------------------------------------
-- Server version	8.0.36-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Pictures`
--

DROP TABLE IF EXISTS `Pictures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Pictures` (
  `id` int NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL COMMENT 'путь к картинке',
  `description` varchar(400) DEFAULT NULL COMMENT 'описание',
  `sort` int DEFAULT NULL,
  `name` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Pictures`
--

LOCK TABLES `Pictures` WRITE;
/*!40000 ALTER TABLE `Pictures` DISABLE KEYS */;
INSERT INTO `Pictures` VALUES (1,'./pictures/test.png','description',1,'Name 1'),(2,'./pictures/Снимок экрана от 2024-02-28 16-47-37.png','desc2',NULL,NULL),(3,'./pictures/Снимок экрана от 2024-02-28 16-47-37.png','desc3',NULL,NULL),(4,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(5,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(6,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(7,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(8,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(9,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(10,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(11,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(12,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(13,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(14,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(15,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(16,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(17,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(18,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(19,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(20,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(21,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(22,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(23,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(24,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(25,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(26,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(27,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(28,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(29,'Снимок экрана от 2024-02-28 15-29-34.png','test test',NULL,NULL),(30,'Снимок экрана от 2024-03-08 21-33-44.png','test test test ',NULL,NULL),(31,'Снимок экрана от 2024-03-08 21-33-44.png','test',1,'test'),(32,'Снимок экрана от 2024-03-08 21-33-44.png','test 2',1,'test 2'),(33,'Снимок экрана от 2024-03-08 21-33-44.png','sdfsdf',0,'test'),(34,'Снимок экрана от 2024-03-08 21-33-44.png','sdfsdf',0,'test'),(35,'Снимок экрана от 2024-03-08 21-33-44.png','sdfsdf',0,'test'),(36,'Снимок экрана от 2024-03-08 21-33-44.png','sdfsdf',0,'test'),(37,'Снимок экрана от 2024-03-08 21-33-44.png','sdfsdf',0,'test'),(38,'Снимок экрана от 2024-03-08 21-33-44.png','sdfsdf',0,'test'),(39,'./pictures/53d2aaadfb5f170b32a3e96d4046e67d.png','dfsdfsdfsdfsd',1,'test 4'),(40,'./pictures/53d2aaadfb5f170b32a3e96d4046e67d.png','adadasda',1,'test'),(41,'./pictures/60876b9c6ba6b4f0a2b005ebfafd5268.jpeg','cat 1',1,'cat'),(42,'./pictures/42e6313607424012ae8a009a3948c31f.png','Енот и его сородичи',1,'Енот'),(43,'./pictures/0f952dcdcebf0b384333c847a226d2e2.23583416','Братья:)\r\n',0,'Енот и кот '),(44,'./pictures/0f952dcdcebf0b384333c847a226d2e2.23583416','Братья:)\r\n',0,'Енот и кот '),(45,'./pictures/2d61ebd3656f78b5f34118496d5e4224.jpeg','Енотик и котик',0,'ено '),(46,'./pictures/ee0eeb4dab73cdf3aa99b349f8a08c7d.jpg','серый кот',0,'кот'),(47,'./pictures/112c86ba9e066da8f14c5bc273e6208f.jpg','Серая шиншила',1,'Кот'),(48,'./pictures/59b514174bffe4ae402b3d63aad79fe0.jpeg','Важный кот',1,'Кот'),(49,'./pictures/3fcb4aeca99f84096da2a6adf651aed8.jpg','Маленький, хитрый енотик) ',1,'Енотик'),(50,'./pictures/db26ee047a4c86fbd2fba73503feccb6.jpeg','я есть ракета',1,'Ракета');
/*!40000 ALTER TABLE `Pictures` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-10 23:20:48
