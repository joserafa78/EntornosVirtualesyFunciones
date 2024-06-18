<?php

namespace App\vistas;

require_once '../../config.php';
require_once '../../vendor/autoload.php';

use App\vistas\includes\Header;

new Header;
?>
<!-- CODIGO EN HTML-->
<h1>Parametros por Referencia</h1>
<p>¿En donde Guarda mi computador las variables? cuado declaramos una variable lo que socede
    es que ocupa un lugar en tu mamoria para guardar el valor de dicha variable.
</p>
<p>¿Y Como sabe PHP que lugar de memoria se ocupo? Bueno php lo sabe porque guarda la referencia de ese lugar</p>
<?php

$varibleMemoria_A = 'Dato Guardado';

function mostrarDato(&$dato)
{
    $dato = 'Dato atualizado';
    return "Muestra valor:" . $dato;
}

echo mostrarDato($varibleMemoria_A);
echo "<br>";
echo $varibleMemoria_A;
echo "<br><hr>";
?>
<?php

use App\vistas\includes\Footer;

new Footer;
?>