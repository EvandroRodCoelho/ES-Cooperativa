<?php

namespace grupofatec\escooperativa\Controller;

use grupofatec\escooperativa\Model\Infrastructure\Repository\PdoRepository;

interface RequestController
{
    public function processRequest():void;
}