<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css" class="css">
    <title>Minhas anotações</title>
</head>
<body class="read-operation">
    <div class="container">
        <div class="row">
            <div class="col">
                <div>
                    <?php
                        include 'navbarAnotacao.php'; 
                    ?>
                </div>
            </div>
            <div class="row read-operation">
                <div class="col">
                    <?php
                        require __DIR__ . '/../conectaDb.php';
                        $exibicao = $_POST['exibicao'] ?? 'todos';
                        if ($exibicao == 'ultima_anotacao') {
                            $select = "SELECT * FROM anotacao ORDER BY id DESC LIMIT 1";
                            $resultado = mysqli_query($banco, $select);
                            if($resultado){
                                $linha = mysqli_fetch_assoc($resultado);
                                $id = $linha['id'];
                                $nome = $linha['nome'];
                                $conteudo = $linha['conteudo'];
                                $links_uteis = $linha['links_uteis'];
                                echo "<div class='row'>";
                                echo "<div class='col'>";
                                echo "<div class='text-center'>";
                                echo "<h3>Anotação salva com sucesso!</h3>";
                                echo "<p>Nome: $nome</p>";
                                echo "<p>Descrição: $conteudo</p>";
                                echo "<p>Links úteis: $links_uteis</p>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                        } else {
                            $select = "SELECT * FROM anotacao";
                            $resultado = mysqli_query($banco, $select);
                            if($resultado){
                                echo "<div class='row'>";
                                echo "<div class='col'>";
                                echo "<div class='text-center'>";
                                echo "<h3>Minhas anotações</h3>";
                                echo "<table class='table'>";
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th scope='col'>ID</th>";
                                echo "<th scope='col'>Nome</th>";
                                echo "<th scope='col'>Descrição</th>";
                                echo "<th scope='col'>Links úteis</th>";
                                echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($linha = mysqli_fetch_assoc($resultado)){
                                    echo "<tr>";
                                    echo "<th scope='row'>".$linha['id']."</th>";
                                    echo "<td>".$linha['nome']."</td>";
                                    echo "<td>".$linha['conteudo']."</td>";
                                    echo "<td>".$linha['links_uteis']."</td>";
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