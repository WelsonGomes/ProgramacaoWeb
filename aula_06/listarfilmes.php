<h1 style="text-align: center;">Lista de filmes cadastrado</h1>

<?php
    $listaSQL = "SELECT codigo, nome, resumo, ano FROM filmes";
    $listafilmesSQLprepara = $conn->prepare($listaSQL);
    $listafilmesSQLprepara->execute();
?>

<style>
    .table-wrapper {
        max-height: 80vh;
        overflow-y: auto;
        border-top: 2px solid black;
        padding-top: 20px;
    }
</style>

<div class="table-wrapper">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Sinpse dos Filmes</th>
                <th>Ano</th>
                <th>Executar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($filmes = $listafilmesSQLprepara->fetch()) {
                    echo "<tr>";
                    echo "<td>".$filmes['codigo']."</td>";
                    echo "<td class=\"col-2\">".$filmes['nome']."</td>";
                    echo "<td style = \"text-align: justify;\">".$filmes['resumo']."</td>";
                    echo "<td class=\"col-1\">".$filmes['ano']."</td>";
                    echo "<td>
                            <a class=\"btn btn-info col-12\" href=\"?pagina=editarfilme&codigo={$filmes['codigo']}\">Alterar</a><br><br>
                            <a class=\"btn btn-danger col-12\" href=\"?pagina=removerfilme&codigo={$filmes['codigo']}\">Remover</a></td>
                        </td>";
                    echo "</tr>";
                };
            ?>
        </tbody>
    </table>
</div>