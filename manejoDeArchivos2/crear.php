<link rel="stylesheet" href="estilos.css">    


<?php
    //creacion de fichero
    $fname = "files/".$_GET["nombreArchivo"].".txt";
    $file = fopen($fname,"w+");
    $mensaje = '<h3>se creo el archivo correctamente</h3>';
    
    //agregar contenido al fichero
    $texto = $_GET["texto"];
    fwrite($file,$texto);

    header('location:index.php?msg='.$mensaje);
?>