<?php
$nome = $_POST["nome"];
$senha = $_POST["senha"];

    if($nome === "sesi" && $senha === "2779"){
        echo "Acesso permitido!";
        echo "<br>";
        echo "<a href='./index.html'>link</a>";}
    else{echo "Login invalido, tente novamente";
        echo "<br>";
        echo "<a href='javascript:history.back()'>link</a>";}
   




?>