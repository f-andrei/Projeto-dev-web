<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Deletar contato</title>
</head>
<body class="delete-operation">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php 
                    include '../navbarContato.php';
                ?>
            </div>
            <div class="row">
                <div class="text-center">
                    <h3>Deletar contato</h3>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form action="deletaContato.php" method="post">
                        <div>
                            <div>
                                <div class="col-md-12">
                                    <input type="number" name="id" class="form-control" placeholder="ID do contato" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-danger mt-3" name="exibicao" value="ultimo_contato">Deletar contato</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div>
                <?php
                    require __DIR__ . '/../../conectaDb.php';
                    $id = isset($_POST['id']) ? $_POST['id'] : null;
                    if ($id !== null) {
                        $delete = "DELETE FROM contato WHERE id = $id";
                        $resultado = mysqli_query($banco, $delete);
                        
                        if($resultado){
                            if (mysqli_affected_rows($banco) > 0) {
                                echo "<div class='row'>";
                                echo "<div class='col'>";
                                echo "<div class='text-center'>";
                                echo "<h3>Contato deletado com sucesso!</h3>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            } else {
                                echo "<div class='row'>";
                                echo "<div class='col'>";
                                echo "<div class='text-center'>";
                                echo "<h3>Contato não encontrado!</h3>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                        }
                    }                        
                ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>