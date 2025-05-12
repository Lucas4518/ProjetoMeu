<?php
include __DIR__ . '/../views/header.php';
include __DIR__ . '/../classes/escola.php';

//Inicializa as variaveis
$nome = $endereço = $cidade = $cnpj ="";
$escolaInfo = false

?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST["nome"]);
    $endereço = trim($_POST["endereço"]);
    $cidade = trim($_POST["cidade"]);
    $cnpj = trim($_POST["cnpj"]);
    try {
        $escolaIn = new EscolaIn($nome, $endereço, $cidade, $cnpj);
        $escolaInfo = true;
    } catch (Exception $e) {
        echo "<div class='alert alert-danger mt-3'>" . $e->getMessage() . "</div>";
    }
}

?>

<h2>Dados escolares</h2>
 
<form method="post" class="row g-3 mb-4">
    <div class="col-md-4">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control"
            value="<?= htmlspecialchars($nome) ?>">
    </div>
 
    <div class="col-md-2">
        <label for="cidade" class="form-label">Cidade:</label>
        <input type="text" name="cidade" id="cidade" class="form-control"
            value="<?= htmlspecialchars($cidade) ?>">
    </div>
 
    <div class="col-md-1">
        <label for="endereço" class="form-label">Endereço:</label>
        <input type="text" name="endereço" id="endereço" class="form-control"
            value="<?= htmlspecialchars($endereço) ?>">
    </div>

    <div class="col-md-5">
        <label for="cnpj" class="form-label">Cnpj:</label>
        <input type="text" name="cnpj" id="cnpj" class="form-control"
            value="<?= htmlspecialchars($cnpj) ?>">
    </div>
 
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>

<?php
if ($escolaInfo) {
    echo "<h3>Resultado:</h3>";
    $escolaIn->exibirDados();
}
?>

<?php include __DIR__ . '/../views/footer.php'; ?>