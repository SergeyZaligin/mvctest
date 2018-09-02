<?php
require __DIR__ . '/vendor/autoload.php';
use coop\app\models\Article;
use coop\app\models\User;

$news = User::findAll();

echo "<pre>";
print_r($news);
echo "</pre>";
