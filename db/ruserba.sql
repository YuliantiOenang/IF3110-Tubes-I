-- MySQL dump 10.13  Distrib 5.5.27, for Win32 (x86)
--
-- Host: localhost    Database: ruserba
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
-- Table structure for table `barang`
--

DROP TABLE IF EXISTS `barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `nama_barang` varchar(256) NOT NULL,
  `harga` int(11) NOT NULL,
  `satuan` varchar(32) NOT NULL,
  `deskripsi` varchar(1024) DEFAULT NULL,
  `jumlah_pembelian` int(11) DEFAULT '0',
  `jumlah_stok` int(11) DEFAULT '0',
  `nama_gambar` varchar(256) NOT NULL,
  `nama_gambar_thumb` varchar(256) NOT NULL,
  PRIMARY KEY (`id_barang`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barang`
--

LOCK TABLES `barang` WRITE;
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` VALUES (1,4,'Apel',3390,'100 gram','Buah yang berkhasiat untuk menjauhkan dokter dari Anda.',0,73,'buah_apel.jpg','buah_apel_thumb.jpg'),(2,3,'Brokoli',1390,'100 gram','Sayuran yang mengandung banyak vitamin C dan serat. Menurut Wikipedia, sebaiknya diolah dengan cara dikukus agar nutrisinya tetap terjaga.',0,32,'sayur_brokoli.jpg','sayur_brokoli_thumb.jpg'),(3,1,'Beras',8900,'kilogram','Makanan pokok',0,134,'beras_putih.jpg','beras_putih_thumb.jpg'),(4,4,'Ceri',2300,'100 gram','Deskripsi ceri disini.',0,41,'buah_cherry.jpg','buah_cherry_thumb.jpg'),(5,4,'Durian',2900,'100 gram','Deskripsi durian disini.',0,42,'buah_durian.jpg','buah_durian_thumb.jpg'),(6,4,'Jambu batu',2490,'100 gram','Deskripsi jambu batu disini.',0,31,'buah_jambubatu.jpg','buah_jambubatu_thumb.jpg'),(7,4,'Jeruk',3280,'100 gram','Deskripsi jeruk disini.',0,31,'buah_jeruk.jpg','buah_jeruk_thumb.jpg'),(8,4,'Kiwi',5190,'100 gram','Deskripsi kiwi disini.',0,56,'buah_kiwi.jpg','buah_kiwi_thumb.jpg'),(9,4,'Mangga',2390,'100 gram','Deskripsi mangga disini.',0,76,'buah_mangga.jpg','buah_mangga_thumb.jpg'),(10,4,'Manggis',2290,'100 gram','Deskripsi manggis disini.',0,24,'buah_manggis.jpg','buah_manggis_thumb.jpg'),(11,4,'Melon',2470,'100 gram','Deskripsi melon disini.',0,41,'buah_melon.jpg','buah_melon_thumb.jpg'),(12,4,'Nanas',3190,'100 gram','Deskripsi nanas disini.',0,67,'buah_nanas.jpg','buah_nanas_thumb.jpg'),(13,4,'Pisang',2340,'100 gram','Deskripsi pisang disini.',0,87,'buah_pisang.jpg','buah_pisang_thumb.jpg'),(14,4,'Semangka',3500,'100 gram','Deskripsi semangka disini.',0,31,'buah_semangka.jpg','buah_semangka_thumb.jpg'),(15,4,'Stroberi',4120,'100 gram','Deskripsi stroberi disini.',0,41,'buah_stroberi.jpg','buah_stroberi_thumb.jpg'),(16,4,'Zaitun',2340,'100 gram','Deskripsi zaitun disini.',0,23,'buah_zaitun.jpg','buah_zaitun_thumb.jpg');
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(256) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES (1,'Beras dan kacang-kacangan'),(2,'Daging dan telur'),(3,'Sayur-mayur'),(4,'Buah-buahan'),(5,'Bumbu dapur');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama_lengkap` varchar(256) NOT NULL,
  `provinsi` varchar(256) DEFAULT NULL,
  `kota` varchar(256) DEFAULT NULL,
  `alamat` varchar(32) DEFAULT NULL,
  `kode_pos` varchar(32) DEFAULT NULL,
  `kontak` varchar(32) DEFAULT NULL,
  `nomor_kartu` varchar(256) DEFAULT NULL,
  `nama_kartu` varchar(256) DEFAULT NULL,
  `ekspirasi_kartu` date DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'john','john@yahoo.com','0d107d09f5bbe40cade3de5c71e9e9b7','John Smith','Jawa Barat','Bandung','Jl. Ganeca No.42A','14562','081347556202','3141-5156-1425-5421','John Smith','2016-09-01');
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

-- Dump completed on 2013-10-29 14:48:01
