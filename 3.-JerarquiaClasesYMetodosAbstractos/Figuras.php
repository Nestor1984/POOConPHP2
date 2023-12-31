<?php
// Clase principal
require "Poligono.php";
require "Triangulo.php";
require "Cuadrado.php";
require "Rectangulo.php";
require "Hexagono.php";

echo "
	<h1>Polígonos</h1>
	<p>Figura geométrica plana que está limitada por tres o más rectas y tiene tres o más ángulos y vértices.</p>
	<h2>Perímetro</h2>
	<p>El perímetro de un polígono es igual a la suma de las longitudes de sus lados.</p>
	<h2>Área</h2>
	<p>El área de un polígono es la medida de la región o superficie encerrada por un polígono.</p>
	<hr>
";

echo '
    <h3>Tríangulo</h3>
    <img src="imagenes/20110217201904-perimetro-triangulo.jpg" alt="imagen de las 3 formulas">
';
$triangulo = new Triangulo(3, 6, 9, 10);
echo "<p>" . $triangulo->lados() . "</p>";
echo "<p>Perimetro del " . get_class($triangulo) . ": <mark>" . $triangulo->perimetro() . "</mark></p>"; // get_class(): obtener_laClase(ALaQuePerteneceEsteObjeto)
echo "<p>Area del " . get_class($triangulo) . ": <mark>" . $triangulo->area() . "</mark></p>"; // get_class(): obtener_laClase(ALaQuePerteneceEsteObjeto)
echo "<hr>";

echo '
<h3>Cuadrado</h3>
<img src="imagenes/Area-y-perimetro-de-un-cuadrado-formulas.png">
';
$cuadrado = new Cuadrado(7);
echo "<p>" . $cuadrado->lados() . "</p>";
echo "<p>Perimetro del " . get_class($cuadrado) . ": <mark>" . $cuadrado->perimetro() . "</mark></p>"; // get_class(): obtener_laClase(ALaQuePerteneceEsteObjeto)
echo "<p>Area del " . get_class($cuadrado) . ": <mark>" . $cuadrado->area() . "</mark></p>"; // get_class(): obtener_laClase(ALaQuePerteneceEsteObjeto)
echo "<hr>";

echo '
	<h3>Rectangulo</h3>
	<img src="imagenes/3.-Área-y-perímetro-de-rectángulos.jpg">
';
$rectangulo = new Rectangulo(5, 6);
echo "<p>" . $rectangulo->lados() . "</p>";
echo "<p>Perímetro del " . get_class($rectangulo) . ": <mark>" . $rectangulo->perimetro() . "</mark></p>";
echo "<p>Área del " . get_class($rectangulo) . ": <mark>" . $rectangulo->area() . "</mark></p>";
echo "<hr>";

echo '
	<h3>Hexágono</h3>
	<img src="imagenes/descarga.png" width="500px">
';
$hexagono = new Hexagono(8, 9);
echo '<p>' . $hexagono->lados() . '</p>';
echo '<p>Perímetro del ' . get_class($hexagono) . ': <mark>' . $hexagono->perimetro() . '</mark></p>';
echo '<p>Área del ' . get_class($hexagono) . ': <mark>' . $hexagono->area() . '</mark></p>';
echo '<hr>';

?>