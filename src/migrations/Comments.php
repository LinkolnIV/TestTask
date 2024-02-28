<?php

$ddl="CREATE TABLE `Comments` (
    `id` int NOT NULL,
    `userid` int NOT NULL COMMENT 'Пользлователь',
    `pictureId` int NOT NULL COMMENT 'картинка',
    `comment` varchar(45) DEFAULT NULL,
    `date` datetime DEFAULT NULL COMMENT 'дата публикации',
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci";