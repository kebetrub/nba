<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title> Portada </title>
  <link rel="stylesheet" type="text/css" href="<?=ROOT . DT . VISTAS . DT . 'main.css' ?>" type="text/css" />
</head>
<body>
<?php
    include "menu.php";
?>
<div id="content">
    <?php      
        $key = keys[0][0];
        $idjugador = $params[$key];
        switch ($idjugador) {
            case 0:
                include_once('jugadores/jugador0.php');
                break;

            case 1:
                include_once('jugador1.php');
                break;

            case 2:
                include_once('jugador2.php');
                break;

            case 3:
                include_once('jugador3.php');
                break;
                
            case 4:
                include_once('jugador4.php');
                break;
                
            case 5:
                include_once('jugador5.php');
                break;

            default:
                # code...
                break;
        }

        ?>

        </div>
        </body>
        </html>