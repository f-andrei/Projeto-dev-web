<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anotação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <?php 
                require "../../conectaDb.php";
                $nome = $_POST["nome"];
                $conteudo = $_POST["conteudo"];
                $links_uteis = $_POST["links_uteis"];
                if (empty($nome) || empty($conteudo)) {
                    echo "Preencha nome e conteúdo";
                } else {
                    $sql = "INSERT INTO anotacao 
                    (nome, conteudo, links_uteis) 
                    VALUES ('$nome', '$conteudo', '$links_uteis')";
                    $banco->query($sql);
                    if ($banco->affected_rows >= 1) {
                        include "../listarAnotacoes.php";
                    }
                }
                $banco->close();
            ?>
        </div>
    </div>
</body>
</html>