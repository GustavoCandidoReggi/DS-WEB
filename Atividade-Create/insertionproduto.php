<?php
include_once('connection.php');

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
header('Location: dashdoard.php');
//Inicio da interção do banco de dados
$sql = "INSERT INTO produto (nome, preco, descricao) VALUES ('$nome','$preco', '$descricao')";

if (mysqli_query($conexao, $sql)) {
    echo "Novo registro inserido com sucesso!";
    
} else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
}


?>