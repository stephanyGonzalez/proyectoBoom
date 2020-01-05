<?php

    //creacion de fichero
    $fname = "files/nuevo.txt";
    $file = fopen($fname,"w+");
    $mensaje = 'se creo el archivo correctamente';
    header('location:index.php?msg='.$mensaje);

    //agregar contenido al fichero
    $texto = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam consequuntur ab repellendus! Distinctio, odit asperiores vel animi, inventore blanditiis possimus eligendi illum voluptas non iure voluptatibus, aspernatur officia necessitatibus voluptate.";
    fwrite($file,$texto);

?>