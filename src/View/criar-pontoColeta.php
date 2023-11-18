<?php
require_once __DIR__ . '/htmlStart.php';
?>
<link rel="stylesheet" href="css/criar-pontoColeta.css">
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
    <label for="" id="cidade">Cidade<input type="text" name="cidade" ></label>
    <label for="" id="estado">Estado<select id="estados" name="estados">
        <option value="AC">AC</option>
        <option value="AL">AL</option>
        <option value="AP">AP</option>
        <option value="AM">AM</option>
        <option value="BA">BA</option>
        <option value="CE">CE</option>
        <option value="DF">DF</option>
        <option value="ES">ES</option>
        <option value="GO">GO</option>
        <option value="MA">MA</option>
        <option value="MT">MT</option>
        <option value="MS">MS</option>
        <option value="MG">MG</option>
        <option value="PA">PA</option>
        <option value="PB">PB</option>
        <option value="PR">PR</option>
        <option value="PE">PE</option>
        <option value="PI">PI</option>
        <option value="RJ">RJ</option>
        <option value="RN">RN</option>
        <option value="RS">RS</option>
        <option value="RO">RO</option>
        <option value="RR">RR</option>
        <option value="SC">SC</option>
        <option value="SP">SP</option>
        <option value="SE">SE</option>
        <option value="TO">TO</option>
      </select></label>
    <label for="" id="cep">CEP<input type="text" name="cep" ></label>
    <label for=""id="logradouro">Logradouro<input type="text" name="logradouro" ></label>
    <label for="" id="numero">Número<input type="text" name="numero"></label>
    <label for="" id="bairro">Bairro<input type="text" name="bairro" ></label>
    <label for="" id="complemento">complemento<input type="text" name="complemento" ></label>
    <label for=""id=nome>Nome do ponto de coleta<input type="text" name="nome" ></label>

    <input type="submit" value="Confirmar">
    <input type="button" value="Voltar">
</form>


<?php
require_once __DIR__ . '/htmlEnd.php';