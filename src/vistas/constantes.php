<?php

namespace App\vistas;

require_once '../../vendor/autoload.php';
require_once '../../config.php';

use App\vistas\includes\Header;
use PhpParser\Node\Stmt\Echo_;

new Header;
// -------------------------------
//Constantes

?>


<h1>Tipos de Constanttes </h1>
<ul>
    <li>
        <p>Usando DIFINE() ..</p>
    </li>
</ul>

<!--  Incia #1  practica-->
<?php
define('MICHI', 'Mr. Michi');
define('michi', 'Otro michi');
echo MICHI;
echo '<br>';
echo  michi;
?>
<p> <em>La constante define() por defecto es Sensitive.</em> </p>
<hr><!--  fim #1 practica-->

<!--  Incia #2  practica-->
<ul>
    <li>Constante define() Sensitive</li>
</ul>
<?php
define('DATO', '2024'); //No true ,define('DATO', '2024',true);
define('dato2', '2030');
echo DATO . '<br>';
echo '<p> Para php 8 ya no es posible usar el Argumento "true" es mejor usar "const" <p/>';
echo '<hr>';
?>


<!--  Incia #3  practica-->
<ul>
    <li>Constates CONST</li>
</ul>
<?php
const PI = 3.14;
const pi = 4.15;
echo 'El Valor de Constante PI es : ' . PI . '<br>';
echo 'El Sigiente Valor es : ' . pi . '<br>';
echo '<p> <em> Ambas son sensitivas </em> <p/>';
echo '<hr>';
?>

<!--  Incia #4  practica-->
<ul>
    <li>Constantes y Bloques de Codigo</li>
</ul>
<?php
define('VALOR', true);
//Bloque IF
if (VALOR) {
    echo 'Entra en el Bloque Condicional.';
    echo '<br>';
    echo 'Crea una CONST';
    echo '<br>';
    define('PERSONA', 'JOSERAFA');
    //CONST USUARIO_PRINCIPAL='JOSERAEL'; no se puede

}
echo 'Muestra el Valor de la Constante, CONST:' . PERSONA . '<br>';


//Bloque Clases, Cra una Clase.
const CODIGO = 78;
class animal
{
    // A partir de PHP 5.6.0
    public $nombre;
    public $edad;
    const TIPO = 'mamifero';
    const SENTENCIA = ' *El Animal,' . self::TIPO . ' y Codigo Resinto: ' . CODIGO;
    function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
}
echo '<p>Datos de la <b>Clase Animal</b> usando CONST<p/>' . '<br>';
$mascota = new animal('Firulay', 12);
echo 'Nombre: ' . $mascota->nombre . ' Edad: ' . $mascota->edad . $mascota::SENTENCIA;
echo '<br>';
echo '<hr>';
?>
<!--  Incia #5  practica-->
<ul>
    <li>Constantes Predifinidas en php</li>
</ul>
<?php
//e_error
echo '<p> Constante E_ERROR </p>';
echo 'Valor:' . E_ERROR . '<br/>';
echo '<p>Cosntente PHP_VERSION</p>';
echo 'Valore es:' . PHP_VERSION;
echo '<p>Constente __LINE__ </p>';
echo 'Valor es:' . __LINE__;
echo '<p> Constante __DIR__ .. </p>';
echo 'Valor:' . __DIR__;
echo '<p> Constante __NAMESPACE </p>';
echo 'Valor:' . __NAMESPACE__;
echo '<p> Constante __CLASE </p>';
echo 'Valor:' . __CLASS__;
?>

<?php

use App\vistas\includes\Footer;

new Footer;
?>