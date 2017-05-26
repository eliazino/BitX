<?php
session_start();
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
require '../src/config/db.php';
require '../src/config/mcrypt.php';
$app = new \Slim\App;
$app->get('/', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
});
require '../src/routes/admin.php';
$app->run();
?>