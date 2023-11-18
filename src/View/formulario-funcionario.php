<?php
require_once __DIR__ . '/htmlStart.php';
?>
<link rel="stylesheet" href="css/formulario-funcionario.css">
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
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="cpf" placeholder="CPF">
    <input type="email" name="email" placeholder="Email">
    <input type="tel" name="telefone" placeholder="Telefone">

    <input type="text" name="endereco" placeholder="Endereço">

    <input type="password" name="senha" placeholder="Senha">
    <input type="password" name="confirmarSenha" placeholder="Confirmar Senha">

    <input type="submit" value="Confirmar">
    <input type="button" value="Voltar">
</form>
<?php
require_once __DIR__ . '/htmlEnd.php';