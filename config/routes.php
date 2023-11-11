<?php
return [
    'GET|/' => \grupofatec\escooperativa\Controller\LoginFormController::class,
    'POST|/' => \grupofatec\escooperativa\Controller\LoginController::class,
    'GET|/dashboard-patrocinador' => \grupofatec\escooperativa\Controller\DashboardPatrocinadorController::class,
    'GET|/formulario-ponto-de-coleta' => \grupofatec\escooperativa\Controller\PontoDeColetaFormController::class,
    'POST|/formulario-ponto-de-coleta' => \grupofatec\escooperativa\Controller\NewPontoDeColetaController::class,
    'GET|/novo-patrocinador' => \grupofatec\escooperativa\Controller\PatrocinadorFormController::class,
    'POST|/novo-patrocinador' => \grupofatec\escooperativa\Controller\NewPatrocinadorController::class,
    'GET|/logout' => \grupofatec\escooperativa\Controller\LogoutController::class
];