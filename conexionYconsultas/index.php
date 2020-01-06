<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="vendor\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="ESTILOS.css">
    <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">

    <title>Boom</title>

</head>
<body>
<!--     ************primer formulario*******************--> 
  <div>
      <h2>busca tu libro favorito</h2>
      <h3>por titulo o autor</h3>

      <form action="index.php" method="post" class="formBusquedas">
          <input type="text" name="busqueda" id="busqueda" placeholder="buscar libro">
          <input type="submit" value="buscar" class="btn_buscar" name="btn1">
      </form>
  </div>
  <hr>


<!--     ************segundo formulario*******************--> 
<div>
    <h2>inserta tu libro favorito</h2>
    <h3> titulo y autor</h3>

    <form action="index.php" method="post" class="formInsertar">
        <input type="text" name="tituloLibro" id="tituloLibro" placeholder="titulo ">
        <p></p>
        <input type="text" name="autorLibro" id="autorLibro" placeholder="autor">
        <p></p>
        <textarea name="descripcionLibro" id="descripcionLibro" placeholder="descripcion "></textarea>
        <p></p>

        <input type="submit" value="insertar" class="btn_insertar" name="btn2">
    </form>
  </div>
    <hr>

    <?php

        if(isset($_POST['btn2'])){
            include("conexion.php");

            $tituloLibro = $_POST["tituloLibro"];
            $descripcionLibro = $_POST["descripcionLibro"];
            $autorLibro = $_POST["autorLibro"];

            $conexion->query("INSERT INTO $tabla_db1(tituloLibro,descripcionLibro,autorLibro) values('$tituloLibro','$descripcionLibro', '$autorLibro')");

            include("cerrarConexion.php");
            echo"se ingreso el libro correctamente    ";
        }

       
        if(isset($_POST['btn1'])){
        
            include("conexion.php");

            $tituloLibro = $_POST["busqueda"];

            $resultadoConsulta = mysqli_query($conexion,"SELECT * FROM libros WHERE tituloLibro like '%$tituloLibro%'");
            while($consulta = mysqli_fetch_array($resultadoConsulta)){

                 echo
                 "
                 <table class='table table-dark'>
                 <thead>
                   <tr>
                     <th scope='col'>#</th>
                     <th scope='col'>Titulo libro</th>
                     <th scope='col'>autor</th>
                     <th scope='col'>descripcion</th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope='row'>1</th>
                     <td>".$consulta["tituloLibro"]."</td>
                     <td>".$consulta["autorLibro"]."</td>
                     <td>".$consulta["descripcionLibro"]."</td>
                   </tr>
                 </tbody>
               </table>
               
                " ;    
            }
            include("cerrarConexion.php");
        }
    ?>

    
   
    







        <script src="vendor\jQuery\jquery-3.1.1.min.js">   </script>
        <script src="vendor\popper\popper.min.js">    </script>
</body>
</html>