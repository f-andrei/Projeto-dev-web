<?php 
    $banco = new mysqli('localhost', 'root', '', 'trabalho2', '3306');
    if ($banco->connect_errno) {
        echo "Falha ao conectar ao banco de dados.";
    }
?>