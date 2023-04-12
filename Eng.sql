DROP TABLE IF EXISTS `eng`;

CREATE TABLE `eng` (
  `id` int NOT NULL PRIMARY KEY,
  `word` varchar(25) NOT NULL,
  `syllable` varchar(25),
  `Pro` varchar(25),
  `sname` varchar(30),
  `img` blob);

LOCK TABLES `eng` WRITE;
/*!40000 ALTER TABLE `eng` DISABLE KEYS */;
INSERT INTO `eng` VALUES('1','Apple','A-pple',' /ˈæp.əl/','Malus Domestica',LOAD_FILE('/var/www/html/apple.jpg')),('2','Beautiful','beau-ti-ful','/ˈbjuː.tɪ.fəl/','',NULL),('3','Call','call','/kɔːl/','',NULL),('4','Daffodil','daf-fo-dil','/ˈdæf.ə.dɪl/','Narcissus',LOAD_FILE('/var/www/html/daffodil.jpeg')),('5','Fury','fu-ry','/ˈfjʊə.ri/','',NULL);
UNLOCK TABLES;
