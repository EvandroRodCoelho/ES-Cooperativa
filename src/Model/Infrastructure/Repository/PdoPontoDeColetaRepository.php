<?php

namespace grupofatec\escooperativa\Model\Infrastructure\Repository;

use grupofatec\escooperativa\Model\Domain\Entity\PontoDeColeta;
use grupofatec\escooperativa\Model\Domain\Repository\PontoDeColetaRepository;
use PDO;

class PdoPontoDeColetaRepository extends PdoRepository implements PontoDeColetaRepository
{

    public function addPontoDeColeta(PontoDeColeta $pontoDeColeta): bool
    {
        $insertQuery = "INSERT INTO ponto_coleta (IdPatrocinador, NomePontoColeta, EndereçoPontoColeta) VALUES (:idPatrocinador, :nome, :endereco);";
        $statement = $this->pdo->prepare($insertQuery);
        $statement->bindValue(':idPatrocinador', $_SESSION['id']);
        $statement->bindValue(':nome', $pontoDeColeta->nome);
        $statement->bindValue(':endereco', $pontoDeColeta->endereco);
        $result = $statement->execute();

        $pontoDeColeta->setId($this->pdo->lastInsertId());

        return $result;
    }

    public function deletePontoDeColeta(int $pontoDeColetaId, int $patrocinadorId): bool
    {
        $deleteQuery = "DELETE FROM ponto_coleta WHERE IdPontoColeta = :pontoDeColetaId AND IdPatrocinador = :patrocinadorId;";
        $statement = $this->pdo->prepare($deleteQuery);
        $statement->bindValue(':pontoDeColetaId', $pontoDeColetaId);
        $statement->bindValue(':patrocinadorId', $patrocinadorId);

        return $statement->execute();
    }

    public function updatePontoDeColeta(PontoDeColeta $pontoDeColeta): bool
    {
        $updateQuery = "UPDATE ponto_coleta SET NomePontoColeta = :nome, EndereçoPontoColeta = :endereco WHERE IdPontoColeta = :id;";
        $statement = $this->pdo->prepare($updateQuery);
        $statement->bindValue(':nome', $pontoDeColeta->nome);
        $statement->bindValue(':endereco', $pontoDeColeta->endereco);
        $statement->bindValue(':id', $pontoDeColeta->id, PDO::PARAM_INT);

        return $statement->execute();
    }

    /**
     * @inheritDoc
     */
    public function allPontosDeColeta(): array
    {
        $readQuery = "SELECT * FROM ponto_coleta WHERE IdPatrocinador = :id;";
        $statement = $this->pdo->prepare($readQuery);
        $statement->bindValue(':id', $_SESSION['id'], PDO::PARAM_INT);
        $statement->execute();
        $queryResult = $statement->fetchAll();

        return array_map(function (array $pontoDeColetaData) {
            return $this->hydratePontoDeColeta($pontoDeColetaData);
        }, $queryResult);
    }

    public function pontoDeColetaById(int $id): PontoDeColeta
    {
        $readQuery = "SELECT * FROM ponto_coleta WHERE IdPontoColeta = ?;";
        $statement = $this->pdo->prepare($readQuery);
        $statement->bindValue(1, $id);
        $statement->execute();
        $queryResult = $statement->fetch();

        return $this->hydratePontoDeColeta($queryResult);
    }

    /**
     * @param string[] $pontoDeColetaData
     * @return PontoDeColeta
     */
    private function hydratePontoDeColeta(array $pontoDeColetaData): PontoDeColeta
    {
        $pontoDeColeta = new PontoDeColeta(
            $pontoDeColetaData['NomePontoColeta'],
            $pontoDeColetaData['EndereçoPontoColeta']
        );
        $pontoDeColeta->setId($pontoDeColetaData['IdPontoColeta']);

        return $pontoDeColeta;
    }
}