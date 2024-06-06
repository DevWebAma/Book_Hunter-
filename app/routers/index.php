<?php 
if (isset($_GET['books'])):
  include_once '../app/controllers/booksController.php';
  \app\controllers\BooksController\indexAction($connexion);
elseif (isset($_GET['authors'])):
  include_once '../app/controllers/authorsController.php';
  \app\controllers\AuthorsController\indexAction($connexion);
elseif (isset($_GET['home'])):
  include_once '../app/controllers/pagesController.php';
  \app\controllers\PagesController\homeAction($connexion);
else:
include_once '../app/controllers/pagesController.php';
\app\controllers\PagesController\homeAction($connexion);
endif;