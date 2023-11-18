<?php
require_once __DIR__ . '/htmlStart.php';
?>
<link rel="stylesheet" href="css/cadastro-patrocinador.css">
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