<?php

    //eliminacion de fichero de fichero
    $fname = nuevo.php;
    unlink($fname);
    $mensaje = 'se elimino el archivo correctamente';
    header('location:index.php?msg='.$mensaje);

?>