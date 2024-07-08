<?php

namespace App\vistas;

require_once '../../config.php';
require_once '../../vendor/autoload.php';

use App\vistas\includes\Header;

new Header;
?>
<!-- CODIGO EN HTML-->
<h1>Nombre de Argumentos</h1>
<p>Son una forma de pasarle parametros a una funcion basandose en el nombre del parametro en lugar
    de la posicion. Solo disponive en PHP 8
</p>

<?php

function saludar($name, $age, $country)
{
    echo "Hola mi nombre es $name  y tengo $age años y mi nacionalidad es $country";
}

saludar(age: 25, name: 'Dalila', country: 'Colombia'); // Llama a la funcion

echo "<br><hr>";
echo '<img class="img_code" src="' . URL . 'imagen/code5.png" width="550" height="250" />';
?>

<?php

use App\vistas\includes\Footer;

new Footer;
?>