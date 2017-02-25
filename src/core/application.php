<?php

namespace Core;

return
    function (
        callable $router,
        callable $controllerManager,
        callable $dispatcher,
        callable $serviceManagerFunction,
        array $config,
        array $serverData
    ) {
        $route = $router($serverData['PATH_INFO']);

        if ($route === null) {
            throw new \RuntimeException('Page not found!');
        }

        $viewVariables = $controllerManager(
            $route['module'],
            $route['controller'],
            $route['action'],
            $serviceManagerFunction
        );

        $dispatcher(
            $config['view_manager']['layout'],
            $route['module'],
            $route['template'],
            $viewVariables
        );

    };

