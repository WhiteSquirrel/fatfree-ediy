<?php

setlocale(LC_ALL, 'ru_RU.UTF-8');

$f3=require('lib/base.php');

$f3->config('app/config.ini');

//$f3->config('app/routes.ini');

$f3->redirect('GET /category', '/category/news');

$f3->route('GET /', 'HomeController->view');
$f3->route('GET /category/@name', 'CategoriesController->view');
$f3->route('GET /category/@name/@pageIndex', 'CategoriesController->view');
//$f3->alias('complex', 'name=news,pageIndex=1');

$f3->route('GET /@year/@month/@slug', 'PostController->view');
$f3->route('GET /about', 'AboutController->view');
$f3->route('GET /contacts', 'ContactsController->view');

$f3->run();