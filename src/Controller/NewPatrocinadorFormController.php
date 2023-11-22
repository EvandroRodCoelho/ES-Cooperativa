<?php

namespace grupofatec\escooperativa\Controller;

use grupofatec\escooperativa\Model\Infrastructure\Service\RedirectionManager;

class NewPatrocinadorFormController extends Controller implements RequestController
{

    public function processRequest(): void
    {
        if ($_SESSION['logado'] ?? false) {
            RedirectionManager::redirect(destination: 'dashboard-patrocinador', responseCode: 303);
        }

        require_once __DIR__ . '/../View/cadastro-patrocinador.php';
    }
}