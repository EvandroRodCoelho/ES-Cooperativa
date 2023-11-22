<?php

namespace grupofatec\escooperativa\Model\Domain\Repository;

use grupofatec\escooperativa\Model\Domain\Entity\PontoDeColeta;

interface PontoDeColetaRepository
{
    public function addPontoDeColeta(PontoDeColeta $pontoDeColeta):bool;

    public function deletePontoDeColeta(int $pontoDeColetaId, int $patrocinadorId):bool;

    public function updatePontoDeColeta(PontoDeColeta $pontoDeColeta):bool;

    /**
     * @return PontoDeColeta[]
     */
    public function allPontosDeColeta(): array;

    public function pontoDeColetaById(int $id): PontoDeColeta;
}