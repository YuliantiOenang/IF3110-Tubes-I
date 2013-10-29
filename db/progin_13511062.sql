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
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `ID` varchar(8) NOT NULL,
  `IdName` varchar(50) NOT NULL,
  KEY `Customer_membeli` (`ID`),
  KEY `dipesan_oleh` (`IdName`),
  CONSTRAINT `Customer_membeli` FOREIGN KEY (`ID`) REFERENCES `merchandise` (`ID`),
  CONSTRAINT `dipesan_oleh` FOREIGN KEY (`IdName`) REFERENCES `customer` (`IdName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES ('10000001','karakuri'),('50000001','ladadee');
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `credit`
--

DROP TABLE IF EXISTS `credit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `credit` (
  `CardNumber` varchar(20) NOT NULL,
  `CardName` varchar(50) NOT NULL,
  `ExpiredDate` varchar(50) NOT NULL,
  PRIMARY KEY (`CardNumber`),
  KEY `index_cardname` (`CardName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credit`
--

LOCK TABLES `credit` WRITE;
/*!40000 ALTER TABLE `credit` DISABLE KEYS */;
INSERT INTO `credit` VALUES ('101010101010101','EmpatPuluh MP','2012-12-12'),('202020202020202','Cody Simpson','2013-03-30'),('303030303030303','Krayon Pop','2013-10-01');
/*!40000 ALTER TABLE `credit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `IdName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `NamaLengkap` varchar(50) NOT NULL,
  `NomorHP` varchar(13) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Kota` varchar(50) NOT NULL,
  `Provinsi` varchar(50) NOT NULL,
  `KodePos` varchar(5) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Transaksi` int(11) NOT NULL,
  PRIMARY KEY (`IdName`),
  KEY `index_namalengkap` (`NamaLengkap`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES ('jumping','heyjumping','Krayon Pop','08176356635','Jl. di Korea','Jumping','KR','75532','jumpingheyeverybody@gmail.com',10),('karakuri','piieerroott','EmpatPuluh MP','08176339017','Jl. Tubagus Ismail no 1','Bandung','Jawa Barat','12345','karakuri.pierot@yahoo.com',0),('ladadee','laladadoo','Cody Simpson','085725706477','Jl. Tidak Tau no x','There\'s','OnlyYou','51243','ladadee@gmail.com',5);
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `have`
--

DROP TABLE IF EXISTS `have`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `have` (
  `CardNumber` varchar(20) NOT NULL,
  `IdName` varchar(50) NOT NULL,
  KEY `Customer_memiliki` (`CardNumber`),
  KEY `dimiliki_oleh` (`IdName`),
  CONSTRAINT `Customer_memiliki` FOREIGN KEY (`CardNumber`) REFERENCES `credit` (`CardNumber`),
  CONSTRAINT `dimiliki_oleh` FOREIGN KEY (`IdName`) REFERENCES `customer` (`IdName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `have`
--

LOCK TABLES `have` WRITE;
/*!40000 ALTER TABLE `have` DISABLE KEYS */;
INSERT INTO `have` VALUES ('101010101010101','karakuri'),('202020202020202','ladadee'),('303030303030303','jumping');
/*!40000 ALTER TABLE `have` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `merchandise`
--

DROP TABLE IF EXISTS `merchandise`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `merchandise` (
  `ID` varchar(8) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Kategori` varchar(50) NOT NULL,
  `Banyak` int(11) NOT NULL,
  `Keterangan` varchar(500) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Terjual` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `index_nama` (`Nama`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `merchandise`
--

LOCK TABLES `merchandise` WRITE;
/*!40000 ALTER TABLE `merchandise` DISABLE KEYS */;
INSERT INTO `merchandise` VALUES ('10000001','Citos','Makanan',50,'Makanan Ringan yang sudah ada dari jaman batu',5000,5),('10000002','Taro','Makanan',25,'Makanan Ringan selezat daging',10000,10),('10000003','Pan','Makanan',100,'Roti',1000,20),('10000004','Nasi','Makanan',100,'Nasi Putih',2000,50),('10000005','Ayam','Makanan',50,'Burung melegenda yang tidak dapat terbang',8000,25),('10000006','Ikan','Makanan',50,'Pisces adalah kingdomnya',6000,15),('10000007','Banana','Makanan',20,'Makanan kesukaan para monyet , contohnya Yoyo',15000,100),('10000008','Ulat bakar','Makanan',50,'Enak nikmat bergizi dan membuat vitalitas meninggi',1500,200),('10000009','Escargo','Makanan',60,'Nama bagusnya dari bekicot',9000,5),('10000010','Telur','Makanan',100,'Ketika pecah akan keluar serangga, HIII Seram',100,70),('10000011','Hydra','Makanan',55,'Sayuran yang tidak enak dan tidak sehat tapi bermanfaat dalam hal lain',100000,30),('10000012','TIKUS','Makanan',20,'Tikus yang berkumpul dengan para kecoa',1,1),('20000001','QS T-Shirt','Pakaian',20,'Baju Imba yang terbuat dari perak',100000,5),('20000002','BS T-Shirt','Pakaian',5,'Baju Imba yang dapat ditempa',10000000,8),('20000003','Dress','Pakaian',30,'so frilly',80000,10),('20000004','FIRE','Pakaian',1,'Terbakar jiwa semangat',100,1),('20000005','Si Kertas','Pakaian',100,'Pakaian yang terbuat dari kertas yang ujungnya begitu tajam dan dapat melukai orang lain',100000,4),('20000006','Baju Perang','Pakaian',20,'Baju Zirah yang membuat penggunanya menjadi jahat',0,0),('20000007','Dedaunan','Pakaian',20,'Apapun yang penting jadi pakaian',50000,80),('30000001','Meja Goyang','Furnitur',10,'Meja yang bergoyang - goyang seperti kursi goyang',90000,7),('30000002','Kursi Goyang','Furnitur',10,'Kursi yang bergoyang - goyang',50000,6),('30000003','Lemari Goyang','Furnitur',10,'Lemari yang bergoyang - goyang seperti kursi goyang',500000,5),('30000004','Ranjang Goyang','Furnitur',10,'Ranjang yang bergoyang - goyang seperti kursi goyang',1000000,4),('30000005','Jam Goyang','Furnitur',10,'Jam yang bergoyang - goyang seperti kursi goyang',20000,3),('40000001','Dapurz','Peralatan Dapur',2,'Satu set peralatan dapur, ada ovennya loh',1000000,2),('40000002','Knife','Peralatan Dapur',1,'Sebuah pisau yang didapatkan di dalam mimpi dan dipakai untuk menghilangkan sebuah benda dengan membunuhnya. PS: Yume Nikki',0,1),('40000003','Pan goreng','Peralatan Dapur',30,'Frying Pan',60000,4),('40000004','Rice Cooker','Peralatan Dapur',15,'Alat yang hanya bisa memasak nasi yang di beli di toko Ruserba saja',40000,7),('50000001','Sikat Gigi','Alat Sehari - hari',1,'Alat yang digunakan untuk membersihkan gigi dari kuman yang jahat',7777,10),('50000002','Kodomo','Alat Sehari - hari',10,'Jangan lupa gosok gigi dengan kodomo',15000,5),('50000003','Gillette','Alat Sehari - hari',2,'Pencukur yang sangat canggih, rapih, dan membuat orang senang',23000,10),('50000004','Jepitan','Alat Sehari - hari',100,'Untuk baju yang dijemur agar tidak terbang *whuuush*',10000,3),('50000005','Kertas','Alat Sehari - hari',200,'Selain untuk pakaian, Si Kertas dapat juga dipakai untuk tisu',30000,1000),('50000006','Minyak Kayu Putih','Alat Sehari - hari',5,'Minyak yang dibuat dari kayu berwarna putih',60000,8),('50000007','Selotip','Alat Sehari - hari',5,'Apapun yang dapat merekatkan benda-benda',30000,20),('50000008','Power Plant','Alat Sehari - hari',1,'Sumber Listrik untuk segalanya',50000000,1),('50000009','Shampoo','Alat Sehari - hari',20,'Buih-buih , bubble-bubble, blukutuk-blukutuk',10000,6),('50000010','Gunting Kuku','Alat Sehari - hari',10,'ckris ckris *kebagi 2*',15000,18),('50000011','Buku','Alat Sehari - hari',100,'Buku yang berisi banyak kartu !!',5000,2000);
/*!40000 ALTER TABLE `merchandise` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-10-29 18:59:08
