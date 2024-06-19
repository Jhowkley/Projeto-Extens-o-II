<?php

function autoload($classe)
{
    $basedir = __DIR__ . DIRECTORY_SEPARATOR;
    $classe = $basedir . 'app' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $classe) . '.php';
    if (file_exists($classe) && !is_dir($classe)) {
        include $classe;
    }

}
spl_autoload_register('autoload');