<?php
    

    function cliente(){
        include('connection.php');
        $sql = "SELECT * FROM cliente";
        $resultado = mysqli_query($conexao, $sql);
        // Verificar se há registros
        if (mysqli_num_rows($resultado) > 0) {
            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . "<br>";
            }
            } else {
                echo "Nenhum registro encontrado.";
            }
    }

    function produto(){
        include('connection.php');
        $sql = "SELECT * FROM produto";
        $resultado = mysqli_query($conexao, $sql);
        // Verificar se há registros
        if (mysqli_num_rows($resultado) > 0) {
            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . "<br>";
            }
            } else {
                echo "Nenhum registro encontrado.";
            }
    }
    ?>