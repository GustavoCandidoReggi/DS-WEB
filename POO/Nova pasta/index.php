<?php
Class lapis{
    public $madeira;
    public $grafite;
    public $cargainerte;
    public $marca;
    public $cor;

    public function contorno() {
        return "O lapís contorna com a cor ".$this->cor;
    }
    public function sombreameto() {
        return "ele faz sonbreamento".$this->grafite;
    }
    public function tonsdecinza() {
        return "Ele pode fazer tons de cinza".$this->cargainerte;
    }
}
$item = new lapis;
$item->grafite = "Tamanho 6b";
$item->madeira = "Da amazonia";
$item->cargainerte = "16";
$item->marca = "beck";
$item->cor = "Preto";

echo $item->grafite."<br>";
echo $item->madeira."<br>";
echo $item->cargainerte."<br>";
echo $item->marca."<br>";
echo $item->cor."<br>";

Class tv{
    public $plastico;
    public $ferro;
    public $aluminio;
    public $cobre;
    public $zinco;

    public function Mostrarimagem() {
        return "Diferencia a cor da tv ".$this->plastico;
    }
    public function ferro() {
        return "Conduz eletricdade ".$this->grafite;
    }
    public function cobre() {
        return "Conduz eletriciade tambem".$this->cargainerte;
    }
}

$item1 = new tv;
$item1-> plastico = "Grande";
$item1-> ferro = "Poco";
$item1-> aluminio = "Suficiente";
$item1-> cobre = "Bastante";
$item1-> zinco = "Pouco";

echo $item1-> plastico."<br>";
echo $item1-> ferro."<br>";
echo $item1-> aluminio."<br>";
echo $item1-> cobre."<br>";
echo $item1-> zinco."<br>";

Class Arcondicionado{
    public $plastico;
    public $ferro;
    public $cobre;
    public $tamanho;
    public $cor;

    public function cor() {
        return "Cor do ar condicionado ".$this->cor;
    }
    public function plastico() {
        return "É a parte de fora do ".$this->grafite;
    }
    public function tamanho() {
        return "Ele muda a potencia de acordo com o tamanho".$this->cargainerte;
    }
}

$item2 = new Arcondicionado;
$item2-> plastico = "Grande";
$item2-> ferro = "Pouco";
$item2-> cobre = "Muito";
$item2-> tamanho = "2 Metros";
$item2-> cor = "Branco";

echo $item2-> plastico."<br>";
echo $item2-> ferro."<br>";
echo $item2-> cobre."<br>";
echo $item2-> tamanho."<br>";
echo $item2-> cor."<br>";

Class Lousa{
    public $plastico;
    public $ferro;
    public $cobre;
    public $marca;
    public $tamanho;

    public function plastico() {
        return "Parte esterior da Lousa ".$this->cor;
    }
    public function ferro() {
        return "É da borda ".$this->grafite;
    }
    public function tamanho() {
        return "Mais espaço para escrever".$this->cargainerte;
    }
}

$item3 = new Lousa;
$item3-> plastico = "Frente";
$item3-> ferro = "muito";
$item3-> cobre = "pouco";
$item3-> marca = "polo";
$item3-> tamanho = "3,5m";

echo $item3-> plastico."<br>";
echo $item3-> ferro."<br>";
echo $item3-> cobre."<br>";
echo $item3-> marca."<br>";
echo $item3-> tamanho."<br>";

Class Mesa{
    public $plastico;
    public $ferro;
    public $botoes;
    public $marca;
    public $cor;

    public function plastico() {
        return "É a parte esterna ".$this->cor;
    }
    public function cor() {
        return "É a cor do objeto".$this->grafite;
    }
    public function marca() {
        return "É a marca da mesa".$this->cargainerte;
    }
}

$item4 = new Mesa;
$item4-> plastico = "Velho";
$item4-> ferro = "lateral";
$item4-> madeira = "da Amazonia";
$item4-> marca = "Mesan";
$item4-> cor = "Branca";

echo $item4-> plastico."<br>";
echo $item4-> ferro."<br>";
echo $item4-> madeira."<br>";
echo $item4-> marca."<br>";
echo $item4-> cor."<br>";

class ContaBancaria1{
    public $numerodaconta;
    public $nomedotitular;
    public $saldo;
    public $saque;
    public $deposito;

    public function depositar($deposita){
        $this-> saldo += $deposita;
        return "o saldo depositado foi de: R$".$this->saldo;
    }
    public function sacar($deposita){
        $this->saldo -= $deposita;
        return "O saque feito foi de: R$".$this->saque;
    }
}
$contaduque = new ContaBancaria1();
$contaduque->saldo = 500;
$contaduque->numeroConta = 12342123;
$contaduque->titular = "duque";


echo $contaduque->depositar(10);


?>