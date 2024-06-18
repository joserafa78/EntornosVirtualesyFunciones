<?php

namespace App\vistas;

require_once '../../config.php';
require_once '../../vendor/autoload.php';

use App\vistas\includes\Header;

new Header;
?>
<!-- CODIGO EN HTML -->
<h1>Match</h1>
<p>Es un nueva estructura en php que te apuesto que te va a gustar y es la estructura Match</p>
<ul>
    <li>Usando la Estructura switch</li>
</ul>
<?php
function mycontry($country)
{
    switch ($country) {
        case 'mx':
            $dato = 'Mexico';
            break;
        case 'col':
            $dato = 'Colombia';
            break;
        case 've':
            $dato = 'Venezuela';
            break;

        default:
            $dato = 'Error Pais no encontrado.';
            break;
    }
    return $dato;
}

echo mycontry('col'); //AQui modifico iniciales.
echo "<hr>";
?>
<ul>
    <li>Usando MATCH</li>
</ul>

<?php
function get_coutry($country)
{
    return match ($country) {
        "MX" => 'MEXICO',
        'COL' => 'COLOMBIA',
        "EUA" => 'ESTADOS UNIDOS DE AMIRICA',
        default => 'lo Siento No encontrado.'
    };
}

echo get_coutry('EUA');


?>






<?php

use App\vistas\includes\Footer;

new Footer;
?>