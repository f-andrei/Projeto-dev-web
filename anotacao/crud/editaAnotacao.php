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
                function handleEmptyField($field, $existingValue) {
                    return isset($field) && !empty($field) ? $field : $existingValue;
                }

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    require "../../conectaDb.php";

                    $id = $_POST["id"];

                    $select = "SELECT * FROM anotacao WHERE id=$id";
                    $resultado = mysqli_query($banco, $select);
                    
                    if ($resultado) {
                        $dadosExistentes = mysqli_fetch_assoc($resultado);

                        $nome = handleEmptyField($_POST["nome"], $dadosExistentes['nome']);
                        $conteudo = handleEmptyField($_POST["conteudo"], $dadosExistentes['conteudo']);
                        $links_uteis = handleEmptyField($_POST["links_uteis"], $dadosExistentes['links_uteis']);
                        
                        $sql = "UPDATE anotacao 
                                SET nome='$nome', conteudo='$conteudo', links_uteis='$links_uteis'
                                WHERE id=$id";

                        if ($banco->query($sql) === TRUE) {
                            include __DIR__ . "/../listarAnotacoes.php";
                        } else {
                            echo "Error updating record: " . $banco->error;
                        }
                    } else {
                        echo "Error fetching record: " . $banco->error;
                    }

                    $banco->close();
                }
            ?>

        </div>
    </div>
</body>
</html>