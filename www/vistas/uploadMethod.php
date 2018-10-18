<?php
$ruta = ROOT2 . DT . AVATARES . DT;

$fichero_subido = $ruta . basename($_FILES['fichero_usuario']['name']);


echo '<pre>';
if(move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)){
    echo " El fichero se subio correctamente.\n";
} else {
    echo " Error\n";
    echo 'Info:';
print_r($_FILES);

}
print "</pre>";


/*
$archivo = fopen($ruta, "a+");

$imagen = "Añadir texto."."\n";
$escribir = fwrite($archivo, $frase);
$archivo2 = fopen($ruta, "r");

$contenido = fread($archivo2, filesize($ruta));

echo $contenido;

fclose($archivo);
*/


?>



