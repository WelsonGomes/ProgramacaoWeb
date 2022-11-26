<?php
    include "_lib/bdconn.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/descricao.css">
    <script src="https://kit.fontawesome.com/1ebb8d9a9c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Meu e-commerce</title>
</head>
<body style="background-color: #E6E6E6;">
     <!-- INCLUINDO O MENU -->
    <?php
        include "menu.php";
    ?>  
    <!-- INCUINDO O PRODUTO ESCOLHIDO -->
    <div class="corpo-fluid">
        <div class="container">
            <div class="row linha">
                <div class="icone">
                    <?php
                        if (isset($_GET['id'])){
                            $Sql = "SELECT id, 
                                        descricao, 
                                        caracteristicas, 
                                        categoria_id, 
                                        valor, 
                                        estoque, 
                                        imagem, 
                                        resumo 
                                    FROM produtos 
                                    WHERE id = {$_GET['id']}";
                                    
                            $consulta = $conn->prepare($Sql);
                            $consulta->execute();
                            $linha = $consulta->fetch();
                            $valor = $linha['valor'];
                        };
                    ?>
                    <img src="<?php echo $linha['imagem'];?>" alt="...">
                </div>
                <div class="desc">
                    <h4><?php echo $linha['descricao'];?></h4>
                    <br><br>
                    <h2>R$ <?php echo number_format($valor,2,',','.');?></h2>
                    <h5>em 10x de R$ <?php echo number_format($valor/10,2,',','.');?></h5>
                    <p>Veja os meios de pagamento</p>
                    <br>
                    <p><?php echo $linha['resumo']?></p>
                    <br>
                    <p>Calcular frete</p>
                    <p>Ver formas de entrega</p>
                    <br>
                    <p>Estoque disponivel</p>
                    <br>
                    <p>Quantidade 1 Unidade</p>
                    <br>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="button">Comprar Agora</button>
                        <button class="btn btn-outline-primary" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- INCLUINDO PRODUTOS -->
    <?php
        include "produtos.php";
    ?>
    <!-- RODAPÉ -->
    <?php
        include "rodape.php";
    ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>