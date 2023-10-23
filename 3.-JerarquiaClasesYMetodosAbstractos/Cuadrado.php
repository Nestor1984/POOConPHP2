<?php

class Cuadrado extends Poligono {

    private $lado;

    public function __construct($l){
        // La clase Cuadrado va tener 4 lados
        $this->lados = 4; // Atributo de la super clase poligono 
        $this->lado = $l;
    }

    // Implementamos los metodos abstractos
    public function perimetro(){
        return $this->lados * $this->lado;
    }

    public function area(){
        return pow($this->lado, 2);
    }

}

?>