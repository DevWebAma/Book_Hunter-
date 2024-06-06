<?php

namespace App\Models\TagsModel;

use \PDO;

function findAll(PDO $connexion): array {
 
  $sql = "SELECT *
          FROM tags
          ORDER BY name ASC
          LIMIT 4;";

  return $connexion -> query($sql)->fetchAll(PDO::FETCH_ASSOC);
}