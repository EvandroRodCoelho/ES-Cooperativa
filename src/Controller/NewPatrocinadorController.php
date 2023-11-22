<?php

namespace grupofatec\escooperativa\Controller;

use DomainException;
use grupofatec\escooperativa\Model\Domain\Entity\Patrocinador;
use grupofatec\escooperativa\Model\Infrastructure\Service\RedirectionManager;
use InvalidArgumentException;

class NewPatrocinadorController extends Controller implements RequestController
{

    public function processRequest(): void
    {
        if (!isset($_POST['nome']) || !isset($_POST['cnpj']) || !isset($_POST['email']) || !isset($_POST['telefone']) || !isset($_POST['senha']) || !isset($_POST['confirmarSenha'])) {
            RedirectionManager::redirect(responseCode: 400);
        }

        if ($_POST['senha'] !== $_POST['confirmarSenha']) {
            RedirectionManager::redirect('novo-patrocinador', 303);
        }

        try {

            $patrocinador = new Patrocinador(
                $_POST['email'],
                $_POST['senha'],
                $_POST['cnpj'],
                $_POST['nome'],
                $_POST['telefone']
            );

            $operationSuccess = $this->repository->createUser($patrocinador);

            if ($operationSuccess) {
                RedirectionManager::redirect(responseCode: 303, params: ['sucesso' => 1]);
            } else {
                RedirectionManager::redirect(responseCode: 500);
            }

        } catch (InvalidArgumentException | DomainException $exception) {

            RedirectionManager::redirect(responseCode: 303, params: ['erro' => 1]);

        }
    }
}