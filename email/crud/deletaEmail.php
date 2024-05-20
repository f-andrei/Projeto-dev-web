<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar contatos</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php 
                    include '../navbarEmail.php';
                ?>
            </div>
            <div class="row">
                <div>
                    <?php
                        require __DIR__ . '/../../conectaDb.php';
                        $id = $_GET['id'] ?? null;
                        if ($id) {
                            $delete = "DELETE FROM email WHERE id = $id";
                            $resultado = mysqli_query($banco, $delete);
                            if($resultado){
                                echo "<div class='row'>";
                                echo "<div class='col'>";
                                echo "<div class='text-center'>";
                                echo "<h3>Email deletado com sucesso!</h3>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            } else {
                                echo "<div class='row'>";
                                echo "<div class='col'>";
                                echo "<div class='text-center'>";
                                echo "<h3>Erro ao deletar email!</h3>";
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