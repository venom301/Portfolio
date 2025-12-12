<?php

//load basepath for all files
function basePath($path)
{
    return __DIR__ . '/' . $path;
}

//load a view
function loadView($name)
{
    include basePath('app/views/' . $name . '.view.php');
}

//load a partial
function loadPartial($name)
{
    include basePath('includes/' . $name . '.inc.php');
}
