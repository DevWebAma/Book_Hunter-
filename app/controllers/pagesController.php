<?php
namespace App\controllers\PagesController;

use \PDO;

function homeAction (PDO $connexion) {

  include_once '../app/models/booksModel.php';
  $books = \App\Models\BooksModel\findAll($connexion);

  include_once '../app/models/authorsModel.php';
  $authors = \App\Models\AuthorsModel\findAll($connexion);

  global $content, $title;

  $title = "HomePage";
  ob_start();
  include '../app/views/pages/home.php';
  $content = ob_get_clean();
}