<h1 style="text-align: center;">Remover Filme</h1>

<!-- PHP para remover o filme selecionado-->
<?php
    if (isset($_POST['remover'])) {
        $removerSQL = "DELETE FROM filmes WHERE codigo = :codigo";
        $removerSQLprepara = $conn->prepare($removerSQL);
        if ($removerSQLprepara->execute(array("codigo" => $_GET['codigo']))){
            echo 
                "<br><div class=\"alert alert-success\" role=\"alert\">
                    Filme removido com sucesso!
                </div>";
        }
    } else {
?>

<!-- PHP para buscar o filme gravado -->
<?php
    $buscarSQL = "SELECT codigo, nome, resumo, ano FROM filmes where codigo = :codigo";
    $buscarfilmeSQLprepara = $conn->prepare($buscarSQL);
    $buscarfilmeSQLprepara->execute(array("codigo" => $_GET['codigo']));
    $filme = $buscarfilmeSQLprepara->fetch();
?>

<div style="border-top: 2px solid black; padding-top: 20px">
    <table class="table">
        <thead>
            <tr>
                <td>codigo</td>
                <td><?php echo $filme['codigo']?></td>
            </tr>
            <tr>
                <td>Nome</td>
                <td><?php echo $filme['nome']?></td>
            </tr>
            <tr>
                <td>Sinpse</td>
                <td style="text-align: justify;"><?php echo $filme['resumo']?></td>
            </tr>
            <tr>
                <td>Ano</td>
                <td><?php echo $filme['ano']?></td>
            </tr>
        </thead>
    </table>
    <form method="post">
        <input class="btn btn-danger btn-lg col-12" name="remover"  type="submit" value="Remover filme da lista">
    </form>
</div>

<?php
    }
?>