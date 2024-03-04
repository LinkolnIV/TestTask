<?php

$ddl = "CREATE TABLE `AlbumsPictures` (
    `idAlbums` int NOT NULL,
    `idPictures` int NOT NULL,
    PRIMARY KEY (`idAlbums`,`idPictures`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci";