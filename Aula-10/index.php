<?php


//Função Adição
function soma($primeiro, $segundo){
    $resultado = $primeiro + $segundo;
    return $resultado;
  }

//Função Subtração
function sub($primeiro, $segundo){
    $resultado = $primeiro - $segundo;
    return $resultado;
}

//Função Divisão
function div($primeiro, $segundo){
    $resultado = $primeiro / $segundo;
    return $resultado;
}

//Função Multiplicação
function mult($primeiro, $segundo){
    $resultado = $primeiro * $segundo;
    return $resultado;
}

//Titulo e nome da pagina
echo "<head><title>Calculadora</title></head>";
echo "<h1>Calculadora</h1><br><br>";

//Inicio do Formulário
echo "<form action='index.php' method='POST'>";

//Primeiro numero
echo "<label>Primeiro Valor: </label>";
echo "<input type='number' required id='primeiro' name='primeiro' max='9999'>
<br><br>";

//Segundo numero
echo "<label>Segundo valor: </label>";
echo "<input type='number' required id='segundo' name='segundo' max='9999'>
<br><br><br>";

//Escolha da operação
echo "<select name='opera' required>
<option value='Adição'>Adição</option>
<option value='Subtração'>Subtração</option>
<option value='Divisão'>Divisão</option>
<option value='Multiplicação'>Multiplicação</option>
</select>
<br><br><br>";



//Verifica se o formulario foi enviado e se exite
if($_SERVER['REQUEST_METHOD']=='POST'){

    //Recebe os valores do input
    $primeiro = $_POST['primeiro'];
    $segundo = $_POST['segundo'];
    $opera = $_POST['opera'];
    
    
    if($segundo == '' or $segundo == '0' and $opera == 'Divisão')
        echo "Não é aceito 0 e nem letras";
    
    //Operação soma
    elseif($opera == 'Adição'){
        $resultado = soma($primeiro, $segundo);
        
    }
    //Operação subtraçaõ
    elseif($opera == 'Subtração'){
        $resultado = sub($primeiro, $segundo);
    }
    //Operação Divisão
    elseif($opera == 'Divisão'){
        $resultado = div($primeiro, $segundo);
    }
    //Operação Multiplicação
    elseif($opera == "Multiplicação"){
        $resultado = mult($primeiro, $segundo);
    }
    }

//Resultado da operação
if (isset($resultado)){
echo "<h3>Resultado: </h3>  ".$resultado;
echo "<br><br>".$opera;
echo "<br><br><br>";
}
//Botão de enviar e limpar
echo "<button type='submit'>Enviar</button>";
echo "<button type='reset' name='reset'>Limpar</button>";


echo "</form>";
?>