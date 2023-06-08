<?php

session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'helper.php';

$router = new AjaxExecutePhpFunction\Router($_SERVER["REQUEST_URI"]);
//Index of the webPage
$router -> get('/', "AjaxExecutePhpFunctionController@index"); // Page accueil

$router -> post('/example', "AjaxExecutePhpFunctionController@example"); // Example Post;
$router -> post('/addComment', "AjaxExecutePhpFunctionController@addComment");
$router->run();