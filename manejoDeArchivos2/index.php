<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="ESTILOS.css"> 
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
   

    <title>Archivos</title>
</head>
<body>

    <?php
        if (isset($_GET["msg"])) {
            echo $_GET["msg"];
        }
        
    ?>

    <!-- formulario crear -->
    <hr>
    <form action="crear.php" method="get" id="form">
        <label for="texto">Ingrese nombre del Archivo</label>
        <input type="text" name="nombreArchivo" id="">
        <p></p>
        <label for="texto">Ingrese texto</label>
        <input type="text" name="texto" id="">
        <p></p>
        <input type="submit" value="Crear Archivo">
    </form>
    <hr>
    <h1>Archivos Guardados</h1>
    
    <?php
    $aArchivos = opendir("files");
    while( $archivo = readdir($aArchivos) ) {
        if($archivo != '.' && $archivo != '..'){
        echo $archivo
    ?>
    
    <a href="eliminar.php?a=<?php echo $archivo; ?>">eliminar Archivo</a>
    <a href="mostrar.php?a=<?php echo $archivo; ?>">Mostar Contenido</a>
    <hr>
    <?php
        }
    }
    ?>
 

</body>
</html>