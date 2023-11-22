<?php
require_once __DIR__ . '/htmlStart.php';
?>
<link rel="stylesheet" href="css/metricas.css">
       
    </div>
    <div id="list-example" class="list-group">
        <a class="list-group-item list-group-item-action" href="/">Home</a>
        <a class="list-group-item list-group-item-action" href="#list-item-2">Registro coleta</a>
        <a class="list-group-item list-group-item-action" href="#list-item-3">Histórico coleta</a>
        <a class="list-group-item list-group-item-action" href="#list-item-4">Criar funcionário</a>
        <a class="list-group-item list-group-item-action" href="#list-item-5">Criar patrocinador</a>
        <a class="list-group-item list-group-item-action" href="#list-item-6">Gerenciar usuários</a>
      </div>
    <div id="graficos"></div>
  

    <div class="gerenciamento-coletas">
        <h2>Gerenciamento de Pontos de Coleta</h2> <p>Aqui você consulta, inclui, altera e exclui os seus Pontos de Coleta</p>
        <div id="buttons">
            <a class="botao" href="novo-ponto-de-coleta">Novo Ponto de Coleta</a>
            <a class="botao" href="editar-ponto-de-coleta">Editar Ponto de Coleta</a>
        </div>
    </div>


<?php
require_once __DIR__ . '/htmlEnd.php';