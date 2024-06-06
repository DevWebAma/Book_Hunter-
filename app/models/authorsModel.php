<?php

namespace App\Models\AuthorsModel;

use \PDO;

function findAll(PDO $connexion): array {
 
  $sql = "SELECT *, un.note as usersNotations
          FROM authors a
          INNER JOIN books b ON b.author_id = a.id 
          INNER JOIN users_notations un ON b.id = un.book_id
          ORDER BY b.created_at DESC
          LIMIT 3;";

  return $connexion -> query($sql)->fetchAll(PDO::FETCH_ASSOC);
}