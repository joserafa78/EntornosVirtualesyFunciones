<?php

namespace App\vistas;

require_once '../../config.php';
require_once '../../vendor/autoload.php';

use App\vistas\includes\Header;

new Header;
?>
<h1>Variables super Globales</h1>
<p>son variables que estan diponibles en cualquier parte de tu codigo</p>
<!-- Ejercicio #1 de Variables super globales; -->
<ul>
    <li>Variable Super Global $GLOBALS</li>
</ul>
<?php
function miNuevaFuncion()
{
    global $miVariableLocal;
    $miVariableLocal = 'Jose Rafael Jimenez';

    return $miVariableLocal;
}
//echo miNuevaFuncion();
echo "<pre>";
var_dump($GLOBALS);
echo "<br><hr>";
?>
<!-- Ejercicio #2 de Variables super globales; -->
<ul>
    <li>Variable Super Global "_GET"</li>
</ul>
<?php
echo "<pre>";
var_dump($_GET);
echo "Digita en el Navegador la Varaible michi <br>";
// -------------
echo '<img class="img_code" src="' . URL . 'imagen/variabel_Get_michi.png" width="550" height="180" />';
echo "<br>";
function local_scope()
{
    echo $_GET['michi'];
}
echo "Muestra el Valor en la Variable Global:" . '<br>';
local_scope();
echo "<br><hr>";
?>


<?php

use App\vistas\includes\Footer;

new Footer;

?>