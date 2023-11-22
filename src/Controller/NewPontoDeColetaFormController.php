<?php

namespace grupofatec\escooperativa\Controller;

use DomainException;
use grupofatec\escooperativa\Model\Infrastructure\Service\RedirectionManager;
use InvalidArgumentException;

class NewPontoDeColetaFormController extends Controller implements RequestController
{

    public function processRequest(): void
    {
        $pontoDeColeta = null;

        if (isset($_GET['id'])) {
            try {

                $pontoDeColeta = $this->repository->pontoDeColetaById($_GET['id']);

            } catch (InvalidArgumentException | DomainException $exception) {

                RedirectionManager::redirect(responseCode: 400);

            }
        }

        require_once __DIR__ . './../View/criar-pontoColeta.php';
    }
}