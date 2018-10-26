<?php
return array(
    "routes" => array(
        "/" => array(
            "route" => "/",
            "page" => "equipo.php"
        ),
        
        "historia" => array(
            "route" => "/historia",
            "page" => "historia.php"
        ),

        "jugadores" => array(
                "route" => "/jugadores",
                "page" =>   "jugadores.php"
        ),


       "jugadores2" => array(
                "route" => "/jugador/:idjugador",
                "page" =>   "jugador.php"
        ), 

        "login" => array(
            "route" => "/login",
            "page" => "login.php"
        ),

        "compruebaLogin" => array(
            "route" => "/clogin",
            "page" => "compruebaLogin.php"
        ),
        
        "upload" => array(
            "route" => "/upload",
            "page" => "upload.php"
        ),

        "uploadMethod" => array(
            "route" => "/uploadMethod",
            "page" => "uploadMethod.php"
        ),
        
        "registro" => array(
            "route" => "/registro",
            "page" => "registro.php"
        ),

        "compruebaRegistro" => array(
            "route" => "/cregistro",
            "page" => "compruebaRegistro.php"
        ),


    ),
    "error" => "error.php"
);