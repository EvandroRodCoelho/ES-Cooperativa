<?php

namespace grupofatec\escooperativa\Controller;

use DomainException;
use grupofatec\escooperativa\Model\Infrastructure\Service\RedirectionManager;

class DeletePontoDeColetaController extends Controller implements RequestController
{

    public function processRequest(): void
    {
        if (!isset($_GET['id'])) {
            RedirectionManager::redirect(responseCode: 400);
        }

        try {

            if ($this->repository->deletePontoDeColeta($_GET['id'], $_SESSION['id'])) {
                RedirectionManager::redirect(responseCode: 303, params: ['sucesso' => 1]);
            } else {
                RedirectionManager::redirect(responseCode: 303, params: ['erro' => 1]);
            }

        } catch (DomainException $exception) {

            RedirectionManager::redirect(responseCode: 400);

        }
    }
}