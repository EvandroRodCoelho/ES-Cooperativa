<?php
require_once __DIR__ . '/htmlStart.php';
?>
<link rel="stylesheet" href="css/listar-funcionarios.css">
<div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <a href="#">Página 1</a>
            <a href="#">Página 2</a>
            <a href="#">Página 3</a>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <img src="img/logo.png" alt="" id="logo">     
    </nav>
</div>
  


  <table>
    <thead>
      <tr>
        <th>Nome</th>
        <th>Tipo</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Dado 1</td>
        <td>Dado 2</td>
        <td class="actions">
          <button class="edit">Editar</button>
          <button class="delete">Deletar</button>
        </td>
      </tr>
      <tr>
        <td>Dado 4</td>
        <td>Dado 5</td>
        <td class="actions">
          <button class="edit">Editar</button>
          <button class="delete">Deletar</button>
        </td>
      </tr>
      <tr>
        <td>Dado 7</td>
        <td>Dado 8</td>
        <td class="actions">
          <button class="edit">Editar</button>
          <button class="delete">Deletar</button>
        </td>
      </tr>
      <tr>
        <td>Dado 10</td>
        <td>Dado 11</td>
        <td class="actions">
          <button class="edit">Editar</button>
          <button class="delete">Deletar</button>
        </td>
      </tr>
    </tbody>
  </table>

<?php
require_once __DIR__ . '/htmlEnd.php';