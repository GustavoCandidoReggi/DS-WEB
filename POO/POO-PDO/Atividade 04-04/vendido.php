<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
    <link rel="shortcut icon" type="imagex/png" href="./assets/img/ico.svg">
    <link rel="stylesheet" href="./assets/style/style.css">
</head>
<body>
<a href="./venda.php">Sair</a>

    <?php  
    include 'conexao.php';
        echo "<h1>Vendas</h1>";
        echo "<h4>Gerencia Vendas</h4>";
        echo "<a href='venda.php>oiiiii</a>";
        echo "<a href='../venda.php'><i class='fa-solid fa-rotate-left'></i></a></h1>";
        echo "<table id='vendidos'>";
        echo "
            <tr>
                <th>Id Cliente</th>
                <th>Id Produto</th>
                <th>Id Venda</th>
                <th>Nome</th>
                <th>Data</th>
                <th>Preço</th>
                <th>Quantidade</th>
            </tr>
        ";

        $dados = $db->query("SELECT * FROM vendas");
        $vendas = $dados->fetchAll(PDO::FETCH_ASSOC);
        
        
        foreach($vendas as $venda){
            extract($venda);
            $stmt = $db->prepare("SELECT * FROM clientes WHERE id = :id");
            $stmt->bindParam(":id", $idCliente);
            $stmt->execute();
            $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $dados1 = $db->prepare("SELECT * FROM produtosvendidos WHERE idVenda = :idVenda");
            $dados1->bindParam(":idVenda", $id);
            $dados1->execute();
            $produtos = $dados1->fetchAll(PDO::FETCH_ASSOC);

            

            foreach($produtos as $produto){
                extract($produto);
                $stmt = $db->prepare("SELECT * FROM produtos WHERE id = :id");
                $stmt->bindParam(":id", $idProduto);
                $stmt->execute();
                $ProV = $stmt->fetch(PDO::FETCH_ASSOC);




                extract($venda);
                echo "<tr>";
                echo "<td>".$idCliente."</td>";
                echo "<td>".$idProduto."</td>";
                echo "<td>".$idVenda."</td>";
                echo "<td>".$cliente['nome']."</td>";
                echo "<td>".$dataVenda."</td>";
                echo "<td>".$preco."</td>";
                echo "<td>".$quantidade."</td>";
                echo "</tr>";
            
        

        }}
        echo "</table>";
    ?>
    </div>
</body>
</html>