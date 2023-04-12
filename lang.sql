DROP TABLE IF EXISTS `lang`;


CREATE TABLE `lang` (
  `id` int NOT NULL,
  `word` varchar(25) NOT NULL,
  `hword` varchar(25) NOT NULL,
  `gword` varchar(25) NOT NULL,
  `mword` varchar(25) NOT NULL,
  FOREIGN KEY(id) REFERENCES eng(id));
  
LOCK TABLES `lang` WRITE;
/*!40000 ALTER TABLE `lang` DISABLE KEYS */;
INSERT INTO `lang` VALUES('1','Apple','सेब','સફરજન','ആപ്പിൾ'),('2','Beautiful','सुंदर','સુંદર','മനോഹരം'),('3','Call','आह्वान','વિનંતી','ആഹ്വാനം'),('4','Daffodil','डैफोडिल','ડેફોડિલ','ഡാഫോഡിൽ '),('5','Fury','रोष','પ્રકોપ','ക്രോധം');
UNLOCK TABLES;
