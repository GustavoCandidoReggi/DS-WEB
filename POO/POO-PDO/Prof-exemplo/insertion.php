<?php
if($_SERVER['REQUEST_METHOD'] != '$_POST'){
    echo "<script>alert('Esta faltando um método POST');
    window.location.href='index.php';
    </script>";
    //header("location index.php");
}
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    include_once('conexao.php');

$statement = $db->prepare("INSERT INTO clientes(nome, email) VALUES(?, ?)");
$statement->execute(array($nome, $email));

header("location: index.php");

?>