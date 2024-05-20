<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Editar anotações</title>
</head>
<body class="update-operation">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php 
                    include 'navbarAnotacao.php';
                ?>
            </div>
            <div class="row">
                <div class="col text-center">
                    <h3>Editar anotações</h3>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">

                        <form action="crud/editaAnotacao.php" method="post">
                            <div>
                                <label for="id" class="form-label">ID da anotação</label>
                                <div class="col-md-6">
                                    <input type="number" name="id" class="form-control" required>
                                </div>
                            </div>
                            <div>
                                <label for="nome" class="form-label text-left">Nome</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nome">
                                </div>
                            </div>
                            <div>
                                <label for="sobrenome" class="form-label">Descrição</label>
                                <div class="col-md-6">
                                    <textarea name="conteudo" class="form-control"></textarea>
                                </div>
                            </div>
                            <div>
                                <label for="telefone" class="form-label">Links úteis</label>
                                <div class="col-md-6">
                                    <textarea name="links_uteis" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                    <div class="col-md-2 text-center">
                                        <button type="submit" class="btn btn-primary mt-3" name="exibicao" value="ultimo_contato">Atualizar anotação</button>
                                    </div>
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