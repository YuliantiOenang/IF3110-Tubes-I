-- MySQL dump 10.13  Distrib 5.5.27, for Win32 (x86)
--
-- Host: localhost    Database: datauser
-- ------------------------------------------------------
-- Server version	5.5.27

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
-- Table structure for table `creditcard`
--

DROP TABLE IF EXISTS `creditcard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `creditcard` (
  `number` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `expiredate` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `creditcard`
--

LOCK TABLES `creditcard` WRITE;
/*!40000 ALTER TABLE `creditcard` DISABLE KEYS */;
INSERT INTO `creditcard` VALUES ('12341234','budi lagi','2014-04-07');
/*!40000 ALTER TABLE `creditcard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `namalengkap` varchar(50) DEFAULT NULL,
  `nohp` varchar(50) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `kotakabupaten` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kodepos` varchar(50) DEFAULT NULL,
  `nocredit` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('budie','12345678','budie@gmail.com','budi aja','087808780878','Jawa Barat','Bandung','Bandung aja','4000',NULL),('budih','12341234','budie@budi.com','budi handoko','12345','lalala','lalala','lalala','4444','12341234'),('cobabro','12341234','coba@bro.com','coba bro','081508150815','Jambi','Jambi','Jambi','3000',NULL),('cobalagi','12341234','cobalagi@lagi.com','coba dong','085708570857','Jambi','Jambi','Jambi','31365',NULL),('testtest','12341234','test@test.com','test test','0102030405','jawa','jawa','jawa','1234',NULL),('yanti','1234512345','yanti@yanti.com','yanti yanti','08080909','Kalimantan Barat','Jakarta','Jalan layang no 44','5000','12341234'),('yoibro','12345678','yoi@bro.com','yoi bro','0101010101','lalala','yeyeye','layelaye','000',NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-10-29  0:05:49
