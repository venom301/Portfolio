<?php

//load basepath for all files
function basePath($path)
{
    return __DIR__ . '/' . $path;
}

//load a view
function loadView($name, array $data = [])
{
    // extract array keys to local variables for convenience in views
    if (!empty($data)) {
        extract($data, EXTR_SKIP);
    }

    include basePath('app/views/' . $name . '.view.php');
}

//load a partial
function loadPartial($name)
{
    include basePath('includes/' . $name . '.inc.php');
}
