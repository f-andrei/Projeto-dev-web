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
                function checaCampoVazio($field, $existingValue) {
                    return isset($field) && !empty($field) ? $field : $existingValue;
                }

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    require "../../conectaDb.php";

                    $id = $_POST["id"];

                    $select = "SELECT * FROM contato WHERE id=$id";
                    $resultado = mysqli_query($banco, $select);
                    
                    if ($resultado) {
                        $dadosExistentes = mysqli_fetch_assoc($resultado);

                        $nome = checaCampoVazio($_POST["nome"], $dadosExistentes['nome']);
                        $sobrenome = checaCampoVazio($_POST["sobrenome"], $dadosExistentes['sobrenome']);
                        $telefone = checaCampoVazio($_POST["telefone"], $dadosExistentes['telefone']);
                        
                        $tipo = isset($_POST["tipo"]) ? $_POST["tipo"] : $dadosExistentes['tipo'];
                        
                        $empresa = checaCampoVazio($_POST["empresa"], $dadosExistentes['empresa']);
                        $email = checaCampoVazio($_POST["email"], $dadosExistentes['email']);

                        $sql = "UPDATE contato 
                                SET nome='$nome', sobrenome='$sobrenome', telefone='$telefone', 
                                tipo='$tipo', empresa='$empresa', email='$email' 
                                WHERE id=$id";

                        if ($banco->query($sql) === TRUE) {
                            include __DIR__ . "/../listarContatos.php";
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