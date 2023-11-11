<?php

namespace grupofatec\escooperativa\Controller;

use grupofatec\escooperativa\Model\Infrastructure\Repository\PdoRepository;

abstract class Controller
{
    protected PdoRepository|null $repository;

    public function __construct(PdoRepository $repository = null)
    {
        $this->repository = $repository;
    }
}