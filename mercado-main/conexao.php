<?php

$conectadb = new mysqli('127.0.0.1', 'root', '', 'mercado');

    if (!$conectadb) {
        die("Não foi possível conectar ao banco de dados." .mysqli_error()."<br>");
    }

?>