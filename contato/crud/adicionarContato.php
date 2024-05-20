<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <?php 
                require "../../conectaDb.php";
                $nome = $_POST["nome"];
                $sobrenome = $_POST["sobrenome"];
                $telefone = $_POST["telefone"];
                $tipo = $_POST["tipo"];
                $empresa = $_POST["empresa"];
                $email = $_POST["email"];
                if (empty($nome) || empty($telefone) || empty($tipo)) {
                    echo "Preencha nome, telefone e tipo";
                } else {
                    $sql = "INSERT INTO contato 
                    (nome, sobrenome, telefone, tipo, empresa, email) 
                    VALUES ('$nome', '$sobrenome', '$telefone', '$tipo', '$empresa', '$email')";
                    $banco->query($sql);
                    if ($banco->affected_rows >= 1) {
                        include "../listarContatos.php";
                    }
                }
                $banco->close();
            ?>
        </div>
    </div>
</body>
</html>