<?php

$ddl ="CREATE TABLE `Users` (
    `id` int NOT NULL AUTO_INCREMENT,
    `roles` varchar(45) NOT NULL,
    `password` varchar(255) NOT NULL,
    `name` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci";