<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="menu">
        <ul>
            <li><a href="index.php" class="meumenu meumenu-active" title="Home">Home</a></li>
            <li><a href="cliente.php" class="meumenu" title="Clientes">Clientes</a></li>
            <li><a href="produto.php" class="meumenu" title="Produtos">Produtos</a></li>
            <li><a href="#" class="meumenu" title="Vendas">Vendas</a></li>
        </ul>
    </div>
    <div class="formulario">
            <form action="insertionc.php" method="POST" name="formulario" onsubmit="return validarDadosCadastro()">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" >
                <p class="erro-input" id="erro-nome"></p>

                <label for="email">E-mail: </label>
                <input type="text" name="email" id="email" >
                <p class="erro-input" id="erro-email"></p>

                <label for="cargo">Cargo:</label>
                <select name="cargo">
                    <option value="Administrador">Administrador</option>
                    <option value="CEO" selected>CEO</option>
                    <option value="Chefe">Chefe</option>
                </select>
                <p class="erro-input" id="erro-cargo"></p>

                <label for="senha">Senha:</label>
                <input type="text" name="senha" id="senha" >
                <p class="erro-input" id="erro-senha"></p>
                
                <input type="submit">
            </form>
        </div>
</body>
<script src="./assets/js/script.js"></script>
</html>