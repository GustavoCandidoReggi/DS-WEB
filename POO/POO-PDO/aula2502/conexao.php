<?php

// MySql
$db = new PDO("mysql:host=localhost;dbname=pdo", "root", "");
//var_dump($db);
//echo "<br><br>";
//print_r($db);

//echo "<h2>Exemplo de consulta com uma linha</h2>";
$dados = $db->query("SELECT * FROM clientes");
$todos = $dados->fetch(PDO::FETCH_ASSOC); //todos os registros retornados






//echo "<h2>Inseriondo dados</h2>";
$statement = $db->prepare("INSERT INTO clientes (nome, email) VALUE(?, ?)");
$nome = '';
$email = '';

$statement->execute(array("$nome", "$email"));



?>