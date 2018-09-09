<?php
require __DIR__ . '/../vendor/autoload.php';
$ctrl = $_GET['ctrl'] ?? 'Index';
$class = '\coop\App\Controllers\\' . $ctrl;

$ctrl = new $class();

$ctrl();
