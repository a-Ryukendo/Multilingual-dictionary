
DROP TABLE IF EXISTS `e2`;

CREATE TABLE `e2` (
  `id` int NOT NULL,
  `word` varchar(25) NOT NULL,
  `tos` varchar(25) NOT NULL,
  `synonym` varchar(30) ,
  `antonym` varchar(30) ,
  `defintion` text NOT NULL,
  `example` text NOT NULL,
  FOREIGN KEY(id) REFERENCES eng(id));

LOCK TABLES `e2` WRITE;
/*!40000 ALTER TABLE `e2` DISABLE KEYS */;
INSERT INTO `e2` VALUES('1','Apple','Noun','false fruit,Malus pumila','','The usually round, red or yellow, edible fruit of a small tree, Malus sylvestris, of the rose family.','An apple a day, keeps the doctor away'),('2','Beautiful','Adjective','attractive,good-looking','ugly,hideous','Pleasing the senses or mind aesthetically.','She spoke in beautiful English'),('3','Call','Noun','cry,yell','','a cry made as a summons or to attract someone\'s attention.','A nearby fisherman heard their calls for help'),('3','Call','Verb','shout,roar','','Cry out (a word or words)','He heard an insistent voice calling his name'),('4','Daffodil','Noun',' Narcissus','','Narcissus is a genus of predominantly spring flowering perennial plants of the amaryllis family, Amaryllidaceae','The daffodil is the national flower of Wales'),('5','Fury','Noun','rage,indignation,anger,huff','calmness,mildness','A feeling of intense anger','I could see the fury in her eyes');
UNLOCK TABLES;
