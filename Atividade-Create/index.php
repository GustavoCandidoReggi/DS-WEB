
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            text-align: center;
        }
        
    </style>
</head>
<body>
<div class="horizontal">
        <div>    
            <form action="dashdoard.php" method="POST">
                
                <p>Login: <input type="text" name="login" placeholder='Digite o usuario' requied></p>
                
                <p>Email: <input type="email" name="email" placeholder='Digite seu email' required ></p>

                <p>Senha: <input type="password" name="senha" placeholder='Digite a senha' required></p>
                
                <br>
                <input type="submit" value="Acessar" name="acessar">
            </form>
        </div>
    </div>
</body>
</html>