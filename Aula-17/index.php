<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        .div1{
            display: FLEX;
        }
        div{
            margin:auto;
        }
        
    </style>
</head>
<body>

    <div class="div1">
        <div>
        <form action="insertionProduto.php" method="POST">
            <p>Nome: <input type="text" name="nome"></p>
            
            <p>Valor: <input type="text" name="valor"></p>
            
            <p>Estoque: <input type="text" name="estoque"></p>

            <input type="submit" value="Enviar">
            <br><br><br>
            <?php 
        include_once('funcao.php');

        produto();
        
    ?>
        </form>
        </div>
        <div>
        <form action="insertionCliente.php" method="POST">
            <p>Nome: <input type="text" name="nome"></p>
            
            <p>Email <input type="text" name="email"></p>

            <br><br>
            
            <input type="submit" value="Enviar">
            <br><br><br>
            <?php 
            include_once('funcao.php');

            
            cliente();
    ?>
            
        </form>
        </div>
    </div>
    <br><br><br>
    

    
</body>
</html>