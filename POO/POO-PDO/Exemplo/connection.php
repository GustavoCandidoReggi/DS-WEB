<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'loja';

// Conectar ao banco de dados
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

// Verificar se a conexão foi bem-sucedida
if (!$conexao) {
die('Erro na conexão: ' . mysqli_connect_error());
}



?>