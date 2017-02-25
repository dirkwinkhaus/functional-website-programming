<?php

return function ($controller, $action, $services) {
    $homeController = include 'controller/homeController/homeController.php';

    switch ($controller) {
        case 'home':
            return $homeController($action, $services);
    }

    return null;
};