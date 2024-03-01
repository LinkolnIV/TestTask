<?php

$ddl = "CREATE TABLE `Pictures` (
  `id` int NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL COMMENT 'путь к картинке',
  `description` varchar(400) DEFAULT NULL COMMENT 'описание',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci";