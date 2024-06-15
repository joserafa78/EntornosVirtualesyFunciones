<?php

declare(strict_types=1);
//_____________NOMBRE DE ESPACIO____________________
namespace App\vistas\includes;
//_____________________________________
class  Header
{
    //METODOS<
    public function __construct()
    {
        if (!isset($_SESSION['mostrar'])) { //Chekea que Variable Este Definida
            $_SESSION['mostrar'] = "todo";  //Sino la Crea.
        }

        $listaOrdenada = [
            array('url' => URL . 'index.php', 'titulo' => 'Inicio'),
            array('url' => URL . 'src/vistas/constantes.php', 'titulo' => 'Constantes '),
            array('url' => URL . 'src/vistas/variablesVariables.php', 'titulo' => 'Variables'),
            array('url' => URL . 'src/vistas/escopevariable.php', 'titulo' => 'Scope Variable php'),
            array('url' => URL . 'src/vistas/variablesuperglobales.php', 'titulo' => 'Variables Super Glovales'),
            array('url' => URL . 'src/vistas/redireccion.php', 'titulo' => 'Re-Direccion'),
            array('url' => URL . 'src/#', 'titulo' => 'Match'),
            array('url' => URL . 'src/#', 'titulo' => 'Funciones Variables'),
            array('url' => URL . 'src/#', 'titulo' => 'Parametros Por Referencia'),
            array('url' => URL . 'src/#', 'titulo' => 'Argumentos'),
            array('url' => URL . 'src/#', 'titulo' => 'Named Argument'),
            array('url' => URL . 'src/#', 'titulo' => 'Funciones Anonimas'),
            array('url' => URL . 'src/#', 'titulo' => 'Arrow fuction'),
            array('url' => URL . 'src/#', 'titulo' => 'Tipo Scalar'),
            array('url' => URL . 'src/#', 'titulo' => 'Tipo Devolucion'),
            array('url' => URL . 'src/#', 'titulo' => 'Fin'),
        ];
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="<?= URL ?>src/estilo/style-header.css">
            <link rel="stylesheet" href="<?= URL ?>src/estilo/estilo-footer">
            <title>Portada</title>
        </head>

        <body>
            <div id="sidemenu" class="menu-collapsed">
                <!-- HEADER -->
                <div id="header">
                    <div id="title"> <span>Platzi</span>
                    </div>
                    <div id="menu-btn">
                        <div class="btn-hamburger"></div>
                        <div class="btn-hamburger"></div>
                        <div class="btn-hamburger"></div>
                    </div>
                </div>
                <!-- PROFILE  -->
                <div id="profile">
                    <div id="photo">
                        <img src="<?= URL ?>imagen/JoseRafaelJimenez.jpg"></img>
                    </div>
                    <div id="name"><span>Jose Rafel Jimenez</span></div>
                </div>
                <!-- ITEM  -->
                <div id="menu-items">
                    <?php foreach ($listaOrdenada as $key => $value) : ?>
                        <div class="item">
                            <a href="<?= $value['url'] ?>">
                                <div class="icon"><img src="<?= URL ?>icons/cloud-services.png" alt=""></div>
                                <div class="title"><span><?= $value['titulo'] ?></span></div>
                            </a>
                        </div>
                        <div id="item separator"></div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div id="main-container"> <!--Apertura de Caja main-containeer -->



        <?php
    }
};
        ?>