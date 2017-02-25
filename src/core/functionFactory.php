<?php

namespace Core;

/**
 * @return \Closure
 */
function getApplicationFunction()
{
    return include 'application.php';
}

/**
 * @return \Closure
 */
function getRouterFunction()
{
    return include 'router.php';
}


/**
 * @return \Closure
 */
function getControllerManagerFunction()
{
    return include 'controllerManager.php';
}

/**
 * @return \Closure
 */
function getDispatcherFunction()
{
    return include 'dispatcher.php';
}

/**
 * @return \Closure
 */
function getServiceManagerFunction()
{
    return include 'service.php';
}