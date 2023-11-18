<?php
require_once __DIR__ . '/htmlStart.php';
?>
<link rel="stylesheet" href="css/formulario-login.css">
<form method="post">
    <img src="/img/logo.png" alt="" id="logo">
    <label for="email">
        <input name="email" required id="email" placeholder="Digite seu e-mail"/>
    </label>
    <label for="senha">
        <input name="senha" required id='senha' placeholder="Digite sua senha"/>
    </label>

    <input type="submit" value="Faxer login"/>
    <a href="#">Cadastre-se</a>
</form>

<?php
require_once __DIR__ . '/htmlEnd.php';