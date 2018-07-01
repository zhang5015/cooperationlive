-- MySQL dump 10.13  Distrib 5.6.15, for Linux (i686)
--
-- Host: localhost    Database: cooperation
-- ------------------------------------------------------
-- Server version	5.6.15

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
-- Current Database: `cooperation`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `cooperation` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `cooperation`;

--
-- Table structure for table `cooperation_affiliate`
--

DROP TABLE IF EXISTS `cooperation_affiliate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cooperation_affiliate` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cooperation_affiliate`
--

LOCK TABLES `cooperation_affiliate` WRITE;
/*!40000 ALTER TABLE `cooperation_affiliate` DISABLE KEYS */;
INSERT INTO `cooperation_affiliate` VALUES (1,'http://www.sensio-labs.com/','fabien.potencier@example.com','sensio_labs',1,'2017-05-10 00:00:00','2017-05-10 00:00:00'),(2,'/','fabien.potencier@example.org','symfony',0,'2017-05-10 00:00:00','2017-05-10 00:00:00');
/*!40000 ALTER TABLE `cooperation_affiliate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cooperation_article`
--

DROP TABLE IF EXISTS `cooperation_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cooperation_article` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `link` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `abstract` varchar(255) NOT NULL,
  `is_public` tinyint(4) NOT NULL DEFAULT '1',
  `is_activated` tinyint(4) NOT NULL DEFAULT '0',
  `expires_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id_idx` (`category_id`),
  CONSTRAINT `cooperation_article_category_id_cooperation_category_id` FOREIGN KEY (`category_id`) REFERENCES `cooperation_category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cooperation_article`
--

LOCK TABLES `cooperation_article` WRITE;
/*!40000 ALTER TABLE `cooperation_article` DISABLE KEYS */;
INSERT INTO `cooperation_article` VALUES (16,4,'ddd','ddd','ddd','ddd','5fdd89cb13b2756b3f7eae0f4413e9e59b16befb.png','ddd',1,1,'2018-04-14 11:48:38','2018-03-15 11:48:38','2018-03-15 11:48:38'),(17,4,'为恒大与腾讯联手打造的‘恒腾网络’制作宣传片','zhang',' 有限公司携手品牌形象策划设计公司，为其塑造全新品牌视觉形象。更多品牌设计的相关信息敬请关注官方网站！有限公司携手品牌形象策划设计公司，\r\n\r\n\r\n为其塑造全新品牌视觉形象。更多品牌设计的相关信息敬请关注官方网站！ 有限公司携手品牌形象策划设计公司，为其塑造全新品牌视觉形象。更多品牌设计的相关信息敬请关注官方网站！有限公司携手品牌形象策划设计公司，为其塑造全新品牌视觉形象。更多品牌设计的相关信息敬请关注官方网站！ ','','a1962a9bacde9d0e8a3b8445c657ce3376508793.jpg','有限公司携手品牌形象策划设计公司，为其塑造全新品牌视觉形象。',1,1,'2018-04-15 00:06:29','2018-03-16 00:06:29','2018-03-16 00:06:29'),(18,4,'家居广告宣传片制作之三星智能电视的设计故事','zhang','有限公司携手品牌形象策划设计公司，为其塑造全新品牌视觉形象。更多品牌设计的相关信息敬请关注官方网站！有限公司携手品牌形象策划设计公司，\r\n\r\n\r\n为其塑造全新品牌视觉形象。更多品牌设计的相关信息敬请关注官方网站！ 有限公司携手品牌形象策划设计公司，为其塑造全新品牌视觉形象。更多品牌设计的相关信息敬请关注官方网站！有限公司携手品牌形象策划设计公司，为其塑造全新品牌视觉形象。更多品牌设计的相关信息敬请关注官方网站！\r\n\r\n','','b39f1f8d06ba4d806dcf7485b77221c961f12595.jpg','有限公司携手品牌形象策划设计公司，为其塑造全新品牌视觉形象。',1,1,'2018-04-15 00:08:25','2018-03-16 00:08:25','2018-03-16 00:08:25'),(19,1,'test1','zhang','test1','','068398f603f964e0860fc18b3550edf195dbc4c9.jpg','test1',1,1,'2018-04-16 09:19:14','2018-03-17 09:19:14','2018-03-17 09:19:14'),(20,1,'test2','zhang','test2','','9dad9c2fe69b5f9d820f9c68bdef9575bbf4c744.jpg','test2',1,1,'2018-04-16 09:20:03','2018-03-17 09:20:03','2018-03-17 09:20:03'),(21,1,'test3','zhang','test3','','6ddc59da0702ab91141d079640ee86b99bbaeadc.jpg','test3',1,1,'2018-04-16 09:23:23','2018-03-17 09:23:23','2018-03-17 09:23:23'),(22,1,'test4','zhang','test4','','ecd953274345516630a33d55195903fef9187ea1.jpg','test4',1,1,'2018-04-16 09:23:53','2018-03-17 09:23:53','2018-03-17 09:23:53'),(23,4,'test5','zhang','test5','','61e7199bfe54850014f849b4601b77dbfbb9734c.jpg','test5',1,1,'2018-04-16 09:25:00','2018-03-17 09:25:00','2018-03-17 09:25:00'),(24,2,'test6','zhang','test6','','4722d3c4e6ccd1ed94b1ef6f2a7c5f798077b3b2.jpg','test6',1,1,'2018-04-16 09:25:47','2018-03-17 09:25:47','2018-03-17 09:25:47'),(25,2,'test7','zhang','test7','','19bf10535099036f05d930eee0e93392952e7fb6.jpg','test7',1,1,'2018-04-16 09:26:16','2018-03-17 09:26:16','2018-03-17 09:26:16'),(26,2,'test8','zhang','test8','','cae8821cf9fa2cdd7833ce9c3a54e7e0e4313177.jpg','test8',1,1,'2018-04-16 09:26:43','2018-03-17 09:26:43','2018-03-17 09:26:43'),(27,3,'test9','zhang','test9','','f25d65b85dd4f3289b1019e846ca7ed9e99c8a7e.jpg','test9',1,1,'2018-04-16 09:27:10','2018-03-17 09:27:10','2018-03-17 09:27:10'),(28,3,'test10','test10','test10','',NULL,'test10',1,1,'2018-04-16 09:27:32','2018-03-17 09:27:32','2018-03-17 09:27:32'),(29,3,'test11','zhang','test11','','b1c0d53a42e6fc7722478907cfd1e1d35628192e.jpg','test11',1,1,'2018-04-16 09:28:45','2018-03-17 09:28:45','2018-03-17 09:28:45'),(30,3,'test12','test12','test12','','266b291e06fced1d15a23c964d6292245abc07aa.jpg','test12',1,1,'2018-04-16 09:29:21','2018-03-17 09:29:21','2018-03-17 09:29:21'),(31,3,'test13','zhang','test13','','ee71fee3e5bdc4f243aabf08056b12242ce80857.jpg','test13',1,1,'2018-04-16 09:30:38','2018-03-17 09:30:38','2018-03-17 09:30:38'),(32,1,'test','test','test','test','dd3447ca5c22f5b3d3ec2986d94ea6d6b8de6992.jpg','test',1,1,'2018-04-16 09:31:04','2018-03-17 09:31:04','2018-03-17 09:31:04'),(33,5,'test1','zhang','test','test','83558f0f2bafd51f0a022289f76bf4d11a0d08e7.jpg','test',1,1,'2018-04-16 09:31:26','2018-03-17 09:31:26','2018-03-17 09:31:26'),(34,5,'test','test','test','test','85e4b24ed5950a9f9000b8cde930c790fc915f53.jpg','test',1,1,'2018-04-16 09:31:46','2018-03-17 09:31:46','2018-03-17 09:31:46'),(35,5,'test','test','test','test','cbfa6e1f169cea24f5cf3d7a28cb43188629c59d.jpg','test',1,1,'2018-04-16 09:33:03','2018-03-17 09:33:03','2018-03-17 09:33:03'),(36,5,'test','test','test','','c3418cf0ad031b0e2c24d17daead34ab43fc7752.jpg','test',1,1,'2018-04-16 09:33:25','2018-03-17 09:33:25','2018-03-17 09:33:25');
/*!40000 ALTER TABLE `cooperation_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cooperation_category`
--

DROP TABLE IF EXISTS `cooperation_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cooperation_category` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cooperation_category`
--

LOCK TABLES `cooperation_category` WRITE;
/*!40000 ALTER TABLE `cooperation_category` DISABLE KEYS */;
INSERT INTO `cooperation_category` VALUES (1,'2018-03-13 20:19:42','2018-03-13 20:19:42'),(2,'2018-03-13 20:19:42','2018-03-13 20:19:42'),(3,'2018-03-13 20:19:42','2018-03-13 20:19:42'),(4,'2018-03-13 20:19:42','2018-03-13 20:19:42'),(5,'2016-04-08 07:08:00','2017-07-08 03:04:00');
/*!40000 ALTER TABLE `cooperation_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cooperation_category_affiliate`
--

DROP TABLE IF EXISTS `cooperation_category_affiliate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cooperation_category_affiliate` (
  `category_id` bigint(20) NOT NULL DEFAULT '0',
  `affiliate_id` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`category_id`,`affiliate_id`),
  KEY `caci` (`affiliate_id`),
  CONSTRAINT `caci` FOREIGN KEY (`affiliate_id`) REFERENCES `cooperation_affiliate` (`id`),
  CONSTRAINT `ccci` FOREIGN KEY (`category_id`) REFERENCES `cooperation_category` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cooperation_category_affiliate`
--

LOCK TABLES `cooperation_category_affiliate` WRITE;
/*!40000 ALTER TABLE `cooperation_category_affiliate` DISABLE KEYS */;
INSERT INTO `cooperation_category_affiliate` VALUES (2,1),(2,2);
/*!40000 ALTER TABLE `cooperation_category_affiliate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cooperation_category_translation`
--

DROP TABLE IF EXISTS `cooperation_category_translation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cooperation_category_translation` (
  `id` bigint(20) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `lang` char(2) NOT NULL DEFAULT '',
  `slug` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`,`lang`),
  UNIQUE KEY `cooperation_category_translation_sluggable_idx` (`slug`,`lang`,`name`),
  CONSTRAINT `cooperation_category_translation_id_cooperation_category_id` FOREIGN KEY (`id`) REFERENCES `cooperation_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cooperation_category_translation`
--

LOCK TABLES `cooperation_category_translation` WRITE;
/*!40000 ALTER TABLE `cooperation_category_translation` DISABLE KEYS */;
INSERT INTO `cooperation_category_translation` VALUES (2,'品牌策划','en','brand planning'),(2,'品牌策划','fr','brand planning'),(1,'影视','en','film&TV'),(1,'影视','fr','film&TV'),(4,'News','en','news'),(4,'News','fr','news'),(5,'Notice','en','notice'),(5,'Notice','fr','notice'),(3,'专题','en','topic'),(3,'专题','fr','topic');
/*!40000 ALTER TABLE `cooperation_category_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cooperation_notice`
--

DROP TABLE IF EXISTS `cooperation_notice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cooperation_notice` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `company` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `position` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `how_to_apply` text NOT NULL,
  `token` varchar(255) NOT NULL,
  `is_public` tinyint(4) NOT NULL DEFAULT '1',
  `is_activated` tinyint(4) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `expires_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id_idx` (`category_id`),
  CONSTRAINT `cooperation_notice_category_id_cooperation_category_id` FOREIGN KEY (`category_id`) REFERENCES `cooperation_category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cooperation_notice`
--

LOCK TABLES `cooperation_notice` WRITE;
/*!40000 ALTER TABLE `cooperation_notice` DISABLE KEYS */;
INSERT INTO `cooperation_notice` VALUES (1,2,'full-time','Sensio Labs','sensio-labs.gif','http://www.sensiolabs.com/','Web Developer','Paris, France','You\'ve already developed websites with symfony and you want to work\nwith Open-Source technologies. You have a minimum of 3 years\nexperience in web development with PHP or Java and you wish to\nparticipate to development of Web 2.0 sites using the best\nframeworks available.\n','Send your resume to fabien.potencier [at] sensio.com\n','notice_sensio_labs',1,1,'notice@example.com','2017-10-10 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(2,1,'part-time','Extreme Sensio','extreme-sensio.gif','http://www.extreme-sensio.com/','Web Designer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do\neiusmod tempor incididunt ut labore et dolore magna aliqua. Ut\nenim ad minim veniam, quis nostrud exercitation ullamco laboris\nnisi ut aliquip ex ea commodo consequat. Duis aute irure dolor\nin reprehenderit in.\nVoluptate velit esse cillum dolore eu fugiat nulla pariatur.\nExcepteur sint occaecat cupidatat non proident, sunt in culpa\nqui officia deserunt mollit anim id est laborum.\n','Send your resume to fabien.potencier [at] sensio.com\n','notice_extreme_sensio',1,1,'notice@example.com','2017-10-10 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(3,2,NULL,'Sensio Labs',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] dolor.sit','notice_expired',1,1,'notice@example.com','2017-05-10 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(4,2,NULL,'Company 100',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_100.sit\n','notice_100',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(5,2,NULL,'Company 101',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_101.sit\n','notice_101',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(6,2,NULL,'Company 102',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_102.sit\n','notice_102',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(7,2,NULL,'Company 103',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_103.sit\n','notice_103',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(8,2,NULL,'Company 104',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_104.sit\n','notice_104',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(9,2,NULL,'Company 105',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_105.sit\n','notice_105',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(10,2,NULL,'Company 106',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_106.sit\n','notice_106',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(11,2,NULL,'Company 107',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_107.sit\n','notice_107',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(12,2,NULL,'Company 108',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_108.sit\n','notice_108',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(13,2,NULL,'Company 109',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_109.sit\n','notice_109',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(14,2,NULL,'Company 110',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_110.sit\n','notice_110',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(15,2,NULL,'Company 111',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_111.sit\n','notice_111',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(16,2,NULL,'Company 112',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_112.sit\n','notice_112',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(17,2,NULL,'Company 113',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_113.sit\n','notice_113',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(18,2,NULL,'Company 114',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_114.sit\n','notice_114',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(19,2,NULL,'Company 115',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_115.sit\n','notice_115',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(20,2,NULL,'Company 116',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_116.sit\n','notice_116',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(21,2,NULL,'Company 117',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_117.sit\n','notice_117',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(22,2,NULL,'Company 118',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_118.sit\n','notice_118',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(23,2,NULL,'Company 119',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_119.sit\n','notice_119',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(24,2,NULL,'Company 120',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_120.sit\n','notice_120',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(25,2,NULL,'Company 121',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_121.sit\n','notice_121',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(26,2,NULL,'Company 122',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_122.sit\n','notice_122',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(27,2,NULL,'Company 123',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_123.sit\n','notice_123',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(28,2,NULL,'Company 124',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_124.sit\n','notice_124',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(29,2,NULL,'Company 125',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_125.sit\n','notice_125',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(30,2,NULL,'Company 126',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_126.sit\n','notice_126',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(31,2,NULL,'Company 127',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_127.sit\n','notice_127',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(32,2,NULL,'Company 128',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_128.sit\n','notice_128',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(33,2,NULL,'Company 129',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_129.sit\n','notice_129',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42'),(34,2,NULL,'Company 130',NULL,NULL,'Web Developer','Paris, France','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','Send your resume to lorem.ipsum [at] company_130.sit\n','notice_130',1,1,'notice@example.com','2017-09-28 00:00:00','2017-05-10 00:00:00','2018-03-13 20:19:42');
/*!40000 ALTER TABLE `cooperation_notice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sf_guard_group`
--

DROP TABLE IF EXISTS `sf_guard_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sf_guard_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sf_guard_group`
--

LOCK TABLES `sf_guard_group` WRITE;
/*!40000 ALTER TABLE `sf_guard_group` DISABLE KEYS */;
INSERT INTO `sf_guard_group` VALUES (1,'admin','Administrator group','2018-03-13 20:19:42','2018-03-13 20:19:42');
/*!40000 ALTER TABLE `sf_guard_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sf_guard_group_permission`
--

DROP TABLE IF EXISTS `sf_guard_group_permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sf_guard_group_permission` (
  `group_id` int(11) NOT NULL DEFAULT '0',
  `permission_id` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`group_id`,`permission_id`),
  KEY `sf_guard_group_permission_permission_id_sf_guard_permission_id` (`permission_id`),
  CONSTRAINT `sf_guard_group_permission_group_id_sf_guard_group_id` FOREIGN KEY (`group_id`) REFERENCES `sf_guard_group` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sf_guard_group_permission_permission_id_sf_guard_permission_id` FOREIGN KEY (`permission_id`) REFERENCES `sf_guard_permission` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sf_guard_group_permission`
--

LOCK TABLES `sf_guard_group_permission` WRITE;
/*!40000 ALTER TABLE `sf_guard_group_permission` DISABLE KEYS */;
INSERT INTO `sf_guard_group_permission` VALUES (1,1,'2018-03-13 20:19:42','2018-03-13 20:19:42');
/*!40000 ALTER TABLE `sf_guard_group_permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sf_guard_permission`
--

DROP TABLE IF EXISTS `sf_guard_permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sf_guard_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sf_guard_permission`
--

LOCK TABLES `sf_guard_permission` WRITE;
/*!40000 ALTER TABLE `sf_guard_permission` DISABLE KEYS */;
INSERT INTO `sf_guard_permission` VALUES (1,'admin','Administrator permission','2018-03-13 20:19:42','2018-03-13 20:19:42');
/*!40000 ALTER TABLE `sf_guard_permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sf_guard_remember_key`
--

DROP TABLE IF EXISTS `sf_guard_remember_key`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sf_guard_remember_key` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `remember_key` varchar(32) DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`,`ip_address`),
  KEY `user_id_idx` (`user_id`),
  CONSTRAINT `sf_guard_remember_key_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sf_guard_remember_key`
--

LOCK TABLES `sf_guard_remember_key` WRITE;
/*!40000 ALTER TABLE `sf_guard_remember_key` DISABLE KEYS */;
/*!40000 ALTER TABLE `sf_guard_remember_key` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sf_guard_user`
--

DROP TABLE IF EXISTS `sf_guard_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sf_guard_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(128) DEFAULT NULL,
  `last_name` varchar(128) DEFAULT NULL,
  `email_address` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `algorithm` varchar(128) NOT NULL DEFAULT 'sha1',
  `salt` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `is_super_admin` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `is_active_idx_idx` (`is_active`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sf_guard_user`
--

LOCK TABLES `sf_guard_user` WRITE;
/*!40000 ALTER TABLE `sf_guard_user` DISABLE KEYS */;
INSERT INTO `sf_guard_user` VALUES (1,'John','Doe','john.doe@gmail.com','admin','sha1','9a16b518d86766d2b12aca669ded60c4','0dfaad3ca4a58f0bb0e0fe95e4621b06ee5d9af9',1,1,'2018-03-16 00:29:25','2018-03-13 20:19:42','2018-03-16 00:29:25');
/*!40000 ALTER TABLE `sf_guard_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sf_guard_user_group`
--

DROP TABLE IF EXISTS `sf_guard_user_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sf_guard_user_group` (
  `user_id` int(11) NOT NULL DEFAULT '0',
  `group_id` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `sf_guard_user_group_group_id_sf_guard_group_id` (`group_id`),
  CONSTRAINT `sf_guard_user_group_group_id_sf_guard_group_id` FOREIGN KEY (`group_id`) REFERENCES `sf_guard_group` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sf_guard_user_group_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sf_guard_user_group`
--

LOCK TABLES `sf_guard_user_group` WRITE;
/*!40000 ALTER TABLE `sf_guard_user_group` DISABLE KEYS */;
INSERT INTO `sf_guard_user_group` VALUES (1,1,'2018-03-13 20:19:42','2018-03-13 20:19:42');
/*!40000 ALTER TABLE `sf_guard_user_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sf_guard_user_permission`
--

DROP TABLE IF EXISTS `sf_guard_user_permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sf_guard_user_permission` (
  `user_id` int(11) NOT NULL DEFAULT '0',
  `permission_id` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`),
  KEY `sf_guard_user_permission_permission_id_sf_guard_permission_id` (`permission_id`),
  CONSTRAINT `sf_guard_user_permission_permission_id_sf_guard_permission_id` FOREIGN KEY (`permission_id`) REFERENCES `sf_guard_permission` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sf_guard_user_permission_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sf_guard_user_permission`
--

LOCK TABLES `sf_guard_user_permission` WRITE;
/*!40000 ALTER TABLE `sf_guard_user_permission` DISABLE KEYS */;
/*!40000 ALTER TABLE `sf_guard_user_permission` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-17 23:24:56
