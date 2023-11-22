<?php
require_once __DIR__ . '/htmlStart.php';
/** @var grupofatec\escooperativa\Model\Domain\Entity\PontoDeColeta $pontoDeColeta */

$estado = null;
if (!is_null($pontoDeColeta)) {
    $dadosPontoDeColeta = explode(',', $pontoDeColeta->endereco);
    $estado = $dadosPontoDeColeta[5];
}
?>
<link rel="stylesheet" href="css/criar-pontoColeta.css">
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <a href="logout">Logout</a>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img src="img/logo.png" alt="" id="logo">
        </nav>
    </div>

<form method="post">
    <label for="" id="cidade">Cidade<input type="text" name="cidade" value="<?= $dadosPontoDeColeta[4] ?? '' ?>"></label>
    <label for="" id="estado">Estado<select id="estados" name="estados">
        <option value="AC" <?= $estado !== 'AC' ?: 'selected' ?>>AC</option>
        <option value="AL" <?= $estado !== 'AL' ?: 'selected' ?>>AL</option>
        <option value="AP" <?= $estado !== 'AP' ?: 'selected' ?>>AP</option>
        <option value="AM" <?= $estado !== 'AM' ?: 'selected' ?>>AM</option>
        <option value="BA" <?= $estado !== 'BA' ?: 'selected' ?>>BA</option>
        <option value="CE" <?= $estado !== 'CE' ?: 'selected' ?>>CE</option>
        <option value="DF" <?= $estado !== 'DF' ?: 'selected' ?>>DF</option>
        <option value="ES" <?= $estado !== 'ES' ?: 'selected' ?>>ES</option>
        <option value="GO" <?= $estado !== 'GO' ?: 'selected' ?>>GO</option>
        <option value="MA" <?= $estado !== 'MA' ?: 'selected' ?>>MA</option>
        <option value="MT" <?= $estado !== 'MT' ?: 'selected' ?>>MT</option>
        <option value="MS" <?= $estado !== 'MS' ?: 'selected' ?>>MS</option>
        <option value="MG" <?= $estado !== 'MG' ?: 'selected' ?>>MG</option>
        <option value="PA" <?= $estado !== 'PA' ?: 'selected' ?>>PA</option>
        <option value="PB" <?= $estado !== 'PB' ?: 'selected' ?>>PB</option>
        <option value="PR" <?= $estado !== 'PR' ?: 'selected' ?>>PR</option>
        <option value="PE" <?= $estado !== 'PE' ?: 'selected' ?>>PE</option>
        <option value="PI" <?= $estado !== 'PI' ?: 'selected' ?>>PI</option>
        <option value="RJ" <?= $estado !== 'RJ' ?: 'selected' ?>>RJ</option>
        <option value="RN" <?= $estado !== 'RN' ?: 'selected' ?>>RN</option>
        <option value="RS" <?= $estado !== 'RS' ?: 'selected' ?>>RS</option>
        <option value="RO" <?= $estado !== 'RO' ?: 'selected' ?>>RO</option>
        <option value="RR" <?= $estado !== 'RR' ?: 'selected' ?>>RR</option>
        <option value="SC" <?= $estado !== 'SC' ?: 'selected' ?>>SC</option>
        <option value="SP" <?= $estado !== 'SP' ?: 'selected' ?>>SP</option>
        <option value="SE" <?= $estado !== 'SE' ?: 'selected' ?>>SE</option>
        <option value="TO" <?= $estado !== 'TO' ?: 'selected' ?>>TO</option>
      </select></label>
    <label for="" id="cep">CEP<input type="text" name="cep" value="<?= $dadosPontoDeColeta[6] ?? '' ?>"></label>
    <label for=""id="logradouro">Logradouro<input type="text" name="logradouro" value="<?= $dadosPontoDeColeta[0] ?? '' ?>"></label>
    <label for="" id="numero">Número<input type="text" name="numero" value="<?= $dadosPontoDeColeta[1] ?? '' ?>"></label>
    <label for="" id="bairro">Bairro<input type="text" name="bairro" value="<?= $dadosPontoDeColeta[3] ?? '' ?>"></label>
    <label for="" id="complemento">complemento<input type="text" name="complemento" value="<?= $dadosPontoDeColeta[2] ?? '' ?>"></label>
    <label for=""id=nome>Nome do ponto de coleta<input type="text" name="nome" value="<?= $pontoDeColeta?->nome ?>"></label>
    <input type="hidden" name="id" value="<?= $pontoDeColeta?->id ?>">

    <input type="submit" value="Confirmar">
    <a class="botao" href="dashboard-patrocinador">Voltar</a>
</form>


<?php
require_once __DIR__ . '/htmlEnd.php';