<?php
include_once('connection.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
header('Location: dashdoard.php');
//Inicio da interção do banco de dados
$sql = "INSERT INTO usuario (nome, senha, email) VALUES ('$nome','$senha', '$email')";

if (mysqli_query($conexao, $sql)) {
    echo "Novo registro inserido com sucesso!";
    
} else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
}


?>