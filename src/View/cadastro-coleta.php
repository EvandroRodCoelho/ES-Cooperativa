<?php
require_once __DIR__ . '/htmlStart.php';
?>
<link rel="stylesheet" href="css/cadastro-coleta.css">

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

<form>
    <div id="campos">
        <div id="tiposMateriais">
            <label for="">Papel<input type="text" name="papel" ></label>
            <label for="">Plástico<input type="text" name="plastico" ></label>
            <label for="">Metal<input type="text" name="metal" ></label>
            <label for="">Vidro<input type="text" name="vidro" ></label>
            <label for="">Orgânico<input type="text" name="organico"></label>
        </div>
        <div id="pontoColeta">
            <p>Ponto de Coleta</p>
            <select>
            
                <option value="opcao1">Opção 1</option>
                <option value="opcao2">Opção 2</option>
                <option value="opcao3">Opção 3</option>
              </select>
        </div>
          
    </div>

    

    <div id="submit">
        <input type="submit" value="Confirmar">
        <input type="button" value="Voltar">
    </div>
</form>


<?php
require_once __DIR__ . '/htmlEnd.php';