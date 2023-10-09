<?php

class Telefono{

    public $marca;
    public $modelo;
    protected $alambrico = true;
    protected $comunicacion;

    public function __construct($marca, $modelo){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->comunicacion = ($this->alambrico)? "Alambrica": "Inalambrica";
    }

    public function llamar() {
		return print("<p>Riiiiing Riiiiing !!!!!</p>");
	}

    public function mas_info() {
		return print('<ul>
				<li>Marca <b>' . $this->marca . '</b></li>
				<li>Modelo <b>' . $this->modelo . '</b></li>
				<li>Comunicación <b>' . $this->comunicacion . '</b></li>
			</ul>');
	}

}

// El celular es una evolucion del Telefono
class Celular extends Telefono{

    protected $alambrico = false;

	public function __construct($marca, $modelo) {
		parent::__construct($marca, $modelo); // parent:: sirve para invocar a un metodo o atributo de la super clase, desde la clase hija.
	}

}

// El celular es una evolucion del Telefono
// Clase final: No pueden ser heredadas por otra (No puede tener clases hijas). Se definen anteponiendo la palabra clave final. 
final class SmarthPhone extends Celular{ // Esta clase es final por que no hay nada que evolucione del Smathphone

    public $alambrico = false;
	public $internet = true;

    public function __construct($marca, $modelo){
        parent::__construct($marca, $modelo);
    }

    // Polimorfismo: Cuando sobreescribimos un metodo en programacion estamos haciendo polimorfismo
    public function mas_info() {
		return print("<ul>
				<li>Marca <b>" . $this->marca . "</b></li>
				<li>Modelo <b>" . $this->modelo . "</b></li>
				<li>Comunicación <b>" . $this->comunicacion . "</b></li>
				<li>Dispositivo con Acceso a Internet</li>
			</ul>");
	}

}

echo "<h1>Evolucion del telefono</h1>";

echo "<h2>Telefono:</h2>";
$tel_casa = new Telefono("Panasonic", "KX-TS550");
$tel_casa->llamar();
$tel_casa->mas_info();

echo '<h2>Celular:</h2>';
$mi_cel = new Celular("Nokia", "5120");
$mi_cel->llamar();
$mi_cel->mas_info();

echo '<h2>SmarthPhone:</h2>';
$mi_sp = new SmarthPhone("Motorola", "G3");
$mi_sp->llamar();
$mi_sp->mas_info();

?>