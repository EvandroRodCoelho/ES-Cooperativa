<?php
require_once __DIR__ . '/htmlStart.php';
?>

<form method="post">
    <label for="email">E-mail:
        <input name="email" required id="email" placeholder="Digite seu e-mail"/>
    </label>
    <label for="senha">Senha:
        <input name="senha" required id='senha' placeholder="Digite sua senha"/>
    </label>

    <input type="submit" value="Fazer login"/>
</form>

<?php
require_once __DIR__ . '/htmlEnd.php';