<?php
require __DIR__ . '/vendor/autoload.php';
use coop\app\models\Article;
use coop\app\models\User;

$news = User::findAll();
$article = new Article();

$article->title = "Новый тайтл";
$article->content = "Новый контент";
$article->visible = 1;

$article->insert();

echo "<pre>";
print_r($article);
echo "</pre>";
