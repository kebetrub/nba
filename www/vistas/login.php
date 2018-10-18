<html>
    <head>
 
</head>
<body>

<?php 
include "menu.php";
session_start();
?>

<div class="login">

<form action="/clogin" method="post" >

<input type="text" name="user" placeholder="Nombre" > <br>
<input type="text" name="password" placeholder="Password" > <br>
<input type="submit" value="Enviar">




</form>
</div>  
<?php 

?>

</body>
</html>