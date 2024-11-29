<?php
session_start();
setcookie("Login", $_SESSION["login"], time()+3600, "/session/pratica/");
setcookie("Senha", $_SESSION["senha"], time()+3600, "/session/pratica/");
header("location: dashdoard.php");
?>