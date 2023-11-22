<?php

namespace grupofatec\escooperativa\Controller;

use DomainException;
use grupofatec\escooperativa\Model\Domain\Entity\PontoDeColeta;
use grupofatec\escooperativa\Model\Infrastructure\Service\RedirectionManager;
use InvalidArgumentException;

class EditPontoDeColetaController extends Controller implements RequestController
{

    public function processRequest(): void
    {
        if (!isset($_POST['id']) || !isset($_POST['cidade']) || !isset($_POST['estados']) || !isset($_POST['cep']) || !isset($_POST['logradouro']) || !isset($_POST['numero']) || !isset($_POST['bairro']) || !isset($_POST['nome'])) {
            RedirectionManager::redirect(responseCode: 400);
        }

        try {

            $endereco = $_POST['logradouro'] . ',' . $_POST['numero'] . ',' . ($_POST['complemento'] ?? '') . ',' . $_POST['bairro'] . ',' . $_POST['cidade'] . ',' . $_POST['estados'] . ',' . $_POST['cep'];

            $pontoDeColeta = new PontoDeColeta(
                $_POST['nome'],
                $endereco
            );
            $pontoDeColeta->setId($_POST['id']);

            $operationSuccess = $this->repository->updatePontoDeColeta($pontoDeColeta);

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