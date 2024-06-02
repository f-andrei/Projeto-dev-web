<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Listar email</title>
</head>
<body class="read-operation">
    <div class="container read-operation">
        <div class="col">
            <div>
                <?php
                    include '../navbarEmail.php';
                ?>
            </div>
            <div class="row read-operation">
                <div class="text-center read-operation">
                    <div>
                        <?php
                            require '../../conectaDb.php';
                            $email = $_POST["email"];
                            $select = "SELECT id FROM contato WHERE email = '$email'";
                            $id_query = mysqli_query($banco, $select);
                            $id = $id_query->fetch_row()[0];
                            $tipo = $_POST["tipo"];
                            if ($tipo == "Listar enviados") {
                                $select = "SELECT id, destinatario_contato_id, assunto, conteudo FROM email WHERE remetente_contato_id = '$id'";
                                $tipo_envio = "Para";
                                $chave = "destinatario_contato_id";
                            }
                            if ($tipo == "Listar recebidos") {
                                $select = "SELECT id, remetente_contato_id, assunto, conteudo FROM email WHERE destinatario_contato_id = '$id'";
                                $tipo_envio = "De";
                                $chave = "remetente_contato_id";
                            }

                            
                            $emails = mysqli_query($banco, $select);

                            if ($emails) {
                                echo '<table class="table table-striped">';
                                echo '<thead>';
                                echo '<tr>';
                                echo '<th scope="col">' . $tipo_envio . '</th>';
                                echo '<th scope="col">Assunto</th>';
                                echo '<th scope="col">Conteúdo</th>';
                                echo '<th scope="col">Ações</th>';
                                echo '</tr>';
                                echo '</thead>';
                                echo '<tbody>';
                                while ($row = mysqli_fetch_assoc($emails)) {
                                    $id = htmlspecialchars($row['id']);
                                    $contato_id = htmlspecialchars($row[$chave]);
                                    $assunto = htmlspecialchars($row['assunto']);
                                    $conteudo = htmlspecialchars($row['conteudo']);

                                    $select = "SELECT email FROM contato WHERE id = '$contato_id'";
                                    $email_query = mysqli_query($banco, $select);
                                    $email = $email_query->fetch_row()[0];
                                    echo '<tr>';
                                    echo "<td>$email</td>";
                                    echo "<td>$assunto</td>";
                                    echo "<td>$conteudo</td>";
                                    echo "<td><a class='btn btn-danger' href='deletaEmail.php?id=$id'>Deletar</a></td>";
                                    echo '</tr>';
                                }
                                echo '</tbody>';
                                echo '</table>';
                                
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>