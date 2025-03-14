<?php

class pessoa{
    public $nome;
    protected $idade;

    public function getIdade(){
        return $this->idade;
    }
}

class funcionario extends pessoa{
    protected $salario;
    
    public function salario(){
        $this->salario = 2000;
        return $this->salario;
    }
}
class gerente extends funcionario{
    public $salariog;

    public function bonusg(){
        $this->salariog = $this->salario * 1.2;
        return $this->salariog;
    }
}

class desenvolvedor extends funcionario{
    public $salariod;

    public function bonusd(){
        $this->salariod = $this->salario * 1.1;
        return $this->salariod;
    }
}
$gustavo = new gerente;
$gustavo->nome = "Gustavo";
$gustavo->idade = 23;
echo "Salario de outros funcionarios: " . $gustavo->salario() . "<br>";
echo "Salario do gerente $gustavo->nome: " . $gustavo->bonusg() . "<br>";

$luis = new desenvolvedor;
$luis->salario();
echo "Salario de desenvolvedor  " . $luis->bonusd();



?>