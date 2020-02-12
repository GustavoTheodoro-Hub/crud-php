-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db_clientes
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.21-MariaDB

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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `data_nasc` varchar(10) NOT NULL,
  `plano1` varchar(20) NOT NULL,
  `plano2` varchar(20) DEFAULT NULL,
  `plano3` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Claudianus Boast','cboast0@fastcompany.com','(19) 957645371 ','SÃ£o Paulo','o Araraquara','07/06/1993','Free','',''),(2,'Loni Jennions ','ljennions1@va.gov','(19) 905613161 ','SÃ£o Paulo','Limeira','09/05/1985','Free','',''),(3,'Margi Gilhouley','mgilhouley2@telegraph.co.uk','(19) 966290104','SÃ£o Paulo','Araraquara','13/09/1984','Free','',''),(4,'Lexy Sprulls ','lsprulls3@moonfruit.com','(19) 976121601','SÃ£o Paulo','Rio Claro','19/10/1999','Free','',''),(5,'Marie Shatliff','mshatliff4@cbslocal.com','(19) 991376354','SÃ£o Paulo','Rio Claro','20/07/1990','Free','',''),(6,'Graig Mouncey','gmouncey5@so-net.ne.jp','(19) 941806149','SÃ£o Paulo','Araraquara','27/03/1990','Free','',''),(7,'Laurice Liger','lliger0@php.net','(35) 971740954','Minas Gerais','Areado','25/10/1992','Free',NULL,NULL),(8,'Kendrick Sooper','ksooper1@slate.com','(31) 944324086','Minas Gerais','Belo Horizonte ','02/06/1981','Free',NULL,NULL),(9,'Gordon Levington','glevington2@hpost.com','(31) 922405868','Minas Gerais','Belo Horizonte','25/11/1993','Free',NULL,NULL),(10,'Noam Scolland','nscolland3@mozilla.org','(35) 996817669 ','Minas Gerais','Areado','31/12/1999','Free',NULL,NULL),(11,'Lindon Skehens','lskehens4@npr.org','(35) 967671104','Minas Gerais','Areado','10/01/1985','Free',NULL,NULL),(12,'Kimbra Rase','krase5@topsy.com','(35) 999428030','Minas Gerais','Areado','05/05/1999','Free',NULL,NULL),(13,'Lorenzo Fisk','lfisk6@businessweek.com','(31) 912695467','Minas Gerais','Belo Horizonte','22/12/1985','Free',NULL,NULL),(14,'Bourke Flavelle','bflavelle7@fc2.com','(35) 959386145','Minas Gerais','Itapeva','10/04/1984','Free',NULL,NULL),(15,'Curran McSharry','cmcsharry8@webeden.co.uk','(35) 902916131','Minas Gerais','Itapeva','15/01/1983','Free',NULL,NULL),(16,'Aveline Dowtry','adowtry9@miibeian.gov.cn','(31) 945227500','Minas Gerais','Belo Horizonte','23/12/1994','Free',NULL,NULL),(17,'John Sebastian','jsebastiana@cbslocal.com','(31) 907366740','Minas Gerais','Belo Horizonte','06/04/1998','Free',NULL,NULL),(18,'Reynolds Greenan','rgreenanb@bloomberg.com','(35) 923551410','Minas Gerais','Itapeva','19/07/1985','Free',NULL,NULL);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `planos`
--

DROP TABLE IF EXISTS `planos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `planos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plano` varchar(20) NOT NULL,
  `preco` float(5,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planos`
--

LOCK TABLES `planos` WRITE;
/*!40000 ALTER TABLE `planos` DISABLE KEYS */;
INSERT INTO `planos` VALUES (1,'Free',0.00),(2,'Basic',100.00),(3,'Plus',187.00);
/*!40000 ALTER TABLE `planos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'db_clientes'
--

--
-- Dumping routines for database 'db_clientes'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-12 11:48:06
