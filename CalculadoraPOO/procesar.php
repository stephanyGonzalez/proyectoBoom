<link rel="stylesheet" href="estilos.css">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">


<div class="resultado">
    <p>tu resultado es:</p>
    <div id="consulta">
    <?php

        
        require_once "claseCalculo.php";
        $calcular = new calculadora();
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $opcion = $_POST['opcion'];

        echo $calcular->calcularDatos($valor1,$valor2,$opcion);
        
    ?>
    </div>
</div>
