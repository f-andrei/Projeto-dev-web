<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Meus contatos</title>
</head>
<body class="read-operation">
    <div class="container">
        <div class="row read-opeation">
            <div class="col">
                <div>
                    <?php
                        include 'navbarContato.php'; 
                    ?>
                </div>
            </div>
            <div class="row read-operation">
                <div class="col">
                    <?php
                        require __DIR__ . '/../conectaDb.php';
                        $exibicao = $_POST['exibicao'] ?? 'todos';
                        if ($exibicao == 'ultimo_contato') {
                            $select = "SELECT * FROM contato ORDER BY id DESC LIMIT 1";
                            $resultado = mysqli_query($banco, $select);
                            if($resultado){
                                $linha = mysqli_fetch_assoc($resultado);
                                $id = $linha['id'];
                                $nome = $linha['nome'];
                                $sobrenome = $linha['sobrenome'];
                                $telefone = $linha['telefone'];
                                $tipo = $linha['tipo'];
                                $email = $linha['email'];
                                $empresa = $linha['empresa'];
                                echo "<div class='row'>";
                                echo "<div class='col'>";
                                echo "<div class='text-center'>";
                                echo "<h3>Contato salvo com sucesso!</h3>";
                                echo "<p>Nome: $nome</p>";
                                echo "<p>Sobrenome: $sobrenome</p>";
                                echo "<p>Telefone: $telefone</p>";
                                echo "<p>Tipo: $tipo</p>";
                                echo "<p>Email: $email</p>";
                                echo "<p>Empresa: $empresa</p>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                        } else {
                            $select = "SELECT * FROM contato";
                            $resultado = mysqli_query($banco, $select);
                            if($resultado){
                                echo "<div class='row'>";
                                echo "<div class='col'>";
                                echo "<div class='text-center'>";
                                echo "<h3>Meus contatos</h3>";
                                echo "<table class='table'>";
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th scope='col'>ID</th>";
                                echo "<th scope='col'>Nome</th>";
                                echo "<th scope='col'>Sobrenome</th>";
                                echo "<th scope='col'>Telefone</th>";
                                echo "<th scope='col'>Tipo</th>";
                                echo "<th scope='col'>Email</th>";
                                echo "<th scope='col'>Empresa</th>";
                                echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($linha = mysqli_fetch_assoc($resultado)){
                                    echo "<tr>";
                                    echo "<th scope='row'>".$linha['id']."</th>";
                                    echo "<td>".$linha['nome']."</td>";
                                    echo "<td>".$linha['sobrenome']."</td>";
                                    echo "<td>".$linha['telefone']."</td>";
                                    echo "<td>".$linha['tipo']."</td>";
                                    echo "<td>".$linha['email']."</td>";
                                    echo "<td>".$linha['empresa']."</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";
                                echo "</table>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                        }

                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>