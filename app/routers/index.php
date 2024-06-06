<?php 
if (isset($_GET['books'])):
  include_once '../app/controllers/booksController.php';
  \app\controllers\BooksController\indexAction($connexion);
else:
include_once '../app/controllers/pagesController.php';
\app\controllers\PagesController\homeAction($connexion);
endif;