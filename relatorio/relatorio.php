<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Relatório</title>
</head>
<body class="create-operation">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                    include 'navbarRelatorio.php';
                ?>
        </div>
        <div class="row">
            <div class="col">
                <?php
                    require '../conectaDb.php';
                    $sql_query = "SELECT remetente.email AS remetente_email, 
                            COUNT(email.id) AS total_emails_enviados, 
                            (SELECT destinatario.email 
                                FROM email e 
                                JOIN contato destinatario ON e.destinatario_contato_id = destinatario.id 
                                WHERE e.remetente_contato_id = remetente.id 
                                GROUP BY destinatario.id 
                                ORDER BY COUNT(e.id) DESC 
                                LIMIT 1) AS favorito_email
                            FROM email
                            JOIN contato remetente ON email.remetente_contato_id = remetente.id
                            GROUP BY remetente.id
                            ORDER BY total_emails_enviados DESC;";
                    $result = $banco->query($sql_query);
                    if ($result->num_rows > 0) {
                        echo '<table class="table table-striped">';
                        echo '<thead>';
                        echo '<tr>';
                        echo '<th scope="col">Remetente</th>';
                        echo '<th scope="col">Total de emails enviados</th>';
                        echo '<th scope="col">Email favorito</th>';
                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';
                        while ($row = $result->fetch_assoc()) {
                            $remetente_email = htmlspecialchars($row['remetente_email']);
                            $total_emails_enviados = htmlspecialchars($row['total_emails_enviados']);
                            $favorito_email = htmlspecialchars($row['favorito_email']);
                            echo '<tr>';
                            echo '<td>' . $remetente_email . '</td>';
                            echo '<td>' . $total_emails_enviados . '</td>';
                            echo '<td>' . $favorito_email . '</td>';
                            echo '</tr>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>