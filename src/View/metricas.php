<?php
require_once __DIR__ . '/htmlStart.php';
?>
<link rel="stylesheet" href="css/metricas.css">
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
    <div id="list-example" class="list-group">
        <a class="list-group-item list-group-item-action" href="#list-item-1">Home</a>
        <a class="list-group-item list-group-item-action" href="#list-item-2">Registro coleta</a>
        <a class="list-group-item list-group-item-action" href="#list-item-3">Histórico coleta</a>
        <a class="list-group-item list-group-item-action" href="#list-item-4">Criar funcionário</a>
        <a class="list-group-item list-group-item-action" href="#list-item-5">Criar patrocinador</a>
        <a class="list-group-item list-group-item-action" href="#list-item-6">Gerenciar usuários</a>
      </div>
    <div id="graficos"></div>
  

    <div class="gerenciamento-coletas"><h2>Gerenciamento Coletas</h2> <p>Aqui você efetua registros e consultas das coletas realizadas</p> <div id="buttons"><input type="button" value="Registrar Coleta"> <input type="button" value="Histórico Coleta"></div></div>
    <div class="gerenciamento-usuarios"><h2>Gerenciamento Usuários</h2> <p>Aqui você consulta, inclui, altera e exclui usuários do sistema</p> <div id="buttons"><input type="button" value="Criar funcionário"> <input type="button" value="Criar patrocinador"> <input type="button" value="Gerenciador usuários"></div></div>


<?php
require_once __DIR__ . '/htmlEnd.php';