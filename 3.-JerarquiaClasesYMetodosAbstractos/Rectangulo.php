<?php

class Rectangulo extends Poligono {

    private $base;
    private $altura;

    public function __construct($b, $h){
        // La clase Rectangulo va tener 4 lados
        $this->lados = 4; // Atributo de la super clase poligono 
        $this->base = $b;
        $this->altura = $h;
    }

    // Implementamos los metodos abstractos
    public function perimetro(){
        return ($this->base + $this->altura) * 2;
    }

    public function area(){
        return $this->base * $this->altura;
    }

}

?>