<?php
    $logincerto = "Gustavo";
    $senhacerta = "123456";

    session_start();
    if(isset($_POST['login'])){
        if($logincerto == $_POST['login'] and $senhacerta == $_POST['senha']){
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['senha'] = $_POST['senha'];
        }
    }

    if(isset($_SESSION['login']) and isset($_SESSION['senha'])){
    echo '<br>';
    echo $_SESSION['login'];
    echo '<br>';
    echo $_SESSION['senha'];
    }else{
        header('Location: index.php');
    }
    echo '<br><br><br>';
    
    echo '<a href="logout.php">Logout</a> <a href="cookie.php">Salva cookie</a>'


?>