<?php
require_once 'config.php';

use App\vistas\includes\Header;

new Header;
?>


<h1>Portada Principal</h1>
<h4>Entornos Virtuales y funciones General.</h4>
<p>Aqui esta las practicas realizadas por cada tema en el curso de platzi, gracias.</p>
<a href="https://drive.google.com/drive/folders/1JCbQprua24ufeROATCmFsOsTwnJ7EZl3?usp=drive_link"> Carpeta Drive</a>
<p>En este ling accederas a la carpeta de Google Driver para descargar todo el Curso trascrito en formato PDF y EPUD
    para tu libro elctronico y leerlo cuando de plazca, de esa manera reforzaras tu aprendizaje de conceptos.</p>
<p>En la carpeta de google tambien se encuentran los Archivos Exportados de "Anky" para repasar las Flash Card.</p>
<hr />
<br>
<div>

    <img src="<?= URL ?>/imagen/Portada_curso.png " alt="">
</div>
<?php

use App\vistas\includes\Footer;

new Footer;
?>