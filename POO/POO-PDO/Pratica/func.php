<?php

include "conexao.php";

//faz mostra os dados

echo "<h2>Inserindo dados</h2>";
$statement = $db->prepare("INSERT INTO clientes (nome, email) VALUE(?, ?)");
$nome = $_POST["name"];
$mail = $_POST["email"];

$statement->execute(array($nome, $mail));
//header('location: C:\xampp\htdocs\POO\POO-PDO\Pratica');
header('location: http://localhost/POO/POO-PDO/Pratica');





?>