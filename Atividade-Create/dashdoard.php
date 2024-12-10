<?php
    session_start();
    if(isset($_POST['login'])){
        //Conecção
        include_once('connection.php');
        $login = $_POST['login'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuario WHERE nome = '$login' and email = '$email'and senha = '$senha'";
        $resultado = mysqli_query($conexao, $sql);
        if(mysqli_num_rows($resultado) > 0){
            //Converte em array associativo
            $linha = mysqli_fetch_assoc($resultado);
            //Grava os dados na sessão
            $_SESSION['login'] = $linha['nome'];
            $_SESSION['email'] = $linha['email'];
            $_SESSION['senha'] = $linha['senha'];

            
        }else{
            $_SESSION['erro'] = "Login ou senha invalida";
        }

    }

    if(isset($_SESSION['login']) and isset($_SESSION['email']) and isset($_SESSION['senha'])){
    
    }else{
        header('Location: index.php');
    }
    echo '<br><br><br>';
    
    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadatros</title>
    <style>
        .horizontal{
            display: flex;
            padding: 20px;
            justify-content: center;
            
        }
        .horizontal div{
            padding: 20px;
            border: 1px solid lightgrey;
            justify-content: center;
        }
        div{
            margin: 10px;
        }
        
    </style>
</head>
<body>
    <div class="horizontal">
        <div>

            <h2>Formulario de cadastro usuario</h2>    
            <form action="insertion.php" method="POST">
                <p>Nome: <input type="text" name="nome" required></p>
                
                <p>Email: <input type="text" name="email" required></p>
                
                <p>Senha: <input type="text" name="senha" required></p>

                <input type="submit" value="Enviar">
                
            </form>
            <?php
            include_once('funcao.php');
            usuario();
            ?>
        </div>
        <div>
        <h2>Formulario de cadastro de Produtos</h2>    
            <form action="insertionproduto.php" method="POST">
                <p>Nome: <input type="text" name="nome" required></p>
                
                <p>Preço: <input type="text" name="preco" required></p>

                <p>Descrição: <br> <textarea name="descricao"></textarea><br></p>
                
                <input type="submit" value="Enviar">
                
            </form>
            <?php
            include_once('funcao.php');
            produto();
            
            ?>
        </div>
    
        </div>
    
    <button><a href="logout.php">Logout</button> <button><a href="cookie.php">Salva cookie</a></button>
</body>
</html>