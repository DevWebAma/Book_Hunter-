<?php

namespace App\Models\AuthorsModel;

use \PDO;

function findAll(PDO $connexion, int $limit = 6): array {
 
  $sql = "SELECT *, un.note as usersNotations
          FROM authors a
          INNER JOIN books b ON b.author_id = a.id 
          INNER JOIN users_notations un ON b.id = un.book_id
          ORDER BY b.created_at DESC
          LIMIT :limit;";

$rs = $connexion -> prepare($sql);
$rs -> bindValue(':limit', $limit, PDO::PARAM_INT);
$rs -> execute();
return $rs->fetchAll(PDO::FETCH_ASSOC);
}