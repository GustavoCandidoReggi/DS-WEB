<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="formulario">
            <form action="insertion.php" method="post" onclick="return validarDadosClientes()">
                <label for="">Nome</label>
                <input type="text" name="nome">
                <br>
                <label for="">E-mail</label>
                <input type="text" name="email">
                <br>
                <input type="submit">
            </form>

        </div>
        <?php 
    include 'conexao.php';
    
    echo "<br><br><br>";
    $dados = $db->query("SELECT * FROM clientes");
    $todos = $dados->fetchALL(PDO::FETCH_ASSOC); //todos os registros retornados
    foreach($todos as $linha){
        echo "Linha: ".$linha["id"]."<br>";
        echo "Nome: ".$linha["nome"]."<br>";
        echo "E-mail: ".$linha["email"]."<br>";
        echo "<br>";

    }
    ?>
    </div>
    
</body>
<script src="script.js"></script>
</html>