<?php
  $pdo = new PDO("sqlite:chinook.db");
  $statement = $pdo->prepare('SELECT * FROM tracks');
  $statement->execute();
  $tracks = $statement->fetchAll();

  echo count($tracks);
