<?php

namespace grupofatec\escooperativa\Model\Infrastructure\Repository;

use PDO;

abstract class PdoRepository
{
    protected PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
}