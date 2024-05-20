<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Recebidos</title>
</head>
<body class="read-operation">
    <div class="container">
        <div class="col">
            <div>
                <?php
                    include 'navbarEmail.php';
                ?>
            </div>
            <div class="row">
                <div class="text-center">
                    <h3>Recebidos</h3>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div>
                        <form action="crud/listaEmails.php" method="post">
                            <input type="email" name="email" class="form-control" placeholder="Insira seu email">
                            <div class="text-center">
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-primary mt-3" value="Listar recebidos" name="tipo">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>