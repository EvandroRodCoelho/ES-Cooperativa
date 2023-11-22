<?php
require_once __DIR__ . '/htmlStart.php';
?>
<link rel="stylesheet" href="css/cadastro-patrocinador.css">
<form method="post">
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="cnpj" placeholder="CNPJ">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="telefone" placeholder="Telefone">

    <input type="password" name="senha" placeholder="Senha">
    <input type="password" name="confirmarSenha" placeholder="Confirmar Senha">

    <input type="submit" value="Confirmar">
    <a class="voltar" href="/">Voltar</a>
</form>

<?php
require_once __DIR__ . '/htmlEnd.php';