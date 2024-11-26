<?php
/* Incluindo atividade2.php */
include_once('atividade2.php');

/* Adicinando novo elemento na array */
array_push($frutas, "Laranja");

/* Exibindo a array */
foreach($frutas as $fruta){
    echo $fruta.'<br>';
}

/* Pulando linha */
echo '<br><br>';

/*organizando uma array */
sort($frutas);

/* Exibindo a array */
foreach($frutas as $fruta){
    echo $fruta.'<br>';
}

/* Pulando linha */
echo '<br><br>';

/* Exibe uma lista da array assiciada, onde $info e $pro são oa valores destacados e que saram exibidos no codigo */
foreach($produto as $info => $pro){
    echo $info . ": " . $pro . "<br>";
}

/* Pulando linha */
echo '<br><br>';

/* Muda o valor do preço */
$produto['Preco'] = 200.00;

/* Exibindo a array com o valor novo */
foreach($produto as $info => $pro){
    echo $info . ": " . $pro . "<br>";
}

/* Calcula o valor total de 5 itens */
$valortotal = $produto['Preco'] * 5 ;

/* Pulando linha */
echo '<br><br>';

// Calcula o valor
echo "O valor total é: ".$valortotal;

// Combina arrays
$array = array_combine($itens, $valor);

/* Pulando linha */
echo '<br><br>';

// Mostra array
print_r($array);

/* Pulando linha */
echo '<br><br>';

if(in_array("verde", $cores)){
    echo "Tem verde";
}

/* Pulando linha */
echo '<br><br>';

$total = array_sum($num);

echo "Total da soma da array: ", $total;
?>