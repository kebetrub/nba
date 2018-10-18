<?php

$logged = false;
session_start();
$userName = null;
$avatar = null;
$logout = $_POST["logout"];    // guarda la variable de cerrar sesion para poder usarla en el index

function compruebaLogin() {

if(isset($_COOKIE["CookieLogin"])){
 
$_SESSION["CookieLogin"]=time()+604800;  // Si la cookie es correcta inicia sesion
 $CookieExplode=$_COOKIE["CookieLogin"];
$Explode = explode(";" , $CookieExplode);
$_SSESSION["User"] = $Explode[0];
$_SESSION["Pass"] = $Explode[1];

}
}





compruebaLogin();


if(isset($_SESSION['fallo_login'])){
    $message = "Los datos introducidos son incorrectos";
    echo "<script type='text/javascript'>alert('$message');</script>"; // Mensaje de error si los datos de inicio son incorrectos y los borra
    unset($_SESSION["fallo_login"]);

}


function cerrarSesion() {
  
    setcookie("CookieLogin","$usuario[0]",time()-1); //Borra la cookie=cierra sesion.
    unset($_SESSION["CookieLogin"]);
    //unset($_SESSION["CookieLogin"]);
    }




if(isset($_POST['logout']))  {  // Ejecuta la funcion de cerrar sesion cuando se le envia la orden en el menu.
cerrarSesion();
}





$routes = include "routes.php";
$page = null;
include "config.php";

//parsear la url
$page = null;
$uri = trim($_SERVER["REQUEST_URI"], "/");


// Buscar la ruta en el array $routes

foreach($routes["routes"]as $currentRoute) {
    $route = trim($currentRoute["route"], "/");
    //if ($route == $uri) {
        $routePattern = "#^" . preg_replace('/\\\:[a-zA-Z0-9\_\-]+/', '([a-zA-Z0-9\-\_]+)', preg_quote($route)) ."$#D";

        $matchesParams = array();

       // break;

//}


if (preg_match_all($routePattern, $uri, $matchesParams)){
//var_dump ($matchesParams);
//Keys for params
$keys = array();
$params = array();

//remove the first element
array_shift($matchesParams);

// getting the keys names
preg_match_all('/\\:([a-zA-Z0-9\_\-]+)/', $route,$keys);

//remove the first element sense is no necesary
array_shift($keys);

//Assisgn value to key 
        for ($i = 0; $i < count($keys[0]);$i++) {
            $params[$keys[0][$i]] = $matchesParams [$i] [0];
        }
        $page = $currentRoute["page"];
    }

}

if ($page == null)
    $page = $routes ["error"];

    include_once( VISTAS . DT . $page);

//if ($page != null)
//    include_once (VISTAS . DT .  $page);
//    else   
//        include_once (VISTAS . DT . $routes["error"]);


