<?php

namespace coop\App\Controllers;
use coop\App\View;
use coop\App\Controller;

class Article extends Controller
{
  public function __invoke()
  {
    $this->view->article = \coop\App\Models\Article::findOneById($_GET['id']);
    $this->view->display(__DIR__ . '/../../templates/article.php');
  }
}
