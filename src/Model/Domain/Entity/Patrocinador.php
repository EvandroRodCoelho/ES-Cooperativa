<?php

namespace grupofatec\escooperativa\Model\Domain\Entity;

use DomainException;
use InvalidArgumentException;

class Patrocinador
{
    public readonly int $id;
    public readonly string $email;
    public readonly string $password;
    public readonly int $cnpj;
    public readonly string $nome;
    public readonly int $telefone;

    /**
     * @param string $email
     * @param string $password
     * @param string $cnpj
     * @param string $nome
     * @param string $telefone
     */
    public function __construct(string $email, string $password, string $cnpj, string $nome, string $telefone)
    {
        $this->email = $this->filterEmail($email);
        $this->password = $this->filterPassword($password);
        $this->cnpj = $this->filterCNPJ($cnpj);
        $this->nome = $this->filterNome($nome);
        $this->telefone = $this->filterTelefone($telefone);
    }

    private function filterEmail(string $email): string
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('Email inválido.');
        }

        return $email;
    }

    private function filterPassword(string $password): string
    {
        $password = filter_var($password);

        if (strlen($password) < 8) {
            throw new DomainException('A senha precisa ter pelo menos 8 caracteres.');
        }

        return $password;
    }

    private function filterNome(string $nome): string
    {
        $nome = filter_var($nome);

        if (strlen($nome) > 255) {
            throw new DomainException('Nome excede a quantidade de caracteres permitidos.');
        }

        return $nome;
    }

    private function filterCNPJ(string $cnpj): int
    {
        $cnpj = filter_var($cnpj);

        $foundError = false;

        $cnpj = preg_replace('/[^0-9]/', '', (string) $cnpj);

        if (strlen($cnpj) != 14) {
            $foundError = true;
        }

        if (preg_match('/(\d)\1{13}/', $cnpj)) {
            $foundError = true;
        }

        for ($i = 0, $j = 5, $sum = 0; $i < 12; $i++)
        {
            $sum += $cnpj[$i] * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }

        $rest = $sum % 11;

        if ($cnpj[12] != ($rest < 2 ? 0 : 11 - $rest)) {
            $foundError = true;
        }

        for ($i = 0, $j = 6, $sum = 0; $i < 13; $i++)
        {
            $sum += $cnpj[$i] * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }

        $rest = $sum % 11;

        $validCPNJ = $cnpj[13] == ($rest < 2 ? 0 : 11 - $rest);

        if (!$validCPNJ) {
            throw new DomainException('CPNJ inválido.');
        }

        return $cnpj;
    }

    private function filterTelefone(string $telefone): int
    {
        $telefone = filter_var($telefone);
        $telefone = preg_replace('/[^0-9]/', '', (string) $telefone);

        if (!preg_match('/^(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/', $telefone)) {
            throw new DomainException('Telefone inválido.');
        }

        return $telefone;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
}