<?php
require __DIR__ . '/vendor/autoload.php';
use coop\app\Db;
$db = new Db;
$news = $db->query("SELECT * FROM news");
print_r($news);
