<?php

namespace grupofatec\escooperativa\Controller;

use DomainException;
use grupofatec\escooperativa\Model\Infrastructure\Service\Authenticator;
use grupofatec\escooperativa\Model\Infrastructure\Service\RedirectionManager;
use InvalidArgumentException;

class LoginController extends Controller implements RequestController
{

    public function processRequest(): void
    {
        if (!isset($_POST['email']) || !isset($_POST['senha'])) {
            RedirectionManager::redirect(responseCode: 400);
        }

        try {

            $patrocinador = $this->repository->userByEmail($_POST['email']);
            $correctPassword = Authenticator::authenticate($patrocinador, $_POST['senha']);

            if (!$correctPassword) {
                RedirectionManager::redirect(responseCode: 303);
            }

            $_SESSION['logado'] = true;
            RedirectionManager::redirect(destination: 'dashboard-patrocinador', responseCode: 303);

        } catch (InvalidArgumentException | DomainException $exception) {

            RedirectionManager::redirect(responseCode: 303);

        }
    }
}