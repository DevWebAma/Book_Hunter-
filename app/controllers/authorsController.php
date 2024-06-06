<?php
namespace App\controllers\AuthorsController;

use \PDO;

function indexAction (PDO $connexion) {

  include_once '../app/models/authorsModel.php';
  $authors = \App\Models\AuthorsModel\findAll($connexion, 6);

  global $content, $title;

  $title = "Catalogue";
  ob_start();
  include '../app/views/authors/index.php';
  $content = ob_get_clean();
}