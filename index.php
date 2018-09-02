<?php
require __DIR__ . '/vendor/autoload.php';
use coop\app\models\Article;

$article = new Article();
$news = $article->findAll();

echo "<pre>";
print_r($news);
echo "</pre>";
