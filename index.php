<?php
require __DIR__ . '/vendor/autoload.php';
use coop\app\models\Article;
use coop\app\models\User;
use coop\app\View;

$view = new View();

$view->articles = Article::findAll();

$view->display(__DIR__ . '/templates/index.php');

// $article->insert();
//
// echo "<pre>";
// print_r($article);
// echo "</pre>";
