<?php

use grupofatec\escooperativa\Controller\Error404Controller;
use grupofatec\escooperativa\Model\Infrastructure\Persistence\MySQLConnectionCreator;
use grupofatec\escooperativa\Model\Infrastructure\Repository\PdoPatrocinadorRepository;
use grupofatec\escooperativa\Model\Infrastructure\Repository\PdoPontoDeColetaRepository;
use grupofatec\escooperativa\Model\Infrastructure\Service\RedirectionManager;
use grupofatec\escooperativa\Model\Infrastructure\Service\SessionManager;

require_once __DIR__ . '/../vendor/autoload.php';

SessionManager::sessionStart();
SessionManager::sessionRegenerate();

$requestPath =  $_SERVER['PATH_INFO'] ?? '/';
$requestMethod = $_SERVER['REQUEST_METHOD'];
$requiredRoute = "$requestMethod|$requestPath";
$routes = require_once __DIR__ . './../config/routes.php';
$logged = $_SESSION['logado'] ?? false;

if (!$logged && $requestPath !== '/' && $requestPath !== '/novo-patrocinador') {
    RedirectionManager::redirect(responseCode: 303);
}

$controllerClass = $routes[$requiredRoute] ?? Error404Controller::class;
switch ($requiredRoute) {
    case 'POST|/':
    case 'POST|/novo-patrocinador':
        $repository = new PdoPatrocinadorRepository(MySQLConnectionCreator::createConnection());
        $controller = new $controllerClass($repository);
        break;
    case 'GET|/dashboard-patrocinador':
    case 'POST|/novo-ponto-de-coleta':
    case 'GET|/editar-ponto-de-coleta':
    case 'POST|/editar-ponto-de-coleta':
    case 'GET|/deletar-ponto-de-coleta':
        $repository = new PdoPontoDeColetaRepository(MySQLConnectionCreator::createConnection());
        $controller = new $controllerClass($repository);
        break;
    default:
        $controller = new $controllerClass();
}
$controller->processRequest();