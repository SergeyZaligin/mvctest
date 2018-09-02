<?php
require __DIR__ . '/vendor/autoload.php';
use coop\app\models\Article;

$news = Article::findAll();

echo "<pre>";
print_r($news);
echo "</pre>";
