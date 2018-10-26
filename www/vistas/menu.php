
<html>
<head>
                <link rel="stylesheet" type="text/css"  href="<?=ROOT . DT . CSS . DT . 'main.css' ?>">



    
    
</head>
<body>

<div class='head'>
        <h1> Chicago Bulls </h1> 
        
     
        <?php
        session_start();
        $avatar = ($_POST["avatar"]);
        //echo $_COOKIE['CookieLogin']; // Prueba: muestra la cookie para comprobar si funciona y borra cerrar sesion,se cierra a la primera y se borra a la segunda
        ?>
        </div>
        <div class='menu'>
        
         <li > <a href='/'> Equipo </a> </li> 
         <li > <a href='/historia'> Historia </a> </li> 
         <li > <a href='/jugadores'> Jugadores </a> </li>
         <li > <a href='/registro'> registro </a> </li> 

<?php
        if(isset($_SESSION['CookieLogin'])){     // Si el usuario esta logeado se muestra la imagen 
                echo '<li> <img width="20" class="avatar" src="/avatares/'.jack.'.png" /> </li>';
                                                                //  echo '<li> <img width="20" class="avatar" src="/avatares/'.$avatar.'.png" /> </li>';  //dependiendo del login muestra su correspondiente imagen
       
                                                               echo "<li > <a href='/upload'> Upload </a> </li>";
 
                 } else {
                echo  "<li > <a href='/login'> Login </a> </li>";   // Si no esta logeado muestra la opcion de login para que se pueda logear              
        }

?>
  <li> <a>
    <form action='/' method="post" enctype="multipart/form-data"> 
      <input type="submit" name="logout" value="cerrar">
        </form> </a></li>

        </div>
        
        
        </div>
        </body>
        </html>