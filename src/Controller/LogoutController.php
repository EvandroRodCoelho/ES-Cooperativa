<?php

namespace grupofatec\escooperativa\Controller;

use grupofatec\escooperativa\Model\Infrastructure\Service\RedirectionManager;
use JetBrains\PhpStorm\NoReturn;

class LogoutController extends Controller implements RequestController
{

    #[NoReturn] public function processRequest(): void
    {
        unset($_SESSION['logado']);
        RedirectionManager::redirect(responseCode: 303);
    }
}