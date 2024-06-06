<?php

namespace App\Models\CategoriesModel;

use \PDO;

function findAll(PDO $connexion): array {
 
  $sql = "SELECT *
          FROM categories
          ORDER BY name ASC
          LIMIT 4;";

  return $connexion -> query($sql)->fetchAll(PDO::FETCH_ASSOC);
}