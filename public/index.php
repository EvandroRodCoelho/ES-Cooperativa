<?php

use grupofatec\escooperativa\Controller\Error404Controller;
use grupofatec\escooperativa\Model\Infrastructure\Service\RedirectionManager;
use grupofatec\escooperativa\Model\Infrastructure\Service\SessionManager;

require_once __DIR__ . '/../vendor/autoload.php';

SessionManager::sessionStart();
SessionManager::sessionRegenerate();

$requestPath =  $_SERVER['PATH_INFO'] ?? '/';
$requestMethod = $_SERVER['REQUEST_METHOD'];
$routes = require_once __DIR__ . './../config/routes.php';
$logged = $_SESSION['logado'] ?? false;

if (!$logged && $requestPath !== '/login') {
    RedirectionManager::redirect(responseCode: 303);
}

$controllerClass = $routes["$requestMethod|$requestPath"] ?? Error404Controller::class;
$controller = new $controllerClass();
$controller->processRequest();