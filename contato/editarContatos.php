<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Editar contatos</title>
</head>
<body class="update-operation">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php 
                    include 'navbarContato.php';
                ?>
            </div>
            <div>
                <div class="col text-center">
                    <h3>Editar contatos</h3>
                </div>
                <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <form action="crud/editaContato.php" method="post">
                                <div>
                                    <label for="id" class="form-label">ID do contato</label>
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
                                    <label for="sobrenome" class="form-label">Sobrenome</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="sobrenome">
                                    </div>
                                </div>
                                <div>
                                    <label for="telefone" class="form-label">Telefone</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="telefone" placeholder="43 99999-8888">
                                    </div>
                                </div>
                                <div>
                                    <div class="col-md-6">
                                        <label for="tipo" class="form-check-label mt-1">Celular</label>
                                        <input type="radio" name="tipo" class="form-check-input me-3 mt-2" value="celular">
                                        <label for="tipo" class="form-check-label mt-1">Fixo</label>
                                        <input type="radio" name="tipo" class="form-check-input mt-2" value="fixo">
                                    </div>
                                </div>
                                <div>
                                    <label for="empresa" class="form-label">Empresa</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="empresa" default="null">
                                    </div>
                                </div>
                                <div>
                                    <label for="email" class="form-label">Email</label>
                                    <div class="col-md-6">
                                        <input type="email" name="email" class="form-control" placeholder="exemplo@email.com">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2 text-center">
                                        <button type="submit" class="btn btn-primary mt-3" name="exibicao" value="ultimo_contato">Atualizar contato</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>