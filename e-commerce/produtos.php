
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/produtos.css">
    <title>Document</title>
</head>
<body>
    <div class="container m-auto p-0 produto">
        <?php
            if(isset($_GET['categoria'])){
                $sql = "SELECT p.id as id_produto, 
                            p.categoria_id, 
                            p.imagem, 
                            p.descricao, 
                            p.resumo, 
                            c.categoria_pai, 
                            c.id as id_categoria,
                            p.valor as valor
                        FROM produtos p
                    INNER JOIN categorias c
                            ON p.categoria_id = c.categoria_pai OR p.categoria_id = c.id
                        WHERE p.categoria_id = {$_GET['categoria']} OR c.categoria_pai = {$_GET['categoria']}
                    ORDER BY RAND()";
            }
            else {
                $sql = "SELECT p.id as id_produto, 
                            p.categoria_id, 
                            p.imagem, 
                            p.descricao, 
                            p.resumo,
                            p.valor  
                        FROM produtos p 
                    ORDER BY RAND()
                        LIMIT 5";
            }

            $consulta = $conn->prepare($sql);
            $consulta->execute();
            
            foreach($consulta as $linha){
                $valor= $linha['valor'];?>
                <main class="cards">
                    <section class="card">
                        <div class="icon">
                            <img src="<?php echo $linha['imagem'];?>" class="card-img-top" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href=""><?php echo $linha['descricao'];?></a>
                            </h5>
                            <p class="card-text"><?php echo $linha['resumo']?></p>
                            <h5 class="card-text">R$ <?php echo number_format($valor,2,',','.');?></h5>
                        </div>
                    </section>
                </main>
            <?php 
            }?>
    </div>
</body>
</html> 