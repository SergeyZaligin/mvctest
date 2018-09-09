<?php
require __DIR__ . '/vendor/autoload.php';
use coop\App\Models\Article;
use coop\App\Models\User;
use coop\App\View;

$view = new View();

$view->articles = Article::findAll();

$view->display(__DIR__ . '/templates/index.php');

// $article->insert();
//
// echo "<pre>";
// print_r($article);
// echo "</pre>";
