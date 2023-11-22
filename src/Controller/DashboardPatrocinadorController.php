<?php

namespace grupofatec\escooperativa\Controller;

class DashboardPatrocinadorController extends Controller implements RequestController
{

    public function processRequest(): void
    {
        $pontosColeta = $this->repository->allPontosDeColeta();

        require_once __DIR__ . '/../View/listar-pontosColeta.php';
    }
}