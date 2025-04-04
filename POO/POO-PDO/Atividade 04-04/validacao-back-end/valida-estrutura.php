<?php
    $json = file_get_contents('php://input');
    if (empty($json)) {
        throw new Exception("Nenhum dado JSON recebido");
    }
    
    $data = json_decode($json, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception("JSON inválido: " . json_last_error_msg());
    }
    
    if (!isset($data['venda'])) {
        throw new Exception("Estrutura de dados inválida: campo 'venda' ausente");
    }
    
    if (!isset($data['produtos']) || !is_array($data['produtos'])) {
        throw new Exception("Estrutura de dados inválida: campo 'produtos' ausente ou não é array");
    }
?>