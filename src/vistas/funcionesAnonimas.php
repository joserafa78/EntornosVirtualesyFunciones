<?php

namespace App\vistas;

require_once '../../config.php';
require_once '../../vendor/autoload.php';

use App\vistas\includes\Header;

new Header;
?>
<!-- CODIGO EN HTML-->
<h1>Funciones anonimas</h1>
<p>Las funciones anonimas tambien conocidas como CLUSURES , son funciones que podemos
    definir sin necesidad de asignar un nombre.
</p>
<hr>
<?php
echo "<p> Usando (array_map)un Arreglo para devolver otro arreglo.</p>";

$arregleNumeros = [2, 5, 2, 7, 3];
$nuevoArreglo = array_map(function ($current) {
    return $current * 3;
}, $arregleNumeros);
echo "<pre>";
print_r($nuevoArreglo);

echo '<img class="img_code" src="' . URL . 'imagen/code6.png" width="550" height="250" />';
echo "<br><hr>";
echo "<p>Segunda forma de usar una funcion Anonima en Array_map </p>";

$arreglosDos = [5, 6, 8, 4, 3, 7, 9];
$multiplica10 = function ($current) {
    return $current * 10;
};
$nuevoArregloMiltipicado = array_map($multiplica10, $arreglosDos);
echo "<pre>";
print_r($nuevoArregloMiltipicado);
echo '<img class="img_code" src="' . URL . 'imagen/code7.png" width="550" height="280" />';
echo "<br><hr>";
echo "<p> Usando al Palabra Reservada 'USE' para pasar Variables al ambito local de una Funcion. </p>";

$name = "Mr,Michi";
$chage_michi_name = function () use ($name) {
    echo "$name";
};
$chage_michi_name();
echo '<img class="img_code" src="' . URL . 'imagen/code8.png" width="550" height="280" />';
echo "<p> Ojo:Usar la palabra USE nos da la valor de una variable pero solo para poder Leerla, no la
podemos SobreEscribir.</p>";
?>

<?php

use App\vistas\includes\Footer;

new Footer;
?>