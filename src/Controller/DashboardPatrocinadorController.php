<?php

namespace grupofatec\escooperativa\Controller;

class DashboardPatrocinadorController extends Controller implements RequestController
{

    public function processRequest(): void
    {
        echo <<<FIM
        <p>Patrocinador logado</p>
        <a href="./logout">Logout</a>
        FIM;
    }
}