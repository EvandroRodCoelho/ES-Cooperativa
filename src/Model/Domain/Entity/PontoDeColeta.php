<?php

namespace grupofatec\escooperativa\Model\Domain\Entity;

use DomainException;

class PontoDeColeta
{
    public readonly int $id;
    public readonly string $nome;
    public readonly string $endereco;

    /**
     * @param string $nome
     * @param string $endereco
     */
    public function __construct(string $nome, string $endereco)
    {
        $this->nome = $this->filterNome($nome);
        $this->endereco = $this->filterEndereco($endereco);
    }

    private function filterNome(string $nome)
    {
        $nome = filter_var($nome);

        if (strlen($nome) > 255) {
            throw new DomainException('Nome excede limite de caracteres.');
        }

        if (strlen($nome) == 0) {
            throw new DomainException('Nome vazio.');
        }

        return $nome;
    }

    private function filterEndereco(string $endereco)
    {
        $endereco = filter_var($endereco);

        if (strlen($endereco) > 255) {
            throw new DomainException('Endereço excede limite de caracteres.');
        }

        if (strlen($endereco) == 0) {
            throw new DomainException('Endereço vazio.');
        }

        return $endereco;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

}