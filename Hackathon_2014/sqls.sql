--Tabela membros

CREATE TABLE members (
id int NOT NULL auto_increment,
username varchar(65) NOT NULL default '',
password varchar(65) NOT NULL default '',
PRIMARY KEY (id)
);
-- 
-- Dumping data for table `members`
--
INSERT INTO `members` VALUES (1, 'john', '1234');
