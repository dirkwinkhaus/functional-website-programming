<?php

return function ($action, $serviceManagerFunction)
{
    $indexActionFactoryFunction = include 'indexAction/indexActionFactoryFunction.php';

    switch ($action) {
        case 'index':
            return $indexActionFactoryFunction($serviceManagerFunction);
    }

    return null;
};