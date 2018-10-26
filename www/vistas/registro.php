<html>
    <head>
 
</head>
<body>

<?php 
include "menu.php";
session_start();
?>




	 <div class="login">
	 <form action="/cregistro" method="post">


	 <h3>Crea una cuenta</h3>

	 <label for="nombre">Nombre de Usuario:</label><br>

	 <input type="text" name="username" maxlength="32" required>

	 <br/><br/>


	 <label for="pass">Password:</label><br>
	 <input type="password" name="password" maxlength="60" required>

	 

	 <br/><br/>

	 <input type="submit" name="submit" value="Registrarme">

	 <input type="reset" name="clear" value="Borrar">

	 

	 </form>

	 

	<hr /><br />

</div>  

<?php 

?>

</body>
</html>