<?php
require __DIR__ . '/vendor/autoload.php';
use coop\App\Models\Article;
use coop\App\Models\User;
use coop\App\View;

$view = new View();

$view->article = Article::findOneById($_GET['id']);

$view->display(__DIR__ . '/templates/article.php');
