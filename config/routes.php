<?php
return [
    'GET|/' => \grupofatec\escooperativa\Controller\LoginFormController::class,
    'POST|/' => \grupofatec\escooperativa\Controller\LoginController::class,
    'GET|/dashboard-patrocinador' => \grupofatec\escooperativa\Controller\DashboardPatrocinadorController::class,
    'GET|/novo-ponto-de-coleta' => \grupofatec\escooperativa\Controller\NewPontoDeColetaFormController::class,
    'POST|/novo-ponto-de-coleta' => \grupofatec\escooperativa\Controller\NewPontoDeColetaController::class,
    'GET|/novo-patrocinador' => \grupofatec\escooperativa\Controller\NewPatrocinadorFormController::class,
    'POST|/novo-patrocinador' => \grupofatec\escooperativa\Controller\NewPatrocinadorController::class,
    'GET|/logout' => \grupofatec\escooperativa\Controller\LogoutController::class,
    'GET|/editar-ponto-de-coleta' => \grupofatec\escooperativa\Controller\NewPontoDeColetaFormController::class,
    'POST|/editar-ponto-de-coleta' => \grupofatec\escooperativa\Controller\EditPontoDeColetaController::class,
    'GET|/deletar-ponto-de-coleta' => \grupofatec\escooperativa\Controller\DeletePontoDeColetaController::class,
];