<?php
    // Verifica se cliente existe
    $stmt = $db->prepare("SELECT id FROM clientes WHERE id = ?");
    $stmt->execute([$data['cliente']['idCliente']]);
    if ($stmt->rowCount() === 0) {
        throw new Exception("Cliente não encontrado");
    }
    
    // Verifica estoque dos produtos
    foreach ($data['produtos'] as $produto) {
        $stmt = $db->prepare("SELECT estoque FROM produtos WHERE id = ?");
        $stmt->execute([$produto['id']]);
        $estoque = $stmt->fetchColumn();
        
        if ($estoque === false) {
            throw new Exception("Produto ID {$produto['id']} não encontrado");
        }
        
        if ($estoque < $produto['quantidade']) {
            throw new Exception("Estoque insuficiente para o produto ID {$produto['id']}");
        }
    }

?>