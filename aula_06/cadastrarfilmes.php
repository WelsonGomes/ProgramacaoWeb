<h1 style="text-align: center;">Cadastrar Filmes</h1>

<?php
    if (isset($_POST['gravar'])) {
        $insertSQL = "INSERT INTO filmes (nome, resumo, ano) VALUES (:nome, :resumo, :ano)";
        $insertSQLprepara = $conn->prepare($insertSQL);
        if ($insertSQLprepara->execute(array("nome" => $_POST['nome'], "resumo" => $_POST['resumo'], "ano" => $_POST['ano']))) {
            echo 
                "<br><div class=\"alert alert-success\" role=\"alert\">
                    Filme cadastrado com sucesso!
                </div>";
        }
    } else {
?>

<div style="border-top: 2px solid black; padding-top: 20px">
    <form method="post">
        <!-- nome -->
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nome" id="floatingInput" placeholder="Ciclano Beltrão">
            <label for="floatingInput">Nome</label>
        </div>
        <!-- Resumo -->
        <div class="form-floating mb-3">
            <textarea class="form-control" name="resumo" placeholder="Digite o resumo do filme" id="floatingTextarea" style="height: 30vh"></textarea>
            <label for="floatingTextarea">Resumo</label>
        </div>
        <!-- Ano -->
        <div class="form-floating mb-3">
            <input type="tel" class="form-control" name="ano" id="floatingInput" placeholder="(99)9 9999-9999">
            <label for="floatingInput">Ano de Lancamento</label>
        </div>
        <!-- botão -->
        <div class="d-grid gap-2">
            <input class="btn btn-primary btn-lg" name="gravar"  type="submit" value="Gravar Contato">
        </div>
    </form>
</div>
<?php
    }
?>