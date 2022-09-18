<h1 style="text-align: center;">Alterar dados do Filme</h1>

<!-- PHP para gravar a alteração dos dados -->
<?php
    if (isset($_POST['alterar'])) {
        $alterarSQL = "UPDATE filmes set nome = :nome, resumo = :resumo, ano = :ano WHERE codigo = :codigo";
        $alterarSQLprepara = $conn->prepare($alterarSQL);
        if ($alterarSQLprepara->execute(array("codigo" => $_GET['codigo'], "nome" => $_POST['nome'], "resumo" => $_POST['resumo'], "ano" => $_POST['ano']))) {
            echo 
                "<br><div class=\"alert alert-success\" role=\"alert\">
                    Filme alterado com sucesso!
                </div>";
        };
    } else {
?>

<!-- PHP para trazer o filme a ser editado -->
<?Php
    $buscaSQL = "SELECT nome, resumo, ano FROM filmes WHERE codigo = :codigo";
    $buscaSQLprepara = $conn->prepare($buscaSQL);
    $buscaSQLprepara->execute(array("codigo" => $_GET['codigo']));
    $filme = $buscaSQLprepara->fetch();
?>

<div style="border-top: 2px solid black; padding-top: 20px">
    <form method="post">
        <!-- nome -->
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nome" id="floatingInput" value="<?php echo $filme['nome'] ?>" placeholder="Ciclano Beltrão">
            <label for="floatingInput">Nome</label>
        </div>
        <!-- Resumo -->
        <div class="form-floating mb-3">
            <textarea class="form-control" name="resumo" placeholder="Digite o resumo do filme" id="floatingTextarea" style="height: 30vh"><?php echo $filme['resumo'] ?></textarea>
            <label for="floatingTextarea">Resumo</label>
        </div>
        <!-- Ano -->
        <div class="form-floating mb-3">
            <input type="tel" class="form-control" name="ano" id="floatingInput" value="<?php echo $filme['ano'] ?>" placeholder="(99)9 9999-9999">
            <label for="floatingInput">Ano de Lancamento</label>
        </div>
        <!-- botão -->
        <div class="d-grid gap-2">
            <input class="btn btn-primary btn-lg" name="alterar"  type="submit" value="Alterar dados do filme">
        </div>
    </form>
</div>

<?php
    }
?>