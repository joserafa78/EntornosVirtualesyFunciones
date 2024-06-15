<?php

namespace App\vistas;

require_once '../../config.php';
require_once '../../vendor/autoload.php';

use App\vistas\includes\Header;

new Header;
?>
<h1>Re - Direcciones</h1>
<p>Es cuando tu manda a un usuario de una pagina a otra.</p>
<hr>
<ul>
    <li>La funcion "header()"</li>
</ul>
<p>La funcion header() practicametne nos permite definirnos encabezados de un peticion.</p>
<hr>
<ul>
    <il>Consideraciones al usar funcion header()</il>
</ul>
<p>Los Encabezados simpre deben ser enviados antes de enviar el cuerpo de la peticion, es decir antes de mandar el contenido.</p>
<hr>
<!-- Ejercicio #2  -->
<ul>
    <li>Direcionando con Funcion header()</li>
</ul>
<p>Presiona aqui en sera re-direcionado a la Plaforma PLATZI a traves del Servidor.</p>
<!-- llama a la pagina redireccionplatzi.php -->
<a href="<?= URL ?>src/vistas/redireccionplatzi.php">RE-DIRECIONA</a>
<?php


?>



<?php

use App\vistas\includes\Footer;

new Footer;
?>