<?php

namespace App\vistas;

require_once '../../config.php';
require_once '../../vendor/autoload.php';

use App\vistas\includes\Header;

new Header;
?>
<!-- CODIGO EN HTML-->
<h1>Arrow Funtion</h1>
<p>Son funciones anonimas mas concisas, se definen en una sola linea.
</p>
<hr>
<?php

$cajero = 0;
$asigna = fn ($add) => $cajero + $add;

echo $asigna(55);
echo "<br>";
echo '<img class="img_code" src="' . URL . 'imagen/code9.png" width="550" height="250" />';
echo "<br>";
echo "Nota: El ambito de un funcion Flecha me sirve solo para leer no para modificar 
variables.";
echo "<br><hr>";
echo "<p>Usando 'funicon Flecha' en colbas </p>";

$edades = [12, 15, 20, 10, 33, 9, 45, 13, 27, 6, 72, 11, 18];
$mayores = array_filter($edades, function ($current) {
    return $current >= 18;
});
echo "<pre>";
echo "Resultado de Mayores de Edad:";
print_r($mayores);
echo '<img class="img_code" src="' . URL . 'imagen/code10.png" width="550" height="250" />';
echo "<p>Usando funciones tipo Flecha en un Collback  </p>";
$menores = array_filter($edades, fn ($current) => $current < 18);
echo "<pre>";
echo "Menores de edad;";
print_r($menores);
?>

<?php

use App\vistas\includes\Footer;

new Footer;
?>