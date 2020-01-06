<?php

    require_once "claseCalculo.php";
    $calcular = new calculadora();
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $opcion = $_POST['opcion'];

    echo $calcular->calcularDatos($valor1,$valor2,$opcion);
?>