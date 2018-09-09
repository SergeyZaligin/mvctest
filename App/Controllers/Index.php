<?php

namespace coop\App\Controllers;
use coop\App\Models\Article;
use coop\App\Controller;
use coop\App\View;

class Index extends Controller
{
  protected function handle()
  {
    $this->view->articles = Article::findAll();
    $this->view->display(__DIR__ . '/../../templates/index.php');
  }
}
