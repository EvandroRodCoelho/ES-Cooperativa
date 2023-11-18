<?php
require_once __DIR__ . '/htmlStart.php';
?>
<link rel="stylesheet" href="css/listar-coletas.css">
<body>
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
        <th>Data da coleta</th>
        <th>Materiais coletados</th>
        <th>Ponto de coleta</th>
        <th>Cestas básicas concedidas</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Dado 1</td>
        <td class="subcolumns">
          <div>Subcoluna 1</div>
          <div>Subcoluna 2</div>
          <div>Subcoluna 3</div>
          <div>Subcoluna 4</div>
          <div>Subcoluna 5</div>
        </td>
        <td>Dado 2</td>
        <td>Dado 3</td>
      </tr>
      <tr>
        <td>Dado 4</td>
        <td class="subcolumns">
          <div>Subcoluna 6</div>
          <div>Subcoluna 7</div>
          <div>Subcoluna 8</div>
          <div>Subcoluna 9</div>
          <div>Subcoluna 10</div>
        </td>
        <td>Dado 5</td>
        <td>Dado 6</td>
      </tr>
      <tr>
        <td>Dado 7</td>
        <td class="subcolumns">
          <div>Subcoluna 11</div>
          <div>Subcoluna 12</div>
          <div>Subcoluna 13</div>
          <div>Subcoluna 14</div>
          <div>Subcoluna 15</div>
        </td>
        <td>Dado 8</td>
        <td>Dado 9</td>
      </tr>
      <tr>
        <td>Dado 10</td>
        <td class="subcolumns">
          <div>Subcoluna 16</div>
          <div>Subcoluna 17</div>
          <div>Subcoluna 18</div>
          <div>Subcoluna 19</div>
          <div>Subcoluna 20</div>
        </td>
        <td>Dado 11</td>
        <td>Dado 12</td>
      </tr>
    </tbody>
  </table>
<?php
require_once __DIR__ . '/htmlEnd.php';