<?php

namespace App\vistas;

require_once '../../config.php';
require_once '../../vendor/autoload.php';

use App\vistas\includes\Header;

new Header;
?>
<!-- codigo html -->
<h1>¿Que son las Funciones Variables?</h1>
<p>Son lo mismo que las variables variables, pero aplicado a funcines.la ventaja
    que podemos empezar a mandar a llamar a partir de cadenas de texto dinamicas.
</p>
<!-- Ejercicio numero 1 -->
<ul>
    <li>Funcion Variable</li>
</ul>
<?php
function saludando($dato1)
{
    return 'Hola soy Funcion Saludar,' . $dato1;
}
function comer()
{
    return 'Estoy comiendo ahora un rica Hamburquesa-';
}
function estudiando($dato2)
{
    return "Soy $dato2 estoy en Bibiliteca Codeando y Estudiando.";
}


$variable = 'estudiando';
echo $variable('JoseRafa');
echo "<br><hr>";

?>




<?php

use App\vistas\includes\Footer;

new Footer;
?>