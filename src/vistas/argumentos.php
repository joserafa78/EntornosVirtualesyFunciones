<?php

namespace App\vistas;

require_once '../../config.php';
require_once '../../vendor/autoload.php';

use App\vistas\includes\Header;

new Header;
?>
<!-- codigo en html -->
<h1>Argumentos en Produndidad</h1>
<ul>
    <li>Arreglos como Argumentos</li>
</ul>
<?php
//Sumando un arreglo con funcio pre difinida
function suma_edades($edades = array(13, 17, 16, 15))
{
    return array_sum($edades);
}
echo 'Resultado es: ' . suma_edades();
echo "<br>";
echo '<img src= "' . URL . 'imagen/code2.png" width="400" height="250">';
echo "<br><hr>";
?>
<ul>
    <li>Parametros por Defecto</li>
</ul>
<?php
function multiplicar($n1 = 2, $n2 = 5, $n3 = 8)
{
    return $n1 * $n2 * $n3;
}

echo "Resultado de Multiplicar es: " . multiplicar();
echo "<br>";
echo '<img src= "' . URL . 'imagen/code3.png" width="400" height="250">';
echo "<br><hr>";
?>
<ul>
    <li>Delarando un Clase como Argumento</li>
</ul>
<?php
class UnaClaseRandon
{
    public $valor;
    public function __construct($valor)
    {
        $this->valor = $valor;
    }
}
$miclase = new UnaClaseRandon('HOOLA');
function recibe_clase($clase)
{
    return $clase::class . '--' . $clase->valor;
}
echo "Resultado:" . recibe_clase(new UnaClaseRandon('Probando.'));
echo "<br>";
echo '<img src= "' . URL . 'imagen/code4.png" width="400" height="310">';
echo "<br><hr>";
?>


<?php

use App\vistas\includes\Footer;

new Footer;
?>