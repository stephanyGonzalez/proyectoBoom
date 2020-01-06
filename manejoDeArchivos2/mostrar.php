<link rel="stylesheet" href="estilos.css">    
<div>
    <?php
        $aLineas = file("files/".$_GET["a"]);

        // Mostrar el contenido del archivo:
        foreach( $aLineas as $linea )
        echo $linea."<hr>";
            
    ?>

    <a href="index.php">Volver al index</a>
</div>