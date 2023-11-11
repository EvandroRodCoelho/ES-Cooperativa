<?php

namespace grupofatec\escooperativa\Model\Domain\Repository;

use grupofatec\escooperativa\Model\Domain\Entity\Patrocinador;

interface PatrocinadorRepository
{
    public function createUser(Patrocinador $user): bool;

    public function userByEmail(string $email): Patrocinador|null;
}