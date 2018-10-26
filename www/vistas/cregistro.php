
	<?php

	 

	 $host = "localhost";
	 $uName = "kevin";
	 $pass = "kevin";
	 $name = "nba";
	 $tName = "usuario";
	  
	 $form_pass = $_POST['password'];
     //  $form_pass = $_POST['username']; 
	  
	 $hash = password_hash($form_pass, PASSWORD_BCRYPT);
	 
 

    try {
        $conectar = new PDO ('mysql:host=localhost;dbname=nba', 'kevin', 'kevin');
        
    } catch (Exception $conectar) {
        echo "error al conectar";
    }

	 
	 $buscarUsuario = "SELECT * FROM $tName
	 WHERE nombre_usuario = '$_POST[username]' ";
	 
	 $result = $conectar->query($buscarUsuario);
	 
	 $contador = mysqli_num_rows($result);	 

	 if ($contador == 1) {
	 echo "<br />". "Ya existe el nombre de Usuario." . "<br />";

	 echo "<a href='index.html'> Acceder para crear otro distinto</a>";
	 }
	 else{
	 
	 $query = "INSERT INTO Usuarios (nombre_usuario, password)
	           VALUES ('$_POST[username]', '$hash')";
	 
	 if ($conexion->query($query) === TRUE) {
	  
	 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
	 echo "<h4>" . "Bienvenido: " . $_POST['username'] . "</h4>" . "\n\n";
	 echo "<h5>" . "Hacer Login: " . "<a href='login.html'>Login</a>" . "</h5>";
	 }
	 
	 else {
	 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error;
	   }
	 }
	 mysqli_close($conexion);
	?>