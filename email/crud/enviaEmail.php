<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
    <?php
        include '../navbarEmail.php';
    ?>
    <?php
        require '../../conectaDb.php';
        $remetente_id = $_POST["remetente"];
        $destinatario_id = $_POST["destinatario"];
        $assunto = $_POST["assunto"];
        $conteudo = $_POST["conteudo"];

        if (empty($destinatario_id) || empty($conteudo)) {
            echo "Preencha seu email, destinatário, e conteúdo do email.";
        } else {
            $sql = "INSERT INTO email 
            (remetente_contato_id, destinatario_contato_id, assunto, conteudo)
            VALUES ('$remetente_id', '$destinatario_id', '$assunto', '$conteudo')";
            $banco->query($sql);
            if ($banco->affected_rows >= 1) {
                header("Location: ../listarEnviados.php");
            }
        }
        $banco->close();
    ?>

</body>
</html>