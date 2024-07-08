<?php

namespace App\vistas;

require_once '../../config.php';
require_once '../../vendor/autoload.php';

use App\vistas\includes\Header;

new Header;
?>
<!-- CODIGO EN HTML-->
<h1>Declaraciones de Tipo Scalar</h1>
<p>Es cuando indicamos en una funcion que tipo de datos queremos recibir explicitamente.
</p>




<?php

function calcula_area(int $base, int $altura, string $nombre)
{
    return 'El nombre es ' . $nombre . ' Area: ' . ($base * $altura) / 2;
}
echo calcula_area(10, 20, 'Mr,Michi');
echo "<br>";
echo '<img class="img_code" src="' . URL . 'imagen/code11.png" width="650" height="250" />';
echo "<hr>";



?>

<?php

use App\vistas\includes\Footer;

new Footer;
?>