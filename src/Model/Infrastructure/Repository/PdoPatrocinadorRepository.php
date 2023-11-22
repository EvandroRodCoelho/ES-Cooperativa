<?php

namespace grupofatec\escooperativa\Model\Infrastructure\Repository;

use grupofatec\escooperativa\Model\Domain\Entity\Patrocinador;
use grupofatec\escooperativa\Model\Domain\Repository\PatrocinadorRepository;

class PdoPatrocinadorRepository extends PdoRepository implements PatrocinadorRepository
{

    public function createUser(Patrocinador $user): bool
    {
        $insertQuery = 'INSERT INTO patrocinador (CnpjPatrocinador, NomePatrocinador, TelefonePatrocinador, EmailPatrocinador, SenhaPatrocinador) VALUES (:cnpj, :nome, :telefone, :email, :senha);';
        $statement = $this->pdo->prepare($insertQuery);
        $statement->bindValue(':cnpj', $user->cnpj);
        $statement->bindValue(':nome', $user->nome);
        $statement->bindValue(':telefone', $user->telefone);
        $statement->bindValue(':email', $user->email);
        $statement->bindValue(':senha', password_hash($user->password, PASSWORD_ARGON2ID));
        $result =  $statement->execute();

        $user->setId($this->pdo->lastInsertId());

        return $result;
    }

    public function userByEmail(string $email): Patrocinador|null
    {
        $readQuery = 'SELECT * FROM patrocinador WHERE EmailPatrocinador = :email;';
        $statement = $this->pdo->prepare($readQuery);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $queryResult = $statement->fetch();

        return $this->hydrateUser($queryResult);
    }

    private function hydrateUser(array|false $queryResult): Patrocinador|null
    {
        $user = new Patrocinador(
            $queryResult['EmailPatrocinador'] ?? 'email@email.com',
            $queryResult['SenhaPatrocinador'] ?? 'passwordpassword',
            $queryResult['CnpjPatrocinador'] ?? '11444777000161',
            $queryResult['NomePatrocinador'] ?? 'joaojoao',
            $queryResult['TelefonePatrocinador'] ?? '11999999999'
        );
        $user->setId($queryResult['IdPatrocinador'] ?? '123');

        return $queryResult ? $user : null;
    }
}