<?php

$dsn = "mysql:host=localhost;dbname=despesas;port=3306";
$user = "root";
$pass = "";


try {
$conexao = new PDO($dsn, $user, $pass);
} catch (PDOException $ex){ 
    echo "<h1>Houve uma falha na conxão</h1>";
    exit;

}

?>