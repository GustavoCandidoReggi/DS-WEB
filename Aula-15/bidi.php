<?php
//Inclui o bidi.php
include_once('bidi2.php');

// Exemplo 1 que mostra o nome e valor do produto
foreach($produto as $items){
    foreach($items as $item){
        echo $item." ";
    }
    echo "<br>";    
}

// Pula linha
echo "<br>";

// Exemplo 2 que mostra o nome e valor do produto
foreach($produto as $items){
    echo $items['nome']." ".$items['Preco']." ".$items['estoque']." ";
    $valortotal = $items['Preco'] * $items['estoque'];
    echo 'R$'.$valortotal.'<br>';
}

// Pula linha
echo "<br><br>";


foreach($alunos as $notas){
    echo $notas['nome']." LP: ".$notas['matematica']."  MAT: ".$notas['portugues']."  Média: ";
    $valor = ($notas['matematica'] + $notas['portugues'])/2;
    echo $valor.'<br>';
}



?>