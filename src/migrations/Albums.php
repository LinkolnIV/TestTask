<?php

$ddl = "CREATE TABLE `Albums` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL COMMENT 'Название',
  `description` varchar(450) NOT NULL COMMENT 'Описание ',
  `logo` varchar(255) NOT NULL COMMENT 'логотип',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci";