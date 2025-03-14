<?php

abstract class animal{
    public function fazersom(){}
}

class Cachorro extends animal{
    public function parent::fazersom(){
        echo "Animal faz som";
    }
}
echo Cachorro();



?>