<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="menu">
    <ul>
            <li><a href="#" class="meumenu" title="Home">Home</a></li>
            <li><a href="#" class="meumenu" title="Clients">

    Clients </a></li>
            <li><a href="#" class="meumenu" title="Products">

    Products </a></li>
            <li><a href="#" class="meumenu" title="Sales">

    Sales </a></li>
    </ul>
    </div>
    <div class="container">
        <hr>
        <div class="formulario">
            <form action="insertion.php" method="POST" name="formulario" onsubmit="return validarDadosCliente()">
                <label for="name" >Nome:</label>
                <input type="text" name="nome">
                <br>
                <label for="email" >Email:</label>
                <input type="text" name="email">
                <br>
                <label>Observação do cliente</label>
                <textarea name="observacao" cols="30" rows="4"></textarea>
                <input type="submit">
            </form>

        </div>


    <?php
        include 'conexao.php';

        $dados = $db->query("SELECT * FROM clientes");
        $todos = $dados->fetchAll(PDO::FETCH_ASSOC);
        foreach($todos as $linha){
            $idCliente = $linha['id'];
            $nomeCliente = $linha['nome'];
            $emailCliente = $linha['email'];

            echo "Linha: ".$idCliente;
            "<br>";
            echo "Linha: ".$nomeCliente; 
            "<br>";
            echo "Linha: ".$emailCliente;
            "<br><br>";
            echo "<a href='update.php?id=$idCliente'>Editar Cliente</a>";
            echo "<br>";
            echo "<a href='delete.php?id=$idCliente'>Deletar Cliente</a>";
            echo "<br>";
        }
    ?>
    </div>
</body>

<script src="script.js"></script>

</html>