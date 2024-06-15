<?php

namespace App\vistas;

require_once '../../config.php';
require_once '../../vendor/autoload.php';

use App\vistas\includes\Header;
use PhpParser\Node\Stmt\Echo_;

new Header;
?>

<h1>Scope de Variables</h1>
<h5>Es el contexto donde una variable es definida , usualmente la variable tiene un ambito simple
    , es decir esta disponible en todos los archivos
</h5>
<hr>
<!-- Ejercicio #1 -->
<ul>
    <li>Ambito Local</li>
</ul>
<p>Es cuando definimos una variable dentro de una funcion como el ejemplo a contincuacion.</p>
<?php

function my_function()
{
    global $resultado;
    $num1 = 20;
    $num2 = 30;
    $resultado = 'La Suma total es: ' . $num1 + $num2;
    return $resultado;
}
echo my_function() . '<br>';
echo $resultado . '<br>';
echo '<img class="img_code" src="' . URL . 'imagen/code.png" width="350" height="250" />';
echo '<hr>';
?>
<!-- Ejercicio #2 -->
<ul>
    <li>Variables Super Globales Arreglo</li>
</ul>
<p>Imprimiendo Arreglo de Variables con "$GLOBALS"</p>
<?php
echo "<pre>";
print_r($GLOBALS);
echo '<hr>';
?>
<!-- Ejercicio #3 -->
<ul>
    <li>Variables Super Globales ( resultado )</li>
</ul>
<P>Nos muestra el Arreglo Super Global la Variable que hemos Crado..</P>
<?php
echo "<pre>";
echo "Resultado de la Variable" . '<br>';
print_r($GLOBALS['resultado']);
echo "<hr>";


?>

<?php

use App\vistas\includes\Footer;

new Footer;
?>