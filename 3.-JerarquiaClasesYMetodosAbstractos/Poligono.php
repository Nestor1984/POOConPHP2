<?php
// Esta es la clase abstracta

// La Herencia forzada
abstract class Poligono { // Las clases abstractas no pueden ser instanciadas

    protected $lados;

    // Los metodos abstractos no tienen cuerpo (solo debemos declararlos)
    abstract protected function perimetro();
    abstract protected function area();

    // Las clases abstractas tambien pueden tener metodos con cuerpo 
    public function lados(){
        return "Un <mark>" . get_called_class() . "</mark> tiene <mark>" . $this->lados . "</mark> lados"; // get_called_class() : Con este metodo de PHP imprimimos el nombre de la clase
    }

}

?>