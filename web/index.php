<?php
// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$filename = 'todos.xml';
$todos = simplexml_load_file($filename);

$app->get('/', function () use ($app) {
    return 'Hello, Silex ';
});

$app->run();
?>
