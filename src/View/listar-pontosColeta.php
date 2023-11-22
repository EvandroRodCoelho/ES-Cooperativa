<?php
require_once __DIR__ . '/htmlStart.php';
/** @var grupofatec\escooperativa\Model\Domain\Entity\PontoDeColeta[] $pontosColeta */
?>
<link rel="stylesheet" href="css/listar-pontosColeta.css">
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <a href="logout">Logout</a>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img src="img/logo.png" alt="" id="logo">
        </nav>
    </div>

    <h2>Pontos de Coleta</h2>
    <a class="botao" href="novo-ponto-de-coleta">Novo ponto de coleta</a>

  <table>
    <thead>
      <tr>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>

    <?php foreach ($pontosColeta as $pontoColeta): ?>
      <tr>
        <td><?= $pontoColeta->nome ?></td>
        <td><?= str_replace(',,', ',', $pontoColeta->endereco) ?></td>
        <td class="actions">
          <a class="botao" href="editar-ponto-de-coleta?id=<?= $pontoColeta->id ?>">Editar</a>
          <a class="botao" href="deletar-ponto-de-coleta?id=<?= $pontoColeta->id ?>">Deletar</a>
        </td>
      </tr>
    <?php endforeach; ?>

    </tbody>
  </table>
<?php
require_once __DIR__ . '/htmlEnd.php';