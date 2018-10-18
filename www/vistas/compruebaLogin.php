<?php
    
    $user = trim($_POST["user"]);
    $password = $_POST["password"];

    //primero leemos el fichero usuarios.txt y guardamos sus datos en un array
    $fichero = file(ROOT . DT . FICHEROS . DT . 'usuarios.txt');

    $usuarios = [];
    $i = 0;

    //Recorremos el array y guardamos sus datos en $usuarios
    foreach ($fichero as $ficheros) {

    $separar = explode(";" , $ficheros);
    $array4push = [
        $separar[0],        
        $separar[1],
        $separar[2] 
    ];
    
array_push($usuarios,$array4push);
    }
$usercookie = false;
$avatar1=null;
    foreach ($usuarios as $usuario) {
    if($user==$usuario[0] && crypt($password,$usuario[1])==$usuario[1])
    {
    $usercookie = true;
    $avatarV= $usuario[2];
    
    setcookie("CookieLogin",$user . ";" . $usuario[2] , time()+604800);
        
}
    }
 /*comprobamos los datos y creamos una cookie donde almacenamos el nombre
    de usuario y su avatar*/

    if ( $usercookie == true)   
    {
        session_start();
        $_SESSION['CookieLogin'];
    header('Location: /');     //redirigimos a la pagina principal
    } else {
        $_SESSION['fallo_login']='Los datos introducidos son incorrectos';
        header('Location: /login');
        
        exit();
    }
// mostramos mensaje de error si el usuario es incorrecto 
    


 
    

