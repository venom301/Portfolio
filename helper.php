<?php

//load basepath for all files
function basePath($path){
    return __DIR__ . '/' . $path;
}

//load a view
function loadView($name){
    return require basePath('app/views/' . $name . '.view.php');
}

//load a partial
function loadPartial($name){
    return require basePath('includes/' . $name . '.inc.php');
}