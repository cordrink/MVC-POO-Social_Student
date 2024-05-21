<?php

function includeClass($className): void
{
    if (file_exists($file = __DIR__. '/' . $className . '.class.php')){
        require $file;
    }
}

spl_autoload_register('includeClass');

