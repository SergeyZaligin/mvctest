<?php
require __DIR__ . '/../vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];

$paths = explode('/', $uri);

$ctrl = $paths[1] ? ucfirst($paths[1]): 'Index';

$class = '\coop\App\Controllers\\' . $ctrl;

$ctrl = new $class();

$ctrl();
