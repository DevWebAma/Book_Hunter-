<?php

namespace App\Models\BooksModel;

use \PDO;

function findAll(PDO $connexion, int $limit = 6): array {
 
  $sql = "SELECT *, c.name as categoriesName, a.firstname as authorsFirstname, a.lastname as authorsLastname, t.name as tagsName, un.note as usersNotations
          FROM books b
          INNER JOIN categories c ON b.category_id = c.id
          INNER JOIN authors a ON b.author_id = a.id 
          LEFT JOIN books_has_tags bht ON b.id = bht.book_id
          JOIN tags t ON t.id = bht.tag_id
          INNER JOIN users_notations un ON b.id = un.book_id
          ORDER BY b.created_at DESC
          LIMIT :limit;";

  $rs = $connexion -> prepare($sql);
  $rs -> bindValue(':limit', $limit, PDO::PARAM_INT);
  $rs -> execute();
  return $rs->fetchAll(PDO::FETCH_ASSOC);
}