<?php

namespace App\vistas;

require_once '../../vendor/autoload.php';
require_once '../../config.php';

use App\vistas\includes\Header;
use PhpParser\Node\Stmt\InlineHTML;

new header;
?>
<!-- CODIGO HTML -->

<h1>VARIABLES VARIABLES</h1>
<h5>Aqui estan los ejercicios realizados en Clases.</h5>

<ul>
    <li>Variable Practica uno</li>
</ul>
<?php
$variable = 'nombre';
$$variable = 'Mr.Michi';
echo $nombre . '<br>';
echo '<p> La Palabra "variable" es reemplazada por la palabra "nombre" por tanto muestra el valor de "nombre" </p>';
echo '<hr>';
?>
<!-- PRACTICA #2 -->
<ul>
    <li>Mas ejemplo</li>
</ul>
<?php
$nombre = 'Carlitos';
$edad = '11';
$comida_faborita = 'lasaña con berenjena';
$variable = 'nombre'; //ESte valor "nombre" puede ser sustituido
echo '<hr>';
?>
<ul>
    <li>Mas Ejemplo #3</li>
</ul>
<?php
$dog = 'woof';
$cat = 'meow';
$horse = 'Rebusna';
$opcion = '2'; //modifica el numero.
switch ($opcion) {
    case '1':
        $var = 'dog';
        break;
    case '2':
        $var = 'cat';
        break;
    case '3':
        $var = 'horse';
        break;

    default:
        $var = 'error';
        break;
}

echo $$var . '<br>';
?>
<!-- CODIGO PHP -->
<?php

use App\vistas\includes\Footer;

new footer;
?>