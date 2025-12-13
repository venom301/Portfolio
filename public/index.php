<?php

require '../Router.php';

$router = new Router();

$router->get('/', function () {
    loadView('home');
});

$router->get('/about', function () {
    loadView('about');
});

$router->get('/portfolio', function () {
    $projects = require __DIR__ . '/' . '../data.php';
    loadView('portfolio', ['projects' => $projects]);
});

$router->get('/contact', function () {
    loadView('contact');
});

$router->resolve();
