<html>
    <head>
 
</head>
<body>

<?php 
include "menu.php";
?>

<div class="form">

<form enctype="multipart/form-data" action="/uploadMethod" method="POST">


<input type="hidden" value="30000" name="MAX_FILE_SIZE" /> 
Enviar este fichero: <input name="fichero_usuario" type="file"/>
<input type="submit" value="Enviar fichero"/>




</form>
</div>  
<?php 

?>

</body>
</html>

