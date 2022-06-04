<?php
    function conecta_mysql(){
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $dbname = "conexao";
        $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
        return $conn;
    }
?>