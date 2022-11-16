DROP TABLE IF EXISTS `tabela_alunos`;

CREATE TABLE `tabela_alunos` (
  `aluno` varchar(200) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `matricula` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


LOCK TABLES `tabela_alunos` WRITE;
INSERT INTO `tabela_alunos` VALUES ('Sérgio','Aquiraz','7533'),('Rawrawraw','Pindamonhangaba','666'),('aaaaa','Ico','23456'),('aaaaa','Ico','23456');
UNLOCK TABLES;
