<?php

    //eliminacion de fichero de fichero
    $fname = "files/nuevo.txt";
    unlink($fname);
    $mensaje = 'se elimino el archivo correctamente';
    header('location:index.php?msg='.$mensaje);

?>