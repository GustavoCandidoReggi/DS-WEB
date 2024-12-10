<?php
    session_start();
    session_unset();
    setcookie("Login", $_SESSION["login"], time()-3600, "/session/pratica/");
    setcookie("Senha");
    session_destroy();
    header("location: index.php");
?>