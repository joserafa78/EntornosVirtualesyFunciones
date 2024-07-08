<?php

namespace App\vistas;

require_once '../../config.php';
require_once '../../vendor/autoload.php';

use App\vistas\includes\Header;

new Header;
?>
<!-- CODIGO EN HTML-->
<h1>Declaraciones de Tipo Devolucion</h1>
<p>Es cuando indicamos el tipo de datos que vamos a devolver en una funcion.
</p>




<?php
class Persona
{
    public $nombre = 'jose';
}
function calcula(Persona $nombre, int $valor): string
{
    return "Su nombre: $nombre->nombre El valor es: $valor";
}
echo calcula(new Persona, 33);
echo "<br>";
echo '<img class="img_code" src="' . URL . 'imagen/code12.png" width="650" height="250" />';
echo "<hr>";
?>

<?php

use App\vistas\includes\Footer;

new Footer;
?>