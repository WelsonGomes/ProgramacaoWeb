<h1 style="text-align: center;">Tela de contato!</h1>

<?php
    if (isset($_POST['gravar'])) {
        $insertSQL = "INSERT INTO contato (nome, email, telefone) VALUES (:nome, :email, :telefone)";
        $insertSQLprepara = $conn->prepare($insertSQL);
        if ($insertSQLprepara->execute(array("nome" => $_POST['nome'], "email" => $_POST['email'], "telefone" => $_POST['telefone']))) {
            echo 
                "<br><div class=\"alert alert-success\" role=\"alert\">
                    Contato cadastrado com sucesso!
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
        <!-- email -->
        <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
        </div>
        <!-- telefone -->
        <div class="form-floating mb-3">
            <input type="tel" class="form-control" name="telefone" id="floatingInput" placeholder="(99)9 9999-9999">
            <label for="floatingInput">Telefone</label>
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