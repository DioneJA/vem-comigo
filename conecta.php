<?php

function abreConexao() {
    $servername = "localhost";
    $database = "vem_comigo";
    $username = "root";
    $password = "Brdeal1234";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Falha na conexão: " . mysqli_connect_error());
    } 
    return $conn;
}
?>