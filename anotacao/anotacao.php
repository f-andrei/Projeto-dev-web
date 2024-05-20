<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Criar anotação</title>
</head>
<body class="create-operation">
    <div class="container">
        <div class="row">
            <div class="col">
                <div>
                    <?php
                        include 'navbarAnotacao.php';
                    ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php 
                    include 'anotacaoForm.php';
                ?>
            </div>
        </div>
    </div>
</body>
</html>