-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: aulas_77_
-- ------------------------------------------------------
-- Server version	5.5.62

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE aulas_77_90
    DEFAULT CHARACTER SET = 'utf8mb4';

USE aulas_77_90;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `text` text NOT NULL,
  `status` enum('draft','published','archived') DEFAULT 'draft',
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COMMENT='Tabela de categorias relacionada com posts';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'PHP','php','PHP é uma linguagem interpretada livre, usada originalmente apenas para o desenvolvimento de aplicações presentes e atuantes no lado do servidor','published'),(2,'Tecnologia','tecnologia','Tecnologia é o conjunto de processos e habilidades usados na produção de bens ou serviços','published'),(3,'Segurança','seguranca','Segurança de computadores ou cibersegurança é a proteção de sistemas de computador contra roubo ou danos ao hardware, software ou dados eletrônicos, bem como a interrupção ou desorientação dos serviços que fornecem.','published'),(4,'MySQL','mysql','O MySQL é um sistema de gerenciamento de banco de dados (SGBD), que utiliza a linguagem SQL','published'),(5,'Teste','teste','Loren','draft'),(6,'New','new-22af64','Novidades constantes','published');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `text` text NOT NULL,
  `status` enum('draft','published','archived') DEFAULT 'draft',
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `category_id` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COMMENT='Tabela de posts relacionada com categorias';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,1,'Postagem comum','postagem-comum','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam soluta cupiditate incidunt ab, praesentium quidem deserunt adipisci aut deleniti a impedit suscipit dolor magni recusandae tempore doloribus ea sit aperiam. 1','published'),(2,1,'Postagem incomum','postagem-incomum','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam soluta cupiditate incidunt ab, praesentium quidem deserunt adipisci aut deleniti a impedit suscipit dolor magni recusandae tempore doloribus ea sit aperiam. 2','draft'),(3,2,'Postagem rara','postagem-rara','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam soluta cupiditate incidunt ab, praesentium quidem deserunt adipisci aut deleniti a impedit suscipit dolor magni recusandae tempore doloribus ea sit aperiam. 3','published'),(4,1,'Postagem épica','postagem-epica','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam soluta cupiditate incidunt ab, praesentium quidem deserunt adipisci aut deleniti a impedit suscipit dolor magni recusandae tempore doloribus ea sit aperiam. 4','published'),(5,3,'Postagem lendária','postagem-lendaria','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam soluta cupiditate incidunt ab, praesentium quidem deserunt adipisci aut deleniti a impedit suscipit dolor magni recusandae tempore doloribus ea sit aperiam. 5','published'),(6,3,'Postagem mística','postagem-mistica','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam soluta cupiditate incidunt ab, praesentium quidem deserunt adipisci aut deleniti a impedit suscipit dolor magni recusandae tempore doloribus ea sit aperiam. 6','draft'),(7,2,'asd','asd-781569','asd loren loren','draft'),(8,2,'Postagem nível 3','postagem-n-ivel-3-b2a511','Uma bacana de uma postagem','published');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

--
-- Dumping routines for database 'aulas_77_'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-02 16:11:03
