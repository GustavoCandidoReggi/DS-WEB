<?php
    session_start();
    session_unset();
    setcookie("Login", $_SESSION["login"], time()-3600, "/session/pratica/");
    setcookie("Senha", $_SESSION["senha"], time()-3600, "/session/pratica/");
    session_destroy();
    header("location: index.php");
?>