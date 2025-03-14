<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <form action="func.php" method="POST">
            <p>Nome: <input type="text" name="name"></p>
            
            <p>Email: <input type="text" name="email"></p>

            <input type="submit" value="Enviar">
            <br><br><br>
        </form>
        <?php

            include 'conexao.php';
            
            $dados = $db->query("SELECT * FROM clientes");
            $todos = $dados->fetchALL(PDO::FETCH_ASSOC); //todos os registros retornados
            foreach($todos as $linha){
                echo "Linha: ".$linha["id"]."<br>";
                echo "Nome: ".$linha["nome"]."<br>";
                echo "E-mail: ".$linha["email"]."<br>";
                echo "<br>";

            }
        ?>
    
</body>
</html>